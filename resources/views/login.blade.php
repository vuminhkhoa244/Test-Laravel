<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">

    <section class="min-h-screen flex items-stretch">

        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center px-6 py-8 bg-gray-900 z-10">
            <div class="w-full bg-gray-900 rounded-lg md:mt-0 sm:max-w-xl xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                    <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                        Welcome back
                    </h1>

                    <div class="flex gap-4">
                        <button type="button"
                            class="w-full flex items-center justify-center gap-2 px-4 py-2 border border-gray-600 rounded-lg text-white hover:bg-gray-800 transition">
                            <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5"
                                alt="google logo">
                            <span class="text-sm font-medium">Google</span>
                        </button>
                        <button type="button"
                            class="w-full flex items-center justify-center gap-2 px-4 py-2 border border-gray-600 rounded-lg text-white hover:bg-gray-800 transition">
                            <img src="https://www.svgrepo.com/show/511330/apple-173.svg" class="w-5 h-5 invert"
                                alt="apple logo">
                            <span class="text-sm font-medium">Apple</span>
                        </button>
                    </div>

                    <div class="flex items-center justify-between">
                        <span class="w-1/5 border-b border-gray-600 lg:w-1/4"></span>
                        <span class="text-xs text-center text-gray-500 uppercase">or</span>
                        <span class="w-1/5 border-b border-gray-600 lg:w-1/4"></span>
                    </div>

                    <form class="space-y-4 md:space-y-6" action="#" method="POST">
                        @csrf

                        @if($errors->any())
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                                <span class="block sm:inline">{{ $errors->first() }}</span>
                            </div>
                        @endif

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-white" >Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="bg-gray-700 border border-gray-600 text-white sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="oii120yenlang@gmail.com"
                                required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                            <input type="password" name="password" id="password"
                                class="bg-gray-700 border border-gray-600 text-white sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="********"
                                required>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" name="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-600 rounded bg-gray-700 focus:ring-3 focus:ring-blue-600 ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium text-blue-500 hover:underline">Forgot password?</a>
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign
                            in to your account</button>
                        <p class="text-sm font-light text-gray-400">
                            Don’t have an account yet?
                            <a href="{{ route('register') }}" class="font-medium text-blue-500 hover:underline">Sign
                                up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden lg:block lg:w-1/2 relative">
            <img src="https://i.pinimg.com/736x/a9/71/8f/a9718fa627984ae71701c8fe769aaa87.jpg" alt="Login Banner"
                class="absolute inset-0 w-full h-full object-cover">
        </div>

    </section>

</body>

</html>