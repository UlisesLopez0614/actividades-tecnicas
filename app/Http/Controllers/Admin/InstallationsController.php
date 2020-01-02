<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Installation\BulkDestroyInstallation;
use App\Http\Requests\Admin\Installation\DestroyInstallation;
use App\Http\Requests\Admin\Installation\IndexInstallation;
use App\Http\Requests\Admin\Installation\StoreInstallation;
use App\Http\Requests\Admin\Installation\UpdateInstallation;
use App\Models\Installation;
use App\Models\Technician;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class InstallationsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexInstallation $request
     * @return array|Factory|View
     */
    public function index(IndexInstallation $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Installation::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'activated', 'tecnico', 'equipo', 'placa', 'idgps', 'serie', 'imei', 'sim', 'ip', 'telefono', 'lugar', 'posicion', 'panico', 'cortemotor', 'otros', 'fecha', 'usuario'],

            // set columns to searchIn
            ['id', 'tecnico', 'equipo', 'placa', 'idgps', 'serie', 'imei', 'sim', 'ip', 'telefono', 'lugar', 'otros', 'observacion', 'usuario']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.installation.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.installation.create');
        $technician = Technician::get();
        //dd($technician);

        return view('admin.installation.create', [
            'technician' => Technician::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreInstallation $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreInstallation $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Installation
        $installation = Installation::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/installations'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/installations');
    }

    /**
     * Display the specified resource.
     *
     * @param Installation $installation
     * @throws AuthorizationException
     * @return void
     */
    public function show(Installation $installation)
    {
        $this->authorize('admin.installation.show', $installation);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Installation $installation
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Installation $installation)
    {
        $this->authorize('admin.installation.edit', $installation);


        return view('admin.installation.edit', [
            'installation' => $installation,
            'technician' => Technician::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateInstallation $request
     * @param Installation $installation
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateInstallation $request, Installation $installation)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Installation
        $installation->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/installations'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/installations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyInstallation $request
     * @param Installation $installation
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyInstallation $request, Installation $installation)
    {
        $installation->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyInstallation $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyInstallation $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Installation::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
