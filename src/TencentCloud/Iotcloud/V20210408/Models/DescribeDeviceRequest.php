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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDevice request structure.
 *
 * @method string getProductId() Obtain Product ID
 * @method void setProductId(string $ProductId) Set Product ID
 * @method string getDeviceName() Obtain Device name
 * @method void setDeviceName(string $DeviceName) Set Device name
 */
class DescribeDeviceRequest extends AbstractModel
{
    /**
     * @var string Product ID
     */
    public $ProductId;

    /**
     * @var string Device name
     */
    public $DeviceName;

    /**
     * @param string $ProductId Product ID
     * @param string $DeviceName Device name
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }
    }
}
