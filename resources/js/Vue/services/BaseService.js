import _ from "lodash"

export default class BaseService {

    constructor(state) {
        this.state = state
    }

     get = function () {
        let array = _.at(this.state, arguments)
        return array.length > 1 ? array : array[0]
    }

    set = (key, value) => {
        _.set(this.state, key, value)
        return _.at(this.state, [key])[0]
    }

}
