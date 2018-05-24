<?php 

use yii\helpers\Html;


$this->title = "Employee";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create a employee.</span>
<?php else: ?>
        <?= Html::a('Create Employee', ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
    
<table class="table table-bordered">
    <tr>
        <th>First_name</th>
        <th>Last_name</th>
        <th>Email</th>
        <th>Phone_number</th>
        <th>Hire_Date</th>
        <th>Job_id</th>
        <th>Salary</th>
        <th>Manager_id</th>
        <th>Department_id</th>
        
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->first_name, ['/employee/view', 'employee_id'=>$model->employee_id]); ?>
        </td>  
        <td><?= $model->last_name ?></td>
        <td><?= $model->email ?></td>
        <td><?= $model->phone_number ?></td>
        <td><?= $model->hire_date ?></td>
        <td><?= $model->job_id ?></td>
        <td><?= $model->salary ?></td>
        <td><?= $model->manager_id ?></td>
        <td><?= $model->department_id ?></td>
    </tr>
    <?php endforeach; ?>
</table>
