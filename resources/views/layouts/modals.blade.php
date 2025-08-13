<!-- Minimalist Modal Cart with Close Button & Centered Animation -->
<div class="modal fade" id="exampleModal-Cart" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content border-0">
            <div class="modal-body p-4 text-center">
                <!-- Close Button (Top-Right) -->
                <button type="button" class="btn-close position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Close" style="color: #3b5d50;"></button>
                
                <!-- Centered Animation & Text -->
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <!-- Animated Checkmark -->
                    <svg class="checkmark my-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" width="40" height="40">
                        <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none" stroke="#3b5d50" stroke-width="2"/>
                        <path class="checkmark-check" fill="none" stroke="#3b5d50" stroke-width="4" stroke-linecap="round" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                    </svg>
                    <p class="mt-2 mb-0" style="color: #3b5d50; font-size: 0.9rem;">Added to cart</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Checkmark Animation */
    .checkmark-circle {
        stroke-dasharray: 166;
        stroke-dashoffset: 166;
        stroke-width: 2;
        stroke-miterlimit: 10;
        animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        opacity: 0;
    }
    
    .checkmark-check {
        stroke-dasharray: 48;
        stroke-dashoffset: 48;
        animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.6s forwards;
        opacity: 0;
    }
    
    @keyframes stroke {
        100% {
            stroke-dashoffset: 0;
            opacity: 1;
        }
    }

    /* Close Button Styling (Matching Theme) */
    .btn-close {
        filter: invert(38%) sepia(16%) saturate(947%) hue-rotate(106deg) brightness(92%) contrast(87%);
    }
</style>