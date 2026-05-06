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
 * @method string getStartTime() Obtain <p>Start date. Use ISO date format.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start date. Use ISO date format.</p>
 * @method string getEndTime() Obtain <p>End date, which must be greater than or equal to the start date. Use the <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date format</a>.</p><p>Parameter format: 2019-07-16T06:21:28Z.</p>
 * @method void setEndTime(string $EndTime) Set <p>End date, which must be greater than or equal to the start date. Use the <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date format</a>.</p><p>Parameter format: 2019-07-16T06:21:28Z.</p>
 * @method array getTypes() Obtain <p>Media processing task type to query. Default value: Transcode. Valid values: </p><li>Transcode: Transcoding, </li><li>Enhance: Enhancement, </li><li>AIAnalysis: AI Analysis, </li><li>AIRecognition: AI Recognition, </li><li>AIReview: AI Review, </li><li>Snapshot: Snapshot, </li><li>AnimatedGraphics: Animated Graphics, </li><li>AiQualityControl: Quality Control, </li><li>Evaluation: Video Evaluation, </li><li>ImageProcess: Image Processing, </li><li>AddBlindWatermark: Add Basic Copyright Digital Watermark, </li><li>AddNagraWatermark: Add NAGRA Digital Watermark, </li><li>ExtractBlindWatermark: Extract Basic Copyright Digital Watermark, </li><li>AIGCVideo: AIGC Video Generation, </li><li>AIGCImage: AIGC Image Generation.</li>
 * @method void setTypes(array $Types) Set <p>Media processing task type to query. Default value: Transcode. Valid values: </p><li>Transcode: Transcoding, </li><li>Enhance: Enhancement, </li><li>AIAnalysis: AI Analysis, </li><li>AIRecognition: AI Recognition, </li><li>AIReview: AI Review, </li><li>Snapshot: Snapshot, </li><li>AnimatedGraphics: Animated Graphics, </li><li>AiQualityControl: Quality Control, </li><li>Evaluation: Video Evaluation, </li><li>ImageProcess: Image Processing, </li><li>AddBlindWatermark: Add Basic Copyright Digital Watermark, </li><li>AddNagraWatermark: Add NAGRA Digital Watermark, </li><li>ExtractBlindWatermark: Extract Basic Copyright Digital Watermark, </li><li>AIGCVideo: AIGC Video Generation, </li><li>AIGCImage: AIGC Image Generation.</li>
 * @method array getProcessRegions() Obtain <p>Media processing region. Default value: ap-guangzhou. Valid values: </p><li>ap-guangzhou: Guangzhou, </li><li>ap-hongkong: Hong Kong (China), </li><li>ap-taipei: Taiwan (China), </li><li>ap-singapore: Singapore, </li><li>ap-mumbai: India, </li><li>ap-jakarta: Jakarta, </li><li>ap-seoul: Seoul, </li><li>ap-bangkok: Thailand, </li><li>ap-tokyo: Japan, </li><li>na-siliconvalley: Silicon Valley (USA), </li><li>na-ashburn: Virginia, </li><li>na-toronto: Toronto, </li><li>sa-saopaulo: Sao Paulo, </li><li>eu-frankfurt: Frankfurt, </li><li>eu-moscow: Russia, </li><li>aws: AWS.</li>
 * @method void setProcessRegions(array $ProcessRegions) Set <p>Media processing region. Default value: ap-guangzhou. Valid values: </p><li>ap-guangzhou: Guangzhou, </li><li>ap-hongkong: Hong Kong (China), </li><li>ap-taipei: Taiwan (China), </li><li>ap-singapore: Singapore, </li><li>ap-mumbai: India, </li><li>ap-jakarta: Jakarta, </li><li>ap-seoul: Seoul, </li><li>ap-bangkok: Thailand, </li><li>ap-tokyo: Japan, </li><li>na-siliconvalley: Silicon Valley (USA), </li><li>na-ashburn: Virginia, </li><li>na-toronto: Toronto, </li><li>sa-saopaulo: Sao Paulo, </li><li>eu-frankfurt: Frankfurt, </li><li>eu-moscow: Russia, </li><li>aws: AWS.</li>
 */
