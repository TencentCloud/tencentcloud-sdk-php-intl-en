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
 * Task result type of image moderation involving inappropriate information
 *
 * @method float getConfidence() Obtain Score for authentication involving inappropriate information. The score ranges from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Score for authentication involving inappropriate information. The score ranges from 0 to 100.
 * @method string getSuggestion() Obtain Result suggestions for authentication involving inappropriate information. Value range:
<li>pass;</li>
<li>review;</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Result suggestions for authentication involving inappropriate information. Value range:
<li>pass;</li>
<li>review;</li>
<li>block.</li>
 * @method string getName() Obtain Involves inappropriate information and violative icon names.
 * @method void setName(string $Name) Set Involves inappropriate information and violative icon names.
 * @method array getAreaCoordSet() Obtain Area coordinates (pixel level) where inappropriate information or violation icons appear, [x1, y1, x2, y2], i.e. coordinates of the top-left corner and bottom-right corner.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Area coordinates (pixel level) where inappropriate information or violation icons appear, [x1, y1, x2, y2], i.e. coordinates of the top-left corner and bottom-right corner.
 */
class PoliticalImageResult extends AbstractModel
{
    /**
     * @var float Score for authentication involving inappropriate information. The score ranges from 0 to 100.
     */
    public $Confidence;

    /**
     * @var string Result suggestions for authentication involving inappropriate information. Value range:
<li>pass;</li>
<li>review;</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var string Involves inappropriate information and violative icon names.
     */
    public $Name;

    /**
     * @var array Area coordinates (pixel level) where inappropriate information or violation icons appear, [x1, y1, x2, y2], i.e. coordinates of the top-left corner and bottom-right corner.
     */
    public $AreaCoordSet;

    /**
     * @param float $Confidence Score for authentication involving inappropriate information. The score ranges from 0 to 100.
     * @param string $Suggestion Result suggestions for authentication involving inappropriate information. Value range:
<li>pass;</li>
<li>review;</li>
<li>block.</li>
     * @param string $Name Involves inappropriate information and violative icon names.
     * @param array $AreaCoordSet Area coordinates (pixel level) where inappropriate information or violation icons appear, [x1, y1, x2, y2], i.e. coordinates of the top-left corner and bottom-right corner.
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
