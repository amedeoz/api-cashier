<?php

namespace App\Repositories;

use App\Products;
use Validator;

class ProductsRepository extends Repository {

    public function rules()
    {
        return [
              'name' => 'required|max:255',
              'price' => 'required|integer',
              'icon_id' => 'required|integer'
          ];
    }

    public function validate($RequestProduct)
    {
      $isObjectValid = Validator::make($RequestProduct->all(), $this->rules());

      if ($isObjectValid->fails()) {
        throw new \Exception($isObjectValid->errors()->first(), 409);
      }

      return array_unique($RequestProduct->all());
    }

    public function create($RequestProduct)
    {
        $RequestProduct = $this->validate($RequestProduct);

        return Products::create($RequestProduct);
    }

    public function update($productId, $RequestProduct)
    {
        $RequestProduct = $RequestProduct->all();

        $product = Products::find($productId);

        foreach ($RequestProduct as $key => $value) {
            if (!isset($product->$key)) {
                throw new \Exception("$key does not exist, remove this field and try again.", 409);
            }
            $product->$key = $value;
        }

        return $product->save();
    }

    public function getAll()
    {
        $products = Products::with('icon')->get();

        foreach ($products as $key => $product) {
            $product->icon_name = $product->icon->name;
            $product->icon_id = $product->icon->id;

            unset($product->icon);
        }

        return $products;
    }

    public function delete($productId)
    {
        $product = Products::find($productId);

        if (empty($product)) {
            throw new \Exception("Product with ID $productId does not exist.", 404);
        }

        return $product->delete();
    }
}
?>