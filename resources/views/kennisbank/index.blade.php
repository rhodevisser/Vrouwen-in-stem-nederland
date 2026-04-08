<x-layout
    title="kennisbank"
    heading="KENNISBANK">
    <div class="introduction-container">
        <div class="text-introduction-container">
            <h2 class="text-introduction-title">
                Kennisbank
            </h2>

            @if($kennisbank_items->count())
                <div class="mt-6 text-white">
                    <ul>
                        @foreach($kennisbank_items as $kennisbank_item)
                            <li>
                                <p class="paragraph-styling">
                                    <a href="/ideas/ {{$kennisbank_item->id}}">
                                        {{ $kennisbank_item->title }}
                                    </a>
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
             @endif
</x-layout>
