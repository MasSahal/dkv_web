<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="index.html">DKV<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="{{ asset('frontend') }}/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                @foreach ($menu as $m)
                    <?php
                    $submenu = DB::table('submenu')
                        ->where('id_menu', $m->id_menu)
                        ->get();
                    ?>

                    @if (count($submenu) > 0)
                        <li class="dropdown"><a href="#"><span>{{ $m->nama_menu }}</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                @foreach ($submenu as $sm)
                                    <li><a href="{{ $sm->slug_submenu }}">{{ $sm->nama_submenu }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li><a class="nav-link scrollto {{ url()->current() == $m->slug_menu ? 'active':''}}" href="{{ $m->slug_menu }}">{{ $m->nama_menu }}</a></li>
                    @endif
                @endforeach
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="#about" class="get-started-btn scrollto">Login</a>

    </div>
</header>
