<?php

/** @var $book ?\App\Model\Book */
?>

<div class="form-group">
    <label for="subject">Title</label>
    <input type="text" id="title" name="book[title]" value="<?= $book ? $book->getTitle() : '' ?>">
</div>

<div class="form-group">
    <label for="subject">Author</label>
    <input type="text" id="author" name="book[author]" value="<?= $book ? $book->getAuthor() : '' ?>">
</div>

<div class="form-group">
    <label for="subject">Genre</label>
    <input type="text" id="genre" name="book[genre]" value="<?= $book ? $book->getGenre() : '' ?>">
</div>


<div class="form-group">
    <label></label>
    <input type="submit" value="Submit">
</div>