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
 * @method string getCodec() Obtain <p>Video stream encoding format. Available values:</p><li>libx264: H.264 encoding;</li><li>libx265: H.265 encoding;</li><li>av1: AOMedia Video 1 encoding;</li><li>H.266: H.266 encoding.</li><font color="red">Note:</font><li> av1 and H.266 encoding containers currently only support mp4;</li><li> H.266 currently only supports the fixed CRF bitrate control method. </li>
 * @method void setCodec(string $Codec) Set <p>Video stream encoding format. Available values:</p><li>libx264: H.264 encoding;</li><li>libx265: H.265 encoding;</li><li>av1: AOMedia Video 1 encoding;</li><li>H.266: H.266 encoding.</li><font color="red">Note:</font><li> av1 and H.266 encoding containers currently only support mp4;</li><li> H.266 currently only supports the fixed CRF bitrate control method. </li>
 * @method integer getFps() Obtain <p>Video frame rate. Value range: [0, 100]. Unit: Hz.<br>When the value is 0, it means the frame rate is consistent with the original video.</p>
 * @method void setFps(integer $Fps) Set <p>Video frame rate. Value range: [0, 100]. Unit: Hz.<br>When the value is 0, it means the frame rate is consistent with the original video.</p>
 * @method integer getBitrate() Obtain <p>Bitrate of video stream. Value range: 0 and [128, 100000]. Unit: kbps.<br>When the value is 0, it means VOD automatically sets the bitrate.</p>
 * @method void setBitrate(integer $Bitrate) Set <p>Bitrate of video stream. Value range: 0 and [128, 100000]. Unit: kbps.<br>When the value is 0, it means VOD automatically sets the bitrate.</p>
 * @method string getResolutionAdaptive() Obtain <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side;</li><li>close: disable. At this point, Width represents the video width, and Height represents the video height.</li>Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side;</li><li>close: disable. At this point, Width represents the video width, and Height represents the video height.</li>Default value: open.
 * @method integer getWidth() Obtain <p>The maximum value of the video stream width (or long side). Valid values: 0 and [128, 8192]. Unit: px.</p><li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
 * @method void setWidth(integer $Width) Set <p>The maximum value of the video stream width (or long side). Valid values: 0 and [128, 8192]. Unit: px.</p><li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
 * @method integer getHeight() Obtain <p>The maximum value of the video stream height (or short side). Valid values: 0 and [128, 8192]. Unit: px.</p><li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
 * @method void setHeight(integer $Height) Set <p>The maximum value of the video stream height (or short side). Valid values: 0 and [128, 8192]. Unit: px.</p><li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
 * @method string getFillType() Obtain <p>Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "fill". Optional filling modes:</p><li>stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched".</li><li>black: Keep the video aspect ratio unchanged, with edges filled with black.</li><li>white: Keep the video aspect ratio unchanged, with edge remainder filled with white.</li><li>gauss: Gaussian blur. Keep the video aspect ratio unchanged, with Gaussian blur filling for the rest of the edges.</li>Default value: black.
 * @method void setFillType(string $FillType) Set <p>Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "fill". Optional filling modes:</p><li>stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched".</li><li>black: Keep the video aspect ratio unchanged, with edges filled with black.</li><li>white: Keep the video aspect ratio unchanged, with edge remainder filled with white.</li><li>gauss: Gaussian blur. Keep the video aspect ratio unchanged, with Gaussian blur filling for the rest of the edges.</li>Default value: black.
 * @method integer getVcrf() Obtain <p>Control factor for constant video bitrate. Value range: [1, 51].</p><p><font color="red">Note:</font></p><li>If you specify this parameter, the bitrate control mode for CRF will be used to transcode (video bitrate will no longer take effect);</li><li>When the encoding format of the specified video stream is H.266, this field is required. Recommended value: 28;</li><li>If there are no special requirements, it is not recommended to specify this parameter.</li>
 * @method void setVcrf(integer $Vcrf) Set <p>Control factor for constant video bitrate. Value range: [1, 51].</p><p><font color="red">Note:</font></p><li>If you specify this parameter, the bitrate control mode for CRF will be used to transcode (video bitrate will no longer take effect);</li><li>When the encoding format of the specified video stream is H.266, this field is required. Recommended value: 28;</li><li>If there are no special requirements, it is not recommended to specify this parameter.</li>
 * @method integer getGop() Obtain <p>Interval between I-frames, in frames. Value range: 0 and [1, 100000].<br>When it is set to 0 or not set, the system will automatically set the gop length.</p>
 * @method void setGop(integer $Gop) Set <p>Interval between I-frames, in frames. Value range: 0 and [1, 100000].<br>When it is set to 0 or not set, the system will automatically set the gop length.</p>
 * @method string getGopUnit() Obtain <p>Gop value unit.</p><p>Enumeration values:</p><ul><li>frame: Indicates the number of frames.</li><li>second: Indicates the number of seconds.</li></ul><p>Default value: frame</p>
 * @method void setGopUnit(string $GopUnit) Set <p>Gop value unit.</p><p>Enumeration values:</p><ul><li>frame: Indicates the number of frames.</li><li>second: Indicates the number of seconds.</li></ul><p>Default value: frame</p>
 * @method string getPreserveHDRSwitch() Obtain <p>Whether the transcoding output remains HDR when the raw video is HDR (High Dynamic Range). Value range:</p><li>ON: If the original file is HDR, the transcoding output remains HDR; otherwise, the transcoding output is SDR (Standard Dynamic Range).</li><li>OFF: Regardless of whether the original file is HDR or SDR, the transcoding output is SDR.</li>Default value: OFF.
 * @method void setPreserveHDRSwitch(string $PreserveHDRSwitch) Set <p>Whether the transcoding output remains HDR when the raw video is HDR (High Dynamic Range). Value range:</p><li>ON: If the original file is HDR, the transcoding output remains HDR; otherwise, the transcoding output is SDR (Standard Dynamic Range).</li><li>OFF: Regardless of whether the original file is HDR or SDR, the transcoding output is SDR.</li>Default value: OFF.
 * @method string getCodecTag() Obtain <p>Encoding tag. It is valid only when the video stream encoding format is H.265. Available values:</p><li>hvc1: hvc1 tag</li><li>hev1: hev1 tag</li>Default value: hvc1.
 * @method void setCodecTag(string $CodecTag) Set <p>Encoding tag. It is valid only when the video stream encoding format is H.265. Available values:</p><li>hvc1: hvc1 tag</li><li>hev1: hev1 tag</li>Default value: hvc1.
 * @method string getMode() Obtain <p>Bitrate control mode.</p><p>Enumeration values:</p><ul><li>VBR: Variable Bit Rate. It dynamically adjusts the output bitrate based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements.</li><li>ABR: Average Bit Rate. It tries to stabilize the average bitrate of the output video as much as possible while allowing short-term bitrate fluctuation. It is suitable for scenarios where you need to minimize the overall bitrate while maintaining a certain image quality.</li><li>CBR: Constant Bit Rate. It maintains a constant output bitrate during video encoding regardless of changes in image complexity. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming.</li><li>VCRF: Constant quality factor. It controls video quality by setting a quality factor to achieve constant quality encoding of videos. The bitrate is automatically adjusted based on content complexity. It is suitable for scenarios where maintaining a certain image quality is desired.</li></ul><p>Default value: VBR</p>
 * @method void setMode(string $Mode) Set <p>Bitrate control mode.</p><p>Enumeration values:</p><ul><li>VBR: Variable Bit Rate. It dynamically adjusts the output bitrate based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements.</li><li>ABR: Average Bit Rate. It tries to stabilize the average bitrate of the output video as much as possible while allowing short-term bitrate fluctuation. It is suitable for scenarios where you need to minimize the overall bitrate while maintaining a certain image quality.</li><li>CBR: Constant Bit Rate. It maintains a constant output bitrate during video encoding regardless of changes in image complexity. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming.</li><li>VCRF: Constant quality factor. It controls video quality by setting a quality factor to achieve constant quality encoding of videos. The bitrate is automatically adjusted based on content complexity. It is suitable for scenarios where maintaining a certain image quality is desired.</li></ul><p>Default value: VBR</p>
 * @method integer getBframes() Obtain <p>Number of B-frames between reference frames. The default is auto.</p><p>Value range: [0, 16]</p>
 * @method void setBframes(integer $Bframes) Set <p>Number of B-frames between reference frames. The default is auto.</p><p>Value range: [0, 16]</p>
 * @method integer getHlsTime() Obtain <p>Average shard duration. 0 or empty means auto, and an appropriate shard duration will be automatically selected based on features such as the video GOP.</p><p>Value range: [0, 10]</p><p>Unit: second</p><p>Supports only transcoding templates. Adaptive bitrate templates are not currently supported.</p>
 * @method void setHlsTime(integer $HlsTime) Set <p>Average shard duration. 0 or empty means auto, and an appropriate shard duration will be automatically selected based on features such as the video GOP.</p><p>Value range: [0, 10]</p><p>Unit: second</p><p>Supports only transcoding templates. Adaptive bitrate templates are not currently supported.</p>
 * @method string getVideoProfile() Obtain <p>A predefined group of encoding tools or features allowed in the video encoding standard, suitable for different scenarios.</p><p>Enumeration values:</p><ul><li>baseline: Supports only I/P frames and non-interlaced scenarios, suitable for video calls, mobile video, and other scenarios.</li><li>main: The mainstream profile, provides I-frames, P-frames, and B-frames, and supports both interlaced and non-interlaced modes. It is mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices.</li><li>high: The highest encoding level, adds 8X8 prediction on top of the Main Profile and supports custom quantification. It is widely used in Blu-ray storage, HDTV, and other scenarios.</li><li>default: Automatic filling along with the original video.  </li></ul><p>Default value: default</p><p>This configuration item is valid only when Codec is libx264.</p>
 * @method void setVideoProfile(string $VideoProfile) Set <p>A predefined group of encoding tools or features allowed in the video encoding standard, suitable for different scenarios.</p><p>Enumeration values:</p><ul><li>baseline: Supports only I/P frames and non-interlaced scenarios, suitable for video calls, mobile video, and other scenarios.</li><li>main: The mainstream profile, provides I-frames, P-frames, and B-frames, and supports both interlaced and non-interlaced modes. It is mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices.</li><li>high: The highest encoding level, adds 8X8 prediction on top of the Main Profile and supports custom quantification. It is widely used in Blu-ray storage, HDTV, and other scenarios.</li><li>default: Automatic filling along with the original video.  </li></ul><p>Default value: default</p><p>This configuration item is valid only when Codec is libx264.</p>
 */
