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
 * Intelligent description information.
 *
 * @method string getDescription() Obtain Intelligent description.
 * @method void setDescription(string $Description) Set Intelligent description.
 * @method float getConfidence() Obtain Confidence of the intelligent description, with a value range from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Confidence of the intelligent description, with a value range from 0 to 100.
 * @method string getTitle() Obtain Intelligent description title.
 * @method void setTitle(string $Title) Set Intelligent description title.
 * @method array getKeywords() Obtain Intelligent description keywords.
 * @method void setKeywords(array $Keywords) Set Intelligent description keywords.
 * @method array getParagraphs() Obtain Segmentation result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParagraphs(array $Paragraphs) Set Segmentation result.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MediaAiAnalysisDescriptionItem extends AbstractModel
{
    /**
     * @var string Intelligent description.
     */
    public $Description;

    /**
     * @var float Confidence of the intelligent description, with a value range from 0 to 100.
     */
    public $Confidence;

    /**
     * @var string Intelligent description title.
     */
    public $Title;

    /**
     * @var array Intelligent description keywords.
     */
    public $Keywords;

    /**
     * @var array Segmentation result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Paragraphs;

    /**
     * @param string $Description Intelligent description.
     * @param float $Confidence Confidence of the intelligent description, with a value range from 0 to 100.
     * @param string $Title Intelligent description title.
     * @param array $Keywords Intelligent description keywords.
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Paragraphs",$param) and $param["Paragraphs"] !== null) {
            $this->Paragraphs = [];
            foreach ($param["Paragraphs"] as $key => $value){
                $obj = new AiParagraphInfo();
                $obj->deserialize($value);
                array_push($this->Paragraphs, $obj);
            }
        }
    }
}
