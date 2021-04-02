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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MatchTicket information
 *
 * @method string getId() Obtain MatchTicket ID. It can contain up to 128 characters, supporting [a-zA-Z0-9-\.]*.
 * @method void setId(string $Id) Set MatchTicket ID. It can contain up to 128 characters, supporting [a-zA-Z0-9-\.]*.
 * @method string getMatchCode() Obtain MatchCode
 * @method void setMatchCode(string $MatchCode) Set MatchCode
 * @method string getMatchResult() Obtain Different structure serialized results will be returned according to the MatchType.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setMatchResult(string $MatchResult) Set Different structure serialized results will be returned according to the MatchType.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getMatchType() Obtain Matchmaking type. Valid values: NORMAL, GSE
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setMatchType(string $MatchType) Set Matchmaking type. Valid values: NORMAL, GSE
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getPlayers() Obtain Player information list
 * @method void setPlayers(array $Players) Set Player information list
 * @method string getStatus() Obtain Matching status. Valid values: SEARCHING (matching), PLACING (pending match), COMPLETED (match completed), CANCELLED (match cancelled), TIMEDOUT (match timeouts), FAILED (match failed)
 * @method void setStatus(string $Status) Set Matching status. Valid values: SEARCHING (matching), PLACING (pending match), COMPLETED (match completed), CANCELLED (match cancelled), TIMEDOUT (match timeouts), FAILED (match failed)
 * @method string getStatusMessage() Obtain Matching status descriptions
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setStatusMessage(string $StatusMessage) Set Matching status descriptions
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getStatusReason() Obtain Reason for the matching status
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setStatusReason(string $StatusReason) Set Reason for the matching status
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getStartTime() Obtain The time when the GPM received the matchmaking request, for example "2020-08-17T08:14:38.077Z".
 * @method void setStartTime(string $StartTime) Set The time when the GPM received the matchmaking request, for example "2020-08-17T08:14:38.077Z".
 * @method string getEndTime() Obtain The time when the matchmaking request stopped executing due to the completion, failure, timeout, or cancellation, for example "2020-08-17T08:14:38.077Z".
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setEndTime(string $EndTime) Set The time when the matchmaking request stopped executing due to the completion, failure, timeout, or cancellation, for example "2020-08-17T08:14:38.077Z".
Note: this field may return `null`, indicating that no valid value is obtained.
 */
class MatchTicket extends AbstractModel
{
    /**
     * @var string MatchTicket ID. It can contain up to 128 characters, supporting [a-zA-Z0-9-\.]*.
     */
    public $Id;

    /**
     * @var string MatchCode
     */
    public $MatchCode;

    /**
     * @var string Different structure serialized results will be returned according to the MatchType.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $MatchResult;

    /**
     * @var string Matchmaking type. Valid values: NORMAL, GSE
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $MatchType;

    /**
     * @var array Player information list
     */
    public $Players;

    /**
     * @var string Matching status. Valid values: SEARCHING (matching), PLACING (pending match), COMPLETED (match completed), CANCELLED (match cancelled), TIMEDOUT (match timeouts), FAILED (match failed)
     */
    public $Status;

    /**
     * @var string Matching status descriptions
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $StatusMessage;

    /**
     * @var string Reason for the matching status
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $StatusReason;

    /**
     * @var string The time when the GPM received the matchmaking request, for example "2020-08-17T08:14:38.077Z".
     */
    public $StartTime;

    /**
     * @var string The time when the matchmaking request stopped executing due to the completion, failure, timeout, or cancellation, for example "2020-08-17T08:14:38.077Z".
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $EndTime;

    /**
     * @param string $Id MatchTicket ID. It can contain up to 128 characters, supporting [a-zA-Z0-9-\.]*.
     * @param string $MatchCode MatchCode
     * @param string $MatchResult Different structure serialized results will be returned according to the MatchType.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $MatchType Matchmaking type. Valid values: NORMAL, GSE
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $Players Player information list
     * @param string $Status Matching status. Valid values: SEARCHING (matching), PLACING (pending match), COMPLETED (match completed), CANCELLED (match cancelled), TIMEDOUT (match timeouts), FAILED (match failed)
     * @param string $StatusMessage Matching status descriptions
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $StatusReason Reason for the matching status
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $StartTime The time when the GPM received the matchmaking request, for example "2020-08-17T08:14:38.077Z".
     * @param string $EndTime The time when the matchmaking request stopped executing due to the completion, failure, timeout, or cancellation, for example "2020-08-17T08:14:38.077Z".
Note: this field may return `null`, indicating that no valid value is obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MatchCode",$param) and $param["MatchCode"] !== null) {
            $this->MatchCode = $param["MatchCode"];
        }

        if (array_key_exists("MatchResult",$param) and $param["MatchResult"] !== null) {
            $this->MatchResult = $param["MatchResult"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("Players",$param) and $param["Players"] !== null) {
            $this->Players = [];
            foreach ($param["Players"] as $key => $value){
                $obj = new Player();
                $obj->deserialize($value);
                array_push($this->Players, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusMessage",$param) and $param["StatusMessage"] !== null) {
            $this->StatusMessage = $param["StatusMessage"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
