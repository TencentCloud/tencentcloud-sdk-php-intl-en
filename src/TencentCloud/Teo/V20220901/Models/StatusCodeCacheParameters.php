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
 * Status Code Cache TTL configuration parameters.
 *
 * @method array getStatusCodeCacheParams() Obtain Status code cache ttl.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setStatusCodeCacheParams(array $StatusCodeCacheParams) Set Status code cache ttl.
Note: this field may return null, which indicates a failure to obtain a valid value.
 */
class StatusCodeCacheParameters extends AbstractModel
{
    /**
     * @var array Status code cache ttl.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $StatusCodeCacheParams;

    /**
     * @param array $StatusCodeCacheParams Status code cache ttl.
Note: this field may return null, which indicates a failure to obtain a valid value.
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
        if (array_key_exists("StatusCodeCacheParams",$param) and $param["StatusCodeCacheParams"] !== null) {
            $this->StatusCodeCacheParams = [];
            foreach ($param["StatusCodeCacheParams"] as $key => $value){
                $obj = new StatusCodeCacheParam();
                $obj->deserialize($value);
                array_push($this->StatusCodeCacheParams, $obj);
            }
        }
    }
}
