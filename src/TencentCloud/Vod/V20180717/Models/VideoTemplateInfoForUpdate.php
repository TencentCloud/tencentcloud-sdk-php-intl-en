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
 * Video stream configuration parameter
 *
 * @method string getCodec() Obtain The video codec. Valid values:
<li>libx264: H.264</li>
<li>libx265: H.265</li>
<li>av1: AOMedia Video 1</li>
<li>H.266: H.266</li>
<font color=red>Notes:</font>
<li>The AOMedia Video 1 and H.266 codecs can only be used for MP4 files.</li>
<li> Only CRF is supported for H.266 currently.</li>
 * @method void setCodec(string $Codec) Set The video codec. Valid values:
<li>libx264: H.264</li>
<li>libx265: H.265</li>
<li>av1: AOMedia Video 1</li>
<li>H.266: H.266</li>
<font color=red>Notes:</font>
<li>The AOMedia Video 1 and H.266 codecs can only be used for MP4 files.</li>
<li> Only CRF is supported for H.266 currently.</li>
 * @method integer getFps() Obtain Video frame rate in Hz. Value range: [0,100].
If the value is 0, the frame rate will be the same as that of the source video.
 * @method void setFps(integer $Fps) Set Video frame rate in Hz. Value range: [0,100].
If the value is 0, the frame rate will be the same as that of the source video.
 * @method integer getBitrate() Obtain Bitrate of video stream in Kbps. Value range: 0 and [128, 35,000].
If the value is 0, the bitrate of the video will be the same as that of the source video.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of video stream in Kbps. Value range: 0 and [128, 35,000].
If the value is 0, the bitrate of the video will be the same as that of the source video.
 * @method string getResolutionAdaptive() Obtain Resolution adaption. Valid values:
<li>open: enabled. In this case, `Width` represents the long side of a video, while `Height` the short side;</li>
<li>close: disabled. In this case, `Width` represents the width of a video, while `Height` the height.</li>
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaption. Valid values:
<li>open: enabled. In this case, `Width` represents the long side of a video, while `Height` the short side;</li>
<li>close: disabled. In this case, `Width` represents the width of a video, while `Height` the height.</li>
 * @method integer getWidth() Obtain The maximum video width (or long side) in pixels. Value range: 0 and [128, 8192].
<li>If both `Width` and `Height` are 0, the output resolution will be the same as that of the source video.</li>
<li>If `Width` is 0 and `Height` is not, the video width will be proportionally scaled.</li>
<li>If `Width` is not 0 and `Height` is, the video height will be proportionally scaled.</li>
<li>If neither `Width` nor `Height` is 0, the specified width and height will be used.</li>
 * @method void setWidth(integer $Width) Set The maximum video width (or long side) in pixels. Value range: 0 and [128, 8192].
<li>If both `Width` and `Height` are 0, the output resolution will be the same as that of the source video.</li>
<li>If `Width` is 0 and `Height` is not, the video width will be proportionally scaled.</li>
<li>If `Width` is not 0 and `Height` is, the video height will be proportionally scaled.</li>
<li>If neither `Width` nor `Height` is 0, the specified width and height will be used.</li>
 * @method integer getHeight() Obtain The maximum video height (or short side) in pixels. Value range: 0 and [128, 8192].
 * @method void setHeight(integer $Height) Set The maximum video height (or short side) in pixels. Value range: 0 and [128, 8192].
 * @method string getFillType() Obtain Fill type. "Fill" refers to the way of processing a screenshot when its aspect ratio is different from that of the source video. Valid values:
<li>stretch: stretches video image frame by frame to fill the screen. The video image may become "squashed" or "stretched" after transcoding.</li>
<li>black: fills the uncovered area with black color, without changing the image's aspect ratio.</li>
<li>white: fills the uncovered area with white color, without changing the image's aspect ratio.</li>
<li>gauss: applies Gaussian blur to the uncovered area, without changing the image's aspect ratio.</li>
 * @method void setFillType(string $FillType) Set Fill type. "Fill" refers to the way of processing a screenshot when its aspect ratio is different from that of the source video. Valid values:
<li>stretch: stretches video image frame by frame to fill the screen. The video image may become "squashed" or "stretched" after transcoding.</li>
<li>black: fills the uncovered area with black color, without changing the image's aspect ratio.</li>
<li>white: fills the uncovered area with white color, without changing the image's aspect ratio.</li>
<li>gauss: applies Gaussian blur to the uncovered area, without changing the image's aspect ratio.</li>
 * @method integer getVcrf() Obtain The video constant rate factor (CRF). Value range: 1-51. `0` means to disable this parameter.

