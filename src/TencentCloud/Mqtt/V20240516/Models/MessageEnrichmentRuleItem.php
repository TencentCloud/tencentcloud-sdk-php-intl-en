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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MessageEnrichmentRuleItem
 *
 * @method integer getId() Obtain Rule ID.
 * @method void setId(integer $Id) Set Rule ID.
 * @method string getInstanceId() Obtain MQTT cluster ID.
 * @method void setInstanceId(string $InstanceId) Set MQTT cluster ID.
 * @method string getRuleName() Obtain Specifies the rule name.
 * @method void setRuleName(string $RuleName) Set Specifies the rule name.
 * @method string getCondition() Obtain Rule matching conditions, in JSON format, must be Base64-encoded. 
Specifies the client id, username, and topic. example: {"clientId":"client-1","username":"client-1","topic":"home/room1"}.
Specifies the Base64-encoded string "eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9".
 * @method void setCondition(string $Condition) Set Rule matching conditions, in JSON format, must be Base64-encoded. 
Specifies the client id, username, and topic. example: {"clientId":"client-1","username":"client-1","topic":"home/room1"}.
Specifies the Base64-encoded string "eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9".
 * @method string getActions() Obtain Specifies the action of rule execution in JSON format, which must be Base64 encoded.
 Creating a Billing Resource Order
{"messageExpiryInterval":360,"response Topic":"replies/devices/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"},{"key":"data-source","value":"rule-engine"}]}
Specifies the BASE64-encoded string "eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2UgVG9waWMiOiJyZXBsaWVzL2RldmljZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9LHsia2V5IjoiZGF0YS1zb3VyY2UiLCJ2YWx1ZSI6InJ1bGUtZW5naW5lIn1dfQ==".
 * @method void setActions(string $Actions) Set Specifies the action of rule execution in JSON format, which must be Base64 encoded.
 Creating a Billing Resource Order
{"messageExpiryInterval":360,"response Topic":"replies/devices/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"},{"key":"data-source","value":"rule-engine"}]}
Specifies the BASE64-encoded string "eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2UgVG9waWMiOiJyZXBsaWVzL2RldmljZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9LHsia2V5IjoiZGF0YS1zb3VyY2UiLCJ2YWx1ZSI6InJ1bGUtZW5naW5lIn1dfQ==".
 * @method integer getPriority() Obtain Rule priority. a smaller number indicates a higher priority. high priority overrides low priority. the UserProperty field will be merged.
 * @method void setPriority(integer $Priority) Set Rule priority. a smaller number indicates a higher priority. high priority overrides low priority. the UserProperty field will be merged.
 * @method integer getStatus() Obtain Rule status. valid values: 0 (undefined), 1 (activate), 2 (deactivate). default: deactivate.
 * @method void setStatus(integer $Status) Set Rule status. valid values: 0 (undefined), 1 (activate), 2 (deactivate). default: deactivate.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getCreatedTime() Obtain Creation time. millisecond-level timestamp.
 * @method void setCreatedTime(integer $CreatedTime) Set Creation time. millisecond-level timestamp.
 * @method integer getUpdateTime() Obtain Update time. millisecond-level timestamp.
 * @method void setUpdateTime(integer $UpdateTime) Set Update time. millisecond-level timestamp.
 */
class MessageEnrichmentRuleItem extends AbstractModel
{
    /**
     * @var integer Rule ID.
     */
    public $Id;

    /**
     * @var string MQTT cluster ID.
     */
    public $InstanceId;

    /**
     * @var string Specifies the rule name.
     */
    public $RuleName;

    /**
     * @var string Rule matching conditions, in JSON format, must be Base64-encoded. 
Specifies the client id, username, and topic. example: {"clientId":"client-1","username":"client-1","topic":"home/room1"}.
Specifies the Base64-encoded string "eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9".
     */
    public $Condition;

    /**
     * @var string Specifies the action of rule execution in JSON format, which must be Base64 encoded.
 Creating a Billing Resource Order
{"messageExpiryInterval":360,"response Topic":"replies/devices/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"},{"key":"data-source","value":"rule-engine"}]}
Specifies the BASE64-encoded string "eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2UgVG9waWMiOiJyZXBsaWVzL2RldmljZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9LHsia2V5IjoiZGF0YS1zb3VyY2UiLCJ2YWx1ZSI6InJ1bGUtZW5naW5lIn1dfQ==".
     */
    public $Actions;

    /**
     * @var integer Rule priority. a smaller number indicates a higher priority. high priority overrides low priority. the UserProperty field will be merged.
     */
    public $Priority;

    /**
     * @var integer Rule status. valid values: 0 (undefined), 1 (activate), 2 (deactivate). default: deactivate.
     */
    public $Status;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer Creation time. millisecond-level timestamp.
     */
    public $CreatedTime;

    /**
     * @var integer Update time. millisecond-level timestamp.
     */
    public $UpdateTime;

    /**
     * @param integer $Id Rule ID.
     * @param string $InstanceId MQTT cluster ID.
     * @param string $RuleName Specifies the rule name.
     * @param string $Condition Rule matching conditions, in JSON format, must be Base64-encoded. 
Specifies the client id, username, and topic. example: {"clientId":"client-1","username":"client-1","topic":"home/room1"}.
Specifies the Base64-encoded string "eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9".
     * @param string $Actions Specifies the action of rule execution in JSON format, which must be Base64 encoded.
 Creating a Billing Resource Order
{"messageExpiryInterval":360,"response Topic":"replies/devices/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"},{"key":"data-source","value":"rule-engine"}]}
Specifies the BASE64-encoded string "eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2UgVG9waWMiOiJyZXBsaWVzL2RldmljZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9LHsia2V5IjoiZGF0YS1zb3VyY2UiLCJ2YWx1ZSI6InJ1bGUtZW5naW5lIn1dfQ==".
     * @param integer $Priority Rule priority. a smaller number indicates a higher priority. high priority overrides low priority. the UserProperty field will be merged.
     * @param integer $Status Rule status. valid values: 0 (undefined), 1 (activate), 2 (deactivate). default: deactivate.
     * @param string $Remark Remarks
     * @param integer $CreatedTime Creation time. millisecond-level timestamp.
     * @param integer $UpdateTime Update time. millisecond-level timestamp.
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = $param["Actions"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
