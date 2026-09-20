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
 * Video information of the remastered output
 *
 * @method string getCodec() Obtain Encoding format for video streams. Optional values:
<li>libx264: H.264 encoding;</li>
<li>libx265: H.265 encoding;</li>
<li>av1: AOMedia Video 1 encoding.</li>
The default encoding format for video streams is H.264.
 * @method void setCodec(string $Codec) Set Encoding format for video streams. Optional values:
<li>libx264: H.264 encoding;</li>
<li>libx265: H.265 encoding;</li>
<li>av1: AOMedia Video 1 encoding.</li>
The default encoding format for video streams is H.264.
 * @method integer getBitrate() Obtain Bitrate of video stream. Value range: 0 and [128, 35000]. Unit: kbps.
When the value is 0, VOD automatically sets the bitrate.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of video stream. Value range: 0 and [128, 35000]. Unit: kbps.
When the value is 0, VOD automatically sets the bitrate.
 * @method integer getFps() Obtain Video frame rate. Value range: [0, 100]. Unit: Hz. A value of 0 means the frame rate is consistent with the original video.
 * @method void setFps(integer $Fps) Set Video frame rate. Value range: [0, 100]. Unit: Hz. A value of 0 means the frame rate is consistent with the original video.
 * @method string getResolutionAdaptive() Obtain Resolution adaptation. Available values:
<li>open: enable. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height indicates the video height.</li>

Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaptation. Available values:
<li>open: enable. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height indicates the video height.</li>

Default value: open.
 * @method integer getWidth() Obtain Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>

Default value: 0.
 * @method void setWidth(integer $Width) Set Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>

Default value: 0.
 * @method integer getHeight() Obtain Maximum value of the video stream height (or short side). Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>

Default value: 0.
 * @method void setHeight(integer $Height) Set Maximum value of the video stream height (or short side). Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>

Default value: 0.
 * @method string getFillType() Obtain Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling modes:
<li>stretch: stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li>
<li>black: Fill with black. Maintain the video aspect ratio and fill the remaining edges with black.</li>

Default value: stretch.
 * @method void setFillType(string $FillType) Set Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling modes:
<li>stretch: stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li>
<li>black: Fill with black. Maintain the video aspect ratio and fill the remaining edges with black.</li>

Default value: stretch.
 * @method integer getGop() Obtain Interval between I-frames, in frames. Value range: 0 and [1, 100000].
If this parameter is 0 or left blank, the system will automatically set the GOP length.
 * @method void setGop(integer $Gop) Set Interval between I-frames, in frames. Value range: 0 and [1, 100000].
If this parameter is 0 or left blank, the system will automatically set the GOP length.
 */
class RebuildMediaTargetVideoStream extends AbstractModel
{
    /**
     * @var string Encoding format for video streams. Optional values:
<li>libx264: H.264 encoding;</li>
<li>libx265: H.265 encoding;</li>
<li>av1: AOMedia Video 1 encoding.</li>
The default encoding format for video streams is H.264.
     */
    public $Codec;

    /**
     * @var integer Bitrate of video stream. Value range: 0 and [128, 35000]. Unit: kbps.
When the value is 0, VOD automatically sets the bitrate.
     */
    public $Bitrate;

    /**
     * @var integer Video frame rate. Value range: [0, 100]. Unit: Hz. A value of 0 means the frame rate is consistent with the original video.
     */
    public $Fps;

    /**
     * @var string Resolution adaptation. Available values:
<li>open: enable. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height indicates the video height.</li>

Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var integer Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>

Default value: 0.
     */
    public $Width;

    /**
     * @var integer Maximum value of the video stream height (or short side). Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>

Default value: 0.
     */
    public $Height;

    /**
     * @var string Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling modes:
<li>stretch: stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li>
<li>black: Fill with black. Maintain the video aspect ratio and fill the remaining edges with black.</li>

Default value: stretch.
     */
    public $FillType;

    /**
     * @var integer Interval between I-frames, in frames. Value range: 0 and [1, 100000].
If this parameter is 0 or left blank, the system will automatically set the GOP length.
     */
    public $Gop;

    /**
     * @param string $Codec Encoding format for video streams. Optional values:
<li>libx264: H.264 encoding;</li>
<li>libx265: H.265 encoding;</li>
<li>av1: AOMedia Video 1 encoding.</li>
The default encoding format for video streams is H.264.
     * @param integer $Bitrate Bitrate of video stream. Value range: 0 and [128, 35000]. Unit: kbps.
When the value is 0, VOD automatically sets the bitrate.
     * @param integer $Fps Video frame rate. Value range: [0, 100]. Unit: Hz. A value of 0 means the frame rate is consistent with the original video.
     * @param string $ResolutionAdaptive Resolution adaptation. Available values:
<li>open: enable. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: closed. At this point, Width represents the video width, and Height indicates the video height.</li>

Default value: open.
     * @param integer $Width Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>

Default value: 0.
     * @param integer $Height Maximum value of the video stream height (or short side). Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>

Default value: 0.
     * @param string $FillType Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling modes:
<li>stretch: stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched";</li>
<li>black: Fill with black. Maintain the video aspect ratio and fill the remaining edges with black.</li>

Default value: stretch.
     * @param integer $Gop Interval between I-frames, in frames. Value range: 0 and [1, 100000].
If this parameter is 0 or left blank, the system will automatically set the GOP length.
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

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
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

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("Gop",$param) and $param["Gop"] !== null) {
            $this->Gop = $param["Gop"];
        }
    }
}
