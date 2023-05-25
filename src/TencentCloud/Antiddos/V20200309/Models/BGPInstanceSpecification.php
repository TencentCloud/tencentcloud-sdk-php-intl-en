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
 * @method integer getProtectIPNumberLimit() Obtain Number of protected IPs
 * @method void setProtectIPNumberLimit(integer $ProtectIPNumberLimit) Set Number of protected IPs
 * @method integer getAutoRenewFlag() Obtain Auto-renewal status. Values:
`0`: Disabled
`1`: Enabled
]
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal status. Values:
`0`: Disabled
`1`: Enabled
]
 * @method integer getUnionPackFlag() Obtain Protection type of Anti-DDoS Pro. Valid values: `0` (general protection) and `1` (Lighthouse-based protection).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnionPackFlag(integer $UnionPackFlag) Set Protection type of Anti-DDoS Pro. Valid values: `0` (general protection) and `1` (Lighthouse-based protection).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getServiceBandWidth() Obtain Application bandwidth
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceBandWidth(integer $ServiceBandWidth) Set Application bandwidth
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBattleEditionFlag() Obtain Whether it’s an Anti-DDoS Pro Premium edition. Values: `0` (General edition); `1` (Premium edition).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBattleEditionFlag(integer $BattleEditionFlag) Set Whether it’s an Anti-DDoS Pro Premium edition. Values: `0` (General edition); `1` (Premium edition).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getChannelEditionFlag() Obtain Whether it’s an Anti-DDoS Pro Standard edition. Values: `0` (General edition); `1` (Standard edition).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChannelEditionFlag(integer $ChannelEditionFlag) Set Whether it’s an Anti-DDoS Pro Standard edition. Values: `0` (General edition); `1` (Standard edition).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnterpriseFlag() Obtain Whether it’s an Anti-DDoS Pro Enterprise edition. Values: `0` (General edition); `1` (Enterprise edition).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnterpriseFlag(integer $EnterpriseFlag) Set Whether it’s an Anti-DDoS Pro Enterprise edition. Values: `0` (General edition); `1` (Enterprise edition).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getElasticLimit() Obtain Elastic bandwidth threshold of the Anti-DDoS Pro Enterprise edition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setElasticLimit(integer $ElasticLimit) Set Elastic bandwidth threshold of the Anti-DDoS Pro Enterprise edition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDownGradeProtect() Obtain Protection bandwidth after the plan downgrade, in Gbps. 
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setDownGradeProtect(integer $DownGradeProtect) Set Protection bandwidth after the plan downgrade, in Gbps. 
Note: This field may return `null`, indicating that no valid value was found.
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
     * @var integer Number of protected IPs
     */
    public $ProtectIPNumberLimit;

    /**
     * @var integer Auto-renewal status. Values:
`0`: Disabled
`1`: Enabled
]
     */
    public $AutoRenewFlag;

    /**
     * @var integer Protection type of Anti-DDoS Pro. Valid values: `0` (general protection) and `1` (Lighthouse-based protection).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnionPackFlag;

    /**
     * @var integer Application bandwidth
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceBandWidth;

    /**
     * @var integer Whether it’s an Anti-DDoS Pro Premium edition. Values: `0` (General edition); `1` (Premium edition).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BattleEditionFlag;

    /**
     * @var integer Whether it’s an Anti-DDoS Pro Standard edition. Values: `0` (General edition); `1` (Standard edition).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChannelEditionFlag;

    /**
     * @var integer Whether it’s an Anti-DDoS Pro Enterprise edition. Values: `0` (General edition); `1` (Enterprise edition).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnterpriseFlag;

    /**
     * @var integer Elastic bandwidth threshold of the Anti-DDoS Pro Enterprise edition.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ElasticLimit;

    /**
     * @var integer Protection bandwidth after the plan downgrade, in Gbps. 
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $DownGradeProtect;

    /**
     * @param integer $ProtectBandwidth Base protection bandwidth (in Gbps)
     * @param integer $ProtectCountLimit Number of protection chances
     * @param integer $ProtectIPNumberLimit Number of protected IPs
     * @param integer $AutoRenewFlag Auto-renewal status. Values:
`0`: Disabled
`1`: Enabled
]
     * @param integer $UnionPackFlag Protection type of Anti-DDoS Pro. Valid values: `0` (general protection) and `1` (Lighthouse-based protection).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ServiceBandWidth Application bandwidth
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BattleEditionFlag Whether it’s an Anti-DDoS Pro Premium edition. Values: `0` (General edition); `1` (Premium edition).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ChannelEditionFlag Whether it’s an Anti-DDoS Pro Standard edition. Values: `0` (General edition); `1` (Standard edition).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EnterpriseFlag Whether it’s an Anti-DDoS Pro Enterprise edition. Values: `0` (General edition); `1` (Enterprise edition).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ElasticLimit Elastic bandwidth threshold of the Anti-DDoS Pro Enterprise edition.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DownGradeProtect Protection bandwidth after the plan downgrade, in Gbps. 
Note: This field may return `null`, indicating that no valid value was found.
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

        if (array_key_exists("BattleEditionFlag",$param) and $param["BattleEditionFlag"] !== null) {
            $this->BattleEditionFlag = $param["BattleEditionFlag"];
        }

        if (array_key_exists("ChannelEditionFlag",$param) and $param["ChannelEditionFlag"] !== null) {
            $this->ChannelEditionFlag = $param["ChannelEditionFlag"];
        }

        if (array_key_exists("EnterpriseFlag",$param) and $param["EnterpriseFlag"] !== null) {
            $this->EnterpriseFlag = $param["EnterpriseFlag"];
        }

        if (array_key_exists("ElasticLimit",$param) and $param["ElasticLimit"] !== null) {
            $this->ElasticLimit = $param["ElasticLimit"];
        }

        if (array_key_exists("DownGradeProtect",$param) and $param["DownGradeProtect"] !== null) {
            $this->DownGradeProtect = $param["DownGradeProtect"];
        }
    }
}
