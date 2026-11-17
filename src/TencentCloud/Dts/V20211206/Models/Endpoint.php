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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the source and target databases in data sync
 *
 * @method string getRegion() Obtain <p>Region English name, for example: ap-guangzhou</p>
 * @method void setRegion(string $Region) Set <p>Region English name, for example: ap-guangzhou</p>
 * @method string getRole() Obtain <p>Node type. proxy means the node type is host, set means the node type is node. proxy type must be the first item in the array. Source/target configuration for tdsqlmysql type is required.</p>
 * @method void setRole(string $Role) Set <p>Node type. proxy means the node type is host, set means the node type is node. proxy type must be the first item in the array. Source/target configuration for tdsqlmysql type is required.</p>
 * @method string getDbKernel() Obtain <p>Database kernel type, used in tdsql to differentiate between different kernels: percona, mariadb, mysql. Note that tdsql-C mysql and tdsql PostgreSQL do not need to fill in this field.</p>
 * @method void setDbKernel(string $DbKernel) Set <p>Database kernel type, used in tdsql to differentiate between different kernels: percona, mariadb, mysql. Note that tdsql-C mysql and tdsql PostgreSQL do not need to fill in this field.</p>
 * @method string getInstanceId() Obtain <p>Database instance ID, in the format of: cdb-powiqx8q</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Database instance ID, in the format of: cdb-powiqx8q</p>
 * @method string getIp() Obtain <p>IP address of the instance. This item is required when the access type is not cdb.</p>
 * @method void setIp(string $Ip) Set <p>IP address of the instance. This item is required when the access type is not cdb.</p>
 * @method integer getPort() Obtain <p>Instance port. This item is required when the access type is not cdb.</p>
 * @method void setPort(integer $Port) Set <p>Instance port. This item is required when the access type is not cdb.</p>
 * @method string getUser() Obtain <p>User name, required for accessing instances that need username and password authentication.</p>
 * @method void setUser(string $User) Set <p>User name, required for accessing instances that need username and password authentication.</p>
 * @method string getPassword() Obtain <p>Password is required for accessing instances that need username and password authentication.</p>
 * @method void setPassword(string $Password) Set <p>Password is required for accessing instances that need username and password authentication.</p>
 * @method string getDbName() Obtain <p>Database name, required when the database is cdwpg</p>
 * @method void setDbName(string $DbName) Set <p>Database name, required when the database is cdwpg</p>
 * @method string getVpcId() Obtain <p>Private network ID. This item is required for private network, Direct Connect, and VPN access methods, in the format of vpc-92jblxto.</p>
 * @method void setVpcId(string $VpcId) Set <p>Private network ID. This item is required for private network, Direct Connect, and VPN access methods, in the format of vpc-92jblxto.</p>
 * @method string getSubnetId() Obtain <p>Subnet ID under the private network. This item is required for private network, Direct Connect, and VPN access methods, in the format of subnet-3paxmkdz.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID under the private network. This item is required for private network, Direct Connect, and VPN access methods, in the format of subnet-3paxmkdz.</p>
 * @method string getCvmInstanceId() Obtain <p>CVM instance short ID, in the format of: ins-olgl39y8, is identical to the instance ID displayed on the cloud server console page. If it is a CVM self-created instance, this field is required.</p>
 * @method void setCvmInstanceId(string $CvmInstanceId) Set <p>CVM instance short ID, in the format of: ins-olgl39y8, is identical to the instance ID displayed on the cloud server console page. If it is a CVM self-created instance, this field is required.</p>
 * @method string getUniqDcgId() Obtain <p>Direct Connect gateway ID. This item is required for dedicated access type, in the format of: dcg-0rxtqqxb</p>
 * @method void setUniqDcgId(string $UniqDcgId) Set <p>Direct Connect gateway ID. This item is required for dedicated access type, in the format of: dcg-0rxtqqxb</p>
 * @method string getUniqVpnGwId() Obtain <p>VPN Gateway ID. This item is required for VPN access type, in the format of vpngw-9ghexg7q.</p>
 * @method void setUniqVpnGwId(string $UniqVpnGwId) Set <p>VPN Gateway ID. This item is required for VPN access type, in the format of vpngw-9ghexg7q.</p>
 * @method string getCcnId() Obtain <p>Cloud Connect Network ID. This item is required for the CCN access type, for example: ccn-afp6kltc</p>
 * @method void setCcnId(string $CcnId) Set <p>Cloud Connect Network ID. This item is required for the CCN access type, for example: ccn-afp6kltc</p>
 * @method string getSupplier() Obtain <p>Cloud vendor type. For RDS instances, fill in aliyun. In other cases, fill in others. Default is others.</p>
 * @method void setSupplier(string $Supplier) Set <p>Cloud vendor type. For RDS instances, fill in aliyun. In other cases, fill in others. Default is others.</p>
 * @method string getEngineVersion() Obtain <p>Database version. Valid only for RDS instances, ignored for other instances, in the format of 5.6 or 5.7, defaults to 5.6.</p>
 * @method void setEngineVersion(string $EngineVersion) Set <p>Database version. Valid only for RDS instances, ignored for other instances, in the format of 5.6 or 5.7, defaults to 5.6.</p>
 * @method string getAccount() Obtain <p>Account of the instance. This item is required if it is a cross-account instance.</p>
 * @method void setAccount(string $Account) Set <p>Account of the instance. This item is required if it is a cross-account instance.</p>
 * @method string getAccountMode() Obtain <p>Associated account is empty, self (means resources within this account), or other (means cross-account resources).</p>
 * @method void setAccountMode(string $AccountMode) Set <p>Associated account is empty, self (means resources within this account), or other (means cross-account resources).</p>
 * @method string getAccountRole() Obtain <p>Role for cross-account sync, only allow [a-zA-Z0-9-_]+. This item is required if it is a cross-account instance.</p>
 * @method void setAccountRole(string $AccountRole) Set <p>Role for cross-account sync, only allow [a-zA-Z0-9-_]+. This item is required if it is a cross-account instance.</p>
 * @method string getRoleExternalId() Obtain <p>External role id</p>
 * @method void setRoleExternalId(string $RoleExternalId) Set <p>External role id</p>
 * @method string getTmpSecretId() Obtain <p>Temporary key Id can be obtained by applying for role assumption temporary access credentials https://www.tencentcloud.com/document/product/1312/48197.?from_cn_redirect=1 Among them, the definition of the role resource RoleArn can be found in the DTS cross-account sync document (https://www.tencentcloud.com/document/product/571/68729?from_cn_redirect=1) Section 4 about role-based definition.</p>
 * @method void setTmpSecretId(string $TmpSecretId) Set <p>Temporary key Id can be obtained by applying for role assumption temporary access credentials https://www.tencentcloud.com/document/product/1312/48197.?from_cn_redirect=1 Among them, the definition of the role resource RoleArn can be found in the DTS cross-account sync document (https://www.tencentcloud.com/document/product/571/68729?from_cn_redirect=1) Section 4 about role-based definition.</p>
 * @method string getTmpSecretKey() Obtain <p>Temporary key Id can be obtained by applying for role assumption temporary access credentials at https://www.tencentcloud.com/document/product/1312/48197.?from_cn_redirect=1 Among them, the definition of the role resource RoleArn can be found in the DTS cross-account sync document (https://www.tencentcloud.com/document/product/571/68729?from_cn_redirect=1) Section 4 about role definition.</p>
 * @method void setTmpSecretKey(string $TmpSecretKey) Set <p>Temporary key Id can be obtained by applying for role assumption temporary access credentials at https://www.tencentcloud.com/document/product/1312/48197.?from_cn_redirect=1 Among them, the definition of the role resource RoleArn can be found in the DTS cross-account sync document (https://www.tencentcloud.com/document/product/571/68729?from_cn_redirect=1) Section 4 about role definition.</p>
 * @method string getTmpToken() Obtain <p>Temporary key Id can be obtained by applying for role assumption temporary access credentials https://www.tencentcloud.com/document/product/1312/48197.?from_cn_redirect=1 Among them, the definition of the role resource RoleArn can be found in the DTS cross-account sync document (https://www.tencentcloud.com/document/product/571/68729?from_cn_redirect=1) Section 4 about role-based definition.</p>
 * @method void setTmpToken(string $TmpToken) Set <p>Temporary key Id can be obtained by applying for role assumption temporary access credentials https://www.tencentcloud.com/document/product/1312/48197.?from_cn_redirect=1 Among them, the definition of the role resource RoleArn can be found in the DTS cross-account sync document (https://www.tencentcloud.com/document/product/571/68729?from_cn_redirect=1) Section 4 about role-based definition.</p>
 * @method string getEncryptConn() Obtain <p>Whether to use encrypted transmission. UnEncrypted means no encrypted transmission, Encrypted means encrypted transmission. Default: UnEncrypted</p>
 * @method void setEncryptConn(string $EncryptConn) Set <p>Whether to use encrypted transmission. UnEncrypted means no encrypted transmission, Encrypted means encrypted transmission. Default: UnEncrypted</p>
 * @method string getDatabaseNetEnv() Obtain <p>Network environment of the database. Required when AccessType is Cloud Connect Network (ccn). UserIDC refers to User IDC, and TencentVPC refers to Tencent Cloud VPC.</p>
 * @method void setDatabaseNetEnv(string $DatabaseNetEnv) Set <p>Network environment of the database. Required when AccessType is Cloud Connect Network (ccn). UserIDC refers to User IDC, and TencentVPC refers to Tencent Cloud VPC.</p>
 * @method string getCcnOwnerUin() Obtain <p>When the database is an instance of cross-account cloud networking, it refers to the main account to which the CCN belongs.</p>
 * @method void setCcnOwnerUin(string $CcnOwnerUin) Set <p>When the database is an instance of cross-account cloud networking, it refers to the main account to which the CCN belongs.</p>
 * @method string getChildInstanceId() Obtain <p>When the database is cynos and it is a sub-database instance within the cynos cluster, this parameter is the ID of the sub-instance.</p>
 * @method void setChildInstanceId(string $ChildInstanceId) Set <p>When the database is cynos and it is a sub-database instance within the cynos cluster, this parameter is the ID of the sub-instance.</p>
 * @method string getChildInstanceType() Obtain <p>When the database is cynos and it is a sub-database instance within the cynos cluster, this parameter is the type of the sub-instance, for example: pass ro for a read-only instance, pass rw for a read-write instance.</p>
 * @method void setChildInstanceType(string $ChildInstanceType) Set <p>When the database is cynos and it is a sub-database instance within the cynos cluster, this parameter is the type of the sub-instance, for example: pass ro for a read-only instance, pass rw for a read-write instance.</p>
 * @method string getSetId() Obtain <p>Shard id of tdsql. Required if the node type is set.</p>
 * @method void setSetId(string $SetId) Set <p>Shard id of tdsql. Required if the node type is set.</p>
 */
