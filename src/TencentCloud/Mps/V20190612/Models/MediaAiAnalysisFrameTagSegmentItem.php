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
 * Frame tagging segments
 *
 * @method float getStartTimeOffset() Obtain Offset time starting from frame tagging.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Offset time starting from frame tagging.
 * @method float getEndTimeOffset() Obtain Offset time for frame tagging completion.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set Offset time for frame tagging completion.
 * @method array getTagSet() Obtain Tag list within the time segment.
 * @method void setTagSet(array $TagSet) Set Tag list within the time segment.
 */
class MediaAiAnalysisFrameTagSegmentItem extends AbstractModel
{
    /**
     * @var float Offset time starting from frame tagging.
     */
    public $StartTimeOffset;

    /**
     * @var float Offset time for frame tagging completion.
     */
    public $EndTimeOffset;

    /**
     * @var array Tag list within the time segment.
     */
    public $TagSet;

    /**
     * @param float $StartTimeOffset Offset time starting from frame tagging.
     * @param float $EndTimeOffset Offset time for frame tagging completion.
     * @param array $TagSet Tag list within the time segment.
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
