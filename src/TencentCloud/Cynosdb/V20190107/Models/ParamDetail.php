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
 * Detailed description of instance parameters
 *
 * @method string getParamName() Obtain Parameter name.
 * @method void setParamName(string $ParamName) Set Parameter name.
 * @method string getParamType() Obtain Parameter type: integer, enum, float, string, func
 * @method void setParamType(string $ParamType) Set Parameter type: integer, enum, float, string, func
 * @method boolean getSupportFunc() Obtain true: supports "func"; false: no formula support
 * @method void setSupportFunc(boolean $SupportFunc) Set true: supports "func"; false: no formula support
 * @method string getDefault() Obtain Default value
 * @method void setDefault(string $Default) Set Default value
 * @method string getDescription() Obtain Parameter description
 * @method void setDescription(string $Description) Set Parameter description
 * @method string getCurrentValue() Obtain Current parameter value
 * @method void setCurrentValue(string $CurrentValue) Set Current parameter value
 * @method integer getNeedReboot() Obtain Whether database restart is required after modifying parameters to take effect. 0: no restart required; 1: restart required.
 * @method void setNeedReboot(integer $NeedReboot) Set Whether database restart is required after modifying parameters to take effect. 0: no restart required; 1: restart required.
 * @method string getMax() Obtain Maximum value allowed for the parameter
 * @method void setMax(string $Max) Set Maximum value allowed for the parameter
 * @method string getMin() Obtain Minimum allowed parameter value
 * @method void setMin(string $Min) Set Minimum allowed parameter value
 * @method array getEnumValue() Obtain Optional enumerated values of the parameter. If it is a non-enumerated value, this parameter is empty
 * @method void setEnumValue(array $EnumValue) Set Optional enumerated values of the parameter. If it is a non-enumerated value, this parameter is empty
 * @method integer getIsGlobal() Obtain 1: global parameter, 0: non-global parameter
 * @method void setIsGlobal(integer $IsGlobal) Set 1: global parameter, 0: non-global parameter
 * @method string getMatchType() Obtain Match type. multiVal
 * @method void setMatchType(string $MatchType) Set Match type. multiVal
 * @method string getMatchValue() Obtain Match target value. If multiVal is set, separate each key with a comma.
 * @method void setMatchValue(string $MatchValue) Set Match target value. If multiVal is set, separate each key with a comma.
 * @method boolean getIsFunc() Obtain true: formula; false: non-formula
 * @method void setIsFunc(boolean $IsFunc) Set true: formula; false: non-formula
 * @method string getFunc() Obtain When the parameter is set to a formula, Func returns the set formula content.
 * @method void setFunc(string $Func) Set When the parameter is set to a formula, Func returns the set formula content.
 * @method ModifiableInfo getModifiableInfo() Obtain Whether the parameter is modifiable
 * @method void setModifiableInfo(ModifiableInfo $ModifiableInfo) Set Whether the parameter is modifiable
 * @method string getFuncPattern() Obtain Default formula style for parameters that support formulas
 * @method void setFuncPattern(string $FuncPattern) Set Default formula style for parameters that support formulas
 */
class ParamDetail extends AbstractModel
{
    /**
     * @var string Parameter name.
     */
    public $ParamName;

    /**
     * @var string Parameter type: integer, enum, float, string, func
     */
    public $ParamType;

    /**
     * @var boolean true: supports "func"; false: no formula support
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
     * @var string Current parameter value
     */
    public $CurrentValue;

    /**
     * @var integer Whether database restart is required after modifying parameters to take effect. 0: no restart required; 1: restart required.
     */
    public $NeedReboot;

    /**
     * @var string Maximum value allowed for the parameter
     */
    public $Max;

    /**
     * @var string Minimum allowed parameter value
     */
    public $Min;

    /**
     * @var array Optional enumerated values of the parameter. If it is a non-enumerated value, this parameter is empty
     */
    public $EnumValue;

    /**
     * @var integer 1: global parameter, 0: non-global parameter
     */
    public $IsGlobal;

    /**
     * @var string Match type. multiVal
     */
    public $MatchType;

    /**
     * @var string Match target value. If multiVal is set, separate each key with a comma.
     */
    public $MatchValue;

    /**
     * @var boolean true: formula; false: non-formula
     */
    public $IsFunc;

    /**
     * @var string When the parameter is set to a formula, Func returns the set formula content.
     */
    public $Func;

    /**
     * @var ModifiableInfo Whether the parameter is modifiable
     */
    public $ModifiableInfo;

    /**
     * @var string Default formula style for parameters that support formulas
     */
    public $FuncPattern;

    /**
     * @param string $ParamName Parameter name.
     * @param string $ParamType Parameter type: integer, enum, float, string, func
     * @param boolean $SupportFunc true: supports "func"; false: no formula support
     * @param string $Default Default value
     * @param string $Description Parameter description
     * @param string $CurrentValue Current parameter value
     * @param integer $NeedReboot Whether database restart is required after modifying parameters to take effect. 0: no restart required; 1: restart required.
     * @param string $Max Maximum value allowed for the parameter
     * @param string $Min Minimum allowed parameter value
     * @param array $EnumValue Optional enumerated values of the parameter. If it is a non-enumerated value, this parameter is empty
     * @param integer $IsGlobal 1: global parameter, 0: non-global parameter
     * @param string $MatchType Match type. multiVal
     * @param string $MatchValue Match target value. If multiVal is set, separate each key with a comma.
     * @param boolean $IsFunc true: formula; false: non-formula
     * @param string $Func When the parameter is set to a formula, Func returns the set formula content.
     * @param ModifiableInfo $ModifiableInfo Whether the parameter is modifiable
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
