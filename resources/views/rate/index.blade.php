<x-html title="Profile">
    <x-header/>
    <x-review-widget/>

    <main class="flex-auto bg-accentBgBlue">
        <div class="bg-[#249CC2] py-[45px] px-[20px] 1000:px-[125px] rounded-[25px] w-full max-w-[1376px] mx-auto my-[110px]">
            <div class="grid grid-cols-1 1000:grid-cols-3 gap-[20px]">
                <div></div>
                <div class="text-center flex items-center justify-center"><h1 class="text-[23px] font-bold">Наши Тарифы</h1></div>
                <div class="flex items-center justify-center 1000:justify-end"><div href="" x-data @click="$dispatch('addRate', true)" class="bg-white cursor-pointer text-black py-[5px] px-[23px] rounded-[20px] font-bold text-[18px] flex items-center gap-[10px]">Добавить Тариф <img class="w-[48px]" src="{{ asset('assets/images/icons/plus.svg') }}" alt=""></div></div>
            </div>
            <div class="flex flex-col gap-[38px] mt-[89px]">
                <div class="rounded-[25px] border px-[50px] py-[27px] flex gap-[50px] flex-wrap justify-between ">
                    <div class="flex flex-col gap-[15px]">
                        <p class="text-[24px] font-bold">Два часа всплеска позитива!</p>
                        <p class="text-[24px]">Тариф для взрослого старше 18 лет </p>
                    </div>
                    <div class="flex flex-wrap items-end gap-[20px]">
                        <p class="text-[24px] font-medium">Длительность: 2 Ч.</p>
                        <p class="text-[24px]"><span class="font-bold">Цена: </span>1850 р.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer/>
</x-html>