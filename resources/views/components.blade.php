@extends('layouts.app')
@section('content')
<header></header>
<main>
    <aside>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Boards</a></li>
            <li  class="active"><a href="components.blade.php">Components</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
    </aside>
    <section class="main-section">
        <div class="section-wrapper">
            <div class="row">
                <div class="column column-4 no-padding">
                    <div class="box">
                        <div class="box-header">Grid System</div>
                        <div class="box-body">
                            <p>Columns in a row must total to 12. Must use columns inside row</p>
                            <p>Colmuns start from 1-12 e.g<code>column-1</code>, <code>column-2</code> etc</p>
                        </div>
                        <div class="box-footer"></div>
                    </div>
                </div>
                <div class="column column-4">
                    <div class="box">
                        <div class="box-header">Box</div>
                        <div class="box-body">
                            <p> add class <code>.no-shadow</code> to <code>.box</code> to remove the box shadow</p>
                            <p>Add class <code>.no-padding</code> to <code>.column</code> to remove the padding and fit the box in it</p>
                        </div>
                        <div class="box-footer"></div>
                    </div>
                </div>
                <div class="column column-4">
                    <div class="box">
                        <div class="box-header">Buttons and Links</div>
                        <div class="box-body">
                            <p> add class <code>.button</code> to a button, link or input[type="submit"]</p><br/>
                            <button class="button">Button</button>
                        </div>
                        <div class="box-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection