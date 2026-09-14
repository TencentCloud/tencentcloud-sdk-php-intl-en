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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Video stream configuration parameters
 *
 * @method string getCodec() Obtain Encoding format for video streams. Optional values:
<li>h264: H.264 encoding.</li>
<li>h265: H.265 encoding.</li>
<li>h266: H.266 encoding.</li>
<li>av1: AOMedia Video 1 encoding</li>
<li>vp8: VP8 encoding.</li>
<li>vp9: VP9 encoding.</li>
<li>mpeg2: MPEG2 encoding.</li>
<li>dnxhd: DNxHD encoding.</li>
<li>mv-hevc: MV-HEVC encoding.</li>

Note: av1 encoding container currently only supports mp4, webm, and mkv.
Note: H.266 encoding containers currently only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers currently only support webm and mkv.
Note: MPEG2 and dnxhd encoding containers currently only support mxf.
Note: The MV-HEVC codec currently only supports mp4, hls, and mov. Among them, the HLS format only supports the MP4 segmented format and requires the input source to be a panoramic video (with multiple views).
 * @method void setCodec(string $Codec) Set Encoding format for video streams. Optional values:
<li>h264: H.264 encoding.</li>
<li>h265: H.265 encoding.</li>
<li>h266: H.266 encoding.</li>
<li>av1: AOMedia Video 1 encoding</li>
<li>vp8: VP8 encoding.</li>
<li>vp9: VP9 encoding.</li>
<li>mpeg2: MPEG2 encoding.</li>
<li>dnxhd: DNxHD encoding.</li>
<li>mv-hevc: MV-HEVC encoding.</li>

Note: av1 encoding container currently only supports mp4, webm, and mkv.
Note: H.266 encoding containers currently only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers currently only support webm and mkv.
Note: MPEG2 and dnxhd encoding containers currently only support mxf.
Note: The MV-HEVC codec currently only supports mp4, hls, and mov. Among them, the HLS format only supports the MP4 segmented format and requires the input source to be a panoramic video (with multiple views).
 * @method integer getFps() Obtain Video frame rate. Value range:
When FpsDenominator is empty, the range is [0, 120], in Hz.
When FpsDenominator is not empty, the Fps/FpsDenominator range is [0, 120].
If the value is 0, the frame rate will be the same as that of the source video.
 * @method void setFps(integer $Fps) Set Video frame rate. Value range:
When FpsDenominator is empty, the range is [0, 120], in Hz.
When FpsDenominator is not empty, the Fps/FpsDenominator range is [0, 120].
If the value is 0, the frame rate will be the same as that of the source video.
 * @method integer getBitrate() Obtain Bitrate of the video stream. Value range: 0 and [128, 100000]. Unit: kbps.
If the value is 0, the bitrate of the video will be the same as that of the source video.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of the video stream. Value range: 0 and [128, 100000]. Unit: kbps.
If the value is 0, the bitrate of the video will be the same as that of the source video.
 * @method string getResolutionAdaptive() Obtain Resolution adaptation, available values:
<li>open: turn on. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: close. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
Note: In self-adaptation mode, Width cannot be less than Height.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaptation, available values:
<li>open: turn on. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: close. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
Note: In self-adaptation mode, Width cannot be less than Height.
 * @method integer getWidth() Obtain Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
 * @method void setWidth(integer $Width) Set Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
 * @method integer getHeight() Obtain Maximum value of the video stream height (or short side). Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
 * @method void setHeight(integer $Height) Set Maximum value of the video stream height (or short side). Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
 * @method integer getGop() Obtain Interval between I-frames (keyframes), which can be customized in frames or seconds. GOP value range: 0 and [1, 100000].
If this parameter is 0 or left blank, the system will automatically set the GOP length.
 * @method void setGop(integer $Gop) Set Interval between I-frames (keyframes), which can be customized in frames or seconds. GOP value range: 0 and [1, 100000].
