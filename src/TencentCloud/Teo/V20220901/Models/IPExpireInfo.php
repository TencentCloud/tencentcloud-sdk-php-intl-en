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
 * Stores the scheduled expiration time and corresponding IP.
 *
 * @method string getExpireTime() Obtain Scheduled expiration time, following the ISO 8601 standard date and time format, such as "2022-01-01T00:00:00+08:00".
 * @method void setExpireTime(string $ExpireTime) Set Scheduled expiration time, following the ISO 8601 standard date and time format, such as "2022-01-01T00:00:00+08:00".
 * @method array getIPList() Obtain IP list. supports ip and ip range.
 * @method void setIPList(array $IPList) Set IP list. supports ip and ip range.
 */
class IPExpireInfo extends AbstractModel
{
    /**
     * @var string Scheduled expiration time, following the ISO 8601 standard date and time format, such as "2022-01-01T00:00:00+08:00".
     */
    public $ExpireTime;

    /**
     * @var array IP list. supports ip and ip range.
     */
    public $IPList;

    /**
     * @param string $ExpireTime Scheduled expiration time, following the ISO 8601 standard date and time format, such as "2022-01-01T00:00:00+08:00".
     * @param array $IPList IP list. supports ip and ip range.
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
        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IPList",$param) and $param["IPList"] !== null) {
            $this->IPList = $param["IPList"];
        }
    }
}
