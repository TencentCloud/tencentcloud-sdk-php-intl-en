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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP header setting rules.
 *
 * @method string getHeaderMode() Obtain HTTP header setting method. Valid values: `add` (add header), `set` (set header) or `del` (delete header).
 * @method void setHeaderMode(string $HeaderMode) Set HTTP header setting method. Valid values: `add` (add header), `set` (set header) or `del` (delete header).
 * @method string getHeaderName() Obtain HTTP header name
 * @method void setHeaderName(string $HeaderName) Set HTTP header name
 * @method string getHeaderValue() Obtain HTTP header value
 * @method void setHeaderValue(string $HeaderValue) Set HTTP header value
 */
class HttpHeaderRule extends AbstractModel
{
    /**
     * @var string HTTP header setting method. Valid values: `add` (add header), `set` (set header) or `del` (delete header).
     */
    public $HeaderMode;

    /**
     * @var string HTTP header name
     */
    public $HeaderName;

    /**
     * @var string HTTP header value
     */
    public $HeaderValue;

    /**
     * @param string $HeaderMode HTTP header setting method. Valid values: `add` (add header), `set` (set header) or `del` (delete header).
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
        if (array_key_exists("HeaderMode",$param) and $param["HeaderMode"] !== null) {
            $this->HeaderMode = $param["HeaderMode"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }

        if (array_key_exists("HeaderValue",$param) and $param["HeaderValue"] !== null) {
            $this->HeaderValue = $param["HeaderValue"];
        }
    }
}
