/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      backgroundImage: {
        'homeHero':  "url('https://pet-express.com/wp-content/uploads/2019/03/hero-placeholder-e1552448879668.jpg')",
        'heroSvg1': "url('https://pet-express.com/wp-content/themes/pet-express/components/assets/images/overlay-home-page.svg')",
        'heroSvg2': "url('https://pet-express.com/wp-content/themes/pet-express/components/assets/images/header-fade.svg')",
        'petBanner': "url('https://pet-express.com/wp-content/themes/pet-express/components/assets/images/footer-cta-bg.jpg')",
        'teamBanner': "url('https://pet-express.com/wp-content/uploads/2019/03/johnny-playing-with-puppy.jpg')",
        'partnerBanner': "url('https://pet-express.com/wp-content/uploads/2019/03/johnny-helping-with-dog.jpg')",
        'faqBanner': 'url("https://pet-express.com/wp-content/uploads/2019/12/banner-faqs.jpg")'
      },
      colors: {
        'primary': '#f8a02f',
        'second': '#1a2d41',
        'thirdly': "#003d7c"
      },
      fontFamily: {
        work: ['Work Sans','sans-serif'],
    }
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
