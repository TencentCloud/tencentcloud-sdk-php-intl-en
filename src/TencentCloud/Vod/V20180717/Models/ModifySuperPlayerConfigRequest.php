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
 * ModifySuperPlayerConfig request structure.
 *
 * @method string getName() Obtain Player configuration name.
 * @method void setName(string $Name) Set Player configuration name.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getAudioVideoType() Obtain Played audio and video type. Valid values:
<li>AdaptiveDynamicStream: adaptive bitrate stream output;</li>
<li>Transcode: transcoding output;</li>
<li>Original: original audio/video.</li>
 * @method void setAudioVideoType(string $AudioVideoType) Set Played audio and video type. Valid values:
<li>AdaptiveDynamicStream: adaptive bitrate stream output;</li>
<li>Transcode: transcoding output;</li>
<li>Original: original audio/video.</li>
 * @method string getDrmSwitch() Obtain Switch for playing DRM-protected adaptive bitstream.
<li>ON: Enable, indicates only playback of protected adaptive bitrate output.</li>
<li>OFF: Disable. Indicates playback of unencrypted adaptive bitstream output.</li>
 * @method void setDrmSwitch(string $DrmSwitch) Set Switch for playing DRM-protected adaptive bitstream.
<li>ON: Enable, indicates only playback of protected adaptive bitrate output.</li>
<li>OFF: Disable. Indicates playback of unencrypted adaptive bitstream output.</li>
 * @method integer getAdaptiveDynamicStreamingDefinition() Obtain Allowed output of unencrypted adaptive bitstream template ID.
 * @method void setAdaptiveDynamicStreamingDefinition(integer $AdaptiveDynamicStreamingDefinition) Set Allowed output of unencrypted adaptive bitstream template ID.
 * @method DrmStreamingsInfoForUpdate getDrmStreamingsInfo() Obtain Allowed output of DRM adaptive bitstream template content.
 * @method void setDrmStreamingsInfo(DrmStreamingsInfoForUpdate $DrmStreamingsInfo) Set Allowed output of DRM adaptive bitstream template content.
 * @method integer getTranscodeDefinition() Obtain Allowed output transcoding template ID.
 * @method void setTranscodeDefinition(integer $TranscodeDefinition) Set Allowed output transcoding template ID.
 * @method integer getImageSpriteDefinition() Obtain Allowed output sprite template ID.
 * @method void setImageSpriteDefinition(integer $ImageSpriteDefinition) Set Allowed output sprite template ID.
 * @method array getResolutionNames() Obtain Player's display name for substreams of different resolutions.
 * @method void setResolutionNames(array $ResolutionNames) Set Player's display name for substreams of different resolutions.
 * @method string getDomain() Obtain Domain name used during playback. Enter Default to indicate usage of the domain name in the default distribution configuration (https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1).
 * @method void setDomain(string $Domain) Set Domain name used during playback. Enter Default to indicate usage of the domain name in the default distribution configuration (https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1).
 * @method string getScheme() Obtain Scheme used during playback. Valid values:
<li>Default: Use the Scheme in the [default distribution configuration](https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1);</li>
<li>HTTP;</li>
<li>HTTPS.</li>
 * @method void setScheme(string $Scheme) Set Scheme used during playback. Valid values:
<li>Default: Use the Scheme in the [default distribution configuration](https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1);</li>
<li>HTTP;</li>
<li>HTTPS.</li>
 * @method string getComment() Obtain Template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters.
 */
class ModifySuperPlayerConfigRequest extends AbstractModel
{
    /**
     * @var string Player configuration name.
     */
    public $Name;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Played audio and video type. Valid values:
<li>AdaptiveDynamicStream: adaptive bitrate stream output;</li>
<li>Transcode: transcoding output;</li>
<li>Original: original audio/video.</li>
     */
    public $AudioVideoType;

    /**
     * @var string Switch for playing DRM-protected adaptive bitstream.
<li>ON: Enable, indicates only playback of protected adaptive bitrate output.</li>
<li>OFF: Disable. Indicates playback of unencrypted adaptive bitstream output.</li>
     */
    public $DrmSwitch;

    /**
     * @var integer Allowed output of unencrypted adaptive bitstream template ID.
     */
    public $AdaptiveDynamicStreamingDefinition;

    /**
     * @var DrmStreamingsInfoForUpdate Allowed output of DRM adaptive bitstream template content.
     */
    public $DrmStreamingsInfo;

    /**
     * @var integer Allowed output transcoding template ID.
     */
    public $TranscodeDefinition;

    /**
     * @var integer Allowed output sprite template ID.
     */
    public $ImageSpriteDefinition;

    /**
     * @var array Player's display name for substreams of different resolutions.
     */
    public $ResolutionNames;

    /**
     * @var string Domain name used during playback. Enter Default to indicate usage of the domain name in the default distribution configuration (https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1).
     */
    public $Domain;

    /**
     * @var string Scheme used during playback. Valid values:
<li>Default: Use the Scheme in the [default distribution configuration](https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1);</li>
<li>HTTP;</li>
<li>HTTPS.</li>
     */
    public $Scheme;

    /**
     * @var string Template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @param string $Name Player configuration name.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $AudioVideoType Played audio and video type. Valid values:
<li>AdaptiveDynamicStream: adaptive bitrate stream output;</li>
<li>Transcode: transcoding output;</li>
<li>Original: original audio/video.</li>
     * @param string $DrmSwitch Switch for playing DRM-protected adaptive bitstream.
<li>ON: Enable, indicates only playback of protected adaptive bitrate output.</li>
<li>OFF: Disable. Indicates playback of unencrypted adaptive bitstream output.</li>
     * @param integer $AdaptiveDynamicStreamingDefinition Allowed output of unencrypted adaptive bitstream template ID.
     * @param DrmStreamingsInfoForUpdate $DrmStreamingsInfo Allowed output of DRM adaptive bitstream template content.
     * @param integer $TranscodeDefinition Allowed output transcoding template ID.
     * @param integer $ImageSpriteDefinition Allowed output sprite template ID.
     * @param array $ResolutionNames Player's display name for substreams of different resolutions.
     * @param string $Domain Domain name used during playback. Enter Default to indicate usage of the domain name in the default distribution configuration (https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1).
     * @param string $Scheme Scheme used during playback. Valid values:
<li>Default: Use the Scheme in the [default distribution configuration](https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1);</li>
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
            $this->DrmStreamingsInfo = new DrmStreamingsInfoForUpdate();
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
