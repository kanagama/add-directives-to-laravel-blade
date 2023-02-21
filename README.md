# Add-Directives-To-Laravel-Blade

暇なので作りました。

## インストール方法

```bash
composer require kanagama/add-directives-to-larave-blade
```

## 追加されるディレクティブ一覧

### @true

$conditions 条件式が true の場合のみ表示されます。

```php
@true ($condition)
  // $condition が true の場合の処理
@endtrue
```

### @false

$conditions 条件式が false の場合のみ表示されます。

```php
@false ($condition)
  // $condition が false の場合の処理
@endfalse
```

### @notempty

@empty ディレクティブと反対の挙動をします

$conditions が empty でない場合に表示されます

```php
@notempty ($condition)
  // $condition が empty でない場合の処理
@endnotempty
```

### @notisset

@isset ディレクティブと反対の挙動をします

$conditions が定義されていない、または null の場合に表示されます

```php
@notisset ($condition)
  // $condition が定義されていない、または null の場合の処理
@endnotisset
```

### @isnull

$conditions が null の場合に表示されます

```php
@isnull ($condition)
  // $condition が null の場合の処理
@endisnull
```


### @isnotnull

$conditions が null でない場合に表示されます

```php
@isnotnull ($condition)
  // $condition が null でない場合の処理
@endisnotnull
```


### @loop

$conditions の回数分表示されます

@foreach ディレクティブと同じく、$loop 変数が利用できます。

```php
@isnotnull ($condition)
  // $condition が 3 の場合、3回表示されます
  {{ $loop->index }}
@endisnotnull
```