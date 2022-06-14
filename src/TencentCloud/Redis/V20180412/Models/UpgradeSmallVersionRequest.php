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
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getCurrentRedisVersion() Obtain The current redis version
 * @method void setCurrentRedisVersion(string $CurrentRedisVersion) Set The current redis version
 * @method string getUpgradeRedisVersion() Obtain Upgradeable redis version
 * @method void setUpgradeRedisVersion(string $UpgradeRedisVersion) Set Upgradeable redis version
 * @method integer getInstanceTypeUpgradeNow() Obtain `1` (upgrade immediately), `0` (upgrade during maintenance time)
 * @method void setInstanceTypeUpgradeNow(integer $InstanceTypeUpgradeNow) Set `1` (upgrade immediately), `0` (upgrade during maintenance time)
 */
class UpgradeSmallVersionRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string The current redis version
     */
    public $CurrentRedisVersion;

    /**
     * @var string Upgradeable redis version
     */
    public $UpgradeRedisVersion;

    /**
     * @var integer `1` (upgrade immediately), `0` (upgrade during maintenance time)
     */
    public $InstanceTypeUpgradeNow;

    /**
     * @param string $InstanceId Instance ID
     * @param string $CurrentRedisVersion The current redis version
     * @param string $UpgradeRedisVersion Upgradeable redis version
     * @param integer $InstanceTypeUpgradeNow `1` (upgrade immediately), `0` (upgrade during maintenance time)
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
