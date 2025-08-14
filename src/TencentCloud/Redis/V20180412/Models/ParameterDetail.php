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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the parameters in the parameter template
 *
 * @method string getName() Obtain Parameter name
 * @method void setName(string $Name) Set Parameter name
 * @method string getParamType() Obtain Parameter Type
 * @method void setParamType(string $ParamType) Set Parameter Type
 * @method string getDefault() Obtain Default value of the parameter
 * @method void setDefault(string $Default) Set Default value of the parameter
 * @method string getDescription() Obtain Parameter description
 * @method void setDescription(string $Description) Set Parameter description
 * @method string getCurrentValue() Obtain Current value of the parameter
 * @method void setCurrentValue(string $CurrentValue) Set Current value of the parameter
 * @method integer getNeedReboot() Obtain Whether to restart the database for the modified parameters to take effect
- `0`: No restart.
- `1`: Restart required.
 * @method void setNeedReboot(integer $NeedReboot) Set Whether to restart the database for the modified parameters to take effect
- `0`: No restart.
- `1`: Restart required.
 * @method string getMax() Obtain Maximum parameter value allowed.
 * @method void setMax(string $Max) Set Maximum parameter value allowed.
 * @method string getMin() Obtain Minimum parameter value allowed.
 * @method void setMin(string $Min) Set Minimum parameter value allowed.
 * @method array getEnumValue() Obtain Optional enumeration values of a parameter. For non-enumeration parameters, it is empty.
 * @method void setEnumValue(array $EnumValue) Set Optional enumeration values of a parameter. For non-enumeration parameters, it is empty.
 */
class ParameterDetail extends AbstractModel
{
    /**
     * @var string Parameter name
     */
    public $Name;

    /**
     * @var string Parameter Type
     */
    public $ParamType;

    /**
     * @var string Default value of the parameter
     */
    public $Default;

    /**
     * @var string Parameter description
     */
    public $Description;

    /**
     * @var string Current value of the parameter
     */
    public $CurrentValue;

    /**
     * @var integer Whether to restart the database for the modified parameters to take effect
- `0`: No restart.
- `1`: Restart required.
     */
    public $NeedReboot;

    /**
     * @var string Maximum parameter value allowed.
     */
    public $Max;

    /**
     * @var string Minimum parameter value allowed.
     */
    public $Min;

    /**
     * @var array Optional enumeration values of a parameter. For non-enumeration parameters, it is empty.
     */
    public $EnumValue;

    /**
     * @param string $Name Parameter name
     * @param string $ParamType Parameter Type
     * @param string $Default Default value of the parameter
     * @param string $Description Parameter description
     * @param string $CurrentValue Current value of the parameter
     * @param integer $NeedReboot Whether to restart the database for the modified parameters to take effect
- `0`: No restart.
- `1`: Restart required.
     * @param string $Max Maximum parameter value allowed.
     * @param string $Min Minimum parameter value allowed.
     * @param array $EnumValue Optional enumeration values of a parameter. For non-enumeration parameters, it is empty.
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

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
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
