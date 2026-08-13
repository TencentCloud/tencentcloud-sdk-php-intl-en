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
 * Video stream configuration parameter
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

Note: The av1 encoding container currently only supports mp4, webm, and mkv.
Note: H.266 encoding containers only support mp4, hls, ts, and mov.
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

Note: The av1 encoding container currently only supports mp4, webm, and mkv.
Note: H.266 encoding containers only support mp4, hls, ts, and mov.
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
 * @method integer getBitrate() Obtain Bitrate of video stream, value ranges from 0 to [128, 100000], measurement unit: kbps.
If the value is 0, the bitrate of the video will be the same as that of the source video.
 * @method void setBitrate(integer $Bitrate) Set Bitrate of video stream, value ranges from 0 to [128, 100000], measurement unit: kbps.
If the value is 0, the bitrate of the video will be the same as that of the source video.
 * @method string getResolutionAdaptive() Obtain Resolution adaptation, available values:
<li>open: Turn on. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: Close. At this point, Width represents the video width, and Height indicates the video height.</li>
Note: In self-adaptation mode, Width cannot be less than Height.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaptation, available values:
<li>open: Turn on. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: Close. At this point, Width represents the video width, and Height indicates the video height.</li>
Note: In self-adaptation mode, Width cannot be less than Height.
 * @method integer getWidth() Obtain Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
 * @method void setWidth(integer $Width) Set Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
 * @method integer getHeight() Obtain Maximum value of video stream height (or short side). Value ranges from 0 to [128, 4096]. Measurement unit: px.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
 * @method void setHeight(integer $Height) Set Maximum value of video stream height (or short side). Value ranges from 0 to [128, 4096]. Measurement unit: px.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
 * @method integer getGop() Obtain Interval between I-frames, customizable by frame or second. GOP length value ranges from 0 to [1, 100000].
When set to 0, the system will automatically set the gop length.
 * @method void setGop(integer $Gop) Set Interval between I-frames, customizable by frame or second. GOP length value ranges from 0 to [1, 100000].
When set to 0, the system will automatically set the gop length.
 * @method string getGopUnit() Obtain Gop value unit, value range: 
frame: indicates frame 
second: indicates second
Default value: frame
 * @method void setGopUnit(string $GopUnit) Set Gop value unit, value range: 
frame: indicates frame 
second: indicates second
Default value: frame
 * @method string getFillType() Obtain Filling method, when video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling mode:
<li> stretch: Stretch, stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li>black: Keep black, maintain video aspect ratio, edges filled with black.</li>
<li>White: Leave blank, maintain video aspect ratio, edge remainder filled with white.</li>
<li>gauss: Gaussian blur, maintain video aspect ratio, Gaussian blur filling for the rest of the edges.</li>
<li>smarttailor: intelligent cropping. It smartly selects video images to ensure proportional image cropping.</li>
Default value: black.
 * @method void setFillType(string $FillType) Set Filling method, when video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling mode:
<li> stretch: Stretch, stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li>black: Keep black, maintain video aspect ratio, edges filled with black.</li>
<li>White: Leave blank, maintain video aspect ratio, edge remainder filled with white.</li>
<li>gauss: Gaussian blur, maintain video aspect ratio, Gaussian blur filling for the rest of the edges.</li>
<li>smarttailor: intelligent cropping. It smartly selects video images to ensure proportional image cropping.</li>
Default value: black.
 * @method integer getVcrf() Obtain Control factor for constant video bitrate. Value range: [0, 51]. If this parameter is not specified, it means "auto". If there are no special requirements, it is advisable not to specify this parameter.
When the Mode parameter is set to VBR, if the Vcrf value is configured at the same time, MPS processes video in VBR mode with consideration of both Vcrf and Bitrate parameter settings to balance video quality, bitrate, transcoding efficiency, and file size.
When the Mode parameter is set to CRF, the Bitrate setting will become invalid, and encoding is performed based on the Vcrf value.
When the Mode parameter is set to ABR or CBR, the Vcrf value requires no configuration.
Note: When you need to set it to auto, fill in 100.

 * @method void setVcrf(integer $Vcrf) Set Control factor for constant video bitrate. Value range: [0, 51]. If this parameter is not specified, it means "auto". If there are no special requirements, it is advisable not to specify this parameter.
When the Mode parameter is set to VBR, if the Vcrf value is configured at the same time, MPS processes video in VBR mode with consideration of both Vcrf and Bitrate parameter settings to balance video quality, bitrate, transcoding efficiency, and file size.
When the Mode parameter is set to CRF, the Bitrate setting will become invalid, and encoding is performed based on the Vcrf value.
When the Mode parameter is set to ABR or CBR, the Vcrf value requires no configuration.
Note: When you need to set it to auto, fill in 100.

 * @method integer getContentAdaptStream() Obtain Adaptive coding. Available values:
