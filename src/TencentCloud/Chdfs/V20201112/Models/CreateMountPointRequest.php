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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMountPoint request structure.
 *
 * @method string getMountPointName() Obtain Mount point name
 * @method void setMountPointName(string $MountPointName) Set Mount point name
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method integer getMountPointStatus() Obtain Mount point status (1: enabled; 2: disabled)
 * @method void setMountPointStatus(integer $MountPointStatus) Set Mount point status (1: enabled; 2: disabled)
 */
class CreateMountPointRequest extends AbstractModel
{
    /**
     * @var string Mount point name
     */
    public $MountPointName;

    /**
     * @var string File system ID
     */
    public $FileSystemId;

    /**
     * @var integer Mount point status (1: enabled; 2: disabled)
     */
    public $MountPointStatus;

    /**
     * @param string $MountPointName Mount point name
     * @param string $FileSystemId File system ID
     * @param integer $MountPointStatus Mount point status (1: enabled; 2: disabled)
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
        if (array_key_exists("MountPointName",$param) and $param["MountPointName"] !== null) {
            $this->MountPointName = $param["MountPointName"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("MountPointStatus",$param) and $param["MountPointStatus"] !== null) {
            $this->MountPointStatus = $param["MountPointStatus"];
        }
    }
}
