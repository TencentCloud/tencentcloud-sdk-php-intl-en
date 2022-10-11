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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Remote command execution object.
 *
 * @method string getCommandId() Obtain Remote command ID. It’s required to execute a command.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCommandId(string $CommandId) Set Remote command ID. It’s required to execute a command.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParameters() Obtain Custom parameter. The field type is JSON encoded string. For example, {"varA": "222"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If this parameter is not specified, the `DefaultParameters` of `Command` is used.
Up to 20 customer parameters allowed. The parameter name can contain up to 64 characters, including [a-z], [A-Z], [0-9] and [-_].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParameters(string $Parameters) Set Custom parameter. The field type is JSON encoded string. For example, {"varA": "222"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If this parameter is not specified, the `DefaultParameters` of `Command` is used.
Up to 20 customer parameters allowed. The parameter name can contain up to 64 characters, including [a-z], [A-Z], [0-9] and [-_].
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LifecycleCommand extends AbstractModel
{
    /**
     * @var string Remote command ID. It’s required to execute a command.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CommandId;

    /**
     * @var string Custom parameter. The field type is JSON encoded string. For example, {"varA": "222"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If this parameter is not specified, the `DefaultParameters` of `Command` is used.
Up to 20 customer parameters allowed. The parameter name can contain up to 64 characters, including [a-z], [A-Z], [0-9] and [-_].
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Parameters;

    /**
     * @param string $CommandId Remote command ID. It’s required to execute a command.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Parameters Custom parameter. The field type is JSON encoded string. For example, {"varA": "222"}.
`key` is the name of the custom parameter and `value` is the default value. Both `key` and `value` are strings.
If this parameter is not specified, the `DefaultParameters` of `Command` is used.
Up to 20 customer parameters allowed. The parameter name can contain up to 64 characters, including [a-z], [A-Z], [0-9] and [-_].
Note: This field may return null, indicating that no valid values can be obtained.
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