<li>0: Not enabled</li>
<li>1: Turn on</li>
Default value: 0. When this parameter is enabled, multiple streams with different resolutions and bitrates will be self-adaptively generated. Among them, the width and height in VideoTemplate are the maximum resolution among the multiple streams, the bitrate in VideoTemplate is the highest bitrate among the multiple streams, and the vcrf in VideoTemplate is the highest quality among the multiple streams. When resolution, bitrate, and vcrf are not set, the highest resolution generated by the ContentAdaptStream parameter is the resolution of the video source, and the video quality is close to vmaf95. To enable this parameter or learn about billing details, contact your Tencent Cloud business.
 * @method void setContentAdaptStream(integer $ContentAdaptStream) Set Adaptive coding. Available values:
<li>0: Not enabled</li>
<li>1: Turn on</li>
Default value: 0. When this parameter is enabled, multiple streams with different resolutions and bitrates will be self-adaptively generated. Among them, the width and height in VideoTemplate are the maximum resolution among the multiple streams, the bitrate in VideoTemplate is the highest bitrate among the multiple streams, and the vcrf in VideoTemplate is the highest quality among the multiple streams. When resolution, bitrate, and vcrf are not set, the highest resolution generated by the ContentAdaptStream parameter is the resolution of the video source, and the video quality is close to vmaf95. To enable this parameter or learn about billing details, contact your Tencent Cloud business.
 * @method integer getHlsTime() Obtain Average shard duration. Value range: (0-10], unit: second
Default value: 10
Note: It is used only in the HLS format.
 * @method void setHlsTime(integer $HlsTime) Set Average shard duration. Value range: (0-10], unit: second
Default value: 10
Note: It is used only in the HLS format.
 * @method integer getSegmentType() Obtain hls fragment type, available values:
<li>0: HLS+TS segment.</li>
<li>2:HLS+TS byte range</li>
<li>7: HLS+MP4 segment.</li>
<li>5:HLS+MP4 byte range</li>
Default value: 0
Note: This field is used for ordinary/TSC transcoding settings and does not take effect for adaptive bitrate streams. If needed, you can use the outer field to configure the shard type for adaptive bitrate streams.
 * @method void setSegmentType(integer $SegmentType) Set hls fragment type, available values:
<li>0: HLS+TS segment.</li>
<li>2:HLS+TS byte range</li>
<li>7: HLS+MP4 segment.</li>
<li>5:HLS+MP4 byte range</li>
Default value: 0
Note: This field is used for ordinary/TSC transcoding settings and does not take effect for adaptive bitrate streams. If needed, you can use the outer field to configure the shard type for adaptive bitrate streams.
 * @method integer getFpsDenominator() Obtain Denominator of the frame rate
Note: The value must be greater than 0.
 * @method void setFpsDenominator(integer $FpsDenominator) Set Denominator of the frame rate
Note: The value must be greater than 0.
 * @method string getStereo3dType() Obtain 3D video splicing mode, only mv-hevc, takes effect for 3D video, available values:
<li>side_by_side: side-by-side layout of the original video content.</li>
<li>top_bottom: top-bottom layout arrangement of the original video content.</li>
Billing is based on the segmented resolution dimension to report usage amount and cost.
Default value: side_by_side
 * @method void setStereo3dType(string $Stereo3dType) Set 3D video splicing mode, only mv-hevc, takes effect for 3D video, available values:
<li>side_by_side: side-by-side layout of the original video content.</li>
<li>top_bottom: top-bottom layout arrangement of the original video content.</li>
Billing is based on the segmented resolution dimension to report usage amount and cost.
Default value: side_by_side
 * @method string getVideoProfile() Obtain Profile, suitable for different scenarios. 
baseline: It only supports I/P-frames and non-interlaced scenarios, and is suitable for scenarios such as video calls and mobile videos. 
Mainstream Profile, providing I-frames, P-frames, and B-frames, and supporting both interlaced and non-interlaced modes. It is primarily used in mainstream audio and video consumption products such as video players and streaming media transmission devices. 
high: The highest encoding level, adding 8X8 prediction to the Main Profile and supporting custom quantification. Widely used in Blu-ray storage and HDTV scenarios.
default: automatic filling along with the original video

This configuration appears only when the encoding standard is set to H264. Default: default
 * @method void setVideoProfile(string $VideoProfile) Set Profile, suitable for different scenarios. 
baseline: It only supports I/P-frames and non-interlaced scenarios, and is suitable for scenarios such as video calls and mobile videos. 
Mainstream Profile, providing I-frames, P-frames, and B-frames, and supporting both interlaced and non-interlaced modes. It is primarily used in mainstream audio and video consumption products such as video players and streaming media transmission devices. 
high: The highest encoding level, adding 8X8 prediction to the Main Profile and supporting custom quantification. Widely used in Blu-ray storage and HDTV scenarios.
default: automatic filling along with the original video

This configuration appears only when the encoding standard is set to H264. Default: default
 * @method string getVideoLevel() Obtain Encoder level. Default value: auto ("")
If the encoding standard is set to H264, the following options are supported: "", 1, 1.1, -1.2, 1.3, 2, 2.1, 2.2, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, and 5.1. 
If the encoding standard is set to H265, the following options are supported: "", 1, 2, 2.1, 3, 3.1, 4, 4.1, -5, 5.1, 5.2, 6, 6.1, 6.2, and 8.5.
 * @method void setVideoLevel(string $VideoLevel) Set Encoder level. Default value: auto ("")
