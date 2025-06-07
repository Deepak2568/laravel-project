@include('style', ['title' => 'Home'])

<div class="row justify-content-center align-items-center min-vh-100 bg-light" style="background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);">
    <div class="col-md-6 col-lg-5">
         <div class="text-center mt-2">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                   {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h3 class="fw-bold" style="color:#4f46e5;">Welcome to the Idaikattur SHS Matrimony Website</h3>
            <p class="lead text-muted">Find your soulmate and start your new journey with us.<br>
                <span class="badge bg-primary bg-gradient mt-2">Safe &amp; Secure</span>
                <span class="badge bg-success bg-gradient mt-2">Verified Profiles</span>
                <span class="badge bg-warning text-dark bg-gradient mt-2">100% Privacy</span>
            </p>
        </div>
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <img src="https://img.icons8.com/fluency/96/000000/wedding-rings.png" alt="Matrimony" class="mb-3" style="width:64px;">
                    <h2 class="card-title fw-bold mb-2" style="color:#4f46e5;">Login</h2>
                    <p class="text-muted mb-0">Sign in to find your perfect match</p>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email address/Phone Number</label>
                        <input type="email" class="form-control rounded-pill px-4 py-2" id="email" name="email" required autofocus placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" class="form-control rounded-pill px-4 py-2" id="password" name="password" required placeholder="Enter your password">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <a href="#" class="small text-decoration-none text-primary">Forgot Password?</a>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary rounded-pill py-2 fw-semibold" style="background: linear-gradient(90deg, #6366f1 0%, #818cf8 100%); border: none;">Login</button>
                        <a href="{{url('register')}}" class="btn btn-outline-primary rounded-pill py-2 fw-semibold">Register</a>
                        <a href="{{url('view')}}" class="btn btn-outline-primary rounded-pill py-2 fw-semibold">View Profiles</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row justify-content-center mb-4">
        <!-- Bride Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-4 h-100">
                <div class="card-body text-center">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Bride" class="rounded-circle mb-3" style="width:80px; height:80px; object-fit:cover;">
                    <h5 class="card-title fw-bold" style="color:#d946ef;">Priya S</h5>
                    <p class="mb-1 text-muted">Age: 25</p>
                    <p class="mb-1 text-muted">Education: B.E. (CSE)</p>
                    <p class="mb-1 text-muted">Location: Madurai</p>
                    <span class="badge bg-success bg-gradient">Bride</span>
                </div>
            </div>
        </div>
        <!-- Bride Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-4 h-100">
                <div class="card-body text-center">
                    <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Bride" class="rounded-circle mb-3" style="width:80px; height:80px; object-fit:cover;">
                    <h5 class="card-title fw-bold" style="color:#d946ef;">Anitha R</h5>
                    <p class="mb-1 text-muted">Age: 24</p>
                    <p class="mb-1 text-muted">Education: M.Sc. (Maths)</p>
                    <p class="mb-1 text-muted">Location: Trichy</p>
                    <span class="badge bg-success bg-gradient">Bride</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <!-- Groom Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-4 h-100">
                <div class="card-body text-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Groom" class="rounded-circle mb-3" style="width:80px; height:80px; object-fit:cover;">
                    <h5 class="card-title fw-bold" style="color:#2563eb;">Arun K</h5>
                    <p class="mb-1 text-muted">Age: 28</p>
                    <p class="mb-1 text-muted">Education: M.B.A.</p>
                    <p class="mb-1 text-muted">Location: Sivaganga</p>
                    <span class="badge bg-primary bg-gradient">Groom</span>
                </div>
            </div>
        </div>
        <!-- Groom Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-4 h-100">
                <div class="card-body text-center">
                    <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="Groom" class="rounded-circle mb-3" style="width:80px; height:80px; object-fit:cover;">
                    <h5 class="card-title fw-bold" style="color:#2563eb;">Vijay M</h5>
                    <p class="mb-1 text-muted">Age: 27</p>
                    <p class="mb-1 text-muted">Education: B.Tech (IT)</p>
                    <p class="mb-1 text-muted">Location: Chennai</p>
                    <span class="badge bg-primary bg-gradient">Groom</span>
                </div>
            </div>
        </div>
    </div>
</div>