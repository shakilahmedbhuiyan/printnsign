<div id="logo-sidebar" x-show="sidebar" :class="{ 'fixed': sidebar, 'absolute': !sidebar }"
    class="sm:w-60 w-1/2 h-full top-0 left-0 pt-20 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700 overflow-y-auto transition-all duration-300 ease-in-out">
    <div class="h-full px-3 pb-4 bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('admin.dashboard') }}" wire:navigate
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
                    <span
                        class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                </a>
            </li>
            @can('user-list')
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                    </a>
                </li>
            @endcan
            @can('role-list')
                <li>
                    <a href="{{ route('admin.roles.index') }}" wire:navigate
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96.000000 96.000000"
                            preserveAspectRatio="xMidYMid meet"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400
                    group-hover:text-gray-900 dark:group-hover:text-white">
                            <g transform="translate(0.000000,96.000000) scale(0.050000,-0.050000)" fill="currentColor"
                                stroke="none">
                                <path
                                    d="M390 1782 c-236 -103 -166 -452 90 -452 292 0 318 430 28 461 -43 5 -96 1 -118 -9z" />
                                <path
                                    d="M950 1782 c-236 -103 -166 -452 90 -452 292 0 318 430 28 461 -43 5 -96 1 -118 -9z" />
                                <path
                                    d="M163 1194 c-60 -65 -64 -496 -5 -624 82 -180 273 -253 462 -177 45 17 79 38 75 45 -94 171 -135 628 -68 767 30 62 -404 52 -464 -11z" />
                                <path
                                    d="M723 1194 c-108 -116 -47 -645 87 -751 78 -61 80 -58 81 92 2 254 177 457 427 497 99 16 115 90 36 165 -73 68 -566 66 -631 -3z" />
                                <path
                                    d="M1312 892 c-35 -83 -94 -118 -182 -108 -99 11 -152 -80 -91 -157 22 -29 41 -77 41 -107 0 -30 -19 -78 -41 -107 -61 -77 -8 -168 91 -157 88 10 147 -25 182 -108 41 -98 135 -98 176 0 35 83 94 118 182 108 99 -11 152 80 91 157 -52 67 -52 147 0 214 61 77 8 168 -91 157 -88 -10 -147 25 -182 108 -23 56 -39 68 -88 68 -49 0 -65 -12 -88 -68z m168 -292 c22 -22 40 -58 40 -80 0 -100 -128 -152 -200 -80 -22 22 -40 58 -40 80 0 22 18 58 40 80 22 22 58 40 80 40 22 0 58 -18 80 -40z" />
                            </g>
                        </svg>

                        <span class="flex-1 ml-3 whitespace-nowrap">Roles</span>
                    </a>
                </li>
            @endcan
        </ul>
    </div>
</div>
