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
 * Content management task result.
 *
 * @method string getJobId() Obtain Task ID.
 * @method void setJobId(string $JobId) Set Task ID.
 * @method string getTarget() Obtain Resource.
 * @method void setTarget(string $Target) Set Resource.
 * @method string getType() Obtain Task type.
 * @method void setType(string $Type) Set Task type.
 * @method string getMethod() Obtain Node cache purge method, with values:
<li>invalidate: Marks as expired. A back-to-origin validation is triggered upon user request, sending an HTTP conditional request with If-None-Match and If-Modified-Since headers. If the origin server responds with 200, the node will fetch new resources from the origin and update the cache; if the origin server responds with 304, the cache will not be updated;</li>
<li>delete: Directly deletes the node's cache, triggering a resource fetch from the origin upon user request.</li>
 * @method void setMethod(string $Method) Set Node cache purge method, with values:
<li>invalidate: Marks as expired. A back-to-origin validation is triggered upon user request, sending an HTTP conditional request with If-None-Match and If-Modified-Since headers. If the origin server responds with 200, the node will fetch new resources from the origin and update the cache; if the origin server responds with 304, the cache will not be updated;</li>
<li>delete: Directly deletes the node's cache, triggering a resource fetch from the origin upon user request.</li>
 * @method string getStatus() Obtain Status. Valid values:
<li>processing: Processing;</li>
<li>success: Succeeded;</li>
<li>failed: Failed;</li>
<li>timeout: Timed out;</li>
<li>canceled: Canceled.</li>
 * @method void setStatus(string $Status) Set Status. Valid values:
<li>processing: Processing;</li>
<li>success: Succeeded;</li>
<li>failed: Failed;</li>
<li>timeout: Timed out;</li>
<li>canceled: Canceled.</li>
 * @method string getCreateTime() Obtain Task creation time.
 * @method void setCreateTime(string $CreateTime) Set Task creation time.
 * @method string getUpdateTime() Obtain Task completion time.
 * @method void setUpdateTime(string $UpdateTime) Set Task completion time.
 * @method string getFailType() Obtain Failure type of update and preheating. Valid values:
<li>taskFailed: Task failure;</li>
<li>quotaExceeded: quota exceeded;</li>
<li>downloadManifestFailed: Failed to download the description file;</li>
<li>accessDenied: access denied.</li>
<li>originPullFailed: origin-pull failure.</li>
 * @method void setFailType(string $FailType) Set Failure type of update and preheating. Valid values:
<li>taskFailed: Task failure;</li>
<li>quotaExceeded: quota exceeded;</li>
<li>downloadManifestFailed: Failed to download the description file;</li>
<li>accessDenied: access denied.</li>
<li>originPullFailed: origin-pull failure.</li>
 * @method string getFailMessage() Obtain Failure reason description for cache purge and cache pre-warming.
 * @method void setFailMessage(string $FailMessage) Set Failure reason description for cache purge and cache pre-warming.
 */
class Task extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $JobId;

    /**
     * @var string Resource.
     */
    public $Target;

    /**
     * @var string Task type.
     */
    public $Type;

    /**
     * @var string Node cache purge method, with values:
<li>invalidate: Marks as expired. A back-to-origin validation is triggered upon user request, sending an HTTP conditional request with If-None-Match and If-Modified-Since headers. If the origin server responds with 200, the node will fetch new resources from the origin and update the cache; if the origin server responds with 304, the cache will not be updated;</li>
<li>delete: Directly deletes the node's cache, triggering a resource fetch from the origin upon user request.</li>
     */
    public $Method;

    /**
     * @var string Status. Valid values:
<li>processing: Processing;</li>
<li>success: Succeeded;</li>
<li>failed: Failed;</li>
<li>timeout: Timed out;</li>
<li>canceled: Canceled.</li>
     */
    public $Status;

    /**
     * @var string Task creation time.
     */
    public $CreateTime;

    /**
     * @var string Task completion time.
     */
    public $UpdateTime;

    /**
     * @var string Failure type of update and preheating. Valid values:
<li>taskFailed: Task failure;</li>
<li>quotaExceeded: quota exceeded;</li>
<li>downloadManifestFailed: Failed to download the description file;</li>
<li>accessDenied: access denied.</li>
<li>originPullFailed: origin-pull failure.</li>
     */
    public $FailType;

    /**
     * @var string Failure reason description for cache purge and cache pre-warming.
     */
    public $FailMessage;

    /**
     * @param string $JobId Task ID.
     * @param string $Target Resource.
     * @param string $Type Task type.
     * @param string $Method Node cache purge method, with values:
<li>invalidate: Marks as expired. A back-to-origin validation is triggered upon user request, sending an HTTP conditional request with If-None-Match and If-Modified-Since headers. If the origin server responds with 200, the node will fetch new resources from the origin and update the cache; if the origin server responds with 304, the cache will not be updated;</li>
<li>delete: Directly deletes the node's cache, triggering a resource fetch from the origin upon user request.</li>
     * @param string $Status Status. Valid values:
<li>processing: Processing;</li>
<li>success: Succeeded;</li>
<li>failed: Failed;</li>
<li>timeout: Timed out;</li>
<li>canceled: Canceled.</li>
     * @param string $CreateTime Task creation time.
     * @param string $UpdateTime Task completion time.
     * @param string $FailType Failure type of update and preheating. Valid values:
<li>taskFailed: Task failure;</li>
<li>quotaExceeded: quota exceeded;</li>
<li>downloadManifestFailed: Failed to download the description file;</li>
<li>accessDenied: access denied.</li>
<li>originPullFailed: origin-pull failure.</li>
     * @param string $FailMessage Failure reason description for cache purge and cache pre-warming.
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
