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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getSnapshotId() 获取Snapshot ID.
 * @method void setSnapshotId(string $SnapshotId) 设置Snapshot ID.
 * @method Placement getPlacement() 获取Location of the snapshot.
 * @method void setPlacement(Placement $Placement) 设置Location of the snapshot.
 * @method string getDiskUsage() 获取The type of the cloud disk used to create the snapshot. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
 * @method void setDiskUsage(string $DiskUsage) 设置The type of the cloud disk used to create the snapshot. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
 * @method string getDiskId() 获取ID of the cloud disk used to create this snapshot.
 * @method void setDiskId(string $DiskId) 设置ID of the cloud disk used to create this snapshot.
 * @method integer getDiskSize() 获取Size of the cloud disk used to create this snapshot (in GB).
 * @method void setDiskSize(integer $DiskSize) 设置Size of the cloud disk used to create this snapshot (in GB).
 * @method string getSnapshotState() 获取Status of the snapshot. Value range: <br><li>NORMAL: Normal <br><li>CREATING: Creating <br><li>ROLLBACKING: Rolling backing <br><li>COPYING_FROM_REMOTE: Copying snapshot across regions.
 * @method void setSnapshotState(string $SnapshotState) 设置Status of the snapshot. Value range: <br><li>NORMAL: Normal <br><li>CREATING: Creating <br><li>ROLLBACKING: Rolling backing <br><li>COPYING_FROM_REMOTE: Copying snapshot across regions.
 * @method string getSnapshotName() 获取Snapshot name, the user-defined snapshot alias. Call [ModifySnapshotAttribute](/document/product/362/15650) to modify this field.
 * @method void setSnapshotName(string $SnapshotName) 设置Snapshot name, the user-defined snapshot alias. Call [ModifySnapshotAttribute](/document/product/362/15650) to modify this field.
 * @method integer getPercent() 获取The progress percentage for snapshot creation. This field is always 100 after the snapshot is created successfully.
 * @method void setPercent(integer $Percent) 设置The progress percentage for snapshot creation. This field is always 100 after the snapshot is created successfully.
 * @method string getCreateTime() 获取Creation time of the snapshot.
 * @method void setCreateTime(string $CreateTime) 设置Creation time of the snapshot.
 * @method string getDeadlineTime() 获取The expiration time of the snapshot. If the snapshot is permanently retained, this field is blank.
 * @method void setDeadlineTime(string $DeadlineTime) 设置The expiration time of the snapshot. If the snapshot is permanently retained, this field is blank.
 * @method boolean getEncrypt() 获取Whether the snapshot is created from an encrypted disk. Value range: <br><li>true: Yes <br><li>false: No.
 * @method void setEncrypt(boolean $Encrypt) 设置Whether the snapshot is created from an encrypted disk. Value range: <br><li>true: Yes <br><li>false: No.
 * @method boolean getIsPermanent() 获取Whether it is a permanent snapshot. Value range: <br><li>true: Permanent snapshot <br><li>false: Non-permanent snapshot.
 * @method void setIsPermanent(boolean $IsPermanent) 设置Whether it is a permanent snapshot. Value range: <br><li>true: Permanent snapshot <br><li>false: Non-permanent snapshot.
 * @method array getCopyingToRegions() 获取The destination region to which the snapshot is being replicated. Default value is [ ].
 * @method void setCopyingToRegions(array $CopyingToRegions) 设置The destination region to which the snapshot is being replicated. Default value is [ ].
 * @method boolean getCopyFromRemote() 获取Whether the snapshot is replicated across regions. Value range: <br><li>true: Indicates that the snapshot is replicated across regions. <br><li>false: Indicates that the snapshot belongs to the local region.
 * @method void setCopyFromRemote(boolean $CopyFromRemote) 设置Whether the snapshot is replicated across regions. Value range: <br><li>true: Indicates that the snapshot is replicated across regions. <br><li>false: Indicates that the snapshot belongs to the local region.
 * @method array getImages() 获取List of images associated with snapshot.
 * @method void setImages(array $Images) 设置List of images associated with snapshot.
 * @method integer getImageCount() 获取Number of images associated with snapshot.
 * @method void setImageCount(integer $ImageCount) 设置Number of images associated with snapshot.
 * @method string getSnapshotType() 获取Snapshot type. This value can currently be either PRIVATE_SNAPSHOT or SHARED_SNAPSHOT.
 * @method void setSnapshotType(string $SnapshotType) 设置Snapshot type. This value can currently be either PRIVATE_SNAPSHOT or SHARED_SNAPSHOT.
 * @method integer getShareReference() 获取Number of snapshots currently shared
 * @method void setShareReference(integer $ShareReference) 设置Number of snapshots currently shared
 */

/**
 *The details of a snapshot
 */
class Snapshot extends AbstractModel
{
    /**
     * @var string Snapshot ID.
     */
    public $SnapshotId;

    /**
     * @var Placement Location of the snapshot.
     */
    public $Placement;

    /**
     * @var string The type of the cloud disk used to create the snapshot. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
     */
    public $DiskUsage;

    /**
     * @var string ID of the cloud disk used to create this snapshot.
     */
    public $DiskId;

