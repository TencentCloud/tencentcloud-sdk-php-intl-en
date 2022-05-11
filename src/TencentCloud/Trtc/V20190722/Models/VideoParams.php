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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The video transcoding parameters for recording.
 *
 * @method integer getWidth() Obtain The video width in pixels. The value of this parameter cannot be larger than 1920, and the result of multiplying `Width` and `Height` cannot exceed 1920 x 1080. The default value is `360`.
 * @method void setWidth(integer $Width) Set The video width in pixels. The value of this parameter cannot be larger than 1920, and the result of multiplying `Width` and `Height` cannot exceed 1920 x 1080. The default value is `360`.
 * @method integer getHeight() Obtain The video height in pixels. The value of this parameter cannot be larger than 1920, and the result of multiplying `Width` and `Height` cannot exceed 1920 x 1080. The default value is `640`.
 * @method void setHeight(integer $Height) Set The video height in pixels. The value of this parameter cannot be larger than 1920, and the result of multiplying `Width` and `Height` cannot exceed 1920 x 1080. The default value is `640`.
 * @method integer getFps() Obtain The video frame rate. Value range: [1, 60]. Default: 15.
 * @method void setFps(integer $Fps) Set The video frame rate. Value range: [1, 60]. Default: 15.
 * @method integer getBitRate() Obtain The video bitrate (bps). Value range: [64000, 8192000]. Default: 550000.
 * @method void setBitRate(integer $BitRate) Set The video bitrate (bps). Value range: [64000, 8192000]. Default: 550000.
 * @method integer getGop() Obtain The keyframe interval (seconds). Default value: 10.
 * @method void setGop(integer $Gop) Set The keyframe interval (seconds). Default value: 10.
 */
class VideoParams extends AbstractModel
{
    /**
     * @var integer The video width in pixels. The value of this parameter cannot be larger than 1920, and the result of multiplying `Width` and `Height` cannot exceed 1920 x 1080. The default value is `360`.
     */
    public $Width;

    /**
     * @var integer The video height in pixels. The value of this parameter cannot be larger than 1920, and the result of multiplying `Width` and `Height` cannot exceed 1920 x 1080. The default value is `640`.
     */
    public $Height;

    /**
     * @var integer The video frame rate. Value range: [1, 60]. Default: 15.
     */
    public $Fps;

    /**
     * @var integer The video bitrate (bps). Value range: [64000, 8192000]. Default: 550000.
     */
    public $BitRate;

    /**
     * @var integer The keyframe interval (seconds). Default value: 10.
     */
    public $Gop;

    /**
     * @param integer $Width The video width in pixels. The value of this parameter cannot be larger than 1920, and the result of multiplying `Width` and `Height` cannot exceed 1920 x 1080. The default value is `360`.
     * @param integer $Height The video height in pixels. The value of this parameter cannot be larger than 1920, and the result of multiplying `Width` and `Height` cannot exceed 1920 x 1080. The default value is `640`.
     * @param integer $Fps The video frame rate. Value range: [1, 60]. Default: 15.
     * @param integer $BitRate The video bitrate (bps). Value range: [64000, 8192000]. Default: 550000.
     * @param integer $Gop The keyframe interval (seconds). Default value: 10.
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("BitRate",$param) and $param["BitRate"] !== null) {
            $this->BitRate = $param["BitRate"];
        }

        if (array_key_exists("Gop",$param) and $param["Gop"] !== null) {
            $this->Gop = $param["Gop"];
        }
    }
}
