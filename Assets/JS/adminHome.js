$createBox = $('#createPostBox');
$postsListBox = $('#postsListBox');
$commentsListBox = $('#commentsListBox');

$createBox.on('click', function() {

    window.location.href = '?action=addPost';

});

$postsListBox.on('click', function() {

    window.location.href = '?action=postsList';

});

$commentsListBox.on('click', function() {

    window.location.href = '?action=commentsList';

});
