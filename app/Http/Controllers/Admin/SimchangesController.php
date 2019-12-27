<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Simchange\BulkDestroySimchange;
use App\Http\Requests\Admin\Simchange\DestroySimchange;
use App\Http\Requests\Admin\Simchange\IndexSimchange;
use App\Http\Requests\Admin\Simchange\StoreSimchange;
use App\Http\Requests\Admin\Simchange\UpdateSimchange;
use App\Models\Simchange;
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

class SimchangesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexSimchange $request
     * @return array|Factory|View
     */
    public function index(IndexSimchange $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Simchange::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'activated', 'tecnico', 'nombre', 'placa', 'lugar', 'simanterior', 'simnuevo', 'posicion', 'panico', 'cortemotor', 'otros', 'fecha', 'usuario'],

            // set columns to searchIn
            ['id', 'tecnico', 'nombre', 'placa', 'lugar', 'simanterior', 'simnuevo', 'otros', 'observacion', 'usuario']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.simchange.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.simchange.create');

        return view('admin.simchange.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSimchange $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreSimchange $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Simchange
        $simchange = Simchange::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/simchanges'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/simchanges');
    }

    /**
     * Display the specified resource.
     *
     * @param Simchange $simchange
     * @throws AuthorizationException
     * @return void
     */
    public function show(Simchange $simchange)
    {
        $this->authorize('admin.simchange.show', $simchange);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Simchange $simchange
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Simchange $simchange)
    {
        $this->authorize('admin.simchange.edit', $simchange);


        return view('admin.simchange.edit', [
            'simchange' => $simchange,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSimchange $request
     * @param Simchange $simchange
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateSimchange $request, Simchange $simchange)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Simchange
        $simchange->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/simchanges'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/simchanges');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroySimchange $request
     * @param Simchange $simchange
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroySimchange $request, Simchange $simchange)
    {
        $simchange->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroySimchange $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroySimchange $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Simchange::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
