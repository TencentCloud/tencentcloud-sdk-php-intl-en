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
 * Result details
 *
 * @method integer getHitFlag() Obtain Whether the video content is hit
`0`: No
`1`: Yes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHitFlag(integer $HitFlag) Set Whether the video content is hit
`0`: No
`1`: Yes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLabel() Obtain Hit tag
`Porn`: Pornographic
`Sexy`: Sexy
`Polity`: Political
`Illegal`: Illegal
`Abuse`: Abusive
`Terror`: Violence and terrorism
`Ad`: Advertising
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabel(string $Label) Set Hit tag
`Porn`: Pornographic
`Sexy`: Sexy
`Polity`: Political
`Illegal`: Illegal
`Abuse`: Abusive
`Terror`: Violence and terrorism
`Ad`: Advertising
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
 * @method integer getScore() Obtain Score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScore(integer $Score) Set Score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getResults() Obtain Captured images
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResults(array $Results) Set Captured images
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain Image URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Image URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtra() Obtain Additional field
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtra(string $Extra) Set Additional field
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImageResult extends AbstractModel
{
    /**
     * @var integer Whether the video content is hit
`0`: No
`1`: Yes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HitFlag;

    /**
     * @var string Hit tag
`Porn`: Pornographic
`Sexy`: Sexy
`Polity`: Political
`Illegal`: Illegal
`Abuse`: Abusive
`Terror`: Violence and terrorism
`Ad`: Advertising
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Label;

    /**
     * @var string Suggestion. Values:
`Pass`: You’re suggested to allow the video to pass.
`Review`: You’re suggested to take a manual review.
`Block`: You’re suggested to block the non-compliant video.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Suggestion;

    /**
     * @var integer Score
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Score;

    /**
     * @var array Captured images
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Results;

    /**
     * @var string Image URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var string Additional field
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Extra;

    /**
     * @param integer $HitFlag Whether the video content is hit
`0`: No
`1`: Yes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Label Hit tag
`Porn`: Pornographic
`Sexy`: Sexy
`Polity`: Political
`Illegal`: Illegal
`Abuse`: Abusive
`Terror`: Violence and terrorism
`Ad`: Advertising
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Suggestion Suggestion. Values:
`Pass`: You’re suggested to allow the video to pass.
`Review`: You’re suggested to take a manual review.
`Block`: You’re suggested to block the non-compliant video.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Score Score
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Results Captured images
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Url Image URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Extra Additional field
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
        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new ImageResultResult();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }
    }
}
