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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeClusterVersion request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getCynosVersion() Obtain Kernel version
 * @method void setCynosVersion(string $CynosVersion) Set Kernel version
 * @method string getUpgradeType() Obtain Upgrade time type. Valid values: `upgradeImmediate`, `upgradeInMaintain`.
 * @method void setUpgradeType(string $UpgradeType) Set Upgrade time type. Valid values: `upgradeImmediate`, `upgradeInMaintain`.
 */
class UpgradeClusterVersionRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Kernel version
     */
    public $CynosVersion;

    /**
     * @var string Upgrade time type. Valid values: `upgradeImmediate`, `upgradeInMaintain`.
     */
    public $UpgradeType;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $CynosVersion Kernel version
     * @param string $UpgradeType Upgrade time type. Valid values: `upgradeImmediate`, `upgradeInMaintain`.
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
