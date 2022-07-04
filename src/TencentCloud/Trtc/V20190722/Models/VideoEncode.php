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
 * The video encoding parameters.
 *
 * @method integer getWidth() Obtain The width of the output stream (pixels). This parameter is required if audio and video are relayed. Value range: [0, 1920].
 * @method void setWidth(integer $Width) Set The width of the output stream (pixels). This parameter is required if audio and video are relayed. Value range: [0, 1920].
 * @method integer getHeight() Obtain The height of the output stream (pixels). This parameter is required if audio and video are relayed. Value range: [0, 1080].
 * @method void setHeight(integer $Height) Set The height of the output stream (pixels). This parameter is required if audio and video are relayed. Value range: [0, 1080].
 * @method integer getFps() Obtain The frame rate (fps) of the output stream. This parameter is required if audio and video are relayed. Value range: [0, 60].
 * @method void setFps(integer $Fps) Set The frame rate (fps) of the output stream. This parameter is required if audio and video are relayed. Value range: [0, 60].
 * @method integer getBitRate() Obtain The bitrate (Kbps) of the output stream. This parameter is required if audio and video are relayed. Value range: [0, 10000].
 * @method void setBitRate(integer $BitRate) Set The bitrate (Kbps) of the output stream. This parameter is required if audio and video are relayed. Value range: [0, 10000].
 * @method integer getGop() Obtain The GOP (seconds) of the output stream. This parameter is required if audio and video are relayed. Value range: [1, 5].
 * @method void setGop(integer $Gop) Set The GOP (seconds) of the output stream. This parameter is required if audio and video are relayed. Value range: [1, 5].
 */
class VideoEncode extends AbstractModel
{
    /**
     * @var integer The width of the output stream (pixels). This parameter is required if audio and video are relayed. Value range: [0, 1920].
     */
    public $Width;

    /**
     * @var integer The height of the output stream (pixels). This parameter is required if audio and video are relayed. Value range: [0, 1080].
     */
    public $Height;

    /**
     * @var integer The frame rate (fps) of the output stream. This parameter is required if audio and video are relayed. Value range: [0, 60].
     */
    public $Fps;

    /**
     * @var integer The bitrate (Kbps) of the output stream. This parameter is required if audio and video are relayed. Value range: [0, 10000].
     */
    public $BitRate;

    /**
     * @var integer The GOP (seconds) of the output stream. This parameter is required if audio and video are relayed. Value range: [1, 5].
     */
    public $Gop;

    /**
     * @param integer $Width The width of the output stream (pixels). This parameter is required if audio and video are relayed. Value range: [0, 1920].
     * @param integer $Height The height of the output stream (pixels). This parameter is required if audio and video are relayed. Value range: [0, 1080].
     * @param integer $Fps The frame rate (fps) of the output stream. This parameter is required if audio and video are relayed. Value range: [0, 60].
     * @param integer $BitRate The bitrate (Kbps) of the output stream. This parameter is required if audio and video are relayed. Value range: [0, 10000].
     * @param integer $Gop The GOP (seconds) of the output stream. This parameter is required if audio and video are relayed. Value range: [1, 5].
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
