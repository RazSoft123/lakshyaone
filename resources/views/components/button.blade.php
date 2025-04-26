@if ($type == 'button')
    <button class="bg-red-300 px-5 py-2 rounded-xl shadow-md shadow-red-400 hover:shadow-2xs transition-all delay-200 active:shadow-2xs active:bg-red-200 text-md font-semibold text-blue-900" >{{ $slot }}</button>
@elseif ($type == 'link')
    <a href="{{ $link }}">{{ $slot }}</a>
@endif
