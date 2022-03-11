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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Snapshot details
 *
 * @method Placement getPlacement() Obtain Snapshot location.
 * @method void setPlacement(Placement $Placement) Set Snapshot location.
 * @method boolean getCopyFromRemote() Obtain Whether the snapshot is replicated across regions. Valid values:<br><li>true: yes;<br><li>false: no.
 * @method void setCopyFromRemote(boolean $CopyFromRemote) Set Whether the snapshot is replicated across regions. Valid values:<br><li>true: yes;<br><li>false: no.
 * @method boolean getIsPermanent() Obtain Whether the snapshot is a permanent snapshot. Valid values:<br><li>true: yes<br><li>false: no.
 * @method void setIsPermanent(boolean $IsPermanent) Set Whether the snapshot is a permanent snapshot. Valid values:<br><li>true: yes<br><li>false: no.
 * @method string getSnapshotName() Obtain Snapshot name, i.e., the user-defined snapshot alias. You can call [ModifySnapshotAttribute](https://intl.cloud.tencent.com/document/product/362/15650?from_cn_redirect=1) to modify this field.
 * @method void setSnapshotName(string $SnapshotName) Set Snapshot name, i.e., the user-defined snapshot alias. You can call [ModifySnapshotAttribute](https://intl.cloud.tencent.com/document/product/362/15650?from_cn_redirect=1) to modify this field.
 * @method integer getPercent() Obtain Snapshot creation progress in percentage. This field will always be `100` once the snapshot is created successfully.
 * @method void setPercent(integer $Percent) Set Snapshot creation progress in percentage. This field will always be `100` once the snapshot is created successfully.
 * @method array getImages() Obtain List of images associated with the snapshot.
 * @method void setImages(array $Images) Set List of images associated with the snapshot.
 * @method integer getShareReference() Obtain Number of snapshots currently shared.
 * @method void setShareReference(integer $ShareReference) Set Number of snapshots currently shared.
 * @method string getSnapshotType() Obtain Snapshot type. Valid values: PRIVATE_SNAPSHOT, SHARED_SNAPSHOT
 * @method void setSnapshotType(string $SnapshotType) Set Snapshot type. Valid values: PRIVATE_SNAPSHOT, SHARED_SNAPSHOT
 * @method integer getDiskSize() Obtain Size in GB of the cloud disk for which the snapshot is created.
 * @method void setDiskSize(integer $DiskSize) Set Size in GB of the cloud disk for which the snapshot is created.
 * @method string getDiskId() Obtain ID of the cloud disk for which the snapshot is created.
 * @method void setDiskId(string $DiskId) Set ID of the cloud disk for which the snapshot is created.
 * @method array getCopyingToRegions() Obtain Destination region to which the snapshot is being replicated. Default value: [].
 * @method void setCopyingToRegions(array $CopyingToRegions) Set Destination region to which the snapshot is being replicated. Default value: [].
 * @method string getSnapshotId() Obtain Snapshot ID.
 * @method void setSnapshotId(string $SnapshotId) Set Snapshot ID.
 * @method string getDiskUsage() Obtain Type of the cloud disk for which the snapshot is created. Valid values:<br><li>SYSTEM_DISK: system disk<br><li>DATA_DISK: data disk.
 * @method void setDiskUsage(string $DiskUsage) Set Type of the cloud disk for which the snapshot is created. Valid values:<br><li>SYSTEM_DISK: system disk<br><li>DATA_DISK: data disk.
 * @method boolean getEncrypt() Obtain Whether the snapshot is created from an encrypted disk. Valid values:<br><li>true: yes<br><li>false: no.
 * @method void setEncrypt(boolean $Encrypt) Set Whether the snapshot is created from an encrypted disk. Valid values:<br><li>true: yes<br><li>false: no.
 * @method string getCreateTime() Obtain Snapshot creation time.
 * @method void setCreateTime(string $CreateTime) Set Snapshot creation time.
 * @method integer getImageCount() Obtain Number of images associated with the snapshot.
 * @method void setImageCount(integer $ImageCount) Set Number of images associated with the snapshot.
 * @method string getSnapshotState() Obtain Snapshot status. Valid values:<br><li>NORMAL: normal<br><li>CREATING: creating<br><li>ROLLBACKING: rolling back<br><li>COPYING_FROM_REMOTE: cross-region replicating<br><li>CHECKING_COPIED: verifying the cross-region replicated data<br><li>TORECYCLE: to be repossessed.
 * @method void setSnapshotState(string $SnapshotState) Set Snapshot status. Valid values:<br><li>NORMAL: normal<br><li>CREATING: creating<br><li>ROLLBACKING: rolling back<br><li>COPYING_FROM_REMOTE: cross-region replicating<br><li>CHECKING_COPIED: verifying the cross-region replicated data<br><li>TORECYCLE: to be repossessed.
 * @method string getDeadlineTime() Obtain Snapshot expiration time.
 * @method void setDeadlineTime(string $DeadlineTime) Set Snapshot expiration time.
 * @method string getTimeStartShare() Obtain Time when snapshot sharing starts.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTimeStartShare(string $TimeStartShare) Set Time when snapshot sharing starts.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Snapshot extends AbstractModel
{
    /**
     * @var Placement Snapshot location.
     */
    public $Placement;

    /**
     * @var boolean Whether the snapshot is replicated across regions. Valid values:<br><li>true: yes;<br><li>false: no.
     */
    public $CopyFromRemote;

    /**
     * @var boolean Whether the snapshot is a permanent snapshot. Valid values:<br><li>true: yes<br><li>false: no.
     */
    public $IsPermanent;

    /**
     * @var string Snapshot name, i.e., the user-defined snapshot alias. You can call [ModifySnapshotAttribute](https://intl.cloud.tencent.com/document/product/362/15650?from_cn_redirect=1) to modify this field.
     */
    public $SnapshotName;

    /**
     * @var integer Snapshot creation progress in percentage. This field will always be `100` once the snapshot is created successfully.
     */
    public $Percent;

    /**
     * @var array List of images associated with the snapshot.
     */
    public $Images;

    /**
     * @var integer Number of snapshots currently shared.
     */
    public $ShareReference;

    /**
     * @var string Snapshot type. Valid values: PRIVATE_SNAPSHOT, SHARED_SNAPSHOT
     */
    public $SnapshotType;

    /**
     * @var integer Size in GB of the cloud disk for which the snapshot is created.
     */
    public $DiskSize;

    /**
     * @var string ID of the cloud disk for which the snapshot is created.
     */
    public $DiskId;

    /**
     * @var array Destination region to which the snapshot is being replicated. Default value: [].
     */
    public $CopyingToRegions;

    /**
     * @var string Snapshot ID.
     */
    public $SnapshotId;

    /**
     * @var string Type of the cloud disk for which the snapshot is created. Valid values:<br><li>SYSTEM_DISK: system disk<br><li>DATA_DISK: data disk.
     */
    public $DiskUsage;

    /**
     * @var boolean Whether the snapshot is created from an encrypted disk. Valid values:<br><li>true: yes<br><li>false: no.
     */
    public $Encrypt;

    /**
     * @var string Snapshot creation time.
     */
    public $CreateTime;

    /**
     * @var integer Number of images associated with the snapshot.
     */
    public $ImageCount;

    /**
     * @var string Snapshot status. Valid values:<br><li>NORMAL: normal<br><li>CREATING: creating<br><li>ROLLBACKING: rolling back<br><li>COPYING_FROM_REMOTE: cross-region replicating<br><li>CHECKING_COPIED: verifying the cross-region replicated data<br><li>TORECYCLE: to be repossessed.
     */
    public $SnapshotState;

    /**
     * @var string Snapshot expiration time.
     */
    public $DeadlineTime;

    /**
     * @var string Time when snapshot sharing starts.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TimeStartShare;

    /**
     * @param Placement $Placement Snapshot location.
     * @param boolean $CopyFromRemote Whether the snapshot is replicated across regions. Valid values:<br><li>true: yes;<br><li>false: no.
     * @param boolean $IsPermanent Whether the snapshot is a permanent snapshot. Valid values:<br><li>true: yes<br><li>false: no.
     * @param string $SnapshotName Snapshot name, i.e., the user-defined snapshot alias. You can call [ModifySnapshotAttribute](https://intl.cloud.tencent.com/document/product/362/15650?from_cn_redirect=1) to modify this field.
     * @param integer $Percent Snapshot creation progress in percentage. This field will always be `100` once the snapshot is created successfully.
     * @param array $Images List of images associated with the snapshot.
     * @param integer $ShareReference Number of snapshots currently shared.
     * @param string $SnapshotType Snapshot type. Valid values: PRIVATE_SNAPSHOT, SHARED_SNAPSHOT
     * @param integer $DiskSize Size in GB of the cloud disk for which the snapshot is created.
     * @param string $DiskId ID of the cloud disk for which the snapshot is created.
     * @param array $CopyingToRegions Destination region to which the snapshot is being replicated. Default value: [].
     * @param string $SnapshotId Snapshot ID.
     * @param string $DiskUsage Type of the cloud disk for which the snapshot is created. Valid values:<br><li>SYSTEM_DISK: system disk<br><li>DATA_DISK: data disk.
     * @param boolean $Encrypt Whether the snapshot is created from an encrypted disk. Valid values:<br><li>true: yes<br><li>false: no.
     * @param string $CreateTime Snapshot creation time.
     * @param integer $ImageCount Number of images associated with the snapshot.
     * @param string $SnapshotState Snapshot status. Valid values:<br><li>NORMAL: normal<br><li>CREATING: creating<br><li>ROLLBACKING: rolling back<br><li>COPYING_FROM_REMOTE: cross-region replicating<br><li>CHECKING_COPIED: verifying the cross-region replicated data<br><li>TORECYCLE: to be repossessed.
     * @param string $DeadlineTime Snapshot expiration time.
     * @param string $TimeStartShare Time when snapshot sharing starts.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("CopyFromRemote",$param) and $param["CopyFromRemote"] !== null) {
            $this->CopyFromRemote = $param["CopyFromRemote"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new Image();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("ShareReference",$param) and $param["ShareReference"] !== null) {
            $this->ShareReference = $param["ShareReference"];
        }

        if (array_key_exists("SnapshotType",$param) and $param["SnapshotType"] !== null) {
            $this->SnapshotType = $param["SnapshotType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("CopyingToRegions",$param) and $param["CopyingToRegions"] !== null) {
            $this->CopyingToRegions = $param["CopyingToRegions"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ImageCount",$param) and $param["ImageCount"] !== null) {
            $this->ImageCount = $param["ImageCount"];
        }

        if (array_key_exists("SnapshotState",$param) and $param["SnapshotState"] !== null) {
            $this->SnapshotState = $param["SnapshotState"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("TimeStartShare",$param) and $param["TimeStartShare"] !== null) {
            $this->TimeStartShare = $param["TimeStartShare"];
        }
    }
}
