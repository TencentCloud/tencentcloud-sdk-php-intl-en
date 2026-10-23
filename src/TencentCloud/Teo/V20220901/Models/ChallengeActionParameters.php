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
 * Additional parameter for the security executed action when it is a challenge.

This parameter is used for specifying the extra handling action taken by the system when a security rule is hit and a challenge action is executed.
Challenge disposal actions are segmented by ChallengeOption. Different challenge types correspond to different interaction forms and parameter requirements. The system will apply the corresponding parameter configuration according to the selected challenge type.
ChallengeActionParameters supports the following challenge disposition types: <li>Interstitial challenge: responds with a new page and runs the authentication mechanism on the new page. Corresponds to the ChallengeOption value InterstitialChallenge.</li><li>Inline challenge: responds with an SDK challenge. Corresponds to the ChallengeOption value InlineChallenge.</li><li>JavaScript challenge: invisible browser verification. The browser automatically performs verification and shows the requested resource. Corresponds to the ChallengeOption value JSChallenge.</li><li>Managed challenge: responds with a redirect page containing a JavaScript program, used for verifying the browser runtime environment. Corresponds to the ChallengeOption value ManagedChallenge.</li>
 *
 * @method string getChallengeOption() Obtain <p>Specific challenge action for safe execution.</p><p>Enumeration values:</p><ul><li>InterstitialChallenge: interstitial challenge;</li><li>InlineChallenge: embedded challenge (SDK challenge);</li><li>ManagedChallenge: managed challenge. Applicable only to HTML web pages directly accessed by users through a browser. Verification cannot be completed in scenarios such as API interfaces, XHR/AJAX async requests within web pages, mobile apps, and command line tools. Do not configure it;</li><li>JSChallenge: JavaScript challenge. Applicable only to HTML web pages directly accessed by users through a browser. Verification cannot be completed in scenarios such as API interfaces, XHR/AJAX async requests within web pages, mobile apps, and command line tools. Do not configure it.</li></ul>
 * @method void setChallengeOption(string $ChallengeOption) Set <p>Specific challenge action for safe execution.</p><p>Enumeration values:</p><ul><li>InterstitialChallenge: interstitial challenge;</li><li>InlineChallenge: embedded challenge (SDK challenge);</li><li>ManagedChallenge: managed challenge. Applicable only to HTML web pages directly accessed by users through a browser. Verification cannot be completed in scenarios such as API interfaces, XHR/AJAX async requests within web pages, mobile apps, and command line tools. Do not configure it;</li><li>JSChallenge: JavaScript challenge. Applicable only to HTML web pages directly accessed by users through a browser. Verification cannot be completed in scenarios such as API interfaces, XHR/AJAX async requests within web pages, mobile apps, and command line tools. Do not configure it.</li></ul>
 * @method string getInterval() Obtain <p>Time interval for repeating the challenge. This field is required when ChallengeOption is InterstitialChallenge/InlineChallenge. Default value: 300s. Supported units: <li>s: second, value ranges from 1 to 60;</li><li>m: minute, value ranges from 1 to 60;</li><li>h: hour, value ranges from 1 to 24.</li></p>
 * @method void setInterval(string $Interval) Set <p>Time interval for repeating the challenge. This field is required when ChallengeOption is InterstitialChallenge/InlineChallenge. Default value: 300s. Supported units: <li>s: second, value ranges from 1 to 60;</li><li>m: minute, value ranges from 1 to 60;</li><li>h: hour, value ranges from 1 to 24.</li></p>
 * @method string getAttesterId() Obtain <p>Client authentication method ID. This field is required when Name is InterstitialChallenge/InlineChallenge.</p>
 * @method void setAttesterId(string $AttesterId) Set <p>Client authentication method ID. This field is required when Name is InterstitialChallenge/InlineChallenge.</p>
 */
class ChallengeActionParameters extends AbstractModel
{
    /**
     * @var string <p>Specific challenge action for safe execution.</p><p>Enumeration values:</p><ul><li>InterstitialChallenge: interstitial challenge;</li><li>InlineChallenge: embedded challenge (SDK challenge);</li><li>ManagedChallenge: managed challenge. Applicable only to HTML web pages directly accessed by users through a browser. Verification cannot be completed in scenarios such as API interfaces, XHR/AJAX async requests within web pages, mobile apps, and command line tools. Do not configure it;</li><li>JSChallenge: JavaScript challenge. Applicable only to HTML web pages directly accessed by users through a browser. Verification cannot be completed in scenarios such as API interfaces, XHR/AJAX async requests within web pages, mobile apps, and command line tools. Do not configure it.</li></ul>
     */
    public $ChallengeOption;

    /**
     * @var string <p>Time interval for repeating the challenge. This field is required when ChallengeOption is InterstitialChallenge/InlineChallenge. Default value: 300s. Supported units: <li>s: second, value ranges from 1 to 60;</li><li>m: minute, value ranges from 1 to 60;</li><li>h: hour, value ranges from 1 to 24.</li></p>
     */
    public $Interval;

    /**
     * @var string <p>Client authentication method ID. This field is required when Name is InterstitialChallenge/InlineChallenge.</p>
     */
    public $AttesterId;

    /**
     * @param string $ChallengeOption <p>Specific challenge action for safe execution.</p><p>Enumeration values:</p><ul><li>InterstitialChallenge: interstitial challenge;</li><li>InlineChallenge: embedded challenge (SDK challenge);</li><li>ManagedChallenge: managed challenge. Applicable only to HTML web pages directly accessed by users through a browser. Verification cannot be completed in scenarios such as API interfaces, XHR/AJAX async requests within web pages, mobile apps, and command line tools. Do not configure it;</li><li>JSChallenge: JavaScript challenge. Applicable only to HTML web pages directly accessed by users through a browser. Verification cannot be completed in scenarios such as API interfaces, XHR/AJAX async requests within web pages, mobile apps, and command line tools. Do not configure it.</li></ul>
     * @param string $Interval <p>Time interval for repeating the challenge. This field is required when ChallengeOption is InterstitialChallenge/InlineChallenge. Default value: 300s. Supported units: <li>s: second, value ranges from 1 to 60;</li><li>m: minute, value ranges from 1 to 60;</li><li>h: hour, value ranges from 1 to 24.</li></p>
     * @param string $AttesterId <p>Client authentication method ID. This field is required when Name is InterstitialChallenge/InlineChallenge.</p>
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
