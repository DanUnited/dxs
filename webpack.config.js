var webpack = require("webpack");
module.exports = {
    // входная точка нашего приложения
    entry : './public/js/main.js',
    output: {
        // результат работы Webpack будет в файле с таким именем
        filename: 'public/js/bundle.js'
    },
    module: {
        loaders: [
            {
                test   : /\.js$/,
                exclude: /node_modules/,
                loader : 'babel-loader',
                query  : {
                    presets: [ 'es2015' ]
                }
            }
        ]
    },
    plugins: [
        new webpack.optimize.UglifyJsPlugin(),
    ]
};