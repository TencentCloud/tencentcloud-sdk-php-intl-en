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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of the instance parameter in Enum type
 *
 * @method string getParamName() Obtain Parameter name
 * @method void setParamName(string $ParamName) Set Parameter name
 * @method string getValueType() Obtain Parameter type, such as `Enum`.
 * @method void setValueType(string $ValueType) Set Parameter type, such as `Enum`.
 * @method string getNeedRestart() Obtain Whether to restart the database after modifying the parameters. Valid values: - `true` (required) - `false` (not required)
 * @method void setNeedRestart(string $NeedRestart) Set Whether to restart the database after modifying the parameters. Valid values: - `true` (required) - `false` (not required)
 * @method string getDefaultValue() Obtain Default value of the parameter
 * @method void setDefaultValue(string $DefaultValue) Set Default value of the parameter
 * @method string getCurrentValue() Obtain Current value
 * @method void setCurrentValue(string $CurrentValue) Set Current value
 * @method string getTips() Obtain Description
 * @method void setTips(string $Tips) Set Description
 * @method array getEnumValue() Obtain Acceptable values for the parameter
 * @method void setEnumValue(array $EnumValue) Set Acceptable values for the parameter
 * @method integer getStatus() Obtain Parameter modification status. Valid values: - `1` (modifying) - `2` (modified)
 * @method void setStatus(integer $Status) Set Parameter modification status. Valid values: - `1` (modifying) - `2` (modified)
 */
class InstanceEnumParam extends AbstractModel
{
    /**
     * @var string Parameter name
     */
    public $ParamName;

    /**
     * @var string Parameter type, such as `Enum`.
     */
    public $ValueType;

    /**
     * @var string Whether to restart the database after modifying the parameters. Valid values: - `true` (required) - `false` (not required)
     */
    public $NeedRestart;

    /**
     * @var string Default value of the parameter
     */
    public $DefaultValue;

    /**
     * @var string Current value
     */
    public $CurrentValue;

    /**
     * @var string Description
     */
    public $Tips;

    /**
     * @var array Acceptable values for the parameter
     */
    public $EnumValue;

    /**
     * @var integer Parameter modification status. Valid values: - `1` (modifying) - `2` (modified)
     */
    public $Status;

    /**
     * @param string $ParamName Parameter name
     * @param string $ValueType Parameter type, such as `Enum`.
     * @param string $NeedRestart Whether to restart the database after modifying the parameters. Valid values: - `true` (required) - `false` (not required)
     * @param string $DefaultValue Default value of the parameter
     * @param string $CurrentValue Current value
     * @param string $Tips Description
     * @param array $EnumValue Acceptable values for the parameter
     * @param integer $Status Parameter modification status. Valid values: - `1` (modifying) - `2` (modified)
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
    }
}
