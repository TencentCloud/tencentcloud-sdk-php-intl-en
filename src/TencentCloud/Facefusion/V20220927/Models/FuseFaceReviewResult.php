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
 * Face Fusion Inappropriate Content Detection Response Parameter item
 *
 * @method string getCategory() Obtain Reserved field
 * @method void setCategory(string $Category) Set Reserved field
 * @method string getCode() Obtain Status code. 0 indicates successful processing; other values indicate failure.
 * @method void setCode(string $Code) Set Status code. 0 indicates successful processing; other values indicate failure.
 * @method string getCodeDescription() Obtain Corresponding Status Code Description
 * @method void setCodeDescription(string $CodeDescription) Set Corresponding Status Code Description
 * @method float getConfidence() Obtain Reserved field
 * @method void setConfidence(float $Confidence) Set Reserved field
 * @method string getSuggestion() Obtain Reserved field
 * @method void setSuggestion(string $Suggestion) Set Reserved field
 * @method array getDetailSet() Obtain Detailed Moderation Content
 * @method void setDetailSet(array $DetailSet) Set Detailed Moderation Content
 */
class FuseFaceReviewResult extends AbstractModel
{
    /**
     * @var string Reserved field
     */
    public $Category;

    /**
     * @var string Status code. 0 indicates successful processing; other values indicate failure.
     */
    public $Code;

    /**
     * @var string Corresponding Status Code Description
     */
    public $CodeDescription;

    /**
     * @var float Reserved field
     */
    public $Confidence;

    /**
     * @var string Reserved field
     */
    public $Suggestion;

    /**
     * @var array Detailed Moderation Content
     */
    public $DetailSet;

    /**
     * @param string $Category Reserved field
     * @param string $Code Status code. 0 indicates successful processing; other values indicate failure.
     * @param string $CodeDescription Corresponding Status Code Description
     * @param float $Confidence Reserved field
     * @param string $Suggestion Reserved field
     * @param array $DetailSet Detailed Moderation Content
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
