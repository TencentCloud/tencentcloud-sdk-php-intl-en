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
 * Information of the inference service in the cluster.
 *
 * @method integer getReplicas() Obtain Expected number of running Pods. The instance is 0 when the stop status is reached.Corresponding relationships under different billing and scaling modes are as follows.PREPAID and POSTPAID_BY_HOUR:Corresponding number of instances in the manual scaling mode.Corresponding number of instances based on the default time-based policy in the auto-scaling mode.HYBRID_PAID:
Corresponding number of instances for postpaid instances in the manual scaling mode.Corresponding number of instances under the default time-based policy for postpaid instances in the auto-scaling mode.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplicas(integer $Replicas) Set Expected number of running Pods. The instance is 0 when the stop status is reached.Corresponding relationships under different billing and scaling modes are as follows.PREPAID and POSTPAID_BY_HOUR:Corresponding number of instances in the manual scaling mode.Corresponding number of instances based on the default time-based policy in the auto-scaling mode.HYBRID_PAID:
Corresponding number of instances for postpaid instances in the manual scaling mode.Corresponding number of instances under the default time-based policy for postpaid instances in the auto-scaling mode.Note: This field may return null, indicating that no valid values can be obtained.
 * @method ImageInfo getImageInfo() Obtain Image information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageInfo(ImageInfo $ImageInfo) Set Image information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getEnv() Obtain Environment variables.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnv(array $Env) Set Environment variables.Note: This field may return null, indicating that no valid values can be obtained.
 * @method ResourceInfo getResources() Obtain Resource information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResources(ResourceInfo $Resources) Set Resource information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain Type specifications corresponding to the postpaid instance.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set Type specifications corresponding to the postpaid instance.Note: This field may return null, indicating that no valid values can be obtained.
 * @method ModelInfo getModelInfo() Obtain Model information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModelInfo(ModelInfo $ModelInfo) Set Model information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getLogEnable() Obtain Whether to enable logs.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogEnable(boolean $LogEnable) Set Whether to enable logs.Note: This field may return null, indicating that no valid values can be obtained.
 * @method LogConfig getLogConfig() Obtain Log configurations.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogConfig(LogConfig $LogConfig) Set Log configurations.Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAuthorizationEnable() Obtain Whether to enable authentication.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthorizationEnable(boolean $AuthorizationEnable) Set Whether to enable authentication.Note: This field may return null, indicating that no valid values can be obtained.
 * @method HorizontalPodAutoscaler getHorizontalPodAutoscaler() Obtain HPA configurations.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHorizontalPodAutoscaler(HorizontalPodAutoscaler $HorizontalPodAutoscaler) Set HPA configurations.Note: This field may return null, indicating that no valid values can be obtained.
 * @method WorkloadStatus getStatus() Obtain Description of the service status.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(WorkloadStatus $Status) Set Description of the service status.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWeight() Obtain Weight.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(integer $Weight) Set Weight.Note: This field may return null, indicating that no valid values can be obtained.
 * @method ResourceInfo getResourceTotal() Obtain Total resources.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceTotal(ResourceInfo $ResourceTotal) Set Total resources.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOldReplicas() Obtain Number of historical instances.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOldReplicas(integer $OldReplicas) Set Number of historical instances.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHybridBillingPrepaidReplicas() Obtain This parameter is valid when the billing mode is HYBRID_PAID, and is used to identify the number of prepaid instances in the hybrid billing mode. The default value is 1 if this parameter is left unspecified.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHybridBillingPrepaidReplicas(integer $HybridBillingPrepaidReplicas) Set This parameter is valid when the billing mode is HYBRID_PAID, and is used to identify the number of prepaid instances in the hybrid billing mode. The default value is 1 if this parameter is left unspecified.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOldHybridBillingPrepaidReplicas() Obtain Number of instances during the historical HYBRID_PAID period. The user restores services.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOldHybridBillingPrepaidReplicas(integer $OldHybridBillingPrepaidReplicas) Set Number of instances during the historical HYBRID_PAID period. The user restores services.Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getModelHotUpdateEnable() Obtain Whether to enable hot update for the model. By default, hot update is disabled.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModelHotUpdateEnable(boolean $ModelHotUpdateEnable) Set Whether to enable hot update for the model. By default, hot update is disabled.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceAlias() Obtain Service specification alias.
 * @method void setInstanceAlias(string $InstanceAlias) Set Service specification alias.
 * @method string getScaleMode() Obtain Instance quantity adjusting mode. Defaults to manual.Supported valid values: AUTO (automatic), MANUAL (manual).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScaleMode(string $ScaleMode) Set Instance quantity adjusting mode. Defaults to manual.Supported valid values: AUTO (automatic), MANUAL (manual).Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCronScaleJobs() Obtain Scheduled scaling task.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCronScaleJobs(array $CronScaleJobs) Set Scheduled scaling task.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScaleStrategy() Obtain Scheduled scaling policy.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScaleStrategy(string $ScaleStrategy) Set Scheduled scaling policy.Note: This field may return null, indicating that no valid values can be obtained.
 * @method ScheduledAction getScheduledAction() Obtain Configurations of the scheduled stop.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScheduledAction(ScheduledAction $ScheduledAction) Set Configurations of the scheduled stop.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPodList() Obtain Instance list.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodList(array $PodList) Set Instance list.Note: This field may return null, indicating that no valid values can be obtained.
 * @method Pod getPods() Obtain Pod list information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPods(Pod $Pods) Set Pod list information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPodInfos() Obtain Pod list information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodInfos(array $PodInfos) Set Pod list information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method ServiceLimit getServiceLimit() Obtain Configurations related to speed limit and throttling of services.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceLimit(ServiceLimit $ServiceLimit) Set Configurations related to speed limit and throttling of services.Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getModelTurboEnable() Obtain Whether to enable model acceleration, which is only valid for models in the StableDiffusion (dynamic acceleration) format.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModelTurboEnable(boolean $ModelTurboEnable) Set Whether to enable model acceleration, which is only valid for models in the StableDiffusion (dynamic acceleration) format.Note: This field may return null, indicating that no valid values can be obtained.
 * @method VolumeMount getVolumeMount() Obtain Mounting.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVolumeMount(VolumeMount $VolumeMount) Set Mounting.Note: This field may return null, indicating that no valid values can be obtained.
 * @method InferCodeInfo getInferCodeInfo() Obtain Inference code information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInferCodeInfo(InferCodeInfo $InferCodeInfo) Set Inference code information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCommand() Obtain Service startup command.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCommand(string $Command) Set Service startup command.Note: This field may return null, indicating that no valid values can be obtained.
 * @method ServiceEIP getServiceEIP() Obtain Settings of enabling the TI-ONE private network to access external resources.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceEIP(ServiceEIP $ServiceEIP) Set Settings of enabling the TI-ONE private network to access external resources.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getServicePort() Obtain Service port, with the default value of 8501.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServicePort(integer $ServicePort) Set Service port, with the default value of 8501.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTerminationGracePeriodSeconds() Obtain Graceful exit time limit of the service, in seconds. Default value: 30. Minimum value: 1.
 * @method void setTerminationGracePeriodSeconds(integer $TerminationGracePeriodSeconds) Set Graceful exit time limit of the service, in seconds. Default value: 30. Minimum value: 1.
 * @method array getPreStopCommand() Obtain Command executed before the service instance stops. The instance ends after the command execution is completed or after the execution time exceeds the graceful exit time limit.
 * @method void setPreStopCommand(array $PreStopCommand) Set Command executed before the service instance stops. The instance ends after the command execution is completed or after the execution time exceeds the graceful exit time limit.
 * @method boolean getGrpcEnable() Obtain Whether to enable the gRPC port.
 * @method void setGrpcEnable(boolean $GrpcEnable) Set Whether to enable the gRPC port.
 * @method HealthProbe getHealthProbe() Obtain Health probe.
 * @method void setHealthProbe(HealthProbe $HealthProbe) Set Health probe.
 * @method RollingUpdate getRollingUpdate() Obtain Rolling update configurations.
 * @method void setRollingUpdate(RollingUpdate $RollingUpdate) Set Rolling update configurations.
 * @method integer getInstancePerReplicas() Obtain Number of instances per replica. This parameter is valid only when the deployment type is DIST or ROLE. Default value: 1.
 * @method void setInstancePerReplicas(integer $InstancePerReplicas) Set Number of instances per replica. This parameter is valid only when the deployment type is DIST or ROLE. Default value: 1.
 * @method array getVolumeMounts() Obtain Batch data disk mounting configurations.
 * @method void setVolumeMounts(array $VolumeMounts) Set Batch data disk mounting configurations.
 */
