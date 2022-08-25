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
 * Player configuration details
 *
 * @method string getName() Obtain Player configuration name.
 * @method void setName(string $Name) Set Player configuration name.
 * @method string getType() Obtain Player configuration type. Valid values:
<li>Preset: preset configuration;</li>
<li>Custom: custom configuration.</li>
 * @method void setType(string $Type) Set Player configuration type. Valid values:
<li>Preset: preset configuration;</li>
<li>Custom: custom configuration.</li>
 * @method string getAudioVideoType() Obtain The type of audio/video played. Valid values:
<li>AdaptiveDynamicStreaming: Adaptive bitrate stream</li>
<li>Transcode: Transcoded stream</li>
<li>Original: The original stream</li>
 * @method void setAudioVideoType(string $AudioVideoType) Set The type of audio/video played. Valid values:
<li>AdaptiveDynamicStreaming: Adaptive bitrate stream</li>
<li>Transcode: Transcoded stream</li>
<li>Original: The original stream</li>
 * @method string getDrmSwitch() Obtain Switch of DRM-protected adaptive bitstream playback:
<li>ON: enabled, indicating to play back only output adaptive bitstreams protected by DRM;</li>
<li>OFF: disabled, indicating to play back unencrypted output adaptive bitstreams.</li>
 * @method void setDrmSwitch(string $DrmSwitch) Set Switch of DRM-protected adaptive bitstream playback:
<li>ON: enabled, indicating to play back only output adaptive bitstreams protected by DRM;</li>
<li>OFF: disabled, indicating to play back unencrypted output adaptive bitstreams.</li>
 * @method integer getAdaptiveDynamicStreamingDefinition() Obtain ID of the unencrypted adaptive bitrate streaming template that allows output.
 * @method void setAdaptiveDynamicStreamingDefinition(integer $AdaptiveDynamicStreamingDefinition) Set ID of the unencrypted adaptive bitrate streaming template that allows output.
 * @method DrmStreamingsInfo getDrmStreamingsInfo() Obtain Content of the DRM-protected adaptive bitrate streaming template that allows output.
 * @method void setDrmStreamingsInfo(DrmStreamingsInfo $DrmStreamingsInfo) Set Content of the DRM-protected adaptive bitrate streaming template that allows output.
 * @method integer getTranscodeDefinition() Obtain The ID of the transcoding template allowed.
 * @method void setTranscodeDefinition(integer $TranscodeDefinition) Set The ID of the transcoding template allowed.
 * @method integer getImageSpriteDefinition() Obtain ID of the image sprite generating template that allows output.
 * @method void setImageSpriteDefinition(integer $ImageSpriteDefinition) Set ID of the image sprite generating template that allows output.
 * @method array getResolutionNameSet() Obtain Display name of player for substreams with different resolutions.
 * @method void setResolutionNameSet(array $ResolutionNameSet) Set Display name of player for substreams with different resolutions.
 * @method string getCreateTime() Obtain Creation time of player configuration in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setCreateTime(string $CreateTime) Set Creation time of player configuration in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getUpdateTime() Obtain Last modified time of player configuration in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of player configuration in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getDomain() Obtain Domain name used for playback. If its value is `Default`, the domain name configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used.
 * @method void setDomain(string $Domain) Set Domain name used for playback. If its value is `Default`, the domain name configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used.
 * @method string getScheme() Obtain Scheme used for playback. Valid values:
<li>Default: the scheme configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used;</li>
<li>HTTP;</li>
<li>HTTPS.</li>
 * @method void setScheme(string $Scheme) Set Scheme used for playback. Valid values:
<li>Default: the scheme configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used;</li>
<li>HTTP;</li>
<li>HTTPS.</li>
 * @method string getComment() Obtain Template description.
 * @method void setComment(string $Comment) Set Template description.
 */
class PlayerConfig extends AbstractModel
{
    /**
     * @var string Player configuration name.
     */
    public $Name;

