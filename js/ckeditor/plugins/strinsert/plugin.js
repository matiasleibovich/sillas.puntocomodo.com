/**
 * @license Copyright © 2013 Stuart Sillitoe <stuart@vericode.co.uk>
 * This work is mine, and yours. You can modify it as you wish.
 *
 * Stuart Sillitoe
 * stuartsillitoe.co.uk
 *
 */

CKEDITOR.plugins.add('strinsert',
{
	requires : ['richcombo'],
	init : function( editor )
	{
		//  array of strings to choose from that'll be inserted into the editor
		var strings = [];
		strings.push(['%empresa%', 'Empresa', 'Empresa']);
		strings.push(['%sitioweb%', 'Sitio web', 'Sitio web']);
		strings.push(['%contacto%', 'Contacto', 'Contacto']);
strings.push(['<a href="%accion1url%">%accion1%</a>', 'Acción 1', 'Acción 1']);
strings.push(['<a href="%accion1url%">%accion2%</a>', 'Acción 2', 'Acción 2']);
strings.push(['<a href="%accion1url%">%accion3%</a>', 'Acción 3', 'Acción 3']);
		
		// add the menu to the editor
		editor.ui.addRichCombo('strinsert',
		{
			label: 		'Variables',
			title: 		'Variables',
			voiceLabel: 'Variables',
			className: 	'cke_format',
			multiSelect:false,
			panel:
			{
				css: [ editor.config.contentsCss, CKEDITOR.skin.getPath('editor') ],
				voiceLabel: editor.lang.panelVoiceLabel
			},

			init: function()
			{
				this.startGroup( "Variables de reemplazo" );
				for (var i in strings)
				{
					this.add(strings[i][0], strings[i][1], strings[i][2]);
				}
			},

			onClick: function( value )
			{
				editor.focus();
				editor.fire( 'saveSnapshot' );
				editor.insertHtml(value);
				editor.fire( 'saveSnapshot' );
			}
		});
	}
});