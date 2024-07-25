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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud resource ID
 *
 * @method string getVPCId() Obtain VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVPCId(string $VPCId) Set VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSecurityGroupId() Obtain Security group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTDSQLCId() Obtain TDSQL-C for MySQL database ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTDSQLCId(string $TDSQLCId) Set TDSQL-C for MySQL database ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCFSId() Obtain  CFS ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCFSId(string $CFSId) Set  CFS ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCFSStorageType() Obtain CFS type. Valid values:
- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCFSStorageType(string $CFSStorageType) Set CFS type. Valid values:
- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCVMId() Obtain  Cloud Virtual Machine ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCVMId(string $CVMId) Set  Cloud Virtual Machine ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEKSId() Obtain Elastic container cluster ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEKSId(string $EKSId) Set Elastic container cluster ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ResourceIds extends AbstractModel
{
    /**
     * @var string VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VPCId;

    /**
     * @var string Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string Security group ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecurityGroupId;

    /**
     * @var string TDSQL-C for MySQL database ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TDSQLCId;

    /**
     * @var string  CFS ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CFSId;

    /**
     * @var string CFS type. Valid values:
- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CFSStorageType;

    /**
     * @var string  Cloud Virtual Machine ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CVMId;

    /**
     * @var string Elastic container cluster ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EKSId;

    /**
     * @param string $VPCId VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SecurityGroupId Security group ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TDSQLCId TDSQL-C for MySQL database ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CFSId  CFS ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CFSStorageType CFS type. Valid values:
- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CVMId  Cloud Virtual Machine ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EKSId Elastic container cluster ID
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
        if (array_key_exists("VPCId",$param) and $param["VPCId"] !== null) {
            $this->VPCId = $param["VPCId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("TDSQLCId",$param) and $param["TDSQLCId"] !== null) {
            $this->TDSQLCId = $param["TDSQLCId"];
        }

        if (array_key_exists("CFSId",$param) and $param["CFSId"] !== null) {
            $this->CFSId = $param["CFSId"];
        }

        if (array_key_exists("CFSStorageType",$param) and $param["CFSStorageType"] !== null) {
            $this->CFSStorageType = $param["CFSStorageType"];
        }

        if (array_key_exists("CVMId",$param) and $param["CVMId"] !== null) {
            $this->CVMId = $param["CVMId"];
        }

        if (array_key_exists("EKSId",$param) and $param["EKSId"] !== null) {
            $this->EKSId = $param["EKSId"];
        }
    }
}
