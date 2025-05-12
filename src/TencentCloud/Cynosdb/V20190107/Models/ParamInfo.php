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
 * Parameter information
 *
 * @method string getCurrentValue() Obtain Current value
 * @method void setCurrentValue(string $CurrentValue) Set Current value
 * @method string getDefault() Obtain Default value
 * @method void setDefault(string $Default) Set Default value
 * @method array getEnumValue() Obtain If the parameter is of type enum/string/bool, the available options list.
 * @method void setEnumValue(array $EnumValue) Set If the parameter is of type enum/string/bool, the available options list.
 * @method string getMax() Obtain Maximum value when parameter type is `float` or `integer`.
 * @method void setMax(string $Max) Set Maximum value when parameter type is `float` or `integer`.
 * @method string getMin() Obtain Minimum value when parameter type is `float` or `integer`.
 * @method void setMin(string $Min) Set Minimum value when parameter type is `float` or `integer`.
 * @method string getParamName() Obtain Parameter name
 * @method void setParamName(string $ParamName) Set Parameter name
 * @method integer getNeedReboot() Obtain Whether to restart the instance for the modified parameters to take effect.
 * @method void setNeedReboot(integer $NeedReboot) Set Whether to restart the instance for the modified parameters to take effect.
 * @method string getParamType() Obtain Parameter type: `integer`, `float`, `string`, `enum`, `bool`.
 * @method void setParamType(string $ParamType) Set Parameter type: `integer`, `float`, `string`, `enum`, `bool`.
 * @method string getMatchType() Obtain Match type. Regex can be used when parameter type is `string`. Valid value: `multiVal`.
 * @method void setMatchType(string $MatchType) Set Match type. Regex can be used when parameter type is `string`. Valid value: `multiVal`.
 * @method string getMatchValue() Obtain Match values, which will be separated by semicolon when match type is `multiVal`.
 * @method void setMatchValue(string $MatchValue) Set Match values, which will be separated by semicolon when match type is `multiVal`.
 * @method string getDescription() Obtain Parameter description
 * @method void setDescription(string $Description) Set Parameter description
 * @method integer getIsGlobal() Obtain Whether it is a global parameter.
 * @method void setIsGlobal(integer $IsGlobal) Set Whether it is a global parameter.
 * @method ModifiableInfo getModifiableInfo() Obtain Whether the parameter is modifiable.
 * @method void setModifiableInfo(ModifiableInfo $ModifiableInfo) Set Whether the parameter is modifiable.
 * @method boolean getIsFunc() Obtain Whether it is a function.
 * @method void setIsFunc(boolean $IsFunc) Set Whether it is a function.
 * @method string getFunc() Obtain Function.
 * @method void setFunc(string $Func) Set Function.
 * @method string getFuncPattern() Obtain The default formula style of parameters that support formulas.
 * @method void setFuncPattern(string $FuncPattern) Set The default formula style of parameters that support formulas.
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
     * @var array If the parameter is of type enum/string/bool, the available options list.
     */
    public $EnumValue;

    /**
     * @var string Maximum value when parameter type is `float` or `integer`.
     */
    public $Max;

    /**
     * @var string Minimum value when parameter type is `float` or `integer`.
     */
    public $Min;

    /**
     * @var string Parameter name
     */
    public $ParamName;

    /**
     * @var integer Whether to restart the instance for the modified parameters to take effect.
     */
    public $NeedReboot;

    /**
     * @var string Parameter type: `integer`, `float`, `string`, `enum`, `bool`.
     */
    public $ParamType;

    /**
     * @var string Match type. Regex can be used when parameter type is `string`. Valid value: `multiVal`.
     */
    public $MatchType;

    /**
     * @var string Match values, which will be separated by semicolon when match type is `multiVal`.
     */
    public $MatchValue;

    /**
     * @var string Parameter description
     */
    public $Description;

    /**
     * @var integer Whether it is a global parameter.
     */
    public $IsGlobal;

    /**
     * @var ModifiableInfo Whether the parameter is modifiable.
     */
    public $ModifiableInfo;

    /**
     * @var boolean Whether it is a function.
     */
    public $IsFunc;

    /**
     * @var string Function.
     */
    public $Func;

    /**
     * @var string The default formula style of parameters that support formulas.
     */
    public $FuncPattern;

    /**
     * @param string $CurrentValue Current value
     * @param string $Default Default value
     * @param array $EnumValue If the parameter is of type enum/string/bool, the available options list.
     * @param string $Max Maximum value when parameter type is `float` or `integer`.
     * @param string $Min Minimum value when parameter type is `float` or `integer`.
     * @param string $ParamName Parameter name
     * @param integer $NeedReboot Whether to restart the instance for the modified parameters to take effect.
     * @param string $ParamType Parameter type: `integer`, `float`, `string`, `enum`, `bool`.
     * @param string $MatchType Match type. Regex can be used when parameter type is `string`. Valid value: `multiVal`.
     * @param string $MatchValue Match values, which will be separated by semicolon when match type is `multiVal`.
     * @param string $Description Parameter description
     * @param integer $IsGlobal Whether it is a global parameter.
     * @param ModifiableInfo $ModifiableInfo Whether the parameter is modifiable.
     * @param boolean $IsFunc Whether it is a function.
     * @param string $Func Function.
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
