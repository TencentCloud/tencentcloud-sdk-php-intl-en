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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Return code of the response body
 *
 * @method string getCode() Obtain If successful, return a success; if failed, return Cloud API Defined Error Codes
 * @method void setCode(string $Code) Set If successful, return a success; if failed, return Cloud API Defined Error Codes
 * @method string getMessage() Obtain If successful, return a success; if failed, return the secondary error code of WAF Definition
 * @method void setMessage(string $Message) Set If successful, return a success; if failed, return the secondary error code of WAF Definition
 */
class ResponseCode extends AbstractModel
{
    /**
     * @var string If successful, return a success; if failed, return Cloud API Defined Error Codes
     */
    public $Code;

    /**
     * @var string If successful, return a success; if failed, return the secondary error code of WAF Definition
     */
    public $Message;

    /**
     * @param string $Code If successful, return a success; if failed, return Cloud API Defined Error Codes
     * @param string $Message If successful, return a success; if failed, return the secondary error code of WAF Definition
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
