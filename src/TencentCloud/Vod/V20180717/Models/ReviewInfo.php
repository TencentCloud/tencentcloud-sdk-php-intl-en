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
 * 
 *
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method string getSuggestion() Obtain 
 * @method void setSuggestion(string $Suggestion) Set 
 * @method array getTypeSet() Obtain 
 * @method void setTypeSet(array $TypeSet) Set 
 * @method string getReviewTime() Obtain 
 * @method void setReviewTime(string $ReviewTime) Set 
 */
class ReviewInfo extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var string 
     */
    public $Suggestion;

    /**
     * @var array 
     */
    public $TypeSet;

    /**
     * @var string 
     */
    public $ReviewTime;

    /**
     * @param integer $Definition 
     * @param string $Suggestion 
     * @param array $TypeSet 
     * @param string $ReviewTime 
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("TypeSet",$param) and $param["TypeSet"] !== null) {
            $this->TypeSet = $param["TypeSet"];
        }

        if (array_key_exists("ReviewTime",$param) and $param["ReviewTime"] !== null) {
            $this->ReviewTime = $param["ReviewTime"];
        }
    }
}
