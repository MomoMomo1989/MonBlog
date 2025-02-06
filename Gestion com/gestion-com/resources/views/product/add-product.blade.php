<x-app-layout>
    
    <div class=" pb-2 relative flex flex-col w-full h-[99%] text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
        <div class="flex items-center justify-between gap-8 border-b-[1px] p-3 ">
            <div>
              <h5
                class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                Ajouter des Produits
              </h5>
              <p class="block mt-1 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
                Information des produits
              </p>
            </div>
            
            <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
              
              <a href="{{ route('product.show') }}"
                class="flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button">
                <svg fill="#000000"  viewBox="0 0 24 24" id="left-direction-3" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color h-5 w-5">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                    <g id="SVGRepo_iconCarrier">
                    <path id="primary" d="M5.5,9.25,2.38,11.33a.79.79,0,0,0,0,1.34L5.5,14.75A1,1,0,0,0,7,14.08V13H21a1,1,0,0,0,0-2H7V9.92A1,1,0,0,0,5.5,9.25Z" style="fill: #f0ebeb;"/>
                    </g>                   
                    </svg>
                Retour a liste produit
                </a>
            </div>
          </div>
        <div class=" overflow-y-auto  relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
          
          <div class="flex justify-between pl-2 pb-2">
               <form class="w-[30%]">
                <div class="w-full max-w-sm min-w-[200px] mb-4">
                    <label class="block mb-2 text-sm text-slate-600">
                        Nom du produit
                    </label>
                    <input name="nom" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Type here..." />
                </div>

                <div class="w-full max-w-sm min-w-[200px] mb-4">
                    <label class="block mb-2 text-sm text-slate-600">
                        Prix Achat
                    </label>
                    <input name="prix_achat" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Type here..." />
                </div>

                <div class="w-full max-w-sm min-w-[200px] mb-4">
                    <label class="block mb-2 text-sm text-slate-600">
                        Prix Vente
                    </label>
                    <input name="prix_vente" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Type here..." />
                </div>
                
                <div class="w-full max-w-sm min-w-[200px] mb-4">
                    <label class="block mb-2 text-sm text-slate-600">
                        Qte stock
                    </label>
                    <input name="quantite_stock" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Type here..." />
                </div>

                <div class="w-full max-w-sm min-w-[200px] mb-4">
                    <label class="block mb-2 text-sm text-slate-600">
                        Code Bar
                    </label>
                    <input name="barcode" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Type here..." />
                </div>

                <div class="w-full max-w-sm min-w-[200px] mb-4">    
                    <label class="block mb-1 text-sm text-slate-800">
                      Categorie
                    </label>
                   
                    <div class="relative">
                      <select name="categorie_id"
                          class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded pl-3 pr-8 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer">
                          <option value="brazil">Brazil</option>
                
                      </select>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="h-5 w-5 ml-1 absolute top-2.5 right-2.5 text-slate-700">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                      </svg>
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
                          class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded pl-3 pr-8 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer">
                          <option value="brazil">Brazil</option>
                
                      </select>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="h-5 w-5 ml-1 absolute top-2.5 right-2.5 text-slate-700">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                      </svg>
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

                <div class="w-96 mt-8">
                    <div class="relative w-full min-w-[200px]">
                      <textarea name="description"
                        class="peer h-full min-h-[100px] outline-none w-full resize-none rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50"
                        placeholder=" "></textarea>
                      <label
                        class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Description
                      </label>
                    </div>
                </div>

               </form>
               <div class="">
                <div class=" flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
                    <table id="productTable" class="relative w-full text-left table-auto min-w-max">
                        <thead class="">
                        <tr>
                            <th class="p-4 border-b border-slate-300 bg-slate-50 w-[300px]">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                Produit
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                Code bar
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                Qty
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                Achat
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                               Sale
                            </p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">
                                Sofa
                            </p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">
                                Furniture
                            </p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">
                                1
                            </p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">
                                $300.00
                            </p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">
                                $300.00
                            </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
               </div>
          </div>

          <div class="flex  gap-2 shrink-0 sm:flex-row ml-2">      
            <a href="{{ route('product.show') }}"
              class="flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
              <svg fill="#ffffff" class="h-5 w-5" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 496.124 496.124" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M420.001,219.7c3.666,14.313,5.811,29.238,5.811,44.676c0,99.828-81.199,181.024-181.022,181.024 c-99.821,0-181.039-81.195-181.039-181.024c0-99.824,81.218-181.041,181.039-181.041c25.442,0,49.633,5.338,71.623,14.848 l26.912-43.26c-29.949-14.15-63.27-22.307-98.535-22.307c-127.793,0-231.764,103.971-231.764,231.76 c0,127.779,103.971,231.748,231.764,231.748c127.774,0,231.743-103.969,231.743-231.748c0-35.516-8.271-69.062-22.599-99.178 L420.001,219.7z"></path> <path d="M463.159,6.385c-19.811-12.32-45.882-6.279-58.217,13.533L236.88,289.985l-56.299-80.289 c-13.389-19.104-39.775-23.729-58.879-10.338c-19.1,13.408-23.742,39.756-10.336,58.877l93.002,132.633 c7.93,11.291,20.855,17.996,34.609,17.996c0.379,0,0.777,0,1.157-0.018c14.181-0.396,27.229-7.871,34.72-19.914L476.702,64.6 C489.05,44.766,482.972,18.713,463.159,6.385z"></path> </g> </g></svg>  Valider
              </a>
          </div>
        </div>
      </div> 

</x-app-layout>