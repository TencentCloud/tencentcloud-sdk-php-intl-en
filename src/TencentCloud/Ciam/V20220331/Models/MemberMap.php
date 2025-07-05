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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Map data type
 *
 * @method string getName() Obtain Key
 * @method void setName(string $Name) Set Key
 * @method string getValue() Obtain Value
 * @method void setValue(string $Value) Set Value
 * @method string getType() Obtain Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Type
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MemberMap extends AbstractModel
{
    /**
     * @var string Key
     */
    public $Name;

    /**
     * @var string Value
     */
    public $Value;

    /**
     * @var string Type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @param string $Name Key
     * @param string $Value Value
     * @param string $Type Type
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
