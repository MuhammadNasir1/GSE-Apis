<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <section class="flex flex-col items-center pt-6">
        <div>
            <div>
                <img class="w-[250px] mx-auto my-5" src="./assets/logo-full-white.svg" alt="" />
            </div>
            <!-- <h2
        class="text-xl leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center mt-4 mb-4"
      >
        Sign in to E-Portal
      </h2> -->
            <div
                class="w-[600px] bg-[#F6F8FA] rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-[#151B23] dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to E-Portal
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST">
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-[#0D1117] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus:border-gray-400"
                                placeholder="emelia@example.com" required="" />
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 dark:bg-[#0D1117] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus:border-gray-400"
                                required="" />
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-[#29903B] hover:bg-[#226d2d] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Sign In
                        </button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400 text-right">
                            <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                href="/forgot">Forgot password?</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
