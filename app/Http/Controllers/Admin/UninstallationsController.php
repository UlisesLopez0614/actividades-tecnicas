<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Uninstallation\BulkDestroyUninstallation;
use App\Http\Requests\Admin\Uninstallation\DestroyUninstallation;
use App\Http\Requests\Admin\Uninstallation\IndexUninstallation;
use App\Http\Requests\Admin\Uninstallation\StoreUninstallation;
use App\Http\Requests\Admin\Uninstallation\UpdateUninstallation;
use App\Models\Uninstallation;
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

class UninstallationsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexUninstallation $request
     * @return array|Factory|View
     */
    public function index(IndexUninstallation $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Uninstallation::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'activated', 'tecnico', 'nombre', 'placa', 'lugar', 'fecha', 'usuario'],

            // set columns to searchIn
            ['id', 'tecnico', 'nombre', 'placa', 'lugar', 'observacion', 'usuario']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.uninstallation.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.uninstallation.create');

        return view('admin.uninstallation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUninstallation $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreUninstallation $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Uninstallation
        $uninstallation = Uninstallation::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/uninstallations'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/uninstallations');
    }

    /**
     * Display the specified resource.
     *
     * @param Uninstallation $uninstallation
     * @throws AuthorizationException
     * @return void
     */
    public function show(Uninstallation $uninstallation)
    {
        $this->authorize('admin.uninstallation.show', $uninstallation);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Uninstallation $uninstallation
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Uninstallation $uninstallation)
    {
        $this->authorize('admin.uninstallation.edit', $uninstallation);


        return view('admin.uninstallation.edit', [
            'uninstallation' => $uninstallation,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUninstallation $request
     * @param Uninstallation $uninstallation
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateUninstallation $request, Uninstallation $uninstallation)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Uninstallation
        $uninstallation->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/uninstallations'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/uninstallations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyUninstallation $request
     * @param Uninstallation $uninstallation
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyUninstallation $request, Uninstallation $uninstallation)
    {
        $uninstallation->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyUninstallation $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyUninstallation $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Uninstallation::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
