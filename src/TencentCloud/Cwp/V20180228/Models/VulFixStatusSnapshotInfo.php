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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Machine snapshot information
 *
 * @method string getQuuid() Obtain cvm id
 * @method void setQuuid(string $Quuid) Set cvm id
 * @method string getHostName() Obtain Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostIp() Obtain Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostIp(string $HostIp) Set Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSnapshotName() Obtain Snapshot name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Snapshot creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Snapshot creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSnapshotId() Obtain Snapshot ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getId() Obtain Unique record ID
 * @method void setId(integer $Id) Set Unique record ID
 * @method integer getStatus() Obtain Snapshot status. 0: initial; 1: created successfully; 2: creation failed.
 * @method void setStatus(integer $Status) Set Snapshot status. 0: initial; 1: created successfully; 2: creation failed.
 * @method string getFailReason() Obtain Snapshot creation failure reason
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailReason(string $FailReason) Set Snapshot creation failure reason
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VulFixStatusSnapshotInfo extends AbstractModel
{
    /**
     * @var string cvm id
     */
    public $Quuid;

    /**
     * @var string Host name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostName;

    /**
     * @var string Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostIp;

    /**
     * @var string Snapshot name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotName;

    /**
     * @var string Snapshot creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var string Snapshot ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotId;

    /**
     * @var integer Unique record ID
     */
    public $Id;

    /**
     * @var integer Snapshot status. 0: initial; 1: created successfully; 2: creation failed.
     */
    public $Status;

    /**
     * @var string Snapshot creation failure reason
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailReason;

    /**
     * @param string $Quuid cvm id
     * @param string $HostName Host name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostIp Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SnapshotName Snapshot name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Snapshot creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SnapshotId Snapshot ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Id Unique record ID
     * @param integer $Status Snapshot status. 0: initial; 1: created successfully; 2: creation failed.
     * @param string $FailReason Snapshot creation failure reason
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
