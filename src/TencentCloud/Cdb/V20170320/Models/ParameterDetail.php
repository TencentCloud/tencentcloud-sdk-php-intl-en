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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance parameter details
 *
 * @method string getName() Obtain Parameter name
 * @method void setName(string $Name) Set Parameter name
 * @method string getParamType() Obtain Parameter type. Valid values: `integer`, `enum`, `float`, `string`, `func`
 * @method void setParamType(string $ParamType) Set Parameter type. Valid values: `integer`, `enum`, `float`, `string`, `func`
 * @method string getDefault() Obtain Default value of the parameter
 * @method void setDefault(string $Default) Set Default value of the parameter
 * @method string getDescription() Obtain Parameter description
 * @method void setDescription(string $Description) Set Parameter description
 * @method string getCurrentValue() Obtain Current value of the parameter
 * @method void setCurrentValue(string $CurrentValue) Set Current value of the parameter
 * @method integer getNeedReboot() Obtain Whether the database needs to be restarted for the modified parameter to take effect. Value range: 0 (no); 1 (yes)
 * @method void setNeedReboot(integer $NeedReboot) Set Whether the database needs to be restarted for the modified parameter to take effect. Value range: 0 (no); 1 (yes)
 * @method integer getMax() Obtain Maximum value of the parameter
 * @method void setMax(integer $Max) Set Maximum value of the parameter
 * @method integer getMin() Obtain Minimum value of the parameter
 * @method void setMin(integer $Min) Set Minimum value of the parameter
 * @method array getEnumValue() Obtain Enumerated values of the parameter. It is null if the parameter is non-enumerated
 * @method void setEnumValue(array $EnumValue) Set Enumerated values of the parameter. It is null if the parameter is non-enumerated
 * @method string getMaxFunc() Obtain Maximum parameter value, which is valid only when `ParamType` is set to `func`
 * @method void setMaxFunc(string $MaxFunc) Set Maximum parameter value, which is valid only when `ParamType` is set to `func`
 * @method string getMinFunc() Obtain Minimum parameter value, which is valid only when `ParamType` is set to `func`
 * @method void setMinFunc(string $MinFunc) Set Minimum parameter value, which is valid only when `ParamType` is set to `func`
 * @method boolean getIsNotSupportEdit() Obtain Whether the parameter can be modified Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsNotSupportEdit(boolean $IsNotSupportEdit) Set Whether the parameter can be modified Note: This field may return null, indicating that no valid values can be obtained.
 */
class ParameterDetail extends AbstractModel
{
    /**
     * @var string Parameter name
     */
    public $Name;

    /**
     * @var string Parameter type. Valid values: `integer`, `enum`, `float`, `string`, `func`
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
     * @var integer Whether the database needs to be restarted for the modified parameter to take effect. Value range: 0 (no); 1 (yes)
     */
    public $NeedReboot;

    /**
     * @var integer Maximum value of the parameter
     */
    public $Max;

    /**
     * @var integer Minimum value of the parameter
     */
    public $Min;

    /**
     * @var array Enumerated values of the parameter. It is null if the parameter is non-enumerated
     */
    public $EnumValue;

    /**
     * @var string Maximum parameter value, which is valid only when `ParamType` is set to `func`
     */
    public $MaxFunc;

    /**
     * @var string Minimum parameter value, which is valid only when `ParamType` is set to `func`
     */
    public $MinFunc;

    /**
     * @var boolean Whether the parameter can be modified Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsNotSupportEdit;

    /**
     * @param string $Name Parameter name
     * @param string $ParamType Parameter type. Valid values: `integer`, `enum`, `float`, `string`, `func`
     * @param string $Default Default value of the parameter
     * @param string $Description Parameter description
     * @param string $CurrentValue Current value of the parameter
     * @param integer $NeedReboot Whether the database needs to be restarted for the modified parameter to take effect. Value range: 0 (no); 1 (yes)
     * @param integer $Max Maximum value of the parameter
     * @param integer $Min Minimum value of the parameter
     * @param array $EnumValue Enumerated values of the parameter. It is null if the parameter is non-enumerated
     * @param string $MaxFunc Maximum parameter value, which is valid only when `ParamType` is set to `func`
     * @param string $MinFunc Minimum parameter value, which is valid only when `ParamType` is set to `func`
     * @param boolean $IsNotSupportEdit Whether the parameter can be modified Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("MaxFunc",$param) and $param["MaxFunc"] !== null) {
            $this->MaxFunc = $param["MaxFunc"];
        }

        if (array_key_exists("MinFunc",$param) and $param["MinFunc"] !== null) {
            $this->MinFunc = $param["MinFunc"];
        }

        if (array_key_exists("IsNotSupportEdit",$param) and $param["IsNotSupportEdit"] !== null) {
            $this->IsNotSupportEdit = $param["IsNotSupportEdit"];
        }
    }
}
