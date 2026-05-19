<?php 
$title = 'Job Details - Jobseeker Philippines';
require 'partials/head.php'; 
require 'partials/navbar.php';

$jobId = $_GET['id'] ?? 1;
?>

<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem;">
            <!-- Main Content -->
            <main>
                <div class="card">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: start; gap: 1rem; margin-bottom: 2rem;">
                            <div>
                                <h1 style="margin-bottom: 0.5rem;">Senior PHP Developer</h1>
                                <p style="color: var(--text-light); font-size: 1.1rem;">TechCorp Solutions • Manila</p>
                            </div>
                            <button class="btn-secondary" style="padding: 0.6rem 1rem; border: none; border-radius: 4px; background: var(--secondary-color); color: #fff; cursor: pointer;">❤️ Save Job</button>
                        </div>

                        <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 2rem;">
                            <span class="job-badge">Full-time</span>
                            <span class="job-badge">Remote</span>
                            <span class="job-badge">PHP</span>
                            <span class="job-badge">Laravel</span>
                            <span class="job-badge">5+ years experience</span>
                        </div>

                        <div style="background: #f5f7fa; padding: 1.5rem; border-radius: 8px; margin-bottom: 2rem;">
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                                <div>
                                    <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 0.5rem;">Salary</p>
                                    <p style="font-size: 1.3rem; font-weight: 700; color: var(--success-color);">₱80,000 - ₱120,000</p>
                                </div>
                                <div>
                                    <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 0.5rem;">Job Type</p>
                                    <p style="font-size: 1.1rem; font-weight: 600;">Full-time</p>
                                </div>
                                <div>
                                    <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 0.5rem;">Posted</p>
                                    <p style="font-size: 1.1rem; font-weight: 600;">5 days ago</p>
                                </div>
                                <div>
                                    <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 0.5rem;">Applications</p>
                                    <p style="font-size: 1.1rem; font-weight: 600;">24 applicants</p>
                                </div>
                            </div>
                        </div>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--border-color);">

                        <h2 style="margin-bottom: 1rem; color: var(--text-dark);">About the Role</h2>
                        <p style="margin-bottom: 1rem; line-height: 1.8;">
                            We are looking for an experienced Senior PHP Developer to join our growing team. You will be responsible for designing and developing scalable web applications using modern PHP frameworks. You should have a strong understanding of web development best practices and experience with both frontend and backend technologies.
                        </p>

                        <h2 style="margin: 2rem 0 1rem; color: var(--text-dark);">Key Responsibilities</h2>
                        <ul style="margin-left: 2rem; margin-bottom: 1.5rem; line-height: 2;">
                            <li>Design and develop high-quality PHP web applications</li>
                            <li>Collaborate with cross-functional teams to deliver projects on time</li>
                            <li>Maintain and optimize existing codebase</li>
                            <li>Implement security and data protection measures</li>
                            <li>Participate in code reviews and provide feedback</li>
                            <li>Stay updated with latest web development technologies</li>
                        </ul>

                        <h2 style="margin: 2rem 0 1rem; color: var(--text-dark);">Requirements</h2>
                        <ul style="margin-left: 2rem; margin-bottom: 1.5rem; line-height: 2;">
                            <li>5+ years of professional PHP development experience</li>
                            <li>Strong knowledge of Laravel framework</li>
                            <li>Experience with MySQL and database design</li>
                            <li>Proficiency in HTML, CSS, and JavaScript</li>
                            <li>Understanding of RESTful APIs and web services</li>
                            <li>Experience with version control systems (Git)</li>
                            <li>Excellent problem-solving skills</li>
                            <li>Good communication and teamwork abilities</li>
                        </ul>

                        <h2 style="margin: 2rem 0 1rem; color: var(--text-dark);">Benefits</h2>
                        <ul style="margin-left: 2rem; margin-bottom: 2rem; line-height: 2;">
                            <li>Competitive salary and performance bonuses</li>
                            <li>Health insurance and dental coverage</li>
                            <li>Professional development opportunities</li>
                            <li>Flexible working hours</li>
                            <li>Remote work options</li>
                            <li>Paid time off and holidays</li>
                        </ul>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--border-color);">

                        <p style="color: var(--text-light); margin-bottom: 2rem;">
                            <strong>Application Deadline:</strong> Applications will be reviewed on a rolling basis until the position is filled.
                        </p>

                        <?php if (isLoggedIn()): ?>
                            <button class="btn btn-success" style="width: 100%; padding: 1rem; font-size: 1.1rem;">Apply Now</button>
                        <?php else: ?>
                            <div class="alert alert-info">
                                <p style="margin-bottom: 0;">
                                    <a href="/edrian/public/index.php?controller=user&action=login" style="color: #0c5460; font-weight: 600;">Log in</a> or 
                                    <a href="/edrian/public/index.php?controller=user&action=create" style="color: #0c5460; font-weight: 600;">sign up</a> to apply for this position.
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </main>

            <!-- Sidebar -->
            <aside>
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem;">About the Company</h3>
                        <div style="background: var(--light-bg); width: 80px; height: 80px; border-radius: 8px; margin-bottom: 1rem;"></div>
                        <h4 style="margin-bottom: 0.5rem;">TechCorp Solutions</h4>
                        <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 1rem;">
                            Leading technology solutions provider in the Philippines with 500+ employees.
                        </p>
                        <a href="#" class="btn btn-outline" style="display: block; text-align: center;">View Company Profile</a>
                    </div>
                </div>

                <div class="card" style="margin-top: 1.5rem;">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem;">Share This Job</h3>
                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <a href="#" style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; background: #1877f2; border-radius: 4px; color: #fff;">f</a>
                            <a href="#" style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; background: #1da1f2; border-radius: 4px; color: #fff;">𝕏</a>
                            <a href="#" style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; background: #25d366; border-radius: 4px; color: #fff;">W</a>
                            <a href="#" style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; background: #0a66c2; border-radius: 4px; color: #fff;">in</a>
                        </div>
                    </div>
                </div>

                <div class="card" style="margin-top: 1.5rem;">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem;">Report Job</h3>
                        <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 1rem;">
                            Is something wrong with this job posting? Help us keep Jobseeker Philippines safe.
                        </p>
                        <button class="btn btn-danger" style="width: 100%;">Report</button>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php require 'partials/footer.php'; ?>
