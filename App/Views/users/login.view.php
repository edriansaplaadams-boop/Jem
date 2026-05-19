<?php 
$title = 'Login - Jobseeker Philippines';
require 'partials/head.php'; 
require 'partials/navbar.php';

if (isLoggedIn()) {
    header('Location: /edrian/public/index.php');
    exit;
}
?>

<section class="section" style="background: #f5f7fa;">
    <div class="container" style="max-width: 500px;">
        <div class="card" style="margin: 3rem 0;">
            <div class="card-body">
                <h1 style="text-align: center; margin-bottom: 0.5rem;">Welcome Back</h1>
                <p style="text-align: center; color: var(--text-light); margin-bottom: 2rem;">Log in to your Jobseeker Philippines account</p>

                <?php if ($flash = getFlashMessage()): ?>
                    <div class="alert alert-<?php echo $flash['type']; ?>" style="margin-bottom: 1.5rem;">
                        <?php echo $flash['text']; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="/edrian/public/index.php?controller=user&action=login">
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" placeholder="your.email@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                        <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: normal;">
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                        <a href="#" style="color: var(--primary-color); text-decoration: none;">Forgot password?</a>
                    </div>

                    <button type="submit" class="btn btn-success" style="width: 100%; padding: 0.8rem; font-size: 1rem;">Log In</button>
                </form>

                <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--border-color);">

                <p style="text-align: center; color: var(--text-light);">
                    Don't have an account? 
                    <a href="/edrian/public/index.php?controller=user&action=create" style="color: var(--primary-color); font-weight: 600; text-decoration: none;">Sign up now</a>
                </p>
            </div>
        </div>

        <div style="text-align: center; color: var(--text-light); margin-bottom: 2rem;">
            <p>Logging in as a job seeker? Browse and apply for jobs. As an employer? Post jobs and find talent.</p>
        </div>
    </div>
</section>

<?php require 'partials/footer.php'; ?>
