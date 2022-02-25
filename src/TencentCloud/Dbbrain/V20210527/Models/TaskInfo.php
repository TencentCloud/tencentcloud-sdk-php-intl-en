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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about Redis session killing task status
 *
 * @method integer getAsyncRequestId() Obtain Async task ID.
 * @method void setAsyncRequestId(integer $AsyncRequestId) Set Async task ID.
 * @method array getInstProxyList() Obtain List of all proxies of the current instance.
 * @method void setInstProxyList(array $InstProxyList) Set List of all proxies of the current instance.
 * @method integer getInstProxyCount() Obtain Total number of proxies of the current instance.
 * @method void setInstProxyCount(integer $InstProxyCount) Set Total number of proxies of the current instance.
 * @method string getCreateTime() Obtain Task creation time.
 * @method void setCreateTime(string $CreateTime) Set Task creation time.
 * @method string getStartTime() Obtain Task start time.
 * @method void setStartTime(string $StartTime) Set Task start time.
 * @method string getTaskStatus() Obtain Task status. Valid values: `created` (create), `chosen` (to be executed), `running` (being executed), `failed` (failed), and `finished` (completed).
 * @method void setTaskStatus(string $TaskStatus) Set Task status. Valid values: `created` (create), `chosen` (to be executed), `running` (being executed), `failed` (failed), and `finished` (completed).
 * @method array getFinishedProxyList() Obtain IDs of the proxies that have completed the session killing tasks.
 * @method void setFinishedProxyList(array $FinishedProxyList) Set IDs of the proxies that have completed the session killing tasks.
 * @method array getFailedProxyList() Obtain IDs of the proxies that failed to execute the session killing tasks.
 * @method void setFailedProxyList(array $FailedProxyList) Set IDs of the proxies that failed to execute the session killing tasks.
 * @method string getEndTime() Obtain Task end time.
 * @method void setEndTime(string $EndTime) Set Task end time.
 * @method integer getProgress() Obtain Task progress.
 * @method void setProgress(integer $Progress) Set Task progress.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 */
class TaskInfo extends AbstractModel
{
    /**
     * @var integer Async task ID.
     */
    public $AsyncRequestId;

    /**
     * @var array List of all proxies of the current instance.
     */
    public $InstProxyList;

    /**
     * @var integer Total number of proxies of the current instance.
     */
    public $InstProxyCount;

    /**
     * @var string Task creation time.
     */
    public $CreateTime;

    /**
     * @var string Task start time.
     */
    public $StartTime;

    /**
     * @var string Task status. Valid values: `created` (create), `chosen` (to be executed), `running` (being executed), `failed` (failed), and `finished` (completed).
     */
    public $TaskStatus;

    /**
     * @var array IDs of the proxies that have completed the session killing tasks.
     */
    public $FinishedProxyList;

    /**
     * @var array IDs of the proxies that failed to execute the session killing tasks.
     */
    public $FailedProxyList;

    /**
     * @var string Task end time.
     */
    public $EndTime;

    /**
     * @var integer Task progress.
     */
    public $Progress;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @param integer $AsyncRequestId Async task ID.
     * @param array $InstProxyList List of all proxies of the current instance.
     * @param integer $InstProxyCount Total number of proxies of the current instance.
     * @param string $CreateTime Task creation time.
     * @param string $StartTime Task start time.
     * @param string $TaskStatus Task status. Valid values: `created` (create), `chosen` (to be executed), `running` (being executed), `failed` (failed), and `finished` (completed).
     * @param array $FinishedProxyList IDs of the proxies that have completed the session killing tasks.
     * @param array $FailedProxyList IDs of the proxies that failed to execute the session killing tasks.
     * @param string $EndTime Task end time.
     * @param integer $Progress Task progress.
     * @param string $InstanceId Instance ID.
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
        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("InstProxyList",$param) and $param["InstProxyList"] !== null) {
            $this->InstProxyList = $param["InstProxyList"];
        }

        if (array_key_exists("InstProxyCount",$param) and $param["InstProxyCount"] !== null) {
            $this->InstProxyCount = $param["InstProxyCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("FinishedProxyList",$param) and $param["FinishedProxyList"] !== null) {
            $this->FinishedProxyList = $param["FinishedProxyList"];
        }

        if (array_key_exists("FailedProxyList",$param) and $param["FailedProxyList"] !== null) {
            $this->FailedProxyList = $param["FailedProxyList"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
