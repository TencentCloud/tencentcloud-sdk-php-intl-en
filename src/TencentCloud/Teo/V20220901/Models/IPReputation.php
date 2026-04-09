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
 * IP intelligence library (formerly client profile analysis) configuration.
 *
 * @method string getEnabled() Obtain IP intelligence library (formerly client profile analysis). valid values: <li>on: enable;</li> <li>off: disable.</li>.
 * @method void setEnabled(string $Enabled) Set IP intelligence library (formerly client profile analysis). valid values: <li>on: enable;</li> <li>off: disable.</li>.
 * @method IPReputationGroup getIPReputationGroup() Obtain IP intelligence library (formerly client profile analysis) configuration content.
 * @method void setIPReputationGroup(IPReputationGroup $IPReputationGroup) Set IP intelligence library (formerly client profile analysis) configuration content.
 */
class IPReputation extends AbstractModel
{
    /**
     * @var string IP intelligence library (formerly client profile analysis). valid values: <li>on: enable;</li> <li>off: disable.</li>.
     */
    public $Enabled;

    /**
     * @var IPReputationGroup IP intelligence library (formerly client profile analysis) configuration content.
     */
    public $IPReputationGroup;

    /**
     * @param string $Enabled IP intelligence library (formerly client profile analysis). valid values: <li>on: enable;</li> <li>off: disable.</li>.
     * @param IPReputationGroup $IPReputationGroup IP intelligence library (formerly client profile analysis) configuration content.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("IPReputationGroup",$param) and $param["IPReputationGroup"] !== null) {
            $this->IPReputationGroup = new IPReputationGroup();
            $this->IPReputationGroup->deserialize($param["IPReputationGroup"]);
        }
    }
}
