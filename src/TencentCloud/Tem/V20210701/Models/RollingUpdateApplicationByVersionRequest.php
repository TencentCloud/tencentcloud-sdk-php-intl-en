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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RollingUpdateApplicationByVersion request structure.
 *
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method string getDeployVersion() Obtain Update version. For image-based deployment, it is the value. For deployment with JAR/WAR files, it is `Version`.
 * @method void setDeployVersion(string $DeployVersion) Set Update version. For image-based deployment, it is the value. For deployment with JAR/WAR files, it is `Version`.
 * @method string getPackageName() Obtain JAR/WAR package name. It’s only required for deployment with JAR/WAR files.
 * @method void setPackageName(string $PackageName) Set JAR/WAR package name. It’s only required for deployment with JAR/WAR files.
 * @method string getFrom() Obtain Request source. Options: `IntelliJ`, `Coding`
 * @method void setFrom(string $From) Set Request source. Options: `IntelliJ`, `Coding`
 * @method string getDeployStrategyType() Obtain The deployment policy. Values: `AUTO` (automatically deploy), `BETA` (deploy a small batch first to test the result, and deploy the rest automatically) and `MANUAL` (manually deploy)
 * @method void setDeployStrategyType(string $DeployStrategyType) Set The deployment policy. Values: `AUTO` (automatically deploy), `BETA` (deploy a small batch first to test the result, and deploy the rest automatically) and `MANUAL` (manually deploy)
 * @method integer getTotalBatchCount() Obtain Total number of batches
 * @method void setTotalBatchCount(integer $TotalBatchCount) Set Total number of batches
 * @method integer getBatchInterval() Obtain Interval between the batches
 * @method void setBatchInterval(integer $BatchInterval) Set Interval between the batches
 * @method integer getBetaBatchNum() Obtain Number of instances in a beta batch
 * @method void setBetaBatchNum(integer $BetaBatchNum) Set Number of instances in a beta batch
 * @method integer getMinAvailable() Obtain Minimum number of available instances during the deployment
 * @method void setMinAvailable(integer $MinAvailable) Set Minimum number of available instances during the deployment
 * @method boolean getForce() Obtain Whether to enable force release
 * @method void setForce(boolean $Force) Set Whether to enable force release
 */
class RollingUpdateApplicationByVersionRequest extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var string Update version. For image-based deployment, it is the value. For deployment with JAR/WAR files, it is `Version`.
     */
    public $DeployVersion;

    /**
     * @var string JAR/WAR package name. It’s only required for deployment with JAR/WAR files.
     */
    public $PackageName;

    /**
     * @var string Request source. Options: `IntelliJ`, `Coding`
     */
    public $From;

    /**
     * @var string The deployment policy. Values: `AUTO` (automatically deploy), `BETA` (deploy a small batch first to test the result, and deploy the rest automatically) and `MANUAL` (manually deploy)
     */
    public $DeployStrategyType;

    /**
     * @var integer Total number of batches
     */
    public $TotalBatchCount;

    /**
     * @var integer Interval between the batches
     */
    public $BatchInterval;

    /**
     * @var integer Number of instances in a beta batch
     */
    public $BetaBatchNum;

    /**
     * @var integer Minimum number of available instances during the deployment
     */
    public $MinAvailable;

    /**
     * @var boolean Whether to enable force release
     */
    public $Force;

    /**
     * @param string $ApplicationId Application ID
     * @param string $EnvironmentId Environment ID
     * @param string $DeployVersion Update version. For image-based deployment, it is the value. For deployment with JAR/WAR files, it is `Version`.
     * @param string $PackageName JAR/WAR package name. It’s only required for deployment with JAR/WAR files.
     * @param string $From Request source. Options: `IntelliJ`, `Coding`
     * @param string $DeployStrategyType The deployment policy. Values: `AUTO` (automatically deploy), `BETA` (deploy a small batch first to test the result, and deploy the rest automatically) and `MANUAL` (manually deploy)
     * @param integer $TotalBatchCount Total number of batches
     * @param integer $BatchInterval Interval between the batches
     * @param integer $BetaBatchNum Number of instances in a beta batch
     * @param integer $MinAvailable Minimum number of available instances during the deployment
     * @param boolean $Force Whether to enable force release
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("DeployVersion",$param) and $param["DeployVersion"] !== null) {
            $this->DeployVersion = $param["DeployVersion"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("DeployStrategyType",$param) and $param["DeployStrategyType"] !== null) {
            $this->DeployStrategyType = $param["DeployStrategyType"];
        }

        if (array_key_exists("TotalBatchCount",$param) and $param["TotalBatchCount"] !== null) {
            $this->TotalBatchCount = $param["TotalBatchCount"];
        }

        if (array_key_exists("BatchInterval",$param) and $param["BatchInterval"] !== null) {
            $this->BatchInterval = $param["BatchInterval"];
        }

        if (array_key_exists("BetaBatchNum",$param) and $param["BetaBatchNum"] !== null) {
            $this->BetaBatchNum = $param["BetaBatchNum"];
        }

        if (array_key_exists("MinAvailable",$param) and $param["MinAvailable"] !== null) {
            $this->MinAvailable = $param["MinAvailable"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
