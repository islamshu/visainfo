<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        {{-- @if (auth()->user()->type != 'famous' || auth()->user()->famous == null) --}}
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
              
            <li class="nav-item ">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-tachometer"></i>
                    <span class="menu-title"> الرئيسية  </span></a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('chalites.index') }}">
                    <i class="fa fa-home"></i>
                    <span class="menu-title"> الشاليهات  </span></a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('get_setting') }}">
                    <i class="fa fa-cogs"></i>
                    <span class="menu-title"> الاعدادات  </span></a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('contacts.index') }}">
                    <i class="fa fa-phone"></i>
                    <span class="menu-title"> طلبات التواصل  </span></a>
            </li>
            
            
            


            {{-- <li class="nav-item  ">
            <a href="{{ route('users.index') }}">
                <i class="fa fa-pencil"></i>
                <span class="menu-title">المستخدمين </span></a>
        </li>         --}}


        </ul>
    </div>
</div>
