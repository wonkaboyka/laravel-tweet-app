@auth

<div class="p-4">
    <form action="{{ route('tweet.create') }}" method="post">
        @csrf
        <div class="mt-1">
            <textarea
            name="tweet"
            rows="3"
            class="focus:ring-orange-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300
            rounded-md p-2"
            placeholder="Nhập mấy câu linh tinh vô đây"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
            140 chữ thôi nhá

        @error('tweet')
        <x-alert.error>{{ $message }}</x-alert.error>

        @enderror
        <div class="flex flexwrap justify-end">
            <x-element.button>
                Ấn nút
            </x-element.button>
        </div>
    </form>
</div>
@endauth
@guest
    <div class="flex flex-wrap justify-center">
        <div class="w-1/2 p-4 flex flex-wrap justify-evenly">
            <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
            <x-element.button-a :href="route('register')" theme="secondary">会員登録</x-element.button-a>
        </div>
    </div>
@endguest
