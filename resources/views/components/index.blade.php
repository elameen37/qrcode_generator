<div class="flex bg-gray-100 min-h-screen">
  <!-- PDF Upload Form -->
  <div class="w-1/2 p-8">
    <h2 class="text-2xl font-bold mb-4">Generate QR Code from PDF</h2>
    <form id="pdfForm" enctype="multipart/form-data">
      @csrf
      <div class="mb-4">
        <label for="pdf" class="block mb-2 text-lg font-medium text-gray-800">Upload PDF</label>
        <input type="file" id="pdf" name="pdf" accept="application/pdf" required class="w-full">
      </div>
      <button type="button" onclick="generateQRCode('pdf')" class="px-6 py-3 text-lg font-medium text-white bg-black rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
        Generate QR Code
      </button>
    </form>
    <p class="mt-4">Instructions:</p>
    <ol class="list-decimal ml-6 mt-2">
      <li>Select a PDF file to upload.</li>
      <li>Click the "Generate QR Code" button.</li>
      <li>A QR code will be generated from the uploaded PDF.</li>
    </ol>
  </div>

  <!-- URL Form -->
  <div class="w-1/2 p-8 bg-white">
    <h2 class="text-2xl font-bold mb-4">Generate QR Code from URL</h2>
    <form id="urlForm">
      <div class="mb-4">
        <label for="url" class="block mb-2 text-lg font-medium text-gray-800">URL</label>
        <input type="url" id="url" name="url" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-gray-500 focus:border-gray-500">
      </div>
      <button type="button" onclick="generateQRCode('url')" class="px-6 py-3 text-lg font-medium text-white bg-black rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
        Generate QR Code
      </button>
    </form>
    <p class="mt-4">Instructions:</p>
    <ol class="list-decimal ml-6 mt-2">
      <li>Enter the URL for which you want to generate a QR code.</li>
      <li>Click the "Generate QR Code" button.</li>
      <li>A QR code will be generated from the provided URL.</li>
    </ol>
  </div>
</div>

<!-- Pop-up Modal -->
<div x-data="{ isOpen: false, content: '' }" x-show="isOpen" class="fixed inset-0 flex items-center justify-center z-10 bg-gray-900 bg-opacity-50">
  <div class="bg-white rounded-lg p-8 max-w-md">
    <div class="text-lg font-medium mb-4">Generated QR Code</div>
    <div class="text-center">
      <img :src="content" alt="QR Code" class="mx-auto mb-4">
    </div>
    <div class="flex justify-center">
      <button @click="isOpen = false" class="px-6 py-3 text-lg font-medium text-white bg-gray-500 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
        Close
      </button>
    </div>
  </div>
</div>

<footer class="bg-gray-900 text-white py-4">
  <div class="container mx-auto flex justify-center items-center">
    <a href="/" class="text-gray-300 hover:text-white pr-4">Home</a>
    <span class="text-gray-300">|</span>
    <a href="#" class="text-gray-300 hover:text-white pl-4">Contact</a>
  </div>
</footer>



<script>
  function generateQRCode(type) {
    let formData;
    let url;

    if (type === 'pdf') {
      formData = new FormData(document.getElementById('pdfForm'));
      url = '';
    } else if (type === 'url') {
      const urlInput = document.getElementById('url');
      formData = new URLSearchParams(new FormData(document.getElementById('urlForm')));
      url = '' + formData.toString();
    }

    fetch(url, {
      method: 'POST',
      body: formData
    })
      .then(response => response.json())
      .then(data => {
        if (data.content) {
          const modal = document.querySelector('[x-data]');
          modal.content = data.content;
          modal.isOpen = true;
        }
      })
      .catch(error => {
        console.error(error);
      });
  }
</script>
