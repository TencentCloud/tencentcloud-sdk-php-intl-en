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
 * Status code cache expiration time rule configuration
 *
 * @method string getStatusCode() Obtain HTTP status code
Supports 403 and 404 status codes
 * @method void setStatusCode(string $StatusCode) Set HTTP status code
Supports 403 and 404 status codes
 * @method integer getCacheTime() Obtain Status code cache expiration time (in seconds)
 * @method void setCacheTime(integer $CacheTime) Set Status code cache expiration time (in seconds)
 */
class StatusCodeCacheRule extends AbstractModel
{
    /**
     * @var string HTTP status code
Supports 403 and 404 status codes
     */
    public $StatusCode;

    /**
     * @var integer Status code cache expiration time (in seconds)
     */
    public $CacheTime;

    /**
     * @param string $StatusCode HTTP status code
Supports 403 and 404 status codes
     * @param integer $CacheTime Status code cache expiration time (in seconds)
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

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }
    }
}
