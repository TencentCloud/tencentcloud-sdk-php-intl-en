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
 * Video transcoding parameters
 *
 * @method integer getWidth() Obtain Width. Value range [0,1920], unit is pixel value.
 * @method void setWidth(integer $Width) Set Width. Value range [0,1920], unit is pixel value.
 * @method integer getHeight() Obtain Height. Value range [0,1080], unit is pixel value.
 * @method void setHeight(integer $Height) Set Height. Value range [0,1080], unit is pixel value.
 * @method integer getFps() Obtain Frame Rate. Value range [1,60], indicating that the frame rate can be selected from 1 to 60fps.
 * @method void setFps(integer $Fps) Set Frame Rate. Value range [1,60], indicating that the frame rate can be selected from 1 to 60fps.
 * @method integer getBitRate() Obtain Bitrate. Value range [1,10000], unit is kbps.
 * @method void setBitRate(integer $BitRate) Set Bitrate. Value range [1,10000], unit is kbps.
 * @method integer getGop() Obtain Gop. Value range [1,2], unit is second.
 * @method void setGop(integer $Gop) Set Gop. Value range [1,2], unit is second.
 */
class VideoEncodeParams extends AbstractModel
{
    /**
     * @var integer Width. Value range [0,1920], unit is pixel value.
     */
    public $Width;

    /**
     * @var integer Height. Value range [0,1080], unit is pixel value.
     */
    public $Height;

    /**
     * @var integer Frame Rate. Value range [1,60], indicating that the frame rate can be selected from 1 to 60fps.
     */
    public $Fps;

    /**
     * @var integer Bitrate. Value range [1,10000], unit is kbps.
     */
    public $BitRate;

    /**
     * @var integer Gop. Value range [1,2], unit is second.
     */
    public $Gop;

    /**
     * @param integer $Width Width. Value range [0,1920], unit is pixel value.
     * @param integer $Height Height. Value range [0,1080], unit is pixel value.
     * @param integer $Fps Frame Rate. Value range [1,60], indicating that the frame rate can be selected from 1 to 60fps.
     * @param integer $BitRate Bitrate. Value range [1,10000], unit is kbps.
     * @param integer $Gop Gop. Value range [1,2], unit is second.
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
