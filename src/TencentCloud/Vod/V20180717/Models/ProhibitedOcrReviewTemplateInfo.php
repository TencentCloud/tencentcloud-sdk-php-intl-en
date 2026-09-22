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
 * Text prohibition task control parameter
 *
 * @method string getSwitch() Obtain Text prohibition task switch. Available values:
<li>ON: enable the text prohibition task;</li>
<li>OFF: disables the text prohibition task.</li>
 * @method void setSwitch(string $Switch) Set Text prohibition task switch. Available values:
<li>ON: enable the text prohibition task;</li>
<li>OFF: disables the text prohibition task.</li>
 * @method integer getBlockConfidence() Obtain Threshold score for determining suspected violations. When the review score reaches or exceeds this threshold, it is considered a suspected violation. If not specified, it defaults to 100 points. Value range: 0–100.
 * @method void setBlockConfidence(integer $BlockConfidence) Set Threshold score for determining suspected violations. When the review score reaches or exceeds this threshold, it is considered a suspected violation. If not specified, it defaults to 100 points. Value range: 0–100.
 * @method integer getReviewConfidence() Obtain Threshold score for determining whether manual review is required for violations. When the review score reaches or exceeds this threshold, manual review is deemed necessary. If not specified, it defaults to 75 points. Value range: 0–100.
 * @method void setReviewConfidence(integer $ReviewConfidence) Set Threshold score for determining whether manual review is required for violations. When the review score reaches or exceeds this threshold, manual review is deemed necessary. If not specified, it defaults to 75 points. Value range: 0–100.
 */
class ProhibitedOcrReviewTemplateInfo extends AbstractModel
{
    /**
     * @var string Text prohibition task switch. Available values:
<li>ON: enable the text prohibition task;</li>
<li>OFF: disables the text prohibition task.</li>
     */
    public $Switch;

    /**
     * @var integer Threshold score for determining suspected violations. When the review score reaches or exceeds this threshold, it is considered a suspected violation. If not specified, it defaults to 100 points. Value range: 0–100.
     */
    public $BlockConfidence;

    /**
     * @var integer Threshold score for determining whether manual review is required for violations. When the review score reaches or exceeds this threshold, manual review is deemed necessary. If not specified, it defaults to 75 points. Value range: 0–100.
     */
    public $ReviewConfidence;

    /**
     * @param string $Switch Text prohibition task switch. Available values:
<li>ON: enable the text prohibition task;</li>
<li>OFF: disables the text prohibition task.</li>
     * @param integer $BlockConfidence Threshold score for determining suspected violations. When the review score reaches or exceeds this threshold, it is considered a suspected violation. If not specified, it defaults to 100 points. Value range: 0–100.
     * @param integer $ReviewConfidence Threshold score for determining whether manual review is required for violations. When the review score reaches or exceeds this threshold, manual review is deemed necessary. If not specified, it defaults to 75 points. Value range: 0–100.
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

        if (array_key_exists("BlockConfidence",$param) and $param["BlockConfidence"] !== null) {
            $this->BlockConfidence = $param["BlockConfidence"];
        }

        if (array_key_exists("ReviewConfidence",$param) and $param["ReviewConfidence"] !== null) {
            $this->ReviewConfidence = $param["ReviewConfidence"];
        }
    }
}
