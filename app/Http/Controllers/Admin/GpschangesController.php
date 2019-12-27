<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Gpschange\BulkDestroyGpschange;
use App\Http\Requests\Admin\Gpschange\DestroyGpschange;
use App\Http\Requests\Admin\Gpschange\IndexGpschange;
use App\Http\Requests\Admin\Gpschange\StoreGpschange;
use App\Http\Requests\Admin\Gpschange\UpdateGpschange;
use App\Models\Gpschange;
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

class GpschangesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexGpschange $request
     * @return array|Factory|View
     */
    public function index(IndexGpschange $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Gpschange::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'activated', 'tecnico', 'nombre', 'placa', 'lugar', 'idgpsanterior', 'seriegpsanterior', 'tipogpsanterior', 'idgpsnuevo', 'seriegpsnuevo', 'imeigpsnuevo', 'ipgpsnuevo', 'simgpsnuevo', 'telefonogpsnuevo', 'tipogpsnuevo', 'posicion', 'panico', 'cortemotor', 'otros', 'fecha'],

            // set columns to searchIn
            ['id', 'tecnico', 'nombre', 'placa', 'lugar', 'idgpsanterior', 'seriegpsanterior', 'tipogpsanterior', 'idgpsnuevo', 'seriegpsnuevo', 'imeigpsnuevo', 'ipgpsnuevo', 'simgpsnuevo', 'telefonogpsnuevo', 'tipogpsnuevo', 'otros', 'observacion']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.gpschange.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.gpschange.create');

        return view('admin.gpschange.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreGpschange $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreGpschange $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Gpschange
        $gpschange = Gpschange::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/gpschanges'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/gpschanges');
    }

    /**
     * Display the specified resource.
     *
     * @param Gpschange $gpschange
     * @throws AuthorizationException
     * @return void
     */
    public function show(Gpschange $gpschange)
    {
        $this->authorize('admin.gpschange.show', $gpschange);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Gpschange $gpschange
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Gpschange $gpschange)
    {
        $this->authorize('admin.gpschange.edit', $gpschange);


        return view('admin.gpschange.edit', [
            'gpschange' => $gpschange,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateGpschange $request
     * @param Gpschange $gpschange
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateGpschange $request, Gpschange $gpschange)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Gpschange
        $gpschange->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/gpschanges'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/gpschanges');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyGpschange $request
     * @param Gpschange $gpschange
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyGpschange $request, Gpschange $gpschange)
    {
        $gpschange->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyGpschange $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyGpschange $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Gpschange::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
