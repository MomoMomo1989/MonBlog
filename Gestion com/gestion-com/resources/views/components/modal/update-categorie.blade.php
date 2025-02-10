
    
    <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen" @keydown.esc.window="modalIsOpen = false" @click.self="modalIsOpen = false" class="fixed inset-0 z-50 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8" role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
        <form method="POST" action="" x-show="modalIsOpen" x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-md border   text-neutral-600  bg-[#ffffff] dark:text-neutral-300">
            @csrf
            <div class="px-4 py-8 mx-2"> 
                <p class="mb-10 text-slate-800"> Modifier le produit {{ $categories->nom }} </p>
                <div class="">

                    <div class="w-full max-w-sm min-w-[200px] flex flex-col  items-start mb-3">
                        <label class="block mb-2 text-sm text-slate-600">
                            Nom
                        </label>
                        <input type="text"  name="nom" class="w-[400px] bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-purple-500 hover:border-purple-300 shadow-sm focus:shadow" placeholder="Type here..." />
                    </div>
                       @error('nom')
                           <div class="text-red-500 text-sm mt-1 mb-2">{{ $message }}</div>
                       @enderror
                       
                       
    
                       
    
                       <div class=" mb-3 w-full max-w-sm min-w-[200px] flex flex-col  items-start">
                        <label class="block mb-2 text-sm text-slate-600">
                            Origine
                        </label>
                        <input type="text"  name="quantite_stock" class="w-[400px] bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-purple-500 hover:border-purple-300 shadow-sm focus:shadow" placeholder="Type here..." />
                       </div>
                       @error('quantite_stock')
                           <div class="text-red-500 text-sm mt-1 mb-2">{{ $message }}</div>
                       @enderror

                </div>
                      
            </div>
            
            <div class="flex flex-col-reverse justify-between gap-2 border-t border-[#616161] bg-neutral-50/20 p-4  sm:flex-row sm:items-center md:justify-end">
                <button @click="modalIsOpen = false" type="button" class="border-[#616161]  border-[1px] cursor-pointer whitespace-nowrap rounded-md bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white ">Annuler</button>
                <button  type="submit" class=" border-[#616161]  border-[1px] cursor-pointer whitespace-nowrap rounded-md bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white">Valider</button>
            </div>
        </form>
    </div>
