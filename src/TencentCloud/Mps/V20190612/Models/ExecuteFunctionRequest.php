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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExecuteFunction request structure.
 *
 * @method string getFunctionName() Obtain Backend interface name invoked.
 * @method void setFunctionName(string $FunctionName) Set Backend interface name invoked.
 * @method string getFunctionArg() Obtain API parameter, coordinate with the backend for the specific parameter format when calling.
 * @method void setFunctionArg(string $FunctionArg) Set API parameter, coordinate with the backend for the specific parameter format when calling.
 */
class ExecuteFunctionRequest extends AbstractModel
{
    /**
     * @var string Backend interface name invoked.
     */
    public $FunctionName;

    /**
     * @var string API parameter, coordinate with the backend for the specific parameter format when calling.
     */
    public $FunctionArg;

    /**
     * @param string $FunctionName Backend interface name invoked.
     * @param string $FunctionArg API parameter, coordinate with the backend for the specific parameter format when calling.
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionArg",$param) and $param["FunctionArg"] !== null) {
            $this->FunctionArg = $param["FunctionArg"];
        }
    }
}
