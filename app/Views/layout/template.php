<?php

echo $this->include('layout/header');
echo $this->include('layout/sidebar');
echo $this->renderSection('content');
echo $this->include('layout/footer');