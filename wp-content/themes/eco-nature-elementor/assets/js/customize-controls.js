( function( api ) {

	// Extends our custom "eco-nature-elementor" section.
	api.sectionConstructor['eco-nature-elementor'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );