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
 * Describes how a newly purchased cloud disk is initialized and attached to a CVM instance.
 *
 * @method array getInstanceId() Obtain ID of the instance to which the cloud disk is attached.
 * @method void setInstanceId(array $InstanceId) Set ID of the instance to which the cloud disk is attached.
 * @method array getMountPoint() Obtain Mount point in the instance.
 * @method void setMountPoint(array $MountPoint) Set Mount point in the instance.
 * @method string getFileSystemType() Obtain File system type. Valid values: `ext4`, `xfs`.
 * @method void setFileSystemType(string $FileSystemType) Set File system type. Valid values: `ext4`, `xfs`.
 */
class AutoMountConfiguration extends AbstractModel
{
    /**
     * @var array ID of the instance to which the cloud disk is attached.
     */
    public $InstanceId;

    /**
     * @var array Mount point in the instance.
     */
    public $MountPoint;

    /**
     * @var string File system type. Valid values: `ext4`, `xfs`.
     */
    public $FileSystemType;

    /**
     * @param array $InstanceId ID of the instance to which the cloud disk is attached.
     * @param array $MountPoint Mount point in the instance.
     * @param string $FileSystemType File system type. Valid values: `ext4`, `xfs`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MountPoint",$param) and $param["MountPoint"] !== null) {
            $this->MountPoint = $param["MountPoint"];
        }

        if (array_key_exists("FileSystemType",$param) and $param["FileSystemType"] !== null) {
            $this->FileSystemType = $param["FileSystemType"];
        }
    }
}
