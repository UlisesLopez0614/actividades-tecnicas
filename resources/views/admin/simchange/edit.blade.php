@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.simchange.actions.edit', ['name' => $simchange->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <simchange-form
                :action="'{{ $simchange->resource_url }}'"
                :data="{{ $simchange->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.simchange.actions.edit', ['name' => $simchange->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.simchange.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </simchange-form>

        </div>
    
</div>

@endsection