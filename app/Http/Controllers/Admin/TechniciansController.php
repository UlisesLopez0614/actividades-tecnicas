<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Technician\BulkDestroyTechnician;
use App\Http\Requests\Admin\Technician\DestroyTechnician;
use App\Http\Requests\Admin\Technician\IndexTechnician;
use App\Http\Requests\Admin\Technician\StoreTechnician;
use App\Http\Requests\Admin\Technician\UpdateTechnician;
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

class TechniciansController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexTechnician $request
     * @return array|Factory|View
     */
    public function index(IndexTechnician $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Technician::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nombre', 'apellido'],

            // set columns to searchIn
            ['id', 'nombre', 'apellido']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.technician.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.technician.create');

        return view('admin.technician.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTechnician $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreTechnician $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Technician
        $technician = Technician::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/technicians'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/technicians');
    }

    /**
     * Display the specified resource.
     *
     * @param Technician $technician
     * @throws AuthorizationException
     * @return void
     */
    public function show(Technician $technician)
    {
        $this->authorize('admin.technician.show', $technician);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Technician $technician
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Technician $technician)
    {
        $this->authorize('admin.technician.edit', $technician);


        return view('admin.technician.edit', [
            'technician' => $technician,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTechnician $request
     * @param Technician $technician
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateTechnician $request, Technician $technician)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Technician
        $technician->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/technicians'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/technicians');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyTechnician $request
     * @param Technician $technician
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyTechnician $request, Technician $technician)
    {
        $technician->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyTechnician $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyTechnician $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Technician::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
