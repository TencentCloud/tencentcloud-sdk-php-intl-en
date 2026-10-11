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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mount volume.
 *
 * @method string getMountName() Obtain Mount volume name.
 * @method void setMountName(string $MountName) Set Mount volume name.
 * @method string getMountPath() Obtain Mount path.
 * @method void setMountPath(string $MountPath) Set Mount path.
 * @method string getSubPathMode() Obtain Mount type.
 * @method void setSubPathMode(string $SubPathMode) Set Mount type.
 * @method string getSubPath() Obtain Sub-path.
 * @method void setSubPath(string $SubPath) Set Sub-path.
 * @method string getMountMode() Obtain Mounting mode. Valid values: ReadWrite and OnlyRead.
 * @method void setMountMode(string $MountMode) Set Mounting mode. Valid values: ReadWrite and OnlyRead.
 */
class VolumeMount extends AbstractModel
{
    /**
     * @var string Mount volume name.
     */
    public $MountName;

    /**
     * @var string Mount path.
     */
    public $MountPath;

    /**
     * @var string Mount type.
     */
    public $SubPathMode;

    /**
     * @var string Sub-path.
     */
    public $SubPath;

    /**
     * @var string Mounting mode. Valid values: ReadWrite and OnlyRead.
     */
    public $MountMode;

    /**
     * @param string $MountName Mount volume name.
     * @param string $MountPath Mount path.
     * @param string $SubPathMode Mount type.
     * @param string $SubPath Sub-path.
     * @param string $MountMode Mounting mode. Valid values: ReadWrite and OnlyRead.
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
        if (array_key_exists("MountName",$param) and $param["MountName"] !== null) {
            $this->MountName = $param["MountName"];
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }

        if (array_key_exists("SubPathMode",$param) and $param["SubPathMode"] !== null) {
            $this->SubPathMode = $param["SubPathMode"];
        }

        if (array_key_exists("SubPath",$param) and $param["SubPath"] !== null) {
            $this->SubPath = $param["SubPath"];
        }

        if (array_key_exists("MountMode",$param) and $param["MountMode"] !== null) {
            $this->MountMode = $param["MountMode"];
        }
    }
}