    /**
     * @var string Player configuration type. Valid values:
<li>Preset: preset configuration;</li>
<li>Custom: custom configuration.</li>
     */
    public $Type;

    /**
     * @var string The type of audio/video played. Valid values:
<li>AdaptiveDynamicStreaming: Adaptive bitrate stream</li>
<li>Transcode: Transcoded stream</li>
<li>Original: The original stream</li>
     */
    public $AudioVideoType;

    /**
     * @var string Switch of DRM-protected adaptive bitstream playback:
<li>ON: enabled, indicating to play back only output adaptive bitstreams protected by DRM;</li>
<li>OFF: disabled, indicating to play back unencrypted output adaptive bitstreams.</li>
     */
    public $DrmSwitch;

    /**
     * @var integer ID of the unencrypted adaptive bitrate streaming template that allows output.
     */
    public $AdaptiveDynamicStreamingDefinition;

    /**
     * @var DrmStreamingsInfo Content of the DRM-protected adaptive bitrate streaming template that allows output.
     */
    public $DrmStreamingsInfo;

    /**
     * @var integer The ID of the transcoding template allowed.
     */
    public $TranscodeDefinition;

    /**
     * @var integer ID of the image sprite generating template that allows output.
     */
    public $ImageSpriteDefinition;

    /**
     * @var array Display name of player for substreams with different resolutions.
     */
    public $ResolutionNameSet;

    /**
     * @var string Creation time of player configuration in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $CreateTime;

    /**
     * @var string Last modified time of player configuration in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $UpdateTime;

    /**
     * @var string Domain name used for playback. If its value is `Default`, the domain name configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used.
     */
    public $Domain;

    /**
     * @var string Scheme used for playback. Valid values:
<li>Default: the scheme configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used;</li>
<li>HTTP;</li>
<li>HTTPS.</li>
     */
    public $Scheme;

    /**
     * @var string Template description.
     */
    public $Comment;

    /**
     * @param string $Name Player configuration name.
     * @param string $Type Player configuration type. Valid values:
<li>Preset: preset configuration;</li>
<li>Custom: custom configuration.</li>
     * @param string $AudioVideoType The type of audio/video played. Valid values:
<li>AdaptiveDynamicStreaming: Adaptive bitrate stream</li>
<li>Transcode: Transcoded stream</li>
<li>Original: The original stream</li>
     * @param string $DrmSwitch Switch of DRM-protected adaptive bitstream playback:
<li>ON: enabled, indicating to play back only output adaptive bitstreams protected by DRM;</li>
<li>OFF: disabled, indicating to play back unencrypted output adaptive bitstreams.</li>
     * @param integer $AdaptiveDynamicStreamingDefinition ID of the unencrypted adaptive bitrate streaming template that allows output.
     * @param DrmStreamingsInfo $DrmStreamingsInfo Content of the DRM-protected adaptive bitrate streaming template that allows output.
     * @param integer $TranscodeDefinition The ID of the transcoding template allowed.
     * @param integer $ImageSpriteDefinition ID of the image sprite generating template that allows output.
     * @param array $ResolutionNameSet Display name of player for substreams with different resolutions.
     * @param string $CreateTime Creation time of player configuration in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $UpdateTime Last modified time of player configuration in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $Domain Domain name used for playback. If its value is `Default`, the domain name configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used.
     * @param string $Scheme Scheme used for playback. Valid values:
<li>Default: the scheme configured in [Default Distribution Configuration](https://intl.cloud.tencent.com/document/product/266/33373?from_cn_redirect=1) will be used;</li>
<li>HTTP;</li>
<li>HTTPS.</li>
     * @param string $Comment Template description.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("ResolutionNameSet",$param) and $param["ResolutionNameSet"] !== null) {
            $this->ResolutionNameSet = [];
            foreach ($param["ResolutionNameSet"] as $key => $value){
                $obj = new ResolutionNameInfo();
                $obj->deserialize($value);
                array_push($this->ResolutionNameSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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
