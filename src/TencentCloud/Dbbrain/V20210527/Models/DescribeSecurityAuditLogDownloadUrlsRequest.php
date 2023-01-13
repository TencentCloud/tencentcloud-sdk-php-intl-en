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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityAuditLogDownloadUrls request structure.
 *
 * @method string getSecAuditGroupId() Obtain Security audit group ID.
 * @method void setSecAuditGroupId(string $SecAuditGroupId) Set Security audit group ID.
 * @method integer getAsyncRequestId() Obtain Async task Id.
 * @method void setAsyncRequestId(integer $AsyncRequestId) Set Async task Id.
 * @method string getProduct() Obtain Service type. Valid value: `mysql` (TencentDB for MySQL).
 * @method void setProduct(string $Product) Set Service type. Valid value: `mysql` (TencentDB for MySQL).
 */
class DescribeSecurityAuditLogDownloadUrlsRequest extends AbstractModel
{
    /**
     * @var string Security audit group ID.
     */
    public $SecAuditGroupId;

    /**
     * @var integer Async task Id.
     */
    public $AsyncRequestId;

    /**
     * @var string Service type. Valid value: `mysql` (TencentDB for MySQL).
     */
    public $Product;

    /**
     * @param string $SecAuditGroupId Security audit group ID.
     * @param integer $AsyncRequestId Async task Id.
     * @param string $Product Service type. Valid value: `mysql` (TencentDB for MySQL).
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
        if (array_key_exists("SecAuditGroupId",$param) and $param["SecAuditGroupId"] !== null) {
            $this->SecAuditGroupId = $param["SecAuditGroupId"];
        }

        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
