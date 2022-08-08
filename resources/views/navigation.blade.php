{{-- @if (Route::has('login')) --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <a class="navbar-brand" href="#">AjaxCrud</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @auth
                    {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout <span class="sr-only">(current)</span></a>
                    </li> --}}
                @else
                    {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Log in</a>
                    </li>
                    @if (Route::has('register')) --}}
                        {{-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Register <span class="sr-only">(current)</span></a>
                        </li>
                    @endif --}}
                @endauth
            </ul>
        </div>
        @auth
            <span class="navbar-text">
                <ul class="navbar-nav mr-auto">
                    {{-- <li class="nav-item">
                        <a class="nav-link active">UserName : {{ Auth::user()->name }}<span class="sr-only">(current)</span></a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Logout <span class="sr-only">(current)</span></a>
                    </li> --}}
                </ul>
            </span>
        @endauth
    </nav>
{{-- @endif --}}
