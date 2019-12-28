<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Homologation\BulkDestroyHomologation;
use App\Http\Requests\Admin\Homologation\DestroyHomologation;
use App\Http\Requests\Admin\Homologation\IndexHomologation;
use App\Http\Requests\Admin\Homologation\StoreHomologation;
use App\Http\Requests\Admin\Homologation\UpdateHomologation;
use App\Models\Homologation;
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

class HomologationsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexHomologation $request
     * @return array|Factory|View
     */
    public function index(IndexHomologation $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Homologation::class)->processRequestAndGet(
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

        return view('admin.homologation.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.homologation.create');

        return view('admin.homologation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreHomologation $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreHomologation $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Homologation
        $homologation = Homologation::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/homologations'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/homologations');
    }

    /**
     * Display the specified resource.
     *
     * @param Homologation $homologation
     * @throws AuthorizationException
     * @return void
     */
    public function show(Homologation $homologation)
    {
        $this->authorize('admin.homologation.show', $homologation);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Homologation $homologation
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Homologation $homologation)
    {
        $this->authorize('admin.homologation.edit', $homologation);


        return view('admin.homologation.edit', [
            'homologation' => $homologation,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateHomologation $request
     * @param Homologation $homologation
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateHomologation $request, Homologation $homologation)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Homologation
        $homologation->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/homologations'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/homologations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyHomologation $request
     * @param Homologation $homologation
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyHomologation $request, Homologation $homologation)
    {
        $homologation->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyHomologation $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyHomologation $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Homologation::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
