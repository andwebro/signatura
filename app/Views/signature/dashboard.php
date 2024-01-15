<?php $this->extend('signature/master'); ?>
<?php $this->section('content') ?>
<?php echo $this->include('signature/inc/account_menu'); ?>
<div class="w-full p-8 text-left sm:w-3/4">
<div>
   <div class="relative h-416 md:h-400 lg:h-424 xl:h-352 bg-y-gradient-white-grey-200">
      <div class="absolute inset-0 bg-no-repeat bg-right-bottom bg-height-fit sm:opacity-100 opacity-50 z-0"></div>
      <div class="relative z-10 flex justify-center sm:justify-between max-w-728 w-full">
         <div class="max-w-336 w-full sm:mr-32">
            <h1 class="text-5xl text-center sm:text-3xl md:text-5xl font-semibold leading-tall md:mb-20 mb-8">
               Documentation
            </h1>
            <h2 class="text-3xl sm:text-xl md:text-3xl font-semibold mb-8">
               Interactive tutorial
            </h2>
            <p class="text-grey-700 mb-12 leading-normal">
               Get a full overview of the basic settings that will take your search to the next level.
            </p>
            <div class="mx-auto justify-center gap-x-6 inline-flex">
               <a class="group block h-12 mx-0 sm:mx-3 inline-flex items-center justify-center rounded-full py-2 px-4 text-base font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-blue-600 text-white sm:text-base" href="">
                  <svg class="block h-full max-h-[70%]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 12">
                     <path d="M5.83,5.29A.23.23,0,0,1,6,5.6s0,0,0,.05L2.3,11.88a.25.25,0,0,1-.47-.16l.54-4.24L.17,6.72A.26.26,0,0,1,0,6.4s0,0,0-.05L3.7.13a.25.25,0,0,1,.47.15L3.63,4.52Z"></path>
                  </svg>
                  <span class="ml-3">
                  Try interactive tutorial
                  </span>
               </a>
               <a class="group block h-12 mx-0 sm:mx-3 inline-flex border-solid border border-inherit items-center justify-center rounded-full py-2 px-4 text-small font-medium focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-white text-black sm:text-base" href="">
                  <svg aria-hidden="true" class="h-3 w-3 flex-none fill-blue-600 group-active:fill-current">
                     <path d="m9.997 6.91-7.583 3.447A1 1 0 0 1 1 9.447V2.553a1 1 0 0 1 1.414-.91L9.997 5.09c.782.355.782 1.465 0 1.82Z"></path>
                  </svg>
                  <span class="ml-3">
                  Algolia in 3 steps
                  </span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="flex md:pt-12">
   <main class="w-full min-h-full lg:max-w-648">
   <div class="text-grey-1000 leading-normal">
      <div class="mb-16">
         <div class="mb-24">
            <h2 class="text-3xl font-semibold mb-16 leading-loose">What is Algolia?</h2>
            <p>
               Algolia is a hosted search engine, offering full-text, numerical, and faceted search, capable of delivering real-time results from the first keystroke.
               Algolia's powerful API lets you quickly and seamlessly implement search within your websites and mobile applications.
               Our search API powers billions of queries for thousands of companies every month, delivering relevant results in under 100ms anywhere in the world.
            </p>
            <div class="mt-24 block" data-marketing="" target="_blank">
               <div class="rounded-lg shadow hover:shadow-md transition-fast-out bg-y-gradient-white-grey-200 overflow-hidden relative" markdown="0">
                  <a href="https://dashboard.algolia.com/users/sign_up" target="_blank" data-segment="sign-up" data-segment-message="Clicked Sign Up" data-segment-source="Homepage" rel="noopener" class="block">
                     <div class="h-160 -mt-24 -mr-16 absolute top-0 bottom-0 right-0">
                        <svg class="h-full -mt-4 hidden sm:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 147.78 155.96">
                           <path d="M10.5,99.81a1.9,1.9,0,0,0-.53-.09,1.66,1.66,0,0,0-1.64,1.65A1.64,1.64,0,0,0,10,103a1.57,1.57,0,0,0,.87-.25l26.76,26.82.45-1.08L11.52,101.91A1.65,1.65,0,0,0,10.5,99.81Zm-.13,2a.57.57,0,0,1-.8,0,.58.58,0,0,1-.17-.41.58.58,0,0,1,.57-.57h0a.57.57,0,0,1,.56.58A.55.55,0,0,1,10.37,101.77Z" style="fill:#c5c9e0"></path>
                           <path d="M56.15,117.58H39.06l0-.09a1.65,1.65,0,0,0-1.36-1H37.5a1.65,1.65,0,1,0,1.56,2.19H55.7L92.92,156h41.44v-1.08h-41Zm-18.25.94a.56.56,0,0,1-.79,0,.58.58,0,0,1-.17-.41.57.57,0,0,1,.56-.57h0a.58.58,0,0,1,.57.58A.54.54,0,0,1,37.9,118.52Z" style="fill:#c5c9e0"></path>
                           <path d="M23.52,50.32a1.65,1.65,0,0,0,1.55-1.11H55.28l48-48.13h31.06V0H102.85l-48,48.13H25.07a1.64,1.64,0,0,0-2.09-1,1.64,1.64,0,0,0,.54,3.2Zm0-2.21a.57.57,0,0,1,0,1.13.57.57,0,1,1,0-1.13Z" style="fill:#c5c9e0"></path>
                           <polygon points="102.86 0 102.86 0 102.86 0 102.86 0" style="fill:#c5c9e0"></polygon>
                           <path d="M107.72,12.14h26.64V11.07H107.27L57.4,61H3.09a1.66,1.66,0,0,0-1.45-.86H1.52A1.65,1.65,0,1,0,2.81,63a1.59,1.59,0,0,0,.45-.87H57.85ZM2.05,62.23a.57.57,0,0,1-.8,0,.58.58,0,0,1-.17-.41.57.57,0,0,1,.56-.57h.09a.57.57,0,0,1,.32,1Z" style="fill:#c5c9e0"></path>
                           <path d="M134.36,43.22V42.14h-22.3l-9.62,9.63a1.64,1.64,0,0,0-2.19.77,1.61,1.61,0,0,0-.17.71,1.65,1.65,0,1,0,3.29,0,1.61,1.61,0,0,0-.16-.72l9.3-9.32Zm-32.64,10.6a.57.57,0,0,1,0-1.13.57.57,0,0,1,0,1.13Z" style="fill:#c5c9e0"></path>
                           <path d="M147,52.3l-9,9H111.48a1.64,1.64,0,0,0-1.61-1.33h-.14a1.65,1.65,0,1,0,1.6,2.41h27.19l9.26-9.29L147,52.3Zm-37.15,9.85a.56.56,0,0,1-.56-.57h0a.56.56,0,0,1,.56-.56h0a.57.57,0,1,1,0,1.13Z" style="fill:#c5c9e0"></path>
                           <path d="M66.79,75.35l11,11.06h56.53V85.33H78.27l-11-11.06H49.49L37.12,86.67a1.64,1.64,0,0,0-2.09,1,1.61,1.61,0,0,0-.09.54,1.65,1.65,0,0,0,3.29,0,1.68,1.68,0,0,0-.26-.89l12-12ZM36.58,88.79a.57.57,0,1,1,.57-.56A.57.57,0,0,1,36.58,88.79Z" style="fill:#c5c9e0"></path>
                           <path d="M110.61,95.55,92.8,113.4a1.62,1.62,0,1,0,.77.76l17.49-17.53h23.31V95.55ZM92.49,115.28a.56.56,0,0,1-.8,0,.58.58,0,0,1-.17-.41.57.57,0,0,1,.57-.57h0a.58.58,0,0,1,.56.58A.55.55,0,0,1,92.49,115.28Z" style="fill:#c5c9e0"></path>
                           <path d="M97.89,122.3H76.62L64.2,109.85a1.65,1.65,0,0,0-.77-2.2,1.77,1.77,0,0,0-.72-.17h-.14a1.65,1.65,0,0,0,.15,3.29,1.58,1.58,0,0,0,.71-.17l12.74,12.77H98.34l17.48-17.52h18.54v-1.08h-19ZM63.12,109.53a.56.56,0,0,1-.8,0,.58.58,0,0,1-.17-.41.57.57,0,0,1,1.14,0A.54.54,0,0,1,63.12,109.53Z" style="fill:#c5c9e0"></path>
                        </svg>
                     </div>
                     <div class="flex items-center">
                        <img src="/doc/assets/images/illustrations/chip-3df46f7c.png" alt="" style="height:100px;">
                        <div class="px-24">
                           <div class="text-xl font-semibold text-grey-1100 mb-4">
                              Start building for free today
                           </div>
                           <div class="flex items-center text-grey-600">
                              <span>
                              No credit card required
                              </span>
                              <div class="h-8 w-auto ml-8 fill-current">
                                 <svg class="block h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16,10a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V6A1,1,0,0,1,3,5H9A1,1,0,0,0,9,3H3A3,3,0,0,0,0,6V17a3,3,0,0,0,3,3H14a3,3,0,0,0,3-3V11A1,1,0,0,0,16,10Z"></path>
                                    <path d="M19.92.62a1,1,0,0,0-.54-.54A1,1,0,0,0,19,0H13a1,1,0,0,0,0,2h3.59l-9.3,9.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L18,3.41V7a1,1,0,0,0,2,0V1A1,1,0,0,0,19.92.62Z"></path>
                                 </svg>
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="mb-40 blue-links">
            <h2 class="text-2xl font-semibold mb-32 leading-loose">What's new in the docs</h2>
            <div class="mb-4">
               <table class="-my-8">
                  <thead>
                     <tr class="flex flex-col sm:table-row">
                        <th class="pt-8 pb-4 w-[20%] whitespace-no-wrap text-slate-500 font-normal text-sm">
                           Aug. 07, 2023
                        </th>
                        <th class="pt-8 pb-4">
                           React InstantSearch v7 released
                        </th>
                     </tr>
                  </thead>
                  <tbody class="border-solid border-b border-grey-700-opacity-10">
                     <tr class="flex flex-col sm:table-row">
                        <td class="sm:pb-8 sm:pt-4"></td>
                        <td class="pb-8 pt-4">
                           <p>After two years as an experimental library, <strong>React InstantSearch Hooks is now stable as the latest version of React InstantSearch!</strong></p>
                           <ul>
                              <li>If you’re using <strong>React InstantSearch v6</strong>, upgrade by following the step-by-step instructions in the <a class="text-blue-600" href="/doc/guides/building-search-ui/upgrade-guides/react/#migrate-from-react-instantsearch-v6-to-react-instantsearch-v7">migration guide</a>.</li>
                              <li>If you’re already using <strong>React InstantSearch Hooks</strong>, update to the latest version by <a class="text-blue-600" href="/doc/guides/building-search-ui/upgrade-guides/react/#migrate-from-react-instantsearch-hooks-to-react-instantsearch-v7">replacing your dependencies and a few deprecated APIs</a>.</li>
                           </ul>
                        </td>
                     </tr>
                  </tbody>
                  <thead>
                     <tr class="flex flex-col sm:table-row">
                        <th class="pt-8 pb-4 w-[20%] whitespace-no-wrap text-slate-500 font-normal text-sm">
                           Apr. 27, 2023
                        </th>
                        <th class="pt-8 pb-4">
                           Algolia for Django version 3 released
                        </th>
                     </tr>
                  </thead>
                  <tbody class="border-solid border-b border-grey-700-opacity-10">
                     <tr class="flex flex-col sm:table-row">
                        <td class="sm:pb-8 sm:pt-4"></td>
                        <td class="pb-8 pt-4">
                           <p>Algolia released a new major version of the integration for the Django framework.
                              <a class="text-blue-600" href="/doc/framework-integration/django/upgrade-guide/">Upgrade guide</a>
                           </p>
                        </td>
                     </tr>
                  </tbody>
                  <thead>
                     <tr class="flex flex-col sm:table-row">
                        <th class="pt-8 pb-4 w-[20%] whitespace-no-wrap text-slate-500 font-normal text-sm">
                           Apr. 24, 2023
                        </th>
                        <th class="pt-8 pb-4">
                           Automatic Insights released in InstantSearch and Autocomplete
                        </th>
                     </tr>
                  </thead>
                  <tbody class="border-solid border-b border-grey-700-opacity-10">
                     <tr class="flex flex-col sm:table-row">
                        <td class="sm:pb-8 sm:pt-4"></td>
                        <td class="pb-8 pt-4">
                           <p>InstantSearch.js, React InstantSearch Hooks, Vue InstantSearch and Autocomplete now make it easier than ever to track user events. No need to install the <a href="/doc/api-client/methods/insights/"><code class="highlighter-rouge">search-insights</code></a> library or set up a middleware or plugin, all you need to do now is setting the <code class="highlighter-rouge">insights</code> option to <code class="highlighter-rouge">true</code>.</p>
                           <ul>
                              <li><a class="text-blue-600" href="/doc/guides/building-search-ui/events/js/">Send click and conversion events with InstantSearch.js</a></li>
                              <li><a class="text-blue-600" href="/doc/guides/building-search-ui/events/react/">Send click and conversion events with React InstantSearch</a></li>
                              <li><a class="text-blue-600" href="/doc/guides/building-search-ui/events/vue/">Send click and conversion events with Vue InstantSearch</a></li>
                              <li><a class="text-blue-600" href="/doc/ui-libraries/autocomplete/guides/sending-algolia-insights-events/">Sending Algolia Insights events with Autocomplete</a></li>
                           </ul>
                        </td>
                     </tr>
                  </tbody>
                  <thead>
                     <tr class="flex flex-col sm:table-row">
                        <th class="pt-8 pb-4 w-[20%] whitespace-no-wrap text-slate-500 font-normal text-sm">
                           Mar. 30, 2023
                        </th>
                        <th class="pt-8 pb-4">
                           New Build plan offers one million free records
                        </th>
                     </tr>
                  </thead>
                  <tbody class="border-solid border-b border-grey-700-opacity-10">
                     <tr class="flex flex-col sm:table-row">
                        <td class="sm:pb-8 sm:pt-4"></td>
                        <td class="pb-8 pt-4">
                           <p>Algolia’s new Build plan increases the number of free records from 10,000 to one million. Additionally, the cost of search requests in the Grow plan has been reduced by 50%.</p>
                           <ul>
                              <li><a class="text-blue-600" href="https://www.algolia.com/pricing/">Pricing plans</a></li>
                              <li><a class="text-blue-600" href="https://support.algolia.com/hc/en-us/articles/14298498947217-How-do-I-upgrading-to-the-latest-pricing-model-plan" target="_blank" rel="noopener">How to upgrade to the latest pricing plan</a></li>
                              <li><a class="text-blue-600" href="/doc/guides/scaling/algolia-service-limits/">Plan service limits</a></li>
                              <li><a class="text-blue-600" href="https://www.algolia.com/about/news/algolia-introduces-new-developer-friendly-build-pricing-plan-with-one-million-free-records-for-its-search-and-discovery-platform-slashes-api-pricing-by-50/">Pricing announcement</a></li>
                           </ul>
                        </td>
                     </tr>
                  </tbody>
                  <thead>
                     <tr class="flex flex-col sm:table-row">
                        <th class="pt-8 pb-4 w-[20%] whitespace-no-wrap text-slate-500 font-normal text-sm">
                           Mar. 08, 2023
                        </th>
                        <th class="pt-8 pb-4">
                           No-code connectors available as a public beta release
                        </th>
                     </tr>
                  </thead>
                  <tbody class="border-solid border-b border-grey-700-opacity-10">
                     <tr class="flex flex-col sm:table-row">
                        <td class="sm:pb-8 sm:pt-4"></td>
                        <td class="pb-8 pt-4">
                           <p>With the new connectors, Algolia can index your data from a JSON file you host on your servers with or without authentication.</p>
                           <ul>
                              <li><a class="text-blue-600" href="/doc/guides/sending-and-managing-data/send-and-update-your-data/how-to/importing-with-no-code-connectors/">Get started</a></li>
                           </ul>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="text-center mt-24">
               <a class="group block h-12 mx-0 sm:mx-3 inline-flex shadow-sm shadow-slate-400 hover:shadow-md border-solid border border-inherit items-center justify-center rounded-full py-2 px-4 text-small font-medium focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-white text-black sm:text-base" href="">
               <span class="ml-3 btn-skeuomorphic text-slate-600">
               See full changelog
               </span>
               </a>
            </div>
            <div class="fixed inset-0 w-full h-screen p-16 hidden items-center justify-center bg-grey-400-opacity-50 overflow-hidden z-60" data-controller="modal" data-modal-name="video">
               <div class="w-936 relative flex flex-col items-end">
                  <button class="mb-16 py-8 px-24 flex text-grey-800 items-center bg-white fill-current transition-fast-out focus:outline-none rounded-full shadow hover:shadow-md">
                     <span class="flex py-2">
                        <span class="flex items-center h-16 w-16 mr-8 flex-grow-0 flex-shrink-0">
                           <span class="block px-2 w-full">
                              <svg class="block h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                 <path d="M8.41,7l5.3-5.29A1,1,0,1,0,12.29.29L7,5.59,1.71.29A1,1,0,0,0,.29,1.71L5.59,7,.29,12.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L7,8.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path>
                              </svg>
                           </span>
                        </span>
                        <span class="block flex-grow-0 flex-shrink-0 mt-2 font-sans-alt text-base leading-none" data-segment-message="Closed Watch Video" data-segment="close-algolia-video">
                        Close
                        </span>
                     </span>
                  </button>
                  <div class="w-full bg-white shadow-lg-outer" data-modal-body-replace="" data-modal-body="">
                     <div class="embed cursor-pointer" data-action="click->video#loadAndPlayVideo" data-controller="video" data-video-frame="yA4KISBv_88" data-video-full="true" data-video-lazy-load="true" data-video-start="0" markdown="0">
                        <div class="embed-item" id="yA4KISBv_88">
                           <div class="absolute inset-0 bg-center bg-cover pointer-events-none flex items-center justify-center" style="background-image: url(https://img.youtube.com/vi/yA4KISBv_88/hqdefault.jpg)">
                              <div class="flex items-center justify-center w-96 h-64 rounded-lg bg-y-gradient-red-400-red-500 shadow group-hover:shadow-md transition-fast-out">
                                 <div class="h-24 w-32 m-4 fill-current flex items-center justify-center text-white">
                                    <div class="h-full" data-target="video.playIcon">
                                       <svg class="block h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 10">
                                          <polygon points="0 0 0 10 8 5 0 0"></polygon>
                                       </svg>
                                    </div>
                                    <div class="w-full items-center hidden" data-target="video.loadIcon">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                          <path d="M43.9 25.1c0-10.3-8.4-18.7-18.7-18.7 -10.3 0-18.7 8.4-18.7 18.7h4.1c0-8.1 6.5-14.6 14.6-14.6 8.1 0 14.6 6.5 14.6 14.6H43.9z">
                                             <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite"></animateTransform>
                                          </path>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $this->endSection() ?>