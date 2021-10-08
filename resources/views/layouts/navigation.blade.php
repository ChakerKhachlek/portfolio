<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"/>

<div class="min-h-screen flex flex-row bg-gray-100">
    <div class="flex flex-col w-56 bg-white rounded-r-3xl overflow-hidden">
        <div class="flex items-center justify-center h-20 shadow-md">
            <h1 class="text-3xl uppercase text-indigo-500">{{auth()->user()->name}}</h1>
        </div>
        <ul class="flex flex-col py-4">

            <li>
                <a href="#"
                   class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                            class="bx bx-user"></i></span>
                    <span class="text-sm font-medium">Manage profile</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                            class="bx bx-user"></i></span>
                    <span class="text-sm font-medium">Manage projects</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                            class="bx bx-user"></i></span>
                    <span class="text-sm font-medium">Manage experiences</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                            class="bx bx-user"></i></span>
                    <span class="text-sm font-medium">Manage services</span>
                </a>
            </li>

            <li>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf


                    <x-responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault();
                                                this.closest('form').submit();">

                        <div href="#"
                             class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                      <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                              class="bx bx-log-out"></i></span>
                            <span class="text-sm font-medium">
                         {{ __('Log Out') }}
                          </span>
                        </div>

                    </x-responsive-nav-link>


                </form>
            </li>
        </ul>
    </div>
</div>
