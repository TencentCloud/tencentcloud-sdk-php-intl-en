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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Source instance information
 *
 * @method string getAccessKey() Obtain Alibaba Cloud AccessKey, which is applicable if the source database is an Alibaba Cloud ApsaraDB for RDS 5.6 instance
 * @method void setAccessKey(string $AccessKey) Set Alibaba Cloud AccessKey, which is applicable if the source database is an Alibaba Cloud ApsaraDB for RDS 5.6 instance
 * @method string getIp() Obtain Instance IP address
 * @method void setIp(string $Ip) Set Instance IP address
 * @method integer getPort() Obtain Instance port
 * @method void setPort(integer $Port) Set Instance port
 * @method string getUser() Obtain Instance username
 * @method void setUser(string $User) Set Instance username
 * @method string getPassword() Obtain Instance password
 * @method void setPassword(string $Password) Set Instance password
 * @method string getRdsInstanceId() Obtain Alibaba Cloud ApsaraDB for RDS instance ID, which is applicable if the source database is an Alibaba Cloud ApsaraDB for RDS 5.6/5.7 instance
 * @method void setRdsInstanceId(string $RdsInstanceId) Set Alibaba Cloud ApsaraDB for RDS instance ID, which is applicable if the source database is an Alibaba Cloud ApsaraDB for RDS 5.6/5.7 instance
 * @method string getCvmInstanceId() Obtain Short CVM instance ID in the format of `ins-olgl39y8`. It is the same as the instance ID displayed on the CVM Console page. For CVM-based self-created instances, this field needs to be passed in
 * @method void setCvmInstanceId(string $CvmInstanceId) Set Short CVM instance ID in the format of `ins-olgl39y8`. It is the same as the instance ID displayed on the CVM Console page. For CVM-based self-created instances, this field needs to be passed in
 * @method string getUniqDcgId() Obtain Direct Connect gateway ID in the format of dcg-0rxtqqxb
 * @method void setUniqDcgId(string $UniqDcgId) Set Direct Connect gateway ID in the format of dcg-0rxtqqxb
 * @method string getVpcId() Obtain VPC ID in the format of vpc-92jblxto
 * @method void setVpcId(string $VpcId) Set VPC ID in the format of vpc-92jblxto
 * @method string getSubnetId() Obtain VPC Subnet ID in the format of subnet-3paxmkdz
 * @method void setSubnetId(string $SubnetId) Set VPC Subnet ID in the format of subnet-3paxmkdz
 * @method string getUniqVpnGwId() Obtain VPN gateway ID in the format of vpngw-9ghexg7q
 * @method void setUniqVpnGwId(string $UniqVpnGwId) Set VPN gateway ID in the format of vpngw-9ghexg7q
 * @method string getInstanceId() Obtain Database instance ID in the format of cdb-powiqx8q
 * @method void setInstanceId(string $InstanceId) Set Database instance ID in the format of cdb-powiqx8q
 * @method string getRegion() Obtain Region name, such as ap-guangzhou
 * @method void setRegion(string $Region) Set Region name, such as ap-guangzhou
 * @method string getSupplier() Obtain For Alibaba Cloud ApsaraDB for RDS instances, enter "aliyun"; otherwise, enter "others"
 * @method void setSupplier(string $Supplier) Set For Alibaba Cloud ApsaraDB for RDS instances, enter "aliyun"; otherwise, enter "others"
 * @method string getCcnId() Obtain CCN instance ID, such as ccn-afp6kltc
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCcnId(string $CcnId) Set CCN instance ID, such as ccn-afp6kltc
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEngineVersion() Obtain Database version. This parameter is valid only when the instance is an RDS instance. Value: 5.6 or 5.7. Default value: 5.6
 * @method void setEngineVersion(string $EngineVersion) Set Database version. This parameter is valid only when the instance is an RDS instance. Value: 5.6 or 5.7. Default value: 5.6
 */
class SrcInfo extends AbstractModel
{
    /**
     * @var string Alibaba Cloud AccessKey, which is applicable if the source database is an Alibaba Cloud ApsaraDB for RDS 5.6 instance
     */
    public $AccessKey;

