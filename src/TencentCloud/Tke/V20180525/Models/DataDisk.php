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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDiskType() Obtain 
 * @method void setDiskType(string $DiskType) Set 
 * @method string getFileSystem() Obtain File system (ext3/ext4/xfs)
 * @method void setFileSystem(string $FileSystem) Set File system (ext3/ext4/xfs)
 * @method integer getDiskSize() Obtain 
 * @method void setDiskSize(integer $DiskSize) Set 
 * @method boolean getAutoFormatAndMount() Obtain Whether to automatically format and mount the disk
 * @method void setAutoFormatAndMount(boolean $AutoFormatAndMount) Set Whether to automatically format and mount the disk
 * @method string getMountTarget() Obtain 
 * @method void setMountTarget(string $MountTarget) Set 
 */

/**
 *Described the configuration and information of k8s node data disk.
 */
class DataDisk extends AbstractModel
{
    /**
     * @var string 
     */
    public $DiskType;

    /**
     * @var string File system (ext3/ext4/xfs)
     */
    public $FileSystem;

    /**
     * @var integer 
     */
    public $DiskSize;

    /**
     * @var boolean Whether to automatically format and mount the disk
     */
    public $AutoFormatAndMount;

    /**
     * @var string 
     */
    public $MountTarget;
    /**
     * @param string $DiskType 
     * @param string $FileSystem File system (ext3/ext4/xfs)
     * @param integer $DiskSize 
     * @param boolean $AutoFormatAndMount Whether to automatically format and mount the disk
     * @param string $MountTarget 
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

        if (array_key_exists("FileSystem",$param) and $param["FileSystem"] !== null) {
            $this->FileSystem = $param["FileSystem"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("AutoFormatAndMount",$param) and $param["AutoFormatAndMount"] !== null) {
            $this->AutoFormatAndMount = $param["AutoFormatAndMount"];
        }

        if (array_key_exists("MountTarget",$param) and $param["MountTarget"] !== null) {
            $this->MountTarget = $param["MountTarget"];
        }
    }
}
