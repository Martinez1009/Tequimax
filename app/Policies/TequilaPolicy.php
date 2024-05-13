<?php

namespace App\Policies;

use App\Models\User;
use App\Models\tequila;
use Illuminate\Auth\Access\Response;

class TequilaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user, tequila $tequila): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, tequila $tequila): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user, tequila $tequila): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, tequila $tequila): bool
    {
        if ($user->id == '1'){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, tequila $tequila): bool
    {
        if ($user->id == '1'){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, tequila $tequila): bool
    {
        if ($user->id == '1'){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, tequila $tequila): bool
    {
        if ($user->id == '1'){
            return true;
        }else{
            return false;
        }
    }
}
