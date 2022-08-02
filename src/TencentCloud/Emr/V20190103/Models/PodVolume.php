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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of Pod storage.
 *
 * @method string getVolumeType() Obtain Storage type. Valid values: `pvc` and `hostpath`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVolumeType(string $VolumeType) Set Storage type. Valid values: `pvc` and `hostpath`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PersistentVolumeContext getPVCVolume() Obtain This field will take effect if `VolumeType` is `pvc`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPVCVolume(PersistentVolumeContext $PVCVolume) Set This field will take effect if `VolumeType` is `pvc`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method HostVolumeContext getHostVolume() Obtain This field will take effect if `VolumeType` is `hostpath`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostVolume(HostVolumeContext $HostVolume) Set This field will take effect if `VolumeType` is `hostpath`.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PodVolume extends AbstractModel
{
    /**
     * @var string Storage type. Valid values: `pvc` and `hostpath`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VolumeType;

    /**
     * @var PersistentVolumeContext This field will take effect if `VolumeType` is `pvc`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PVCVolume;

    /**
     * @var HostVolumeContext This field will take effect if `VolumeType` is `hostpath`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostVolume;

    /**
     * @param string $VolumeType Storage type. Valid values: `pvc` and `hostpath`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PersistentVolumeContext $PVCVolume This field will take effect if `VolumeType` is `pvc`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param HostVolumeContext $HostVolume This field will take effect if `VolumeType` is `hostpath`.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("VolumeType",$param) and $param["VolumeType"] !== null) {
            $this->VolumeType = $param["VolumeType"];
        }

        if (array_key_exists("PVCVolume",$param) and $param["PVCVolume"] !== null) {
            $this->PVCVolume = new PersistentVolumeContext();
            $this->PVCVolume->deserialize($param["PVCVolume"]);
        }

        if (array_key_exists("HostVolume",$param) and $param["HostVolume"] !== null) {
            $this->HostVolume = new HostVolumeContext();
            $this->HostVolume->deserialize($param["HostVolume"]);
        }
    }
}
