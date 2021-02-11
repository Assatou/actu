/* global utsav_event_plannerScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast'
	});
});

function utsav_event_planner_open() {
	jQuery(".sidenav").addClass('show');
}
function utsav_event_planner_close() {
	jQuery(".sidenav").removeClass('show');
}

function utsav_event_planner_menuAccessibility() {
	var links, i, len,
	    utsav_event_planner_menu = document.querySelector( '.nav-menu' ),
	    utsav_event_planner_iconToggle = document.querySelector( '.nav-menu ul li:first-child a' );
    
	let utsav_event_planner_focusableElements = 'button, a, input';
	let utsav_event_planner_firstFocusableElement = utsav_event_planner_iconToggle; // get first element to be focused inside menu
	let utsav_event_planner_focusableContent = utsav_event_planner_menu.querySelectorAll(utsav_event_planner_focusableElements);
	let utsav_event_planner_lastFocusableElement = utsav_event_planner_focusableContent[utsav_event_planner_focusableContent.length - 1]; // get last element to be focused inside menu

	if ( ! utsav_event_planner_menu ) {
    	return false;
	}

	links = utsav_event_planner_menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
	    links[i].addEventListener( 'focus', toggleFocus, true );
	    links[i].addEventListener( 'blur', toggleFocus, true );
	}

	// Sets or removes the .focus class on an element.
	function toggleFocus() {
      	var self = this;

      	// Move up through the ancestors of the current link until we hit .mobile-menu.
      	while (-1 === self.className.indexOf( 'nav-menu' ) ) {
	      	// On li elements toggle the class .focus.
	      	if ( 'li' === self.tagName.toLowerCase() ) {
	          	if ( -1 !== self.className.indexOf( 'focus' ) ) {
	          		self.className = self.className.replace( ' focus', '' );
	          	} else {
	          		self.className += ' focus';
	          	}
	      	}
	      	self = self.parentElement;
      	}
	}
    
	// Trap focus inside modal to make it ADA compliant
	document.addEventListener('keydown', function (e) {
	    let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

	    if ( ! isTabPressed ) {
	    	return;
	    }

	    if ( e.shiftKey ) { // if shift key pressed for shift + tab combination
	      	if (document.activeElement === utsav_event_planner_firstFocusableElement) {
		        utsav_event_planner_lastFocusableElement.focus(); // add focus for the last focusable element
		        e.preventDefault();
	      	}
	    } else { // if tab key is pressed
	    	if (document.activeElement === utsav_event_planner_lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
		      	utsav_event_planner_firstFocusableElement.focus(); // add focus for the first focusable element
		      	e.preventDefault();
	    	}
	    }
	});   
}

jQuery(function($){
	$('.mobile-menu').click(function () {
	    utsav_event_planner_menuAccessibility();
  	});
});