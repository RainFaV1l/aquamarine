<x-html title="Profile">
    <x-header/>
    <x-review-widget/>
    <main class="flex-auto bg-accentBgBlue">
        <div class="container mx-auto py-[100px]">
            <div class="flex flex-col 800:flex-row justify-between gap-[30px]">
                <div class="flex flex-col w-full gap-[50px] bg-accentDarkerBgBlue p-[30px] rounded-3xl 800:w-[30%]">
                    <h2 class="text-4xl font-medium">Профиль</h2>
                    <x-form action="{{ route('user.update') }}" method="post" class="flex flex-col gap-[30px]">
                        <div class="flex flex-col gap-[15px]">
                            <x-label for="Фамилия" class="text-2xl font-medium"/>
                            <x-input id="Фамилия" name="surname" placeholder="Фамилия" class="input w-full" :value="auth()->user()->surname"/>
                            <x-error field="surname" class="text-red-500 font-bold text-sm ml-5"/>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <x-label for="Имя" class="text-2xl font-medium"/>
                            <x-input id="Имя" name="name" placeholder="Имя" class="input w-full" :value="auth()->user()->name"/>
                            <x-error field="name" class="text-red-500 font-bold text-sm ml-5"/>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <x-label for="Отчество" class="text-2xl font-medium"/>
                            <x-input id="Отчество" name="patronymic" placeholder="Отчество" class="input w-full" :value="auth()->user()->patronymic"/>
                            <x-error field="patronymic" class="text-red-500 font-bold text-sm ml-5"/>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <x-label for="номер телефона" class="text-2xl font-medium"/>
                            <x-input id="номер телефона" name="phone" placeholder="Номер телефона" class="input w-full" :value="auth()->user()->phone"/>
                            <x-error field="phone" class="text-red-500 font-bold text-sm ml-5"/>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <x-label for="Дата рождения" class="text-2xl font-medium"/>
                            <x-input id="Дата рождения" name="birthday" placeholder="Дата рождения" class="input w-full" :value="auth()->user()->birthday"/>
                            <x-error field="birthday" class="text-red-500 font-bold text-sm ml-5"/>
                        </div>
                        <button type="submit" class="button bg-white text-black hover:text-white">Редактировать</button>
                    </x-form>
                </div>
                <div class="flex flex-col gap-[50px] bg-accentDarkerBgBlue p-[30px] rounded-3xl w-full 800:w-[70%]">
                    <h2 class="text-4xl font-medium text-center">Мои билеты</h2>
                    <div class="flex flex-col gap-[30px]">
                        <div class="border border-white rounded-3xl p-[30px] flex flex-col justify-between gap-[30px]">
                            <h3 class="font-bold text-2xl">Номер корзины</h3>
                            <div class="flex flex-col 800:flex-row items-start 800:items-center justify-between font-bold text-2xl">
                                <p>Дата посещения:</p>
                                <p>Код:1234124234</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-footer/>
</x-html>
