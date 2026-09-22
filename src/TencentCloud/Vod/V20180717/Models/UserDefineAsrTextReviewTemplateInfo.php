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
 * Control parameters of the user-defined voice moderation task
 *
 * @method string getSwitch() Obtain User-defined speech audit task switch. Available values:
<li>ON: enable custom voice moderation task;</li>
<li>OFF: disables the custom voice moderation task.</li>
 * @method void setSwitch(string $Switch) Set User-defined speech audit task switch. Available values:
<li>ON: enable custom voice moderation task;</li>
<li>OFF: disables the custom voice moderation task.</li>
 * @method array getLabelSet() Obtain User-customized voice filter tags. The auditing results including the selected tags are returned. If the filter tag is empty, all auditing results will be returned. To use the tag filtering feature, add the corresponding tag when adding custom voice keyword material.
The number of tags can be up to 10, and each tag can contain up to 16 characters.
 * @method void setLabelSet(array $LabelSet) Set User-customized voice filter tags. The auditing results including the selected tags are returned. If the filter tag is empty, all auditing results will be returned. To use the tag filtering feature, add the corresponding tag when adding custom voice keyword material.
The number of tags can be up to 10, and each tag can contain up to 16 characters.
 * @method integer getBlockConfidence() Obtain Threshold score for suspected violations. If the intelligent review score reaches or exceeds this value, the content is deemed as suspected violation. Default value: 100. Value range: 0–100.
 * @method void setBlockConfidence(integer $BlockConfidence) Set Threshold score for suspected violations. If the intelligent review score reaches or exceeds this value, the content is deemed as suspected violation. Default value: 100. Value range: 0–100.
 * @method integer getReviewConfidence() Obtain Threshold score for determining whether manual review is required for violations. When the review score reaches or exceeds this threshold, manual review is considered necessary. If not specified, the default is 75 points. Value range: 0–100.
 * @method void setReviewConfidence(integer $ReviewConfidence) Set Threshold score for determining whether manual review is required for violations. When the review score reaches or exceeds this threshold, manual review is considered necessary. If not specified, the default is 75 points. Value range: 0–100.
 */
class UserDefineAsrTextReviewTemplateInfo extends AbstractModel
{
    /**
     * @var string User-defined speech audit task switch. Available values:
<li>ON: enable custom voice moderation task;</li>
<li>OFF: disables the custom voice moderation task.</li>
     */
    public $Switch;

    /**
     * @var array User-customized voice filter tags. The auditing results including the selected tags are returned. If the filter tag is empty, all auditing results will be returned. To use the tag filtering feature, add the corresponding tag when adding custom voice keyword material.
The number of tags can be up to 10, and each tag can contain up to 16 characters.
     */
    public $LabelSet;

    /**
     * @var integer Threshold score for suspected violations. If the intelligent review score reaches or exceeds this value, the content is deemed as suspected violation. Default value: 100. Value range: 0–100.
     */
    public $BlockConfidence;

    /**
     * @var integer Threshold score for determining whether manual review is required for violations. When the review score reaches or exceeds this threshold, manual review is considered necessary. If not specified, the default is 75 points. Value range: 0–100.
     */
    public $ReviewConfidence;

    /**
     * @param string $Switch User-defined speech audit task switch. Available values:
<li>ON: enable custom voice moderation task;</li>
<li>OFF: disables the custom voice moderation task.</li>
     * @param array $LabelSet User-customized voice filter tags. The auditing results including the selected tags are returned. If the filter tag is empty, all auditing results will be returned. To use the tag filtering feature, add the corresponding tag when adding custom voice keyword material.
The number of tags can be up to 10, and each tag can contain up to 16 characters.
     * @param integer $BlockConfidence Threshold score for suspected violations. If the intelligent review score reaches or exceeds this value, the content is deemed as suspected violation. Default value: 100. Value range: 0–100.
     * @param integer $ReviewConfidence Threshold score for determining whether manual review is required for violations. When the review score reaches or exceeds this threshold, manual review is considered necessary. If not specified, the default is 75 points. Value range: 0–100.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("LabelSet",$param) and $param["LabelSet"] !== null) {
            $this->LabelSet = $param["LabelSet"];
        }

        if (array_key_exists("BlockConfidence",$param) and $param["BlockConfidence"] !== null) {
            $this->BlockConfidence = $param["BlockConfidence"];
        }

        if (array_key_exists("ReviewConfidence",$param) and $param["ReviewConfidence"] !== null) {
            $this->ReviewConfidence = $param["ReviewConfidence"];
        }
    }
}
