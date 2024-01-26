<?php

namespace App\Observers;

use App\Models\Actionlog;
use App\Models\Component;
use Auth;

class ComponentObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  Component  $component
     * @return void
     */
    public function updated(Component $component)
    {
        $logAction = new Actionlog();
        $logAction->item_type = Component::class;
        $logAction->item_id = $component->id;
        $logAction->created_at = date('Y-m-d H:i:s');
        $logAction->user_id = Auth::id();
        $logAction->logaction('update');
    }

    /**
     * Listen to the Component created event when
     * a new component is created.
     *
     * @param  Component  $component
     * @return void
     */
    public function created(Component $component)
    {
        $logAction = new Actionlog();
        $logAction->item_type = Component::class;
        $logAction->item_id = $component->id;
        $logAction->created_at = date('Y-m-d H:i:s');
        $logAction->user_id = Auth::id();
        if($component->imported) {
            $logAction->note = trans('general.importer.import_note');
        }
        $logAction->logaction('create');
    }

    /**
     * Listen to the Component deleting event.
     *
     * @param  Component  $component
     * @return void
     */
    public function deleting(Component $component)
    {
        $logAction = new Actionlog();
        $logAction->item_type = Component::class;
        $logAction->item_id = $component->id;
        $logAction->created_at = date('Y-m-d H:i:s');
        $logAction->user_id = Auth::id();
        $logAction->logaction('delete');
    }
}