    /**
     * @var string Instance IP address
     */
    public $Ip;

    /**
     * @var integer Instance port
     */
    public $Port;

    /**
     * @var string Instance username
     */
    public $User;

    /**
     * @var string Instance password
     */
    public $Password;

    /**
     * @var string Alibaba Cloud ApsaraDB for RDS instance ID, which is applicable if the source database is an Alibaba Cloud ApsaraDB for RDS 5.6/5.7 instance
     */
    public $RdsInstanceId;

    /**
     * @var string Short CVM instance ID in the format of `ins-olgl39y8`. It is the same as the instance ID displayed on the CVM Console page. For CVM-based self-created instances, this field needs to be passed in
     */
    public $CvmInstanceId;

    /**
     * @var string Direct Connect gateway ID in the format of dcg-0rxtqqxb
     */
    public $UniqDcgId;

    /**
     * @var string VPC ID in the format of vpc-92jblxto
     */
    public $VpcId;

    /**
     * @var string VPC Subnet ID in the format of subnet-3paxmkdz
     */
    public $SubnetId;

    /**
     * @var string VPN gateway ID in the format of vpngw-9ghexg7q
     */
    public $UniqVpnGwId;

    /**
     * @var string Database instance ID in the format of cdb-powiqx8q
     */
    public $InstanceId;

    /**
     * @var string Region name, such as ap-guangzhou
     */
    public $Region;

    /**
     * @var string For Alibaba Cloud ApsaraDB for RDS instances, enter "aliyun"; otherwise, enter "others"
     */
    public $Supplier;

    /**
     * @var string CCN instance ID, such as ccn-afp6kltc
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CcnId;

    /**
     * @var string Database version. This parameter is valid only when the instance is an RDS instance. Value: 5.6 or 5.7. Default value: 5.6
     */
    public $EngineVersion;

    /**
     * @param string $AccessKey Alibaba Cloud AccessKey, which is applicable if the source database is an Alibaba Cloud ApsaraDB for RDS 5.6 instance
     * @param string $Ip Instance IP address
     * @param integer $Port Instance port
     * @param string $User Instance username
     * @param string $Password Instance password
     * @param string $RdsInstanceId Alibaba Cloud ApsaraDB for RDS instance ID, which is applicable if the source database is an Alibaba Cloud ApsaraDB for RDS 5.6/5.7 instance
     * @param string $CvmInstanceId Short CVM instance ID in the format of `ins-olgl39y8`. It is the same as the instance ID displayed on the CVM Console page. For CVM-based self-created instances, this field needs to be passed in
     * @param string $UniqDcgId Direct Connect gateway ID in the format of dcg-0rxtqqxb
     * @param string $VpcId VPC ID in the format of vpc-92jblxto
     * @param string $SubnetId VPC Subnet ID in the format of subnet-3paxmkdz
     * @param string $UniqVpnGwId VPN gateway ID in the format of vpngw-9ghexg7q
     * @param string $InstanceId Database instance ID in the format of cdb-powiqx8q
     * @param string $Region Region name, such as ap-guangzhou
     * @param string $Supplier For Alibaba Cloud ApsaraDB for RDS instances, enter "aliyun"; otherwise, enter "others"
     * @param string $CcnId CCN instance ID, such as ccn-afp6kltc
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EngineVersion Database version. This parameter is valid only when the instance is an RDS instance. Value: 5.6 or 5.7. Default value: 5.6
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
        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("RdsInstanceId",$param) and $param["RdsInstanceId"] !== null) {
            $this->RdsInstanceId = $param["RdsInstanceId"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("UniqDcgId",$param) and $param["UniqDcgId"] !== null) {
            $this->UniqDcgId = $param["UniqDcgId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("UniqVpnGwId",$param) and $param["UniqVpnGwId"] !== null) {
            $this->UniqVpnGwId = $param["UniqVpnGwId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Supplier",$param) and $param["Supplier"] !== null) {
            $this->Supplier = $param["Supplier"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }
    }
}
