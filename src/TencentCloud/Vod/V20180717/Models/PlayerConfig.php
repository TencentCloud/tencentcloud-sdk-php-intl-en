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
 * Player configuration details
 *
 * @method string getName() Obtain <p>Player configuration name.</p>
 * @method void setName(string $Name) Set <p>Player configuration name.</p>
 * @method string getType() Obtain <p>Player configuration type. Valid values:</p><li>Preset: system predefined configuration.</li><li>Custom: user-customized configuration.</li>
 * @method void setType(string $Type) Set <p>Player configuration type. Valid values:</p><li>Preset: system predefined configuration.</li><li>Custom: user-customized configuration.</li>
 * @method string getAudioVideoType() Obtain <p>Played Audio and Video Type. Optional values:</p><li>AdaptiveDynamicStream: adaptive bitrate stream output;</li><li>Transcode: transcoding output;</li><li>Original: original audio/video.</li>
 * @method void setAudioVideoType(string $AudioVideoType) Set <p>Played Audio and Video Type. Optional values:</p><li>AdaptiveDynamicStream: adaptive bitrate stream output;</li><li>Transcode: transcoding output;</li><li>Original: original audio/video.</li>
 * @method string getDrmSwitch() Obtain <p>Switch for playing DRM-protected adaptive bitstream:</p><li>ON: Enable, indicates only playback of protected adaptive bitrate output;</li><li>OFF: Disable, indicates playback of unencrypted adaptive bitstream output.</li>
 * @method void setDrmSwitch(string $DrmSwitch) Set <p>Switch for playing DRM-protected adaptive bitstream:</p><li>ON: Enable, indicates only playback of protected adaptive bitrate output;</li><li>OFF: Disable, indicates playback of unencrypted adaptive bitstream output.</li>
 * @method integer getAdaptiveDynamicStreamingDefinition() Obtain <p>Allowed output of unencrypted adaptive bitstream template ID.</p>
 * @method void setAdaptiveDynamicStreamingDefinition(integer $AdaptiveDynamicStreamingDefinition) Set <p>Allowed output of unencrypted adaptive bitstream template ID.</p>
 * @method DrmStreamingsInfo getDrmStreamingsInfo() Obtain <p>Allowed output of DRM adaptive bitstream template content.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDrmStreamingsInfo(DrmStreamingsInfo $DrmStreamingsInfo) Set <p>Allowed output of DRM adaptive bitstream template content.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTranscodeDefinition() Obtain <p>Allowed output transcoding template ID.</p>
 * @method void setTranscodeDefinition(integer $TranscodeDefinition) Set <p>Allowed output transcoding template ID.</p>
 * @method integer getImageSpriteDefinition() Obtain <p>Allowed output sprite template ID.</p>
 * @method void setImageSpriteDefinition(integer $ImageSpriteDefinition) Set <p>Allowed output sprite template ID.</p>
 * @method array getResolutionNameSet() Obtain <p>The player displays names for substreams of different resolution.</p>
 * @method void setResolutionNameSet(array $ResolutionNameSet) Set <p>The player displays names for substreams of different resolution.</p>
 * @method string getCreateTime() Obtain <p>Player configuration creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Player configuration creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getUpdateTime() Obtain <p>Last player configuration modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last player configuration modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getDomain() Obtain <p>Domain name used during playback. A value of Default indicates usage of the domain name in the <a href="https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1">default distribution configuration</a>.</p>
 * @method void setDomain(string $Domain) Set <p>Domain name used during playback. A value of Default indicates usage of the domain name in the <a href="https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1">default distribution configuration</a>.</p>
 * @method string getScheme() Obtain <p>Scheme used during playback. Value ranges from:</p><li>Default: Use the scheme in the [default distribution configuration](https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1);</li><li>HTTP;</li><li>HTTPS.</li>
 * @method void setScheme(string $Scheme) Set <p>Scheme used during playback. Value ranges from:</p><li>Default: Use the scheme in the [default distribution configuration](https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1);</li><li>HTTP;</li><li>HTTPS.</li>
 * @method string getComment() Obtain <p>Template description information.</p>
 * @method void setComment(string $Comment) Set <p>Template description information.</p>
 */
