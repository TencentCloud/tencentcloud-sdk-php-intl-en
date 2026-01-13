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
 * DescribeUsageData request structure.
 *
 * @method string getStartTime() Obtain Start date. Use the [ISO date and time format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setStartTime(string $StartTime) Set Start date. Use the [ISO date and time format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getEndTime() Obtain End date, which should be greater than or equal to the start date. Use the [ISO date and time format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setEndTime(string $EndTime) Set End date, which should be greater than or equal to the start date. Use the [ISO date and time format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method array getTypes() Obtain Queries the MPS task type. The transcoding task is queried by default.
<li>Transcode: transcoding.</li>
<li>Enhance: enhancement.</li>
<li>AIAnalysis: intelligent analysis.</li>
<li>AIRecognition: intelligent recognition.</li>
<li>AIReview: content moderation.</li>
<li>Snapshot: screenshot.</li>
<li>AnimatedGraphics: conversion to GIF.</li>
<li>AiQualityControl: media quality inspection.</li>
<li>Evaluation: video assessment.</li>
<li>ImageProcess: image processing.</li>
<li>AddBlindWatermark: add a basic copyright digital watermark.</li>
<li>AddNagraWatermark: add a NAGRA digital watermark.</li>
<li>ExtractBlindWatermark: extract a basic copyright digital watermark.</li>
 * @method void setTypes(array $Types) Set Queries the MPS task type. The transcoding task is queried by default.
<li>Transcode: transcoding.</li>
<li>Enhance: enhancement.</li>
<li>AIAnalysis: intelligent analysis.</li>
<li>AIRecognition: intelligent recognition.</li>
<li>AIReview: content moderation.</li>
<li>Snapshot: screenshot.</li>
<li>AnimatedGraphics: conversion to GIF.</li>
<li>AiQualityControl: media quality inspection.</li>
<li>Evaluation: video assessment.</li>
<li>ImageProcess: image processing.</li>
<li>AddBlindWatermark: add a basic copyright digital watermark.</li>
<li>AddNagraWatermark: add a NAGRA digital watermark.</li>
<li>ExtractBlindWatermark: extract a basic copyright digital watermark.</li>
 * @method array getProcessRegions() Obtain MPS park. ap-guangzhou park is returned by default.
<li>ap-guangzhou: Guangzhou.</li>
<li>ap-hongkong: Hong Kong (China).</li>
<li>ap-taipei: Taipei (China).</li>
<li>ap-singapore: Singapore.</li>
<li>ap-mumbai: India.</li>
<li>ap-jakarta: Jakarta.</li>
<li>ap-seoul: Seoul.</li>
<li>ap-bangkok: Thailand.</li>
<li>ap-tokyo: Japan.</li>
<li>na-siliconvalley: Silicon Valley.</li>
<li>na-ashburn: Virginia.</li>
<li>na-toronto: Toronto.</li>
<li>sa-saopaulo: São Paulo.</li>
<li>eu-frankfurt: Frankfurt.</li>
<li>eu-moscow: Russia.</li>
<li>aws: AWS.</li>
 * @method void setProcessRegions(array $ProcessRegions) Set MPS park. ap-guangzhou park is returned by default.
<li>ap-guangzhou: Guangzhou.</li>
<li>ap-hongkong: Hong Kong (China).</li>
<li>ap-taipei: Taipei (China).</li>
<li>ap-singapore: Singapore.</li>
<li>ap-mumbai: India.</li>
<li>ap-jakarta: Jakarta.</li>
<li>ap-seoul: Seoul.</li>
<li>ap-bangkok: Thailand.</li>
<li>ap-tokyo: Japan.</li>
<li>na-siliconvalley: Silicon Valley.</li>
<li>na-ashburn: Virginia.</li>
<li>na-toronto: Toronto.</li>
<li>sa-saopaulo: São Paulo.</li>
<li>eu-frankfurt: Frankfurt.</li>
<li>eu-moscow: Russia.</li>
<li>aws: AWS.</li>
 */
class DescribeUsageDataRequest extends AbstractModel
{
    /**
     * @var string Start date. Use the [ISO date and time format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $StartTime;

    /**
     * @var string End date, which should be greater than or equal to the start date. Use the [ISO date and time format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $EndTime;

    /**
     * @var array Queries the MPS task type. The transcoding task is queried by default.
<li>Transcode: transcoding.</li>
<li>Enhance: enhancement.</li>
<li>AIAnalysis: intelligent analysis.</li>
<li>AIRecognition: intelligent recognition.</li>
<li>AIReview: content moderation.</li>
<li>Snapshot: screenshot.</li>
<li>AnimatedGraphics: conversion to GIF.</li>
<li>AiQualityControl: media quality inspection.</li>
<li>Evaluation: video assessment.</li>
<li>ImageProcess: image processing.</li>
<li>AddBlindWatermark: add a basic copyright digital watermark.</li>
<li>AddNagraWatermark: add a NAGRA digital watermark.</li>
<li>ExtractBlindWatermark: extract a basic copyright digital watermark.</li>
     */
    public $Types;

    /**
     * @var array MPS park. ap-guangzhou park is returned by default.
<li>ap-guangzhou: Guangzhou.</li>
<li>ap-hongkong: Hong Kong (China).</li>
<li>ap-taipei: Taipei (China).</li>
<li>ap-singapore: Singapore.</li>
<li>ap-mumbai: India.</li>
<li>ap-jakarta: Jakarta.</li>
<li>ap-seoul: Seoul.</li>
<li>ap-bangkok: Thailand.</li>
<li>ap-tokyo: Japan.</li>
<li>na-siliconvalley: Silicon Valley.</li>
<li>na-ashburn: Virginia.</li>
<li>na-toronto: Toronto.</li>
<li>sa-saopaulo: São Paulo.</li>
<li>eu-frankfurt: Frankfurt.</li>
<li>eu-moscow: Russia.</li>
<li>aws: AWS.</li>
     */
    public $ProcessRegions;

    /**
     * @param string $StartTime Start date. Use the [ISO date and time format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $EndTime End date, which should be greater than or equal to the start date. Use the [ISO date and time format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param array $Types Queries the MPS task type. The transcoding task is queried by default.
<li>Transcode: transcoding.</li>
<li>Enhance: enhancement.</li>
<li>AIAnalysis: intelligent analysis.</li>
<li>AIRecognition: intelligent recognition.</li>
<li>AIReview: content moderation.</li>
<li>Snapshot: screenshot.</li>
<li>AnimatedGraphics: conversion to GIF.</li>
<li>AiQualityControl: media quality inspection.</li>
<li>Evaluation: video assessment.</li>
<li>ImageProcess: image processing.</li>
<li>AddBlindWatermark: add a basic copyright digital watermark.</li>
<li>AddNagraWatermark: add a NAGRA digital watermark.</li>
<li>ExtractBlindWatermark: extract a basic copyright digital watermark.</li>
     * @param array $ProcessRegions MPS park. ap-guangzhou park is returned by default.
<li>ap-guangzhou: Guangzhou.</li>
<li>ap-hongkong: Hong Kong (China).</li>
<li>ap-taipei: Taipei (China).</li>
<li>ap-singapore: Singapore.</li>
<li>ap-mumbai: India.</li>
<li>ap-jakarta: Jakarta.</li>
<li>ap-seoul: Seoul.</li>
<li>ap-bangkok: Thailand.</li>
<li>ap-tokyo: Japan.</li>
<li>na-siliconvalley: Silicon Valley.</li>
<li>na-ashburn: Virginia.</li>
<li>na-toronto: Toronto.</li>
<li>sa-saopaulo: São Paulo.</li>
<li>eu-frankfurt: Frankfurt.</li>
<li>eu-moscow: Russia.</li>
<li>aws: AWS.</li>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("ProcessRegions",$param) and $param["ProcessRegions"] !== null) {
            $this->ProcessRegions = $param["ProcessRegions"];
        }
    }
}
