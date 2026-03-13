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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Snapshot information
 *
 * @method string getCreationTime() Obtain <P>Snapshot creation time</p>.
 * @method void setCreationTime(string $CreationTime) Set <P>Snapshot creation time</p>.
 * @method string getSnapshotName() Obtain <P>Snapshot name</p>.
 * @method void setSnapshotName(string $SnapshotName) Set <P>Snapshot name</p>.
 * @method string getSnapshotId() Obtain <p>Snapshot ID.</p>.
 * @method void setSnapshotId(string $SnapshotId) Set <p>Snapshot ID.</p>.
 * @method string getStatus() Obtain <P>Snapshot status: creating - creating; available - running; deleting - deleting; rollbacking-new - creating new file system; create-failed - creation failed.</p>.
 * @method void setStatus(string $Status) Set <P>Snapshot status: creating - creating; available - running; deleting - deleting; rollbacking-new - creating new file system; create-failed - creation failed.</p>.
 * @method string getRegionName() Obtain <P>Region name</p>.
 * @method void setRegionName(string $RegionName) Set <P>Region name</p>.
 * @method string getFileSystemId() Obtain <p>File system ID</p>.
 * @method void setFileSystemId(string $FileSystemId) Set <p>File system ID</p>.
 * @method integer getSize() Obtain <p>Snapshot size</p><p>unit: MiB</p>.
 * @method void setSize(integer $Size) Set <p>Snapshot size</p><p>unit: MiB</p>.
 * @method integer getAliveDay() Obtain <P>Retention duration days</p>.
 * @method void setAliveDay(integer $AliveDay) Set <P>Retention duration days</p>.
 * @method integer getPercent() Obtain <P>Snapshot progress percentage. 1 means 1%. value range: 1-100.</p>.
 * @method void setPercent(integer $Percent) Set <P>Snapshot progress percentage. 1 means 1%. value range: 1-100.</p>.
 * @method integer getAppId() Obtain <p>Account ID.</p>.
 * @method void setAppId(integer $AppId) Set <p>Account ID.</p>.
 * @method string getDeleteTime() Obtain <P>Snapshot deletion time</p>.
 * @method void setDeleteTime(string $DeleteTime) Set <P>Snapshot deletion time</p>.
 * @method string getFsName() Obtain <P>File system name</p>.
 * @method void setFsName(string $FsName) Set <P>File system name</p>.
 * @method array getTags() Obtain <P>Snapshot tag.</p>.
 * @method void setTags(array $Tags) Set <P>Snapshot tag.</p>.
 * @method string getSnapshotType() Obtain <p>Snapshot type. general indicates a snapshot of the general series. turbo indicates a snapshot of the turbo series.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotType(string $SnapshotType) Set <p>Snapshot type. general indicates a snapshot of the general series. turbo indicates a snapshot of the turbo series.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSnapshotTime() Obtain <P>Snapshot time reflects the data of the corresponding file system at a certain moment.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotTime(string $SnapshotTime) Set <P>Snapshot time reflects the data of the corresponding file system at a certain moment.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SnapshotInfo extends AbstractModel
{
    /**
     * @var string <P>Snapshot creation time</p>.
     */
    public $CreationTime;

    /**
     * @var string <P>Snapshot name</p>.
     */
    public $SnapshotName;

    /**
     * @var string <p>Snapshot ID.</p>.
     */
    public $SnapshotId;

    /**
     * @var string <P>Snapshot status: creating - creating; available - running; deleting - deleting; rollbacking-new - creating new file system; create-failed - creation failed.</p>.
     */
    public $Status;

    /**
     * @var string <P>Region name</p>.
     */
    public $RegionName;

    /**
     * @var string <p>File system ID</p>.
     */
    public $FileSystemId;

    /**
     * @var integer <p>Snapshot size</p><p>unit: MiB</p>.
     */
    public $Size;

    /**
     * @var integer <P>Retention duration days</p>.
     */
    public $AliveDay;

    /**
     * @var integer <P>Snapshot progress percentage. 1 means 1%. value range: 1-100.</p>.
     */
    public $Percent;

    /**
     * @var integer <p>Account ID.</p>.
     */
    public $AppId;

    /**
     * @var string <P>Snapshot deletion time</p>.
     */
    public $DeleteTime;

    /**
     * @var string <P>File system name</p>.
     */
    public $FsName;

    /**
     * @var array <P>Snapshot tag.</p>.
     */
    public $Tags;

    /**
     * @var string <p>Snapshot type. general indicates a snapshot of the general series. turbo indicates a snapshot of the turbo series.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotType;

    /**
     * @var string <P>Snapshot time reflects the data of the corresponding file system at a certain moment.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotTime;

    /**
     * @param string $CreationTime <P>Snapshot creation time</p>.
     * @param string $SnapshotName <P>Snapshot name</p>.
     * @param string $SnapshotId <p>Snapshot ID.</p>.
     * @param string $Status <P>Snapshot status: creating - creating; available - running; deleting - deleting; rollbacking-new - creating new file system; create-failed - creation failed.</p>.
     * @param string $RegionName <P>Region name</p>.
     * @param string $FileSystemId <p>File system ID</p>.
     * @param integer $Size <p>Snapshot size</p><p>unit: MiB</p>.
     * @param integer $AliveDay <P>Retention duration days</p>.
     * @param integer $Percent <P>Snapshot progress percentage. 1 means 1%. value range: 1-100.</p>.
     * @param integer $AppId <p>Account ID.</p>.
     * @param string $DeleteTime <P>Snapshot deletion time</p>.
     * @param string $FsName <P>File system name</p>.
     * @param array $Tags <P>Snapshot tag.</p>.
     * @param string $SnapshotType <p>Snapshot type. general indicates a snapshot of the general series. turbo indicates a snapshot of the turbo series.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SnapshotTime <P>Snapshot time reflects the data of the corresponding file system at a certain moment.</p>.
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
        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("AliveDay",$param) and $param["AliveDay"] !== null) {
            $this->AliveDay = $param["AliveDay"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SnapshotType",$param) and $param["SnapshotType"] !== null) {
            $this->SnapshotType = $param["SnapshotType"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }
    }
}
