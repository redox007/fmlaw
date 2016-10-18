<?php 
header("Content-Type:text/javascript");

//Setup URL to WordPress
$absolute_path = __FILE__;
$path_to_wp = explode( 'wp-content', $absolute_path );
$wp_url = $path_to_wp[0];

//Access WordPress
require_once( $wp_url.'/wp-load.php' );

//URL to TinyMCE plugin folder
$plugin_url = get_template_directory_uri().'/includes/theme_shortcodes/tinymce/';
?>
(function(){
	
	var icon_url = '<?php echo $plugin_url; ?>' + 'images/icon_shortcodes.png';

	tinymce.create(
		"tinymce.plugins.MyThemeShortcodes",
		{
			init: function(d,e) {
					
					d.addCommand( "myThemeOpenDialog",function(a,c){
						
						// Grab the selected text from the content editor.
						selectedText = '';
					
						if ( d.selection.getContent().length > 0 ) {
					
							selectedText = d.selection.getContent();
							
						} // End IF Statement
						
						myThemeSelectedShortcodeType = c.identifier;
						myThemeSelectedShortcodeTitle = c.title;
						
						jQuery.get(e+"/dialog.php",function(b){
							
							jQuery('#shortcode-options').addClass( 'shortcode-' + myThemeSelectedShortcodeType );
                            
                            var regex = /(col-sm-\d+)/g;
                            
                            if( myThemeSelectedShortcodeType.match(regex) ){
                           
                             var a = '['+myThemeSelectedShortcodeType+']'+selectedText+'[/'+myThemeSelectedShortcodeType+']';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a); 
                                
                                return;  
                           
                           }
							
							// Skip the popup on certain shortcodes.
							
							switch ( myThemeSelectedShortcodeType ) {
								
								// alert
								
								case 'alert':
								
								var a = '[alert]'+selectedText+'[/alert]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// approved
								
								case 'approved':
								
								var a = '[approved]'+selectedText+'[/approved]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// attention
								
								case 'attention':
								
								var a = '[attention]'+selectedText+'[/attention]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// notice
								
								case 'notice':
								
								var a = '[notice]'+selectedText+'[/notice]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// tags
								
								case 'tags':
								
								var a = '[tags]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// dropcap
								
								case 'dropcap':
								
								var a = '[dropcap]'+selectedText+'[/dropcap]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// frame
								
								case 'frame':
								
								var a = '[frame]'+selectedText+'[/frame]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// frame_left
								
								case 'frameleft':
								
								var a = '[frame_left]'+selectedText+'[/frame_left]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// frame_right
								
								case 'frameright':
								
								var a = '[frame_right]'+selectedText+'[/frame_right]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// frame
								
								case 'hr':
								
								var a = '[hr]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // spacer
								
								case 'spacer':
								
								var a = '[spacer]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
				                
                
                // one_half (1/2)
								
								case 'one_half':
								
								var a = '[one_half]'+selectedText+'[/one_half]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // one_third (1/3)
								
								case 'one_third':
								
								var a = '[one_third]'+selectedText+'[/one_third]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // two_third (2/3)
								
								case 'two_third':
								
								var a = '[two_third]'+selectedText+'[/two_third]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // one_fourth (1/4)
								
								case 'one_fourth':
								
								var a = '[one_fourth]'+selectedText+'[/one_fourth]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // three_fourth (3/4)
								
								case 'three_fourth':
								
								var a = '[three_fourth]'+selectedText+'[/three_fourth]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // one_fifth (1/5)
								
								case 'one_fifth':
								
								var a = '[one_fifth]'+selectedText+'[/one_fifth]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // two_fifth (2/5)
								
								case 'two_fifth':
								
								var a = '[two_fifth]'+selectedText+'[/two_fifth]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // three_fifth (3/5)
								
								case 'three_fifth':
								
								var a = '[three_fifth]'+selectedText+'[/three_fifth]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // four_fifth (4/5)
								
								case 'four_fifth':
								
								var a = '[four_fifth]'+selectedText+'[/four_fifth]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // one_sixth (1/6)
								
								case 'one_sixth':
								
								var a = '[one_sixth]'+selectedText+'[/one_sixth]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // five_sixth (5/6)
								
								case 'five_sixth':
								
								var a = '[five_sixth]'+selectedText+'[/five_sixth]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                 // blockquote
								
								case 'blockquote':
								
								var a = '[blockquote]'+selectedText+'[/blockquote]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                
                // clear
								
								case 'clear':
								
								var a = '[clear]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// tabs
								
								case 'tabs':
								  var a = '[tabs][tab title="Tab 1" state="active"]Your Content Goes Here...[/tab][tab title="Tab 2"]Your Content Goes Here...[/tab][tab title="Tab 3"]Your Content Goes Here...[/tab][tab title="Tab 4"]Your Content Goes Here...[/tab][/tabs]';
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                
                break;
                
                // toggle
								
								case 'toggle':
								
								var a = '[toggle title="Your title goes here"]Your content goes here.[/toggle]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
                                
                  // left Content
                                
                                case 'left_content':
                                
                                var a = '[left_content]'
                                +selectedText
                                +'[/left_content]';
                               //alert(a); 
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                //Border
                              case 'border':
                                
                                var a = '[border]';
                               //alert(a); 
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                    // toggle
                                
                                case 'right_content':
                                
                                var a = '[right_content]\r\n'+selectedText+'\n[/right_content]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                     // toggle
                                
                                case 'left_sidebar':
                                
                                var a = '[left_sidebar]\r\n'+selectedText+'\n[/left_sidebar]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                      // toggle
                                
                                case 'bodycontent':
                                
                                var a = '[bodycontent]\r\n'+selectedText+'\n[/bodycontent]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                      // toggle
                                
                                case 'about_me':
                                
                                var a = '[about_me]\r\n'+selectedText+'\n[/about_me]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;   
                       // toggle
                                
                                case 'arcordian':
                                
                              var a = '[collapsibles][collapse title="Collapse 1" state="active"]Your Content Goes Here[/collapse][collapse title="Collapse 2"]Your Content Goes Here[/collapse][collapse title="Collapse 3"]Your Content Goes Here[/collapse][/collapsibles]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                      // toggle
                                
                                case 'creative_process':
                                
                                var a = '[creative_process]\r\n'+selectedText+'\n[/creative_process]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                      // toggle
                                
                                case 'work_with':
                                
                                var a = '[work_with]\r\n'+selectedText+'\n[/work_with]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; thank_you
                      // toggle
                                
                                case 'thank_you':
                                
                                var a = '[thank_you]\r\n'+selectedText+'\n[/thank_you]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                      // toggle
                                
                                case 'blue_strong':
                                
                                var a = '[blue_strong]'+selectedText+'[/blue_strong]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                      // toggle
                                
                                case 'learn_more':
                                
                                var a = '[learn_more]'+selectedText+'[/learn_more]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                      // toggle
                                
                                case 'purple':
                                
                                var a = '[purple]'+selectedText+'[/purple]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                      // toggle
                                
                                case 'grey':
                                
                                var a = '[grey]'+selectedText+'[/grey]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                      // toggle
                                
                                case 'tabs':
                                
                                var a = '[tabs]'+selectedText+'[/tabs]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                     // toggle
                                
                                case 'tabcontent':
                                
                                var a = '[tabcontent]'+selectedText+'[/tabcontent]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                      // toggle
                                
                                case 'hrline':
                                
                                var a = '[hrline]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                      // toggle
                                
                                case 'country':
                                
                                var a = '[country]'+selectedText+'[/country]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                      // toggle
                                
                                case 'state_toggle':
                                
                                var a = '[state_toggle]'+selectedText+'[/state_toggle]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;     
                      // toggle
                                
                                case 'toggle_wrap':
                                
                                var a = '[toggle_wrap]'+selectedText+'[/toggle_wrap]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                                                               
                                case 'tabwrap':
                                
                                var a = '[tabwrap]'+selectedText+'[/tabwrap]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                        //toggle
                             
                                case 'collumns':
                                
                                var a = '[collumns]'+selectedText+'[/collumns]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;    
                        //toggle
                             
                                case 'welcome':
                                
                                var a = '[welcome]'+selectedText+'[/welcome]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                        //toggle
                             
                                case 'offer':
                                
                                var a = '[offer]'+selectedText+'[/offer]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                        //toggle
                             
                                case 'offer_box':
                                
                                var a = '[offer_box]'+selectedText+'[/offer_box]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                        //toggle
                             
                                case 'boxes':
                                
                                var a = '[boxes]'+selectedText+'[/boxes]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                        //toggle
                             
                                case 'devider':
                                
                                var a = '[devider]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                        //toggle
                             
                                case 'img-wrapper':
                                
                                var a = '[img-wrapper]'+selectedText+'[/img-wrapper]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                        //toggle
                             
                                case 'span4':
                                
                                var a = '[span4]'+selectedText+'[/span4]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                        //toggle
                             
                                case 'controlpanel':
                                
                                var a = '[controlpanel]'+selectedText+'[/controlpanel]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                          //toggle
                             
                                case 'gap':
                                
                                var a = '[gap]'+selectedText+'[/gap]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                          //toggle
                             
                                case 'wrapper':
                                
                                var a = '[wrapper]'+selectedText+'[/wrapper]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                          //toggle
                             
                                case 'price':
                                
                                var a = '[price]'+selectedText+'[/price]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                          //toggle
                             
                                case 'servers':
                                
                                var a = '[servers]'+selectedText+'[/servers]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                          //toggle
                             
                                case 'dedication':
                                
                                var a = '[dedication]'+selectedText+'[/dedication]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                         //toggle
                             
                                case 'summary':
                                
                                var a = '[summary]'+selectedText+'[/summary]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                         //toggle
                             
                                case 'desc':
                                
                                var a = '[desc]'+selectedText+'[/desc]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                         //toggle
                             
                                case 'planrate':
                                
                                var a = '[planrate]'+selectedText+'[/planrate]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                           //toggle
                             
                                case 'subplan1':
                                
                                var a = '[subplan1]'+selectedText+'[/subplan1]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                           //toggle
                             
                                case 'sign':
                                
                                var a = '[sign]'+selectedText+'[/sign]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;  
                            //toggle
                             
                                case 'installers':
                                
                                var a = '[installers]'+selectedText+'[/installers]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                             //toggle
                             
                                case 'vps':
                                
                                var a = '[vps]'+selectedText+'[/vps]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;   
                                
                            //toggle
                             
                                case 'ul':
                                
                                var a = '[ul]'+selectedText+'[/ul]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                             
                             //toggle
                             
                                case 'improvement':
                                
                                var a = '[improvement]'+selectedText+'[/improvement]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;  
                                
                             //toggle
                             
                                case 'servicess':
                                
                                var a = '[servicess]'+selectedText+'[/servicess]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                                
                             //toggle
                             
                                case 'clearfix':
                                
                                var a = '[clearfix]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;
                                
                             //toggle
                             
                                case 'main':
                                
                                var a = '[main]'+selectedText+'[/main]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                                
                            //toggle
                             
                                case 'flowchart':
                                
                                var a = '[flowchart]'+selectedText+'[/flowchart]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;   
                                
                             //toggle
                             
                                case 'subwrapper':
                                
                                var a = '[subwrapper]'+selectedText+'[/subwrapper]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break;  
                                
                            //toggle
                             
                                case 'readmore':
                                
                                var a = '[readmore]'+selectedText+'[/readmore]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                           
                            //toggle
                             
                                case 'span':
                                
                                var a = '[span]'+selectedText+'[/span]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                           //toggle
                             
                                case 'hr':
                                
                                var a = '[hr]';
                                
                                tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
                                
                                break; 
                        
                                
															
								default:
								
								jQuery("#dialog").remove();
								jQuery("body").append(b);
								jQuery("#dialog").hide();
								var f=jQuery(window).width();
								b=jQuery(window).height();
								f=720 < f ? 720:f;
								f-=80;
								b-=84;
							
							tb_show("Insert "+ myThemeSelectedShortcodeTitle +" Shortcode", "#TB_inline?width="+f+"&height="+b+"&inlineId=dialog");jQuery("#shortcode-options h3:first").text(""+c.title+" Shortcode Settings");
							
								break;
							
							} // End SWITCH Statement
						
						}
												 
					)
					 
					} 
				);

				},
					
				createControl:function(d,e){
				
						if(d=="shortcodes_button"){
						
							d=e.createMenuButton("shortcodes_button",{
								title:"Insert Shortcode",
								image:icon_url,
								icons:false
								});
								
								var a=this;d.onRenderMenu.add(function(c,b){
                   
                	c=b.addMenu({title:"Layouts"});
                    a.addWithDialog(c,"Improvement Wrapper","improvement");
                    a.addWithDialog(c,"Services Wrapper","servicess");
                    a.addWithDialog(c,"Mian Wrapper","main");
                    a.addWithDialog(c,"Course Wrapper","flowchart");
                    a.addWithDialog(c,"Course Sub Wrapper","subwrapper");
                    a.addWithDialog(c,"Read More Button","readmore");
                    a.addWithDialog(c,"Devider","hr");
                    a.addWithDialog(c,"Clearfix","clearfix");
                    
                    
                    c=b.addMenu({title:"Grid"}); 
                    a.addWithDialog(c,"COL 1","col-sm-1");
                    a.addWithDialog(c,"COL 2","col-sm-2");
                    a.addWithDialog(c,"COL 3","col-sm-3");
                    a.addWithDialog(c,"COL 4","col-sm-4");
                    a.addWithDialog(c,"COL 5","col-sm-5");
                    a.addWithDialog(c,"COL 6","col-sm-6");
                    a.addWithDialog(c,"COL 7","col-sm-7");
                    a.addWithDialog(c,"COL 8","col-sm-8");
                    a.addWithDialog(c,"COL 9","col-sm-9");
                    a.addWithDialog(c,"COL 10","col-sm-10");
                    a.addWithDialog(c,"COL 11","col-sm-11");
                    a.addWithDialog(c,"COL 12","col-sm-12");
                        
                    c=b.addMenu({title:"Others"});     
                 

                     
                   

							});
							
							return d
						
						} // End IF Statement
						
						return null
					},
		
				addImmediate:function(d,e,a){d.add({title:e,onclick:function(){tinyMCE.activeEditor.execCommand("mceInsertContent",false,a)}})},
				
				addWithDialog:function(d,e,a){d.add({title:e,onclick:function(){tinyMCE.activeEditor.execCommand("myThemeOpenDialog",false,{title:e,identifier:a})}})},
		
				
			}
		);
		
		tinymce.PluginManager.add("MyThemeShortcodes",tinymce.plugins.MyThemeShortcodes)
	}
)();
