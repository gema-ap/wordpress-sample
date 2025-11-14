# Airline Mockup WordPress Theme

A mockup WordPress theme designed for airline landing pages, containerized with Docker for easy development and deployment.

## Overview

This project provides a complete WordPress development environment with a custom airline-themed landing page.

## Prerequisites

-   Docker
-   Docker Compose

## Setup Instructions

1. **Start the Docker Environment**

    ```bash
    docker-compose up -d
    ```

    This command will create and start the WordPress container with all necessary dependencies.

2. **WordPress Initial Setup**

    - Navigate to your local WordPress installation in your browser
    - Complete the WordPress setup wizard with your preferred configuration
    - Create an admin account and configure basic settings

3. **Activate the Airline Theme**

    - Access the WordPress admin dashboard
    - Go to **Appearance > Themes**
    - Locate and select the **"airline-mockup"** theme
    - Click **Activate**

4. **Preview the Site**
    - From the admin dashboard, click **"Visit Site"** or use the preview option
    - Alternatively, navigate directly to your site's frontend URL

## Theme Features

The **airline-mockup** theme includes the following UI components:

-   **Sticky Header**
    Remains fixed at the top of the page during scroll.

-   **User Icon**
    Opens the built-in WordPress authentication modal.

-   **Menu Icon**
    Triggers a slide-in side panel, which can be dismissed using the **X** button.

-   **Subheader Banner**
    A non-sticky banner that can be dismissed via the **X** button.

-   **Flight Selector Mockup**
    A visual-only component intended to mimic an airline flight selection interface.
    _No functional logic is implemented._

-   **Promo Card Section**
    Static promotional card layout used for visual presentation only.

-   **Footer**
    A simple, static footer section.

All elements include modern styling, responsive layout, and basic UX cues such as hover states.
The theme is implemented using HTML5, CSS, and small amounts of vanilla JavaScript.