class PlayerConfig extends AbstractModel
{
    /**
     * @var string <p>Player configuration name.</p>
     */
    public $Name;

    /**
     * @var string <p>Player configuration type. Valid values:</p><li>Preset: system predefined configuration.</li><li>Custom: user-customized configuration.</li>
     */
    public $Type;

    /**
     * @var string <p>Played Audio and Video Type. Optional values:</p><li>AdaptiveDynamicStream: adaptive bitrate stream output;</li><li>Transcode: transcoding output;</li><li>Original: original audio/video.</li>
     */
    public $AudioVideoType;

    /**
     * @var string <p>Switch for playing DRM-protected adaptive bitstream:</p><li>ON: Enable, indicates only playback of protected adaptive bitrate output;</li><li>OFF: Disable, indicates playback of unencrypted adaptive bitstream output.</li>
     */
    public $DrmSwitch;

    /**
     * @var integer <p>Allowed output of unencrypted adaptive bitstream template ID.</p>
     */
    public $AdaptiveDynamicStreamingDefinition;

    /**
     * @var DrmStreamingsInfo <p>Allowed output of DRM adaptive bitstream template content.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DrmStreamingsInfo;

    /**
     * @var integer <p>Allowed output transcoding template ID.</p>
     */
    public $TranscodeDefinition;

    /**
     * @var integer <p>Allowed output sprite template ID.</p>
     */
    public $ImageSpriteDefinition;

    /**
     * @var array <p>The player displays names for substreams of different resolution.</p>
     */
    public $ResolutionNameSet;

    /**
     * @var string <p>Player configuration creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last player configuration modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Domain name used during playback. A value of Default indicates usage of the domain name in the <a href="https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1">default distribution configuration</a>.</p>
     */
    public $Domain;

    /**
     * @var string <p>Scheme used during playback. Value ranges from:</p><li>Default: Use the scheme in the [default distribution configuration](https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1);</li><li>HTTP;</li><li>HTTPS.</li>
     */
    public $Scheme;

    /**
     * @var string <p>Template description information.</p>
     */
    public $Comment;

    /**
     * @param string $Name <p>Player configuration name.</p>
     * @param string $Type <p>Player configuration type. Valid values:</p><li>Preset: system predefined configuration.</li><li>Custom: user-customized configuration.</li>
     * @param string $AudioVideoType <p>Played Audio and Video Type. Optional values:</p><li>AdaptiveDynamicStream: adaptive bitrate stream output;</li><li>Transcode: transcoding output;</li><li>Original: original audio/video.</li>
     * @param string $DrmSwitch <p>Switch for playing DRM-protected adaptive bitstream:</p><li>ON: Enable, indicates only playback of protected adaptive bitrate output;</li><li>OFF: Disable, indicates playback of unencrypted adaptive bitstream output.</li>
     * @param integer $AdaptiveDynamicStreamingDefinition <p>Allowed output of unencrypted adaptive bitstream template ID.</p>
     * @param DrmStreamingsInfo $DrmStreamingsInfo <p>Allowed output of DRM adaptive bitstream template content.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TranscodeDefinition <p>Allowed output transcoding template ID.</p>
     * @param integer $ImageSpriteDefinition <p>Allowed output sprite template ID.</p>
     * @param array $ResolutionNameSet <p>The player displays names for substreams of different resolution.</p>
     * @param string $CreateTime <p>Player configuration creation time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $UpdateTime <p>Last player configuration modification time, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $Domain <p>Domain name used during playback. A value of Default indicates usage of the domain name in the <a href="https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1">default distribution configuration</a>.</p>
     * @param string $Scheme <p>Scheme used during playback. Value ranges from:</p><li>Default: Use the scheme in the [default distribution configuration](https://www.tencentcloud.com/document/product/266/33373?from_cn_redirect=1);</li><li>HTTP;</li><li>HTTPS.</li>
     * @param string $Comment <p>Template description information.</p>
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
