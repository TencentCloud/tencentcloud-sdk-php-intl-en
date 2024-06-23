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
 * UpdateWorkflowOwner request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method array getWorkflowIds() Obtain Workflow IDs
 * @method void setWorkflowIds(array $WorkflowIds) Set Workflow IDs
 * @method string getOwner() Obtain Person in charge, separated by ';'
 * @method void setOwner(string $Owner) Set Person in charge, separated by ';'
 * @method string getOwnerId() Obtain Person in Charge UserId, separated by ';'
 * @method void setOwnerId(string $OwnerId) Set Person in Charge UserId, separated by ';'
 */
class UpdateWorkflowOwnerRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var array Workflow IDs
     */
    public $WorkflowIds;

    /**
     * @var string Person in charge, separated by ';'
     */
    public $Owner;

    /**
     * @var string Person in Charge UserId, separated by ';'
     */
    public $OwnerId;

    /**
     * @param string $ProjectId Project ID
     * @param array $WorkflowIds Workflow IDs
     * @param string $Owner Person in charge, separated by ';'
     * @param string $OwnerId Person in Charge UserId, separated by ';'
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowIds",$param) and $param["WorkflowIds"] !== null) {
            $this->WorkflowIds = $param["WorkflowIds"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }
    }
}
