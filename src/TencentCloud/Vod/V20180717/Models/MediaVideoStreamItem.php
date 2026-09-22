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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Video stream information of VOD files
 *
 * @method integer getBitrate() Obtain Bitrate of the video stream. Unit: bps.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of the video stream. Unit: bps.
 * @method integer getHeight() Obtain Height of the video stream. Unit: px.
 * @method void setHeight(integer $Height) Set Height of the video stream. Unit: px.
 * @method integer getWidth() Obtain Video stream width. Unit: px.
 * @method void setWidth(integer $Width) Set Video stream width. Unit: px.
 * @method string getCodec() Obtain Video stream encoding format, for example h264.
 * @method void setCodec(string $Codec) Set Video stream encoding format, for example h264.
 * @method integer getFps() Obtain Frame rate. Unit: hz.
 * @method void setFps(integer $Fps) Set Frame rate. Unit: hz.
 * @method string getCodecTag() Obtain Encoding tag, valid only when Codec is hevc.
 * @method void setCodecTag(string $CodecTag) Set Encoding tag, valid only when Codec is hevc.
 * @method DynamicRangeInfo getDynamicRangeInfo() Obtain Dynamic range information of the frame.
<li><font color=red>Note</font>: This field is valid for transcoded files processed after 2023-01-10T00:00:00Z.</li>
 * @method void setDynamicRangeInfo(DynamicRangeInfo $DynamicRangeInfo) Set Dynamic range information of the frame.
<li><font color=red>Note</font>: This field is valid for transcoded files processed after 2023-01-10T00:00:00Z.</li>
 */
class MediaVideoStreamItem extends AbstractModel
{
    /**
     * @var integer Bitrate of the video stream. Unit: bps.
     */
    public $Bitrate;

    /**
     * @var integer Height of the video stream. Unit: px.
     */
    public $Height;

    /**
     * @var integer Video stream width. Unit: px.
     */
    public $Width;

    /**
     * @var string Video stream encoding format, for example h264.
     */
    public $Codec;

    /**
     * @var integer Frame rate. Unit: hz.
     */
    public $Fps;

    /**
     * @var string Encoding tag, valid only when Codec is hevc.
     */
    public $CodecTag;

    /**
     * @var DynamicRangeInfo Dynamic range information of the frame.
<li><font color=red>Note</font>: This field is valid for transcoded files processed after 2023-01-10T00:00:00Z.</li>
     */
    public $DynamicRangeInfo;

    /**
     * @param integer $Bitrate Bitrate of the video stream. Unit: bps.
     * @param integer $Height Height of the video stream. Unit: px.
     * @param integer $Width Video stream width. Unit: px.
     * @param string $Codec Video stream encoding format, for example h264.
     * @param integer $Fps Frame rate. Unit: hz.
     * @param string $CodecTag Encoding tag, valid only when Codec is hevc.
     * @param DynamicRangeInfo $DynamicRangeInfo Dynamic range information of the frame.
<li><font color=red>Note</font>: This field is valid for transcoded files processed after 2023-01-10T00:00:00Z.</li>
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

        if (array_key_exists("CodecTag",$param) and $param["CodecTag"] !== null) {
            $this->CodecTag = $param["CodecTag"];
        }

        if (array_key_exists("DynamicRangeInfo",$param) and $param["DynamicRangeInfo"] !== null) {
            $this->DynamicRangeInfo = new DynamicRangeInfo();
            $this->DynamicRangeInfo->deserialize($param["DynamicRangeInfo"]);
        }
    }
}
