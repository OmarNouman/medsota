@include('backend.includes.styles')
@include('backend.includes.scripts')
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100" id="login-body">
            <div class="col-md-3 col-lg-3 col-xl-3">
                <img src="{{ asset('assets/images/backend/logo.png') }}" class="img-fluid">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="{{ route('checkAuth') }}">
                    @csrf

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email address</label>
                        <input type="text" id="email" class="form-control form-control-lg"
                            placeholder="Enter a valid Email address" name="email" required />
                        @if (session()->has('message'))
                            <span class="text-danger">{{ session()->get('message') }}</span>
                        @endif
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control form-control-lg"
                            placeholder="Enter password" required name="password" />
                        @if (session()->has('message'))
                            <span class="text-danger">{{ session()->get('message') }}</span>
                        @endif

                    </div>
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <input type="submit" value="Login" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;" id="login-button">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5"
        id="login-footer">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            <p class="m-0">Powered by <a href="http://luminary-solutions.om/" target="_blank"><strong>Luminary Solutions ♥</strong></a>
            </p>
        </div>
        <!-- Copyright -->

        <!-- Right -->
        <div>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <!-- Right -->
    </div>
</section>
