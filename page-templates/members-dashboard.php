<?php
/*
Template Name: Members Dashboard
*/

// Add a specific body class for this template
add_filter('body_class', function($classes) {
    $classes[] = 'members-dashboard';
    return $classes;
});

// Include WordPress header
get_header();

// Check if the user is a member
if (is_user_member()) {
    ?>
    <div class="dashboard-container">
        <div class="dashboard-column1">
            <ul id="dashboard-navigation">
                <li><a href="#" data-target="section1">Section 1</a></li>
                <li><a href="#" data-target="section2">Section 2</a></li>
                <li><a href="#" data-target="section3">Section 3</a></li>
                <li><a href="#" data-target="section4">Section 4</a></li>
                <li><a href="#" data-target="section5">Section 5</a></li>
                <li><a href="#" data-target="section6">Section 6</a></li>
                <li><a href="#" data-target="section7">Section 7</a></li>
                <li><a href="#" data-target="section8">Section 8</a></li>
                <li><a href="#" data-target="section9">Section 9</a></li>
            </ul>
        </div>
        <div class="dashboard-column2">
            <div class="dashboard-row" id="dashboard-row1">
                <div class="dashboard-row-column1" id="dashboard-content">
                    <div id="section1" class="dashboard-section">
                        <p>This is a paragraph inside column 1 of the first row.</p>
                        <h1>Section 1</h1>
                    </div>
                    <div id="section2" class="dashboard-section-2">
                        <p>This is a paragraph inside column 1 of the first row.</p>
                        <h1>Section 2</h1>
                    </div>
                    <div id="section3" class="dashboard-section-3">
                        <p>This is a paragraph inside column 1 of the first row.</p>
                        <h1>Section 3</h1>
                    </div>
                    <div id="section4" class="dashboard-section-4">
                        <p>This is a paragraph inside column 1 of the first row.</p>
                        <h1>Section 4</h1>
                    </div>
                    <div id="section5" class="dashboard-section-5">
                        <p>This is a paragraph inside column 1 of the first row.</p>
                        <h1>Section 5</h1>
                    </div>
                    <div id="section6" class="dashboard-section-6">
                        <p>This is a paragraph inside column 1 of the first row.</p>
                        <h1>Section 6</h1>
                    </div>
                    <div id="section7" class="dashboard-section-7">
                        <p>This is a paragraph inside column 1 of the first row.</p>
                        <h1>Section 7</h1>
                    </div>
                    <div id="section8" class="dashboard-section-8">
                        <p>This is a paragraph inside column 1 of the first row.</p>
                        <h1>Section 8</h1>
                    </div>
                    <div id="section9" class="dashboard-section-9">
                        <p>This is a paragraph inside column 1 of the first row.</p>
                        <h1>Section 9</h1>
                    </div>
                </div>
                <div class="dashboard-row-column2">
                    <!-- Column 2 content for section 1 -->
                </div>
            </div>
            <?php if (is_page_template('members-dashboard.php')): ?>
            <div class="dashboard-row" id="dashboard-row2">
                <!-- Additional content for section 1 -->
            </div>
            <?php endif; ?>
        </div>
    </div>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/dashboard.js"></script>
    <?php
} else {
    echo '<p>You need to be a member to access this page.</p>';
}

get_footer();
?>
