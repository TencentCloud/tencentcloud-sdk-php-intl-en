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
 * UpgradeVersionToMultiAvailabilityZones request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method boolean getUpgradeProxyAndRedisServer() Obtain Whether to support “Reading Local Nodes Only” feature after upgrading to multi-AZ deployment.
ul><li>`true`: The “Read Local Nodes Only” feature is supported. During the upgrade, you need to upgrade the proxy version and Redis kernel minor version simultaneously, which will involve data migration and may take hours to complete. </li><li>`false`: The “Read Local Nodes Only” feature is not supported. Upgrading to multi-AZ deployment will involve metadata migration only without affecting the service, which generally take less than three minutes to complete.</li></ul>
 * @method void setUpgradeProxyAndRedisServer(boolean $UpgradeProxyAndRedisServer) Set Whether to support “Reading Local Nodes Only” feature after upgrading to multi-AZ deployment.
ul><li>`true`: The “Read Local Nodes Only” feature is supported. During the upgrade, you need to upgrade the proxy version and Redis kernel minor version simultaneously, which will involve data migration and may take hours to complete. </li><li>`false`: The “Read Local Nodes Only” feature is not supported. Upgrading to multi-AZ deployment will involve metadata migration only without affecting the service, which generally take less than three minutes to complete.</li></ul>
 */
class UpgradeVersionToMultiAvailabilityZonesRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var boolean Whether to support “Reading Local Nodes Only” feature after upgrading to multi-AZ deployment.
ul><li>`true`: The “Read Local Nodes Only” feature is supported. During the upgrade, you need to upgrade the proxy version and Redis kernel minor version simultaneously, which will involve data migration and may take hours to complete. </li><li>`false`: The “Read Local Nodes Only” feature is not supported. Upgrading to multi-AZ deployment will involve metadata migration only without affecting the service, which generally take less than three minutes to complete.</li></ul>
     */
    public $UpgradeProxyAndRedisServer;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param boolean $UpgradeProxyAndRedisServer Whether to support “Reading Local Nodes Only” feature after upgrading to multi-AZ deployment.
ul><li>`true`: The “Read Local Nodes Only” feature is supported. During the upgrade, you need to upgrade the proxy version and Redis kernel minor version simultaneously, which will involve data migration and may take hours to complete. </li><li>`false`: The “Read Local Nodes Only” feature is not supported. Upgrading to multi-AZ deployment will involve metadata migration only without affecting the service, which generally take less than three minutes to complete.</li></ul>
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

        if (array_key_exists("UpgradeProxyAndRedisServer",$param) and $param["UpgradeProxyAndRedisServer"] !== null) {
            $this->UpgradeProxyAndRedisServer = $param["UpgradeProxyAndRedisServer"];
        }
    }
}
