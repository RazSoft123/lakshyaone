<x-layout>
    <div class="w-full min-h-screen bg-red-50 overflow-scroll">
        <div class="w-full h-screen relative flex items-center justify-center">

            <div class="max-w-[500px] w-full bg-red-200 flex flex-col mx-4 rounded-3xl overflow-hidden">

                <div class="flex flex-row h-16">
                    <div class="w-full flex items-center justify-center border-red-300 shadow-red-400 shadow-xs">
                        <span class="text-blue-900 text-2xl font-bold">Login</span>
                    </div>
                    <div class="w-full flex items-center justify-center bg-red-50">

                        <span class="text-blue-900 text-2xl font-bold bg-red" ><a href="{{ route('signup.index') }}">Signup</a></span>
                    </div>
                </div>
                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <div class="flex flex-col items-center space-x-3 space-y-6  my-16 px-16">
                        <x-input-box title="email" placeholder="Enter your email"/>
                        <x-input-box title="password" type="password" placeholder="Password"/>
                        <div class="w-full flex justify-end -mt-5"><a class="text-blue-700 text-sm" href="#">Forget password ?</a></div>
                        <x-button>Login</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
