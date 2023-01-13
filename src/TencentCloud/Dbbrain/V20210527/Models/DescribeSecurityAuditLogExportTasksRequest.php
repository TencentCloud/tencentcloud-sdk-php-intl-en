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
 * DescribeSecurityAuditLogExportTasks request structure.
 *
 * @method string getSecAuditGroupId() Obtain Security audit group ID.
 * @method void setSecAuditGroupId(string $SecAuditGroupId) Set Security audit group ID.
 * @method string getProduct() Obtain Service type. Valid value: `mysql` (TencentDB for MySQL).
 * @method void setProduct(string $Product) Set Service type. Valid value: `mysql` (TencentDB for MySQL).
 * @method array getAsyncRequestIds() Obtain List of log export task IDs.
 * @method void setAsyncRequestIds(array $AsyncRequestIds) Set List of log export task IDs.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method integer getLimit() Obtain Number of returned results. Default value: `20`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: `20`. Maximum value: `100`.
 */
class DescribeSecurityAuditLogExportTasksRequest extends AbstractModel
{
    /**
     * @var string Security audit group ID.
     */
    public $SecAuditGroupId;

    /**
     * @var string Service type. Valid value: `mysql` (TencentDB for MySQL).
     */
    public $Product;

    /**
     * @var array List of log export task IDs.
     */
    public $AsyncRequestIds;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: `20`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @param string $SecAuditGroupId Security audit group ID.
     * @param string $Product Service type. Valid value: `mysql` (TencentDB for MySQL).
     * @param array $AsyncRequestIds List of log export task IDs.
     * @param integer $Offset Offset. Default value: `0`.
     * @param integer $Limit Number of returned results. Default value: `20`. Maximum value: `100`.
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

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("AsyncRequestIds",$param) and $param["AsyncRequestIds"] !== null) {
            $this->AsyncRequestIds = $param["AsyncRequestIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
