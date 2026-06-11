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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Affected host list by patch
 *
 * @method integer getHostVersion() Obtain Version information: 0-Basic Version 1-Pro Edition 2-Flagship Edition 3-Lite Edition
 * @method void setHostVersion(integer $HostVersion) Set Version information: 0-Basic Version 1-Pro Edition 2-Flagship Edition 3-Lite Edition
 * @method string getInstanceState() Obtain Instance status: "PENDING"-creating "LAUNCH_FAILED"-creation failed "RUNNING"-running "STOPPED"-shutdown "STARTING"-starting "STOPPING"-indicates shutdown in progress "REBOOTING"-restarting "SHUTDOWN"-indicate shutdown and pending termination "TERMINATING"-indicates terminating in progress
 * @method void setInstanceState(string $InstanceState) Set Instance status: "PENDING"-creating "LAUNCH_FAILED"-creation failed "RUNNING"-running "STOPPED"-shutdown "STARTING"-starting "STOPPING"-indicates shutdown in progress "REBOOTING"-restarting "SHUTDOWN"-indicate shutdown and pending termination "TERMINATING"-indicates terminating in progress
 * @method string getFirstScanTime() Obtain First scan time
 * @method void setFirstScanTime(string $FirstScanTime) Set First scan time
 * @method string getLatestScanTime() Obtain Last scan time
 * @method void setLatestScanTime(string $LatestScanTime) Set Last scan time
 * @method integer getFixStatus() Obtain Remediation status: 0-not remediated; 1-in remediation; 2-FIX_FAILURE; 3-repair successful; 4-timeout
 * @method void setFixStatus(integer $FixStatus) Set Remediation status: 0-not remediated; 1-in remediation; 2-FIX_FAILURE; 3-repair successful; 4-timeout
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host basic information
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host basic information
 * @method string getUuid() Obtain Host Security Uuid
 * @method void setUuid(string $Uuid) Set Host Security Uuid
 * @method string getQuuid() Obtain Unique Uuid of a CVM or BM machine
 * @method void setQuuid(string $Quuid) Set Unique Uuid of a CVM or BM machine
 * @method integer getId() Obtain Event ID
 * @method void setId(integer $Id) Set Event ID
 * @method integer getStatus() Obtain Status: 0: pending 1: ignored 3: fixed 5: detecting 6: in remediation 7: rolling back 8: FIX_FAILURE
 * @method void setStatus(integer $Status) Set Status: 0: pending 1: ignored 3: fixed 5: detecting 6: in remediation 7: rolling back 8: FIX_FAILURE
 * @method string getLatestFixTime() Obtain Fixing time
 * @method void setLatestFixTime(string $LatestFixTime) Set Fixing time
 * @method integer getKbId() Obtain KB id
 * @method void setKbId(integer $KbId) Set KB id
 * @method integer getRestartRequired() Obtain Whether restart is required 0: not required 1: required
 * @method void setRestartRequired(integer $RestartRequired) Set Whether restart is required 0: not required 1: required
 * @method integer getRegionId() Obtain Availability zone ID.	
 * @method void setRegionId(integer $RegionId) Set Availability zone ID.	
 * @method string getMachineType() Obtain Machine type info
 * @method void setMachineType(string $MachineType) Set Machine type info
 * @method integer getHasSnapshot() Obtain Whether to create a snapshot for the fix task: 0: not created; other: created.
 * @method void setHasSnapshot(integer $HasSnapshot) Set Whether to create a snapshot for the fix task: 0: not created; other: created.
 */
class PatchEffectHostList extends AbstractModel
{
    /**
     * @var integer Version information: 0-Basic Version 1-Pro Edition 2-Flagship Edition 3-Lite Edition
     */
    public $HostVersion;

