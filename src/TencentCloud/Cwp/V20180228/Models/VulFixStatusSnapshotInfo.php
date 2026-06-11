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
 * Machine snapshot information
 *
 * @method string getQuuid() Obtain cvm id
 * @method void setQuuid(string $Quuid) Set cvm id
 * @method string getHostName() Obtain Host name
 * @method void setHostName(string $HostName) Set Host name
 * @method string getHostIp() Obtain Host IP address
 * @method void setHostIp(string $HostIp) Set Host IP address
 * @method string getSnapshotName() Obtain Snapshot name
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name
 * @method string getModifyTime() Obtain Snapshot creation time
 * @method void setModifyTime(string $ModifyTime) Set Snapshot creation time
 * @method string getSnapshotId() Obtain Snapshot ID
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID
 * @method integer getId() Obtain Unique record ID
 * @method void setId(integer $Id) Set Unique record ID
 * @method integer getStatus() Obtain Snapshot status. 0: initial; 1: created successfully; 2: creation failed; 10: unsupported; 11: no need to create.
 * @method void setStatus(integer $Status) Set Snapshot status. 0: initial; 1: created successfully; 2: creation failed; 10: unsupported; 11: no need to create.
 * @method string getFailReason() Obtain Snapshot creation failure reason
 * @method void setFailReason(string $FailReason) Set Snapshot creation failure reason
 * @method string getMachineType() Obtain Host type
 * @method void setMachineType(string $MachineType) Set Host type
 */
class VulFixStatusSnapshotInfo extends AbstractModel
{
    /**
     * @var string cvm id
     */
    public $Quuid;

    /**
     * @var string Host name
     */
    public $HostName;

    /**
     * @var string Host IP address
     */
    public $HostIp;

    /**
     * @var string Snapshot name
     */
    public $SnapshotName;

    /**
     * @var string Snapshot creation time
     */
    public $ModifyTime;

    /**
     * @var string Snapshot ID
     */
    public $SnapshotId;

    /**
     * @var integer Unique record ID
     */
    public $Id;

    /**
     * @var integer Snapshot status. 0: initial; 1: created successfully; 2: creation failed; 10: unsupported; 11: no need to create.
     */
    public $Status;

    /**
     * @var string Snapshot creation failure reason
     */
    public $FailReason;

    /**
     * @var string Host type
     */
    public $MachineType;

    /**
     * @param string $Quuid cvm id
     * @param string $HostName Host name
     * @param string $HostIp Host IP address
     * @param string $SnapshotName Snapshot name
     * @param string $ModifyTime Snapshot creation time
     * @param string $SnapshotId Snapshot ID
     * @param integer $Id Unique record ID
     * @param integer $Status Snapshot status. 0: initial; 1: created successfully; 2: creation failed; 10: unsupported; 11: no need to create.
     * @param string $FailReason Snapshot creation failure reason
     * @param string $MachineType Host type
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }
    }
}
