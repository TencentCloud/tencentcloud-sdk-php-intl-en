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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned video face fusion result
 *
 * @method string getVideoUrl() Obtain URL of the video output after video face fusion
 * @method void setVideoUrl(string $VideoUrl) Set URL of the video output after video face fusion
 * @method string getVideoMD5() Obtain MD5 value of the video output after video face fusion, which is used for verification
 * @method void setVideoMD5(string $VideoMD5) Set MD5 value of the video output after video face fusion, which is used for verification
 * @method integer getWidth() Obtain Video width
 * @method void setWidth(integer $Width) Set Video width
 * @method integer getHeight() Obtain Video height
 * @method void setHeight(integer $Height) Set Video height
 * @method integer getFPS() Obtain Frames per second
 * @method void setFPS(integer $FPS) Set Frames per second
 * @method float getDurationInSec() Obtain Video duration, in seconds
 * @method void setDurationInSec(float $DurationInSec) Set Video duration, in seconds
 * @method integer getFrame() Obtain Number of frames
 * @method void setFrame(integer $Frame) Set Number of frames
 */
class VideoFaceFusionOutput extends AbstractModel
{
    /**
     * @var string URL of the video output after video face fusion
     */
    public $VideoUrl;

    /**
     * @var string MD5 value of the video output after video face fusion, which is used for verification
     */
    public $VideoMD5;

    /**
     * @var integer Video width
     */
    public $Width;

    /**
     * @var integer Video height
     */
    public $Height;

    /**
     * @var integer Frames per second
     */
    public $FPS;

    /**
     * @var float Video duration, in seconds
     */
    public $DurationInSec;

    /**
     * @var integer Number of frames
     */
    public $Frame;

    /**
     * @param string $VideoUrl URL of the video output after video face fusion
     * @param string $VideoMD5 MD5 value of the video output after video face fusion, which is used for verification
     * @param integer $Width Video width
     * @param integer $Height Video height
     * @param integer $FPS Frames per second
     * @param float $DurationInSec Video duration, in seconds
     * @param integer $Frame Number of frames
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
        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("VideoMD5",$param) and $param["VideoMD5"] !== null) {
            $this->VideoMD5 = $param["VideoMD5"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("FPS",$param) and $param["FPS"] !== null) {
            $this->FPS = $param["FPS"];
        }

        if (array_key_exists("DurationInSec",$param) and $param["DurationInSec"] !== null) {
            $this->DurationInSec = $param["DurationInSec"];
        }

        if (array_key_exists("Frame",$param) and $param["Frame"] !== null) {
            $this->Frame = $param["Frame"];
        }
    }
}
