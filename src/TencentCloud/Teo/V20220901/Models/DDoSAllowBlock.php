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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP Allowlist/Blocklist
 *
 * @method array getDDoSAllowBlockRules() Obtain Array of objects in the blocklist/allowlist configuration.
 * @method void setDDoSAllowBlockRules(array $DDoSAllowBlockRules) Set Array of objects in the blocklist/allowlist configuration.
 * @method string getSwitch() Obtain Whether to clear the blocklist/allowlist. Values:
<li>`off`: Disable.</li>
<li>`on`: Enable. In this case, UserAllowBlockIp needs to be specified.</li>
 * @method void setSwitch(string $Switch) Set Whether to clear the blocklist/allowlist. Values:
<li>`off`: Disable.</li>
<li>`on`: Enable. In this case, UserAllowBlockIp needs to be specified.</li>
 */
class DDoSAllowBlock extends AbstractModel
{
    /**
     * @var array Array of objects in the blocklist/allowlist configuration.
     */
    public $DDoSAllowBlockRules;

    /**
     * @var string Whether to clear the blocklist/allowlist. Values:
<li>`off`: Disable.</li>
<li>`on`: Enable. In this case, UserAllowBlockIp needs to be specified.</li>
     */
    public $Switch;

    /**
     * @param array $DDoSAllowBlockRules Array of objects in the blocklist/allowlist configuration.
     * @param string $Switch Whether to clear the blocklist/allowlist. Values:
<li>`off`: Disable.</li>
<li>`on`: Enable. In this case, UserAllowBlockIp needs to be specified.</li>
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
        if (array_key_exists("DDoSAllowBlockRules",$param) and $param["DDoSAllowBlockRules"] !== null) {
            $this->DDoSAllowBlockRules = [];
            foreach ($param["DDoSAllowBlockRules"] as $key => $value){
                $obj = new DDoSAllowBlockRule();
                $obj->deserialize($value);
                array_push($this->DDoSAllowBlockRules, $obj);
            }
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
