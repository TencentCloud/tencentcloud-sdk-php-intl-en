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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAgentCruiseDialingCampaign request structure.
 *
 * @method integer getSdkAppId() Obtain Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method string getName() Obtain Task Name
 * @method void setName(string $Name) Set Task Name
 * @method string getAgent() Obtain Agent Account
 * @method void setAgent(string $Agent) Set Agent Account
 * @method integer getConcurrencyNumber() Obtain Single-round Concurrent Call Volume 1-20
 * @method void setConcurrencyNumber(integer $ConcurrencyNumber) Set Single-round Concurrent Call Volume 1-20
 * @method integer getStartTime() Obtain Task start time. Unix timestamp. The task will automatically start after this time.
 * @method void setStartTime(integer $StartTime) Set Task start time. Unix timestamp. The task will automatically start after this time.
 * @method integer getEndTime() Obtain Task termination time. Unix timestamp. The task will automatically terminate after this time.
 * @method void setEndTime(integer $EndTime) Set Task termination time. Unix timestamp. The task will automatically terminate after this time.
 * @method array getCallees() Obtain Called list supporting E.164 or number formats without country code.
 * @method void setCallees(array $Callees) Set Called list supporting E.164 or number formats without country code.
 * @method array getCallers() Obtain Calling list using the number formats displayed on the management side.
 * @method void setCallers(array $Callers) Set Calling list using the number formats displayed on the management side.
 * @method integer getCallOrder() Obtain Being called sequence: 0 for random 1 for in order.
 * @method void setCallOrder(integer $CallOrder) Set Being called sequence: 0 for random 1 for in order.
 * @method string getUUI() Obtain Caller Custom Data, Maximum Length 1024
 * @method void setUUI(string $UUI) Set Caller Custom Data, Maximum Length 1024
 */
class CreateAgentCruiseDialingCampaignRequest extends AbstractModel
{
    /**
     * @var integer Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Task Name
     */
    public $Name;

    /**
     * @var string Agent Account
     */
    public $Agent;

    /**
     * @var integer Single-round Concurrent Call Volume 1-20
     */
    public $ConcurrencyNumber;

    /**
     * @var integer Task start time. Unix timestamp. The task will automatically start after this time.
     */
    public $StartTime;

    /**
     * @var integer Task termination time. Unix timestamp. The task will automatically terminate after this time.
     */
    public $EndTime;

    /**
     * @var array Called list supporting E.164 or number formats without country code.
     */
    public $Callees;

    /**
     * @var array Calling list using the number formats displayed on the management side.
     */
    public $Callers;

    /**
     * @var integer Being called sequence: 0 for random 1 for in order.
     */
    public $CallOrder;

    /**
     * @var string Caller Custom Data, Maximum Length 1024
     */
    public $UUI;

    /**
     * @param integer $SdkAppId Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param string $Name Task Name
     * @param string $Agent Agent Account
     * @param integer $ConcurrencyNumber Single-round Concurrent Call Volume 1-20
     * @param integer $StartTime Task start time. Unix timestamp. The task will automatically start after this time.
     * @param integer $EndTime Task termination time. Unix timestamp. The task will automatically terminate after this time.
     * @param array $Callees Called list supporting E.164 or number formats without country code.
     * @param array $Callers Calling list using the number formats displayed on the management side.
     * @param integer $CallOrder Being called sequence: 0 for random 1 for in order.
     * @param string $UUI Caller Custom Data, Maximum Length 1024
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = $param["Agent"];
        }

        if (array_key_exists("ConcurrencyNumber",$param) and $param["ConcurrencyNumber"] !== null) {
            $this->ConcurrencyNumber = $param["ConcurrencyNumber"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Callees",$param) and $param["Callees"] !== null) {
            $this->Callees = $param["Callees"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("CallOrder",$param) and $param["CallOrder"] !== null) {
            $this->CallOrder = $param["CallOrder"];
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }
    }
}
