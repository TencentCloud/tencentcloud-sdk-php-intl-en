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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Additional bitrate configuration for video template.
 *
 * @method integer getVideoMaxBitrate() Obtain The maximum bitrate in the VBR scenario must be a multiple of 1000 and between 50000 and 40000000.
 * @method void setVideoMaxBitrate(integer $VideoMaxBitrate) Set The maximum bitrate in the VBR scenario must be a multiple of 1000 and between 50000 and 40000000.
 * @method integer getBufferSize() Obtain Cache configuration supports configuration as 1-4x the Max Bitrate value.
 * @method void setBufferSize(integer $BufferSize) Set Cache configuration supports configuration as 1-4x the Max Bitrate value.
 * @method integer getQualityLevel() Obtain Valid in VBR scenarios. Video quality level. Only supports user input of numbers between 1 and 51.
 * @method void setQualityLevel(integer $QualityLevel) Set Valid in VBR scenarios. Video quality level. Only supports user input of numbers between 1 and 51.
 */
class AdditionalRateSetting extends AbstractModel
{
    /**
     * @var integer The maximum bitrate in the VBR scenario must be a multiple of 1000 and between 50000 and 40000000.
     */
    public $VideoMaxBitrate;

    /**
     * @var integer Cache configuration supports configuration as 1-4x the Max Bitrate value.
     */
    public $BufferSize;

    /**
     * @var integer Valid in VBR scenarios. Video quality level. Only supports user input of numbers between 1 and 51.
     */
    public $QualityLevel;

    /**
     * @param integer $VideoMaxBitrate The maximum bitrate in the VBR scenario must be a multiple of 1000 and between 50000 and 40000000.
     * @param integer $BufferSize Cache configuration supports configuration as 1-4x the Max Bitrate value.
     * @param integer $QualityLevel Valid in VBR scenarios. Video quality level. Only supports user input of numbers between 1 and 51.
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
        if (array_key_exists("VideoMaxBitrate",$param) and $param["VideoMaxBitrate"] !== null) {
            $this->VideoMaxBitrate = $param["VideoMaxBitrate"];
        }

        if (array_key_exists("BufferSize",$param) and $param["BufferSize"] !== null) {
            $this->BufferSize = $param["BufferSize"];
        }

        if (array_key_exists("QualityLevel",$param) and $param["QualityLevel"] !== null) {
            $this->QualityLevel = $param["QualityLevel"];
        }
    }
}
