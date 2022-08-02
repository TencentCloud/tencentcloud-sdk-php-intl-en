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
 * Column information of the data table.
 *
 * @method string getName() Obtain Column name, which is case-insensitive and can contain up to 25 characters.
 * @method void setName(string $Name) Set Column name, which is case-insensitive and can contain up to 25 characters.
 * @method string getType() Obtain Column type. Valid values:
string|tinyint|smallint|int|bigint|boolean|float|double|decimal|timestamp|date|binary|array<data_type>|map<primitive_type, data_type>|struct<col_name : data_type [COMMENT col_comment], ...>|uniontype<data_type, data_type, ...>.
 * @method void setType(string $Type) Set Column type. Valid values:
string|tinyint|smallint|int|bigint|boolean|float|double|decimal|timestamp|date|binary|array<data_type>|map<primitive_type, data_type>|struct<col_name : data_type [COMMENT col_comment], ...>|uniontype<data_type, data_type, ...>.
 * @method string getComment() Obtain Class comment.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComment(string $Comment) Set Class comment.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPrecision() Obtain Length of the entire numeric value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrecision(integer $Precision) Set Length of the entire numeric value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScale() Obtain Length of the decimal part
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScale(integer $Scale) Set Length of the decimal part
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNullable() Obtain Whether the column is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNullable(string $Nullable) Set Whether the column is null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPosition() Obtain Field position
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPosition(integer $Position) Set Field position
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Field creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Field creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifiedTime() Obtain Field modification time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifiedTime(string $ModifiedTime) Set Field modification time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsPartition() Obtain Whether the column is the partition field.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsPartition(boolean $IsPartition) Set Whether the column is the partition field.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Column extends AbstractModel
{
    /**
     * @var string Column name, which is case-insensitive and can contain up to 25 characters.
     */
    public $Name;

    /**
     * @var string Column type. Valid values:
string|tinyint|smallint|int|bigint|boolean|float|double|decimal|timestamp|date|binary|array<data_type>|map<primitive_type, data_type>|struct<col_name : data_type [COMMENT col_comment], ...>|uniontype<data_type, data_type, ...>.
     */
    public $Type;

    /**
     * @var string Class comment.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Comment;

    /**
     * @var integer Length of the entire numeric value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Precision;

    /**
     * @var integer Length of the decimal part
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Scale;

    /**
     * @var string Whether the column is null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nullable;

    /**
     * @var integer Field position
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Position;

    /**
     * @var string Field creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Field modification time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifiedTime;

    /**
     * @var boolean Whether the column is the partition field.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsPartition;

    /**
     * @param string $Name Column name, which is case-insensitive and can contain up to 25 characters.
     * @param string $Type Column type. Valid values:
string|tinyint|smallint|int|bigint|boolean|float|double|decimal|timestamp|date|binary|array<data_type>|map<primitive_type, data_type>|struct<col_name : data_type [COMMENT col_comment], ...>|uniontype<data_type, data_type, ...>.
     * @param string $Comment Class comment.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Precision Length of the entire numeric value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Scale Length of the decimal part
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nullable Whether the column is null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Position Field position
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Field creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifiedTime Field modification time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsPartition Whether the column is the partition field.
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

        if (array_key_exists("Precision",$param) and $param["Precision"] !== null) {
            $this->Precision = $param["Precision"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("Nullable",$param) and $param["Nullable"] !== null) {
            $this->Nullable = $param["Nullable"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("IsPartition",$param) and $param["IsPartition"] !== null) {
            $this->IsPartition = $param["IsPartition"];
        }
    }
}
