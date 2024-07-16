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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network information
 *
 * @method string getZone() Obtain Availability zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Availability zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSubnetIpNum() Obtain The number of available IP addresses in the current subnet
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetIpNum(integer $SubnetIpNum) Set The number of available IP addresses in the current subnet
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NetworkInfo extends AbstractModel
{
    /**
     * @var string Availability zone
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var string Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var integer The number of available IP addresses in the current subnet
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetIpNum;

    /**
     * @param string $Zone Availability zone
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SubnetIpNum The number of available IP addresses in the current subnet
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetIpNum",$param) and $param["SubnetIpNum"] !== null) {
            $this->SubnetIpNum = $param["SubnetIpNum"];
        }
    }
}
