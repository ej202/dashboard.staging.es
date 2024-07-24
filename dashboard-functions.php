<?php
// Function to check if the user is a member with specific roles
function is_user_member() {
    // Check if the user is logged in
    if (!is_user_logged_in()) {
        return false;
    }
    
    // Get the current user object
    $user = wp_get_current_user();
    
    // Define the roles that can access the page
    $allowed_roles = array('administrator', 'subscriber', 'contributor', 'client');
    
    // Check if the user has one of the allowed roles
    foreach ($allowed_roles as $role) {
        if (in_array($role, $user->roles)) {
            return true;
        }
    }
    
    // Return false if no roles match
    return false;
}

// Additional dashboard-related functions can be added here
?>

