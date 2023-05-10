## Query Builder
salah satu fitur pada laravel untuk memanggil data dari database tanpa memanggil model

contoh

```php
DB::table('produksi')->get();
// memanggil seluruh data pada table `produksi`
```

```php
DB::table('produksi')->where('id', $id)->first();
// memanggil 1 data dari table `produksi` dengan kondisi `id` tertentu
```

```php
DB::table('produksi')->where('id', $id)->update([
  'kode_produk' => $request->kode_produk,
  'nama_produk' => $request->nama_produk,
  'jumlah_produksi' => $request->jumlah_produksi,
  'tanggal_produksi' => $request->tanggal_produksi,
  'updated_at' => now()
]);
/* mengubah suatu data dari table `produksi` dengan kondisi `id` 
tertentu lalu diubah dengan parameter / field pada method / function update([])
*/
```

```php
DB::table('produksi')->where('id', $id)->delete();
// menghapus data dari table `produksi` dengan kondisi `id` tertentu
```

## Eloquent ORM
salah satu fitur magic pada laravel untuk memanggil data dari database dengan memanggil model

contoh

```php
use App\Models\Production;

Production::all();
// memanggil seluruh data pada table `produksi`
```

```php
use App\Models\Production;

Production::findOrFail($id);
// memanggil 1 data dari table `produksi` dengan kondisi `id` tertentu
```

```php
use App\Models\Production;

Production::findOrFail($id)->where('id', $id)->update([
  'kode_produk' => $request->kode_produk,
  'nama_produk' => $request->nama_produk,
  'jumlah_produksi' => $request->jumlah_produksi,
  'tanggal_produksi' => $request->tanggal_produksi,
  'updated_at' => now()
]);
/* mengubah suatu data dari table `produksi` dengan kondisi `id` 
tertentu lalu diubah dengan parameter / field pada method / function update([])
*/
```

```php
use App\Models\Production;

Production::destroy($id);
// menghapus data dari table `produksi` dengan kondisi `id` tertentu
```