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
 * @method string getHostName() Obtain Server name
 * @method void setHostName(string $HostName) Set Server name
 * @method string getHostIp() Obtain Server IP
 * @method void setHostIp(string $HostIp) Set Server IP
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
     * @var string Server name
     */
    public $HostName;

    /**
     * @var string Server IP
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
     * @param string $ContainerName Container name
     * @param string $ContainerId Container ID
     * @param string $ImageName Image name
     * @param string $ImageId Image ID
     * @param string $HostName Server name
     * @param string $HostIp Server IP
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
    }
}
