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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio operation
 *
 * @method string getType() Obtain Audio operation type. Valid values:
<li>Volume: volume adjustment.</li>
 * @method void setType(string $Type) Set Audio operation type. Valid values:
<li>Volume: volume adjustment.</li>
 * @method AudioVolumeParam getVolumeParam() Obtain Volume adjustment parameter, which is valid if `Type` is `Volume`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVolumeParam(AudioVolumeParam $VolumeParam) Set Volume adjustment parameter, which is valid if `Type` is `Volume`.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AudioTransform extends AbstractModel
{
    /**
     * @var string Audio operation type. Valid values:
<li>Volume: volume adjustment.</li>
     */
    public $Type;

    /**
     * @var AudioVolumeParam Volume adjustment parameter, which is valid if `Type` is `Volume`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VolumeParam;

    /**
     * @param string $Type Audio operation type. Valid values:
<li>Volume: volume adjustment.</li>
     * @param AudioVolumeParam $VolumeParam Volume adjustment parameter, which is valid if `Type` is `Volume`.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VolumeParam",$param) and $param["VolumeParam"] !== null) {
            $this->VolumeParam = new AudioVolumeParam();
            $this->VolumeParam->deserialize($param["VolumeParam"]);
        }
    }
}
