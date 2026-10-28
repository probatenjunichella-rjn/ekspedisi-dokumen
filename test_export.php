<?php $e = new App\Exports\LaporanExport(today()->toDateString()); $e->collection(); echo 'export-ok';
