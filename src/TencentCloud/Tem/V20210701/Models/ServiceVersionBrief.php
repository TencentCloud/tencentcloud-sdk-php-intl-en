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
 * List of application versions
 *
 * @method string getVersionName() Obtain Version name
 * @method void setVersionName(string $VersionName) Set Version name
 * @method string getStatus() Obtain Status of version
 * @method void setStatus(string $Status) Set Status of version
 * @method integer getEnableEs() Obtain (Disused) Whether to enable elastic scaling
 * @method void setEnableEs(integer $EnableEs) Set (Disused) Whether to enable elastic scaling
 * @method integer getCurrentInstances() Obtain Number of current instances
 * @method void setCurrentInstances(integer $CurrentInstances) Set Number of current instances
 * @method string getVersionId() Obtain Version ID
 * @method void setVersionId(string $VersionId) Set Version ID
 * @method LogOutputConf getLogOutputConf() Obtain (Disused) Log output configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogOutputConf(LogOutputConf $LogOutputConf) Set (Disused) Log output configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExpectedInstances() Obtain Expected number of instances
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpectedInstances(integer $ExpectedInstances) Set Expected number of instances
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDeployMode() Obtain Deployment mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeployMode(string $DeployMode) Set Deployment mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBuildTaskId() Obtain Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBuildTaskId(string $BuildTaskId) Set Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEnvironmentId() Obtain Environment ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEnvironmentName() Obtain Environment name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationId() Obtain Application ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set Application ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getUnderDeploying() Obtain Whether the application is being deployed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnderDeploying(boolean $UnderDeploying) Set Whether the application is being deployed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBatchDeployStatus() Obtain Status of batch deployment
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setBatchDeployStatus(string $BatchDeployStatus) Set Status of batch deployment
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getZones() Obtain Availability zones
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setZones(array $Zones) Set Availability zones
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getNodeInfos() Obtain Node information
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setNodeInfos(array $NodeInfos) Set Node information
Note: This field may return `null`, indicating that no valid value was found.
 * @method DescribeRunPodPage getPodList() Obtain Pod information
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPodList(DescribeRunPodPage $PodList) Set Pod information
Note: This field may return `null`, indicating that no valid value was found.
 * @method WorkloadInfo getWorkloadInfo() Obtain Workload information
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setWorkloadInfo(WorkloadInfo $WorkloadInfo) Set Workload information
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getCreateDate() Obtain Creation time
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setCreateDate(string $CreateDate) Set Creation time
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRegionId() Obtain Region ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(string $RegionId) Set Region ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ServiceVersionBrief extends AbstractModel
{
    /**
     * @var string Version name
     */
    public $VersionName;

    /**
     * @var string Status of version
     */
    public $Status;

    /**
     * @var integer (Disused) Whether to enable elastic scaling
     */
    public $EnableEs;

    /**
     * @var integer Number of current instances
     */
    public $CurrentInstances;

    /**
     * @var string Version ID
     */
    public $VersionId;

    /**
     * @var LogOutputConf (Disused) Log output configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogOutputConf;

    /**
     * @var integer Expected number of instances
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpectedInstances;

    /**
     * @var string Deployment mode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeployMode;

    /**
     * @var string Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BuildTaskId;

    /**
     * @var string Environment ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnvironmentId;

    /**
     * @var string Environment name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnvironmentName;

    /**
     * @var string Application ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var string Application name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var boolean Whether the application is being deployed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnderDeploying;

    /**
     * @var string Status of batch deployment
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $BatchDeployStatus;

    /**
     * @var array Availability zones
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Zones;

    /**
     * @var array Node information
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $NodeInfos;

    /**
     * @var DescribeRunPodPage Pod information
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PodList;

    /**
     * @var WorkloadInfo Workload information
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $WorkloadInfo;

    /**
     * @var string Creation time
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $CreateDate;

    /**
     * @var string Region ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @param string $VersionName Version name
     * @param string $Status Status of version
     * @param integer $EnableEs (Disused) Whether to enable elastic scaling
     * @param integer $CurrentInstances Number of current instances
     * @param string $VersionId Version ID
     * @param LogOutputConf $LogOutputConf (Disused) Log output configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ExpectedInstances Expected number of instances
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DeployMode Deployment mode
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BuildTaskId Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EnvironmentId Environment ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EnvironmentName Environment name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationId Application ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName Application name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $UnderDeploying Whether the application is being deployed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BatchDeployStatus Status of batch deployment
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $Zones Availability zones
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $NodeInfos Node information
Note: This field may return `null`, indicating that no valid value was found.
     * @param DescribeRunPodPage $PodList Pod information
Note: This field may return `null`, indicating that no valid value was found.
     * @param WorkloadInfo $WorkloadInfo Workload information
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $CreateDate Creation time
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $RegionId Region ID
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
        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EnableEs",$param) and $param["EnableEs"] !== null) {
            $this->EnableEs = $param["EnableEs"];
        }

        if (array_key_exists("CurrentInstances",$param) and $param["CurrentInstances"] !== null) {
            $this->CurrentInstances = $param["CurrentInstances"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("LogOutputConf",$param) and $param["LogOutputConf"] !== null) {
            $this->LogOutputConf = new LogOutputConf();
            $this->LogOutputConf->deserialize($param["LogOutputConf"]);
        }

        if (array_key_exists("ExpectedInstances",$param) and $param["ExpectedInstances"] !== null) {
            $this->ExpectedInstances = $param["ExpectedInstances"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("BuildTaskId",$param) and $param["BuildTaskId"] !== null) {
            $this->BuildTaskId = $param["BuildTaskId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("UnderDeploying",$param) and $param["UnderDeploying"] !== null) {
            $this->UnderDeploying = $param["UnderDeploying"];
        }

        if (array_key_exists("BatchDeployStatus",$param) and $param["BatchDeployStatus"] !== null) {
            $this->BatchDeployStatus = $param["BatchDeployStatus"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("NodeInfos",$param) and $param["NodeInfos"] !== null) {
            $this->NodeInfos = [];
            foreach ($param["NodeInfos"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfos, $obj);
            }
        }

        if (array_key_exists("PodList",$param) and $param["PodList"] !== null) {
            $this->PodList = new DescribeRunPodPage();
            $this->PodList->deserialize($param["PodList"]);
        }

        if (array_key_exists("WorkloadInfo",$param) and $param["WorkloadInfo"] !== null) {
            $this->WorkloadInfo = new WorkloadInfo();
            $this->WorkloadInfo->deserialize($param["WorkloadInfo"]);
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
