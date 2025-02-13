@push('icons')
    <link rel="apple-touch-icon" href="{{asset('assets/img/language-svgrepo-com.svg')}}" sizes="180x180">
    <link rel="icon" href="{{asset('assets/img/language-svgrepo-com.svg')}}" sizes="32x32">
    <link rel="icon" href="{{asset('assets/img/language-svgrepo-com.svg')}}" sizes="16x16">
    <link rel="icon" href="{{asset('assets/img/language-svgrepo-com.svg')}}" sizes="16x16">
    <link rel="mask-icon" href="{{asset('assets/img/language-svgrepo-com.svg')}}">
    <link rel="icon" href="{{asset('assets/img/language-svgrepo-com.svg')}}">
@endpush
@push('styles')
    <link type="text/css" href="/css/volt.css" rel="stylesheet">
@endpush
<main>
    <title>Languages</title>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Languages</li>
                </ol>
            </nav>
            <h2 class="h4">Languages</h2>
            <p class="mb-0">List of languages supported on the website</p>
        </div>
    </div>
    <div class="table-settings mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col col-md-6 col-lg-3 col-xl-4">
                <form action="{{route('languages')}}" method="GET">
                    <div class="input-group me-2 me-lg-3 fmxw-400">
                    <span class="input-group-text">
                        <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </span>
                        <input name="search" type="search" class="form-control" placeholder="Search label"/>
                    </div>
                </form>
            </div>
            <div class="col-4 col-md-2 col-xl-1 ps-md-0 text-end">
                <div class="dropdown">
                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0">
                        <span class="small ps-3 fw-bold text-dark">Show</span>
                        @php
                            $size = request()->get('size', 10);
                            if(!in_array($size, $pageSizes)){
                                $size = 10;
                            }
                        @endphp
                        @foreach($pageSizes as $pageSize)
                            <a class="dropdown-item d-flex align-items-center fw-bold"
                               href="{{route('languages', ['size' => $pageSize])}}">
                                {{$pageSize}}
                                @if($pageSize == $size)
                                    <svg class="icon icon-xxs ms-auto" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                @endif
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th class="border-gray-200">#</th>
                <th class="border-gray-200">Name</th>
                <th class="border-gray-200">Native Name</th>
                <th class="border-gray-200">Status</th>
                <th class="border-gray-200">Action</th>
            </tr>
            </thead>
            <tbody>
            @if($languages->isNotEmpty())
                @foreach ($languages as $language)
                    <tr>
                        <td>
                            <span class="fw-normal">{{$language->id}}</span>
                        </td>
                        <td>
                            <span class="fw-normal">{{$language->name}}</span>
                        </td>
                        <td><span class="fw-normal">{{$language->native_name}}</span></td>
                        <td>
                            <span class="fw-bold @if($language->status === 1) text-success @else text-warning @endif">
                                @if($language->status === 1)
                                    Active
                                @else
                                    Inactive
                                @endif
                            </span>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                                </button>
                                <div class="dropdown-menu py-0">
                                    <button wire:click="changeStatus({{$language}})"
                                            class="dropdown-item rounded-top @if($language->status === 1) text-warning @else text-success @endif">
                                        <span class="fas fa-edit me-2"></span>
                                        @if($language->status === 1)
                                            Inactive
                                        @else
                                            Active
                                        @endif
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">No records</td>
                </tr>
            @endif
            </tbody>
        </table>

        <div style="padding-right:0" class="card-footer pt-4 border-0 d-flex align-items-center justify-content-start">
            {{$languages->links()}}
        </div>
    </div>
</main>
