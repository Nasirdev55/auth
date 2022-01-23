<div class="headerbar">

    <!-- LOGO -->
    <div class="headerbar-left"  style="background: #293540;">
        <a href="" class="logo">
           <span id="logo">
               <img alt="Logo" src="{{asset('icons/lglogo.png')}}"/>
           </span>
            <span id="small-logo" style="width:40px;">
               <img alt="Logo" src="{{asset('icons/smlogo.png')}}"/>
           </span>
    </div>
<script>

</script>
    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">






            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('theme/images/avatars/admin.png')}}" alt="Profile image" class="avatar-rounded">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow">
                            @if(\Illuminate\Support\Facades\Auth::check())
                            <small>Hello, {{ \Illuminate\Support\Facades\Auth::user()->name }}</small>
                        </h5>
                    </div>
{{--                    <a href="{{route('edit-profile',['admin' => \Illuminate\Support\Facades\Auth::user()->id])}}"   class="dropdown-item notify-item">--}}
{{--                        <i class="fa fa-edit"></i><span>Profile</span>--}}
{{--                    </a>--}}

                    <!-- item-->


                    <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()" style="cursor: pointer">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                @endif

                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </li>
        </ul>

    </nav>

</div>
