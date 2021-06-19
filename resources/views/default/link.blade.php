@inject('linkPresenter', 'App\Presenters\LinkPresenter')
@php
    $links = $linkPresenter->linkList()
@endphp
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-users text-dark"></i>
            友情链接
            <span style="font-size:14px;">   特别鸣谢：
                <a href="https://github.com/Lruihao/cell-blog" target="_blank" >李瑞豪</a>
                <a href="https://Lruihao.cn" target="_blank" >李瑞豪博客</a>
            </span>
        </h3>
    </div>
    <div class="card-body">
        <ul class="list-inline link-list">
            @forelse ($links as $link)
                <li class="list-inline-item" title="{{ $link->url }}" data-toggle="tooltip" data-placement="bottom">
                    @if($link->avatar)
                        <img class="link-avatar rounded-circle" src="{{ url($link->avatar) }}" alt="{{ $link->name }}"/>
                    @else
                        <svg class="link-avatar rounded-circle"  aria-hidden="true">
                            <use xlink:href="#icon-{{ $loop->index + 1 }}"></use>
                        </svg>
                    @endif
                    <a href="{{ url($link->url) }}" target="_blank" rel="external nofollow noopener noreferrer">{{ $link->name }}</a>
                </li>
            @empty
                <p class="card-text">暂无友情链接！</p>
            @endforelse
        </ul>
    </div>
    <div class="card-footer text-center">
        <a href="{{ route('links') }}" class="btn btn-light">更多友链 »</a>
    </div>
</div>