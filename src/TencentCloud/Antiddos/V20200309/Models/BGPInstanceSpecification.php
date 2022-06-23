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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Anti-DDoS Pro instance specifications
 *
 * @method integer getProtectBandwidth() Obtain Base protection bandwidth (in Gbps)
 * @method void setProtectBandwidth(integer $ProtectBandwidth) Set Base protection bandwidth (in Gbps)
 * @method integer getProtectCountLimit() Obtain Number of protection chances
 * @method void setProtectCountLimit(integer $ProtectCountLimit) Set Number of protection chances
 * @method integer getProtectIPNumberLimit() Obtain Number of protection IPs
 * @method void setProtectIPNumberLimit(integer $ProtectIPNumberLimit) Set Number of protection IPs
 * @method integer getAutoRenewFlag() Obtain Auto-renewal status. Valid values:
`0`: disabled
`1`: enabled
]
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal status. Valid values:
`0`: disabled
`1`: enabled
]
 * @method integer getUnionPackFlag() Obtain Protection type of Anti-DDoS Pro. Valid values: `0` (general protection) and `1` (Lighthouse-based protection).
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnionPackFlag(integer $UnionPackFlag) Set Protection type of Anti-DDoS Pro. Valid values: `0` (general protection) and `1` (Lighthouse-based protection).
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getServiceBandWidth() Obtain 
 * @method void setServiceBandWidth(integer $ServiceBandWidth) Set 
 */
class BGPInstanceSpecification extends AbstractModel
{
    /**
     * @var integer Base protection bandwidth (in Gbps)
     */
    public $ProtectBandwidth;

    /**
     * @var integer Number of protection chances
     */
    public $ProtectCountLimit;

    /**
     * @var integer Number of protection IPs
     */
    public $ProtectIPNumberLimit;

    /**
     * @var integer Auto-renewal status. Valid values:
`0`: disabled
`1`: enabled
]
     */
    public $AutoRenewFlag;

    /**
     * @var integer Protection type of Anti-DDoS Pro. Valid values: `0` (general protection) and `1` (Lighthouse-based protection).
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnionPackFlag;

    /**
     * @var integer 
     */
    public $ServiceBandWidth;

    /**
     * @param integer $ProtectBandwidth Base protection bandwidth (in Gbps)
     * @param integer $ProtectCountLimit Number of protection chances
     * @param integer $ProtectIPNumberLimit Number of protection IPs
     * @param integer $AutoRenewFlag Auto-renewal status. Valid values:
`0`: disabled
`1`: enabled
]
     * @param integer $UnionPackFlag Protection type of Anti-DDoS Pro. Valid values: `0` (general protection) and `1` (Lighthouse-based protection).
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ServiceBandWidth 
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
        if (array_key_exists("ProtectBandwidth",$param) and $param["ProtectBandwidth"] !== null) {
            $this->ProtectBandwidth = $param["ProtectBandwidth"];
        }

        if (array_key_exists("ProtectCountLimit",$param) and $param["ProtectCountLimit"] !== null) {
            $this->ProtectCountLimit = $param["ProtectCountLimit"];
        }

        if (array_key_exists("ProtectIPNumberLimit",$param) and $param["ProtectIPNumberLimit"] !== null) {
            $this->ProtectIPNumberLimit = $param["ProtectIPNumberLimit"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("UnionPackFlag",$param) and $param["UnionPackFlag"] !== null) {
            $this->UnionPackFlag = $param["UnionPackFlag"];
        }

        if (array_key_exists("ServiceBandWidth",$param) and $param["ServiceBandWidth"] !== null) {
            $this->ServiceBandWidth = $param["ServiceBandWidth"];
        }
    }
}
