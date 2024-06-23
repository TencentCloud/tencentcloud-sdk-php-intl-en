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
 * DeleteOfflineTask request structure.
 *
 * @method string getOperatorName() Obtain Operator's name
 * @method void setOperatorName(string $OperatorName) Set Operator's name
 * @method string getProjectId() Obtain Project/workspace ID
 * @method void setProjectId(string $ProjectId) Set Project/workspace ID
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method boolean getVirtualFlag() Obtain Virtual task marker (defaults to false, consistent with previous scheduling interfaces)
 * @method void setVirtualFlag(boolean $VirtualFlag) Set Virtual task marker (defaults to false, consistent with previous scheduling interfaces)
 */
class DeleteOfflineTaskRequest extends AbstractModel
{
    /**
     * @var string Operator's name
     */
    public $OperatorName;

    /**
     * @var string Project/workspace ID
     */
    public $ProjectId;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var boolean Virtual task marker (defaults to false, consistent with previous scheduling interfaces)
     */
    public $VirtualFlag;

    /**
     * @param string $OperatorName Operator's name
     * @param string $ProjectId Project/workspace ID
     * @param string $TaskId Task ID
     * @param boolean $VirtualFlag Virtual task marker (defaults to false, consistent with previous scheduling interfaces)
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
        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }
    }
}
