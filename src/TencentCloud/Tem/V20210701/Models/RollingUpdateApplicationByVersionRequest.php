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
 * @method string getDeployStrategyType() Obtain 
 * @method void setDeployStrategyType(string $DeployStrategyType) Set 
 * @method integer getTotalBatchCount() Obtain 
 * @method void setTotalBatchCount(integer $TotalBatchCount) Set 
 * @method integer getBatchInterval() Obtain 
 * @method void setBatchInterval(integer $BatchInterval) Set 
 * @method integer getBetaBatchNum() Obtain 
 * @method void setBetaBatchNum(integer $BetaBatchNum) Set 
 * @method integer getMinAvailable() Obtain 
 * @method void setMinAvailable(integer $MinAvailable) Set 
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
     * @var string 
     */
    public $DeployStrategyType;

    /**
     * @var integer 
     */
    public $TotalBatchCount;

    /**
     * @var integer 
     */
    public $BatchInterval;

    /**
     * @var integer 
     */
    public $BetaBatchNum;

    /**
     * @var integer 
     */
    public $MinAvailable;

    /**
     * @param string $ApplicationId Application ID
     * @param string $EnvironmentId Environment ID
     * @param string $DeployVersion Update version. For image-based deployment, it is the value. For deployment with JAR/WAR files, it is `Version`.
     * @param string $PackageName JAR/WAR package name. It’s only required for deployment with JAR/WAR files.
     * @param string $From Request source. Options: `IntelliJ`, `Coding`
     * @param string $DeployStrategyType 
     * @param integer $TotalBatchCount 
     * @param integer $BatchInterval 
     * @param integer $BetaBatchNum 
     * @param integer $MinAvailable 
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
    }
}
