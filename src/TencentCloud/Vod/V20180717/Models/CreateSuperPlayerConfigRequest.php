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
 * CreateSuperPlayerConfig request structure.
 *
 * @method string getName() Obtain Player configuration name, which can contain up to 64 letters, digits, underscores, and hyphens (such as test_ABC-123) and must be unique under a user.
 * @method void setName(string $Name) Set Player configuration name, which can contain up to 64 letters, digits, underscores, and hyphens (such as test_ABC-123) and must be unique under a user.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getAudioVideoType() Obtain Type of audio/video played. Valid values:
<li>AdaptiveDynamicStreaming</li>
<li>Transcode</li>
<li>Original</li>
Default value: `AdaptiveDynamicStream`
 * @method void setAudioVideoType(string $AudioVideoType) Set Type of audio/video played. Valid values:
<li>AdaptiveDynamicStreaming</li>
<li>Transcode</li>
<li>Original</li>
Default value: `AdaptiveDynamicStream`
 * @method string getDrmSwitch() Obtain Whether to allow only adaptive bitrate streaming playback protected by DRM. Valid values:
<li>`ON`: allow only adaptive bitrate streaming playback protected by DRM</li>
<li>`OFF`: allow adaptive bitrate streaming playback not protected by DRM</li>
Default value: `OFF`
This parameter is valid when `AudioVideoType` is `AdaptiveDynamicStream`.
 * @method void setDrmSwitch(string $DrmSwitch) Set Whether to allow only adaptive bitrate streaming playback protected by DRM. Valid values:
<li>`ON`: allow only adaptive bitrate streaming playback protected by DRM</li>
<li>`OFF`: allow adaptive bitrate streaming playback not protected by DRM</li>
Default value: `OFF`
This parameter is valid when `AudioVideoType` is `AdaptiveDynamicStream`.
 * @method integer getAdaptiveDynamicStreamingDefinition() Obtain ID of the adaptive bitrate streaming template allowed for playback not protected by DRM.

This parameter is required if `AudioVideoType` is `AdaptiveDynamicStream` and `DrmSwitch` is `OFF`.
 * @method void setAdaptiveDynamicStreamingDefinition(integer $AdaptiveDynamicStreamingDefinition) Set ID of the adaptive bitrate streaming template allowed for playback not protected by DRM.

This parameter is required if `AudioVideoType` is `AdaptiveDynamicStream` and `DrmSwitch` is `OFF`.
 * @method DrmStreamingsInfo getDrmStreamingsInfo() Obtain Content of the adaptive bitrate streaming template allowed for playback protected by DRM.

This parameter is required if `AudioVideoType` is `AdaptiveDynamicStream` and `DrmSwitch` is `ON`.
 * @method void setDrmStreamingsInfo(DrmStreamingsInfo $DrmStreamingsInfo) Set Content of the adaptive bitrate streaming template allowed for playback protected by DRM.

This parameter is required if `AudioVideoType` is `AdaptiveDynamicStream` and `DrmSwitch` is `ON`.
 * @method integer getTranscodeDefinition() Obtain ID of the transcoding template allowed for playback

This parameter is required if `AudioVideoType` is `Transcode`.
 * @method void setTranscodeDefinition(integer $TranscodeDefinition) Set ID of the transcoding template allowed for playback

This parameter is required if `AudioVideoType` is `Transcode`.
 * @method integer getImageSpriteDefinition() Obtain ID of the image sprite generating template that allows output.
 * @method void setImageSpriteDefinition(integer $ImageSpriteDefinition) Set ID of the image sprite generating template that allows output.
 * @method array getResolutionNames() Obtain The player displays names for substreams of different resolutions. If left unfilled or filled in a blank array, the default configuration is used:
<li>MinEdgeLength: 240, Name: smooth;</li>
<li>MinEdgeLength: 480, Name: SD; </li>
<li>MinEdgeLength: 720, Name: HD; </li>
<li>MinEdgeLength: 1080, Name: Full HD; </li>
<li>MinEdgeLength: 1440, Name: 2K; </li>
<li>MinEdgeLength: 2160, Name: 4K; </li>
<li>MinEdgeLength: 4320, Name: 8K. </li>
 * @method void setResolutionNames(array $ResolutionNames) Set The player displays names for substreams of different resolutions. If left unfilled or filled in a blank array, the default configuration is used:
