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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Control parameter of a politically sensitive information detection in image task
 *
 * @method string getSwitch() Obtain Switch of a politically sensitive information detection in image task. Valid values:
<li>ON: Enables a politically sensitive information detection in image task;</li>
<li>OFF: Disables a politically sensitive information detection in image task.</li>
 * @method void setSwitch(string $Switch) Set Switch of a politically sensitive information detection in image task. Valid values:
<li>ON: Enables a politically sensitive information detection in image task;</li>
<li>OFF: Disables a politically sensitive information detection in image task.</li>
 * @method array getLabelSet() Obtain Filter tags for politically sensitive information detection of video images. If an audit result contains the selected tag, it will be returned; if the filter tag is empty, all audit results will be returned. Valid values:
<li>violation_photo: violating photo;</li>
<li>politician: political figure;</li>
<li>entertainment: entertainment celebrity;</li>
<li>sport: sports figure;</li>
<li>entrepreneur: business figure;</li>
<li>scholar: educator;</li>
<li>celebrity: well-known figure;</li>
<li>military: military figure.</li>
 * @method void setLabelSet(array $LabelSet) Set Filter tags for politically sensitive information detection of video images. If an audit result contains the selected tag, it will be returned; if the filter tag is empty, all audit results will be returned. Valid values:
<li>violation_photo: violating photo;</li>
<li>politician: political figure;</li>
<li>entertainment: entertainment celebrity;</li>
<li>sport: sports figure;</li>
<li>entrepreneur: business figure;</li>
<li>scholar: educator;</li>
<li>celebrity: well-known figure;</li>
<li>military: military figure.</li>
 * @method integer getBlockConfidence() Obtain Threshold score for violation. If this score is reached or exceeded during intelligent audit, it will be deemed that a suspected violation has occurred. If this parameter is left empty, 97 will be used by default. Value range: 0-100.
 * @method void setBlockConfidence(integer $BlockConfidence) Set Threshold score for violation. If this score is reached or exceeded during intelligent audit, it will be deemed that a suspected violation has occurred. If this parameter is left empty, 97 will be used by default. Value range: 0-100.
 * @method integer getReviewConfidence() Obtain Threshold score for human audit. If this score is reached or exceeded during intelligent audit, human audit will be considered necessary. If this parameter is left empty, 95 will be used by default. Value range: 0-100.
 * @method void setReviewConfidence(integer $ReviewConfidence) Set Threshold score for human audit. If this score is reached or exceeded during intelligent audit, human audit will be considered necessary. If this parameter is left empty, 95 will be used by default. Value range: 0-100.
 */
class PoliticalImgReviewTemplateInfo extends AbstractModel
{
    /**
     * @var string Switch of a politically sensitive information detection in image task. Valid values:
<li>ON: Enables a politically sensitive information detection in image task;</li>
<li>OFF: Disables a politically sensitive information detection in image task.</li>
     */
    public $Switch;

    /**
     * @var array Filter tags for politically sensitive information detection of video images. If an audit result contains the selected tag, it will be returned; if the filter tag is empty, all audit results will be returned. Valid values:
<li>violation_photo: violating photo;</li>
<li>politician: political figure;</li>
<li>entertainment: entertainment celebrity;</li>
<li>sport: sports figure;</li>
<li>entrepreneur: business figure;</li>
<li>scholar: educator;</li>
<li>celebrity: well-known figure;</li>
<li>military: military figure.</li>
     */
    public $LabelSet;

    /**
     * @var integer Threshold score for violation. If this score is reached or exceeded during intelligent audit, it will be deemed that a suspected violation has occurred. If this parameter is left empty, 97 will be used by default. Value range: 0-100.
     */
    public $BlockConfidence;

    /**
     * @var integer Threshold score for human audit. If this score is reached or exceeded during intelligent audit, human audit will be considered necessary. If this parameter is left empty, 95 will be used by default. Value range: 0-100.
     */
    public $ReviewConfidence;

    /**
     * @param string $Switch Switch of a politically sensitive information detection in image task. Valid values:
<li>ON: Enables a politically sensitive information detection in image task;</li>
<li>OFF: Disables a politically sensitive information detection in image task.</li>
     * @param array $LabelSet Filter tags for politically sensitive information detection of video images. If an audit result contains the selected tag, it will be returned; if the filter tag is empty, all audit results will be returned. Valid values:
<li>violation_photo: violating photo;</li>
<li>politician: political figure;</li>
<li>entertainment: entertainment celebrity;</li>
<li>sport: sports figure;</li>
<li>entrepreneur: business figure;</li>
<li>scholar: educator;</li>
<li>celebrity: well-known figure;</li>
<li>military: military figure.</li>
     * @param integer $BlockConfidence Threshold score for violation. If this score is reached or exceeded during intelligent audit, it will be deemed that a suspected violation has occurred. If this parameter is left empty, 97 will be used by default. Value range: 0-100.
     * @param integer $ReviewConfidence Threshold score for human audit. If this score is reached or exceeded during intelligent audit, human audit will be considered necessary. If this parameter is left empty, 95 will be used by default. Value range: 0-100.
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
