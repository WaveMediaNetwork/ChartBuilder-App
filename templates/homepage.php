<?php
/**
 * Template for the plugin's homepage
 */
?>

<div class="container">
    <div class="left-menu">
        <div class="profile">
            <img class="profile-image" src="<?php echo $user_profile_image_url; ?>" alt="Profile Image">
            <div class="username"><?php echo $user_username; ?></div>
            <div class="user-type"><?php echo $user_type; ?></div>
        </div>
        <ul class="menu-options">
            <li class="option">
                <a href="<?php echo $account_settings_url; ?>">Account</a>
            </li>
            <li class="option">
                <a href="<?php echo $receipts_url; ?>">Receipts</a>
            </li>
            <li class="option">
                <a href="<?php echo $library_url; ?>">Library</a>
                <ul class="sub-options">
                    <li><a href="<?php echo $my_charts_url; ?>">My Charts</a></li>
                </ul>
            </li>
            <?php if ($is_admin) : ?>
                <li class="option">
                    <a href="<?php echo $organization_management_url; ?>">Organization Management</a>
                </li>
            <?php endif; ?>
            <li class="option">
                <a href="<?php echo $logout_url; ?>">Logout</a>
            </li>
        </ul>
    </div>
    <div class="main-content">
        <h1>Welcome, <?php echo $user_username; ?>!</h1>
        <p>You are logged in as <?php echo $user_type; ?>.</p>

        <?php if ($is_admin) : ?>
            <div class="admin-section">
                <h2>Organization Management</h2>
                <p>You have access to organization management features.</p>
            </div>
        <?php endif; ?>

        <div class="library-section">
            <h2>Library</h2>
            <p>Manage and create chord charts in your library.</p>
            <a href="<?php echo $library_url; ?>" class="button">Go to Library</a>
        </div>

        <div class="account-section">
            <h2>Account Settings</h2>
            <p>Update your account information.</p>
            <a href="<?php echo $account_settings_url; ?>" class="button">Go to Account Settings</a>
        </div>
    </div>
</div>