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
 * 
 *
 * @method string getType() Obtain Result type. Valid values:
<li>SegmentRecognition: video splitting.</li>
<li>Highlight: highlight.</li>
<li>Description: summary.</li>
 * @method void setType(string $Type) Set Result type. Valid values:
<li>SegmentRecognition: video splitting.</li>
<li>Highlight: highlight.</li>
<li>Description: summary.</li>
 * @method array getSegmentResultSet() Obtain 
 * @method void setSegmentResultSet(array $SegmentResultSet) Set 
 * @method array getHighlightResultSet() Obtain Highlight result. This field is valid when Type is set to Highlight.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHighlightResultSet(array $HighlightResultSet) Set Highlight result. This field is valid when Type is set to Highlight.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LiveAiAnalysisDescriptionItem getDescriptionResult() Obtain Summary result. It is valid when Type is Description.
 * @method void setDescriptionResult(LiveAiAnalysisDescriptionItem $DescriptionResult) Set Summary result. It is valid when Type is Description.
 */
class LiveStreamAiAnalysisResultItem extends AbstractModel
{
    /**
     * @var string Result type. Valid values:
<li>SegmentRecognition: video splitting.</li>
<li>Highlight: highlight.</li>
<li>Description: summary.</li>
     */
    public $Type;

    /**
     * @var array 
     */
    public $SegmentResultSet;

    /**
     * @var array Highlight result. This field is valid when Type is set to Highlight.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HighlightResultSet;

    /**
     * @var LiveAiAnalysisDescriptionItem Summary result. It is valid when Type is Description.
     */
    public $DescriptionResult;

    /**
     * @param string $Type Result type. Valid values:
<li>SegmentRecognition: video splitting.</li>
<li>Highlight: highlight.</li>
<li>Description: summary.</li>
     * @param array $SegmentResultSet 
     * @param array $HighlightResultSet Highlight result. This field is valid when Type is set to Highlight.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LiveAiAnalysisDescriptionItem $DescriptionResult Summary result. It is valid when Type is Description.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SegmentResultSet",$param) and $param["SegmentResultSet"] !== null) {
            $this->SegmentResultSet = [];
            foreach ($param["SegmentResultSet"] as $key => $value){
                $obj = new SegmentRecognitionItem();
                $obj->deserialize($value);
                array_push($this->SegmentResultSet, $obj);
            }
        }

        if (array_key_exists("HighlightResultSet",$param) and $param["HighlightResultSet"] !== null) {
            $this->HighlightResultSet = [];
            foreach ($param["HighlightResultSet"] as $key => $value){
                $obj = new MediaAiAnalysisHighlightItem();
                $obj->deserialize($value);
                array_push($this->HighlightResultSet, $obj);
            }
        }

        if (array_key_exists("DescriptionResult",$param) and $param["DescriptionResult"] !== null) {
            $this->DescriptionResult = new LiveAiAnalysisDescriptionItem();
            $this->DescriptionResult->deserialize($param["DescriptionResult"]);
        }
    }
}