<li>MinEdgeLength: 240, Name: smooth;</li>
<li>MinEdgeLength: 480, Name: SD; </li>
<li>MinEdgeLength: 720, Name: HD; </li>
<li>MinEdgeLength: 1080, Name: Full HD; </li>
<li>MinEdgeLength: 1440, Name: 2K; </li>
<li>MinEdgeLength: 2160, Name: 4K; </li>
<li>MinEdgeLength: 4320, Name: 8K. </li>
 * @method string getDomain() Obtain Domain name used for playback. If it is left empty or set to `Default`, the domain name configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used.
 * @method void setDomain(string $Domain) Set Domain name used for playback. If it is left empty or set to `Default`, the domain name configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used.
 * @method string getScheme() Obtain Scheme used for playback. If it is left empty or set to `Default`, the scheme configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used. Other valid values:
<li>HTTP;</li>
<li>HTTPS.</li>
 * @method void setScheme(string $Scheme) Set Scheme used for playback. If it is left empty or set to `Default`, the scheme configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used. Other valid values:
<li>HTTP;</li>
<li>HTTPS.</li>
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 */
class CreateSuperPlayerConfigRequest extends AbstractModel
{
    /**
     * @var string Player configuration name, which can contain up to 64 letters, digits, underscores, and hyphens (such as test_ABC-123) and must be unique under a user.
     */
    public $Name;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Type of audio/video played. Valid values:
<li>AdaptiveDynamicStreaming</li>
<li>Transcode</li>
<li>Original</li>
Default value: `AdaptiveDynamicStream`
     */
    public $AudioVideoType;

    /**
     * @var string Whether to allow only adaptive bitrate streaming playback protected by DRM. Valid values:
<li>`ON`: allow only adaptive bitrate streaming playback protected by DRM</li>
<li>`OFF`: allow adaptive bitrate streaming playback not protected by DRM</li>
Default value: `OFF`
This parameter is valid when `AudioVideoType` is `AdaptiveDynamicStream`.
     */
    public $DrmSwitch;

    /**
     * @var integer ID of the adaptive bitrate streaming template allowed for playback not protected by DRM.

This parameter is required if `AudioVideoType` is `AdaptiveDynamicStream` and `DrmSwitch` is `OFF`.
     */
    public $AdaptiveDynamicStreamingDefinition;

    /**
     * @var DrmStreamingsInfo Content of the adaptive bitrate streaming template allowed for playback protected by DRM.

This parameter is required if `AudioVideoType` is `AdaptiveDynamicStream` and `DrmSwitch` is `ON`.
     */
    public $DrmStreamingsInfo;

    /**
     * @var integer ID of the transcoding template allowed for playback

This parameter is required if `AudioVideoType` is `Transcode`.
     */
    public $TranscodeDefinition;

    /**
     * @var integer ID of the image sprite generating template that allows output.
     */
    public $ImageSpriteDefinition;

    /**
     * @var array The player displays names for substreams of different resolutions. If left unfilled or filled in a blank array, the default configuration is used:
<li>MinEdgeLength: 240, Name: smooth;</li>
<li>MinEdgeLength: 480, Name: SD; </li>
<li>MinEdgeLength: 720, Name: HD; </li>
<li>MinEdgeLength: 1080, Name: Full HD; </li>
<li>MinEdgeLength: 1440, Name: 2K; </li>
<li>MinEdgeLength: 2160, Name: 4K; </li>
<li>MinEdgeLength: 4320, Name: 8K. </li>
     */
    public $ResolutionNames;

    /**
     * @var string Domain name used for playback. If it is left empty or set to `Default`, the domain name configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used.
     */
    public $Domain;

