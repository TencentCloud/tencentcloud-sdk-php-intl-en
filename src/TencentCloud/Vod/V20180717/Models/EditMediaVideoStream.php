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
 * Video stream configuration information
 *
 * @method string getCodec() Obtain Encoding format for video streams. Optional values:
<li>libx264: H.264 encoding;</li>
<li>libx265: H.265 encoding;</li>
<li>av1: AOMedia Video 1 encoding;</li>
<li>H.266: H.266 encoding.</li>
 * @method void setCodec(string $Codec) Set Encoding format for video streams. Optional values:
<li>libx264: H.264 encoding;</li>
<li>libx265: H.265 encoding;</li>
<li>av1: AOMedia Video 1 encoding;</li>
<li>H.266: H.266 encoding.</li>
 * @method integer getBitrate() Obtain Bitrate of video stream. Value range: 0 and [128, 100000]. Unit: kbps.
When the value is 0 or not specified, VOD automatically sets the bitrate.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of video stream. Value range: 0 and [128, 100000]. Unit: kbps.
When the value is 0 or not specified, VOD automatically sets the bitrate.
 * @method string getResolutionAdaptive() Obtain Resolution adaptation. Available values:
<li>open: enabled. At this point, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height indicates the video height.</li>
Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaptation. Available values:
<li>open: enabled. At this point, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height indicates the video height.</li>
Default value: open.
 * @method integer getWidth() Obtain Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the base resolution is used.</li>
<li>If Width is 0 but Height is not 0, the width will be scaled based on the benchmark resolution ratio.</li>
<li>If Width is not 0 but Height is 0, the height will be scaled based on the benchmark resolution ratio.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
 * @method void setWidth(integer $Width) Set Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the base resolution is used.</li>
<li>If Width is 0 but Height is not 0, the width will be scaled based on the benchmark resolution ratio.</li>
<li>If Width is not 0 but Height is 0, the height will be scaled based on the benchmark resolution ratio.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
 * @method integer getHeight() Obtain Maximum height (or short side) of the video stream. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the base resolution is used.</li>
<li>If Width is 0 but Height is not 0, the width will be scaled based on the benchmark resolution ratio.</li>
<li>If Width is not 0 but Height is 0, the height will be scaled based on the benchmark resolution ratio.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
 * @method void setHeight(integer $Height) Set Maximum height (or short side) of the video stream. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the base resolution is used.</li>
<li>If Width is 0 but Height is not 0, the width will be scaled based on the benchmark resolution ratio.</li>
<li>If Width is not 0 but Height is 0, the height will be scaled based on the benchmark resolution ratio.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
 * @method integer getFps() Obtain Video frame rate. Value range: [0, 100]. Unit: Hz.
When the value is 0, the frame rate is automatically set for the video.
Default value: 0.
 * @method void setFps(integer $Fps) Set Video frame rate. Value range: [0, 100]. Unit: Hz.
When the value is 0, the frame rate is automatically set for the video.
Default value: 0.
 */
class EditMediaVideoStream extends AbstractModel
{
    /**
     * @var string Encoding format for video streams. Optional values:
<li>libx264: H.264 encoding;</li>
<li>libx265: H.265 encoding;</li>
<li>av1: AOMedia Video 1 encoding;</li>
<li>H.266: H.266 encoding.</li>
     */
    public $Codec;

    /**
     * @var integer Bitrate of video stream. Value range: 0 and [128, 100000]. Unit: kbps.
When the value is 0 or not specified, VOD automatically sets the bitrate.
     */
    public $Bitrate;

    /**
     * @var string Resolution adaptation. Available values:
<li>open: enabled. At this point, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height indicates the video height.</li>
Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var integer Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the base resolution is used.</li>
<li>If Width is 0 but Height is not 0, the width will be scaled based on the benchmark resolution ratio.</li>
<li>If Width is not 0 but Height is 0, the height will be scaled based on the benchmark resolution ratio.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
     */
    public $Width;

    /**
     * @var integer Maximum height (or short side) of the video stream. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the base resolution is used.</li>
<li>If Width is 0 but Height is not 0, the width will be scaled based on the benchmark resolution ratio.</li>
<li>If Width is not 0 but Height is 0, the height will be scaled based on the benchmark resolution ratio.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
     */
    public $Height;

    /**
     * @var integer Video frame rate. Value range: [0, 100]. Unit: Hz.
When the value is 0, the frame rate is automatically set for the video.
Default value: 0.
     */
    public $Fps;

    /**
     * @param string $Codec Encoding format for video streams. Optional values:
<li>libx264: H.264 encoding;</li>
<li>libx265: H.265 encoding;</li>
<li>av1: AOMedia Video 1 encoding;</li>
<li>H.266: H.266 encoding.</li>
     * @param integer $Bitrate Bitrate of video stream. Value range: 0 and [128, 100000]. Unit: kbps.
When the value is 0 or not specified, VOD automatically sets the bitrate.
     * @param string $ResolutionAdaptive Resolution adaptation. Available values:
<li>open: enabled. At this point, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height indicates the video height.</li>
Default value: open.
     * @param integer $Width Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the base resolution is used.</li>
<li>If Width is 0 but Height is not 0, the width will be scaled based on the benchmark resolution ratio.</li>
<li>If Width is not 0 but Height is 0, the height will be scaled based on the benchmark resolution ratio.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
     * @param integer $Height Maximum height (or short side) of the video stream. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the base resolution is used.</li>
<li>If Width is 0 but Height is not 0, the width will be scaled based on the benchmark resolution ratio.</li>
<li>If Width is not 0 but Height is 0, the height will be scaled based on the benchmark resolution ratio.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
     * @param integer $Fps Video frame rate. Value range: [0, 100]. Unit: Hz.
When the value is 0, the frame rate is automatically set for the video.
Default value: 0.
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
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("ResolutionAdaptive",$param) and $param["ResolutionAdaptive"] !== null) {
            $this->ResolutionAdaptive = $param["ResolutionAdaptive"];
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
    }
}
