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
 * Template retrieve detailed information
 *
 * @method string getHitGroup() Obtain <p>Hit template type, among them Common-public library; Auto-Auto Clustering Library; Owner-custom template library</p>
 * @method void setHitGroup(string $HitGroup) Set <p>Hit template type, among them Common-public library; Auto-Auto Clustering Library; Owner-custom template library</p>
 * @method float getSimilarityScore() Obtain <p>Similarity between the request image and the attack template hit. The similarity value ranges from 0 to 2. The smaller the value, the higher the probability of hitting the attack template. The default threshold is 0.6. When the SimilarityScore is ≥0.6, the judgment is as normal. When the SimilarityScore is <0.6, the judgment is an attack.</p>
 * @method void setSimilarityScore(float $SimilarityScore) Set <p>Similarity between the request image and the attack template hit. The similarity value ranges from 0 to 2. The smaller the value, the higher the probability of hitting the attack template. The default threshold is 0.6. When the SimilarityScore is ≥0.6, the judgment is as normal. When the SimilarityScore is <0.6, the judgment is an attack.</p>
 * @method string getHitTemplate() Obtain <p>Template id of the cache hit</p>
 * @method void setHitTemplate(string $HitTemplate) Set <p>Template id of the cache hit</p>
 */
class RetrievalLivenessExtraInfo extends AbstractModel
{
    /**
     * @var string <p>Hit template type, among them Common-public library; Auto-Auto Clustering Library; Owner-custom template library</p>
     */
    public $HitGroup;

    /**
     * @var float <p>Similarity between the request image and the attack template hit. The similarity value ranges from 0 to 2. The smaller the value, the higher the probability of hitting the attack template. The default threshold is 0.6. When the SimilarityScore is ≥0.6, the judgment is as normal. When the SimilarityScore is <0.6, the judgment is an attack.</p>
     */
    public $SimilarityScore;

    /**
     * @var string <p>Template id of the cache hit</p>
     */
    public $HitTemplate;

    /**
     * @param string $HitGroup <p>Hit template type, among them Common-public library; Auto-Auto Clustering Library; Owner-custom template library</p>
     * @param float $SimilarityScore <p>Similarity between the request image and the attack template hit. The similarity value ranges from 0 to 2. The smaller the value, the higher the probability of hitting the attack template. The default threshold is 0.6. When the SimilarityScore is ≥0.6, the judgment is as normal. When the SimilarityScore is <0.6, the judgment is an attack.</p>
     * @param string $HitTemplate <p>Template id of the cache hit</p>
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
