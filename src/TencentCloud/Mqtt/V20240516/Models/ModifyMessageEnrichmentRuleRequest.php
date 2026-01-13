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
 * ModifyMessageEnrichmentRule request structure.
 *
 * @method integer getId() Obtain Message enrichment rule ID.
 * @method void setId(integer $Id) Set Message enrichment rule ID.
 * @method string getInstanceId() Obtain Tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or console.

 * @method void setInstanceId(string $InstanceId) Set Tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or console.

 * @method string getRuleName() Obtain Rule name, which cannot be empty, contains 3 to 64 characters, and supports chinese, letters, digits, "-", and "_".
 * @method void setRuleName(string $RuleName) Set Rule name, which cannot be empty, contains 3 to 64 characters, and supports chinese, letters, digits, "-", and "_".
 * @method string getCondition() Obtain Rule matching conditions in JSON format, Base64 encoding is required.
Creating a Billing Resource Order
{"clientId":"client-1","username":"client-1","topic":"home/room1"}
Specifies the Base64-encoded content.
eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9
 * @method void setCondition(string $Condition) Set Rule matching conditions in JSON format, Base64 encoding is required.
Creating a Billing Resource Order
{"clientId":"client-1","username":"client-1","topic":"home/room1"}
Specifies the Base64-encoded content.
eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9
 * @method string getActions() Obtain Specifies the action of rule execution in JSON format, which must be Base64 encoded. 
Creating a Billing Resource Order
{"messageExpiryInterval":360,"responseTopic":"replies/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"}]}
Specifies the BASE64-encoded string eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2VUb3BpYyI6InJlcGxpZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9XX0=.
 * @method void setActions(string $Actions) Set Specifies the action of rule execution in JSON format, which must be Base64 encoded. 
Creating a Billing Resource Order
{"messageExpiryInterval":360,"responseTopic":"replies/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"}]}
Specifies the BASE64-encoded string eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2VUb3BpYyI6InJlcGxpZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9XX0=.
 * @method integer getPriority() Obtain Rule priority. a smaller number indicates a higher priority. high priority overrides low priority. the UserProperty field will be merged.
 * @method void setPriority(integer $Priority) Set Rule priority. a smaller number indicates a higher priority. high priority overrides low priority. the UserProperty field will be merged.
 * @method integer getStatus() Obtain Rule status. valid values: 0 (undefined), 1 (activate), 2 (deactivate). default: deactivate.
 * @method void setStatus(integer $Status) Set Rule status. valid values: 0 (undefined), 1 (activate), 2 (deactivate). default: deactivate.
 * @method string getRemark() Obtain Specifies the remark information with a maximum length of 128 characters.
 * @method void setRemark(string $Remark) Set Specifies the remark information with a maximum length of 128 characters.
 */
class ModifyMessageEnrichmentRuleRequest extends AbstractModel
{
    /**
     * @var integer Message enrichment rule ID.
     */
    public $Id;

    /**
     * @var string Tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or console.

     */
    public $InstanceId;

    /**
     * @var string Rule name, which cannot be empty, contains 3 to 64 characters, and supports chinese, letters, digits, "-", and "_".
     */
    public $RuleName;

    /**
     * @var string Rule matching conditions in JSON format, Base64 encoding is required.
Creating a Billing Resource Order
{"clientId":"client-1","username":"client-1","topic":"home/room1"}
Specifies the Base64-encoded content.
eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9
     */
    public $Condition;

    /**
     * @var string Specifies the action of rule execution in JSON format, which must be Base64 encoded. 
Creating a Billing Resource Order
{"messageExpiryInterval":360,"responseTopic":"replies/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"}]}
Specifies the BASE64-encoded string eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2VUb3BpYyI6InJlcGxpZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9XX0=.
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
     * @var string Specifies the remark information with a maximum length of 128 characters.
     */
    public $Remark;

    /**
     * @param integer $Id Message enrichment rule ID.
     * @param string $InstanceId Tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or console.

     * @param string $RuleName Rule name, which cannot be empty, contains 3 to 64 characters, and supports chinese, letters, digits, "-", and "_".
     * @param string $Condition Rule matching conditions in JSON format, Base64 encoding is required.
Creating a Billing Resource Order
{"clientId":"client-1","username":"client-1","topic":"home/room1"}
Specifies the Base64-encoded content.
eyJjbGllbnRJZCI6ImNsaWVudC0xIiwidXNlcm5hbWUiOiJjbGllbnQtMSIsInRvcGljIjoiaG9tZS9yb29tMSJ9
     * @param string $Actions Specifies the action of rule execution in JSON format, which must be Base64 encoded. 
Creating a Billing Resource Order
{"messageExpiryInterval":360,"responseTopic":"replies/${clientid}","correlationData":"${traceid}","userProperty":[{"key":"trace-id","value":"${traceid}"}]}
Specifies the BASE64-encoded string eyJtZXNzYWdlRXhwaXJ5SW50ZXJ2YWwiOjM2MCwicmVzcG9uc2VUb3BpYyI6InJlcGxpZXMvJHtjbGllbnRpZH0iLCJjb3JyZWxhdGlvbkRhdGEiOiIke3RyYWNlaWR9IiwidXNlclByb3BlcnR5IjpbeyJrZXkiOiJ0cmFjZS1pZCIsInZhbHVlIjoiJHt0cmFjZWlkfSJ9XX0=.
     * @param integer $Priority Rule priority. a smaller number indicates a higher priority. high priority overrides low priority. the UserProperty field will be merged.
     * @param integer $Status Rule status. valid values: 0 (undefined), 1 (activate), 2 (deactivate). default: deactivate.
     * @param string $Remark Specifies the remark information with a maximum length of 128 characters.
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
    }
}
