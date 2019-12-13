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
 * @method array getDiskIds() 获取IDs of one or more cloud disks to be operated. If multiple cloud disk IDs are selected, it only supports modifying all cloud disks with the same attributes.
 * @method void setDiskIds(array $DiskIds) 设置IDs of one or more cloud disks to be operated. If multiple cloud disk IDs are selected, it only supports modifying all cloud disks with the same attributes.
 * @method integer getProjectId() 获取The new project ID of the cloud disk. Only the project ID of elastic cloud disk can be modified. The available projects and their IDs can be queried via the API [DescribeProject](/document/api/378/4400).
 * @method void setProjectId(integer $ProjectId) 设置The new project ID of the cloud disk. Only the project ID of elastic cloud disk can be modified. The available projects and their IDs can be queried via the API [DescribeProject](/document/api/378/4400).
 * @method string getDiskName() 获取Name of new cloud disk.
 * @method void setDiskName(string $DiskName) 设置Name of new cloud disk.
 * @method boolean getPortable() 获取Whether it is an elastic cloud disk. FALSE: non-elastic cloud disk; TRUE: elastic cloud disk. You can only modify non-elastic cloud disks to elastic cloud disks.
 * @method void setPortable(boolean $Portable) 设置Whether it is an elastic cloud disk. FALSE: non-elastic cloud disk; TRUE: elastic cloud disk. You can only modify non-elastic cloud disks to elastic cloud disks.
 * @method boolean getDeleteWithInstance() 获取Whether the cloud disk is terminated with the CVM after it has been successfully mounted. `TRUE` indicates that it is terminated with the CVM. `FALSE` indicates that it is not terminated with the CVM. This is only supported for cloud disks and data disks that are pay-as-you-go.
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置Whether the cloud disk is terminated with the CVM after it has been successfully mounted. `TRUE` indicates that it is terminated with the CVM. `FALSE` indicates that it is not terminated with the CVM. This is only supported for cloud disks and data disks that are pay-as-you-go.
 * @method string getDiskType() 获取When changing the type of a cloud disk, this parameter can be passed to indicate the desired cloud disk type. Value range: <br><li>CLOUD_PREMIUM: Premium cloud storage.  <br><li>CLOUD_SSD: SSD cloud disk. <br>Currently, batch operations are not supported for changing type. That is, when `DiskType` is passed, only one cloud disk can be passed through `DiskIds`. <br>When the cloud disk type is changed, the changing of other attributes is not supported concurrently.
 * @method void setDiskType(string $DiskType) 设置When changing the type of a cloud disk, this parameter can be passed to indicate the desired cloud disk type. Value range: <br><li>CLOUD_PREMIUM: Premium cloud storage.  <br><li>CLOUD_SSD: SSD cloud disk. <br>Currently, batch operations are not supported for changing type. That is, when `DiskType` is passed, only one cloud disk can be passed through `DiskIds`. <br>When the cloud disk type is changed, the changing of other attributes is not supported concurrently.
 */

/**
 *ModifyDiskAttributes request structure.
 */
class ModifyDiskAttributesRequest extends AbstractModel
{
    /**
     * @var array IDs of one or more cloud disks to be operated. If multiple cloud disk IDs are selected, it only supports modifying all cloud disks with the same attributes.
     */
    public $DiskIds;

    /**
     * @var integer The new project ID of the cloud disk. Only the project ID of elastic cloud disk can be modified. The available projects and their IDs can be queried via the API [DescribeProject](/document/api/378/4400).
     */
    public $ProjectId;

    /**
     * @var string Name of new cloud disk.
     */
    public $DiskName;

    /**
     * @var boolean Whether it is an elastic cloud disk. FALSE: non-elastic cloud disk; TRUE: elastic cloud disk. You can only modify non-elastic cloud disks to elastic cloud disks.
     */
    public $Portable;

    /**
     * @var boolean Whether the cloud disk is terminated with the CVM after it has been successfully mounted. `TRUE` indicates that it is terminated with the CVM. `FALSE` indicates that it is not terminated with the CVM. This is only supported for cloud disks and data disks that are pay-as-you-go.
     */
    public $DeleteWithInstance;

    /**
     * @var string When changing the type of a cloud disk, this parameter can be passed to indicate the desired cloud disk type. Value range: <br><li>CLOUD_PREMIUM: Premium cloud storage.  <br><li>CLOUD_SSD: SSD cloud disk. <br>Currently, batch operations are not supported for changing type. That is, when `DiskType` is passed, only one cloud disk can be passed through `DiskIds`. <br>When the cloud disk type is changed, the changing of other attributes is not supported concurrently.
     */
    public $DiskType;
    /**
     * @param array $DiskIds IDs of one or more cloud disks to be operated. If multiple cloud disk IDs are selected, it only supports modifying all cloud disks with the same attributes.
     * @param integer $ProjectId The new project ID of the cloud disk. Only the project ID of elastic cloud disk can be modified. The available projects and their IDs can be queried via the API [DescribeProject](/document/api/378/4400).
     * @param string $DiskName Name of new cloud disk.
     * @param boolean $Portable Whether it is an elastic cloud disk. FALSE: non-elastic cloud disk; TRUE: elastic cloud disk. You can only modify non-elastic cloud disks to elastic cloud disks.
     * @param boolean $DeleteWithInstance Whether the cloud disk is terminated with the CVM after it has been successfully mounted. `TRUE` indicates that it is terminated with the CVM. `FALSE` indicates that it is not terminated with the CVM. This is only supported for cloud disks and data disks that are pay-as-you-go.
     * @param string $DiskType When changing the type of a cloud disk, this parameter can be passed to indicate the desired cloud disk type. Value range: <br><li>CLOUD_PREMIUM: Premium cloud storage.  <br><li>CLOUD_SSD: SSD cloud disk. <br>Currently, batch operations are not supported for changing type. That is, when `DiskType` is passed, only one cloud disk can be passed through `DiskIds`. <br>When the cloud disk type is changed, the changing of other attributes is not supported concurrently.
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("Portable",$param) and $param["Portable"] !== null) {
            $this->Portable = $param["Portable"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }
    }
}
