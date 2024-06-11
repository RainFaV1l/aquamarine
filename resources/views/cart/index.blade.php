<x-html title="Profile">
    <x-header/>
    <x-review-widget/>

    <main class="flex-auto bg-accentBgBlue">
        <div class="bg-[#249CC2] py-[45px] px-[20px] 1000:px-[125px] rounded-[25px] w-full max-w-[1376px] mx-auto my-[110px]">
            <div class="grid grid-cols-3">
                <div></div>
                <div class="text-center flex items-center justify-center"><h1 class="text-[23px] font-bold">Корзина</h1></div>
                <div></div>
            </div>
            <div class="flex flex-col gap-[38px] mt-[89px]">
                <div class="rounded-[25px] border px-[50px] py-[27px] flex flex-wrap gap-[50px] justify-between">
                    <div class="flex flex-col gap-[15px]">
                        <p class="text-[24px] font-bold">Два часа всплеска позитива!</p>
                        <p class="text-[24px]">Тариф для взрослого старше 18 лет </p>
                    </div>
                    <div class="flex flex-col justify-between items-start 1000:items-end gap-[20px]">
                        <a href="#" class="text-[#FF0000] px-[41px] py-[10px] bg-white rounded-[15px] font-bold text-center text-[24px]">Удалить</a>
                        <div class="flex flex-wrap gap-[50px] mt-[30px]">
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
            <div class="flex flex-wrap gap-[30px] mt-[40px] justify-between">
                <a href="" class="bg-white rounded-[15px] py-[24px] px-[80px] text-black font-bold">Назад</a>
                <a href="" class="bg-white rounded-[15px] py-[24px] px-[80px] text-black font-bold">Далее</a>
            </div>
        </div>
    </main>

    <x-footer/>
</x-html>