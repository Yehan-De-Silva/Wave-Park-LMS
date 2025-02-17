<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #0d3b56 !important;
            justify-content: center !important;
            
        }
        .card {
            border-radius: 30px !important;
            padding: 50px;
            max-width: 500px;
            margin: 100px auto;
            
        }
        .toggle-btn {
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            color: #000;
        }
        .toggle-btn.active {
            color: #0099ff;
            border-bottom: 2px solid #0099ff;
            padding-bottom: 5px;
        }
        .form-container {
            display: none;
        }
        .form-container.active {
            display: block;
        }
        .form-container label{
            color: #0099ff;
        }
        .form-container input{
            border-color: #0099ff;
        }
        .btn-custom {
            background-color: #0099ff !important;
            color: white !important;
            font-weight: bold !important;
        }
    </style>
</head>

<body> 
<?php include '../header.php'; ?>

<div class="container">
    <div class="card bg-white gap-5">
        <div class="d-flex align-items-center justify-content-center gap-5">
            <div class="toggle-btn active" id="signInToggle">Sign In</div>
            <div class="toggle-btn" id="signUpToggle">Sign Up</div>
        </div>
        
       
        <!-- Sign In Form -->
        <div class="form-container active " id="signInForm">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>