<?
namespace App\Traits;

trait UserRoleTrait{
    /**
     * Add a relationship with the roles table
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
    /**
     *
     * Checks if the user has role can be used with auth::user->hasRole(role)
     * @param $name
     * @return bool
     */
    public function hasRole($name)
    {
        foreach ($this->roles as $role) {
            if ($role->role_slug == $name) {
                return true;
            }
        }

        return false;
    }
}