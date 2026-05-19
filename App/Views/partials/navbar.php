<nav class="navbar">
    <div class="navbar-container">
        <a href="<?php echo appUrl('index.php'); ?>" class="navbar-brand">
            💼 Jobseeker Philippines
        </a>
        
        <ul class="navbar-menu">
            <li><a href="<?php echo appUrl('index.php'); ?>">Home</a></li>
            <li><a href="<?php echo appUrl('index.php?controller=listing&action=index'); ?>">Browse Jobs</a></li>
            <li><a href="<?php echo appUrl('index.php?controller=listing&action=create'); ?>">Post Job</a></li>
            <li><a href="<?php echo appUrl('index.php?controller=user&action=show'); ?>">My Profile</a></li>
        </ul>

        <div class="navbar-auth">
            <?php if (isLoggedIn()): ?>
                <span style="color: #fff; padding: 0.6rem 1rem;">Welcome, <?php echo escape(currentUser()['name'] ?? 'User'); ?>!</span>
                <a href="/edrian/public/index.php?controller=user&action=logout" class="btn-login" style="padding: 0.6rem 1.2rem;">Logout</a>
            <?php else: ?>
                <a href="/edrian/public/index.php?controller=user&action=login" class="btn-login">Login</a>
                <a href="/edrian/public/index.php?controller=user&action=create" class="btn-signup">Sign Up</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
