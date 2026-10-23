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
 * Parameter template details
 *
 * @method string getCurrentValue() Obtain Current value
 * @method void setCurrentValue(string $CurrentValue) Set Current value
 * @method string getDefault() Obtain Default value
 * @method void setDefault(string $Default) Set Default value
 * @method array getEnumValue() Obtain Value type collection that is optional when the parameter type is enum
 * @method void setEnumValue(array $EnumValue) Set Value type collection that is optional when the parameter type is enum
 * @method string getMax() Obtain Maximum value when the parameter type is float/integer.
 * @method void setMax(string $Max) Set Maximum value when the parameter type is float/integer.
 * @method string getMin() Obtain Minimum value when the parameter type is float/integer
 * @method void setMin(string $Min) Set Minimum value when the parameter type is float/integer
 * @method string getParamName() Obtain Parameter name.
 * @method void setParamName(string $ParamName) Set Parameter name.
 * @method integer getNeedReboot() Obtain Whether restart is required
 * @method void setNeedReboot(integer $NeedReboot) Set Whether restart is required
 * @method string getDescription() Obtain Parameter description
 * @method void setDescription(string $Description) Set Parameter description
 * @method string getParamType() Obtain Parameter type. Valid values: integer, float, string, enum.
 * @method void setParamType(string $ParamType) Set Parameter type. Valid values: integer, float, string, enum.
 */
class TemplateParamInfo extends AbstractModel
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
     * @var array Value type collection that is optional when the parameter type is enum
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
     * @var integer Whether restart is required
     */
    public $NeedReboot;

    /**
     * @var string Parameter description
     */
    public $Description;

    /**
     * @var string Parameter type. Valid values: integer, float, string, enum.
     */
    public $ParamType;

    /**
     * @param string $CurrentValue Current value
     * @param string $Default Default value
     * @param array $EnumValue Value type collection that is optional when the parameter type is enum
     * @param string $Max Maximum value when the parameter type is float/integer.
     * @param string $Min Minimum value when the parameter type is float/integer
     * @param string $ParamName Parameter name.
     * @param integer $NeedReboot Whether restart is required
     * @param string $Description Parameter description
     * @param string $ParamType Parameter type. Valid values: integer, float, string, enum.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }
    }
}
