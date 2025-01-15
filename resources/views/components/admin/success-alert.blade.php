<div class="rounded-lg border-t-2 border-teal-500 bg-teal-50 p-4"
     role="alert"
     aria-labelledby="hs-bordered-success-style-label"
     tabindex="-1">
    <div class="flex">
        <div class="shrink-0">
            <!-- Icon -->
            <span
                  class="inline-flex size-8 items-center justify-center rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800">
                <svg class="size-4 shrink-0"
                     xmlns="http://www.w3.org/2000/svg"
                     width="24"
                     height="24"
                     viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                    <path d="m9 12 2 2 4-4"></path>
                </svg>
            </span>
            <!-- End Icon -->
        </div>
        <div class="ms-3">
            <h3 class="font-semibold text-gray-800"
                id="hs-bordered-success-style-label">
                {{ $title }}
            </h3>
            <p class="text-sm text-gray-700">
                {{ $description }}
            </p>
        </div>
    </div>
</div>
