class Errors {
   /**
	* Create new errors instance
	*/
	constructor() {
		this.errors = {}
	}
	
   /**
	* Determine i an error exists for the given field
	*
	* @param [string] field
	*/
	has(field) {
		return this.errors.hasOwnProperty(field)
	}

   /**
	* Determine if we have any error
	*/
	any() {
		return Object.keys(this.errors).length > 0
	}

   /**
	* Retrive the error message for a field
	*
	* @param [string] field
	*/
	get(field) {
		if(this.errors[field]) {
			return this.errors[field][0]
		}
	}

   /**
	* Record the new errors
	*
	* @param [object] errors
	*/
	record(errors) {
		this.errors = errors
	}

   /**
	* Clear one or all erorr fields
	*
	* @param [string|null] field
	*/
	clear(field) {
		if(field) {
			delete this.errors[field];
			return
		}

		this.errors = {}
	}
}

export default Errors;