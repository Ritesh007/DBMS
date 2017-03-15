<body bgcolor="black">
<script type="text/javascript" src="slider.js"></script>
<link rel="stylesheet" type="text/css" href="slidernew3.css" />
<table valign="top"><tr><td width="65px"></td>
<td valign="top">
                                    <!--Slider Starts Here-->
                                    <div id="slider_container">
                                      <div id="SliderName">
										                                   <img src="db7/db1.jfif" width="400" height="200" border="0"/>
                                                                 
									                                       <img src="db7/db2.jpg"  width="400" height="200" border="0"/>
                                                                
									                                       <img src="db7/db3.jfif" width="400" height="200" border="0"/>

                                                                 
									                                       <img src="db7/db4.jfif" width="400" height="200" border="0"/>
                                                                 
									                                       <img src="db7/db5.jfif" width="400" height="200" border="0"/>
                                                              
									                                       <img src="db7/db6.jfif" width="400" height="200" border="0"/>
                                                               
									                                       <img src="db7/db7.jfif" width="400" height="200" border="0"/>
                                                          
									                                  
                                                             
									  									           </div>
                                      <div id="SliderNameNavigation"></div>
                                      <script type="text/javascript">
											Sliderman.effect({name: 'demo01', cols: 10, rows: 5, delay: 10, fade: false, order: 'straight_stairs'});
											var demoSlider = Sliderman.slider({container: 'SliderName', width: 600, height: 285, effects: 'demo01',
											display: {
											pause: true, // slider pauses on mouseover
											autoplay: 4000, // 4 seconds slideshow
											navigation: {container: 'SliderNameNavigation', label: '&nbsp;'} // navigation (pages) settings
											}});
                                       </script>
									</div>
                                    <!--Slider Ends Here-->                                  </td></tr></table>
</body>