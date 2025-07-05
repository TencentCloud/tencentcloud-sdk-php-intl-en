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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReportTaskDetail request structure.
 *
 * @method string getTenantId() Obtain Tenant id.
 * @method void setTenantId(string $TenantId) Set Tenant id.
 * @method string getEngineTaskId() Obtain Engine task id.
 * @method void setEngineTaskId(string $EngineTaskId) Set Engine task id.
 */
class DescribeReportTaskDetailRequest extends AbstractModel
{
    /**
     * @var string Tenant id.
     */
    public $TenantId;

    /**
     * @var string Engine task id.
     */
    public $EngineTaskId;

    /**
     * @param string $TenantId Tenant id.
     * @param string $EngineTaskId Engine task id.
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
        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("EngineTaskId",$param) and $param["EngineTaskId"] !== null) {
            $this->EngineTaskId = $param["EngineTaskId"];
        }
    }
}
