use Debugbar;

// Додавання повідомлення
Debugbar::info('Information');

// Додавання змінну
Debugbar::addMessage('Another message', 'mylabel');

// Початок та зупинка виміру часу
Debugbar::startMeasure('render', 'Time for rendering');
Debugbar::stopMeasure('render');

// Виміряння часу виконання функції
Debugbar::measure('My long operation', function() {
    'providers' => [
    // Інші провайдери
    Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
],

});


