<?php

namespace App\Policies;

use App\Models\User;
use App\Models\RoomParticipant;
use Illuminate\Auth\Access\HandlesAuthorization;

class RoomParticipantPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_room::participant');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, RoomParticipant $roomParticipant): bool
    {
        return $user->can('view_room::participant');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_room::participant');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, RoomParticipant $roomParticipant): bool
    {
        return $user->can('update_room::participant');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, RoomParticipant $roomParticipant): bool
    {
        return $user->can('delete_room::participant');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_room::participant');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, RoomParticipant $roomParticipant): bool
    {
        return $user->can('force_delete_room::participant');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_room::participant');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, RoomParticipant $roomParticipant): bool
    {
        return $user->can('restore_room::participant');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_room::participant');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, RoomParticipant $roomParticipant): bool
    {
        return $user->can('replicate_room::participant');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_room::participant');
    }
}
