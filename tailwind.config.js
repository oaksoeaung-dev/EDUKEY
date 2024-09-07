/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue"],
    theme: {
        extend: {
            colors:{
                primary : "#254d4d"
            },
            fontFamily:{
                roboto : "Roboto, sans-serif",
            },
            animation : {
                "slide" : "30s slide infinite linear"
            },
            keyframes : {
                "slide" : {
                    "to" : {transform: "translate(calc(-50% - 4rem))"}
                }
            }
        },
    },
    plugins: [],
};
