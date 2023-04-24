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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The output of an intelligent highlight generation task.
 *
 * @method array getHighlightSet() Obtain A list of the highlight segments generated.
 * @method void setHighlightSet(array $HighlightSet) Set A list of the highlight segments generated.
 * @method TaskOutputStorage getOutputStorage() Obtain The storage location of the highlight segments.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set The storage location of the highlight segments.
 */
class AiAnalysisTaskHighlightOutput extends AbstractModel
{
    /**
     * @var array A list of the highlight segments generated.
     */
    public $HighlightSet;

    /**
     * @var TaskOutputStorage The storage location of the highlight segments.
     */
    public $OutputStorage;

    /**
     * @param array $HighlightSet A list of the highlight segments generated.
     * @param TaskOutputStorage $OutputStorage The storage location of the highlight segments.
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
        if (array_key_exists("HighlightSet",$param) and $param["HighlightSet"] !== null) {
            $this->HighlightSet = [];
            foreach ($param["HighlightSet"] as $key => $value){
                $obj = new MediaAiAnalysisHighlightItem();
                $obj->deserialize($value);
                array_push($this->HighlightSet, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
