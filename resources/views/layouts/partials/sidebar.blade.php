<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">






    @foreach($menu_options as $item)

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#{{$item->slug.$item->id}}"
               aria-expanded="true" aria-controls="{{$item->slug.$item->id}}">
                <i class="{{$item->icon}}"></i>
                <span>{{$item->title}}</span>
            </a>
            <div id="{{$item->slug.$item->id}}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <a class="collapse-item" href="/{{$item->slug}}">لیست</a>
                      <a class="collapse-item" href="/{{$item->slug}}/create">ایجاد</a>
                </div>
            </div>
        </li>

    @endforeach

</ul>