If this parameter is 0 or left blank, the system will automatically set the GOP length.
 * @method string getGopUnit() Obtain 
 * @method void setGopUnit(string $GopUnit) Set 
 * @method string getFillType() Obtain Filling method, when video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling modes:
<li> stretch: stretches each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li>black: Keep black, maintain video aspect ratio, edges filled with black.</li>
<li>White: Leave blank, maintain video aspect ratio, edge remainder filled with white.</li>
<li>gauss: Gaussian blur, maintain video aspect ratio, and use Gaussian blur filling for the rest of the edges.</li>
<li>smarttailor: intelligent cropping: smartly select video images to ensure proportional image cropping.</li>
Default value: black.
 * @method void setFillType(string $FillType) Set Filling method, when video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling modes:
<li> stretch: stretches each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li>black: Keep black, maintain video aspect ratio, edges filled with black.</li>
<li>White: Leave blank, maintain video aspect ratio, edge remainder filled with white.</li>
<li>gauss: Gaussian blur, maintain video aspect ratio, and use Gaussian blur filling for the rest of the edges.</li>
<li>smarttailor: intelligent cropping: smartly select video images to ensure proportional image cropping.</li>
Default value: black.
 * @method integer getVcrf() Obtain 
 * @method void setVcrf(integer $Vcrf) Set 
 * @method integer getHlsTime() Obtain 
 * @method void setHlsTime(integer $HlsTime) Set 
 * @method integer getSegmentType() Obtain 
 * @method void setSegmentType(integer $SegmentType) Set 
 * @method integer getFpsDenominator() Obtain 
 * @method void setFpsDenominator(integer $FpsDenominator) Set 
 * @method string getStereo3dType() Obtain 
 * @method void setStereo3dType(string $Stereo3dType) Set 
 * @method string getVideoProfile() Obtain 
 * @method void setVideoProfile(string $VideoProfile) Set 
 * @method string getVideoLevel() Obtain 
 * @method void setVideoLevel(string $VideoLevel) Set 
 * @method integer getBframes() Obtain 
 * @method void setBframes(integer $Bframes) Set 
 * @method string getMode() Obtain 
 * @method void setMode(string $Mode) Set 
 * @method string getSar() Obtain 
 * @method void setSar(string $Sar) Set 
 * @method integer getNoScenecut() Obtain 
 * @method void setNoScenecut(integer $NoScenecut) Set 
 * @method integer getBitDepth() Obtain 
 * @method void setBitDepth(integer $BitDepth) Set 
 * @method integer getRawPts() Obtain 
 * @method void setRawPts(integer $RawPts) Set 
 * @method integer getCompress() Obtain 
 * @method void setCompress(integer $Compress) Set 
 * @method SegmentSpecificInfo getSegmentSpecificInfo() Obtain 
 * @method void setSegmentSpecificInfo(SegmentSpecificInfo $SegmentSpecificInfo) Set 
 * @method integer getScenarioBased() Obtain 
 * @method void setScenarioBased(integer $ScenarioBased) Set 
 * @method string getSceneType() Obtain 
 * @method void setSceneType(string $SceneType) Set 
 * @method string getCompressType() Obtain 
 * @method void setCompressType(string $CompressType) Set 
 */
class VideoTemplateInfo extends AbstractModel
{
    /**
     * @var string Encoding format for video streams. Optional values:
<li>h264: H.264 encoding.</li>
<li>h265: H.265 encoding.</li>
<li>h266: H.266 encoding.</li>
<li>av1: AOMedia Video 1 encoding</li>
<li>vp8: VP8 encoding.</li>
<li>vp9: VP9 encoding.</li>
<li>mpeg2: MPEG2 encoding.</li>
<li>dnxhd: DNxHD encoding.</li>
<li>mv-hevc: MV-HEVC encoding.</li>

Note: av1 encoding container currently only supports mp4, webm, and mkv.
Note: H.266 encoding containers currently only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers currently only support webm and mkv.
Note: MPEG2 and dnxhd encoding containers currently only support mxf.
Note: The MV-HEVC codec currently only supports mp4, hls, and mov. Among them, the HLS format only supports the MP4 segmented format and requires the input source to be a panoramic video (with multiple views).
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
     * @var integer Bitrate of the video stream. Value range: 0 and [128, 100000]. Unit: kbps.
If the value is 0, the bitrate of the video will be the same as that of the source video.
     */
    public $Bitrate;

