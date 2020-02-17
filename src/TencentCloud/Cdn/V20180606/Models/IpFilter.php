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
 * @method string getSwitch() Obtain IP blacklist/whitelist configuration switch
on: enabled
off: disabled
 * @method void setSwitch(string $Switch) Set IP blacklist/whitelist configuration switch
on: enabled
off: disabled
 * @method string getFilterType() Obtain IP blacklist/whitelist type
whitelist: whitelist
blacklist: blacklist
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFilterType(string $FilterType) Set IP blacklist/whitelist type
whitelist: whitelist
blacklist: blacklist
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getFilters() Obtain IP blacklist/whitelist list
It supports IPs in X.X.X.X format, or /8, /16, /24 format IP ranges.
Up to 50 whitelists or blacklists can be entered
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFilters(array $Filters) Set IP blacklist/whitelist list
It supports IPs in X.X.X.X format, or /8, /16, /24 format IP ranges.
Up to 50 whitelists or blacklists can be entered
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *IP blacklist/whitelist configuration. It is disabled by default.
 */
class IpFilter extends AbstractModel
{
    /**
     * @var string IP blacklist/whitelist configuration switch
on: enabled
off: disabled
     */
    public $Switch;

    /**
     * @var string IP blacklist/whitelist type
whitelist: whitelist
blacklist: blacklist
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FilterType;

    /**
     * @var array IP blacklist/whitelist list
It supports IPs in X.X.X.X format, or /8, /16, /24 format IP ranges.
Up to 50 whitelists or blacklists can be entered
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Filters;
    /**
     * @param string $Switch IP blacklist/whitelist configuration switch
on: enabled
off: disabled
     * @param string $FilterType IP blacklist/whitelist type
whitelist: whitelist
blacklist: blacklist
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Filters IP blacklist/whitelist list
It supports IPs in X.X.X.X format, or /8, /16, /24 format IP ranges.
Up to 50 whitelists or blacklists can be entered
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }
    }
}
