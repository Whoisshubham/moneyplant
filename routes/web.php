<?php
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\BuyerController;
use App\Http\Controllers\User\listPropertyController;
use App\Http\Controllers\User\PropertyController;

// FRONT-END ROUTES
Route::get('/', 'FrontpageController@index')->name('home');
// Route::get('/slider', 'FrontpageController@slider')->name('slider.index');
Route::get('about',[AboutController::class,'index']);
Route::get('meet-the-team',[AboutController::class,'meetTheTeam']);
Route::get('meet-the-team-details/{slug}',[AboutController::class,'meeetTheDetails']);
Route::get('meet-the-team/{slug}',[AboutController::class,'meetTheTeamDetails']);
Route::get('about/{slug}',[AboutController::class,'overview']);
Route::get('/search', 'FrontpageController@search')->name('search');
Route::get('/off-plan', 'FrontpageController@search');
Route::get('list-my-property',[listPropertyController::class,'index']);
Route::get('buyers-guide',[listPropertyController::class,'buyerGuid']);
Route::get('sellers-guide',[listPropertyController::class,'sellerGuid']);
Route::get('why-buy-through-moneyplant',[listPropertyController::class,'whyBuymoneyplant']);
Route::get('why-sell-with-money-plant',[listPropertyController::class,'whySellmoneyplant']);
Route::get('property-valuation',[listPropertyController::class,'valuation']);
Route::get('knowledge-center-calculators',[listPropertyController::class,'knowledgeCenterCalculator']);
Route::get('knowledge-center',[listPropertyController::class,'knowledgeCenter']);
Route::get('area-guide',[listPropertyController::class,'areaGuid']);
Route::get('terminology',[listPropertyController::class,'terminology']);
Route::get('buy',[BuyerController::class,'buy']);
Route::get('sell',[BuyerController::class,'sell']);
Route::get('property-discription',[PropertyController::class,'index']);
Route::get('reviews',[PropertyController::class,'reviews']);
Route::get('careers',[PropertyController::class,'careers']);




Route::get('/property', 'PagesController@properties')->name('property');
Route::get('/property/{id}', 'PagesController@propertieshow')->name('property.show');
Route::post('/property/message', 'PagesController@messageAgent')->name('property.message');
Route::post('/property/comment/{id}', 'PagesController@propertyComments')->name('property.comment');
Route::post('/property/rating', 'PagesController@propertyRating')->name('property.rating');
Route::get('/property/city/{cityslug}', 'PagesController@propertyCities')->name('property.city');

// Route::get('/agents', 'PagesController@agents')->name('agents');
// Route::get('/agents/{id}', 'PagesController@agentshow')->name('agents.show');

// Route::get('/gallery', 'PagesController@gallery')->name('gallery');

#>>>>>>>>>>> Blog Section <<<<<<<<<<<
Route::get('/blog', 'PagesController@blog')->name('blog');
// Route::get('/blog/{id}', 'PagesController@blogshow')->name('blog.show');
// Route::post('/blog/comment/{id}', 'PagesController@blogComments')->name('blog.comment');

// Route::get('/blog/categories/{slug}', 'PagesController@blogCategories')->name('blog.categories');
// Route::get('/blog/tags/{slug}', 'PagesController@blogTags')->name('blog.tags');
// Route::get('/blog/author/{username}', 'PagesController@blogAuthor')->name('blog.author');


#>>>>>> Contact Section <<<<<<<<<
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@messageContact')->name('contact.message');


Auth::routes();

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin'],'as'=>'admin.'], function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('tags','TagController');
    Route::resource('categories','CategoryController');
    Route::resource('posts','PostController');
    Route::resource('features','FeatureController');
    Route::resource('properties','PropertyController');
    Route::post('properties/gallery/delete','PropertyController@galleryImageDelete')->name('gallery-delete');

    Route::resource('sliders','SliderController');
    Route::resource('services','ServiceController');
    Route::resource('testimonials','TestimonialController');
    Route::resource('team-categories','TeamCategoriesController');
    Route::resource('team','OurTeamController');

    Route::get('galleries/album','GalleryController@album')->name('album');
    Route::post('galleries/album/store','GalleryController@albumStore')->name('album.store');
    Route::get('galleries/{id}/gallery','GalleryController@albumGallery')->name('album.gallery');
    Route::post('galleries','GalleryController@Gallerystore')->name('galleries.store');

    Route::get('settings', 'DashboardController@settings')->name('settings');
    Route::post('settings', 'DashboardController@settingStore')->name('settings.store');

    Route::get('profile','DashboardController@profile')->name('profile');
    Route::post('profile','DashboardController@profileUpdate')->name('profile.update');

    Route::get('message','DashboardController@message')->name('message');
    Route::get('message/read/{id}','DashboardController@messageRead')->name('message.read');
    Route::get('message/replay/{id}','DashboardController@messageReplay')->name('message.replay');
    Route::post('message/replay','DashboardController@messageSend')->name('message.send');
    Route::post('message/readunread','DashboardController@messageReadUnread')->name('message.readunread');
    Route::delete('message/delete/{id}','DashboardController@messageDelete')->name('messages.destroy');
    Route::post('message/mail', 'DashboardController@contactMail')->name('message.mail');

    Route::get('changepassword','DashboardController@changePassword')->name('changepassword');
    Route::post('changepassword','DashboardController@changePasswordUpdate')->name('changepassword.update');

});

Route::group(['prefix'=>'agent','namespace'=>'Agent','middleware'=>['auth','agent'],'as'=>'agent.'], function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('profile','DashboardController@profile')->name('profile');
    Route::post('profile','DashboardController@profileUpdate')->name('profile.update');
    Route::get('changepassword','DashboardController@changePassword')->name('changepassword');
    Route::post('changepassword','DashboardController@changePasswordUpdate')->name('changepassword.update');
    Route::resource('properties','PropertyController');
    Route::post('properties/gallery/delete','PropertyController@galleryImageDelete')->name('gallery-delete');

    Route::get('message','DashboardController@message')->name('message');
    Route::get('message/read/{id}','DashboardController@messageRead')->name('message.read');
    Route::get('message/replay/{id}','DashboardController@messageReplay')->name('message.replay');
    Route::post('message/replay','DashboardController@messageSend')->name('message.send');
    Route::post('message/readunread','DashboardController@messageReadUnread')->name('message.readunread');
    Route::delete('message/delete/{id}','DashboardController@messageDelete')->name('messages.destroy');
    Route::post('message/mail', 'DashboardController@contactMail')->name('message.mail');

});

Route::group(['prefix'=>'user','namespace'=>'User','middleware'=>['auth','user'],'as'=>'user.'], function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('profile','DashboardController@profile')->name('profile');
    Route::post('profile','DashboardController@profileUpdate')->name('profile.update');
    Route::get('changepassword','DashboardController@changePassword')->name('changepassword');
    Route::post('changepassword','DashboardController@changePasswordUpdate')->name('changepassword.update');

    Route::get('message','DashboardController@message')->name('message');
    Route::get('message/read/{id}','DashboardController@messageRead')->name('message.read');
    Route::get('message/replay/{id}','DashboardController@messageReplay')->name('message.replay');
    Route::post('message/replay','DashboardController@messageSend')->name('message.send');
    Route::post('message/readunread','DashboardController@messageReadUnread')->name('message.readunread');
    Route::delete('message/delete/{id}','DashboardController@messageDelete')->name('messages.destroy');

});
