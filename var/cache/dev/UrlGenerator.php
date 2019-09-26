<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'listeCategory' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCategoryController::index'], [], [['text', '/admin/listeCategory']], [], []],
    'admin.category.create' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminCategoryController::new'], [], [['text', '/admin/listeCategory/create']], [], []],
    'admin.category.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listeCategory']], [], []],
    'admin.category.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminCategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listeCategory']], [], []],
    'listeDiscount' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminDiscountController::listediscount'], [], [['text', '/admin/listediscount']], [], []],
    'admin.listediscount.create' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminDiscountController::create'], [], [['text', '/admin/listediscount/create']], [], []],
    'admin.discount.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminDiscountController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listediscount']], [], []],
    'admin.discount.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminDiscountController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listediscount']], [], []],
    'listeFAQ' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminFaqController::listefaq'], [], [['text', '/admin/listefaq']], [], []],
    'admin.listefaq.create' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminFaqController::create'], [], [['text', '/admin/listefaq/create']], [], []],
    'admin.faq.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminFaqController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listefaq']], [], []],
    'admin.faq.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminFaqController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listefaq']], [], []],
    'listeMedia' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminMediaController::listemedia'], [], [['text', '/admin/listemedia']], [], []],
    'admin.listemedia.create' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminMediaController::create'], [], [['text', '/admin/listemedia/create']], [], []],
    'admin.media.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminMediaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listemedia']], [], []],
    'admin.media.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminMediaController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listemedia']], [], []],
    'listeOption' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::index'], [], [['text', '/admin/listeOption']], [], []],
    'admin.option.create' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::new'], [], [['text', '/admin/listeOption/create']], [], []],
    'admin.option.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listeOption']], [], []],
    'admin.option.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminOptionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listeOption']], [], []],
    'ListeResa' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminReservationController::ListResa'], [], [['text', '/admin/ListeReservation']], [], []],
    'admin.resa.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminReservationController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listetReservation']], [], []],
    'admin.resa.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminReservationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listeReservation']], [], []],
    'listeSeason' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminSeasonController::listeseason'], [], [['text', '/admin/listeseason']], [], []],
    'admin.listeseason.create' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminSeasonController::create'], [], [['text', '/admin/listeseason/create']], [], []],
    'admin.season.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminSeasonController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listeseason']], [], []],
    'admin.season.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminSeasonController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listeseason']], [], []],
    'listeSlider' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminSliderController::listeslider'], [], [['text', '/admin/listeslider']], [], []],
    'admin.listeslider.create' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminSliderController::create'], [], [['text', '/admin/listeslider/create']], [], []],
    'admin.slider.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminSliderController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listeslider']], [], []],
    'admin.slider.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminSliderController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listeslider']], [], []],
    'listeTarif' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminTarifController::listetarif'], [], [['text', '/admin/listetarif']], [], []],
    'admin.listetarif.create' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminTarifController::create'], [], [['text', '/admin/listetarif/create']], [], []],
    'admin.tarif.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminTarifController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listetarif']], [], []],
    'admin.tarif.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminTarifController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/listetarif']], [], []],
    'Dashboard' => [[], ['_controller' => 'App\\Controller\\Admin\\HomeController::Dashboard'], [], [['text', '/admin/Dashboard']], [], []],
    'Newsletter' => [[], ['_controller' => 'App\\Controller\\Admin\\HomeController::newsletter'], [], [['text', '/admin/Newsletter']], [], []],
    'Proximité' => [[], ['_controller' => 'App\\Controller\\HomeController::Proximite'], [], [['text', '/Proximité']], [], []],
    'Contact' => [[], ['_controller' => 'App\\Controller\\HomeController::Contact'], [], [['text', '/Contact']], [], []],
    'TarifsTente' => [[], ['_controller' => 'App\\Controller\\HomeController::Tariftente'], [], [['text', '/TarifsTente']], [], []],
    'Inscription' => [[], ['_controller' => 'App\\Controller\\HomeController::Inscription'], [], [['text', '/Inscription']], [], []],
    'Article' => [['id'], ['_controller' => 'App\\Controller\\HomeController::Article'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/listeCategory/Article']], [], []],
    'FAQ' => [[], ['_controller' => 'App\\Controller\\HomeController::Faq'], [], [['text', '/FAQ']], [], []],
    'Accueil' => [[], ['_controller' => 'App\\Controller\\HomeController::Accueil'], [], [['text', '/']], [], []],
    'Photos' => [[], ['_controller' => 'App\\Controller\\HomeController::Photos'], [], [['text', '/Photos']], [], []],
    'TarifsMobilHome' => [[], ['_controller' => 'App\\Controller\\HomeController::Tarifsmobilhome'], [], [['text', '/TarifsMobilHome']], [], []],
    'resa.annulation' => [['id'], ['_controller' => 'App\\Controller\\HomeController::Annulation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/annulerReservation']], [], []],
    'Reserver' => [[], ['_controller' => 'App\\Controller\\SearchController::choixemplacement'], [], [['text', '/Reserver']], [], []],
    'fos_user_security_login' => [[], ['_controller' => 'fos_user.security.controller:loginAction'], [], [['text', '/login']], [], []],
    'fos_user_security_check' => [[], ['_controller' => 'fos_user.security.controller:checkAction'], [], [['text', '/login_check']], [], []],
    'fos_user_security_logout' => [[], ['_controller' => 'fos_user.security.controller:logoutAction'], [], [['text', '/logout']], [], []],
    'fos_user_profile_show' => [[], ['_controller' => 'fos_user.profile.controller:showAction'], [], [['text', '/profile/']], [], []],
    'fos_user_profile_edit' => [[], ['_controller' => 'fos_user.profile.controller:editAction'], [], [['text', '/profile/edit']], [], []],
    'fos_user_registration_register' => [[], ['_controller' => 'fos_user.registration.controller:registerAction'], [], [['text', '/register/']], [], []],
    'fos_user_registration_check_email' => [[], ['_controller' => 'fos_user.registration.controller:checkEmailAction'], [], [['text', '/register/check-email']], [], []],
    'fos_user_registration_confirm' => [['token'], ['_controller' => 'fos_user.registration.controller:confirmAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/register/confirm']], [], []],
    'fos_user_registration_confirmed' => [[], ['_controller' => 'fos_user.registration.controller:confirmedAction'], [], [['text', '/register/confirmed']], [], []],
    'fos_user_resetting_request' => [[], ['_controller' => 'fos_user.resetting.controller:requestAction'], [], [['text', '/resetting/request']], [], []],
    'fos_user_resetting_send_email' => [[], ['_controller' => 'fos_user.resetting.controller:sendEmailAction'], [], [['text', '/resetting/send-email']], [], []],
    'fos_user_resetting_check_email' => [[], ['_controller' => 'fos_user.resetting.controller:checkEmailAction'], [], [['text', '/resetting/check-email']], [], []],
    'fos_user_resetting_reset' => [['token'], ['_controller' => 'fos_user.resetting.controller:resetAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/resetting/reset']], [], []],
    'fos_user_change_password' => [[], ['_controller' => 'fos_user.change_password.controller:changePasswordAction'], [], [['text', '/profile/change-password']], [], []],
    'liip_imagine_filter_runtime' => [['filter', 'hash', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[^/]++', 'hash', true], ['text', '/rc'], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
    'liip_imagine_filter' => [['filter', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
];
