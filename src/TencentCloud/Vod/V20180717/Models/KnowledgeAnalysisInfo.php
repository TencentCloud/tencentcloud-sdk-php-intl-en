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
 * Knowledge base media analysis information.
 *
 * @method integer getDefinition() Obtain <p>Large model parsing template ID</p>
 * @method void setDefinition(integer $Definition) Set <p>Large model parsing template ID</p>
 * @method array getAnalysisResults() Obtain <p>Parsing result of large model</p>
 * @method void setAnalysisResults(array $AnalysisResults) Set <p>Parsing result of large model</p>
 */
class KnowledgeAnalysisInfo extends AbstractModel
{
    /**
     * @var integer <p>Large model parsing template ID</p>
     */
    public $Definition;

    /**
     * @var array <p>Parsing result of large model</p>
     */
    public $AnalysisResults;

    /**
     * @param integer $Definition <p>Large model parsing template ID</p>
     * @param array $AnalysisResults <p>Parsing result of large model</p>
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

        if (array_key_exists("AnalysisResults",$param) and $param["AnalysisResults"] !== null) {
            $this->AnalysisResults = [];
            foreach ($param["AnalysisResults"] as $key => $value){
                $obj = new KnowledgeAnalysisResult();
                $obj->deserialize($value);
                array_push($this->AnalysisResults, $obj);
            }
        }
    }
}
