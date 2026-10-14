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

Note: av1 encoding containers currently only support mp4, webm, and mkv.
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

Note: av1 encoding containers currently only support mp4, webm, and mkv.
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
 * @method integer getBitrate() Obtain Video stream bitrate, in kbps. Value range: 0 and [128, 100000].
If the value is 0, the bitrate of the video will be the same as that of the source video.
 * @method void setBitrate(integer $Bitrate) Set Video stream bitrate, in kbps. Value range: 0 and [128, 100000].
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
 * @method integer getHeight() Obtain Maximum height (or short side) of the video stream. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
 * @method void setHeight(integer $Height) Set Maximum height (or short side) of the video stream. Value range: 0 and [128, 4096]. Unit: px.
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
 * @method string getGopUnit() Obtain Gop value unit. Value range:
frame: indicates frame
second: indicates second
Default value: frame
 * @method void setGopUnit(string $GopUnit) Set Gop value unit. Value range:
frame: indicates frame
second: indicates second
Default value: frame
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
 * @method integer getVcrf() Obtain Control factor for constant video bitrate. Value range: [0, 51]. If not specified, it means "auto". If there are no special requirements, it is advisable not to specify this parameter.
If Mode is set to VBR and Vcrf is configured, MPS processes video in VBR mode, taking into account both Vcrf and Bitrate parameter settings to balance video quality, bitrate, transcoding efficiency, and file size.
When Mode is set to CRF, the Bitrate setting will become invalid, and encoding will be performed based on the Vcrf value.
If Mode is set to ABR or CBR, the Vcrf value does not need to be configured.
 * @method void setVcrf(integer $Vcrf) Set Control factor for constant video bitrate. Value range: [0, 51]. If not specified, it means "auto". If there are no special requirements, it is advisable not to specify this parameter.
If Mode is set to VBR and Vcrf is configured, MPS processes video in VBR mode, taking into account both Vcrf and Bitrate parameter settings to balance video quality, bitrate, transcoding efficiency, and file size.
When Mode is set to CRF, the Bitrate setting will become invalid, and encoding will be performed based on the Vcrf value.
If Mode is set to ABR or CBR, the Vcrf value does not need to be configured.
 * @method integer getHlsTime() Obtain Average segment duration. Value range: (0-10], unit: second.
If not specified, it means auto. The appropriate segment duration will be automatically selected based on video features such as GOP.
 * @method void setHlsTime(integer $HlsTime) Set Average segment duration. Value range: (0-10], unit: second.
If not specified, it means auto. The appropriate segment duration will be automatically selected based on video features such as GOP.
 * @method integer getSegmentType() Obtain hls fragment type. Available values:
<li>0: HLS+TS segment.</li>
<li>2:HLS+TS byte range</li>
<li>7: HLS+MP4 segment.</li>
<li>5:HLS+MP4 byte range</li>
Default value: 0
Note: This field is used for ordinary/TSC transcoding settings and does not take effect for adaptive bitrate streams. To configure the shard type for an adaptive bitrate stream, use the outer field.
 * @method void setSegmentType(integer $SegmentType) Set hls fragment type. Available values:
<li>0: HLS+TS segment.</li>
<li>2:HLS+TS byte range</li>
<li>7: HLS+MP4 segment.</li>
<li>5:HLS+MP4 byte range</li>
Default value: 0
Note: This field is used for ordinary/TSC transcoding settings and does not take effect for adaptive bitrate streams. To configure the shard type for an adaptive bitrate stream, use the outer field.
 * @method integer getFpsDenominator() Obtain Denominator of the frame rate.
Note: The value must be greater than 0.
 * @method void setFpsDenominator(integer $FpsDenominator) Set Denominator of the frame rate.
Note: The value must be greater than 0.
 * @method string getStereo3dType() Obtain 3D video splicing mode. It takes effect only for mv-hevc and 3D videos. Available values:
<li>side_by_side: left-right layout arrangement of the original video content.</li>
<li>top_bottom: top-bottom layout arrangement of the original video content.</li>
Billing will be based on the segmented resolution size to report usage and charges.
Default value: side_by_side.
 * @method void setStereo3dType(string $Stereo3dType) Set 3D video splicing mode. It takes effect only for mv-hevc and 3D videos. Available values:
