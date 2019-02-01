
window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.moment = require('moment');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * 设置 OAuth Client Token
 * @Author   beanTang                 t13764767060@gmail.com
 * @DateTime 2018-11-21T13:32:28+0800
 * @param    boolean                 clientToken            [description]
 */
// function setClientToken (clientToken = null) {
// 	if (!!clientToken) {
// 		clientToken = JSON.parse(clientToken);
// 		if (moment().isBefore(clientToken.expires_at)) {
// 			window.clientToken = clientToken.access_token;
// 			return true;
// 		}
// 	}
// 	axios.post('/oauth/token', {
// 		grant_type: 'client_credentials',
// 		client_id: 1,
// 		client_secret: 'AziZB46VNF0tXSp66BkXqkKtHfpfAGtobJG2Jb30'
// 	}).then(response => {
// 		let data = response.data;
// 		let expiresAt = moment().add('s', data.expires_in).format('YYYY-MM-DD HH:mm:ss');
// 		clientToken = {
// 			'access_token': data.access_token,
// 			'expires_at': expiresAt
// 		};
// 		storage.setItem('client_token', JSON.stringify(clientToken));
// 		window.clientToken = clientToken.access_token;
// 	});
// 	return true;
// }
//
// var storage = window.localStorage;
// var clientToken = storage.getItem("client_token");
// setClientToken(clientToken);

