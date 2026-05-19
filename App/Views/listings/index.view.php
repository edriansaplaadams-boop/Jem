<?php 
$title = 'Browse Jobs - Jobseeker Philippines';
require 'partials/head.php'; 
require 'partials/navbar.php';
?>

<section class="section" style="background: #f5f7fa;">
    <div class="container">
        <h1 style="margin-bottom: 2rem;">Browse All Jobs</h1>

        <div style="display: grid; grid-template-columns: 1fr 3fr; gap: 2rem;">
            <!-- Filters Sidebar -->
            <aside style="background: #fff; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); height: fit-content;">
                <h3 style="margin-bottom: 1.5rem; color: var(--primary-color);">Filters</h3>

                <div class="form-group">
                    <label style="font-weight: 600;">Job Type</label>
                    <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                        <label style="font-weight: normal; display: flex; align-items: center; gap: 0.5rem;">
                            <input type="checkbox"> Full-time
                        </label>
                        <label style="font-weight: normal; display: flex; align-items: center; gap: 0.5rem;">
                            <input type="checkbox"> Part-time
                        </label>
                        <label style="font-weight: normal; display: flex; align-items: center; gap: 0.5rem;">
                            <input type="checkbox"> Contract
                        </label>
                        <label style="font-weight: normal; display: flex; align-items: center; gap: 0.5rem;">
                            <input type="checkbox"> Remote
                        </label>
                    </div>
                </div>

                <hr style="margin: 1.5rem 0; border: none; border-top: 1px solid #ddd;">

                <div class="form-group">
                    <label style="font-weight: 600;">Salary Range</label>
                    <input type="range" min="0" max="300000" step="10000" style="width: 100%;">
                    <div style="font-size: 0.9rem; color: var(--text-light); margin-top: 0.5rem;">₱0 - ₱300,000+</div>
                </div>

                <hr style="margin: 1.5rem 0; border: none; border-top: 1px solid #ddd;">

                <div class="form-group">
                    <label style="font-weight: 600;">Location</label>
                    <select style="width: 100%; padding: 0.8rem; border: 1px solid var(--border-color); border-radius: 4px;">
                        <option>All Locations</option>
                        <option>Manila</option>
                        <option>Quezon City</option>
                        <option>Makati</option>
                        <option>Cebu</option>
                        <option>Davao</option>
                        <option>Remote</option>
                    </select>
                </div>

                <button class="btn" style="width: 100%; margin-top: 1.5rem;">Apply Filters</button>
                <button class="btn-outline" style="width: 100%; margin-top: 0.5rem; border: 2px solid var(--border-color); background: transparent; color: var(--text-dark);">Clear All</button>
            </aside>

            <!-- Job Listings -->
            <main>
                <div style="background: #fff; padding: 1.5rem; border-radius: 8px; margin-bottom: 2rem;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <p style="color: var(--text-light);">Showing <strong>24</strong> jobs</p>
                        <select style="padding: 0.6rem 1rem; border: 1px solid var(--border-color); border-radius: 4px;">
                            <option>Latest</option>
                            <option>Most Relevant</option>
                            <option>Salary: High to Low</option>
                            <option>Salary: Low to High</option>
                        </select>
                    </div>
                </div>

                <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                    <!-- Job Listings -->
                    <?php for ($i = 1; $i <= 9; $i++): ?>
                    <div class="card" style="border-left: 4px solid var(--primary-color); padding: 1.5rem;">
                        <div style="display: flex; justify-content: space-between; align-items: start; gap: 1rem;">
                            <div style="flex: 1;">
                                <h3 style="margin-bottom: 0.5rem;">
                                    <a href="/edrian/public/index.php?controller=listing&action=show&id=<?php echo $i; ?>" style="color: var(--text-dark); text-decoration: none;">Senior Developer Position #<?php echo $i; ?></a>
                                </h3>
                                <p style="color: var(--text-light); margin-bottom: 1rem;">Company Name <?php echo $i; ?> • Manila</p>
                                
                                <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1rem;">
                                    <span class="job-badge">Full-time</span>
                                    <span class="job-badge">Remote</span>
                                    <span class="job-badge">PHP</span>
                                </div>

                                <p style="color: var(--text-light); margin-bottom: 0.5rem;">Building scalable web applications using modern PHP frameworks...</p>
                                <p style="color: var(--success-color); font-weight: 700;">₱80,000 - ₱120,000</p>
                            </div>
                            <div style="text-align: right;">
                                <div style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 1rem;">
                                    <?php echo rand(1, 30) . ' days'; ?> ago
                                </div>
                                <a href="/edrian/public/index.php?controller=listing&action=show&id=<?php echo $i; ?>" class="btn btn-sm">View Job</a>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>

                <!-- Pagination -->
                <div class="pagination" style="margin-top: 2rem;">
                    <span class="active">1</span>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">Next →</a>
                </div>
            </main>
        </div>
    </div>
</section>

<?php require 'partials/footer.php'; ?>
