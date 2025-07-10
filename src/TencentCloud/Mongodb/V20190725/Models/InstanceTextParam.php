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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Collection of modifiable instance parameters whose values are of the Text type.
 *
 * @method string getCurrentValue() Obtain Current parameter value.
 * @method void setCurrentValue(string $CurrentValue) Set Current parameter value.
 * @method string getDefaultValue() Obtain Default parameter value.
 * @method void setDefaultValue(string $DefaultValue) Set Default parameter value.
 * @method string getNeedRestart() Obtain Whether a restart is required after the parameter values are modified.
 * @method void setNeedRestart(string $NeedRestart) Set Whether a restart is required after the parameter values are modified.
 * @method string getParamName() Obtain Parameter name.
 * @method void setParamName(string $ParamName) Set Parameter name.
 * @method string getTextValue() Obtain Corresponding values of the Text-type parameters.
 * @method void setTextValue(string $TextValue) Set Corresponding values of the Text-type parameters.
 * @method array getTips() Obtain Parameter description.
 * @method void setTips(array $Tips) Set Parameter description.
 * @method string getValueType() Obtain Parameter type description.
 * @method void setValueType(string $ValueType) Set Parameter type description.
 * @method string getStatus() Obtain Whether the parameter values are used during running.
 - 1. parameter values used during running.
 - 0: parameter values not used during running.
 * @method void setStatus(string $Status) Set Whether the parameter values are used during running.
 - 1. parameter values used during running.
 - 0: parameter values not used during running.
 */
class InstanceTextParam extends AbstractModel
{
    /**
     * @var string Current parameter value.
     */
    public $CurrentValue;

    /**
     * @var string Default parameter value.
     */
    public $DefaultValue;

    /**
     * @var string Whether a restart is required after the parameter values are modified.
     */
    public $NeedRestart;

    /**
     * @var string Parameter name.
     */
    public $ParamName;

    /**
     * @var string Corresponding values of the Text-type parameters.
     */
    public $TextValue;

    /**
     * @var array Parameter description.
     */
    public $Tips;

    /**
     * @var string Parameter type description.
     */
    public $ValueType;

    /**
     * @var string Whether the parameter values are used during running.
 - 1. parameter values used during running.
 - 0: parameter values not used during running.
     */
    public $Status;

    /**
     * @param string $CurrentValue Current parameter value.
     * @param string $DefaultValue Default parameter value.
     * @param string $NeedRestart Whether a restart is required after the parameter values are modified.
     * @param string $ParamName Parameter name.
     * @param string $TextValue Corresponding values of the Text-type parameters.
     * @param array $Tips Parameter description.
     * @param string $ValueType Parameter type description.
     * @param string $Status Whether the parameter values are used during running.
 - 1. parameter values used during running.
 - 0: parameter values not used during running.
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

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("TextValue",$param) and $param["TextValue"] !== null) {
            $this->TextValue = $param["TextValue"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