<li>side_by_side: left-right layout arrangement of the original video content.</li>
<li>top_bottom: top-bottom layout arrangement of the original video content.</li>
Billing will be based on the segmented resolution size to report usage and charges.
Default value: side_by_side.
 * @method string getVideoProfile() Obtain Profile, suitable for different scenarios.
baseline: It only supports I/P-frames and non-interlaced scenarios, and is suitable for scenarios such as video calls and mobile videos.
Main: Mainstream Profile, provides I-frames, P-frames, and B-frames, and supports both interlaced and non-interlaced modes. It is mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices.
high: Highest encoding level. It adds 8X8 prediction to Main Profile and supports custom quantization. It is widely used in Blu-ray storage, HDTV, and other scenarios.
default: automatic filling along with the original video.    

This configuration appears only when the encoding standard is set to H264. baseline/main/high is supported. Default value: default
 * @method void setVideoProfile(string $VideoProfile) Set Profile, suitable for different scenarios.
baseline: It only supports I/P-frames and non-interlaced scenarios, and is suitable for scenarios such as video calls and mobile videos.
Main: Mainstream Profile, provides I-frames, P-frames, and B-frames, and supports both interlaced and non-interlaced modes. It is mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices.
high: Highest encoding level. It adds 8X8 prediction to Main Profile and supports custom quantization. It is widely used in Blu-ray storage, HDTV, and other scenarios.
default: automatic filling along with the original video.    

This configuration appears only when the encoding standard is set to H264. baseline/main/high is supported. Default value: default
 * @method string getVideoLevel() Obtain Encoder level. Default value: auto ("")
If the encoding standard is set to H264, the following options are supported: "", 1, 1.1, 1.2, 1.3, 2, 2.1, 2.2, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, and 5.1.
If the encoding standard is set to H265, the following options are supported: "", 1, 2, 2.1, 3, 3.1, 4, 4.1, 5, 5.1, 5.2, 6, 6.1, 6.2, and 8.5.
 * @method void setVideoLevel(string $VideoLevel) Set Encoder level. Default value: auto ("")
If the encoding standard is set to H264, the following options are supported: "", 1, 1.1, 1.2, 1.3, 2, 2.1, 2.2, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, and 5.1.
If the encoding standard is set to H265, the following options are supported: "", 1, 2, 2.1, 3, 3.1, 4, 4.1, 5, 5.1, 5.2, 6, 6.1, 6.2, and 8.5.
 * @method integer getBframes() Obtain Number of B-frames between reference frames. The default is auto, and a range of 0 - 16 is supported.
Note: Leaving it blank means using the auto option.
 * @method void setBframes(integer $Bframes) Set Number of B-frames between reference frames. The default is auto, and a range of 0 - 16 is supported.
Note: Leaving it blank means using the auto option.
 * @method string getMode() Obtain Bitrate control mode. Available values:
VBR (Variable Bit Rate): adjust the output bitrate based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements.
ABR (Average Bit Rate): Try to keep the average bitrate of the output video stable as much as possible, but allow short-term bitrate fluctuation. It is suitable for scenarios where the overall bitrate needs to be minimized while maintaining a certain image quality.
CBR (Constant Bit Rate): maintains a constant output bitrate during video encoding, regardless of image complexity changes. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming.
VCRF (Constant Rate Factor): A constant quality factor. It controls video quality by setting a quality factor to achieve constant quality encoding of videos. The bitrate is automatically adjusted based on content complexity, making it suitable for scenarios where maintaining a certain quality is desired.
VBR is selected by default.
 * @method void setMode(string $Mode) Set Bitrate control mode. Available values:
