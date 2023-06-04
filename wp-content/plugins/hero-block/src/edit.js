import { Placeholder, TextControl, Button } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import { useBlockProps } from "@wordpress/block-editor";

export default function Edit( { attributes, isSelected, setAttributes } ) {
    return (
        <div { ...useBlockProps() }>
            { attributes.heading_one && ! isSelected ? (
                <h1>{ attributes.heading_one}</h1>
            ) : (
                <Placeholder
                    label="Hero Block"
                    instructions="Add your heading one content"
                >
                    <TextControl
                        value={ attributes.heading_one }
                        onChange={ ( val ) =>
                            setAttributes( { heading_one: val } )
                        }
                    />
                </Placeholder>
            ) }
			{ attributes.heading_two && ! isSelected ? (
                <h2>{ attributes.heading_two}</h2>
            ) : (
                <Placeholder
                    instructions="Add your heading two content"
                >
                    <TextControl
                        value={ attributes.heading_two }
                        onChange={ ( val ) =>
                            setAttributes( { heading_two: val } )
                        }
                    />
                </Placeholder>
            ) }
			{ attributes.button && ! isSelected ? (
				<Button>{ attributes.button }</Button>
			) : (
				<Placeholder
                    instructions="Add your button content"
                >
                    <TextControl
                        value={ attributes.button }
                        onChange={ ( val ) =>
                            setAttributes( { button: val } )
                        }
                    />
                </Placeholder>
			) }
        </div>
    );
}
