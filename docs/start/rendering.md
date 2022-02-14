---
title: Rendering
weight: 4
---

## Rendering Components

You render components the same way you [render](https://laravel-livewire.com/docs/2.x/rendering-components) any Livewire component.

Your component at `App\Http\Livewire\UsersTable.php`

```html
<x-livewire:users-table />
```

## Using sub-folders

If your component does not live in `App\Http\Livewire`, you can specify a different sub-folder. For example if your component lives in `App\Http\Livewire\Backend\Users` you would use the following:

```html
<x-livewire:backend.users.users-table />
```

### Using non-standard locations

If for example you are using Domain Driven Development and you would like your component to live in `App\Domains\Auth\Users`, then you would register your component in a service provider so Livewire knows how to find it.

For example in LivewireServiceProvider:

```php
use Livewire\Livewire;
use App\Domains\Auth\Users\UsersTable;

public function boot(): void
{
    Livewire::component('backend.users.users-table', UsersTable::class);
}
```

```html
<x-livewire:backend.users.users-table />
```

## Passing Properties

Just like in standard Livewire components, you may pass properties and accept them in your mount method:

```html
<x-livewire:invoices-table status="open" />
```

```php
// Available as $this->status in datatable class or $status in views (if necessary)
public string $status;

// Optional, but if you need to initialize anything
public function mount(string $status): void {}
```