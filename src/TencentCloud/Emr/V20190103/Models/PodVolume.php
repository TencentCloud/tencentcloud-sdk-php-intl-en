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
 * Description of the Pod storage device.
 *
 * @method string getVolumeType() Obtain Storage type. Valid values: "pvc" and "hostpath".
 * @method void setVolumeType(string $VolumeType) Set Storage type. Valid values: "pvc" and "hostpath".
 * @method PersistentVolumeContext getPVCVolume() Obtain When VolumeType is set to "pvc", this parameter takes effect.
 * @method void setPVCVolume(PersistentVolumeContext $PVCVolume) Set When VolumeType is set to "pvc", this parameter takes effect.
 * @method HostVolumeContext getHostVolume() Obtain When VolumeType is set to "hostpath", this parameter takes effect.
 * @method void setHostVolume(HostVolumeContext $HostVolume) Set When VolumeType is set to "hostpath", this parameter takes effect.
 */
class PodVolume extends AbstractModel
{
    /**
     * @var string Storage type. Valid values: "pvc" and "hostpath".
     */
    public $VolumeType;

    /**
     * @var PersistentVolumeContext When VolumeType is set to "pvc", this parameter takes effect.
     */
    public $PVCVolume;

    /**
     * @var HostVolumeContext When VolumeType is set to "hostpath", this parameter takes effect.
     */
    public $HostVolume;

    /**
     * @param string $VolumeType Storage type. Valid values: "pvc" and "hostpath".
     * @param PersistentVolumeContext $PVCVolume When VolumeType is set to "pvc", this parameter takes effect.
     * @param HostVolumeContext $HostVolume When VolumeType is set to "hostpath", this parameter takes effect.
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
