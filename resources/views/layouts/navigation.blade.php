{{-- <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav> --}}


<style>
    /* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,400&display=swap');

@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100&family=Inconsolata:wght@300&family=Roboto+Mono:ital@1&family=Sofia+Sans:wght@700&family=Space+Mono&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  scroll-behavior: smooth;
}

/* Custom Scroll Bar CSS */
::-webkit-scrollbar {
  width: 10px;
}

::-webkit-scrollbar-track {
  background: #e9e7e7;
}

::-webkit-scrollbar-thumb {
  background: #94dec3;
  border-radius: 12px;
  transition: all 0.3s ease;
}

::-webkit-scrollbar-thumb:hover {
  background: #94dec3;
}

/* navbar styling */
nav {
  position: fixed;
  width: 100%;
  z-index: 1000;
  transition: all 0.3s ease;
  font-family: 'Space Mono', monospace;
  background: #cff5e7;
  box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
}

nav.sticky {
  background: #94dec3;
  padding: 13px 0;
}

nav .navbar {
  width: 100%;
  display: flex;
  text-align: center;
  justify-content: center;
}

nav .navbar .logo {
  display: flex;
}

nav .navbar .logo p {
  padding: 25px;
  font-family: 'Poppins', sans-serif;
  font-weight: 400;
}

nav .navbar .logo a {
  font-weight: 600;
  font-size: 25px;
  color: #000000;
}

nav.sticky .navbar .logo a {
  color: rgb(6, 6, 6);
}

nav .navbar .menu {
  display: flex;

}

nav .navbar .menu li {
  list-style: none;
  margin: 0 45px;
  padding-top: 1.5rem;
}

.navbar .menu a {
  font-size: 15px;
  font-weight: 200;
  color: #000000;
  padding: 6px 0;
  transition: all 0.4s ease;
  text-decoration: none;
  padding: 3px;
}

.navbar .menu a:hover {
  color: #0a335d;
}

nav.sticky .menu a {
  color: rgb(0, 0, 0);
}

nav.sticky .menu a:hover {
  color: #0a335d;
}

.navbar .media-icons a {
  color: #4070f4;
  font-size: 18px;
  margin: 0 6px;
}

nav.sticky .media-icons a {
  color: #FFF;
}

/*button */
.btn-c {
  position: relative;
  top: -14px;
}

.btn-conn {
  font-family: 'Sofia Sans', sans-serif;
  font-weight: 900;
  display: inline-block;
  outline: none;
  cursor: pointer;
  font-size: 13px;
  border-radius: 200px;
  transition-property: background-color, border-color, color, box-shadow, filter;
  transition-duration: .4s;
  border: 1px solid transparent;
  letter-spacing: 2px;
  min-width: 200px;
  text-transform: uppercase;
  white-space: normal;
  font-weight: 200;
  text-align: center;
  padding: 10px 18px;
  color: #fff;
  background-color: #0a335d;
  height: 48px;
}

.btn-conn:hover {

  background-color: #496786;
}

/* Side Navigation Menu Button CSS */
nav .menu-btn,
.navbar .menu .cancel-btn {
  position: absolute;
  color: #cff5e7;
  right: 30px;
  top: 20px;
  font-size: 50px;
  cursor: pointer;
  transition: all 0.3s ease;
  display: none;
}

nav .menu-btn {
  color: #000000;
}

nav.sticky .menu-btn {
  color: rgb(0, 0, 0);
}

.navbar .menu .menu-btn {
  color: rgb(255, 255, 255);
}
</style>

<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="">
        <div class="">
            

            <!-- Settings Dropdown -->
            <div >
               
                    <nav>
                    <div class="navbar" >
                        <div class="logo"><img src="Logo.svg" alt="" width="80">
                            <p>DR. ALEX PALLO</p>
                        </div>
                        <ul class="menu">
                            <li><a href="/docterproject/public/home">Accueil</a></li>
                            <li><a href="/docterproject/public/rendezvous">Rondez-vous</a></li>
                            <li><a href="/docterproject/public/hisdoc">Archive</a></li>
                            <li><a href="/docterproject/public/blog">Blog</a></li>
                            
                                
                        <x-dropdown align="" width="48">
                                <x-slot name="trigger" >
                                    <button style="background-color: #1c2c74ee;margin-left:100px;padding:10px 40px; margin-top:20px;" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>
            
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>
            
                                <x-slot name="content" >
                                    <x-dropdown-link :href="route('profile.edit')" style="padding:10px 40px; ">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
            
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
            
                                        <x-dropdown-link :href="route('logout')" style="padding:10px 40px;"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>


                           
                            <div class="cancel-btn">
                                <i class="uil uil-times"></i>
                            </div>
                        </ul>
                        <div class="menu-btn">
                            <i class="uil uil-align-center-alt" style="color: black;"></i>
                        </div>
                </nav>
                   
                
               <script src="script.js"></script>
            </div>

            
           
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
