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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task process information.
 *
 * @method string getTaskFlowId() Obtain Task flow ID.
 * @method void setTaskFlowId(string $TaskFlowId) Set Task flow ID.
 * @method string getTaskFlowName() Obtain Task flow name.
 * @method void setTaskFlowName(string $TaskFlowName) Set Task flow name.
 * @method string getQueryRewrite() Obtain Rewrite results of query.
 * @method void setQueryRewrite(string $QueryRewrite) Set Rewrite results of query.
 * @method string getHitIntent() Obtain Hit intent.
 * @method void setHitIntent(string $HitIntent) Set Hit intent.
 * @method integer getType() Obtain Task flow response type.
0: Task flow response.
1: Silent task flow.
2: Pull back script of workflow.
3: Custom response of task flow.
 * @method void setType(integer $Type) Set Task flow response type.
0: Task flow response.
1: Silent task flow.
2: Pull back script of workflow.
3: Custom response of task flow.
 */
class TaskFlowInfo extends AbstractModel
{
    /**
     * @var string Task flow ID.
     */
    public $TaskFlowId;

    /**
     * @var string Task flow name.
     */
    public $TaskFlowName;

    /**
     * @var string Rewrite results of query.
     */
    public $QueryRewrite;

    /**
     * @var string Hit intent.
     */
    public $HitIntent;

    /**
     * @var integer Task flow response type.
0: Task flow response.
1: Silent task flow.
2: Pull back script of workflow.
3: Custom response of task flow.
     */
    public $Type;

    /**
     * @param string $TaskFlowId Task flow ID.
     * @param string $TaskFlowName Task flow name.
     * @param string $QueryRewrite Rewrite results of query.
     * @param string $HitIntent Hit intent.
     * @param integer $Type Task flow response type.
0: Task flow response.
1: Silent task flow.
2: Pull back script of workflow.
3: Custom response of task flow.
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
        if (array_key_exists("TaskFlowId",$param) and $param["TaskFlowId"] !== null) {
            $this->TaskFlowId = $param["TaskFlowId"];
        }

        if (array_key_exists("TaskFlowName",$param) and $param["TaskFlowName"] !== null) {
            $this->TaskFlowName = $param["TaskFlowName"];
        }

        if (array_key_exists("QueryRewrite",$param) and $param["QueryRewrite"] !== null) {
            $this->QueryRewrite = $param["QueryRewrite"];
        }

        if (array_key_exists("HitIntent",$param) and $param["HitIntent"] !== null) {
            $this->HitIntent = $param["HitIntent"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
