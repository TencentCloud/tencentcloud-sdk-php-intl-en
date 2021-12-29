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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC binding record
 *
 * @method string getUniqueVpcId() Obtain Tenant VPC ID
 * @method void setUniqueVpcId(string $UniqueVpcId) Set Tenant VPC ID
 * @method string getUniqueSubnetId() Obtain Tenant VPC subnet ID
 * @method void setUniqueSubnetId(string $UniqueSubnetId) Set Tenant VPC subnet ID
 * @method string getRouterId() Obtain Route ID
 * @method void setRouterId(string $RouterId) Set Route ID
 * @method string getIp() Obtain VPC ID
 * @method void setIp(string $Ip) Set VPC ID
 * @method integer getPort() Obtain VPC port
 * @method void setPort(integer $Port) Set VPC port
 * @method string getRemark() Obtain Remarks (up to 128 characters)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters)
Note: this field may return null, indicating that no valid values can be obtained.
 */
class VpcBindRecord extends AbstractModel
{
    /**
     * @var string Tenant VPC ID
     */
    public $UniqueVpcId;

    /**
     * @var string Tenant VPC subnet ID
     */
    public $UniqueSubnetId;

    /**
     * @var string Route ID
     */
    public $RouterId;

    /**
     * @var string VPC ID
     */
    public $Ip;

    /**
     * @var integer VPC port
     */
    public $Port;

    /**
     * @var string Remarks (up to 128 characters)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @param string $UniqueVpcId Tenant VPC ID
     * @param string $UniqueSubnetId Tenant VPC subnet ID
     * @param string $RouterId Route ID
     * @param string $Ip VPC ID
     * @param integer $Port VPC port
     * @param string $Remark Remarks (up to 128 characters)
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("RouterId",$param) and $param["RouterId"] !== null) {
            $this->RouterId = $param["RouterId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
