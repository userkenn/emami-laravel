<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Produk;

class ProdukPolicy
{
    public function update(User $user, Produk $produk)
    {
        return $user->user_id === $produk->user_id;

        
    }
    
    public function delete(User $user, Produk $produk)
    {
        return $user->user_id === $produk->user_id;
    }
}
