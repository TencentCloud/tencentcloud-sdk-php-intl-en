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
 * Forwarding rule creation information
 *
 * @method array getActions() Obtain Action list of the forwarding rule.
 * @method void setActions(array $Actions) Set Action list of the forwarding rule.
 * @method array getConditions() Obtain List of forward rule conditions.
 * @method void setConditions(array $Conditions) Set List of forward rule conditions.
 * @method integer getPriority() Obtain Priority. A smaller value indicates higher priority. Must be unique. Value range: 1-10000.
 * @method void setPriority(integer $Priority) Set Priority. A smaller value indicates higher priority. Must be unique. Value range: 1-10000.
 * @method string getDirection() Obtain Direction of the forwarding rule. Request: request direction from the client to load balancing. Response: response direction from the real server to load balancing. Default: Request.
 * @method void setDirection(string $Direction) Set Direction of the forwarding rule. Request: request direction from the client to load balancing. Response: response direction from the real server to load balancing. Default: Request.
 * @method string getRuleName() Obtain Forwarding rule name. It can contain 1–255 characters consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).
 * @method void setRuleName(string $RuleName) Set Forwarding rule name. It can contain 1–255 characters consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 */
class RuleInput extends AbstractModel
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
     * @var integer Priority. A smaller value indicates higher priority. Must be unique. Value range: 1-10000.
     */
    public $Priority;

    /**
     * @var string Direction of the forwarding rule. Request: request direction from the client to load balancing. Response: response direction from the real server to load balancing. Default: Request.
     */
    public $Direction;

    /**
     * @var string Forwarding rule name. It can contain 1–255 characters consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).
     */
    public $RuleName;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @param array $Actions Action list of the forwarding rule.
     * @param array $Conditions List of forward rule conditions.
     * @param integer $Priority Priority. A smaller value indicates higher priority. Must be unique. Value range: 1-10000.
     * @param string $Direction Direction of the forwarding rule. Request: request direction from the client to load balancing. Response: response direction from the real server to load balancing. Default: Request.
     * @param string $RuleName Forwarding rule name. It can contain 1–255 characters consisting of digits, upper- and lower-case letters, Chinese characters, half-width periods (.), underscores (_), and dashes (-).
     * @param array $Tags Tag.
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

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
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
