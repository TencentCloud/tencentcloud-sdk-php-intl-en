<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Column Metadata
 *
 * @method string getNameEn() Obtain Field English Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNameEn(string $NameEn) Set Field English Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getNameCn() Obtain Field Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNameCn(string $NameCn) Set Field Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getType() Obtain Field TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Field TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Field DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Field DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPosition() Obtain Field Sequence Number
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPosition(integer $Position) Set Field Sequence Number
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getIsPartition() Obtain Is Partition Field
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIsPartition(boolean $IsPartition) Set Is Partition Field
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getName() Obtain Field nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Field nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getColumnFamiliesFieldSet() Obtain HBase Column Family Attribute Set
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnFamiliesFieldSet(array $ColumnFamiliesFieldSet) Set HBase Column Family Attribute Set
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDictionaryId() Obtain Corresponding Code Table Dictionary ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDictionaryId(string $DictionaryId) Set Corresponding Code Table Dictionary ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDictionaryName() Obtain Corresponding Code Table Dictionary Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDictionaryName(string $DictionaryName) Set Corresponding Code Table Dictionary Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLevelName() Obtain Security Level: Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLevelName(string $LevelName) Set Security Level: Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getLevelRank() Obtain Security Level: Value Range 1-10
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLevelRank(integer $LevelRank) Set Security Level: Value Range 1-10
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ColumnMeta extends AbstractModel
{
    /**
     * @var string Field English Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NameEn;

    /**
     * @var string Field Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NameCn;

    /**
     * @var string Field TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string Field DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var integer Field Sequence Number
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Position;

    /**
     * @var boolean Is Partition Field
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IsPartition;

    /**
     * @var string Field nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var array HBase Column Family Attribute Set
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnFamiliesFieldSet;

    /**
     * @var string Corresponding Code Table Dictionary ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DictionaryId;

    /**
     * @var string Corresponding Code Table Dictionary Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DictionaryName;

    /**
     * @var string Security Level: Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LevelName;

    /**
     * @var integer Security Level: Value Range 1-10
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LevelRank;

    /**
     * @param string $NameEn Field English Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $NameCn Field Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Type Field TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Field DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Position Field Sequence Number
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $IsPartition Is Partition Field
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Name Field nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $ColumnFamiliesFieldSet HBase Column Family Attribute Set
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DictionaryId Corresponding Code Table Dictionary ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DictionaryName Corresponding Code Table Dictionary Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LevelName Security Level: Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $LevelRank Security Level: Value Range 1-10
Note: This field may return null, indicating that no valid value can be obtained.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NameEn",$param) and $param["NameEn"] !== null) {
            $this->NameEn = $param["NameEn"];
        }

        if (array_key_exists("NameCn",$param) and $param["NameCn"] !== null) {
            $this->NameCn = $param["NameCn"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("IsPartition",$param) and $param["IsPartition"] !== null) {
            $this->IsPartition = $param["IsPartition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ColumnFamiliesFieldSet",$param) and $param["ColumnFamiliesFieldSet"] !== null) {
            $this->ColumnFamiliesFieldSet = [];
            foreach ($param["ColumnFamiliesFieldSet"] as $key => $value){
                $obj = new Pair();
                $obj->deserialize($value);
                array_push($this->ColumnFamiliesFieldSet, $obj);
            }
        }

        if (array_key_exists("DictionaryId",$param) and $param["DictionaryId"] !== null) {
            $this->DictionaryId = $param["DictionaryId"];
        }

        if (array_key_exists("DictionaryName",$param) and $param["DictionaryName"] !== null) {
            $this->DictionaryName = $param["DictionaryName"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }

        if (array_key_exists("LevelRank",$param) and $param["LevelRank"] !== null) {
            $this->LevelRank = $param["LevelRank"];
        }
    }
}
