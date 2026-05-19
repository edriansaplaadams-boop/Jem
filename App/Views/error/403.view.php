<?php 
$title = '403 - Access Forbidden';
require 'partials/head.php'; 
require 'partials/navbar.php';
?>

<section class="section" style="text-align: center; padding: 5rem 2rem;">
    <div class="container">
        <h1 style="font-size: 5rem; color: var(--danger-color); margin-bottom: 1rem;">403</h1>
        <h2 style="margin-bottom: 1rem;">Access Forbidden</h2>
        <p style="color: var(--text-light); font-size: 1.1rem; margin-bottom: 2rem;">
            You don't have permission to access this resource.
        </p>
        <a href="/edrian/public/index.php" class="btn">Go Back Home</a>
    </div>
</section>

<?php require 'partials/footer.php'; ?>
