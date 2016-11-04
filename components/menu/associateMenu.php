<ul class="sidebar-menu">
        <?php
              switch ($page) {
                 case 'mission':
                   $classG="active";
                   break;

                 case 'guide':
                   $classG="active";
                   break;  

                 case 'bestP':
                   $classG="active";
                   break;  

                 case 'lBoard':
                   $classG="active";
                   break;  
                 
                 case 'accInfo':
                   $classA="active";
                   break;
                
                 case 'compMess':
                   $classC="active";
                   break;
                 
                 case 'inbox':
                    $classC="active";
                    break;

                 case 'overview':
                   $classP="active";
                   break;

                 case 'tasks':
                   $classP="active";
                   break;
                 
                 case 'resources':
                   $classP="active";
                   break;

                 default:
                   # code...
                   break;
               } ?>
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->

        <li class="<?php echo "$classA"; ?>"><a href="?page=accInfo"><i class="fa fa-link"></i> <span>Account Information</span></a></li>

        <li class="<?php echo "$classG"; ?>" class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>General Information</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=mission">Mission and Vision</a></li>
            <li><a href="?page=guide">Guidelines</a></li>
            <li><a href="?page=bestP">Best Practices</a></li>
            <li><a href="?page=lBoard">Leadership board</a></li>
          </ul>
        </li>
        
        <li class="<?php echo "$classC"; ?>" class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Messaging</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=compMess">Compose Message</a></li>
            <li><a href="?page=inbox">Inbox</a></li>
          </ul>
        </li>

        <li class="<?php echo "$class"; ?>" class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Project</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=overview">Overview</a></li>
            <li><a href="?page=tasks">Tasks</a></li>
            <li><a href="?page=resources">Resources</a></li>
          </ul>
        </li>
      </ul>