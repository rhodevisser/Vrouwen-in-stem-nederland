<x-layout
    title="Hall of Fame"
    heading="HALL OF FAME" >
    <div class="py-24 sm:py-32 hall-of-fame-container">
        <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">

            <ul role="list"
                class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                             alt=""
                             class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
                            <x-hall-of-fame-card
                                pioneer="Leslie Alexander"
                                work="Co-Founder / CEO">
                            </x-hall-of-fame-card>
                    </div>
                </li>

                <li>
                    <a href="hall-of-fame/pioneer">
                        <div class="flex items-center gap-x-6">
                            <img src="/images/Ada_Lovelace_daguerreotype_by_Antoine_Claudet_1843_-_cropped.png"
                                 alt=""
                                 class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
                            <x-hall-of-fame-card
                                pioneer="Ada Lovelace"
                                work="First Computer Programmer">
                            </x-hall-of-fame-card>
                        </div>
                    </a>
                </li>

                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="/images/paulineVos.jpg"
                             alt=""
                             class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
                        <x-hall-of-fame-card
                            pioneer="Pauline Vos"
                            work="Software Engineer @ MongoDB and Conference Speaker">
                        </x-hall-of-fame-card>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                             alt=""
                             class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
                        <x-hall-of-fame-card
                            pioneer="Lindsay Walton"
                            work="Front-end Developer">
                        </x-hall-of-fame-card>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                             alt=""
                             class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
                        <x-hall-of-fame-card
                            pioneer="Courtney Henry"
                            work="Designer">
                        </x-hall-of-fame-card>
                    </div>
                </li>
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="/images/GraceHopper.jpg"
                             alt=""
                             class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
                        <x-hall-of-fame-card
                            pioneer="Grace Hopper"
                            work="Computer Scientist, Mathematician, and US Navy Rear Admiral">
                        </x-hall-of-fame-card>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="introduction-container">
        <div class="text-introduction-container">
        </div>
    </div>
    <div class="newsletter-container">
        <div class="newsletter-box">
            <div class="title-paragraph-box-for-styling">
                <h2 class="title-text-newsletter">
                    Wil je meer weten over vrouwen in de technologie?
                </h2>
                <p class="paragraph-text-newsletter paragraph-styling">
                    Schrijf je dan in voor onze nieuwsbrief en blijf op de hoogte van de laatste ontwikkelingen,
                    evenementen en inspirerende verhalen van vrouwen in de technologie.
                </p>
            </div>
            <button class="get-newsletter">
                Meldt je hier aan voor de nieuwsbrief!
            </button>
        </div>
    </div>
</x-layout>
