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
 * Volume directory.
 *
 * @method array getCBSVolumes() Obtain <p>CBS storage volume.</p>
 * @method void setCBSVolumes(array $CBSVolumes) Set <p>CBS storage volume.</p>
 * @method array getCFSVolumes() Obtain <p>CFS storage volume.</p>
 * @method void setCFSVolumes(array $CFSVolumes) Set <p>CFS storage volume.</p>
 * @method array getCOSVolumes() Obtain <p>COS storage volume.</p>
 * @method void setCOSVolumes(array $COSVolumes) Set <p>COS storage volume.</p>
 * @method array getStorageVolumeName() Obtain <p>Storage volume name (the YAML submission has no storage volume type).</p>
 * @method void setStorageVolumeName(array $StorageVolumeName) Set <p>Storage volume name (the YAML submission has no storage volume type).</p>
 * @method array getVolumeMounts() Obtain <p>Storage volume list.</p>
 * @method void setVolumeMounts(array $VolumeMounts) Set <p>Storage volume list.</p>
 * @method array getStorageVolumeDetail() Obtain <p>Storage volume details.</p>
 * @method void setStorageVolumeDetail(array $StorageVolumeDetail) Set <p>Storage volume details.</p>
 * @method array getCFSTurboVolumes() Obtain <p>CFS Turbo storage volume.</p>
 * @method void setCFSTurboVolumes(array $CFSTurboVolumes) Set <p>CFS Turbo storage volume.</p>
 * @method array getGooseFSVolumes() Obtain <p>GooseFS volume mount information.</p>
 * @method void setGooseFSVolumes(array $GooseFSVolumes) Set <p>GooseFS volume mount information.</p>
 */
class PersistentVolume extends AbstractModel
{
    /**
     * @var array <p>CBS storage volume.</p>
     */
    public $CBSVolumes;

    /**
     * @var array <p>CFS storage volume.</p>
     */
    public $CFSVolumes;

    /**
     * @var array <p>COS storage volume.</p>
     */
    public $COSVolumes;

    /**
     * @var array <p>Storage volume name (the YAML submission has no storage volume type).</p>
     */
    public $StorageVolumeName;

    /**
     * @var array <p>Storage volume list.</p>
     */
    public $VolumeMounts;

    /**
     * @var array <p>Storage volume details.</p>
     */
    public $StorageVolumeDetail;

    /**
     * @var array <p>CFS Turbo storage volume.</p>
     */
    public $CFSTurboVolumes;

    /**
     * @var array <p>GooseFS volume mount information.</p>
     */
    public $GooseFSVolumes;

    /**
     * @param array $CBSVolumes <p>CBS storage volume.</p>
     * @param array $CFSVolumes <p>CFS storage volume.</p>
     * @param array $COSVolumes <p>COS storage volume.</p>
     * @param array $StorageVolumeName <p>Storage volume name (the YAML submission has no storage volume type).</p>
     * @param array $VolumeMounts <p>Storage volume list.</p>
     * @param array $StorageVolumeDetail <p>Storage volume details.</p>
     * @param array $CFSTurboVolumes <p>CFS Turbo storage volume.</p>
     * @param array $GooseFSVolumes <p>GooseFS volume mount information.</p>
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
        if (array_key_exists("CBSVolumes",$param) and $param["CBSVolumes"] !== null) {
            $this->CBSVolumes = [];
            foreach ($param["CBSVolumes"] as $key => $value){
                $obj = new CBSVolume();
                $obj->deserialize($value);
                array_push($this->CBSVolumes, $obj);
            }
        }

        if (array_key_exists("CFSVolumes",$param) and $param["CFSVolumes"] !== null) {
            $this->CFSVolumes = [];
            foreach ($param["CFSVolumes"] as $key => $value){
                $obj = new CFSVolume();
                $obj->deserialize($value);
                array_push($this->CFSVolumes, $obj);
            }
        }

        if (array_key_exists("COSVolumes",$param) and $param["COSVolumes"] !== null) {
            $this->COSVolumes = [];
            foreach ($param["COSVolumes"] as $key => $value){
                $obj = new COSVolume();
                $obj->deserialize($value);
                array_push($this->COSVolumes, $obj);
            }
        }

        if (array_key_exists("StorageVolumeName",$param) and $param["StorageVolumeName"] !== null) {
            $this->StorageVolumeName = $param["StorageVolumeName"];
        }

        if (array_key_exists("VolumeMounts",$param) and $param["VolumeMounts"] !== null) {
            $this->VolumeMounts = [];
            foreach ($param["VolumeMounts"] as $key => $value){
                $obj = new VolumeMount();
                $obj->deserialize($value);
                array_push($this->VolumeMounts, $obj);
            }
        }

        if (array_key_exists("StorageVolumeDetail",$param) and $param["StorageVolumeDetail"] !== null) {
            $this->StorageVolumeDetail = [];
            foreach ($param["StorageVolumeDetail"] as $key => $value){
                $obj = new StorageVolumeDetail();
                $obj->deserialize($value);
                array_push($this->StorageVolumeDetail, $obj);
            }
        }

        if (array_key_exists("CFSTurboVolumes",$param) and $param["CFSTurboVolumes"] !== null) {
            $this->CFSTurboVolumes = [];
            foreach ($param["CFSTurboVolumes"] as $key => $value){
                $obj = new CFSTurboVolume();
                $obj->deserialize($value);
                array_push($this->CFSTurboVolumes, $obj);
            }
        }

        if (array_key_exists("GooseFSVolumes",$param) and $param["GooseFSVolumes"] !== null) {
            $this->GooseFSVolumes = [];
            foreach ($param["GooseFSVolumes"] as $key => $value){
                $obj = new GooseFSVolume();
                $obj->deserialize($value);
                array_push($this->GooseFSVolumes, $obj);
            }
        }
    }
}
