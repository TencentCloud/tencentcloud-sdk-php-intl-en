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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Web security Challenge additional parameter.
 *
 * @method string getChallengeOption() Obtain Safe execution challenge actions. valid values: <li> InterstitialChallenge: interstitial challenge;</li> <li> InlineChallenge: embedded challenge;</li> <li> JSChallenge: JavaScript challenge;</li> <li> ManagedChallenge: managed challenge.</li>.
 * @method void setChallengeOption(string $ChallengeOption) Set Safe execution challenge actions. valid values: <li> InterstitialChallenge: interstitial challenge;</li> <li> InlineChallenge: embedded challenge;</li> <li> JSChallenge: JavaScript challenge;</li> <li> ManagedChallenge: managed challenge.</li>.
 * @method string getInterval() Obtain Specifies the time interval for challenge repetition. this field is required when Name is InterstitialChallenge/InlineChallenge. default value is 300s. supported units: <li>s: second, value ranges from 1 to 60;</li><li>m: minute, value ranges from 1 to 60;</li><li>h: hour, value ranges from 1 to 24.</li>.

 * @method void setInterval(string $Interval) Set Specifies the time interval for challenge repetition. this field is required when Name is InterstitialChallenge/InlineChallenge. default value is 300s. supported units: <li>s: second, value ranges from 1 to 60;</li><li>m: minute, value ranges from 1 to 60;</li><li>h: hour, value ranges from 1 to 24.</li>.

 * @method string getAttesterId() Obtain Client authentication method ID. this field is required when Name is InterstitialChallenge/InlineChallenge.
 * @method void setAttesterId(string $AttesterId) Set Client authentication method ID. this field is required when Name is InterstitialChallenge/InlineChallenge.
 */
class ChallengeActionParameters extends AbstractModel
{
    /**
     * @var string Safe execution challenge actions. valid values: <li> InterstitialChallenge: interstitial challenge;</li> <li> InlineChallenge: embedded challenge;</li> <li> JSChallenge: JavaScript challenge;</li> <li> ManagedChallenge: managed challenge.</li>.
     */
    public $ChallengeOption;

    /**
     * @var string Specifies the time interval for challenge repetition. this field is required when Name is InterstitialChallenge/InlineChallenge. default value is 300s. supported units: <li>s: second, value ranges from 1 to 60;</li><li>m: minute, value ranges from 1 to 60;</li><li>h: hour, value ranges from 1 to 24.</li>.

     */
    public $Interval;

    /**
     * @var string Client authentication method ID. this field is required when Name is InterstitialChallenge/InlineChallenge.
     */
    public $AttesterId;

    /**
     * @param string $ChallengeOption Safe execution challenge actions. valid values: <li> InterstitialChallenge: interstitial challenge;</li> <li> InlineChallenge: embedded challenge;</li> <li> JSChallenge: JavaScript challenge;</li> <li> ManagedChallenge: managed challenge.</li>.
     * @param string $Interval Specifies the time interval for challenge repetition. this field is required when Name is InterstitialChallenge/InlineChallenge. default value is 300s. supported units: <li>s: second, value ranges from 1 to 60;</li><li>m: minute, value ranges from 1 to 60;</li><li>h: hour, value ranges from 1 to 24.</li>.

     * @param string $AttesterId Client authentication method ID. this field is required when Name is InterstitialChallenge/InlineChallenge.
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
        if (array_key_exists("ChallengeOption",$param) and $param["ChallengeOption"] !== null) {
            $this->ChallengeOption = $param["ChallengeOption"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("AttesterId",$param) and $param["AttesterId"] !== null) {
            $this->AttesterId = $param["AttesterId"];
        }
    }
}
