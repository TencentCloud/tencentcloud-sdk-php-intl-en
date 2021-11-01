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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Callback configuration
 *
 * @method string getBody() Obtain `Body` during callback
 * @method void setBody(string $Body) Set `Body` during callback
 * @method array getHeaders() Obtain `Headers` during callback
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setHeaders(array $Headers) Set `Headers` during callback
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class CallBackInfo extends AbstractModel
{
    /**
     * @var string `Body` during callback
     */
    public $Body;

    /**
     * @var array `Headers` during callback
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Headers;

    /**
     * @param string $Body `Body` during callback
     * @param array $Headers `Headers` during callback
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }
    }
}
