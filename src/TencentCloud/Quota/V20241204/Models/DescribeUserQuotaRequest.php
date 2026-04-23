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
namespace TencentCloud\Quota\V20241204\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserQuota request structure.
 *
 * @method string getProductName() Obtain Product name
 * @method void setProductName(string $ProductName) Set Product name
 * @method Sort getQuotaId() Obtain Quota id
 * @method void setQuotaId(Sort $QuotaId) Set Quota id
 * @method string getQuotaInstanceId() Obtain Quota ID of each product
 * @method void setQuotaInstanceId(string $QuotaInstanceId) Set Quota ID of each product
 */
class DescribeUserQuotaRequest extends AbstractModel
{
    /**
     * @var string Product name
     */
    public $ProductName;

    /**
     * @var Sort Quota id
     */
    public $QuotaId;

    /**
     * @var string Quota ID of each product
     */
    public $QuotaInstanceId;

    /**
     * @param string $ProductName Product name
     * @param Sort $QuotaId Quota id
     * @param string $QuotaInstanceId Quota ID of each product
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = new Sort();
            $this->QuotaId->deserialize($param["QuotaId"]);
        }

        if (array_key_exists("QuotaInstanceId",$param) and $param["QuotaInstanceId"] !== null) {
            $this->QuotaInstanceId = $param["QuotaInstanceId"];
        }
    }
}
