
<div class="media align-items-center mw-250">
    @if (!is_null($company))
        <a href="{{ route('superadmin.companies.show', [$company->id]) }}" class="position-relative">
            <img src="{{ $company->logo_url }}" class="mr-2  taskEmployeeImg rounded"
                alt="{{ $company->company_name }}" title="{{ $company->company_name }}">
        </a>
        <div class="media-body">
            <h5 class="mb-0 f-12">
                <a href="{{ route('superadmin.companies.show', [$company->id]) }}"  class="text-darkest-grey">{{ ucfirst($company->company_name) }}</a>
            </h5>

            @if(module_enabled('Subdomain'))
                <p class="mb-0 f-12 text-dark-grey">
                    <a href="http://{{ $company->sub_domain }}"  class="text-dark-grey" target="_blank">{{ $company->sub_domain }}</a>
                </p>
             @endif
        </div>
    @else
        --
    @endif
</div>
