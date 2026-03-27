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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Face Fusion is not suitable for the returned parameter item in CR.
 *
 * @method string getCategory() Obtain Reserved Field
 * @method void setCategory(string $Category) Set Reserved Field
 * @method string getCode() Obtain Status code; 0 indicates successful processing, other values indicate processing failure
 * @method void setCode(string $Code) Set Status code; 0 indicates successful processing, other values indicate processing failure
 * @method string getCodeDescription() Obtain Description for the status code
 * @method void setCodeDescription(string $CodeDescription) Set Description for the status code
 * @method float getConfidence() Obtain Reserved Field
 * @method void setConfidence(float $Confidence) Set Reserved Field
 * @method string getSuggestion() Obtain Reserved Field
 * @method void setSuggestion(string $Suggestion) Set Reserved Field
 * @method array getDetailSet() Obtain Audit Details
 * @method void setDetailSet(array $DetailSet) Set Audit Details
 */
class FuseFaceReviewResult extends AbstractModel
{
    /**
     * @var string Reserved Field
     */
    public $Category;

    /**
     * @var string Status code; 0 indicates successful processing, other values indicate processing failure
     */
    public $Code;

    /**
     * @var string Description for the status code
     */
    public $CodeDescription;

    /**
     * @var float Reserved Field
     */
    public $Confidence;

    /**
     * @var string Reserved Field
     */
    public $Suggestion;

    /**
     * @var array Audit Details
     */
    public $DetailSet;

    /**
     * @param string $Category Reserved Field
     * @param string $Code Status code; 0 indicates successful processing, other values indicate processing failure
     * @param string $CodeDescription Description for the status code
     * @param float $Confidence Reserved Field
     * @param string $Suggestion Reserved Field
     * @param array $DetailSet Audit Details
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

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("CodeDescription",$param) and $param["CodeDescription"] !== null) {
            $this->CodeDescription = $param["CodeDescription"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("DetailSet",$param) and $param["DetailSet"] !== null) {
            $this->DetailSet = [];
            foreach ($param["DetailSet"] as $key => $value){
                $obj = new FuseFaceReviewDetail();
                $obj->deserialize($value);
                array_push($this->DetailSet, $obj);
            }
        }
    }
}
