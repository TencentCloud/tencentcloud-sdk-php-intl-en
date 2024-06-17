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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter information for each specification
 *
 * @method string getName() Obtain Parameter name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Parameter name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMemory() Obtain The specification that corresponds to the parameter information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemory(string $Memory) Set The specification that corresponds to the parameter information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getValue() Obtain The default parameter value under this specification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(string $Value) Set The default parameter value under this specification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUnit() Obtain Unit of the parameter value. If the parameter has no unit, this field will return null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnit(string $Unit) Set Unit of the parameter value. If the parameter has no unit, this field will return null.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getMax() Obtain The maximum value of the `integer` or `real` parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMax(float $Max) Set The maximum value of the `integer` or `real` parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getMin() Obtain The minimum value of the `integer` or `real` parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMin(float $Min) Set The minimum value of the `integer` or `real` parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getEnumValue() Obtain Value range of the enum parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnumValue(array $EnumValue) Set Value range of the enum parameter
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ParamSpecRelation extends AbstractModel
{
    /**
     * @var string Parameter name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string The specification that corresponds to the parameter information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Memory;

    /**
     * @var string The default parameter value under this specification
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @var string Unit of the parameter value. If the parameter has no unit, this field will return null.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Unit;

    /**
     * @var float The maximum value of the `integer` or `real` parameter
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Max;

    /**
     * @var float The minimum value of the `integer` or `real` parameter
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Min;

    /**
     * @var array Value range of the enum parameter
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnumValue;

    /**
     * @param string $Name Parameter name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Memory The specification that corresponds to the parameter information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Value The default parameter value under this specification
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Unit Unit of the parameter value. If the parameter has no unit, this field will return null.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Max The maximum value of the `integer` or `real` parameter
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Min The minimum value of the `integer` or `real` parameter
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $EnumValue Value range of the enum parameter
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("EnumValue",$param) and $param["EnumValue"] !== null) {
            $this->EnumValue = $param["EnumValue"];
        }
    }
}
