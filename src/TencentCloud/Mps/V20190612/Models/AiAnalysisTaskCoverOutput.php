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
 * Intelligent cover result information
 *
 * @method array getCoverSet() Obtain Intelligent cover list.
 * @method void setCoverSet(array $CoverSet) Set Intelligent cover list.
 * @method TaskOutputStorage getOutputStorage() Obtain Intelligent cover storage location.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Intelligent cover storage location.
 */
class AiAnalysisTaskCoverOutput extends AbstractModel
{
    /**
     * @var array Intelligent cover list.
     */
    public $CoverSet;

    /**
     * @var TaskOutputStorage Intelligent cover storage location.
     */
    public $OutputStorage;

    /**
     * @param array $CoverSet Intelligent cover list.
     * @param TaskOutputStorage $OutputStorage Intelligent cover storage location.
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
        if (array_key_exists("CoverSet",$param) and $param["CoverSet"] !== null) {
            $this->CoverSet = [];
            foreach ($param["CoverSet"] as $key => $value){
                $obj = new MediaAiAnalysisCoverItem();
                $obj->deserialize($value);
                array_push($this->CoverSet, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
