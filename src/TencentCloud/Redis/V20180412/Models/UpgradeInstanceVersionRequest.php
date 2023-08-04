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
 * UpgradeInstanceVersion request structure.
 *
 * @method string getTargetInstanceType() Obtain Target instance type after the change, which is the same as the `TypeId` of the [CreateInstances](https://intl.cloud.tencent.com/document/api/239/20026?from_cn_redirect=1) API.
- For Redis 4.0 or later, a standard architecture instance can be upgraded to a cluster architecture instance on the same version; for example, you can upgrade from Redis 4.0 Standard Architecture to Redis 4.0 Cluster Architecture.
- Cross-version architecture upgrade is not supported; for example, you cannot upgrade from Redis 4.0 Standard Architecture to Redis 5.0 Cluster Architecture.
- The architecture of Redis 2.8 cannot be upgraded.
- Cluster architecture cannot be downgraded to standard architecture.

 * @method void setTargetInstanceType(string $TargetInstanceType) Set Target instance type after the change, which is the same as the `TypeId` of the [CreateInstances](https://intl.cloud.tencent.com/document/api/239/20026?from_cn_redirect=1) API.
- For Redis 4.0 or later, a standard architecture instance can be upgraded to a cluster architecture instance on the same version; for example, you can upgrade from Redis 4.0 Standard Architecture to Redis 4.0 Cluster Architecture.
- Cross-version architecture upgrade is not supported; for example, you cannot upgrade from Redis 4.0 Standard Architecture to Redis 5.0 Cluster Architecture.
- The architecture of Redis 2.8 cannot be upgraded.
- Cluster architecture cannot be downgraded to standard architecture.

 * @method integer getSwitchOption() Obtain Switch time. Valid values:
- `1`: Switch in the maintenance time.
- `2` (default value): Switch now.
 * @method void setSwitchOption(integer $SwitchOption) Set Switch time. Valid values:
- `1`: Switch in the maintenance time.
- `2` (default value): Switch now.
 * @method string getInstanceId() Obtain ID of the specified instance, such as `crs-xjhsdj****`. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set ID of the specified instance, such as `crs-xjhsdj****`. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), and copy it in the instance list.
 */
class UpgradeInstanceVersionRequest extends AbstractModel
{
    /**
     * @var string Target instance type after the change, which is the same as the `TypeId` of the [CreateInstances](https://intl.cloud.tencent.com/document/api/239/20026?from_cn_redirect=1) API.
- For Redis 4.0 or later, a standard architecture instance can be upgraded to a cluster architecture instance on the same version; for example, you can upgrade from Redis 4.0 Standard Architecture to Redis 4.0 Cluster Architecture.
- Cross-version architecture upgrade is not supported; for example, you cannot upgrade from Redis 4.0 Standard Architecture to Redis 5.0 Cluster Architecture.
- The architecture of Redis 2.8 cannot be upgraded.
- Cluster architecture cannot be downgraded to standard architecture.

     */
    public $TargetInstanceType;

    /**
     * @var integer Switch time. Valid values:
- `1`: Switch in the maintenance time.
- `2` (default value): Switch now.
     */
    public $SwitchOption;

    /**
     * @var string ID of the specified instance, such as `crs-xjhsdj****`. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @param string $TargetInstanceType Target instance type after the change, which is the same as the `TypeId` of the [CreateInstances](https://intl.cloud.tencent.com/document/api/239/20026?from_cn_redirect=1) API.
- For Redis 4.0 or later, a standard architecture instance can be upgraded to a cluster architecture instance on the same version; for example, you can upgrade from Redis 4.0 Standard Architecture to Redis 4.0 Cluster Architecture.
- Cross-version architecture upgrade is not supported; for example, you cannot upgrade from Redis 4.0 Standard Architecture to Redis 5.0 Cluster Architecture.
- The architecture of Redis 2.8 cannot be upgraded.
- Cluster architecture cannot be downgraded to standard architecture.

     * @param integer $SwitchOption Switch time. Valid values:
- `1`: Switch in the maintenance time.
- `2` (default value): Switch now.
     * @param string $InstanceId ID of the specified instance, such as `crs-xjhsdj****`. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), and copy it in the instance list.
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
        if (array_key_exists("TargetInstanceType",$param) and $param["TargetInstanceType"] !== null) {
            $this->TargetInstanceType = $param["TargetInstanceType"];
        }

        if (array_key_exists("SwitchOption",$param) and $param["SwitchOption"] !== null) {
            $this->SwitchOption = $param["SwitchOption"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
