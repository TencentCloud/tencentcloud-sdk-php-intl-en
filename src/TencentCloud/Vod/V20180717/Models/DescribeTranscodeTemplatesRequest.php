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
 * DescribeTranscodeTemplates request structure.
 *
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method array getDefinitions() Obtain Filter condition for the unique identifier of the transcoding template. The array can contain up to 100 unique identifiers.
 * @method void setDefinitions(array $Definitions) Set Filter condition for the unique identifier of the transcoding template. The array can contain up to 100 unique identifiers.
 * @method string getType() Obtain Condition for filtering templates by type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: User-defined template.</li>
 * @method void setType(string $Type) Set Condition for filtering templates by type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: User-defined template.</li>
 * @method string getContainerType() Obtain Muxing format filter condition. Available values:
<li>Video: Video format that contains both video stream and audio stream in a muxing format.</li>
<li>PureAudio: Pure audio format, a muxing format that can only contain audio streams.</li>
 * @method void setContainerType(string $ContainerType) Set Muxing format filter condition. Available values:
<li>Video: Video format that contains both video stream and audio stream in a muxing format.</li>
<li>PureAudio: Pure audio format, a muxing format that can only contain audio streams.</li>
 * @method string getTEHDType() Obtain Top Speed Codec filter conditions for filtering standard transcoding or TSC transcoding templates. Available values:
<li>Common: standard transcoding template.</li>
<li>TEHD: Ultra-HD template.</li>
 * @method void setTEHDType(string $TEHDType) Set Top Speed Codec filter conditions for filtering standard transcoding or TSC transcoding templates. Available values:
<li>Common: standard transcoding template.</li>
<li>TEHD: Ultra-HD template.</li>
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 10. Maximum value: 100.
 * @method string getEnhanceType() Obtain Enhancement type. Valid values:
<li>VideoEnhance: video enhancement only.</li>
<li>AudioEnhance (audio enhancement only).</li>
<li>AudioVideoEnhance: audio and video enhancement included.</li>
<li>AnyEnhance (including video enhancement only, audio enhancement only, audio and video enhancement)</li>
<li>None (non-enhanced)</li>
 * @method void setEnhanceType(string $EnhanceType) Set Enhancement type. Valid values:
<li>VideoEnhance: video enhancement only.</li>
<li>AudioEnhance (audio enhancement only).</li>
<li>AudioVideoEnhance: audio and video enhancement included.</li>
<li>AnyEnhance (including video enhancement only, audio enhancement only, audio and video enhancement)</li>
<li>None (non-enhanced)</li>
 * @method string getEnhanceScenarioType() Obtain Enhance scenario configuration. Available values: <li>common (general): general enhancement parameter, suitable for basic optimization parameters of various video types to improve overall video quality.</li> <li>AIGC: overall resolution enhancement. It uses AI technology to improve the overall video resolution and image clarity.</li> <li>short_play (mini-drama): enhances face and subtitle details, highlights facial expression details and subtitle clarity to improve viewing experience.</li> <li>short_video (short video): optimizes complex and diverse image quality issues, targets complex scenarios in short videos, improves video quality, and addresses multiple visual problems.</li> <li>game (gaming video): restores motion blur, enhances details, focuses on improving game detail clarity, restores motion blur areas, and makes the game screen content clearer and more vivid.</li> <li>HD_movie_series (UHD TV shows and movies): achieves ultra-high-definition smooth effects, targets the demand for UHD videos in broadcasting and OTT scenarios, and generates UHD standard videos in 4K 60fps HDR. Supports broadcasting scenario format standards.</li> <li>LQ_material (low-quality material/classic film restoration): improves overall resolution, specifically optimizes issues in old videos such as insufficient resolution, blur distortion, scratch damage, and color temperature due to their age.</li> <li>lecture (showroom/e-commerce/conference/lecture): beautifies and enhances face effects, specifically optimizes face regions, noise reduction, and burr processing for scenarios where figures are explained in showrooms, e-commerce, conferences, or lectures.</li>
 * @method void setEnhanceScenarioType(string $EnhanceScenarioType) Set Enhance scenario configuration. Available values: <li>common (general): general enhancement parameter, suitable for basic optimization parameters of various video types to improve overall video quality.</li> <li>AIGC: overall resolution enhancement. It uses AI technology to improve the overall video resolution and image clarity.</li> <li>short_play (mini-drama): enhances face and subtitle details, highlights facial expression details and subtitle clarity to improve viewing experience.</li> <li>short_video (short video): optimizes complex and diverse image quality issues, targets complex scenarios in short videos, improves video quality, and addresses multiple visual problems.</li> <li>game (gaming video): restores motion blur, enhances details, focuses on improving game detail clarity, restores motion blur areas, and makes the game screen content clearer and more vivid.</li> <li>HD_movie_series (UHD TV shows and movies): achieves ultra-high-definition smooth effects, targets the demand for UHD videos in broadcasting and OTT scenarios, and generates UHD standard videos in 4K 60fps HDR. Supports broadcasting scenario format standards.</li> <li>LQ_material (low-quality material/classic film restoration): improves overall resolution, specifically optimizes issues in old videos such as insufficient resolution, blur distortion, scratch damage, and color temperature due to their age.</li> <li>lecture (showroom/e-commerce/conference/lecture): beautifies and enhances face effects, specifically optimizes face regions, noise reduction, and burr processing for scenarios where figures are explained in showrooms, e-commerce, conferences, or lectures.</li>
 */
