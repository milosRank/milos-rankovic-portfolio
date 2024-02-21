// Global elements
import { ROOT } from '../utils/dom-elements.js';

// Class names
import { class_iosDevice } from '../utils/dom-class-names.js';

// Global functions
import { isIOS } from './global.js';


// Load event
window.addEventListener("load", function() {

    // Set 'ios-device' class on root element to indicate that device on which website is currently reached is IOS
    if(isIOS()) ROOT.classList.add(class_iosDevice);

    // Regulate screen lock
    // SCREEN_LOCKER.regulateScreenLock();

});


// Resize event
window.addEventListener("resize", function() {

    // Regulate screen lock
    // SCREEN_LOCKER.regulateScreenLock();

});