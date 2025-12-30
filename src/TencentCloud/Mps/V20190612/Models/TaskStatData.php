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
 * Statistical data of the task.
 *
 * @method string getTaskType() Obtain Task type.
<li>Transcode: transcoding.</li>
<li>Enhance: enhancement.</li>
<li>AIAnalysis: intelligent analysis.</li>
<li>AIRecognition: intelligent recognition.</li>
<li>AIReview: content moderation.</li>
<li>Snapshot: screenshot.</li>
<li>AnimatedGraphics: conversion to GIF.</li>
<li>ImageProcess: image processing.</li>
 * @method void setTaskType(string $TaskType) Set Task type.
<li>Transcode: transcoding.</li>
<li>Enhance: enhancement.</li>
<li>AIAnalysis: intelligent analysis.</li>
<li>AIRecognition: intelligent recognition.</li>
<li>AIReview: content moderation.</li>
<li>Snapshot: screenshot.</li>
<li>AnimatedGraphics: conversion to GIF.</li>
<li>ImageProcess: image processing.</li>
 * @method array getSummary() Obtain Statistical data overview of the number of tasks.
<li>Transcode: The unit of usage is seconds.</li>
<li>Enhance: The unit of usage is seconds.</li>
<li>AIAnalysis: The unit of usage is seconds.</li>
<li>AIRecognition: The unit of usage is seconds.</li>
<li>AIReview: The unit of usage is seconds.</li>
<li>Snapshot: The unit of usage is images.</li>
<li>AnimatedGraphics: The unit of usage is seconds.</li>
<li>ImageProcess: The unit of usage is images.</li>.
 * @method void setSummary(array $Summary) Set Statistical data overview of the number of tasks.
<li>Transcode: The unit of usage is seconds.</li>
<li>Enhance: The unit of usage is seconds.</li>
<li>AIAnalysis: The unit of usage is seconds.</li>
<li>AIRecognition: The unit of usage is seconds.</li>
<li>AIReview: The unit of usage is seconds.</li>
<li>Snapshot: The unit of usage is images.</li>
<li>AnimatedGraphics: The unit of usage is seconds.</li>
<li>ImageProcess: The unit of usage is images.</li>.
 * @method array getDetails() Obtain Statistical data details for tasks of various specifications.
1. Transcoding specification:
<li>Audio: audio-only.</li>
<li>Remuxing: conversion to muxing.</li>
<li>Other transcoding specifications: {TYPE}.{CODEC}.{SPECIFICATION}.</li> Specifically, valid values for TYPE:
    Standard: standard transcoding.
    TESHD-10: TSC transcoding for videos.
    TESHD-20: TSC transcoding for audios.
    TESHD-30: TSC transcoding for audios/videos.
    TESHD-30-SDK: duration-based billing of TSC transcoding SDK for audios/videos.
    TESHD-30-SDKCores: core number-based billing of TSC transcoding SDK for audios/videos.
    Edit: video editing.
  Specifically, valid values for CODEC:
    H264: H. 264 encoding.
    H265: H.265 encoding.
    AV1: AV1 encoding.
    MV-HEVC: MV-HEVC encoding.
  Specifically, valid values for SPECIFICATION:
    SD: standard definition.
    HD: high definition.
    FHD: full HD.
    2K: 2K.
    4K: 4K.
For example, TESHD-10.H265.HD indicates TSC transcoding using the H.265 encoding method.
2. Enhancement specification: video enhancement format: {TYPE}.{CODEC}.{SPECIFICATION}.{FPS}, where valid values for CODEC and SPECIFICATION follow the transcoding descriptions mentioned above, and FPS is valid only when the atomic enhancement type is used; audio enhancement format: {TYPE}.
Valid values for enhancement TYPE:
<li>Enhance: common enhancement type, which might be any atomic enhancement type.</li>
<li>Atomic enhancement type</li>. Valid values for video atomic enhancement type:
    Sdr2hdr: SDR2HDR.
    SuperResolution: super resolution.
    InsertFrame: frame interpolation.
    ComprehensiveEnhancement: comprehensive enhancement.
    NoiseReduction: video noise reduction.
    ColorEnhancement: color enhancement.
    RemoveScratches: scratch removal.
    Deburr:  artifacts removal.
    DetailEnhancement: detail enhancement.
    LightEnhancement: low-light enhancement.
    FaceEnhancement: face enhancement.
  Valid value for audio atomic enhancement type.
    AudioNoiseReduction
    VolumeBalance
    AudioBeautify
    AudioSeparation

