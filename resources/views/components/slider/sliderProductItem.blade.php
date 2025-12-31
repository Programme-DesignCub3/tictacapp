@props(['productImage', 'mascotImage'])''

<div class="relative flex items-center justify-center">
    <div class="grid content-center items-center justify-center justify-items-center">
        <img class="max-w-[60%]" src="{{ $productImage }}" alt="" />
    </div>
    <div class="max-w-2/5 absolute bottom-0 left-0">
        <img src="{{ $mascotImage }}" alt="">
    </div>
</div>
