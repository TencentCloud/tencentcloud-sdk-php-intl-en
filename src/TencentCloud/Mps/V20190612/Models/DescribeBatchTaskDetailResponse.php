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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBatchTaskDetail response structure.
 *
 * @method string getTaskType() Obtain Task type. Currently, the valid values include:
<Li>BatchTask: batch processing task for video workflows.</li>.
 * @method void setTaskType(string $TaskType) Set Task type. Currently, the valid values include:
<Li>BatchTask: batch processing task for video workflows.</li>.
 * @method string getStatus() Obtain Task status. Valid values:
<Li>WAITING: waiting.</li>
<Li>PROCESSING: processing.</li>
<li>FINISH: completed.</li>
 * @method void setStatus(string $Status) Set Task status. Valid values:
<Li>WAITING: waiting.</li>
<Li>PROCESSING: processing.</li>
<li>FINISH: completed.</li>
 * @method string getCreateTime() Obtain Task creation time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setCreateTime(string $CreateTime) Set Task creation time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getBeginProcessTime() Obtain Task execution start time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setBeginProcessTime(string $BeginProcessTime) Set Task execution start time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getFinishTime() Obtain Task execution completion time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setFinishTime(string $FinishTime) Set Task execution completion time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method string getTaskId() Obtain Media processing task ID.
 * @method void setTaskId(string $TaskId) Set Media processing task ID.
 * @method BatchSubTaskResult getBatchTaskResult() Obtain Video processing task information. This field has a value only when TaskType is BatchTask.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBatchTaskResult(BatchSubTaskResult $BatchTaskResult) Set Video processing task information. This field has a value only when TaskType is BatchTask.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain Event notification information of the task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set Event notification information of the task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTasksPriority() Obtain Priority of the task flow, with a value range of [-10, 10].
 * @method void setTasksPriority(integer $TasksPriority) Set Priority of the task flow, with a value range of [-10, 10].
 * @method string getSessionId() Obtain An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method string getSessionContext() Obtain Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method string getExtInfo() Obtain Additional information field, only used in specific scenarios.
 * @method void setExtInfo(string $ExtInfo) Set Additional information field, only used in specific scenarios.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeBatchTaskDetailResponse extends AbstractModel
{
    /**
     * @var string Task type. Currently, the valid values include:
<Li>BatchTask: batch processing task for video workflows.</li>.
     */
    public $TaskType;

    /**
     * @var string Task status. Valid values:
<Li>WAITING: waiting.</li>
<Li>PROCESSING: processing.</li>
<li>FINISH: completed.</li>
     */
    public $Status;

    /**
     * @var string Task creation time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $CreateTime;

    /**
     * @var string Task execution start time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $BeginProcessTime;

    /**
     * @var string Task execution completion time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $FinishTime;

    /**
     * @var string Media processing task ID.
     */
    public $TaskId;

    /**
     * @var BatchSubTaskResult Video processing task information. This field has a value only when TaskType is BatchTask.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BatchTaskResult;

    /**
     * @var TaskNotifyConfig Event notification information of the task.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskNotifyConfig;

    /**
     * @var integer Priority of the task flow, with a value range of [-10, 10].
     */
    public $TasksPriority;

    /**
     * @var string An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     */
    public $SessionId;

    /**
     * @var string Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string Additional information field, only used in specific scenarios.
     */
    public $ExtInfo;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TaskType Task type. Currently, the valid values include:
<Li>BatchTask: batch processing task for video workflows.</li>.
     * @param string $Status Task status. Valid values:
<Li>WAITING: waiting.</li>
<Li>PROCESSING: processing.</li>
<li>FINISH: completed.</li>
     * @param string $CreateTime Task creation time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $BeginProcessTime Task execution start time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $FinishTime Task execution completion time in [ISO datetime format](https://intl.cloud.tencent.com/document/product/862/37710?from_cn_redirect=1#52).
     * @param string $TaskId Media processing task ID.
     * @param BatchSubTaskResult $BatchTaskResult Video processing task information. This field has a value only when TaskType is BatchTask.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param TaskNotifyConfig $TaskNotifyConfig Event notification information of the task.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TasksPriority Priority of the task flow, with a value range of [-10, 10].
     * @param string $SessionId An identifier for deduplication. If there has been a request with the same identifier within the past seven days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     * @param string $SessionContext Source context, which is used to pass through user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     * @param string $ExtInfo Additional information field, only used in specific scenarios.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("BatchTaskResult",$param) and $param["BatchTaskResult"] !== null) {
            $this->BatchTaskResult = new BatchSubTaskResult();
            $this->BatchTaskResult->deserialize($param["BatchTaskResult"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
