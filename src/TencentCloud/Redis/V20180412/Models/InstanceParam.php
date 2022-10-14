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
 * Instance parameter
 *
 * @method string getKey() Obtain Parameter name, such as “timeout”. For supported custom parameters, see <a href="https://www.tencentcloud.com/document/product/239/39796">Setting Instance Parameters</a>
 * @method void setKey(string $Key) Set Parameter name, such as “timeout”. For supported custom parameters, see <a href="https://www.tencentcloud.com/document/product/239/39796">Setting Instance Parameters</a>
 * @method string getValue() Obtain Current parameter value. For example, if you set the current value of “timeout” to 120 (in seconds), the client connections that remain idle longer than 120 seconds will be closed. For more information on parameter values, see <a href="https://www.tencentcloud.com/document/product/239/39796">Setting Instance Parameters</a>
 * @method void setValue(string $Value) Set Current parameter value. For example, if you set the current value of “timeout” to 120 (in seconds), the client connections that remain idle longer than 120 seconds will be closed. For more information on parameter values, see <a href="https://www.tencentcloud.com/document/product/239/39796">Setting Instance Parameters</a>
 */
class InstanceParam extends AbstractModel
{
    /**
     * @var string Parameter name, such as “timeout”. For supported custom parameters, see <a href="https://www.tencentcloud.com/document/product/239/39796">Setting Instance Parameters</a>
     */
    public $Key;

    /**
     * @var string Current parameter value. For example, if you set the current value of “timeout” to 120 (in seconds), the client connections that remain idle longer than 120 seconds will be closed. For more information on parameter values, see <a href="https://www.tencentcloud.com/document/product/239/39796">Setting Instance Parameters</a>
     */
    public $Value;

    /**
     * @param string $Key Parameter name, such as “timeout”. For supported custom parameters, see <a href="https://www.tencentcloud.com/document/product/239/39796">Setting Instance Parameters</a>
     * @param string $Value Current parameter value. For example, if you set the current value of “timeout” to 120 (in seconds), the client connections that remain idle longer than 120 seconds will be closed. For more information on parameter values, see <a href="https://www.tencentcloud.com/document/product/239/39796">Setting Instance Parameters</a>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
