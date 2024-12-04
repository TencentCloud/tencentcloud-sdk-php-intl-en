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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance node information of data subscription
 *
 * @method string getDatabaseRegion() Obtain Region of the source database. If AccessType is ccn, please fill in the region where vpc is located because the region of the source database is unknown. For other access methods, please fill in the region where the subscription task is located, as ensuring the subscription task and the source database are in the same region is the optimal network solution.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabaseRegion(string $DatabaseRegion) Set Region of the source database. If AccessType is ccn, please fill in the region where vpc is located because the region of the source database is unknown. For other access methods, please fill in the region where the subscription task is located, as ensuring the subscription task and the source database are in the same region is the optimal network solution.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUser() Obtain UsernameNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setUser(string $User) Set UsernameNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassword() Obtain Password. It is required when used as an input parameter and empty when used as an output parameter.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassword(string $Password) Set Password. It is required when used as an input parameter and empty when used as an output parameter.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Target instance ID. This field is required when AccessType is cdb. When configuring the InstanceId, the instance information is queried and checked. The mysql query interface has been authenticated. Please ensure that the sub-user has the cdb:DescribeDBInstances interface permission.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Target instance ID. This field is required when AccessType is cdb. When configuring the InstanceId, the instance information is queried and checked. The mysql query interface has been authenticated. Please ensure that the sub-user has the cdb:DescribeDBInstances interface permission.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCvmInstanceId() Obtain Cloud Virtual Machine ID. This field is required when AccessType is cvm.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCvmInstanceId(string $CvmInstanceId) Set Cloud Virtual Machine ID. This field is required when AccessType is cvm.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUniqDcgId() Obtain Direct Connect gateway ID. This field is required when AccessType is dcg.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUniqDcgId(string $UniqDcgId) Set Direct Connect gateway ID. This field is required when AccessType is dcg.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCcnId() Obtain Cloud Connect Network ID. This field is required when AccessType is ccn.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCcnId(string $CcnId) Set Cloud Connect Network ID. This field is required when AccessType is ccn.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUniqVpnGwId() Obtain VPN gateway ID. This field is required when AccessType is vpncloud.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUniqVpnGwId(string $UniqVpnGwId) Set VPN gateway ID. This field is required when AccessType is vpncloud.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VpcID. This field is required when AccessType is dcg\ccn\vpncloud\vpc.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VpcID. This field is required when AccessType is dcg\ccn\vpncloud\vpc.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet ID. This field is required when AccessType is dcg\ccn\vpncloud\vpc.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID. This field is required when AccessType is dcg\ccn\vpncloud\vpc.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostName() Obtain Database address, supports domain name and IP. This field is required when AccessType is dcg\ccn\vpncloud\vpc\extranet\intranet.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set Database address, supports domain name and IP. This field is required when AccessType is dcg\ccn\vpncloud\vpc\extranet\intranet.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Database port. This field is required when AccessType is dcg\ccn\vpncloud\vpc\extranet\intranet\cvm.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Database port. This field is required when AccessType is dcg\ccn\vpncloud\vpc\extranet\intranet\cvm.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEncryptConn() Obtain Whether to use encrypted transmission. Valid values: UnEncrypted; Encrypted. Only mysql supports it. If it is not filled in, it will not be encrypted by default. Other products do not need to fill in this.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEncryptConn(string $EncryptConn) Set Whether to use encrypted transmission. Valid values: UnEncrypted; Encrypted. Only mysql supports it. If it is not filled in, it will not be encrypted by default. Other products do not need to fill in this.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatabaseNetEnv() Obtain Database network environment. This field is required when AccessType is ccn. Valid values: UserIDC; TencentVPC; Aws; AliYun; Others.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabaseNetEnv(string $DatabaseNetEnv) Set Database network environment. This field is required when AccessType is ccn. Valid values: UserIDC; TencentVPC; Aws; AliYun; Others.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCcnOwnerUin() Obtain The UIN of the main account to which the Cloud Connect Network gateway belongs. It is required for cross-account CCN.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCcnOwnerUin(string $CcnOwnerUin) Set The UIN of the main account to which the Cloud Connect Network gateway belongs. It is required for cross-account CCN.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getExtraAttr() Obtain Additional information added for the business. Parameter name is called key, parameter value is called value. Mandatory parameters for tdpg: PgDatabase (subscribed database name).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtraAttr(array $ExtraAttr) Set Additional information added for the business. Parameter name is called key, parameter value is called value. Mandatory parameters for tdpg: PgDatabase (subscribed database name).Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getChildInstanceId() Obtain 
 * @method void setChildInstanceId(string $ChildInstanceId) Set 
 * @method string getChildInstanceType() Obtain 
 * @method void setChildInstanceType(string $ChildInstanceType) Set 
 */
