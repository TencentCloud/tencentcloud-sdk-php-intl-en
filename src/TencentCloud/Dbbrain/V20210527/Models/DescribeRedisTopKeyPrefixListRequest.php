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
 * DescribeRedisTopKeyPrefixList request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getDate() Obtain Date for query, such as `2021-05-27`. You can select a date as early as in the last 30 days for query.
 * @method void setDate(string $Date) Set Date for query, such as `2021-05-27`. You can select a date as early as in the last 30 days for query.
 * @method string getProduct() Obtain Service type. Valid value: `redis` (TencentDB for Redis).
 * @method void setProduct(string $Product) Set Service type. Valid value: `redis` (TencentDB for Redis).
 * @method integer getLimit() Obtain The number of queried items. Default value: `20`. Max value: `100`.
 * @method void setLimit(integer $Limit) Set The number of queried items. Default value: `20`. Max value: `100`.
 */
class DescribeRedisTopKeyPrefixListRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Date for query, such as `2021-05-27`. You can select a date as early as in the last 30 days for query.
     */
    public $Date;

    /**
     * @var string Service type. Valid value: `redis` (TencentDB for Redis).
     */
    public $Product;

    /**
     * @var integer The number of queried items. Default value: `20`. Max value: `100`.
     */
    public $Limit;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Date Date for query, such as `2021-05-27`. You can select a date as early as in the last 30 days for query.
     * @param string $Product Service type. Valid value: `redis` (TencentDB for Redis).
     * @param integer $Limit The number of queried items. Default value: `20`. Max value: `100`.
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

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
