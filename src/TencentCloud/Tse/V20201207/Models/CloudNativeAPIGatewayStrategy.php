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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Gateway instance policy
 *
 * @method string getStrategyId() Obtain Policy ID
 * @method void setStrategyId(string $StrategyId) Set Policy ID
 * @method string getStrategyName() Obtain Policy name.
 * @method void setStrategyName(string $StrategyName) Set Policy name.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getModifyTime() Obtain Update time
 * @method void setModifyTime(string $ModifyTime) Set Update time
 * @method string getDescription() Obtain Policy description
 * @method void setDescription(string $Description) Set Policy description
 * @method CloudNativeAPIGatewayStrategyAutoScalerConfig getConfig() Obtain Auto scaling configuration
 * @method void setConfig(CloudNativeAPIGatewayStrategyAutoScalerConfig $Config) Set Auto scaling configuration
 * @method string getGatewayId() Obtain Gateway instance ID
 * @method void setGatewayId(string $GatewayId) Set Gateway instance ID
 * @method CloudNativeAPIGatewayStrategyCronScalerConfig getCronConfig() Obtain Scheduled scaling configuration
 * @method void setCronConfig(CloudNativeAPIGatewayStrategyCronScalerConfig $CronConfig) Set Scheduled scaling configuration
 * @method integer getMaxReplicas() Obtain Maximum number of nodes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxReplicas(integer $MaxReplicas) Set Maximum number of nodes
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CloudNativeAPIGatewayStrategy extends AbstractModel
{
    /**
     * @var string Policy ID
     */
    public $StrategyId;

    /**
     * @var string Policy name.
     */
    public $StrategyName;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $ModifyTime;

    /**
     * @var string Policy description
     */
    public $Description;

    /**
     * @var CloudNativeAPIGatewayStrategyAutoScalerConfig Auto scaling configuration
     */
    public $Config;

    /**
     * @var string Gateway instance ID
     */
    public $GatewayId;

    /**
     * @var CloudNativeAPIGatewayStrategyCronScalerConfig Scheduled scaling configuration
     */
    public $CronConfig;

    /**
     * @var integer Maximum number of nodes
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $MaxReplicas;

    /**
     * @param string $StrategyId Policy ID
     * @param string $StrategyName Policy name.
     * @param string $CreateTime Creation time.
     * @param string $ModifyTime Update time
     * @param string $Description Policy description
     * @param CloudNativeAPIGatewayStrategyAutoScalerConfig $Config Auto scaling configuration
     * @param string $GatewayId Gateway instance ID
     * @param CloudNativeAPIGatewayStrategyCronScalerConfig $CronConfig Scheduled scaling configuration
     * @param integer $MaxReplicas Maximum number of nodes
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new CloudNativeAPIGatewayStrategyAutoScalerConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("CronConfig",$param) and $param["CronConfig"] !== null) {
            $this->CronConfig = new CloudNativeAPIGatewayStrategyCronScalerConfig();
            $this->CronConfig->deserialize($param["CronConfig"]);
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }
    }
}
