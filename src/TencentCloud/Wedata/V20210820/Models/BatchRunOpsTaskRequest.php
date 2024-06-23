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
 * BatchRunOpsTask request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getEnableMakeUp() Obtain Whether to Supplement Intermediate Instances, 0 for not supplementing; 1 for supplementing
 * @method void setEnableMakeUp(integer $EnableMakeUp) Set Whether to Supplement Intermediate Instances, 0 for not supplementing; 1 for supplementing
 * @method array getTasks() Obtain Task ID list
 * @method void setTasks(array $Tasks) Set Task ID list
 */
class BatchRunOpsTaskRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Whether to Supplement Intermediate Instances, 0 for not supplementing; 1 for supplementing
     */
    public $EnableMakeUp;

    /**
     * @var array Task ID list
     */
    public $Tasks;

    /**
     * @param string $ProjectId Project ID
     * @param integer $EnableMakeUp Whether to Supplement Intermediate Instances, 0 for not supplementing; 1 for supplementing
     * @param array $Tasks Task ID list
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

        if (array_key_exists("EnableMakeUp",$param) and $param["EnableMakeUp"] !== null) {
            $this->EnableMakeUp = $param["EnableMakeUp"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = $param["Tasks"];
        }
    }
}
