<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content management task result
 *
 * @method string getJobId() Obtain ID of the task.
 * @method void setJobId(string $JobId) Set ID of the task.
 * @method string getTarget() Obtain Resource.
 * @method void setTarget(string $Target) Set Resource.
 * @method string getType() Obtain Type of the task.
 * @method void setType(string $Type) Set Type of the task.
 * @method string getMethod() Obtain Node cache purge method. valid values:.
<li>invalidate: marks as expired. a back-to-origin validation is triggered upon user request, sending an HTTP conditional request with If-None-Match and If-Modified-Since headers. If the origin server responds with 200, the node will fetch new resources from the origin and update the cache; If the origin server responds with 304, the cache will not be updated;</li>.
<Li>Delete: directly deletes the node's cache, triggering a resource fetch from the origin upon user request.</li>.
 * @method void setMethod(string $Method) Set Node cache purge method. valid values:.
<li>invalidate: marks as expired. a back-to-origin validation is triggered upon user request, sending an HTTP conditional request with If-None-Match and If-Modified-Since headers. If the origin server responds with 200, the node will fetch new resources from the origin and update the cache; If the origin server responds with 304, the cache will not be updated;</li>.
<Li>Delete: directly deletes the node's cache, triggering a resource fetch from the origin upon user request.</li>.
 * @method string getStatus() Obtain Status. valid values:.
<li>processing: indicates the operation is in progress.</li>.
<Li>Success: specifies the success status.</li>.
<li>failed: indicates a failure.</li>.
<Li>Timeout: specifies the timeout period.</li>.
<Li>Canceled: canceled.</li>.
 * @method void setStatus(string $Status) Set Status. valid values:.
<li>processing: indicates the operation is in progress.</li>.
<Li>Success: specifies the success status.</li>.
<li>failed: indicates a failure.</li>.
<Li>Timeout: specifies the timeout period.</li>.
<Li>Canceled: canceled.</li>.
 * @method string getCreateTime() Obtain Creation time of the task.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the task.
 * @method string getUpdateTime() Obtain Completion time of the task.
 * @method void setUpdateTime(string $UpdateTime) Set Completion time of the task.
 * @method string getFailType() Obtain Refresh and preheat failure type. valid values:.
<li>taskFailed: specifies the task failure.</li>.
<li>quotaExceeded: specifies the quota exceeded status.</li>.
<li>downloadManifestFailed: specifies the file failed to download.</li>.
<li>accessDenied: specifies access denied.</li>.
<li>originPullFailed: specifies the origin-pull failure.</li>.
 * @method void setFailType(string $FailType) Set Refresh and preheat failure type. valid values:.
<li>taskFailed: specifies the task failure.</li>.
<li>quotaExceeded: specifies the quota exceeded status.</li>.
<li>downloadManifestFailed: specifies the file failed to download.</li>.
<li>accessDenied: specifies access denied.</li>.
<li>originPullFailed: specifies the origin-pull failure.</li>.
 * @method string getFailMessage() Obtain Description of the reason for cache purge or warm cache failure.
 * @method void setFailMessage(string $FailMessage) Set Description of the reason for cache purge or warm cache failure.
 */
class Task extends AbstractModel
{
    /**
     * @var string ID of the task.
     */
    public $JobId;

    /**
     * @var string Resource.
     */
    public $Target;

    /**
     * @var string Type of the task.
     */
    public $Type;

    /**
     * @var string Node cache purge method. valid values:.
<li>invalidate: marks as expired. a back-to-origin validation is triggered upon user request, sending an HTTP conditional request with If-None-Match and If-Modified-Since headers. If the origin server responds with 200, the node will fetch new resources from the origin and update the cache; If the origin server responds with 304, the cache will not be updated;</li>.
<Li>Delete: directly deletes the node's cache, triggering a resource fetch from the origin upon user request.</li>.
     */
    public $Method;

    /**
     * @var string Status. valid values:.
<li>processing: indicates the operation is in progress.</li>.
<Li>Success: specifies the success status.</li>.
<li>failed: indicates a failure.</li>.
<Li>Timeout: specifies the timeout period.</li>.
<Li>Canceled: canceled.</li>.
     */
    public $Status;

    /**
     * @var string Creation time of the task.
     */
    public $CreateTime;

    /**
     * @var string Completion time of the task.
     */
    public $UpdateTime;

    /**
     * @var string Refresh and preheat failure type. valid values:.
<li>taskFailed: specifies the task failure.</li>.
<li>quotaExceeded: specifies the quota exceeded status.</li>.
<li>downloadManifestFailed: specifies the file failed to download.</li>.
<li>accessDenied: specifies access denied.</li>.
<li>originPullFailed: specifies the origin-pull failure.</li>.
     */
    public $FailType;

    /**
     * @var string Description of the reason for cache purge or warm cache failure.
     */
    public $FailMessage;

    /**
     * @param string $JobId ID of the task.
     * @param string $Target Resource.
     * @param string $Type Type of the task.
     * @param string $Method Node cache purge method. valid values:.
<li>invalidate: marks as expired. a back-to-origin validation is triggered upon user request, sending an HTTP conditional request with If-None-Match and If-Modified-Since headers. If the origin server responds with 200, the node will fetch new resources from the origin and update the cache; If the origin server responds with 304, the cache will not be updated;</li>.
<Li>Delete: directly deletes the node's cache, triggering a resource fetch from the origin upon user request.</li>.
     * @param string $Status Status. valid values:.
<li>processing: indicates the operation is in progress.</li>.
<Li>Success: specifies the success status.</li>.
<li>failed: indicates a failure.</li>.
<Li>Timeout: specifies the timeout period.</li>.
<Li>Canceled: canceled.</li>.
     * @param string $CreateTime Creation time of the task.
     * @param string $UpdateTime Completion time of the task.
     * @param string $FailType Refresh and preheat failure type. valid values:.
<li>taskFailed: specifies the task failure.</li>.
<li>quotaExceeded: specifies the quota exceeded status.</li>.
<li>downloadManifestFailed: specifies the file failed to download.</li>.
<li>accessDenied: specifies access denied.</li>.
<li>originPullFailed: specifies the origin-pull failure.</li>.
     * @param string $FailMessage Description of the reason for cache purge or warm cache failure.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FailType",$param) and $param["FailType"] !== null) {
            $this->FailType = $param["FailType"];
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }
    }
}
