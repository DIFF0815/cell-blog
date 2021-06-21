@inject('navPresenter', 'App\Presenters\NavigationPresenter')
@php
    $navigations = $navPresenter->simpleNavList();
@endphp
<div class="card">
    {{--<div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-navicon"></i>
            导航
        </h3>
    </div>--}}
    <!-- List group -->
    <ul class="list-group hot-list">
        @if ($navigations)
            <li class="d-flex justify-content-between align-items-center list-group-item list-group-item-action list-group-item-{{ $colorList[0] }}">
                <a href="/" ><i class="fa fa-fw fa-home"></i>首页</a>
            </li>

            @foreach ($navigations as $navigation)
                <li class="d-flex justify-content-between align-items-center list-group-item list-group-item-action list-group-item-{{ $colorList[($loop->index+1) % 8] }}">
                    <a href="{{ $navigation->url }}" target="{{ $navigation->target ? '_blank': '_self' }}">
                        <i class="fas fa-{{ $navigation->icon }}"></i>
                        {{ $navigation->name }}
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
</div>