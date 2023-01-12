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
 * DeployApplication request structure.
 *
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method integer getInitPodNum() Obtain Number of initialized pods
 * @method void setInitPodNum(integer $InitPodNum) Set Number of initialized pods
 * @method float getCpuSpec() Obtain CPU specification
 * @method void setCpuSpec(float $CpuSpec) Set CPU specification
 * @method float getMemorySpec() Obtain Memory specification
 * @method void setMemorySpec(float $MemorySpec) Set Memory specification
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method string getImgRepo() Obtain Image repository
 * @method void setImgRepo(string $ImgRepo) Set Image repository
 * @method string getVersionDesc() Obtain Version description
 * @method void setVersionDesc(string $VersionDesc) Set Version description
 * @method string getJvmOpts() Obtain Launch parameters
 * @method void setJvmOpts(string $JvmOpts) Set Launch parameters
 * @method EsInfo getEsInfo() Obtain Auto scaling configuration (This field is disused. Please use `HorizontalAutoscaler` to set the auto scaling policy.)
 * @method void setEsInfo(EsInfo $EsInfo) Set Auto scaling configuration (This field is disused. Please use `HorizontalAutoscaler` to set the auto scaling policy.)
 * @method array getEnvConf() Obtain Environment variable configuration
 * @method void setEnvConf(array $EnvConf) Set Environment variable configuration
 * @method array getLogConfs() Obtain Log configuration
 * @method void setLogConfs(array $LogConfs) Set Log configuration
 * @method array getStorageConfs() Obtain Data volume configuration
 * @method void setStorageConfs(array $StorageConfs) Set Data volume configuration
 * @method array getStorageMountConfs() Obtain Data volume mount configuration
 * @method void setStorageMountConfs(array $StorageMountConfs) Set Data volume mount configuration
 * @method string getDeployMode() Obtain Deployment type
- JAR: deployment through JAR package
- WAR: deployment through WAR package
- IMAGE: deployment through image
 * @method void setDeployMode(string $DeployMode) Set Deployment type
- JAR: deployment through JAR package
- WAR: deployment through WAR package
- IMAGE: deployment through image
 * @method string getDeployVersion() Obtain When the deployment type is `IMAGE`, this parameter indicates the image tag
When the deployment type is `JAR` or `WAR`, this parameter indicates the package version number
 * @method void setDeployVersion(string $DeployVersion) Set When the deployment type is `IMAGE`, this parameter indicates the image tag
When the deployment type is `JAR` or `WAR`, this parameter indicates the package version number
 * @method string getPkgName() Obtain Package name, which is required when using JAR or WAR packages for deployment
 * @method void setPkgName(string $PkgName) Set Package name, which is required when using JAR or WAR packages for deployment
 * @method string getJdkVersion() Obtain JDK version
- KONA: use KONA JDK
- OPEN: use open JDK
- KONA: use KONA JDK
- OPEN: use open JDK
 * @method void setJdkVersion(string $JdkVersion) Set JDK version
