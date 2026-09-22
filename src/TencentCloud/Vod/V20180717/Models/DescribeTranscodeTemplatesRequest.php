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
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method array getDefinitions() Obtain Filtering condition for the unique identifier of the transcoding template. The array length cannot exceed 100.
 * @method void setDefinitions(array $Definitions) Set Filtering condition for the unique identifier of the transcoding template. The array length cannot exceed 100.
 * @method string getType() Obtain Condition for filtering templates by type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
 * @method void setType(string $Type) Set Condition for filtering templates by type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
 * @method string getContainerType() Obtain Muxing format filter criteria. Available values:
<li>Video: Video format. A container format that can contain both video and audio streams.</li>
<li>PureAudio: Pure audio format, a container format that can only contain audio streams.</li>
 * @method void setContainerType(string $ContainerType) Set Muxing format filter criteria. Available values:
<li>Video: Video format. A container format that can contain both video and audio streams.</li>
<li>PureAudio: Pure audio format, a container format that can only contain audio streams.</li>
 * @method string getTEHDType() Obtain TSC filter criteria for filtering standard or TSC transcoding templates. Available values:
<li>Common: standard transcoding template;</li>
<li>TEHD: Ultra-HD template.</li>
 * @method void setTEHDType(string $TEHDType) Set TSC filter criteria for filtering standard or TSC transcoding templates. Available values:
<li>Common: standard transcoding template;</li>
<li>TEHD: Ultra-HD template.</li>
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 10. Maximum value: 100.
 * @method string getEnhanceType() Obtain Enhancement type. Valid values:
<li>VideoEnhance: video enhancement only.</li>
<li>AudioEnhance (audio enhancement only).</li>
<li>AudioVideoEnhance: audio and video enhancement.</li>
<li>AnyEnhance (including video enhancement only, audio enhancement only, and audio and video enhancement)</li>
<li>None (non-enhanced)</li>
 * @method void setEnhanceType(string $EnhanceType) Set Enhancement type. Valid values:
<li>VideoEnhance: video enhancement only.</li>
<li>AudioEnhance (audio enhancement only).</li>
<li>AudioVideoEnhance: audio and video enhancement.</li>
<li>AnyEnhance (including video enhancement only, audio enhancement only, and audio and video enhancement)</li>
<li>None (non-enhanced)</li>
 * @method string getEnhanceScenarioType() Obtain Enhancement scenario configuration. Available values: <li>common: general enhancement parameters, basic optimization parameters suitable for various video types to improve overall video quality.</li> <li>AIGC: overall resolution enhancement, using AI technology to improve the overall video resolution and enhance image clarity.</li> <li>short_play: enhance face and subtitle details, highlight facial expression details and subtitle clarity to improve the viewing experience.</li> <li>short_video: optimize complex and diverse image quality issues, optimize video quality for complex short video scenarios and address multiple visual issues.</li> <li>game: repair motion blur and enhance details, focusing on improving the clarity of game details, restoring motion blur areas, and making game screen content clearer and richer.</li> <li>HD_movie_series: obtain ultra-high-definition smooth effects, generate 4K 60fps HDR ultra-high-definition standard videos for UHD video demands in broadcasting and OTT. Support broadcasting scenario format standards.</li> <li>LQ_material: overall resolution enhancement, specially optimized for issues in old videos such as insufficient resolution, blur distortion, scratch damage, and color temperature caused by older shooting conditions.</li> <li>lecture: beautify and enhance face effects, specially optimized for face region, noise reduction, and burr processing in scenarios where people explain content, such as live shows, e-commerce, conferences, and lectures.</li>
 * @method void setEnhanceScenarioType(string $EnhanceScenarioType) Set Enhancement scenario configuration. Available values: <li>common: general enhancement parameters, basic optimization parameters suitable for various video types to improve overall video quality.</li> <li>AIGC: overall resolution enhancement, using AI technology to improve the overall video resolution and enhance image clarity.</li> <li>short_play: enhance face and subtitle details, highlight facial expression details and subtitle clarity to improve the viewing experience.</li> <li>short_video: optimize complex and diverse image quality issues, optimize video quality for complex short video scenarios and address multiple visual issues.</li> <li>game: repair motion blur and enhance details, focusing on improving the clarity of game details, restoring motion blur areas, and making game screen content clearer and richer.</li> <li>HD_movie_series: obtain ultra-high-definition smooth effects, generate 4K 60fps HDR ultra-high-definition standard videos for UHD video demands in broadcasting and OTT. Support broadcasting scenario format standards.</li> <li>LQ_material: overall resolution enhancement, specially optimized for issues in old videos such as insufficient resolution, blur distortion, scratch damage, and color temperature caused by older shooting conditions.</li> <li>lecture: beautify and enhance face effects, specially optimized for face region, noise reduction, and burr processing in scenarios where people explain content, such as live shows, e-commerce, conferences, and lectures.</li>
 */