VBR (Variable Bit Rate): adjust the output bitrate based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements.
ABR (Average Bit Rate): Try to keep the average bitrate of the output video stable as much as possible, but allow short-term bitrate fluctuation. It is suitable for scenarios where the overall bitrate needs to be minimized while maintaining a certain image quality.
CBR (Constant Bit Rate): maintains a constant output bitrate during video encoding, regardless of image complexity changes. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming.
VCRF (Constant Rate Factor): A constant quality factor. It controls video quality by setting a quality factor to achieve constant quality encoding of videos. The bitrate is automatically adjusted based on content complexity, making it suitable for scenarios where maintaining a certain quality is desired.
VBR is selected by default.
 * @method string getSar() Obtain Display aspect ratio. Optional values: [1:1, 2:1, default]
Default value: default
 * @method void setSar(string $Sar) Set Display aspect ratio. Optional values: [1:1, 2:1, default]
Default value: default
 * @method integer getNoScenecut() Obtain Adaptive I-frame decision. When it is enabled, Media Processing Service will automatically identify transition points between different scenarios in the video (usually they are visually distinct frames, such as those of switching from one shot to another) and adaptively insert keyframes (I-frames) at these points to improve the random accessibility and encoding efficiency of the video. Available values:
0: Disable adaptive I-frame decision 
1: Enable the adaptive I-frame decision
Default value: 0
 * @method void setNoScenecut(integer $NoScenecut) Set Adaptive I-frame decision. When it is enabled, Media Processing Service will automatically identify transition points between different scenarios in the video (usually they are visually distinct frames, such as those of switching from one shot to another) and adaptively insert keyframes (I-frames) at these points to improve the random accessibility and encoding efficiency of the video. Available values:
0: Disable adaptive I-frame decision 
1: Enable the adaptive I-frame decision
Default value: 0
 * @method integer getBitDepth() Obtain Bit: 8/10 is supported. Default value: 8
 * @method void setBitDepth(integer $BitDepth) Set Bit: 8/10 is supported. Default value: 8
 * @method integer getRawPts() Obtain Preserve original timestamp. Optional values:
0: Disabled
1: Indicates open
Default value: Disabled
 * @method void setRawPts(integer $RawPts) Set Preserve original timestamp. Optional values:
0: Disabled
1: Indicates open
Default value: Disabled
 * @method integer getCompress() Obtain Proportional compression bitrate. When enabled, the output video's bitrate is adjusted according to the proportion. After the compression ratio is entered, the system automatically calculates the target output bitrate based on the source video bitrate. Compression ratio range: 0-100
Leaving this value blank means it is not enabled by default.
 * @method void setCompress(integer $Compress) Set Proportional compression bitrate. When enabled, the output video's bitrate is adjusted according to the proportion. After the compression ratio is entered, the system automatically calculates the target output bitrate based on the source video bitrate. Compression ratio range: 0-100
Leaving this value blank means it is not enabled by default.
 * @method SegmentSpecificInfo getSegmentSpecificInfo() Obtain Segment duration at startup
 * @method void setSegmentSpecificInfo(SegmentSpecificInfo $SegmentSpecificInfo) Set Segment duration at startup
 * @method integer getScenarioBased() Obtain Whether to enable scenario-based settings for the template 
0: disable 
1: enable 
Default value: 0	
Note: The values of the SceneType and CompressType fields are effective only when the value of this field is 1.
 * @method void setScenarioBased(integer $ScenarioBased) Set Whether to enable scenario-based settings for the template 
0: disable 
1: enable 
Default value: 0	
Note: The values of the SceneType and CompressType fields are effective only when the value of this field is 1.
 * @method string getSceneType() Obtain Video scenario. Optional values: 
normal: General transcoding scenario: General transcoding and compression scenario.
pgc: PGC HD TV shows and movies: At the time of compression, focus is placed on the viewing experience of TV shows and movies and ROI encoding is performed according to their characteristics, while high-quality contents of videos and audio are retained. 
materials_video: HD materials: Scenario involving material resources, where requirements for image quality are extremely high and there are many transparent images, with almost no visual loss during compression. 
ugc: UGC content: It is suitable for a wide range of UGC/short video scenarios, with an optimized encoding bitrate for short video characteristics, improved image quality, and enhanced business QOS/QOE metrics. 
e-commerce_video: Fashion show/e-commerce: During compression, emphasis is placed on detail clarity and ROI enhancement, with a particular focus on maintaining the image quality of the face region. 
educational_video: Education: At the time of compression, emphasis is placed on the clarity and readability of text and images to help students better understand the content, ensuring that the teaching content is clearly conveyed. 
Default value: normal.
Note: To use this value, the value of ScenarioBased must be 1. Otherwise, this value does not take effect.
 * @method void setSceneType(string $SceneType) Set Video scenario. Optional values: 
