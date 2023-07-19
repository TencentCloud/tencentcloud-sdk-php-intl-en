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
 * DescribeTaskList request structure.
 *
 * @method string getInstanceId() Obtain ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method void setInstanceId(string $InstanceId) Set ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getLimit() Obtain Number of taskss returned per page.  Default value: `20`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of taskss returned per page.  Default value: `20`. Maximum value: `100`.
 * @method integer getOffset() Obtain Pagination offset, which is an integral multiple of `Limit`. Calculation formula:  `offset` = `limit` * (page number - 1).
 * @method void setOffset(integer $Offset) Set Pagination offset, which is an integral multiple of `Limit`. Calculation formula:  `offset` = `limit` * (page number - 1).
 * @method array getProjectIds() Obtain Project ID Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), go to the account information menu in the top-right corner, and select **Project Management** to query the project ID.
 * @method void setProjectIds(array $ProjectIds) Set Project ID Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), go to the account information menu in the top-right corner, and select **Project Management** to query the project ID.
 * @method array getTaskTypes() Obtain Task type. Valid values:  - `FLOW_CREATE`: Create an instance. - `FLOW_MODIFYCONNECTIONCONFIG`: Adjust the number of bandwidth connections. - `FLOW_MODIFYINSTANCEPASSWORDFREE`: Modify the process of password-free access. - `FLOW_CLEARNETWORK`: Returning VPC - `FLOW_SETPWD`: Set the access password. - `FLOW_EXPORSHR`: Expand or reduce the capacity. - `FLOW_UpgradeArch`: Upgrade the instance architecture. - `FLOW_MODIFYINSTANCEPARAMS`: Modify the instance parameters. - `FLOW_MODIFYINSTACEREADONLY`: Modify read-only process. - `FLOW_CLOSE`: Disable the instance. - `FLOW_DELETE`: Delete the instance. - `FLOW_OPEN_WAN`: Enable the public network. - `FLOW_FLOW_CLEAN`: Clear the instance. - `FLOW_MODIFYINSTANCEACCOUNT`: Modify the instance account. - `FLOW_ENABLEINSTANCE_REPLICATE`: Enable the replica read-only feature. - `FLOW_DISABLEINSTANCE_REPLICATE`: Disable the replica read-only feature. - `FLOW_SWITCHINSTANCEVIP`: Swap the VIPs of instances. - FLOW_CHANGE_REPLICA_TO_MSTER: Promote the replica node to the mater node. - `FLOW_BACKUPINSTANCE`: Back up an instance.
 * @method void setTaskTypes(array $TaskTypes) Set Task type. Valid values:  - `FLOW_CREATE`: Create an instance. - `FLOW_MODIFYCONNECTIONCONFIG`: Adjust the number of bandwidth connections. - `FLOW_MODIFYINSTANCEPASSWORDFREE`: Modify the process of password-free access. - `FLOW_CLEARNETWORK`: Returning VPC - `FLOW_SETPWD`: Set the access password. - `FLOW_EXPORSHR`: Expand or reduce the capacity. - `FLOW_UpgradeArch`: Upgrade the instance architecture. - `FLOW_MODIFYINSTANCEPARAMS`: Modify the instance parameters. - `FLOW_MODIFYINSTACEREADONLY`: Modify read-only process. - `FLOW_CLOSE`: Disable the instance. - `FLOW_DELETE`: Delete the instance. - `FLOW_OPEN_WAN`: Enable the public network. - `FLOW_FLOW_CLEAN`: Clear the instance. - `FLOW_MODIFYINSTANCEACCOUNT`: Modify the instance account. - `FLOW_ENABLEINSTANCE_REPLICATE`: Enable the replica read-only feature. - `FLOW_DISABLEINSTANCE_REPLICATE`: Disable the replica read-only feature. - `FLOW_SWITCHINSTANCEVIP`: Swap the VIPs of instances. - FLOW_CHANGE_REPLICA_TO_MSTER: Promote the replica node to the mater node. - `FLOW_BACKUPINSTANCE`: Back up an instance.
 * @method string getBeginTime() Obtain Start time for executing a task,  in the format of  “2020-10-12 00:00:00”.
 * @method void setBeginTime(string $BeginTime) Set Start time for executing a task,  in the format of  “2020-10-12 00:00:00”.
 * @method string getEndTime() Obtain End time for executing a task,  in the format of  “2021-12-30 20:59:35”.
 * @method void setEndTime(string $EndTime) Set End time for executing a task,  in the format of  “2021-12-30 20:59:35”.
 * @method array getTaskStatus() Obtain This parameter is only for internal use and can be ignored.
 * @method void setTaskStatus(array $TaskStatus) Set This parameter is only for internal use and can be ignored.
 * @method array getResult() Obtain Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed)
 * @method void setResult(array $Result) Set Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed)
 * @method array getOperatorUin() Obtain The field `OperatorUin` has been disused and replaced by `OperateUin`.
 * @method void setOperatorUin(array $OperatorUin) Set The field `OperatorUin` has been disused and replaced by `OperateUin`.
 * @method array getOperateUin() Obtain Operator account ID or UIN
 * @method void setOperateUin(array $OperateUin) Set Operator account ID or UIN
 */