class EndpointItem extends AbstractModel
{
    /**
     * @var string Region of the source database. If AccessType is ccn, please fill in the region where vpc is located because the region of the source database is unknown. For other access methods, please fill in the region where the subscription task is located, as ensuring the subscription task and the source database are in the same region is the optimal network solution.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatabaseRegion;

    /**
     * @var string UsernameNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $User;

    /**
     * @var string Password. It is required when used as an input parameter and empty when used as an output parameter.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Password;

    /**
     * @var string Target instance ID. This field is required when AccessType is cdb. When configuring the InstanceId, the instance information is queried and checked. The mysql query interface has been authenticated. Please ensure that the sub-user has the cdb:DescribeDBInstances interface permission.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Cloud Virtual Machine ID. This field is required when AccessType is cvm.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CvmInstanceId;

    /**
     * @var string Direct Connect gateway ID. This field is required when AccessType is dcg.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UniqDcgId;

    /**
     * @var string Cloud Connect Network ID. This field is required when AccessType is ccn.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CcnId;

    /**
     * @var string VPN gateway ID. This field is required when AccessType is vpncloud.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UniqVpnGwId;

    /**
     * @var string VpcID. This field is required when AccessType is dcg\ccn\vpncloud\vpc.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet ID. This field is required when AccessType is dcg\ccn\vpncloud\vpc.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string Database address, supports domain name and IP. This field is required when AccessType is dcg\ccn\vpncloud\vpc\extranet\intranet.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostName;

    /**
     * @var integer Database port. This field is required when AccessType is dcg\ccn\vpncloud\vpc\extranet\intranet\cvm.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Whether to use encrypted transmission. Valid values: UnEncrypted; Encrypted. Only mysql supports it. If it is not filled in, it will not be encrypted by default. Other products do not need to fill in this.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EncryptConn;

    /**
     * @var string Database network environment. This field is required when AccessType is ccn. Valid values: UserIDC; TencentVPC; Aws; AliYun; Others.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatabaseNetEnv;

    /**
     * @var string The UIN of the main account to which the Cloud Connect Network gateway belongs. It is required for cross-account CCN.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CcnOwnerUin;

    /**
     * @var array Additional information added for the business. Parameter name is called key, parameter value is called value. Mandatory parameters for tdpg: PgDatabase (subscribed database name).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtraAttr;

    /**
     * @var string 
     */
    public $ChildInstanceId;

    /**
     * @var string 
     */
    public $ChildInstanceType;

    /**
     * @param string $DatabaseRegion Region of the source database. If AccessType is ccn, please fill in the region where vpc is located because the region of the source database is unknown. For other access methods, please fill in the region where the subscription task is located, as ensuring the subscription task and the source database are in the same region is the optimal network solution.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $User UsernameNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $Password Password. It is required when used as an input parameter and empty when used as an output parameter.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Target instance ID. This field is required when AccessType is cdb. When configuring the InstanceId, the instance information is queried and checked. The mysql query interface has been authenticated. Please ensure that the sub-user has the cdb:DescribeDBInstances interface permission.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CvmInstanceId Cloud Virtual Machine ID. This field is required when AccessType is cvm.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UniqDcgId Direct Connect gateway ID. This field is required when AccessType is dcg.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CcnId Cloud Connect Network ID. This field is required when AccessType is ccn.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UniqVpnGwId VPN gateway ID. This field is required when AccessType is vpncloud.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId VpcID. This field is required when AccessType is dcg\ccn\vpncloud\vpc.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet ID. This field is required when AccessType is dcg\ccn\vpncloud\vpc.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostName Database address, supports domain name and IP. This field is required when AccessType is dcg\ccn\vpncloud\vpc\extranet\intranet.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Database port. This field is required when AccessType is dcg\ccn\vpncloud\vpc\extranet\intranet\cvm.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EncryptConn Whether to use encrypted transmission. Valid values: UnEncrypted; Encrypted. Only mysql supports it. If it is not filled in, it will not be encrypted by default. Other products do not need to fill in this.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatabaseNetEnv Database network environment. This field is required when AccessType is ccn. Valid values: UserIDC; TencentVPC; Aws; AliYun; Others.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CcnOwnerUin The UIN of the main account to which the Cloud Connect Network gateway belongs. It is required for cross-account CCN.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ExtraAttr Additional information added for the business. Parameter name is called key, parameter value is called value. Mandatory parameters for tdpg: PgDatabase (subscribed database name).Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ChildInstanceId 
     * @param string $ChildInstanceType 
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
        if (array_key_exists("DatabaseRegion",$param) and $param["DatabaseRegion"] !== null) {
            $this->DatabaseRegion = $param["DatabaseRegion"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("UniqDcgId",$param) and $param["UniqDcgId"] !== null) {
            $this->UniqDcgId = $param["UniqDcgId"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("UniqVpnGwId",$param) and $param["UniqVpnGwId"] !== null) {
            $this->UniqVpnGwId = $param["UniqVpnGwId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("EncryptConn",$param) and $param["EncryptConn"] !== null) {
            $this->EncryptConn = $param["EncryptConn"];
        }

        if (array_key_exists("DatabaseNetEnv",$param) and $param["DatabaseNetEnv"] !== null) {
            $this->DatabaseNetEnv = $param["DatabaseNetEnv"];
        }

        if (array_key_exists("CcnOwnerUin",$param) and $param["CcnOwnerUin"] !== null) {
            $this->CcnOwnerUin = $param["CcnOwnerUin"];
        }

        if (array_key_exists("ExtraAttr",$param) and $param["ExtraAttr"] !== null) {
            $this->ExtraAttr = [];
            foreach ($param["ExtraAttr"] as $key => $value){
                $obj = new KeyValuePairOption();
                $obj->deserialize($value);
                array_push($this->ExtraAttr, $obj);
            }
        }

        if (array_key_exists("ChildInstanceId",$param) and $param["ChildInstanceId"] !== null) {
            $this->ChildInstanceId = $param["ChildInstanceId"];
        }

        if (array_key_exists("ChildInstanceType",$param) and $param["ChildInstanceType"] !== null) {
            $this->ChildInstanceType = $param["ChildInstanceType"];
        }
    }
}
