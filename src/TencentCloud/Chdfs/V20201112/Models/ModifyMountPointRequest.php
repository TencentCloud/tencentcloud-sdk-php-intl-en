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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMountPoint request structure.
 *
 * @method string getMountPointId() Obtain Mount point ID
 * @method void setMountPointId(string $MountPointId) Set Mount point ID
 * @method string getMountPointName() Obtain Mount point name
 * @method void setMountPointName(string $MountPointName) Set Mount point name
 * @method integer getMountPointStatus() Obtain Mount point status
 * @method void setMountPointStatus(integer $MountPointStatus) Set Mount point status
 */
class ModifyMountPointRequest extends AbstractModel
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
     * @var integer Mount point status
     */
    public $MountPointStatus;

    /**
     * @param string $MountPointId Mount point ID
     * @param string $MountPointName Mount point name
     * @param integer $MountPointStatus Mount point status
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

        if (array_key_exists("MountPointStatus",$param) and $param["MountPointStatus"] !== null) {
            $this->MountPointStatus = $param["MountPointStatus"];
        }
    }
}
