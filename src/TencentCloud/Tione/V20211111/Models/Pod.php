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
 * Pod information display.
 *
 * @method string getName() Obtain Pod name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Pod name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUid() Obtain Unique ID of the Pod.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUid(string $Uid) Set Unique ID of the Pod.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getChargeType() Obtain Service payment mode.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChargeType(string $ChargeType) Set Service payment mode.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPhase() Obtain Pod status.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhase(string $Phase) Set Pod status.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIP() Obtain Pod IP address.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIP(string $IP) Set Pod IP address.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Pod creation time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Pod creation time.Note: This field may return null, indicating that no valid values can be obtained.
 * @method Container getContainers() Obtain Container list.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainers(Container $Containers) Set Container list.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getContainerInfos() Obtain Container list.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerInfos(array $ContainerInfos) Set Container list.Note: This field may return null, indicating that no valid values can be obtained.
 * @method CrossTenantENIInfo getCrossTenantENIInfo() Obtain Container calling information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCrossTenantENIInfo(CrossTenantENIInfo $CrossTenantENIInfo) Set Container calling information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Instance status information.
 * @method void setStatus(string $Status) Set Instance status information.
 * @method string getStartScheduleTime() Obtain Instance scheduling start time.
 * @method void setStartScheduleTime(string $StartScheduleTime) Set Instance scheduling start time.
 * @method string getMessage() Obtain Supplemental instance status information.
 * @method void setMessage(string $Message) Set Supplemental instance status information.
 * @method string getNodeIP() Obtain Node IP address of the current instance.
 * @method void setNodeIP(string $NodeIP) Set Node IP address of the current instance.
 * @method string getNodeId() Obtain Node ID of the current instance.
 * @method void setNodeId(string $NodeId) Set Node ID of the current instance.
 * @method string getResourceGroupId() Obtain Resource group ID to which the instance belonged.
 * @method void setResourceGroupId(string $ResourceGroupId) Set Resource group ID to which the instance belonged.
 * @method string getResourceGroupName() Obtain Resource group name.
 * @method void setResourceGroupName(string $ResourceGroupName) Set Resource group name.
 * @method ResourceInfo getResourceInfo() Obtain Resource usage information of the instance.
 * @method void setResourceInfo(ResourceInfo $ResourceInfo) Set Resource usage information of the instance.
 */
class Pod extends AbstractModel
{
    /**
     * @var string Pod name.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Unique ID of the Pod.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uid;

    /**
     * @var string Service payment mode.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeType;

    /**
     * @var string Pod status.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Phase;

    /**
     * @var string Pod IP address.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IP;

    /**
     * @var string Pod creation time.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var Container Container list.Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Containers;

    /**
     * @var array Container list.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerInfos;

    /**
     * @var CrossTenantENIInfo Container calling information.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CrossTenantENIInfo;

    /**
     * @var string Instance status information.
     */
    public $Status;

    /**
     * @var string Instance scheduling start time.
     */
    public $StartScheduleTime;

    /**
     * @var string Supplemental instance status information.
     */
    public $Message;

    /**
     * @var string Node IP address of the current instance.
     */
    public $NodeIP;

    /**
     * @var string Node ID of the current instance.
     */
    public $NodeId;

    /**
     * @var string Resource group ID to which the instance belonged.
     */
    public $ResourceGroupId;

    /**
     * @var string Resource group name.
     */
    public $ResourceGroupName;

    /**
     * @var ResourceInfo Resource usage information of the instance.
     */
    public $ResourceInfo;

    /**
     * @param string $Name Pod name.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uid Unique ID of the Pod.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ChargeType Service payment mode.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Phase Pod status.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IP Pod IP address.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Pod creation time.Note: This field may return null, indicating that no valid values can be obtained.
     * @param Container $Containers Container list.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ContainerInfos Container list.Note: This field may return null, indicating that no valid values can be obtained.
     * @param CrossTenantENIInfo $CrossTenantENIInfo Container calling information.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Instance status information.
     * @param string $StartScheduleTime Instance scheduling start time.
     * @param string $Message Supplemental instance status information.
     * @param string $NodeIP Node IP address of the current instance.
     * @param string $NodeId Node ID of the current instance.
     * @param string $ResourceGroupId Resource group ID to which the instance belonged.
     * @param string $ResourceGroupName Resource group name.
     * @param ResourceInfo $ResourceInfo Resource usage information of the instance.
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

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = new Container();
            $this->Containers->deserialize($param["Containers"]);
        }

        if (array_key_exists("ContainerInfos",$param) and $param["ContainerInfos"] !== null) {
            $this->ContainerInfos = [];
            foreach ($param["ContainerInfos"] as $key => $value){
                $obj = new Container();
                $obj->deserialize($value);
                array_push($this->ContainerInfos, $obj);
            }
        }

        if (array_key_exists("CrossTenantENIInfo",$param) and $param["CrossTenantENIInfo"] !== null) {
            $this->CrossTenantENIInfo = new CrossTenantENIInfo();
            $this->CrossTenantENIInfo->deserialize($param["CrossTenantENIInfo"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartScheduleTime",$param) and $param["StartScheduleTime"] !== null) {
            $this->StartScheduleTime = $param["StartScheduleTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("NodeIP",$param) and $param["NodeIP"] !== null) {
            $this->NodeIP = $param["NodeIP"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("ResourceInfo",$param) and $param["ResourceInfo"] !== null) {
            $this->ResourceInfo = new ResourceInfo();
            $this->ResourceInfo->deserialize($param["ResourceInfo"]);
        }
    }
}
