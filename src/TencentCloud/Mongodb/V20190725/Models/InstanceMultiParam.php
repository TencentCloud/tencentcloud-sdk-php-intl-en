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
 * The collection of modifiable string parameters of an instance which are used to represent time ranges.
 *
 * @method string getCurrentValue() Obtain Current value
 * @method void setCurrentValue(string $CurrentValue) Set Current value
 * @method string getDefaultValue() Obtain Default value
 * @method void setDefaultValue(string $DefaultValue) Set Default value
 * @method array getEnumValue() Obtain Acceptable values
 * @method void setEnumValue(array $EnumValue) Set Acceptable values
 * @method string getNeedRestart() Obtain Whether to restart the instance for the parameter to take effect. Valid values: `1` (yes), `0` (no, which means the parameter setting takes effect immediately)
 * @method void setNeedRestart(string $NeedRestart) Set Whether to restart the instance for the parameter to take effect. Valid values: `1` (yes), `0` (no, which means the parameter setting takes effect immediately)
 * @method string getParamName() Obtain Parameter name
 * @method void setParamName(string $ParamName) Set Parameter name
 * @method integer getStatus() Obtain Whether `CurrentValue` is the parameter value actually in use. Valid values: `1` (yes), `0` (no)
 * @method void setStatus(integer $Status) Set Whether `CurrentValue` is the parameter value actually in use. Valid values: `1` (yes), `0` (no)
 * @method array getTips() Obtain Parameter description
 * @method void setTips(array $Tips) Set Parameter description
 * @method string getValueType() Obtain Data type of the current value. Default value: `multi`
 * @method void setValueType(string $ValueType) Set Data type of the current value. Default value: `multi`
 */
class InstanceMultiParam extends AbstractModel
{
    /**
     * @var string Current value
     */
    public $CurrentValue;

    /**
     * @var string Default value
     */
    public $DefaultValue;

    /**
     * @var array Acceptable values
     */
    public $EnumValue;

    /**
     * @var string Whether to restart the instance for the parameter to take effect. Valid values: `1` (yes), `0` (no, which means the parameter setting takes effect immediately)
     */
    public $NeedRestart;

    /**
     * @var string Parameter name
     */
    public $ParamName;

    /**
     * @var integer Whether `CurrentValue` is the parameter value actually in use. Valid values: `1` (yes), `0` (no)
     */
    public $Status;

    /**
     * @var array Parameter description
     */
    public $Tips;

    /**
     * @var string Data type of the current value. Default value: `multi`
     */
    public $ValueType;

    /**
     * @param string $CurrentValue Current value
     * @param string $DefaultValue Default value
     * @param array $EnumValue Acceptable values
     * @param string $NeedRestart Whether to restart the instance for the parameter to take effect. Valid values: `1` (yes), `0` (no, which means the parameter setting takes effect immediately)
     * @param string $ParamName Parameter name
     * @param integer $Status Whether `CurrentValue` is the parameter value actually in use. Valid values: `1` (yes), `0` (no)
     * @param array $Tips Parameter description
     * @param string $ValueType Data type of the current value. Default value: `multi`
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

        if (array_key_exists("EnumValue",$param) and $param["EnumValue"] !== null) {
            $this->EnumValue = $param["EnumValue"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }
    }
}
