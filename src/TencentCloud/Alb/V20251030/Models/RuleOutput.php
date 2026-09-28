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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Forwarding Rule Information
 *
 * @method array getActions() Obtain Action list of the forwarding rule.	
 * @method void setActions(array $Actions) Set Action list of the forwarding rule.	
 * @method array getConditions() Obtain List of forward rule conditions.
 * @method void setConditions(array $Conditions) Set List of forward rule conditions.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getDirection() Obtain Direction of the forwarding rule. Request: request direction from the client to load balancing. Response: response direction from the real server to load balancing.
 * @method void setDirection(string $Direction) Set Direction of the forwarding rule. Request: request direction from the client to load balancing. Response: response direction from the real server to load balancing.
 * @method string getModifyTime() Obtain Last modification time.
 * @method void setModifyTime(string $ModifyTime) Set Last modification time.
 * @method integer getPriority() Obtain Priority. A smaller value indicates higher priority. Value range: 1-10000.
 * @method void setPriority(integer $Priority) Set Priority. A smaller value indicates higher priority. Value range: 1-10000.
 * @method string getRuleId() Obtain Forwarding rule ID in the format of `rule-` followed by 8 alphanumeric characters.
 * @method void setRuleId(string $RuleId) Set Forwarding rule ID in the format of `rule-` followed by 8 alphanumeric characters.
 * @method string getRuleName() Obtain Forwarding rule name.
 * @method void setRuleName(string $RuleName) Set Forwarding rule name.
 * @method string getStatus() Obtain Forwarding rule status. Provisioning: under creation. Active: running. Configuring: configuration in progress.
 * @method void setStatus(string $Status) Set Forwarding rule status. Provisioning: under creation. Active: running. Configuring: configuration in progress.
 * @method array getTags() Obtain Tag list.
 * @method void setTags(array $Tags) Set Tag list.
 */
class RuleOutput extends AbstractModel
{
    /**
     * @var array Action list of the forwarding rule.	
     */
    public $Actions;

    /**
     * @var array List of forward rule conditions.
     */
    public $Conditions;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Direction of the forwarding rule. Request: request direction from the client to load balancing. Response: response direction from the real server to load balancing.
     */
    public $Direction;

    /**
     * @var string Last modification time.
     */
    public $ModifyTime;

    /**
     * @var integer Priority. A smaller value indicates higher priority. Value range: 1-10000.
     */
    public $Priority;

    /**
     * @var string Forwarding rule ID in the format of `rule-` followed by 8 alphanumeric characters.
     */
    public $RuleId;

    /**
     * @var string Forwarding rule name.
     */
    public $RuleName;

    /**
     * @var string Forwarding rule status. Provisioning: under creation. Active: running. Configuring: configuration in progress.
     */
    public $Status;

    /**
     * @var array Tag list.
     */
    public $Tags;

    /**
     * @param array $Actions Action list of the forwarding rule.	
     * @param array $Conditions List of forward rule conditions.
     * @param string $CreateTime Creation time.
     * @param string $Direction Direction of the forwarding rule. Request: request direction from the client to load balancing. Response: response direction from the real server to load balancing.
     * @param string $ModifyTime Last modification time.
     * @param integer $Priority Priority. A smaller value indicates higher priority. Value range: 1-10000.
     * @param string $RuleId Forwarding rule ID in the format of `rule-` followed by 8 alphanumeric characters.
     * @param string $RuleName Forwarding rule name.
     * @param string $Status Forwarding rule status. Provisioning: under creation. Active: running. Configuring: configuration in progress.
     * @param array $Tags Tag list.
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
        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = [];
            foreach ($param["Actions"] as $key => $value){
                $obj = new RuleAction();
                $obj->deserialize($value);
                array_push($this->Actions, $obj);
            }
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new RuleCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
