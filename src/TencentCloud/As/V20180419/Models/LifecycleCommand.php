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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Remote command execution object.
 *
 * @method string getCommandId() Obtain Remote command ID. this item is required if you select to execute command.
 * @method void setCommandId(string $CommandId) Set Remote command ID. this item is required if you select to execute command.
 * @method string getParameters() Obtain Custom parameter. field type is json encoded string, for example: {"varA": "222"}.
key specifies the custom parameter name, and value specifies the default. both are string type.
If the parameter value is not provided, the DefaultParameters of Command will be used to replace it.
Custom parameters support a maximum of 20 entries. the custom parameter name must meet the following standard: number of characters has a cap of 64, value range [a-zA-Z0-9-_].
 * @method void setParameters(string $Parameters) Set Custom parameter. field type is json encoded string, for example: {"varA": "222"}.
key specifies the custom parameter name, and value specifies the default. both are string type.
If the parameter value is not provided, the DefaultParameters of Command will be used to replace it.
Custom parameters support a maximum of 20 entries. the custom parameter name must meet the following standard: number of characters has a cap of 64, value range [a-zA-Z0-9-_].
 */
class LifecycleCommand extends AbstractModel
{
    /**
     * @var string Remote command ID. this item is required if you select to execute command.
     */
    public $CommandId;

    /**
     * @var string Custom parameter. field type is json encoded string, for example: {"varA": "222"}.
key specifies the custom parameter name, and value specifies the default. both are string type.
If the parameter value is not provided, the DefaultParameters of Command will be used to replace it.
Custom parameters support a maximum of 20 entries. the custom parameter name must meet the following standard: number of characters has a cap of 64, value range [a-zA-Z0-9-_].
     */
    public $Parameters;

    /**
     * @param string $CommandId Remote command ID. this item is required if you select to execute command.
     * @param string $Parameters Custom parameter. field type is json encoded string, for example: {"varA": "222"}.
key specifies the custom parameter name, and value specifies the default. both are string type.
If the parameter value is not provided, the DefaultParameters of Command will be used to replace it.
Custom parameters support a maximum of 20 entries. the custom parameter name must meet the following standard: number of characters has a cap of 64, value range [a-zA-Z0-9-_].
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
        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }
    }
}
