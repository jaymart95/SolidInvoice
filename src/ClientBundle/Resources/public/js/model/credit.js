import Backbone from 'backbone';
import Routing from 'fos-router';

export default Backbone.Model.extend({
    defaults: {
        credit: 0
    },
    url() {
        return Routing.generate('_xhr_clients_credit_update', { 'client': this.id })
    },
    validate(values) {
        const credit = parseFloat(values.credit);

        if (0 === credit) {
            // @TODO: Add translation for this text
            return 'Credit value cannot be 0'
        }
    }
});
