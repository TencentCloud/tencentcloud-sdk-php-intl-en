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
 * Information of video stream in VOD file
 *
 * @method integer getBitrate() Obtain Bitrate of video stream in bps.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of video stream in bps.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getHeight() Obtain Height of video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHeight(integer $Height) Set Height of video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getWidth() Obtain Width of video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWidth(integer $Width) Set Width of video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCodec() Obtain Video stream encoder, such as h264.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCodec(string $Codec) Set Video stream encoder, such as h264.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getFps() Obtain Frame rate in Hz.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFps(integer $Fps) Set Frame rate in Hz.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MediaVideoStreamItem extends AbstractModel
{
    /**
     * @var integer Bitrate of video stream in bps.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Bitrate;

    /**
     * @var integer Height of video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Height;

    /**
     * @var integer Width of video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Width;

    /**
     * @var string Video stream encoder, such as h264.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Codec;

    /**
     * @var integer Frame rate in Hz.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Fps;

    /**
     * @param integer $Bitrate Bitrate of video stream in bps.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Height Height of video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Width Width of video stream in px.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Codec Video stream encoder, such as h264.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Fps Frame rate in Hz.
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
        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }
    }
}
