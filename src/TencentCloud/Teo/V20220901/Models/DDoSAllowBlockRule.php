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
 * Details of the IP blocklist/allowlist
 *
 * @method string getIp() Obtain The client IP, which can be a single IP, IP range, or subnet range, such as "1.1.1.1", "1.1.1.2-1.1.1.3", and "1.2.1.0/24-1.2.2.0/24".
 * @method void setIp(string $Ip) Set The client IP, which can be a single IP, IP range, or subnet range, such as "1.1.1.1", "1.1.1.2-1.1.1.3", and "1.2.1.0/24-1.2.2.0/24".
 * @method string getType() Obtain The type. Values:
<li>`block`: Blocklist</li><li>`allow`: Allowlist</li>
 * @method void setType(string $Type) Set The type. Values:
<li>`block`: Blocklist</li><li>`allow`: Allowlist</li>
 * @method integer getUpdateTime() Obtain The 10-digit timestamp, such as `1199116800`. The current time will be used if this field is not specified.
 * @method void setUpdateTime(integer $UpdateTime) Set The 10-digit timestamp, such as `1199116800`. The current time will be used if this field is not specified.
 */
class DDoSAllowBlockRule extends AbstractModel
{
    /**
     * @var string The client IP, which can be a single IP, IP range, or subnet range, such as "1.1.1.1", "1.1.1.2-1.1.1.3", and "1.2.1.0/24-1.2.2.0/24".
     */
    public $Ip;

    /**
     * @var string The type. Values:
<li>`block`: Blocklist</li><li>`allow`: Allowlist</li>
     */
    public $Type;

    /**
     * @var integer The 10-digit timestamp, such as `1199116800`. The current time will be used if this field is not specified.
     */
    public $UpdateTime;

    /**
     * @param string $Ip The client IP, which can be a single IP, IP range, or subnet range, such as "1.1.1.1", "1.1.1.2-1.1.1.3", and "1.2.1.0/24-1.2.2.0/24".
     * @param string $Type The type. Values:
<li>`block`: Blocklist</li><li>`allow`: Allowlist</li>
     * @param integer $UpdateTime The 10-digit timestamp, such as `1199116800`. The current time will be used if this field is not specified.
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
