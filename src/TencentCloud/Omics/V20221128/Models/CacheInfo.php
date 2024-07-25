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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cache information
 *
 * @method integer getCacheClearDelay() Obtain Cache cleanup time (hours)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCacheClearDelay(integer $CacheClearDelay) Set Cache cleanup time (hours)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCacheClearTime() Obtain Cache cleanup schedule time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCacheClearTime(string $CacheClearTime) Set Cache cleanup schedule time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getCacheCleared() Obtain Whether the cache has been cleaned up
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCacheCleared(boolean $CacheCleared) Set Whether the cache has been cleaned up
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CacheInfo extends AbstractModel
{
    /**
     * @var integer Cache cleanup time (hours)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CacheClearDelay;

    /**
     * @var string Cache cleanup schedule time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CacheClearTime;

    /**
     * @var boolean Whether the cache has been cleaned up
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CacheCleared;

    /**
     * @param integer $CacheClearDelay Cache cleanup time (hours)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CacheClearTime Cache cleanup schedule time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $CacheCleared Whether the cache has been cleaned up
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CacheClearDelay",$param) and $param["CacheClearDelay"] !== null) {
            $this->CacheClearDelay = $param["CacheClearDelay"];
        }

        if (array_key_exists("CacheClearTime",$param) and $param["CacheClearTime"] !== null) {
            $this->CacheClearTime = $param["CacheClearTime"];
        }

        if (array_key_exists("CacheCleared",$param) and $param["CacheCleared"] !== null) {
            $this->CacheCleared = $param["CacheCleared"];
        }
    }
}
