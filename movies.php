<?php
require_once("includes/header.php");

$preview = new PreviewProvider($con, $userLoggedIn);
echo $preview->createMoviesPreviewVideos();

$containers = new CategoryContainers($con, $userLoggedIn);
echo $containers->showMovieCategories();

?>