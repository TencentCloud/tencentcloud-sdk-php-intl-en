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
 * Image recognition involves task control parameters for inappropriate information.
 *
 * @method string getSwitch() Obtain <p>Task switch for image recognition involving inappropriate information. Available values:</p><li>ON: Enable the task of image recognition involving inappropriate information;</li><li>OFF: Disable the task of image recognition involving inappropriate information.</li>
 * @method void setSwitch(string $Switch) Set <p>Task switch for image recognition involving inappropriate information. Available values:</p><li>ON: Enable the task of image recognition involving inappropriate information;</li><li>OFF: Disable the task of image recognition involving inappropriate information.</li>
 * @method array getLabelSet() Obtain <p>Filter tags for inappropriate information detected in image recognition. The auditing results including the selected tags are returned. If the filter tag is empty, all auditing results will be returned. Valid values:</p><li>violation_photo: violation icon;</li><li>politician: relevant people;</li><li>entertainment: people in the entertainment industry;</li><li>sport: sports celebrity;</li><li>entrepreneur: commercial figure;</li><li>scholar: educational scholars;</li><li>celebrity: celebrity;</li><li>military: relevant people.</li>
 * @method void setLabelSet(array $LabelSet) Set <p>Filter tags for inappropriate information detected in image recognition. The auditing results including the selected tags are returned. If the filter tag is empty, all auditing results will be returned. Valid values:</p><li>violation_photo: violation icon;</li><li>politician: relevant people;</li><li>entertainment: people in the entertainment industry;</li><li>sport: sports celebrity;</li><li>entrepreneur: commercial figure;</li><li>scholar: educational scholars;</li><li>celebrity: celebrity;</li><li>military: relevant people.</li>
 * @method integer getBlockConfidence() Obtain <p>Threshold score for determining suspected violations. When the review score reaches or exceeds this threshold, it is considered a suspected violation. Value range: 0–100.</p>
 * @method void setBlockConfidence(integer $BlockConfidence) Set <p>Threshold score for determining suspected violations. When the review score reaches or exceeds this threshold, it is considered a suspected violation. Value range: 0–100.</p>
 * @method integer getReviewConfidence() Obtain <p>Threshold score for determining whether manual review is required for violations. When the review score reaches or exceeds this threshold, manual review is deemed necessary. Value range: 0–100.</p>
 * @method void setReviewConfidence(integer $ReviewConfidence) Set <p>Threshold score for determining whether manual review is required for violations. When the review score reaches or exceeds this threshold, manual review is deemed necessary. Value range: 0–100.</p>
 */
class PoliticalImgReviewTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string <p>Task switch for image recognition involving inappropriate information. Available values:</p><li>ON: Enable the task of image recognition involving inappropriate information;</li><li>OFF: Disable the task of image recognition involving inappropriate information.</li>
     */
    public $Switch;

    /**
     * @var array <p>Filter tags for inappropriate information detected in image recognition. The auditing results including the selected tags are returned. If the filter tag is empty, all auditing results will be returned. Valid values:</p><li>violation_photo: violation icon;</li><li>politician: relevant people;</li><li>entertainment: people in the entertainment industry;</li><li>sport: sports celebrity;</li><li>entrepreneur: commercial figure;</li><li>scholar: educational scholars;</li><li>celebrity: celebrity;</li><li>military: relevant people.</li>
     */
    public $LabelSet;

    /**
     * @var integer <p>Threshold score for determining suspected violations. When the review score reaches or exceeds this threshold, it is considered a suspected violation. Value range: 0–100.</p>
     */
    public $BlockConfidence;

    /**
     * @var integer <p>Threshold score for determining whether manual review is required for violations. When the review score reaches or exceeds this threshold, manual review is deemed necessary. Value range: 0–100.</p>
     */
    public $ReviewConfidence;

    /**
     * @param string $Switch <p>Task switch for image recognition involving inappropriate information. Available values:</p><li>ON: Enable the task of image recognition involving inappropriate information;</li><li>OFF: Disable the task of image recognition involving inappropriate information.</li>
     * @param array $LabelSet <p>Filter tags for inappropriate information detected in image recognition. The auditing results including the selected tags are returned. If the filter tag is empty, all auditing results will be returned. Valid values:</p><li>violation_photo: violation icon;</li><li>politician: relevant people;</li><li>entertainment: people in the entertainment industry;</li><li>sport: sports celebrity;</li><li>entrepreneur: commercial figure;</li><li>scholar: educational scholars;</li><li>celebrity: celebrity;</li><li>military: relevant people.</li>
     * @param integer $BlockConfidence <p>Threshold score for determining suspected violations. When the review score reaches or exceeds this threshold, it is considered a suspected violation. Value range: 0–100.</p>
     * @param integer $ReviewConfidence <p>Threshold score for determining whether manual review is required for violations. When the review score reaches or exceeds this threshold, manual review is deemed necessary. Value range: 0–100.</p>
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