<font color=red>Notes:</font>
<li>If this parameter is specified, CRF encoding will be used and the bitrate parameter will be ignored.</li>
<li>If `Codec` is `H.266`, this parameter is required (`28` is recommended).</li>
<li>We don’t recommend using this parameter unless you have special requirements.</li>
 * @method void setVcrf(integer $Vcrf) Set The video constant rate factor (CRF). Value range: 1-51. `0` means to disable this parameter.

<font color=red>Notes:</font>
<li>If this parameter is specified, CRF encoding will be used and the bitrate parameter will be ignored.</li>
<li>If `Codec` is `H.266`, this parameter is required (`28` is recommended).</li>
<li>We don’t recommend using this parameter unless you have special requirements.</li>
 * @method integer getGop() Obtain I-frame interval in frames. Valid values: 0 and 1-100000.
When this parameter is set to 0 or left empty, `Gop` will be automatically set.
 * @method void setGop(integer $Gop) Set I-frame interval in frames. Valid values: 0 and 1-100000.
When this parameter is set to 0 or left empty, `Gop` will be automatically set.
 * @method string getPreserveHDRSwitch() Obtain Whether to output an HDR (high dynamic range) video if the source video is HDR. Valid values:
<li>ON: If the source video is HDR, output an HDR video; if not, output an SDR (standard dynamic range) video.</li>
<li>OFF: Output an SDR video regardless of whether the source video is HDR.</li>
 * @method void setPreserveHDRSwitch(string $PreserveHDRSwitch) Set Whether to output an HDR (high dynamic range) video if the source video is HDR. Valid values:
<li>ON: If the source video is HDR, output an HDR video; if not, output an SDR (standard dynamic range) video.</li>
<li>OFF: Output an SDR video regardless of whether the source video is HDR.</li>
 * @method string getCodecTag() Obtain The codec tag. This parameter is valid only if the H.265 codec is used. Valid values:
<li>hvc1</li>
<li>hev1</li>
Default value: hvc1.
 * @method void setCodecTag(string $CodecTag) Set The codec tag. This parameter is valid only if the H.265 codec is used. Valid values:
<li>hvc1</li>
<li>hev1</li>
Default value: hvc1.
 */
class VideoTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string The video codec. Valid values:
<li>libx264: H.264</li>
<li>libx265: H.265</li>
<li>av1: AOMedia Video 1</li>
<li>H.266: H.266</li>
<font color=red>Notes:</font>
<li>The AOMedia Video 1 and H.266 codecs can only be used for MP4 files.</li>
<li> Only CRF is supported for H.266 currently.</li>
     */
    public $Codec;

    /**
     * @var integer Video frame rate in Hz. Value range: [0,100].
If the value is 0, the frame rate will be the same as that of the source video.
     */
    public $Fps;

    /**
     * @var integer Bitrate of video stream in Kbps. Value range: 0 and [128, 35,000].
If the value is 0, the bitrate of the video will be the same as that of the source video.
     */
    public $Bitrate;

    /**
     * @var string Resolution adaption. Valid values:
<li>open: enabled. In this case, `Width` represents the long side of a video, while `Height` the short side;</li>
<li>close: disabled. In this case, `Width` represents the width of a video, while `Height` the height.</li>
     */
    public $ResolutionAdaptive;

    /**
     * @var integer The maximum video width (or long side) in pixels. Value range: 0 and [128, 8192].
<li>If both `Width` and `Height` are 0, the output resolution will be the same as that of the source video.</li>
<li>If `Width` is 0 and `Height` is not, the video width will be proportionally scaled.</li>
<li>If `Width` is not 0 and `Height` is, the video height will be proportionally scaled.</li>
<li>If neither `Width` nor `Height` is 0, the specified width and height will be used.</li>
     */
    public $Width;

    /**
     * @var integer The maximum video height (or short side) in pixels. Value range: 0 and [128, 8192].
     */
    public $Height;

    /**
     * @var string Fill type. "Fill" refers to the way of processing a screenshot when its aspect ratio is different from that of the source video. Valid values:
<li>stretch: stretches video image frame by frame to fill the screen. The video image may become "squashed" or "stretched" after transcoding.</li>
<li>black: fills the uncovered area with black color, without changing the image's aspect ratio.</li>
<li>white: fills the uncovered area with white color, without changing the image's aspect ratio.</li>
<li>gauss: applies Gaussian blur to the uncovered area, without changing the image's aspect ratio.</li>
     */
    public $FillType;

    /**
     * @var integer The video constant rate factor (CRF). Value range: 1-51. `0` means to disable this parameter.

<font color=red>Notes:</font>
<li>If this parameter is specified, CRF encoding will be used and the bitrate parameter will be ignored.</li>
<li>If `Codec` is `H.266`, this parameter is required (`28` is recommended).</li>
<li>We don’t recommend using this parameter unless you have special requirements.</li>
     */
    public $Vcrf;

    /**
     * @var integer I-frame interval in frames. Valid values: 0 and 1-100000.
When this parameter is set to 0 or left empty, `Gop` will be automatically set.
     */
    public $Gop;

    /**
     * @var string Whether to output an HDR (high dynamic range) video if the source video is HDR. Valid values:
<li>ON: If the source video is HDR, output an HDR video; if not, output an SDR (standard dynamic range) video.</li>
<li>OFF: Output an SDR video regardless of whether the source video is HDR.</li>
     */
    public $PreserveHDRSwitch;

    /**
     * @var string The codec tag. This parameter is valid only if the H.265 codec is used. Valid values:
<li>hvc1</li>
<li>hev1</li>
Default value: hvc1.
     */
    public $CodecTag;

    /**
     * @param string $Codec The video codec. Valid values:
<li>libx264: H.264</li>
<li>libx265: H.265</li>
<li>av1: AOMedia Video 1</li>
<li>H.266: H.266</li>
<font color=red>Notes:</font>
<li>The AOMedia Video 1 and H.266 codecs can only be used for MP4 files.</li>
<li> Only CRF is supported for H.266 currently.</li>
     * @param integer $Fps Video frame rate in Hz. Value range: [0,100].
If the value is 0, the frame rate will be the same as that of the source video.
     * @param integer $Bitrate Bitrate of video stream in Kbps. Value range: 0 and [128, 35,000].
If the value is 0, the bitrate of the video will be the same as that of the source video.
     * @param string $ResolutionAdaptive Resolution adaption. Valid values:
<li>open: enabled. In this case, `Width` represents the long side of a video, while `Height` the short side;</li>
<li>close: disabled. In this case, `Width` represents the width of a video, while `Height` the height.</li>
     * @param integer $Width The maximum video width (or long side) in pixels. Value range: 0 and [128, 8192].
<li>If both `Width` and `Height` are 0, the output resolution will be the same as that of the source video.</li>
<li>If `Width` is 0 and `Height` is not, the video width will be proportionally scaled.</li>
<li>If `Width` is not 0 and `Height` is, the video height will be proportionally scaled.</li>
<li>If neither `Width` nor `Height` is 0, the specified width and height will be used.</li>
     * @param integer $Height The maximum video height (or short side) in pixels. Value range: 0 and [128, 8192].
     * @param string $FillType Fill type. "Fill" refers to the way of processing a screenshot when its aspect ratio is different from that of the source video. Valid values:
<li>stretch: stretches video image frame by frame to fill the screen. The video image may become "squashed" or "stretched" after transcoding.</li>
<li>black: fills the uncovered area with black color, without changing the image's aspect ratio.</li>
<li>white: fills the uncovered area with white color, without changing the image's aspect ratio.</li>
<li>gauss: applies Gaussian blur to the uncovered area, without changing the image's aspect ratio.</li>
     * @param integer $Vcrf The video constant rate factor (CRF). Value range: 1-51. `0` means to disable this parameter.

<font color=red>Notes:</font>
<li>If this parameter is specified, CRF encoding will be used and the bitrate parameter will be ignored.</li>
<li>If `Codec` is `H.266`, this parameter is required (`28` is recommended).</li>
<li>We don’t recommend using this parameter unless you have special requirements.</li>
     * @param integer $Gop I-frame interval in frames. Valid values: 0 and 1-100000.
When this parameter is set to 0 or left empty, `Gop` will be automatically set.
     * @param string $PreserveHDRSwitch Whether to output an HDR (high dynamic range) video if the source video is HDR. Valid values:
<li>ON: If the source video is HDR, output an HDR video; if not, output an SDR (standard dynamic range) video.</li>
<li>OFF: Output an SDR video regardless of whether the source video is HDR.</li>
     * @param string $CodecTag The codec tag. This parameter is valid only if the H.265 codec is used. Valid values:
<li>hvc1</li>
<li>hev1</li>
Default value: hvc1.
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

        if (array_key_exists("Vcrf",$param) and $param["Vcrf"] !== null) {
            $this->Vcrf = $param["Vcrf"];
        }

        if (array_key_exists("Gop",$param) and $param["Gop"] !== null) {
            $this->Gop = $param["Gop"];
        }

        if (array_key_exists("PreserveHDRSwitch",$param) and $param["PreserveHDRSwitch"] !== null) {
            $this->PreserveHDRSwitch = $param["PreserveHDRSwitch"];
        }

        if (array_key_exists("CodecTag",$param) and $param["CodecTag"] !== null) {
            $this->CodecTag = $param["CodecTag"];
        }
    }
}
