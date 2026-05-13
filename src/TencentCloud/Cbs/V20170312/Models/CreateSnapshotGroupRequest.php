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
 * CreateSnapshotGroup request structure.
 *
 * @method array getDiskIds() Obtain Specifies the cloud disk ID list for creating snapshot groups. disks mounted on the same instance must be selected.
 * @method void setDiskIds(array $DiskIds) Set Specifies the cloud disk ID list for creating snapshot groups. disks mounted on the same instance must be selected.
 * @method string getSnapshotGroupName() Obtain Snapshot group name. snapshots associated with the snapshot group inherit the snapshot group name. example: if the snapshot group name is testSnapshotGroup and the snapshot group is associated with two snapshots, the snapshot names are testSnapshotGroup_0 and testSnapshotGroup_1 respectively.
 * @method void setSnapshotGroupName(string $SnapshotGroupName) Set Snapshot group name. snapshots associated with the snapshot group inherit the snapshot group name. example: if the snapshot group name is testSnapshotGroup and the snapshot group is associated with two snapshots, the snapshot names are testSnapshotGroup_0 and testSnapshotGroup_1 respectively.
 * @method array getTags() Obtain Specifies the Tag list that should be bound to the snapshot group.
 * @method void setTags(array $Tags) Set Specifies the Tag list that should be bound to the snapshot group.
 */
class CreateSnapshotGroupRequest extends AbstractModel
{
    /**
     * @var array Specifies the cloud disk ID list for creating snapshot groups. disks mounted on the same instance must be selected.
     */
    public $DiskIds;

    /**
     * @var string Snapshot group name. snapshots associated with the snapshot group inherit the snapshot group name. example: if the snapshot group name is testSnapshotGroup and the snapshot group is associated with two snapshots, the snapshot names are testSnapshotGroup_0 and testSnapshotGroup_1 respectively.
     */
    public $SnapshotGroupName;

    /**
     * @var array Specifies the Tag list that should be bound to the snapshot group.
     */
    public $Tags;

    /**
     * @param array $DiskIds Specifies the cloud disk ID list for creating snapshot groups. disks mounted on the same instance must be selected.
     * @param string $SnapshotGroupName Snapshot group name. snapshots associated with the snapshot group inherit the snapshot group name. example: if the snapshot group name is testSnapshotGroup and the snapshot group is associated with two snapshots, the snapshot names are testSnapshotGroup_0 and testSnapshotGroup_1 respectively.
     * @param array $Tags Specifies the Tag list that should be bound to the snapshot group.
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("SnapshotGroupName",$param) and $param["SnapshotGroupName"] !== null) {
            $this->SnapshotGroupName = $param["SnapshotGroupName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
