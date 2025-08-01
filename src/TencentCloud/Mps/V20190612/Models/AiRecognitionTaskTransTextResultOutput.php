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
 * The translation result.
 *
 * @method array getSegmentSet() Obtain The translated segments.
 * @method void setSegmentSet(array $SegmentSet) Set The translated segments.
 * @method string getSubtitlePath() Obtain The subtitle URL.
 * @method void setSubtitlePath(string $SubtitlePath) Set The subtitle URL.
 */
class AiRecognitionTaskTransTextResultOutput extends AbstractModel
{
    /**
     * @var array The translated segments.
     */
    public $SegmentSet;

    /**
     * @var string The subtitle URL.
     */
    public $SubtitlePath;

    /**
     * @param array $SegmentSet The translated segments.
     * @param string $SubtitlePath The subtitle URL.
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
                $obj = new AiRecognitionTaskTransTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("SubtitlePath",$param) and $param["SubtitlePath"] !== null) {
            $this->SubtitlePath = $param["SubtitlePath"];
        }
    }
}
