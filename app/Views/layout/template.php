<?php

echo $this->include('layout/header.php');
echo $this->include('layout/sidebar.php');
echo $this->renderSection('content');
echo $this->include('layout/footer.php');