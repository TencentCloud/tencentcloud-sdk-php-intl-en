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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud-Native Gateway Traffic Throttling Plugin Custom Response
 *
 * @method string getBody() Obtain Custom response body
 * @method void setBody(string $Body) Set Custom response body
 * @method array getHeaders() Obtain Headers
 * @method void setHeaders(array $Headers) Set Headers
 * @method integer getHttpStatus() Obtain HTTP status code.
 * @method void setHttpStatus(integer $HttpStatus) Set HTTP status code.
 */
class RateLimitResponse extends AbstractModel
{
    /**
     * @var string Custom response body
     */
    public $Body;

    /**
     * @var array Headers
     */
    public $Headers;

    /**
     * @var integer HTTP status code.
     */
    public $HttpStatus;

    /**
     * @param string $Body Custom response body
     * @param array $Headers Headers
     * @param integer $HttpStatus HTTP status code.
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
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new KVMapping();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("HttpStatus",$param) and $param["HttpStatus"] !== null) {
            $this->HttpStatus = $param["HttpStatus"];
        }
    }
}
