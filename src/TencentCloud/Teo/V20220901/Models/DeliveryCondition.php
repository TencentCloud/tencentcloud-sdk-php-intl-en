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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Real-time log delivery conditions used to define the scope of log delivery. The relationship between items in a DeliveryCondition array is "or", whereas the relationship between items in an inner Conditions array is "and".
 *
 * @method array getConditions() Obtain Log filter criteria. The detailed filter criteria are as follows:
<li>EdgeResponseStatusCode: Filter by response status code returned from the EdgeOne node to the client.<br>?? Supported operators: equal, great, less, great_equal, less_equal<br>?? Valid values: any integer greater than or equal to 0</li>
<li>OriginResponseStatusCode: Filter by response status code of the origin server.<br>?? Supported operators: equal, great, less, great_equal, less_equal.<br>?? Valid values: any integer greater than or equal to -1</li>
<li>SecurityAction: Filter by final action after the request matches a security rule.<br>?? Supported operator: equal<br>?? Options:<br>?? -: unknown/not matched<br>?? Monitor: observation<br>?? JSChallenge: JavaScript challenge<br>?? Deny: blocking<br>?? Allow: allowing<br>?? BlockIP: IP blocking<br>?? Redirect: redirection<br>?? ReturnCustomPage: returning to a custom page<br>?? ManagedChallenge: managed challenge<br>?? Silence: silence<br>?? LongDelay: response after a long delay<br>?? ShortDelay: response after a short delay</li>
<li>SecurityModule: Filter by name of the security module finally handling the request.<br>??Supported operator: equal<br>??Options:<br>?? -: unknown/not matched<br>?? CustomRule: Custom Rules in Web Protection<br>?? RateLimitingCustomRule: Rate Limiting Rules in Web Protection<br>?? ManagedRule: Managed Rules in Web Protection<br>?? L7DDoS: CC Attack Defense in Web Protection<br>?? BotManagement: Bot Basic Management in Bot Management<br>?? BotClientReputation: Client Reputation Analysis in Bot Management<br>?? BotBehaviorAnalysis: Bot Intelligent Analysis in Bot Management<br>?? BotCustomRule: Custom Bot Rules in Bot Management<br>?? BotActiveDetection: Active Detection in Bot Management</li>
 * @method void setConditions(array $Conditions) Set Log filter criteria. The detailed filter criteria are as follows:
<li>EdgeResponseStatusCode: Filter by response status code returned from the EdgeOne node to the client.<br>?? Supported operators: equal, great, less, great_equal, less_equal<br>?? Valid values: any integer greater than or equal to 0</li>
<li>OriginResponseStatusCode: Filter by response status code of the origin server.<br>?? Supported operators: equal, great, less, great_equal, less_equal.<br>?? Valid values: any integer greater than or equal to -1</li>
<li>SecurityAction: Filter by final action after the request matches a security rule.<br>?? Supported operator: equal<br>?? Options:<br>?? -: unknown/not matched<br>?? Monitor: observation<br>?? JSChallenge: JavaScript challenge<br>?? Deny: blocking<br>?? Allow: allowing<br>?? BlockIP: IP blocking<br>?? Redirect: redirection<br>?? ReturnCustomPage: returning to a custom page<br>?? ManagedChallenge: managed challenge<br>?? Silence: silence<br>?? LongDelay: response after a long delay<br>?? ShortDelay: response after a short delay</li>
<li>SecurityModule: Filter by name of the security module finally handling the request.<br>??Supported operator: equal<br>??Options:<br>?? -: unknown/not matched<br>?? CustomRule: Custom Rules in Web Protection<br>?? RateLimitingCustomRule: Rate Limiting Rules in Web Protection<br>?? ManagedRule: Managed Rules in Web Protection<br>?? L7DDoS: CC Attack Defense in Web Protection<br>?? BotManagement: Bot Basic Management in Bot Management<br>?? BotClientReputation: Client Reputation Analysis in Bot Management<br>?? BotBehaviorAnalysis: Bot Intelligent Analysis in Bot Management<br>?? BotCustomRule: Custom Bot Rules in Bot Management<br>?? BotActiveDetection: Active Detection in Bot Management</li>
 */
