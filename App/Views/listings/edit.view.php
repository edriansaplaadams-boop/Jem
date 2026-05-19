<?php 
$title = 'Edit Job - Jobseeker Philippines';
require 'partials/head.php'; 
require 'partials/navbar.php';

if (!isLoggedIn()) {
    header('Location: /edrian/public/index.php?controller=user&action=login');
    exit;
}
?>

<section class="section">
    <div class="container" style="max-width: 700px;">
        <h1 style="margin-bottom: 0.5rem;">Edit Job Posting</h1>
        <p style="color: var(--text-light); margin-bottom: 2rem;">Update the job details below.</p>

        <form method="POST" action="/edrian/public/index.php?controller=listing&action=edit" class="card">
            <div class="card-body">
                <input type="hidden" name="id" value="<?php echo escape($_GET['id'] ?? ''); ?>">

                <div class="form-group">
                    <label for="title">Job Title *</label>
                    <input type="text" id="title" name="title" placeholder="e.g., Senior PHP Developer" required>
                </div>

                <div class="form-group">
                    <label for="category">Job Category *</label>
                    <select id="category" name="category" required>
                        <option value="">Select a category</option>
                        <option value="it">Information Technology</option>
                        <option value="marketing">Marketing</option>
                        <option value="sales">Sales</option>
                        <option value="hr">Human Resources</option>
                        <option value="finance">Finance</option>
                        <option value="operations">Operations</option>
                        <option value="customer-service">Customer Service</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Job Description *</label>
                    <textarea id="description" name="description" placeholder="Describe the role, responsibilities, and requirements..." required></textarea>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label for="salary_min">Minimum Salary (₱) *</label>
                        <input type="number" id="salary_min" name="salary_min" placeholder="e.g., 50000" min="0" required>
                    </div>

                    <div class="form-group">
                        <label for="salary_max">Maximum Salary (₱) *</label>
                        <input type="number" id="salary_max" name="salary_max" placeholder="e.g., 100000" min="0" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="job_type">Job Type *</label>
                    <select id="job_type" name="job_type" required>
                        <option value="">Select job type</option>
                        <option value="full-time">Full-time</option>
                        <option value="part-time">Part-time</option>
                        <option value="contract">Contract</option>
                        <option value="temporary">Temporary</option>
                        <option value="internship">Internship</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="location">Location *</label>
                    <input type="text" id="location" name="location" placeholder="e.g., Manila, Metro Manila" required>
                </div>

                <div class="form-group">
                    <label for="work_arrangement">Work Arrangement *</label>
                    <select id="work_arrangement" name="work_arrangement" required>
                        <option value="">Select work arrangement</option>
                        <option value="on-site">On-site</option>
                        <option value="remote">Remote</option>
                        <option value="hybrid">Hybrid</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="experience">Required Experience (Years) *</label>
                    <select id="experience" name="experience" required>
                        <option value="">Select experience level</option>
                        <option value="entry">Entry Level (0-2 years)</option>
                        <option value="mid">Mid Level (2-5 years)</option>
                        <option value="senior">Senior Level (5+ years)</option>
                        <option value="executive">Executive Level (10+ years)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="skills">Required Skills (comma-separated) *</label>
                    <input type="text" id="skills" name="skills" placeholder="e.g., PHP, Laravel, MySQL" required>
                </div>

                <div class="form-group">
                    <label for="deadline">Application Deadline *</label>
                    <input type="date" id="deadline" name="deadline" required>
                </div>

                <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                    <button type="submit" class="btn btn-success" style="flex: 1;">Update Job</button>
                    <a href="/edrian/public/index.php" class="btn btn-outline" style="flex: 1; text-align: center;">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</section>

<?php require 'partials/footer.php'; ?>
