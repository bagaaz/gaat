module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      primary: "#575741",
      secondary: "#cccc99",
      white: "#eaeaea",
      black: "#000000",
      gray: {
        50: "#fafafa",
        100: "#f5f5f5",
        200: "#e5e5e5",
        300: "#d4d4d4",
        400: "#a3a3a3",
        500: "#737373",
        600: "#525252",
        700: "#404040",
        800: "#262626",
        900: "#171717",
        950: "#0a0a0a"
      },
      green:  {
        light: "#86895d",
        medium: "#54582f",
        dark: "#272b00"
      }
    }
  },
  plugins: [],
};