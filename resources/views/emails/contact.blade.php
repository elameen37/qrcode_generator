<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Contact Us | QRCode Generator</title>
</head>

<body>
    <header class="bg-black py-8">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}"><img src="{{ asset('logo/logo.png') }}" alt="Logo" class="h-16 w-16 mr-2"></a>
            <div class="flex items-center">
                <nav>
                    <a href="#" class="text-white mr-4">Home</a>
                    <a href="#" class="text-white">Dashboard</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="container mx-auto mt-8">
        <form class="max-w-lg mx-auto p-4 border border-gray-300 rounded shadow-md" enctype="" method="post" action="{{ route('contact') }}">

            @csrf
            <h2 class="text-3xl font-bold mb-4">Contact Me</h2>
            <div class="mb-4">
                <label for="name" class="block font-semibold">Name</label>
                <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded p-2">
            </div>
            <div class="mb-4">
                <label for="email" class="block font-semibold">Email</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded p-2">
            </div>
            <div class="mb-4">
                <label for="subject" class="block font-semibold">Subject</label>
                <input type="text" id="subject" name="subject" class="w-full border border-gray-300 rounded p-2">
            </div>            
            <div class="mb-4">
                <label for="message" class="block font-semibold">Message</label>
                <textarea id="message" name="message" class="w-full border border-gray-300 rounded p-2" rows="5"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">Submit</button>
        </form>
    </main>

    <footer class="bg-gray-200 py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Your Website. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>



