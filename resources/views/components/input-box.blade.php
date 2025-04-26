<div class="flex flex-col gap-1 w-full">
    <label class="text-blue-900 font-semibold" for="{{ $title }}">{{ ucfirst($title) }}</label>
    <input class="bg-red-50 rounded text-l px-3 py-1 shadow shadow-red-300 text-blue-900 font-medium focus:outline-0 transition-all delay-200 focus:border-red-500 focus:border-2 " type="{{$type}}" name="{{ $title }}" id="{{ $title }}" placeholder="{{ $placeholder }}"/>
</div>
