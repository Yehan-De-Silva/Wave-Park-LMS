<?php include '../header.php'; ?>

<div class="container">
    <div class="card bg-white gap-5">
        <div class="d-flex align-items-center justify-content-center gap-5">
            <div class="toggle-btn active" id="signInToggle">Sign In</div>
            <div class="toggle-btn" id="signUpToggle">Sign Up</div>
        </div>
        
        <!-- Sign In Form -->
        <div class="form-container active" id="signInForm">
            <form>
                <div class="mb-4">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control">
                </div>
                &nbsp;
                <button type="submit" class="btn btn-custom w-100">Sign In</button>
            </form>
        </div>

        <!-- Sign Up Form -->
        <div class="form-container" id="signUpForm">
            <form>
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control">
                </div>
                &nbsp;
                <button type="submit" class="btn btn-custom w-100">Sign Up</button>
            </form>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>

<script>
    document.getElementById('signInToggle').addEventListener('click', function() {
        document.getElementById('signInForm').classList.add('active');
        document.getElementById('signUpForm').classList.remove('active');
        this.classList.add('active');
        document.getElementById('signUpToggle').classList.remove('active');
    });

    document.getElementById('signUpToggle').addEventListener('click', function() {
        document.getElementById('signUpForm').classList.add('active');
        document.getElementById('signInForm').classList.remove('active');
        this.classList.add('active');
        document.getElementById('signInToggle').classList.remove('active');
    });
</script>
