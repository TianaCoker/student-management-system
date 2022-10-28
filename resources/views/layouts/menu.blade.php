<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('classes.index') }}" class="nav-link {{ Request::is('classes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Classes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('classrooms.index') }}" class="nav-link {{ Request::is('classrooms*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Classrooms</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('levels.index') }}" class="nav-link {{ Request::is('levels*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Levels</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('batches.index') }}" class="nav-link {{ Request::is('batches*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Batches</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('shifts.index') }}" class="nav-link {{ Request::is('shifts*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Shifts</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('courses.index') }}" class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Courses</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('faculties.index') }}" class="nav-link {{ Request::is('faculties*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Faculties</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('times.index') }}" class="nav-link {{ Request::is('times*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Times</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('attendances.index') }}" class="nav-link {{ Request::is('attendances*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Attendances</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('academics.index') }}" class="nav-link {{ Request::is('academics*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Academics</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('days.index') }}" class="nav-link {{ Request::is('days*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Days</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('class-assignings.index') }}" class="nav-link {{ Request::is('classAssignings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Class Assignings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('class-schedulings.index') }}" class="nav-link {{ Request::is('classSchedulings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Class Schedulings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('transactions.index') }}" class="nav-link {{ Request::is('transactions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Transactions</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admissions.index') }}" class="nav-link {{ Request::is('admissions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Admissions</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('teachers.index') }}" class="nav-link {{ Request::is('teachers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Teachers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Roles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Users</p>
    </a>
</li>
