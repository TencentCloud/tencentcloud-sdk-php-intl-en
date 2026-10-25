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
 * Real-time log delivery conditions, used to define the scope of delivered logs. Multiple items in the `DeliveryCondition` array are in an "OR" relationship, and multiple items in the inner `Conditions` array are in an "AND" relationship.
 *
 * @method array getConditions() Obtain <p>Log filter conditions. The supported conditions are as follows:<ul><li>`EdgeResponseStatusCode`: filters by the status code that the EdgeOne node returns to the client.<ul><li>Supported operators: `equal`, `great`, `less`, `great_equal`, `less_equal`</li><li>Value range: any integer greater than or equal to 0</li></ul></li><li>`OriginResponseStatusCode`: filters by the status code returned by the origin server.<ul><li>Supported operators: `equal`, `great`, `less`, `great_equal`, `less_equal`</li><li>Value range: any integer greater than or equal to -1</li></ul></li><li>`SecurityAction`: filters by the final action taken after the request hits a security rule.<ul><li>Supported operators: `equal`</li><li>Valid values:<ul><li>`-`: unknown or no rule hit</li><li>`Monitor`: Monitor</li><li>`JSChallenge`: JavaScript Challenge</li><li>`Deny`: Deny</li><li>`Allow`: Allow</li><li>`BlockIP`: Block IP</li><li>`Redirect`: Redirect</li><li>`ReturnCustomPage`: Return custom page</li><li>`ManagedChallenge`: Managed Challenge</li><li>`Silence`: Silence</li><li>`LongDelay`: Respond after a long delay</li><li>`ShortDelay`: Respond after a short delay</li></ul></li></ul></li><li>`SecurityModule`: filters by the name of the security module that finally handled the request.<ul><li>Supported operators: `equal`</li><li>Valid values:<ul><li>`-`: unknown or no rule hit</li><li>`CustomRule`: Web Security - Custom Rules</li><li>`RateLimitingCustomRule`: Web Security - Rate Limiting Rules</li><li>`ManagedRule`: Web Security - Managed Rules</li><li>`L7DDoS`: Web Security - CC Attack Defense</li><li>`BotManagement`: Bot Management - Basic Bot Management</li><li>`BotClientReputation`: Bot Management - Client Reputation Analysis</li><li>`BotBehaviorAnalysis`: Bot Management - Intelligent Bot Analysis</li><li>`BotCustomRule`: Bot Management - Custom Bot Rules</li><li>`BotActiveDetection`: Bot Management - Active Detection</li></ul></li></ul></li></ul></p>
 * @method void setConditions(array $Conditions) Set <p>Log filter conditions. The supported conditions are as follows:<ul><li>`EdgeResponseStatusCode`: filters by the status code that the EdgeOne node returns to the client.<ul><li>Supported operators: `equal`, `great`, `less`, `great_equal`, `less_equal`</li><li>Value range: any integer greater than or equal to 0</li></ul></li><li>`OriginResponseStatusCode`: filters by the status code returned by the origin server.<ul><li>Supported operators: `equal`, `great`, `less`, `great_equal`, `less_equal`</li><li>Value range: any integer greater than or equal to -1</li></ul></li><li>`SecurityAction`: filters by the final action taken after the request hits a security rule.<ul><li>Supported operators: `equal`</li><li>Valid values:<ul><li>`-`: unknown or no rule hit</li><li>`Monitor`: Monitor</li><li>`JSChallenge`: JavaScript Challenge</li><li>`Deny`: Deny</li><li>`Allow`: Allow</li><li>`BlockIP`: Block IP</li><li>`Redirect`: Redirect</li><li>`ReturnCustomPage`: Return custom page</li><li>`ManagedChallenge`: Managed Challenge</li><li>`Silence`: Silence</li><li>`LongDelay`: Respond after a long delay</li><li>`ShortDelay`: Respond after a short delay</li></ul></li></ul></li><li>`SecurityModule`: filters by the name of the security module that finally handled the request.<ul><li>Supported operators: `equal`</li><li>Valid values:<ul><li>`-`: unknown or no rule hit</li><li>`CustomRule`: Web Security - Custom Rules</li><li>`RateLimitingCustomRule`: Web Security - Rate Limiting Rules</li><li>`ManagedRule`: Web Security - Managed Rules</li><li>`L7DDoS`: Web Security - CC Attack Defense</li><li>`BotManagement`: Bot Management - Basic Bot Management</li><li>`BotClientReputation`: Bot Management - Client Reputation Analysis</li><li>`BotBehaviorAnalysis`: Bot Management - Intelligent Bot Analysis</li><li>`BotCustomRule`: Bot Management - Custom Bot Rules</li><li>`BotActiveDetection`: Bot Management - Active Detection</li></ul></li></ul></li></ul></p>
 */
