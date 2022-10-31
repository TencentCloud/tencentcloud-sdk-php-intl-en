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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image recognition result in the specific scenario
 *
 * @method string getName() Obtain Task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Task name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getText() Obtain OCR-recognized text
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setText(string $Text) Set OCR-recognized text
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ImageResultsResultDetailLocation getLocation() Obtain Location information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocation(ImageResultsResultDetailLocation $Location) Set Location information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLabel() Obtain Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabel(string $Label) Set Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLibId() Obtain Library ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLibId(string $LibId) Set Library ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLibName() Obtain Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLibName(string $LibName) Set Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getKeywords() Obtain Hit keyword
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeywords(array $Keywords) Set Hit keyword
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSuggestion() Obtain Suggestion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuggestion(string $Suggestion) Set Suggestion
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScore() Obtain Score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScore(integer $Score) Set Score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubLabelCode() Obtain Subtag under the current tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubLabelCode(string $SubLabelCode) Set Subtag under the current tag
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImageResultsResultDetail extends AbstractModel
{
    /**
     * @var string Task name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string OCR-recognized text
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Text;

    /**
     * @var ImageResultsResultDetailLocation Location information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Location;

    /**
     * @var string Tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Label;

    /**
     * @var string Library ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LibId;

    /**
     * @var string Database name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LibName;

    /**
     * @var array Hit keyword
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Keywords;

    /**
     * @var string Suggestion
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Suggestion;

    /**
     * @var integer Score
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Score;

    /**
     * @var string Subtag under the current tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubLabelCode;

    /**
     * @param string $Name Task name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Text OCR-recognized text
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ImageResultsResultDetailLocation $Location Location information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Label Tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LibId Library ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LibName Database name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Keywords Hit keyword
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Suggestion Suggestion
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Score Score
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubLabelCode Subtag under the current tag
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new ImageResultsResultDetailLocation();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("SubLabelCode",$param) and $param["SubLabelCode"] !== null) {
            $this->SubLabelCode = $param["SubLabelCode"];
        }
    }
}
