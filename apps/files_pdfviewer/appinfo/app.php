<?php
//load the required files
OCP\Util::addStyle( 'files_pdfviewer', 'viewer');

OCP\Util::addscript( 'files_pdfviewer', 'pdfjs/compatibility');
OCP\Util::addscript( 'files_pdfviewer', 'viewer');
OCP\Util::addscript( 'files_pdfviewer', 'pdfjs/build/pdf');
OCP\Util::addscript( 'files_pdfviewer', 'pdfjs/viewer');
