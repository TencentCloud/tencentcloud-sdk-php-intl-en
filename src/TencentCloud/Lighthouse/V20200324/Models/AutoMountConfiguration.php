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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Automatically attach and initialize the data disk.
 *
 * @method string getInstanceId() Obtain ID of the instance to be mounted to. The instance must be **Running**.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance to be mounted to. The instance must be **Running**.
 * @method string getMountPoint() Obtain The mount point within the instance. Only Linux instances are supported. If it's not specified, the default mount point is "/data/disk".
 * @method void setMountPoint(string $MountPoint) Set The mount point within the instance. Only Linux instances are supported. If it's not specified, the default mount point is "/data/disk".
 * @method string getFileSystemType() Obtain The file system type. Values: `ext4` (default) and `xfs`. Only Linux instances are supported. 
 * @method void setFileSystemType(string $FileSystemType) Set The file system type. Values: `ext4` (default) and `xfs`. Only Linux instances are supported. 
 */
class AutoMountConfiguration extends AbstractModel
{
    /**
     * @var string ID of the instance to be mounted to. The instance must be **Running**.
     */
    public $InstanceId;

    /**
     * @var string The mount point within the instance. Only Linux instances are supported. If it's not specified, the default mount point is "/data/disk".
     */
    public $MountPoint;

    /**
     * @var string The file system type. Values: `ext4` (default) and `xfs`. Only Linux instances are supported. 
     */
    public $FileSystemType;

    /**
     * @param string $InstanceId ID of the instance to be mounted to. The instance must be **Running**.
     * @param string $MountPoint The mount point within the instance. Only Linux instances are supported. If it's not specified, the default mount point is "/data/disk".
     * @param string $FileSystemType The file system type. Values: `ext4` (default) and `xfs`. Only Linux instances are supported. 
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
