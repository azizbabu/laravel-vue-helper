let webpack = require('webpack')
let path = require('path')

module.exports = {
	entry:{
		app: './resources/assets/js/app.js',
		vendor:['vue', 'axios']
	},

	output: {
		path:path.resolve(__dirname , 'public/js'),
		filename:'[name].js',
		publicPath:'./public'
	},
	module: {
		rules:[
			{
				test:/\.js$/,
				exclude:'/node_modules/',
				loader:'babel-loader'
			}
		]
	},
	
	resolve: {
	    alias: {
	      'vue$': 'vue/dist/vue.esm.js' // 'vue/dist/vue.common.js' for webpack 1
	    }
	},

	// plugin:[
	// 	new webpack.optimize.CommonsChunkPlugin({
	// 		names:['vendor']
	// 	})
	// ],
	optimization: {
	    minimize: false //Update this to true or false
	}
};

if(process.env.NODE_ENV === 'production') {
	// module.exports.plugin.push(
	// 	new webpack.optimize.UglifyJsPlugin({
	// 		sourcemap:true,
	// 		compress:{
	// 			warnings:false
	// 		}
	// 	})
	// );

	module.exports.plugin.push(
		new webpack.DefinePlugin({
			'process.env': {
				NODE_EVP:'production'
			}
		})
	)
}