class Endpoint extends AbstractModel
{
    /**
     * @var string <p>Region English name, for example: ap-guangzhou</p>
     */
    public $Region;

    /**
     * @var string <p>Node type. proxy means the node type is host, set means the node type is node. proxy type must be the first item in the array. Source/target configuration for tdsqlmysql type is required.</p>
     */
    public $Role;

    /**
     * @var string <p>Database kernel type, used in tdsql to differentiate between different kernels: percona, mariadb, mysql. Note that tdsql-C mysql and tdsql PostgreSQL do not need to fill in this field.</p>
     */
    public $DbKernel;

    /**
     * @var string <p>Database instance ID, in the format of: cdb-powiqx8q</p>
     */
    public $InstanceId;

    /**
     * @var string <p>IP address of the instance. This item is required when the access type is not cdb.</p>
     */
    public $Ip;

    /**
     * @var integer <p>Instance port. This item is required when the access type is not cdb.</p>
     */
    public $Port;

    /**
     * @var string <p>User name, required for accessing instances that need username and password authentication.</p>
     */
    public $User;

    /**
     * @var string <p>Password is required for accessing instances that need username and password authentication.</p>
     */
    public $Password;

    /**
     * @var string <p>Database name, required when the database is cdwpg</p>
     */
    public $DbName;

