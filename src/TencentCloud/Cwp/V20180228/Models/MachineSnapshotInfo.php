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
 * @method void setHostName(string $HostName) Set Host name
 * @method string getHostIp() Obtain Host IP address
 * @method void setHostIp(string $HostIp) Set Host IP address
 * @method string getSnapshotName() Obtain Snapshot name
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name
 * @method string getCreateTime() Obtain Snapshot creation time
 * @method void setCreateTime(string $CreateTime) Set Snapshot creation time
 * @method string getDiskId() Obtain Disk ID
 * @method void setDiskId(string $DiskId) Set Disk ID
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method string getSnapshotId() Obtain Snapshot ID
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID
 */
class MachineSnapshotInfo extends AbstractModel
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
    public $CreateTime;

    /**
     * @var string Disk ID
     */
    public $DiskId;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var string Snapshot ID
     */
    public $SnapshotId;

    /**
     * @param string $Quuid cvm id
     * @param string $HostName Host name
     * @param string $HostIp Host IP address
     * @param string $SnapshotName Snapshot name
     * @param string $CreateTime Snapshot creation time
     * @param string $DiskId Disk ID
     * @param string $InstanceId Instance ID
     * @param integer $RegionId Region ID
     * @param string $SnapshotId Snapshot ID
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }
    }
}
