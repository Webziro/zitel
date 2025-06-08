// Cookie Policy Management
const cookiePolicy = {
    init: function() {
        // Check if user has already made a choice
        if (!this.getCookie('cookiePolicy')) {
            this.showBanner();
        }
    },

    showBanner: function() {
        const banner = document.createElement('div');
        banner.className = 'cookie-banner';
        banner.innerHTML = `
            <div class="cookie-content">
                <h3>Cookie Preferences</h3>
                <p>We use cookies to enhance your browsing experience and analyze our traffic. Please select your preferences below. For more information, please read our <a href="privacy-policy.php">Privacy Policy</a>.</p>
                <div class="cookie-options">
                    <div class="cookie-option">
                        <input type="checkbox" id="necessary" checked disabled>
                        <label for="necessary">Essential Cookies (Required)</label>
                        <p class="cookie-description">These cookies are necessary for the website to function properly. They enable basic functions like page navigation and access to secure areas of the website.</p>
                    </div>
                    <div class="cookie-option">
                        <input type="checkbox" id="functional">
                        <label for="functional">Functional Cookies</label>
                        <p class="cookie-description">These cookies enable enhanced functionality and personalization, such as remembering your language preferences and login information.</p>
                    </div>
                    <div class="cookie-option">
                        <input type="checkbox" id="analytics">
                        <label for="analytics">Analytics Cookies</label>
                        <p class="cookie-description">These cookies help us understand how visitors interact with our website by collecting and reporting information anonymously.</p>
                    </div>
                    <div class="cookie-option">
                        <input type="checkbox" id="advertising">
                        <label for="advertising">Advertising Cookies</label>
                        <p class="cookie-description">These cookies are used to track visitors across websites to display relevant advertisements.</p>
                    </div>
                    <div class="cookie-option">
                        <input type="checkbox" id="social">
                        <label for="social">Social Media Cookies</label>
                        <p class="cookie-description">These cookies are set by social media services to enable you to share our content with your friends and networks.</p>
                    </div>
                </div>
                <div class="cookie-buttons">
                    <button class="btn btn-primary" onclick="cookiePolicy.acceptAll()">Accept All</button>
                    <button class="btn btn-secondary" onclick="cookiePolicy.savePreferences()">Choose Preferences</button>
                    <button class="btn btn-danger" onclick="cookiePolicy.denyAll()">Reject All</button>
                </div>
            </div>
        `;
        document.body.appendChild(banner);
    },

    acceptAll: function() {
        this.setCookie('cookiePolicy', 'accepted', 365);
        this.setCookie('functional', 'true', 365);
        this.setCookie('analytics', 'true', 365);
        this.setCookie('advertising', 'true', 365);
        this.setCookie('social', 'true', 365);
        this.hideBanner();
    },

    savePreferences: function() {
        const functional = document.getElementById('functional').checked;
        const analytics = document.getElementById('analytics').checked;
        const advertising = document.getElementById('advertising').checked;
        const social = document.getElementById('social').checked;
        
        this.setCookie('cookiePolicy', 'custom', 365);
        this.setCookie('functional', functional.toString(), 365);
        this.setCookie('analytics', analytics.toString(), 365);
        this.setCookie('advertising', advertising.toString(), 365);
        this.setCookie('social', social.toString(), 365);
        this.hideBanner();
    },

    denyAll: function() {
        this.setCookie('cookiePolicy', 'denied', 365);
        this.setCookie('functional', 'false', 365);
        this.setCookie('analytics', 'false', 365);
        this.setCookie('advertising', 'false', 365);
        this.setCookie('social', 'false', 365);
        this.hideBanner();
    },

    hideBanner: function() {
        const banner = document.querySelector('.cookie-banner');
        if (banner) {
            banner.remove();
        }
    },

    setCookie: function(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    },

    getCookie: function(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
};

// Initialize cookie policy when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    cookiePolicy.init();
}); 