class DescribeUsageDataRequest extends AbstractModel
{
    /**
     * @var string <p>Start date. Use ISO date format.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End date, which must be greater than or equal to the start date. Use the <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date format</a>.</p><p>Parameter format: 2019-07-16T06:21:28Z.</p>
     */
    public $EndTime;

    /**
     * @var array <p>Media processing task type to query. Default value: Transcode. Valid values: </p><li>Transcode: Transcoding, </li><li>Enhance: Enhancement, </li><li>AIAnalysis: AI Analysis, </li><li>AIRecognition: AI Recognition, </li><li>AIReview: AI Review, </li><li>Snapshot: Snapshot, </li><li>AnimatedGraphics: Animated Graphics, </li><li>AiQualityControl: Quality Control, </li><li>Evaluation: Video Evaluation, </li><li>ImageProcess: Image Processing, </li><li>AddBlindWatermark: Add Basic Copyright Digital Watermark, </li><li>AddNagraWatermark: Add NAGRA Digital Watermark, </li><li>ExtractBlindWatermark: Extract Basic Copyright Digital Watermark, </li><li>AIGCVideo: AIGC Video Generation, </li><li>AIGCImage: AIGC Image Generation.</li>
     */
    public $Types;

    /**
     * @var array <p>Media processing region. Default value: ap-guangzhou. Valid values: </p><li>ap-guangzhou: Guangzhou, </li><li>ap-hongkong: Hong Kong (China), </li><li>ap-taipei: Taiwan (China), </li><li>ap-singapore: Singapore, </li><li>ap-mumbai: India, </li><li>ap-jakarta: Jakarta, </li><li>ap-seoul: Seoul, </li><li>ap-bangkok: Thailand, </li><li>ap-tokyo: Japan, </li><li>na-siliconvalley: Silicon Valley (USA), </li><li>na-ashburn: Virginia, </li><li>na-toronto: Toronto, </li><li>sa-saopaulo: Sao Paulo, </li><li>eu-frankfurt: Frankfurt, </li><li>eu-moscow: Russia, </li><li>aws: AWS.</li>
     */
    public $ProcessRegions;

    /**
     * @param string $StartTime <p>Start date. Use ISO date format.</p>
     * @param string $EndTime <p>End date, which must be greater than or equal to the start date. Use the <a href="https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52">ISO date format</a>.</p><p>Parameter format: 2019-07-16T06:21:28Z.</p>
     * @param array $Types <p>Media processing task type to query. Default value: Transcode. Valid values: </p><li>Transcode: Transcoding, </li><li>Enhance: Enhancement, </li><li>AIAnalysis: AI Analysis, </li><li>AIRecognition: AI Recognition, </li><li>AIReview: AI Review, </li><li>Snapshot: Snapshot, </li><li>AnimatedGraphics: Animated Graphics, </li><li>AiQualityControl: Quality Control, </li><li>Evaluation: Video Evaluation, </li><li>ImageProcess: Image Processing, </li><li>AddBlindWatermark: Add Basic Copyright Digital Watermark, </li><li>AddNagraWatermark: Add NAGRA Digital Watermark, </li><li>ExtractBlindWatermark: Extract Basic Copyright Digital Watermark, </li><li>AIGCVideo: AIGC Video Generation, </li><li>AIGCImage: AIGC Image Generation.</li>
     * @param array $ProcessRegions <p>Media processing region. Default value: ap-guangzhou. Valid values: </p><li>ap-guangzhou: Guangzhou, </li><li>ap-hongkong: Hong Kong (China), </li><li>ap-taipei: Taiwan (China), </li><li>ap-singapore: Singapore, </li><li>ap-mumbai: India, </li><li>ap-jakarta: Jakarta, </li><li>ap-seoul: Seoul, </li><li>ap-bangkok: Thailand, </li><li>ap-tokyo: Japan, </li><li>na-siliconvalley: Silicon Valley (USA), </li><li>na-ashburn: Virginia, </li><li>na-toronto: Toronto, </li><li>sa-saopaulo: Sao Paulo, </li><li>eu-frankfurt: Frankfurt, </li><li>eu-moscow: Russia, </li><li>aws: AWS.</li>
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
