<?php

defined('TYPO3') or die('Access denied.');

\Doctrine\Common\Annotations\AnnotationReader::addGlobalIgnoredName('pre');
\Doctrine\Common\Annotations\AnnotationReader::addGlobalIgnoredName('protected');
\Doctrine\Common\Annotations\AnnotationReader::addGlobalIgnoredName('public');

