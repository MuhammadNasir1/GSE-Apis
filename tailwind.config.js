module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
 colors: {
        transparent: "transparent",
        current: "currentColor",
        primary: "#027C56",
        secondary: "#edbd58",
        darkColor: "#252525",
        lightColor: "#D7D7E1",
      },
      fontFamily: {
        roboto: ["Roboto", "sans-serif"],
      },

      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }
