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
 * BatchDeleteOpsTasks request structure.
 *
 * @method array getTaskIdList() Obtain Batch Deleted Task TaskId
 * @method void setTaskIdList(array $TaskIdList) Set Batch Deleted Task TaskId
 * @method boolean getDeleteMode() Obtain true: After deletion, downstream tasks can run normally
false: After deletion, downstream tasks cannot run
 * @method void setDeleteMode(boolean $DeleteMode) Set true: After deletion, downstream tasks can run normally
false: After deletion, downstream tasks cannot run
 * @method boolean getEnableNotify() Obtain true: Notify Downstream Task Responsible Persons
false: Do Not Notify Downstream Task Responsible Persons
 * @method void setEnableNotify(boolean $EnableNotify) Set true: Notify Downstream Task Responsible Persons
false: Do Not Notify Downstream Task Responsible Persons
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 */
class BatchDeleteOpsTasksRequest extends AbstractModel
{
    /**
     * @var array Batch Deleted Task TaskId
     */
    public $TaskIdList;

    /**
     * @var boolean true: After deletion, downstream tasks can run normally
false: After deletion, downstream tasks cannot run
     */
    public $DeleteMode;

    /**
     * @var boolean true: Notify Downstream Task Responsible Persons
false: Do Not Notify Downstream Task Responsible Persons
     */
    public $EnableNotify;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @param array $TaskIdList Batch Deleted Task TaskId
     * @param boolean $DeleteMode true: After deletion, downstream tasks can run normally
false: After deletion, downstream tasks cannot run
     * @param boolean $EnableNotify true: Notify Downstream Task Responsible Persons
false: Do Not Notify Downstream Task Responsible Persons
     * @param string $ProjectId Project ID
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
        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }

        if (array_key_exists("EnableNotify",$param) and $param["EnableNotify"] !== null) {
            $this->EnableNotify = $param["EnableNotify"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
