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
 * IP location information query
 *
 * @method string getIP() Obtain IP address, IPV4 or IPV6.
 * @method void setIP(string $IP) Set IP address, IPV4 or IPV6.
 * @method string getIsEdgeOneIP() Obtain Whether the IP belongs to an EdgeOne node. Valid values:
<li>yes: This IP belongs to an EdgeOne node;</li>
<li>no: This IP does not belong to an EdgeOne node.</li>
 * @method void setIsEdgeOneIP(string $IsEdgeOneIP) Set Whether the IP belongs to an EdgeOne node. Valid values:
<li>yes: This IP belongs to an EdgeOne node;</li>
<li>no: This IP does not belong to an EdgeOne node.</li>
 */
class IPRegionInfo extends AbstractModel
{
    /**
     * @var string IP address, IPV4 or IPV6.
     */
    public $IP;

    /**
     * @var string Whether the IP belongs to an EdgeOne node. Valid values:
<li>yes: This IP belongs to an EdgeOne node;</li>
<li>no: This IP does not belong to an EdgeOne node.</li>
     */
    public $IsEdgeOneIP;

    /**
     * @param string $IP IP address, IPV4 or IPV6.
     * @param string $IsEdgeOneIP Whether the IP belongs to an EdgeOne node. Valid values:
<li>yes: This IP belongs to an EdgeOne node;</li>
<li>no: This IP does not belong to an EdgeOne node.</li>
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("IsEdgeOneIP",$param) and $param["IsEdgeOneIP"] !== null) {
            $this->IsEdgeOneIP = $param["IsEdgeOneIP"];
        }
    }
}
