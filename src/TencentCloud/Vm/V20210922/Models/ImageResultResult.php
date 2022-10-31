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
 * Sub-result of the image output result
 *
 * @method string getScene() Obtain Scenario
`Porn`: Pornographic
`Sexy`: Sexy
`Polity`: Political
`Illegal`: Illegal
`Abuse`: Abusive
`Terror`: Violence and terrorism
`Ad`: Advertising
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScene(string $Scene) Set Scenario
`Porn`: Pornographic
`Sexy`: Sexy
`Polity`: Political
`Illegal`: Illegal
`Abuse`: Abusive
`Terror`: Violence and terrorism
`Ad`: Advertising
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHitFlag() Obtain Whether the video content is hit
`0`: No
`1`: Yes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHitFlag(integer $HitFlag) Set Whether the video content is hit
`0`: No
`1`: Yes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSuggestion() Obtain Suggestion. Values:
`Pass`: You’re suggested to allow the video to pass.
`Review`: You’re suggested to take a manual review.
`Block`: You’re suggested to block the non-compliant video.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuggestion(string $Suggestion) Set Suggestion. Values:
`Pass`: You’re suggested to allow the video to pass.
`Review`: You’re suggested to take a manual review.
`Block`: You’re suggested to block the non-compliant video.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLabel() Obtain Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabel(string $Label) Set Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubLabel() Obtain Subtag under the current tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubLabel(string $SubLabel) Set Subtag under the current tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScore() Obtain Score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScore(integer $Score) Set Score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNames() Obtain If the hit video contains political content, the list of politicians will be returned; otherwise a null value is returned.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNames(array $Names) Set If the hit video contains political content, the list of politicians will be returned; otherwise a null value is returned.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getText() Obtain OCR-recognized text in the image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setText(string $Text) Set OCR-recognized text in the image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDetails() Obtain Other details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetails(array $Details) Set Other details
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImageResultResult extends AbstractModel
{
    /**
     * @var string Scenario
`Porn`: Pornographic
`Sexy`: Sexy
`Polity`: Political
`Illegal`: Illegal
`Abuse`: Abusive
`Terror`: Violence and terrorism
`Ad`: Advertising
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Scene;

    /**
     * @var integer Whether the video content is hit
`0`: No
`1`: Yes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HitFlag;

    /**
     * @var string Suggestion. Values:
`Pass`: You’re suggested to allow the video to pass.
`Review`: You’re suggested to take a manual review.
`Block`: You’re suggested to block the non-compliant video.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Suggestion;

    /**
     * @var string Tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Label;

    /**
     * @var string Subtag under the current tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubLabel;

    /**
     * @var integer Score
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Score;

    /**
     * @var array If the hit video contains political content, the list of politicians will be returned; otherwise a null value is returned.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Names;

    /**
     * @var string OCR-recognized text in the image
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Text;

    /**
     * @var array Other details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Details;

    /**
     * @param string $Scene Scenario
`Porn`: Pornographic
`Sexy`: Sexy
`Polity`: Political
`Illegal`: Illegal
`Abuse`: Abusive
`Terror`: Violence and terrorism
`Ad`: Advertising
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HitFlag Whether the video content is hit
`0`: No
`1`: Yes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Suggestion Suggestion. Values:
`Pass`: You’re suggested to allow the video to pass.
`Review`: You’re suggested to take a manual review.
`Block`: You’re suggested to block the non-compliant video.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Label Tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubLabel Subtag under the current tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Score Score
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Names If the hit video contains political content, the list of politicians will be returned; otherwise a null value is returned.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Text OCR-recognized text in the image
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Details Other details
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new ImageResultsResultDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
