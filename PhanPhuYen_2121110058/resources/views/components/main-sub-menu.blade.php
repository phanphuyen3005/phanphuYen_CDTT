@if (count($menus) > 0)
    <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="{{ $menurow->link }}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">{{ $menurow->name }}</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
            @foreach ($menus as $menu)
                <a class="dropdown-item" href="shop.html">{{ $menu->name }}</a>
            @endforeach
        </div>
    </li>
@else
    <li class="nav-item"><a href="{{ $menurow->link }}" class="nav-link">{{ $menurow->name }}</a></li>
@endif
