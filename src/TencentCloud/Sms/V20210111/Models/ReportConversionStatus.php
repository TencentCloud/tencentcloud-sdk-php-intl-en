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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response for conversion rate reporting
 *
 * @method string getCode() Obtain Error code. `ok` is returned if the conversion rate is successfully reported.
 * @method void setCode(string $Code) Set Error code. `ok` is returned if the conversion rate is successfully reported.
 * @method string getMessage() Obtain Error code description.
 * @method void setMessage(string $Message) Set Error code description.
 */
class ReportConversionStatus extends AbstractModel
{
    /**
     * @var string Error code. `ok` is returned if the conversion rate is successfully reported.
     */
    public $Code;

    /**
     * @var string Error code description.
     */
    public $Message;

    /**
     * @param string $Code Error code. `ok` is returned if the conversion rate is successfully reported.
     * @param string $Message Error code description.
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
