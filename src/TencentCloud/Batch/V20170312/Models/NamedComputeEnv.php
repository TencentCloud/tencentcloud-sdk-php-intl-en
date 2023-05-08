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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Compute environment
 *
 * @method string getEnvName() Obtain Compute environment name
 * @method void setEnvName(string $EnvName) Set Compute environment name
 * @method integer getDesiredComputeNodeCount() Obtain Number of desired compute nodes
 * @method void setDesiredComputeNodeCount(integer $DesiredComputeNodeCount) Set Number of desired compute nodes
 * @method string getEnvDescription() Obtain Compute environment description
 * @method void setEnvDescription(string $EnvDescription) Set Compute environment description
 * @method string getEnvType() Obtain Compute environment management type
 * @method void setEnvType(string $EnvType) Set Compute environment management type
 * @method EnvData getEnvData() Obtain Compute environment's specific parameters
 * @method void setEnvData(EnvData $EnvData) Set Compute environment's specific parameters
 * @method array getMountDataDisks() Obtain Data disk mounting option
 * @method void setMountDataDisks(array $MountDataDisks) Set Data disk mounting option
 * @method array getAuthentications() Obtain Authorization information
 * @method void setAuthentications(array $Authentications) Set Authorization information
 * @method array getInputMappings() Obtain Input mapping information
 * @method void setInputMappings(array $InputMappings) Set Input mapping information
 * @method AgentRunningMode getAgentRunningMode() Obtain Agent running mode; applicable for Windows
 * @method void setAgentRunningMode(AgentRunningMode $AgentRunningMode) Set Agent running mode; applicable for Windows
 * @method array getNotifications() Obtain Notification information
 * @method void setNotifications(array $Notifications) Set Notification information
 * @method string getActionIfComputeNodeInactive() Obtain Policy for inactive nodes. Default: `RECREATE`, which means that instance resources will be re-created periodically for compute nodes where instance creation fails or is abnormally returned.
 * @method void setActionIfComputeNodeInactive(string $ActionIfComputeNodeInactive) Set Policy for inactive nodes. Default: `RECREATE`, which means that instance resources will be re-created periodically for compute nodes where instance creation fails or is abnormally returned.
 * @method integer getResourceMaxRetryCount() Obtain When the instances are failed to be created or returned because of exceptions, the related compute node will retry to create instances periodically. This parameter specifies the maximum retry attempts. The max value is 100 and the default value is `7`.
 * @method void setResourceMaxRetryCount(integer $ResourceMaxRetryCount) Set When the instances are failed to be created or returned because of exceptions, the related compute node will retry to create instances periodically. This parameter specifies the maximum retry attempts. The max value is 100 and the default value is `7`.
 * @method array getTags() Obtain List of tags to bind with a compute environment. Each compute environment can have up to 10 tags.
 * @method void setTags(array $Tags) Set List of tags to bind with a compute environment. Each compute environment can have up to 10 tags.
 * @method string getNotificationTarget() Obtain Target of the notification
