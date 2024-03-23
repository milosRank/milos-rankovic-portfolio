// Global elements
import { ROOT, HEADER } from '../utils/dom-elements.js';

// Class names
import { class_iosDevice } from '../utils/dom-class-names.js';

// Global functions
import { appendCSSVariable, getScrollbarWidth, isIOS, SCREEN_LOCKER, equalizeElementsHeight } from './global.js';


const appendScrollbarWidthAsCssVariable = () => appendCSSVariable.call(null, "scrollbarWidth", `${ getScrollbarWidth() }px`);

const setServicesBoxesTitleHeightEqual = equalizeElementsHeight.bind(null, ".services .box .title", 767);

// Load event
window.addEventListener("load", function() {

    // Set 'ios-device' class on root element to indicate that device on which website is currently reached is IOS
    if(isIOS()) ROOT.classList.add(class_iosDevice);

    // Regulate screen lock
    SCREEN_LOCKER.regulateScreenLock();

    appendScrollbarWidthAsCssVariable();

    setServicesBoxesTitleHeightEqual();

    ROOT.classList.add("dom-content-loaded");

});


// Resize event
window.addEventListener("resize", function() {

    // Regulate screen lock
    SCREEN_LOCKER.regulateScreenLock();

    appendScrollbarWidthAsCssVariable();

    setServicesBoxesTitleHeightEqual();

});