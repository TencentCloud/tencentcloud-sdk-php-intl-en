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
 * Knowledge base media analysis result.
 *
 * @method string getTaskType() Obtain <p>Process task type</p><p>Enumeration value:</p><ul><li>AiAnalysis.DescriptionTask: Intelligent summary task</li><li>AiAnalysis.VideoComprehensionTask: Video understanding task</li><li>SmartSubtitle.AsrFullTextTask: Intelligent speech full-text recognition task</li></ul>
 * @method void setTaskType(string $TaskType) Set <p>Process task type</p><p>Enumeration value:</p><ul><li>AiAnalysis.DescriptionTask: Intelligent summary task</li><li>AiAnalysis.VideoComprehensionTask: Video understanding task</li><li>SmartSubtitle.AsrFullTextTask: Intelligent speech full-text recognition task</li></ul>
 * @method MPSOutputFileInfo getFile() Obtain <p>Task output file collection</p>
 * @method void setFile(MPSOutputFileInfo $File) Set <p>Task output file collection</p>
 */
class KnowledgeAnalysisResult extends AbstractModel
{
    /**
     * @var string <p>Process task type</p><p>Enumeration value:</p><ul><li>AiAnalysis.DescriptionTask: Intelligent summary task</li><li>AiAnalysis.VideoComprehensionTask: Video understanding task</li><li>SmartSubtitle.AsrFullTextTask: Intelligent speech full-text recognition task</li></ul>
     */
    public $TaskType;

    /**
     * @var MPSOutputFileInfo <p>Task output file collection</p>
     */
    public $File;

    /**
     * @param string $TaskType <p>Process task type</p><p>Enumeration value:</p><ul><li>AiAnalysis.DescriptionTask: Intelligent summary task</li><li>AiAnalysis.VideoComprehensionTask: Video understanding task</li><li>SmartSubtitle.AsrFullTextTask: Intelligent speech full-text recognition task</li></ul>
     * @param MPSOutputFileInfo $File <p>Task output file collection</p>
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = new MPSOutputFileInfo();
            $this->File->deserialize($param["File"]);
        }
    }
}
