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
 * IP blocklist/allowlist rule details
 *
 * @method string getAction() Obtain The action. Values:
<li>`drop`: Block</li>
<li>`trans`: Allow</li>
<li>`monitor`: Observe</li>
 * @method void setAction(string $Action) Set The action. Values:
<li>`drop`: Block</li>
<li>`trans`: Allow</li>
<li>`monitor`: Observe</li>
 * @method string getMatchFrom() Obtain The matching dimension. Values:
<li>`ip`: Match by IP.</li>
<li>`area`: Match by IP region.</li>
 * @method void setMatchFrom(string $MatchFrom) Set The matching dimension. Values:
<li>`ip`: Match by IP.</li>
<li>`area`: Match by IP region.</li>
 * @method string getMatchContent() Obtain The matching content.
 * @method void setMatchContent(string $MatchContent) Set The matching content.
 * @method integer getRuleID() Obtain The rule ID, which is only used as an output parameter.
 * @method void setRuleID(integer $RuleID) Set The rule ID, which is only used as an output parameter.
 * @method string getUpdateTime() Obtain The update time, which is only used as an output parameter.
 * @method void setUpdateTime(string $UpdateTime) Set The update time, which is only used as an output parameter.
 */
class IpTableRule extends AbstractModel
{
    /**
     * @var string The action. Values:
<li>`drop`: Block</li>
<li>`trans`: Allow</li>
<li>`monitor`: Observe</li>
     */
    public $Action;

    /**
     * @var string The matching dimension. Values:
<li>`ip`: Match by IP.</li>
<li>`area`: Match by IP region.</li>
     */
    public $MatchFrom;

    /**
     * @var string The matching content.
     */
    public $MatchContent;

    /**
     * @var integer The rule ID, which is only used as an output parameter.
     */
    public $RuleID;

    /**
     * @var string The update time, which is only used as an output parameter.
     */
    public $UpdateTime;

    /**
     * @param string $Action The action. Values:
<li>`drop`: Block</li>
<li>`trans`: Allow</li>
<li>`monitor`: Observe</li>
     * @param string $MatchFrom The matching dimension. Values:
<li>`ip`: Match by IP.</li>
<li>`area`: Match by IP region.</li>
     * @param string $MatchContent The matching content.
     * @param integer $RuleID The rule ID, which is only used as an output parameter.
     * @param string $UpdateTime The update time, which is only used as an output parameter.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("MatchFrom",$param) and $param["MatchFrom"] !== null) {
            $this->MatchFrom = $param["MatchFrom"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
