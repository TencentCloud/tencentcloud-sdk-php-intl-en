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
 * @method string getMethod() Obtain Node cache purge method, with values:
<li>invalidate: Marks as expired. A back-to-origin validation is triggered upon user request, sending an HTTP conditional request with If-None-Match and If-Modified-Since headers. If the origin server responds with 200, the node will fetch new resources from the origin and update the cache; if the origin server responds with 304, the cache will not be updated;</li>
<li>delete: Directly deletes the node's cache, triggering a resource fetch from the origin upon user request.</li>
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setMethod(string $Method) Set Node cache purge method, with values:
<li>invalidate: Marks as expired. A back-to-origin validation is triggered upon user request, sending an HTTP conditional request with If-None-Match and If-Modified-Since headers. If the origin server responds with 200, the node will fetch new resources from the origin and update the cache; if the origin server responds with 304, the cache will not be updated;</li>
<li>delete: Directly deletes the node's cache, triggering a resource fetch from the origin upon user request.</li>
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method string getStatus() Obtain Status. Valid values:
<li>processing: Processing;</li>
<li>success: Succeeded;</li>
<li>failed: Failed;</li>
<li>timeout: Timed out. </li>
 * @method void setStatus(string $Status) Set Status. Valid values:
<li>processing: Processing;</li>
<li>success: Succeeded;</li>
<li>failed: Failed;</li>
<li>timeout: Timed out. </li>
 * @method string getCreateTime() Obtain Creation time of the task.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the task.
 * @method string getUpdateTime() Obtain Completion time of the task.
 * @method void setUpdateTime(string $UpdateTime) Set Completion time of the task.
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
     * @var string Node cache purge method, with values:
<li>invalidate: Marks as expired. A back-to-origin validation is triggered upon user request, sending an HTTP conditional request with If-None-Match and If-Modified-Since headers. If the origin server responds with 200, the node will fetch new resources from the origin and update the cache; if the origin server responds with 304, the cache will not be updated;</li>
<li>delete: Directly deletes the node's cache, triggering a resource fetch from the origin upon user request.</li>
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $Method;

    /**
     * @var string Status. Valid values:
<li>processing: Processing;</li>
<li>success: Succeeded;</li>
<li>failed: Failed;</li>
<li>timeout: Timed out. </li>
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
     * @param string $JobId ID of the task.
     * @param string $Target Resource.
     * @param string $Type Type of the task.
     * @param string $Method Node cache purge method, with values:
<li>invalidate: Marks as expired. A back-to-origin validation is triggered upon user request, sending an HTTP conditional request with If-None-Match and If-Modified-Since headers. If the origin server responds with 200, the node will fetch new resources from the origin and update the cache; if the origin server responds with 304, the cache will not be updated;</li>
<li>delete: Directly deletes the node's cache, triggering a resource fetch from the origin upon user request.</li>
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param string $Status Status. Valid values:
<li>processing: Processing;</li>
<li>success: Succeeded;</li>
<li>failed: Failed;</li>
<li>timeout: Timed out. </li>
     * @param string $CreateTime Creation time of the task.
     * @param string $UpdateTime Completion time of the task.
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
    }
}
