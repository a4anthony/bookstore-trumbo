<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@hasSection('title')
		<title>@yield('title') - {{ config('app.name') }}</title>
	@else
		<title>{{ config('app.name') }}</title>
	@endif

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<script src="https://cdn.tailwindcss.com"></script>

	<style type="text/tailwindcss">
        @layer utilities {
            .animate {
                @apply transition-all delay-100 duration-300 ease-in-out;
            }

			.btn {
				@apply animate inline-flex items-center rounded-3xl border border-transparent bg-blue-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2;
			}

			.btn-red {
				@apply animate inline-flex items-center rounded-3xl border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2;
			}

			.btn-white {
				@apply animate inline-flex items-center rounded-3xl border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2;
			}

			.input {
				@apply border border-gray-300 rounded-lg px-4 py-2 mt-2 focus:outline-none focus:border-blue-500;
            }

			.label {
				@apply text-gray-700 font-semibold;
			}

			.input-error{
				@apply border-red-500;
			}
			.error {
				@apply text-red-500 text-xs absolute left-0 -bottom-3.5;
			}
			.form-wrap {
				@apply my-12 max-w-lg mx-auto p-4 sm:p-6 w-full bg-white border shadow sm:rounded-2xl
			}
            .notify {
                @apply z-50 top-24;
            }
		}

		body{
			font-family: "Poppins", sans-serif;
		}

	</style>

	@notifyCss


	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50">
	<x:notify-messages />
    <x-navbar />
	{{ $slot }}
	@notifyJs
</body>
</html>
