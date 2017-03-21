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

use App\Oil;
use Illuminate\Http\Request;

Route::get( '/', function () {
	return view( 'welcome' );
} );

/**
 * Display All the Oils
 */
Route::get( '/oils/list', function () {
	//

	$oils = Oil::orderBy( 'created_at', 'asc' )->get();

	return view( 'oils-list', [
		'oils' => $oils
	] );
} )->name( 'oil-list' );

/**
 * Display Add oil page
 */
Route::get( '/oils/add', function() {
	return view( 'oils-add' );
})->name( 'oil-add' );

/**
 * Add A New Oil
 */
Route::post( '/oils/add', function ( Request $request ) {
	$validator = Validator::make( $request->all(), [
		'name'        => 'required|max:100',
		'description' => 'required'
	] );

	if ( $validator->fails() ) {
		return redirect( '/oils' )
			->withInput()
			->withErrors( $validator );
	}

	// Create The oil...
	$oil                       = new Oil;
	$oil->name                 = $request->name;
	$oil->description          = $request->description;
	$oil->cautions             = $request->cautions;
	$oil->use_diffusion        = $request->use_diffusion;
	$oil->use_topical          = $request->use_topical;
	$oil->use_internal         = $request->use_internal;
	$oil->aromatic_description = $request->aromatic_description;
	$oil->collection_method    = $request->collection_method;
	$oil->plant_part           = $request->plant_part;
	$oil->constituents         = $request->constituents;
	$oil->save();

	return redirect()->route( 'oil-list' );
} );



/**
 * Delete An Existing Task
 */
Route::delete('/oils/{id}', function ($id) {
	// Find the oils or fail
	Oil::findOrFail($id)->delete();

	return redirect('/oils');
});
