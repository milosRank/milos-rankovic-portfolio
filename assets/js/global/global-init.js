// Global elements
import { ROOT } from '../utils/dom-elements.js';

// Class names
import { class_iosDevice } from '../utils/dom-class-names.js';

// Global functions
import { appendCSSVariable, getScrollbarWidth, isIOS, SCREEN_LOCKER } from './global.js';


const appendScrollbarWidthAsCssVariable = () => appendCSSVariable.call(null, "scrollbarWidth", `${ getScrollbarWidth() }px`);

// Load event
window.addEventListener("load", function() {

    // Set 'ios-device' class on root element to indicate that device on which website is currently reached is IOS
    if(isIOS()) ROOT.classList.add(class_iosDevice);

    // Regulate screen lock
    SCREEN_LOCKER.regulateScreenLock();

    appendScrollbarWidthAsCssVariable();

});


// Resize event
window.addEventListener("resize", function() {

    // Regulate screen lock
    SCREEN_LOCKER.regulateScreenLock();

    appendScrollbarWidthAsCssVariable();

});