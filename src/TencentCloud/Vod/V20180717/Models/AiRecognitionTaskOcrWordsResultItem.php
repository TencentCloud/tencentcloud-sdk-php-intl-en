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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Text keyword recognition result.
 *
 * @method string getWord() Obtain Text keyword.
 * @method void setWord(string $Word) Set Text keyword.
 * @method array getSegmentSet() Obtain List of segments that contain a text keyword.
 * @method void setSegmentSet(array $SegmentSet) Set List of segments that contain a text keyword.
 */
class AiRecognitionTaskOcrWordsResultItem extends AbstractModel
{
    /**
     * @var string Text keyword.
     */
    public $Word;

    /**
     * @var array List of segments that contain a text keyword.
     */
    public $SegmentSet;

    /**
     * @param string $Word Text keyword.
     * @param array $SegmentSet List of segments that contain a text keyword.
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
        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new AiRecognitionTaskOcrWordsSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
