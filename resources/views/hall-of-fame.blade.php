<x-layout
    title="Hall of Fame"
    heading="HALL OF FAME" >
    <div class="py-24 sm:py-32 hall-of-fame-container">
        <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">

            <ul role="list"
                class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                @foreach($pioneers as $pioneer)
                    <li>
                        <a href="/hall-of-fame/{{$pioneer['slug'] }}">
                            <x-hall-of-fame-card :pioneer="$pioneer"/>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="introduction-container">
        <div class="text-introduction-container">
        </div>
    </div>
{{--    <div class="newsletter-container">--}}
{{--        <div class="newsletter-box">--}}
{{--            <div class="title-paragraph-box-for-styling">--}}
{{--                <h2 class="title-text-newsletter">--}}
{{--                    Wil je meer weten over vrouwen in de technologie?--}}
{{--                </h2>--}}
{{--                <p class="paragraph-text-newsletter paragraph-styling">--}}
{{--                    Schrijf je dan in voor onze nieuwsbrief en blijf op de hoogte van de laatste ontwikkelingen,--}}
{{--                    evenementen en inspirerende verhalen van vrouwen in de technologie.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <button class="get-newsletter">--}}
{{--                Meldt je hier aan voor de nieuwsbrief!--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-layout>
