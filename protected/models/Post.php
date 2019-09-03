<?php

/**
 * This is the model class for table "tbl_post".
 *
 * The followings are the available columns in table 'tbl_post':
 * @property string $id
 * @property string $title
 * @property string $body
 * @property string $author
 * @property string $category_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property Category $category
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, body, author', 'required'),
			array('title', 'length', 'max'=>255),
			array('author', 'length', 'max'=>50),
			array('category_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, body, author, category_id, created_at, updated_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'comments' => array(self::HAS_MANY, 'Comment', 'post_id'),
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
		);
	}

	protected function beforeSave() {
		if (!$this->isNewRecord) {
			$this->updated_at = new CDbExpression('NOW()');
		}

		return parent::beforeSave();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Título',
			'body' => 'Texto',
			'author' => 'Autor',
			'category_id' => 'Categoria',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('category_id',$this->category_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}