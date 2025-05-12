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
 * Instance parameter details
 *
 * @method string getParamName() Obtain Parameter name
 * @method void setParamName(string $ParamName) Set Parameter name
 * @method string getParamType() Obtain Parameter type. Valid values:  `integer`, `enum`, `float`, `string`, `func`.
 * @method void setParamType(string $ParamType) Set Parameter type. Valid values:  `integer`, `enum`, `float`, `string`, `func`.
 * @method boolean getSupportFunc() Obtain Whether `func` is supported. Valid values: `true` (supported), `false` (not supported).
 * @method void setSupportFunc(boolean $SupportFunc) Set Whether `func` is supported. Valid values: `true` (supported), `false` (not supported).
 * @method string getDefault() Obtain Default value
 * @method void setDefault(string $Default) Set Default value
 * @method string getDescription() Obtain Parameter description
 * @method void setDescription(string $Description) Set Parameter description
 * @method string getCurrentValue() Obtain Current value of the parameter
 * @method void setCurrentValue(string $CurrentValue) Set Current value of the parameter
 * @method integer getNeedReboot() Obtain Whether to restart the database for the modified parameters to take effect. Valid values:  `0` (no), `1` (yes).
 * @method void setNeedReboot(integer $NeedReboot) Set Whether to restart the database for the modified parameters to take effect. Valid values:  `0` (no), `1` (yes).
 * @method string getMax() Obtain Maximum value of the parameter
 * @method void setMax(string $Max) Set Maximum value of the parameter
 * @method string getMin() Obtain Minimum value of the parameter
 * @method void setMin(string $Min) Set Minimum value of the parameter
 * @method array getEnumValue() Obtain Optional enumerated values of the parameter. if it is a non-enumerated value, it is empty.
 * @method void setEnumValue(array $EnumValue) Set Optional enumerated values of the parameter. if it is a non-enumerated value, it is empty.
 * @method integer getIsGlobal() Obtain Valid values: `1` (global parameter),  `0`  (non-global parameter).
 * @method void setIsGlobal(integer $IsGlobal) Set Valid values: `1` (global parameter),  `0`  (non-global parameter).
 * @method string getMatchType() Obtain The match type. Valid value: `multiVal`.
 * @method void setMatchType(string $MatchType) Set The match type. Valid value: `multiVal`.
 * @method string getMatchValue() Obtain Match values, which will be separated by comma when `MatchType` is `multiVal`.
 * @method void setMatchValue(string $MatchValue) Set Match values, which will be separated by comma when `MatchType` is `multiVal`.
 * @method boolean getIsFunc() Obtain true - indicates a formula. false - indicates it is not a formula.
 * @method void setIsFunc(boolean $IsFunc) Set true - indicates a formula. false - indicates it is not a formula.
 * @method string getFunc() Obtain Specifies that when the parameter is set as a formula, Func returns the set formula content.
 * @method void setFunc(string $Func) Set Specifies that when the parameter is set as a formula, Func returns the set formula content.
 * @method ModifiableInfo getModifiableInfo() Obtain Whether the parameter is modifiable.
 * @method void setModifiableInfo(ModifiableInfo $ModifiableInfo) Set Whether the parameter is modifiable.
 * @method string getFuncPattern() Obtain The default formula style of parameters that support formulas.
 * @method void setFuncPattern(string $FuncPattern) Set The default formula style of parameters that support formulas.
 */
class ParamDetail extends AbstractModel
{
    /**
     * @var string Parameter name
     */
    public $ParamName;

    /**
     * @var string Parameter type. Valid values:  `integer`, `enum`, `float`, `string`, `func`.
     */
    public $ParamType;

    /**
     * @var boolean Whether `func` is supported. Valid values: `true` (supported), `false` (not supported).
     */
    public $SupportFunc;

    /**
     * @var string Default value
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
     * @var integer Whether to restart the database for the modified parameters to take effect. Valid values:  `0` (no), `1` (yes).
     */
    public $NeedReboot;

    /**
     * @var string Maximum value of the parameter
     */
    public $Max;

    /**
     * @var string Minimum value of the parameter
     */
    public $Min;

    /**
     * @var array Optional enumerated values of the parameter. if it is a non-enumerated value, it is empty.
     */
    public $EnumValue;

    /**
     * @var integer Valid values: `1` (global parameter),  `0`  (non-global parameter).
     */
    public $IsGlobal;

    /**
     * @var string The match type. Valid value: `multiVal`.
     */
    public $MatchType;

    /**
     * @var string Match values, which will be separated by comma when `MatchType` is `multiVal`.
     */
    public $MatchValue;

    /**
     * @var boolean true - indicates a formula. false - indicates it is not a formula.
     */
    public $IsFunc;

    /**
     * @var string Specifies that when the parameter is set as a formula, Func returns the set formula content.
     */
    public $Func;

    /**
     * @var ModifiableInfo Whether the parameter is modifiable.
     */
    public $ModifiableInfo;

    /**
     * @var string The default formula style of parameters that support formulas.
     */
    public $FuncPattern;

    /**
     * @param string $ParamName Parameter name
     * @param string $ParamType Parameter type. Valid values:  `integer`, `enum`, `float`, `string`, `func`.
     * @param boolean $SupportFunc Whether `func` is supported. Valid values: `true` (supported), `false` (not supported).
     * @param string $Default Default value
     * @param string $Description Parameter description
     * @param string $CurrentValue Current value of the parameter
     * @param integer $NeedReboot Whether to restart the database for the modified parameters to take effect. Valid values:  `0` (no), `1` (yes).
     * @param string $Max Maximum value of the parameter
     * @param string $Min Minimum value of the parameter
     * @param array $EnumValue Optional enumerated values of the parameter. if it is a non-enumerated value, it is empty.
     * @param integer $IsGlobal Valid values: `1` (global parameter),  `0`  (non-global parameter).
     * @param string $MatchType The match type. Valid value: `multiVal`.
     * @param string $MatchValue Match values, which will be separated by comma when `MatchType` is `multiVal`.
     * @param boolean $IsFunc true - indicates a formula. false - indicates it is not a formula.
     * @param string $Func Specifies that when the parameter is set as a formula, Func returns the set formula content.
     * @param ModifiableInfo $ModifiableInfo Whether the parameter is modifiable.
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("SupportFunc",$param) and $param["SupportFunc"] !== null) {
            $this->SupportFunc = $param["SupportFunc"];
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

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("MatchValue",$param) and $param["MatchValue"] !== null) {
            $this->MatchValue = $param["MatchValue"];
        }

        if (array_key_exists("IsFunc",$param) and $param["IsFunc"] !== null) {
            $this->IsFunc = $param["IsFunc"];
        }

        if (array_key_exists("Func",$param) and $param["Func"] !== null) {
            $this->Func = $param["Func"];
        }

        if (array_key_exists("ModifiableInfo",$param) and $param["ModifiableInfo"] !== null) {
            $this->ModifiableInfo = new ModifiableInfo();
            $this->ModifiableInfo->deserialize($param["ModifiableInfo"]);
        }

        if (array_key_exists("FuncPattern",$param) and $param["FuncPattern"] !== null) {
            $this->FuncPattern = $param["FuncPattern"];
        }
    }
}
