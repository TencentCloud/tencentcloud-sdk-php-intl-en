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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Called service configuration expression
 *
 * @method string getType() Obtain expression type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set expression type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getValue() Obtain Match Value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set Match Value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getValueType() Obtain value type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValueType(string $ValueType) Set value type
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ArgumentValue extends AbstractModel
{
    /**
     * @var string expression type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Match Value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @var string value type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValueType;

    /**
     * @param string $Type expression type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Value Match Value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ValueType value type
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }
    }
}
