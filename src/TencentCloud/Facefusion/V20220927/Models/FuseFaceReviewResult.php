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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getCategory() Obtain 
 * @method void setCategory(string $Category) Set 
 * @method string getCode() Obtain 
 * @method void setCode(string $Code) Set 
 * @method string getCodeDescription() Obtain 
 * @method void setCodeDescription(string $CodeDescription) Set 
 * @method float getConfidence() Obtain 
 * @method void setConfidence(float $Confidence) Set 
 * @method string getSuggestion() Obtain 
 * @method void setSuggestion(string $Suggestion) Set 
 * @method array getDetailSet() Obtain 
 * @method void setDetailSet(array $DetailSet) Set 
 */
class FuseFaceReviewResult extends AbstractModel
{
    /**
     * @var string 
     */
    public $Category;

    /**
     * @var string 
     */
    public $Code;

    /**
     * @var string 
     */
    public $CodeDescription;

    /**
     * @var float 
     */
    public $Confidence;

    /**
     * @var string 
     */
    public $Suggestion;

    /**
     * @var array 
     */
    public $DetailSet;

    /**
     * @param string $Category 
     * @param string $Code 
     * @param string $CodeDescription 
     * @param float $Confidence 
     * @param string $Suggestion 
     * @param array $DetailSet 
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
