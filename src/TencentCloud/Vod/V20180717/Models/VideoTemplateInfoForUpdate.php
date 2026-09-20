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
 * Video stream configuration parameters
 *
 * @method string getCodec() Obtain <p>Video stream encoding format. Available values:</p><li>libx264: H.264 encoding;</li><li>libx265: H.265 encoding;</li><li>av1: AOMedia Video 1 encoding;</li><li>H.266: H.266 encoding.</li><font color="red">Note:</font><li>av1 and H.266 encoding containers currently only support mp4;</li><li>H.266 currently only supports the fixed CRF bitrate control method.</li>
 * @method void setCodec(string $Codec) Set <p>Video stream encoding format. Available values:</p><li>libx264: H.264 encoding;</li><li>libx265: H.265 encoding;</li><li>av1: AOMedia Video 1 encoding;</li><li>H.266: H.266 encoding.</li><font color="red">Note:</font><li>av1 and H.266 encoding containers currently only support mp4;</li><li>H.266 currently only supports the fixed CRF bitrate control method.</li>
 * @method integer getFps() Obtain <p>Video frame rate. Value range: [0, 100]. Unit: Hz.<br>When the value is 0, it means the frame rate is consistent with the original video.</p>
 * @method void setFps(integer $Fps) Set <p>Video frame rate. Value range: [0, 100]. Unit: Hz.<br>When the value is 0, it means the frame rate is consistent with the original video.</p>
 * @method integer getBitrate() Obtain <p>Bitrate of video stream. Value range: 0 and [128, 100000]. Unit: kbps.<br>When the value is 0, it means VOD automatically sets the bitrate.</p>
 * @method void setBitrate(integer $Bitrate) Set <p>Bitrate of video stream. Value range: 0 and [128, 100000]. Unit: kbps.<br>When the value is 0, it means VOD automatically sets the bitrate.</p>
 * @method string getResolutionAdaptive() Obtain <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side.</li><li>close: disable. At this point, Width represents the width of the video, and Height represents the height.</li>
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side.</li><li>close: disable. At this point, Width represents the width of the video, and Height represents the height.</li>
 * @method integer getWidth() Obtain <p>The maximum value of the video stream width (or long side). Valid values: 0 and [128, 8192]. Unit: px.</p><li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>
 * @method void setWidth(integer $Width) Set <p>The maximum value of the video stream width (or long side). Valid values: 0 and [128, 8192]. Unit: px.</p><li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>
 * @method integer getHeight() Obtain <p>Maximum height (or short side) of the video stream. Value range: 0 and [128, 8192]. Unit: px.</p>
 * @method void setHeight(integer $Height) Set <p>Maximum height (or short side) of the video stream. Value range: 0 and [128, 8192]. Unit: px.</p>
 * @method string getFillType() Obtain <p>Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "filling". Available filling modes:</p><li>stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched".</li><li>black: Keep the video aspect ratio unchanged and fill the rest of the edges with black.</li><li>white: Keep the video aspect ratio unchanged and fill the rest of the edges with white.</li><li>gauss: Gaussian blur. Keep the video aspect ratio unchanged and use Gaussian blur filling for the rest of the edges.</li>
 * @method void setFillType(string $FillType) Set <p>Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "filling". Available filling modes:</p><li>stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched".</li><li>black: Keep the video aspect ratio unchanged and fill the rest of the edges with black.</li><li>white: Keep the video aspect ratio unchanged and fill the rest of the edges with white.</li><li>gauss: Gaussian blur. Keep the video aspect ratio unchanged and use Gaussian blur filling for the rest of the edges.</li>
 * @method integer getVcrf() Obtain <p>Control factor for constant video bitrate. Value range: [1, 51]. 0 indicates that it is disabled.</p><p><font color="red">Note:</font></p><li>If you specify this parameter, the bitrate control mode for CRF will be used to transcode (video bitrate will no longer take effect);</li><li>When the encoding format of the specified video stream is H.266, this field is required. Recommended value: 28;</li><li>If there are no special requirements, it is not recommended to specify this parameter.</li>
 * @method void setVcrf(integer $Vcrf) Set <p>Control factor for constant video bitrate. Value range: [1, 51]. 0 indicates that it is disabled.</p><p><font color="red">Note:</font></p><li>If you specify this parameter, the bitrate control mode for CRF will be used to transcode (video bitrate will no longer take effect);</li><li>When the encoding format of the specified video stream is H.266, this field is required. Recommended value: 28;</li><li>If there are no special requirements, it is not recommended to specify this parameter.</li>
 * @method integer getGop() Obtain <p>Interval between I-frames, in frames. Value range: 0 and [1, 100000].<br>When it is set to 0 or not set, the system will automatically set the gop length.</p>
 * @method void setGop(integer $Gop) Set <p>Interval between I-frames, in frames. Value range: 0 and [1, 100000].<br>When it is set to 0 or not set, the system will automatically set the gop length.</p>
 * @method string getPreserveHDRSwitch() Obtain <p>When the original video is HDR (High Dynamic Range), whether the transcoding output remains HDR. Value range:</p><li>ON: If the original file is HDR, the transcoding output remains HDR; otherwise, the transcoding output is SDR (Standard Dynamic Range).</li><li>OFF: Regardless of whether the original file is HDR or SDR, the transcoding output is SDR.</li>
 * @method void setPreserveHDRSwitch(string $PreserveHDRSwitch) Set <p>When the original video is HDR (High Dynamic Range), whether the transcoding output remains HDR. Value range:</p><li>ON: If the original file is HDR, the transcoding output remains HDR; otherwise, the transcoding output is SDR (Standard Dynamic Range).</li><li>OFF: Regardless of whether the original file is HDR or SDR, the transcoding output is SDR.</li>
 * @method string getCodecTag() Obtain <p>Encoding tag. It is valid only when the video stream encoding format is H.265. Available values:</p><li>hvc1 refers to the hvc1 tag;</li><li>hev1 refers to the hev1 tag. </li>Default value: hvc1.
 * @method void setCodecTag(string $CodecTag) Set <p>Encoding tag. It is valid only when the video stream encoding format is H.265. Available values:</p><li>hvc1 refers to the hvc1 tag;</li><li>hev1 refers to the hev1 tag. </li>Default value: hvc1.
 * @method string getGopUnit() Obtain <p>Gop value unit.</p><p>Enumeration values:</p><ul><li>frame: number of frames.</li><li>second: seconds.</li></ul><p>Default value: frame</p>
 * @method void setGopUnit(string $GopUnit) Set <p>Gop value unit.</p><p>Enumeration values:</p><ul><li>frame: number of frames.</li><li>second: seconds.</li></ul><p>Default value: frame</p>
 * @method string getMode() Obtain <p>Bitrate control mode.</p><p>Enumeration values:</p><ul><li>VBR: Variable Bit Rate. The output bitrate is adjusted based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements.</li><li>ABR: Average Bit Rate. It minimizes overall bitrate while maintaining a stable average bitrate of the output video, allowing short-term bitrate fluctuation. It is suitable for scenarios where maintaining a certain quality while minimizing overall bitrate is desired.</li><li>CBR: Constant Bit Rate. The output bitrate remains constant during video encoding, regardless of image complexity. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming.</li><li>VCRF: Constant Rate Factor. A quality factor is set to control video quality and achieve constant quality encoding of videos. The bitrate is automatically adjusted based on content complexity. It is suitable for scenarios where maintaining a certain image quality is desired.</li></ul><p>Default value: VBR</p>
 * @method void setMode(string $Mode) Set <p>Bitrate control mode.</p><p>Enumeration values:</p><ul><li>VBR: Variable Bit Rate. The output bitrate is adjusted based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements.</li><li>ABR: Average Bit Rate. It minimizes overall bitrate while maintaining a stable average bitrate of the output video, allowing short-term bitrate fluctuation. It is suitable for scenarios where maintaining a certain quality while minimizing overall bitrate is desired.</li><li>CBR: Constant Bit Rate. The output bitrate remains constant during video encoding, regardless of image complexity. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming.</li><li>VCRF: Constant Rate Factor. A quality factor is set to control video quality and achieve constant quality encoding of videos. The bitrate is automatically adjusted based on content complexity. It is suitable for scenarios where maintaining a certain image quality is desired.</li></ul><p>Default value: VBR</p>
 * @method integer getBframes() Obtain <p>Maximum number of consecutive B-frames. Set to auto by default, and -1 means change to automatic.</p><p>Value range: [-1, 16]</p>
 * @method void setBframes(integer $Bframes) Set <p>Maximum number of consecutive B-frames. Set to auto by default, and -1 means change to automatic.</p><p>Value range: [-1, 16]</p>
 * @method integer getHlsTime() Obtain <p>Average duration of slices. 0 or left empty means automatic, and an appropriate segment duration will be automatically chosen based on video features such as GOP.</p><p>Value range: [0, 10]</p><p>Unit: seconds</p><p>Supports only transcoding templates, not adaptive bitrate stream templates.</p>
 * @method void setHlsTime(integer $HlsTime) Set <p>Average duration of slices. 0 or left empty means automatic, and an appropriate segment duration will be automatically chosen based on video features such as GOP.</p><p>Value range: [0, 10]</p><p>Unit: seconds</p><p>Supports only transcoding templates, not adaptive bitrate stream templates.</p>
 * @method string getVideoProfile() Obtain <p>A predefined group of encoding tools or features allowed by the video encoding standard, suitable for different scenarios.</p><p>Enumeration values:</p><ul><li>baseline: Supports only I/p frames and non-interlaced scenarios, suitable for video calls, mobile video, and other scenarios.</li><li>main: Mainstream Profile, provides I-frames, p-frames, and B-frames, and supports both interlaced and non-interlaced modes. Mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices.</li><li>high: Highest encoding level, adds 8X8 prediction on top of the main Profile and supports custom quantification. Widely used in Blu-ray storage, HDTV, and other scenarios.</li><li>default: Automatic filling along with the original video.  </li></ul><p>default value: default</p><p>This configuration item is valid only when Codec is libx264.</p>
 * @method void setVideoProfile(string $VideoProfile) Set <p>A predefined group of encoding tools or features allowed by the video encoding standard, suitable for different scenarios.</p><p>Enumeration values:</p><ul><li>baseline: Supports only I/p frames and non-interlaced scenarios, suitable for video calls, mobile video, and other scenarios.</li><li>main: Mainstream Profile, provides I-frames, p-frames, and B-frames, and supports both interlaced and non-interlaced modes. Mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices.</li><li>high: Highest encoding level, adds 8X8 prediction on top of the main Profile and supports custom quantification. Widely used in Blu-ray storage, HDTV, and other scenarios.</li><li>default: Automatic filling along with the original video.  </li></ul><p>default value: default</p><p>This configuration item is valid only when Codec is libx264.</p>
 */
class VideoTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string <p>Video stream encoding format. Available values:</p><li>libx264: H.264 encoding;</li><li>libx265: H.265 encoding;</li><li>av1: AOMedia Video 1 encoding;</li><li>H.266: H.266 encoding.</li><font color="red">Note:</font><li>av1 and H.266 encoding containers currently only support mp4;</li><li>H.266 currently only supports the fixed CRF bitrate control method.</li>
     */
    public $Codec;

    /**
     * @var integer <p>Video frame rate. Value range: [0, 100]. Unit: Hz.<br>When the value is 0, it means the frame rate is consistent with the original video.</p>
     */
    public $Fps;

    /**
     * @var integer <p>Bitrate of video stream. Value range: 0 and [128, 100000]. Unit: kbps.<br>When the value is 0, it means VOD automatically sets the bitrate.</p>
     */
    public $Bitrate;

    /**
     * @var string <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side.</li><li>close: disable. At this point, Width represents the width of the video, and Height represents the height.</li>
     */
    public $ResolutionAdaptive;

    /**
     * @var integer <p>The maximum value of the video stream width (or long side). Valid values: 0 and [128, 8192]. Unit: px.</p><li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>
     */
    public $Width;

    /**
     * @var integer <p>Maximum height (or short side) of the video stream. Value range: 0 and [128, 8192]. Unit: px.</p>
     */
    public $Height;

    /**
     * @var string <p>Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "filling". Available filling modes:</p><li>stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched".</li><li>black: Keep the video aspect ratio unchanged and fill the rest of the edges with black.</li><li>white: Keep the video aspect ratio unchanged and fill the rest of the edges with white.</li><li>gauss: Gaussian blur. Keep the video aspect ratio unchanged and use Gaussian blur filling for the rest of the edges.</li>
     */
    public $FillType;

    /**
     * @var integer <p>Control factor for constant video bitrate. Value range: [1, 51]. 0 indicates that it is disabled.</p><p><font color="red">Note:</font></p><li>If you specify this parameter, the bitrate control mode for CRF will be used to transcode (video bitrate will no longer take effect);</li><li>When the encoding format of the specified video stream is H.266, this field is required. Recommended value: 28;</li><li>If there are no special requirements, it is not recommended to specify this parameter.</li>
     */
    public $Vcrf;

    /**
     * @var integer <p>Interval between I-frames, in frames. Value range: 0 and [1, 100000].<br>When it is set to 0 or not set, the system will automatically set the gop length.</p>
     */
    public $Gop;

    /**
     * @var string <p>When the original video is HDR (High Dynamic Range), whether the transcoding output remains HDR. Value range:</p><li>ON: If the original file is HDR, the transcoding output remains HDR; otherwise, the transcoding output is SDR (Standard Dynamic Range).</li><li>OFF: Regardless of whether the original file is HDR or SDR, the transcoding output is SDR.</li>
     */
    public $PreserveHDRSwitch;

    /**
     * @var string <p>Encoding tag. It is valid only when the video stream encoding format is H.265. Available values:</p><li>hvc1 refers to the hvc1 tag;</li><li>hev1 refers to the hev1 tag. </li>Default value: hvc1.
     */
    public $CodecTag;

    /**
     * @var string <p>Gop value unit.</p><p>Enumeration values:</p><ul><li>frame: number of frames.</li><li>second: seconds.</li></ul><p>Default value: frame</p>
     */
    public $GopUnit;

    /**
     * @var string <p>Bitrate control mode.</p><p>Enumeration values:</p><ul><li>VBR: Variable Bit Rate. The output bitrate is adjusted based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements.</li><li>ABR: Average Bit Rate. It minimizes overall bitrate while maintaining a stable average bitrate of the output video, allowing short-term bitrate fluctuation. It is suitable for scenarios where maintaining a certain quality while minimizing overall bitrate is desired.</li><li>CBR: Constant Bit Rate. The output bitrate remains constant during video encoding, regardless of image complexity. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming.</li><li>VCRF: Constant Rate Factor. A quality factor is set to control video quality and achieve constant quality encoding of videos. The bitrate is automatically adjusted based on content complexity. It is suitable for scenarios where maintaining a certain image quality is desired.</li></ul><p>Default value: VBR</p>
     */
    public $Mode;

    /**
     * @var integer <p>Maximum number of consecutive B-frames. Set to auto by default, and -1 means change to automatic.</p><p>Value range: [-1, 16]</p>
     */
    public $Bframes;

    /**
     * @var integer <p>Average duration of slices. 0 or left empty means automatic, and an appropriate segment duration will be automatically chosen based on video features such as GOP.</p><p>Value range: [0, 10]</p><p>Unit: seconds</p><p>Supports only transcoding templates, not adaptive bitrate stream templates.</p>
     */
    public $HlsTime;

    /**
     * @var string <p>A predefined group of encoding tools or features allowed by the video encoding standard, suitable for different scenarios.</p><p>Enumeration values:</p><ul><li>baseline: Supports only I/p frames and non-interlaced scenarios, suitable for video calls, mobile video, and other scenarios.</li><li>main: Mainstream Profile, provides I-frames, p-frames, and B-frames, and supports both interlaced and non-interlaced modes. Mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices.</li><li>high: Highest encoding level, adds 8X8 prediction on top of the main Profile and supports custom quantification. Widely used in Blu-ray storage, HDTV, and other scenarios.</li><li>default: Automatic filling along with the original video.  </li></ul><p>default value: default</p><p>This configuration item is valid only when Codec is libx264.</p>
     */
    public $VideoProfile;

    /**
     * @param string $Codec <p>Video stream encoding format. Available values:</p><li>libx264: H.264 encoding;</li><li>libx265: H.265 encoding;</li><li>av1: AOMedia Video 1 encoding;</li><li>H.266: H.266 encoding.</li><font color="red">Note:</font><li>av1 and H.266 encoding containers currently only support mp4;</li><li>H.266 currently only supports the fixed CRF bitrate control method.</li>
     * @param integer $Fps <p>Video frame rate. Value range: [0, 100]. Unit: Hz.<br>When the value is 0, it means the frame rate is consistent with the original video.</p>
     * @param integer $Bitrate <p>Bitrate of video stream. Value range: 0 and [128, 100000]. Unit: kbps.<br>When the value is 0, it means VOD automatically sets the bitrate.</p>
     * @param string $ResolutionAdaptive <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side.</li><li>close: disable. At this point, Width represents the width of the video, and Height represents the height.</li>
     * @param integer $Width <p>The maximum value of the video stream width (or long side). Valid values: 0 and [128, 8192]. Unit: px.</p><li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>
     * @param integer $Height <p>Maximum height (or short side) of the video stream. Value range: 0 and [128, 8192]. Unit: px.</p>
     * @param string $FillType <p>Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "filling". Available filling modes:</p><li>stretch: Stretch each frame to fill the entire screen, which may cause the transcoded video to be "squashed" or "stretched".</li><li>black: Keep the video aspect ratio unchanged and fill the rest of the edges with black.</li><li>white: Keep the video aspect ratio unchanged and fill the rest of the edges with white.</li><li>gauss: Gaussian blur. Keep the video aspect ratio unchanged and use Gaussian blur filling for the rest of the edges.</li>
     * @param integer $Vcrf <p>Control factor for constant video bitrate. Value range: [1, 51]. 0 indicates that it is disabled.</p><p><font color="red">Note:</font></p><li>If you specify this parameter, the bitrate control mode for CRF will be used to transcode (video bitrate will no longer take effect);</li><li>When the encoding format of the specified video stream is H.266, this field is required. Recommended value: 28;</li><li>If there are no special requirements, it is not recommended to specify this parameter.</li>
     * @param integer $Gop <p>Interval between I-frames, in frames. Value range: 0 and [1, 100000].<br>When it is set to 0 or not set, the system will automatically set the gop length.</p>
     * @param string $PreserveHDRSwitch <p>When the original video is HDR (High Dynamic Range), whether the transcoding output remains HDR. Value range:</p><li>ON: If the original file is HDR, the transcoding output remains HDR; otherwise, the transcoding output is SDR (Standard Dynamic Range).</li><li>OFF: Regardless of whether the original file is HDR or SDR, the transcoding output is SDR.</li>
     * @param string $CodecTag <p>Encoding tag. It is valid only when the video stream encoding format is H.265. Available values:</p><li>hvc1 refers to the hvc1 tag;</li><li>hev1 refers to the hev1 tag. </li>Default value: hvc1.
     * @param string $GopUnit <p>Gop value unit.</p><p>Enumeration values:</p><ul><li>frame: number of frames.</li><li>second: seconds.</li></ul><p>Default value: frame</p>
     * @param string $Mode <p>Bitrate control mode.</p><p>Enumeration values:</p><ul><li>VBR: Variable Bit Rate. The output bitrate is adjusted based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements.</li><li>ABR: Average Bit Rate. It minimizes overall bitrate while maintaining a stable average bitrate of the output video, allowing short-term bitrate fluctuation. It is suitable for scenarios where maintaining a certain quality while minimizing overall bitrate is desired.</li><li>CBR: Constant Bit Rate. The output bitrate remains constant during video encoding, regardless of image complexity. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming.</li><li>VCRF: Constant Rate Factor. A quality factor is set to control video quality and achieve constant quality encoding of videos. The bitrate is automatically adjusted based on content complexity. It is suitable for scenarios where maintaining a certain image quality is desired.</li></ul><p>Default value: VBR</p>
     * @param integer $Bframes <p>Maximum number of consecutive B-frames. Set to auto by default, and -1 means change to automatic.</p><p>Value range: [-1, 16]</p>
     * @param integer $HlsTime <p>Average duration of slices. 0 or left empty means automatic, and an appropriate segment duration will be automatically chosen based on video features such as GOP.</p><p>Value range: [0, 10]</p><p>Unit: seconds</p><p>Supports only transcoding templates, not adaptive bitrate stream templates.</p>
     * @param string $VideoProfile <p>A predefined group of encoding tools or features allowed by the video encoding standard, suitable for different scenarios.</p><p>Enumeration values:</p><ul><li>baseline: Supports only I/p frames and non-interlaced scenarios, suitable for video calls, mobile video, and other scenarios.</li><li>main: Mainstream Profile, provides I-frames, p-frames, and B-frames, and supports both interlaced and non-interlaced modes. Mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices.</li><li>high: Highest encoding level, adds 8X8 prediction on top of the main Profile and supports custom quantification. Widely used in Blu-ray storage, HDTV, and other scenarios.</li><li>default: Automatic filling along with the original video.  </li></ul><p>default value: default</p><p>This configuration item is valid only when Codec is libx264.</p>
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

        if (array_key_exists("GopUnit",$param) and $param["GopUnit"] !== null) {
            $this->GopUnit = $param["GopUnit"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Bframes",$param) and $param["Bframes"] !== null) {
            $this->Bframes = $param["Bframes"];
        }

        if (array_key_exists("HlsTime",$param) and $param["HlsTime"] !== null) {
            $this->HlsTime = $param["HlsTime"];
        }

        if (array_key_exists("VideoProfile",$param) and $param["VideoProfile"] !== null) {
            $this->VideoProfile = $param["VideoProfile"];
        }
    }
}
