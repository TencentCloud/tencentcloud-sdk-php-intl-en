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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * External mounting information.
 *
 * @method CFSConfig getCFSConfig() Obtain Cloud File Storage (CFS) configuration information.
 * @method void setCFSConfig(CFSConfig $CFSConfig) Set Cloud File Storage (CFS) configuration information.
 * @method string getVolumeSourceType() Obtain Mounting source type. Valid values: CFS and COS. The default value is CFS.
 * @method void setVolumeSourceType(string $VolumeSourceType) Set Mounting source type. Valid values: CFS and COS. The default value is CFS.
 * @method string getMountPath() Obtain Mounting path in the custom container.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMountPath(string $MountPath) Set Mounting path in the custom container.Note: This field may return null, indicating that no valid values can be obtained.
 */
class VolumeMount extends AbstractModel
{
    /**
     * @var CFSConfig Cloud File Storage (CFS) configuration information.
     */
    public $CFSConfig;

    /**
     * @var string Mounting source type. Valid values: CFS and COS. The default value is CFS.
     */
    public $VolumeSourceType;

    /**
     * @var string Mounting path in the custom container.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MountPath;

    /**
     * @param CFSConfig $CFSConfig Cloud File Storage (CFS) configuration information.
     * @param string $VolumeSourceType Mounting source type. Valid values: CFS and COS. The default value is CFS.
     * @param string $MountPath Mounting path in the custom container.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CFSConfig",$param) and $param["CFSConfig"] !== null) {
            $this->CFSConfig = new CFSConfig();
            $this->CFSConfig->deserialize($param["CFSConfig"]);
        }

        if (array_key_exists("VolumeSourceType",$param) and $param["VolumeSourceType"] !== null) {
            $this->VolumeSourceType = $param["VolumeSourceType"];
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }
    }
}
