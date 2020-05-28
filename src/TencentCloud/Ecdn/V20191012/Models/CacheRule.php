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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Caching configuration rule.
 *
 * @method string getCacheType() Obtain Cache type. Valid values: all (all files), file (extension type), directory (directory), path (full path), index (homepage).
 * @method void setCacheType(string $CacheType) Set Cache type. Valid values: all (all files), file (extension type), directory (directory), path (full path), index (homepage).
 * @method array getCacheContents() Obtain Cached content list.
 * @method void setCacheContents(array $CacheContents) Set Cached content list.
 * @method integer getCacheTime() Obtain Cache time in seconds.
 * @method void setCacheTime(integer $CacheTime) Set Cache time in seconds.
 */
class CacheRule extends AbstractModel
{
    /**
     * @var string Cache type. Valid values: all (all files), file (extension type), directory (directory), path (full path), index (homepage).
     */
    public $CacheType;

    /**
     * @var array Cached content list.
     */
    public $CacheContents;

    /**
     * @var integer Cache time in seconds.
     */
    public $CacheTime;

    /**
     * @param string $CacheType Cache type. Valid values: all (all files), file (extension type), directory (directory), path (full path), index (homepage).
     * @param array $CacheContents Cached content list.
     * @param integer $CacheTime Cache time in seconds.
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
        if (array_key_exists("CacheType",$param) and $param["CacheType"] !== null) {
            $this->CacheType = $param["CacheType"];
        }

        if (array_key_exists("CacheContents",$param) and $param["CacheContents"] !== null) {
            $this->CacheContents = $param["CacheContents"];
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }
    }
}
