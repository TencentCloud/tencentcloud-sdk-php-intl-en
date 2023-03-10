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
 * ResumeMigrateJob request structure.
 *
 * @method string getJobId() Obtain Data migration task ID
 * @method void setJobId(string $JobId) Set Data migration task ID
 * @method string getResumeOption() Obtain Task resumption mode. Valid values: `clearData` (Clearing the target instance data); `overwrite` (Executing the task in overwrite mode); `normal` (Following the normal process without additional operations). `clearData` and `overwrite` are only valid for Redis links and `normal` for non-Redis links.
 * @method void setResumeOption(string $ResumeOption) Set Task resumption mode. Valid values: `clearData` (Clearing the target instance data); `overwrite` (Executing the task in overwrite mode); `normal` (Following the normal process without additional operations). `clearData` and `overwrite` are only valid for Redis links and `normal` for non-Redis links.
 */
class ResumeMigrateJobRequest extends AbstractModel
{
    /**
     * @var string Data migration task ID
     */
    public $JobId;

    /**
     * @var string Task resumption mode. Valid values: `clearData` (Clearing the target instance data); `overwrite` (Executing the task in overwrite mode); `normal` (Following the normal process without additional operations). `clearData` and `overwrite` are only valid for Redis links and `normal` for non-Redis links.
     */
    public $ResumeOption;

    /**
     * @param string $JobId Data migration task ID
     * @param string $ResumeOption Task resumption mode. Valid values: `clearData` (Clearing the target instance data); `overwrite` (Executing the task in overwrite mode); `normal` (Following the normal process without additional operations). `clearData` and `overwrite` are only valid for Redis links and `normal` for non-Redis links.
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

        if (array_key_exists("ResumeOption",$param) and $param["ResumeOption"] !== null) {
            $this->ResumeOption = $param["ResumeOption"];
        }
    }
}
