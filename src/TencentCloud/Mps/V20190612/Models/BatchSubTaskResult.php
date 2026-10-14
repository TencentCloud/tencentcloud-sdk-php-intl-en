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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Results of subtasks for a batch task.
 *
 * @method array getInputInfos() Obtain Input information for a batch task.
 * @method void setInputInfos(array $InputInfos) Set Input information for a batch task.
 * @method array getMetadatas() Obtain Metadata of the original video.
 * @method void setMetadatas(array $Metadatas) Set Metadata of the original video.
 * @method BatchSmartSubtitlesResult getSmartSubtitlesTaskResult() Obtain Execution result of the smart subtitle task.
 * @method void setSmartSubtitlesTaskResult(BatchSmartSubtitlesResult $SmartSubtitlesTaskResult) Set Execution result of the smart subtitle task.
 */
class BatchSubTaskResult extends AbstractModel
{
    /**
     * @var array Input information for a batch task.
     */
    public $InputInfos;

    /**
     * @var array Metadata of the original video.
     */
    public $Metadatas;

    /**
     * @var BatchSmartSubtitlesResult Execution result of the smart subtitle task.
     */
    public $SmartSubtitlesTaskResult;

    /**
     * @param array $InputInfos Input information for a batch task.
     * @param array $Metadatas Metadata of the original video.
     * @param BatchSmartSubtitlesResult $SmartSubtitlesTaskResult Execution result of the smart subtitle task.
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
        if (array_key_exists("InputInfos",$param) and $param["InputInfos"] !== null) {
            $this->InputInfos = [];
            foreach ($param["InputInfos"] as $key => $value){
                $obj = new MediaInputInfo();
                $obj->deserialize($value);
                array_push($this->InputInfos, $obj);
            }
        }

        if (array_key_exists("Metadatas",$param) and $param["Metadatas"] !== null) {
            $this->Metadatas = [];
            foreach ($param["Metadatas"] as $key => $value){
                $obj = new MediaMetaData();
                $obj->deserialize($value);
                array_push($this->Metadatas, $obj);
            }
        }

        if (array_key_exists("SmartSubtitlesTaskResult",$param) and $param["SmartSubtitlesTaskResult"] !== null) {
            $this->SmartSubtitlesTaskResult = new BatchSmartSubtitlesResult();
            $this->SmartSubtitlesTaskResult->deserialize($param["SmartSubtitlesTaskResult"]);
        }
    }
}
