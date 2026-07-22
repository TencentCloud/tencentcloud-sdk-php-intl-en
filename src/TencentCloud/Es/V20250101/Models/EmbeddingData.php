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
 * Vector content
 *
 * @method array getEmbedding() Obtain embedding content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmbedding(array $Embedding) Set embedding content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIndex() Obtain Index serial number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIndex(integer $Index) Set Index serial number
Note: This field may return null, indicating that no valid values can be obtained.
 */
class EmbeddingData extends AbstractModel
{
    /**
     * @var array embedding content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Embedding;

    /**
     * @var integer Index serial number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Index;

    /**
     * @param array $Embedding embedding content
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Index Index serial number
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
        if (array_key_exists("Embedding",$param) and $param["Embedding"] !== null) {
            $this->Embedding = $param["Embedding"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