class ServiceInfo extends AbstractModel
{
    /**
     * @var integer Expected number of running Pods. The instance is 0 when the stop status is reached.Corresponding relationships under different billing and scaling modes are as follows.PREPAID and POSTPAID_BY_HOUR:Corresponding number of instances in the manual scaling mode.Corresponding number of instances based on the default time-based policy in the auto-scaling mode.HYBRID_PAID:
Corresponding number of instances for postpaid instances in the manual scaling mode.Corresponding number of instances under the default time-based policy for postpaid instances in the auto-scaling mode.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Replicas;

    /**
     * @var ImageInfo Image information.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageInfo;

    /**
     * @var array Environment variables.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Env;

    /**
     * @var ResourceInfo Resource information.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resources;

    /**
     * @var string Type specifications corresponding to the postpaid instance.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var ModelInfo Model information.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModelInfo;

    /**
     * @var boolean Whether to enable logs.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogEnable;

    /**
     * @var LogConfig Log configurations.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogConfig;

    /**
     * @var boolean Whether to enable authentication.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthorizationEnable;

    /**
     * @var HorizontalPodAutoscaler HPA configurations.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HorizontalPodAutoscaler;

    /**
     * @var WorkloadStatus Description of the service status.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Weight.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @var ResourceInfo Total resources.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceTotal;

    /**
     * @var integer Number of historical instances.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OldReplicas;

    /**
     * @var integer This parameter is valid when the billing mode is HYBRID_PAID, and is used to identify the number of prepaid instances in the hybrid billing mode. The default value is 1 if this parameter is left unspecified.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HybridBillingPrepaidReplicas;

    /**
     * @var integer Number of instances during the historical HYBRID_PAID period. The user restores services.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OldHybridBillingPrepaidReplicas;

    /**
     * @var boolean Whether to enable hot update for the model. By default, hot update is disabled.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModelHotUpdateEnable;

    /**
     * @var string Service specification alias.
     */
    public $InstanceAlias;