class DescribeTaskListRequest extends AbstractModel
{
    /**
     * @var string ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Number of taskss returned per page.  Default value: `20`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var integer Pagination offset, which is an integral multiple of `Limit`. Calculation formula:  `offset` = `limit` * (page number - 1).
     */
    public $Offset;

    /**
     * @var array Project ID Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), go to the account information menu in the top-right corner, and select **Project Management** to query the project ID.
     */
    public $ProjectIds;

    /**
     * @var array Task type. Valid values:  - `FLOW_CREATE`: Create an instance. - `FLOW_MODIFYCONNECTIONCONFIG`: Adjust the number of bandwidth connections. - `FLOW_MODIFYINSTANCEPASSWORDFREE`: Modify the process of password-free access. - `FLOW_CLEARNETWORK`: Returning VPC - `FLOW_SETPWD`: Set the access password. - `FLOW_EXPORSHR`: Expand or reduce the capacity. - `FLOW_UpgradeArch`: Upgrade the instance architecture. - `FLOW_MODIFYINSTANCEPARAMS`: Modify the instance parameters. - `FLOW_MODIFYINSTACEREADONLY`: Modify read-only process. - `FLOW_CLOSE`: Disable the instance. - `FLOW_DELETE`: Delete the instance. - `FLOW_OPEN_WAN`: Enable the public network. - `FLOW_FLOW_CLEAN`: Clear the instance. - `FLOW_MODIFYINSTANCEACCOUNT`: Modify the instance account. - `FLOW_ENABLEINSTANCE_REPLICATE`: Enable the replica read-only feature. - `FLOW_DISABLEINSTANCE_REPLICATE`: Disable the replica read-only feature. - `FLOW_SWITCHINSTANCEVIP`: Swap the VIPs of instances. - FLOW_CHANGE_REPLICA_TO_MSTER: Promote the replica node to the mater node. - `FLOW_BACKUPINSTANCE`: Back up an instance.
     */
    public $TaskTypes;

    /**
     * @var string Start time for executing a task,  in the format of  “2020-10-12 00:00:00”.
     */
    public $BeginTime;

    /**
     * @var string End time for executing a task,  in the format of  “2021-12-30 20:59:35”.
     */
    public $EndTime;

    /**
     * @var array This parameter is only for internal use and can be ignored.
     */
    public $TaskStatus;

    /**
     * @var array Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed)
     */
    public $Result;

    /**
     * @var array The field `OperatorUin` has been disused and replaced by `OperateUin`.
     */
    public $OperatorUin;

    /**
     * @var array Operator account ID or UIN
     */
    public $OperateUin;

    /**
     * @param string $InstanceId ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     * @param string $InstanceName Instance name
     * @param integer $Limit Number of taskss returned per page.  Default value: `20`. Maximum value: `100`.
     * @param integer $Offset Pagination offset, which is an integral multiple of `Limit`. Calculation formula:  `offset` = `limit` * (page number - 1).
     * @param array $ProjectIds Project ID Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), go to the account information menu in the top-right corner, and select **Project Management** to query the project ID.
     * @param array $TaskTypes Task type. Valid values:  - `FLOW_CREATE`: Create an instance. - `FLOW_MODIFYCONNECTIONCONFIG`: Adjust the number of bandwidth connections. - `FLOW_MODIFYINSTANCEPASSWORDFREE`: Modify the process of password-free access. - `FLOW_CLEARNETWORK`: Returning VPC - `FLOW_SETPWD`: Set the access password. - `FLOW_EXPORSHR`: Expand or reduce the capacity. - `FLOW_UpgradeArch`: Upgrade the instance architecture. - `FLOW_MODIFYINSTANCEPARAMS`: Modify the instance parameters. - `FLOW_MODIFYINSTACEREADONLY`: Modify read-only process. - `FLOW_CLOSE`: Disable the instance. - `FLOW_DELETE`: Delete the instance. - `FLOW_OPEN_WAN`: Enable the public network. - `FLOW_FLOW_CLEAN`: Clear the instance. - `FLOW_MODIFYINSTANCEACCOUNT`: Modify the instance account. - `FLOW_ENABLEINSTANCE_REPLICATE`: Enable the replica read-only feature. - `FLOW_DISABLEINSTANCE_REPLICATE`: Disable the replica read-only feature. - `FLOW_SWITCHINSTANCEVIP`: Swap the VIPs of instances. - FLOW_CHANGE_REPLICA_TO_MSTER: Promote the replica node to the mater node. - `FLOW_BACKUPINSTANCE`: Back up an instance.
     * @param string $BeginTime Start time for executing a task,  in the format of  “2020-10-12 00:00:00”.
     * @param string $EndTime End time for executing a task,  in the format of  “2021-12-30 20:59:35”.
     * @param array $TaskStatus This parameter is only for internal use and can be ignored.
     * @param array $Result Task execution status. Valid values: - `0` (initilized) - `1` (executing) - `2` (completed) - `4` (failed)
     * @param array $OperatorUin The field `OperatorUin` has been disused and replaced by `OperateUin`.
     * @param array $OperateUin Operator account ID or UIN
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

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }
    }
}