- KONA: use KONA JDK
- OPEN: use open JDK
- KONA: use KONA JDK
- OPEN: use open JDK
 * @method array getSecurityGroupIds() Obtain Security group IDs
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group IDs
 * @method LogOutputConf getLogOutputConf() Obtain Log output configuration
 * @method void setLogOutputConf(LogOutputConf $LogOutputConf) Set Log output configuration
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 * @method string getDescription() Obtain Version description
 * @method void setDescription(string $Description) Set Version description
 * @method string getImageCommand() Obtain Image command
 * @method void setImageCommand(string $ImageCommand) Set Image command
 * @method array getImageArgs() Obtain Image command parameters
 * @method void setImageArgs(array $ImageArgs) Set Image command parameters
 * @method boolean getUseRegistryDefaultConfig() Obtain Whether to add the registry's default configurations
 * @method void setUseRegistryDefaultConfig(boolean $UseRegistryDefaultConfig) Set Whether to add the registry's default configurations
 * @method array getSettingConfs() Obtain Mounting configurations
 * @method void setSettingConfs(array $SettingConfs) Set Mounting configurations
 * @method EksService getService() Obtain Application access configuration
 * @method void setService(EksService $Service) Set Application access configuration
 * @method string getVersionId() Obtain ID of the version that you want to roll back to
 * @method void setVersionId(string $VersionId) Set ID of the version that you want to roll back to
 * @method string getPostStart() Obtain The script to run after startup
 * @method void setPostStart(string $PostStart) Set The script to run after startup
 * @method string getPreStop() Obtain The script to run before stop
 * @method void setPreStop(string $PreStop) Set The script to run before stop
 * @method HealthCheckConfig getLiveness() Obtain Configuration of aliveness probe
 * @method void setLiveness(HealthCheckConfig $Liveness) Set Configuration of aliveness probe
 * @method HealthCheckConfig getReadiness() Obtain Configuration of readiness probe
 * @method void setReadiness(HealthCheckConfig $Readiness) Set Configuration of readiness probe
 * @method DeployStrategyConf getDeployStrategyConf() Obtain Configuration of batch release policies
 * @method void setDeployStrategyConf(DeployStrategyConf $DeployStrategyConf) Set Configuration of batch release policies
 * @method array getHorizontalAutoscaler() Obtain Auto scaling policy. (Disused. Please use APIs for auto scaling policy combinations)
 * @method void setHorizontalAutoscaler(array $HorizontalAutoscaler) Set Auto scaling policy. (Disused. Please use APIs for auto scaling policy combinations)
 * @method array getCronHorizontalAutoscaler() Obtain Scheduled scaling policy (Disused. Please use APIs for auto scaling policy combinations)
 * @method void setCronHorizontalAutoscaler(array $CronHorizontalAutoscaler) Set Scheduled scaling policy (Disused. Please use APIs for auto scaling policy combinations)
 * @method integer getLogEnable() Obtain Specifies whether to enable logging. `1`: enable; `0`: do not enable
 * @method void setLogEnable(integer $LogEnable) Set Specifies whether to enable logging. `1`: enable; `0`: do not enable
 * @method boolean getConfEdited() Obtain Whether the configuration is modified (except for the image configuration)
 * @method void setConfEdited(boolean $ConfEdited) Set Whether the configuration is modified (except for the image configuration)
 * @method boolean getSpeedUp() Obtain Whether the application acceleration is enabled 
 * @method void setSpeedUp(boolean $SpeedUp) Set Whether the application acceleration is enabled 
 * @method HealthCheckConfig getStartupProbe() Obtain Whether to enable probing
 * @method void setStartupProbe(HealthCheckConfig $StartupProbe) Set Whether to enable probing
 * @method string getOsFlavour() Obtain The version of the operating system
If `openjdk` is selected, the value can be: 
- ALPINE
- CENTOS
If `konajdk` is selected, the value can be: 
- ALPINE
- TENCENTOS
 * @method void setOsFlavour(string $OsFlavour) Set The version of the operating system
If `openjdk` is selected, the value can be: 
- ALPINE
- CENTOS
If `konajdk` is selected, the value can be: 
- ALPINE
- TENCENTOS
 * @method EnablePrometheusConf getEnablePrometheusConf() Obtain Configuration of metrics of this application
 * @method void setEnablePrometheusConf(EnablePrometheusConf $EnablePrometheusConf) Set Configuration of metrics of this application
 * @method integer getEnableTracing() Obtain `1`: Automatically enable APM tracing (Skywalking)
`0`: Disable APM tracing
 * @method void setEnableTracing(integer $EnableTracing) Set `1`: Automatically enable APM tracing (Skywalking)
`0`: Disable APM tracing
 * @method integer getEnableMetrics() Obtain `1`: Automatically enable metrics collection (open-telemetry)
`0`: Disable metrics collection
 * @method void setEnableMetrics(integer $EnableMetrics) Set `1`: Automatically enable metrics collection (open-telemetry)
`0`: Disable metrics collection
 * @method string getTcrInstanceId() Obtain ID of the TCR instance used for image deployment
 * @method void setTcrInstanceId(string $TcrInstanceId) Set ID of the TCR instance used for image deployment
 * @method string getRepoServer() Obtain Image server address for image deployment
 * @method void setRepoServer(string $RepoServer) Set Image server address for image deployment
 * @method integer getRepoType() Obtain Type of the repository. `0`: TCR Personal; `1`: TCR Enterprise; `2`: Public repository; `3`: TEM hosted repository; `4`: Demo repository
 * @method void setRepoType(integer $RepoType) Set Type of the repository. `0`: TCR Personal; `1`: TCR Enterprise; `2`: Public repository; `3`: TEM hosted repository; `4`: Demo repository
 */
