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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SMS event details
 *
 * @method User getUserInfo() Obtain <p>The detail information of the user</p>
 * @method void setUserInfo(User $UserInfo) Set <p>The detail information of the user</p>
 * @method string getSMSId() Obtain <p>The unique ID of the sms</p>
 * @method void setSMSId(string $SMSId) Set <p>The unique ID of the sms</p>
 * @method string getReceivedTime() Obtain <p>The time that the user received the sms</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601 standard</p>
 * @method void setReceivedTime(string $ReceivedTime) Set <p>The time that the user received the sms</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601 standard</p>
 * @method string getAction() Obtain <p>The action of the user after receiving the sms</p><ul><li>no_action: No action from the user</li><li>safe: User confirmation of the correct person's action</li><li>compromised: Feedback from real users indicates third-party action</li></ul>
 * @method void setAction(string $Action) Set <p>The action of the user after receiving the sms</p><ul><li>no_action: No action from the user</li><li>safe: User confirmation of the correct person's action</li><li>compromised: Feedback from real users indicates third-party action</li></ul>
 * @method Result getSMSResult() Obtain <p>The result of the sms</p>
 * @method void setSMSResult(Result $SMSResult) Set <p>The result of the sms</p>
 * @method array getCust() Obtain <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 * @method void setCust(array $Cust) Set <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 */
class SMSEvent extends AbstractModel
{
    /**
     * @var User <p>The detail information of the user</p>
     */
    public $UserInfo;

    /**
     * @var string <p>The unique ID of the sms</p>
     */
    public $SMSId;

    /**
     * @var string <p>The time that the user received the sms</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601 standard</p>
     */
    public $ReceivedTime;

    /**
     * @var string <p>The action of the user after receiving the sms</p><ul><li>no_action: No action from the user</li><li>safe: User confirmation of the correct person's action</li><li>compromised: Feedback from real users indicates third-party action</li></ul>
     */
    public $Action;

    /**
     * @var Result <p>The result of the sms</p>
     */
    public $SMSResult;

    /**
     * @var array <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
     */
    public $Cust;

    /**
     * @param User $UserInfo <p>The detail information of the user</p>
     * @param string $SMSId <p>The unique ID of the sms</p>
     * @param string $ReceivedTime <p>The time that the user received the sms</p><p>Parameter format: Millisecond-level time with UTC time zone compliant with ISO 8601 standard</p>
     * @param string $Action <p>The action of the user after receiving the sms</p><ul><li>no_action: No action from the user</li><li>safe: User confirmation of the correct person's action</li><li>compromised: Feedback from real users indicates third-party action</li></ul>
     * @param Result $SMSResult <p>The result of the sms</p>
     * @param array $Cust <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new User();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("SMSId",$param) and $param["SMSId"] !== null) {
            $this->SMSId = $param["SMSId"];
        }

        if (array_key_exists("ReceivedTime",$param) and $param["ReceivedTime"] !== null) {
            $this->ReceivedTime = $param["ReceivedTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("SMSResult",$param) and $param["SMSResult"] !== null) {
            $this->SMSResult = new Result();
            $this->SMSResult->deserialize($param["SMSResult"]);
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