class DeliveryCondition extends AbstractModel
{
    /**
     * @var array Log filter criteria. The detailed filter criteria are as follows:
<li>EdgeResponseStatusCode: Filter by response status code returned from the EdgeOne node to the client.<br>?? Supported operators: equal, great, less, great_equal, less_equal<br>?? Valid values: any integer greater than or equal to 0</li>
<li>OriginResponseStatusCode: Filter by response status code of the origin server.<br>?? Supported operators: equal, great, less, great_equal, less_equal.<br>?? Valid values: any integer greater than or equal to -1</li>
<li>SecurityAction: Filter by final action after the request matches a security rule.<br>?? Supported operator: equal<br>?? Options:<br>?? -: unknown/not matched<br>?? Monitor: observation<br>?? JSChallenge: JavaScript challenge<br>?? Deny: blocking<br>?? Allow: allowing<br>?? BlockIP: IP blocking<br>?? Redirect: redirection<br>?? ReturnCustomPage: returning to a custom page<br>?? ManagedChallenge: managed challenge<br>?? Silence: silence<br>?? LongDelay: response after a long delay<br>?? ShortDelay: response after a short delay</li>
<li>SecurityModule: Filter by name of the security module finally handling the request.<br>??Supported operator: equal<br>??Options:<br>?? -: unknown/not matched<br>?? CustomRule: Custom Rules in Web Protection<br>?? RateLimitingCustomRule: Rate Limiting Rules in Web Protection<br>?? ManagedRule: Managed Rules in Web Protection<br>?? L7DDoS: CC Attack Defense in Web Protection<br>?? BotManagement: Bot Basic Management in Bot Management<br>?? BotClientReputation: Client Reputation Analysis in Bot Management<br>?? BotBehaviorAnalysis: Bot Intelligent Analysis in Bot Management<br>?? BotCustomRule: Custom Bot Rules in Bot Management<br>?? BotActiveDetection: Active Detection in Bot Management</li>
     */
    public $Conditions;

    /**
     * @param array $Conditions Log filter criteria. The detailed filter criteria are as follows:
<li>EdgeResponseStatusCode: Filter by response status code returned from the EdgeOne node to the client.<br>?? Supported operators: equal, great, less, great_equal, less_equal<br>?? Valid values: any integer greater than or equal to 0</li>
<li>OriginResponseStatusCode: Filter by response status code of the origin server.<br>?? Supported operators: equal, great, less, great_equal, less_equal.<br>?? Valid values: any integer greater than or equal to -1</li>
<li>SecurityAction: Filter by final action after the request matches a security rule.<br>?? Supported operator: equal<br>?? Options:<br>?? -: unknown/not matched<br>?? Monitor: observation<br>?? JSChallenge: JavaScript challenge<br>?? Deny: blocking<br>?? Allow: allowing<br>?? BlockIP: IP blocking<br>?? Redirect: redirection<br>?? ReturnCustomPage: returning to a custom page<br>?? ManagedChallenge: managed challenge<br>?? Silence: silence<br>?? LongDelay: response after a long delay<br>?? ShortDelay: response after a short delay</li>
<li>SecurityModule: Filter by name of the security module finally handling the request.<br>??Supported operator: equal<br>??Options:<br>?? -: unknown/not matched<br>?? CustomRule: Custom Rules in Web Protection<br>?? RateLimitingCustomRule: Rate Limiting Rules in Web Protection<br>?? ManagedRule: Managed Rules in Web Protection<br>?? L7DDoS: CC Attack Defense in Web Protection<br>?? BotManagement: Bot Basic Management in Bot Management<br>?? BotClientReputation: Client Reputation Analysis in Bot Management<br>?? BotBehaviorAnalysis: Bot Intelligent Analysis in Bot Management<br>?? BotCustomRule: Custom Bot Rules in Bot Management<br>?? BotActiveDetection: Active Detection in Bot Management</li>
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
        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }
    }
}
