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
 * Aggregation results of each LLM detection item.
 *
 * @method string getCategory() Obtain <p>Detection category.</p><p>Enumeration value:</p><ul><li>AIGCQualityCharacteristics: AIGC quality characteristics.</li></ul>
 * @method void setCategory(string $Category) Set <p>Detection category.</p><p>Enumeration value:</p><ul><li>AIGCQualityCharacteristics: AIGC quality characteristics.</li></ul>
 * @method string getGroup() Obtain <p>Detection group.</p><p>Enumeration values:</p><ul><li>AIGCAuthenticity: AIGC authenticity, including human body plausibility, physical plausibility, and cross-frame consistency.</li><li>AIGCTechQuality: AIGC technology quality, including aspect ratio, black border, and forced portrait mode.</li></ul>
 * @method void setGroup(string $Group) Set <p>Detection group.</p><p>Enumeration values:</p><ul><li>AIGCAuthenticity: AIGC authenticity, including human body plausibility, physical plausibility, and cross-frame consistency.</li><li>AIGCTechQuality: AIGC technology quality, including aspect ratio, black border, and forced portrait mode.</li></ul>
 * @method string getType() Obtain <p>Detection type name.</p><p>Enumeration values:</p><ul><li>BodyPoseCheck: Human body pose plausibility, which belongs to AIGCAuthenticity.</li><li>BodyDetailCheck: Human body detail plausibility, including finger count and facial symmetry, which belongs to AIGCAuthenticity.</li><li>PhysicRulesCheck: Physics rules plausibility, including perspective, lighting, and gravity, which belongs to AIGCAuthenticity.</li><li>ObjectConsistencyCheck: Cross-frame object consistency, which belongs to AIGCAuthenticity.</li><li>FormatCheck: Aspect ratio, black border, forced portrait mode, and other format issues, which belong to AIGCTechQuality.</li></ul>
 * @method void setType(string $Type) Set <p>Detection type name.</p><p>Enumeration values:</p><ul><li>BodyPoseCheck: Human body pose plausibility, which belongs to AIGCAuthenticity.</li><li>BodyDetailCheck: Human body detail plausibility, including finger count and facial symmetry, which belongs to AIGCAuthenticity.</li><li>PhysicRulesCheck: Physics rules plausibility, including perspective, lighting, and gravity, which belongs to AIGCAuthenticity.</li><li>ObjectConsistencyCheck: Cross-frame object consistency, which belongs to AIGCAuthenticity.</li><li>FormatCheck: Aspect ratio, black border, forced portrait mode, and other format issues, which belong to AIGCTechQuality.</li></ul>
 * @method float getScore() Obtain <p>Overall quality score. Value range: [0, 100]. Higher values indicate better quality.</p>
 * @method void setScore(float $Score) Set <p>Overall quality score. Value range: [0, 100]. Higher values indicate better quality.</p>
 * @method float getConfidence() Obtain <p>Detection confidence. Value range: [0, 100]. Higher values indicate greater certainty.</p>
 * @method void setConfidence(float $Confidence) Set <p>Detection confidence. Value range: [0, 100]. Higher values indicate greater certainty.</p>
 * @method array getIssueSet() Obtain <p>List of issues detected. This is empty if no issue is detected.</p>
 * @method void setIssueSet(array $IssueSet) Set <p>List of issues detected. This is empty if no issue is detected.</p>
 */
class LLMDetectionResultItem extends AbstractModel
{
    /**
     * @var string <p>Detection category.</p><p>Enumeration value:</p><ul><li>AIGCQualityCharacteristics: AIGC quality characteristics.</li></ul>
     */
    public $Category;

    /**
     * @var string <p>Detection group.</p><p>Enumeration values:</p><ul><li>AIGCAuthenticity: AIGC authenticity, including human body plausibility, physical plausibility, and cross-frame consistency.</li><li>AIGCTechQuality: AIGC technology quality, including aspect ratio, black border, and forced portrait mode.</li></ul>
     */
    public $Group;

    /**
     * @var string <p>Detection type name.</p><p>Enumeration values:</p><ul><li>BodyPoseCheck: Human body pose plausibility, which belongs to AIGCAuthenticity.</li><li>BodyDetailCheck: Human body detail plausibility, including finger count and facial symmetry, which belongs to AIGCAuthenticity.</li><li>PhysicRulesCheck: Physics rules plausibility, including perspective, lighting, and gravity, which belongs to AIGCAuthenticity.</li><li>ObjectConsistencyCheck: Cross-frame object consistency, which belongs to AIGCAuthenticity.</li><li>FormatCheck: Aspect ratio, black border, forced portrait mode, and other format issues, which belong to AIGCTechQuality.</li></ul>
     */
    public $Type;

    /**
     * @var float <p>Overall quality score. Value range: [0, 100]. Higher values indicate better quality.</p>
     */
    public $Score;

    /**
     * @var float <p>Detection confidence. Value range: [0, 100]. Higher values indicate greater certainty.</p>
     */
    public $Confidence;

    /**
     * @var array <p>List of issues detected. This is empty if no issue is detected.</p>
     */
    public $IssueSet;

    /**
     * @param string $Category <p>Detection category.</p><p>Enumeration value:</p><ul><li>AIGCQualityCharacteristics: AIGC quality characteristics.</li></ul>
     * @param string $Group <p>Detection group.</p><p>Enumeration values:</p><ul><li>AIGCAuthenticity: AIGC authenticity, including human body plausibility, physical plausibility, and cross-frame consistency.</li><li>AIGCTechQuality: AIGC technology quality, including aspect ratio, black border, and forced portrait mode.</li></ul>
     * @param string $Type <p>Detection type name.</p><p>Enumeration values:</p><ul><li>BodyPoseCheck: Human body pose plausibility, which belongs to AIGCAuthenticity.</li><li>BodyDetailCheck: Human body detail plausibility, including finger count and facial symmetry, which belongs to AIGCAuthenticity.</li><li>PhysicRulesCheck: Physics rules plausibility, including perspective, lighting, and gravity, which belongs to AIGCAuthenticity.</li><li>ObjectConsistencyCheck: Cross-frame object consistency, which belongs to AIGCAuthenticity.</li><li>FormatCheck: Aspect ratio, black border, forced portrait mode, and other format issues, which belong to AIGCTechQuality.</li></ul>
     * @param float $Score <p>Overall quality score. Value range: [0, 100]. Higher values indicate better quality.</p>
     * @param float $Confidence <p>Detection confidence. Value range: [0, 100]. Higher values indicate greater certainty.</p>
     * @param array $IssueSet <p>List of issues detected. This is empty if no issue is detected.</p>
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("IssueSet",$param) and $param["IssueSet"] !== null) {
            $this->IssueSet = [];
            foreach ($param["IssueSet"] as $key => $value){
                $obj = new LLMDetectionIssue();
                $obj->deserialize($value);
                array_push($this->IssueSet, $obj);
            }
        }
    }
}
