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
 * @method array getInputInfos() Obtain 
 * @method void setInputInfos(array $InputInfos) Set 
 * @method array getMetadatas() Obtain 
 * @method void setMetadatas(array $Metadatas) Set 
 * @method BatchSmartSubtitlesResult getSmartSubtitlesTaskResult() Obtain 
 * @method void setSmartSubtitlesTaskResult(BatchSmartSubtitlesResult $SmartSubtitlesTaskResult) Set 
 */
class BatchSubTaskResult extends AbstractModel
{
    /**
     * @var array 
     */
    public $InputInfos;

    /**
     * @var array 
     */
    public $Metadatas;

    /**
     * @var BatchSmartSubtitlesResult 
     */
    public $SmartSubtitlesTaskResult;

    /**
     * @param array $InputInfos 
     * @param array $Metadatas 
     * @param BatchSmartSubtitlesResult $SmartSubtitlesTaskResult 
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
