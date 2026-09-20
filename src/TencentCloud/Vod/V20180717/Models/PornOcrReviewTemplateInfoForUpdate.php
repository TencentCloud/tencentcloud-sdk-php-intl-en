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
 * Task control parameter for text recognition involving offensive content.
 *
 * @method string getSwitch() Obtain Task switch for text recognition involving offensive content. Available values:
<li>ON: enable the task involving text recognition of offensive content;</li>
<li>OFF: Disable the task of text recognition involving offensive content.</li>
 * @method void setSwitch(string $Switch) Set Task switch for text recognition involving offensive content. Available values:
<li>ON: enable the task involving text recognition of offensive content;</li>
<li>OFF: Disable the task of text recognition involving offensive content.</li>
 * @method integer getBlockConfidence() Obtain Threshold score for determining suspected violations. When the intelligent review score reaches this threshold, the content is considered a suspected violation. Value range: 0–100.
 * @method void setBlockConfidence(integer $BlockConfidence) Set Threshold score for determining suspected violations. When the intelligent review score reaches this threshold, the content is considered a suspected violation. Value range: 0–100.
 * @method integer getReviewConfidence() Obtain Threshold score for determining whether manual review is required for violations. When the intelligent review score reaches or exceeds this threshold, manual review is considered necessary. Value range: 0–100.
 * @method void setReviewConfidence(integer $ReviewConfidence) Set Threshold score for determining whether manual review is required for violations. When the intelligent review score reaches or exceeds this threshold, manual review is considered necessary. Value range: 0–100.
 */
class PornOcrReviewTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string Task switch for text recognition involving offensive content. Available values:
<li>ON: enable the task involving text recognition of offensive content;</li>
<li>OFF: Disable the task of text recognition involving offensive content.</li>
     */
    public $Switch;

    /**
     * @var integer Threshold score for determining suspected violations. When the intelligent review score reaches this threshold, the content is considered a suspected violation. Value range: 0–100.
     */
    public $BlockConfidence;

    /**
     * @var integer Threshold score for determining whether manual review is required for violations. When the intelligent review score reaches or exceeds this threshold, manual review is considered necessary. Value range: 0–100.
     */
    public $ReviewConfidence;

    /**
     * @param string $Switch Task switch for text recognition involving offensive content. Available values:
<li>ON: enable the task involving text recognition of offensive content;</li>
<li>OFF: Disable the task of text recognition involving offensive content.</li>
     * @param integer $BlockConfidence Threshold score for determining suspected violations. When the intelligent review score reaches this threshold, the content is considered a suspected violation. Value range: 0–100.
     * @param integer $ReviewConfidence Threshold score for determining whether manual review is required for violations. When the intelligent review score reaches or exceeds this threshold, manual review is considered necessary. Value range: 0–100.
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
