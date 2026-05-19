<?php 
$title = 'Jobseeker Philippines - Find Your Dream Job | Top Job Board';
require 'partials/head.php'; 
require 'partials/navbar.php';
?>

<section class="hero">
    <div class="hero-container">
        <h1>Find Your Dream Job in the Philippines</h1>
        <p>Discover thousands of job opportunities from top companies across the nation.</p>
        
        <form class="search-form" method="GET" action="/edrian/public/index.php?controller=listing&action=index">
            <input type="hidden" name="controller" value="listing">
            <input type="hidden" name="action" value="index">
            <input 
                type="text" 
                name="search" 
                placeholder="Job title, keywords, or company..." 
                value="<?php echo escape($_GET['search'] ?? ''); ?>"
            >
            <input 
                type="text" 
                name="location" 
                placeholder="City or location..." 
                value="<?php echo escape($_GET['location'] ?? ''); ?>"
            >
            <button type="submit">Search Jobs</button>
        </form>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="section-title">Featured Jobs</h2>
        
        <?php if ($flash = getFlashMessage()): ?>
            <div class="alert alert-<?php echo $flash['type']; ?>">
                <?php echo $flash['text']; ?>
            </div>
        <?php endif; ?>

        <div class="jobs-grid">
            <!-- Sample Featured Jobs -->
            <div class="job-card">
                <div class="job-title">Senior PHP Developer</div>
                <div class="job-company">TechCorp Solutions - Manila</div>
                <div class="job-meta">
                    <span>🕐 2 days ago</span>
                    <span>📍 Remote</span>
                </div>
                <div class="job-badge">Full-time</div>
                <div class="job-salary">₱80,000 - ₱120,000</div>
                <a href="/edrian/public/index.php?controller=listing&action=show&id=1" class="btn btn-sm" style="margin-top: 1rem; display: block; text-align: center;">View Details</a>
            </div>

            <div class="job-card">
                <div class="job-title">Marketing Manager</div>
                <div class="job-company">Creative Agency Inc - Makati</div>
                <div class="job-meta">
                    <span>🕐 5 days ago</span>
                    <span>📍 On-site</span>
                </div>
                <div class="job-badge">Full-time</div>
                <div class="job-salary">₱60,000 - ₱90,000</div>
                <a href="/edrian/public/index.php?controller=listing&action=show&id=2" class="btn btn-sm" style="margin-top: 1rem; display: block; text-align: center;">View Details</a>
            </div>

            <div class="job-card">
                <div class="job-title">Graphic Designer</div>
                <div class="job-company">Digital Studios Co - Cebu</div>
                <div class="job-meta">
                    <span>🕐 1 week ago</span>
                    <span>📍 Hybrid</span>
                </div>
                <div class="job-badge">Full-time</div>
                <div class="job-salary">₱45,000 - ₱65,000</div>
                <a href="/edrian/public/index.php?controller=listing&action=show&id=3" class="btn btn-sm" style="margin-top: 1rem; display: block; text-align: center;">View Details</a>
            </div>

            <div class="job-card">
                <div class="job-title">Data Analyst</div>
                <div class="job-company">Finance Group - BGC</div>
                <div class="job-meta">
                    <span>🕐 3 days ago</span>
                    <span>📍 On-site</span>
                </div>
                <div class="job-badge">Full-time</div>
                <div class="job-salary">₱70,000 - ₱110,000</div>
                <a href="/edrian/public/index.php?controller=listing&action=show&id=4" class="btn btn-sm" style="margin-top: 1rem; display: block; text-align: center;">View Details</a>
            </div>

            <div class="job-card">
                <div class="job-title">Customer Support Officer</div>
                <div class="job-company">Tech Support Services - Pasig</div>
                <div class="job-meta">
                    <span>🕐 Today</span>
                    <span>📍 Remote</span>
                </div>
                <div class="job-badge">Full-time</div>
                <div class="job-salary">₱25,000 - ₱40,000</div>
                <a href="/edrian/public/index.php?controller=listing&action=show&id=5" class="btn btn-sm" style="margin-top: 1rem; display: block; text-align: center;">View Details</a>
            </div>

            <div class="job-card">
                <div class="job-title">Project Manager</div>
                <div class="job-company">Construction Corp - Quezon City</div>
                <div class="job-meta">
                    <span>🕐 4 days ago</span>
                    <span>📍 Hybrid</span>
                </div>
                <div class="job-badge">Full-time</div>
                <div class="job-salary">₱100,000 - ₱150,000</div>
                <a href="/edrian/public/index.php?controller=listing&action=show&id=6" class="btn btn-sm" style="margin-top: 1rem; display: block; text-align: center;">View Details</a>
            </div>
        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="/edrian/public/index.php?controller=listing&action=index" class="btn btn-outline">View All Jobs</a>
        </div>
    </div>
</section>

<section class="section" style="background: #f5f7fa;">
    <div class="container">
        <h2 class="section-title">Why Choose Jobseeker Philippines?</h2>
        
        <div class="jobs-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
            <div class="card">
                <div class="card-body">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem;">📊 Trusted by Thousands</h3>
                    <p>Over 50,000 active job seekers and 5,000+ employers trust our platform to find the perfect match.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem;">🎯 Quality Jobs</h3>
                    <p>We carefully curate job listings to ensure relevance and quality for both job seekers and employers.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem;">💼 Easy to Use</h3>
                    <p>Simple and intuitive platform designed to help you find your perfect job in just a few clicks.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem;">🚀 Career Growth</h3>
                    <p>Access career tips, resume guides, and interview preparation resources to boost your job search.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem;">💰 Best Opportunities</h3>
                    <p>Find jobs with competitive salaries, benefits, and growth opportunities from top companies.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem;">🌟 24/7 Support</h3>
                    <p>Our dedicated support team is here to help you succeed in your job search journey.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background: var(--primary-color); color: #fff;">
    <div class="container">
        <div style="text-align: center;">
            <h2 class="section-title" style="color: #fff;">Ready to Find Your Dream Job?</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">Join thousands of professionals who have found their perfect job through Jobseeker Philippines.</p>
            <a href="/edrian/public/index.php?controller=user&action=create" class="btn btn-secondary">Get Started Today</a>
        </div>
    </div>
</section>

<?php require 'partials/footer.php'; ?>
