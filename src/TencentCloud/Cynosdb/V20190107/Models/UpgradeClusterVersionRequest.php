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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeClusterVersion request structure.
 *
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getCynosVersion() Obtain <p>Kernel version</p>
 * @method void setCynosVersion(string $CynosVersion) Set <p>Kernel version</p>
 * @method string getUpgradeType() Obtain <p>Upgrade time type. Options: upgradeImmediate, upgradeInMaintain</p>
 * @method void setUpgradeType(string $UpgradeType) Set <p>Upgrade time type. Options: upgradeImmediate, upgradeInMaintain</p>
 */
class UpgradeClusterVersionRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Kernel version</p>
     */
    public $CynosVersion;

    /**
     * @var string <p>Upgrade time type. Options: upgradeImmediate, upgradeInMaintain</p>
     */
    public $UpgradeType;

    /**
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $CynosVersion <p>Kernel version</p>
     * @param string $UpgradeType <p>Upgrade time type. Options: upgradeImmediate, upgradeInMaintain</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }
    }
}
