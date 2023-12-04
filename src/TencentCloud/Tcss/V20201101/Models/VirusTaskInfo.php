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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of containers in the virus scanning task at runtime
 *
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getContainerId() Obtain Container ID
 * @method void setContainerId(string $ContainerId) Set Container ID
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getImageId() Obtain Image ID
 * @method void setImageId(string $ImageId) Set Image ID
 * @method string getHostName() Obtain Node name
 * @method void setHostName(string $HostName) Set Node name
 * @method string getHostIp() Obtain Private IP of the node
 * @method void setHostIp(string $HostIp) Set Private IP of the node
 * @method string getStatus() Obtain Scanning status:
`WAIT`: Pending scanning.
`FAILED`: Failed.
`SCANNING`: Scanning.
`FINISHED`: Ended.
`CANCELING`: Canceling.
`CANCELED`: Canceled.
`CANCEL_FAILED`: Failed to cancel.
 * @method void setStatus(string $Status) Set Scanning status:
`WAIT`: Pending scanning.
`FAILED`: Failed.
`SCANNING`: Scanning.
`FINISHED`: Ended.
`CANCELING`: Canceling.
`CANCELED`: Canceled.
`CANCEL_FAILED`: Failed to cancel.
 * @method string getStartTime() Obtain Check start time
 * @method void setStartTime(string $StartTime) Set Check start time
 * @method string getEndTime() Obtain Check end time
 * @method void setEndTime(string $EndTime) Set Check end time
 * @method integer getRiskCnt() Obtain Number of risks
 * @method void setRiskCnt(integer $RiskCnt) Set Number of risks
 * @method string getId() Obtain Event ID
 * @method void setId(string $Id) Set Event ID
 * @method string getErrorMsg() Obtain Cause:
`SEND_SUCCESSED`: Task submitted.
`SCAN_WAIT`: Waiting to scan...
`OFFLINE`: Offline.
`SEND_FAILED`: Failed to deploy.
`TIMEOUT`: Timed out.
`LOW_AGENT_VERSION`: The Agent version is too old.
`AGENT_NOT_FOUND`: The image's agent doesn't exist.
`TOO_MANY`: Too many tasks.
`VALIDATION`: Invalid parameter.
`INTERNAL`: Internal service error.
`MISC`: Other errors.
`UNAUTH`: The image is not assigned with a license.
`SEND_CANCEL_SUCCESSED`: Task submitted.
 * @method void setErrorMsg(string $ErrorMsg) Set Cause:
`SEND_SUCCESSED`: Task submitted.
`SCAN_WAIT`: Waiting to scan...
`OFFLINE`: Offline.
`SEND_FAILED`: Failed to deploy.
`TIMEOUT`: Timed out.
`LOW_AGENT_VERSION`: The Agent version is too old.
`AGENT_NOT_FOUND`: The image's agent doesn't exist.
`TOO_MANY`: Too many tasks.
`VALIDATION`: Invalid parameter.
`INTERNAL`: Internal service error.
`MISC`: Other errors.
`UNAUTH`: The image is not assigned with a license.
`SEND_CANCEL_SUCCESSED`: Task submitted.
 * @method string getNodeType() Obtain Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method void setNodeType(string $NodeType) Set Node type. Values: `NORMAL` (general node), `SUPER` (super node).
 * @method string getPublicIP() Obtain Public IP of the node
 * @method void setPublicIP(string $PublicIP) Set Public IP of the node
 * @method string getNodeID() Obtain Node ID
 * @method void setNodeID(string $NodeID) Set Node ID
 */
class VirusTaskInfo extends AbstractModel
{
    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var string Container ID
     */
    public $ContainerId;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Image ID
     */
    public $ImageId;

    /**
     * @var string Node name
     */
    public $HostName;

    /**
     * @var string Private IP of the node
     */
    public $HostIp;

    /**
     * @var string Scanning status:
`WAIT`: Pending scanning.
`FAILED`: Failed.
`SCANNING`: Scanning.
`FINISHED`: Ended.
`CANCELING`: Canceling.
`CANCELED`: Canceled.
`CANCEL_FAILED`: Failed to cancel.
     */
    public $Status;

    /**
     * @var string Check start time
     */
    public $StartTime;

    /**
     * @var string Check end time
     */
    public $EndTime;

    /**
     * @var integer Number of risks
     */
    public $RiskCnt;

    /**
     * @var string Event ID
     */
    public $Id;

    /**
     * @var string Cause:
`SEND_SUCCESSED`: Task submitted.
`SCAN_WAIT`: Waiting to scan...
`OFFLINE`: Offline.
`SEND_FAILED`: Failed to deploy.
`TIMEOUT`: Timed out.
`LOW_AGENT_VERSION`: The Agent version is too old.
`AGENT_NOT_FOUND`: The image's agent doesn't exist.
`TOO_MANY`: Too many tasks.
`VALIDATION`: Invalid parameter.
`INTERNAL`: Internal service error.
`MISC`: Other errors.
`UNAUTH`: The image is not assigned with a license.
`SEND_CANCEL_SUCCESSED`: Task submitted.
     */
    public $ErrorMsg;

    /**
     * @var string Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     */
    public $NodeType;

    /**
     * @var string Public IP of the node
     */
    public $PublicIP;

    /**
     * @var string Node ID
     */
    public $NodeID;

    /**
     * @param string $ContainerName Container name
     * @param string $ContainerId Container ID
     * @param string $ImageName Image name
     * @param string $ImageId Image ID
     * @param string $HostName Node name
     * @param string $HostIp Private IP of the node
     * @param string $Status Scanning status:
`WAIT`: Pending scanning.
`FAILED`: Failed.
`SCANNING`: Scanning.
`FINISHED`: Ended.
`CANCELING`: Canceling.
`CANCELED`: Canceled.
`CANCEL_FAILED`: Failed to cancel.
     * @param string $StartTime Check start time
     * @param string $EndTime Check end time
     * @param integer $RiskCnt Number of risks
     * @param string $Id Event ID
     * @param string $ErrorMsg Cause:
`SEND_SUCCESSED`: Task submitted.
`SCAN_WAIT`: Waiting to scan...
`OFFLINE`: Offline.
`SEND_FAILED`: Failed to deploy.
`TIMEOUT`: Timed out.
`LOW_AGENT_VERSION`: The Agent version is too old.
`AGENT_NOT_FOUND`: The image's agent doesn't exist.
`TOO_MANY`: Too many tasks.
`VALIDATION`: Invalid parameter.
`INTERNAL`: Internal service error.
`MISC`: Other errors.
`UNAUTH`: The image is not assigned with a license.
`SEND_CANCEL_SUCCESSED`: Task submitted.
     * @param string $NodeType Node type. Values: `NORMAL` (general node), `SUPER` (super node).
     * @param string $PublicIP Public IP of the node
     * @param string $NodeID Node ID
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
        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }
    }
}
