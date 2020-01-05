<ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Login Screens:</h6>
        <a class="dropdown-item" href="{{ route('admin.login') }}">Login</a>
        <a class="dropdown-item" href="register.html">Register</a>
        <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Other Pages:</h6>
        <a class="dropdown-item" href="404.html">404 Page</a>
        <a class="dropdown-item" href="blank.html">Blank Page</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.classSchedule') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Class Schedule</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.class') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Class List</span></a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.attendance') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Attendance</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.library') }}">
        <i class="fas fa-book-open"></i>
        <span>Library</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.teachers') }}">
        <i class="fas fa-graduation-cap"></i>
        <span>Teachers</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.students') }}">
        <i class="fas fa-graduation-cap"></i>
        <span>Students</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('course.index') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Course</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.assignment') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Assignment</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.examList') }}">
            <i class="fab fa-steam"></i>
          <span>Exam List</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('notice.index') }}">
            <i class="fas fa-flag-checkered"></i>
          <span>Notice Board</span></a>
      </li>
  </ul>