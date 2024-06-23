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
 * Details of the task dependency edge
 *
 * @method string getId() Obtain Edge ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setId(string $Id) Set Edge ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLinkKey() Obtain Edge key
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLinkKey(string $LinkKey) Set Edge key
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskFrom() Obtain Source node of the edge
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskFrom(string $TaskFrom) Set Source node of the edge
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskTo() Obtain Target node of the edge
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskTo(string $TaskTo) Set Target node of the edge
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInCharge() Obtain Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInCharge(string $InCharge) Set Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getLinkDependencyType() Obtain Dependency Relationship Between Parent and Child TasksNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setLinkDependencyType(string $LinkDependencyType) Set Dependency Relationship Between Parent and Child TasksNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOffset() Obtain Dependency offset between parent and child tasks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOffset(string $Offset) Set Dependency offset between parent and child tasks
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLinkType() Obtain Type of edge
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLinkType(string $LinkType) Set Type of edge
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkflowId() Obtain Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
 */
class LinkOpsDto extends AbstractModel
{
    /**
     * @var string Edge ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Id;

    /**
     * @var string Edge key
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LinkKey;

    /**
     * @var string Source node of the edge
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskFrom;

    /**
     * @var string Target node of the edge
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskTo;

    /**
     * @var string Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $InCharge;

    /**
     * @var string Dependency Relationship Between Parent and Child TasksNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $LinkDependencyType;

    /**
     * @var string Dependency offset between parent and child tasks
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Offset;

    /**
     * @var string Type of edge
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LinkType;

    /**
     * @var string Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowId;

    /**
     * @param string $Id Edge ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LinkKey Edge key
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskFrom Source node of the edge
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskTo Target node of the edge
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InCharge Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $LinkDependencyType Dependency Relationship Between Parent and Child TasksNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Offset Dependency offset between parent and child tasks
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LinkType Type of edge
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkflowId Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("LinkKey",$param) and $param["LinkKey"] !== null) {
            $this->LinkKey = $param["LinkKey"];
        }

        if (array_key_exists("TaskFrom",$param) and $param["TaskFrom"] !== null) {
            $this->TaskFrom = $param["TaskFrom"];
        }

        if (array_key_exists("TaskTo",$param) and $param["TaskTo"] !== null) {
            $this->TaskTo = $param["TaskTo"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("LinkDependencyType",$param) and $param["LinkDependencyType"] !== null) {
            $this->LinkDependencyType = $param["LinkDependencyType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("LinkType",$param) and $param["LinkType"] !== null) {
            $this->LinkType = $param["LinkType"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }
    }
}
