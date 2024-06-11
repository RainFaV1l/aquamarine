<div class="bg-accentDarkerBgBlue">
    <div class="container mx-auto py-[30px]">
        <div class="flex flex-wrap items-center justify-between">
            <x-logo/>
            <ul class="flex flex-wrap items-center gap-[30px]">
                <li><a href="{{ route('index.home') }}">О нас</a></li>
                <li class="relative">
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="flex items-center gap-2"
                                    x-data="{ click: false }" @click="click = !click">
                                <span>Развлечения</span>
                                <span class="transition" :class="{ 'rotate-180' : click == true }">
                                    <x-heroicon-s-chevron-down class="h-6 w-6"/>
                                </span>
                            </button>
                        </x-slot>
                        <ul class="w-full absolute mt-4 flex flex-col bg-accentBlue rounded-lg opacity-0" :class="{ 'opacity-100' : open }">
                            <li><a href="#" class="flex transition hover:bg-accentDarkerBgBlue py-4 px-7 rounded-t-lg">Profile</a></li>
                            <li><a href="#" class="flex transition hover:bg-accentDarkerBgBlue py-4 px-7">Settings</a></li>
                            <li><a href="#" class="flex transition hover:bg-accentDarkerBgBlue py-4 px-7 rounded-b-lg">Logout</a></li>
                        </ul>
                    </x-dropdown>
                </li>
                <li><a href="{{ route('index.home') }}">Тарифы</a></li>
            </ul>
            <div class="flex items-center gap-4">
                <a href="{{ route('index.home') }}" class="button">Купить билет</a>
                @auth
                    <a href="{{ route('user.index') }}">
                        <x-heroicon-o-user class="size-[50px]"/>
                    </a>
                    <x-logout>
                        <x-heroicon-s-arrow-right-end-on-rectangle class="size-[50px]"/>
                    </x-logout>
                @endauth
                @guest
                    <button class="button" x-data @click="$dispatch('login', true)">Вход / Регистрация</button>
                @endguest
            </div>
        </div>
    </div>
</div>

