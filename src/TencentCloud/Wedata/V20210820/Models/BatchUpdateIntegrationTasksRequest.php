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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchUpdateIntegrationTasks request structure.
 *
 * @method array getTaskIds() Obtain Task ID
 * @method void setTaskIds(array $TaskIds) Set Task ID
 * @method string getIncharge() Obtain Person in Charge (separate multiple persons in charge with a lowercase semicolon; offline tasks use the account name, real-time tasks use the account ID)
 * @method void setIncharge(string $Incharge) Set Person in Charge (separate multiple persons in charge with a lowercase semicolon; offline tasks use the account name, real-time tasks use the account ID)
 * @method integer getTaskType() Obtain Task Type
 * @method void setTaskType(integer $TaskType) Set Task Type
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getInchargeIds() Obtain Responsible Person ID (separate multiple persons in charge with a lowercase semicolon)
 * @method void setInchargeIds(string $InchargeIds) Set Responsible Person ID (separate multiple persons in charge with a lowercase semicolon)
 * @method array getTaskNames() Obtain This batch operation involves tasks for auditing
 * @method void setTaskNames(array $TaskNames) Set This batch operation involves tasks for auditing
 */
class BatchUpdateIntegrationTasksRequest extends AbstractModel
{
    /**
     * @var array Task ID
     */
    public $TaskIds;

    /**
     * @var string Person in Charge (separate multiple persons in charge with a lowercase semicolon; offline tasks use the account name, real-time tasks use the account ID)
     */
    public $Incharge;

    /**
     * @var integer Task Type
     */
    public $TaskType;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Responsible Person ID (separate multiple persons in charge with a lowercase semicolon)
     */
    public $InchargeIds;

    /**
     * @var array This batch operation involves tasks for auditing
     */
    public $TaskNames;

    /**
     * @param array $TaskIds Task ID
     * @param string $Incharge Person in Charge (separate multiple persons in charge with a lowercase semicolon; offline tasks use the account name, real-time tasks use the account ID)
     * @param integer $TaskType Task Type
     * @param string $ProjectId Project ID
     * @param string $InchargeIds Responsible Person ID (separate multiple persons in charge with a lowercase semicolon)
     * @param array $TaskNames This batch operation involves tasks for auditing
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("Incharge",$param) and $param["Incharge"] !== null) {
            $this->Incharge = $param["Incharge"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InchargeIds",$param) and $param["InchargeIds"] !== null) {
            $this->InchargeIds = $param["InchargeIds"];
        }

        if (array_key_exists("TaskNames",$param) and $param["TaskNames"] !== null) {
            $this->TaskNames = $param["TaskNames"];
        }
    }
}
