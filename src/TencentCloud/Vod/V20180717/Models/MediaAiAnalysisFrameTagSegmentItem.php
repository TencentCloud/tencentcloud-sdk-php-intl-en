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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of frame-specific tag segments
 *
 * @method float getStartTimeOffset() Obtain Start time offset of frame-specific tag.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of frame-specific tag.
 * @method float getEndTimeOffset() Obtain End time offset of frame-specific tag.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of frame-specific tag.
 * @method array getTagSet() Obtain List of tags in time period.
 * @method void setTagSet(array $TagSet) Set List of tags in time period.
 */
class MediaAiAnalysisFrameTagSegmentItem extends AbstractModel
{
    /**
     * @var float Start time offset of frame-specific tag.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of frame-specific tag.
     */
    public $EndTimeOffset;

    /**
     * @var array List of tags in time period.
     */
    public $TagSet;

    /**
     * @param float $StartTimeOffset Start time offset of frame-specific tag.
     * @param float $EndTimeOffset End time offset of frame-specific tag.
     * @param array $TagSet List of tags in time period.
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
        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new MediaAiAnalysisFrameTagItem();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
