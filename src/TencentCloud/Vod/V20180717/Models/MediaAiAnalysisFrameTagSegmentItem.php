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
 * List of frame-specific tag segments
 *
 * @method float getStartTimeOffset() Obtain <p>Offset time for frame tagging start.</p><p>Unit: second</p>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set <p>Offset time for frame tagging start.</p><p>Unit: second</p>
 * @method float getEndTimeOffset() Obtain <p>End time offset of frame tagging.</p><p>Unit: seconds</p>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set <p>End time offset of frame tagging.</p><p>Unit: seconds</p>
 * @method array getTagSet() Obtain <p>Tag list in the time segment.</p>
 * @method void setTagSet(array $TagSet) Set <p>Tag list in the time segment.</p>
 */
class MediaAiAnalysisFrameTagSegmentItem extends AbstractModel
{
    /**
     * @var float <p>Offset time for frame tagging start.</p><p>Unit: second</p>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>End time offset of frame tagging.</p><p>Unit: seconds</p>
     */
    public $EndTimeOffset;

    /**
     * @var array <p>Tag list in the time segment.</p>
     */
    public $TagSet;

    /**
     * @param float $StartTimeOffset <p>Offset time for frame tagging start.</p><p>Unit: second</p>
     * @param float $EndTimeOffset <p>End time offset of frame tagging.</p><p>Unit: seconds</p>
     * @param array $TagSet <p>Tag list in the time segment.</p>
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