class DescribeTranscodeTemplatesRequest extends AbstractModel
{
    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var array Filtering condition for the unique identifier of the transcoding template. The array length cannot exceed 100.
     */
    public $Definitions;

    /**
     * @var string Condition for filtering templates by type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
     */
    public $Type;

    /**
     * @var string Muxing format filter criteria. Available values:
<li>Video: Video format. A container format that can contain both video and audio streams.</li>
<li>PureAudio: Pure audio format, a container format that can only contain audio streams.</li>
     */
    public $ContainerType;

    /**
     * @var string TSC filter criteria for filtering standard or TSC transcoding templates. Available values:
<li>Common: standard transcoding template;</li>
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
<li>AudioVideoEnhance: audio and video enhancement.</li>
<li>AnyEnhance (including video enhancement only, audio enhancement only, and audio and video enhancement)</li>
<li>None (non-enhanced)</li>
     */
    public $EnhanceType;

    /**
     * @var string Enhancement scenario configuration. Available values: <li>common: general enhancement parameters, basic optimization parameters suitable for various video types to improve overall video quality.</li> <li>AIGC: overall resolution enhancement, using AI technology to improve the overall video resolution and enhance image clarity.</li> <li>short_play: enhance face and subtitle details, highlight facial expression details and subtitle clarity to improve the viewing experience.</li> <li>short_video: optimize complex and diverse image quality issues, optimize video quality for complex short video scenarios and address multiple visual issues.</li> <li>game: repair motion blur and enhance details, focusing on improving the clarity of game details, restoring motion blur areas, and making game screen content clearer and richer.</li> <li>HD_movie_series: obtain ultra-high-definition smooth effects, generate 4K 60fps HDR ultra-high-definition standard videos for UHD video demands in broadcasting and OTT. Support broadcasting scenario format standards.</li> <li>LQ_material: overall resolution enhancement, specially optimized for issues in old videos such as insufficient resolution, blur distortion, scratch damage, and color temperature caused by older shooting conditions.</li> <li>lecture: beautify and enhance face effects, specially optimized for face region, noise reduction, and burr processing in scenarios where people explain content, such as live shows, e-commerce, conferences, and lectures.</li>
     */
    public $EnhanceScenarioType;

    /**
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     * @param array $Definitions Filtering condition for the unique identifier of the transcoding template. The array length cannot exceed 100.
     * @param string $Type Condition for filtering templates by type. Valid values:
<li>Preset: system-preset template;</li>
<li>Custom: custom template.</li>
     * @param string $ContainerType Muxing format filter criteria. Available values:
<li>Video: Video format. A container format that can contain both video and audio streams.</li>
<li>PureAudio: Pure audio format, a container format that can only contain audio streams.</li>
     * @param string $TEHDType TSC filter criteria for filtering standard or TSC transcoding templates. Available values:
<li>Common: standard transcoding template;</li>
<li>TEHD: Ultra-HD template.</li>
     * @param integer $Offset Pagination offset. Default value: 0.
     * @param integer $Limit Number of returned entries. Default value: 10. Maximum value: 100.
     * @param string $EnhanceType Enhancement type. Valid values:
<li>VideoEnhance: video enhancement only.</li>
<li>AudioEnhance (audio enhancement only).</li>
<li>AudioVideoEnhance: audio and video enhancement.</li>
<li>AnyEnhance (including video enhancement only, audio enhancement only, and audio and video enhancement)</li>
<li>None (non-enhanced)</li>
     * @param string $EnhanceScenarioType Enhancement scenario configuration. Available values: <li>common: general enhancement parameters, basic optimization parameters suitable for various video types to improve overall video quality.</li> <li>AIGC: overall resolution enhancement, using AI technology to improve the overall video resolution and enhance image clarity.</li> <li>short_play: enhance face and subtitle details, highlight facial expression details and subtitle clarity to improve the viewing experience.</li> <li>short_video: optimize complex and diverse image quality issues, optimize video quality for complex short video scenarios and address multiple visual issues.</li> <li>game: repair motion blur and enhance details, focusing on improving the clarity of game details, restoring motion blur areas, and making game screen content clearer and richer.</li> <li>HD_movie_series: obtain ultra-high-definition smooth effects, generate 4K 60fps HDR ultra-high-definition standard videos for UHD video demands in broadcasting and OTT. Support broadcasting scenario format standards.</li> <li>LQ_material: overall resolution enhancement, specially optimized for issues in old videos such as insufficient resolution, blur distortion, scratch damage, and color temperature caused by older shooting conditions.</li> <li>lecture: beautify and enhance face effects, specially optimized for face region, noise reduction, and burr processing in scenarios where people explain content, such as live shows, e-commerce, conferences, and lectures.</li>
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
