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
 * DescribeDataBackupOverview request structure.
 *
 * @method string getProduct() Obtain The cloud database product type for which you need to query the data backup overview. Value is: mysql refers to two-node/three-node high-availability instances, mysql-basic refers to single-node (cloud disk) instances, mysql-cluster refers to cloud disk edition instances.
 * @method void setProduct(string $Product) Set The cloud database product type for which you need to query the data backup overview. Value is: mysql refers to two-node/three-node high-availability instances, mysql-basic refers to single-node (cloud disk) instances, mysql-cluster refers to cloud disk edition instances.
 */
class DescribeDataBackupOverviewRequest extends AbstractModel
{
    /**
     * @var string The cloud database product type for which you need to query the data backup overview. Value is: mysql refers to two-node/three-node high-availability instances, mysql-basic refers to single-node (cloud disk) instances, mysql-cluster refers to cloud disk edition instances.
     */
    public $Product;

    /**
     * @param string $Product The cloud database product type for which you need to query the data backup overview. Value is: mysql refers to two-node/three-node high-availability instances, mysql-basic refers to single-node (cloud disk) instances, mysql-cluster refers to cloud disk edition instances.
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