    /**
     * @var string Scheme used for playback. If it is left empty or set to `Default`, the scheme configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used. Other valid values:
<li>HTTP;</li>
<li>HTTPS.</li>
     */
    public $Scheme;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @param string $Name Player configuration name, which can contain up to 64 letters, digits, underscores, and hyphens (such as test_ABC-123) and must be unique under a user.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $AudioVideoType Type of audio/video played. Valid values:
<li>AdaptiveDynamicStreaming</li>
<li>Transcode</li>
<li>Original</li>
Default value: `AdaptiveDynamicStream`
     * @param string $DrmSwitch Whether to allow only adaptive bitrate streaming playback protected by DRM. Valid values:
<li>`ON`: allow only adaptive bitrate streaming playback protected by DRM</li>
<li>`OFF`: allow adaptive bitrate streaming playback not protected by DRM</li>
Default value: `OFF`
This parameter is valid when `AudioVideoType` is `AdaptiveDynamicStream`.
     * @param integer $AdaptiveDynamicStreamingDefinition ID of the adaptive bitrate streaming template allowed for playback not protected by DRM.

This parameter is required if `AudioVideoType` is `AdaptiveDynamicStream` and `DrmSwitch` is `OFF`.
     * @param DrmStreamingsInfo $DrmStreamingsInfo Content of the adaptive bitrate streaming template allowed for playback protected by DRM.

This parameter is required if `AudioVideoType` is `AdaptiveDynamicStream` and `DrmSwitch` is `ON`.
     * @param integer $TranscodeDefinition ID of the transcoding template allowed for playback

This parameter is required if `AudioVideoType` is `Transcode`.
     * @param integer $ImageSpriteDefinition ID of the image sprite generating template that allows output.
     * @param array $ResolutionNames The player displays names for substreams of different resolutions. If left unfilled or filled in a blank array, the default configuration is used:
<li>MinEdgeLength: 240, Name: smooth;</li>
<li>MinEdgeLength: 480, Name: SD; </li>
<li>MinEdgeLength: 720, Name: HD; </li>
<li>MinEdgeLength: 1080, Name: Full HD; </li>
<li>MinEdgeLength: 1440, Name: 2K; </li>
<li>MinEdgeLength: 2160, Name: 4K; </li>
<li>MinEdgeLength: 4320, Name: 8K. </li>
     * @param string $Domain Domain name used for playback. If it is left empty or set to `Default`, the domain name configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used.
     * @param string $Scheme Scheme used for playback. If it is left empty or set to `Default`, the scheme configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used. Other valid values:
<li>HTTP;</li>
<li>HTTPS.</li>
     * @param string $Comment Template description. Length limit: 256 characters.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("AudioVideoType",$param) and $param["AudioVideoType"] !== null) {
            $this->AudioVideoType = $param["AudioVideoType"];
        }

        if (array_key_exists("DrmSwitch",$param) and $param["DrmSwitch"] !== null) {
            $this->DrmSwitch = $param["DrmSwitch"];
        }

        if (array_key_exists("AdaptiveDynamicStreamingDefinition",$param) and $param["AdaptiveDynamicStreamingDefinition"] !== null) {
            $this->AdaptiveDynamicStreamingDefinition = $param["AdaptiveDynamicStreamingDefinition"];
        }

        if (array_key_exists("DrmStreamingsInfo",$param) and $param["DrmStreamingsInfo"] !== null) {
            $this->DrmStreamingsInfo = new DrmStreamingsInfo();
            $this->DrmStreamingsInfo->deserialize($param["DrmStreamingsInfo"]);
        }

        if (array_key_exists("TranscodeDefinition",$param) and $param["TranscodeDefinition"] !== null) {
            $this->TranscodeDefinition = $param["TranscodeDefinition"];
        }

        if (array_key_exists("ImageSpriteDefinition",$param) and $param["ImageSpriteDefinition"] !== null) {
            $this->ImageSpriteDefinition = $param["ImageSpriteDefinition"];
        }

        if (array_key_exists("ResolutionNames",$param) and $param["ResolutionNames"] !== null) {
            $this->ResolutionNames = [];
            foreach ($param["ResolutionNames"] as $key => $value){
                $obj = new ResolutionNameInfo();
                $obj->deserialize($value);
                array_push($this->ResolutionNames, $obj);
            }
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