normal: General transcoding scenario: General transcoding and compression scenario.
pgc: PGC HD TV shows and movies: At the time of compression, focus is placed on the viewing experience of TV shows and movies and ROI encoding is performed according to their characteristics, while high-quality contents of videos and audio are retained. 
materials_video: HD materials: Scenario involving material resources, where requirements for image quality are extremely high and there are many transparent images, with almost no visual loss during compression. 
ugc: UGC content: It is suitable for a wide range of UGC/short video scenarios, with an optimized encoding bitrate for short video characteristics, improved image quality, and enhanced business QOS/QOE metrics. 
e-commerce_video: Fashion show/e-commerce: During compression, emphasis is placed on detail clarity and ROI enhancement, with a particular focus on maintaining the image quality of the face region. 
educational_video: Education: At the time of compression, emphasis is placed on the clarity and readability of text and images to help students better understand the content, ensuring that the teaching content is clearly conveyed. 
Default value: normal.
Note: To use this value, the value of ScenarioBased must be 1. Otherwise, this value does not take effect.
 * @method string getCompressType() Obtain Transcoding policy. Optional values: 
ultra_compress: Extreme compression: Compared to standard compression, this policy can maximize bitrate compression while ensuring a certain level of image quality, thus greatly saving bandwidth and storage costs. 
standard_compress: Comprehensively optimal: The compression ratio and image quality are balanced, and files are compressed as much as possible without a noticeable reduction in subjective image quality. Only audio and video TSC transcoding fees are charged for this policy. 
high_compress: Bitrate priority: Priority is given to reducing file size, which may result in certain image quality loss. Only audio and video TSC transcoding fees are charged for this policy. 
low_compress: Image quality priority: Priority is given to ensuring image quality, and the size of compressed files may be relatively large. Only audio and video TSC transcoding fees are charged for this policy. 
Default value: standard_compress. 
Note: The ultra_compress policy is not recommended for use if you need to watch videos on TV. The billing standard for the ultra_compress policy is TSC transcoding + audio/video enhancement-artifacts removal.
Note: To use this value, the value of ScenarioBased must be 1. Otherwise, this value does not take effect.
 * @method void setCompressType(string $CompressType) Set Transcoding policy. Optional values: 
ultra_compress: Extreme compression: Compared to standard compression, this policy can maximize bitrate compression while ensuring a certain level of image quality, thus greatly saving bandwidth and storage costs. 
standard_compress: Comprehensively optimal: The compression ratio and image quality are balanced, and files are compressed as much as possible without a noticeable reduction in subjective image quality. Only audio and video TSC transcoding fees are charged for this policy. 
high_compress: Bitrate priority: Priority is given to reducing file size, which may result in certain image quality loss. Only audio and video TSC transcoding fees are charged for this policy. 
low_compress: Image quality priority: Priority is given to ensuring image quality, and the size of compressed files may be relatively large. Only audio and video TSC transcoding fees are charged for this policy. 
Default value: standard_compress. 
Note: The ultra_compress policy is not recommended for use if you need to watch videos on TV. The billing standard for the ultra_compress policy is TSC transcoding + audio/video enhancement-artifacts removal.
Note: To use this value, the value of ScenarioBased must be 1. Otherwise, this value does not take effect.
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

Note: av1 encoding containers currently only support mp4, webm, and mkv.
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
     * @var integer Video stream bitrate, in kbps. Value range: 0 and [128, 100000].
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
     * @var integer Maximum height (or short side) of the video stream. Value range: 0 and [128, 4096]. Unit: px.
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
     * @var string Gop value unit. Value range:
frame: indicates frame
second: indicates second
Default value: frame
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
     * @var integer Control factor for constant video bitrate. Value range: [0, 51]. If not specified, it means "auto". If there are no special requirements, it is advisable not to specify this parameter.
