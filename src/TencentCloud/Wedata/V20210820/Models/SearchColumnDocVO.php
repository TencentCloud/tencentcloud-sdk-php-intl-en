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
 * Table Field Information
 *
 * @method string getName() Obtain Field NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Field NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getChineseName() Obtain Field Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setChineseName(string $ChineseName) Set Field Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getType() Obtain Field TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Field TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getLength() Obtain Field Type Length
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLength(integer $Length) Set Field Type Length
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPrecision() Obtain Field Type Precision
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPrecision(integer $Precision) Set Field Type Precision
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getScale() Obtain Field Type scale
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setScale(integer $Scale) Set Field Type scale
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDefaultValue() Obtain Field Default Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDefaultValue(string $DefaultValue) Set Field Default Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDescription() Obtain Field DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDescription(string $Description) Set Field DescriptionNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPosition() Obtain Field Order
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPosition(integer $Position) Set Field Order
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getIsPartition() Obtain Is Partition Field
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIsPartition(boolean $IsPartition) Set Is Partition Field
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getColumnKey() Obtain Index Type on the column Primary Key: PRI, Unique Index: UNI, General Index: MUL
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setColumnKey(string $ColumnKey) Set Index Type on the column Primary Key: PRI, Unique Index: UNI, General Index: MUL
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getModifiedTime() Obtain Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setModifiedTime(string $ModifiedTime) Set Update timeNote: This field may return null, indicating that no valid value can be obtained.
 */
class SearchColumnDocVO extends AbstractModel
{
    /**
     * @var string Field NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var string Field Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ChineseName;

    /**
     * @var string Field TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var integer Field Type Length
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Length;

    /**
     * @var integer Field Type Precision
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Precision;

    /**
     * @var integer Field Type scale
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Scale;

    /**
     * @var string Field Default Value
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DefaultValue;

    /**
     * @var string Field DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Description;

    /**
     * @var integer Field Order
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Position;

    /**
     * @var boolean Is Partition Field
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IsPartition;

    /**
     * @var string Index Type on the column Primary Key: PRI, Unique Index: UNI, General Index: MUL
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ColumnKey;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ModifiedTime;

    /**
     * @param string $Name Field NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ChineseName Field Chinese Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Type Field TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Length Field Type Length
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Precision Field Type Precision
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Scale Field Type scale
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DefaultValue Field Default Value
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Description Field DescriptionNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Position Field Order
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $IsPartition Is Partition Field
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ColumnKey Index Type on the column Primary Key: PRI, Unique Index: UNI, General Index: MUL
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ModifiedTime Update timeNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ChineseName",$param) and $param["ChineseName"] !== null) {
            $this->ChineseName = $param["ChineseName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("Precision",$param) and $param["Precision"] !== null) {
            $this->Precision = $param["Precision"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
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

        if (array_key_exists("ColumnKey",$param) and $param["ColumnKey"] !== null) {
            $this->ColumnKey = $param["ColumnKey"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}