    /**
     * @var string <p>Private network ID. This item is required for private network, Direct Connect, and VPN access methods, in the format of vpc-92jblxto.</p>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet ID under the private network. This item is required for private network, Direct Connect, and VPN access methods, in the format of subnet-3paxmkdz.</p>
     */
    public $SubnetId;

    /**
     * @var string <p>CVM instance short ID, in the format of: ins-olgl39y8, is identical to the instance ID displayed on the cloud server console page. If it is a CVM self-created instance, this field is required.</p>
     */
    public $CvmInstanceId;

    /**
     * @var string <p>Direct Connect gateway ID. This item is required for dedicated access type, in the format of: dcg-0rxtqqxb</p>
     */
    public $UniqDcgId;

    /**
     * @var string <p>VPN Gateway ID. This item is required for VPN access type, in the format of vpngw-9ghexg7q.</p>
     */
    public $UniqVpnGwId;

    /**
     * @var string <p>Cloud Connect Network ID. This item is required for the CCN access type, for example: ccn-afp6kltc</p>
     */
    public $CcnId;

    /**
     * @var string <p>Cloud vendor type. For RDS instances, fill in aliyun. In other cases, fill in others. Default is others.</p>
     */
    public $Supplier;

    /**
     * @var string <p>Database version. Valid only for RDS instances, ignored for other instances, in the format of 5.6 or 5.7, defaults to 5.6.</p>
     */
    public $EngineVersion;

