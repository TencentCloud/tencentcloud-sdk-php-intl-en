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
 * @method string getEnvName() 获取Compute environment name
 * @method void setEnvName(string $EnvName) 设置Compute environment name
 * @method integer getDesiredComputeNodeCount() 获取Number of desired compute nodes
 * @method void setDesiredComputeNodeCount(integer $DesiredComputeNodeCount) 设置Number of desired compute nodes
 * @method string getEnvDescription() 获取Compute environment description
 * @method void setEnvDescription(string $EnvDescription) 设置Compute environment description
 * @method string getEnvType() 获取Compute environment management type
 * @method void setEnvType(string $EnvType) 设置Compute environment management type
 * @method EnvData getEnvData() 获取Compute environment's specific parameters
 * @method void setEnvData(EnvData $EnvData) 设置Compute environment's specific parameters
 * @method array getMountDataDisks() 获取Data disk mounting option
 * @method void setMountDataDisks(array $MountDataDisks) 设置Data disk mounting option
 * @method array getAuthentications() 获取Authorization information
 * @method void setAuthentications(array $Authentications) 设置Authorization information
 * @method array getInputMappings() 获取Input mapping information
 * @method void setInputMappings(array $InputMappings) 设置Input mapping information
 * @method AgentRunningMode getAgentRunningMode() 获取Agent running mode; applicable for Windows
 * @method void setAgentRunningMode(AgentRunningMode $AgentRunningMode) 设置Agent running mode; applicable for Windows
 * @method Notification getNotifications() 获取Notification information
 * @method void setNotifications(Notification $Notifications) 设置Notification information
 * @method string getActionIfComputeNodeInactive() 获取Inactive node processing policy. Default value: RECREATE, which means that instance resources will be re-created periodically for compute nodes where instance creation fails or is abnormally returned.
 * @method void setActionIfComputeNodeInactive(string $ActionIfComputeNodeInactive) 设置Inactive node processing policy. Default value: RECREATE, which means that instance resources will be re-created periodically for compute nodes where instance creation fails or is abnormally returned.
 */

/**
 *Compute environment
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
     * @var Notification Notification information
     */
    public $Notifications;

    /**
     * @var string Inactive node processing policy. Default value: RECREATE, which means that instance resources will be re-created periodically for compute nodes where instance creation fails or is abnormally returned.
     */
    public $ActionIfComputeNodeInactive;
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
     * @param Notification $Notifications Notification information
     * @param string $ActionIfComputeNodeInactive Inactive node processing policy. Default value: RECREATE, which means that instance resources will be re-created periodically for compute nodes where instance creation fails or is abnormally returned.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
            $this->Notifications = new Notification();
            $this->Notifications->deserialize($param["Notifications"]);
        }

        if (array_key_exists("ActionIfComputeNodeInactive",$param) and $param["ActionIfComputeNodeInactive"] !== null) {
            $this->ActionIfComputeNodeInactive = $param["ActionIfComputeNodeInactive"];
        }
    }
}
