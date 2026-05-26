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
 * @method string getHitGroup() Obtain <p>Hit template type. Among them, Common - public library; Auto - Auto Clustering Library; Owner - custom template.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHitGroup(string $HitGroup) Set <p>Hit template type. Among them, Common - public library; Auto - Auto Clustering Library; Owner - custom template.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getSimilarityScore() Obtain <p>The similarity between the request image and the hit attack template ranges from [0,2]. The smaller the value, the higher the probability of hitting the attack template. The default threshold is 0.6. When SimilarityScore≥0.6, it is judged as normal. SimilarityScore&lt;0.6 is judged as an attack.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSimilarityScore(float $SimilarityScore) Set <p>The similarity between the request image and the hit attack template ranges from [0,2]. The smaller the value, the higher the probability of hitting the attack template. The default threshold is 0.6. When SimilarityScore≥0.6, it is judged as normal. SimilarityScore&lt;0.6 is judged as an attack.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHitTemplate() Obtain <p>Template id of the cache hit</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHitTemplate(string $HitTemplate) Set <p>Template id of the cache hit</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RetrievalLivenessExtraInfo extends AbstractModel
{
    /**
     * @var string <p>Hit template type. Among them, Common - public library; Auto - Auto Clustering Library; Owner - custom template.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HitGroup;

    /**
     * @var float <p>The similarity between the request image and the hit attack template ranges from [0,2]. The smaller the value, the higher the probability of hitting the attack template. The default threshold is 0.6. When SimilarityScore≥0.6, it is judged as normal. SimilarityScore&lt;0.6 is judged as an attack.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SimilarityScore;

    /**
     * @var string <p>Template id of the cache hit</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HitTemplate;

    /**
     * @param string $HitGroup <p>Hit template type. Among them, Common - public library; Auto - Auto Clustering Library; Owner - custom template.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $SimilarityScore <p>The similarity between the request image and the hit attack template ranges from [0,2]. The smaller the value, the higher the probability of hitting the attack template. The default threshold is 0.6. When SimilarityScore≥0.6, it is judged as normal. SimilarityScore&lt;0.6 is judged as an attack.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HitTemplate <p>Template id of the cache hit</p>
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
