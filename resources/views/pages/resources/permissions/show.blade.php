<x-app-layout>
    @if ($errors->any())
        <div id="is_invalid__"></div>
    @endif
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar pt-6 pb-2" style="background-color: #f6f6f6;}">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <!--begin::Toolbar wrapper-->
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                        {{ __('Detail Permission') }}
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid" style="background-color: #f6f6f6;}">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid"
             style="padding-left: 0px!important; padding-right: 0px!important">
            <!--begin::Card-->
            <div class="card table-responsive">
                <!--begin::Card header-->

                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Details container-->
                    <div class="container">
                        <!--begin::Details-->
                        <div class="">
                            <div class="col-lg-6">
                                <div class="mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">{{ __("Name") }}</label>
                                    <div class="text-dark fw-bold">{{ $permission->name }}</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">{{ __("Guard Name") }}</label>
                                    <div class="text-dark fw-bold">{{ $permission->guard_name }}</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">{{ __("Total Role Attached") }}</label>
                                    <div class="text-dark fw-bold">{{ $rolesCount }}</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">{{ __("List Role Attached") }}</label>
                                    <ul>
                                        @foreach($rolesAttached as $role)
                                            <li class="p-2">
                                                <a href="{{ route('resources.roles.show', ['role' => $role->id]) }}">
                                                    <h6 class="card-title mb-0 text-black text"
                                                        style="text-decoration: underline;">{{ $role->name }}</h6>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Details container-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <a href="{{ route('resources.roles.index') }}">
                            <button type="button" class="btn btn-light">{{ __("Back") }}</button>
                        </a>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</x-app-layout>
