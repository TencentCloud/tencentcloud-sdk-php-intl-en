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
 * Cache expiration rules configuration
 *
 * @method string getCacheType() Obtain Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
index: home page
 * @method void setCacheType(string $CacheType) Set Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
index: home page
 * @method array getCacheContents() Obtain Content for each CacheType:
Enter `*` for `all`
Enter an extension for `file`, such as `jpg` or `txt`
Enter a path for `directory`, such as `/xxx/test`
Enter an absolute path for `path`, such as `/xxx/test.html`
Enter `/` for `index`
 * @method void setCacheContents(array $CacheContents) Set Content for each CacheType:
Enter `*` for `all`
Enter an extension for `file`, such as `jpg` or `txt`
Enter a path for `directory`, such as `/xxx/test`
Enter an absolute path for `path`, such as `/xxx/test.html`
Enter `/` for `index`
 * @method integer getCacheTime() Obtain Cache expiration time settings
Unit: second. The maximum value is 365 days.
 * @method void setCacheTime(integer $CacheTime) Set Cache expiration time settings
Unit: second. The maximum value is 365 days.
 */
class SimpleCacheRule extends AbstractModel
{
    /**
     * @var string Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
index: home page
     */
    public $CacheType;

    /**
     * @var array Content for each CacheType:
Enter `*` for `all`
Enter an extension for `file`, such as `jpg` or `txt`
Enter a path for `directory`, such as `/xxx/test`
Enter an absolute path for `path`, such as `/xxx/test.html`
Enter `/` for `index`
     */
    public $CacheContents;

    /**
     * @var integer Cache expiration time settings
Unit: second. The maximum value is 365 days.
     */
    public $CacheTime;

    /**
     * @param string $CacheType Rule types:
`all`: effective for all files
`file`: effective for specified file suffixes
`directory`: effective for specified paths
`path`: effective for specified absolute paths
index: home page
     * @param array $CacheContents Content for each CacheType:
Enter `*` for `all`
Enter an extension for `file`, such as `jpg` or `txt`
Enter a path for `directory`, such as `/xxx/test`
Enter an absolute path for `path`, such as `/xxx/test.html`
Enter `/` for `index`
     * @param integer $CacheTime Cache expiration time settings
Unit: second. The maximum value is 365 days.
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
