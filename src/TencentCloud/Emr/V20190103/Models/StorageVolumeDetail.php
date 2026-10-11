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
 * Storage volume details.
 *
 * @method string getVolumeName() Obtain Storage volume name.
 * @method void setVolumeName(string $VolumeName) Set Storage volume name.
 * @method string getVolumeType() Obtain Storage volume type.
 * @method void setVolumeType(string $VolumeType) Set Storage volume type.
 * @method string getDesc() Obtain Storage volume details.
 * @method void setDesc(string $Desc) Set Storage volume details.
 */
class StorageVolumeDetail extends AbstractModel
{
    /**
     * @var string Storage volume name.
     */
    public $VolumeName;

    /**
     * @var string Storage volume type.
     */
    public $VolumeType;

    /**
     * @var string Storage volume details.
     */
    public $Desc;

    /**
     * @param string $VolumeName Storage volume name.
     * @param string $VolumeType Storage volume type.
     * @param string $Desc Storage volume details.
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
        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("VolumeType",$param) and $param["VolumeType"] !== null) {
            $this->VolumeType = $param["VolumeType"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
