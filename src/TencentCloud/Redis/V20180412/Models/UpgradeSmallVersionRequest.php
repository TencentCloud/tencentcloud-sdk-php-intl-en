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
 * UpgradeSmallVersion request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method string getCurrentRedisVersion() Obtain Current Redis minor version. For minor version information, see [Upgrading Instance Version](https://www.tencentcloud.com/document/product/239/37710).
 * @method void setCurrentRedisVersion(string $CurrentRedisVersion) Set Current Redis minor version. For minor version information, see [Upgrading Instance Version](https://www.tencentcloud.com/document/product/239/37710).
 * @method string getUpgradeRedisVersion() Obtain Upgraded Redis minor version. For minor version information, see [Upgrading Instance Version](https://www.tencentcloud.com/document/product/239/37710).
 * @method void setUpgradeRedisVersion(string $UpgradeRedisVersion) Set Upgraded Redis minor version. For minor version information, see [Upgrading Instance Version](https://www.tencentcloud.com/document/product/239/37710).
 * @method integer getInstanceTypeUpgradeNow() Obtain Whether to upgrade immediately.
- 1: Upgrade immediately.
- 0: Upgrade during the maintenance window.
 * @method void setInstanceTypeUpgradeNow(integer $InstanceTypeUpgradeNow) Set Whether to upgrade immediately.
- 1: Upgrade immediately.
- 0: Upgrade during the maintenance window.
 */
class UpgradeSmallVersionRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Current Redis minor version. For minor version information, see [Upgrading Instance Version](https://www.tencentcloud.com/document/product/239/37710).
     */
    public $CurrentRedisVersion;

    /**
     * @var string Upgraded Redis minor version. For minor version information, see [Upgrading Instance Version](https://www.tencentcloud.com/document/product/239/37710).
     */
    public $UpgradeRedisVersion;

    /**
     * @var integer Whether to upgrade immediately.
- 1: Upgrade immediately.
- 0: Upgrade during the maintenance window.
     */
    public $InstanceTypeUpgradeNow;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param string $CurrentRedisVersion Current Redis minor version. For minor version information, see [Upgrading Instance Version](https://www.tencentcloud.com/document/product/239/37710).
     * @param string $UpgradeRedisVersion Upgraded Redis minor version. For minor version information, see [Upgrading Instance Version](https://www.tencentcloud.com/document/product/239/37710).
     * @param integer $InstanceTypeUpgradeNow Whether to upgrade immediately.
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

        if (array_key_exists("CurrentRedisVersion",$param) and $param["CurrentRedisVersion"] !== null) {
            $this->CurrentRedisVersion = $param["CurrentRedisVersion"];
        }

        if (array_key_exists("UpgradeRedisVersion",$param) and $param["UpgradeRedisVersion"] !== null) {
            $this->UpgradeRedisVersion = $param["UpgradeRedisVersion"];
        }

        if (array_key_exists("InstanceTypeUpgradeNow",$param) and $param["InstanceTypeUpgradeNow"] !== null) {
            $this->InstanceTypeUpgradeNow = $param["InstanceTypeUpgradeNow"];
        }
    }
}
