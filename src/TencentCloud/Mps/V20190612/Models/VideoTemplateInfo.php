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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Video stream configuration parameter
 *
 * @method string getCodec() Obtain Video stream encoding format. Valid values:
<li>h264: H.264 encoding.</li>
<li>h265: H.265 encoding.</li>
<li>h266: H.266 encoding.</li>
<li>av1: AOMedia Video 1 encoding.</li>
<li>vp8: VP8 encoding.</li>
<li>vp9: VP9 encoding.</li>
<li>mpeg2: MPEG2 encoding.</li>
<li>dnxhd: DNxHD encoding.</li>
<li>mv-hevc: MV-HEVC encoding.</li>
Note: A resolution within 640x480 should be specified for H.265 encoding.

Note: AV1 encoding containers only support mp4, webm, and mkv.
Note: H.266 encoding containers only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers only support webm and mkv.
Note: MPEG2 and DNxHD encoding containers only support mxf.
Note: MV-HEVC encoding containers only support mp4, hls, and mov. Among them, the hls format only supports mp4 segmentation format.
 * @method void setCodec(string $Codec) Set Video stream encoding format. Valid values:
<li>h264: H.264 encoding.</li>
<li>h265: H.265 encoding.</li>
<li>h266: H.266 encoding.</li>
<li>av1: AOMedia Video 1 encoding.</li>
<li>vp8: VP8 encoding.</li>
<li>vp9: VP9 encoding.</li>
<li>mpeg2: MPEG2 encoding.</li>
<li>dnxhd: DNxHD encoding.</li>
<li>mv-hevc: MV-HEVC encoding.</li>
Note: A resolution within 640x480 should be specified for H.265 encoding.

Note: AV1 encoding containers only support mp4, webm, and mkv.
Note: H.266 encoding containers only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers only support webm and mkv.
Note: MPEG2 and DNxHD encoding containers only support mxf.
Note: MV-HEVC encoding containers only support mp4, hls, and mov. Among them, the hls format only supports mp4 segmentation format.
 * @method integer getFps() Obtain Video frame rate. Value range:
When FpsDenominator is empty, the range is [0, 120], in Hz.
When FpsDenominator is not empty, the Fps/FpsDenominator range is [0, 120].
If the value is 0, the frame rate will be the same as that of the source video.
 * @method void setFps(integer $Fps) Set Video frame rate. Value range:
When FpsDenominator is empty, the range is [0, 120], in Hz.
When FpsDenominator is not empty, the Fps/FpsDenominator range is [0, 120].
If the value is 0, the frame rate will be the same as that of the source video.
 * @method integer getBitrate() Obtain Bitrate of a video stream, in kbps. Value range: 0 and [128, 100000].If the value is 0, the bitrate of the video will be the same as that of the source video.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of a video stream, in kbps. Value range: 0 and [128, 100000].If the value is 0, the bitrate of the video will be the same as that of the source video.
 * @method string getResolutionAdaptive() Obtain Resolution adaption. Valid values:
<li>open: Enabled. When resolution adaption is enabled, `Width` indicates the long side of a video, while `Height` indicates the short side.</li>
<li>close: Disabled. When resolution adaption is disabled, `Width` indicates the width of a video, while `Height` indicates the height.</li>
Default value: open.
Note: When resolution adaption is enabled, `Width` cannot be smaller than `Height`.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaption. Valid values:
<li>open: Enabled. When resolution adaption is enabled, `Width` indicates the long side of a video, while `Height` indicates the short side.</li>
<li>close: Disabled. When resolution adaption is disabled, `Width` indicates the width of a video, while `Height` indicates the height.</li>
Default value: open.
Note: When resolution adaption is enabled, `Width` cannot be smaller than `Height`.
 * @method integer getWidth() Obtain Maximum value of the width (or long side) of a video stream in px. Value range: 0 and [128, 4,096].