class VideoTemplateInfo extends AbstractModel
{
    /**
     * @var string <p>Video stream encoding format. Available values:</p><li>libx264: H.264 encoding;</li><li>libx265: H.265 encoding;</li><li>av1: AOMedia Video 1 encoding;</li><li>H.266: H.266 encoding.</li><font color="red">Note:</font><li> av1 and H.266 encoding containers currently only support mp4;</li><li> H.266 currently only supports the fixed CRF bitrate control method. </li>
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
     * @var string <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side;</li><li>close: disable. At this point, Width represents the video width, and Height represents the video height.</li>Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var integer <p>The maximum value of the video stream width (or long side). Valid values: 0 and [128, 8192]. Unit: px.</p><li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
     */
    public $Width;

    /**
     * @var integer <p>The maximum value of the video stream height (or short side). Valid values: 0 and [128, 8192]. Unit: px.</p><li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
     */
    public $Height;

    /**
     * @var string <p>Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "fill". Optional filling modes:</p><li>stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched".</li><li>black: Keep the video aspect ratio unchanged, with edges filled with black.</li><li>white: Keep the video aspect ratio unchanged, with edge remainder filled with white.</li><li>gauss: Gaussian blur. Keep the video aspect ratio unchanged, with Gaussian blur filling for the rest of the edges.</li>Default value: black.
     */
    public $FillType;

