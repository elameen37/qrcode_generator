<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="flex bg-gray-100" style="height: 65vh;">
  <!-- PDF Upload Form -->
  <div class="w-1/2 p-8" style="height: 100%;">
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
  <div class="w-1/2 p-8 bg-white" style="height: 100%;">
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

<footer class="bg-gray-900 text-white py-4">
  <div class="container mx-auto flex justify-between items-center">
    <div class="ml-4">
      <a href="/" class="text-gray-300 hover:text-white pr-4">Home</a>
      <span class="text-gray-300">|</span>
      <a href="contact" class="text-gray-300 hover:text-white pl-4">Contact Us</a>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="language-selector flex justify-center ml-16">
      <a href="#" class="language-link text-gray-300 hover:text-white pr-4 font-medium">English</a>
      <span class="separator text-gray-300 hover:text-white pr-4 mx-2">|</span>
      <a href="#" class="language-link text-gray-300 hover:text-white pr-4 font-medium">العربية</a>
      <span class="separator text-gray-300 hover:text-white mx-2">|</span>
      <a href="#" class="language-link text-gray-300 hover:text-white pr-4 font-medium">Français</a>
      <span class="separator text-gray-300 hover:text-white mx-2">|</span>
      <a href="#" class="language-link text-gray-300 hover:text-white pr-4 font-medium">Español</a>
    </div>

    <div class="ml-auto mr-16">
      <a href="https://github.com/elameen37/qrcode_generator" class="text-gray-300 hover:text-white" target="_blank">
        <i class="fab fa-github h-6 w-6 inline-block">GITHUB</i>
      </a>
    </div>
  </div>
  </div>
</footer>

<script>
  function generateQRCode(type) {
    // Get the input value based on the form type
    let inputValue;
    if (type === 'pdf') {
      const pdfInput = document.getElementById('pdf');
      if (!pdfInput.files || !pdfInput.files[0]) {
        return; // No file selected, do nothing
      }
      inputValue = pdfInput.files[0].name;
    } else {
      const urlInput = document.getElementById('url');
      inputValue = urlInput.value;
      urlInput.value = ''; // Clear the URL input field
    }

    if (inputValue === '') {
      Swal.fire({
        title: 'Url field cannot be empty',
        icon: 'error',
        confirmButtonText: 'OK'
      });
      return; // Stop execution if input is empty
    }

    // if (!isValidURL(inputValue)) {
    //   Swal.fire({
    //     title: 'Invalid URL',
    //     text: 'Please enter a valid URL',
    //     icon: 'error',
    //     confirmButtonText: 'OK'
    //   });
    //   return; // Stop execution if URL is invalid
    // }

    // function isValidURL(url) {
    //   const pattern = new RegExp('^(https?:\\/\\/)?' + // protocol
    //     '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
    //     '((\\d{1,3}\\.){3}\\d{1,3}))' + // IP address
    //     '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
    //     '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
    //     '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator
    //   return !!pattern.test(url);
    // }

    // Generate the QR code
    const qrCodeUrl = 'https://api.qrserver.com/v1/create-qr-code/?color=FF0000&?size=300x200&data=' + encodeURIComponent(inputValue);

    // Create the HTML template for the buttons
    function createButtonsTemplate() {
      return `
        <div class="flex justify-between items-center">
          <div class="ml-4">
            <a href="#" id="downloadBtn" class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 focus:outline-none">Download QR Code</a>
          </div>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <div class="ml-auto mr-8">
            <button id="closePopupBtn" class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 focus:outline-none">
            <i class="fas fa-times"></i> Close Me
            </button>
          </div>
        </div>
      `;
    }

    // Function to download the QR code
    async function downloadQRCode(qrCodeUrl) {
      try {
        const response = await fetch(qrCodeUrl);
        const blob = await response.blob();

        // Create a temporary anchor element
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.setAttribute('download', 'qrcode.png');
        link.click();

        // Clean up the temporary anchor element
        URL.revokeObjectURL(link.href);
      } catch (error) {
        console.error('Failed to download QR code:', error);
      }
    }

    // Create the HTML template for the share buttons
    function createShareButtonsTemplate() {
      return `
    <div class="flex justify-end space-x-4 mt-4">
      <button class="share-button facebook"><i class="fab fa-facebook"></i> Share on Facebook</button>
      <button class="share-button instagram"><i class="fab fa-instagram"></i> Share on Instagram</button>
      <button class="share-button linkedin"><i class="fab fa-linkedin"></i> Share on LinkedIn</button>
    </div>
  `;
    }
    // Display the QR code in a popup with share buttons
    Swal.fire({
      imageUrl: qrCodeUrl,
      imageAlt: 'QRCode',
      showCancelButton: false,
      showConfirmButton: false,
      customClass: {
        content: 'py-6', // Increase the padding top and bottom
        html: createShareButtonsTemplate(), // Add share buttons
        html: createButtonsTemplate(), // Add Download and close buttons
      },
      footer: createShareButtonsTemplate(),
      footer: createButtonsTemplate(),
    });

    // Add an event listener to the download button
    document.getElementById('downloadBtn').addEventListener('click', function() {
      downloadQRCode(qrCodeUrl);
    });

    // Add an event listener to the close button
    document.getElementById('closePopupBtn').addEventListener('click', function() {
      Swal.close(); // Close the popup when the button is clicked
    });

    // Add event listeners to the share buttons
    document.querySelector('.share-button.facebook').addEventListener('click', function() {
      const shareUrl = generateShareUrl();
      shareOnFacebook(shareUrl);
    });

    document.querySelector('.share-button.instagram').addEventListener('click', function() {
      const shareUrl = generateShareUrl();
      shareOnInstagram(shareUrl);
    });

    document.querySelector('.share-button.linkedin').addEventListener('click', function() {
      const shareUrl = generateShareUrl();
      shareOnLinkedIn(shareUrl);
    });

    // Share on Facebook
    function shareOnFacebook(shareUrl) {
      // Open the Facebook share dialog
      window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(shareUrl), 'Facebook Share', 'width=600,height=400');
    }

    // Share on Instagram
    function shareOnInstagram(shareUrl) {
      // Open the Instagram share dialog
      window.open('https://www.instagram.com' + encodeURIComponent(shareUrl), 'Instagram Share', 'width=600,height=400');
    }

    // Share on LinkedIn
    function shareOnLinkedIn(shareUrl) {
      // Open the LinkedIn share dialog
      window.open('https://www.linkedin.com/shareArticle?url=' + encodeURIComponent(shareUrl), 'LinkedIn Share', 'width=600,height=400');
    }

    // Generate the share URL based on the current QR code data
    function generateShareUrl() {
      // Replace this with your actual share URL generation logic
      const qrCodeData = 'QR Code data';
      return 'https://aacode.com/share?data=' + encodeURIComponent(qrCodeData);
    }

    // Download the QR code
    // function downloadQRCode(qrCodeUrl) {
    //   const link = document.createElement('a');
    //   link.href = qrCodeUrl;
    //   link.download = 'qrcode.png';
    //   link.click();
    // }

    document.addEventListener('DOMContentLoaded', function() {
    const languageLinks = document.querySelectorAll('.language-link');

    languageLinks.forEach(function(link) {
      link.addEventListener('click', function(event) {
        event.preventDefault();
        const selectedLanguage = this.textContent;
        // Perform language change actions based on the selected language
        console.log('Selected Language:', selectedLanguage);
      });
    });
  });

  }
</script>