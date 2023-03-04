<nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 "
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
            href=""
            >MOSCONNECT</a
          ><button
            class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
            type="button"
            onclick="toggleNavbar('example-collapse-navbar')"
          >
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div
          class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
          <ul class="flex flex-col lg:flex-row list-none mr-auto">
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#"
                ><i
                  class="lg:text-gray-300 text-gray-500 fa fa-bookmark text-lg leading-lg mr-2"
                ></i>
                Panduan</a
              >
            </li>
          </ul>
          <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#"
                ><i
                  class="lg:text-gray-300 text-gray-500 fa fa-server text-lg leading-lg mr-2"
                ></i>
                Data</a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#"
                ><i
                  class="lg:text-gray-300 text-gray-500 fa fa-book text-lg leading-lg mr-2"
                ></i>
                Akademik</a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#"
                ><i
                  class="lg:text-gray-300 text-gray-500 fa fa-notes-medical text-lg leading-lg mr-2"
                ></i>
                Kesehatan</a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#"
                ><i
                  class="lg:text-gray-300 text-gray-500 fa fa-users text-lg leading-lg mr-2"
                ></i>
                Alumni</a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#"
                ><i
                  class="lg:text-gray-300 text-gray-500 fa fa-flag text-lg leading-lg mr-2"
                ></i>
                KBRI</a
              >
            </li>
            @if (Route::has('login'))
            <li class="flex items-center">
              @auth
              <a href="{{ url('/dashboard') }}"
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#"
                ><i
                  class="lg:text-gray-300 text-gray-500 fa fa-home text-lg leading-lg mr-2"
                ></i>
                {{ Auth::user()->name }}</a
              >
              <a href="{{ url('/profile') }}"
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#"
                ><i
                  class="lg:text-gray-300 text-gray-500 fa fa-user text-lg leading-lg mr-2"
                ></i>
                Profil</a
              >
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="lg:text-white lg:hover:text-g-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold">
                      <i class="lg:text-gray-300 text-gray-500 fa fa-power-off text-lg leading-lg mr-2"></i>Logout
                  </button>
              </form>
              @else
              <a href="{{ route('login') }}"
              <button
                class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                type="button"
                style="transition: all 0.15s ease 0s;"
              >
                <i class="fas fa-key"></i> Login
              </button>
              </a>
              @if (Route::has('register'))
              <a href="{{ url('/register') }}"
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#"
                ><i
                  class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"
                ></i>
                Register</a
              >
              @endif
              @endauth
            </li>
            @endif
          </ul>
        </div>
      </div>
      
    </nav>
    