3. Screenshot specification:
<li>ImageSprite: sprite.</li>
<li>SampleSnapshot: sampled screenshot.</li>
<li>SnapshotByTime: time point screenshot.</li>
4. Image processing specification: {TYPE}.{CODEC}.{SPECIFICATION}.
<li> ImageCompression: image encoding.</li>
<li> ImageSuperResolution: image super resolution.</li>
<li>EnhanceImageColor: image color enhancement.</li>
5. Intelligent analysis specification:
<li>AIAnalysis: major category for analysis.</li>
<li>VideoTag: video tag.</li>
<li>VideoClassification: video category.</li>
<li>SmartCover: smart cover.</li>
<li>FrameLabel: frame tag.</li>
<li>VideoSplit: video splitting.</li>
<li>Highlights: highlights.</li>
<li>OpeningAndEnding: opening and ending clips.</li>
6. Intelligent recognition specification:
<li>AIRecognition: major category for recognition.</li>
<li>FaceRecognition: face recognition.</li>
<li>TextRecognition: optical character recognition.</li>
<li>ObjectRecognition: object recognition.</li>
<li>VoiceRecognition: automatic speech recognition.</li>
<li>VoiceTranslation: speech translation.</li>
7. There are no segmentation specifications for content moderation and conversion to GIF.
 * @method void setDetails(array $Details) Set Statistical data details for tasks of various specifications.
1. Transcoding specification:
<li>Audio: audio-only.</li>
<li>Remuxing: conversion to muxing.</li>
<li>Other transcoding specifications: {TYPE}.{CODEC}.{SPECIFICATION}.</li> Specifically, valid values for TYPE:
    Standard: standard transcoding.
    TESHD-10: TSC transcoding for videos.
    TESHD-20: TSC transcoding for audios.
    TESHD-30: TSC transcoding for audios/videos.
    TESHD-30-SDK: duration-based billing of TSC transcoding SDK for audios/videos.
    TESHD-30-SDKCores: core number-based billing of TSC transcoding SDK for audios/videos.
    Edit: video editing.
  Specifically, valid values for CODEC:
    H264: H. 264 encoding.
    H265: H.265 encoding.
    AV1: AV1 encoding.
    MV-HEVC: MV-HEVC encoding.
  Specifically, valid values for SPECIFICATION:
    SD: standard definition.
    HD: high definition.
    FHD: full HD.
    2K: 2K.
    4K: 4K.
For example, TESHD-10.H265.HD indicates TSC transcoding using the H.265 encoding method.
2. Enhancement specification: video enhancement format: {TYPE}.{CODEC}.{SPECIFICATION}.{FPS}, where valid values for CODEC and SPECIFICATION follow the transcoding descriptions mentioned above, and FPS is valid only when the atomic enhancement type is used; audio enhancement format: {TYPE}.
Valid values for enhancement TYPE:
<li>Enhance: common enhancement type, which might be any atomic enhancement type.</li>
<li>Atomic enhancement type</li>. Valid values for video atomic enhancement type:
    Sdr2hdr: SDR2HDR.
    SuperResolution: super resolution.
    InsertFrame: frame interpolation.
    ComprehensiveEnhancement: comprehensive enhancement.
    NoiseReduction: video noise reduction.
    ColorEnhancement: color enhancement.
    RemoveScratches: scratch removal.
    Deburr:  artifacts removal.
    DetailEnhancement: detail enhancement.
    LightEnhancement: low-light enhancement.
    FaceEnhancement: face enhancement.
  Valid value for audio atomic enhancement type.
    AudioNoiseReduction
    VolumeBalance
    AudioBeautify
    AudioSeparation

3. Screenshot specification:
<li>ImageSprite: sprite.</li>
<li>SampleSnapshot: sampled screenshot.</li>
<li>SnapshotByTime: time point screenshot.</li>
4. Image processing specification: {TYPE}.{CODEC}.{SPECIFICATION}.
<li> ImageCompression: image encoding.</li>
<li> ImageSuperResolution: image super resolution.</li>
<li>EnhanceImageColor: image color enhancement.</li>
5. Intelligent analysis specification:
<li>AIAnalysis: major category for analysis.</li>
<li>VideoTag: video tag.</li>
<li>VideoClassification: video category.</li>
<li>SmartCover: smart cover.</li>
<li>FrameLabel: frame tag.</li>
<li>VideoSplit: video splitting.</li>
<li>Highlights: highlights.</li>
<li>OpeningAndEnding: opening and ending clips.</li>
6. Intelligent recognition specification:
<li>AIRecognition: major category for recognition.</li>
<li>FaceRecognition: face recognition.</li>
<li>TextRecognition: optical character recognition.</li>
<li>ObjectRecognition: object recognition.</li>
<li>VoiceRecognition: automatic speech recognition.</li>
<li>VoiceTranslation: speech translation.</li>
7. There are no segmentation specifications for content moderation and conversion to GIF.
 */
