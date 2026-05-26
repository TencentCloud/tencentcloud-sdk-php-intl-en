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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditLogFiles request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID</p>
 * @method string getProduct() Obtain <p>Product name</p><p>Input parameter limit: postgres</p>
 * @method void setProduct(string $Product) Set <p>Product name</p><p>Input parameter limit: postgres</p>
 * @method string getFileName() Obtain <p>Log file name</p>
 * @method void setFileName(string $FileName) Set <p>Log file name</p>
 * @method integer getLimit() Obtain <p>Query limit</p><p>Value range: [1, 300]</p>
 * @method void setLimit(integer $Limit) Set <p>Query limit</p><p>Value range: [1, 300]</p>
 * @method integer getOffset() Obtain <p>Offset</p><p>Value range: [0, 1000]</p>
 * @method void setOffset(integer $Offset) Set <p>Offset</p><p>Value range: [0, 1000]</p>
 */
class DescribeAuditLogFilesRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Product name</p><p>Input parameter limit: postgres</p>
     */
    public $Product;

    /**
     * @var string <p>Log file name</p>
     */
    public $FileName;

    /**
     * @var integer <p>Query limit</p><p>Value range: [1, 300]</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset</p><p>Value range: [0, 1000]</p>
     */
    public $Offset;

    /**
     * @param string $InstanceId <p>Instance ID</p>
     * @param string $Product <p>Product name</p><p>Input parameter limit: postgres</p>
     * @param string $FileName <p>Log file name</p>
     * @param integer $Limit <p>Query limit</p><p>Value range: [1, 300]</p>
     * @param integer $Offset <p>Offset</p><p>Value range: [0, 1000]</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
