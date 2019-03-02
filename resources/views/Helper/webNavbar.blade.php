<header class="header-style-3" style="background: #000">
    <div class="container">
        <div class="logo"> <a href="{{route('homeapge')}}"><img src="{{url('public/web/images/logo.png')}}" alt="" ></a> </div>

        <!-- Nav Header -->
        <nav class="navbar ownmenu">

            <!-- Categories -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
            </div>

            <!-- NAV -->
            <div class="collapse navbar-collapse" id="nav-open-btn">
                <ul class="nav">
                    <li class="dropdown megamenu active"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">For Home </a>
                        <div class="dropdown-menu animated-2s fadeInUpHalf">
                            <div class="mega-inside scrn">
                                <ul class="home-links">
                                    @foreach($categories->where('c_type','0') as $navItem)
                                        <li><a href="{{route('productBy.category',[$navItem->c_name])}}"><img style="border: 0px !important;width: 40px;height: 40px;"  src="{{url('public/web/images/router.svg')}}" alt="" ><br> <span>{{$navItem->c_name}}</span></a></li>
                                        @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown megamenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">For Business </a>
                        <div class="dropdown-menu animated-2s fadeInUpHalf">
                            <div class="mega-inside scrn">
                                <ul class="home-links">
                                    @foreach($categories->where('c_type','1') as $navItem)
                                        <li><a href="{{route('productBy.category',[$navItem->c_name])}}"><img style="border: 0px !important;width: 40px;height: 40px;"  src="{{url('public/web/images/router.svg')}}" alt="" ><br> <span>{{$navItem->c_name}}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{route('productBy.category',['Accessories'])}}">Accessories</a></li>
                    <li><a href="{{route('service.index')}}">Service</a></li>
                    <li><a href="{{route('profile.index')}}">Profile</a></li>
                    <li>
                        <div class="search-container">
                            <form action="{{route('product.search')}}" method="post">
                                @csrf
                                <input class="searchBox" type="text" placeholder="Search.." name="search">
                                {{--<button type="submit" id="submitSearch"><i class="fa fa-search"></i></button>--}}
                            </form>

                        </div>

                    </li>
                </ul>
            </div>
        </nav>

        <!-- Cart Part -->

    </div>
    <!-- Nav Bar -->
</header>

