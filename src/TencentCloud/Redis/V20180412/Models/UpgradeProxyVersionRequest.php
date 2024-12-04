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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeProxyVersion request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method string getCurrentProxyVersion() Obtain Current Proxy version.
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) Set Current Proxy version.
 * @method string getUpgradeProxyVersion() Obtain Upgradable Redis version.
 * @method void setUpgradeProxyVersion(string $UpgradeProxyVersion) Set Upgradable Redis version.
 * @method integer getInstanceTypeUpgradeNow() Obtain Specifies whether to upgrade immediately.
- 1: Upgrade immediately.
- 0: Upgrade during the maintenance window.
 * @method void setInstanceTypeUpgradeNow(integer $InstanceTypeUpgradeNow) Set Specifies whether to upgrade immediately.
- 1: Upgrade immediately.
- 0: Upgrade during the maintenance window.
 */
class UpgradeProxyVersionRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Current Proxy version.
     */
    public $CurrentProxyVersion;

    /**
     * @var string Upgradable Redis version.
     */
    public $UpgradeProxyVersion;

    /**
     * @var integer Specifies whether to upgrade immediately.
- 1: Upgrade immediately.
- 0: Upgrade during the maintenance window.
     */
    public $InstanceTypeUpgradeNow;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param string $CurrentProxyVersion Current Proxy version.
     * @param string $UpgradeProxyVersion Upgradable Redis version.
     * @param integer $InstanceTypeUpgradeNow Specifies whether to upgrade immediately.
- 1: Upgrade immediately.
- 0: Upgrade during the maintenance window.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CurrentProxyVersion",$param) and $param["CurrentProxyVersion"] !== null) {
            $this->CurrentProxyVersion = $param["CurrentProxyVersion"];
        }

        if (array_key_exists("UpgradeProxyVersion",$param) and $param["UpgradeProxyVersion"] !== null) {
            $this->UpgradeProxyVersion = $param["UpgradeProxyVersion"];
        }

        if (array_key_exists("InstanceTypeUpgradeNow",$param) and $param["InstanceTypeUpgradeNow"] !== null) {
            $this->InstanceTypeUpgradeNow = $param["InstanceTypeUpgradeNow"];
        }
    }
}
