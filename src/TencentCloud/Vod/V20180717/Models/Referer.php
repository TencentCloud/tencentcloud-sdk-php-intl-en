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
 * Referer blocklist/allowlist configuration, disabled by default
 *
 * @method string getSwitch() Obtain Referrer blocklist configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method void setSwitch(string $Switch) Set Referrer blocklist configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method array getRefererRules() Obtain referer blocklist/allowlist rule configuration
 * @method void setRefererRules(array $RefererRules) Set referer blocklist/allowlist rule configuration
 */
class Referer extends AbstractModel
{
    /**
     * @var string Referrer blocklist configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     */
    public $Switch;

    /**
     * @var array referer blocklist/allowlist rule configuration
     */
    public $RefererRules;

    /**
     * @param string $Switch Referrer blocklist configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     * @param array $RefererRules referer blocklist/allowlist rule configuration
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

        if (array_key_exists("RefererRules",$param) and $param["RefererRules"] !== null) {
            $this->RefererRules = [];
            foreach ($param["RefererRules"] as $key => $value){
                $obj = new RefererRule();
                $obj->deserialize($value);
                array_push($this->RefererRules, $obj);
            }
        }
    }
}
