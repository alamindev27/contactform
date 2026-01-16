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
    <div class="card">
        <div class="p-4 mx-auto max-w-xl bg-white">
            <h2 class="text-3xl text-slate-900 font-bold">Contact us</h2>
            <form class="mt-8 space-y-5" action="/submit/message" method="POST">
                @csrf

                @session('success')
                    <div id="success-submit" class="flex sm:items-center p-4 mb-4 text-sm text-fg-success-strong rounded-base bg-success-soft"
                        role="alert">
                        <svg class="w-4 h-4 shrink-0 mt-0.5 md:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-2 text-sm ">
                            Success! {{ session('success') }}
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 rounded focus:ring-2 focus:ring-success-medium p-1.5 hover:bg-success-medium inline-flex items-center justify-center h-8 w-8 shrink-0 shrink-0"
                            data-dismiss-target="#success-submit" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18 17.94 6M18 18 6.06 6" />
                            </svg>
                        </button>
                    </div>
                @endsession

                <div>
                    <label class='text-sm text-slate-900 font-medium mb-2 block'>Name</label>
                    <input type='text' placeholder='Enter Name'
                        class="w-full py-2.5 px-4 text-slate-800 bg-gray-100 border border-gray-200 focus:border-slate-900 focus:bg-transparent text-sm outline-0 transition-all"
                        name="name" />
                    @error('name')
                        <small class="text-red-800">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label class='text-sm text-slate-900 font-medium mb-2 block'>Email</label>
                    <input type='email' placeholder='Enter Email'
                        class="w-full py-2.5 px-4 text-slate-800 bg-gray-100 border border-gray-200 focus:border-slate-900 focus:bg-transparent text-sm outline-0 transition-all"
                        name="email" />
                    @error('email')
                        <small class="text-red-800">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label class='text-sm text-slate-900 font-medium mb-2 block'>Subject</label>
                    <input type='text' placeholder='Enter Subject'
                        class="w-full py-2.5 px-4 text-slate-800 bg-gray-100 border border-gray-200 focus:border-slate-900 focus:bg-transparent text-sm outline-0 transition-all"
                        name="subject" />
                    @error('subject')
                        <small class="text-red-800">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label class='text-sm text-slate-900 font-medium mb-2 block'>Message</label>
                    <textarea placeholder='Enter Message' rows="6"
                        class="w-full px-4 text-slate-800 bg-gray-100 border border-gray-200 focus:border-slate-900 focus:bg-transparent text-sm pt-3 outline-0 transition-all"
                        name="message"></textarea>
                    @error('message')
                        <small class="text-red-800">{{ $message }}</small>
                    @enderror
                </div>
                <button type='submit'
                    class="text-white bg-slate-900 font-medium hover:bg-slate-800 tracking-wide text-sm px-4 py-2.5 w-full border-0 outline-0 cursor-pointer">Send
                    message</button>
            </form>
        </div>
    </div>
</body>

</html>
