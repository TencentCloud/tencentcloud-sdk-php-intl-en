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
 * Information about the live streaming summary result.
 *
 * @method array getParagraphs() Obtain Segmentation result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParagraphs(array $Paragraphs) Set Segmentation result.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LiveAiAnalysisDescriptionItem extends AbstractModel
{
    /**
     * @var array Segmentation result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Paragraphs;

    /**
     * @param array $Paragraphs Segmentation result.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Paragraphs",$param) and $param["Paragraphs"] !== null) {
            $this->Paragraphs = [];
            foreach ($param["Paragraphs"] as $key => $value){
                $obj = new LiveAiParagraphInfo();
                $obj->deserialize($value);
                array_push($this->Paragraphs, $obj);
            }
        }
    }
}
