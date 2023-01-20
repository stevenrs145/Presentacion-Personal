
 @include('includes.head_prin')

    <div id="app">
        @include('includes.navbar_prin')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
                <main class="py-4 ">
                    @yield('content')
                </main>
        </div>
    </div>

@include('includes.footer_prin')
