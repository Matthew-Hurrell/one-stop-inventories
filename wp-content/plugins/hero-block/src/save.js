import { useBlockProps } from '@wordpress/block-editor';

export default function save( { attributes } ) {
    const blockProps = useBlockProps.save();
	
    return (
		<div { ...blockProps }>
			<h1>{ attributes.heading_one }</h1>
			<h2>{ attributes.heading_two }</h2>
		</div>
	);
}
