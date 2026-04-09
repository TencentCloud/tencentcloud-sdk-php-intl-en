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
 * AI crawler detection configuration.
 *
 * @method string getEnabled() Obtain Whether AI crawler detection is enabled. valid values:.
<li>`on`: Enable;</li>
<li>off: Disable.</li>

 * @method void setEnabled(string $Enabled) Set Whether AI crawler detection is enabled. valid values:.
<li>`on`: Enable;</li>
<li>off: Disable.</li>

 * @method SecurityAction getAction() Obtain AI crawler detection execution action. this field is required when Enabled is on. valid values for the Name parameter in SecurityAction:.
<Li>Deny: block;</li>.
<Li>Monitor: observation.</li>.
<Li>Allow: pass;</li>.
<li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters only supports JSChallenge and ManagedChallenge.</li>.
 * @method void setAction(SecurityAction $Action) Set AI crawler detection execution action. this field is required when Enabled is on. valid values for the Name parameter in SecurityAction:.
<Li>Deny: block;</li>.
<Li>Monitor: observation.</li>.
<Li>Allow: pass;</li>.
<li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters only supports JSChallenge and ManagedChallenge.</li>.
 */
class AICrawlerDetection extends AbstractModel
{
    /**
     * @var string Whether AI crawler detection is enabled. valid values:.
<li>`on`: Enable;</li>
<li>off: Disable.</li>

     */
    public $Enabled;

    /**
     * @var SecurityAction AI crawler detection execution action. this field is required when Enabled is on. valid values for the Name parameter in SecurityAction:.
<Li>Deny: block;</li>.
<Li>Monitor: observation.</li>.
<Li>Allow: pass;</li>.
<li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters only supports JSChallenge and ManagedChallenge.</li>.
     */
    public $Action;

    /**
     * @param string $Enabled Whether AI crawler detection is enabled. valid values:.
<li>`on`: Enable;</li>
<li>off: Disable.</li>

     * @param SecurityAction $Action AI crawler detection execution action. this field is required when Enabled is on. valid values for the Name parameter in SecurityAction:.
<Li>Deny: block;</li>.
<Li>Monitor: observation.</li>.
<Li>Allow: pass;</li>.
<li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters only supports JSChallenge and ManagedChallenge.</li>.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }
    }
}
