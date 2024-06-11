<div
    class="fixed w-full h-full bg-black bg-opacity-25 z-10 opacity-0"
    x-data="{ show: false }"
    @register.window="show = true"
    x-show="show"
    x-transition.opacity.duration.300
    :class="{ 'opacity-100' : show }"
>
    <div class="fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 p-[50px] bg-accentDarkerBgBlue rounded-3xl"
         @click.outside="show = false">
        <div class="flex flex-col items-center gap-[50px]">
            <div class="flex flex-col gap-[20px] text-center">
                <h2 class="text-2xl uppercase font-bold">Регистрация</h2>
            </div>
            <x-form action="{{ route('register') }}" method="POST" class="flex flex-col gap-[50px]">
                <div class="flex flex-col gap-[15px] h-[50vh] overflow-auto">
                    <div class="flex flex-col gap-[10px]">
                        <x-label for="email" class="text-lg ml-5 font-bold"/>
                        <x-input name="email" placeholder="Введите email" class="input w-[500px]"/>
                        <x-error field="email" class="text-red-500 font-bold text-sm ml-5"/>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <x-label for="пароль" class="text-lg ml-5 font-bold"/>
                        <x-password id="пароль" name="password" placeholder="Введите пароль" class="input w-[500px]"/>
                        <x-error field="password" class="text-red-500 font-bold text-sm ml-5"/>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <x-label for="фамилия" class="text-lg ml-5 font-bold"/>
                        <x-input id="фамилия" name="surname" placeholder="Введите фамилию" class="input w-[500px]"/>
                        <x-error field="surname" class="text-red-500 font-bold text-sm ml-5"/>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <x-label for="имя" class="text-lg ml-5 font-bold"/>
                        <x-input id="имя" name="name" placeholder="Введите имя" class="input w-[500px]"/>
                        <x-error field="name" class="text-red-500 font-bold text-sm ml-5"/>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <x-label for="отчество" class="text-lg ml-5 font-bold"/>
                        <x-input id="отчество" name="patronymic" placeholder="Отчество" class="input w-[500px]"/>
                        <x-error field="patronymic" class="text-red-500 font-bold text-sm ml-5"/>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <x-label for="телефон" class="text-lg ml-5 font-bold"/>
                        <x-input id="телефон" name="phone" placeholder="Телефон" class="input w-[500px]"/>
                        <x-error field="phone" class="text-red-500 font-bold text-sm ml-5"/>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <x-label for="дата рождения" class="text-lg ml-5 font-bold"/>
                        <x-pikaday id="дата рождения" name="birthday" class="input w-[500px]"/>
                        <x-error field="birthday" class="text-red-500 font-bold text-sm ml-5"/>
                    </div>
                </div>
                <div class="flex flex-col items-center text-center gap-[15px]">
                    <button type="submit" class="button bg-white text-accentDarkerBgBlue font-medium hover:text-white w-full">Создать</button>
                    <button @click.prevent="show = false; $dispatch('login', true)">Есть аккаунт? Авторизуйтесь</button>
                </div>
            </x-form>
        </div>
    </div>
</div>
