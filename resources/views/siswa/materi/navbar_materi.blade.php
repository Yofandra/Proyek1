<div class="sm:w-1/2 xl:w-1/4 border-2">
    <div class="items-center px-2 py-2 rounded-md bg-white h-screen fixed">
        <div class="p-2 rounded-full bg-grey-600 bg-opacity-20 h-full">
            <div class="p-2 flex items-center">
                <i class="fas fa-book fa-2x" style="color:#000000"></i>
                <h5 class="text-center ml-3">Daftar Materi</h5>
            </div>
            
                <a href="{{ route('materi.pengenalan')}}" class="block px-4 py-2 text-black hover:no-underline hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-green-logo">Pengenalan Klasifikasi Hewan</a>
                        <!-- <a href="#" class="block px-4 py-2 text-black hover:no-underline hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-green-logo">Dashboard</a> -->
                        <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="bottom-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-green-logo">
                            <p>Vertebrata <i class="fa fa-caret-right"></i> </p>
                        </button>
                        <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
                                <li>
                                    <a href="{{ route('materi.darahPanas')}}" class="block px-4 py-2 text-black hover:no-underline hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-green-logo">Berdarah Panas</a>
                                </li>
                                <li>
                                    <a href="{{ route('materi.darahDingin')}}" class="block px-4 py-2 text-black hover:no-underline hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-green-logo">Berdarah Dingin</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <a href="#" class="block px-4 py-2 text-black hover:no-underline hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-green-logo">Settings</a> -->
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" data-dropdown-placement="bottom-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:text-green-logo">
                            <p>Invertebrata <i class="fa fa-caret-right"></i> </p>
                        </button>
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
                                <li>
                                    <a href="{{ route('materi.memilikiKaki')}}" class="block px-4 py-2 text-black hover:no-underline hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-green-logo">Memiliki Kaki</a>
                                </li>
                                <li>
                                    <a href="{{ route('materi.tanpaKaki')}}" class="block px-4 py-2 text-black hover:no-underline hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-green-logo">Tidak Berkaki</a>
                                </li>
                            </ul>
                        </div>
                        
        </div>
    </div>
</div>

