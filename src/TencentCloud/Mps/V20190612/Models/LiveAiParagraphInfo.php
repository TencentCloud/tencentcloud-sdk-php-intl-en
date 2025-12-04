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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Segment information.
 *
 * @method string getSummary() Obtain Segment summary.
 * @method void setSummary(string $Summary) Set Segment summary.
 * @method string getTitle() Obtain Segment title.
 * @method void setTitle(string $Title) Set Segment title.
 * @method array getKeywords() Obtain Segment keyword.
 * @method void setKeywords(array $Keywords) Set Segment keyword.
 * @method float getStartTimeOffset() Obtain Starting time point of the segment, in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Starting time point of the segment, in seconds.
 * @method float getEndTimeOffset() Obtain End time point of the segment, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time point of the segment, in seconds.
 * @method string getBeginTime() Obtain Starting time point of the live streaming segment in ISO date and time format.	
 * @method void setBeginTime(string $BeginTime) Set Starting time point of the live streaming segment in ISO date and time format.	
 * @method string getEndTime() Obtain End time point of the live streaming segment in ISO date and time format.	
 * @method void setEndTime(string $EndTime) Set End time point of the live streaming segment in ISO date and time format.	
 */
class LiveAiParagraphInfo extends AbstractModel
{
    /**
     * @var string Segment summary.
     */
    public $Summary;

    /**
     * @var string Segment title.
     */
    public $Title;

    /**
     * @var array Segment keyword.
     */
    public $Keywords;

    /**
     * @var float Starting time point of the segment, in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time point of the segment, in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var string Starting time point of the live streaming segment in ISO date and time format.	
     */
    public $BeginTime;

    /**
     * @var string End time point of the live streaming segment in ISO date and time format.	
     */
    public $EndTime;

    /**
     * @param string $Summary Segment summary.
     * @param string $Title Segment title.
     * @param array $Keywords Segment keyword.
     * @param float $StartTimeOffset Starting time point of the segment, in seconds.
     * @param float $EndTimeOffset End time point of the segment, in seconds.
     * @param string $BeginTime Starting time point of the live streaming segment in ISO date and time format.	
     * @param string $EndTime End time point of the live streaming segment in ISO date and time format.	
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

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
