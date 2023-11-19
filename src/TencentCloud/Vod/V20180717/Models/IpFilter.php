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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP blocklist/allowlist configuration. This is disabled by default.
 *
 * @method string getSwitch() Obtain IP black and white list configuration switch, value: <li>on: on; </li> <li>off: off. </li>
 * @method void setSwitch(string $Switch) Set IP black and white list configuration switch, value: <li>on: on; </li> <li>off: off. </li>
 * @method string getFilterType() Obtain IP blacklist and whitelist types: <li>whitelist: whitelist;</li> <li>blacklist: blacklist. </li>
 * @method void setFilterType(string $FilterType) Set IP blacklist and whitelist types: <li>whitelist: whitelist;</li> <li>blacklist: blacklist. </li>
 * @method array getFilters() Obtain IP black and white list, supports: IP in the form of X.X.X.X, or network segment in the form of /8, /16, /24; Can populate up to 50 whitelists or 50 blacklists.
 * @method void setFilters(array $Filters) Set IP black and white list, supports: IP in the form of X.X.X.X, or network segment in the form of /8, /16, /24; Can populate up to 50 whitelists or 50 blacklists.
 * @method array getFilterRules() Obtain IP blocklist/allowlist path-based configuration. This feature is only available to selected beta customers.
 * @method void setFilterRules(array $FilterRules) Set IP blocklist/allowlist path-based configuration. This feature is only available to selected beta customers.
 */
class IpFilter extends AbstractModel
{
    /**
     * @var string IP black and white list configuration switch, value: <li>on: on; </li> <li>off: off. </li>
     */
    public $Switch;

    /**
     * @var string IP blacklist and whitelist types: <li>whitelist: whitelist;</li> <li>blacklist: blacklist. </li>
     */
    public $FilterType;

    /**
     * @var array IP black and white list, supports: IP in the form of X.X.X.X, or network segment in the form of /8, /16, /24; Can populate up to 50 whitelists or 50 blacklists.
     */
    public $Filters;

    /**
     * @var array IP blocklist/allowlist path-based configuration. This feature is only available to selected beta customers.
     */
    public $FilterRules;

    /**
     * @param string $Switch IP black and white list configuration switch, value: <li>on: on; </li> <li>off: off. </li>
     * @param string $FilterType IP blacklist and whitelist types: <li>whitelist: whitelist;</li> <li>blacklist: blacklist. </li>
     * @param array $Filters IP black and white list, supports: IP in the form of X.X.X.X, or network segment in the form of /8, /16, /24; Can populate up to 50 whitelists or 50 blacklists.
     * @param array $FilterRules IP blocklist/allowlist path-based configuration. This feature is only available to selected beta customers.
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

        if (array_key_exists("FilterRules",$param) and $param["FilterRules"] !== null) {
            $this->FilterRules = [];
            foreach ($param["FilterRules"] as $key => $value){
                $obj = new IpFilterPathRule();
                $obj->deserialize($value);
                array_push($this->FilterRules, $obj);
            }
        }
    }
}
