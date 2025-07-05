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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Status Code Cache TTL configuration internal structure.
 *
 * @method integer getStatusCode() Obtain Status code. valid values: 400, 401, 403, 404, 405, 407, 414, 500, 501, 502, 503, 504, 509, 514.
 * @method void setStatusCode(integer $StatusCode) Set Status code. valid values: 400, 401, 403, 404, 405, 407, 414, 500, 501, 502, 503, 504, 509, 514.
 * @method integer getCacheTime() Obtain Cache time value in seconds. value range: 0–31536000.
 * @method void setCacheTime(integer $CacheTime) Set Cache time value in seconds. value range: 0–31536000.
 */
class StatusCodeCacheParam extends AbstractModel
{
    /**
     * @var integer Status code. valid values: 400, 401, 403, 404, 405, 407, 414, 500, 501, 502, 503, 504, 509, 514.
     */
    public $StatusCode;

    /**
     * @var integer Cache time value in seconds. value range: 0–31536000.
     */
    public $CacheTime;

    /**
     * @param integer $StatusCode Status code. valid values: 400, 401, 403, 404, 405, 407, 414, 500, 501, 502, 503, 504, 509, 514.
     * @param integer $CacheTime Cache time value in seconds. value range: 0–31536000.
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
