<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ColumnInfo
 *
 * @method string getType() Obtain Field type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Field type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Field name
 * @method void setName(string $Name) Set Field name
 * @method integer getLength() Obtain Field length.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLength(integer $Length) Set Field length.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Field description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Field description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPosition() Obtain Field order.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPosition(integer $Position) Set Field order.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsPartition() Obtain Is partition field.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsPartition(boolean $IsPartition) Set Is partition field.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ColumnInfo extends AbstractModel
{
    /**
     * @var string Field type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Field name
     */
    public $Name;

    /**
     * @var integer Field length.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Length;

    /**
     * @var string Field description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var integer Field order.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Position;

    /**
     * @var boolean Is partition field.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsPartition;

    /**
     * @param string $Type Field type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Field name
     * @param integer $Length Field length.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Field description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Position Field order.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsPartition Is partition field.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
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
    }
}