    /**
     * @var string Instance quantity adjusting mode. Defaults to manual.Supported valid values: AUTO (automatic), MANUAL (manual).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScaleMode;

    /**
     * @var array Scheduled scaling task.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CronScaleJobs;

    /**
     * @var string Scheduled scaling policy.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScaleStrategy;

    /**
     * @var ScheduledAction Configurations of the scheduled stop.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScheduledAction;

    /**
     * @var array Instance list.Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $PodList;

    /**
     * @var Pod Pod list information.Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Pods;

    /**
     * @var array Pod list information.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PodInfos;

    /**
     * @var ServiceLimit Configurations related to speed limit and throttling of services.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceLimit;

    /**
     * @var boolean Whether to enable model acceleration, which is only valid for models in the StableDiffusion (dynamic acceleration) format.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModelTurboEnable;

    /**
     * @var VolumeMount Mounting.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VolumeMount;

    /**
     * @var InferCodeInfo Inference code information.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InferCodeInfo;

    /**
     * @var string Service startup command.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Command;

    /**
     * @var ServiceEIP Settings of enabling the TI-ONE private network to access external resources.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceEIP;

    /**
     * @var integer Service port, with the default value of 8501.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServicePort;

    /**
     * @var integer Graceful exit time limit of the service, in seconds. Default value: 30. Minimum value: 1.
     */
    public $TerminationGracePeriodSeconds;