class TaskStatData extends AbstractModel
{
    /**
     * @var string Task type.
<li>Transcode: transcoding.</li>
<li>Enhance: enhancement.</li>
<li>AIAnalysis: intelligent analysis.</li>
<li>AIRecognition: intelligent recognition.</li>
<li>AIReview: content moderation.</li>
<li>Snapshot: screenshot.</li>
<li>AnimatedGraphics: conversion to GIF.</li>
<li>ImageProcess: image processing.</li>
     */
    public $TaskType;

    /**
     * @var array Statistical data overview of the number of tasks.
<li>Transcode: The unit of usage is seconds.</li>
<li>Enhance: The unit of usage is seconds.</li>
<li>AIAnalysis: The unit of usage is seconds.</li>
<li>AIRecognition: The unit of usage is seconds.</li>
<li>AIReview: The unit of usage is seconds.</li>
<li>Snapshot: The unit of usage is images.</li>
<li>AnimatedGraphics: The unit of usage is seconds.</li>
<li>ImageProcess: The unit of usage is images.</li>.
     */
    public $Summary;

    /**
     * @var array Statistical data details for tasks of various specifications.
1. Transcoding specification:
<li>Audio: audio-only.</li>
<li>Remuxing: conversion to muxing.</li>
<li>Other transcoding specifications: {TYPE}.{CODEC}.{SPECIFICATION}.</li> Specifically, valid values for TYPE:
    Standard: standard transcoding.
    TESHD-10: TSC transcoding for videos.
    TESHD-20: TSC transcoding for audios.
    TESHD-30: TSC transcoding for audios/videos.
    TESHD-30-SDK: duration-based billing of TSC transcoding SDK for audios/videos.
    TESHD-30-SDKCores: core number-based billing of TSC transcoding SDK for audios/videos.
    Edit: video editing.
  Specifically, valid values for CODEC:
    H264: H. 264 encoding.
    H265: H.265 encoding.
    AV1: AV1 encoding.
    MV-HEVC: MV-HEVC encoding.
  Specifically, valid values for SPECIFICATION:
    SD: standard definition.
    HD: high definition.
    FHD: full HD.
    2K: 2K.
    4K: 4K.
For example, TESHD-10.H265.HD indicates TSC transcoding using the H.265 encoding method.
2. Enhancement specification: video enhancement format: {TYPE}.{CODEC}.{SPECIFICATION}.{FPS}, where valid values for CODEC and SPECIFICATION follow the transcoding descriptions mentioned above, and FPS is valid only when the atomic enhancement type is used; audio enhancement format: {TYPE}.
Valid values for enhancement TYPE:
<li>Enhance: common enhancement type, which might be any atomic enhancement type.</li>
<li>Atomic enhancement type</li>. Valid values for video atomic enhancement type:
    Sdr2hdr: SDR2HDR.
    SuperResolution: super resolution.
    InsertFrame: frame interpolation.
    ComprehensiveEnhancement: comprehensive enhancement.
    NoiseReduction: video noise reduction.
    ColorEnhancement: color enhancement.
    RemoveScratches: scratch removal.
    Deburr:  artifacts removal.
    DetailEnhancement: detail enhancement.
    LightEnhancement: low-light enhancement.
    FaceEnhancement: face enhancement.
  Valid value for audio atomic enhancement type.
    AudioNoiseReduction
    VolumeBalance
    AudioBeautify
    AudioSeparation

3. Screenshot specification:
<li>ImageSprite: sprite.</li>
<li>SampleSnapshot: sampled screenshot.</li>
<li>SnapshotByTime: time point screenshot.</li>
4. Image processing specification: {TYPE}.{CODEC}.{SPECIFICATION}.
<li> ImageCompression: image encoding.</li>
<li> ImageSuperResolution: image super resolution.</li>
<li>EnhanceImageColor: image color enhancement.</li>
5. Intelligent analysis specification:
<li>AIAnalysis: major category for analysis.</li>
<li>VideoTag: video tag.</li>
<li>VideoClassification: video category.</li>
<li>SmartCover: smart cover.</li>
<li>FrameLabel: frame tag.</li>
<li>VideoSplit: video splitting.</li>
<li>Highlights: highlights.</li>
<li>OpeningAndEnding: opening and ending clips.</li>
6. Intelligent recognition specification:
<li>AIRecognition: major category for recognition.</li>
<li>FaceRecognition: face recognition.</li>
<li>TextRecognition: optical character recognition.</li>
<li>ObjectRecognition: object recognition.</li>
<li>VoiceRecognition: automatic speech recognition.</li>
<li>VoiceTranslation: speech translation.</li>
7. There are no segmentation specifications for content moderation and conversion to GIF.
     */
    public $Details;

