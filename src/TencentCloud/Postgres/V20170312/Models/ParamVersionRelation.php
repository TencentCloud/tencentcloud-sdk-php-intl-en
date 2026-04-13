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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter information for each version
 *
 * @method string getName() Obtain Parameter name.
 * @method void setName(string $Name) Set Parameter name.
 * @method string getDBKernelVersion() Obtain Parameter information belonging to kernel version.
 * @method void setDBKernelVersion(string $DBKernelVersion) Set Parameter information belonging to kernel version.
 * @method string getValue() Obtain Default value of the parameter for this version and specification.
 * @method void setValue(string $Value) Set Default value of the parameter for this version and specification.
 * @method string getUnit() Obtain Parameter value unit. returns null if the parameter has no units.
 * @method void setUnit(string $Unit) Set Parameter value unit. returns null if the parameter has no units.
 * @method float getMax() Obtain Numerical type (integer, real) parameter specifies the upper bound.
 * @method void setMax(float $Max) Set Numerical type (integer, real) parameter specifies the upper bound.
 * @method float getMin() Obtain Specifies the numerical type (integer, real) parameter and its lower bound.
 * @method void setMin(float $Min) Set Specifies the numerical type (integer, real) parameter and its lower bound.
 * @method array getEnumValue() Obtain Value range of the enum parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnumValue(array $EnumValue) Set Value range of the enum parameter
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ParamVersionRelation extends AbstractModel
{
    /**
     * @var string Parameter name.
     */
    public $Name;

    /**
     * @var string Parameter information belonging to kernel version.
     */
    public $DBKernelVersion;

    /**
     * @var string Default value of the parameter for this version and specification.
     */
    public $Value;

    /**
     * @var string Parameter value unit. returns null if the parameter has no units.
     */
    public $Unit;

    /**
     * @var float Numerical type (integer, real) parameter specifies the upper bound.
     */
    public $Max;

    /**
     * @var float Specifies the numerical type (integer, real) parameter and its lower bound.
     */
    public $Min;

    /**
     * @var array Value range of the enum parameter
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnumValue;

    /**
     * @param string $Name Parameter name.
     * @param string $DBKernelVersion Parameter information belonging to kernel version.
     * @param string $Value Default value of the parameter for this version and specification.
     * @param string $Unit Parameter value unit. returns null if the parameter has no units.
     * @param float $Max Numerical type (integer, real) parameter specifies the upper bound.
     * @param float $Min Specifies the numerical type (integer, real) parameter and its lower bound.
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

        if (array_key_exists("DBKernelVersion",$param) and $param["DBKernelVersion"] !== null) {
            $this->DBKernelVersion = $param["DBKernelVersion"];
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
