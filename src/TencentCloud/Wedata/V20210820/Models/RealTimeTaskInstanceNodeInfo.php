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
 * Current Node Information of Real-time Task Instance
 *
 * @method string getTaskName() Obtain Task Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskName(string $TaskName) Set Task Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskId() Obtain Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getInstanceNodeInfoList() Obtain Real-time Task Instance Node Information List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceNodeInfoList(array $InstanceNodeInfoList) Set Real-time Task Instance Node Information List
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RealTimeTaskInstanceNodeInfo extends AbstractModel
{
    /**
     * @var string Task Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskName;

    /**
     * @var string Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var array Real-time Task Instance Node Information List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceNodeInfoList;

    /**
     * @param string $TaskName Task Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskId Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $InstanceNodeInfoList Real-time Task Instance Node Information List
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("InstanceNodeInfoList",$param) and $param["InstanceNodeInfoList"] !== null) {
            $this->InstanceNodeInfoList = [];
            foreach ($param["InstanceNodeInfoList"] as $key => $value){
                $obj = new InstanceNodeInfo();
                $obj->deserialize($value);
                array_push($this->InstanceNodeInfoList, $obj);
            }
        }
    }
}
