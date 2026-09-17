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
 * @method array getBases() Obtain 
 * @method void setBases(array $Bases) Set 
 * @method array getKnowledgeAnalysisInfos() Obtain 
 * @method void setKnowledgeAnalysisInfos(array $KnowledgeAnalysisInfos) Set 
 * @method array getKnowledgeBaseDetails() Obtain 
 * @method void setKnowledgeBaseDetails(array $KnowledgeBaseDetails) Set 
 */
class KnowledgeBasesInfo extends AbstractModel
{
    /**
     * @var array 
     */
    public $Bases;

    /**
     * @var array 
     */
    public $KnowledgeAnalysisInfos;

    /**
     * @var array 
     */
    public $KnowledgeBaseDetails;

    /**
     * @param array $Bases 
     * @param array $KnowledgeAnalysisInfos 
     * @param array $KnowledgeBaseDetails 
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
        if (array_key_exists("Bases",$param) and $param["Bases"] !== null) {
            $this->Bases = $param["Bases"];
        }

        if (array_key_exists("KnowledgeAnalysisInfos",$param) and $param["KnowledgeAnalysisInfos"] !== null) {
            $this->KnowledgeAnalysisInfos = [];
            foreach ($param["KnowledgeAnalysisInfos"] as $key => $value){
                $obj = new KnowledgeAnalysisInfo();
                $obj->deserialize($value);
                array_push($this->KnowledgeAnalysisInfos, $obj);
            }
        }

        if (array_key_exists("KnowledgeBaseDetails",$param) and $param["KnowledgeBaseDetails"] !== null) {
            $this->KnowledgeBaseDetails = [];
            foreach ($param["KnowledgeBaseDetails"] as $key => $value){
                $obj = new KnowledgeBaseDetail();
                $obj->deserialize($value);
                array_push($this->KnowledgeBaseDetails, $obj);
            }
        }
    }
}
