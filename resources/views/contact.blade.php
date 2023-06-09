<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Contact Us | QR-Me</title>
</head>

<body>
    <header class="bg-black py-3">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}"><img src="{{ asset('logo/logo_tech.png') }}" alt="Logo" class="h-15 w-36 mr-2"></a>
            <div class="flex items-center">
                <nav>
                    <a href="/" class="text-white mr-4">Home</a>
                    <a href="dashboard" class="text-white">Dashboard</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-white ml-4" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg class="w-5 h-5 fill-current inline-block" viewBox="0 0 20 20">
                            <path d="M13 7V5a5 5 0 0 0-5-5H5a5 5 0 0 0-5 5v10a5 5 0 0 0 5 5h8a5 5 0 0 0 5-5v-2h-2v2a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h3v2H5a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V7h-2z" />
                        </svg>
                        Logout
                    </a>
                </nav>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </div>
        </div>
    </header>

    <main class="container mx-auto mt-8 mb-8">
        <div class="flex">
            <!-- Form container -->
            <div class="w-full lg:w-2/3 pr-8">
                @if(Session::has('message_sent'))
                <div class="bg-green-500 text-white p-4" role="alert">
                    {{ Session::get('message_sent') }}
                </div>
                @endif
                <form class="max-w-lg mx-auto p-4 border border-gray-300 rounded shadow-md" enctype="multipart/form-data" method="post" action="{{ route('contact.send') }}">

                    @csrf
                    <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
                    <div class="mb-4">
                        <label for="name" class="block font-semibold">Name</label>
                        <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded p-2" required />
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block font-semibold">Email</label>
                        <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded p-2" required />
                    </div>
                    <div class="mb-4">
                        <label for="subject" class="block font-semibold">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full border border-gray-300 rounded p-2" required />
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block font-semibold">Message</label>
                        <textarea id="message" name="message" class="w-full border border-gray-300 rounded p-2" rows="5"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-black hover:bg-gray-600 text-white font-semibold px-4 py-2 rounded">Submit</button>
                </form>
            </div>
            <!-- Additional container -->
            <div class="w-full lg:w-1/2 bg-black p-4 rounded">
                <p class="text-white font-bold mb-4 text-3xl">Contact Address</p><br><br>
                <div class="flex items-center text-white">
                    <div class="mr-4">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <p class="mb-2">123 Example Street,</p>
                        <p class="mb-2">City, State, ZIP</p>
                        <p class="mb-2">Country</p>
                    </div>
                </div>

                <div class="flex items-center text-white mt-4">
                    <div class="mr-4">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div>
                        <p class="mb-2">123-456-7890</p>
                        <p class="mb-2">123-456-7890</p>
                        <p class="mb-2">123-456-7890</p>
                    </div>
                </div>

                <div class="flex items-center text-white mt-4">
                    <div class="mr-4">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <p class="mb-2">info@qr-me.com</p>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer class="bg-black text-white py-5">
        <div class="container mx-auto flex justify-between items-center">
            <div class="ml-4">
                All rights reserved &copy; 2023
            </div>
            <div class="ml-auto">
                <a href="https://github.com/elameen37/qrcode_generator" class="text-white hover:text-gray-400" target="_blank">
                    <i class="fab fa-github h-6 w-6 inline-block">GITHUB </i>
                </a>
            </div>
        </div>
    </footer>
</body>

</html>