<li>If both `Width` and `Height` are 0, the resolution will be the same as that of the source video;</li>
<li>If `Width` is 0, but `Height` is not 0, `Width` will be proportionally scaled;</li>
<li>If `Width` is not 0, but `Height` is 0, `Height` will be proportionally scaled;</li>
<li>If both `Width` and `Height` are not 0, the custom resolution will be used.</li>
Default value: 0.
 * @method void setWidth(integer $Width) Set Maximum value of the width (or long side) of a video stream in px. Value range: 0 and [128, 4,096].
<li>If both `Width` and `Height` are 0, the resolution will be the same as that of the source video;</li>
<li>If `Width` is 0, but `Height` is not 0, `Width` will be proportionally scaled;</li>
<li>If `Width` is not 0, but `Height` is 0, `Height` will be proportionally scaled;</li>
<li>If both `Width` and `Height` are not 0, the custom resolution will be used.</li>
Default value: 0.
 * @method integer getHeight() Obtain Maximum value of the height (or short side) of a video stream in px. Value range: 0 and [128, 4,096].
<li>If both `Width` and `Height` are 0, the resolution will be the same as that of the source video;</li>
<li>If `Width` is 0, but `Height` is not 0, `Width` will be proportionally scaled;</li>
<li>If `Width` is not 0, but `Height` is 0, `Height` will be proportionally scaled;</li>
<li>If both `Width` and `Height` are not 0, the custom resolution will be used.</li>
Default value: 0.
 * @method void setHeight(integer $Height) Set Maximum value of the height (or short side) of a video stream in px. Value range: 0 and [128, 4,096].
<li>If both `Width` and `Height` are 0, the resolution will be the same as that of the source video;</li>
<li>If `Width` is 0, but `Height` is not 0, `Width` will be proportionally scaled;</li>
<li>If `Width` is not 0, but `Height` is 0, `Height` will be proportionally scaled;</li>
<li>If both `Width` and `Height` are not 0, the custom resolution will be used.</li>
Default value: 0.
 * @method integer getGop() Obtain Interval between I-frames, in frames. Value range: 0 and [1, 100000]. When it is set to 0 or not set, the system will automatically set the gop length.
 * @method void setGop(integer $Gop) Set Interval between I-frames, in frames. Value range: 0 and [1, 100000]. When it is set to 0 or not set, the system will automatically set the gop length.
 * @method string getFillType() Obtain The fill mode, which indicates how a video is resized when the video’s original aspect ratio is different from the target aspect ratio. Valid values:
<li>stretch: Stretch the image frame by frame to fill the entire screen. The video image may become "squashed" or "stretched" after transcoding.</li>
<li>black: Keep the image's original aspect ratio and fill the blank space with black bars.</li>
<li>white: Keep the image’s original aspect ratio and fill the blank space with white bars.</li>
<li>gauss: Keep the image’s original aspect ratio and apply Gaussian blur to the blank space.</li>
Default value: black.
Note: Only `stretch` and `black` are supported for adaptive bitrate streaming.
 * @method void setFillType(string $FillType) Set The fill mode, which indicates how a video is resized when the video’s original aspect ratio is different from the target aspect ratio. Valid values:
<li>stretch: Stretch the image frame by frame to fill the entire screen. The video image may become "squashed" or "stretched" after transcoding.</li>
<li>black: Keep the image's original aspect ratio and fill the blank space with black bars.</li>
<li>white: Keep the image’s original aspect ratio and fill the blank space with white bars.</li>
<li>gauss: Keep the image’s original aspect ratio and apply Gaussian blur to the blank space.</li>
Default value: black.
Note: Only `stretch` and `black` are supported for adaptive bitrate streaming.
 * @method integer getVcrf() Obtain The control factor of video constant bitrate. Value range: [1, 51]
