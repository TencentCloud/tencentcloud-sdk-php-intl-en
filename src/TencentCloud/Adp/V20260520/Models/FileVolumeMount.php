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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud disk mounting configuration in the application sandbox.
 *
 * @method string getAccessMode() Obtain <p>Access mode: RO=read-only, RW=read-write; required. Only RW can be used when mounting to /workdir.</p>
 * @method void setAccessMode(string $AccessMode) Set <p>Access mode: RO=read-only, RW=read-write; required. Only RW can be used when mounting to /workdir.</p>
 * @method string getMountPath() Obtain <p>Absolute mount directory in the sandbox; /workdir can be mounted at most once and only RW can be used.</p>
 * @method void setMountPath(string $MountPath) Set <p>Absolute mount directory in the sandbox; /workdir can be mounted at most once and only RW can be used.</p>
 * @method string getVolumeId() Obtain <p>Cloud disk identification</p>
 * @method void setVolumeId(string $VolumeId) Set <p>Cloud disk identification</p>
 * @method string getMountId() Obtain <p>Server-side generated mount flag. Reserved for modification, optional for new additions.</p>
 * @method void setMountId(string $MountId) Set <p>Server-side generated mount flag. Reserved for modification, optional for new additions.</p>
 * @method string getRelativePath() Obtain <p>Path relative to the root directory of cloud disk data; an empty string indicates mounting the entire data root directory.</p>
 * @method void setRelativePath(string $RelativePath) Set <p>Path relative to the root directory of cloud disk data; an empty string indicates mounting the entire data root directory.</p>
 * @method string getVolumeName() Obtain <p>Cloud disk name. It is supplemented by the server only when querying the application configuration and ignored during modification. It is empty when it cannot be obtained and does not impact the mount configuration.</p>
 * @method void setVolumeName(string $VolumeName) Set <p>Cloud disk name. It is supplemented by the server only when querying the application configuration and ignored during modification. It is empty when it cannot be obtained and does not impact the mount configuration.</p>
 */
class FileVolumeMount extends AbstractModel
{
    /**
     * @var string <p>Access mode: RO=read-only, RW=read-write; required. Only RW can be used when mounting to /workdir.</p>
     */
    public $AccessMode;

    /**
     * @var string <p>Absolute mount directory in the sandbox; /workdir can be mounted at most once and only RW can be used.</p>
     */
    public $MountPath;

    /**
     * @var string <p>Cloud disk identification</p>
     */
    public $VolumeId;

    /**
     * @var string <p>Server-side generated mount flag. Reserved for modification, optional for new additions.</p>
     */
    public $MountId;

    /**
     * @var string <p>Path relative to the root directory of cloud disk data; an empty string indicates mounting the entire data root directory.</p>
     */
    public $RelativePath;

    /**
     * @var string <p>Cloud disk name. It is supplemented by the server only when querying the application configuration and ignored during modification. It is empty when it cannot be obtained and does not impact the mount configuration.</p>
     */
    public $VolumeName;

    /**
     * @param string $AccessMode <p>Access mode: RO=read-only, RW=read-write; required. Only RW can be used when mounting to /workdir.</p>
     * @param string $MountPath <p>Absolute mount directory in the sandbox; /workdir can be mounted at most once and only RW can be used.</p>
     * @param string $VolumeId <p>Cloud disk identification</p>
     * @param string $MountId <p>Server-side generated mount flag. Reserved for modification, optional for new additions.</p>
     * @param string $RelativePath <p>Path relative to the root directory of cloud disk data; an empty string indicates mounting the entire data root directory.</p>
     * @param string $VolumeName <p>Cloud disk name. It is supplemented by the server only when querying the application configuration and ignored during modification. It is empty when it cannot be obtained and does not impact the mount configuration.</p>
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
        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }

        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            $this->VolumeId = $param["VolumeId"];
        }

        if (array_key_exists("MountId",$param) and $param["MountId"] !== null) {
            $this->MountId = $param["MountId"];
        }

        if (array_key_exists("RelativePath",$param) and $param["RelativePath"] !== null) {
            $this->RelativePath = $param["RelativePath"];
        }

        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }
    }
}