If the encoding standard is set to H264, the following options are supported: "", 1, 1.1, -1.2, 1.3, 2, 2.1, 2.2, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, and 5.1. 
If the encoding standard is set to H265, the following options are supported: "", 1, 2, 2.1, 3, 3.1, 4, 4.1, -5, 5.1, 5.2, 6, 6.1, 6.2, and 8.5.
 * @method integer getBframes() Obtain Maximum number of consecutive B-frames. The default is auto, and 0 - 16 and -1 are supported.
Note:
-1 indicates auto.	
 * @method void setBframes(integer $Bframes) Set Maximum number of consecutive B-frames. The default is auto, and 0 - 16 and -1 are supported.
Note:
-1 indicates auto.	
 * @method string getMode() Obtain Bitrate control mode. Optional values: 
VBR (Variable Bit Rate): Dynamic bitrate adjusts the output bitrate based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements. 
ABR (Average Bit Rate): Average bitrate. It aims to keep the average bitrate of the output video stable as much as possible, but allows short-term bitrate fluctuation. It is suitable for scenarios where you need to minimize overall bitrate while maintaining a certain image quality. 
CBR (Constant Bit Rate): Constant bit rate. In video encoding, it maintains a constant output bitrate regardless of image complexity changes. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming. 
VCRF (Constant Rate Factor): Constant quality factor. It controls video quality by setting a quality factor to achieve constant quality encoding of videos. Bitrate adjustment based on content complexity. Suitable for scenarios where maintaining a certain quality is desired. 
VBR is selected by default.
 * @method void setMode(string $Mode) Set Bitrate control mode. Optional values: 
VBR (Variable Bit Rate): Dynamic bitrate adjusts the output bitrate based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements. 
ABR (Average Bit Rate): Average bitrate. It aims to keep the average bitrate of the output video stable as much as possible, but allows short-term bitrate fluctuation. It is suitable for scenarios where you need to minimize overall bitrate while maintaining a certain image quality. 
CBR (Constant Bit Rate): Constant bit rate. In video encoding, it maintains a constant output bitrate regardless of image complexity changes. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming. 
VCRF (Constant Rate Factor): Constant quality factor. It controls video quality by setting a quality factor to achieve constant quality encoding of videos. Bitrate adjustment based on content complexity. Suitable for scenarios where maintaining a certain quality is desired. 
VBR is selected by default.
 * @method string getSar() Obtain Display aspect ratio. Optional values: [1:1, 2:1, default]
Default value: default
 * @method void setSar(string $Sar) Set Display aspect ratio. Optional values: [1:1, 2:1, default]
Default value: default
 * @method integer getNoScenecut() Obtain Adaptive I-frame decision. When enabled, Media Processing Service automatically identifies transition points between different scenarios in the video (usually visually distinct frames, such as those of switching from one shot to another) and adaptively inserts keyframes (I-frames) at these points to improve the video's random accessibility and encoding efficiency. Optional values: 
0: Disable adaptive I-frame decision 
1: Enable the adaptive I-frame decision 
Default value: 0	
 * @method void setNoScenecut(integer $NoScenecut) Set Adaptive I-frame decision. When enabled, Media Processing Service automatically identifies transition points between different scenarios in the video (usually visually distinct frames, such as those of switching from one shot to another) and adaptively inserts keyframes (I-frames) at these points to improve the video's random accessibility and encoding efficiency. Optional values: 
0: Disable adaptive I-frame decision 
1: Enable the adaptive I-frame decision 
Default value: 0	
 * @method integer getBitDepth() Obtain Bit: 8/10 is supported. Default value: -	
 * @method void setBitDepth(integer $BitDepth) Set Bit: 8/10 is supported. Default value: -	
 * @method integer getRawPts() Obtain Preserve original timestamp. Optional values: 
0: Disabled 
1: Enabled 
Default value: Disabled	
 * @method void setRawPts(integer $RawPts) Set Preserve original timestamp. Optional values: 
0: Disabled 
1: Enabled 
Default value: Disabled	
 * @method integer getCompress() Obtain Proportional compression bitrate. When enabled, the output video's bitrate is adjusted according to the specified ratio. After the compression ratio is entered, the system automatically calculates the target output bitrate based on the video source bitrate. Compression ratio range: 0-100, optional values: [0-100] and -1. 
Note: -1 indicates auto.	
 * @method void setCompress(integer $Compress) Set Proportional compression bitrate. When enabled, the output video's bitrate is adjusted according to the specified ratio. After the compression ratio is entered, the system automatically calculates the target output bitrate based on the video source bitrate. Compression ratio range: 0-100, optional values: [0-100] and -1. 
Note: -1 indicates auto.	
 * @method SegmentSpecificInfo getSegmentSpecificInfo() Obtain Segment Duration at Startup
 * @method void setSegmentSpecificInfo(SegmentSpecificInfo $SegmentSpecificInfo) Set Segment Duration at Startup
 * @method integer getScenarioBased() Obtain Whether to enable scenario-based settings for the template 
0: disable 
1: enable 
Default value: 0	
Note: SceneType and CompressType field values are effective only when this field value is 1.
 * @method void setScenarioBased(integer $ScenarioBased) Set Whether to enable scenario-based settings for the template 
