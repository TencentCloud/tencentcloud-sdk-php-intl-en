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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取Instance ID
 * @method void setInstanceId(string $InstanceId) 设置Instance ID
 * @method string getInstanceName() 获取Instance name
 * @method void setInstanceName(string $InstanceName) 设置Instance name
 * @method integer getLimit() 获取Number of entries per page
 * @method void setLimit(integer $Limit) 设置Number of entries per page
 * @method integer getOffset() 获取Offset, which is an integral multiple of `Limit` (rounded down automatically)
 * @method void setOffset(integer $Offset) 设置Offset, which is an integral multiple of `Limit` (rounded down automatically)
 * @method array getProjectIds() 获取Project ID
 * @method void setProjectIds(array $ProjectIds) 设置Project ID
 * @method array getTaskTypes() 获取Task type
 * @method void setTaskTypes(array $TaskTypes) 设置Task type
 * @method string getBeginTime() 获取Start time
 * @method void setBeginTime(string $BeginTime) 设置Start time
 * @method string getEndTime() 获取End time
 * @method void setEndTime(string $EndTime) 设置End time
 * @method array getTaskStatus() 获取Task status
 * @method void setTaskStatus(array $TaskStatus) 设置Task status
 */

/**
 *DescribeTaskList request structure.
 */
class DescribeTaskListRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Number of entries per page
     */
    public $Limit;

    /**
     * @var integer Offset, which is an integral multiple of `Limit` (rounded down automatically)
     */
    public $Offset;

    /**
     * @var array Project ID
     */
    public $ProjectIds;

    /**
     * @var array Task type
     */
    public $TaskTypes;

    /**
     * @var string Start time
     */
    public $BeginTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var array Task status
     */
    public $TaskStatus;
    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param integer $Limit Number of entries per page
     * @param integer $Offset Offset, which is an integral multiple of `Limit` (rounded down automatically)
     * @param array $ProjectIds Project ID
     * @param array $TaskTypes Task type
     * @param string $BeginTime Start time
     * @param string $EndTime End time
     * @param array $TaskStatus Task status
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }
    }
}
