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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node system disk and data disk configuration
 *
 * @method string getDiskType() Obtain Cloud disk type
 * @method void setDiskType(string $DiskType) Set Cloud disk type
 * @method integer getDiskSize() Obtain Cloud disk size (GB)
 * @method void setDiskSize(integer $DiskSize) Set Cloud disk size (GB)
 * @method boolean getAutoFormatAndMount() Obtain Whether to automatically format and mount disks.
 * @method void setAutoFormatAndMount(boolean $AutoFormatAndMount) Set Whether to automatically format and mount disks.
 * @method string getFileSystem() Obtain File system
 * @method void setFileSystem(string $FileSystem) Set File system
 * @method string getMountTarget() Obtain Mounting directory
 * @method void setMountTarget(string $MountTarget) Set Mounting directory
 */
class Disk extends AbstractModel
{
    /**
     * @var string Cloud disk type
     */
    public $DiskType;

    /**
     * @var integer Cloud disk size (GB)
     */
    public $DiskSize;

    /**
     * @var boolean Whether to automatically format and mount disks.
     */
    public $AutoFormatAndMount;

    /**
     * @var string File system
     */
    public $FileSystem;

    /**
     * @var string Mounting directory
     */
    public $MountTarget;

    /**
     * @param string $DiskType Cloud disk type
     * @param integer $DiskSize Cloud disk size (GB)
     * @param boolean $AutoFormatAndMount Whether to automatically format and mount disks.
     * @param string $FileSystem File system
     * @param string $MountTarget Mounting directory
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("AutoFormatAndMount",$param) and $param["AutoFormatAndMount"] !== null) {
            $this->AutoFormatAndMount = $param["AutoFormatAndMount"];
        }

        if (array_key_exists("FileSystem",$param) and $param["FileSystem"] !== null) {
            $this->FileSystem = $param["FileSystem"];
        }

        if (array_key_exists("MountTarget",$param) and $param["MountTarget"] !== null) {
            $this->MountTarget = $param["MountTarget"];
        }
    }
}