0: disable 
1: enable 
Default value: 0	
Note: SceneType and CompressType field values are effective only when this field value is 1.
 * @method string getSceneType() Obtain Video scenario. Optional values: 
normal: General transcoding scenario: General transcoding and compression scenario. pgc: PGC HD TV shows and movies: At the time of compression, focus is placed on the viewing experience of TV shows and movies and ROI encoding is performed according to their characteristics, while high-quality contents of videos and audio are retained. 
materials_video: HD materials: Scenario involving material resources, where requirements for image quality are extremely high and there are many transparent images, with almost no visual loss during compression. 
ugc: UGC content: Suitable for a wide range of UGC/short video scenarios, with optimized encoding bitrate for short video characteristics, image quality improvement, and enhanced business QOS/QOE metrics. 
e-commerce_video: Fashion show/e-commerce: During compression, emphasis is placed on detail clarity and ROI enhancement, with a particular focus on maintaining the image quality of the face region. 
educational_video: Education: Compression emphasizes clarity and readability of text and images to help students better understand content and ensure clear conveyance of teaching content.
Default value: normal.
Note: To use this value, ScenarioBased must be 1, otherwise it does not take effect.
 * @method void setSceneType(string $SceneType) Set Video scenario. Optional values: 
normal: General transcoding scenario: General transcoding and compression scenario. pgc: PGC HD TV shows and movies: At the time of compression, focus is placed on the viewing experience of TV shows and movies and ROI encoding is performed according to their characteristics, while high-quality contents of videos and audio are retained. 
materials_video: HD materials: Scenario involving material resources, where requirements for image quality are extremely high and there are many transparent images, with almost no visual loss during compression. 
ugc: UGC content: Suitable for a wide range of UGC/short video scenarios, with optimized encoding bitrate for short video characteristics, image quality improvement, and enhanced business QOS/QOE metrics. 
e-commerce_video: Fashion show/e-commerce: During compression, emphasis is placed on detail clarity and ROI enhancement, with a particular focus on maintaining the image quality of the face region. 
educational_video: Education: Compression emphasizes clarity and readability of text and images to help students better understand content and ensure clear conveyance of teaching content.
Default value: normal.
Note: To use this value, ScenarioBased must be 1, otherwise it does not take effect.
 * @method string getCompressType() Obtain Transcoding policy. Optional values: 
ultra_compress: Extreme compression: Compared to standard compression, this policy can maximize bitrate compression while ensuring a certain level of image quality, thus greatly saving bandwidth and storage costs. 
standard_compress: Comprehensively optimal: The compression ratio and image quality are balanced, and files are compressed as much as possible without a noticeable reduction in subjective image quality. Only audio and video TSC transcoding fees are charged for the policy. 
high_compress: Bitrate priority: Priority is given to reducing file size, which may result in certain image quality loss. Only audio and video TSC transcoding fees are charged for this policy. 
low_compress: Image quality priority: Priority is given to ensuring image quality, and the size of the compressed file may be relatively large. Only audio and video Top Speed Codec transcoding fees are charged for this policy. 
Default value: standard_compress. 
Note: To watch videos on TV, the ultra_compress policy is not recommended. The billing standard for the ultra_compress policy is TSC transcoding + audio/video enhancement - artifacts removal.
Note: To use this value, ScenarioBased must be 1, otherwise it does not take effect.
 * @method void setCompressType(string $CompressType) Set Transcoding policy. Optional values: 
ultra_compress: Extreme compression: Compared to standard compression, this policy can maximize bitrate compression while ensuring a certain level of image quality, thus greatly saving bandwidth and storage costs. 
standard_compress: Comprehensively optimal: The compression ratio and image quality are balanced, and files are compressed as much as possible without a noticeable reduction in subjective image quality. Only audio and video TSC transcoding fees are charged for the policy. 
high_compress: Bitrate priority: Priority is given to reducing file size, which may result in certain image quality loss. Only audio and video TSC transcoding fees are charged for this policy. 
low_compress: Image quality priority: Priority is given to ensuring image quality, and the size of the compressed file may be relatively large. Only audio and video Top Speed Codec transcoding fees are charged for this policy. 
Default value: standard_compress. 
Note: To watch videos on TV, the ultra_compress policy is not recommended. The billing standard for the ultra_compress policy is TSC transcoding + audio/video enhancement - artifacts removal.
Note: To use this value, ScenarioBased must be 1, otherwise it does not take effect.
 */
class VideoTemplateInfoForUpdate extends AbstractModel
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

Note: The av1 encoding container currently only supports mp4, webm, and mkv.
Note: H.266 encoding containers only support mp4, hls, ts, and mov.
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
     * @var integer Bitrate of video stream, value ranges from 0 to [128, 100000], measurement unit: kbps.