    /**
     * @var string Resolution adaptation, available values:
<li>open: turn on. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: close. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
Note: In self-adaptation mode, Width cannot be less than Height.
     */
    public $ResolutionAdaptive;

    /**
     * @var integer Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
     */
    public $Width;

    /**
     * @var integer Maximum value of the video stream height (or short side). Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
     */
    public $Height;

    /**
     * @var integer Interval between I-frames (keyframes), which can be customized in frames or seconds. GOP value range: 0 and [1, 100000].
If this parameter is 0 or left blank, the system will automatically set the GOP length.
     */
    public $Gop;

    /**
     * @var string 
     */
    public $GopUnit;

    /**
     * @var string Filling method, when video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling modes:
<li> stretch: stretches each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li>black: Keep black, maintain video aspect ratio, edges filled with black.</li>
<li>White: Leave blank, maintain video aspect ratio, edge remainder filled with white.</li>
<li>gauss: Gaussian blur, maintain video aspect ratio, and use Gaussian blur filling for the rest of the edges.</li>
<li>smarttailor: intelligent cropping: smartly select video images to ensure proportional image cropping.</li>
Default value: black.
     */
    public $FillType;

    /**
     * @var integer 
     */
    public $Vcrf;

    /**
     * @var integer 
     */
    public $HlsTime;

    /**
     * @var integer 
     */
    public $SegmentType;

    /**
     * @var integer 
     */
    public $FpsDenominator;

    /**
     * @var string 
     */
    public $Stereo3dType;

    /**
     * @var string 
     */
    public $VideoProfile;

    /**
     * @var string 
     */
    public $VideoLevel;

    /**
     * @var integer 
     */
    public $Bframes;

    /**
     * @var string 
     */
    public $Mode;

    /**
     * @var string 
     */
    public $Sar;

    /**
     * @var integer 
     */
    public $NoScenecut;

    /**
     * @var integer 
     */
    public $BitDepth;

    /**
     * @var integer 
     */
    public $RawPts;

    /**
     * @var integer 
     */
    public $Compress;

    /**
     * @var SegmentSpecificInfo 
     */
    public $SegmentSpecificInfo;

    /**
     * @var integer 
     */
    public $ScenarioBased;

    /**
     * @var string 
     */
    public $SceneType;

    /**
     * @var string 
     */
    public $CompressType;

