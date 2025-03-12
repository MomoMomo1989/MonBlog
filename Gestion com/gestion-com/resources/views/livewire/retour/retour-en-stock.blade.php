<div class="relative flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
    <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
      <div class="flex items-center justify-between gap-8 mb-8">
        <div>
          <h5
            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
            Liste des ventes
          </h5>
          <p class="block mt-1 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
            Modifier le retour dans les ventes
          </p>
        </div>
        <div class="w-full max-w-sm min-w-[200px]">
            <div class="relative flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute w-5 h-5 top-2.5 left-2.5 text-slate-600">
                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
              </svg>
           
              <input wire:model='search' wire:keydown.enter="searchProduct"
              class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-10 pr-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
              placeholder="Votre recherche ici..." 
              />
              
              <button wire:click='searchProduct' 
                class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                type="submit"
              >
                Search
              </button> 
            </div>
          </div>
        
      </div>
      
      <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
        <div class="block w-full overflow-hidden md:w-max">
          
        </div> 
      </div>
    </div>
    <div class="p-6 px-0 overflow-scroll">
      <table class="w-full text-left table-auto min-w-max">
        <thead class="bg-gray-200 ">
          <tr>
            <th
              class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
              <p
                class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                N° Facture(vente)
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                </svg>
              </p>
            </th>
            <th
              class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
              <p
                class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                Nbre Articles
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                </svg>
              </p>
            </th>
            <th
              class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
              <p
                class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                Date
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                </svg>
              </p>
            </th>
            <th
              class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
              <p
                class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                Total
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                </svg>
              </p>
            </th>
            <th
              class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
              <p
                class="flex items-center justify-center  gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
              Action</p>
            </th>
          </tr>
        </thead>
        <tbody>

          @foreach ($ventes as $item)
          <tr>
            <td class="p-4 border-b border-blue-gray-50">
              <div class="flex items-center gap-3">
                <img src="{{ asset('images/materiel-informatique.png') }}"
                  alt="John Michael" class="relative inline-block h-8 w-8  object-cover object-center" />
                <div class="flex flex-col">
                  <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                    {{ $item->id }}
                  </p>
                  <p
                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70">
                    {{ $item->client->nom }}
                  </p>
                </div>
              </div>
            </td>
            <td class="p-4 border-b border-blue-gray-50">
              <div class="flex flex-col">
                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                  {{ $item->quantite }}
                </p>
                
              </div>
            </td>
            <td class="p-4 border-b border-blue-gray-50">
              <div class="flex flex-col">
                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                  {{ $item->date_commande }}
                </p>
                
              </div>
            </td>
            <td class="p-4 border-b border-blue-gray-50">
              <div class="w-max">
                <div
                  class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-green-900 uppercase rounded-md select-none whitespace-nowrap bg-green-500/20">
                  <span class="">{{ $item->prix_total }} DA</span>
                </div>
              </div>
            </td>
            
            <td class="p-2 w-[100px] border-b border-blue-gray-50 " x-data="{modalIsOpen: false}" >
              <form action="{{ route('vente.update',$item->id) }}">
              <button 
                class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-gray-900 transition-all hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="submit">
                <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                      </svg>
                </span>
              </button>
            </form>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
  </div> 