If the value is 0, the bitrate of the video will be the same as that of the source video.
     */
    public $Bitrate;

    /**
     * @var string Resolution adaptation, available values:
<li>open: Turn on. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: Close. At this point, Width represents the video width, and Height indicates the video height.</li>
Note: In self-adaptation mode, Width cannot be less than Height.
     */
    public $ResolutionAdaptive;

    /**
     * @var integer Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
     */
    public $Width;

    /**
     * @var integer Maximum value of video stream height (or short side). Value ranges from 0 to [128, 4096]. Measurement unit: px.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
     */
    public $Height;

    /**
     * @var integer Interval between I-frames, customizable by frame or second. GOP length value ranges from 0 to [1, 100000].
When set to 0, the system will automatically set the gop length.
     */
    public $Gop;

    /**
     * @var string Gop value unit, value range: 
frame: indicates frame 
second: indicates second
Default value: frame
     */
    public $GopUnit;

    /**
     * @var string Filling method, when video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling mode:
<li> stretch: Stretch, stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li>black: Keep black, maintain video aspect ratio, edges filled with black.</li>
<li>White: Leave blank, maintain video aspect ratio, edge remainder filled with white.</li>
<li>gauss: Gaussian blur, maintain video aspect ratio, Gaussian blur filling for the rest of the edges.</li>
<li>smarttailor: intelligent cropping. It smartly selects video images to ensure proportional image cropping.</li>
Default value: black.
     */
    public $FillType;

    /**
     * @var integer Control factor for constant video bitrate. Value range: [0, 51]. If this parameter is not specified, it means "auto". If there are no special requirements, it is advisable not to specify this parameter.
When the Mode parameter is set to VBR, if the Vcrf value is configured at the same time, MPS processes video in VBR mode with consideration of both Vcrf and Bitrate parameter settings to balance video quality, bitrate, transcoding efficiency, and file size.
When the Mode parameter is set to CRF, the Bitrate setting will become invalid, and encoding is performed based on the Vcrf value.
When the Mode parameter is set to ABR or CBR, the Vcrf value requires no configuration.
Note: When you need to set it to auto, fill in 100.

     */
    public $Vcrf;

    /**
     * @var integer Adaptive coding. Available values:
<li>0: Not enabled</li>
<li>1: Turn on</li>
Default value: 0. When this parameter is enabled, multiple streams with different resolutions and bitrates will be self-adaptively generated. Among them, the width and height in VideoTemplate are the maximum resolution among the multiple streams, the bitrate in VideoTemplate is the highest bitrate among the multiple streams, and the vcrf in VideoTemplate is the highest quality among the multiple streams. When resolution, bitrate, and vcrf are not set, the highest resolution generated by the ContentAdaptStream parameter is the resolution of the video source, and the video quality is close to vmaf95. To enable this parameter or learn about billing details, contact your Tencent Cloud business.
     */
    public $ContentAdaptStream;

    /**
     * @var integer Average shard duration. Value range: (0-10], unit: second
Default value: 10
Note: It is used only in the HLS format.
     */
    public $HlsTime;

    /**
     * @var integer hls fragment type, available values:
<li>0: HLS+TS segment.</li>
<li>2:HLS+TS byte range</li>
<li>7: HLS+MP4 segment.</li>
<li>5:HLS+MP4 byte range</li>
Default value: 0
Note: This field is used for ordinary/TSC transcoding settings and does not take effect for adaptive bitrate streams. If needed, you can use the outer field to configure the shard type for adaptive bitrate streams.
     */
    public $SegmentType;

    /**
     * @var integer Denominator of the frame rate
Note: The value must be greater than 0.
     */
    public $FpsDenominator;

    /**
     * @var string 3D video splicing mode, only mv-hevc, takes effect for 3D video, available values:
<li>side_by_side: side-by-side layout of the original video content.</li>
<li>top_bottom: top-bottom layout arrangement of the original video content.</li>
Billing is based on the segmented resolution dimension to report usage amount and cost.
Default value: side_by_side
     */
    public $Stereo3dType;

    /**
     * @var string Profile, suitable for different scenarios. 
baseline: It only supports I/P-frames and non-interlaced scenarios, and is suitable for scenarios such as video calls and mobile videos. 
Mainstream Profile, providing I-frames, P-frames, and B-frames, and supporting both interlaced and non-interlaced modes. It is primarily used in mainstream audio and video consumption products such as video players and streaming media transmission devices. 
high: The highest encoding level, adding 8X8 prediction to the Main Profile and supporting custom quantification. Widely used in Blu-ray storage and HDTV scenarios.
default: automatic filling along with the original video

This configuration appears only when the encoding standard is set to H264. Default: default
     */
    public $VideoProfile;

    /**
     * @var string Encoder level. Default value: auto ("")
If the encoding standard is set to H264, the following options are supported: "", 1, 1.1, -1.2, 1.3, 2, 2.1, 2.2, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, and 5.1. 
If the encoding standard is set to H265, the following options are supported: "", 1, 2, 2.1, 3, 3.1, 4, 4.1, -5, 5.1, 5.2, 6, 6.1, 6.2, and 8.5.
     */
    public $VideoLevel;

    /**
     * @var integer Maximum number of consecutive B-frames. The default is auto, and 0 - 16 and -1 are supported.
Note:
-1 indicates auto.	
     */
    public $Bframes;

    /**
     * @var string Bitrate control mode. Optional values: 
VBR (Variable Bit Rate): Dynamic bitrate adjusts the output bitrate based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements. 
ABR (Average Bit Rate): Average bitrate. It aims to keep the average bitrate of the output video stable as much as possible, but allows short-term bitrate fluctuation. It is suitable for scenarios where you need to minimize overall bitrate while maintaining a certain image quality. 
CBR (Constant Bit Rate): Constant bit rate. In video encoding, it maintains a constant output bitrate regardless of image complexity changes. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming. 
VCRF (Constant Rate Factor): Constant quality factor. It controls video quality by setting a quality factor to achieve constant quality encoding of videos. Bitrate adjustment based on content complexity. Suitable for scenarios where maintaining a certain quality is desired. 
VBR is selected by default.
     */
    public $Mode;

    /**
     * @var string Display aspect ratio. Optional values: [1:1, 2:1, default]
Default value: default
     */
    public $Sar;

    /**
     * @var integer Adaptive I-frame decision. When enabled, Media Processing Service automatically identifies transition points between different scenarios in the video (usually visually distinct frames, such as those of switching from one shot to another) and adaptively inserts keyframes (I-frames) at these points to improve the video's random accessibility and encoding efficiency. Optional values: 
0: Disable adaptive I-frame decision 
1: Enable the adaptive I-frame decision 
Default value: 0	
     */
    public $NoScenecut;

    /**
     * @var integer Bit: 8/10 is supported. Default value: -	
     */
    public $BitDepth;

    /**
     * @var integer Preserve original timestamp. Optional values: 
0: Disabled 
1: Enabled 
Default value: Disabled	
     */
    public $RawPts;

    /**
     * @var integer Proportional compression bitrate. When enabled, the output video's bitrate is adjusted according to the specified ratio. After the compression ratio is entered, the system automatically calculates the target output bitrate based on the video source bitrate. Compression ratio range: 0-100, optional values: [0-100] and -1. 
Note: -1 indicates auto.	
     */
    public $Compress;

    /**
     * @var SegmentSpecificInfo Segment Duration at Startup
     */
    public $SegmentSpecificInfo;

    /**
     * @var integer Whether to enable scenario-based settings for the template 
0: disable 
1: enable 
Default value: 0	
Note: SceneType and CompressType field values are effective only when this field value is 1.
     */
    public $ScenarioBased;

    /**
     * @var string Video scenario. Optional values: 
normal: General transcoding scenario: General transcoding and compression scenario. pgc: PGC HD TV shows and movies: At the time of compression, focus is placed on the viewing experience of TV shows and movies and ROI encoding is performed according to their characteristics, while high-quality contents of videos and audio are retained. 
materials_video: HD materials: Scenario involving material resources, where requirements for image quality are extremely high and there are many transparent images, with almost no visual loss during compression. 
ugc: UGC content: Suitable for a wide range of UGC/short video scenarios, with optimized encoding bitrate for short video characteristics, image quality improvement, and enhanced business QOS/QOE metrics. 
e-commerce_video: Fashion show/e-commerce: During compression, emphasis is placed on detail clarity and ROI enhancement, with a particular focus on maintaining the image quality of the face region. 
educational_video: Education: Compression emphasizes clarity and readability of text and images to help students better understand content and ensure clear conveyance of teaching content.
Default value: normal.
Note: To use this value, ScenarioBased must be 1, otherwise it does not take effect.
     */
    public $SceneType;

    /**
     * @var string Transcoding policy. Optional values: 
ultra_compress: Extreme compression: Compared to standard compression, this policy can maximize bitrate compression while ensuring a certain level of image quality, thus greatly saving bandwidth and storage costs. 
standard_compress: Comprehensively optimal: The compression ratio and image quality are balanced, and files are compressed as much as possible without a noticeable reduction in subjective image quality. Only audio and video TSC transcoding fees are charged for the policy. 
high_compress: Bitrate priority: Priority is given to reducing file size, which may result in certain image quality loss. Only audio and video TSC transcoding fees are charged for this policy. 
low_compress: Image quality priority: Priority is given to ensuring image quality, and the size of the compressed file may be relatively large. Only audio and video Top Speed Codec transcoding fees are charged for this policy. 
Default value: standard_compress. 
Note: To watch videos on TV, the ultra_compress policy is not recommended. The billing standard for the ultra_compress policy is TSC transcoding + audio/video enhancement - artifacts removal.
Note: To use this value, ScenarioBased must be 1, otherwise it does not take effect.
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

Note: The av1 encoding container currently only supports mp4, webm, and mkv.
Note: H.266 encoding containers only support mp4, hls, ts, and mov.
Note: VP8 and VP9 encoding containers currently only support webm and mkv.
Note: MPEG2 and dnxhd encoding containers currently only support mxf.
Note: The MV-HEVC codec currently only supports mp4, hls, and mov. Among them, the HLS format only supports the MP4 segmented format and requires the input source to be a panoramic video (with multiple views).
     * @param integer $Fps Video frame rate. Value range:
When FpsDenominator is empty, the range is [0, 120], in Hz.
When FpsDenominator is not empty, the Fps/FpsDenominator range is [0, 120].
If the value is 0, the frame rate will be the same as that of the source video.
     * @param integer $Bitrate Bitrate of video stream, value ranges from 0 to [128, 100000], measurement unit: kbps.
If the value is 0, the bitrate of the video will be the same as that of the source video.
     * @param string $ResolutionAdaptive Resolution adaptation, available values:
<li>open: Turn on. At this point, Width represents the long side of the video, and Height indicates the short side of the video;</li>
<li>close: Close. At this point, Width represents the video width, and Height indicates the video height.</li>
Note: In self-adaptation mode, Width cannot be less than Height.
     * @param integer $Width Maximum value of the video stream width (or long edge) in px. Value range: 0 and [128, 4096].
<li>If both Width and Height are 0, the resolution is the same as the source.</li>
<li>If Width is 0 but Height is not 0, the width will be proportionally scaled.</li>
<li>If Width is not 0 but Height is 0, the height will be proportionally scaled.</li>
<li>If both Width and Height are not 0, the resolution is as specified by the user.</li>
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
     * @param integer $Height Maximum value of video stream height (or short side). Value ranges from 0 to [128, 4096]. Measurement unit: px.
Note: If Codec is set to MV-HEVC, the maximum value can be 7680.
     * @param integer $Gop Interval between I-frames, customizable by frame or second. GOP length value ranges from 0 to [1, 100000].
When set to 0, the system will automatically set the gop length.
     * @param string $GopUnit Gop value unit, value range: 
frame: indicates frame 
second: indicates second
Default value: frame
     * @param string $FillType Filling method, when video stream configuration width and height parameters are inconsistent with the aspect ratio of the original video, the processing method for transcoding is "padding". Optional filling mode:
<li> stretch: Stretch, stretch each frame to fill the entire screen, possibly causing the transcoded video to be "squashed" or "stretched";</li>
<li>black: Keep black, maintain video aspect ratio, edges filled with black.</li>
<li>White: Leave blank, maintain video aspect ratio, edge remainder filled with white.</li>
<li>gauss: Gaussian blur, maintain video aspect ratio, Gaussian blur filling for the rest of the edges.</li>
<li>smarttailor: intelligent cropping. It smartly selects video images to ensure proportional image cropping.</li>
Default value: black.
     * @param integer $Vcrf Control factor for constant video bitrate. Value range: [0, 51]. If this parameter is not specified, it means "auto". If there are no special requirements, it is advisable not to specify this parameter.
When the Mode parameter is set to VBR, if the Vcrf value is configured at the same time, MPS processes video in VBR mode with consideration of both Vcrf and Bitrate parameter settings to balance video quality, bitrate, transcoding efficiency, and file size.
When the Mode parameter is set to CRF, the Bitrate setting will become invalid, and encoding is performed based on the Vcrf value.
When the Mode parameter is set to ABR or CBR, the Vcrf value requires no configuration.
Note: When you need to set it to auto, fill in 100.

     * @param integer $ContentAdaptStream Adaptive coding. Available values:
<li>0: Not enabled</li>
<li>1: Turn on</li>
Default value: 0. When this parameter is enabled, multiple streams with different resolutions and bitrates will be self-adaptively generated. Among them, the width and height in VideoTemplate are the maximum resolution among the multiple streams, the bitrate in VideoTemplate is the highest bitrate among the multiple streams, and the vcrf in VideoTemplate is the highest quality among the multiple streams. When resolution, bitrate, and vcrf are not set, the highest resolution generated by the ContentAdaptStream parameter is the resolution of the video source, and the video quality is close to vmaf95. To enable this parameter or learn about billing details, contact your Tencent Cloud business.
     * @param integer $HlsTime Average shard duration. Value range: (0-10], unit: second
Default value: 10
Note: It is used only in the HLS format.
     * @param integer $SegmentType hls fragment type, available values:
<li>0: HLS+TS segment.</li>
<li>2:HLS+TS byte range</li>
<li>7: HLS+MP4 segment.</li>
<li>5:HLS+MP4 byte range</li>
Default value: 0
Note: This field is used for ordinary/TSC transcoding settings and does not take effect for adaptive bitrate streams. If needed, you can use the outer field to configure the shard type for adaptive bitrate streams.
     * @param integer $FpsDenominator Denominator of the frame rate
Note: The value must be greater than 0.
     * @param string $Stereo3dType 3D video splicing mode, only mv-hevc, takes effect for 3D video, available values:
<li>side_by_side: side-by-side layout of the original video content.</li>
<li>top_bottom: top-bottom layout arrangement of the original video content.</li>
Billing is based on the segmented resolution dimension to report usage amount and cost.
Default value: side_by_side
     * @param string $VideoProfile Profile, suitable for different scenarios. 
baseline: It only supports I/P-frames and non-interlaced scenarios, and is suitable for scenarios such as video calls and mobile videos. 
Mainstream Profile, providing I-frames, P-frames, and B-frames, and supporting both interlaced and non-interlaced modes. It is primarily used in mainstream audio and video consumption products such as video players and streaming media transmission devices. 
high: The highest encoding level, adding 8X8 prediction to the Main Profile and supporting custom quantification. Widely used in Blu-ray storage and HDTV scenarios.
default: automatic filling along with the original video

This configuration appears only when the encoding standard is set to H264. Default: default
     * @param string $VideoLevel Encoder level. Default value: auto ("")
If the encoding standard is set to H264, the following options are supported: "", 1, 1.1, -1.2, 1.3, 2, 2.1, 2.2, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, and 5.1. 
If the encoding standard is set to H265, the following options are supported: "", 1, 2, 2.1, 3, 3.1, 4, 4.1, -5, 5.1, 5.2, 6, 6.1, 6.2, and 8.5.
     * @param integer $Bframes Maximum number of consecutive B-frames. The default is auto, and 0 - 16 and -1 are supported.
Note:
-1 indicates auto.	
     * @param string $Mode Bitrate control mode. Optional values: 
VBR (Variable Bit Rate): Dynamic bitrate adjusts the output bitrate based on the complexity of the video image to ensure higher image quality. It is suitable for storage scenarios and applications with high image quality requirements. 
ABR (Average Bit Rate): Average bitrate. It aims to keep the average bitrate of the output video stable as much as possible, but allows short-term bitrate fluctuation. It is suitable for scenarios where you need to minimize overall bitrate while maintaining a certain image quality. 
CBR (Constant Bit Rate): Constant bit rate. In video encoding, it maintains a constant output bitrate regardless of image complexity changes. It is suitable for scenarios with strict network bandwidth requirements, such as live streaming. 
VCRF (Constant Rate Factor): Constant quality factor. It controls video quality by setting a quality factor to achieve constant quality encoding of videos. Bitrate adjustment based on content complexity. Suitable for scenarios where maintaining a certain quality is desired. 
VBR is selected by default.
     * @param string $Sar Display aspect ratio. Optional values: [1:1, 2:1, default]
Default value: default
     * @param integer $NoScenecut Adaptive I-frame decision. When enabled, Media Processing Service automatically identifies transition points between different scenarios in the video (usually visually distinct frames, such as those of switching from one shot to another) and adaptively inserts keyframes (I-frames) at these points to improve the video's random accessibility and encoding efficiency. Optional values: 
0: Disable adaptive I-frame decision 
1: Enable the adaptive I-frame decision 
Default value: 0	
     * @param integer $BitDepth Bit: 8/10 is supported. Default value: -	
     * @param integer $RawPts Preserve original timestamp. Optional values: 
0: Disabled 
1: Enabled 
Default value: Disabled	
     * @param integer $Compress Proportional compression bitrate. When enabled, the output video's bitrate is adjusted according to the specified ratio. After the compression ratio is entered, the system automatically calculates the target output bitrate based on the video source bitrate. Compression ratio range: 0-100, optional values: [0-100] and -1. 
Note: -1 indicates auto.	
     * @param SegmentSpecificInfo $SegmentSpecificInfo Segment Duration at Startup
     * @param integer $ScenarioBased Whether to enable scenario-based settings for the template 
0: disable 
1: enable 
Default value: 0	
Note: SceneType and CompressType field values are effective only when this field value is 1.
     * @param string $SceneType Video scenario. Optional values: 
normal: General transcoding scenario: General transcoding and compression scenario. pgc: PGC HD TV shows and movies: At the time of compression, focus is placed on the viewing experience of TV shows and movies and ROI encoding is performed according to their characteristics, while high-quality contents of videos and audio are retained. 
materials_video: HD materials: Scenario involving material resources, where requirements for image quality are extremely high and there are many transparent images, with almost no visual loss during compression. 
ugc: UGC content: Suitable for a wide range of UGC/short video scenarios, with optimized encoding bitrate for short video characteristics, image quality improvement, and enhanced business QOS/QOE metrics. 
e-commerce_video: Fashion show/e-commerce: During compression, emphasis is placed on detail clarity and ROI enhancement, with a particular focus on maintaining the image quality of the face region. 
educational_video: Education: Compression emphasizes clarity and readability of text and images to help students better understand content and ensure clear conveyance of teaching content.
Default value: normal.
Note: To use this value, ScenarioBased must be 1, otherwise it does not take effect.
     * @param string $CompressType Transcoding policy. Optional values: 
ultra_compress: Extreme compression: Compared to standard compression, this policy can maximize bitrate compression while ensuring a certain level of image quality, thus greatly saving bandwidth and storage costs. 
standard_compress: Comprehensively optimal: The compression ratio and image quality are balanced, and files are compressed as much as possible without a noticeable reduction in subjective image quality. Only audio and video TSC transcoding fees are charged for the policy. 
high_compress: Bitrate priority: Priority is given to reducing file size, which may result in certain image quality loss. Only audio and video TSC transcoding fees are charged for this policy. 
low_compress: Image quality priority: Priority is given to ensuring image quality, and the size of the compressed file may be relatively large. Only audio and video Top Speed Codec transcoding fees are charged for this policy. 
Default value: standard_compress. 
Note: To watch videos on TV, the ultra_compress policy is not recommended. The billing standard for the ultra_compress policy is TSC transcoding + audio/video enhancement - artifacts removal.
Note: To use this value, ScenarioBased must be 1, otherwise it does not take effect.
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

        if (array_key_exists("ContentAdaptStream",$param) and $param["ContentAdaptStream"] !== null) {
            $this->ContentAdaptStream = $param["ContentAdaptStream"];
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