If this parameter is specified, CRF (a bitrate control method) will be used for transcoding. (Video bitrate will no longer take effect.)
It is not recommended to specify this parameter if there are no special requirements.
 * @method void setVcrf(integer $Vcrf) Set The control factor of video constant bitrate. Value range: [1, 51]
If this parameter is specified, CRF (a bitrate control method) will be used for transcoding. (Video bitrate will no longer take effect.)
It is not recommended to specify this parameter if there are no special requirements.
 * @method integer getSegmentType() Obtain HLS segment type. Valid values:
<li>0: HLS+TS segment.</li>
<li>2: HLS+TS byte range.</li>
<li>7: HLS+MP4 segment.</li>
<li>5: HLS+MP4 byte range.</li>
Default value: 0

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSegmentType(integer $SegmentType) Set HLS segment type. Valid values:
<li>0: HLS+TS segment.</li>
<li>2: HLS+TS byte range.</li>
<li>7: HLS+MP4 segment.</li>
<li>5: HLS+MP4 byte range.</li>
Default value: 0

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFpsDenominator() Obtain Denominator of the frame rate.
Note: The value must be greater than 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFpsDenominator(integer $FpsDenominator) Set Denominator of the frame rate.
Note: The value must be greater than 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStereo3dType() Obtain 3D video splicing mode, which is only valid for MV-HEVC 3D videos. Valid values:
<li>side_by_side: side-by-side view.</li>
<li>top_bottom: top-bottom view.</li>
Default value: side_by_side.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStereo3dType(string $Stereo3dType) Set 3D video splicing mode, which is only valid for MV-HEVC 3D videos. Valid values:
<li>side_by_side: side-by-side view.</li>
<li>top_bottom: top-bottom view.</li>
Default value: side_by_side.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VideoTemplateInfo extends AbstractModel
{
    /**
     * @var string Video stream encoding format. Valid values:
<li>h264: H.264 encoding.</li>
<li>h265: H.265 encoding.</li>
<li>h266: H.266 encoding.</li>
<li>av1: AOMedia Video 1 encoding.</li>
<li>vp8: VP8 encoding.</li>
<li>vp9: VP9 encoding.</li>
<li>mpeg2: MPEG2 encoding.</li>
<li>dnxhd: DNxHD encoding.</li>
<li>mv-hevc: MV-HEVC encoding.</li>
Note: A resolution within 640x480 should be specified for H.265 encoding.

Note: AV1 encoding containers only support mp4, webm, and mkv.
Note: H.266 encoding containers only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers only support webm and mkv.
Note: MPEG2 and DNxHD encoding containers only support mxf.
Note: MV-HEVC encoding containers only support mp4, hls, and mov. Among them, the hls format only supports mp4 segmentation format.
     */
    public $Codec;

    /**
     * @var integer Video frame rate. Value range:
When FpsDenominator is empty, the range is [0, 120], in Hz.
When FpsDenominator is not empty, the Fps/FpsDenominator range is [0, 120].
If the value is 0, the frame rate will be the same as that of the source video.
     */
    public $Fps;

    /**
     * @var integer Bitrate of a video stream, in kbps. Value range: 0 and [128, 100000].If the value is 0, the bitrate of the video will be the same as that of the source video.
     */
    public $Bitrate;

    /**
     * @var string Resolution adaption. Valid values:
<li>open: Enabled. When resolution adaption is enabled, `Width` indicates the long side of a video, while `Height` indicates the short side.</li>
<li>close: Disabled. When resolution adaption is disabled, `Width` indicates the width of a video, while `Height` indicates the height.</li>
Default value: open.
Note: When resolution adaption is enabled, `Width` cannot be smaller than `Height`.
     */
    public $ResolutionAdaptive;

    /**
     * @var integer Maximum value of the width (or long side) of a video stream in px. Value range: 0 and [128, 4,096].
<li>If both `Width` and `Height` are 0, the resolution will be the same as that of the source video;</li>
<li>If `Width` is 0, but `Height` is not 0, `Width` will be proportionally scaled;</li>
<li>If `Width` is not 0, but `Height` is 0, `Height` will be proportionally scaled;</li>
<li>If both `Width` and `Height` are not 0, the custom resolution will be used.</li>
Default value: 0.
     */
    public $Width;

    /**
     * @var integer Maximum value of the height (or short side) of a video stream in px. Value range: 0 and [128, 4,096].
<li>If both `Width` and `Height` are 0, the resolution will be the same as that of the source video;</li>
<li>If `Width` is 0, but `Height` is not 0, `Width` will be proportionally scaled;</li>
<li>If `Width` is not 0, but `Height` is 0, `Height` will be proportionally scaled;</li>
<li>If both `Width` and `Height` are not 0, the custom resolution will be used.</li>
Default value: 0.
     */
    public $Height;

    /**
     * @var integer Interval between I-frames, in frames. Value range: 0 and [1, 100000]. When it is set to 0 or not set, the system will automatically set the gop length.
     */
    public $Gop;

    /**
     * @var string The fill mode, which indicates how a video is resized when the video’s original aspect ratio is different from the target aspect ratio. Valid values:
<li>stretch: Stretch the image frame by frame to fill the entire screen. The video image may become "squashed" or "stretched" after transcoding.</li>
<li>black: Keep the image's original aspect ratio and fill the blank space with black bars.</li>
<li>white: Keep the image’s original aspect ratio and fill the blank space with white bars.</li>
<li>gauss: Keep the image’s original aspect ratio and apply Gaussian blur to the blank space.</li>
Default value: black.
Note: Only `stretch` and `black` are supported for adaptive bitrate streaming.
     */
    public $FillType;

    /**
     * @var integer The control factor of video constant bitrate. Value range: [1, 51]
If this parameter is specified, CRF (a bitrate control method) will be used for transcoding. (Video bitrate will no longer take effect.)
It is not recommended to specify this parameter if there are no special requirements.
     */
    public $Vcrf;

    /**
     * @var integer HLS segment type. Valid values:
<li>0: HLS+TS segment.</li>
<li>2: HLS+TS byte range.</li>
<li>7: HLS+MP4 segment.</li>
<li>5: HLS+MP4 byte range.</li>
Default value: 0

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SegmentType;

    /**
     * @var integer Denominator of the frame rate.
Note: The value must be greater than 0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FpsDenominator;

    /**
     * @var string 3D video splicing mode, which is only valid for MV-HEVC 3D videos. Valid values:
<li>side_by_side: side-by-side view.</li>
<li>top_bottom: top-bottom view.</li>
Default value: side_by_side.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Stereo3dType;

    /**
     * @param string $Codec Video stream encoding format. Valid values:
<li>h264: H.264 encoding.</li>
<li>h265: H.265 encoding.</li>
<li>h266: H.266 encoding.</li>
<li>av1: AOMedia Video 1 encoding.</li>
<li>vp8: VP8 encoding.</li>
<li>vp9: VP9 encoding.</li>
<li>mpeg2: MPEG2 encoding.</li>
<li>dnxhd: DNxHD encoding.</li>
<li>mv-hevc: MV-HEVC encoding.</li>
Note: A resolution within 640x480 should be specified for H.265 encoding.

Note: AV1 encoding containers only support mp4, webm, and mkv.
Note: H.266 encoding containers only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers only support webm and mkv.
Note: MPEG2 and DNxHD encoding containers only support mxf.
Note: MV-HEVC encoding containers only support mp4, hls, and mov. Among them, the hls format only supports mp4 segmentation format.
     * @param integer $Fps Video frame rate. Value range:
When FpsDenominator is empty, the range is [0, 120], in Hz.
When FpsDenominator is not empty, the Fps/FpsDenominator range is [0, 120].
If the value is 0, the frame rate will be the same as that of the source video.
     * @param integer $Bitrate Bitrate of a video stream, in kbps. Value range: 0 and [128, 100000].If the value is 0, the bitrate of the video will be the same as that of the source video.
     * @param string $ResolutionAdaptive Resolution adaption. Valid values:
<li>open: Enabled. When resolution adaption is enabled, `Width` indicates the long side of a video, while `Height` indicates the short side.</li>
<li>close: Disabled. When resolution adaption is disabled, `Width` indicates the width of a video, while `Height` indicates the height.</li>
Default value: open.
Note: When resolution adaption is enabled, `Width` cannot be smaller than `Height`.
     * @param integer $Width Maximum value of the width (or long side) of a video stream in px. Value range: 0 and [128, 4,096].
<li>If both `Width` and `Height` are 0, the resolution will be the same as that of the source video;</li>
<li>If `Width` is 0, but `Height` is not 0, `Width` will be proportionally scaled;</li>
<li>If `Width` is not 0, but `Height` is 0, `Height` will be proportionally scaled;</li>
<li>If both `Width` and `Height` are not 0, the custom resolution will be used.</li>
Default value: 0.
     * @param integer $Height Maximum value of the height (or short side) of a video stream in px. Value range: 0 and [128, 4,096].
<li>If both `Width` and `Height` are 0, the resolution will be the same as that of the source video;</li>
<li>If `Width` is 0, but `Height` is not 0, `Width` will be proportionally scaled;</li>
<li>If `Width` is not 0, but `Height` is 0, `Height` will be proportionally scaled;</li>
<li>If both `Width` and `Height` are not 0, the custom resolution will be used.</li>
Default value: 0.
     * @param integer $Gop Interval between I-frames, in frames. Value range: 0 and [1, 100000]. When it is set to 0 or not set, the system will automatically set the gop length.
     * @param string $FillType The fill mode, which indicates how a video is resized when the video’s original aspect ratio is different from the target aspect ratio. Valid values:
<li>stretch: Stretch the image frame by frame to fill the entire screen. The video image may become "squashed" or "stretched" after transcoding.</li>
<li>black: Keep the image's original aspect ratio and fill the blank space with black bars.</li>
<li>white: Keep the image’s original aspect ratio and fill the blank space with white bars.</li>
<li>gauss: Keep the image’s original aspect ratio and apply Gaussian blur to the blank space.</li>
Default value: black.
Note: Only `stretch` and `black` are supported for adaptive bitrate streaming.
     * @param integer $Vcrf The control factor of video constant bitrate. Value range: [1, 51]
If this parameter is specified, CRF (a bitrate control method) will be used for transcoding. (Video bitrate will no longer take effect.)
It is not recommended to specify this parameter if there are no special requirements.
     * @param integer $SegmentType HLS segment type. Valid values:
<li>0: HLS+TS segment.</li>
<li>2: HLS+TS byte range.</li>
<li>7: HLS+MP4 segment.</li>
<li>5: HLS+MP4 byte range.</li>
Default value: 0

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FpsDenominator Denominator of the frame rate.
Note: The value must be greater than 0.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Stereo3dType 3D video splicing mode, which is only valid for MV-HEVC 3D videos. Valid values:
<li>side_by_side: side-by-side view.</li>
<li>top_bottom: top-bottom view.</li>
Default value: side_by_side.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Gop",$param) and $param["Gop"] !== null) {
            $this->Gop = $param["Gop"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("Vcrf",$param) and $param["Vcrf"] !== null) {
            $this->Vcrf = $param["Vcrf"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("FpsDenominator",$param) and $param["FpsDenominator"] !== null) {
            $this->FpsDenominator = $param["FpsDenominator"];
        }

        if (array_key_exists("Stereo3dType",$param) and $param["Stereo3dType"] !== null) {
            $this->Stereo3dType = $param["Stereo3dType"];
        }
    }
}
