import './bootstrap';
import * as bootstrap from 'bootstrap';
import '../css/app.scss';
import Swal from 'sweetalert2';
import jQuery from 'jquery';
import DataTable from 'datatables.net-dt';
import 'datatables.net-dt/css/jquery.dataTables.css';

window.Swal = Swal;
window.$ = jQuery;
window.DataTable = DataTable;