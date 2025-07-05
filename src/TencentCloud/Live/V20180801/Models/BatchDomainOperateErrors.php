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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Error information for domains that a batch domain operation API fails to operate.
 *
 * @method string getDomainName() Obtain The domain that the API failed to operate.
 * @method void setDomainName(string $DomainName) Set The domain that the API failed to operate.
 * @method string getCode() Obtain The API 3.0 error code.
 * @method void setCode(string $Code) Set The API 3.0 error code.
 * @method string getMessage() Obtain The API 3.0 error message.
 * @method void setMessage(string $Message) Set The API 3.0 error message.
 */
class BatchDomainOperateErrors extends AbstractModel
{
    /**
     * @var string The domain that the API failed to operate.
     */
    public $DomainName;

    /**
     * @var string The API 3.0 error code.
     */
    public $Code;

    /**
     * @var string The API 3.0 error message.
     */
    public $Message;

    /**
     * @param string $DomainName The domain that the API failed to operate.
     * @param string $Code The API 3.0 error code.
     * @param string $Message The API 3.0 error message.
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