class DescribeTranscodeTemplatesRequest extends AbstractModel
{
    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var array Filter condition for the unique identifier of the transcoding template. The array can contain up to 100 unique identifiers.
     */
    public $Definitions;

    /**
     * @var string Condition for filtering templates by type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: User-defined template.</li>
     */
    public $Type;

    /**
     * @var string Muxing format filter condition. Available values:
<li>Video: Video format that contains both video stream and audio stream in a muxing format.</li>
<li>PureAudio: Pure audio format, a muxing format that can only contain audio streams.</li>
     */
    public $ContainerType;

    /**
     * @var string Top Speed Codec filter conditions for filtering standard transcoding or TSC transcoding templates. Available values:
<li>Common: standard transcoding template.</li>
<li>TEHD: Ultra-HD template.</li>
     */
    public $TEHDType;

    /**
     * @var integer Pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Enhancement type. Valid values:
<li>VideoEnhance: video enhancement only.</li>
<li>AudioEnhance (audio enhancement only).</li>
<li>AudioVideoEnhance: audio and video enhancement included.</li>
<li>AnyEnhance (including video enhancement only, audio enhancement only, audio and video enhancement)</li>
<li>None (non-enhanced)</li>
     */
    public $EnhanceType;

    /**
     * @var string Enhance scenario configuration. Available values: <li>common (general): general enhancement parameter, suitable for basic optimization parameters of various video types to improve overall video quality.</li> <li>AIGC: overall resolution enhancement. It uses AI technology to improve the overall video resolution and image clarity.</li> <li>short_play (mini-drama): enhances face and subtitle details, highlights facial expression details and subtitle clarity to improve viewing experience.</li> <li>short_video (short video): optimizes complex and diverse image quality issues, targets complex scenarios in short videos, improves video quality, and addresses multiple visual problems.</li> <li>game (gaming video): restores motion blur, enhances details, focuses on improving game detail clarity, restores motion blur areas, and makes the game screen content clearer and more vivid.</li> <li>HD_movie_series (UHD TV shows and movies): achieves ultra-high-definition smooth effects, targets the demand for UHD videos in broadcasting and OTT scenarios, and generates UHD standard videos in 4K 60fps HDR. Supports broadcasting scenario format standards.</li> <li>LQ_material (low-quality material/classic film restoration): improves overall resolution, specifically optimizes issues in old videos such as insufficient resolution, blur distortion, scratch damage, and color temperature due to their age.</li> <li>lecture (showroom/e-commerce/conference/lecture): beautifies and enhances face effects, specifically optimizes face regions, noise reduction, and burr processing for scenarios where figures are explained in showrooms, e-commerce, conferences, or lectures.</li>
     */
    public $EnhanceScenarioType;

