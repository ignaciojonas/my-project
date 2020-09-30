<x-guest-layout>
    <div class="py-12">
    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>Animal List</h1>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach($animals as $animal)
                    <x-cards :image="$animal->image" :title="$animal->name" :description="$animal->description" :tags="['#sad','#panda']" />
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
