// Class names
import { class_navMenu } from '../utils/dom-class-names.js';

// Global functions
import { isIOS } from '../global/global.js';

// Global functions
import { SCREEN_LOCKER } from '../global/global.js';

/**
 * IIFE to fake a namespace
 * 
 * @param {globalThis} - global object
 * 
 * @returns {Void}
 */
(function (global) {

    // Set navigation menu classes
    const NAV_MENU_CLASSES = {
        activeAsSidebar: class_navMenu.activeAsSidebar,
        active: class_navMenu.active,
        buttonActive: class_navMenu.buttonActive,
    }

    // Scroll position (for purposes of IOS devices)
    var SCROLL_TO_Y_AXIS;

    /**
     * Represents a Navigation Menu object
     * 
     * @param {String} navigationMenuSelector - CSS selector for navigation menu element
     * @param {Number} toSidebarBreakpoint - represents a breakpoint on which nav menu will transform to sidebar
     * 
     * @constructor
     */
    function NavigationMenu(navigationMenuSelector, toSidebarBreakpoint, togglerSelector) {

        /**
         * Initializes the NavigationMenu
         */
        this.init = function() {

            this.navigationMenuSelector = navigationMenuSelector;
            this.toSidebarBreakpoint = toSidebarBreakpoint;
            this.HTMLNavMenuElement = document.querySelector(navigationMenuSelector);
            this.toggler = document.querySelector(togglerSelector);

            // Exit if there is no navigation menu
            if(!this.HTMLNavMenuElement) return;

        }

        this.init();
        this.attachEvents();

    }


    /**
     * Check if navigation menu is active as as sidebar
     * 
     * @returns {Boolean} - True if navigation menu is active as sidebar, otherwise false
     */
    NavigationMenu.prototype.isNavMenuActiveAsSidebar = function() {

        return (
                this.HTMLNavMenuElement?.classList.contains(NAV_MENU_CLASSES.activeAsSidebar) &&
                this.HTMLNavMenuElement?.classList.contains(NAV_MENU_CLASSES.active)
                );

    }


    /**
     * Sets class that indicates navigation menu transformed to sidebar
     * 
     * @returns {Void}
     */
    NavigationMenu.prototype.toggleActiveSidebarClass = function() {

        if(window.innerWidth <= this.toSidebarBreakpoint) {
            this.HTMLNavMenuElement?.classList.add(NAV_MENU_CLASSES.activeAsSidebar);
        }
        else {
            this.HTMLNavMenuElement?.classList.remove(NAV_MENU_CLASSES.activeAsSidebar);
        }

    }


    /**
     * Show/hide navigation menu when it transform to sidebar
     */
    NavigationMenu.prototype.toggleNavMenuAsSidebar = function() {

        this.HTMLNavMenuElement?.classList.toggle(NAV_MENU_CLASSES.active);
        this.toggler?.classList.toggle(class_navMenu.buttonActive);

        if(isIOS() && window.innerWidth <= 500) {

            if(this.isNavMenuActiveAsSidebar()) {
                SCROLL_TO_Y_AXIS = window.scrollY;
            }
            else {
                unlockScreen();
                window.scrollTo(0, SCROLL_TO_Y_AXIS); // Restore scroll position (IOS only)
            }

        }

    }


    /**
     * Hides navigation menu when it transform to sidebar
     */
    NavigationMenu.prototype.hideNavMenuAsSidebar = function() {

        this.HTMLNavMenuElement?.classList.remove(NAV_MENU_CLASSES.active);
        this.toggler?.classList.remove(class_navMenu.buttonActive);

    }


    /**
     * Attach all events related to navigation menu
     * 
     * @returns {Void}
     */
    NavigationMenu.prototype.attachEvents = function() {

        // Call function on load
        this.toggleActiveSidebarClass();

        window.addEventListener("resize", () => {

            this.toggleActiveSidebarClass();
            SCREEN_LOCKER.isNavMenuActive = this.isNavMenuActiveAsSidebar();
            
        });

        if(this.toggler) {

            this.toggler.addEventListener("click", () => {

                this.toggleNavMenuAsSidebar();
                SCREEN_LOCKER.isNavMenuActive = this.isNavMenuActiveAsSidebar();
                SCREEN_LOCKER.regulateScreenLock();

            });

        }

    }


    // Attach NavigationMenu Object to global object
    global.NavigationMenu = NavigationMenu;

}(window));