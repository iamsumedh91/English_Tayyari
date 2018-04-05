 <div id="page-sidebar">
    <div class="scroll-sidebar">
        

    <ul id="sidebar-menu">
    <li class="header"><span>Overview</span></li>
    <li>
        <a href="{!!url('/dashboard')!!}" title="Admin Dashboard">
            <i class="glyph-icon icon-linecons-tv"></i>
            <span>Admin dashboard</span>
        </a>
    </li>
    <li class="divider"></li>
    
    <li class="header"><span></span></li>
    <li>
        <a href="#" title="Elements">
            <i class="glyph-icon icon-linecons-diamond"></i>
            <span>Daily English Tips</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="{!!url('addailytips')!!}" title="Add Tip"><span> Add Tips</span></a></li>
                
                <li><a href="{!!url('viewdailytips')!!}" title="View Tips"><span>View Tips</span></a></li>
                
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>

    <li>
        <a href="#" title="Daily Phrase">
            <i class="glyph-icon icon-linecons-lightbulb"></i>
            <span>Daily Phrase</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="{!!url('addphrases')!!}" title="Add Tip"><span> Add Daily Phrase</span></a></li>
                
                <li><a href="{!!url('viewphrase')!!}" title="View Daily Phrase"><span> View Daily Phrase</span></a></li>
                
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>


    <li>
        <a href="#" title="Daily Words">
            <i class="glyph-icon icon-linecons-lightbulb"></i>
            <span>Daily Words</span>
           
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="{!!url('addailyword')!!}" title="Chart boxes"><span> Add Daily Words </span></a></li>
                
                <li><a href="{!!url('viewdailywords')!!}" title="Social boxes"><span>View Daily Words</span></a></li>
                
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>
    <li>
        <a href="#" title=" English Learning ">
            <i class="glyph-icon icon-linecons-wallet"></i>
            <span> English Learning </span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <!-- <li><a href="{!!url('addcategory')!!}" title="Add Category"><span>Add Category</span></a></li>
                <li><a href="{!!url('addsubcategory')!!}" title="Add Sub Category"><span>Add Sub Category</span></a></li>
                <li><a href="{!!url('allcategories')!!}" title="View Learning Material"><span>View Categories</span></a></li> -->
                <li><a href="{!!url('learning/addmaterial')!!}" title="Add Learning Material"><span>Add Learning Material </span></a></li>
                <li><a href="{!!url('learning/viewlearningmaterial')!!}" title="View Learning Material"><span>View Learning Material </span></a></li>
                
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>
    <li>
        <a href="#" title="English Practice">
            <i class="glyph-icon icon-linecons-wallet"></i>
            <span> English Practice </span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="{!!url('practice/addmaterial')!!}" title="Add Practice Material"><span>Add Practice Material </span></a></li>
                <li><a href="{!!url('practice/viewpracticequestions')!!}" title="View Practice Material"><span>View Practice Material </span></a></li>
                
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>

    <li>
        <a href="#" title=" English Test ">
            <i class="glyph-icon icon-linecons-wallet"></i>
            <span> English Test </span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="{!!url('test/addquestion')!!}" title="Add Test Question "><span>Add Test Question </span></a></li>
                <li><a href="{!!url('test/viewtestquestions')!!}" title="View Test Questions "><span>View Test Questions </span></a></li>
                
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>

    <li>
        <a href="#" title=" English Test ">
            <i class="glyph-icon icon-linecons-wallet"></i>
            <span> Category </span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="{!!url('/addcategory')!!}" title="Add Category "><span>Add Category </span></a></li>
                <li><a href="{!!url('/viewcategories')!!}" title="View Categories "><span>View Categories </span></a></li>
                
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>

   
    
  
    <li>
        <a href="#" title="Maps">
            <i class="glyph-icon icon-linecons-sound"></i>
            <span>Testimonials</span>
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="{!!url('addtestimonial')!!}" title="Add Testimonials"><span>Add Testimonials</span></a></li>
                <li><a href="{!!url('alltestimonials')!!}" title="View Testimonials"><span>View Testimonials</span></a></li>
                
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>
    <li class="header"><span>Extra</span></li>
    <li>
        <a href="#" title="Pages">
            <i class="glyph-icon icon-linecons-fire"></i>
            <span> Informational Pages</span>
            
        </a>
        <div class="sidebar-submenu">

            <ul>
                <li><a href="" title="About Us"><span>About Us</span></a>

                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="{!!url('addaboutcontent')!!}" title="Add Content"><span>Add Content</span></a></li>
                                <li><a href="{!!url('aboutus')!!}" title="Show Content"><span>Show Content</span></a></li>
                            </ul>
                        </div>
                </li>
                <li><a href="{{!!url('/contactus')!!}}" title="Contact Us"><span>Contact Us</span></a>
                </li>
                <li><a href="{{!!url('/privacypolicy')!!}}" title="Privacy Policy"><span>Privacy Policy</span></a>
                    <div class="sidebar-submenu">
                            <ul>
                                <li><a href="{!!url('addprivacycontent')!!}" title="Add Content"><span>Add Content</span></a></li>
                                <li><a href="{!!url('privacypolicy')!!}" title="Show Content"><span>Show Content</span></a></li>
                            </ul>
                        </div>
                </li>

                <li><a href="" title="Add Page"><span>Add Page</span></a>

                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="{!!url('addpage')!!}" title="Add Content"><span>Add Content</span></a></li>
                                <li><a href="{!!url('showpages')!!}" title="Show Pages"><span>Show Pages</span></a></li>
                            </ul>
                        </div>
                </li>


                
            </ul>

        </div><!-- .sidebar-submenu -->
    </li>
     <li>
        <a href="#" title="Pages">
            <i class="glyph-icon icon-linecons-fire"></i>
            <span> Site Settings</span>
            
        </a>

         <div class="sidebar-submenu">

            <ul>
                           
                                <li><a href="{!!url('logomanager')!!}" title="Add Content"><span>Logo Manager</span></a></li>
                                <li><a href="{!!url('sitetitle')!!}" title="Show Pages"><span>Site Title</span></a></li>
                        
            </ul>
        </div>
    </li>
 
    </ul><!-- #sidebar-menu -->
</li>

    </div>
</div>
        