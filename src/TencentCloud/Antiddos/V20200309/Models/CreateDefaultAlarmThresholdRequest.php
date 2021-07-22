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
 * CreateDefaultAlarmThreshold request structure.
 *
 * @method DefaultAlarmThreshold getDefaultAlarmConfig() Obtain Default alarm threshold configuration
 * @method void setDefaultAlarmConfig(DefaultAlarmThreshold $DefaultAlarmConfig) Set Default alarm threshold configuration
 * @method string getInstanceType() Obtain Product category. Valid values:
`bgp`: Anti-DDoS Pro
`bgpip`: Anti-DDoS Advanced
]
 * @method void setInstanceType(string $InstanceType) Set Product category. Valid values:
`bgp`: Anti-DDoS Pro
`bgpip`: Anti-DDoS Advanced
]
 */
class CreateDefaultAlarmThresholdRequest extends AbstractModel
{
    /**
     * @var DefaultAlarmThreshold Default alarm threshold configuration
     */
    public $DefaultAlarmConfig;

    /**
     * @var string Product category. Valid values:
`bgp`: Anti-DDoS Pro
`bgpip`: Anti-DDoS Advanced
]
     */
    public $InstanceType;

    /**
     * @param DefaultAlarmThreshold $DefaultAlarmConfig Default alarm threshold configuration
     * @param string $InstanceType Product category. Valid values:
`bgp`: Anti-DDoS Pro
`bgpip`: Anti-DDoS Advanced
]
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
        if (array_key_exists("DefaultAlarmConfig",$param) and $param["DefaultAlarmConfig"] !== null) {
            $this->DefaultAlarmConfig = new DefaultAlarmThreshold();
            $this->DefaultAlarmConfig->deserialize($param["DefaultAlarmConfig"]);
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
