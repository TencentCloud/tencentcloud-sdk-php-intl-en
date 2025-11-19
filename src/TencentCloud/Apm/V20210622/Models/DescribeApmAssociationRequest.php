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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApmAssociation request structure.
 *
 * @method string getProductName() Obtain Associated product name. currently only supports Prometheus.
 * @method void setProductName(string $ProductName) Set Associated product name. currently only supports Prometheus.
 * @method string getInstanceId() Obtain Business System Name
 * @method void setInstanceId(string $InstanceId) Set Business System Name
 */
class DescribeApmAssociationRequest extends AbstractModel
{
    /**
     * @var string Associated product name. currently only supports Prometheus.
     */
    public $ProductName;

    /**
     * @var string Business System Name
     */
    public $InstanceId;

    /**
     * @param string $ProductName Associated product name. currently only supports Prometheus.
     * @param string $InstanceId Business System Name
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
