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
 * Video shot recognition result
 *
 * @method float getStartTime() Obtain Segment start time (unit: seconds)

 * @method void setStartTime(float $StartTime) Set Segment start time (unit: seconds)

 * @method float getEndTime() Obtain Segment end time (unit: seconds)
 * @method void setEndTime(float $EndTime) Set Segment end time (unit: seconds)
 * @method string getTitle() Obtain Storyboard clip title
 * @method void setTitle(string $Title) Set Storyboard clip title
 * @method string getDescription() Obtain Segment information description
 * @method void setDescription(string $Description) Set Segment information description
 * @method array getKeywords() Obtain Storyboard clip keywords
 * @method void setKeywords(array $Keywords) Set Storyboard clip keywords
 */
class VideoComprehensionResultItem extends AbstractModel
{
    /**
     * @var float Segment start time (unit: seconds)

     */
    public $StartTime;

    /**
     * @var float Segment end time (unit: seconds)
     */
    public $EndTime;

    /**
     * @var string Storyboard clip title
     */
    public $Title;

    /**
     * @var string Segment information description
     */
    public $Description;

    /**
     * @var array Storyboard clip keywords
     */
    public $Keywords;

    /**
     * @param float $StartTime Segment start time (unit: seconds)

     * @param float $EndTime Segment end time (unit: seconds)
     * @param string $Title Storyboard clip title
     * @param string $Description Segment information description
     * @param array $Keywords Storyboard clip keywords
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }
    }
}
