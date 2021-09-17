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
 * Mount point
 *
 * @method string getMountPointId() Obtain Mount point ID
 * @method void setMountPointId(string $MountPointId) Set Mount point ID
 * @method string getMountPointName() Obtain Mount point name
 * @method void setMountPointName(string $MountPointName) Set Mount point name
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method integer getStatus() Obtain Mount point status (1: enabled; 2: disabled)
 * @method void setStatus(integer $Status) Set Mount point status (1: enabled; 2: disabled)
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method array getAccessGroupIds() Obtain List of IDs of the bound permission groups
 * @method void setAccessGroupIds(array $AccessGroupIds) Set List of IDs of the bound permission groups
 */
class MountPoint extends AbstractModel
{
    /**
     * @var string Mount point ID
     */
    public $MountPointId;

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
    public $Status;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var array List of IDs of the bound permission groups
     */
    public $AccessGroupIds;

    /**
     * @param string $MountPointId Mount point ID
     * @param string $MountPointName Mount point name
     * @param string $FileSystemId File system ID
     * @param integer $Status Mount point status (1: enabled; 2: disabled)
     * @param string $CreateTime Creation time
     * @param array $AccessGroupIds List of IDs of the bound permission groups
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
        if (array_key_exists("MountPointId",$param) and $param["MountPointId"] !== null) {
            $this->MountPointId = $param["MountPointId"];
        }

        if (array_key_exists("MountPointName",$param) and $param["MountPointName"] !== null) {
            $this->MountPointName = $param["MountPointName"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AccessGroupIds",$param) and $param["AccessGroupIds"] !== null) {
            $this->AccessGroupIds = $param["AccessGroupIds"];
        }
    }
}
