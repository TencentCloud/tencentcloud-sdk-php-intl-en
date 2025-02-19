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
 * Segment information.
 *
 * @method string getSummary() Obtain Segment summary.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSummary(string $Summary) Set Segment summary.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTitle() Obtain Segment title.
 * @method void setTitle(string $Title) Set Segment title.
 * @method array getKeywords() Obtain Segment keywords.
 * @method void setKeywords(array $Keywords) Set Segment keywords.
 * @method float getStartTimeOffset() Obtain Segmentation start time point, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Segmentation start time point, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getEndTimeOffset() Obtain Segmentation end time point, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set Segmentation end time point, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AiParagraphInfo extends AbstractModel
{
    /**
     * @var string Segment summary.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Summary;

    /**
     * @var string Segment title.
     */
    public $Title;

    /**
     * @var array Segment keywords.
     */
    public $Keywords;

    /**
     * @var float Segmentation start time point, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTimeOffset;

    /**
     * @var float Segmentation end time point, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTimeOffset;

    /**
     * @param string $Summary Segment summary.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Title Segment title.
     * @param array $Keywords Segment keywords.
     * @param float $StartTimeOffset Segmentation start time point, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $EndTimeOffset Segmentation end time point, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
