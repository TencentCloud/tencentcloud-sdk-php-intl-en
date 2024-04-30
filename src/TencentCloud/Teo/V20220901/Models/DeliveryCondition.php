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
 * @method array getConditions() Obtain Log filter conditions. Detailed filter conditions are as follows:
<li>EdgeResponseStatusCode: Filter by status code returned to the client by the EdgeOne node.<br>      Supported operators: equal, great, less, great_equal, less_equal<br>      Value range: Any integer greater than or equal to 0</li>
<li>OriginResponseStatusCode: Filter by response status code of the origin server.<br>      Supported operators: equal, great, less, great_equal, less_equal<br>      Value range: Any integer greater than or equal to -1</li>
<li>SecurityAction: Filter by final action after the request hits the security rule.<br>      Supported operators: equal<br>      Options are as follows:<br>      -: Unknown/unhit<br>      Monitor: Log only<br>      JSChallenge: JavaScript challenge<br>      Deny: Interception<br>      Allow: Allow<br>      BlockIP: IP ban<br>      Redirect: Redirect<br>      ReturnCustomPage: Return to custom page<br>      ManagedChallenge: Managed challenge<br>      Silence: Silence<br>      LongDelay: Response after a long wait<br>      ShortDelay: Response after a short wait</li>
<li>SecurityModule: Filter according to the name of the security module that ultimately handles the request. <br>      Supported operators: equal<br>      Options are as follows:<br>      -: Unknown/miss<br>      CustomRule: Web protection - custom rules<br>      RateLimitingCustomRule: Web protection - rate limiting rule<br>      ManagedRule: Web Protection - Managed Rules<br>      L7DDoS: Web Protection - CC Attack Protection<br>      BotManagement: Bot Management - Bot Basic Management<br>      BotClientReputation: Bot Management - Client Reputation Analysis<br>      BotBehaviorAnalysis: Bot Management - Bot Intelligence Analysis<br>      BotCustomRule: Bot Management - Custom Bot Rules<br>      BotActiveDetection: Bot Management - Active Detection</li>
 * @method void setConditions(array $Conditions) Set Log filter conditions. Detailed filter conditions are as follows:
<li>EdgeResponseStatusCode: Filter by status code returned to the client by the EdgeOne node.<br>      Supported operators: equal, great, less, great_equal, less_equal<br>      Value range: Any integer greater than or equal to 0</li>
<li>OriginResponseStatusCode: Filter by response status code of the origin server.<br>      Supported operators: equal, great, less, great_equal, less_equal<br>      Value range: Any integer greater than or equal to -1</li>
<li>SecurityAction: Filter by final action after the request hits the security rule.<br>      Supported operators: equal<br>      Options are as follows:<br>      -: Unknown/unhit<br>      Monitor: Log only<br>      JSChallenge: JavaScript challenge<br>      Deny: Interception<br>      Allow: Allow<br>      BlockIP: IP ban<br>      Redirect: Redirect<br>      ReturnCustomPage: Return to custom page<br>      ManagedChallenge: Managed challenge<br>      Silence: Silence<br>      LongDelay: Response after a long wait<br>      ShortDelay: Response after a short wait</li>
<li>SecurityModule: Filter according to the name of the security module that ultimately handles the request. <br>      Supported operators: equal<br>      Options are as follows:<br>      -: Unknown/miss<br>      CustomRule: Web protection - custom rules<br>      RateLimitingCustomRule: Web protection - rate limiting rule<br>      ManagedRule: Web Protection - Managed Rules<br>      L7DDoS: Web Protection - CC Attack Protection<br>      BotManagement: Bot Management - Bot Basic Management<br>      BotClientReputation: Bot Management - Client Reputation Analysis<br>      BotBehaviorAnalysis: Bot Management - Bot Intelligence Analysis<br>      BotCustomRule: Bot Management - Custom Bot Rules<br>      BotActiveDetection: Bot Management - Active Detection</li>
 */
class DeliveryCondition extends AbstractModel
{
    /**
     * @var array Log filter conditions. Detailed filter conditions are as follows:
<li>EdgeResponseStatusCode: Filter by status code returned to the client by the EdgeOne node.<br>      Supported operators: equal, great, less, great_equal, less_equal<br>      Value range: Any integer greater than or equal to 0</li>
<li>OriginResponseStatusCode: Filter by response status code of the origin server.<br>      Supported operators: equal, great, less, great_equal, less_equal<br>      Value range: Any integer greater than or equal to -1</li>
<li>SecurityAction: Filter by final action after the request hits the security rule.<br>      Supported operators: equal<br>      Options are as follows:<br>      -: Unknown/unhit<br>      Monitor: Log only<br>      JSChallenge: JavaScript challenge<br>      Deny: Interception<br>      Allow: Allow<br>      BlockIP: IP ban<br>      Redirect: Redirect<br>      ReturnCustomPage: Return to custom page<br>      ManagedChallenge: Managed challenge<br>      Silence: Silence<br>      LongDelay: Response after a long wait<br>      ShortDelay: Response after a short wait</li>
<li>SecurityModule: Filter according to the name of the security module that ultimately handles the request. <br>      Supported operators: equal<br>      Options are as follows:<br>      -: Unknown/miss<br>      CustomRule: Web protection - custom rules<br>      RateLimitingCustomRule: Web protection - rate limiting rule<br>      ManagedRule: Web Protection - Managed Rules<br>      L7DDoS: Web Protection - CC Attack Protection<br>      BotManagement: Bot Management - Bot Basic Management<br>      BotClientReputation: Bot Management - Client Reputation Analysis<br>      BotBehaviorAnalysis: Bot Management - Bot Intelligence Analysis<br>      BotCustomRule: Bot Management - Custom Bot Rules<br>      BotActiveDetection: Bot Management - Active Detection</li>
     */
    public $Conditions;

    /**
     * @param array $Conditions Log filter conditions. Detailed filter conditions are as follows:
<li>EdgeResponseStatusCode: Filter by status code returned to the client by the EdgeOne node.<br>      Supported operators: equal, great, less, great_equal, less_equal<br>      Value range: Any integer greater than or equal to 0</li>
<li>OriginResponseStatusCode: Filter by response status code of the origin server.<br>      Supported operators: equal, great, less, great_equal, less_equal<br>      Value range: Any integer greater than or equal to -1</li>
<li>SecurityAction: Filter by final action after the request hits the security rule.<br>      Supported operators: equal<br>      Options are as follows:<br>      -: Unknown/unhit<br>      Monitor: Log only<br>      JSChallenge: JavaScript challenge<br>      Deny: Interception<br>      Allow: Allow<br>      BlockIP: IP ban<br>      Redirect: Redirect<br>      ReturnCustomPage: Return to custom page<br>      ManagedChallenge: Managed challenge<br>      Silence: Silence<br>      LongDelay: Response after a long wait<br>      ShortDelay: Response after a short wait</li>
<li>SecurityModule: Filter according to the name of the security module that ultimately handles the request. <br>      Supported operators: equal<br>      Options are as follows:<br>      -: Unknown/miss<br>      CustomRule: Web protection - custom rules<br>      RateLimitingCustomRule: Web protection - rate limiting rule<br>      ManagedRule: Web Protection - Managed Rules<br>      L7DDoS: Web Protection - CC Attack Protection<br>      BotManagement: Bot Management - Bot Basic Management<br>      BotClientReputation: Bot Management - Client Reputation Analysis<br>      BotBehaviorAnalysis: Bot Management - Bot Intelligence Analysis<br>      BotCustomRule: Bot Management - Custom Bot Rules<br>      BotActiveDetection: Bot Management - Active Detection</li>
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
