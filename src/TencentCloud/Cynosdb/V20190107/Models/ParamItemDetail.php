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
 * Instance parameter information
 *
 * @method string getCurrentValue() Obtain <p>Current value</p>
 * @method void setCurrentValue(string $CurrentValue) Set <p>Current value</p>
 * @method string getDefault() Obtain <p>Default value</p>
 * @method void setDefault(string $Default) Set <p>Default value</p>
 * @method array getEnumValue() Obtain <p>Optional enumerated value of the parameter. If it is a non-enumerated value, it is empty.</p>
 * @method void setEnumValue(array $EnumValue) Set <p>Optional enumerated value of the parameter. If it is a non-enumerated value, it is empty.</p>
 * @method integer getIsGlobal() Obtain <p>1: Global parameter, 0: Non-global parameter</p>
 * @method void setIsGlobal(integer $IsGlobal) Set <p>1: Global parameter, 0: Non-global parameter</p>
 * @method string getMax() Obtain <p>Maximum value</p>
 * @method void setMax(string $Max) Set <p>Maximum value</p>
 * @method string getMin() Obtain <p>Minimum value</p>
 * @method void setMin(string $Min) Set <p>Minimum value</p>
 * @method integer getNeedReboot() Obtain <p>After modifying parameters, whether database restart is required to take effect. 0-no restart required, 1-restart required.</p>
 * @method void setNeedReboot(integer $NeedReboot) Set <p>After modifying parameters, whether database restart is required to take effect. 0-no restart required, 1-restart required.</p>
 * @method string getParamName() Obtain <p>Parameter name</p>
 * @method void setParamName(string $ParamName) Set <p>Parameter name</p>
 * @method string getParamType() Obtain <p>Parameter type: integer, enum, float, string, func</p>
 * @method void setParamType(string $ParamType) Set <p>Parameter type: integer, enum, float, string, func</p>
 * @method ModifiableInfo getModifiableInfo() Obtain <p>Whether the parameter is modifiable</p>
 * @method void setModifiableInfo(ModifiableInfo $ModifiableInfo) Set <p>Whether the parameter is modifiable</p>
 * @method string getDescription() Obtain <p>Parameter description</p>
 * @method void setDescription(string $Description) Set <p>Parameter description</p>
 * @method boolean getIsFunc() Obtain <p>Whether the type is formula</p>
 * @method void setIsFunc(boolean $IsFunc) Set <p>Whether the type is formula</p>
 * @method string getFunc() Obtain <p>Parameter configuration formula</p>
 * @method void setFunc(string $Func) Set <p>Parameter configuration formula</p>
 * @method string getFuncPattern() Obtain <p>Default formula style for parameters that support formulas</p>
 * @method void setFuncPattern(string $FuncPattern) Set <p>Default formula style for parameters that support formulas</p>
 */
class ParamItemDetail extends AbstractModel
{
    /**
     * @var string <p>Current value</p>
     */
    public $CurrentValue;

    /**
     * @var string <p>Default value</p>
     */
    public $Default;

    /**
     * @var array <p>Optional enumerated value of the parameter. If it is a non-enumerated value, it is empty.</p>
     */
    public $EnumValue;

    /**
     * @var integer <p>1: Global parameter, 0: Non-global parameter</p>
     */
    public $IsGlobal;

    /**
     * @var string <p>Maximum value</p>
     */
    public $Max;

    /**
     * @var string <p>Minimum value</p>
     */
    public $Min;

    /**
     * @var integer <p>After modifying parameters, whether database restart is required to take effect. 0-no restart required, 1-restart required.</p>
     */
    public $NeedReboot;

    /**
     * @var string <p>Parameter name</p>
     */
    public $ParamName;

    /**
     * @var string <p>Parameter type: integer, enum, float, string, func</p>
     */
    public $ParamType;

    /**
     * @var ModifiableInfo <p>Whether the parameter is modifiable</p>
     */
    public $ModifiableInfo;

    /**
     * @var string <p>Parameter description</p>
     */
    public $Description;

    /**
     * @var boolean <p>Whether the type is formula</p>
     */
    public $IsFunc;

    /**
     * @var string <p>Parameter configuration formula</p>
     */
    public $Func;

    /**
     * @var string <p>Default formula style for parameters that support formulas</p>
     */
    public $FuncPattern;

    /**
     * @param string $CurrentValue <p>Current value</p>
     * @param string $Default <p>Default value</p>
     * @param array $EnumValue <p>Optional enumerated value of the parameter. If it is a non-enumerated value, it is empty.</p>
     * @param integer $IsGlobal <p>1: Global parameter, 0: Non-global parameter</p>
     * @param string $Max <p>Maximum value</p>
     * @param string $Min <p>Minimum value</p>
     * @param integer $NeedReboot <p>After modifying parameters, whether database restart is required to take effect. 0-no restart required, 1-restart required.</p>
     * @param string $ParamName <p>Parameter name</p>
     * @param string $ParamType <p>Parameter type: integer, enum, float, string, func</p>
     * @param ModifiableInfo $ModifiableInfo <p>Whether the parameter is modifiable</p>
     * @param string $Description <p>Parameter description</p>
     * @param boolean $IsFunc <p>Whether the type is formula</p>
     * @param string $Func <p>Parameter configuration formula</p>
     * @param string $FuncPattern <p>Default formula style for parameters that support formulas</p>
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

        if (array_key_exists("ModifiableInfo",$param) and $param["ModifiableInfo"] !== null) {
            $this->ModifiableInfo = new ModifiableInfo();
            $this->ModifiableInfo->deserialize($param["ModifiableInfo"]);
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
