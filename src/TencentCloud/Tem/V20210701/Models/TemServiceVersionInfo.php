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
 * Version information
 *
 * @method string getVersionId() Obtain Version ID
 * @method void setVersionId(string $VersionId) Set Version ID
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getDeployMode() Obtain Deployment mode
 * @method void setDeployMode(string $DeployMode) Set Deployment mode
 * @method string getJdkVersion() Obtain JDK version
 * @method void setJdkVersion(string $JdkVersion) Set JDK version
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getDeployVersion() Obtain Deployed version
 * @method void setDeployVersion(string $DeployVersion) Set Deployed version
 * @method string getPublishMode() Obtain Publish mode
 * @method void setPublishMode(string $PublishMode) Set Publish mode
 * @method string getJvmOpts() Obtain Launch parameter
 * @method void setJvmOpts(string $JvmOpts) Set Launch parameter
 * @method integer getInitPodNum() Obtain Number of initial pods
 * @method void setInitPodNum(integer $InitPodNum) Set Number of initial pods
 * @method float getCpuSpec() Obtain CPU specification
 * @method void setCpuSpec(float $CpuSpec) Set CPU specification
 * @method float getMemorySpec() Obtain Memory specification
 * @method void setMemorySpec(float $MemorySpec) Set Memory specification
 * @method string getImgRepo() Obtain Image path
 * @method void setImgRepo(string $ImgRepo) Set Image path
 * @method string getImgName() Obtain Image name
 * @method void setImgName(string $ImgName) Set Image name
 * @method string getImgVersion() Obtain Image version
 * @method void setImgVersion(string $ImgVersion) Set Image version
 * @method EsInfo getEsInfo() Obtain Scaling configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEsInfo(EsInfo $EsInfo) Set Scaling configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getEnvConf() Obtain Environment configuration
 * @method void setEnvConf(array $EnvConf) Set Environment configuration
 * @method array getStorageConfs() Obtain Storage configuration
 * @method void setStorageConfs(array $StorageConfs) Set Storage configuration
 * @method string getStatus() Obtain Running status
 * @method void setStatus(string $Status) Set Running status
 * @method string getVpc() Obtain VPC
 * @method void setVpc(string $Vpc) Set VPC
 * @method string getSubnetId() Obtain Subnets
 * @method void setSubnetId(string $SubnetId) Set Subnets
 * @method string getCreateDate() Obtain Creation time
 * @method void setCreateDate(string $CreateDate) Set Creation time
 * @method string getModifyDate() Obtain Modification time
 * @method void setModifyDate(string $ModifyDate) Set Modification time
 * @method array getStorageMountConfs() Obtain Mounting configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setStorageMountConfs(array $StorageMountConfs) Set Mounting configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getVersionName() Obtain Version name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setVersionName(string $VersionName) Set Version name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method LogOutputConf getLogOutputConf() Obtain Log output configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLogOutputConf(LogOutputConf $LogOutputConf) Set Log output configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getApplicationDescription() Obtain Application description
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setApplicationDescription(string $ApplicationDescription) Set Application description
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getEnvironmentName() Obtain Environment name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getEnvironmentId() Obtain Environment ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getPublicDomain() Obtain Public network address
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPublicDomain(string $PublicDomain) Set Public network address
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getEnablePublicAccess() Obtain Whether to enable public network access
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnablePublicAccess(boolean $EnablePublicAccess) Set Whether to enable public network access
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getCurrentInstances() Obtain Number of current instances
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCurrentInstances(integer $CurrentInstances) Set Number of current instances
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getExpectedInstances() Obtain Number of expected instances
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setExpectedInstances(integer $ExpectedInstances) Set Number of expected instances
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCodingLanguage() Obtain Programming Language
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCodingLanguage(string $CodingLanguage) Set Programming Language
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getPkgName() Obtain Program package name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPkgName(string $PkgName) Set Program package name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getEsEnable() Obtain Whether to enable auto scaling
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEsEnable(integer $EsEnable) Set Whether to enable auto scaling
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getEsStrategy() Obtain Auto scaling policy
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEsStrategy(integer $EsStrategy) Set Auto scaling policy
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getImageTag() Obtain Image tag
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setImageTag(string $ImageTag) Set Image tag
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getLogEnable() Obtain Whether to enable logging
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLogEnable(integer $LogEnable) Set Whether to enable logging
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getMinAliveInstances() Obtain Minimum number of instances
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setMinAliveInstances(string $MinAliveInstances) Set Minimum number of instances
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getSecurityGroupIds() Obtain Security group IDs
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group IDs
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getImageCommand() Obtain Image command
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setImageCommand(string $ImageCommand) Set Image command
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getImageArgs() Obtain Image command parameters
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setImageArgs(array $ImageArgs) Set Image command parameters
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getUseRegistryDefaultConfig() Obtain Whether to use the default registry configurations
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUseRegistryDefaultConfig(boolean $UseRegistryDefaultConfig) Set Whether to use the default registry configurations
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method EksService getService() Obtain EKS access configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setService(EksService $Service) Set EKS access configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getSettingConfs() Obtain Mounting configurations
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSettingConfs(array $SettingConfs) Set Mounting configurations
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getLogConfs() Obtain Log path information
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLogConfs(array $LogConfs) Set Log path information
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getPostStart() Obtain The script to execute right after the startup
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPostStart(string $PostStart) Set The script to execute right after the startup
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getPreStop() Obtain The script to run before stop
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPreStop(string $PreStop) Set The script to run before stop
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method HealthCheckConfig getLiveness() Obtain Configuration of aliveness probe
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLiveness(HealthCheckConfig $Liveness) Set Configuration of aliveness probe
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method HealthCheckConfig getReadiness() Obtain Configuration of readiness probe
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setReadiness(HealthCheckConfig $Readiness) Set Configuration of readiness probe
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getHorizontalAutoscaler() Obtain Auto scaling policy
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setHorizontalAutoscaler(array $HorizontalAutoscaler) Set Auto scaling policy
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getCronHorizontalAutoscaler() Obtain Scheduled auto scaling policy
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCronHorizontalAutoscaler(array $CronHorizontalAutoscaler) Set Scheduled auto scaling policy
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getZones() Obtain Availability zone of the application
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setZones(array $Zones) Set Availability zone of the application
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getLastDeployDate() Obtain The latest deployment time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLastDeployDate(string $LastDeployDate) Set The latest deployment time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getLastDeploySuccessDate() Obtain The latest successful deployment time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLastDeploySuccessDate(string $LastDeploySuccessDate) Set The latest successful deployment time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getNodeInfos() Obtain Information of the node whether the application is deployed
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setNodeInfos(array $NodeInfos) Set Information of the node whether the application is deployed
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getImageType() Obtain Image type. Values: `0` (Demo image), `1` (Normal image)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setImageType(integer $ImageType) Set Image type. Values: `0` (Demo image), `1` (Normal image)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getEnableTracing() Obtain Whether to 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnableTracing(integer $EnableTracing) Set Whether to 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getEnableTracingReport() Obtain (Disused) Whether to enable linkage tracing and report. It only takes effect when EnableTracing = `1`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableTracingReport(integer $EnableTracingReport) Set (Disused) Whether to enable linkage tracing and report. It only takes effect when EnableTracing = `1`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRepoType() Obtain Image type. `0`: Individual image; `1`: Enterprise image; `2`: Public image
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRepoType(integer $RepoType) Set Image type. `0`: Individual image; `1`: Enterprise image; `2`: Public image
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getBatchDeployStatus() Obtain Status of batch deployment: `batch_updating`, `batch_updating_waiting_confirm`
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setBatchDeployStatus(string $BatchDeployStatus) Set Status of batch deployment: `batch_updating`, `batch_updating_waiting_confirm`
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getApmInstanceId() Obtain APM instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setApmInstanceId(string $ApmInstanceId) Set APM instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method WorkloadInfo getWorkloadInfo() Obtain Workload information 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setWorkloadInfo(WorkloadInfo $WorkloadInfo) Set Workload information 
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getSpeedUp() Obtain Whether to enable application acceleration
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSpeedUp(boolean $SpeedUp) Set Whether to enable application acceleration
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method HealthCheckConfig getStartupProbe() Obtain Configuration of the startup probe
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setStartupProbe(HealthCheckConfig $StartupProbe) Set Configuration of the startup probe
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getOsFlavour() Obtain OS version. Values:
- ALPINE
- CENTOS
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setOsFlavour(string $OsFlavour) Set OS version. Values:
- ALPINE
- CENTOS
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRepoServer() Obtain Image repository server
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRepoServer(string $RepoServer) Set Image repository server
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getUnderDeploying() Obtain Whether the application is being deployed
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setUnderDeploying(boolean $UnderDeploying) Set Whether the application is being deployed
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method EnablePrometheusConf getEnablePrometheusConf() Obtain Whether to enable application metric monitoring 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnablePrometheusConf(EnablePrometheusConf $EnablePrometheusConf) Set Whether to enable application metric monitoring 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getStoppedManually() Obtain Whether it’s stopped manually
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setStoppedManually(boolean $StoppedManually) Set Whether it’s stopped manually
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getTcrInstanceId() Obtain TCR instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTcrInstanceId(string $TcrInstanceId) Set TCR instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getEnableMetrics() Obtain `1`: Automatically enable metrics collection (open-telemetry)
`0`: Disable metrics collection
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableMetrics(integer $EnableMetrics) Set `1`: Automatically enable metrics collection (open-telemetry)
`0`: Disable metrics collection
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppId() Obtain User AppId
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setAppId(string $AppId) Set User AppId
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getSubAccountUin() Obtain Sub Account UIN
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSubAccountUin(string $SubAccountUin) Set Sub Account UIN
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getUin() Obtain User UIN
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setUin(string $Uin) Set User UIN
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRegion() Obtain Region
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setRegion(string $Region) Set Region
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getGroupId() Obtain Application group ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setGroupId(string $GroupId) Set Application group ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getEnableRegistry() Obtain Whether to enable registry
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEnableRegistry(integer $EnableRegistry) Set Whether to enable registry
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getAutoscalerList() Obtain Array of scaling rules
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setAutoscalerList(array $AutoscalerList) Set Array of scaling rules
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getModifier() Obtain Modifier
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setModifier(string $Modifier) Set Modifier
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getCreator() Obtain Creator
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setCreator(string $Creator) Set Creator
Note: This field may return `null`, indicating that no valid value was found.
 * @method DeployStrategyConf getDeployStrategyConf() Obtain Deployment strategy
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setDeployStrategyConf(DeployStrategyConf $DeployStrategyConf) Set Deployment strategy
Note: This field may return `null`, indicating that no valid value was found.
 * @method DescribeRunPodPage getPodList() Obtain List of pods
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPodList(DescribeRunPodPage $PodList) Set List of pods
Note: This field may return `null`, indicating that no valid value was found.
 * @method boolean getConfEdited() Obtain Whether the configuration has been changed during deployment
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setConfEdited(boolean $ConfEdited) Set Whether the configuration has been changed during deployment
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getTags() Obtain Tag
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTags(array $Tags) Set Tag
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getPreStopEncoded() Obtain Whether to encode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPreStopEncoded(string $PreStopEncoded) Set Whether to encode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPostStartEncoded() Obtain Whether to encode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPostStartEncoded(string $PostStartEncoded) Set Whether to encode
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TemServiceVersionInfo extends AbstractModel
{
    /**
     * @var string Version ID
     */
    public $VersionId;

    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Deployment mode
     */
    public $DeployMode;

    /**
     * @var string JDK version
     */
    public $JdkVersion;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Deployed version
     */
    public $DeployVersion;

    /**
     * @var string Publish mode
     */
    public $PublishMode;

    /**
     * @var string Launch parameter
     */
    public $JvmOpts;

    /**
     * @var integer Number of initial pods
     */
    public $InitPodNum;

    /**
     * @var float CPU specification
     */
    public $CpuSpec;

    /**
     * @var float Memory specification
     */
    public $MemorySpec;

    /**
     * @var string Image path
     */
    public $ImgRepo;

    /**
     * @var string Image name
     */
    public $ImgName;

    /**
     * @var string Image version
     */
    public $ImgVersion;

    /**
     * @var EsInfo Scaling configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EsInfo;

    /**
     * @var array Environment configuration
     */
    public $EnvConf;

    /**
     * @var array Storage configuration
     */
    public $StorageConfs;

    /**
     * @var string Running status
     */
    public $Status;

    /**
     * @var string VPC
     */
    public $Vpc;

    /**
     * @var string Subnets
     */
    public $SubnetId;

    /**
     * @var string Creation time
     */
    public $CreateDate;

    /**
     * @var string Modification time
     */
    public $ModifyDate;

    /**
     * @var array Mounting configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $StorageMountConfs;

    /**
     * @var string Version name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $VersionName;

    /**
     * @var LogOutputConf Log output configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LogOutputConf;

    /**
     * @var string Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var string Application description
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ApplicationDescription;

    /**
     * @var string Environment name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnvironmentName;

    /**
     * @var string Environment ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnvironmentId;

    /**
     * @var string Public network address
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PublicDomain;

    /**
     * @var boolean Whether to enable public network access
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnablePublicAccess;

    /**
     * @var integer Number of current instances
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CurrentInstances;

    /**
     * @var integer Number of expected instances
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ExpectedInstances;

    /**
     * @var string Programming Language
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CodingLanguage;

    /**
     * @var string Program package name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PkgName;

    /**
     * @var integer Whether to enable auto scaling
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EsEnable;

    /**
     * @var integer Auto scaling policy
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EsStrategy;

    /**
     * @var string Image tag
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ImageTag;

    /**
     * @var integer Whether to enable logging
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LogEnable;

    /**
     * @var string Minimum number of instances
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $MinAliveInstances;

    /**
     * @var array Security group IDs
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SecurityGroupIds;

    /**
     * @var string Image command
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ImageCommand;

    /**
     * @var array Image command parameters
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ImageArgs;

    /**
     * @var boolean Whether to use the default registry configurations
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $UseRegistryDefaultConfig;

    /**
     * @var EksService EKS access configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Service;

    /**
     * @var array Mounting configurations
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SettingConfs;

    /**
     * @var array Log path information
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LogConfs;

    /**
     * @var string The script to execute right after the startup
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PostStart;

    /**
     * @var string The script to run before stop
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PreStop;

    /**
     * @var HealthCheckConfig Configuration of aliveness probe
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Liveness;

    /**
     * @var HealthCheckConfig Configuration of readiness probe
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Readiness;

    /**
     * @var array Auto scaling policy
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $HorizontalAutoscaler;

    /**
     * @var array Scheduled auto scaling policy
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CronHorizontalAutoscaler;

    /**
     * @var array Availability zone of the application
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Zones;

    /**
     * @var string The latest deployment time
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LastDeployDate;

    /**
     * @var string The latest successful deployment time
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LastDeploySuccessDate;

    /**
     * @var array Information of the node whether the application is deployed
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $NodeInfos;

    /**
     * @var integer Image type. Values: `0` (Demo image), `1` (Normal image)
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ImageType;

    /**
     * @var integer Whether to 
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnableTracing;

    /**
     * @var integer (Disused) Whether to enable linkage tracing and report. It only takes effect when EnableTracing = `1`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableTracingReport;

    /**
     * @var integer Image type. `0`: Individual image; `1`: Enterprise image; `2`: Public image
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RepoType;

    /**
     * @var string Status of batch deployment: `batch_updating`, `batch_updating_waiting_confirm`
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $BatchDeployStatus;

    /**
     * @var string APM instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ApmInstanceId;

    /**
     * @var WorkloadInfo Workload information 
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $WorkloadInfo;

    /**
     * @var boolean Whether to enable application acceleration
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SpeedUp;

    /**
     * @var HealthCheckConfig Configuration of the startup probe
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $StartupProbe;

    /**
     * @var string OS version. Values:
- ALPINE
- CENTOS
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $OsFlavour;

    /**
     * @var string Image repository server
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RepoServer;

    /**
     * @var boolean Whether the application is being deployed
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $UnderDeploying;

    /**
     * @var EnablePrometheusConf Whether to enable application metric monitoring 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnablePrometheusConf;

    /**
     * @var boolean Whether it’s stopped manually
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $StoppedManually;

    /**
     * @var string TCR instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TcrInstanceId;

    /**
     * @var integer `1`: Automatically enable metrics collection (open-telemetry)
`0`: Disable metrics collection
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableMetrics;

    /**
     * @var string User AppId
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $AppId;

    /**
     * @var string Sub Account UIN
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SubAccountUin;

    /**
     * @var string User UIN
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Uin;

    /**
     * @var string Region
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Region;

    /**
     * @var string Application group ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $GroupId;

    /**
     * @var integer Whether to enable registry
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EnableRegistry;

    /**
     * @var array Array of scaling rules
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $AutoscalerList;

    /**
     * @var string Modifier
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Modifier;

    /**
     * @var string Creator
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Creator;

    /**
     * @var DeployStrategyConf Deployment strategy
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $DeployStrategyConf;

    /**
     * @var DescribeRunPodPage List of pods
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PodList;

    /**
     * @var boolean Whether the configuration has been changed during deployment
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ConfEdited;

    /**
     * @var array Tag
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @var string Whether to encode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PreStopEncoded;

    /**
     * @var string Whether to encode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PostStartEncoded;

    /**
     * @param string $VersionId Version ID
     * @param string $ApplicationId Application ID
     * @param string $DeployMode Deployment mode
     * @param string $JdkVersion JDK version
     * @param string $Description Description
     * @param string $DeployVersion Deployed version
     * @param string $PublishMode Publish mode
     * @param string $JvmOpts Launch parameter
     * @param integer $InitPodNum Number of initial pods
     * @param float $CpuSpec CPU specification
     * @param float $MemorySpec Memory specification
     * @param string $ImgRepo Image path
     * @param string $ImgName Image name
     * @param string $ImgVersion Image version
     * @param EsInfo $EsInfo Scaling configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $EnvConf Environment configuration
     * @param array $StorageConfs Storage configuration
     * @param string $Status Running status
     * @param string $Vpc VPC
     * @param string $SubnetId Subnets
     * @param string $CreateDate Creation time
     * @param string $ModifyDate Modification time
     * @param array $StorageMountConfs Mounting configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $VersionName Version name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param LogOutputConf $LogOutputConf Log output configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ApplicationName Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ApplicationDescription Application description
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $EnvironmentName Environment name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $EnvironmentId Environment ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $PublicDomain Public network address
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $EnablePublicAccess Whether to enable public network access
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $CurrentInstances Number of current instances
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ExpectedInstances Number of expected instances
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CodingLanguage Programming Language
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $PkgName Program package name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $EsEnable Whether to enable auto scaling
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $EsStrategy Auto scaling policy
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ImageTag Image tag
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $LogEnable Whether to enable logging
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $MinAliveInstances Minimum number of instances
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $SecurityGroupIds Security group IDs
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ImageCommand Image command
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $ImageArgs Image command parameters
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $UseRegistryDefaultConfig Whether to use the default registry configurations
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param EksService $Service EKS access configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $SettingConfs Mounting configurations
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $LogConfs Log path information
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $PostStart The script to execute right after the startup
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $PreStop The script to run before stop
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param HealthCheckConfig $Liveness Configuration of aliveness probe
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param HealthCheckConfig $Readiness Configuration of readiness probe
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $HorizontalAutoscaler Auto scaling policy
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $CronHorizontalAutoscaler Scheduled auto scaling policy
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $Zones Availability zone of the application
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $LastDeployDate The latest deployment time
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $LastDeploySuccessDate The latest successful deployment time
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $NodeInfos Information of the node whether the application is deployed
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ImageType Image type. Values: `0` (Demo image), `1` (Normal image)
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $EnableTracing Whether to 
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $EnableTracingReport (Disused) Whether to enable linkage tracing and report. It only takes effect when EnableTracing = `1`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RepoType Image type. `0`: Individual image; `1`: Enterprise image; `2`: Public image
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $BatchDeployStatus Status of batch deployment: `batch_updating`, `batch_updating_waiting_confirm`
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ApmInstanceId APM instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param WorkloadInfo $WorkloadInfo Workload information 
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $SpeedUp Whether to enable application acceleration
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param HealthCheckConfig $StartupProbe Configuration of the startup probe
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $OsFlavour OS version. Values:
- ALPINE
- CENTOS
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $RepoServer Image repository server
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $UnderDeploying Whether the application is being deployed
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param EnablePrometheusConf $EnablePrometheusConf Whether to enable application metric monitoring 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $StoppedManually Whether it’s stopped manually
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $TcrInstanceId TCR instance ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $EnableMetrics `1`: Automatically enable metrics collection (open-telemetry)
`0`: Disable metrics collection
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppId User AppId
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $SubAccountUin Sub Account UIN
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Uin User UIN
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Region Region
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $GroupId Application group ID
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $EnableRegistry Whether to enable registry
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $AutoscalerList Array of scaling rules
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Modifier Modifier
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Creator Creator
Note: This field may return `null`, indicating that no valid value was found.
     * @param DeployStrategyConf $DeployStrategyConf Deployment strategy
Note: This field may return `null`, indicating that no valid value was found.
     * @param DescribeRunPodPage $PodList List of pods
Note: This field may return `null`, indicating that no valid value was found.
     * @param boolean $ConfEdited Whether the configuration has been changed during deployment
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $Tags Tag
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $PreStopEncoded Whether to encode
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PostStartEncoded Whether to encode
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("JdkVersion",$param) and $param["JdkVersion"] !== null) {
            $this->JdkVersion = $param["JdkVersion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DeployVersion",$param) and $param["DeployVersion"] !== null) {
            $this->DeployVersion = $param["DeployVersion"];
        }

        if (array_key_exists("PublishMode",$param) and $param["PublishMode"] !== null) {
            $this->PublishMode = $param["PublishMode"];
        }

        if (array_key_exists("JvmOpts",$param) and $param["JvmOpts"] !== null) {
            $this->JvmOpts = $param["JvmOpts"];
        }

        if (array_key_exists("InitPodNum",$param) and $param["InitPodNum"] !== null) {
            $this->InitPodNum = $param["InitPodNum"];
        }

        if (array_key_exists("CpuSpec",$param) and $param["CpuSpec"] !== null) {
            $this->CpuSpec = $param["CpuSpec"];
        }

        if (array_key_exists("MemorySpec",$param) and $param["MemorySpec"] !== null) {
            $this->MemorySpec = $param["MemorySpec"];
        }

        if (array_key_exists("ImgRepo",$param) and $param["ImgRepo"] !== null) {
            $this->ImgRepo = $param["ImgRepo"];
        }

        if (array_key_exists("ImgName",$param) and $param["ImgName"] !== null) {
            $this->ImgName = $param["ImgName"];
        }

        if (array_key_exists("ImgVersion",$param) and $param["ImgVersion"] !== null) {
            $this->ImgVersion = $param["ImgVersion"];
        }

        if (array_key_exists("EsInfo",$param) and $param["EsInfo"] !== null) {
            $this->EsInfo = new EsInfo();
            $this->EsInfo->deserialize($param["EsInfo"]);
        }

        if (array_key_exists("EnvConf",$param) and $param["EnvConf"] !== null) {
            $this->EnvConf = [];
            foreach ($param["EnvConf"] as $key => $value){
                $obj = new Pair();
                $obj->deserialize($value);
                array_push($this->EnvConf, $obj);
            }
        }

        if (array_key_exists("StorageConfs",$param) and $param["StorageConfs"] !== null) {
            $this->StorageConfs = [];
            foreach ($param["StorageConfs"] as $key => $value){
                $obj = new StorageConf();
                $obj->deserialize($value);
                array_push($this->StorageConfs, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("ModifyDate",$param) and $param["ModifyDate"] !== null) {
            $this->ModifyDate = $param["ModifyDate"];
        }

        if (array_key_exists("StorageMountConfs",$param) and $param["StorageMountConfs"] !== null) {
            $this->StorageMountConfs = [];
            foreach ($param["StorageMountConfs"] as $key => $value){
                $obj = new StorageMountConf();
                $obj->deserialize($value);
                array_push($this->StorageMountConfs, $obj);
            }
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("LogOutputConf",$param) and $param["LogOutputConf"] !== null) {
            $this->LogOutputConf = new LogOutputConf();
            $this->LogOutputConf->deserialize($param["LogOutputConf"]);
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationDescription",$param) and $param["ApplicationDescription"] !== null) {
            $this->ApplicationDescription = $param["ApplicationDescription"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("PublicDomain",$param) and $param["PublicDomain"] !== null) {
            $this->PublicDomain = $param["PublicDomain"];
        }

        if (array_key_exists("EnablePublicAccess",$param) and $param["EnablePublicAccess"] !== null) {
            $this->EnablePublicAccess = $param["EnablePublicAccess"];
        }

        if (array_key_exists("CurrentInstances",$param) and $param["CurrentInstances"] !== null) {
            $this->CurrentInstances = $param["CurrentInstances"];
        }

        if (array_key_exists("ExpectedInstances",$param) and $param["ExpectedInstances"] !== null) {
            $this->ExpectedInstances = $param["ExpectedInstances"];
        }

        if (array_key_exists("CodingLanguage",$param) and $param["CodingLanguage"] !== null) {
            $this->CodingLanguage = $param["CodingLanguage"];
        }

        if (array_key_exists("PkgName",$param) and $param["PkgName"] !== null) {
            $this->PkgName = $param["PkgName"];
        }

        if (array_key_exists("EsEnable",$param) and $param["EsEnable"] !== null) {
            $this->EsEnable = $param["EsEnable"];
        }

        if (array_key_exists("EsStrategy",$param) and $param["EsStrategy"] !== null) {
            $this->EsStrategy = $param["EsStrategy"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
        }

        if (array_key_exists("MinAliveInstances",$param) and $param["MinAliveInstances"] !== null) {
            $this->MinAliveInstances = $param["MinAliveInstances"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("ImageCommand",$param) and $param["ImageCommand"] !== null) {
            $this->ImageCommand = $param["ImageCommand"];
        }

        if (array_key_exists("ImageArgs",$param) and $param["ImageArgs"] !== null) {
            $this->ImageArgs = $param["ImageArgs"];
        }

        if (array_key_exists("UseRegistryDefaultConfig",$param) and $param["UseRegistryDefaultConfig"] !== null) {
            $this->UseRegistryDefaultConfig = $param["UseRegistryDefaultConfig"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = new EksService();
            $this->Service->deserialize($param["Service"]);
        }

        if (array_key_exists("SettingConfs",$param) and $param["SettingConfs"] !== null) {
            $this->SettingConfs = [];
            foreach ($param["SettingConfs"] as $key => $value){
                $obj = new MountedSettingConf();
                $obj->deserialize($value);
                array_push($this->SettingConfs, $obj);
            }
        }

        if (array_key_exists("LogConfs",$param) and $param["LogConfs"] !== null) {
            $this->LogConfs = $param["LogConfs"];
        }

        if (array_key_exists("PostStart",$param) and $param["PostStart"] !== null) {
            $this->PostStart = $param["PostStart"];
        }

        if (array_key_exists("PreStop",$param) and $param["PreStop"] !== null) {
            $this->PreStop = $param["PreStop"];
        }

        if (array_key_exists("Liveness",$param) and $param["Liveness"] !== null) {
            $this->Liveness = new HealthCheckConfig();
            $this->Liveness->deserialize($param["Liveness"]);
        }

        if (array_key_exists("Readiness",$param) and $param["Readiness"] !== null) {
            $this->Readiness = new HealthCheckConfig();
            $this->Readiness->deserialize($param["Readiness"]);
        }

        if (array_key_exists("HorizontalAutoscaler",$param) and $param["HorizontalAutoscaler"] !== null) {
            $this->HorizontalAutoscaler = [];
            foreach ($param["HorizontalAutoscaler"] as $key => $value){
                $obj = new HorizontalAutoscaler();
                $obj->deserialize($value);
                array_push($this->HorizontalAutoscaler, $obj);
            }
        }

        if (array_key_exists("CronHorizontalAutoscaler",$param) and $param["CronHorizontalAutoscaler"] !== null) {
            $this->CronHorizontalAutoscaler = [];
            foreach ($param["CronHorizontalAutoscaler"] as $key => $value){
                $obj = new CronHorizontalAutoscaler();
                $obj->deserialize($value);
                array_push($this->CronHorizontalAutoscaler, $obj);
            }
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("LastDeployDate",$param) and $param["LastDeployDate"] !== null) {
            $this->LastDeployDate = $param["LastDeployDate"];
        }

        if (array_key_exists("LastDeploySuccessDate",$param) and $param["LastDeploySuccessDate"] !== null) {
            $this->LastDeploySuccessDate = $param["LastDeploySuccessDate"];
        }

        if (array_key_exists("NodeInfos",$param) and $param["NodeInfos"] !== null) {
            $this->NodeInfos = [];
            foreach ($param["NodeInfos"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfos, $obj);
            }
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("EnableTracing",$param) and $param["EnableTracing"] !== null) {
            $this->EnableTracing = $param["EnableTracing"];
        }

        if (array_key_exists("EnableTracingReport",$param) and $param["EnableTracingReport"] !== null) {
            $this->EnableTracingReport = $param["EnableTracingReport"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }

        if (array_key_exists("BatchDeployStatus",$param) and $param["BatchDeployStatus"] !== null) {
            $this->BatchDeployStatus = $param["BatchDeployStatus"];
        }

        if (array_key_exists("ApmInstanceId",$param) and $param["ApmInstanceId"] !== null) {
            $this->ApmInstanceId = $param["ApmInstanceId"];
        }

        if (array_key_exists("WorkloadInfo",$param) and $param["WorkloadInfo"] !== null) {
            $this->WorkloadInfo = new WorkloadInfo();
            $this->WorkloadInfo->deserialize($param["WorkloadInfo"]);
        }

        if (array_key_exists("SpeedUp",$param) and $param["SpeedUp"] !== null) {
            $this->SpeedUp = $param["SpeedUp"];
        }

        if (array_key_exists("StartupProbe",$param) and $param["StartupProbe"] !== null) {
            $this->StartupProbe = new HealthCheckConfig();
            $this->StartupProbe->deserialize($param["StartupProbe"]);
        }

        if (array_key_exists("OsFlavour",$param) and $param["OsFlavour"] !== null) {
            $this->OsFlavour = $param["OsFlavour"];
        }

        if (array_key_exists("RepoServer",$param) and $param["RepoServer"] !== null) {
            $this->RepoServer = $param["RepoServer"];
        }

        if (array_key_exists("UnderDeploying",$param) and $param["UnderDeploying"] !== null) {
            $this->UnderDeploying = $param["UnderDeploying"];
        }

        if (array_key_exists("EnablePrometheusConf",$param) and $param["EnablePrometheusConf"] !== null) {
            $this->EnablePrometheusConf = new EnablePrometheusConf();
            $this->EnablePrometheusConf->deserialize($param["EnablePrometheusConf"]);
        }

        if (array_key_exists("StoppedManually",$param) and $param["StoppedManually"] !== null) {
            $this->StoppedManually = $param["StoppedManually"];
        }

        if (array_key_exists("TcrInstanceId",$param) and $param["TcrInstanceId"] !== null) {
            $this->TcrInstanceId = $param["TcrInstanceId"];
        }

        if (array_key_exists("EnableMetrics",$param) and $param["EnableMetrics"] !== null) {
            $this->EnableMetrics = $param["EnableMetrics"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("EnableRegistry",$param) and $param["EnableRegistry"] !== null) {
            $this->EnableRegistry = $param["EnableRegistry"];
        }

        if (array_key_exists("AutoscalerList",$param) and $param["AutoscalerList"] !== null) {
            $this->AutoscalerList = [];
            foreach ($param["AutoscalerList"] as $key => $value){
                $obj = new Autoscaler();
                $obj->deserialize($value);
                array_push($this->AutoscalerList, $obj);
            }
        }

        if (array_key_exists("Modifier",$param) and $param["Modifier"] !== null) {
            $this->Modifier = $param["Modifier"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("DeployStrategyConf",$param) and $param["DeployStrategyConf"] !== null) {
            $this->DeployStrategyConf = new DeployStrategyConf();
            $this->DeployStrategyConf->deserialize($param["DeployStrategyConf"]);
        }

        if (array_key_exists("PodList",$param) and $param["PodList"] !== null) {
            $this->PodList = new DescribeRunPodPage();
            $this->PodList->deserialize($param["PodList"]);
        }

        if (array_key_exists("ConfEdited",$param) and $param["ConfEdited"] !== null) {
            $this->ConfEdited = $param["ConfEdited"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PreStopEncoded",$param) and $param["PreStopEncoded"] !== null) {
            $this->PreStopEncoded = $param["PreStopEncoded"];
        }

        if (array_key_exists("PostStartEncoded",$param) and $param["PostStartEncoded"] !== null) {
            $this->PostStartEncoded = $param["PostStartEncoded"];
        }
    }
}
