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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeVersionToMultiAvailabilityZones request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy it from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy it from the instance list.</p>
 * @method boolean getUpgradeProxyAndRedisServer() Obtain <p>Whether nearest access is supported after upgrading to multiple availability zones. - true: Supports nearest access. The upgrade process involves upgrading the Proxy version and Redis kernel minor version simultaneously, which may require data migration and take up to several hours. - false: No need to support nearest access. Upgrading to multiple availability zones only involves metadata management migration, with no impact on the service. The upgrade process is usually completed within 3 minutes. Defaults to false.</p>
 * @method void setUpgradeProxyAndRedisServer(boolean $UpgradeProxyAndRedisServer) Set <p>Whether nearest access is supported after upgrading to multiple availability zones. - true: Supports nearest access. The upgrade process involves upgrading the Proxy version and Redis kernel minor version simultaneously, which may require data migration and take up to several hours. - false: No need to support nearest access. Upgrading to multiple availability zones only involves metadata management migration, with no impact on the service. The upgrade process is usually completed within 3 minutes. Defaults to false.</p>
 */
class UpgradeVersionToMultiAvailabilityZonesRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy it from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var boolean <p>Whether nearest access is supported after upgrading to multiple availability zones. - true: Supports nearest access. The upgrade process involves upgrading the Proxy version and Redis kernel minor version simultaneously, which may require data migration and take up to several hours. - false: No need to support nearest access. Upgrading to multiple availability zones only involves metadata management migration, with no impact on the service. The upgrade process is usually completed within 3 minutes. Defaults to false.</p>
     */
    public $UpgradeProxyAndRedisServer;

    /**
     * @param string $InstanceId <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy it from the instance list.</p>
     * @param boolean $UpgradeProxyAndRedisServer <p>Whether nearest access is supported after upgrading to multiple availability zones. - true: Supports nearest access. The upgrade process involves upgrading the Proxy version and Redis kernel minor version simultaneously, which may require data migration and take up to several hours. - false: No need to support nearest access. Upgrading to multiple availability zones only involves metadata management migration, with no impact on the service. The upgrade process is usually completed within 3 minutes. Defaults to false.</p>
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
