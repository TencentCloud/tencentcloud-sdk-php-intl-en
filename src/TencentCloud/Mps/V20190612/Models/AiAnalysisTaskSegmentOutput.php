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
 * Intelligent splitting result.
 *
 * @method array getSegmentSet() Obtain Intelligent splitting sub-segment list.
 * @method void setSegmentSet(array $SegmentSet) Set Intelligent splitting sub-segment list.
 * @method string getAbstract() Obtain Video abstract, used for offline scenarios.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAbstract(string $Abstract) Set Video abstract, used for offline scenarios.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class AiAnalysisTaskSegmentOutput extends AbstractModel
{
    /**
     * @var array Intelligent splitting sub-segment list.
     */
    public $SegmentSet;

    /**
     * @var string Video abstract, used for offline scenarios.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Abstract;

    /**
     * @param array $SegmentSet Intelligent splitting sub-segment list.
     * @param string $Abstract Video abstract, used for offline scenarios.
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new SegmentRecognitionItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("Abstract",$param) and $param["Abstract"] !== null) {
            $this->Abstract = $param["Abstract"];
        }
    }
}
