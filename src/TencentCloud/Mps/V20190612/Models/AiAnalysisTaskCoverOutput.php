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
 * Result information of intelligent cover generating
 *
 * @method array getCoverSet() Obtain List of intelligently generated covers.
 * @method void setCoverSet(array $CoverSet) Set List of intelligently generated covers.
 * @method TaskOutputStorage getOutputStorage() Obtain Storage location of intelligently generated cover.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Storage location of intelligently generated cover.
 */
class AiAnalysisTaskCoverOutput extends AbstractModel
{
    /**
     * @var array List of intelligently generated covers.
     */
    public $CoverSet;

    /**
     * @var TaskOutputStorage Storage location of intelligently generated cover.
     */
    public $OutputStorage;

    /**
     * @param array $CoverSet List of intelligently generated covers.
     * @param TaskOutputStorage $OutputStorage Storage location of intelligently generated cover.
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
