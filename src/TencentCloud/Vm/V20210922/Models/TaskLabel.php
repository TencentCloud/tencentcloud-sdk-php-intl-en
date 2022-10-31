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
 * Task output tag
 *
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
 * @method integer getScore() Obtain Score. Value range: 0-100.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScore(integer $Score) Set Score. Value range: 0-100.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskLabel extends AbstractModel
{
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
     * @var integer Score. Value range: 0-100.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Score;

    /**
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
     * @param integer $Score Score. Value range: 0-100.
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
