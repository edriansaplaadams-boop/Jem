<?php 
$title = isset($title) ? $title : 'Error - Jobseeker Philippines';
require 'partials/head.php'; 
require 'partials/navbar.php';
?>

<section class="section" style="text-align: center; padding: 5rem 2rem;">
    <div class="container">
        <h1 style="font-size: 3rem; color: var(--danger-color); margin-bottom: 1rem;">Something Went Wrong</h1>
        <p style="color: var(--text-light); font-size: 1.1rem; margin-bottom: 2rem;">
            <?php echo isset($message) ? escape($message) : 'An unexpected error occurred. Please try again later.'; ?>
        </p>
        <a href="/edrian/public/index.php" class="btn">Go Back Home</a>
    </div>
</section>

<?php require 'partials/footer.php'; ?>
