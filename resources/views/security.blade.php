<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(session('status')==='two-factor-authentication-enabled')
                        <div class="text-green-700">Two Factor Authentication has been enabled for your account</div><br/>
                        <div>Scan this Qr Code into your authenticator app</div><br/>
                        {!! request()->user()->TwoFactorQrCodeSvg() !!}<br/>
                        <div>Recovery codes:</div><br/>
                        @foreach(request()->user()->recoveryCodes() as $code) @endforeach
                        {{ $code }}<br/>
                    @endif
                    @if (request()->user()->two_factor_secret)
                            <p>You have Two Factor Authentication enabled</p><br/>
                            <form action="/user/two-factor-authentication" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    Disable 2FA
                                </button>
                            </form>
                        @else
                        <p>You do not have Two Factor Authentication enabled</p><br/>
                        <form action="/user/two-factor-authentication" method="POST">
                            @csrf
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Enable 2FA
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
