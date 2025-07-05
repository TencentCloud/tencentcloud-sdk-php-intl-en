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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Device attribute
 *
 * @method string getTag() Obtain Attribute name
 * @method void setTag(string $Tag) Set Attribute name
 * @method integer getType() Obtain Attribute value type. `1`: integer; `2`: string
 * @method void setType(integer $Type) Set Attribute value type. `1`: integer; `2`: string
 * @method string getValue() Obtain Attribute value
 * @method void setValue(string $Value) Set Attribute value
 * @method string getName() Obtain Attribute description
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setName(string $Name) Set Attribute description
Note: this field may return `null`, indicating that no valid value is obtained.
 */
class DeviceTag extends AbstractModel
{
    /**
     * @var string Attribute name
     */
    public $Tag;

    /**
     * @var integer Attribute value type. `1`: integer; `2`: string
     */
    public $Type;

    /**
     * @var string Attribute value
     */
    public $Value;

    /**
     * @var string Attribute description
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Name;

    /**
     * @param string $Tag Attribute name
     * @param integer $Type Attribute value type. `1`: integer; `2`: string
     * @param string $Value Attribute value
     * @param string $Name Attribute description
Note: this field may return `null`, indicating that no valid value is obtained.
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