    /**
     * @var string <p>Account of the instance. This item is required if it is a cross-account instance.</p>
     */
    public $Account;

    /**
     * @var string <p>Associated account is empty, self (means resources within this account), or other (means cross-account resources).</p>
     */
    public $AccountMode;

    /**
     * @var string <p>Role for cross-account sync, only allow [a-zA-Z0-9-_]+. This item is required if it is a cross-account instance.</p>
     */
    public $AccountRole;

    /**
     * @var string <p>External role id</p>
     */
    public $RoleExternalId;

    /**
     * @var string <p>Temporary key Id can be obtained by applying for role assumption temporary access credentials https://www.tencentcloud.com/document/product/1312/48197.?from_cn_redirect=1 Among them, the definition of the role resource RoleArn can be found in the DTS cross-account sync document (https://www.tencentcloud.com/document/product/571/68729?from_cn_redirect=1) Section 4 about role-based definition.</p>
     */
    public $TmpSecretId;

    /**
     * @var string <p>Temporary key Id can be obtained by applying for role assumption temporary access credentials at https://www.tencentcloud.com/document/product/1312/48197.?from_cn_redirect=1 Among them, the definition of the role resource RoleArn can be found in the DTS cross-account sync document (https://www.tencentcloud.com/document/product/571/68729?from_cn_redirect=1) Section 4 about role definition.</p>
     */
    public $TmpSecretKey;

    /**
     * @var string <p>Temporary key Id can be obtained by applying for role assumption temporary access credentials https://www.tencentcloud.com/document/product/1312/48197.?from_cn_redirect=1 Among them, the definition of the role resource RoleArn can be found in the DTS cross-account sync document (https://www.tencentcloud.com/document/product/571/68729?from_cn_redirect=1) Section 4 about role-based definition.</p>
     */
    public $TmpToken;

