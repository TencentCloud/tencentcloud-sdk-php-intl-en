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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAuditLogFile request structure.
 *
 * @method string getFileName() Obtain Audit log file name, which can be obtained through the [DescribeAuditLogFiles](https://www.tencentcloud.comom/document/api/236/45454?from_cn_redirect=1) API.
 * @method void setFileName(string $FileName) Set Audit log file name, which can be obtained through the [DescribeAuditLogFiles](https://www.tencentcloud.comom/document/api/236/45454?from_cn_redirect=1) API.
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.comom/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.comom/document/product/236/15872?from_cn_redirect=1) API.
 */
class DeleteAuditLogFileRequest extends AbstractModel
{
    /**
     * @var string Audit log file name, which can be obtained through the [DescribeAuditLogFiles](https://www.tencentcloud.comom/document/api/236/45454?from_cn_redirect=1) API.
     */
    public $FileName;

    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.comom/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @param string $FileName Audit log file name, which can be obtained through the [DescribeAuditLogFiles](https://www.tencentcloud.comom/document/api/236/45454?from_cn_redirect=1) API.
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.comom/document/product/236/15872?from_cn_redirect=1) API.
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
