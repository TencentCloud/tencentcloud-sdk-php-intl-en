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
 * Anti-DDoS Advanced instance specifications
 *
 * @method integer getProtectBandwidth() Obtain Base protection bandwidth (in Mbps)
 * @method void setProtectBandwidth(integer $ProtectBandwidth) Set Base protection bandwidth (in Mbps)
 * @method integer getProtectCCQPS() Obtain CC protection bandwidth (in QPS)
 * @method void setProtectCCQPS(integer $ProtectCCQPS) Set CC protection bandwidth (in QPS)
 * @method integer getNormalBandwidth() Obtain Normal application bandwidth (in Mbps)
 * @method void setNormalBandwidth(integer $NormalBandwidth) Set Normal application bandwidth (in Mbps)
 * @method integer getForwardRulesLimit() Obtain Number of forwarding rules
 * @method void setForwardRulesLimit(integer $ForwardRulesLimit) Set Number of forwarding rules
 * @method integer getAutoRenewFlag() Obtain Auto-renewal status. Valid values:
`0`: disabled
`1`: enabled
]
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal status. Valid values:
`0`: disabled
`1`: enabled
]
 * @method integer getLine() Obtain Anti-DDoS Advanced line. Valid values:
`1`: BGP
`2`: China Telecom
`3`: China Unicom
`4`: China Mobile
`99`: third-party line
]
 * @method void setLine(integer $Line) Set Anti-DDoS Advanced line. Valid values:
`1`: BGP
`2`: China Telecom
`3`: China Unicom
`4`: China Mobile
`99`: third-party line
]
 * @method integer getElasticBandwidth() Obtain Elastic protection bandwidth (in Mbps)
 * @method void setElasticBandwidth(integer $ElasticBandwidth) Set Elastic protection bandwidth (in Mbps)
 */
class BGPIPInstanceSpecification extends AbstractModel
{
    /**
     * @var integer Base protection bandwidth (in Mbps)
     */
    public $ProtectBandwidth;

    /**
     * @var integer CC protection bandwidth (in QPS)
     */
    public $ProtectCCQPS;

    /**
     * @var integer Normal application bandwidth (in Mbps)
     */
    public $NormalBandwidth;

    /**
     * @var integer Number of forwarding rules
     */
    public $ForwardRulesLimit;

    /**
     * @var integer Auto-renewal status. Valid values:
`0`: disabled
`1`: enabled
]
     */
    public $AutoRenewFlag;

    /**
     * @var integer Anti-DDoS Advanced line. Valid values:
`1`: BGP
`2`: China Telecom
`3`: China Unicom
`4`: China Mobile
`99`: third-party line
]
     */
    public $Line;

    /**
     * @var integer Elastic protection bandwidth (in Mbps)
     */
    public $ElasticBandwidth;

    /**
     * @param integer $ProtectBandwidth Base protection bandwidth (in Mbps)
     * @param integer $ProtectCCQPS CC protection bandwidth (in QPS)
     * @param integer $NormalBandwidth Normal application bandwidth (in Mbps)
     * @param integer $ForwardRulesLimit Number of forwarding rules
     * @param integer $AutoRenewFlag Auto-renewal status. Valid values:
`0`: disabled
`1`: enabled
]
     * @param integer $Line Anti-DDoS Advanced line. Valid values:
`1`: BGP
`2`: China Telecom
`3`: China Unicom
`4`: China Mobile
`99`: third-party line
]
     * @param integer $ElasticBandwidth Elastic protection bandwidth (in Mbps)
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

        if (array_key_exists("ProtectCCQPS",$param) and $param["ProtectCCQPS"] !== null) {
            $this->ProtectCCQPS = $param["ProtectCCQPS"];
        }

        if (array_key_exists("NormalBandwidth",$param) and $param["NormalBandwidth"] !== null) {
            $this->NormalBandwidth = $param["NormalBandwidth"];
        }

        if (array_key_exists("ForwardRulesLimit",$param) and $param["ForwardRulesLimit"] !== null) {
            $this->ForwardRulesLimit = $param["ForwardRulesLimit"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("ElasticBandwidth",$param) and $param["ElasticBandwidth"] !== null) {
            $this->ElasticBandwidth = $param["ElasticBandwidth"];
        }
    }
}
