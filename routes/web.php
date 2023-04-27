<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GraphicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'index']);

Route::get('/ajaxtable', [DashboardController::class, 'ajax']);

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard'. date("Y-m-d"), [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
    
    Route::get('/graphic', [GraphicController::class, 'index'])->name('graphic')->middleware('auth');
    Route::get('/rekap', [DashboardController::class, 'rekap'])->name('rekap')->middleware('auth');
});


Route::get('/berat/json', [DashboardController::class, 'beratTimbangan'])->name('berat.beratTimbangan');
Route::get('/simpan/timbang', [DashboardController::class, 'simpanTimbang'])->name('berat.simpanTimbang');

Route::get('/tableajax', [DashboardController::class, 'tableAjax'])->name('table.ajax');
Route::get('/tabledata', [DashboardController::class, 'tableData'])->name('table.data');


Route::get('/data/hapus/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
Route::post('/data/update/{id}', [DashboardController::class, 'update'])->name('dashboard.update');

Route::get('/cek/data', [Controller::class, 'cekData'])->name('controller.cekData');
Route::get('/print/graphic', [GraphicController::class, 'cetak'])->name('graphic.cetak');

Route::get('/modal', function(){
    return view('dashboard.particle.modal');
}
);








Route::group(['prefix' => 'email'], function(){
    Route::get('inbox', function () { return view('dashboard/pages.email.inbox'); });
    Route::get('read', function () { return view('dashboard/pages.email.read'); });
    Route::get('compose', function () { return view('dashboard/pages.email.compose'); });
});

Route::group(['prefix' => 'apps'], function(){
    Route::get('chat', function () { return view('dashboard/pages.apps.chat'); });
    Route::get('calendar', function () { return view('dashboard/pages.apps.calendar'); });
});

Route::group(['prefix' => 'ui-components'], function(){
    Route::get('accordion', function () { return view('dashboard/pages.ui-components.accordion'); });
    Route::get('alerts', function () { return view('dashboard/pages.ui-components.alerts'); });
    Route::get('badges', function () { return view('dashboard/pages.ui-components.badges'); });
    Route::get('breadcrumbs', function () { return view('dashboard/pages.ui-components.breadcrumbs'); });
    Route::get('buttons', function () { return view('dashboard/pages.ui-components.buttons'); });
    Route::get('button-group', function () { return view('dashboard/pages.ui-components.button-group'); });
    Route::get('cards', function () { return view('dashboard/pages.ui-components.cards'); });
    Route::get('carousel', function () { return view('dashboard/pages.ui-components.carousel'); });
    Route::get('collapse', function () { return view('dashboard/pages.ui-components.collapse'); });
    Route::get('dropdowns', function () { return view('dashboard/pages.ui-components.dropdowns'); });
    Route::get('list-group', function () { return view('dashboard/pages.ui-components.list-group'); });
    Route::get('media-object', function () { return view('dashboard/pages.ui-components.media-object'); });
    Route::get('modal', function () { return view('dashboard/pages.ui-components.modal'); });
    Route::get('navs', function () { return view('dashboard/pages.ui-components.navs'); });
    Route::get('navbar', function () { return view('dashboard/pages.ui-components.navbar'); });
    Route::get('pagination', function () { return view('dashboard/pages.ui-components.pagination'); });
    Route::get('popovers', function () { return view('dashboard/pages.ui-components.popovers'); });
    Route::get('progress', function () { return view('dashboard/pages.ui-components.progress'); });
    Route::get('scrollbar', function () { return view('dashboard/pages.ui-components.scrollbar'); });
    Route::get('scrollspy', function () { return view('dashboard/pages.ui-components.scrollspy'); });
    Route::get('spinners', function () { return view('dashboard/pages.ui-components.spinners'); });
    Route::get('tabs', function () { return view('dashboard/pages.ui-components.tabs'); });
    Route::get('tooltips', function () { return view('dashboard/pages.ui-components.tooltips'); });
});

Route::group(['prefix' => 'advanced-ui'], function(){
    Route::get('cropper', function () { return view('dashboard/pages.advanced-ui.cropper'); });
    Route::get('owl-carousel', function () { return view('dashboard/pages.advanced-ui.owl-carousel'); });
    Route::get('sortablejs', function () { return view('dashboard/pages.advanced-ui.sortablejs'); });
    Route::get('sweet-alert', function () { return view('dashboard/pages.advanced-ui.sweet-alert'); });
});

Route::group(['prefix' => 'forms'], function(){
    Route::get('basic-elements', function () { return view('dashboard/pages.forms.basic-elements'); });
    Route::get('advanced-elements', function () { return view('dashboard/pages.forms.advanced-elements'); });
    Route::get('editors', function () { return view('dashboard/pages.forms.editors'); });
    Route::get('wizard', function () { return view('dashboard/pages.forms.wizard'); });
});

Route::group(['prefix' => 'charts'], function(){
    Route::get('apex', function () { return view('dashboard/pages.charts.apex'); });
    Route::get('chartjs', function () { return view('dashboard/pages.charts.chartjs'); });
    Route::get('flot', function () { return view('dashboard/pages.charts.flot'); });
    Route::get('morrisjs', function () { return view('dashboard/pages.charts.morrisjs'); });
    Route::get('peity', function () { return view('dashboard/pages.charts.peity'); });
    Route::get('sparkline', function () { return view('dashboard/pages.charts.sparkline'); });
});

Route::group(['prefix' => 'tables'], function(){
    Route::get('basic-tables', function () { return view('dashboard/pages.tables.basic-tables'); });
    Route::get('data-table', function () { return view('dashboard/pages.tables.data-table'); });
});

Route::group(['prefix' => 'icons'], function(){
    Route::get('feather-icons', function () { return view('dashboard/pages.icons.feather-icons'); });
    Route::get('flag-icons', function () { return view('dashboard/pages.icons.flag-icons'); });
    Route::get('mdi-icons', function () { return view('dashboard/pages.icons.mdi-icons'); });
});

Route::group(['prefix' => 'general'], function(){
    Route::get('blank-page', function () { return view('dashboard/pages.general.blank-page'); });
    Route::get('faq', function () { return view('dashboard/pages.general.faq'); });
    Route::get('invoice', function () { return view('dashboard/pages.general.invoice'); });
    Route::get('profile', function () { return view('dashboard/pages.general.profile'); });
    Route::get('pricing', function () { return view('dashboard/pages.general.pricing'); });
    Route::get('timeline', function () { return view('dashboard/pages.general.timeline'); });
});

Route::group(['prefix' => 'auth'], function(){
    Route::get('login', function () { return view('dashboard/pages.auth.login'); });
    Route::get('register', function () { return view('dashboard/pages.auth.register'); });
});

Route::group(['prefix' => 'error'], function(){
    Route::get('404', function () { return view('dashboard/pages.error.404'); });
    Route::get('500', function () { return view('dashboard/pages.error.500'); });
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('dashboard/pages.error.404');
})->where('page','.*');
