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
 * @method string getSwitch() Obtain UserAgent allowlist/blocklist configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method void setSwitch(string $Switch) Set UserAgent allowlist/blocklist configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method array getFilterRules() Obtain 
 * @method void setFilterRules(array $FilterRules) Set 
 */
class UserAgentFilter extends AbstractModel
{
    /**
     * @var string UserAgent allowlist/blocklist configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     */
    public $Switch;

    /**
     * @var array 
     */
    public $FilterRules;

    /**
     * @param string $Switch UserAgent allowlist/blocklist configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
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

        if (array_key_exists("FilterRules",$param) and $param["FilterRules"] !== null) {
            $this->FilterRules = [];
            foreach ($param["FilterRules"] as $key => $value){
                $obj = new UserAgentFilterRule();
                $obj->deserialize($value);
                array_push($this->FilterRules, $obj);
            }
        }
    }
}
