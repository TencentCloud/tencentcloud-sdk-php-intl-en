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
 * Details of the intelligent rate limiting rule
 *
 * @method string getMatchContent() Obtain The client IP detected.
 * @method void setMatchContent(string $MatchContent) Set The client IP detected.
 * @method string getAction() Obtain The action taken.
 * @method void setAction(string $Action) Set The action taken.
 * @method string getEffectiveTime() Obtain Update time
 * @method void setEffectiveTime(string $EffectiveTime) Set Update time
 * @method string getExpireTime() Obtain The expiration time.
 * @method void setExpireTime(string $ExpireTime) Set The expiration time.
 * @method integer getRuleId() Obtain The rule ID.
 * @method void setRuleId(integer $RuleId) Set The rule ID.
 * @method string getStatus() Obtain The action status. `allowed` indicates that the request is allowed.
 * @method void setStatus(string $Status) Set The action status. `allowed` indicates that the request is allowed.
 */
class RateLimitIntelligenceRuleDetail extends AbstractModel
{
    /**
     * @var string The client IP detected.
     */
    public $MatchContent;

    /**
     * @var string The action taken.
     */
    public $Action;

    /**
     * @var string Update time
     */
    public $EffectiveTime;

    /**
     * @var string The expiration time.
     */
    public $ExpireTime;

    /**
     * @var integer The rule ID.
     */
    public $RuleId;

    /**
     * @var string The action status. `allowed` indicates that the request is allowed.
     */
    public $Status;

    /**
     * @param string $MatchContent The client IP detected.
     * @param string $Action The action taken.
     * @param string $EffectiveTime Update time
     * @param string $ExpireTime The expiration time.
     * @param integer $RuleId The rule ID.
     * @param string $Status The action status. `allowed` indicates that the request is allowed.
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
        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
