<?php

namespace App\Helpers\Crud;

use Illuminate\Database\Eloquent\Model;

/**
 * update
 */
trait WithUpdate
{
    protected function updateAction(array $validated, Model $model)
    {
        $model->update($validated);

        return null;
    }

    public function update($id)
    {
        $model = ($this->model)::findOrFail($id);
        $validated = $this->validationAction();

        $action = $this->updateAction($validated, $model);

        return $action ?? redirect()->back();
    }
}
