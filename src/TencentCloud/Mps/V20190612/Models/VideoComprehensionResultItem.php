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
 * Video storyboard recognition result.
 *
 * @method float getStartTime() Obtain Start time of the storyboard segment, in seconds.

 * @method void setStartTime(float $StartTime) Set Start time of the storyboard segment, in seconds.

 * @method float getEndTime() Obtain Segment end time (unit: second)
 * @method void setEndTime(float $EndTime) Set Segment end time (unit: second)
 * @method string getTitle() Obtain Segment title.
 * @method void setTitle(string $Title) Set Segment title.
 * @method string getDescription() Obtain Description of the storyboard segment information
 * @method void setDescription(string $Description) Set Description of the storyboard segment information
 * @method array getKeywords() Obtain Segment keywords.
 * @method void setKeywords(array $Keywords) Set Segment keywords.
 */
class VideoComprehensionResultItem extends AbstractModel
{
    /**
     * @var float Start time of the storyboard segment, in seconds.

     */
    public $StartTime;

    /**
     * @var float Segment end time (unit: second)
     */
    public $EndTime;

    /**
     * @var string Segment title.
     */
    public $Title;

    /**
     * @var string Description of the storyboard segment information
     */
    public $Description;

    /**
     * @var array Segment keywords.
     */
    public $Keywords;

    /**
     * @param float $StartTime Start time of the storyboard segment, in seconds.

     * @param float $EndTime Segment end time (unit: second)
     * @param string $Title Segment title.
     * @param string $Description Description of the storyboard segment information
     * @param array $Keywords Segment keywords.
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
