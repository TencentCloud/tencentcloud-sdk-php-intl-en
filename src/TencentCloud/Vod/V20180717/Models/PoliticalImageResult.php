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
 * The moderation result for politically sensitive content in an image.
 *
 * @method float getConfidence() Obtain The confidence score for the moderation result. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set The confidence score for the moderation result. Value range: 0-100.
 * @method string getSuggestion() Obtain The suggestion for handling the detected politically sensitive content. Valid values:
<li>pass/li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set The suggestion for handling the detected politically sensitive content. Valid values:
<li>pass/li>
<li>review</li>
<li>block</li>
 * @method string getName() Obtain The name of the politically sensitive content or banned icon detected.
 * @method void setName(string $Name) Set The name of the politically sensitive content or banned icon detected.
 * @method array getAreaCoordSet() Obtain The coordinates (pixel) of the top-left and bottom-right corners of the frame where the politically sensitive content or banned icon appears. Format: [x1, y1, x2, y2].
 * @method void setAreaCoordSet(array $AreaCoordSet) Set The coordinates (pixel) of the top-left and bottom-right corners of the frame where the politically sensitive content or banned icon appears. Format: [x1, y1, x2, y2].
 */
class PoliticalImageResult extends AbstractModel
{
    /**
     * @var float The confidence score for the moderation result. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @var string The suggestion for handling the detected politically sensitive content. Valid values:
<li>pass/li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var string The name of the politically sensitive content or banned icon detected.
     */
    public $Name;

    /**
     * @var array The coordinates (pixel) of the top-left and bottom-right corners of the frame where the politically sensitive content or banned icon appears. Format: [x1, y1, x2, y2].
     */
    public $AreaCoordSet;

    /**
     * @param float $Confidence The confidence score for the moderation result. Value range: 0-100.
     * @param string $Suggestion The suggestion for handling the detected politically sensitive content. Valid values:
<li>pass/li>
<li>review</li>
<li>block</li>
     * @param string $Name The name of the politically sensitive content or banned icon detected.
     * @param array $AreaCoordSet The coordinates (pixel) of the top-left and bottom-right corners of the frame where the politically sensitive content or banned icon appears. Format: [x1, y1, x2, y2].
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }
    }
}
