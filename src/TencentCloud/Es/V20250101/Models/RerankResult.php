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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output result
 *
 * @method integer getIndex() Obtain Location index value of the corresponding doc in the array of candidate docs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIndex(integer $Index) Set Location index value of the corresponding doc in the array of candidate docs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getRelevanceScore() Obtain Similarity score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRelevanceScore(float $RelevanceScore) Set Similarity score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDocument() Obtain Document content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDocument(string $Document) Set Document content
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RerankResult extends AbstractModel
{
    /**
     * @var integer Location index value of the corresponding doc in the array of candidate docs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Index;

    /**
     * @var float Similarity score
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RelevanceScore;

    /**
     * @var string Document content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Document;

    /**
     * @param integer $Index Location index value of the corresponding doc in the array of candidate docs
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $RelevanceScore Similarity score
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Document Document content
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("RelevanceScore",$param) and $param["RelevanceScore"] !== null) {
            $this->RelevanceScore = $param["RelevanceScore"];
        }

        if (array_key_exists("Document",$param) and $param["Document"] !== null) {
            $this->Document = $param["Document"];
        }
    }
}
