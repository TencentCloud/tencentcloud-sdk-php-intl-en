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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application configuration.
 *
 * @method KnowledgeQaConfig getKnowledgeQa() Obtain Knowledge Q&A management application configuration
 * @method void setKnowledgeQa(KnowledgeQaConfig $KnowledgeQa) Set Knowledge Q&A management application configuration
 * @method SummaryConfig getSummary() Obtain Knowledge summary application configuration.
 * @method void setSummary(SummaryConfig $Summary) Set Knowledge summary application configuration.
 * @method ClassifyConfig getClassify() Obtain Label extraction application configuration.
 * @method void setClassify(ClassifyConfig $Classify) Set Label extraction application configuration.
 */
class AppConfig extends AbstractModel
{
    /**
     * @var KnowledgeQaConfig Knowledge Q&A management application configuration
     */
    public $KnowledgeQa;

    /**
     * @var SummaryConfig Knowledge summary application configuration.
     */
    public $Summary;

    /**
     * @var ClassifyConfig Label extraction application configuration.
     */
    public $Classify;

    /**
     * @param KnowledgeQaConfig $KnowledgeQa Knowledge Q&A management application configuration
     * @param SummaryConfig $Summary Knowledge summary application configuration.
     * @param ClassifyConfig $Classify Label extraction application configuration.
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
        if (array_key_exists("KnowledgeQa",$param) and $param["KnowledgeQa"] !== null) {
            $this->KnowledgeQa = new KnowledgeQaConfig();
            $this->KnowledgeQa->deserialize($param["KnowledgeQa"]);
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new SummaryConfig();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("Classify",$param) and $param["Classify"] !== null) {
            $this->Classify = new ClassifyConfig();
            $this->Classify->deserialize($param["Classify"]);
        }
    }
}
