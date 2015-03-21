/*
*
* styles/prosilver/template/loading_indicator.js
*
* @package th23_site
* @author Thorsten Hartmann (www.th23.net)
* @copyright (c) 2008 by Thorsten Hartmann (www.th23.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @modified by dmzx (c) 2014 (www.dmzx-web.net)
*/

window.onbeforeunload = loading_indicator;

function loading_indicator()
{
	var l = document.getElementById('loading-indicator');
	if (l)
	{
		l.style.display = 'block';
	}
}