    /**
     * @var integer <p>Control factor for constant video bitrate. Value range: [1, 51].</p><p><font color="red">Note:</font></p><li>If you specify this parameter, the bitrate control mode for CRF will be used to transcode (video bitrate will no longer take effect);</li><li>When the encoding format of the specified video stream is H.266, this field is required. Recommended value: 28;</li><li>If there are no special requirements, it is not recommended to specify this parameter.</li>
     */
    public $Vcrf;

    /**
     * @var integer <p>Interval between I-frames, in frames. Value range: 0 and [1, 100000].<br>When it is set to 0 or not set, the system will automatically set the gop length.</p>
     */
    public $Gop;

    /**
     * @var string <p>Gop value unit.</p><p>Enumeration values:</p><ul><li>frame: Indicates the number of frames.</li><li>second: Indicates the number of seconds.</li></ul><p>Default value: frame</p>
     */
    public $GopUnit;

    /**
     * @var string <p>Whether the transcoding output remains HDR when the raw video is HDR (High Dynamic Range). Value range:</p><li>ON: If the original file is HDR, the transcoding output remains HDR; otherwise, the transcoding output is SDR (Standard Dynamic Range).</li><li>OFF: Regardless of whether the original file is HDR or SDR, the transcoding output is SDR.</li>Default value: OFF.
     */
    public $PreserveHDRSwitch;

