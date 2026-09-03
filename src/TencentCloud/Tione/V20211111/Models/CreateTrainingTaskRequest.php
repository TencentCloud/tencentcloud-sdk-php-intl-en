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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTrainingTask request structure.
 *
 * @method string getName() Obtain Training task name. The name cannot exceed 60 characters in length, and can contain only Chinese characters, letters, digits, underscores (_), and hyphens (-). It must start with a Chinese character, letter, or digit.
 * @method void setName(string $Name) Set Training task name. The name cannot exceed 60 characters in length, and can contain only Chinese characters, letters, digits, underscores (_), and hyphens (-). It must start with a Chinese character, letter, or digit.
 * @method string getChargeType() Obtain Billing mode. For example, PREPAID indicates yearly/monthly subscription (resource group).
POSTPAID_BY_HOUR indicates pay-as-you-go mode.
 * @method void setChargeType(string $ChargeType) Set Billing mode. For example, PREPAID indicates yearly/monthly subscription (resource group).
POSTPAID_BY_HOUR indicates pay-as-you-go mode.
 * @method array getResourceConfigInfos() Obtain Resource configuration. Specify the CVM instance specification ID and number of nodes. The API for querying the CVM instance specification ID is DescribeBillingSpecsPrice. For example, [{"Role":"WORKER", "InstanceType": "TI.S.MEDIUM.POST", "InstanceNum": 1}].
 * @method void setResourceConfigInfos(array $ResourceConfigInfos) Set Resource configuration. Specify the CVM instance specification ID and number of nodes. The API for querying the CVM instance specification ID is DescribeBillingSpecsPrice. For example, [{"Role":"WORKER", "InstanceType": "TI.S.MEDIUM.POST", "InstanceNum": 1}].
 * @method string getTiProjectId() Obtain TI Workspace ID. Used solely for the "Workspace" allowlist feature. To use this feature, please contact a TI administrator to enable allowlisting.
 * @method void setTiProjectId(string $TiProjectId) Set TI Workspace ID. Used solely for the "Workspace" allowlist feature. To use this feature, please contact a TI administrator to enable allowlisting.
 * @method string getFrameworkName() Obtain Training framework name, which can be queried via the DescribeTrainingFrameworks API. For example, SPARK, PYSPARK, TENSORFLOW, and PYTORCH.
 * @method void setFrameworkName(string $FrameworkName) Set Training framework name, which can be queried via the DescribeTrainingFrameworks API. For example, SPARK, PYSPARK, TENSORFLOW, and PYTORCH.
 * @method string getFrameworkVersion() Obtain Training framework version, which can be queried via the DescribeTrainingFrameworks API. For example, 1.15 and 1.9.
 * @method void setFrameworkVersion(string $FrameworkVersion) Set Training framework version, which can be queried via the DescribeTrainingFrameworks API. For example, 1.15 and 1.9.
 * @method string getFrameworkEnvironment() Obtain Training framework environment, which can be queried via the DescribeTrainingFrameworks API. For example, tf1.15-py3.7-cpu and torch1.9-py3.8-cuda11.1-gpu.
 * @method void setFrameworkEnvironment(string $FrameworkEnvironment) Set Training framework environment, which can be queried via the DescribeTrainingFrameworks API. For example, tf1.15-py3.7-cpu and torch1.9-py3.8-cuda11.1-gpu.
 * @method string getResourceGroupId() Obtain ID of the prepaid dedicated resource group, which can be queried via the DescribeBillingResourceGroups API.
 * @method void setResourceGroupId(string $ResourceGroupId) Set ID of the prepaid dedicated resource group, which can be queried via the DescribeBillingResourceGroups API.
 * @method array getTags() Obtain Tag configuration.
 * @method void setTags(array $Tags) Set Tag configuration.
 * @method ImageInfo getImageInfo() Obtain Custom image information.
 * @method void setImageInfo(ImageInfo $ImageInfo) Set Custom image information.
 * @method CosPathInfo getCodePackagePath() Obtain COS code package path.
 * @method void setCodePackagePath(CosPathInfo $CodePackagePath) Set COS code package path.
 * @method StartCmdInfo getStartCmdInfo() Obtain Task startup command. Specify this parameter based on the task training mode. If the configuration fails due to special characters, use the EncodedStartCmdInfo parameter instead.
 * @method void setStartCmdInfo(StartCmdInfo $StartCmdInfo) Set Task startup command. Specify this parameter based on the task training mode. If the configuration fails due to special characters, use the EncodedStartCmdInfo parameter instead.
 * @method string getTrainingMode() Obtain Training mode, which can be queried via the DescribeTrainingFrameworks API. For example, PS_WORKER, DDP, MPI, and HOROVOD.
 * @method void setTrainingMode(string $TrainingMode) Set Training mode, which can be queried via the DescribeTrainingFrameworks API. For example, PS_WORKER, DDP, MPI, and HOROVOD.
 * @method array getDataConfigs() Obtain Data configurations. This parameter depends on the DataSource field. The maximum number of configurations is 10.
 * @method void setDataConfigs(array $DataConfigs) Set Data configurations. This parameter depends on the DataSource field. The maximum number of configurations is 10.
 * @method string getVpcId() Obtain VPC Id
 * @method void setVpcId(string $VpcId) Set VPC Id
 * @method string getSubnetId() Obtain Subnet ID.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID.
 * @method CosPathInfo getOutput() Obtain COS training output path.
 * @method void setOutput(CosPathInfo $Output) Set COS training output path.
 * @method LogConfig getLogConfig() Obtain CLS logging configuration.
 * @method void setLogConfig(LogConfig $LogConfig) Set CLS logging configuration.
 * @method string getTuningParameters() Obtain Tuning parameters. The value of this parameter cannot exceed 2048 characters in length.
 * @method void setTuningParameters(string $TuningParameters) Set Tuning parameters. The value of this parameter cannot exceed 2048 characters in length.
 * @method boolean getLogEnable() Obtain Indicates whether to report logs.
 * @method void setLogEnable(boolean $LogEnable) Set Indicates whether to report logs.
 * @method string getRemark() Obtain Remarks. The value of this parameter cannot exceed 1024 characters.
 * @method void setRemark(string $Remark) Set Remarks. The value of this parameter cannot exceed 1024 characters.
 * @method string getDataSource() Obtain Data source. For example, DATASET, COS, CFS, CFSTurbo, HDFS, and GooseFSx.
 * @method void setDataSource(string $DataSource) Set Data source. For example, DATASET, COS, CFS, CFSTurbo, HDFS, and GooseFSx.
 * @method string getCallbackUrl() Obtain Callback URL. This parameter is used for the asynchronous callback to create, start, or stop training tasks. For the callback format and content, see [[TI-ONE API Callback Description]](https://www.tencentcloud.com/document/product/851/84292?from_cn_redirect=1).
 * @method void setCallbackUrl(string $CallbackUrl) Set Callback URL. This parameter is used for the asynchronous callback to create, start, or stop training tasks. For the callback format and content, see [[TI-ONE API Callback Description]](https://www.tencentcloud.com/document/product/851/84292?from_cn_redirect=1).
 * @method EncodedStartCmdInfo getEncodedStartCmdInfo() Obtain Encoded task startup command. If StartCmdInfo is also configured, only this parameter takes effect.
 * @method void setEncodedStartCmdInfo(EncodedStartCmdInfo $EncodedStartCmdInfo) Set Encoded task startup command. If StartCmdInfo is also configured, only this parameter takes effect.
 * @method array getCodeRepos() Obtain Code repository configuration.
 * @method void setCodeRepos(array $CodeRepos) Set Code repository configuration.
 * @method ExposeNetworkConfig getExposeNetworkConfig() Obtain Network exposure configuration.
 * @method void setExposeNetworkConfig(ExposeNetworkConfig $ExposeNetworkConfig) Set Network exposure configuration.
 * @method array getEnvs() Obtain Environment Variables.
 * @method void setEnvs(array $Envs) Set Environment Variables.
 * @method TrainToolConfig getTrainToolConfig() Obtain Train tool configuration.
 * @method void setTrainToolConfig(TrainToolConfig $TrainToolConfig) Set Train tool configuration.
 * @method ResourceSupplyAttribute getResourceSupplyAttribute() Obtain Training Diagnostic Tool Configuration.
 * @method void setResourceSupplyAttribute(ResourceSupplyAttribute $ResourceSupplyAttribute) Set Training Diagnostic Tool Configuration.
 * @method array getQueues() Obtain Queue ID.
 * @method void setQueues(array $Queues) Set Queue ID.
 */
class CreateTrainingTaskRequest extends AbstractModel
{
    /**
     * @var string Training task name. The name cannot exceed 60 characters in length, and can contain only Chinese characters, letters, digits, underscores (_), and hyphens (-). It must start with a Chinese character, letter, or digit.
     */
    public $Name;

    /**
     * @var string Billing mode. For example, PREPAID indicates yearly/monthly subscription (resource group).
POSTPAID_BY_HOUR indicates pay-as-you-go mode.
     */
    public $ChargeType;

    /**
     * @var array Resource configuration. Specify the CVM instance specification ID and number of nodes. The API for querying the CVM instance specification ID is DescribeBillingSpecsPrice. For example, [{"Role":"WORKER", "InstanceType": "TI.S.MEDIUM.POST", "InstanceNum": 1}].
     */
    public $ResourceConfigInfos;

    /**
     * @var string TI Workspace ID. Used solely for the "Workspace" allowlist feature. To use this feature, please contact a TI administrator to enable allowlisting.
     */
    public $TiProjectId;

    /**
     * @var string Training framework name, which can be queried via the DescribeTrainingFrameworks API. For example, SPARK, PYSPARK, TENSORFLOW, and PYTORCH.
     */
    public $FrameworkName;

    /**
     * @var string Training framework version, which can be queried via the DescribeTrainingFrameworks API. For example, 1.15 and 1.9.
     */
    public $FrameworkVersion;

    /**
     * @var string Training framework environment, which can be queried via the DescribeTrainingFrameworks API. For example, tf1.15-py3.7-cpu and torch1.9-py3.8-cuda11.1-gpu.
     */
    public $FrameworkEnvironment;

    /**
     * @var string ID of the prepaid dedicated resource group, which can be queried via the DescribeBillingResourceGroups API.
     */
    public $ResourceGroupId;

    /**
     * @var array Tag configuration.
     */
    public $Tags;

    /**
     * @var ImageInfo Custom image information.
     */
    public $ImageInfo;

    /**
     * @var CosPathInfo COS code package path.
     */
    public $CodePackagePath;

    /**
     * @var StartCmdInfo Task startup command. Specify this parameter based on the task training mode. If the configuration fails due to special characters, use the EncodedStartCmdInfo parameter instead.
     */
    public $StartCmdInfo;

    /**
     * @var string Training mode, which can be queried via the DescribeTrainingFrameworks API. For example, PS_WORKER, DDP, MPI, and HOROVOD.
     */
    public $TrainingMode;

    /**
     * @var array Data configurations. This parameter depends on the DataSource field. The maximum number of configurations is 10.
     */
    public $DataConfigs;

    /**
     * @var string VPC Id
     */
    public $VpcId;

    /**
     * @var string Subnet ID.
     */
    public $SubnetId;

    /**
     * @var CosPathInfo COS training output path.
     */
    public $Output;

    /**
     * @var LogConfig CLS logging configuration.
     */
    public $LogConfig;

    /**
     * @var string Tuning parameters. The value of this parameter cannot exceed 2048 characters in length.
     */
    public $TuningParameters;

    /**
     * @var boolean Indicates whether to report logs.
     */
    public $LogEnable;

    /**
     * @var string Remarks. The value of this parameter cannot exceed 1024 characters.
     */
    public $Remark;

    /**
     * @var string Data source. For example, DATASET, COS, CFS, CFSTurbo, HDFS, and GooseFSx.
     */
    public $DataSource;

    /**
     * @var string Callback URL. This parameter is used for the asynchronous callback to create, start, or stop training tasks. For the callback format and content, see [[TI-ONE API Callback Description]](https://www.tencentcloud.com/document/product/851/84292?from_cn_redirect=1).
     */
    public $CallbackUrl;

    /**
     * @var EncodedStartCmdInfo Encoded task startup command. If StartCmdInfo is also configured, only this parameter takes effect.
     */
    public $EncodedStartCmdInfo;

    /**
     * @var array Code repository configuration.
     */
    public $CodeRepos;

    /**
     * @var ExposeNetworkConfig Network exposure configuration.
     */
    public $ExposeNetworkConfig;

    /**
     * @var array Environment Variables.
     */
    public $Envs;

    /**
     * @var TrainToolConfig Train tool configuration.
     */
    public $TrainToolConfig;

    /**
     * @var ResourceSupplyAttribute Training Diagnostic Tool Configuration.
     */
    public $ResourceSupplyAttribute;

    /**
     * @var array Queue ID.
     */
    public $Queues;

    /**
     * @param string $Name Training task name. The name cannot exceed 60 characters in length, and can contain only Chinese characters, letters, digits, underscores (_), and hyphens (-). It must start with a Chinese character, letter, or digit.
     * @param string $ChargeType Billing mode. For example, PREPAID indicates yearly/monthly subscription (resource group).
POSTPAID_BY_HOUR indicates pay-as-you-go mode.
     * @param array $ResourceConfigInfos Resource configuration. Specify the CVM instance specification ID and number of nodes. The API for querying the CVM instance specification ID is DescribeBillingSpecsPrice. For example, [{"Role":"WORKER", "InstanceType": "TI.S.MEDIUM.POST", "InstanceNum": 1}].
     * @param string $TiProjectId TI Workspace ID. Used solely for the "Workspace" allowlist feature. To use this feature, please contact a TI administrator to enable allowlisting.
     * @param string $FrameworkName Training framework name, which can be queried via the DescribeTrainingFrameworks API. For example, SPARK, PYSPARK, TENSORFLOW, and PYTORCH.
     * @param string $FrameworkVersion Training framework version, which can be queried via the DescribeTrainingFrameworks API. For example, 1.15 and 1.9.
     * @param string $FrameworkEnvironment Training framework environment, which can be queried via the DescribeTrainingFrameworks API. For example, tf1.15-py3.7-cpu and torch1.9-py3.8-cuda11.1-gpu.
     * @param string $ResourceGroupId ID of the prepaid dedicated resource group, which can be queried via the DescribeBillingResourceGroups API.
     * @param array $Tags Tag configuration.
     * @param ImageInfo $ImageInfo Custom image information.
     * @param CosPathInfo $CodePackagePath COS code package path.
     * @param StartCmdInfo $StartCmdInfo Task startup command. Specify this parameter based on the task training mode. If the configuration fails due to special characters, use the EncodedStartCmdInfo parameter instead.
     * @param string $TrainingMode Training mode, which can be queried via the DescribeTrainingFrameworks API. For example, PS_WORKER, DDP, MPI, and HOROVOD.
     * @param array $DataConfigs Data configurations. This parameter depends on the DataSource field. The maximum number of configurations is 10.
     * @param string $VpcId VPC Id
     * @param string $SubnetId Subnet ID.
     * @param CosPathInfo $Output COS training output path.
     * @param LogConfig $LogConfig CLS logging configuration.
     * @param string $TuningParameters Tuning parameters. The value of this parameter cannot exceed 2048 characters in length.
     * @param boolean $LogEnable Indicates whether to report logs.
     * @param string $Remark Remarks. The value of this parameter cannot exceed 1024 characters.
     * @param string $DataSource Data source. For example, DATASET, COS, CFS, CFSTurbo, HDFS, and GooseFSx.
     * @param string $CallbackUrl Callback URL. This parameter is used for the asynchronous callback to create, start, or stop training tasks. For the callback format and content, see [[TI-ONE API Callback Description]](https://www.tencentcloud.com/document/product/851/84292?from_cn_redirect=1).
     * @param EncodedStartCmdInfo $EncodedStartCmdInfo Encoded task startup command. If StartCmdInfo is also configured, only this parameter takes effect.
     * @param array $CodeRepos Code repository configuration.
     * @param ExposeNetworkConfig $ExposeNetworkConfig Network exposure configuration.
     * @param array $Envs Environment Variables.
     * @param TrainToolConfig $TrainToolConfig Train tool configuration.
     * @param ResourceSupplyAttribute $ResourceSupplyAttribute Training Diagnostic Tool Configuration.
     * @param array $Queues Queue ID.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ResourceConfigInfos",$param) and $param["ResourceConfigInfos"] !== null) {
            $this->ResourceConfigInfos = [];
            foreach ($param["ResourceConfigInfos"] as $key => $value){
                $obj = new ResourceConfigInfo();
                $obj->deserialize($value);
                array_push($this->ResourceConfigInfos, $obj);
            }
        }

        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
        }

        if (array_key_exists("FrameworkName",$param) and $param["FrameworkName"] !== null) {
            $this->FrameworkName = $param["FrameworkName"];
        }

        if (array_key_exists("FrameworkVersion",$param) and $param["FrameworkVersion"] !== null) {
            $this->FrameworkVersion = $param["FrameworkVersion"];
        }

        if (array_key_exists("FrameworkEnvironment",$param) and $param["FrameworkEnvironment"] !== null) {
            $this->FrameworkEnvironment = $param["FrameworkEnvironment"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("CodePackagePath",$param) and $param["CodePackagePath"] !== null) {
            $this->CodePackagePath = new CosPathInfo();
            $this->CodePackagePath->deserialize($param["CodePackagePath"]);
        }

        if (array_key_exists("StartCmdInfo",$param) and $param["StartCmdInfo"] !== null) {
            $this->StartCmdInfo = new StartCmdInfo();
            $this->StartCmdInfo->deserialize($param["StartCmdInfo"]);
        }

        if (array_key_exists("TrainingMode",$param) and $param["TrainingMode"] !== null) {
            $this->TrainingMode = $param["TrainingMode"];
        }

        if (array_key_exists("DataConfigs",$param) and $param["DataConfigs"] !== null) {
            $this->DataConfigs = [];
            foreach ($param["DataConfigs"] as $key => $value){
                $obj = new DataConfig();
                $obj->deserialize($value);
                array_push($this->DataConfigs, $obj);
            }
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new CosPathInfo();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = new LogConfig();
            $this->LogConfig->deserialize($param["LogConfig"]);
        }

        if (array_key_exists("TuningParameters",$param) and $param["TuningParameters"] !== null) {
            $this->TuningParameters = $param["TuningParameters"];
        }

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("EncodedStartCmdInfo",$param) and $param["EncodedStartCmdInfo"] !== null) {
            $this->EncodedStartCmdInfo = new EncodedStartCmdInfo();
            $this->EncodedStartCmdInfo->deserialize($param["EncodedStartCmdInfo"]);
        }

        if (array_key_exists("CodeRepos",$param) and $param["CodeRepos"] !== null) {
            $this->CodeRepos = [];
            foreach ($param["CodeRepos"] as $key => $value){
                $obj = new CodeRepoConfig();
                $obj->deserialize($value);
                array_push($this->CodeRepos, $obj);
            }
        }

        if (array_key_exists("ExposeNetworkConfig",$param) and $param["ExposeNetworkConfig"] !== null) {
            $this->ExposeNetworkConfig = new ExposeNetworkConfig();
            $this->ExposeNetworkConfig->deserialize($param["ExposeNetworkConfig"]);
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("TrainToolConfig",$param) and $param["TrainToolConfig"] !== null) {
            $this->TrainToolConfig = new TrainToolConfig();
            $this->TrainToolConfig->deserialize($param["TrainToolConfig"]);
        }

        if (array_key_exists("ResourceSupplyAttribute",$param) and $param["ResourceSupplyAttribute"] !== null) {
            $this->ResourceSupplyAttribute = new ResourceSupplyAttribute();
            $this->ResourceSupplyAttribute->deserialize($param["ResourceSupplyAttribute"]);
        }

        if (array_key_exists("Queues",$param) and $param["Queues"] !== null) {
            $this->Queues = $param["Queues"];
        }
    }
}
