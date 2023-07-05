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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Snapshot information
 *
 * @method string getCreationTime() Obtain Snapshot creation time
 * @method void setCreationTime(string $CreationTime) Set Snapshot creation time
 * @method string getSnapshotName() Obtain Snapshot name
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name
 * @method string getSnapshotId() Obtain Snapshot ID
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID
 * @method string getStatus() Obtain Snapshot status
 * @method void setStatus(string $Status) Set Snapshot status
 * @method string getRegionName() Obtain Region name
 * @method void setRegionName(string $RegionName) Set Region name
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method integer getSize() Obtain Snapshot size
 * @method void setSize(integer $Size) Set Snapshot size
 * @method integer getAliveDay() Obtain Retention period in days
 * @method void setAliveDay(integer $AliveDay) Set Retention period in days
 * @method integer getPercent() Obtain Snapshot progress
 * @method void setPercent(integer $Percent) Set Snapshot progress
 * @method integer getAppId() Obtain Account ID
 * @method void setAppId(integer $AppId) Set Account ID
 * @method string getDeleteTime() Obtain Snapshot deletion time
 * @method void setDeleteTime(string $DeleteTime) Set Snapshot deletion time
 * @method string getFsName() Obtain File system name
 * @method void setFsName(string $FsName) Set File system name
 * @method array getTags() Obtain Snapshot tag
 * @method void setTags(array $Tags) Set Snapshot tag
 * @method string getSnapshotType() Obtain Snapshot type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSnapshotType(string $SnapshotType) Set Snapshot type
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SnapshotInfo extends AbstractModel
{
    /**
     * @var string Snapshot creation time
     */
    public $CreationTime;

    /**
     * @var string Snapshot name
     */
    public $SnapshotName;

    /**
     * @var string Snapshot ID
     */
    public $SnapshotId;

    /**
     * @var string Snapshot status
     */
    public $Status;

    /**
     * @var string Region name
     */
    public $RegionName;

    /**
     * @var string File system ID
     */
    public $FileSystemId;

    /**
     * @var integer Snapshot size
     */
    public $Size;

    /**
     * @var integer Retention period in days
     */
    public $AliveDay;

    /**
     * @var integer Snapshot progress
     */
    public $Percent;

    /**
     * @var integer Account ID
     */
    public $AppId;

    /**
     * @var string Snapshot deletion time
     */
    public $DeleteTime;

    /**
     * @var string File system name
     */
    public $FsName;

    /**
     * @var array Snapshot tag
     */
    public $Tags;

    /**
     * @var string Snapshot type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SnapshotType;

    /**
     * @param string $CreationTime Snapshot creation time
     * @param string $SnapshotName Snapshot name
     * @param string $SnapshotId Snapshot ID
     * @param string $Status Snapshot status
     * @param string $RegionName Region name
     * @param string $FileSystemId File system ID
     * @param integer $Size Snapshot size
     * @param integer $AliveDay Retention period in days
     * @param integer $Percent Snapshot progress
     * @param integer $AppId Account ID
     * @param string $DeleteTime Snapshot deletion time
     * @param string $FsName File system name
     * @param array $Tags Snapshot tag
     * @param string $SnapshotType Snapshot type
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
    }
}
