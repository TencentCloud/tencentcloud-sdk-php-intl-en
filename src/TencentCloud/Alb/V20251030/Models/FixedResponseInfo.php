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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * information
 *
 * @method integer getHttpCode() Obtain HTTP response code returned. 2xx, 4xx, and 5xx are supported.
 * @method void setHttpCode(integer $HttpCode) Set HTTP response code returned. 2xx, 4xx, and 5xx are supported.
 * @method string getContent() Obtain Fixed content returned. Supports only ASCII characters, up to 1 KB.
 * @method void setContent(string $Content) Set Fixed content returned. Supports only ASCII characters, up to 1 KB.
 * @method string getContentType() Obtain Format of the returned fixed content.
Value: text/plain, text/css, text/html, application/javascript, or application/json.
 * @method void setContentType(string $ContentType) Set Format of the returned fixed content.
Value: text/plain, text/css, text/html, application/javascript, or application/json.
 */
class FixedResponseInfo extends AbstractModel
{
    /**
     * @var integer HTTP response code returned. 2xx, 4xx, and 5xx are supported.
     */
    public $HttpCode;

    /**
     * @var string Fixed content returned. Supports only ASCII characters, up to 1 KB.
     */
    public $Content;

    /**
     * @var string Format of the returned fixed content.
Value: text/plain, text/css, text/html, application/javascript, or application/json.
     */
    public $ContentType;

    /**
     * @param integer $HttpCode HTTP response code returned. 2xx, 4xx, and 5xx are supported.
     * @param string $Content Fixed content returned. Supports only ASCII characters, up to 1 KB.
     * @param string $ContentType Format of the returned fixed content.
Value: text/plain, text/css, text/html, application/javascript, or application/json.
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
        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }
    }
}
