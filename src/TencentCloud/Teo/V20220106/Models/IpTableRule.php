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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP blocklist/allowlist rule details
 *
 * @method string getAction() Obtain Action: `drop` (block), `trans` (allow), `monitor` (observe)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAction(string $Action) Set Action: `drop` (block), `trans` (allow), `monitor` (observe)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMatchFrom() Obtain Matches by IP or region. Values: `ip` and `area`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMatchFrom(string $MatchFrom) Set Matches by IP or region. Values: `ip` and `area`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMatchContent() Obtain Matching content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMatchContent(string $MatchContent) Set Matching content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleID() Obtain Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleID(integer $RuleID) Set Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class IpTableRule extends AbstractModel
{
    /**
     * @var string Action: `drop` (block), `trans` (allow), `monitor` (observe)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Action;

    /**
     * @var string Matches by IP or region. Values: `ip` and `area`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MatchFrom;

    /**
     * @var string Matching content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MatchContent;

    /**
     * @var integer Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleID;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $Action Action: `drop` (block), `trans` (allow), `monitor` (observe)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MatchFrom Matches by IP or region. Values: `ip` and `area`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MatchContent Matching content
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleID Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
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
