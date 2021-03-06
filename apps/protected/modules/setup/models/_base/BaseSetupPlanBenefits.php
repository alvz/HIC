<?php

/**
 * This is the model base class for the table "setup_plan_benefits".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "SetupPlanBenefits".
 *
 * Columns in table "setup_plan_benefits" available as properties of the model,
 * followed by relations of table "setup_plan_benefits" available as properties of the model.
 *
 * @property string $v_plan_code
 * @property string $v_template
 * @property string $v_kelompok
 * @property string $n_baris
 * @property string $v_benefit
 * @property string $v_formula
 * @property string $v_update
 * @property string $v_created_by
 * @property string $d_created_date
 * @property string $v_updated_by
 * @property string $d_updated_date
 * @property integer $n_max_harirawat
 * @property integer $n_max_klaim_pmonth
 * @property integer $n_max_klaim_pday
 * @property integer $n_max_visite_pday
 *
 * @property SetupMstPlans $vPlanCode
 */
abstract class BaseSetupPlanBenefits extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'setup_plan_benefits';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'SetupPlanBenefits|SetupPlanBenefits', $n);
	}

	public static function representingColumn() {
		return 'v_template';
	}

	public function rules() {
		return array(
			array('v_plan_code, v_kelompok, n_baris, v_created_by, d_created_date', 'required'),
			array('n_max_harirawat, n_max_klaim_pmonth, n_max_klaim_pday, n_max_visite_pday', 'numerical', 'integerOnly'=>true),
			array('v_plan_code, v_kelompok, n_baris, v_update', 'length', 'max'=>10),
			array('v_template', 'length', 'max'=>20),
			array('v_benefit, v_formula', 'length', 'max'=>50),
			array('v_created_by, v_updated_by', 'length', 'max'=>30),
			array('d_updated_date', 'safe'),
			array('v_template, v_benefit, v_formula, v_update, v_updated_by, d_updated_date, n_max_harirawat, n_max_klaim_pmonth, n_max_klaim_pday, n_max_visite_pday', 'default', 'setOnEmpty' => true, 'value' => null),
			array('v_plan_code, v_template, v_kelompok, n_baris, v_benefit, v_formula, v_update, v_created_by, d_created_date, v_updated_by, d_updated_date, n_max_harirawat, n_max_klaim_pmonth, n_max_klaim_pday, n_max_visite_pday', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'vPlanCode' => array(self::BELONGS_TO, 'SetupMstPlans', 'v_plan_code'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'v_plan_code' => Yii::t('app','Plan Code'),
			'v_template' => Yii::t('app', 'Template'),
			'v_kelompok' => Yii::t('app', 'Kelompok'),
			'n_baris' => Yii::t('app', 'Baris'),
			'v_benefit' => Yii::t('app', 'Benefit'),
			'v_formula' => Yii::t('app', 'Formula'),
			'v_update' => Yii::t('app', 'Update'),
			'v_created_by' => Yii::t('app', 'Created By'),
			'd_created_date' => Yii::t('app', 'Created Date'),
			'v_updated_by' => Yii::t('app', 'Updated By'),
			'd_updated_date' => Yii::t('app', 'Updated Date'),
			'n_max_harirawat' => Yii::t('app', 'Max Harirawat'),
			'n_max_klaim_pmonth' => Yii::t('app', 'Max Klaim Pmonth'),
			'n_max_klaim_pday' => Yii::t('app', 'Max Klaim Pday'),
			'n_max_visite_pday' => Yii::t('app', 'Max Visite Pday'),
			'vPlanCode' => Yii::t('app','VPlanCode'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('v_plan_code', $this->v_plan_code);
		$criteria->compare('v_template', $this->v_template, true);
		$criteria->compare('v_kelompok', $this->v_kelompok, true);
		$criteria->compare('n_baris', $this->n_baris, true);
		$criteria->compare('v_benefit', $this->v_benefit, true);
		$criteria->compare('v_formula', $this->v_formula, true);
		$criteria->compare('v_update', $this->v_update, true);
		$criteria->compare('v_created_by', $this->v_created_by, true);
		$criteria->compare('d_created_date', $this->d_created_date, true);
		$criteria->compare('v_updated_by', $this->v_updated_by, true);
		$criteria->compare('d_updated_date', $this->d_updated_date, true);
		$criteria->compare('n_max_harirawat', $this->n_max_harirawat);
		$criteria->compare('n_max_klaim_pmonth', $this->n_max_klaim_pmonth);
		$criteria->compare('n_max_klaim_pday', $this->n_max_klaim_pday);
		$criteria->compare('n_max_visite_pday', $this->n_max_visite_pday);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}