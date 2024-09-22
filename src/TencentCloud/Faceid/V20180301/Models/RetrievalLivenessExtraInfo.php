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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getHitGroup() Obtain 
 * @method void setHitGroup(string $HitGroup) Set 
 * @method float getSimilarityScore() Obtain 
 * @method void setSimilarityScore(float $SimilarityScore) Set 
 * @method string getHitTemplate() Obtain 
 * @method void setHitTemplate(string $HitTemplate) Set 
 */
class RetrievalLivenessExtraInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $HitGroup;

    /**
     * @var float 
     */
    public $SimilarityScore;

    /**
     * @var string 
     */
    public $HitTemplate;

    /**
     * @param string $HitGroup 
     * @param float $SimilarityScore 
     * @param string $HitTemplate 
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
        if (array_key_exists("HitGroup",$param) and $param["HitGroup"] !== null) {
            $this->HitGroup = $param["HitGroup"];
        }

        if (array_key_exists("SimilarityScore",$param) and $param["SimilarityScore"] !== null) {
            $this->SimilarityScore = $param["SimilarityScore"];
        }

        if (array_key_exists("HitTemplate",$param) and $param["HitTemplate"] !== null) {
            $this->HitTemplate = $param["HitTemplate"];
        }
    }
}
