<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Accountl</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900">

    <section class="min-h-screen flex items-stretch">

        <div class="hidden lg:block lg:w-5/12 relative">
            <img src="https://i.pinimg.com/736x/5b/7b/8d/5b7b8d66c074cf1e850d7ddc3c3f0fec.jpg" alt="Register Banner"
                class="absolute inset-0 w-full h-full object-cover">
        </div>

        <div class="w-full lg:w-7/12 flex flex-col justify-center items-center px-6 py-8 bg-gray-900 z-10">
            <div class="w-full bg-gray-900 rounded-lg md:mt-0 sm:max-w-xl xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                    <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                        Create your Account
                    </h1>
                    <p class="text-sm font-light text-gray-400">
                        Start your website in seconds. Already have an account?
                        <a href="/login" class="font-medium text-blue-500 hover:underline">Login here</a>.
                    </p>

                    <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-white">Your email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="bg-gray-700 border border-gray-600 text-white sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('email') border-red-500 @enderror"
                                    placeholder="name@company.com" required>
                                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-white">Full Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                    class="bg-gray-700 border border-gray-600 text-white sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Bonnie Green" required>
                                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                                <input type="password" name="password" id="password"
                                    class="bg-gray-700 border border-gray-600 text-white sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required>
                                @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="password_confirmation"
                                    class="block mb-2 text-sm font-medium text-white">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="bg-gray-700 border border-gray-600 text-white sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox"
                                    class="w-4 h-4 border border-gray-600 rounded bg-gray-700 focus:ring-3 focus:ring-blue-600 ring-offset-gray-800"
                                    required>
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-300">I accept the <a
                                        class="font-medium text-blue-500 hover:underline" href="#">Terms and
                                        Conditions</a></label>
                            </div>
                        </div>
                        @error('terms') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror

                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create
                            an account</button>

                    </form>
                </div>
            </div>
        </div>

    </section>