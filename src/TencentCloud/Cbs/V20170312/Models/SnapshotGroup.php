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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * It describes the snapshot group details.
 *
 * @method string getSnapshotGroupId() Obtain Specifies the snapshot group ID.
 * @method void setSnapshotGroupId(string $SnapshotGroupId) Set Specifies the snapshot group ID.
 * @method string getSnapshotGroupType() Obtain Snapshot group type. NORMAL: common snapshot group, non-consistent snapshot.
 * @method void setSnapshotGroupType(string $SnapshotGroupType) Set Snapshot group type. NORMAL: common snapshot group, non-consistent snapshot.
 * @method boolean getContainRootSnapshot() Obtain Specifies whether the snapshot group contains a system disk snapshot.
 * @method void setContainRootSnapshot(boolean $ContainRootSnapshot) Set Specifies whether the snapshot group contains a system disk snapshot.
 * @method array getSnapshotIdSet() Obtain Specifies the snapshot ID list included in the snapshot group.
 * @method void setSnapshotIdSet(array $SnapshotIdSet) Set Specifies the snapshot ID list included in the snapshot group.
 * @method string getSnapshotGroupState() Obtain <ul>
<Li>NORMAL: specifies the scaling group is in normal state.</li>.
<Li>CREATING: creating.</li>.
<Li>ROLLBACKING: indicates the rollback is in progress.</li>.
</ul>
 * @method void setSnapshotGroupState(string $SnapshotGroupState) Set <ul>
<Li>NORMAL: specifies the scaling group is in normal state.</li>.
<Li>CREATING: creating.</li>.
<Li>ROLLBACKING: indicates the rollback is in progress.</li>.
</ul>
 * @method integer getPercent() Obtain Specifies the snapshot group creation progress.
 * @method void setPercent(integer $Percent) Set Specifies the snapshot group creation progress.
 * @method string getCreateTime() Obtain Specifies the snapshot group creation time.
 * @method void setCreateTime(string $CreateTime) Set Specifies the snapshot group creation time.
 * @method string getModifyTime() Obtain Latest modification time of the snapshot group.
 * @method void setModifyTime(string $ModifyTime) Set Latest modification time of the snapshot group.
 * @method array getImages() Obtain Specifies the image list associated with the snapshot group.
 * @method void setImages(array $Images) Set Specifies the image list associated with the snapshot group.
 * @method string getSnapshotGroupName() Obtain Specifies the snapshot group name.
 * @method void setSnapshotGroupName(string $SnapshotGroupName) Set Specifies the snapshot group name.
 * @method integer getImageCount() Obtain Number of images associated with the snapshot group.
 * @method void setImageCount(integer $ImageCount) Set Number of images associated with the snapshot group.
 * @method boolean getIsPermanent() Obtain Specifies whether the snapshot group has permanent retention.
 * @method void setIsPermanent(boolean $IsPermanent) Set Specifies whether the snapshot group has permanent retention.
 * @method string getDeadlineTime() Obtain Specifies the snapshot group expiration time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeadlineTime(string $DeadlineTime) Set Specifies the snapshot group expiration time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAutoSnapshotPolicyId() Obtain Source automatic snapshot policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set Source automatic snapshot policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SnapshotGroup extends AbstractModel
{
    /**
     * @var string Specifies the snapshot group ID.
     */
    public $SnapshotGroupId;

    /**
     * @var string Snapshot group type. NORMAL: common snapshot group, non-consistent snapshot.
     */
    public $SnapshotGroupType;

    /**
     * @var boolean Specifies whether the snapshot group contains a system disk snapshot.
     */
    public $ContainRootSnapshot;

    /**
     * @var array Specifies the snapshot ID list included in the snapshot group.
     */
    public $SnapshotIdSet;

    /**
     * @var string <ul>
<Li>NORMAL: specifies the scaling group is in normal state.</li>.
<Li>CREATING: creating.</li>.
<Li>ROLLBACKING: indicates the rollback is in progress.</li>.
</ul>
     */
    public $SnapshotGroupState;

    /**
     * @var integer Specifies the snapshot group creation progress.
     */
    public $Percent;

    /**
     * @var string Specifies the snapshot group creation time.
     */
    public $CreateTime;

    /**
     * @var string Latest modification time of the snapshot group.
     */
    public $ModifyTime;

    /**
     * @var array Specifies the image list associated with the snapshot group.
     */
    public $Images;

    /**
     * @var string Specifies the snapshot group name.
     */
    public $SnapshotGroupName;

    /**
     * @var integer Number of images associated with the snapshot group.
     */
    public $ImageCount;

    /**
     * @var boolean Specifies whether the snapshot group has permanent retention.
     */
    public $IsPermanent;

    /**
     * @var string Specifies the snapshot group expiration time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeadlineTime;

    /**
     * @var string Source automatic snapshot policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoSnapshotPolicyId;

    /**
     * @param string $SnapshotGroupId Specifies the snapshot group ID.
     * @param string $SnapshotGroupType Snapshot group type. NORMAL: common snapshot group, non-consistent snapshot.
     * @param boolean $ContainRootSnapshot Specifies whether the snapshot group contains a system disk snapshot.
     * @param array $SnapshotIdSet Specifies the snapshot ID list included in the snapshot group.
     * @param string $SnapshotGroupState <ul>
<Li>NORMAL: specifies the scaling group is in normal state.</li>.
<Li>CREATING: creating.</li>.
<Li>ROLLBACKING: indicates the rollback is in progress.</li>.
</ul>
     * @param integer $Percent Specifies the snapshot group creation progress.
     * @param string $CreateTime Specifies the snapshot group creation time.
     * @param string $ModifyTime Latest modification time of the snapshot group.
     * @param array $Images Specifies the image list associated with the snapshot group.
     * @param string $SnapshotGroupName Specifies the snapshot group name.
     * @param integer $ImageCount Number of images associated with the snapshot group.
     * @param boolean $IsPermanent Specifies whether the snapshot group has permanent retention.
     * @param string $DeadlineTime Specifies the snapshot group expiration time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AutoSnapshotPolicyId Source automatic snapshot policy ID.
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
        if (array_key_exists("SnapshotGroupId",$param) and $param["SnapshotGroupId"] !== null) {
            $this->SnapshotGroupId = $param["SnapshotGroupId"];
        }

        if (array_key_exists("SnapshotGroupType",$param) and $param["SnapshotGroupType"] !== null) {
            $this->SnapshotGroupType = $param["SnapshotGroupType"];
        }

        if (array_key_exists("ContainRootSnapshot",$param) and $param["ContainRootSnapshot"] !== null) {
            $this->ContainRootSnapshot = $param["ContainRootSnapshot"];
        }

        if (array_key_exists("SnapshotIdSet",$param) and $param["SnapshotIdSet"] !== null) {
            $this->SnapshotIdSet = $param["SnapshotIdSet"];
        }

        if (array_key_exists("SnapshotGroupState",$param) and $param["SnapshotGroupState"] !== null) {
            $this->SnapshotGroupState = $param["SnapshotGroupState"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new Image();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("SnapshotGroupName",$param) and $param["SnapshotGroupName"] !== null) {
            $this->SnapshotGroupName = $param["SnapshotGroupName"];
        }

        if (array_key_exists("ImageCount",$param) and $param["ImageCount"] !== null) {
            $this->ImageCount = $param["ImageCount"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }
    }
}
