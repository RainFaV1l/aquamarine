<x-html title="Profile">
    <x-header/>
    <x-review-widget/>

    <main class="flex-auto bg-accentBgBlue">
        <div class="bg-[#249CC2] py-[45px] px-[20px] 1000:px-[125px] rounded-[25px] w-full max-w-[1376px] mx-auto my-[110px]">
            <div class="grid grid-cols-3">
                <div></div>
                <div class="text-center flex items-center justify-center"><h1 class="text-[32px] font-bold">Наши Билеты</h1></div>
                <div></div>
            </div>
            <div class="mt-[20px] flex flex-wrap gap-[20px] justify-between items-center">
                <div class="flex items-center gap-[15px]">
                    <p>Поиск:</p>
                    <input type="text" class="text-black font-bold text-[24px] px-[20px] pb-[10px] pt-[5px] rounded-[100px] w-full" placeholder="Введите Код">
                </div>
                <div class="flex items-center gap-[15px]">
                    <p>Дата Посещения:</p>
                    <input type="date" class="text-black text-[20px] px-[20px] pb-[10px] pt-[5px] rounded-[100px]">
                </div>
            </div>
            <div class="flex flex-col gap-[38px] mt-[30px]">
                <div class="rounded-[25px] border-[3px] px-[50px] py-[27px] flex flex-wrap gap-[50px] justify-between">
                    <div class="flex flex-col gap-[15px]">
                        <p class="text-[24px] font-bold">Номер Билета:</p>
                        <p class="text-[24px]">Имя пользователея:</p>
                        <p class="text-[24px] mt-[20px]">День Посещения:</p>
                        <p class="text-[24px] font-bold">Кодбилета: </p>
                    </div>
                    <div class="flex items-end gap-[20px]">
                        <p class="text-[24px] font-medium flex items-center gap-[15px]"><img src="{{ asset('assets/images/icons/editwhite.svg') }}" alt=""> Билет Использован</p>
                    </div>
                </div>
                
            </div>
        </div>
    </main>

    <x-footer/>
</x-html>