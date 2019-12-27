<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Gpstransfer\BulkDestroyGpstransfer;
use App\Http\Requests\Admin\Gpstransfer\DestroyGpstransfer;
use App\Http\Requests\Admin\Gpstransfer\IndexGpstransfer;
use App\Http\Requests\Admin\Gpstransfer\StoreGpstransfer;
use App\Http\Requests\Admin\Gpstransfer\UpdateGpstransfer;
use App\Models\Gpstransfer;
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

class GpstransfersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexGpstransfer $request
     * @return array|Factory|View
     */
    public function index(IndexGpstransfer $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Gpstransfer::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'activated', 'tecnico', 'nombre', 'placaanterior', 'placanueva', 'lugar', 'posicion', 'panico', 'cortemotor', 'otros', 'fecha', 'usuario'],

            // set columns to searchIn
            ['id', 'tecnico', 'nombre', 'placaanterior', 'placanueva', 'lugar', 'otros', 'observacion', 'usuario']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.gpstransfer.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.gpstransfer.create');

        return view('admin.gpstransfer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreGpstransfer $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreGpstransfer $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Gpstransfer
        $gpstransfer = Gpstransfer::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/gpstransfers'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/gpstransfers');
    }

    /**
     * Display the specified resource.
     *
     * @param Gpstransfer $gpstransfer
     * @throws AuthorizationException
     * @return void
     */
    public function show(Gpstransfer $gpstransfer)
    {
        $this->authorize('admin.gpstransfer.show', $gpstransfer);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Gpstransfer $gpstransfer
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Gpstransfer $gpstransfer)
    {
        $this->authorize('admin.gpstransfer.edit', $gpstransfer);


        return view('admin.gpstransfer.edit', [
            'gpstransfer' => $gpstransfer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateGpstransfer $request
     * @param Gpstransfer $gpstransfer
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateGpstransfer $request, Gpstransfer $gpstransfer)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Gpstransfer
        $gpstransfer->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/gpstransfers'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/gpstransfers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyGpstransfer $request
     * @param Gpstransfer $gpstransfer
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyGpstransfer $request, Gpstransfer $gpstransfer)
    {
        $gpstransfer->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyGpstransfer $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyGpstransfer $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Gpstransfer::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