    /**
     * @param string $TaskType Task type.
<li>Transcode: transcoding.</li>
<li>Enhance: enhancement.</li>
<li>AIAnalysis: intelligent analysis.</li>
<li>AIRecognition: intelligent recognition.</li>
<li>AIReview: content moderation.</li>
<li>Snapshot: screenshot.</li>
<li>AnimatedGraphics: conversion to GIF.</li>
<li>ImageProcess: image processing.</li>
     * @param array $Summary Statistical data overview of the number of tasks.
<li>Transcode: The unit of usage is seconds.</li>
<li>Enhance: The unit of usage is seconds.</li>
<li>AIAnalysis: The unit of usage is seconds.</li>
<li>AIRecognition: The unit of usage is seconds.</li>
<li>AIReview: The unit of usage is seconds.</li>
<li>Snapshot: The unit of usage is images.</li>
<li>AnimatedGraphics: The unit of usage is seconds.</li>
<li>ImageProcess: The unit of usage is images.</li>.
     * @param array $Details Statistical data details for tasks of various specifications.
1. Transcoding specification:
<li>Audio: audio-only.</li>
<li>Remuxing: conversion to muxing.</li>
<li>Other transcoding specifications: {TYPE}.{CODEC}.{SPECIFICATION}.</li> Specifically, valid values for TYPE:
    Standard: standard transcoding.
    TESHD-10: TSC transcoding for videos.
    TESHD-20: TSC transcoding for audios.
    TESHD-30: TSC transcoding for audios/videos.
    TESHD-30-SDK: duration-based billing of TSC transcoding SDK for audios/videos.
    TESHD-30-SDKCores: core number-based billing of TSC transcoding SDK for audios/videos.
    Edit: video editing.
  Specifically, valid values for CODEC:
    H264: H. 264 encoding.
    H265: H.265 encoding.
    AV1: AV1 encoding.
    MV-HEVC: MV-HEVC encoding.
  Specifically, valid values for SPECIFICATION:
    SD: standard definition.
    HD: high definition.
    FHD: full HD.
    2K: 2K.
    4K: 4K.
For example, TESHD-10.H265.HD indicates TSC transcoding using the H.265 encoding method.
2. Enhancement specification: video enhancement format: {TYPE}.{CODEC}.{SPECIFICATION}.{FPS}, where valid values for CODEC and SPECIFICATION follow the transcoding descriptions mentioned above, and FPS is valid only when the atomic enhancement type is used; audio enhancement format: {TYPE}.
Valid values for enhancement TYPE:
<li>Enhance: common enhancement type, which might be any atomic enhancement type.</li>
<li>Atomic enhancement type</li>. Valid values for video atomic enhancement type:
    Sdr2hdr: SDR2HDR.
    SuperResolution: super resolution.
    InsertFrame: frame interpolation.
    ComprehensiveEnhancement: comprehensive enhancement.
    NoiseReduction: video noise reduction.
    ColorEnhancement: color enhancement.
    RemoveScratches: scratch removal.
    Deburr:  artifacts removal.
    DetailEnhancement: detail enhancement.
    LightEnhancement: low-light enhancement.
    FaceEnhancement: face enhancement.
  Valid value for audio atomic enhancement type.
    AudioNoiseReduction
    VolumeBalance
    AudioBeautify
    AudioSeparation

3. Screenshot specification:
<li>ImageSprite: sprite.</li>
<li>SampleSnapshot: sampled screenshot.</li>
<li>SnapshotByTime: time point screenshot.</li>
4. Image processing specification: {TYPE}.{CODEC}.{SPECIFICATION}.
<li> ImageCompression: image encoding.</li>
<li> ImageSuperResolution: image super resolution.</li>
<li>EnhanceImageColor: image color enhancement.</li>
5. Intelligent analysis specification:
<li>AIAnalysis: major category for analysis.</li>
<li>VideoTag: video tag.</li>
<li>VideoClassification: video category.</li>
<li>SmartCover: smart cover.</li>
<li>FrameLabel: frame tag.</li>
<li>VideoSplit: video splitting.</li>
<li>Highlights: highlights.</li>
<li>OpeningAndEnding: opening and ending clips.</li>
6. Intelligent recognition specification:
<li>AIRecognition: major category for recognition.</li>
<li>FaceRecognition: face recognition.</li>
<li>TextRecognition: optical character recognition.</li>
<li>ObjectRecognition: object recognition.</li>
<li>VoiceRecognition: automatic speech recognition.</li>
<li>VoiceTranslation: speech translation.</li>
7. There are no segmentation specifications for content moderation and conversion to GIF.
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = [];
            foreach ($param["Summary"] as $key => $value){
                $obj = new TaskStatDataItem();
                $obj->deserialize($value);
                array_push($this->Summary, $obj);
            }
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new SpecificationDataItem();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