    /**
     * @var array Command executed before the service instance stops. The instance ends after the command execution is completed or after the execution time exceeds the graceful exit time limit.
     */
    public $PreStopCommand;

    /**
     * @var boolean Whether to enable the gRPC port.
     */
    public $GrpcEnable;

    /**
     * @var HealthProbe Health probe.
     */
    public $HealthProbe;

    /**
     * @var RollingUpdate Rolling update configurations.
     */
    public $RollingUpdate;

    /**
     * @var integer Number of instances per replica. This parameter is valid only when the deployment type is DIST or ROLE. Default value: 1.
     */
    public $InstancePerReplicas;

    /**
     * @var array Batch data disk mounting configurations.
     */
    public $VolumeMounts;

    /**
     * @param integer $Replicas Expected number of running Pods. The instance is 0 when the stop status is reached.Corresponding relationships under different billing and scaling modes are as follows.PREPAID and POSTPAID_BY_HOUR:Corresponding number of instances in the manual scaling mode.Corresponding number of instances based on the default time-based policy in the auto-scaling mode.HYBRID_PAID:
Corresponding number of instances for postpaid instances in the manual scaling mode.Corresponding number of instances under the default time-based policy for postpaid instances in the auto-scaling mode.Note: This field may return null, indicating that no valid values can be obtained.
     * @param ImageInfo $ImageInfo Image information.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Env Environment variables.Note: This field may return null, indicating that no valid values can be obtained.
     * @param ResourceInfo $Resources Resource information.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType Type specifications corresponding to the postpaid instance.Note: This field may return null, indicating that no valid values can be obtained.
     * @param ModelInfo $ModelInfo Model information.Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $LogEnable Whether to enable logs.Note: This field may return null, indicating that no valid values can be obtained.
     * @param LogConfig $LogConfig Log configurations.Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AuthorizationEnable Whether to enable authentication.Note: This field may return null, indicating that no valid values can be obtained.
     * @param HorizontalPodAutoscaler $HorizontalPodAutoscaler HPA configurations.Note: This field may return null, indicating that no valid values can be obtained.
     * @param WorkloadStatus $Status Description of the service status.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Weight Weight.Note: This field may return null, indicating that no valid values can be obtained.
     * @param ResourceInfo $ResourceTotal Total resources.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OldReplicas Number of historical instances.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HybridBillingPrepaidReplicas This parameter is valid when the billing mode is HYBRID_PAID, and is used to identify the number of prepaid instances in the hybrid billing mode. The default value is 1 if this parameter is left unspecified.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OldHybridBillingPrepaidReplicas Number of instances during the historical HYBRID_PAID period. The user restores services.Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ModelHotUpdateEnable Whether to enable hot update for the model. By default, hot update is disabled.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceAlias Service specification alias.
     * @param string $ScaleMode Instance quantity adjusting mode. Defaults to manual.Supported valid values: AUTO (automatic), MANUAL (manual).Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CronScaleJobs Scheduled scaling task.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScaleStrategy Scheduled scaling policy.Note: This field may return null, indicating that no valid values can be obtained.
     * @param ScheduledAction $ScheduledAction Configurations of the scheduled stop.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PodList Instance list.Note: This field may return null, indicating that no valid values can be obtained.
     * @param Pod $Pods Pod list information.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PodInfos Pod list information.Note: This field may return null, indicating that no valid values can be obtained.
     * @param ServiceLimit $ServiceLimit Configurations related to speed limit and throttling of services.Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ModelTurboEnable Whether to enable model acceleration, which is only valid for models in the StableDiffusion (dynamic acceleration) format.Note: This field may return null, indicating that no valid values can be obtained.
     * @param VolumeMount $VolumeMount Mounting.Note: This field may return null, indicating that no valid values can be obtained.
     * @param InferCodeInfo $InferCodeInfo Inference code information.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Command Service startup command.Note: This field may return null, indicating that no valid values can be obtained.
     * @param ServiceEIP $ServiceEIP Settings of enabling the TI-ONE private network to access external resources.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ServicePort Service port, with the default value of 8501.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TerminationGracePeriodSeconds Graceful exit time limit of the service, in seconds. Default value: 30. Minimum value: 1.
     * @param array $PreStopCommand Command executed before the service instance stops. The instance ends after the command execution is completed or after the execution time exceeds the graceful exit time limit.
     * @param boolean $GrpcEnable Whether to enable the gRPC port.
     * @param HealthProbe $HealthProbe Health probe.
     * @param RollingUpdate $RollingUpdate Rolling update configurations.
     * @param integer $InstancePerReplicas Number of instances per replica. This parameter is valid only when the deployment type is DIST or ROLE. Default value: 1.
     * @param array $VolumeMounts Batch data disk mounting configurations.
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
        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = [];
            foreach ($param["Env"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->Env, $obj);
            }
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = new ResourceInfo();
            $this->Resources->deserialize($param["Resources"]);
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ModelInfo",$param) and $param["ModelInfo"] !== null) {
            $this->ModelInfo = new ModelInfo();
            $this->ModelInfo->deserialize($param["ModelInfo"]);
        }

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
        }

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = new LogConfig();
            $this->LogConfig->deserialize($param["LogConfig"]);
        }

        if (array_key_exists("AuthorizationEnable",$param) and $param["AuthorizationEnable"] !== null) {
            $this->AuthorizationEnable = $param["AuthorizationEnable"];
        }

        if (array_key_exists("HorizontalPodAutoscaler",$param) and $param["HorizontalPodAutoscaler"] !== null) {
            $this->HorizontalPodAutoscaler = new HorizontalPodAutoscaler();
            $this->HorizontalPodAutoscaler->deserialize($param["HorizontalPodAutoscaler"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new WorkloadStatus();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("ResourceTotal",$param) and $param["ResourceTotal"] !== null) {
            $this->ResourceTotal = new ResourceInfo();
            $this->ResourceTotal->deserialize($param["ResourceTotal"]);
        }

        if (array_key_exists("OldReplicas",$param) and $param["OldReplicas"] !== null) {
            $this->OldReplicas = $param["OldReplicas"];
        }

        if (array_key_exists("HybridBillingPrepaidReplicas",$param) and $param["HybridBillingPrepaidReplicas"] !== null) {
            $this->HybridBillingPrepaidReplicas = $param["HybridBillingPrepaidReplicas"];
        }

        if (array_key_exists("OldHybridBillingPrepaidReplicas",$param) and $param["OldHybridBillingPrepaidReplicas"] !== null) {
            $this->OldHybridBillingPrepaidReplicas = $param["OldHybridBillingPrepaidReplicas"];
        }

        if (array_key_exists("ModelHotUpdateEnable",$param) and $param["ModelHotUpdateEnable"] !== null) {
            $this->ModelHotUpdateEnable = $param["ModelHotUpdateEnable"];
        }

        if (array_key_exists("InstanceAlias",$param) and $param["InstanceAlias"] !== null) {
            $this->InstanceAlias = $param["InstanceAlias"];
        }

        if (array_key_exists("ScaleMode",$param) and $param["ScaleMode"] !== null) {
            $this->ScaleMode = $param["ScaleMode"];
        }

        if (array_key_exists("CronScaleJobs",$param) and $param["CronScaleJobs"] !== null) {
            $this->CronScaleJobs = [];
            foreach ($param["CronScaleJobs"] as $key => $value){
                $obj = new CronScaleJob();
                $obj->deserialize($value);
                array_push($this->CronScaleJobs, $obj);
            }
        }

        if (array_key_exists("ScaleStrategy",$param) and $param["ScaleStrategy"] !== null) {
            $this->ScaleStrategy = $param["ScaleStrategy"];
        }

        if (array_key_exists("ScheduledAction",$param) and $param["ScheduledAction"] !== null) {
            $this->ScheduledAction = new ScheduledAction();
            $this->ScheduledAction->deserialize($param["ScheduledAction"]);
        }

        if (array_key_exists("PodList",$param) and $param["PodList"] !== null) {
            $this->PodList = $param["PodList"];
        }

        if (array_key_exists("Pods",$param) and $param["Pods"] !== null) {
            $this->Pods = new Pod();
            $this->Pods->deserialize($param["Pods"]);
        }

        if (array_key_exists("PodInfos",$param) and $param["PodInfos"] !== null) {
            $this->PodInfos = [];
            foreach ($param["PodInfos"] as $key => $value){
                $obj = new Pod();
                $obj->deserialize($value);
                array_push($this->PodInfos, $obj);
            }
        }

        if (array_key_exists("ServiceLimit",$param) and $param["ServiceLimit"] !== null) {
            $this->ServiceLimit = new ServiceLimit();
            $this->ServiceLimit->deserialize($param["ServiceLimit"]);
        }

        if (array_key_exists("ModelTurboEnable",$param) and $param["ModelTurboEnable"] !== null) {
            $this->ModelTurboEnable = $param["ModelTurboEnable"];
        }

        if (array_key_exists("VolumeMount",$param) and $param["VolumeMount"] !== null) {
            $this->VolumeMount = new VolumeMount();
            $this->VolumeMount->deserialize($param["VolumeMount"]);
        }

        if (array_key_exists("InferCodeInfo",$param) and $param["InferCodeInfo"] !== null) {
            $this->InferCodeInfo = new InferCodeInfo();
            $this->InferCodeInfo->deserialize($param["InferCodeInfo"]);
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("ServiceEIP",$param) and $param["ServiceEIP"] !== null) {
            $this->ServiceEIP = new ServiceEIP();
            $this->ServiceEIP->deserialize($param["ServiceEIP"]);
        }

        if (array_key_exists("ServicePort",$param) and $param["ServicePort"] !== null) {
            $this->ServicePort = $param["ServicePort"];
        }

        if (array_key_exists("TerminationGracePeriodSeconds",$param) and $param["TerminationGracePeriodSeconds"] !== null) {
            $this->TerminationGracePeriodSeconds = $param["TerminationGracePeriodSeconds"];
        }

        if (array_key_exists("PreStopCommand",$param) and $param["PreStopCommand"] !== null) {
            $this->PreStopCommand = $param["PreStopCommand"];
        }

        if (array_key_exists("GrpcEnable",$param) and $param["GrpcEnable"] !== null) {
            $this->GrpcEnable = $param["GrpcEnable"];
        }

        if (array_key_exists("HealthProbe",$param) and $param["HealthProbe"] !== null) {
            $this->HealthProbe = new HealthProbe();
            $this->HealthProbe->deserialize($param["HealthProbe"]);
        }

        if (array_key_exists("RollingUpdate",$param) and $param["RollingUpdate"] !== null) {
            $this->RollingUpdate = new RollingUpdate();
            $this->RollingUpdate->deserialize($param["RollingUpdate"]);
        }

        if (array_key_exists("InstancePerReplicas",$param) and $param["InstancePerReplicas"] !== null) {
            $this->InstancePerReplicas = $param["InstancePerReplicas"];
        }

        if (array_key_exists("VolumeMounts",$param) and $param["VolumeMounts"] !== null) {
            $this->VolumeMounts = [];
            foreach ($param["VolumeMounts"] as $key => $value){
                $obj = new VolumeMount();
                $obj->deserialize($value);
                array_push($this->VolumeMounts, $obj);
            }
        }
    }
}
