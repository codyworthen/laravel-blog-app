@if(session()->has('success'))
    <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 5000)"
            x-show="show"
            class="fixed bottom-3 right-3 bg-blue-500 text-white py-3 px-5 rounded-xl"
    >
            <p>{{ session()->get('success') }}</p>
    </div>
@endif