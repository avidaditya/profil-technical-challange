const withMT = require("@material-tailwind/html/utils/withMT");

module.exports = withMT({
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./index.html"
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#9a2cd4',
                'def-green': 'var(--def-green)',
                'alt-green': 'var(--alt-green)',
                'def-purple': 'var(--def-purple)',
                'alt-purple': 'var(--alt-purple)',
                'def-orange': 'var(--def-orange)',
                'alt-orange': 'var(--alt-orange)',
                'def-blue': 'var(--def-blue)',
                'alt-blue': 'var(--alt-blue)',
            },
            fontFamily: {
                sans: ['GoTo-Sans', 'sans-serif']
            },
            fontSize: {
                '1xs': '.375em', // 6px
            },
            height: {
                '400': '400px',
                '500': '500px'
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
});
