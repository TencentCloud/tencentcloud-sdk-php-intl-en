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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule template change history.
 *
 * @method integer getTaskId() Obtain Task ID.
 * @method void setTaskId(integer $TaskId) Set Task ID.
 * @method RuleTemplateInfo getModifyBeforeInfo() Obtain Details of the original rule template.
 * @method void setModifyBeforeInfo(RuleTemplateInfo $ModifyBeforeInfo) Set Details of the original rule template.
 * @method RuleTemplateInfo getModifyAfterInfo() Obtain Details of the modified rule template.
 * @method void setModifyAfterInfo(RuleTemplateInfo $ModifyAfterInfo) Set Details of the modified rule template.
 * @method array getAffectedInstances() Obtain Affected instances.
 * @method void setAffectedInstances(array $AffectedInstances) Set Affected instances.
 * @method string getOperator() Obtain Operator (account UIN).
 * @method void setOperator(string $Operator) Set Operator (account UIN).
 * @method string getUpdateTime() Obtain Time of the change.
 * @method void setUpdateTime(string $UpdateTime) Set Time of the change.
 */
class RuleTemplateRecordInfo extends AbstractModel
{
    /**
     * @var integer Task ID.
     */
    public $TaskId;

    /**
     * @var RuleTemplateInfo Details of the original rule template.
     */
    public $ModifyBeforeInfo;

    /**
     * @var RuleTemplateInfo Details of the modified rule template.
     */
    public $ModifyAfterInfo;

    /**
     * @var array Affected instances.
     */
    public $AffectedInstances;

    /**
     * @var string Operator (account UIN).
     */
    public $Operator;

    /**
     * @var string Time of the change.
     */
    public $UpdateTime;

    /**
     * @param integer $TaskId Task ID.
     * @param RuleTemplateInfo $ModifyBeforeInfo Details of the original rule template.
     * @param RuleTemplateInfo $ModifyAfterInfo Details of the modified rule template.
     * @param array $AffectedInstances Affected instances.
     * @param string $Operator Operator (account UIN).
     * @param string $UpdateTime Time of the change.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ModifyBeforeInfo",$param) and $param["ModifyBeforeInfo"] !== null) {
            $this->ModifyBeforeInfo = new RuleTemplateInfo();
            $this->ModifyBeforeInfo->deserialize($param["ModifyBeforeInfo"]);
        }

        if (array_key_exists("ModifyAfterInfo",$param) and $param["ModifyAfterInfo"] !== null) {
            $this->ModifyAfterInfo = new RuleTemplateInfo();
            $this->ModifyAfterInfo->deserialize($param["ModifyAfterInfo"]);
        }

        if (array_key_exists("AffectedInstances",$param) and $param["AffectedInstances"] !== null) {
            $this->AffectedInstances = $param["AffectedInstances"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
