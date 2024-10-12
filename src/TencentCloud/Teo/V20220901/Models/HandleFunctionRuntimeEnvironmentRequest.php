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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HandleFunctionRuntimeEnvironment request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getFunctionId() Obtain Function ID.
 * @method void setFunctionId(string $FunctionId) Set Function ID.
 * @method string getOperation() Obtain Operation type. Valid values:
<li>setEnvironmentVariable: Set an environment variable. If the environment variable exists, it will be modified; otherwise, it will be added.</li>
<li>deleteEnvironmentVariable: Delete an environment variable.</li>
<li>clearEnvironmentVariable: Clear an environment variable.</li>
<li>resetEnvironmentVariable: Reset an environment variable.</li>
 * @method void setOperation(string $Operation) Set Operation type. Valid values:
<li>setEnvironmentVariable: Set an environment variable. If the environment variable exists, it will be modified; otherwise, it will be added.</li>
<li>deleteEnvironmentVariable: Delete an environment variable.</li>
<li>clearEnvironmentVariable: Clear an environment variable.</li>
<li>resetEnvironmentVariable: Reset an environment variable.</li>
 * @method array getEnvironmentVariables() Obtain Environment variable list. The runtime environment of a function supports up to 64 variables. This parameter is required when the value of Operation is setEnvironmentVariable, deleteEnvironmentVariable, or resetEnvironmentVariable.
 * @method void setEnvironmentVariables(array $EnvironmentVariables) Set Environment variable list. The runtime environment of a function supports up to 64 variables. This parameter is required when the value of Operation is setEnvironmentVariable, deleteEnvironmentVariable, or resetEnvironmentVariable.
 */
class HandleFunctionRuntimeEnvironmentRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Function ID.
     */
    public $FunctionId;

    /**
     * @var string Operation type. Valid values:
<li>setEnvironmentVariable: Set an environment variable. If the environment variable exists, it will be modified; otherwise, it will be added.</li>
<li>deleteEnvironmentVariable: Delete an environment variable.</li>
<li>clearEnvironmentVariable: Clear an environment variable.</li>
<li>resetEnvironmentVariable: Reset an environment variable.</li>
     */
    public $Operation;

    /**
     * @var array Environment variable list. The runtime environment of a function supports up to 64 variables. This parameter is required when the value of Operation is setEnvironmentVariable, deleteEnvironmentVariable, or resetEnvironmentVariable.
     */
    public $EnvironmentVariables;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $FunctionId Function ID.
     * @param string $Operation Operation type. Valid values:
<li>setEnvironmentVariable: Set an environment variable. If the environment variable exists, it will be modified; otherwise, it will be added.</li>
<li>deleteEnvironmentVariable: Delete an environment variable.</li>
<li>clearEnvironmentVariable: Clear an environment variable.</li>
<li>resetEnvironmentVariable: Reset an environment variable.</li>
     * @param array $EnvironmentVariables Environment variable list. The runtime environment of a function supports up to 64 variables. This parameter is required when the value of Operation is setEnvironmentVariable, deleteEnvironmentVariable, or resetEnvironmentVariable.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("EnvironmentVariables",$param) and $param["EnvironmentVariables"] !== null) {
            $this->EnvironmentVariables = [];
            foreach ($param["EnvironmentVariables"] as $key => $value){
                $obj = new FunctionEnvironmentVariable();
                $obj->deserialize($value);
                array_push($this->EnvironmentVariables, $obj);
            }
        }
    }
}
