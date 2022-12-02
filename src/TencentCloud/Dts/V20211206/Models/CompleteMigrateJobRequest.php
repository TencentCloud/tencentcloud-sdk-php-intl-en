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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CompleteMigrateJob request structure.
 *
 * @method string getJobId() Obtain Data migration task ID
 * @method void setJobId(string $JobId) Set Data migration task ID
 * @method string getCompleteMode() Obtain The way to complete the task, which is supported only for legacy MySQL migration tasks. Valid values: `waitForSync` (wait for the source-replica lag to become 0 before stopping); `immediately` (complete immediately without waiting for source-replica sync). Default value: `waitForSync`.
 * @method void setCompleteMode(string $CompleteMode) Set The way to complete the task, which is supported only for legacy MySQL migration tasks. Valid values: `waitForSync` (wait for the source-replica lag to become 0 before stopping); `immediately` (complete immediately without waiting for source-replica sync). Default value: `waitForSync`.
 */
class CompleteMigrateJobRequest extends AbstractModel
{
    /**
     * @var string Data migration task ID
     */
    public $JobId;

    /**
     * @var string The way to complete the task, which is supported only for legacy MySQL migration tasks. Valid values: `waitForSync` (wait for the source-replica lag to become 0 before stopping); `immediately` (complete immediately without waiting for source-replica sync). Default value: `waitForSync`.
     */
    public $CompleteMode;

    /**
     * @param string $JobId Data migration task ID
     * @param string $CompleteMode The way to complete the task, which is supported only for legacy MySQL migration tasks. Valid values: `waitForSync` (wait for the source-replica lag to become 0 before stopping); `immediately` (complete immediately without waiting for source-replica sync). Default value: `waitForSync`.
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

        if (array_key_exists("CompleteMode",$param) and $param["CompleteMode"] !== null) {
            $this->CompleteMode = $param["CompleteMode"];
        }
    }
}
