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
 * Cache key configuration (filter parameter configuration)
 *
 * @method string getFullUrlCache() Obtain Whether to enable full-path cache
on: enable full-path cache (i.e., disable parameter filter)
off: disable full-path cache (i.e., enable parameter filter)
 * @method void setFullUrlCache(string $FullUrlCache) Set Whether to enable full-path cache
on: enable full-path cache (i.e., disable parameter filter)
off: disable full-path cache (i.e., enable parameter filter)
 */
class CacheKey extends AbstractModel
{
    /**
     * @var string Whether to enable full-path cache
on: enable full-path cache (i.e., disable parameter filter)
off: disable full-path cache (i.e., enable parameter filter)
     */
    public $FullUrlCache;

    /**
     * @param string $FullUrlCache Whether to enable full-path cache
on: enable full-path cache (i.e., disable parameter filter)
off: disable full-path cache (i.e., enable parameter filter)
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
        if (array_key_exists("FullUrlCache",$param) and $param["FullUrlCache"] !== null) {
            $this->FullUrlCache = $param["FullUrlCache"];
        }
    }
}
