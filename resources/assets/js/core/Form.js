import Errors from './Errors'

class Form {
   /**
	* Create new form instance
	*/
	constructor(data) {
		this.originalData = data

		for(let field in data) {
			this[field] = data[field]
		}

		this.errors = new Errors()
	}

   /**
	* Fetch all relevant data for the form
	*/
	data() {
		// let data = Object.assign({}, this)

		// delete data.originalData
		// delete data.errors
		let data = {}

		for(let property in this.originalData) {
			data[property] = this[property]
		}

		return data
	}

   /**
	* Reset the form field
	*/
	reset() {
		for(let field in this.originalData) {
			this[field] = ''
		}

		this.errors.clear()
	}

	post(url) {
		return this.submit('POST', url)
	}

	delete(url) {
		return this.submit('DELETE', url)
	}
	
   /**
	* Submit the form
	*
	* @param [string] request type
	* @param [string] url
	*/
	submit(requestType, url) {
		return new Promise((resolve, reject) => {
			axios[requestType](url, this.data())
			.then(response => {
				this.onSuccess(response.data)

				resolve(response.data)
			})
			.catch(error => {
				this.onFail(error.response.data.errors)

				reject(error.response.data.errors)
			})
		})
		
	}

   /**
	* Handle a successful form submission
	*
	* @param [object] data
	*/
	onSuccess(data) {
		alert(data.message)
		this.reset()
	}

   /**
	* Handle a failed form submission
	*
	* @param [object] errors
	*/
	onFail(errors) {
		this.errors.record(errors)
	}
}

export default Form;