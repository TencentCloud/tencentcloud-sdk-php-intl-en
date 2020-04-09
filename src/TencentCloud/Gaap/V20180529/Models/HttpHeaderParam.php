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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter describing an HTTP packet header
 *
 * @method string getHeaderName() Obtain HTTP header name
 * @method void setHeaderName(string $HeaderName) Set HTTP header name
 * @method string getHeaderValue() Obtain HTTP header value
 * @method void setHeaderValue(string $HeaderValue) Set HTTP header value
 */
class HttpHeaderParam extends AbstractModel
{
    /**
     * @var string HTTP header name
     */
    public $HeaderName;

    /**
     * @var string HTTP header value
     */
    public $HeaderValue;

    /**
     * @param string $HeaderName HTTP header name
     * @param string $HeaderValue HTTP header value
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
        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }

        if (array_key_exists("HeaderValue",$param) and $param["HeaderValue"] !== null) {
            $this->HeaderValue = $param["HeaderValue"];
        }
    }
}
