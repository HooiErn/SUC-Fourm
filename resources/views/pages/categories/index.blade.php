<x-guest-layout>
    <main class="wrapper">
        <section class="grid grid-cols-4 gap-8 mt-8">

            <x-partials.sidenav />

            <div class="flex flex-col col-span-3 gap-y-4">
                @foreach ($categories as $category)
                <x-thread :thread="$thread" />
                @endforeach

                <div class="mt-8">
                    {{ $category->render() }}
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
