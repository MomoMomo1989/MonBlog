<div class="relative flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
    <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
      <div class="flex items-center justify-between gap-8 mb-8">
        <div>
          <h5
            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
            Liste des ventes
          </h5>
          <p class="block mt-1 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
            Information des ventes
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
        <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
          
          <a href="{{ route('product.show.Add') }}"
            class="flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button">
                <svg class="w-10 h-10" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#f8f2f2" stroke="#f8f2f2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#ffffff;} </style> <g> <path class="st0" d="M512,255.994l-63.305-51.63l29-76.354l-80.636-13.07l-13.063-80.635l-76.364,29.006L255.997,0.014l-7.862,9.64 L204.36,63.312l-76.35-29.006l-13.073,80.635l-80.629,13.07l28.993,76.354L0,255.994l63.302,51.636L34.308,383.99l80.629,13.076 l13.07,80.629l76.354-29l51.636,63.291l51.636-63.291l76.364,29l13.063-80.629l80.642-13.076l-29.006-76.361L512,255.994z M449.885,367.934l-70.52,11.438l-11.423,70.512l-66.783-25.365l-45.161,55.362l-45.161-55.362l-66.774,25.365l-11.43-70.512 l-70.52-11.431l25.359-66.794L32.115,256l55.356-45.154l-25.359-66.781l70.52-11.43l11.43-70.513l66.774,25.359l45.161-55.356 l45.161,55.356l66.783-25.366l11.423,70.52l70.52,11.43l-25.359,66.781L479.882,256l-55.356,45.147L449.885,367.934z"></path> <path class="st0" d="M224.434,224.523c-0.364-0.641-0.905-1.004-1.698-0.846l-14.271,2.808c-0.793,0.152-1.156,0.687-1.249,1.42 l-11.8,79.955c-0.093,0.727,0.224,1.137,1.018,0.978l14.833-2.914c0.793-0.159,1.176-0.582,1.242-1.428l1.658-14.318l26.958-5.299 l7.064,12.6c0.383,0.76,0.905,1.005,1.698,0.853l14.721-2.901c0.793-0.152,0.925-0.654,0.568-1.288L224.434,224.523z M216.023,275.108l3.416-28.676l0.344-0.066l14.028,25.246L216.023,275.108z"></path> <path class="st0" d="M156.834,268.514l-4.183,0.232c-9.091,0.495-12.811-1.718-13.676-6.132c-0.958-4.869,1.856-9.072,8.656-10.406 c6.336-1.248,12.402-0.324,19.055,2.365c0.621,0.231,1.169,0.007,1.506-0.648l4.89-11.668c0.409-0.905,0.211-1.328-0.562-1.652 c-7.434-3.707-17.55-4.902-27.738-2.894c-16.651,3.27-25.445,14.767-22.663,28.926c2.676,13.591,12.838,19.227,28.894,18.309 l4.189-0.231c9.408-0.555,12.686,1.738,13.584,6.27c1.064,5.438-2.735,10.063-10.77,11.642c-8.153,1.606-15.824-0.886-21.724-3.965 c-0.648-0.343-1.328-0.211-1.672,0.456l-6.666,11.543c-0.443,0.786-0.053,1.539,0.489,1.903c7.136,4.592,19.736,7.057,31.741,4.691 c19.934-3.918,28.214-16.254,25.478-30.182C182.92,273.146,173.108,267.55,156.834,268.514z"></path> <path class="st0" d="M325.007,268.151l-33.971,6.68l-0.813-0.549l-11.873-60.364c-0.133-0.688-0.668-1.051-1.348-0.912 l-14.384,2.828c-0.68,0.132-1.05,0.674-0.918,1.36l14.701,74.742c0.139,0.674,0.681,1.044,1.362,0.912l50.165-9.871 c0.688-0.132,1.044-0.674,0.912-1.354l-2.472-12.574C326.236,268.369,325.694,268.012,325.007,268.151z"></path> <path class="st0" d="M386.62,256.496l-33.189,6.522l-0.812-0.535l-3.138-15.976l0.541-0.814l27.639-5.431 c0.674-0.132,1.044-0.674,0.905-1.354l-2.359-12.006c-0.132-0.674-0.68-1.037-1.354-0.905l-27.632,5.431l-0.819-0.541 l-3.007-15.289l0.549-0.82l33.189-6.528c0.674-0.133,1.037-0.674,0.905-1.354l-2.379-12.112c-0.138-0.687-0.68-1.05-1.354-0.912 l-49.383,9.706c-0.677,0.139-1.04,0.674-0.902,1.362l14.691,74.742c0.132,0.681,0.674,1.051,1.354,0.912l49.383-9.706 c0.674-0.139,1.037-0.681,0.905-1.362l-2.379-12.118C387.836,256.727,387.294,256.357,386.62,256.496z"></path> </g> </g></svg>
            Passer une vente
            </a>
        </div>
      </div>
      
      <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
        <div class="block w-full overflow-hidden md:w-max">
          
        </div> 
      </div>
    </div>
    <div class="p-6 px-0 overflow-scroll">
      
    </div>
  </div> 
