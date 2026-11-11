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
 * Description of the instance parameter in Multi type
 *
 * @method string getParamName() Obtain <p>Parameter name.</p>
 * @method void setParamName(string $ParamName) Set <p>Parameter name.</p>
 * @method string getValueType() Obtain <p>Parameter type. For example: multi.</p>
 * @method void setValueType(string $ValueType) Set <p>Parameter type. For example: multi.</p>
 * @method string getNeedRestart() Obtain <p>Whether restart is required after parameter modification.</p><ul><li>true: required.</li><li>false: not required.</li></ul>
 * @method void setNeedRestart(string $NeedRestart) Set <p>Whether restart is required after parameter modification.</p><ul><li>true: required.</li><li>false: not required.</li></ul>
 * @method string getDefaultValue() Obtain <p>Default parameter value.</p>
 * @method void setDefaultValue(string $DefaultValue) Set <p>Default parameter value.</p>
 * @method string getCurrentValue() Obtain <p>Current running parameter value.</p>
 * @method void setCurrentValue(string $CurrentValue) Set <p>Current running parameter value.</p>
 * @method string getTips() Obtain <p>Parameter description.</p>
 * @method void setTips(string $Tips) Set <p>Parameter description.</p>
 * @method array getEnumValue() Obtain <p>Parameter enumeration value.</p>
 * @method void setEnumValue(array $EnumValue) Set <p>Parameter enumeration value.</p>
 * @method integer getStatus() Obtain <p>Parameter modification status.</p><ul><li>1: Modifying.</li><li>2: Modified.</li></ul>
 * @method void setStatus(integer $Status) Set <p>Parameter modification status.</p><ul><li>1: Modifying.</li><li>2: Modified.</li></ul>
 * @method string getParamType() Obtain <p>Parameter type</p><p>Enumeration values:</p><ul><li>redis: parameters supported by cache nodes</li><li>redis-interface: parameters supported by proxy</li><li>tendis: parameters supported by tendis</li></ul>
 * @method void setParamType(string $ParamType) Set <p>Parameter type</p><p>Enumeration values:</p><ul><li>redis: parameters supported by cache nodes</li><li>redis-interface: parameters supported by proxy</li><li>tendis: parameters supported by tendis</li></ul>
 * @method boolean getFeatureSupported() Obtain <p>Whether the current instance supports this feature</p>
 * @method void setFeatureSupported(boolean $FeatureSupported) Set <p>Whether the current instance supports this feature</p>
 * @method string getNewFeatureOnlineTime() Obtain <p>New feature launch date</p><p>Parameter format: time format YYYY-MM-DD</p>
 * @method void setNewFeatureOnlineTime(string $NewFeatureOnlineTime) Set <p>New feature launch date</p><p>Parameter format: time format YYYY-MM-DD</p>
 * @method string getPattern() Obtain <p>Regular expression validation rule</p>
 * @method void setPattern(string $Pattern) Set <p>Regular expression validation rule</p>
 * @method string getInputDescription() Obtain <p>Input format description</p>
 * @method void setInputDescription(string $InputDescription) Set <p>Input format description</p>
 */
class InstanceMultiParam extends AbstractModel
{
    /**
     * @var string <p>Parameter name.</p>
     */
    public $ParamName;

    /**
     * @var string <p>Parameter type. For example: multi.</p>
     */
    public $ValueType;

    /**
     * @var string <p>Whether restart is required after parameter modification.</p><ul><li>true: required.</li><li>false: not required.</li></ul>
     */
    public $NeedRestart;

    /**
     * @var string <p>Default parameter value.</p>
     */
    public $DefaultValue;

    /**
     * @var string <p>Current running parameter value.</p>
     */
    public $CurrentValue;

    /**
     * @var string <p>Parameter description.</p>
     */
    public $Tips;

    /**
     * @var array <p>Parameter enumeration value.</p>
     */
    public $EnumValue;

    /**
     * @var integer <p>Parameter modification status.</p><ul><li>1: Modifying.</li><li>2: Modified.</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Parameter type</p><p>Enumeration values:</p><ul><li>redis: parameters supported by cache nodes</li><li>redis-interface: parameters supported by proxy</li><li>tendis: parameters supported by tendis</li></ul>
     */
    public $ParamType;

    /**
     * @var boolean <p>Whether the current instance supports this feature</p>
     */
    public $FeatureSupported;

    /**
     * @var string <p>New feature launch date</p><p>Parameter format: time format YYYY-MM-DD</p>
     */
    public $NewFeatureOnlineTime;

    /**
     * @var string <p>Regular expression validation rule</p>
     */
    public $Pattern;

    /**
     * @var string <p>Input format description</p>
     */
    public $InputDescription;

    /**
     * @param string $ParamName <p>Parameter name.</p>
     * @param string $ValueType <p>Parameter type. For example: multi.</p>
     * @param string $NeedRestart <p>Whether restart is required after parameter modification.</p><ul><li>true: required.</li><li>false: not required.</li></ul>
     * @param string $DefaultValue <p>Default parameter value.</p>
     * @param string $CurrentValue <p>Current running parameter value.</p>
     * @param string $Tips <p>Parameter description.</p>
     * @param array $EnumValue <p>Parameter enumeration value.</p>
     * @param integer $Status <p>Parameter modification status.</p><ul><li>1: Modifying.</li><li>2: Modified.</li></ul>
     * @param string $ParamType <p>Parameter type</p><p>Enumeration values:</p><ul><li>redis: parameters supported by cache nodes</li><li>redis-interface: parameters supported by proxy</li><li>tendis: parameters supported by tendis</li></ul>
     * @param boolean $FeatureSupported <p>Whether the current instance supports this feature</p>
     * @param string $NewFeatureOnlineTime <p>New feature launch date</p><p>Parameter format: time format YYYY-MM-DD</p>
     * @param string $Pattern <p>Regular expression validation rule</p>
     * @param string $InputDescription <p>Input format description</p>
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

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }

        if (array_key_exists("EnumValue",$param) and $param["EnumValue"] !== null) {
            $this->EnumValue = $param["EnumValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("FeatureSupported",$param) and $param["FeatureSupported"] !== null) {
            $this->FeatureSupported = $param["FeatureSupported"];
        }

        if (array_key_exists("NewFeatureOnlineTime",$param) and $param["NewFeatureOnlineTime"] !== null) {
            $this->NewFeatureOnlineTime = $param["NewFeatureOnlineTime"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("InputDescription",$param) and $param["InputDescription"] !== null) {
            $this->InputDescription = $param["InputDescription"];
        }
    }
}
