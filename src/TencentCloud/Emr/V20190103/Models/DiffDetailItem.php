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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dynamically generated change detail entries.
 *
 * @method string getAttribute() Obtain Attribute.
 * @method void setAttribute(string $Attribute) Set Attribute.
 * @method string getInEffect() Obtain Currently effective.
 * @method void setInEffect(string $InEffect) Set Currently effective.
 * @method string getPendingEffectiveness() Obtain To be effective.
 * @method void setPendingEffectiveness(string $PendingEffectiveness) Set To be effective.
 * @method string getOperation() Obtain Operation.
 * @method void setOperation(string $Operation) Set Operation.
 * @method string getQueue() Obtain Queue.
 * @method void setQueue(string $Queue) Set Queue.
 * @method string getConfigSet() Obtain Configuration set.
 * @method void setConfigSet(string $ConfigSet) Set Configuration set.
 * @method string getLabelName() Obtain Tag.
 * @method void setLabelName(string $LabelName) Set Tag.
 * @method string getInEffectIndex() Obtain Current position.
 * @method void setInEffectIndex(string $InEffectIndex) Set Current position.
 * @method string getPendingEffectIndex() Obtain Position to be effective.
 * @method void setPendingEffectIndex(string $PendingEffectIndex) Set Position to be effective.
 * @method string getPlanName() Obtain Plan mode name.
 * @method void setPlanName(string $PlanName) Set Plan mode name.
 * @method string getLabel() Obtain Tag.
 * @method void setLabel(string $Label) Set Tag.
 * @method string getRuleName() Obtain Placement rule.
 * @method void setRuleName(string $RuleName) Set Placement rule.
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 */
class DiffDetailItem extends AbstractModel
{
    /**
     * @var string Attribute.
     */
    public $Attribute;

    /**
     * @var string Currently effective.
     */
    public $InEffect;

    /**
     * @var string To be effective.
     */
    public $PendingEffectiveness;

    /**
     * @var string Operation.
     */
    public $Operation;

    /**
     * @var string Queue.
     */
    public $Queue;

    /**
     * @var string Configuration set.
     */
    public $ConfigSet;

    /**
     * @var string Tag.
     */
    public $LabelName;

    /**
     * @var string Current position.
     */
    public $InEffectIndex;

    /**
     * @var string Position to be effective.
     */
    public $PendingEffectIndex;

    /**
     * @var string Plan mode name.
     */
    public $PlanName;

    /**
     * @var string Tag.
     */
    public $Label;

    /**
     * @var string Placement rule.
     */
    public $RuleName;

    /**
     * @var string Username.
     */
    public $UserName;

    /**
     * @param string $Attribute Attribute.
     * @param string $InEffect Currently effective.
     * @param string $PendingEffectiveness To be effective.
     * @param string $Operation Operation.
     * @param string $Queue Queue.
     * @param string $ConfigSet Configuration set.
     * @param string $LabelName Tag.
     * @param string $InEffectIndex Current position.
     * @param string $PendingEffectIndex Position to be effective.
     * @param string $PlanName Plan mode name.
     * @param string $Label Tag.
     * @param string $RuleName Placement rule.
     * @param string $UserName Username.
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
        if (array_key_exists("Attribute",$param) and $param["Attribute"] !== null) {
            $this->Attribute = $param["Attribute"];
        }

        if (array_key_exists("InEffect",$param) and $param["InEffect"] !== null) {
            $this->InEffect = $param["InEffect"];
        }

        if (array_key_exists("PendingEffectiveness",$param) and $param["PendingEffectiveness"] !== null) {
            $this->PendingEffectiveness = $param["PendingEffectiveness"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("ConfigSet",$param) and $param["ConfigSet"] !== null) {
            $this->ConfigSet = $param["ConfigSet"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("InEffectIndex",$param) and $param["InEffectIndex"] !== null) {
            $this->InEffectIndex = $param["InEffectIndex"];
        }

        if (array_key_exists("PendingEffectIndex",$param) and $param["PendingEffectIndex"] !== null) {
            $this->PendingEffectIndex = $param["PendingEffectIndex"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