class DeliveryCondition extends AbstractModel
{
    /**
     * @var array <p>Log filter conditions. The supported conditions are as follows:<ul><li>`EdgeResponseStatusCode`: filters by the status code that the EdgeOne node returns to the client.<ul><li>Supported operators: `equal`, `great`, `less`, `great_equal`, `less_equal`</li><li>Value range: any integer greater than or equal to 0</li></ul></li><li>`OriginResponseStatusCode`: filters by the status code returned by the origin server.<ul><li>Supported operators: `equal`, `great`, `less`, `great_equal`, `less_equal`</li><li>Value range: any integer greater than or equal to -1</li></ul></li><li>`SecurityAction`: filters by the final action taken after the request hits a security rule.<ul><li>Supported operators: `equal`</li><li>Valid values:<ul><li>`-`: unknown or no rule hit</li><li>`Monitor`: Monitor</li><li>`JSChallenge`: JavaScript Challenge</li><li>`Deny`: Deny</li><li>`Allow`: Allow</li><li>`BlockIP`: Block IP</li><li>`Redirect`: Redirect</li><li>`ReturnCustomPage`: Return custom page</li><li>`ManagedChallenge`: Managed Challenge</li><li>`Silence`: Silence</li><li>`LongDelay`: Respond after a long delay</li><li>`ShortDelay`: Respond after a short delay</li></ul></li></ul></li><li>`SecurityModule`: filters by the name of the security module that finally handled the request.<ul><li>Supported operators: `equal`</li><li>Valid values:<ul><li>`-`: unknown or no rule hit</li><li>`CustomRule`: Web Security - Custom Rules</li><li>`RateLimitingCustomRule`: Web Security - Rate Limiting Rules</li><li>`ManagedRule`: Web Security - Managed Rules</li><li>`L7DDoS`: Web Security - CC Attack Defense</li><li>`BotManagement`: Bot Management - Basic Bot Management</li><li>`BotClientReputation`: Bot Management - Client Reputation Analysis</li><li>`BotBehaviorAnalysis`: Bot Management - Intelligent Bot Analysis</li><li>`BotCustomRule`: Bot Management - Custom Bot Rules</li><li>`BotActiveDetection`: Bot Management - Active Detection</li></ul></li></ul></li></ul></p>
     */
    public $Conditions;

    /**
     * @param array $Conditions <p>Log filter conditions. The supported conditions are as follows:<ul><li>`EdgeResponseStatusCode`: filters by the status code that the EdgeOne node returns to the client.<ul><li>Supported operators: `equal`, `great`, `less`, `great_equal`, `less_equal`</li><li>Value range: any integer greater than or equal to 0</li></ul></li><li>`OriginResponseStatusCode`: filters by the status code returned by the origin server.<ul><li>Supported operators: `equal`, `great`, `less`, `great_equal`, `less_equal`</li><li>Value range: any integer greater than or equal to -1</li></ul></li><li>`SecurityAction`: filters by the final action taken after the request hits a security rule.<ul><li>Supported operators: `equal`</li><li>Valid values:<ul><li>`-`: unknown or no rule hit</li><li>`Monitor`: Monitor</li><li>`JSChallenge`: JavaScript Challenge</li><li>`Deny`: Deny</li><li>`Allow`: Allow</li><li>`BlockIP`: Block IP</li><li>`Redirect`: Redirect</li><li>`ReturnCustomPage`: Return custom page</li><li>`ManagedChallenge`: Managed Challenge</li><li>`Silence`: Silence</li><li>`LongDelay`: Respond after a long delay</li><li>`ShortDelay`: Respond after a short delay</li></ul></li></ul></li><li>`SecurityModule`: filters by the name of the security module that finally handled the request.<ul><li>Supported operators: `equal`</li><li>Valid values:<ul><li>`-`: unknown or no rule hit</li><li>`CustomRule`: Web Security - Custom Rules</li><li>`RateLimitingCustomRule`: Web Security - Rate Limiting Rules</li><li>`ManagedRule`: Web Security - Managed Rules</li><li>`L7DDoS`: Web Security - CC Attack Defense</li><li>`BotManagement`: Bot Management - Basic Bot Management</li><li>`BotClientReputation`: Bot Management - Client Reputation Analysis</li><li>`BotBehaviorAnalysis`: Bot Management - Intelligent Bot Analysis</li><li>`BotCustomRule`: Bot Management - Custom Bot Rules</li><li>`BotActiveDetection`: Bot Management - Active Detection</li></ul></li></ul></li></ul></p>
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
