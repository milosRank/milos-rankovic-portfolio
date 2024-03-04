// Global elements
import { HEADER, ROOT } from '../utils/dom-elements.js';

// Class names
import { class_header, class_navMenu } from '../utils/dom-class-names.js';

// Global functions
import { createScrollDirectionTracker, appendCSSVariable } from '../global/global.js';

/**
 * IIFE to fake a namespace
 * 
 * @param {globalThis} - global object
 * 
 * @returns {Void}
 */
(function (global) {

    // Set header classes
    const HEADER_CLASSES = {...class_header};

    /**
     * Represents a Header object
     * 
     * @constructor
     */
    function Header() {

        /**
         * Initializes the Header
         */
        this.init = function () {

            this.HTMLHeaderElement = HEADER; // HEADER is a global variable

            // Validate existance of header
            if(!this.HTMLHeaderElement) return;

            this.height = this.HTMLHeaderElement.offsetHeight; // Height of header
            this.getScrollDirection = createScrollDirectionTracker(); // Create scroll direction tracker for header object

            // Add NavigationMenu to Header
            this.navigationMenu = new NavigationMenu(`header .${class_navMenu.container}`, 1399, `header .${class_navMenu.menuToggler}`);

        }

        // Initialize header
        this.init();

        // Validate existance of header
        if(!this.HTMLHeaderElement) return;
        
        // Attach all events related to Header
        this.attachEvents();

        // Call indicateFloatingHeader as soon as header initializes
        this.indicateFloatingHeader();

        // Set variable to show header height
        appendCSSVariable("headerHeight", `${this.HTMLHeaderElement.offsetHeight}px`);

    }


    /**
     * This function is making header show/hide and change its colors
     * depending on scroll direction, position of the user on the page etc...
     * 
     * @returns {void}
     */
    Header.prototype.indicateFloatingHeader = function () {
        
        // Exit function if there is no header
        if (!this.HTMLHeaderElement) return;

        if(ROOT.scrollTop >= this.HTMLHeaderElement.offsetHeight + 50) {
            this.HTMLHeaderElement.classList.add(HEADER_CLASSES.floatingHeader);
        } else
        {
            this.HTMLHeaderElement.classList.remove(HEADER_CLASSES.floatingHeader);
        }

    }


    /**
     * Attach all events related to header
     * 
     * @returns {Void}
     */
    Header.prototype.attachEvents = function() {

        window.addEventListener("resize", () => {
            appendCSSVariable("headerHeight", `${this.HTMLHeaderElement.offsetHeight}px`);
        });

        window.addEventListener("scroll", () => {
            this.indicateFloatingHeader();
        });

    }


    // Attach Header Object to global object
    global.Header = Header;

}(window));