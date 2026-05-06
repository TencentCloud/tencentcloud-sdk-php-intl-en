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
 * ModifyAutoScalerResourceStrategy request structure.
 *
 * @method string getGatewayId() Obtain Gateway instance ID
 * @method void setGatewayId(string $GatewayId) Set Gateway instance ID
 * @method string getStrategyId() Obtain Policy ID
 * @method void setStrategyId(string $StrategyId) Set Policy ID
 * @method string getStrategyName() Obtain Policy name.
 * @method void setStrategyName(string $StrategyName) Set Policy name.
 * @method string getDescription() Obtain Policy description
 * @method void setDescription(string $Description) Set Policy description
 * @method CloudNativeAPIGatewayStrategyAutoScalerConfig getConfig() Obtain Metric scaling configuration
 * @method void setConfig(CloudNativeAPIGatewayStrategyAutoScalerConfig $Config) Set Metric scaling configuration
 * @method CloudNativeAPIGatewayStrategyCronScalerConfig getCronScalerConfig() Obtain Scheduled scaling configuration
 * @method void setCronScalerConfig(CloudNativeAPIGatewayStrategyCronScalerConfig $CronScalerConfig) Set Scheduled scaling configuration
 * @method integer getMaxReplicas() Obtain Maximum number of nodes
 * @method void setMaxReplicas(integer $MaxReplicas) Set Maximum number of nodes
 * @method CloudNativeAPIGatewayStrategyCronScalerConfig getCronConfig() Obtain Metric scaling configuration
 * @method void setCronConfig(CloudNativeAPIGatewayStrategyCronScalerConfig $CronConfig) Set Metric scaling configuration
 */
class ModifyAutoScalerResourceStrategyRequest extends AbstractModel
{
    /**
     * @var string Gateway instance ID
     */
    public $GatewayId;

    /**
     * @var string Policy ID
     */
    public $StrategyId;

    /**
     * @var string Policy name.
     */
    public $StrategyName;

    /**
     * @var string Policy description
     */
    public $Description;

    /**
     * @var CloudNativeAPIGatewayStrategyAutoScalerConfig Metric scaling configuration
     */
    public $Config;

    /**
     * @var CloudNativeAPIGatewayStrategyCronScalerConfig Scheduled scaling configuration
     * @deprecated
     */
    public $CronScalerConfig;

    /**
     * @var integer Maximum number of nodes
     * @deprecated
     */
    public $MaxReplicas;

    /**
     * @var CloudNativeAPIGatewayStrategyCronScalerConfig Metric scaling configuration
     */
    public $CronConfig;

    /**
     * @param string $GatewayId Gateway instance ID
     * @param string $StrategyId Policy ID
     * @param string $StrategyName Policy name.
     * @param string $Description Policy description
     * @param CloudNativeAPIGatewayStrategyAutoScalerConfig $Config Metric scaling configuration
     * @param CloudNativeAPIGatewayStrategyCronScalerConfig $CronScalerConfig Scheduled scaling configuration
     * @param integer $MaxReplicas Maximum number of nodes
     * @param CloudNativeAPIGatewayStrategyCronScalerConfig $CronConfig Metric scaling configuration
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new CloudNativeAPIGatewayStrategyAutoScalerConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("CronScalerConfig",$param) and $param["CronScalerConfig"] !== null) {
            $this->CronScalerConfig = new CloudNativeAPIGatewayStrategyCronScalerConfig();
            $this->CronScalerConfig->deserialize($param["CronScalerConfig"]);
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("CronConfig",$param) and $param["CronConfig"] !== null) {
            $this->CronConfig = new CloudNativeAPIGatewayStrategyCronScalerConfig();
            $this->CronConfig->deserialize($param["CronConfig"]);
        }
    }
}
