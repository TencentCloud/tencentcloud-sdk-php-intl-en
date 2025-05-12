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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance parameter information
 *
 * @method string getCurrentValue() Obtain Current value
 * @method void setCurrentValue(string $CurrentValue) Set Current value
 * @method string getDefault() Obtain Default value
 * @method void setDefault(string $Default) Set Default value
 * @method array getEnumValue() Obtain Enumerated values of the parameter It is null if the parameter is non-enumerated.
 * @method void setEnumValue(array $EnumValue) Set Enumerated values of the parameter It is null if the parameter is non-enumerated.
 * @method integer getIsGlobal() Obtain Valid values: `1` (global parameter),  `0`  (non-global parameter).
 * @method void setIsGlobal(integer $IsGlobal) Set Valid values: `1` (global parameter),  `0`  (non-global parameter).
 * @method string getMax() Obtain Maximum value
 * @method void setMax(string $Max) Set Maximum value
 * @method string getMin() Obtain Minimum value
 * @method void setMin(string $Min) Set Minimum value
 * @method integer getNeedReboot() Obtain Whether to restart the database for the modified parameters to take effect. Valid values:  `0` (no), `1` (yes)
 * @method void setNeedReboot(integer $NeedReboot) Set Whether to restart the database for the modified parameters to take effect. Valid values:  `0` (no), `1` (yes)
 * @method string getParamName() Obtain Parameter name
 * @method void setParamName(string $ParamName) Set Parameter name
 * @method string getParamType() Obtain Parameter type. Valid values:  `integer`, `enum`, `float`, `string`, `func`.
 * @method void setParamType(string $ParamType) Set Parameter type. Valid values:  `integer`, `enum`, `float`, `string`, `func`.
 * @method string getDescription() Obtain Parameter description
 * @method void setDescription(string $Description) Set Parameter description
 * @method boolean getIsFunc() Obtain Whether the type is a formula.
 * @method void setIsFunc(boolean $IsFunc) Set Whether the type is a formula.
 * @method string getFunc() Obtain Parameter configuration formula.
 * @method void setFunc(string $Func) Set Parameter configuration formula.
 * @method string getFuncPattern() Obtain The default formula style of parameters that support formulas.
 * @method void setFuncPattern(string $FuncPattern) Set The default formula style of parameters that support formulas.
 */
class ParamItemDetail extends AbstractModel
{
    /**
     * @var string Current value
     */
    public $CurrentValue;

    /**
     * @var string Default value
     */
    public $Default;

    /**
     * @var array Enumerated values of the parameter It is null if the parameter is non-enumerated.
     */
    public $EnumValue;

    /**
     * @var integer Valid values: `1` (global parameter),  `0`  (non-global parameter).
     */
    public $IsGlobal;

    /**
     * @var string Maximum value
     */
    public $Max;

    /**
     * @var string Minimum value
     */
    public $Min;

    /**
     * @var integer Whether to restart the database for the modified parameters to take effect. Valid values:  `0` (no), `1` (yes)
     */
    public $NeedReboot;

    /**
     * @var string Parameter name
     */
    public $ParamName;

    /**
     * @var string Parameter type. Valid values:  `integer`, `enum`, `float`, `string`, `func`.
     */
    public $ParamType;

    /**
     * @var string Parameter description
     */
    public $Description;

    /**
     * @var boolean Whether the type is a formula.
     */
    public $IsFunc;

    /**
     * @var string Parameter configuration formula.
     */
    public $Func;

    /**
     * @var string The default formula style of parameters that support formulas.
     */
    public $FuncPattern;

    /**
     * @param string $CurrentValue Current value
     * @param string $Default Default value
     * @param array $EnumValue Enumerated values of the parameter It is null if the parameter is non-enumerated.
     * @param integer $IsGlobal Valid values: `1` (global parameter),  `0`  (non-global parameter).
     * @param string $Max Maximum value
     * @param string $Min Minimum value
     * @param integer $NeedReboot Whether to restart the database for the modified parameters to take effect. Valid values:  `0` (no), `1` (yes)
     * @param string $ParamName Parameter name
     * @param string $ParamType Parameter type. Valid values:  `integer`, `enum`, `float`, `string`, `func`.
     * @param string $Description Parameter description
     * @param boolean $IsFunc Whether the type is a formula.
     * @param string $Func Parameter configuration formula.
     * @param string $FuncPattern The default formula style of parameters that support formulas.
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
        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("EnumValue",$param) and $param["EnumValue"] !== null) {
            $this->EnumValue = $param["EnumValue"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsFunc",$param) and $param["IsFunc"] !== null) {
            $this->IsFunc = $param["IsFunc"];
        }

        if (array_key_exists("Func",$param) and $param["Func"] !== null) {
            $this->Func = $param["Func"];
        }

        if (array_key_exists("FuncPattern",$param) and $param["FuncPattern"] !== null) {
            $this->FuncPattern = $param["FuncPattern"];
        }
    }
}