    /**
     * @param string $Codec Encoding format for video streams. Optional values:
<li>h264: H.264 encoding.</li>
<li>h265: H.265 encoding.</li>
<li>h266: H.266 encoding.</li>
<li>av1: AOMedia Video 1 encoding</li>
<li>vp8: VP8 encoding.</li>
<li>vp9: VP9 encoding.</li>
<li>mpeg2: MPEG2 encoding.</li>
<li>dnxhd: DNxHD encoding.</li>
<li>mv-hevc: MV-HEVC encoding.</li>

Note: av1 encoding container currently only supports mp4, webm, and mkv.
Note: H.266 encoding containers currently only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers currently only support webm and mkv.
Note: MPEG2 and dnxhd encoding containers currently only support mxf.
Note: The MV-HEVC codec currently only supports mp4, hls, and mov. Among them, the HLS format only supports the MP4 segmented format and requires the input source to be a panoramic video (with multiple views).
     * @param integer $Fps Video frame rate. Value range:
When FpsDenominator is empty, the range is [0, 120], in Hz.
When FpsDenominator is not empty, the Fps/FpsDenominator range is [0, 120].
If the value is 0, the frame rate will be the same as that of the source video.
     * @param integer $Bitrate Bitrate of the video stream. Value range: 0 and [128, 100000]. Unit: kbps.
If the value is 0, the bitrate of the video will be the same as that of the source video.
     * @param string $ResolutionAdaptive Resolution adaptation, available values:
<li>open: turn on. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: close. At this point, Width represents the width of the video, and Height indicates the height of the video.</li>
Default value: open.
Note: In self-adaptation mode, Width cannot be less than Height.
     * @param integer $Width Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
     * @param integer $Height Maximum value of the video stream height (or short side). Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
     * @param integer $Gop Interval between I-frames (keyframes), which can be customized in frames or seconds. GOP value range: 0 and [1, 100000].
If this parameter is 0 or left blank, the system will automatically set the GOP length.
     * @param string $GopUnit 
     * @param string $FillType Filling method, when video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling modes:
<li> stretch: stretches each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li>black: Keep black, maintain video aspect ratio, edges filled with black.</li>
<li>White: Leave blank, maintain video aspect ratio, edge remainder filled with white.</li>
<li>gauss: Gaussian blur, maintain video aspect ratio, and use Gaussian blur filling for the rest of the edges.</li>
<li>smarttailor: intelligent cropping: smartly select video images to ensure proportional image cropping.</li>
Default value: black.
     * @param integer $Vcrf 
     * @param integer $HlsTime 
     * @param integer $SegmentType 
     * @param integer $FpsDenominator 
     * @param string $Stereo3dType 
     * @param string $VideoProfile 
     * @param string $VideoLevel 
     * @param integer $Bframes 
     * @param string $Mode 
     * @param string $Sar 
     * @param integer $NoScenecut 
     * @param integer $BitDepth 
     * @param integer $RawPts 
     * @param integer $Compress 
     * @param SegmentSpecificInfo $SegmentSpecificInfo 
     * @param integer $ScenarioBased 
     * @param string $SceneType 
     * @param string $CompressType 
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

        if (array_key_exists("GopUnit",$param) and $param["GopUnit"] !== null) {
            $this->GopUnit = $param["GopUnit"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("Vcrf",$param) and $param["Vcrf"] !== null) {
            $this->Vcrf = $param["Vcrf"];
        }

        if (array_key_exists("HlsTime",$param) and $param["HlsTime"] !== null) {
            $this->HlsTime = $param["HlsTime"];
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

        if (array_key_exists("VideoProfile",$param) and $param["VideoProfile"] !== null) {
            $this->VideoProfile = $param["VideoProfile"];
        }

        if (array_key_exists("VideoLevel",$param) and $param["VideoLevel"] !== null) {
            $this->VideoLevel = $param["VideoLevel"];
        }

        if (array_key_exists("Bframes",$param) and $param["Bframes"] !== null) {
            $this->Bframes = $param["Bframes"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Sar",$param) and $param["Sar"] !== null) {
            $this->Sar = $param["Sar"];
        }

        if (array_key_exists("NoScenecut",$param) and $param["NoScenecut"] !== null) {
            $this->NoScenecut = $param["NoScenecut"];
        }

        if (array_key_exists("BitDepth",$param) and $param["BitDepth"] !== null) {
            $this->BitDepth = $param["BitDepth"];
        }

        if (array_key_exists("RawPts",$param) and $param["RawPts"] !== null) {
            $this->RawPts = $param["RawPts"];
        }

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }

        if (array_key_exists("SegmentSpecificInfo",$param) and $param["SegmentSpecificInfo"] !== null) {
            $this->SegmentSpecificInfo = new SegmentSpecificInfo();
            $this->SegmentSpecificInfo->deserialize($param["SegmentSpecificInfo"]);
        }

        if (array_key_exists("ScenarioBased",$param) and $param["ScenarioBased"] !== null) {
            $this->ScenarioBased = $param["ScenarioBased"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            $this->CompressType = $param["CompressType"];
        }
    }
}
