# BibliotecaVirtual

En App\Providers agregar en AppServiceProvider en siguiente codigo:

public function boot(): void
    {
        Paginator::useBootstrap();
    }
Y eso seria todo.
