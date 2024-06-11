<div
    class="fixed w-full h-full bg-black bg-opacity-25 z-10 opacity-0"
     x-data="{ show: false }"
     @login.window="show = true"
     x-show="show"
     x-transition.opacity.duration.300
     :class="{ 'opacity-100' : show }"
    >
    <div class="fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 p-[50px] bg-accentDarkerBgBlue rounded-3xl"
         @click.outside="show = false">
        <div class="flex flex-col items-center gap-[50px]">
            <div class="flex flex-col gap-[20px] text-center">
                <h2 class="text-2xl uppercase font-bold">Вход</h2>
            </div>
            <x-form action="{{ route('login') }}" method="POST" class="flex flex-col gap-[50px]">
                <div class="flex flex-col gap-[15px]">
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
                </div>
                <div class="flex flex-col items-center text-center gap-[15px]">
                    <button type="submit" class="button bg-white text-accentDarkerBgBlue font-medium hover:text-white w-full">Войти</button>
                    <button @click.prevent="show = false; $dispatch('register', true)">Нет аккаунта? Зарегистрируйтесь</button>
                </div>
            </x-form>
        </div>
    </div>
</div>