    /**
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param array $Definitions Filter condition for the unique identifier of the transcoding template. The array can contain up to 100 unique identifiers.
     * @param string $Type Condition for filtering templates by type. Valid values:
<li>Preset: system preset template;</li>
<li>Custom: User-defined template.</li>
     * @param string $ContainerType Muxing format filter condition. Available values:
<li>Video: Video format that contains both video stream and audio stream in a muxing format.</li>
<li>PureAudio: Pure audio format, a muxing format that can only contain audio streams.</li>
     * @param string $TEHDType Top Speed Codec filter conditions for filtering standard transcoding or TSC transcoding templates. Available values:
<li>Common: standard transcoding template.</li>
<li>TEHD: Ultra-HD template.</li>
     * @param integer $Offset Pagination offset. Default value: 0.
     * @param integer $Limit Number of returned entries. Default value: 10. Maximum value: 100.
     * @param string $EnhanceType Enhancement type. Valid values:
<li>VideoEnhance: video enhancement only.</li>
<li>AudioEnhance (audio enhancement only).</li>
<li>AudioVideoEnhance: audio and video enhancement included.</li>
<li>AnyEnhance (including video enhancement only, audio enhancement only, audio and video enhancement)</li>
<li>None (non-enhanced)</li>
     * @param string $EnhanceScenarioType Enhance scenario configuration. Available values: <li>common (general): general enhancement parameter, suitable for basic optimization parameters of various video types to improve overall video quality.</li> <li>AIGC: overall resolution enhancement. It uses AI technology to improve the overall video resolution and image clarity.</li> <li>short_play (mini-drama): enhances face and subtitle details, highlights facial expression details and subtitle clarity to improve viewing experience.</li> <li>short_video (short video): optimizes complex and diverse image quality issues, targets complex scenarios in short videos, improves video quality, and addresses multiple visual problems.</li> <li>game (gaming video): restores motion blur, enhances details, focuses on improving game detail clarity, restores motion blur areas, and makes the game screen content clearer and more vivid.</li> <li>HD_movie_series (UHD TV shows and movies): achieves ultra-high-definition smooth effects, targets the demand for UHD videos in broadcasting and OTT scenarios, and generates UHD standard videos in 4K 60fps HDR. Supports broadcasting scenario format standards.</li> <li>LQ_material (low-quality material/classic film restoration): improves overall resolution, specifically optimizes issues in old videos such as insufficient resolution, blur distortion, scratch damage, and color temperature due to their age.</li> <li>lecture (showroom/e-commerce/conference/lecture): beautifies and enhances face effects, specifically optimizes face regions, noise reduction, and burr processing for scenarios where figures are explained in showrooms, e-commerce, conferences, or lectures.</li>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Definitions",$param) and $param["Definitions"] !== null) {
            $this->Definitions = $param["Definitions"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ContainerType",$param) and $param["ContainerType"] !== null) {
            $this->ContainerType = $param["ContainerType"];
        }

        if (array_key_exists("TEHDType",$param) and $param["TEHDType"] !== null) {
            $this->TEHDType = $param["TEHDType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("EnhanceType",$param) and $param["EnhanceType"] !== null) {
            $this->EnhanceType = $param["EnhanceType"];
        }

        if (array_key_exists("EnhanceScenarioType",$param) and $param["EnhanceScenarioType"] !== null) {
            $this->EnhanceScenarioType = $param["EnhanceScenarioType"];
        }
    }
}
