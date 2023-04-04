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
 * The output video parameters of an audio/video remastering task.
 *
 * @method string getCodec() Obtain The video codec. Valid values:
<li>`libx264`: H.264</li>
<li>`libx265`: H.265</li>
<li>`av1`: AOMedia Video 1</li>
The default codec is H.264.
 * @method void setCodec(string $Codec) Set The video codec. Valid values:
<li>`libx264`: H.264</li>
<li>`libx265`: H.265</li>
<li>`av1`: AOMedia Video 1</li>
The default codec is H.264.
 * @method integer getBitrate() Obtain The video bitrate (Kbps). Value range: 0 and 128-35000.
If the value is `0`, the original video bitrate will be used.
 * @method void setBitrate(integer $Bitrate) Set The video bitrate (Kbps). Value range: 0 and 128-35000.
If the value is `0`, the original video bitrate will be used.
 * @method integer getFps() Obtain The video frame rate (Hz). Value range: 0-100. If the value is `0`, the original video frame rate will be used.
 * @method void setFps(integer $Fps) Set The video frame rate (Hz). Value range: 0-100. If the value is `0`, the original video frame rate will be used.
 * @method string getResolutionAdaptive() Obtain Resolution adaption. Valid values:
<li>`open`: Enable. When resolution adaption is enabled, `Width` indicates the long side of a video, while `Height` indicates the short side.</li>
<li>`close`: Disable. When resolution adaption is disabled, `Width` indicates the width of a video, while `Height` indicates the height.</li>

Default value: `open`.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaption. Valid values:
<li>`open`: Enable. When resolution adaption is enabled, `Width` indicates the long side of a video, while `Height` indicates the short side.</li>
<li>`close`: Disable. When resolution adaption is disabled, `Width` indicates the width of a video, while `Height` indicates the height.</li>

Default value: `open`.
 * @method integer getWidth() Obtain The maximum video width (or long side) in pixels. Value range: 0 and 128-4096.
<li>If both `Width` and `Height` are `0`, the original resolution will be used.</li>
<li>If `Width` is 0 and `Height` is not, the video width will be proportionally scaled.</li>
<li>If `Width` is not 0 and `Height` is, the video height will be proportionally scaled.</li>
<li>If neither `Width` nor `Height` is 0, the specified width and height will be used.</li>

Default value: `0`.
 * @method void setWidth(integer $Width) Set The maximum video width (or long side) in pixels. Value range: 0 and 128-4096.
<li>If both `Width` and `Height` are `0`, the original resolution will be used.</li>
<li>If `Width` is 0 and `Height` is not, the video width will be proportionally scaled.</li>
<li>If `Width` is not 0 and `Height` is, the video height will be proportionally scaled.</li>
<li>If neither `Width` nor `Height` is 0, the specified width and height will be used.</li>

Default value: `0`.
 * @method integer getHeight() Obtain The maximum video width (or short side) in pixels. Value range: 0 and [128, 4096].
<li>If both `Width` and `Height` are `0`, the original resolution will be used.</li>
<li>If `Width` is 0 and `Height` is not, the video width will be proportionally scaled.</li>
<li>If `Width` is not 0 and `Height` is, the video height will be proportionally scaled.</li>
<li>If neither `Width` nor `Height` is 0, the specified width and height will be used.</li>

Default value: `0`.
 * @method void setHeight(integer $Height) Set The maximum video width (or short side) in pixels. Value range: 0 and [128, 4096].
<li>If both `Width` and `Height` are `0`, the original resolution will be used.</li>
<li>If `Width` is 0 and `Height` is not, the video width will be proportionally scaled.</li>
<li>If `Width` is not 0 and `Height` is, the video height will be proportionally scaled.</li>
<li>If neither `Width` nor `Height` is 0, the specified width and height will be used.</li>

Default value: `0`.
 * @method string getFillType() Obtain The fill mode, which indicates how a video is resized when the video’s original aspect ratio is different from the target aspect ratio. Valid values:
<li>`stretch`: Stretch the image frame by frame to fill the entire screen. The video image may become "squashed" or "stretched" after transcoding.</li>
<li>`black`: Keep the image's original aspect ratio and fill the blank space with black bars.</li>

Default value: `stretch`.
 * @method void setFillType(string $FillType) Set The fill mode, which indicates how a video is resized when the video’s original aspect ratio is different from the target aspect ratio. Valid values:
<li>`stretch`: Stretch the image frame by frame to fill the entire screen. The video image may become "squashed" or "stretched" after transcoding.</li>
<li>`black`: Keep the image's original aspect ratio and fill the blank space with black bars.</li>

Default value: `stretch`.
 * @method integer getGop() Obtain The number of frames between two I-frames. Valid values: 0 and 1-100000.
If this parameter is `0` or left empty, the interval will be determined by the system.
 * @method void setGop(integer $Gop) Set The number of frames between two I-frames. Valid values: 0 and 1-100000.
If this parameter is `0` or left empty, the interval will be determined by the system.
 */
