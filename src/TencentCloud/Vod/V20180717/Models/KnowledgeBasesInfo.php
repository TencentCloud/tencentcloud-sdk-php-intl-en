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
 * Media asset intelligent knowledge base information
 *
 * @method array getBases() Obtain <p>List of knowledge bases currently imported for the media asset</p>
 * @method void setBases(array $Bases) Set <p>List of knowledge bases currently imported for the media asset</p>
 * @method array getKnowledgeAnalysisInfos() Obtain <p>Media analysis info in the knowledge base</p>
 * @method void setKnowledgeAnalysisInfos(array $KnowledgeAnalysisInfos) Set <p>Media analysis info in the knowledge base</p>
 * @method array getKnowledgeBaseDetails() Obtain <p>Current repository list imported for the media asset, as well as detailed information such as the parsing template used</p>
 * @method void setKnowledgeBaseDetails(array $KnowledgeBaseDetails) Set <p>Current repository list imported for the media asset, as well as detailed information such as the parsing template used</p>
 */
class KnowledgeBasesInfo extends AbstractModel
{
    /**
     * @var array <p>List of knowledge bases currently imported for the media asset</p>
     */
    public $Bases;

    /**
     * @var array <p>Media analysis info in the knowledge base</p>
     */
    public $KnowledgeAnalysisInfos;

    /**
     * @var array <p>Current repository list imported for the media asset, as well as detailed information such as the parsing template used</p>
     */
    public $KnowledgeBaseDetails;

    /**
     * @param array $Bases <p>List of knowledge bases currently imported for the media asset</p>
     * @param array $KnowledgeAnalysisInfos <p>Media analysis info in the knowledge base</p>
     * @param array $KnowledgeBaseDetails <p>Current repository list imported for the media asset, as well as detailed information such as the parsing template used</p>
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
