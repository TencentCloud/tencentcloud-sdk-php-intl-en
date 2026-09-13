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
 * Task event details
 *
 * @method string getPromotionId() Obtain <p>The ID of the promotion</p>
 * @method void setPromotionId(string $PromotionId) Set <p>The ID of the promotion</p>
 * @method string getPromotionName() Obtain <p>The name of the promotion</p>
 * @method void setPromotionName(string $PromotionName) Set <p>The name of the promotion</p>
 * @method string getDescription() Obtain <p>The description of the promotion</p>
 * @method void setDescription(string $Description) Set <p>The description of the promotion</p>
 * @method string getInviterUserId() Obtain <p>The ID of the inviter</p>
 * @method void setInviterUserId(string $InviterUserId) Set <p>The ID of the inviter</p>
 * @method string getTaskId() Obtain <p>The ID of the task</p>
 * @method void setTaskId(string $TaskId) Set <p>The ID of the task</p>
 * @method string getTaskName() Obtain <p>The name of the task</p>
 * @method void setTaskName(string $TaskName) Set <p>The name of the task</p>
 * @method string getTaskType() Obtain <p>Task type, such as daily check-in, ad viewing, or step accumulation</p>
 * @method void setTaskType(string $TaskType) Set <p>Task type, such as daily check-in, ad viewing, or step accumulation</p>
 * @method integer getTaskCostTime() Obtain <p>Task completed duration</p><p>Measurement unit: ms</p>
 * @method void setTaskCostTime(integer $TaskCostTime) Set <p>Task completed duration</p><p>Measurement unit: ms</p>
 * @method array getCust() Obtain <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 * @method void setCust(array $Cust) Set <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
 */
class TaskEvent extends AbstractModel
{
    /**
     * @var string <p>The ID of the promotion</p>
     */
    public $PromotionId;

    /**
     * @var string <p>The name of the promotion</p>
     */
    public $PromotionName;

    /**
     * @var string <p>The description of the promotion</p>
     */
    public $Description;

    /**
     * @var string <p>The ID of the inviter</p>
     */
    public $InviterUserId;

    /**
     * @var string <p>The ID of the task</p>
     */
    public $TaskId;

    /**
     * @var string <p>The name of the task</p>
     */
    public $TaskName;

    /**
     * @var string <p>Task type, such as daily check-in, ad viewing, or step accumulation</p>
     */
    public $TaskType;

    /**
     * @var integer <p>Task completed duration</p><p>Measurement unit: ms</p>
     */
    public $TaskCostTime;

    /**
     * @var array <p>The custom parameters agreed with RCE. An array of objects in K:V format. e.g.[{"Key": "ApproverName", "Value": "bob"},{"Key":"ApproverPhone","Value": "+86131****5678"}]</p>
     */
    public $Cust;

    /**
     * @param string $PromotionId <p>The ID of the promotion</p>
     * @param string $PromotionName <p>The name of the promotion</p>
     * @param string $Description <p>The description of the promotion</p>
     * @param string $InviterUserId <p>The ID of the inviter</p>
     * @param string $TaskId <p>The ID of the task</p>
     * @param string $TaskName <p>The name of the task</p>
     * @param string $TaskType <p>Task type, such as daily check-in, ad viewing, or step accumulation</p>
     * @param integer $TaskCostTime <p>Task completed duration</p><p>Measurement unit: ms</p>
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
        if (array_key_exists("PromotionId",$param) and $param["PromotionId"] !== null) {
            $this->PromotionId = $param["PromotionId"];
        }

        if (array_key_exists("PromotionName",$param) and $param["PromotionName"] !== null) {
            $this->PromotionName = $param["PromotionName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InviterUserId",$param) and $param["InviterUserId"] !== null) {
            $this->InviterUserId = $param["InviterUserId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskCostTime",$param) and $param["TaskCostTime"] !== null) {
            $this->TaskCostTime = $param["TaskCostTime"];
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
