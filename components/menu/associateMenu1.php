<ul class="sidebar-menu">
        <?php
              switch ($page) {
                 case 'genInfo':
                   $classG="active";
                   break;
                 
                 case 'accInfo':
                   $classA="active";
                   break;
                
                 case 'compMess':
                   $classC="active";
                   break;
                 
                 case 'overview':
                   $class="active";
                   break;

                 case 'tasks':
                   $class="active";
                   break;
                 
                 case 'resources':
                   $class="active";
                   break;

                 default:
                   # code...
                   break;
               } ?>
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="<?php echo "$classG"; ?>"><a href="?page=genInfo"><i class="fa fa-link"></i> <span>General Information</span></a></li>
        <li class="<?php echo "$classA"; ?>"><a href="?page=accInfo"><i class="fa fa-link"></i> <span>Account Information</span></a></li>
        <li class="<?php echo "$classC"; ?>"><a href="?page=compMess"><i class="fa fa-link"></i> <span>Compose Message</span></a></li>
        <li class="<?php echo "$class"; ?>" class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Project</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=overview">Overview</a></li>
            <li><a href="?page=tasks">Tasks</a></li>
            <li><a href="?page=tasks">Resources</a></li>
          </ul>
        </li>
      ?>
      </ul>