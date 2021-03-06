<?php
    session_start();
    require 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>To Do</title>
    <link href="css/menus.css" rel="stylesheet">
    <link href="css/Profiles.css" rel="stylesheet">
     <link href="css/todos.css" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/todostyles.css">
</head>
<body>

  <div id="app"></div>
        <nav>
<a class="active" href="Profile.php">Profile</a>
  <a href="Timetable.php">Timetable</a>
  <a href="News.php">News</a>
  <a href="Calendar.php" >Calendar</a>
   <a href="ToDo.php">Notes</a>
   <a href="Flashcards.php">Flashcards</a>

   <?php
        if(isset($_SESSION["login"]) && $_SESSION["login"] == "yes"){
            echo "<a href='Logout.php'>Logout</a>";
        }else{
            echo "<a href='/'>Login</a>";
        }

    ?>

    <div class="animation start-todo"></div>
</nav>
<button class="note-add-btn" type="button" aria-label="Add"><i id="addid" class="fa fa-plus"></i><span id="addid">+</span></button>
<div><div class="note note-yellow" data-color="yellow"><div class="note-header"><input class="note-title" type="text" placeholder="Untitled Note"></div><div class="note-body"><textarea></textarea></div><div class="note-footer"><button class="note-color-btn note-red" type="button" title="red" aria-label="red" data-color="red"></button><button class="note-color-btn note-orange" type="button" title="orange" aria-label="orange" data-color="orange"></button><button class="note-color-btn note-yellow" type="button" title="yellow" aria-label="yellow" data-color="yellow"></button><button class="note-color-btn note-green" type="button" title="green" aria-label="green" data-color="green"></button><button class="note-color-btn note-blue" type="button" title="blue" aria-label="blue" data-color="blue"></button><button class="note-color-btn note-purple" type="button" title="purple" aria-label="purple" data-color="purple"></button><button class="note-delete-btn" type="button" aria-label="Delete"><i class="fa fa-trash"></i></button></div></div></div>
<div><div class="note note-red" data-color="yellow"><div class="note-header"><input class="note-title" type="text" placeholder="Untitled Note"></div><div class="note-body"><textarea></textarea></div><div class="note-footer"><button class="note-color-btn note-red" type="button" title="red" aria-label="red" data-color="red"></button><button class="note-color-btn note-orange" type="button" title="orange" aria-label="orange" data-color="orange"></button><button class="note-color-btn note-yellow" type="button" title="yellow" aria-label="yellow" data-color="yellow"></button><button class="note-color-btn note-green" type="button" title="green" aria-label="green" data-color="green"></button><button class="note-color-btn note-blue" type="button" title="blue" aria-label="blue" data-color="blue"></button><button class="note-color-btn note-purple" type="button" title="purple" aria-label="purple" data-color="purple"></button><button class="note-delete-btn" type="button" aria-label="Delete"><i class="fa fa-trash"></i></button></div></div></div>

</body>

<script>
'use strict';

(function () {
    class Note {
        constructor(props = {}) {
            this.props = {
                colors: ['red', 'orange', 'yellow', 'green', 'blue', 'purple'],
                ...props,
            };

            if (!this.props.color) {
                // default to a random color
                this.props.color = this.props.colors[
                    Math.floor(Math.random() * this.props.colors.length)
                ];
            }
        }

        render() {
            const note = document.createElement('div');
            note.classList.add('note');
            note.classList.add(`note-${this.props.color}`);
            note.dataset.color = this.props.color;

            note.appendChild((new NoteHeader()).render());
            note.appendC
        }
    }

    class NoteHeader {
        render() {
            const el = document.createElement('div');
            el.classList.add('note-header');
            el.appendChild((new NoteTitle()).render());

            return el;
        }
    }

    class NoteTitle {
        constructor(props = {}) {
            this.props = {
                placeholder: 'Untitled Note',
                ...props,
            };
        }

        render() {
            const el = document.createElement('input');
            el.classList.add('note-title');
            el.setAttribute('type', 'text');
            el.setAttribute('placeholder', this.props.placeholder);

            return el;
        }
    }

    class NoteBody {
        render() {
            const el = document.createElement('div');
            el.classList.add('note-body');
            el.appendChild(document.createElement('textarea'));

            return el;
        }
    }

    class NoteFooter {
        constructor(props = {}) {
            this.props = {
                colors: ['red', 'orange', 'yellow', 'green', 'blue', 'purple'],
                ...props,
            };
        }

        render() {
            const el = document.createElement('div');
            el.classList.add('note-footer');

            this.props.colors.map((color) => {
                el.appendChild((new NoteColorButton({ color })).render());
            });

            el.appendChild((new NoteDeleteButton()).render());

            return el;
        }
    }

    class NoteColorButton {
        constructor(props = {}) {
            this.props = {
                color: '',
                ...props,
            };
        }

        handleClick(event) {
            const button = event.currentTarget;
            const note = button.closest('.note');
            note.classList.remove(`note-${note.dataset.color}`);
            note.classList.add(`note-${button.dataset.color}`);
            note.dataset.color = button.dataset.color;
        }

        render() {
            const el = document.createElement('button');
            el.classList.add('note-color-btn', `note-${this.props.color}`);
            el.setAttribute('type', 'button');
            el.setAttribute('title', this.props.color);
            el.setAttribute('aria-label', this.props.color);
            el.dataset.color = this.props.color;

            el.addEventListener('click', this.handleClick);
            $("#loaded_cards").load("Save_Note.php",{
                title: title,
                body: body,
                action: "add"
            });
            

            return el;
        }
    }

    class NoteDeleteButton {
        handleClick(event) {
            const note = event.currentTarget.closest('.note');
            note.parentNode.removeChild(note);
        }

        render() {
            const el = document.createElement('button');
            el.classList.add('note-delete-btn');
            el.setAttribute('type', 'button');
            el.setAttribute('aria-label', 'Delete');

            const icon = document.createElement('i');
            icon.classList.add('fa', 'fa-trash');
            el.appendChild(icon);

            el.addEventListener('click', this.handleClick);

            return el;
        }
    }

    class NoteAddButton {
        constructor(props = {}) {
            this.props = {
                container: null,
                ...props,
            };
        }

        handleClick(event) {
            this.props.container.appendChild((new Note()).render());
        }

        render() {
            const el = document.createElement('button');
            el.classList.add('note-add-btn');
            el.setAttribute('type', 'button');
            el.setAttribute('aria-label', 'Add');

            const icon = document.createElement('i');
            icon.id = 'addid';
            icon.classList.add('fa', 'fa-plus');
            el.appendChild(icon);

            const label = document.createElement('span');
            label.id = 'addid';
            label.textContent = '+';
hild((new NoteBody()).render());
            note.appendChild((new NoteFooter({ colors: this.props.colors })).render());

            return note;            el.appendChild(label);

            el.addEventListener('click', this.handleClick.bind(this));

            return el;
        }
    }

    class App {
        constructor(props = {}) {
            this.props = {
                id: 'app',
                ...props,
            };

            this.render();
        }

        render() {
            const container = document.getElementById(this.props.id);
            const notes = document.createElement('div');

            const addButton = (new NoteAddButton({ container: notes })).render();
            container.appendChild(addButton);
            addButton.click();

            container.appendChild(notes);
        }
    }

    new App();
}());

</script>

<style>
.items{
    margin-top: 50px;
    margin-left: 500px;
}
.rem {
    margin-left: 5px;
    background-color: white;
    color: red;
    border: 2px;
    cursor: pointer;
}
</style>
</html>