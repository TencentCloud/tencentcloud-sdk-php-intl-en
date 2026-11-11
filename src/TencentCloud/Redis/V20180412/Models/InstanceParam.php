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
 * Instance parameter
 *
 * @method string getKey() Obtain Parameter name. For example, timeout. For customizable parameters, see <a href="https://www.tencentcloud.com/document/product/239/49925?from_cn_redirect=1">Parameter Configuration</a>.
 * @method void setKey(string $Key) Set Parameter name. For example, timeout. For customizable parameters, see <a href="https://www.tencentcloud.com/document/product/239/49925?from_cn_redirect=1">Parameter Configuration</a>.
 * @method string getValue() Obtain Set the running value corresponding to the parameter name. For example, the running value corresponding to timeout can be set to 120, in seconds (s). When the client connection idle time reaches 120 s, the connection closed. For more parameter value information, please refer to <a href="https://www.tencentcloud.com/document/product/239/49925?from_cn_redirect=1">parameter configuration</a>.
 * @method void setValue(string $Value) Set Set the running value corresponding to the parameter name. For example, the running value corresponding to timeout can be set to 120, in seconds (s). When the client connection idle time reaches 120 s, the connection closed. For more parameter value information, please refer to <a href="https://www.tencentcloud.com/document/product/239/49925?from_cn_redirect=1">parameter configuration</a>.
 */
class InstanceParam extends AbstractModel
{
    /**
     * @var string Parameter name. For example, timeout. For customizable parameters, see <a href="https://www.tencentcloud.com/document/product/239/49925?from_cn_redirect=1">Parameter Configuration</a>.
     */
    public $Key;

    /**
     * @var string Set the running value corresponding to the parameter name. For example, the running value corresponding to timeout can be set to 120, in seconds (s). When the client connection idle time reaches 120 s, the connection closed. For more parameter value information, please refer to <a href="https://www.tencentcloud.com/document/product/239/49925?from_cn_redirect=1">parameter configuration</a>.
     */
    public $Value;

    /**
     * @param string $Key Parameter name. For example, timeout. For customizable parameters, see <a href="https://www.tencentcloud.com/document/product/239/49925?from_cn_redirect=1">Parameter Configuration</a>.
     * @param string $Value Set the running value corresponding to the parameter name. For example, the running value corresponding to timeout can be set to 120, in seconds (s). When the client connection idle time reaches 120 s, the connection closed. For more parameter value information, please refer to <a href="https://www.tencentcloud.com/document/product/239/49925?from_cn_redirect=1">parameter configuration</a>.
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