    /**
     * @var string <p>Encoding tag. It is valid only when the video stream encoding format is H.265. Available values:</p><li>hvc1: hvc1 tag</li><li>hev1: hev1 tag</li>Default value: hvc1.
     */
    public $CodecTag;

    /**
     * @var string <p>Bitrate control mode.</p><p>Enumeration values:</p><ul><li>VBR: Variable Bit Rate. It dynamically adjusts the output bitrate based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements.</li><li>ABR: Average Bit Rate. It tries to stabilize the average bitrate of the output video as much as possible while allowing short-term bitrate fluctuation. It is suitable for scenarios where you need to minimize the overall bitrate while maintaining a certain image quality.</li><li>CBR: Constant Bit Rate. It maintains a constant output bitrate during video encoding regardless of changes in image complexity. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming.</li><li>VCRF: Constant quality factor. It controls video quality by setting a quality factor to achieve constant quality encoding of videos. The bitrate is automatically adjusted based on content complexity. It is suitable for scenarios where maintaining a certain image quality is desired.</li></ul><p>Default value: VBR</p>
     */
    public $Mode;

    /**
     * @var integer <p>Number of B-frames between reference frames. The default is auto.</p><p>Value range: [0, 16]</p>
     */
    public $Bframes;

    /**
     * @var integer <p>Average shard duration. 0 or empty means auto, and an appropriate shard duration will be automatically selected based on features such as the video GOP.</p><p>Value range: [0, 10]</p><p>Unit: second</p><p>Supports only transcoding templates. Adaptive bitrate templates are not currently supported.</p>
     */
    public $HlsTime;

    /**
     * @var string <p>A predefined group of encoding tools or features allowed in the video encoding standard, suitable for different scenarios.</p><p>Enumeration values:</p><ul><li>baseline: Supports only I/P frames and non-interlaced scenarios, suitable for video calls, mobile video, and other scenarios.</li><li>main: The mainstream profile, provides I-frames, P-frames, and B-frames, and supports both interlaced and non-interlaced modes. It is mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices.</li><li>high: The highest encoding level, adds 8X8 prediction on top of the Main Profile and supports custom quantification. It is widely used in Blu-ray storage, HDTV, and other scenarios.</li><li>default: Automatic filling along with the original video.  </li></ul><p>Default value: default</p><p>This configuration item is valid only when Codec is libx264.</p>
     */
    public $VideoProfile;