If Mode is set to VBR and Vcrf is configured, MPS processes video in VBR mode, taking into account both Vcrf and Bitrate parameter settings to balance video quality, bitrate, transcoding efficiency, and file size.
When Mode is set to CRF, the Bitrate setting will become invalid, and encoding will be performed based on the Vcrf value.
If Mode is set to ABR or CBR, the Vcrf value does not need to be configured.
     */
    public $Vcrf;

    /**
     * @var integer Average segment duration. Value range: (0-10], unit: second.
If not specified, it means auto. The appropriate segment duration will be automatically selected based on video features such as GOP.
     */
    public $HlsTime;

    /**
     * @var integer hls fragment type. Available values:
<li>0: HLS+TS segment.</li>
<li>2:HLS+TS byte range</li>
<li>7: HLS+MP4 segment.</li>
<li>5:HLS+MP4 byte range</li>
Default value: 0
Note: This field is used for ordinary/TSC transcoding settings and does not take effect for adaptive bitrate streams. To configure the shard type for an adaptive bitrate stream, use the outer field.
     */
    public $SegmentType;

    /**
     * @var integer Denominator of the frame rate.
Note: The value must be greater than 0.
     */
    public $FpsDenominator;

    /**
     * @var string 3D video splicing mode. It takes effect only for mv-hevc and 3D videos. Available values:
<li>side_by_side: left-right layout arrangement of the original video content.</li>
<li>top_bottom: top-bottom layout arrangement of the original video content.</li>
Billing will be based on the segmented resolution size to report usage and charges.
Default value: side_by_side.
     */
    public $Stereo3dType;

    /**
     * @var string Profile, suitable for different scenarios.
baseline: It only supports I/P-frames and non-interlaced scenarios, and is suitable for scenarios such as video calls and mobile videos.
Main: Mainstream Profile, provides I-frames, P-frames, and B-frames, and supports both interlaced and non-interlaced modes. It is mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices.
high: Highest encoding level. It adds 8X8 prediction to Main Profile and supports custom quantization. It is widely used in Blu-ray storage, HDTV, and other scenarios.
default: automatic filling along with the original video.    

This configuration appears only when the encoding standard is set to H264. baseline/main/high is supported. Default value: default
     */
    public $VideoProfile;

    /**
     * @var string Encoder level. Default value: auto ("")
If the encoding standard is set to H264, the following options are supported: "", 1, 1.1, 1.2, 1.3, 2, 2.1, 2.2, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, and 5.1.
If the encoding standard is set to H265, the following options are supported: "", 1, 2, 2.1, 3, 3.1, 4, 4.1, 5, 5.1, 5.2, 6, 6.1, 6.2, and 8.5.
     */
    public $VideoLevel;

    /**
     * @var integer Number of B-frames between reference frames. The default is auto, and a range of 0 - 16 is supported.
Note: Leaving it blank means using the auto option.
     */
    public $Bframes;

    /**
     * @var string Bitrate control mode. Available values:
VBR (Variable Bit Rate): adjust the output bitrate based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements.
ABR (Average Bit Rate): Try to keep the average bitrate of the output video stable as much as possible, but allow short-term bitrate fluctuation. It is suitable for scenarios where the overall bitrate needs to be minimized while maintaining a certain image quality.
CBR (Constant Bit Rate): maintains a constant output bitrate during video encoding, regardless of image complexity changes. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming.
VCRF (Constant Rate Factor): A constant quality factor. It controls video quality by setting a quality factor to achieve constant quality encoding of videos. The bitrate is automatically adjusted based on content complexity, making it suitable for scenarios where maintaining a certain quality is desired.
VBR is selected by default.
     */
    public $Mode;

    /**
     * @var string Display aspect ratio. Optional values: [1:1, 2:1, default]
Default value: default
     */
    public $Sar;

    /**
     * @var integer Adaptive I-frame decision. When it is enabled, Media Processing Service will automatically identify transition points between different scenarios in the video (usually they are visually distinct frames, such as those of switching from one shot to another) and adaptively insert keyframes (I-frames) at these points to improve the random accessibility and encoding efficiency of the video. Available values:
0: Disable adaptive I-frame decision 
1: Enable the adaptive I-frame decision
Default value: 0
     */
    public $NoScenecut;

    /**
     * @var integer Bit: 8/10 is supported. Default value: 8
     */
    public $BitDepth;

    /**
     * @var integer Preserve original timestamp. Optional values:
0: Disabled
1: Indicates open
Default value: Disabled
     */
    public $RawPts;

    /**
     * @var integer Proportional compression bitrate. When enabled, the output video's bitrate is adjusted according to the proportion. After the compression ratio is entered, the system automatically calculates the target output bitrate based on the source video bitrate. Compression ratio range: 0-100
Leaving this value blank means it is not enabled by default.
     */
    public $Compress;

    /**
     * @var SegmentSpecificInfo Segment duration at startup
     */
    public $SegmentSpecificInfo;

    /**
     * @var integer Whether to enable scenario-based settings for the template 
0: disable 
1: enable 
Default value: 0	
Note: The values of the SceneType and CompressType fields are effective only when the value of this field is 1.
     */
    public $ScenarioBased;

    /**
     * @var string Video scenario. Optional values: 
normal: General transcoding scenario: General transcoding and compression scenario.
pgc: PGC HD TV shows and movies: At the time of compression, focus is placed on the viewing experience of TV shows and movies and ROI encoding is performed according to their characteristics, while high-quality contents of videos and audio are retained. 
materials_video: HD materials: Scenario involving material resources, where requirements for image quality are extremely high and there are many transparent images, with almost no visual loss during compression. 
ugc: UGC content: It is suitable for a wide range of UGC/short video scenarios, with an optimized encoding bitrate for short video characteristics, improved image quality, and enhanced business QOS/QOE metrics. 
e-commerce_video: Fashion show/e-commerce: During compression, emphasis is placed on detail clarity and ROI enhancement, with a particular focus on maintaining the image quality of the face region. 
educational_video: Education: At the time of compression, emphasis is placed on the clarity and readability of text and images to help students better understand the content, ensuring that the teaching content is clearly conveyed. 
Default value: normal.
Note: To use this value, the value of ScenarioBased must be 1. Otherwise, this value does not take effect.
     */
    public $SceneType;

    /**
     * @var string Transcoding policy. Optional values: 
ultra_compress: Extreme compression: Compared to standard compression, this policy can maximize bitrate compression while ensuring a certain level of image quality, thus greatly saving bandwidth and storage costs. 
standard_compress: Comprehensively optimal: The compression ratio and image quality are balanced, and files are compressed as much as possible without a noticeable reduction in subjective image quality. Only audio and video TSC transcoding fees are charged for this policy. 
high_compress: Bitrate priority: Priority is given to reducing file size, which may result in certain image quality loss. Only audio and video TSC transcoding fees are charged for this policy. 
low_compress: Image quality priority: Priority is given to ensuring image quality, and the size of compressed files may be relatively large. Only audio and video TSC transcoding fees are charged for this policy. 
Default value: standard_compress. 
Note: The ultra_compress policy is not recommended for use if you need to watch videos on TV. The billing standard for the ultra_compress policy is TSC transcoding + audio/video enhancement-artifacts removal.
Note: To use this value, the value of ScenarioBased must be 1. Otherwise, this value does not take effect.
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

Note: av1 encoding containers currently only support mp4, webm, and mkv.
Note: H.266 encoding containers currently only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers currently only support webm and mkv.
Note: MPEG2 and dnxhd encoding containers currently only support mxf.
Note: The MV-HEVC codec currently only supports mp4, hls, and mov. Among them, the HLS format only supports the MP4 segmented format and requires the input source to be a panoramic video (with multiple views).
     * @param integer $Fps Video frame rate. Value range:
When FpsDenominator is empty, the range is [0, 120], in Hz.
When FpsDenominator is not empty, the Fps/FpsDenominator range is [0, 120].
If the value is 0, the frame rate will be the same as that of the source video.
     * @param integer $Bitrate Video stream bitrate, in kbps. Value range: 0 and [128, 100000].
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
     * @param integer $Height Maximum height (or short side) of the video stream. Value range: 0 and [128, 4096]. Unit: px.
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Default value: 0.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
     * @param integer $Gop Interval between I-frames (keyframes), which can be customized in frames or seconds. GOP value range: 0 and [1, 100000].
If this parameter is 0 or left blank, the system will automatically set the GOP length.
     * @param string $GopUnit Gop value unit. Value range:
frame: indicates frame
second: indicates second
Default value: frame
     * @param string $FillType Filling method, when video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling modes:
<li> stretch: stretches each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li>black: Keep black, maintain video aspect ratio, edges filled with black.</li>
<li>White: Leave blank, maintain video aspect ratio, edge remainder filled with white.</li>
<li>gauss: Gaussian blur, maintain video aspect ratio, and use Gaussian blur filling for the rest of the edges.</li>
<li>smarttailor: intelligent cropping: smartly select video images to ensure proportional image cropping.</li>
Default value: black.
     * @param integer $Vcrf Control factor for constant video bitrate. Value range: [0, 51]. If not specified, it means "auto". If there are no special requirements, it is advisable not to specify this parameter.
If Mode is set to VBR and Vcrf is configured, MPS processes video in VBR mode, taking into account both Vcrf and Bitrate parameter settings to balance video quality, bitrate, transcoding efficiency, and file size.
When Mode is set to CRF, the Bitrate setting will become invalid, and encoding will be performed based on the Vcrf value.
If Mode is set to ABR or CBR, the Vcrf value does not need to be configured.
     * @param integer $HlsTime Average segment duration. Value range: (0-10], unit: second.
If not specified, it means auto. The appropriate segment duration will be automatically selected based on video features such as GOP.
     * @param integer $SegmentType hls fragment type. Available values:
<li>0: HLS+TS segment.</li>
<li>2:HLS+TS byte range</li>
<li>7: HLS+MP4 segment.</li>
<li>5:HLS+MP4 byte range</li>
Default value: 0
Note: This field is used for ordinary/TSC transcoding settings and does not take effect for adaptive bitrate streams. To configure the shard type for an adaptive bitrate stream, use the outer field.
     * @param integer $FpsDenominator Denominator of the frame rate.
Note: The value must be greater than 0.
     * @param string $Stereo3dType 3D video splicing mode. It takes effect only for mv-hevc and 3D videos. Available values:
<li>side_by_side: left-right layout arrangement of the original video content.</li>
<li>top_bottom: top-bottom layout arrangement of the original video content.</li>
Billing will be based on the segmented resolution size to report usage and charges.
Default value: side_by_side.
     * @param string $VideoProfile Profile, suitable for different scenarios.
baseline: It only supports I/P-frames and non-interlaced scenarios, and is suitable for scenarios such as video calls and mobile videos.
Main: Mainstream Profile, provides I-frames, P-frames, and B-frames, and supports both interlaced and non-interlaced modes. It is mainly used in mainstream audio and video consumption products such as video players and streaming media transmission devices.
high: Highest encoding level. It adds 8X8 prediction to Main Profile and supports custom quantization. It is widely used in Blu-ray storage, HDTV, and other scenarios.
default: automatic filling along with the original video.    

This configuration appears only when the encoding standard is set to H264. baseline/main/high is supported. Default value: default
     * @param string $VideoLevel Encoder level. Default value: auto ("")
If the encoding standard is set to H264, the following options are supported: "", 1, 1.1, 1.2, 1.3, 2, 2.1, 2.2, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, and 5.1.
If the encoding standard is set to H265, the following options are supported: "", 1, 2, 2.1, 3, 3.1, 4, 4.1, 5, 5.1, 5.2, 6, 6.1, 6.2, and 8.5.
     * @param integer $Bframes Number of B-frames between reference frames. The default is auto, and a range of 0 - 16 is supported.
Note: Leaving it blank means using the auto option.
     * @param string $Mode Bitrate control mode. Available values:
VBR (Variable Bit Rate): adjust the output bitrate based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements.
ABR (Average Bit Rate): Try to keep the average bitrate of the output video stable as much as possible, but allow short-term bitrate fluctuation. It is suitable for scenarios where the overall bitrate needs to be minimized while maintaining a certain image quality.
CBR (Constant Bit Rate): maintains a constant output bitrate during video encoding, regardless of image complexity changes. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming.
VCRF (Constant Rate Factor): A constant quality factor. It controls video quality by setting a quality factor to achieve constant quality encoding of videos. The bitrate is automatically adjusted based on content complexity, making it suitable for scenarios where maintaining a certain quality is desired.
VBR is selected by default.
     * @param string $Sar Display aspect ratio. Optional values: [1:1, 2:1, default]
Default value: default
     * @param integer $NoScenecut Adaptive I-frame decision. When it is enabled, Media Processing Service will automatically identify transition points between different scenarios in the video (usually they are visually distinct frames, such as those of switching from one shot to another) and adaptively insert keyframes (I-frames) at these points to improve the random accessibility and encoding efficiency of the video. Available values:
0: Disable adaptive I-frame decision 
1: Enable the adaptive I-frame decision
Default value: 0
     * @param integer $BitDepth Bit: 8/10 is supported. Default value: 8
     * @param integer $RawPts Preserve original timestamp. Optional values:
0: Disabled
1: Indicates open
Default value: Disabled
     * @param integer $Compress Proportional compression bitrate. When enabled, the output video's bitrate is adjusted according to the proportion. After the compression ratio is entered, the system automatically calculates the target output bitrate based on the source video bitrate. Compression ratio range: 0-100
Leaving this value blank means it is not enabled by default.
     * @param SegmentSpecificInfo $SegmentSpecificInfo Segment duration at startup
     * @param integer $ScenarioBased Whether to enable scenario-based settings for the template 
0: disable 
1: enable 
Default value: 0	
Note: The values of the SceneType and CompressType fields are effective only when the value of this field is 1.
     * @param string $SceneType Video scenario. Optional values: 
normal: General transcoding scenario: General transcoding and compression scenario.
pgc: PGC HD TV shows and movies: At the time of compression, focus is placed on the viewing experience of TV shows and movies and ROI encoding is performed according to their characteristics, while high-quality contents of videos and audio are retained. 
materials_video: HD materials: Scenario involving material resources, where requirements for image quality are extremely high and there are many transparent images, with almost no visual loss during compression. 
ugc: UGC content: It is suitable for a wide range of UGC/short video scenarios, with an optimized encoding bitrate for short video characteristics, improved image quality, and enhanced business QOS/QOE metrics. 
e-commerce_video: Fashion show/e-commerce: During compression, emphasis is placed on detail clarity and ROI enhancement, with a particular focus on maintaining the image quality of the face region. 
educational_video: Education: At the time of compression, emphasis is placed on the clarity and readability of text and images to help students better understand the content, ensuring that the teaching content is clearly conveyed. 
Default value: normal.
Note: To use this value, the value of ScenarioBased must be 1. Otherwise, this value does not take effect.
     * @param string $CompressType Transcoding policy. Optional values: 
ultra_compress: Extreme compression: Compared to standard compression, this policy can maximize bitrate compression while ensuring a certain level of image quality, thus greatly saving bandwidth and storage costs. 
standard_compress: Comprehensively optimal: The compression ratio and image quality are balanced, and files are compressed as much as possible without a noticeable reduction in subjective image quality. Only audio and video TSC transcoding fees are charged for this policy. 
high_compress: Bitrate priority: Priority is given to reducing file size, which may result in certain image quality loss. Only audio and video TSC transcoding fees are charged for this policy. 
low_compress: Image quality priority: Priority is given to ensuring image quality, and the size of compressed files may be relatively large. Only audio and video TSC transcoding fees are charged for this policy. 
Default value: standard_compress. 
Note: The ultra_compress policy is not recommended for use if you need to watch videos on TV. The billing standard for the ultra_compress policy is TSC transcoding + audio/video enhancement-artifacts removal.
Note: To use this value, the value of ScenarioBased must be 1. Otherwise, this value does not take effect.
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
