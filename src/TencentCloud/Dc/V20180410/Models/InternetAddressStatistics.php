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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Public IP address statistics of internet tunnels
 *
 * @method string getRegion() Obtain Region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getSubnetNum() Obtain Number of public IP addresses for internet tunnels
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubnetNum(integer $SubnetNum) Set Number of public IP addresses for internet tunnels
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class InternetAddressStatistics extends AbstractModel
{
    /**
     * @var string Region
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var integer Number of public IP addresses for internet tunnels
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SubnetNum;

    /**
     * @param string $Region Region
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $SubnetNum Number of public IP addresses for internet tunnels
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SubnetNum",$param) and $param["SubnetNum"] !== null) {
            $this->SubnetNum = $param["SubnetNum"];
        }
    }
}
