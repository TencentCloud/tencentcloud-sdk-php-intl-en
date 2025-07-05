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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Auto-upgrades cluster specification
 *
 * @method boolean getIsAutoUpgrade() Obtain Whether to enable Auto Cluster Upgrade
 * @method void setIsAutoUpgrade(boolean $IsAutoUpgrade) Set Whether to enable Auto Cluster Upgrade
 */
class AutoUpgradeClusterLevel extends AbstractModel
{
    /**
     * @var boolean Whether to enable Auto Cluster Upgrade
     */
    public $IsAutoUpgrade;

    /**
     * @param boolean $IsAutoUpgrade Whether to enable Auto Cluster Upgrade
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
        if (array_key_exists("IsAutoUpgrade",$param) and $param["IsAutoUpgrade"] !== null) {
            $this->IsAutoUpgrade = $param["IsAutoUpgrade"];
        }
    }
}
