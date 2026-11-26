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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Video stream configuration parameters.
 *
 * @method string getCodec() Obtain Encoding format for video streams. Optional values: <li>H.264: Use H.264 encoding;</li><li>H.265: Use H.265 encoding.</li>
 * @method void setCodec(string $Codec) Set Encoding format for video streams. Optional values: <li>H.264: Use H.264 encoding;</li><li>H.265: Use H.265 encoding.</li>
 * @method float getFps() Obtain Video frame rate. Value range: [0, 30]. Unit: Hz.
If the value is 0, the frame rate will be the same as that of the source video, with a maximum of 30.
Default value: 0.
 * @method void setFps(float $Fps) Set Video frame rate. Value range: [0, 30]. Unit: Hz.
If the value is 0, the frame rate will be the same as that of the source video, with a maximum of 30.
Default value: 0.
 * @method integer getBitrate() Obtain Bitrate of video stream. Value range: 0 and [128, 10000]. Unit: kbps.
If the value is 0, the bitrate is automatically selected based on the video footage and quality.
Default value: 0.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of video stream. Value range: 0 and [128, 10000]. Unit: kbps.
If the value is 0, the bitrate is automatically selected based on the video footage and quality.
Default value: 0.
 * @method string getResolutionAdaptive() Obtain Resolution adaptation. Available values: <li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side.</li><li>close: disable. At this point, Width represents the width of the video, and Height represents the height.</li>Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaptation. Available values: <li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side.</li><li>close: disable. At this point, Width represents the width of the video, and Height represents the height.</li>Default value: open.
 * @method integer getWidth() Obtain The maximum value of the video stream width (or long side). Valid values: 0 and [128, 1920]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
 * @method void setWidth(integer $Width) Set The maximum value of the video stream width (or long side). Valid values: 0 and [128, 1920]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
 * @method integer getHeight() Obtain The maximum value of the video stream height (or short side). Valid values: 0 and [128, 1080]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
 * @method void setHeight(integer $Height) Set The maximum value of the video stream height (or short side). Valid values: 0 and [128, 1080]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
 * @method string getFillType() Obtain Filling method, which is the processing method for transcoding when the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, is called "filling". Optional filling modes: <li>stretch: stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched".</li><li>black: keep the video aspect ratio unchanged and fill the edges with black.</li><li>white: keep the video aspect ratio unchanged and fill the edges with white.</li><li>gauss: keep the video aspect ratio unchanged and use Gaussian blur filling for the rest of the edges.</li>Default value: black.
 * @method void setFillType(string $FillType) Set Filling method, which is the processing method for transcoding when the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, is called "filling". Optional filling modes: <li>stretch: stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched".</li><li>black: keep the video aspect ratio unchanged and fill the edges with black.</li><li>white: keep the video aspect ratio unchanged and fill the edges with white.</li><li>gauss: keep the video aspect ratio unchanged and use Gaussian blur filling for the rest of the edges.</li>Default value: black.
 */
class VideoTemplateInfo extends AbstractModel
{
    /**
     * @var string Encoding format for video streams. Optional values: <li>H.264: Use H.264 encoding;</li><li>H.265: Use H.265 encoding.</li>
     */
    public $Codec;

    /**
     * @var float Video frame rate. Value range: [0, 30]. Unit: Hz.
If the value is 0, the frame rate will be the same as that of the source video, with a maximum of 30.
Default value: 0.
     */
    public $Fps;

    /**
     * @var integer Bitrate of video stream. Value range: 0 and [128, 10000]. Unit: kbps.
If the value is 0, the bitrate is automatically selected based on the video footage and quality.
Default value: 0.
     */
    public $Bitrate;

    /**
     * @var string Resolution adaptation. Available values: <li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side.</li><li>close: disable. At this point, Width represents the width of the video, and Height represents the height.</li>Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var integer The maximum value of the video stream width (or long side). Valid values: 0 and [128, 1920]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
     */
    public $Width;

    /**
     * @var integer The maximum value of the video stream height (or short side). Valid values: 0 and [128, 1080]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
     */
    public $Height;

    /**
     * @var string Filling method, which is the processing method for transcoding when the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, is called "filling". Optional filling modes: <li>stretch: stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched".</li><li>black: keep the video aspect ratio unchanged and fill the edges with black.</li><li>white: keep the video aspect ratio unchanged and fill the edges with white.</li><li>gauss: keep the video aspect ratio unchanged and use Gaussian blur filling for the rest of the edges.</li>Default value: black.
     */
    public $FillType;

    /**
     * @param string $Codec Encoding format for video streams. Optional values: <li>H.264: Use H.264 encoding;</li><li>H.265: Use H.265 encoding.</li>
     * @param float $Fps Video frame rate. Value range: [0, 30]. Unit: Hz.
If the value is 0, the frame rate will be the same as that of the source video, with a maximum of 30.
Default value: 0.
     * @param integer $Bitrate Bitrate of video stream. Value range: 0 and [128, 10000]. Unit: kbps.
If the value is 0, the bitrate is automatically selected based on the video footage and quality.
Default value: 0.
     * @param string $ResolutionAdaptive Resolution adaptation. Available values: <li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side.</li><li>close: disable. At this point, Width represents the width of the video, and Height represents the height.</li>Default value: open.
     * @param integer $Width The maximum value of the video stream width (or long side). Valid values: 0 and [128, 1920]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
     * @param integer $Height The maximum value of the video stream height (or short side). Valid values: 0 and [128, 1080]. Unit: px.<li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
     * @param string $FillType Filling method, which is the processing method for transcoding when the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, is called "filling". Optional filling modes: <li>stretch: stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched".</li><li>black: keep the video aspect ratio unchanged and fill the edges with black.</li><li>white: keep the video aspect ratio unchanged and fill the edges with white.</li><li>gauss: keep the video aspect ratio unchanged and use Gaussian blur filling for the rest of the edges.</li>Default value: black.
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

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
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

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }
    }
}
