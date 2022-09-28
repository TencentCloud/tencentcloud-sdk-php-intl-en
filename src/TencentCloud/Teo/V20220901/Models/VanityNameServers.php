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
 * Custom name servers
 *
 * @method string getSwitch() Obtain Whether to enable custom name servers. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Whether to enable custom name servers. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method array getServers() Obtain List of custom name servers
 * @method void setServers(array $Servers) Set List of custom name servers
 */
class VanityNameServers extends AbstractModel
{
    /**
     * @var string Whether to enable custom name servers. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var array List of custom name servers
     */
    public $Servers;

    /**
     * @param string $Switch Whether to enable custom name servers. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param array $Servers List of custom name servers
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

        if (array_key_exists("Servers",$param) and $param["Servers"] !== null) {
            $this->Servers = $param["Servers"];
        }
    }
}
