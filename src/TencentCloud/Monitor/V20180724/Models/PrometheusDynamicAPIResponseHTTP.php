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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TMP internal dynamics API agent response
 *
 * @method integer getStatusCode() Obtain <p>HTTP status code</p>
 * @method void setStatusCode(integer $StatusCode) Set <p>HTTP status code</p>
 * @method string getResponseBody() Obtain <p>HTTP response body</p>
 * @method void setResponseBody(string $ResponseBody) Set <p>HTTP response body</p>
 */
class PrometheusDynamicAPIResponseHTTP extends AbstractModel
{
    /**
     * @var integer <p>HTTP status code</p>
     */
    public $StatusCode;

    /**
     * @var string <p>HTTP response body</p>
     */
    public $ResponseBody;

    /**
     * @param integer $StatusCode <p>HTTP status code</p>
     * @param string $ResponseBody <p>HTTP response body</p>
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("ResponseBody",$param) and $param["ResponseBody"] !== null) {
            $this->ResponseBody = $param["ResponseBody"];
        }
    }
}
