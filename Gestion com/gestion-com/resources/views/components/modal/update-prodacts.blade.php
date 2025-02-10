
    
    <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen" @keydown.esc.window="modalIsOpen = false" @click.self="modalIsOpen = false" class="fixed inset-0 z-50 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8" role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
        <form method="POST" action="" x-show="modalIsOpen" x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-md border   text-neutral-600  bg-[#ffffff] dark:text-neutral-300">
            @csrf
            <div class="px-4 py-8 mx-2"> 
                {{-- <p class="mb-10 text-slate-800"> Modifier le produit {{ $produit->nom }} </p> --}}
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
                            Prix Achat
                        </label>
                        <input type="number"  name="prix_achat" class="w-[400px] bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-purple-500 hover:border-purple-300 shadow-sm focus:shadow" placeholder="Type here..." />
                       </div>
                       @error('prix_achat')
                           <div class="text-red-500 text-sm mt-1 mb-2">{{ $message }}</div>
                       @enderror
    
                       <div class=" mb-3 w-full max-w-sm min-w-[200px] flex flex-col  items-start">
                        <label class="block mb-2 text-sm text-slate-600">
                            Prix Vente
                        </label>
                        <input type="number"  name="prix_vente" class="w-[400px] bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-purple-500 hover:border-purple-300 shadow-sm focus:shadow" placeholder="Type here..." />
                       </div>
                       @error('prix_vente')
                           <div class="text-red-500 text-sm mt-1 mb-2">{{ $message }}</div>
                       @enderror
    
                       <div class=" mb-3 w-full max-w-sm min-w-[200px] flex flex-col  items-start">
                        <label class="block mb-2 text-sm text-slate-600">
                            Quantite
                        </label>
                        <input type="number"  name="quantite_stock" class="w-[400px] bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-purple-500 hover:border-purple-300 shadow-sm focus:shadow" placeholder="Type here..." />
                       </div>
                       @error('quantite_stock')
                           <div class="text-red-500 text-sm mt-1 mb-2">{{ $message }}</div>
                       @enderror

                </div>
                   
                <div class=" mb-3 w-full max-w-sm min-w-[200px] flex flex-col  items-start">
                    <label class="block mb-2 text-sm text-slate-600">
                        barcode
                    </label>
                    <input type="text"  name="barcode" class="w-[400px] bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-purple-500 hover:border-purple-300 shadow-sm focus:shadow" placeholder="Type here..." />
                   </div>
                   @error('barcode')
                       <div class="text-red-500 text-sm mt-1 mb-2">{{ $message }}</div>
                   @enderror
                   <div class="w-full max-w-sm min-w-[200px] mb-4">    
                    <label class="block mb-1 text-sm text-slate-800">
                      Categorie
                    </label>
                   <div class="relative">
                    <select name="categorie_id"
                        class="w-[400px] bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded pl-3 pr-8 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer">
                        @foreach ($categories as $categorie)
                        <option value={{ $categorie->id }}>{{ $categorie->nom }} </option>
                        @endforeach
                    </select>
                    
                  </div>
                  <p class="flex items-center mt-2 text-xs text-slate-500">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      class="w-5 h-5 mr-2"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                    Si la categorie n'existe pas ajoutez la dans la partie des categories
                     </p>
                   </div>
                    
                   <div class="w-full max-w-sm min-w-[200px] mb-4">    
                    <label class="block mb-1 text-sm text-slate-800">
                      Marque
                    </label>
                   
                    <div class="relative">
                      <select name="brand_id"
                          class="w-[400px] bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded pl-3 pr-8 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer">
                          @foreach ($brands as $brand)
                          <option value={{ $brand->id }}>{{ $brand->nom }} </option>
                          @endforeach
                
                      </select>
                      
                    </div>
                    <p class="flex items-center mt-2 text-xs text-slate-500">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="w-5 h-5 mr-2"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                      Si la marque n'existe pas ajoutez la dans la partie des marques
                    </p>
                </div>
                   
                 
              </div>
            
            <div class="flex flex-col-reverse justify-between gap-2 border-t border-[#616161] bg-neutral-50/20 p-4  sm:flex-row sm:items-center md:justify-end">
                <button @click="modalIsOpen = false" type="button" class="border-[#616161]  border-[1px] cursor-pointer whitespace-nowrap rounded-md bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white ">Annuler</button>
                <button  type="submit" class=" border-[#616161]  border-[1px] cursor-pointer whitespace-nowrap rounded-md bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white">Valider</button>
            </div>
        </form>
    </div>