    /**
     * @var integer Size of the cloud disk used to create this snapshot (in GB).
     */
    public $DiskSize;

    /**
     * @var string Status of the snapshot. Value range: <br><li>NORMAL: Normal <br><li>CREATING: Creating <br><li>ROLLBACKING: Rolling backing <br><li>COPYING_FROM_REMOTE: Copying snapshot across regions.
     */
    public $SnapshotState;

    /**
     * @var string Snapshot name, the user-defined snapshot alias. Call [ModifySnapshotAttribute](/document/product/362/15650) to modify this field.
     */
    public $SnapshotName;

    /**
     * @var integer The progress percentage for snapshot creation. This field is always 100 after the snapshot is created successfully.
     */
    public $Percent;

    /**
     * @var string Creation time of the snapshot.
     */
    public $CreateTime;

    /**
     * @var string The expiration time of the snapshot. If the snapshot is permanently retained, this field is blank.
     */
    public $DeadlineTime;

    /**
     * @var boolean Whether the snapshot is created from an encrypted disk. Value range: <br><li>true: Yes <br><li>false: No.
     */
    public $Encrypt;

    /**
     * @var boolean Whether it is a permanent snapshot. Value range: <br><li>true: Permanent snapshot <br><li>false: Non-permanent snapshot.
     */
    public $IsPermanent;

    /**
     * @var array The destination region to which the snapshot is being replicated. Default value is [ ].
     */
    public $CopyingToRegions;

    /**
     * @var boolean Whether the snapshot is replicated across regions. Value range: <br><li>true: Indicates that the snapshot is replicated across regions. <br><li>false: Indicates that the snapshot belongs to the local region.
     */
    public $CopyFromRemote;

    /**
     * @var array List of images associated with snapshot.
     */
    public $Images;

    /**
     * @var integer Number of images associated with snapshot.
     */
    public $ImageCount;

    /**
     * @var string Snapshot type. This value can currently be either PRIVATE_SNAPSHOT or SHARED_SNAPSHOT.
     */
    public $SnapshotType;

    /**
     * @var integer Number of snapshots currently shared
     */
    public $ShareReference;
    /**
     * @param string $SnapshotId Snapshot ID.
     * @param Placement $Placement Location of the snapshot.
     * @param string $DiskUsage The type of the cloud disk used to create the snapshot. Value range: <br><li>SYSTEM_DISK: System disk <br><li>DATA_DISK: Data disk.
     * @param string $DiskId ID of the cloud disk used to create this snapshot.
     * @param integer $DiskSize Size of the cloud disk used to create this snapshot (in GB).
     * @param string $SnapshotState Status of the snapshot. Value range: <br><li>NORMAL: Normal <br><li>CREATING: Creating <br><li>ROLLBACKING: Rolling backing <br><li>COPYING_FROM_REMOTE: Copying snapshot across regions.
     * @param string $SnapshotName Snapshot name, the user-defined snapshot alias. Call [ModifySnapshotAttribute](/document/product/362/15650) to modify this field.
     * @param integer $Percent The progress percentage for snapshot creation. This field is always 100 after the snapshot is created successfully.
     * @param string $CreateTime Creation time of the snapshot.
     * @param string $DeadlineTime The expiration time of the snapshot. If the snapshot is permanently retained, this field is blank.
     * @param boolean $Encrypt Whether the snapshot is created from an encrypted disk. Value range: <br><li>true: Yes <br><li>false: No.
     * @param boolean $IsPermanent Whether it is a permanent snapshot. Value range: <br><li>true: Permanent snapshot <br><li>false: Non-permanent snapshot.
     * @param array $CopyingToRegions The destination region to which the snapshot is being replicated. Default value is [ ].
     * @param boolean $CopyFromRemote Whether the snapshot is replicated across regions. Value range: <br><li>true: Indicates that the snapshot is replicated across regions. <br><li>false: Indicates that the snapshot belongs to the local region.
     * @param array $Images List of images associated with snapshot.
     * @param integer $ImageCount Number of images associated with snapshot.
     * @param string $SnapshotType Snapshot type. This value can currently be either PRIVATE_SNAPSHOT or SHARED_SNAPSHOT.
     * @param integer $ShareReference Number of snapshots currently shared
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("SnapshotState",$param) and $param["SnapshotState"] !== null) {
            $this->SnapshotState = $param["SnapshotState"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("CopyingToRegions",$param) and $param["CopyingToRegions"] !== null) {
            $this->CopyingToRegions = $param["CopyingToRegions"];
        }

        if (array_key_exists("CopyFromRemote",$param) and $param["CopyFromRemote"] !== null) {
            $this->CopyFromRemote = $param["CopyFromRemote"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new Image();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("ImageCount",$param) and $param["ImageCount"] !== null) {
            $this->ImageCount = $param["ImageCount"];
        }

        if (array_key_exists("SnapshotType",$param) and $param["SnapshotType"] !== null) {
            $this->SnapshotType = $param["SnapshotType"];
        }

        if (array_key_exists("ShareReference",$param) and $param["ShareReference"] !== null) {
            $this->ShareReference = $param["ShareReference"];
        }
    }
}
