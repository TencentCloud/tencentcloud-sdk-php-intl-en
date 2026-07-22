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
 * Output info of the AIGC video generation task.
 *
 * @method array getFileInfos() Obtain <p>Output file info of the AIGC video task.</p>
 * @method void setFileInfos(array $FileInfos) Set <p>Output file info of the AIGC video task.</p>
 * @method array getProcedureTaskIds() Obtain <p>The task ID of the task type Procedure. If a task flow template (Procedure) is specified when initiating <a href="https://www.tencentcloud.com/document/product/266/126239?from_cn_redirect=1">AIGC video task creation</a>, the task is initiated when the task flow template specifies one or more of MediaProcessTask, AiAnalysisTask, or AiRecognitionTask.</p>
 * @method void setProcedureTaskIds(array $ProcedureTaskIds) Set <p>The task ID of the task type Procedure. If a task flow template (Procedure) is specified when initiating <a href="https://www.tencentcloud.com/document/product/266/126239?from_cn_redirect=1">AIGC video task creation</a>, the task is initiated when the task flow template specifies one or more of MediaProcessTask, AiAnalysisTask, or AiRecognitionTask.</p>
 * @method AigcVideoTaskUsage getUsage() Obtain <p>Usage information for AIGC video tasks.</p>
 * @method void setUsage(AigcVideoTaskUsage $Usage) Set <p>Usage information for AIGC video tasks.</p>
 */
class AigcVideoTaskOutput extends AbstractModel
{
    /**
     * @var array <p>Output file info of the AIGC video task.</p>
     */
    public $FileInfos;

    /**
     * @var array <p>The task ID of the task type Procedure. If a task flow template (Procedure) is specified when initiating <a href="https://www.tencentcloud.com/document/product/266/126239?from_cn_redirect=1">AIGC video task creation</a>, the task is initiated when the task flow template specifies one or more of MediaProcessTask, AiAnalysisTask, or AiRecognitionTask.</p>
     */
    public $ProcedureTaskIds;

    /**
     * @var AigcVideoTaskUsage <p>Usage information for AIGC video tasks.</p>
     */
    public $Usage;

    /**
     * @param array $FileInfos <p>Output file info of the AIGC video task.</p>
     * @param array $ProcedureTaskIds <p>The task ID of the task type Procedure. If a task flow template (Procedure) is specified when initiating <a href="https://www.tencentcloud.com/document/product/266/126239?from_cn_redirect=1">AIGC video task creation</a>, the task is initiated when the task flow template specifies one or more of MediaProcessTask, AiAnalysisTask, or AiRecognitionTask.</p>
     * @param AigcVideoTaskUsage $Usage <p>Usage information for AIGC video tasks.</p>
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
        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new AigcVideoTaskOutputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("ProcedureTaskIds",$param) and $param["ProcedureTaskIds"] !== null) {
            $this->ProcedureTaskIds = $param["ProcedureTaskIds"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new AigcVideoTaskUsage();
            $this->Usage->deserialize($param["Usage"]);
        }
    }
}
