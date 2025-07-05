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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExportJobResult request structure.
 *
 * @method string getJobId() Obtain Value of the `JobId` field returned by `CreateExportComplianceStatusListJob`
 * @method void setJobId(string $JobId) Set Value of the `JobId` field returned by `CreateExportComplianceStatusListJob`
 */
class DescribeExportJobResultRequest extends AbstractModel
{
    /**
     * @var string Value of the `JobId` field returned by `CreateExportComplianceStatusListJob`
     */
    public $JobId;

    /**
     * @param string $JobId Value of the `JobId` field returned by `CreateExportComplianceStatusListJob`
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
    }
}
