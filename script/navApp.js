/* ===== HEADER NAV ===== */
const portfolioLink = document.getElementById('portfolio-link');
const pricingLink = document.getElementById('pricing-link');
const contactLink = document.getElementById('contact-link');
const dropdownContent = document.querySelector('.dropdown-content');

document.addEventListener('click', e => {
  const target = e.target;
  // check if portfolio tab is selected
  if (target == portfolioLink) {
    // make portfolio drop down sub-menu appear
    dropdownContent.classList.toggle('appear');
    // hide pricing & contact tabs when portfolio sub-menu is dropped
    // this only applies for smaller devices, when nav bar is vertically stacked
    pricingLink.classList.toggle('hide-under-600');
    contactLink.classList.toggle('hide-under-600');
  } else {
    // if clicked anywhere else outside of portfolio tab
    // hide portfolio drop down sub-menu
    dropdownContent.classList.remove('appear');
    // unhide pricing & contact tabs
    // this only applies for smaller divices, when nav bar is vertically stacked
    pricingLink.classList.remove('hide-under-600');
    contactLink.classList.remove('hide-under-600');
  }
});



/* ===== BACK TO TOP SCROLL EFFECT ===== */

/*https://codyhouse.co/gem/back-to-top/
Copyright 2018 Amber Creative Lab Ltd, CodyHouse.co

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. */

( () => {

	const backTop = document.getElementById('to-top'),
      scrollDuration = 700;

	if( backTop ) {
		//smooth scroll to top
		backTop.addEventListener('click', event => {
			event.preventDefault();
			(!window.requestAnimationFrame) ? window.scrollTo(0, 0) : scrollTop(scrollDuration);
		});
	}

	const scrollTop = duration => {
	    let start = window.scrollY || document.documentElement.scrollTop,
	        currentTime = null;

	    const animateScroll = timestamp => {
	    	if (!currentTime) currentTime = timestamp;
	        const progress = timestamp - currentTime;
	        const val = Math.max(Math.easeInOutQuad(progress, start, -start, duration), 0);
	        window.scrollTo(0, val);
	        if(progress < duration) {
	            window.requestAnimationFrame(animateScroll);
	        }
	    };

	    window.requestAnimationFrame(animateScroll);
	}

	Math.easeInOutQuad = (t, b, c, d) => {
 		t /= d/2;
		if (t < 1) return c/2*t*t + b;
		t--;
		return -c/2 * (t*(t-2) - 1) + b;
	};

})();
