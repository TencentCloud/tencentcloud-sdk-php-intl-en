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
 * CreateSuperPlayerConfig request structure.
 *
 * @method string getName() Obtain Player configuration name. Length limit: 64 characters. Only allowed to appear [0-9a-zA-Z] and _- characters (such as test_ABC-123). The name is unique for the same user.
 * @method void setName(string $Name) Set Player configuration name. Length limit: 64 characters. Only allowed to appear [0-9a-zA-Z] and _- characters (such as test_ABC-123). The name is unique for the same user.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getAudioVideoType() Obtain Played audio and video type. Available values:
<li>AdaptiveDynamicStream: adaptive bitrate stream output;</li>
<li>Transcode: transcoding output;</li>
<li>Original: original audio/video.</li>
Default is AdaptiveDynamicStream.
 * @method void setAudioVideoType(string $AudioVideoType) Set Played audio and video type. Available values:
<li>AdaptiveDynamicStream: adaptive bitrate stream output;</li>
<li>Transcode: transcoding output;</li>
<li>Original: original audio/video.</li>
Default is AdaptiveDynamicStream.
 * @method string getDrmSwitch() Obtain Switch for playing DRM-protected adaptive bitstream.
<li>ON: Enable, indicates only playback of DRM protected adaptive bitrate output;</li>
<li>OFF: Disable, indicates playback of unencrypted adaptive bitstream output.</li>
Default value: OFF.
This parameter is valid when AudioVideoType is AdaptiveDynamicStream.
 * @method void setDrmSwitch(string $DrmSwitch) Set Switch for playing DRM-protected adaptive bitstream.
<li>ON: Enable, indicates only playback of DRM protected adaptive bitrate output;</li>
<li>OFF: Disable, indicates playback of unencrypted adaptive bitstream output.</li>
Default value: OFF.
This parameter is valid when AudioVideoType is AdaptiveDynamicStream.
 * @method integer getAdaptiveDynamicStreamingDefinition() Obtain Allowed output of unencrypted adaptive bitstream template ID.

This parameter is required when AudioVideoType is AdaptiveDynamicStream and DrmSwitch is OFF.
 * @method void setAdaptiveDynamicStreamingDefinition(integer $AdaptiveDynamicStreamingDefinition) Set Allowed output of unencrypted adaptive bitstream template ID.

This parameter is required when AudioVideoType is AdaptiveDynamicStream and DrmSwitch is OFF.
 * @method DrmStreamingsInfo getDrmStreamingsInfo() Obtain Allowed output of DRM adaptive bitstream template content.

This parameter is required when AudioVideoType is AdaptiveDynamicStream and DrmSwitch is ON.
 * @method void setDrmStreamingsInfo(DrmStreamingsInfo $DrmStreamingsInfo) Set Allowed output of DRM adaptive bitstream template content.

This parameter is required when AudioVideoType is AdaptiveDynamicStream and DrmSwitch is ON.
 * @method integer getTranscodeDefinition() Obtain Allowed output transcoding template ID.

Required when AudioVideoType is Transcode.
 * @method void setTranscodeDefinition(integer $TranscodeDefinition) Set Allowed output transcoding template ID.

Required when AudioVideoType is Transcode.
 * @method integer getImageSpriteDefinition() Obtain Allowed output sprite template ID.
 * @method void setImageSpriteDefinition(integer $ImageSpriteDefinition) Set Allowed output sprite template ID.
 * @method array getResolutionNames() Obtain Player's display name for substreams of different resolutions. Use default configuration if not filled or empty array.
<li>MinEdgeLength: 240, Name: smooth;</li>
<li>MinEdgeLength: 480, Name: SD;</li>
<li>MinEdgeLength: 720, Name: high-definition;</li>
<li>MinEdgeLength: 1080, Name: full HD;</li>
<li>MinEdgeLength:1440,Name:2K;</li>
<li>MinEdgeLength:2160,Name:4K;</li>
<li>MinEdgeLength:4320,Name:8K.</li>
 * @method void setResolutionNames(array $ResolutionNames) Set Player's display name for substreams of different resolutions. Use default configuration if not filled or empty array.
<li>MinEdgeLength: 240, Name: smooth;</li>
<li>MinEdgeLength: 480, Name: SD;</li>
<li>MinEdgeLength: 720, Name: high-definition;</li>
<li>MinEdgeLength: 1080, Name: full HD;</li>
<li>MinEdgeLength:1440,Name:2K;</li>
<li>MinEdgeLength:2160,Name:4K;</li>
<li>MinEdgeLength:4320,Name:8K.</li>
 * @method string getDomain() Obtain Domain name used during playback. Leave it blank or enter Default to indicate usage of the domain name in the default distribution configuration (https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1).
 * @method void setDomain(string $Domain) Set Domain name used during playback. Leave it blank or enter Default to indicate usage of the domain name in the default distribution configuration (https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1).
 * @method string getScheme() Obtain Scheme used during playback. Leave it blank or enter Default to indicate usage of the scheme in the default distribution configuration (https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1). Other optional values:
<li>HTTP;</li>
<li>HTTPS.</li>
 * @method void setScheme(string $Scheme) Set Scheme used during playback. Leave it blank or enter Default to indicate usage of the scheme in the default distribution configuration (https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1). Other optional values:
