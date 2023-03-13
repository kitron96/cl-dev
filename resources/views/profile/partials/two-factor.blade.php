<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Two Factor Authentication') }}
        </h2>
    </header>
                <p class="text-gray-900 dark:text-gray-100">
                    @if(session('status')==='two-factor-authentication-enabled')
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Two Factor Authentication has been enabled for your account.</p><br/>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Scan this Qr Code into your authenticator app.</p><br/>
                        <div class="flex w-2/6 p-2 bg-white border-b-red-600 rounded-lg justify-center">
                            {!! request()->user()->TwoFactorQrCodeSvg() !!}
                        </div><br/>
                    @endif
                    @if (request()->user()->two_factor_secret)
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">You have Two Factor Authentication enabled.</p><br/>
                        <p class="mt-1 text-md text-gray-600 dark:text-gray-400">Recovery code:</p>
                        @foreach(request()->user()->recoveryCodes() as $code) @endforeach
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ $code }}</p><br/>
                        <form action="/user/two-factor-authentication" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Disable 2FA
                            </button>
                        </form>
                    @else
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">You do not have Two Factor Authentication enabled.</p><br/>
                        <form action="/user/two-factor-authentication" method="POST">
                            @csrf
                            <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Enable 2FA
                            </button>
                        </form>
                    @endif
</section>
