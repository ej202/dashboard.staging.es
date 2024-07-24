# Mindfulness Membership Dashboard

## Project Overview

This project is a custom WordPress theme extension designed to create a members-only dashboard for a mindfulness membership website. It leverages the Kadence child theme and includes a dynamic, single-page application-like interface for members to access various sections of content.

## Features

- **Members-Only Access:** Ensures that only logged-in members can access the dashboard.
- **Single Page Application:** Uses jQuery to dynamically load content without refreshing the page.
- **Custom Sections:** Includes nine distinct sections that members can navigate between.
- **Custom Styling:** Each section has unique styling and can be individually customized.

## File Structure

- **functions.php:** Contains functions to enqueue scripts and styles, and includes dashboard-specific functions.
- **members-dashboard.php:** Custom page template for the dashboard, with HTML structure for navigation and content sections.
- **dashboard-functions.php:** Contains functions specific to the dashboard, such as membership checks and additional utilities.
- **dashboard.js:** JavaScript file to handle dynamic content loading and navigation.
- **style.css:** Custom CSS to style the dashboard and its sections.

## How to Use

1. **Setup:**
   - Ensure the Kadence parent theme is installed.
   - Install the Kadence child theme with the provided files.

2. **Create Dashboard Page:**
   - Create a new page in WordPress and assign the "Members Dashboard" template to it.

3. **Add Members:**
   - Ensure users are registered and logged in to access the dashboard.

## Enqueuing Scripts and Styles

The necessary scripts and styles are enqueued in the `functions.php` file. This includes both the parent theme styles and custom scripts for the dashboard functionality.

## Dynamic Content Loading

The dashboard uses jQuery to dynamically load different sections of content when navigation links are clicked, creating a seamless single-page experience for the user.

## Customizing Sections

Each section can be customized in the `members-dashboard.php` file and styled using the `style.css` file. Unique classes are provided for each section to facilitate specific styling needs.

---
