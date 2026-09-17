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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getSwitch() Obtain IP allowlist/blocklist configuration switch. Parameter value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method void setSwitch(string $Switch) Set IP allowlist/blocklist configuration switch. Parameter value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method string getFilterType() Obtain IP allowlist/blocklist type:
<li>whitelist: allowlist;</li>
<li>blocklist: blocklist.</li>
 * @method void setFilterType(string $FilterType) Set IP allowlist/blocklist type:
<li>whitelist: allowlist;</li>
<li>blocklist: blocklist.</li>
 * @method array getFilters() Obtain IP allowlist or blocklist. Supports IPs in the X.X.X.X format or network segments in the /8, /16, or /24 format.
Fill up to 50 allowlist entries or 50 blocklist entries.
 * @method void setFilters(array $Filters) Set IP allowlist or blocklist. Supports IPs in the X.X.X.X format or network segments in the /8, /16, or /24 format.
Fill up to 50 allowlist entries or 50 blocklist entries.
 * @method array getFilterRules() Obtain 
 * @method void setFilterRules(array $FilterRules) Set 
 */
class IpFilter extends AbstractModel
{
    /**
     * @var string IP allowlist/blocklist configuration switch. Parameter value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     */
    public $Switch;

    /**
     * @var string IP allowlist/blocklist type:
<li>whitelist: allowlist;</li>
<li>blocklist: blocklist.</li>
     */
    public $FilterType;

    /**
     * @var array IP allowlist or blocklist. Supports IPs in the X.X.X.X format or network segments in the /8, /16, or /24 format.
Fill up to 50 allowlist entries or 50 blocklist entries.
     */
    public $Filters;

    /**
     * @var array 
     */
    public $FilterRules;

    /**
     * @param string $Switch IP allowlist/blocklist configuration switch. Parameter value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     * @param string $FilterType IP allowlist/blocklist type:
<li>whitelist: allowlist;</li>
<li>blocklist: blocklist.</li>
     * @param array $Filters IP allowlist or blocklist. Supports IPs in the X.X.X.X format or network segments in the /8, /16, or /24 format.
Fill up to 50 allowlist entries or 50 blocklist entries.
     * @param array $FilterRules 
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
