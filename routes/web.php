<?php

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

Route::get('/', function () {
//    return view('welcome');
    return redirect('login');//quando entrar no site já vai direto pra tela de login
})->name('/');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('home')->group(function (){
        Route::get('', 'HomeController@index')->name('home');
        Route::get('{slug}', 'HomeController@fitro')->name('home.filtro');
        Route::get('data/{data}', 'HomeController@fitroData')->name('home.data');
        Route::get('{slug}/{data}', 'HomeController@fitroSlugData')->name('home.filtro.data');
    });

    Route::prefix('movimento')->group(function (){
        Route::get('grafico-barras', 'MovimentoController@dadosGraficoBarras')->name('movimento.dadosgraficobarras');
        Route::get('grafico-barras/{data}', 'MovimentoController@dadosGraficoBarras')->name('movimento.dadosgraficobarras.data');
        Route::get('grafico-pizza', 'MovimentoController@dadosGraficoPizza')->name('movimento.dadosgraficopizza');
        Route::get('grafico-pizza/{data}', 'MovimentoController@dadosGraficoPizza')->name('movimento.dadosgraficopizza.data');
    });

    Route::prefix('admin')->group(function (){
        Route::get('', 'UserController@index')->name('admin');
        Route::post('update-user/{id}', 'UserController@update')->name('admin.update.user');
        Route::get('empresas', 'EmpresaController@index')->name('admin.empresas');
        Route::get('cadastrar-empresa', 'EmpresaController@cadastrar')->name('admin.cadastrar.empresa');
        Route::post('inserir-empresa', 'EmpresaController@inserir')->name('admin.inserir.empresa');
        Route::get('alterar-empresa/{slug}', 'EmpresaController@alterar')->name('admin.alterar.empresa');
        Route::post('update-empresa/{slug}', 'EmpresaController@update')->name('admin.update.empresa');
        Route::get('excluir-empresa/{slug}', 'EmpresaController@excluir')->name('admin.excluir.empresa');
        Route::prefix('usuario')->group(function (){
            Route::get('', 'UserController@usersAdmin')->name('admin.usuario');
            Route::get('cadastrar', 'UserController@cadastrarUsuario')->name('admin.cadastrar.usuario');
            Route::get('alterar/{id}', 'UserController@alterarUsuario')->name('admin.alterar.usuario');
            Route::post('inserir', 'UserController@inserirUsuario')->name('admin.inserir.usuario');
            Route::post('update/{id}', 'UserController@updateUsuario')->name('admin.update.usuario');
            Route::get('excluir/{id}', 'UserController@excluirUsuario')->name('admin.excluir.usuario');
        });
    });
});

Route::group(['prefix' => 'api'], function (){
    Route::get('/', function () {
        return response()->json(['message' => 'Gestor API', 'status' => 'Connected']);;
    });
    Route::post('movimento/{token}', 'Api\ApiController@movimento');
});

Route::post('contato', 'ContatoController@contato')->name('contato');