class RebuildMediaTargetVideoStream extends AbstractModel
{
    /**
     * @var string The video codec. Valid values:
<li>`libx264`: H.264</li>
<li>`libx265`: H.265</li>
<li>`av1`: AOMedia Video 1</li>
The default codec is H.264.
     */
    public $Codec;

    /**
     * @var integer The video bitrate (Kbps). Value range: 0 and 128-35000.
If the value is `0`, the original video bitrate will be used.
     */
    public $Bitrate;

    /**
     * @var integer The video frame rate (Hz). Value range: 0-100. If the value is `0`, the original video frame rate will be used.
     */
    public $Fps;

    /**
     * @var string Resolution adaption. Valid values:
<li>`open`: Enable. When resolution adaption is enabled, `Width` indicates the long side of a video, while `Height` indicates the short side.</li>
<li>`close`: Disable. When resolution adaption is disabled, `Width` indicates the width of a video, while `Height` indicates the height.</li>

Default value: `open`.
     */
    public $ResolutionAdaptive;

    /**
     * @var integer The maximum video width (or long side) in pixels. Value range: 0 and 128-4096.
<li>If both `Width` and `Height` are `0`, the original resolution will be used.</li>
<li>If `Width` is 0 and `Height` is not, the video width will be proportionally scaled.</li>
<li>If `Width` is not 0 and `Height` is, the video height will be proportionally scaled.</li>
<li>If neither `Width` nor `Height` is 0, the specified width and height will be used.</li>

Default value: `0`.
     */
    public $Width;

    /**
     * @var integer The maximum video width (or short side) in pixels. Value range: 0 and [128, 4096].
<li>If both `Width` and `Height` are `0`, the original resolution will be used.</li>
<li>If `Width` is 0 and `Height` is not, the video width will be proportionally scaled.</li>
<li>If `Width` is not 0 and `Height` is, the video height will be proportionally scaled.</li>
<li>If neither `Width` nor `Height` is 0, the specified width and height will be used.</li>

Default value: `0`.
     */
    public $Height;

    /**
     * @var string The fill mode, which indicates how a video is resized when the video’s original aspect ratio is different from the target aspect ratio. Valid values:
<li>`stretch`: Stretch the image frame by frame to fill the entire screen. The video image may become "squashed" or "stretched" after transcoding.</li>
<li>`black`: Keep the image's original aspect ratio and fill the blank space with black bars.</li>

Default value: `stretch`.
     */
    public $FillType;

    /**
     * @var integer The number of frames between two I-frames. Valid values: 0 and 1-100000.
If this parameter is `0` or left empty, the interval will be determined by the system.
     */
    public $Gop;

    /**
     * @param string $Codec The video codec. Valid values:
<li>`libx264`: H.264</li>
<li>`libx265`: H.265</li>
<li>`av1`: AOMedia Video 1</li>
The default codec is H.264.
     * @param integer $Bitrate The video bitrate (Kbps). Value range: 0 and 128-35000.
If the value is `0`, the original video bitrate will be used.
     * @param integer $Fps The video frame rate (Hz). Value range: 0-100. If the value is `0`, the original video frame rate will be used.
     * @param string $ResolutionAdaptive Resolution adaption. Valid values:
<li>`open`: Enable. When resolution adaption is enabled, `Width` indicates the long side of a video, while `Height` indicates the short side.</li>
<li>`close`: Disable. When resolution adaption is disabled, `Width` indicates the width of a video, while `Height` indicates the height.</li>

Default value: `open`.
     * @param integer $Width The maximum video width (or long side) in pixels. Value range: 0 and 128-4096.
<li>If both `Width` and `Height` are `0`, the original resolution will be used.</li>
<li>If `Width` is 0 and `Height` is not, the video width will be proportionally scaled.</li>
<li>If `Width` is not 0 and `Height` is, the video height will be proportionally scaled.</li>
<li>If neither `Width` nor `Height` is 0, the specified width and height will be used.</li>

Default value: `0`.
     * @param integer $Height The maximum video width (or short side) in pixels. Value range: 0 and [128, 4096].
<li>If both `Width` and `Height` are `0`, the original resolution will be used.</li>
<li>If `Width` is 0 and `Height` is not, the video width will be proportionally scaled.</li>
<li>If `Width` is not 0 and `Height` is, the video height will be proportionally scaled.</li>
<li>If neither `Width` nor `Height` is 0, the specified width and height will be used.</li>

Default value: `0`.
     * @param string $FillType The fill mode, which indicates how a video is resized when the video’s original aspect ratio is different from the target aspect ratio. Valid values:
<li>`stretch`: Stretch the image frame by frame to fill the entire screen. The video image may become "squashed" or "stretched" after transcoding.</li>
<li>`black`: Keep the image's original aspect ratio and fill the blank space with black bars.</li>

Default value: `stretch`.
     * @param integer $Gop The number of frames between two I-frames. Valid values: 0 and 1-100000.
If this parameter is `0` or left empty, the interval will be determined by the system.
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
