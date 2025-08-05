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
 * IP/Region blocklist/allowlist configuration
 *
 * @method string getSwitch() Obtain Switch. valid values:.
<li>`on`: Enable;</li>

<li>off: disabled;</li>.
 * @method void setSwitch(string $Switch) Set Switch. valid values:.
<li>`on`: Enable;</li>

<li>off: disabled;</li>.
 * @method array getIpTableRules() Obtain Basic control rules. if null, historical configuration is used by default.
 * @method void setIpTableRules(array $IpTableRules) Set Basic control rules. if null, historical configuration is used by default.
 */
class IpTableConfig extends AbstractModel
{
    /**
     * @var string Switch. valid values:.
<li>`on`: Enable;</li>

<li>off: disabled;</li>.
     */
    public $Switch;

    /**
     * @var array Basic control rules. if null, historical configuration is used by default.
     */
    public $IpTableRules;

    /**
     * @param string $Switch Switch. valid values:.
<li>`on`: Enable;</li>

<li>off: disabled;</li>.
     * @param array $IpTableRules Basic control rules. if null, historical configuration is used by default.
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

        if (array_key_exists("IpTableRules",$param) and $param["IpTableRules"] !== null) {
            $this->IpTableRules = [];
            foreach ($param["IpTableRules"] as $key => $value){
                $obj = new IpTableRule();
                $obj->deserialize($value);
                array_push($this->IpTableRules, $obj);
            }
        }
    }
}
