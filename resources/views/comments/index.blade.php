<x-html title="Profile">
    <x-header/>
    <x-review-widget/>

    <main class="flex-auto bg-accentBgBlue">
        <div class="bg-[#249CC2] py-[45px] px-[20px] 1000:px-[125px] rounded-[25px] w-full max-w-[1376px] mx-auto my-[110px]">
            <div class="grid grid-cols-3">
                <div></div>
                <div class="text-center flex items-center justify-center"><h1 class="text-[23px] font-bold">Отзывы</h1></div>
                <div></div>
            </div>
            <form class="flex flex-col mt-[56px] items-center gap-[20px]">
                <input type="text" class="w-full rounded-[25px] px-[26px] py-[13px] font-bold text-[24px] text-[#7C7C7C]" placeholder="Оставьте свой отзыв">
                <input type="submit" value="Публиковать" class="py-[21px] rounded-[25px] px-[75px] bg-white text-black font-bold cursor-pointer">
            </form>
            <div class="flex flex-col gap-[38px] mt-[89px]">
                <div class="bg-white rounded-[25px] px-[21px] py-[24px] text-black">
                    <p class="text-[18px] font-bold">Иванов Иван Иванович</p>
                    <p class="text-[14px] font-bold">15.06.2024</p>
                    <p class="text-[18px] font-medium mt-[15px]">Хочу поделиться своими впечатлениями от посещения аквапарка "Аквамарин". Признаться честно, я давно хотел побывать в этом месте, но все как-то не получалось. И вот, наконец, в прошедшие выходные я с семьей съездил туда. 
                        Впечатление исключительно положительное.</p>
                        <div class="mt-[100px]">
                            <p class="text-[18px] font-bold">Ответ от администрации</p>
                            <p class="text-[14px] font-medium">Спасибо за отзыв, приходите еще. Будем рады подарить вам еще позитивных эмоций !</p>
                        </div>
                        <div class="flex justify-between mt-[30px]">
                            <a href="" class="flex gap-[10px] items-center text-red-600 font-medium"><img src="{{ asset('assets/images/icons/delete.svg') }}" alt="">Удалить</a>
                            <a href="" class="flex gap-[10px] items-center font-medium"><img src="{{ asset('assets/images/icons/edit.svg') }}" alt="">Ответить</a>
                        </div>
                </div>
                <div class="bg-white rounded-[25px] px-[21px] py-[24px] text-black">
                    <p class="text-[18px] font-bold">Иванов Иван Иванович</p>
                    <p class="text-[14px] font-bold">15.06.2024</p>
                    <p class="text-[18px] font-medium mt-[15px]">Хочу поделиться своими впечатлениями от посещения аквапарка "Аквамарин". Признаться честно, я давно хотел побывать в этом месте, но все как-то не получалось. И вот, наконец, в прошедшие выходные я с семьей съездил туда. 
                        Впечатление исключительно положительное.</p>
                        <div class="mt-[100px]">
                            <p class="text-[18px] font-bold">Ответ от администрации</p>
                            <p class="text-[14px] font-medium">Спасибо за отзыв, приходите еще. Будем рады подарить вам еще позитивных эмоций !</p>
                        </div>
                        <div class="flex flex-wrap gap-[50px] justify-between mt-[30px]">
                            <a href="" class="flex gap-[10px] items-center text-red-600 font-medium"><img src="{{ asset('assets/images/icons/delete.svg') }}" alt="">Удалить</a>
                            <a href="" class="flex gap-[10px] items-center font-medium"><img src="{{ asset('assets/images/icons/edit.svg') }}" alt="">Ответить</a>
                        </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer/>
</x-html>