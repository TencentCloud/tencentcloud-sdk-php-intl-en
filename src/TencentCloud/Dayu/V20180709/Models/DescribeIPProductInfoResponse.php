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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIPProductInfo response structure.
 *
 * @method array getData() Obtain Tencent Cloud product information list. If nothing is found, an empty array will be returned. Valid values:
If `Key` is ProductName, `value` indicates the name of a Tencent Cloud product instance;
If `Key` is `ProductInstanceId`, `value` indicates the ID of a Tencent Cloud product instance;
If `Key` is `ProductType`, `value` indicates the Tencent Cloud product type (cvm: CVM, clb: CLB);
If `Key` is `IP`, `value` indicates the IP of a Tencent Cloud product instance;
 * @method void setData(array $Data) Set Tencent Cloud product information list. If nothing is found, an empty array will be returned. Valid values:
If `Key` is ProductName, `value` indicates the name of a Tencent Cloud product instance;
If `Key` is `ProductInstanceId`, `value` indicates the ID of a Tencent Cloud product instance;
If `Key` is `ProductType`, `value` indicates the Tencent Cloud product type (cvm: CVM, clb: CLB);
If `Key` is `IP`, `value` indicates the IP of a Tencent Cloud product instance;
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeIPProductInfoResponse extends AbstractModel
{
    /**
     * @var array Tencent Cloud product information list. If nothing is found, an empty array will be returned. Valid values:
If `Key` is ProductName, `value` indicates the name of a Tencent Cloud product instance;
If `Key` is `ProductInstanceId`, `value` indicates the ID of a Tencent Cloud product instance;
If `Key` is `ProductType`, `value` indicates the Tencent Cloud product type (cvm: CVM, clb: CLB);
If `Key` is `IP`, `value` indicates the IP of a Tencent Cloud product instance;
     */
    public $Data;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Data Tencent Cloud product information list. If nothing is found, an empty array will be returned. Valid values:
If `Key` is ProductName, `value` indicates the name of a Tencent Cloud product instance;
If `Key` is `ProductInstanceId`, `value` indicates the ID of a Tencent Cloud product instance;
If `Key` is `ProductType`, `value` indicates the Tencent Cloud product type (cvm: CVM, clb: CLB);
If `Key` is `IP`, `value` indicates the IP of a Tencent Cloud product instance;
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new KeyValueRecord();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
