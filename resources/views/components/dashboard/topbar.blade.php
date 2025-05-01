<nav class="flex justify-center items-center p-2 bg-red-500">
    <ul class="w-full flex justify-between items-center">
        <li class="text-xl font-bold text-red-50"><a href="{{ route('dashboard') }}">LakshyaOne </a></li>
        <div class="flex items-center gap-4">
            {{-- TODO: To implement user profile and it's name <li>
                USERNAME
            </li> --}}
            <li class="text-l font-semibold text-blue-950 border-2 p-2 rounded-full hover:text-red-50 hover:border-blue-950 hover:bg-blue-950 transition-all delay-100"><a href="{{ route('logout') }}">logout</a></li>
        </div>
    </ul>
</nav>
