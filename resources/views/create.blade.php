<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Contact</title>
</head>

<body>




    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div class="w-full max-w-xl bg-white rounded-xl shadow-lg border border-gray-200">

            <!-- Card Header -->
            <div class="px-6 py-5 border-b">
                <h2 class="text-2xl font-bold text-slate-900">Contact us</h2>
                <p class="text-sm text-slate-500 mt-1">
                    We’d love to hear from you. Please fill out the form below.
                </p>
            </div>

            <!-- Card Body -->
            <div class="p-6">
                <form class="space-y-5" action="/submit/message" method="POST">
                    @csrf

                    @session('success')
                        <div id="success-submit"
                            class="flex items-start p-4 mb-4 text-sm text-green-700 rounded-lg bg-green-50" role="alert">
                            <span class="font-medium">Success!</span>&nbsp;{{ session('success') }}
                        </div>
                    @endsession

                    <div>
                        <label class="text-sm font-medium text-slate-900 mb-2 block">Name</label>
                        <input type="text" name="name" placeholder="Enter Name"
                            class="w-full py-2.5 px-4 text-sm bg-gray-100 border border-gray-200 rounded-md focus:bg-white focus:border-slate-900 outline-none transition">
                        @error('name')
                            <small class="text-red-700">{{ $message }}</small>
                        @enderror
                    </div>

                    <div>
                        <label class="text-sm font-medium text-slate-900 mb-2 block">Email</label>
                        <input type="email" name="email" placeholder="Enter Email"
                            class="w-full py-2.5 px-4 text-sm bg-gray-100 border border-gray-200 rounded-md focus:bg-white focus:border-slate-900 outline-none transition">
                        @error('email')
                            <small class="text-red-700">{{ $message }}</small>
                        @enderror
                    </div>

                    <div>
                        <label class="text-sm font-medium text-slate-900 mb-2 block">Subject</label>
                        <input type="text" name="subject" placeholder="Enter Subject"
                            class="w-full py-2.5 px-4 text-sm bg-gray-100 border border-gray-200 rounded-md focus:bg-white focus:border-slate-900 outline-none transition">
                        @error('subject')
                            <small class="text-red-700">{{ $message }}</small>
                        @enderror
                    </div>

                    <div>
                        <label class="text-sm font-medium text-slate-900 mb-2 block">Message</label>
                        <textarea name="message" rows="5" placeholder="Enter Message"
                            class="w-full px-4 pt-3 text-sm bg-gray-100 border border-gray-200 rounded-md focus:bg-white focus:border-slate-900 outline-none transition"></textarea>
                        @error('message')
                            <small class="text-red-700">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-slate-900 text-white py-2.5 rounded-md text-sm font-medium hover:bg-slate-800 transition">
                        Send message
                    </button>
                </form>
            </div>

        </div>
    </div>







</body>

</html>
