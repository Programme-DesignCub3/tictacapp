 <x-modal model="openPopUp">
     <div class="mx-auto max-h-[90dvh] w-max">
         <div @class([
             'max-w-4xl',
             'slider-outer-shadow rounded-4xl bg-card-blue clamp-[p,2,3] relative mb-10 w-fit' => db_config(
                 'pop-up.enable_container'),
         ])>
             <div @class([
                 'slider-inner-shadow clamp-[px,1,2] clamp-[py,2,3] relative max-h-[90dvh] w-fit max-w-[90vw] overflow-hidden rounded-3xl bg-white' => db_config(
                     'pop-up.enable_container'),
             ])>
                 @if (db_config('pop-up.image'))
                     @if (db_config('pop-up.url', null))
                         <a target="_blank" href="{{ db_config('pop-up.url', null) }}">
                     @endif
                     <img @class([
                         'mx-auto object-contain rounded-xl',
                         'block  h-full max-h-[83dvh]',
                     ]) src="{{ asset('storage/' . db_config('pop-up.image')) }}"
                         alt="">
                     @if (db_config('pop-up.url'))
                         </a>
                     @endif
                 @endif
             </div>

             <div class="clamp-[right,-2,-4] clamp-[top,-2,-4] absolute cursor-pointer" x-on:click="openPopUp = false">
                 <img class="clamp-[size,9,14]" src="{{ asset('img/close-icon.png') }}" />
             </div>
         </div>

     </div>
 </x-modal>
