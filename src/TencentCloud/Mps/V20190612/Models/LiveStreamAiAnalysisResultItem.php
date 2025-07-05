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
 * 
 *
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method array getSegmentResultSet() Obtain 
 * @method void setSegmentResultSet(array $SegmentResultSet) Set 
 */
class LiveStreamAiAnalysisResultItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $Type;

    /**
     * @var array 
     */
    public $SegmentResultSet;

    /**
     * @param string $Type 
     * @param array $SegmentResultSet 
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SegmentResultSet",$param) and $param["SegmentResultSet"] !== null) {
            $this->SegmentResultSet = [];
            foreach ($param["SegmentResultSet"] as $key => $value){
                $obj = new SegmentRecognitionItem();
                $obj->deserialize($value);
                array_push($this->SegmentResultSet, $obj);
            }
        }
    }
}
