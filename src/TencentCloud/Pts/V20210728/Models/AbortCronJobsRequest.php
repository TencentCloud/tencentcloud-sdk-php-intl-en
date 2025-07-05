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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AbortCronJobs request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method array getCronJobIds() Obtain Array of CronJob ID.
 * @method void setCronJobIds(array $CronJobIds) Set Array of CronJob ID.
 */
class AbortCronJobsRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var array Array of CronJob ID.
     */
    public $CronJobIds;

    /**
     * @param string $ProjectId Project ID.
     * @param array $CronJobIds Array of CronJob ID.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CronJobIds",$param) and $param["CronJobIds"] !== null) {
            $this->CronJobIds = $param["CronJobIds"];
        }
    }
}
