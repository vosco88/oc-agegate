## Age Gate OctoberCMS plugin

This plugin adds simple javascript age gate popup solution to your OctoberCMS site. 

### Usage

Add `{% styles %` and `{% scripts %}` to your site. After this add the Gate component to the layout after these two tags.

### Customization options

- Cookie retention period (default:7 days)
- Cancel URL - specifies URL which the user will be redirected to in case he clicks on the 'No' button. In case it is external URL add `http://`/`https://` in front of the URL


### Multilingual

This plugin requires the usage of Rainlab.Translate plugin to support multi language sites and customization of the Body message and Buttons text
