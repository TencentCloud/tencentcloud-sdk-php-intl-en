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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The collection of modifiable text parameters of an instance.
 *
 * @method string getCurrentValue() Obtain Current value (not in use)
 * @method void setCurrentValue(string $CurrentValue) Set Current value (not in use)
 * @method string getDefaultValue() Obtain Default value (not in use)
 * @method void setDefaultValue(string $DefaultValue) Set Default value (not in use)
 * @method string getNeedRestart() Obtain Whether to restart the instance for the parameter to take effect (not in use)
 * @method void setNeedRestart(string $NeedRestart) Set Whether to restart the instance for the parameter to take effect (not in use)
 * @method string getParamName() Obtain Parameter name (not in use)
 * @method void setParamName(string $ParamName) Set Parameter name (not in use)
 * @method string getTextValue() Obtain Acceptable values (not in use)
 * @method void setTextValue(string $TextValue) Set Acceptable values (not in use)
 * @method array getTips() Obtain Parameter description (not in use)
 * @method void setTips(array $Tips) Set Parameter description (not in use)
 * @method string getValueType() Obtain Data type of the parameter (not in use)
 * @method void setValueType(string $ValueType) Set Data type of the parameter (not in use)
 * @method string getStatus() Obtain Whether the TencentDB for MongoDB console has pulled parameter information successfully (not in use)
 * @method void setStatus(string $Status) Set Whether the TencentDB for MongoDB console has pulled parameter information successfully (not in use)
 */
class InstanceTextParam extends AbstractModel
{
    /**
     * @var string Current value (not in use)
     */
    public $CurrentValue;

    /**
     * @var string Default value (not in use)
     */
    public $DefaultValue;

    /**
     * @var string Whether to restart the instance for the parameter to take effect (not in use)
     */
    public $NeedRestart;

    /**
     * @var string Parameter name (not in use)
     */
    public $ParamName;

    /**
     * @var string Acceptable values (not in use)
     */
    public $TextValue;

    /**
     * @var array Parameter description (not in use)
     */
    public $Tips;

    /**
     * @var string Data type of the parameter (not in use)
     */
    public $ValueType;

    /**
     * @var string Whether the TencentDB for MongoDB console has pulled parameter information successfully (not in use)
     */
    public $Status;

    /**
     * @param string $CurrentValue Current value (not in use)
     * @param string $DefaultValue Default value (not in use)
     * @param string $NeedRestart Whether to restart the instance for the parameter to take effect (not in use)
     * @param string $ParamName Parameter name (not in use)
     * @param string $TextValue Acceptable values (not in use)
     * @param array $Tips Parameter description (not in use)
     * @param string $ValueType Data type of the parameter (not in use)
     * @param string $Status Whether the TencentDB for MongoDB console has pulled parameter information successfully (not in use)
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
