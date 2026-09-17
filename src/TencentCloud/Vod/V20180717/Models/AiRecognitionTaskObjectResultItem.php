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
 * 
 *
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method array getSegmentSet() Obtain 
 * @method void setSegmentSet(array $SegmentSet) Set 
 * @method array getRecognitionSegmentSet() Obtain 
 * @method void setRecognitionSegmentSet(array $RecognitionSegmentSet) Set 
 */
class AiRecognitionTaskObjectResultItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var array 
     * @deprecated
     */
    public $SegmentSet;

    /**
     * @var array 
     */
    public $RecognitionSegmentSet;

    /**
     * @param string $Name 
     * @param array $SegmentSet 
     * @param array $RecognitionSegmentSet 
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new AiRecognitionTaskObjectSeqmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("RecognitionSegmentSet",$param) and $param["RecognitionSegmentSet"] !== null) {
            $this->RecognitionSegmentSet = [];
            foreach ($param["RecognitionSegmentSet"] as $key => $value){
                $obj = new AiRecognitionTaskObjectSegmentItem();
                $obj->deserialize($value);
                array_push($this->RecognitionSegmentSet, $obj);
            }
        }
    }
}
