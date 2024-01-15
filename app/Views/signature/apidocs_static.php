<?php echo $this->include('signature/inc/header_api'); ?>
<style>
    header {
        display:none;
    }
</style>
  <main>
    <div class="fixed hidden lg:block z-30 top-0 left-0 bottom-0 w-[230px] bg-[#fafafa] font-bold text-[13px]">
      <div class="pt-[10px] pr-[3px] pb-[10px] pl-[3px]">
        <a class="px-15 block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="https://esignatures.io">
          <svg aria-hidden="true" viewBox="0 0 109 40" class="h-[50px] mb-[10px] w-auto"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 20c0 11.046 8.954 20 20 20s20-8.954 20-20S31.046 0 20 0 0 8.954 0 20Zm20 16c-7.264 0-13.321-5.163-14.704-12.02C4.97 22.358 6.343 21 8 21h24c1.657 0 3.031 1.357 2.704 2.98C33.32 30.838 27.264 36 20 36Z" fill="#2563EB"></path><path d="M55.528 26.57V15.842H52V13.97h9.108v1.872h-3.636V26.57h-1.944Z" fill="#0F172A"></path><path d="M83.084 26.57v-12.6h5.346c.744 0 1.416.18 2.016.54a3.773 3.773 0 0 1 1.44 1.44c.36.612.54 1.302.54 2.07 0 .78-.18 1.482-.54 2.106a4 4 0 0 1-1.44 1.494c-.6.36-1.272.54-2.016.54h-2.646v4.41h-2.7Zm2.664-6.84h2.376c.288 0 .546-.072.774-.216.228-.156.408-.36.54-.612a1.71 1.71 0 0 0 .216-.864c0-.324-.072-.606-.216-.846a1.394 1.394 0 0 0-.54-.576 1.419 1.419 0 0 0-.774-.216h-2.376v3.33ZM106.227 26.57V13.25h2.556v13.32h-2.556Z" fill="#2563EB"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M95.906 26.102c.636.432 1.35.648 2.142.648.444 0 .864-.066 1.26-.198a4.25 4.25 0 0 0 1.062-.558 3.78 3.78 0 0 0 .702-.668v1.244h2.574v-9.522h-2.538v1.248a3.562 3.562 0 0 0-.648-.672 3.13 3.13 0 0 0-1.026-.558 3.615 3.615 0 0 0-1.278-.216c-.828 0-1.566.216-2.214.648-.648.42-1.164 1.002-1.548 1.746-.372.732-.558 1.578-.558 2.538 0 .96.186 1.812.558 2.556.372.744.876 1.332 1.512 1.764Zm4.104-1.908c-.36.228-.78.342-1.26.342-.468 0-.882-.114-1.242-.342a2.387 2.387 0 0 1-.828-.954c-.204-.42-.306-.906-.306-1.458 0-.54.102-1.014.306-1.422.204-.408.48-.726.828-.954.36-.24.774-.36 1.242-.36.48 0 .9.12 1.26.36.36.228.636.546.828.954.204.408.306.882.306 1.422 0 .552-.102 1.038-.306 1.458a2.218 2.218 0 0 1-.828.954Z" fill="#2563EB"></path><path fill-rule="evenodd" clip-rule="evenodd" d="m76.322 23.197 2.595 3.373h2.268l-3.662-4.787 3.338-4.663h-2.196l-2.162 3.334-2.554-3.334h-2.34l3.652 4.71-3.634 4.74h2.196l2.5-3.373ZM62.738 26.102a3.78 3.78 0 0 0 2.142.648c.456 0 .888-.072 1.296-.216.42-.144.798-.336 1.134-.576a3.418 3.418 0 0 0 .864-.835v1.447h1.872v-9.45h-1.872v1.45a3.118 3.118 0 0 0-.72-.82 3.2 3.2 0 0 0-1.062-.612 4.033 4.033 0 0 0-1.35-.216c-.828 0-1.578.21-2.25.63-.66.42-1.188 1.002-1.584 1.746-.384.732-.576 1.572-.576 2.52 0 .936.192 1.776.576 2.52.384.744.894 1.332 1.53 1.764Zm4.122-1.476c-.432.276-.93.414-1.494.414a2.682 2.682 0 0 1-1.476-.414 2.987 2.987 0 0 1-1.008-1.134c-.24-.492-.36-1.05-.36-1.674 0-.612.12-1.158.36-1.638.252-.48.588-.858 1.008-1.134a2.682 2.682 0 0 1 1.476-.414c.564 0 1.062.138 1.494.414.432.276.768.654 1.008 1.134.252.48.378 1.026.378 1.638 0 .624-.126 1.182-.378 1.674-.24.48-.576.858-1.008 1.134Z" fill="#0F172A"></path></svg>
        </a>
      </div>
      <ul id="toc" class="m-0 p-0 leading-[28px] list-none">
          <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
            <a class="px-[15px] bg-[#38424d] text-white rounded-r-md rounded-b-md block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#esignatures-io-api">eSignatures.io API</a>
              <ul class="toc-list-h2 block">
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#quickstart-send-yourself-test-a-contract" class="toc-h2 toc-link">Quickstart - Send yourself test a contract</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#basics-rest-api-token-auth-rate-limiting" class="toc-h2 toc-link">Basics - REST API, Token auth, Rate limiting</a>
                  </li>
              </ul>
          </li>
          <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
            <a class="px-[15px] block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#contracts" class="toc-h1 toc-link">Contracts</a>
              <ul class="toc-list-h2 hidden">
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#send-a-contract" class="toc-h2 toc-link">Send a contract</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#contract-query" class="toc-h2 toc-link">Contract - query</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#contract-withdraw" class="toc-h2 toc-link">Contract - withdraw</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#signer-update" class="toc-h2 toc-link">Signer - update</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#signer-re-send-sign-request" class="toc-h2 toc-link">Signer - re/send sign request</a>
                  </li>
              </ul>
          </li>
          <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
            <a class="px-[15px] block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#templates" class="toc-h1 toc-link">Templates</a>
              <ul class="toc-list-h2 hidden">
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#create" class="toc-h2 toc-link">Create</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#copy-and-customize" class="toc-h2 toc-link">Copy (and customize)</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#query" class="toc-h2 toc-link">Query</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#list" class="toc-h2 toc-link">List</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#collaborators-add" class="toc-h2 toc-link">Collaborators - add</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#collaborators-remove" class="toc-h2 toc-link">Collaborators - remove</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#collaborators-list" class="toc-h2 toc-link">Collaborators - list</a>
                  </li>
              </ul>
          </li>
          <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
            <a class="px-[15px] block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#webhooks" class="toc-h1 toc-link">Webhooks</a>
              <ul class="toc-list-h2 hidden">
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#contract-sent-to-signer" class="toc-h2 toc-link">Contract sent to signer</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#contract-signed" class="toc-h2 toc-link">Contract signed</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#contract-withdrawn" class="toc-h2 toc-link">Contract withdrawn</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#signer-viewed-the-contract" class="toc-h2 toc-link">Signer viewed the contract</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#signer-signed-the-contract" class="toc-h2 toc-link">Signer signed the contract</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#signer-declined-the-signature" class="toc-h2 toc-link">Signer declined the signature</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#signer-requested-a-mobile-number-update" class="toc-h2 toc-link">Signer requested a Mobile Number update</a>
                  </li>
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#webhook-error-notifications" class="toc-h2 toc-link">Webhook error notifications</a>
                  </li>
              </ul>
          </li>
          <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
            <a class="px-[15px] block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#embedded-signing" class="toc-h1 toc-link">Embedded signing</a>
          </li>
          <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
            <a class="px-[15px] block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#advanced-placeholder-fields" class="toc-h1 toc-link">Advanced Placeholder fields</a>
              <ul class="toc-list-h2 hidden">
                  <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
                    <a class="px-15 pl-[25px] text-[12px] font-medium block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#document-elements" class="toc-h2 toc-link">Document elements</a>
                  </li>
              </ul>
          </li>
          <li class="text-[#263042] transition-background linear duration-200 m-0 p-0 leading-[28px] list-none">
            <a class="px-[15px] block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="#support" class="toc-h1 toc-link">Support</a>
          </li>
      </ul>
        <ul class="py-4 mt-4 border-t border-dashed border-gray-600">
            <li class="text-[#263042] text-[0.8em] leading-7 no-underline transition-background linear duration-200 m-0 p-0 leading-[28px] list-none hover:underline">
                <a class="px-[15px] block overflow-x-hidden whitespace-nowrap overflow-ellipsis no-underline text-[#263042] transition-background linear duration-130" href="https://esignatures.io/docs/api">Version 1.3</a></li>
        </ul>
    </div>
    <div class="ml-0 lg:ml-[230px] relative z-10 bg-white min-h-full top-[70px] pb-[1px]">
        <div class="w-full sm:w-2/4 absolute bg-white r-0 t-0 b-0"></div>
        <div class="relative z-30 translate-z-0">
            <h1 class="text-[28px] py-[0.5em] mb-[21px] border-b border-gray-300 mr-0 sm:mr-[50%] font-bold px-[28px]">
                eSignatures.io API
            </h1>
            <h2 class="py-[1.2em] mr-0 sm:mr-[50%] font-bold px-[28px] text-[19px] font-semibold mb-0">
                Quickstart - Send yourself test a contract
            </h2>
            <p class="mr-0 sm:mr-[50%] mb-[14px] text-[13px] px-[28px] py-0 block mt-0 leading-normal">
                <strong class="font-bold">
                    Replace the 
                <code class="p-[3px] rounded-sm bg-[rgba(0,0,0,0.05)]">
                    apitest@esignatures.io
                </code>
                 to yours:
                </strong>
            </p>
             <p class="mr-0 sm:mr-[50%] text-[13px] px-[28px] py-0 block mt-0 leading-normal">
                <strong class="font-bold">
                    <code class="p-[3px] rounded-sm bg-[rgba(0,0,0,0.05)]">
                    curl -X POST -H 'Content-type:application/json' 'https://esignatures.io/api/contracts?token=c21bc7' -d '{"template_id": "20ac76c9","signers":[{"name":"Sam Signer","email":"apitest@esignatures.io"}]}'
                </code>
                </strong>
            </p>
        </div>
        <h2 class="py-[1.2em] mt-[70px] border-t border-gray-300 mr-0 sm:mr-[50%] font-bold px-[28px] text-[19px] font-semibold mb-0">
            Basics - REST API, Token auth, Rate limiting
        </h2>
        <div class="m-0 py-[2em] px-[28px] w-full sm:w-1/2 float-right clear-right text-white bg-[#263042] rounded-tl-[20px]">
            <code class="p-0 text-[12px] rounded-sm bg-transparent">
                <p>
                    <span class="text-[#a6e22e]">
                        POST
                    </span>
                    <span class="text-white">
                        https://esignatures.io/api/contracts
                    </span>
                    <span class="text-[#f92672]">
                        HTTP
                    </span>
                    <span class="text-[#f92672]">
                    /
                    </span>
                    <span class="text-[#ae81ff]">
                        1.1
                    </span>
                </p>
            </code>
        </div>
        <div class="m-0 mb-4 py-[2em] px-[28px] w-full sm:w-1/2 float-right clear-right text-white bg-[#263042] overflow-auto sm:whitespace-nowrap">
            <code class="p-0 text-[12px] rounded-sm bg-transparent">
                <p>
                    <span class="text-white">
                        curl -X POST -H
                    </span>
                    <span class="text-[#e6db74]">
                        'Content-type:application/json' 'https://esignatures.io/api/<action>?token=your-secret-token'
                    </span>
                </p>
            </code>
        </div>
        <p class="mr-0 sm:mr-[50%] mb-[14px] text-[13px] px-[28px] py-0 block mt-0 leading-normal">
            The API calls are organized around REST with JSON data. The authentication as based on a 
            <code class="p-[3px] rounded-sm bg-[rgba(0,0,0,0.05)]">
                token
            </code>
            parameter in the URL. You can find your Secret token on your API page after logging in to your eSignatures.io account. Please note that requests from browsers will result in CORS error, in order to safeguard your secret token.
        </p>
        <p class="mr-0 sm:mr-[50%] mb-[14px] text-[13px] px-[28px] py-0 block mt-0 leading-normal">
            Rate limiting: To protect against accidental requests and intentional attacks, our service uses an adaptive rate limiting technique. Adaptive rate limiting means that the rate limiting changes based on the usage patterns. Please note that it's discouraged to repetitively 'poll' contract information via the API, eg 
            <code class="p-[3px] rounded-sm bg-[rgba(0,0,0,0.05)]">
                GET /api/contracts/<id>
            </code>
            . Using Webhook notifications is the recommended way to keep the contract statuses updated.
        </p>
        <table class="mb-[1em] mr-0 sm:mr-[50%] py-0 px-[28px] block">
            <thead>
                <tr class="border-b border-gray-300">
                    <th class="text-[14px] text-left text-[#263042] py-[5px] px-[10px] align-bottom leading-normal">Parameter</th>
                    <th class="text-[14px] text-left text-[#263042] py-[5px] px-[10px] align-bottom leading-normal">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-300">
                    <td class="text-[14px] bg-white p-[10px] align-top leading-normal">token</td>
                    <td class="text-[14px] bg-white p-[10px] align-top leading-normal">Your API secret token</td>
                </tr>
            </tbody>
        </table>
        <h1 class="text-[28px] mt-[60px] border-t border-gray-300 border-b py-[0.5em] mb-[21px] border-b border-gray-300 mr-0 sm:mr-[50%] font-bold px-[28px]">
            Contracts
        </h1>
        <p class="mr-0 sm:mr-[50%] mb-[14px] text-[13px] px-[28px] py-0 block mt-0 leading-normal">
            Contracts can be fully managed via the API. Sending a contract can be done with a single API call, and after that signatures are collected, and notifications are provided at every stage of the contract’s lifecycle via webhooks.
        </p>
        <h2 class="py-[1.2em] mt-[70px] border-t border-gray-300 mr-0 sm:mr-[50%] font-bold px-[28px] text-[19px] font-semibold mb-0">
            Send a contract
        </h2>
        <div class="m-0 py-[2em] px-[28px] w-full sm:w-1/2 float-right clear-right text-white bg-[#263042] rounded-tl-[20px]">
            <code class="p-0 text-[12px] rounded-sm bg-transparent">
                <p>
                    <span class="text-[#a6e22e]">
                        POST
                    </span>
                    <span class="text-white">
                        /api/contracts
                    </span>
                    <span class="text-[#f92672]">
                        HTTP
                    </span>
                    <span class="text-[#f92672]">
                    /
                    </span>
                    <span class="text-[#ae81ff]">
                        1.1
                    </span>
                </p>
            </code>
        </div>
        <div class="m-0 py-[1.3em] px-[22px] w-full sm:w-1/2 float-right clear-right text-white bg-[#232323]">
            <code class="p-0 text-[12px] rounded-sm bg-transparent">
                <p>
                    <span class="text-white">
                        Example request
                    </span>
                </p>
            </code>
        </div>
        <div class="m-0 py-[2em] px-[28px] w-full sm:w-1/2 float-right clear-right text-white bg-[#263042] overflow-auto sm:whitespace-nowrap">
            <code class="p-0 text-[12px] rounded-sm bg-transparent">
                <div>
                    <span class="text-white">
                        curl -X POST -H
                    </span>
                    <span class="text-[#e6db74]">
                        'Content-type:application/json' 'https://esignatures.io/api/contracts?token=your-secret-token'
                    </span>
                    <span class="text-white">
                        -d
                    </span>
                    <span class="text-[#e6db74] pr-6">
                        '{"template_id": "4templ44-6666","signers":[{"name":"Sam Signer","email":"sam@tenants.com","mobile":"+12481234567"}],"placeholder_fields":[{"api_key":"preferred_term","value":"24 months"}], "test": "yes"}'
                    </span>
                </div>
            </code>
        </div>
        <div class="m-0 py-[1.3em] px-[22px] w-full sm:w-1/2 float-right clear-right text-white bg-[#232323]">
            <code class="p-0 text-[12px] rounded-sm bg-transparent">
                <p>
                    <span class="text-white">
                        JSON request parameters
                    </span>
                </p>
            </code>
        </div>
        <div class="m-0 mb-4 py-[2em] px-[28px] w-full sm:w-1/2 float-right clear-right text-white bg-[#263042] overflow-auto">
            <code class="p-0 text-[12px] rounded-sm bg-transparent">
                <div>
                    <span class="text-white">
                        {
                    </span>
                    <span class="text-[#e6db74] pl-[15px]">
                        <br>
                          {<br>
                            "template_id": "4templ44-6666",<br>
                            "test": "no",<br>
                            "title": "Loan Agreement - Saver package",<br>
                            "locale": "en",<br>
                            "metadata": "ID0001",<br>
                            "expires_in_hours": "48",<br>
                            "custom_webhook_url": "https://your-website.com/esignaturesio-custom-webhook",<br>
                            "assigned_user_email": "colleague@your-business.com",<br>
                            "labels": ["MA", "Rental"],<br>
                            "signers": [<br>
                            {<br>
                            "name": "Benny Bell",<br>
                            "email": "benny@me.com",<br>
                            "mobile": "+12481234567",<br>
                            "company_name": "ACME Corp",<br>
                            "signing_order": "1",<br>
                            "auto_sign": "no",<br>
                            "signature_request_delivery_method": "email",<br>
                            "signed_document_delivery_method": "email",<br>
                            "required_identification_methods": ["email", "sms"],<br>
                            "redirect_url": "https://your-website.com/aftersign",<br>
                            "embedded_redirect_iframe_only": "no",<br>
                            }<br>
                            ],<br>
                            "placeholder_fields": [<br>
                            {<br>
                            "api_key": "interest_rate",<br>
                            "value": "3.2%"<br>
                            },<br>
                            {<br>
                            "api_key": "floor-plan",<br>
                            "document_elements": [{"type":  "image", "image_base64":  <br>"iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQIW2P4v5ThPwAG7wKklwQ/bwAAAABJRU5ErkJggg=="}]<br>
                            }<br>
                            ],<br>
                            "signer_fields": [<br>
                            {<br>
                            "signer_field_id": "preferred_term",<br>
                            "default_value": "15 years"<br>
                            }<br>
                            ],<br>
                            "emails": {<br>
                            "signature_request_subject": "Your document is ready to sign",<br>
                            "signature_request_text": "Hi __FULL_NAME__, \n\n To review and sign the contract please press the button below \n\n Kind Regards",<br>
                            "final_contract_subject": "Your document is signed",<br>
                            "final_contract_text": "Hi __FULL_NAME__, \n\n Your document is signed.\n\nKind Regards",<br>
                            "cc_email_addresses": ["tom@email.com", "francis@email.com"],<br>
                            "reply_to": "support@customdomain.com"<br>
                            },<br>
                            "custom_branding": {<br>
                            "company_name": "WhiteLabel LLC",
                            "logo_url": "https://online-logo-store.com/yourclient-logo.png"<br>
                            }<br>
                            }<br>
                    </span>
                </div>
            </code>
        </div>
        <p class="mr-0 sm:mr-[50%] mb-[14px] text-[13px] px-[28px] py-0 block mt-0 leading-normal">
            This request creates the contract and sends the links (via email or SMS) to the signers to collect their signatures.
        </p>
        <table class="mb-[1em] overflow-auto mr-0 sm:mr-[50%] py-0 pl-[28px] block">
            <thead>
                <tr class="border-b border-gray-300">
                    <th class="text-[14px] pr-[200px] text-left text-[#263042] py-[5px] px-[10px] align-bottom leading-normal">Parameter</th>
                    <th class="text-[14px] text-left text-[#263042] py-[5px] px-[10px] align-bottom leading-normal">Required</th>
                    <th class="text-[14px] text-left text-[#263042] py-[5px] px-[10px] align-bottom leading-normal">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-[14px] bg-white p-[10px] text-left align-top leading-normal">test</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">no</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">The sent contract is marked as 'demonstration only', and no fee is deducted for sending the contract.</td>
                </tr>
                <tr>
                    <td class="text-[14px] bg-white p-[10px] text-left align-top leading-normal">title</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">no</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">The unique title of the contract (Template name when not specified). It appears in emails, generated documents, and on dashboard pages</td>
                </tr>
                <tr>
                    <td class="text-[14px] bg-white p-[10px] text-left align-top leading-normal">locale</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">no</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">Setting the signer page/emails language. Currently available locales:<br><code class="p-[3px] rounded-sm bg-[rgba(0,0,0,0.05)]"> hu pt sv cz es zh-CN da it en no ro de fr nl vi en-GB sl id ja hr rs sk pl</code></td>
                </tr>
                <tr>
                    <td class="text-[14px] bg-white p-[10px] text-left align-top leading-normal">metadata</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">no</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">Custom information</td>
                </tr>
                <tr>
                    <td class="text-[14px] bg-white p-[10px] text-left align-top leading-normal">expires_in_hours</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">no</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">The signature request links will expire after that given period of time</td>
                </tr>
                <tr>
                    <td class="text-[14px] bg-white p-[10px] text-left align-top leading-normal">custom_webhook_url</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">no</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">The Custom webhook URL to be used for the webhook notifications, instead of the default one specified on your API page</td>
                </tr>
                <tr>
                    <td class="text-[14px] bg-white p-[10px] text-left align-top leading-normal">assigned_user_email</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">no</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">Assign of of your users in eSignatures.io to the new contract, to manage it and receive notifications</td>
                </tr>
                <tr>
                    <td class="text-[14px] bg-white p-[10px] text-left align-top leading-normal">labels</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">no</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">Assigns the given list of Labels to the contract. The Labels are shown on the Dashboard UI and they are searchable. They help with grouping the contracts.</td>
                </tr>
                <tr>
                    <td class="text-[14px] bg-white p-[10px] text-left align-top leading-normal">signers</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">yes</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">List of signers</td>
                </tr>
                <tr>
                    <td class="text-[14px] bg-white p-[10px] text-left align-top leading-normal">signers:name</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">yes</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">Name of signers</td>
                </tr>
                <tr>
                    <td class="text-[14px] bg-white p-[10px] text-left align-top leading-normal">signers:email</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">cond</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">Email address of the signer. (Can be blank when the mobile number is provided)</td>
                </tr>
                <tr>
                    <td class="text-[14px] bg-white p-[10px] text-left align-top leading-normal">signers:mobile</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">cond</td>
                    <td class="text-[14px] bg-white p-[10px] align-top text-left leading-normal">Mobile number of the signer. Non-US mobile numbers must start with the country code, eg +61.... (Can be blank when the email address is provided)</td>
                </tr>
            </tbody>
        </table>
    </div>
  </main>