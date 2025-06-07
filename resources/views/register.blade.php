@include('style', ['title' => 'Registration'])
<div class="container mt-5 mb-5 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card shadow-lg border-0" style="width: 100%; max-width: 900px; background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);">
    <div class="card-header bg-gradient-primary text-white text-center" style="background: linear-gradient(90deg, #6366f1 0%, #3b82f6 100%); border-top-left-radius: .5rem; border-top-right-radius: .5rem;">
      <h2 class="mb-0 fw-bold">Registration Form</h2>
      <p class="mb-0 small">Create your profile to get started</p>
    </div>
    <div class="card-body p-4">
      <form action="{{url('register')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf

        <!-- Personal Info -->
        <h4 class="mb-3 mt-3 text-primary fw-semibold"><i class="bi bi-person-circle me-2"></i>Personal Information</h4>
        <div class="row mb-3">
          <div class="col-md-6 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Full Name</label>
            <input type="text" name="full_name" class="form-control rounded-pill shadow-sm" value="{{ old('full_name') }}">
            @error('full_name')
              <span class="text-danger small mt-1">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold">Gender</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Male" {{old('gender') == 'Male' ? 'checked' : ''}}>
                <label class="form-check-label">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Female" {{old('gender') == 'Female' ? 'checked' : ''}}>
                <label class="form-check-label">Female</label>
              </div>
              @error('gender')
              <span class="text-danger small mt-1 d-block">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-4 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Date of Birth</label>
            <input type="date" name="dob" class="form-control rounded-pill shadow-sm" value="{{ old('dob') }}">
            @error('dob')
              <span class="text-danger small mt-1">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Height (cm)</label>
            <input type="number" name="height" class="form-control rounded-pill shadow-sm" value="{{ old('height') }}">
            @error('height')
              <span class="text-danger small mt-1">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-4">
            <label class="form-label fw-semibold">Weight (kg)</label>
            <input type="number" name="weight" class="form-control rounded-pill shadow-sm" value="{{ old('weight') }}">
            @error('weight')
              <span class="text-danger small mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Marital Status</label>
          <select name="marital_status" class="form-select rounded-pill shadow-sm">
            <option value="">-- Select --</option>
            <option value="Never Married" {{old('marital_status')=="Never Married" ? 'selected' : ''}}>Never Married</option>
            <option value="Divorced" {{old('marital_status')=="Divorced" ? 'selected' : ''}}>Divorced</option>
            <option value="Widowed" {{old('marital_status')=="Widowed" ? 'selected' : ''}}>Widowed</option>
            <option value="Separated" {{old('marital_status')=="Separated" ? 'selected' : ''}}>Separated</option>
          </select>
          @error('marital_status')
            <span class="text-danger small mt-1">{{ $message }}</span>
          @enderror
        </div>

        <!-- Religion & Culture -->
        <h4 class="mb-3 mt-4 text-primary fw-semibold"><i class="bi bi-people-fill me-2"></i>Religious & Cultural Info</h4>
        <div class="row mb-3">
          <div class="col-md-3 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Religion</label>
            <select name="religion" class="form-select rounded-pill shadow-sm">
              <option value="">-- Select --</option>
              <option value="Christian" {{old('religion')=="Christian" ? 'selected' : ''}}>Christian</option>
              <option value="Hindu" {{old('religion')=="Hindu" ? 'selected' : ''}}>Hindu</option>
              <option value="Muslim" {{old('religion')=="Muslim" ? 'selected' : ''}}>Muslim</option>
              <option value="Sikh" {{old('religion')=="Sikh" ? 'selected' : ''}}>Sikh</option>
              <option value="Other" {{old('religion')=="Other" ? 'selected' : ''}}>Other</option>
            </select>
            @error('religion')
              <span class="text-danger small mt-1">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-3 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Caste</label>
            <input type="text" name="caste" class="form-control rounded-pill shadow-sm" value="{{ old('caste') }}">
            @error('caste')
              <span class="text-danger small mt-1">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-3 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Mother Tongue</label>
            <input type="text" name="mother_tongue" class="form-control rounded-pill shadow-sm" value="{{ old('mother_tongue') }}">
            @error('mother_tongue')
              <span class="text-danger small mt-1">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-3">
            <label class="form-label fw-semibold">Nationality</label>
            <input type="text" name="nationality" value="Indian" class="form-control rounded-pill shadow-sm" readonly>
            @error('nationality')
              <span class="text-danger small mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <!-- Professional & Education -->
        <h4 class="mb-3 mt-4 text-primary fw-semibold"><i class="bi bi-mortarboard-fill me-2"></i>Education & Profession</h4>
        <div class="row mb-3">
          <div class="col-md-4 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Highest Qualification</label>
            <input type="text" name="qualification" class="form-control rounded-pill shadow-sm" value="{{ old('qualification') }}">
            @error('qualification')
              <span class="text-danger small mt-1">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Occupation</label>
            <input type="text" name="occupation" class="form-control rounded-pill shadow-sm">
          </div>
          <div class="col-md-4">
            <label class="form-label fw-semibold">Annual Income</label>
            <input type="text" name="income" class="form-control rounded-pill shadow-sm">
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Company / Business Name</label>
          <input type="text" name="company" class="form-control rounded-pill shadow-sm">
        </div>

        <!-- Lifestyle & Hobbies -->
        <h4 class="mb-3 mt-4 text-primary fw-semibold"><i class="bi bi-heart-pulse-fill me-2"></i>Lifestyle & Hobbies</h4>
        <div class="row mb-3">
          <div class="col-md-4 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Diet</label>
            <select name="diet" class="form-select rounded-pill shadow-sm">
              <option value="">-- Select --</option>
              <option value="Vegetarian">Vegetarian</option>
              <option value="Non-Vegetarian">Non-Vegetarian</option>
              <option value="Eggetarian">Eggetarian</option>
            </select>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Smoking</label>
            <select name="smoking" class="form-select rounded-pill shadow-sm">
              <option value="">-- Select --</option>
              <option value="No">No</option>
              <option value="Occasionally">Occasionally</option>
              <option value="Yes">Yes</option>
            </select>
          </div>
          <div class="col-md-4">
            <label class="form-label fw-semibold">Drinking</label>
            <select name="drinking" class="form-select rounded-pill shadow-sm">
              <option value="">-- Select --</option>
              <option value="No">No</option>
              <option value="Occasionally">Occasionally</option>
              <option value="Yes">Yes</option>
            </select>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Hobbies/Interests</label>
          <input type="text" name="hobbies" class="form-control rounded-pill shadow-sm">
        </div>

        <!-- Family Details -->
        <h4 class="mb-3 mt-4 text-primary fw-semibold"><i class="bi bi-house-heart-fill me-2"></i>Family Details</h4>
        <div class="row mb-3">
          <div class="col-md-3 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Father's Name</label>
            <input type="text" name="father_name" class="form-control rounded-pill shadow-sm">
          </div>
          <div class="col-md-3 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Mother's Name</label>
            <input type="text" name="mother_name" class="form-control rounded-pill shadow-sm">
          </div>
          <div class="col-md-3 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Father's Occupation</label>
            <input type="text" name="father_occupation" class="form-control rounded-pill shadow-sm">
          </div>
          <div class="col-md-3">
            <label class="form-label fw-semibold">Mother's Occupation</label>
            <input type="text" name="mother_occupation" class="form-control rounded-pill shadow-sm">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-3 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Number of Brothers</label>
            <input type="number" name="brothers" class="form-control rounded-pill shadow-sm">
          </div>
          <div class="col-md-3 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Brothers Married?</label>
            <select name="brothers_married" class="form-select rounded-pill shadow-sm">
              <option value="">-- Select --</option>
              <option value="no">No</option>
              <option value="yes">Yes</option>
            </select>
          </div>
          <div class="col-md-3 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Number of Sisters</label>
            <input type="number" name="sisters" class="form-control rounded-pill shadow-sm">
          </div>
          <div class="col-md-3">
            <label class="form-label fw-semibold">Sisters Married?</label>
            <select name="sisters_married" class="form-select rounded-pill shadow-sm">
              <option value="">-- Select --</option>
              <option value="no">No</option>
              <option value="yes">Yes</option>
            </select>
          </div>
        </div>

        <!-- Contact Info -->
        <h4 class="mb-3 mt-4 text-primary fw-semibold"><i class="bi bi-envelope-fill me-2"></i>Contact & Login</h4>
        <div class="row mb-3">
          <div class="col-md-4 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Phone Number</label>
            <input type="tel" name="phone" class="form-control rounded-pill shadow-sm" value="{{ old('phone') }}">
            @error('phone')
              <span class="text-danger small mt-1">{{ $message }}</span>
            @enderror
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <label class="form-label fw-semibold">Alternate Phone</label>
            <input type="tel" name="alt_phone" class="form-control rounded-pill shadow-sm">
          </div>
          <div class="col-md-4">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" name="email" class="form-control rounded-pill shadow-sm">
            @error('email')
              <span class="text-danger small mt-1">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Password</label>
          <input type="password" name="password" class="form-control rounded-pill shadow-sm">
          @error('password')
            <span class="text-danger small mt-1">{{ $message }}</span>
          @enderror
        </div>

        <!-- Uploads -->
        <h4 class="mb-3 mt-4 text-primary fw-semibold"><i class="bi bi-image-fill me-2"></i>Upload Profile Photo</h4>
        <div class="mb-3">
          <label class="form-label fw-semibold">Profile Picture (JPG/PNG)</label>
          <input type="file" name="photo" accept="image/*" class="form-control rounded-pill shadow-sm">
          @error('photo')
            <span class="text-danger small mt-1">{{ $message }}</span>
          @enderror
        </div>

        <!-- Submit -->
        <div class="text-end mt-4">
          <button type="submit" class="btn btn-gradient px-5 py-2 fw-bold rounded-pill shadow" style="background: linear-gradient(90deg, #6366f1 0%, #3b82f6 100%); color: #fff; border: none;">
            <i class="bi bi-person-plus-fill me-2"></i>Register
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap Icons CDN (for icons) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
  .btn-gradient:hover {
    background: linear-gradient(90deg, #3b82f6 0%, #6366f1 100%) !important;
    color: #fff !important;
    box-shadow: 0 4px 20px rgba(59, 130, 246, 0.2);
    transform: translateY(-2px) scale(1.03);
  }
  .card {
    border-radius: .75rem;
  }
  .form-control:focus, .form-select:focus {
    border-color: #6366f1;
    box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.15);
  }
  h4 i {
    color: #6366f1;
  }
</style>
