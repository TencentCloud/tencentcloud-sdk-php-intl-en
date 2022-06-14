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
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getCurrentProxyVersion() Obtain The current proxy version
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) Set The current proxy version
 * @method string getUpgradeProxyVersion() Obtain Upgradeable redis version
 * @method void setUpgradeProxyVersion(string $UpgradeProxyVersion) Set Upgradeable redis version
 * @method integer getInstanceTypeUpgradeNow() Obtain `1` (upgrade immediately), `0` (upgrade during maintenance time)
 * @method void setInstanceTypeUpgradeNow(integer $InstanceTypeUpgradeNow) Set `1` (upgrade immediately), `0` (upgrade during maintenance time)
 */
class UpgradeProxyVersionRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string The current proxy version
     */
    public $CurrentProxyVersion;

    /**
     * @var string Upgradeable redis version
     */
    public $UpgradeProxyVersion;

    /**
     * @var integer `1` (upgrade immediately), `0` (upgrade during maintenance time)
     */
    public $InstanceTypeUpgradeNow;

    /**
     * @param string $InstanceId Instance ID
     * @param string $CurrentProxyVersion The current proxy version
     * @param string $UpgradeProxyVersion Upgradeable redis version
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
