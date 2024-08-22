<?php
/*
Gibbon: the flexible, open school platform
Founded by Ross Parker at ICHK Secondary. Built by Ross Parker, Sandra Kuipers and the Gibbon community (https://gibbonedu.org/about/)
Copyright © 2010, Gibbon Foundation
Gibbon™, Gibbon Education Ltd. (Hong Kong)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

use Gibbon\Forms\Form;

if (isActionAccessible($guid, $connection2, '/modules/School Admin/gradeScales_manage_edit_grade_add.php') == false) {
    // Access denied
    $page->addError(__('You do not have access to this action.'));
} else {
    //Proceed!
    $gibbonScaleID = $_GET['gibbonScaleID'] ?? '';

    if ($gibbonScaleID == '') {
        $page->addError(__('You have not specified one or more required parameters.'));
    } else {
        
            $data = array('gibbonScaleID' => $gibbonScaleID);
            $sql = 'SELECT name FROM gibbonScale WHERE gibbonScaleID=:gibbonScaleID';
            $result = $connection2->prepare($sql);
            $result->execute($data);

        if ($result->rowCount() != 1) {
            $page->addError(__('The specified record does not exist.'));
        } else {
            $values = $result->fetch();

            $page->breadcrumbs
                ->add(__('Manage Grade Scales'), 'gradeScales_manage.php')
                ->add(__('Edit Grade Scale'), 'gradeScales_manage_edit.php', ['gibbonScaleID' => $gibbonScaleID])
                ->add(__('Add Grade'));

            $editLink = '';
            if (isset($_GET['editID'])) {
                $editLink = $session->get('absoluteURL').'/index.php?q=/modules/School Admin/gradeScales_manage_edit_grade_edit.php&gibbonScaleGradeID='.$_GET['editID']."&gibbonScaleID=$gibbonScaleID";
            }
            $page->return->setEditLink($editLink);


            $form = Form::create('gradeScaleGradeAdd', $session->get('absoluteURL').'/modules/'.$session->get('module').'/gradeScales_manage_edit_grade_addProcess.php');

            $form->addHiddenValue('address', $session->get('address'));
            $form->addHiddenValue('gibbonScaleID', $gibbonScaleID);

            $row = $form->addRow();
                $row->addLabel('name', __('Grade Scale'));
                $row->addTextField('name')->readonly()->setValue($values['name']);

            $row = $form->addRow();
                $row->addLabel('value', __('Value'))->description(__('Must be unique for this grade scale.'));
                $row->addTextField('value')->required()->maxLength(10);

            $row = $form->addRow();
                $row->addLabel('descriptor', __('Descriptor'));
                $row->addTextField('descriptor')->required()->maxLength(50);

            $row = $form->addRow();
                $row->addLabel('sequenceNumber', __('Sequence Number'))->description(__('Must be unique for this grade scale.'));
                $row->addNumber('sequenceNumber')->required()->maxLength(5);

            $row = $form->addRow();
                $row->addLabel('isDefault', __('Is Default?'))->description(__('Preselects this option when using this grade scale in appropriate contexts.'));
                $row->addYesNo('isDefault')->required()->selected('N');

            $row = $form->addRow();
                $row->addFooter();
                $row->addSubmit();

            echo $form->getOutput();
        }
    }
}