    /**
     * @var string <p>Whether to use encrypted transmission. UnEncrypted means no encrypted transmission, Encrypted means encrypted transmission. Default: UnEncrypted</p>
     */
    public $EncryptConn;

    /**
     * @var string <p>Network environment of the database. Required when AccessType is Cloud Connect Network (ccn). UserIDC refers to User IDC, and TencentVPC refers to Tencent Cloud VPC.</p>
     */
    public $DatabaseNetEnv;

    /**
     * @var string <p>When the database is an instance of cross-account cloud networking, it refers to the main account to which the CCN belongs.</p>
     */
    public $CcnOwnerUin;

    /**
     * @var string <p>When the database is cynos and it is a sub-database instance within the cynos cluster, this parameter is the ID of the sub-instance.</p>
     */
    public $ChildInstanceId;

    /**
     * @var string <p>When the database is cynos and it is a sub-database instance within the cynos cluster, this parameter is the type of the sub-instance, for example: pass ro for a read-only instance, pass rw for a read-write instance.</p>
     */
    public $ChildInstanceType;

    /**
     * @var string <p>Shard id of tdsql. Required if the node type is set.</p>
     */
    public $SetId;

    /**
     * @param string $Region <p>Region English name, for example: ap-guangzhou</p>
     * @param string $Role <p>Node type. proxy means the node type is host, set means the node type is node. proxy type must be the first item in the array. Source/target configuration for tdsqlmysql type is required.</p>
     * @param string $DbKernel <p>Database kernel type, used in tdsql to differentiate between different kernels: percona, mariadb, mysql. Note that tdsql-C mysql and tdsql PostgreSQL do not need to fill in this field.</p>
     * @param string $InstanceId <p>Database instance ID, in the format of: cdb-powiqx8q</p>
     * @param string $Ip <p>IP address of the instance. This item is required when the access type is not cdb.</p>
     * @param integer $Port <p>Instance port. This item is required when the access type is not cdb.</p>
     * @param string $User <p>User name, required for accessing instances that need username and password authentication.</p>
     * @param string $Password <p>Password is required for accessing instances that need username and password authentication.</p>
     * @param string $DbName <p>Database name, required when the database is cdwpg</p>
     * @param string $VpcId <p>Private network ID. This item is required for private network, Direct Connect, and VPN access methods, in the format of vpc-92jblxto.</p>
     * @param string $SubnetId <p>Subnet ID under the private network. This item is required for private network, Direct Connect, and VPN access methods, in the format of subnet-3paxmkdz.</p>
     * @param string $CvmInstanceId <p>CVM instance short ID, in the format of: ins-olgl39y8, is identical to the instance ID displayed on the cloud server console page. If it is a CVM self-created instance, this field is required.</p>
     * @param string $UniqDcgId <p>Direct Connect gateway ID. This item is required for dedicated access type, in the format of: dcg-0rxtqqxb</p>
     * @param string $UniqVpnGwId <p>VPN Gateway ID. This item is required for VPN access type, in the format of vpngw-9ghexg7q.</p>
     * @param string $CcnId <p>Cloud Connect Network ID. This item is required for the CCN access type, for example: ccn-afp6kltc</p>
     * @param string $Supplier <p>Cloud vendor type. For RDS instances, fill in aliyun. In other cases, fill in others. Default is others.</p>
     * @param string $EngineVersion <p>Database version. Valid only for RDS instances, ignored for other instances, in the format of 5.6 or 5.7, defaults to 5.6.</p>
     * @param string $Account <p>Account of the instance. This item is required if it is a cross-account instance.</p>
     * @param string $AccountMode <p>Associated account is empty, self (means resources within this account), or other (means cross-account resources).</p>
     * @param string $AccountRole <p>Role for cross-account sync, only allow [a-zA-Z0-9-_]+. This item is required if it is a cross-account instance.</p>
     * @param string $RoleExternalId <p>External role id</p>
     * @param string $TmpSecretId <p>Temporary key Id can be obtained by applying for role assumption temporary access credentials https://www.tencentcloud.com/document/product/1312/48197.?from_cn_redirect=1 Among them, the definition of the role resource RoleArn can be found in the DTS cross-account sync document (https://www.tencentcloud.com/document/product/571/68729?from_cn_redirect=1) Section 4 about role-based definition.</p>
     * @param string $TmpSecretKey <p>Temporary key Id can be obtained by applying for role assumption temporary access credentials at https://www.tencentcloud.com/document/product/1312/48197.?from_cn_redirect=1 Among them, the definition of the role resource RoleArn can be found in the DTS cross-account sync document (https://www.tencentcloud.com/document/product/571/68729?from_cn_redirect=1) Section 4 about role definition.</p>
     * @param string $TmpToken <p>Temporary key Id can be obtained by applying for role assumption temporary access credentials https://www.tencentcloud.com/document/product/1312/48197.?from_cn_redirect=1 Among them, the definition of the role resource RoleArn can be found in the DTS cross-account sync document (https://www.tencentcloud.com/document/product/571/68729?from_cn_redirect=1) Section 4 about role-based definition.</p>
     * @param string $EncryptConn <p>Whether to use encrypted transmission. UnEncrypted means no encrypted transmission, Encrypted means encrypted transmission. Default: UnEncrypted</p>
     * @param string $DatabaseNetEnv <p>Network environment of the database. Required when AccessType is Cloud Connect Network (ccn). UserIDC refers to User IDC, and TencentVPC refers to Tencent Cloud VPC.</p>
     * @param string $CcnOwnerUin <p>When the database is an instance of cross-account cloud networking, it refers to the main account to which the CCN belongs.</p>
     * @param string $ChildInstanceId <p>When the database is cynos and it is a sub-database instance within the cynos cluster, this parameter is the ID of the sub-instance.</p>
     * @param string $ChildInstanceType <p>When the database is cynos and it is a sub-database instance within the cynos cluster, this parameter is the type of the sub-instance, for example: pass ro for a read-only instance, pass rw for a read-write instance.</p>
     * @param string $SetId <p>Shard id of tdsql. Required if the node type is set.</p>
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

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("DbKernel",$param) and $param["DbKernel"] !== null) {
            $this->DbKernel = $param["DbKernel"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("UniqDcgId",$param) and $param["UniqDcgId"] !== null) {
            $this->UniqDcgId = $param["UniqDcgId"];
        }

        if (array_key_exists("UniqVpnGwId",$param) and $param["UniqVpnGwId"] !== null) {
            $this->UniqVpnGwId = $param["UniqVpnGwId"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("Supplier",$param) and $param["Supplier"] !== null) {
            $this->Supplier = $param["Supplier"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("AccountMode",$param) and $param["AccountMode"] !== null) {
            $this->AccountMode = $param["AccountMode"];
        }

        if (array_key_exists("AccountRole",$param) and $param["AccountRole"] !== null) {
            $this->AccountRole = $param["AccountRole"];
        }

        if (array_key_exists("RoleExternalId",$param) and $param["RoleExternalId"] !== null) {
            $this->RoleExternalId = $param["RoleExternalId"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("TmpToken",$param) and $param["TmpToken"] !== null) {
            $this->TmpToken = $param["TmpToken"];
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

        if (array_key_exists("ChildInstanceId",$param) and $param["ChildInstanceId"] !== null) {
            $this->ChildInstanceId = $param["ChildInstanceId"];
        }

        if (array_key_exists("ChildInstanceType",$param) and $param["ChildInstanceType"] !== null) {
            $this->ChildInstanceType = $param["ChildInstanceType"];
        }

        if (array_key_exists("SetId",$param) and $param["SetId"] !== null) {
            $this->SetId = $param["SetId"];
        }
    }
}
