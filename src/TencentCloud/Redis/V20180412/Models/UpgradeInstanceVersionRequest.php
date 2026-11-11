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
 * UpgradeInstanceVersion request structure.
 *
 * @method string getTargetInstanceType() Obtain Target instance type, same as **TypeId** in [CreateInstances](https://www.tencentcloud.com/document/api/239/20026?from_cn_redirect=1), which is the target type to change the instance to.
- For Redis 4.0 or higher, instances of the same version support upgrading from standard architecture to cluster architecture. For example, Redis 4.0 standard architecture can be upgraded to Redis 4.0 cluster architecture.
-Cross-version architecture upgrade is not supported, for example, upgrading from Redis 4.0 standard architecture to Redis 5.0 cluster architecture.
-Architecture upgrade from Redis 2.8 is not supported.
-Downgrade from cluster architecture to standard architecture is not supported.

 * @method void setTargetInstanceType(string $TargetInstanceType) Set Target instance type, same as **TypeId** in [CreateInstances](https://www.tencentcloud.com/document/api/239/20026?from_cn_redirect=1), which is the target type to change the instance to.
- For Redis 4.0 or higher, instances of the same version support upgrading from standard architecture to cluster architecture. For example, Redis 4.0 standard architecture can be upgraded to Redis 4.0 cluster architecture.
-Cross-version architecture upgrade is not supported, for example, upgrading from Redis 4.0 standard architecture to Redis 5.0 cluster architecture.
-Architecture upgrade from Redis 2.8 is not supported.
-Downgrade from cluster architecture to standard architecture is not supported.

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
     * @var string Target instance type, same as **TypeId** in [CreateInstances](https://www.tencentcloud.com/document/api/239/20026?from_cn_redirect=1), which is the target type to change the instance to.
- For Redis 4.0 or higher, instances of the same version support upgrading from standard architecture to cluster architecture. For example, Redis 4.0 standard architecture can be upgraded to Redis 4.0 cluster architecture.
-Cross-version architecture upgrade is not supported, for example, upgrading from Redis 4.0 standard architecture to Redis 5.0 cluster architecture.
-Architecture upgrade from Redis 2.8 is not supported.
-Downgrade from cluster architecture to standard architecture is not supported.

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
     * @param string $TargetInstanceType Target instance type, same as **TypeId** in [CreateInstances](https://www.tencentcloud.com/document/api/239/20026?from_cn_redirect=1), which is the target type to change the instance to.
- For Redis 4.0 or higher, instances of the same version support upgrading from standard architecture to cluster architecture. For example, Redis 4.0 standard architecture can be upgraded to Redis 4.0 cluster architecture.
-Cross-version architecture upgrade is not supported, for example, upgrading from Redis 4.0 standard architecture to Redis 5.0 cluster architecture.
-Architecture upgrade from Redis 2.8 is not supported.
-Downgrade from cluster architecture to standard architecture is not supported.

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
