<x-html title="Profile">
    <x-header/>
    <x-review-widget/>

    <main class="flex-auto bg-accentBgBlue">
        <div class="bg-[#249CC2] py-[45px] px-[20px] 1000:px-[125px] rounded-[25px] w-full max-w-[1376px] mx-auto my-[110px]">
            <div class="grid grid-cols-3">
                <div></div>
                <div class="text-center flex items-center justify-center"><h1 class="text-[23px] font-bold">Оформление</h1></div>
                <div></div>
            </div>
            <form class="mt-[61px] flex flex-wrap justify-center gap-[20px] 1000:justify-between">
                <div class="flex flex-col items-center gap-[36px] w-full max-w-[532px]">
                    <h2 class="font-medium text-[24px]">Выберите Дату</h2>
                    <input type="date" class="px-[30px] py-[20px] rounded-[25px] text-[24px] text-[#7C7C7C] w-full">
                </div>
                <div>
                    <h2 class="font-medium text-[24px] flex items-center gap-[15px]">Выберите длительность <img src="{{ asset('assets/images/icons/datewhite.svg') }}" alt=""></h2>
                    <select class="bg-white mt-[30px] w-full flex flex-col rounded-[25px] p-[20px] outline-none text-black">
                        <option value="" selected disabled>Выберите длительность</option>
                        <option value="1" class="text-black">2 часа</option>
                        <option value="2">4 часа</option>
                        <option value="3">8 часов</option>
                        <option value="4">Весь день</option>
                    </select>
                </div>
            </form>
            <p class="text-[24px] font-medium mt-[86px] text-center">Список тарифов на указанную длителность посещения </p>
            <div class="flex items-center gap-[20px] mt-[20px]">
                <a href="/cart/cart" class="bg-white rounded-[100px] p-[20px]">
                    <img src="{{ asset('assets/images/icons/cart.svg') }}" alt="">
                </a>
                Общая сумма корзины: 10000 ₽ 
            </div>
            <div class="flex flex-col gap-[38px] mt-[40px]">
                <div class="rounded-[25px] border px-[50px] py-[27px] flex flex-wrap gap-[50px] justify-between">
                    <div class="flex flex-col gap-[15px]">
                        <p class="text-[24px] font-bold">Два часа всплеска позитива!</p>
                        <p class="text-[24px]">Тариф для взрослого старше 18 лет </p>
                    </div>
                    <div class="flex items-end gap-[20px]">
                        <div class="flex gap-[50px]">
                            <div class="flex items-center gap-[40px]">
                                <a href="" class="font-bold text-[32px]">+</a>
                                <div class="font-bold text-[32px]">1</div>
                                <a href="" class="font-bold text-[32px]">-</a>
                            </div>
                            <p class="text-[24px]"><span class="font-bold">Цена: </span>1850 р.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer/>
</x-html>