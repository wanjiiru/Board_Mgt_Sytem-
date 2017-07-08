@extends('layouts.app')
@section('content')
<main class="login">
    <div class="box">
        <div class="box-header">Create Board</div>
        <div class="box-body">
            <div class="row">
                <div class="column-12">
                    <input type="text" placeholder="First Name"></input>
                </div>
                <div class = "column-12">
                     <input type="text" placeholder ="Last Name"></input>
            </div>
            <div class="row">
                <select class="form-control">
                    <option value="Select committee"></option>
                    <option selected ="selected" value="131626">Full Board</option>
                </select>
            </div><div class="column-12">
                <div class="form">
                    <div class="controls">
                        <select class="form-control width-100-percent" id="Position" name="Position">
                            <option value="">Select Member Position</option>
                            <option value="Board Chair">Board Chair</option>
                            <option value="Executive Director (ED)">Executive Director (ED)</option>
                            <option value="Secretary">Secretary</option>
                            <option value="Treasurer">Treasurer</option>
                            <option value="Board Member">Board Member</option>
                            <option value="Board Chair-Elect">Board Chair-Elect</option>
                            <option value="Vice Chair">Vice Chair</option>
                            <option value="President">President</option>
                            <option value="President &amp; CEO">President &amp; CEO</option>
                            <option value="President &amp; Chairperson">President &amp; Chairperson</option>
                            <option value="Chairperson">Chairperson</option>
                            <option value="Director">Director</option>
                            <option value="Trustee">Trustee</option>
                            <option value="Commissioner">Commissioner</option>
                            <option value="Committee Chair">Committee Chair</option>
                            <option value="Immediate Past President">Immediate Past President</option>
                            <option value="Immediate Past Chair">Immediate Past Chair</option>
                            <option value="Parliamentarian ">Staff Member</option>
                        </select>
                    </div>
                </div>
              </div>
            </div><div class="column column-12"><a href={{'/blogs/index'}}class="btn">Edit</a>
            </div></div></div></main>

@endsection
