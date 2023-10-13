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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio/Video enhancement configuration.
 *
 * @method VideoEnhanceConfig getVideoEnhance() Obtain Video enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVideoEnhance(VideoEnhanceConfig $VideoEnhance) Set Video enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AudioEnhanceConfig getAudioEnhance() Obtain The audio enhancement configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAudioEnhance(AudioEnhanceConfig $AudioEnhance) Set The audio enhancement configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class EnhanceConfig extends AbstractModel
{
    /**
     * @var VideoEnhanceConfig Video enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VideoEnhance;

    /**
     * @var AudioEnhanceConfig The audio enhancement configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AudioEnhance;

    /**
     * @param VideoEnhanceConfig $VideoEnhance Video enhancement configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AudioEnhanceConfig $AudioEnhance The audio enhancement configuration.
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("VideoEnhance",$param) and $param["VideoEnhance"] !== null) {
            $this->VideoEnhance = new VideoEnhanceConfig();
            $this->VideoEnhance->deserialize($param["VideoEnhance"]);
        }

        if (array_key_exists("AudioEnhance",$param) and $param["AudioEnhance"] !== null) {
            $this->AudioEnhance = new AudioEnhanceConfig();
            $this->AudioEnhance->deserialize($param["AudioEnhance"]);
        }
    }
}
