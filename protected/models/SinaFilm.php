<?php

/**
 * This is the MongoDB Document model class based on table "sina_film".
 */
class SinaFilm extends VideoActiveRecord
{
	public $content;

	/**
	 * Returns the static model of the specified AR class.
	 * @return SinaFirm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated collection name
	 */
	public function getCollectionName()
	{
		return 'sina_film';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('content', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'content' => 'Content',
		);
	}
	
	public function getLastDate() {
		return $this->content['lastmod'];
	}
	
	public function getVideoNum() {
		return 1;
	}
}