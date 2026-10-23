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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter information.
 *
 * @method string getCurrentValue() Obtain Current value
 * @method void setCurrentValue(string $CurrentValue) Set Current value
 * @method string getDefault() Obtain Default value
 * @method void setDefault(string $Default) Set Default value
 * @method array getEnumValue() Obtain Available option list when the parameter is enum, string, or bool.
 * @method void setEnumValue(array $EnumValue) Set Available option list when the parameter is enum, string, or bool.
 * @method string getMax() Obtain Maximum value when the parameter type is float/integer.
 * @method void setMax(string $Max) Set Maximum value when the parameter type is float/integer.
 * @method string getMin() Obtain Minimum value when the parameter type is float/integer
 * @method void setMin(string $Min) Set Minimum value when the parameter type is float/integer
 * @method string getParamName() Obtain Parameter name.
 * @method void setParamName(string $ParamName) Set Parameter name.
 * @method integer getNeedReboot() Obtain Whether a restart is required.
 * @method void setNeedReboot(integer $NeedReboot) Set Whether a restart is required.
 * @method string getParamType() Obtain Parameter type: integer, float, string, enum, or bool.
 * @method void setParamType(string $ParamType) Set Parameter type: integer, float, string, enum, or bool.
 * @method string getMatchType() Obtain Match type. multiVal and regex are used when the parameter type is string.
 * @method void setMatchType(string $MatchType) Set Match type. multiVal and regex are used when the parameter type is string.
 * @method string getMatchValue() Obtain Match the target value. For multiVal, separate each key with a semicolon (;).
 * @method void setMatchValue(string $MatchValue) Set Match the target value. For multiVal, separate each key with a semicolon (;).
 * @method string getDescription() Obtain Parameter description.
 * @method void setDescription(string $Description) Set Parameter description.
 * @method integer getIsGlobal() Obtain Whether it is a global parameter
 * @method void setIsGlobal(integer $IsGlobal) Set Whether it is a global parameter
 * @method ModifiableInfo getModifiableInfo() Obtain Whether the parameter is modifiable
 * @method void setModifiableInfo(ModifiableInfo $ModifiableInfo) Set Whether the parameter is modifiable
 * @method boolean getIsFunc() Obtain Whether it is a function
 * @method void setIsFunc(boolean $IsFunc) Set Whether it is a function
 * @method string getFunc() Obtain Function
 * @method void setFunc(string $Func) Set Function
 * @method string getFuncPattern() Obtain Default formula style for parameters that support formulas
 * @method void setFuncPattern(string $FuncPattern) Set Default formula style for parameters that support formulas
 */
class ParamInfo extends AbstractModel
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
     * @var array Available option list when the parameter is enum, string, or bool.
     */
    public $EnumValue;

    /**
     * @var string Maximum value when the parameter type is float/integer.
     */
    public $Max;

    /**
     * @var string Minimum value when the parameter type is float/integer
     */
    public $Min;

    /**
     * @var string Parameter name.
     */
    public $ParamName;

    /**
     * @var integer Whether a restart is required.
     */
    public $NeedReboot;

    /**
     * @var string Parameter type: integer, float, string, enum, or bool.
     */
    public $ParamType;

    /**
     * @var string Match type. multiVal and regex are used when the parameter type is string.
     */
    public $MatchType;

    /**
     * @var string Match the target value. For multiVal, separate each key with a semicolon (;).
     */
    public $MatchValue;

    /**
     * @var string Parameter description.
     */
    public $Description;

    /**
     * @var integer Whether it is a global parameter
     */
    public $IsGlobal;

    /**
     * @var ModifiableInfo Whether the parameter is modifiable
     */
    public $ModifiableInfo;

    /**
     * @var boolean Whether it is a function
     */
    public $IsFunc;

    /**
     * @var string Function
     */
    public $Func;

    /**
     * @var string Default formula style for parameters that support formulas
     */
    public $FuncPattern;

    /**
     * @param string $CurrentValue Current value
     * @param string $Default Default value
     * @param array $EnumValue Available option list when the parameter is enum, string, or bool.
     * @param string $Max Maximum value when the parameter type is float/integer.
     * @param string $Min Minimum value when the parameter type is float/integer
     * @param string $ParamName Parameter name.
     * @param integer $NeedReboot Whether a restart is required.
     * @param string $ParamType Parameter type: integer, float, string, enum, or bool.
     * @param string $MatchType Match type. multiVal and regex are used when the parameter type is string.
     * @param string $MatchValue Match the target value. For multiVal, separate each key with a semicolon (;).
     * @param string $Description Parameter description.
     * @param integer $IsGlobal Whether it is a global parameter
     * @param ModifiableInfo $ModifiableInfo Whether the parameter is modifiable
     * @param boolean $IsFunc Whether it is a function
     * @param string $Func Function
     * @param string $FuncPattern Default formula style for parameters that support formulas
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

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("MatchValue",$param) and $param["MatchValue"] !== null) {
            $this->MatchValue = $param["MatchValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("ModifiableInfo",$param) and $param["ModifiableInfo"] !== null) {
            $this->ModifiableInfo = new ModifiableInfo();
            $this->ModifiableInfo->deserialize($param["ModifiableInfo"]);
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