Values: `CMQ`, `TDMQ_CMQ`
`CMQ`: Tencent Cloud CMQ (default)
`TDMQ_CMQ`: Tencent Cloud TDMQ_CMQ.<br/>Note: CMQ has been discontinued. Please use `TDMQ_CMQ`. See [CMQ Queue Migration to TDMQ for CMQ](https://intl.cloud.tencent.com/document/product/406/60860?from_cn_redirect=1)
 * @method void setNotificationTarget(string $NotificationTarget) Set Target of the notification
Values: `CMQ`, `TDMQ_CMQ`
`CMQ`: Tencent Cloud CMQ (default)
`TDMQ_CMQ`: Tencent Cloud TDMQ_CMQ.<br/>Note: CMQ has been discontinued. Please use `TDMQ_CMQ`. See [CMQ Queue Migration to TDMQ for CMQ](https://intl.cloud.tencent.com/document/product/406/60860?from_cn_redirect=1)
 */
class NamedComputeEnv extends AbstractModel
{
    /**
     * @var string Compute environment name
     */
    public $EnvName;

    /**
     * @var integer Number of desired compute nodes
     */
    public $DesiredComputeNodeCount;

    /**
     * @var string Compute environment description
     */
    public $EnvDescription;

    /**
     * @var string Compute environment management type
     */
    public $EnvType;

    /**
     * @var EnvData Compute environment's specific parameters
     */
    public $EnvData;

    /**
     * @var array Data disk mounting option
     */
    public $MountDataDisks;

    /**
     * @var array Authorization information
     */
    public $Authentications;

    /**
     * @var array Input mapping information
     */
    public $InputMappings;

    /**
     * @var AgentRunningMode Agent running mode; applicable for Windows
     */
    public $AgentRunningMode;

    /**
     * @var array Notification information
     */
    public $Notifications;

    /**
     * @var string Policy for inactive nodes. Default: `RECREATE`, which means that instance resources will be re-created periodically for compute nodes where instance creation fails or is abnormally returned.
     */
    public $ActionIfComputeNodeInactive;

    /**
     * @var integer When the instances are failed to be created or returned because of exceptions, the related compute node will retry to create instances periodically. This parameter specifies the maximum retry attempts. The max value is 100 and the default value is `7`.
     */
    public $ResourceMaxRetryCount;

    /**
     * @var array List of tags to bind with a compute environment. Each compute environment can have up to 10 tags.
     */
    public $Tags;

    /**
     * @var string Target of the notification
Values: `CMQ`, `TDMQ_CMQ`
`CMQ`: Tencent Cloud CMQ (default)
`TDMQ_CMQ`: Tencent Cloud TDMQ_CMQ.<br/>Note: CMQ has been discontinued. Please use `TDMQ_CMQ`. See [CMQ Queue Migration to TDMQ for CMQ](https://intl.cloud.tencent.com/document/product/406/60860?from_cn_redirect=1)
     */
    public $NotificationTarget;

    /**
     * @param string $EnvName Compute environment name
     * @param integer $DesiredComputeNodeCount Number of desired compute nodes
     * @param string $EnvDescription Compute environment description
     * @param string $EnvType Compute environment management type
     * @param EnvData $EnvData Compute environment's specific parameters
     * @param array $MountDataDisks Data disk mounting option
     * @param array $Authentications Authorization information
     * @param array $InputMappings Input mapping information
     * @param AgentRunningMode $AgentRunningMode Agent running mode; applicable for Windows
     * @param array $Notifications Notification information
     * @param string $ActionIfComputeNodeInactive Policy for inactive nodes. Default: `RECREATE`, which means that instance resources will be re-created periodically for compute nodes where instance creation fails or is abnormally returned.
     * @param integer $ResourceMaxRetryCount When the instances are failed to be created or returned because of exceptions, the related compute node will retry to create instances periodically. This parameter specifies the maximum retry attempts. The max value is 100 and the default value is `7`.
     * @param array $Tags List of tags to bind with a compute environment. Each compute environment can have up to 10 tags.
     * @param string $NotificationTarget Target of the notification
Values: `CMQ`, `TDMQ_CMQ`
`CMQ`: Tencent Cloud CMQ (default)
`TDMQ_CMQ`: Tencent Cloud TDMQ_CMQ.<br/>Note: CMQ has been discontinued. Please use `TDMQ_CMQ`. See [CMQ Queue Migration to TDMQ for CMQ](https://intl.cloud.tencent.com/document/product/406/60860?from_cn_redirect=1)
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
        if (array_key_exists("EnvName",$param) and $param["EnvName"] !== null) {
            $this->EnvName = $param["EnvName"];
        }

        if (array_key_exists("DesiredComputeNodeCount",$param) and $param["DesiredComputeNodeCount"] !== null) {
            $this->DesiredComputeNodeCount = $param["DesiredComputeNodeCount"];
        }

        if (array_key_exists("EnvDescription",$param) and $param["EnvDescription"] !== null) {
            $this->EnvDescription = $param["EnvDescription"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("EnvData",$param) and $param["EnvData"] !== null) {
            $this->EnvData = new EnvData();
            $this->EnvData->deserialize($param["EnvData"]);
        }

        if (array_key_exists("MountDataDisks",$param) and $param["MountDataDisks"] !== null) {
            $this->MountDataDisks = [];
            foreach ($param["MountDataDisks"] as $key => $value){
                $obj = new MountDataDisk();
                $obj->deserialize($value);
                array_push($this->MountDataDisks, $obj);
            }
        }

        if (array_key_exists("Authentications",$param) and $param["Authentications"] !== null) {
            $this->Authentications = [];
            foreach ($param["Authentications"] as $key => $value){
                $obj = new Authentication();
                $obj->deserialize($value);
                array_push($this->Authentications, $obj);
            }
        }

        if (array_key_exists("InputMappings",$param) and $param["InputMappings"] !== null) {
            $this->InputMappings = [];
            foreach ($param["InputMappings"] as $key => $value){
                $obj = new InputMapping();
                $obj->deserialize($value);
                array_push($this->InputMappings, $obj);
            }
        }

        if (array_key_exists("AgentRunningMode",$param) and $param["AgentRunningMode"] !== null) {
            $this->AgentRunningMode = new AgentRunningMode();
            $this->AgentRunningMode->deserialize($param["AgentRunningMode"]);
        }

        if (array_key_exists("Notifications",$param) and $param["Notifications"] !== null) {
            $this->Notifications = [];
            foreach ($param["Notifications"] as $key => $value){
                $obj = new Notification();
                $obj->deserialize($value);
                array_push($this->Notifications, $obj);
            }
        }

        if (array_key_exists("ActionIfComputeNodeInactive",$param) and $param["ActionIfComputeNodeInactive"] !== null) {
            $this->ActionIfComputeNodeInactive = $param["ActionIfComputeNodeInactive"];
        }

        if (array_key_exists("ResourceMaxRetryCount",$param) and $param["ResourceMaxRetryCount"] !== null) {
            $this->ResourceMaxRetryCount = $param["ResourceMaxRetryCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("NotificationTarget",$param) and $param["NotificationTarget"] !== null) {
            $this->NotificationTarget = $param["NotificationTarget"];
        }
    }
}