    /**
     * @param string $Codec <p>Video stream encoding format. Available values:</p><li>libx264: H.264 encoding;</li><li>libx265: H.265 encoding;</li><li>av1: AOMedia Video 1 encoding;</li><li>H.266: H.266 encoding.</li><font color="red">Note:</font><li> av1 and H.266 encoding containers currently only support mp4;</li><li> H.266 currently only supports the fixed CRF bitrate control method. </li>
     * @param integer $Fps <p>Video frame rate. Value range: [0, 100]. Unit: Hz.<br>When the value is 0, it means the frame rate is consistent with the original video.</p>
     * @param integer $Bitrate <p>Bitrate of video stream. Value range: 0 and [128, 100000]. Unit: kbps.<br>When the value is 0, it means VOD automatically sets the bitrate.</p>
     * @param string $ResolutionAdaptive <p>Resolution adaptation. Available values:</p><li>open: enable. At this point, Width represents the long side of the video, and Height represents the short side;</li><li>close: disable. At this point, Width represents the video width, and Height represents the video height.</li>Default value: open.
     * @param integer $Width <p>The maximum value of the video stream width (or long side). Valid values: 0 and [128, 8192]. Unit: px.</p><li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
     * @param integer $Height <p>The maximum value of the video stream height (or short side). Valid values: 0 and [128, 8192]. Unit: px.</p><li>When Width and Height are both 0, the resolution is from the same source;</li><li>When Width is 0 and Height is non-0, Width is scaled proportionally;</li><li>When Width is non-0 and Height is 0, the Height is scaled proportionally;</li><li>When both Width and Height are non-0, the resolution is specified by the user.</li>Default value: 0.
     * @param string $FillType <p>Filling method. When the video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "fill". Optional filling modes:</p><li>stretch: Stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched".</li><li>black: Keep the video aspect ratio unchanged, with edges filled with black.</li><li>white: Keep the video aspect ratio unchanged, with edge remainder filled with white.</li><li>gauss: Gaussian blur. Keep the video aspect ratio unchanged, with Gaussian blur filling for the rest of the edges.</li>Default value: black.
     * @param integer $Vcrf <p>Control factor for constant video bitrate. Value range: [1, 51].</p><p><font color="red">Note:</font></p><li>If you specify this parameter, the bitrate control mode for CRF will be used to transcode (video bitrate will no longer take effect);</li><li>When the encoding format of the specified video stream is H.266, this field is required. Recommended value: 28;</li><li>If there are no special requirements, it is not recommended to specify this parameter.</li>
     * @param integer $Gop <p>Interval between I-frames, in frames. Value range: 0 and [1, 100000].<br>When it is set to 0 or not set, the system will automatically set the gop length.</p>
     * @param string $GopUnit <p>Gop value unit.</p><p>Enumeration values:</p><ul><li>frame: Indicates the number of frames.</li><li>second: Indicates the number of seconds.</li></ul><p>Default value: frame</p>
     * @param string $PreserveHDRSwitch <p>Whether the transcoding output remains HDR when the raw video is HDR (High Dynamic Range). Value range:</p><li>ON: If the original file is HDR, the transcoding output remains HDR; otherwise, the transcoding output is SDR (Standard Dynamic Range).</li><li>OFF: Regardless of whether the original file is HDR or SDR, the transcoding output is SDR.</li>Default value: OFF.
     * @param string $CodecTag <p>Encoding tag. It is valid only when the video stream encoding format is H.265. Available values:</p><li>hvc1: hvc1 tag</li><li>hev1: hev1 tag</li>Default value: hvc1.
     * @param string $Mode <p>Bitrate control mode.</p><p>Enumeration values:</p><ul><li>VBR: Variable Bit Rate. It dynamically adjusts the output bitrate based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements.</li><li>ABR: Average Bit Rate. It tries to stabilize the average bitrate of the output video as much as possible while allowing short-term bitrate fluctuation. It is suitable for scenarios where you need to minimize the overall bitrate while maintaining a certain image quality.</li><li>CBR: Constant Bit Rate. It maintains a constant output bitrate during video encoding regardless of changes in image complexity. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming.</li><li>VCRF: Constant quality factor. It controls video quality by setting a quality factor to achieve constant quality encoding of videos. The bitrate is automatically adjusted based on content complexity. It is suitable for scenarios where maintaining a certain image quality is desired.</li></ul><p>Default value: VBR</p>
     * @param integer $Bframes <p>Number of B-frames between reference frames. The default is auto.</p><p>Value range: [0, 16]</p>
     * @param integer $HlsTime <p>Average shard duration. 0 or empty means auto, and an appropriate shard duration will be automatically selected based on features such as the video GOP.</p><p>Value range: [0, 10]</p><p>Unit: second</p><p>Supports only transcoding templates. Adaptive bitrate templates are not currently supported.</p>
     * @param string $VideoProfile <p>A predefined group of encoding tools or features allowed in the video encoding standard, suitable for different scenarios.</p><p>Enumeration values:</p><ul><li>baseline: Supports only I/P frames and non-interlaced scenarios, suitable for video calls, mobile video, and other scenarios.</li><li>main: The mainstream profile, provides I-frames, P-frames, and B-frames, and supports both interlaced and non-interlaced modes. It is mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices.</li><li>high: The highest encoding level, adds 8X8 prediction on top of the Main Profile and supports custom quantification. It is widely used in Blu-ray storage, HDTV, and other scenarios.</li><li>default: Automatic filling along with the original video.  </li></ul><p>Default value: default</p><p>This configuration item is valid only when Codec is libx264.</p>
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

        if (array_key_exists("GopUnit",$param) and $param["GopUnit"] !== null) {
            $this->GopUnit = $param["GopUnit"];
        }

        if (array_key_exists("PreserveHDRSwitch",$param) and $param["PreserveHDRSwitch"] !== null) {
            $this->PreserveHDRSwitch = $param["PreserveHDRSwitch"];
        }

        if (array_key_exists("CodecTag",$param) and $param["CodecTag"] !== null) {
            $this->CodecTag = $param["CodecTag"];
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