class DeployApplicationRequest extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var integer Number of initialized pods
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
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var string Image repository
     */
    public $ImgRepo;

    /**
     * @var string Version description
     */
    public $VersionDesc;

    /**
     * @var string Launch parameters
     */
    public $JvmOpts;

    /**
     * @var EsInfo Auto scaling configuration (This field is disused. Please use `HorizontalAutoscaler` to set the auto scaling policy.)
     */
    public $EsInfo;

    /**
     * @var array Environment variable configuration
     */
    public $EnvConf;

    /**
     * @var array Log configuration
     */
    public $LogConfs;

    /**
     * @var array Data volume configuration
     */
    public $StorageConfs;

    /**
     * @var array Data volume mount configuration
     */
    public $StorageMountConfs;

    /**
     * @var string Deployment type
- JAR: deployment through JAR package
- WAR: deployment through WAR package
- IMAGE: deployment through image
     */
    public $DeployMode;

    /**
     * @var string When the deployment type is `IMAGE`, this parameter indicates the image tag
When the deployment type is `JAR` or `WAR`, this parameter indicates the package version number
     */
    public $DeployVersion;

    /**
     * @var string Package name, which is required when using JAR or WAR packages for deployment
     */
    public $PkgName;

    /**
     * @var string JDK version
- KONA: use KONA JDK
- OPEN: use open JDK
- KONA: use KONA JDK
- OPEN: use open JDK
     */
    public $JdkVersion;

    /**
     * @var array Security group IDs
     */
    public $SecurityGroupIds;

    /**
     * @var LogOutputConf Log output configuration
     */
    public $LogOutputConf;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @var string Version description
     */
    public $Description;

    /**
     * @var string Image command
     */
    public $ImageCommand;

    /**
     * @var array Image command parameters
     */
    public $ImageArgs;

    /**
     * @var boolean Whether to add the registry's default configurations
     */
    public $UseRegistryDefaultConfig;

    /**
     * @var array Mounting configurations
     */
    public $SettingConfs;

    /**
     * @var EksService Application access configuration
     */
    public $Service;

    /**
     * @var string ID of the version that you want to roll back to
     */
    public $VersionId;

    /**
     * @var string The script to run after startup
     */
    public $PostStart;

    /**
     * @var string The script to run before stop
     */
    public $PreStop;

    /**
     * @var HealthCheckConfig Configuration of aliveness probe
     */
    public $Liveness;

    /**
     * @var HealthCheckConfig Configuration of readiness probe
     */
    public $Readiness;

    /**
     * @var DeployStrategyConf Configuration of batch release policies
     */
    public $DeployStrategyConf;

    /**
     * @var array Auto scaling policy. (Disused. Please use APIs for auto scaling policy combinations)
     */
    public $HorizontalAutoscaler;

    /**
     * @var array Scheduled scaling policy (Disused. Please use APIs for auto scaling policy combinations)
     */
    public $CronHorizontalAutoscaler;

    /**
     * @var integer Specifies whether to enable logging. `1`: enable; `0`: do not enable
     */
    public $LogEnable;

    /**
     * @var boolean Whether the configuration is modified (except for the image configuration)
     */
    public $ConfEdited;

    /**
     * @var boolean Whether the application acceleration is enabled 
     */
    public $SpeedUp;

    /**
     * @var HealthCheckConfig Whether to enable probing
     */
    public $StartupProbe;

    /**
     * @var string The version of the operating system
If `openjdk` is selected, the value can be: 
- ALPINE
- CENTOS
If `konajdk` is selected, the value can be: 
- ALPINE
- TENCENTOS
     */
    public $OsFlavour;

    /**
     * @var EnablePrometheusConf Configuration of metrics of this application
     */
    public $EnablePrometheusConf;

    /**
     * @var integer `1`: Automatically enable APM tracing (Skywalking)
`0`: Disable APM tracing
     */
    public $EnableTracing;

    /**
     * @var integer `1`: Automatically enable metrics collection (open-telemetry)
`0`: Disable metrics collection
     */
    public $EnableMetrics;

    /**
     * @var string ID of the TCR instance used for image deployment
     */
    public $TcrInstanceId;

    /**
     * @var string Image server address for image deployment
     */
    public $RepoServer;

    /**
     * @var integer Type of the repository. `0`: TCR Personal; `1`: TCR Enterprise; `2`: Public repository; `3`: TEM hosted repository; `4`: Demo repository
     */
    public $RepoType;

    /**
     * @param string $ApplicationId Application ID
     * @param integer $InitPodNum Number of initialized pods
     * @param float $CpuSpec CPU specification
     * @param float $MemorySpec Memory specification
     * @param string $EnvironmentId Environment ID
     * @param string $ImgRepo Image repository
     * @param string $VersionDesc Version description
     * @param string $JvmOpts Launch parameters
     * @param EsInfo $EsInfo Auto scaling configuration (This field is disused. Please use `HorizontalAutoscaler` to set the auto scaling policy.)
     * @param array $EnvConf Environment variable configuration
     * @param array $LogConfs Log configuration
     * @param array $StorageConfs Data volume configuration
     * @param array $StorageMountConfs Data volume mount configuration
     * @param string $DeployMode Deployment type
- JAR: deployment through JAR package
- WAR: deployment through WAR package
- IMAGE: deployment through image
     * @param string $DeployVersion When the deployment type is `IMAGE`, this parameter indicates the image tag
When the deployment type is `JAR` or `WAR`, this parameter indicates the package version number
     * @param string $PkgName Package name, which is required when using JAR or WAR packages for deployment
     * @param string $JdkVersion JDK version
- KONA: use KONA JDK
- OPEN: use open JDK
- KONA: use KONA JDK
- OPEN: use open JDK
     * @param array $SecurityGroupIds Security group IDs
     * @param LogOutputConf $LogOutputConf Log output configuration
     * @param integer $SourceChannel Source channel
     * @param string $Description Version description
     * @param string $ImageCommand Image command
     * @param array $ImageArgs Image command parameters
     * @param boolean $UseRegistryDefaultConfig Whether to add the registry's default configurations
     * @param array $SettingConfs Mounting configurations
     * @param EksService $Service Application access configuration
     * @param string $VersionId ID of the version that you want to roll back to
     * @param string $PostStart The script to run after startup
     * @param string $PreStop The script to run before stop
     * @param HealthCheckConfig $Liveness Configuration of aliveness probe
     * @param HealthCheckConfig $Readiness Configuration of readiness probe
     * @param DeployStrategyConf $DeployStrategyConf Configuration of batch release policies
     * @param array $HorizontalAutoscaler Auto scaling policy. (Disused. Please use APIs for auto scaling policy combinations)
     * @param array $CronHorizontalAutoscaler Scheduled scaling policy (Disused. Please use APIs for auto scaling policy combinations)
     * @param integer $LogEnable Specifies whether to enable logging. `1`: enable; `0`: do not enable
     * @param boolean $ConfEdited Whether the configuration is modified (except for the image configuration)
     * @param boolean $SpeedUp Whether the application acceleration is enabled 
     * @param HealthCheckConfig $StartupProbe Whether to enable probing
     * @param string $OsFlavour The version of the operating system
If `openjdk` is selected, the value can be: 
- ALPINE
- CENTOS
If `konajdk` is selected, the value can be: 
- ALPINE
- TENCENTOS
     * @param EnablePrometheusConf $EnablePrometheusConf Configuration of metrics of this application
     * @param integer $EnableTracing `1`: Automatically enable APM tracing (Skywalking)
`0`: Disable APM tracing
     * @param integer $EnableMetrics `1`: Automatically enable metrics collection (open-telemetry)
`0`: Disable metrics collection
     * @param string $TcrInstanceId ID of the TCR instance used for image deployment
     * @param string $RepoServer Image server address for image deployment
     * @param integer $RepoType Type of the repository. `0`: TCR Personal; `1`: TCR Enterprise; `2`: Public repository; `3`: TEM hosted repository; `4`: Demo repository
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

        if (array_key_exists("InitPodNum",$param) and $param["InitPodNum"] !== null) {
            $this->InitPodNum = $param["InitPodNum"];
        }

        if (array_key_exists("CpuSpec",$param) and $param["CpuSpec"] !== null) {
            $this->CpuSpec = $param["CpuSpec"];
        }

        if (array_key_exists("MemorySpec",$param) and $param["MemorySpec"] !== null) {
            $this->MemorySpec = $param["MemorySpec"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("ImgRepo",$param) and $param["ImgRepo"] !== null) {
            $this->ImgRepo = $param["ImgRepo"];
        }

        if (array_key_exists("VersionDesc",$param) and $param["VersionDesc"] !== null) {
            $this->VersionDesc = $param["VersionDesc"];
        }

        if (array_key_exists("JvmOpts",$param) and $param["JvmOpts"] !== null) {
            $this->JvmOpts = $param["JvmOpts"];
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

        if (array_key_exists("LogConfs",$param) and $param["LogConfs"] !== null) {
            $this->LogConfs = $param["LogConfs"];
        }

        if (array_key_exists("StorageConfs",$param) and $param["StorageConfs"] !== null) {
            $this->StorageConfs = [];
            foreach ($param["StorageConfs"] as $key => $value){
                $obj = new StorageConf();
                $obj->deserialize($value);
                array_push($this->StorageConfs, $obj);
            }
        }

        if (array_key_exists("StorageMountConfs",$param) and $param["StorageMountConfs"] !== null) {
            $this->StorageMountConfs = [];
            foreach ($param["StorageMountConfs"] as $key => $value){
                $obj = new StorageMountConf();
                $obj->deserialize($value);
                array_push($this->StorageMountConfs, $obj);
            }
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("DeployVersion",$param) and $param["DeployVersion"] !== null) {
            $this->DeployVersion = $param["DeployVersion"];
        }

        if (array_key_exists("PkgName",$param) and $param["PkgName"] !== null) {
            $this->PkgName = $param["PkgName"];
        }

        if (array_key_exists("JdkVersion",$param) and $param["JdkVersion"] !== null) {
            $this->JdkVersion = $param["JdkVersion"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("LogOutputConf",$param) and $param["LogOutputConf"] !== null) {
            $this->LogOutputConf = new LogOutputConf();
            $this->LogOutputConf->deserialize($param["LogOutputConf"]);
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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

        if (array_key_exists("SettingConfs",$param) and $param["SettingConfs"] !== null) {
            $this->SettingConfs = [];
            foreach ($param["SettingConfs"] as $key => $value){
                $obj = new MountedSettingConf();
                $obj->deserialize($value);
                array_push($this->SettingConfs, $obj);
            }
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = new EksService();
            $this->Service->deserialize($param["Service"]);
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
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

        if (array_key_exists("DeployStrategyConf",$param) and $param["DeployStrategyConf"] !== null) {
            $this->DeployStrategyConf = new DeployStrategyConf();
            $this->DeployStrategyConf->deserialize($param["DeployStrategyConf"]);
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

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
        }

        if (array_key_exists("ConfEdited",$param) and $param["ConfEdited"] !== null) {
            $this->ConfEdited = $param["ConfEdited"];
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

        if (array_key_exists("EnablePrometheusConf",$param) and $param["EnablePrometheusConf"] !== null) {
            $this->EnablePrometheusConf = new EnablePrometheusConf();
            $this->EnablePrometheusConf->deserialize($param["EnablePrometheusConf"]);
        }

        if (array_key_exists("EnableTracing",$param) and $param["EnableTracing"] !== null) {
            $this->EnableTracing = $param["EnableTracing"];
        }

        if (array_key_exists("EnableMetrics",$param) and $param["EnableMetrics"] !== null) {
            $this->EnableMetrics = $param["EnableMetrics"];
        }

        if (array_key_exists("TcrInstanceId",$param) and $param["TcrInstanceId"] !== null) {
            $this->TcrInstanceId = $param["TcrInstanceId"];
        }

        if (array_key_exists("RepoServer",$param) and $param["RepoServer"] !== null) {
            $this->RepoServer = $param["RepoServer"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }
    }
}
