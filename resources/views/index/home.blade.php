<x-html title="Aquamarine">
    <x-header/>
    <x-review-widget/>
    <main class="flex-auto bg-accentBgBlue">
        <div class="container mx-auto py-[100px]">
            <div class="flex flex-col gap-4">
                <div class="h-[550px] w-full">
                    <img class="h-full w-full object-cover" src="{{ asset('assets/images/about.jpg') }}" alt="Изображение">
                </div>
                <div class="py-[50px] px-[100px] bg-accentDarkerBgBlue">
                    <div class="flex flex-col gap-[30px]">
                        <h2 class="text-4xl font-medium">Аквапарк Казань - официальный страница</h2>
                        <div>
                            <p class="text-2xl font-medium">Добро пожаловать в аквапарк "Аквамарин"!</p><br>
                            <p class="text-xl">Мы рады приветствовать вас в мире водных развлечений и незабываемых впечатлений.
                                Наш аквапарк был основан в 2010 году с целью создания уникального места, где люди всех возрастов могли бы насладиться активным отдыхом,
                                оздоровлением и общением в комфортной и безопасной атмосфере.</p><br>
                            <p class="text-xl">На протяжении многих лет мы неустанно работаем над тем, чтобы "Аквамарин" стал лучшим местом для
                                семейного и корпоративного досуга. Мы постоянно расширяем и модернизируем наши водные аттракционы,
                                добавляя новые горки, бассейны и развлечения, чтобы каждое ваше посещение было незабываемым.</p><br>
                            <p class="text-xl">Наша команда состоит из высококвалифицированных специалистов, которые обеспечивают высокий уровень сервиса и
                                безопасности. Мы гордимся тем, что наши посетители возвращаются к нам снова и снова, чтобы окунуться в мир водных
                                развлечений и получить заряд позитивных эмоций.</p><br>
                            <p class="text-xl">Аквапарк "Аквамарин" расположен в живописном уголке нашего города, где вы сможете наслаждаться не
                                только водными развлечениями, но и свежим воздухом, солнцем и природой. Мы позаботились о том, чтобы создать для
                                вас идеальные условия для отдыха и релаксации.</p><br>
                            <p class="text-xl">Помимо захватывающих аттракционов, в "Аквамарине" вы найдете разнообразные кафе и рестораны,
                                где можно насладиться вкусной и здоровой едой. Также у нас есть детские игровые зоны, SPA-центр и
                                тренажерный зал, чтобы вы могли провести время с пользой для тела и души.</p><br>
                            <p class="text-xl">Приходите в "Аквамарин" и окунитесь в мир незабываемых впечатлений! Мы гарантируем, что вы
                                уйдете отсюда с яркими воспоминаниями и желанием вернуться снова.</p><br>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-[30px] items-center" x-data="{ activeSlide: 1 }">
                    <div class="flex w-full overflow-hidden items-center h-[700px] relative">
                        <div x-show="activeSlide === 1" x-transition.duration.300ms class="absolute w-full h-full z-0">
                            <img class="h-full w-full object-contain" src="{{ asset('assets/images/slider/slider-1.png') }}" alt="Изображение">
                        </div>
                        <div x-show="activeSlide === 2" x-transition.duration.300ms class="absolute w-full h-full z-0">
                            <img class="h-full w-full object-contain" src="{{ asset('assets/images/slider/slider-2.png') }}" alt="Изображение">
                        </div>
                        <div x-show="activeSlide === 3" x-transition.duration.300ms class="absolute w-full h-full z-0">
                            <img class="h-full w-full object-contain" src="{{ asset('assets/images/slider/slider-3.png') }}" alt="Изображение">
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <button @click="activeSlide = 1" :class="{ 'bg-accentDarkerBgBlue' : activeSlide === 1, 'bg-white' : activeSlide !== 1 }" class="h-[35px] w-[35px] rounded-full"></button>
                        <button @click="activeSlide = 2" :class="{ 'bg-accentDarkerBgBlue' : activeSlide === 2, 'bg-white' : activeSlide !== 2 }" class="h-[35px] w-[35px] bg-white rounded-full"></button>
                        <button @click="activeSlide = 3" :class="{ 'bg-accentDarkerBgBlue' : activeSlide === 3, 'bg-white' : activeSlide !== 3 }" class="h-[35px] w-[35px] bg-white rounded-full"></button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-footer/>
    <x-login/>
    <x-register/>
</x-html>
