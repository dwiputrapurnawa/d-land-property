<section class="flex flex-col text-xl text-white max-w-[600px] mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col px-6 sm:px-10 md:px-20 py-12 sm:py-16 md:py-24 w-full shadow-2xl bg-white bg-opacity-10 rounded-lg">
      <h2 class="self-center text-2xl sm:text-3xl tracking-wider leading-tight sm:leading-10 text-center mb-8 sm:mb-12">
        Leave your details with the correct number and our specialists will advise you on any questions you may have
      </h2>
      <form class="mt-8 sm:mt-12 md:mt-16 space-y-6 sm:space-y-8">
        <div>
          <label for="name" class="block tracking-wider mb-2 text-lg sm:text-xl">Name</label>
          <input type="text" id="name" name="name" class="w-full bg-transparent border-b border-white pb-2 focus:outline-none focus:border-opacity-75 transition-colors" required aria-required="true">
        </div>
        <div>
          <label for="email" class="block tracking-wider mb-2 text-lg sm:text-xl">Your email</label>
          <input type="email" id="email" name="email" class="w-full bg-transparent border-b border-white pb-2 focus:outline-none focus:border-opacity-75 transition-colors" required aria-required="true">
        </div>
        <div>
          <label for="messenger" class="block tracking-wider mb-2 text-lg sm:text-xl">Choose a messenger</label>
          <div class="relative">
            <select id="messenger" name="messenger" class="w-full bg-transparent border-b border-white pb-2 appearance-none focus:outline-none focus:border-opacity-75 transition-colors">
              <option value="whatsapp">WhatsApp</option>
              <option value="telegram">Telegram</option>
              <option value="viber">Viber</option>
            </select>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fd589c53f10e9c73ab039af7d896263d897e47f4da28286b28cbc488ab13ceb3?placeholderIfAbsent=true&apiKey=d2a041474570455ea3b193ed2249e743" alt="" class="absolute right-0 bottom-2 w-[18px] pointer-events-none" aria-hidden="true">
          </div>
        </div>
        <div>
          <label for="phone" class="block tracking-wider mb-2 text-lg sm:text-xl">Your phone number</label>
          <div class="flex items-center border-b border-white">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/700af79c2cec41312bbfba10f9a528dd9f92d26374ecffd741ac5381013e09fd?placeholderIfAbsent=true&apiKey=d2a041474570455ea3b193ed2249e743" alt="Country flag" class="w-[27px] mr-2">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/45eb312feaefd5021a20e0c8d3ba5c4a41aae88ad3338be3de0c0e5397e156b4?placeholderIfAbsent=true&apiKey=d2a041474570455ea3b193ed2249e743" alt="" class="w-[17px] mr-2" aria-hidden="true">
            <input type="tel" id="phone" name="phone" value="+62 (999)-999-99-999" class="w-full bg-transparent pb-2 focus:outline-none focus:border-opacity-75 transition-colors" required aria-required="true">
          </div>
        </div>
        <button type="submit" class="w-full px-8 sm:px-16 py-3 sm:py-4 mt-8 sm:mt-12 text-base sm:text-lg tracking-wide border border-white border-solid font-medium rounded-full hover:bg-white hover:bg-opacity-10 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 transition-colors">
          GET A CONSULTATION
        </button>
      </form>
      <p class="mt-8 sm:mt-12 text-xs sm:text-sm tracking-wide font-normal text-center">
        By clicking the button, you consent to the processing of personal data and agree to the privacy policy
      </p>
    </div>
  </section>