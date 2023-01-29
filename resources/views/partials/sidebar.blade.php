<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="index.html"><img src="https://img.freepik.com/free-vector/gradient-library-logo-template_23-2149330624.jpg" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="side_menu_title">
            <span>Applications</span>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="img/menu-icon/2.svg" alt="">
                <span>Student</span>
            </a>
            <ul>
                <li><a href="{{ route('student.create') }}">Add Student</a></li>
                <li><a href="{{ route('students')}}">All Student</a></li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="img/menu-icon/2.svg" alt="">
                <span>Books</span>
            </a>
            <ul>
                <li><a href="#">Add Book</a></li>
                <li><a href="#">All Books</a></li>
            </ul>
        </li>

    </ul>
</nav>
