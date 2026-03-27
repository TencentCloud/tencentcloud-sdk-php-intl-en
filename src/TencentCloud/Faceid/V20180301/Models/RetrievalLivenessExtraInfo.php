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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Template search details
 *
 * @method string getHitGroup() Obtain Matched template types, where Common - public library; Auto - automatic clustering library; Owner - self-built template library.
 * @method void setHitGroup(string $HitGroup) Set Matched template types, where Common - public library; Auto - automatic clustering library; Owner - self-built template library.
 * @method float getSimilarityScore() Obtain Matched Similarity
 * @method void setSimilarityScore(float $SimilarityScore) Set Matched Similarity
 * @method string getHitTemplate() Obtain Matched Template id
 * @method void setHitTemplate(string $HitTemplate) Set Matched Template id
 */
class RetrievalLivenessExtraInfo extends AbstractModel
{
    /**
     * @var string Matched template types, where Common - public library; Auto - automatic clustering library; Owner - self-built template library.
     */
    public $HitGroup;

    /**
     * @var float Matched Similarity
     */
    public $SimilarityScore;

    /**
     * @var string Matched Template id
     */
    public $HitTemplate;

    /**
     * @param string $HitGroup Matched template types, where Common - public library; Auto - automatic clustering library; Owner - self-built template library.
     * @param float $SimilarityScore Matched Similarity
     * @param string $HitTemplate Matched Template id
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
