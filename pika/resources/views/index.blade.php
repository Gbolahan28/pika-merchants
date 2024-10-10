<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css" />
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css" />
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme5.css" />
  </head>
  <body>
    <div class="form-body">
      <div class="website-logo">
        <a href="http://pikahq.co/">
          <div class="logo">
            <img class="logo-size" src="images/logo-light.svg" alt="" />
          </div>
        </a>
      </div>
      <div class="iofrm-layout">
        <div class="img-box">
        </div>
        <div class="form-holder">
          <div class="form-content">
            <div class="form-items">
              <h3>Join Our WaitList</h3>
              <p style="font-weight: 400;">
                Don’t miss out—partner with Pika to elevate your business with affordable store solutions and high-earning delivery
                opportunities
              </p>
              <div class="page-links">
                <a href="index" class="active">Merchants</a
                ><a href="register5">Delivery Partners</a>
              </div>
<form action="{{ route('store-registration') }}" method="POST" id="myForm">
    @csrf
    <input
        class="form-control @error('storename') is-invalid @enderror"
        type="text"
        name="storename"
        placeholder="Store Name"
        value="{{ old('storename') }}"
        required
    />
    @error('storename')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <input
        class="form-control @error('ownername') is-invalid @enderror"
        type="text"
        name="ownername"
        placeholder="Owner's Name"
        value="{{ old('ownername') }}"
        required
    />
    @error('ownername')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <select
        class="form-control @error('stateOfOperation') is-invalid @enderror"
        name="stateOfOperation"
        style="margin-bottom: 12px"
        required
    >
        <option value="" disabled {{ old('stateOfOperation') ? '' : 'selected' }}>
            Select State of Operation
        </option>
        @php
            $states = [
                'Abia', 'Adamawa', 'Akwa Ibom', 'Anambra', 'Bauchi', 'Bayelsa', 'Benue', 
                'Borno', 'Cross River', 'Delta', 'Ebonyi', 'Edo', 'Ekiti', 'Enugu', 
                'Gombe', 'Imo', 'Jigawa', 'Kaduna', 'Kano', 'Katsina', 'Kebbi', 'Kogi', 
                'Kwara', 'Lagos', 'Nasarawa', 'Niger', 'Ogun', 'Ondo', 'Osun', 'Oyo', 
                'Plateau', 'Rivers', 'Sokoto', 'Taraba', 'Yobe', 'Zamfara', 'FCT'
            ];
        @endphp
        @foreach($states as $state)
            <option value="{{ $state }}" {{ old('stateOfOperation') == $state ? 'selected' : '' }}>
                {{ $state }}
            </option>
        @endforeach
    </select>
    @error('stateOfOperation')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <input
        class="form-control @error('businessAddress') is-invalid @enderror"
        type="text"
        name="businessAddress"
        placeholder="Address of business"
        value="{{ old('businessAddress') }}"
        required
    />
    @error('businessAddress')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <input
        class="form-control @error('email') is-invalid @enderror"
        type="email"
        name="email"
        placeholder="Email Address"
        value="{{ old('email') }}"
        required
    />
    @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <input
        class="form-control @error('phone_number') is-invalid @enderror"
        type="tel"
        name="phone_number"
        placeholder="Phone Number"
        value="{{ old('phone_number') }}"
        required
    />
    @error('phone_number')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <input
        class="form-control @error('instagram') is-invalid @enderror"
        type="text"
        name="instagram"
        placeholder="Instagram Handle"
        value="{{ old('instagram') }}"
        required
    />
    @error('instagram')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <input
        class="form-control @error('twitter') is-invalid @enderror"
        type="text"
        name="twitter"
        placeholder="Twitter Handle"
        value="{{ old('twitter') }}"
    />
    @error('twitter')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <input
        class="form-control @error('website') is-invalid @enderror"
        type="url"
        name="website"
        placeholder="Website"
        value="{{ old('website') }}"
    />
    @error('website')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <input
        class="form-control @error('referralink') is-invalid @enderror"
        type="text"
        name="referralink"
        placeholder="Referral Link"
        value="{{ old('referralink') }}"
    />
    @error('referralink')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    <div class="form-button">
        <button id="submit" type="submit" class="ibtn">
            Register
        </button>
    </div>
</form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('myForm');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitButton = document.getElementById('submit');
        submitButton.disabled = true;
        submitButton.textContent = 'Registering...';
        
        // Clear any existing error messages
        form.querySelectorAll('.is-invalid').forEach(input => {
            input.classList.remove('is-invalid');
            const feedbackDiv = input.nextElementSibling;
            if (feedbackDiv && feedbackDiv.classList.contains('invalid-feedback')) {
                feedbackDiv.textContent = '';
            }
        });
        
        const formData = new FormData(form);
        
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            credentials: 'same-origin'
        })
        .then(async response => {
            const contentType = response.headers.get('content-type');
            if (contentType && contentType.includes('application/json')) {
                const data = await response.json();
                if (!response.ok) {
                    if (response.status === 422) {
                        return data; // Return validation errors to be handled
                    }
                    throw new Error(data.message || `HTTP error! status: ${response.status}`);
                }
                return data;
            } else {
                const text = await response.text();
                throw new Error(`Unexpected response type: ${contentType}. Response text: ${text}`);
            }
        })
        .then(data => {
            if (data.errors) {
                console.log('Validation errors:', data.errors);
                Object.keys(data.errors).forEach(field => {
                    const input = form.querySelector(`[name="${field}"]`);
                    if (input) {
                        input.classList.add('is-invalid');
                        const feedbackDiv = input.nextElementSibling;
                        if (feedbackDiv && feedbackDiv.classList.contains('invalid-feedback')) {
                            feedbackDiv.textContent = data.errors[field][0];
                        } else {
                            // Create a new feedback div if it doesn't exist
                            const newFeedbackDiv = document.createElement('div');
                            newFeedbackDiv.classList.add('invalid-feedback');
                            newFeedbackDiv.textContent = data.errors[field][0];
                            input.parentNode.insertBefore(newFeedbackDiv, input.nextSibling);
                        }
                    }
                });
            } else if (data.success) {
                console.log('Redirecting to:', data.redirect);
                window.location.href = data.redirect;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert(`An error occurred while submitting the form: ${error.message}`);
        })
        .finally(() => {
            submitButton.disabled = false;
            submitButton.textContent = 'Register';
        });
    });
});
    </script>
  </body>
</html>
