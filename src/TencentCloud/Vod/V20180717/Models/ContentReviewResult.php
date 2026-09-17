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
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method PornImageResult getPornImageResult() Obtain 
 * @method void setPornImageResult(PornImageResult $PornImageResult) Set 
 * @method TerrorismImageResult getTerrorismImageResult() Obtain 
 * @method void setTerrorismImageResult(TerrorismImageResult $TerrorismImageResult) Set 
 * @method PoliticalImageResult getPoliticalImageResult() Obtain 
 * @method void setPoliticalImageResult(PoliticalImageResult $PoliticalImageResult) Set 
 * @method ContentReviewOcrResult getPornOcrResult() Obtain 
 * @method void setPornOcrResult(ContentReviewOcrResult $PornOcrResult) Set 
 * @method ContentReviewOcrResult getTerrorismOcrResult() Obtain 
 * @method void setTerrorismOcrResult(ContentReviewOcrResult $TerrorismOcrResult) Set 
 * @method ContentReviewOcrResult getPoliticalOcrResult() Obtain 
 * @method void setPoliticalOcrResult(ContentReviewOcrResult $PoliticalOcrResult) Set 
 */
class ContentReviewResult extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var PornImageResult 
     */
    public $PornImageResult;

    /**
     * @var TerrorismImageResult 
     */
    public $TerrorismImageResult;

    /**
     * @var PoliticalImageResult 
     */
    public $PoliticalImageResult;

    /**
     * @var ContentReviewOcrResult 
     */
    public $PornOcrResult;

    /**
     * @var ContentReviewOcrResult 
     */
    public $TerrorismOcrResult;

    /**
     * @var ContentReviewOcrResult 
     */
    public $PoliticalOcrResult;

    /**
     * @param string $Type 
     * @param PornImageResult $PornImageResult 
     * @param TerrorismImageResult $TerrorismImageResult 
     * @param PoliticalImageResult $PoliticalImageResult 
     * @param ContentReviewOcrResult $PornOcrResult 
     * @param ContentReviewOcrResult $TerrorismOcrResult 
     * @param ContentReviewOcrResult $PoliticalOcrResult 
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

        if (array_key_exists("PornImageResult",$param) and $param["PornImageResult"] !== null) {
            $this->PornImageResult = new PornImageResult();
            $this->PornImageResult->deserialize($param["PornImageResult"]);
        }

        if (array_key_exists("TerrorismImageResult",$param) and $param["TerrorismImageResult"] !== null) {
            $this->TerrorismImageResult = new TerrorismImageResult();
            $this->TerrorismImageResult->deserialize($param["TerrorismImageResult"]);
        }

        if (array_key_exists("PoliticalImageResult",$param) and $param["PoliticalImageResult"] !== null) {
            $this->PoliticalImageResult = new PoliticalImageResult();
            $this->PoliticalImageResult->deserialize($param["PoliticalImageResult"]);
        }

        if (array_key_exists("PornOcrResult",$param) and $param["PornOcrResult"] !== null) {
            $this->PornOcrResult = new ContentReviewOcrResult();
            $this->PornOcrResult->deserialize($param["PornOcrResult"]);
        }

        if (array_key_exists("TerrorismOcrResult",$param) and $param["TerrorismOcrResult"] !== null) {
            $this->TerrorismOcrResult = new ContentReviewOcrResult();
            $this->TerrorismOcrResult->deserialize($param["TerrorismOcrResult"]);
        }

        if (array_key_exists("PoliticalOcrResult",$param) and $param["PoliticalOcrResult"] !== null) {
            $this->PoliticalOcrResult = new ContentReviewOcrResult();
            $this->PoliticalOcrResult->deserialize($param["PoliticalOcrResult"]);
        }
    }
}
