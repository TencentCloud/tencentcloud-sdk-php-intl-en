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
 * Parameters for recognition of terrorism content in images
 *
 * @method string getSwitch() Obtain Whether to enable recognition of terrorism content in images. Valid values:
<li>ON</li>
<li>OFF</li>
 * @method void setSwitch(string $Switch) Set Whether to enable recognition of terrorism content in images. Valid values:
<li>ON</li>
<li>OFF</li>
 * @method array getLabelSet() Obtain Filter labels for recognition of terrorism content in images. Results containing the specified labels are returned. If no labels are specified, all results are returned. Valid values:
<li>`guns`: weapons and guns</li>
<li>`crowd`: crowd</li>
<li>`bloody`: bloody scenes</li>
<li>`police`: police force</li>
<li>`banners`: terrorism flags</li>
<li>`militant`: militants</li>
<li>`explosion`: explosions and fires</li>
<li>`terrorists`: terrorists</li>
<li>`scenario`: terrorism images</li>
 * @method void setLabelSet(array $LabelSet) Set Filter labels for recognition of terrorism content in images. Results containing the specified labels are returned. If no labels are specified, all results are returned. Valid values:
<li>`guns`: weapons and guns</li>
<li>`crowd`: crowd</li>
<li>`bloody`: bloody scenes</li>
<li>`police`: police force</li>
<li>`banners`: terrorism flags</li>
<li>`militant`: militants</li>
<li>`explosion`: explosions and fires</li>
<li>`terrorists`: terrorists</li>
<li>`scenario`: terrorism images</li>
 * @method integer getBlockConfidence() Obtain Confidence score threshold for determining that something should be blocked. If this threshold is reached, VOD will suggest that the content be blocked. If this parameter is left empty, `90` will be used by default. Value range: 0-100
 * @method void setBlockConfidence(integer $BlockConfidence) Set Confidence score threshold for determining that something should be blocked. If this threshold is reached, VOD will suggest that the content be blocked. If this parameter is left empty, `90` will be used by default. Value range: 0-100
 * @method integer getReviewConfidence() Obtain Confidence score threshold for human review. If this threshold is reached, human review is needed. If this parameter is left empty, `80` will be used by default. Value range: 0-100
 * @method void setReviewConfidence(integer $ReviewConfidence) Set Confidence score threshold for human review. If this threshold is reached, human review is needed. If this parameter is left empty, `80` will be used by default. Value range: 0-100
 */
class TerrorismImgReviewTemplateInfo extends AbstractModel
{
    /**
     * @var string Whether to enable recognition of terrorism content in images. Valid values:
<li>ON</li>
<li>OFF</li>
     */
    public $Switch;

    /**
     * @var array Filter labels for recognition of terrorism content in images. Results containing the specified labels are returned. If no labels are specified, all results are returned. Valid values:
<li>`guns`: weapons and guns</li>
<li>`crowd`: crowd</li>
<li>`bloody`: bloody scenes</li>
<li>`police`: police force</li>
<li>`banners`: terrorism flags</li>
<li>`militant`: militants</li>
<li>`explosion`: explosions and fires</li>
<li>`terrorists`: terrorists</li>
<li>`scenario`: terrorism images</li>
     */
    public $LabelSet;

    /**
     * @var integer Confidence score threshold for determining that something should be blocked. If this threshold is reached, VOD will suggest that the content be blocked. If this parameter is left empty, `90` will be used by default. Value range: 0-100
     */
    public $BlockConfidence;

    /**
     * @var integer Confidence score threshold for human review. If this threshold is reached, human review is needed. If this parameter is left empty, `80` will be used by default. Value range: 0-100
     */
    public $ReviewConfidence;

    /**
     * @param string $Switch Whether to enable recognition of terrorism content in images. Valid values:
<li>ON</li>
<li>OFF</li>
     * @param array $LabelSet Filter labels for recognition of terrorism content in images. Results containing the specified labels are returned. If no labels are specified, all results are returned. Valid values:
<li>`guns`: weapons and guns</li>
<li>`crowd`: crowd</li>
<li>`bloody`: bloody scenes</li>
<li>`police`: police force</li>
<li>`banners`: terrorism flags</li>
<li>`militant`: militants</li>
<li>`explosion`: explosions and fires</li>
<li>`terrorists`: terrorists</li>
<li>`scenario`: terrorism images</li>
     * @param integer $BlockConfidence Confidence score threshold for determining that something should be blocked. If this threshold is reached, VOD will suggest that the content be blocked. If this parameter is left empty, `90` will be used by default. Value range: 0-100
     * @param integer $ReviewConfidence Confidence score threshold for human review. If this threshold is reached, human review is needed. If this parameter is left empty, `80` will be used by default. Value range: 0-100
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
