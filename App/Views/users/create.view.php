<?php 
$title = 'Sign Up - Jobseeker Philippines';
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
                <h1 style="text-align: center; margin-bottom: 0.5rem;">Create Your Account</h1>
                <p style="text-align: center; color: var(--text-light); margin-bottom: 2rem;">Join Jobseeker Philippines and start your job search today</p>

                <?php if ($flash = getFlashMessage()): ?>
                    <div class="alert alert-<?php echo $flash['type']; ?>" style="margin-bottom: 1.5rem;">
                        <?php echo $flash['text']; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="/edrian/public/index.php?controller=user&action=create">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" placeholder="John Doe" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" placeholder="your.email@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" id="password" name="password" placeholder="Create a strong password" required>
                        <small style="color: var(--text-light);">Password must be at least 8 characters long</small>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password *</label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                    </div>

                    <div class="form-group">
                        <label for="user_type">I am a: *</label>
                        <select id="user_type" name="user_type" required>
                            <option value="">Select user type</option>
                            <option value="job-seeker">Job Seeker</option>
                            <option value="employer">Employer / Recruiter</option>
                        </select>
                    </div>

                    <label style="display: flex; align-items: flex-start; gap: 0.5rem; margin-bottom: 1.5rem; font-weight: normal;">
                        <input type="checkbox" required style="margin-top: 0.25rem;"> 
                        <span>I agree to the <a href="#" style="color: var(--primary-color); text-decoration: none;">Terms of Service</a> and <a href="#" style="color: var(--primary-color); text-decoration: none;">Privacy Policy</a> *</span>
                    </label>

                    <button type="submit" class="btn btn-success" style="width: 100%; padding: 0.8rem; font-size: 1rem;">Create Account</button>
                </form>

                <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--border-color);">

                <p style="text-align: center; color: var(--text-light);">
                    Already have an account? 
                    <a href="/edrian/public/index.php?controller=user&action=login" style="color: var(--primary-color); font-weight: 600; text-decoration: none;">Log in here</a>
                </p>
            </div>
        </div>

        <div style="text-align: center; color: var(--text-light); margin-bottom: 2rem;">
            <p>By creating an account, you agree to our terms and conditions. Your information is secure with us.</p>
        </div>
    </div>
</section>

<?php require 'partials/footer.php'; ?>
