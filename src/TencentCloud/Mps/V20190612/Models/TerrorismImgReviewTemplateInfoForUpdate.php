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
 * The parameters for detecting sensitive information in images.
 *
 * @method string getSwitch() Obtain Whether to detect sensitive information in images. Valid values:
<li>ON</li>
<li>OFF</li>
 * @method void setSwitch(string $Switch) Set Whether to detect sensitive information in images. Valid values:
<li>ON</li>
<li>OFF</li>
 * @method array getLabelSet() Obtain Sensitive content filter tags. The auditing results including the selected tags are returned. If the filter tag is empty, all auditing results will be returned. Valid values:
<li>guns: weapons and guns;</li>
<li>crowd: crowd gathering;</li>
<li>bloody: bloodiness;</li>
<li>police: police force;</li>
<li>banners: sensitive flags;</li>
<li>militant: militants;</li>
<li>explosion: explosions and fires;</li>
<li>terrorists: sensitive persons.</li>
 * @method void setLabelSet(array $LabelSet) Set Sensitive content filter tags. The auditing results including the selected tags are returned. If the filter tag is empty, all auditing results will be returned. Valid values:
<li>guns: weapons and guns;</li>
<li>crowd: crowd gathering;</li>
<li>bloody: bloodiness;</li>
<li>police: police force;</li>
<li>banners: sensitive flags;</li>
<li>militant: militants;</li>
<li>explosion: explosions and fires;</li>
<li>terrorists: sensitive persons.</li>
 * @method integer getBlockConfidence() Obtain Threshold score for violation. If this score is reached or exceeded during intelligent audit, it will be deemed that a suspected violation has occurred. Value range: 0-100.
 * @method void setBlockConfidence(integer $BlockConfidence) Set Threshold score for violation. If this score is reached or exceeded during intelligent audit, it will be deemed that a suspected violation has occurred. Value range: 0-100.
 * @method integer getReviewConfidence() Obtain Threshold score for human audit. If this score is reached or exceeded during intelligent audit, human audit will be considered necessary. Value range: 0-100.
 * @method void setReviewConfidence(integer $ReviewConfidence) Set Threshold score for human audit. If this score is reached or exceeded during intelligent audit, human audit will be considered necessary. Value range: 0-100.
 */
class TerrorismImgReviewTemplateInfoForUpdate extends AbstractModel
{
    /**
     * @var string Whether to detect sensitive information in images. Valid values:
<li>ON</li>
<li>OFF</li>
     */
    public $Switch;

    /**
     * @var array Sensitive content filter tags. The auditing results including the selected tags are returned. If the filter tag is empty, all auditing results will be returned. Valid values:
<li>guns: weapons and guns;</li>
<li>crowd: crowd gathering;</li>
<li>bloody: bloodiness;</li>
<li>police: police force;</li>
<li>banners: sensitive flags;</li>
<li>militant: militants;</li>
<li>explosion: explosions and fires;</li>
<li>terrorists: sensitive persons.</li>
     */
    public $LabelSet;

    /**
     * @var integer Threshold score for violation. If this score is reached or exceeded during intelligent audit, it will be deemed that a suspected violation has occurred. Value range: 0-100.
     */
    public $BlockConfidence;

    /**
     * @var integer Threshold score for human audit. If this score is reached or exceeded during intelligent audit, human audit will be considered necessary. Value range: 0-100.
     */
    public $ReviewConfidence;

    /**
     * @param string $Switch Whether to detect sensitive information in images. Valid values:
<li>ON</li>
<li>OFF</li>
     * @param array $LabelSet Sensitive content filter tags. The auditing results including the selected tags are returned. If the filter tag is empty, all auditing results will be returned. Valid values:
<li>guns: weapons and guns;</li>
<li>crowd: crowd gathering;</li>
<li>bloody: bloodiness;</li>
<li>police: police force;</li>
<li>banners: sensitive flags;</li>
<li>militant: militants;</li>
<li>explosion: explosions and fires;</li>
<li>terrorists: sensitive persons.</li>
     * @param integer $BlockConfidence Threshold score for violation. If this score is reached or exceeded during intelligent audit, it will be deemed that a suspected violation has occurred. Value range: 0-100.
     * @param integer $ReviewConfidence Threshold score for human audit. If this score is reached or exceeded during intelligent audit, human audit will be considered necessary. Value range: 0-100.
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