    /**
     * @var string Instance status: "PENDING"-creating "LAUNCH_FAILED"-creation failed "RUNNING"-running "STOPPED"-shutdown "STARTING"-starting "STOPPING"-indicates shutdown in progress "REBOOTING"-restarting "SHUTDOWN"-indicate shutdown and pending termination "TERMINATING"-indicates terminating in progress
     */
    public $InstanceState;

    /**
     * @var string First scan time
     */
    public $FirstScanTime;

    /**
     * @var string Last scan time
     */
    public $LatestScanTime;

    /**
     * @var integer Remediation status: 0-not remediated; 1-in remediation; 2-FIX_FAILURE; 3-repair successful; 4-timeout
     */
    public $FixStatus;

    /**
     * @var MachineExtraInfo Host basic information
     */
    public $MachineExtraInfo;

    /**
     * @var string Host Security Uuid
     */
    public $Uuid;

    /**
     * @var string Unique Uuid of a CVM or BM machine
     */
    public $Quuid;

    /**
     * @var integer Event ID
     */
    public $Id;

    /**
     * @var integer Status: 0: pending 1: ignored 3: fixed 5: detecting 6: in remediation 7: rolling back 8: FIX_FAILURE
     */
    public $Status;

    /**
     * @var string Fixing time
     */
    public $LatestFixTime;

    /**
     * @var integer KB id
     */
    public $KbId;

    /**
     * @var integer Whether restart is required 0: not required 1: required
     */
    public $RestartRequired;

    /**
     * @var integer Availability zone ID.	
     */
    public $RegionId;

    /**
     * @var string Machine type info
     */
    public $MachineType;

    /**
     * @var integer Whether to create a snapshot for the fix task: 0: not created; other: created.
     */
    public $HasSnapshot;

    /**
     * @param integer $HostVersion Version information: 0-Basic Version 1-Pro Edition 2-Flagship Edition 3-Lite Edition
     * @param string $InstanceState Instance status: "PENDING"-creating "LAUNCH_FAILED"-creation failed "RUNNING"-running "STOPPED"-shutdown "STARTING"-starting "STOPPING"-indicates shutdown in progress "REBOOTING"-restarting "SHUTDOWN"-indicate shutdown and pending termination "TERMINATING"-indicates terminating in progress
     * @param string $FirstScanTime First scan time
     * @param string $LatestScanTime Last scan time
     * @param integer $FixStatus Remediation status: 0-not remediated; 1-in remediation; 2-FIX_FAILURE; 3-repair successful; 4-timeout
     * @param MachineExtraInfo $MachineExtraInfo Host basic information
     * @param string $Uuid Host Security Uuid
     * @param string $Quuid Unique Uuid of a CVM or BM machine
     * @param integer $Id Event ID
     * @param integer $Status Status: 0: pending 1: ignored 3: fixed 5: detecting 6: in remediation 7: rolling back 8: FIX_FAILURE
     * @param string $LatestFixTime Fixing time
     * @param integer $KbId KB id
     * @param integer $RestartRequired Whether restart is required 0: not required 1: required
     * @param integer $RegionId Availability zone ID.	
     * @param string $MachineType Machine type info
     * @param integer $HasSnapshot Whether to create a snapshot for the fix task: 0: not created; other: created.
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
        if (array_key_exists("HostVersion",$param) and $param["HostVersion"] !== null) {
            $this->HostVersion = $param["HostVersion"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("FirstScanTime",$param) and $param["FirstScanTime"] !== null) {
            $this->FirstScanTime = $param["FirstScanTime"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("FixStatus",$param) and $param["FixStatus"] !== null) {
            $this->FixStatus = $param["FixStatus"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LatestFixTime",$param) and $param["LatestFixTime"] !== null) {
            $this->LatestFixTime = $param["LatestFixTime"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("RestartRequired",$param) and $param["RestartRequired"] !== null) {
            $this->RestartRequired = $param["RestartRequired"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("HasSnapshot",$param) and $param["HasSnapshot"] !== null) {
            $this->HasSnapshot = $param["HasSnapshot"];
        }
    }
}
