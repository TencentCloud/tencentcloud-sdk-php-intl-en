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
 * Result information of intelligent categorization
 *
 * @method array getClassificationSet() Obtain List of intelligently generated video categories.
 * @method void setClassificationSet(array $ClassificationSet) Set List of intelligently generated video categories.
 */
class AiAnalysisTaskClassificationOutput extends AbstractModel
{
    /**
     * @var array List of intelligently generated video categories.
     */
    public $ClassificationSet;

    /**
     * @param array $ClassificationSet List of intelligently generated video categories.
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
        if (array_key_exists("ClassificationSet",$param) and $param["ClassificationSet"] !== null) {
            $this->ClassificationSet = [];
            foreach ($param["ClassificationSet"] as $key => $value){
                $obj = new MediaAiAnalysisClassificationItem();
                $obj->deserialize($value);
                array_push($this->ClassificationSet, $obj);
            }
        }
    }
}
