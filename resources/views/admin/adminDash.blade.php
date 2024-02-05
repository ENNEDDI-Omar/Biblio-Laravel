<x-app-layout>
    <div class="flex bg-gray-100 min-h-screen">
        <aside class="hidden sm:flex sm:flex-col">
            <a href="#" class="inline-flex items-center justify-center h-20 w-20 bg-purple-600 hover:bg-purple-500 focus:bg-purple-500">
                <svg fill="none" viewBox="0 0 64 64" class="h-12 w-12">
                    <title>Bibltheque</title>
                    <path fill="#fff" d="M48 3H8a5 5 0 00-5 5v48a5 5 0 005 5h40a5 5 0 005-5V8a5 5 0 00-5-5zm0 2a3 3 0 013 3v44a3 3 0 01-3 3H8a3 3 0 01-3-3V8a3 3 0 013-3h40zM16 10v4h4v-4h-4zm8 0v4h4v-4h-4zm8 0v4h4v-4h-4zm8 0v4h4v-4h-4zm0 8v4h4v-4h-4zm-8 0v4h4v-4h-4zm-8 0v4h4v-4h-4zm16 0v4h4v-4h-4zm0 8v4h4v-4h-4zm-16 0v4h4v-4h-4zm8 0v4h4v-4h-4zm8 0v4h4v-4h-4zm-8 0v4h4v-4h-4zm0 8v4h4v-4h-4zm8 0v4h4v-4h-4zm-16 0v4h4v-4h-4zm8 0v4h4v-4h-4z"></path>
                </svg>
            </a>
            <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
                <nav class="flex flex-col mx-4 my-6 space-y-4">
                    
                    <a href="#" class="inline-flex items-center justify-center py-3 text-purple-600 bg-white rounded-lg">
                        <span class="sr-only">Dashboard</span>
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </a>
                    <a href="{{ route('admin.users') }}" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                        <span class="sr-only">Users</span>
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2c2.76 0 5 2.24 5 5s-2.24 5-5 5-5-2.24-5-5 2.24-5 5-5zm0 2a3 3 0 100 6 3 3 0 000-6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 22H2M12.287 7.931a9.002 9.002 0 00-8.83 9.786h17.66a9.002 9.002 0 00-8.83-9.786z" />
                        </svg>
                        
                    </a>
                    <a href="{{ route('book.index') }}" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                        <span class="sr-only">Books</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3a2 2 0 012-2h10a2 2 0 012 2M5 3v18a2 2 0 002 2h10a2 2 0 002-2V3m-2 0h-8v18" />
                        </svg> 
                    </a>
                    
                    <a href="{{ route('reservation.index') }}" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                        <span class="sr-only">Reservations</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3a2 2 0 012-2h10a2 2 0 012 2M5 3v18a2 2 0 002 2h10a2 2 0 002-2V3m-2 0h-8v18" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5 5m0 0l5-5m-5 5V6"></path>
                        </svg> 
                    </a>
                </nav>
                <div class="inline-flex items-center justify-center h-20 w-20 border-t border-gray-700">
                    <button class="p-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                        <span class="sr-only">Settings</span>
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </aside>
        <div class="flex-grow text-gray-800">
            
            <main class="p-6 sm:p-10 space-y-6">
                <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                    <div class="mr-6">
                        <h1 class="text-4xl font-semibold mb-2">Admin-Dashboard</h1>
                
                    </div>
                    <div class="flex flex-wrap items-start justify-end -mb-3">
                        <button class="inline-flex px-5 py-3 text-purple-600 hover:text-purple-700 focus:text-purple-700 hover:bg-purple-100 focus:bg-purple-100 border border-purple-600 rounded-md mb-3">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-5 w-5 -ml-1 mt-0.5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                            Manage dashboard
                        </button>
                        <button class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Create new dashboard
                        </button>
                    </div>
                </div>
                <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">62</span>
                            <span class="block text-gray-500">Students</span>
                        </div>
                    </div>
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">6.8</span>
                            <span class="block text-gray-500">Average mark</span>
                        </div>
                    </div>
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                            </svg>
                        </div>
                        <div>
                            <span class="inline-block text-2xl font-bold">9</span>
                            <span class="inline-block text-xl text-gray-500 font-semibold">(14%)</span>
                            <span class="block text-gray-500">Underperforming students</span>
                        </div>
                    </div>
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">83%</span>
                            <span class="block text-gray-500">Finished homeworks</span>
                        </div>
                    </div>
                </section>
                <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-rows-3 xl:grid-flow-col gap-6">
                    <div class="flex flex-col md:col-span-2 md:row-span-2 bg-white shadow rounded-lg">
                        <div class="px-6 py-5 font-semibold border-b border-gray-100">Users:</div>
                        <div class="p-4 flex-grow">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>email</th>
                                        <th>Tél</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->prenom }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->tel }}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">25</span>
                            <span class="block text-gray-500">Lections left</span>
                        </div>
                    </div>
                    <div class="flex items-center p-8 bg-white shadow rounded-lg">
                        <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-teal-600 bg-teal-100 rounded-full mr-6">
                            <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-2xl font-bold">139</span>
                            <span class="block text-gray-500">Hours spent on lections</span>
                        </div>
                    </div>
                    <div class="row-span-3 bg-white shadow rounded-lg">
                        <div class="flex items-center justify-between px-6 py-5 font-semibold border-b border-gray-100">
                            <span>Books: </span>
                            <button type="button" class="inline-flex justify-center rounded-md px-1 -mr-1 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-600" id="options-menu" aria-haspopup="true" aria-expanded="true">
                                Total-Copies
                                <svg class="-mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- Refer here for full dropdown menu code: https://tailwindui.com/components/application-ui/elements/dropdowns -->
                        </div>
                        <div class="overflow-y-auto" style="max-height: 24rem;">
                            <ul class="p-6 space-y-6">
                                @foreach ($books as $book)
                                    
                                <li class="flex items-center">
                                    <div class="h-10 w-10 mr-3 bg-gray-100 rounded-full overflow-hidden">
                                        <img src="{{asset($book->couverture)}}" alt="Annette Watson profile picture">
                                    </div>
                                    <span class="text-gray-600"> {{$book->titre}} </span>
                                    <span class="ml-auto font-semibold"> {{$book->total_copies}} </span>
                                </li>
                                @endforeach
                              
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col row-span-3 bg-white shadow rounded-lg">
                        <div class="px-6 py-5 font-semibold border-b border-gray-100">Reservations:</div>
                        <div class="p-4 flex-grow">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Déscription:</th>
                                        <th>Date-Réservation</th>
                                        <th>Date-Retour</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $R)
                                    <tr>
                                        <td>{{ $R->description }}</td>
                                        <td>{{ $R->date_reservation }}</td>
                                        <td>{{ $R->date_retour }}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>   
                        </div>
                    </div>
                </section>
                <section class="text-right font-semibold text-gray-500">
                    <a href="#" class="text-purple-600 hover:underline">Recreated on Codepen</a> with <a href="https://tailwindcss.com/" class="text-teal-400 hover:underline">Tailwind CSS</a> by ENNEDDI Omar, <a href="https://dribbble.com/shots/10711741-Free-UI-Kit-for-Figma-Online-Courses-Dashboard" class="text-purple-600 hover:underline">original design</a> made by Chili Labs
                </section>
            </main>
        </div>
    </div>
</x-app-layout>