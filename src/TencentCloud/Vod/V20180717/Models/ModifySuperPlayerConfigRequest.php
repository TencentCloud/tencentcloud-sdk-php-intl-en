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
 * ModifySuperPlayerConfig request structure.
 *
 * @method string getName() Obtain Player configuration name.
 * @method void setName(string $Name) Set Player configuration name.
 * @method string getDrmSwitch() Obtain Switch of DRM-protected adaptive bitstream playback:
<li>ON: enabled, indicating to play back only output adaptive bitstreams protected by DRM;</li>
<li>OFF: disabled, indicating to play back unencrypted output adaptive bitstreams.</li>
 * @method void setDrmSwitch(string $DrmSwitch) Set Switch of DRM-protected adaptive bitstream playback:
<li>ON: enabled, indicating to play back only output adaptive bitstreams protected by DRM;</li>
<li>OFF: disabled, indicating to play back unencrypted output adaptive bitstreams.</li>
 * @method integer getAdaptiveDynamicStreamingDefinition() Obtain ID of the unencrypted adaptive bitrate streaming template that allows output.
 * @method void setAdaptiveDynamicStreamingDefinition(integer $AdaptiveDynamicStreamingDefinition) Set ID of the unencrypted adaptive bitrate streaming template that allows output.
 * @method DrmStreamingsInfoForUpdate getDrmStreamingsInfo() Obtain Content of the DRM-protected adaptive bitrate streaming template that allows output.
 * @method void setDrmStreamingsInfo(DrmStreamingsInfoForUpdate $DrmStreamingsInfo) Set Content of the DRM-protected adaptive bitrate streaming template that allows output.
 * @method integer getImageSpriteDefinition() Obtain ID of the image sprite generating template that allows output.
 * @method void setImageSpriteDefinition(integer $ImageSpriteDefinition) Set ID of the image sprite generating template that allows output.
 * @method array getResolutionNames() Obtain Display name of player for substreams with different resolutions.
 * @method void setResolutionNames(array $ResolutionNames) Set Display name of player for substreams with different resolutions.
 * @method string getDomain() Obtain 
 * @method void setDomain(string $Domain) Set 
 * @method string getScheme() Obtain 
 * @method void setScheme(string $Scheme) Set 
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 * @method integer getSubAppId() Obtain [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 */
class ModifySuperPlayerConfigRequest extends AbstractModel
{
    /**
     * @var string Player configuration name.
     */
    public $Name;

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
     * @var DrmStreamingsInfoForUpdate Content of the DRM-protected adaptive bitrate streaming template that allows output.
     */
    public $DrmStreamingsInfo;

    /**
     * @var integer ID of the image sprite generating template that allows output.
     */
    public $ImageSpriteDefinition;

    /**
     * @var array Display name of player for substreams with different resolutions.
     */
    public $ResolutionNames;

    /**
     * @var string 
     */
    public $Domain;

    /**
     * @var string 
     */
    public $Scheme;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @var integer [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @param string $Name Player configuration name.
     * @param string $DrmSwitch Switch of DRM-protected adaptive bitstream playback:
<li>ON: enabled, indicating to play back only output adaptive bitstreams protected by DRM;</li>
<li>OFF: disabled, indicating to play back unencrypted output adaptive bitstreams.</li>
     * @param integer $AdaptiveDynamicStreamingDefinition ID of the unencrypted adaptive bitrate streaming template that allows output.
     * @param DrmStreamingsInfoForUpdate $DrmStreamingsInfo Content of the DRM-protected adaptive bitrate streaming template that allows output.
     * @param integer $ImageSpriteDefinition ID of the image sprite generating template that allows output.
     * @param array $ResolutionNames Display name of player for substreams with different resolutions.
     * @param string $Domain 
     * @param string $Scheme 
     * @param string $Comment Template description. Length limit: 256 characters.
     * @param integer $SubAppId [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