<li>HTTP;</li>
<li>HTTPS.</li>
 * @method string getComment() Obtain Template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters.
 */
class CreateSuperPlayerConfigRequest extends AbstractModel
{
    /**
     * @var string Player configuration name. Length limit: 64 characters. Only allowed to appear [0-9a-zA-Z] and _- characters (such as test_ABC-123). The name is unique for the same user.
     */
    public $Name;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Played audio and video type. Available values:
<li>AdaptiveDynamicStream: adaptive bitrate stream output;</li>
<li>Transcode: transcoding output;</li>
<li>Original: original audio/video.</li>
Default is AdaptiveDynamicStream.
     */
    public $AudioVideoType;

    /**
     * @var string Switch for playing DRM-protected adaptive bitstream.
<li>ON: Enable, indicates only playback of DRM protected adaptive bitrate output;</li>
<li>OFF: Disable, indicates playback of unencrypted adaptive bitstream output.</li>
Default value: OFF.
This parameter is valid when AudioVideoType is AdaptiveDynamicStream.
     */
    public $DrmSwitch;

    /**
     * @var integer Allowed output of unencrypted adaptive bitstream template ID.

This parameter is required when AudioVideoType is AdaptiveDynamicStream and DrmSwitch is OFF.
     */
    public $AdaptiveDynamicStreamingDefinition;

    /**
     * @var DrmStreamingsInfo Allowed output of DRM adaptive bitstream template content.

This parameter is required when AudioVideoType is AdaptiveDynamicStream and DrmSwitch is ON.
     */
    public $DrmStreamingsInfo;

    /**
     * @var integer Allowed output transcoding template ID.

Required when AudioVideoType is Transcode.
     */
    public $TranscodeDefinition;

    /**
     * @var integer Allowed output sprite template ID.
     */
    public $ImageSpriteDefinition;

    /**
     * @var array Player's display name for substreams of different resolutions. Use default configuration if not filled or empty array.
<li>MinEdgeLength: 240, Name: smooth;</li>
<li>MinEdgeLength: 480, Name: SD;</li>
<li>MinEdgeLength: 720, Name: high-definition;</li>
<li>MinEdgeLength: 1080, Name: full HD;</li>
<li>MinEdgeLength:1440,Name:2K;</li>
<li>MinEdgeLength:2160,Name:4K;</li>
<li>MinEdgeLength:4320,Name:8K.</li>
     */
    public $ResolutionNames;

    /**
     * @var string Domain name used during playback. Leave it blank or enter Default to indicate usage of the domain name in the default distribution configuration (https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1).
     */
    public $Domain;

    /**
     * @var string Scheme used during playback. Leave it blank or enter Default to indicate usage of the scheme in the default distribution configuration (https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1). Other optional values:
<li>HTTP;</li>
<li>HTTPS.</li>
     */
    public $Scheme;

    /**
     * @var string Template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @param string $Name Player configuration name. Length limit: 64 characters. Only allowed to appear [0-9a-zA-Z] and _- characters (such as test_ABC-123). The name is unique for the same user.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $AudioVideoType Played audio and video type. Available values:
<li>AdaptiveDynamicStream: adaptive bitrate stream output;</li>
<li>Transcode: transcoding output;</li>
<li>Original: original audio/video.</li>
Default is AdaptiveDynamicStream.
     * @param string $DrmSwitch Switch for playing DRM-protected adaptive bitstream.
<li>ON: Enable, indicates only playback of DRM protected adaptive bitrate output;</li>
<li>OFF: Disable, indicates playback of unencrypted adaptive bitstream output.</li>
Default value: OFF.
This parameter is valid when AudioVideoType is AdaptiveDynamicStream.
     * @param integer $AdaptiveDynamicStreamingDefinition Allowed output of unencrypted adaptive bitstream template ID.

This parameter is required when AudioVideoType is AdaptiveDynamicStream and DrmSwitch is OFF.
     * @param DrmStreamingsInfo $DrmStreamingsInfo Allowed output of DRM adaptive bitstream template content.

This parameter is required when AudioVideoType is AdaptiveDynamicStream and DrmSwitch is ON.
     * @param integer $TranscodeDefinition Allowed output transcoding template ID.

Required when AudioVideoType is Transcode.
     * @param integer $ImageSpriteDefinition Allowed output sprite template ID.
     * @param array $ResolutionNames Player's display name for substreams of different resolutions. Use default configuration if not filled or empty array.
<li>MinEdgeLength: 240, Name: smooth;</li>
<li>MinEdgeLength: 480, Name: SD;</li>
<li>MinEdgeLength: 720, Name: high-definition;</li>
<li>MinEdgeLength: 1080, Name: full HD;</li>
<li>MinEdgeLength:1440,Name:2K;</li>
<li>MinEdgeLength:2160,Name:4K;</li>
<li>MinEdgeLength:4320,Name:8K.</li>
     * @param string $Domain Domain name used during playback. Leave it blank or enter Default to indicate usage of the domain name in the default distribution configuration (https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1).
     * @param string $Scheme Scheme used during playback. Leave it blank or enter Default to indicate usage of the scheme in the default distribution configuration (https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1). Other optional values:
<li>HTTP;</li>
<li>HTTPS.</li>
     * @param string $Comment Template description, with a length limit of 256 characters.
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
