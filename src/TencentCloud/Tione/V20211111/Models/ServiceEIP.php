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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service shared Elastic Network Interface (ENI) settings.
 *
 * @method boolean getEnableEIP() Obtain Whether to enable access from the TI-ONE private network to external resources.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableEIP(boolean $EnableEIP) Set Whether to enable access from the TI-ONE private network to external resources.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain User VPC ID.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set User VPC ID.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain User subnet ID.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set User subnet ID.Note: This field may return null, indicating that no valid values can be obtained.
 */
class ServiceEIP extends AbstractModel
{
    /**
     * @var boolean Whether to enable access from the TI-ONE private network to external resources.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableEIP;

    /**
     * @var string User VPC ID.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string User subnet ID.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @param boolean $EnableEIP Whether to enable access from the TI-ONE private network to external resources.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId User VPC ID.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId User subnet ID.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EnableEIP",$param) and $param["EnableEIP"] !== null) {
            $this->EnableEIP = $param["EnableEIP"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
