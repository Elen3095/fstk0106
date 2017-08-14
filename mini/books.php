<?php

define('BOOKS_STORAGE', 'data/books.txt');

// list -> listAction
$action = requestGet('action', 'list') . 'Action';

if (!function_exists($action)) {
    // todo: flash message
    redirect('/index.php');
}

$content = $action();


function listAction()
{
    $books = loadBooks();
    
    ob_start();
    require 'books_list.phtml';
    return ob_get_clean();
}

function createAction()
{
    if ($_POST) {
        // todo: add validation
        $book = $_POST;
        $book['id'] = rand(10000, 99999);
        $book = serialize($book);
        
        file_put_contents(BOOKS_STORAGE, $book . PHP_EOL, FILE_APPEND);
        
        // add flash message
        redirect('/');
    } 
    
    ob_start();
    require 'books_create.phtml';
    return ob_get_clean();
}

function editAction()
{
    $id = requestGet('id');
    
    if (!$id) {
        // todo: flash
       redirect('/');
    }
    
    $books = loadBooks();
    $bookFound = false;
    
    // & - to edit
    foreach ($books as &$book) {
        if ($id == $book['id']) {
            $bookFound = true;
            break;
        }
    }
    
    if (!$bookFound) {
        // todo: flash
        redirect('/');
    }
    
    if ($_POST) {
        $book['title'] = $_POST['title'];
        $book['price'] = $_POST['price'];
        
        fopen(BOOKS_STORAGE, 'w');
        fclose();
        
        foreach ($books as $b) {
            file_put_contents(BOOKS_STORAGE, serialize($b) . PHP_EOL, FILE_APPEND);
        }
        
        // add flash message
        redirect('/');
    }
    
    ob_start();
    require 'books_edit.phtml';
    return ob_get_clean();
}

function loadBooks()
{
    $serializedBooks = file(BOOKS_STORAGE);
    $books = [];
    
    foreach ($serializedBooks as $b) {
        $books[] = unserialize($b);
    }
    
    return $books;
}

//delete
function deleteAction()
{
    $id = requestGet('id');

    if (!$id) {
        // todo: flash
        redirect('/');
    }

    $books = loadBooks();
    $bookFound = false;

    // & - to edit
    foreach ($books as &$book) {
        if ($id == $book['id']) {
            $bookFound = true;
            break;
        }
    }

    if (!$bookFound) {
        // todo: flash
        redirect('/');
    }

    if ($_POST) {
        $book=[];
//        $book['price']=[];
//        $book['id']=[];

//        $book['title'] = $_POST['title'];
//        $book['price'] = $_POST['price'];
        fopen(BOOKS_STORAGE, 'w');
        fclose();

        foreach ($books as $b) {
            $a=[];
            if(serialize($b)!=serialize($a)){
                file_put_contents(BOOKS_STORAGE, serialize($b) . PHP_EOL, FILE_APPEND);
            }
        }

        // add flash message
        redirect('/');
    }

    ob_start();
    require 'books_delete.phtml';
    return ob_get_clean();
}
//
//if(($book['title']==null)&&($book['price']==null)){
//
//}