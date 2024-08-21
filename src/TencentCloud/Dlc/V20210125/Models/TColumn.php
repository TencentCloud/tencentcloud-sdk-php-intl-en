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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table field information
 *
 * @method string getName() Obtain Field name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Field name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Field type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Field type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComment() Obtain Field description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComment(string $Comment) Set Field description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefault() Obtain Field default values
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefault(string $Default) Set Field default values
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getNotNull() Obtain Is the field non-empty?
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNotNull(boolean $NotNull) Set Is the field non-empty?
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPrecision() Obtain Indicate the length of the entire numeric with a value of 1-38
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrecision(integer $Precision) Set Indicate the length of the entire numeric with a value of 1-38
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScale() Obtain Indicates the length of the decimal part.
Scale is smaller than Precision.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScale(integer $Scale) Set Indicates the length of the decimal part.
Scale is smaller than Precision.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPosition() Obtain Field position: Fields with smaller values need to be placed first.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPosition(integer $Position) Set Field position: Fields with smaller values need to be placed first.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsPartition() Obtain Whether it is a partition field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsPartition(boolean $IsPartition) Set Whether it is a partition field
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TColumn extends AbstractModel
{
    /**
     * @var string Field name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Field type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Field description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Comment;

    /**
     * @var string Field default values
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Default;

    /**
     * @var boolean Is the field non-empty?
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NotNull;

    /**
     * @var integer Indicate the length of the entire numeric with a value of 1-38
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Precision;

    /**
     * @var integer Indicates the length of the decimal part.
Scale is smaller than Precision.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Scale;

    /**
     * @var integer Field position: Fields with smaller values need to be placed first.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Position;

    /**
     * @var boolean Whether it is a partition field
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsPartition;

    /**
     * @param string $Name Field name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Field type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Comment Field description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Default Field default values
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $NotNull Is the field non-empty?
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Precision Indicate the length of the entire numeric with a value of 1-38
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Scale Indicates the length of the decimal part.
Scale is smaller than Precision.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Position Field position: Fields with smaller values need to be placed first.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsPartition Whether it is a partition field
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("NotNull",$param) and $param["NotNull"] !== null) {
            $this->NotNull = $param["NotNull"];
        }

        if (array_key_exists("Precision",$param) and $param["Precision"] !== null) {
            $this->Precision = $param["Precision"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("IsPartition",$param) and $param["IsPartition"] !== null) {
            $this->IsPartition = $param["IsPartition"];
        }
    }
}
