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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLibraDBClusters request structure.
 *
 * @method integer getCount() Obtain Quantity.
 * @method void setCount(integer $Count) Set Quantity.
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method array getInstanceInitInfos() Obtain Instance initialization information
 * @method void setInstanceInitInfos(array $InstanceInitInfos) Set Instance initialization information
 * @method string getAdminPassword() Obtain user password
 * @method void setAdminPassword(string $AdminPassword) Set user password
 * @method integer getAutoRenewFlag() Obtain Whether to perform auto-renewal.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether to perform auto-renewal.
 * @method integer getAutoVoucher() Obtain Whether to automatically select a voucher.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically select a voucher.
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getDealMode() Obtain Order placement mode
 * @method void setDealMode(string $DealMode) Set Order placement mode
 * @method string getEncryptMethod() Obtain Encryption method
 * @method void setEncryptMethod(string $EncryptMethod) Set Encryption method
 * @method string getLibraDBVersion() Obtain LibraDBVersion version. Defaults to the latest version.
 * @method void setLibraDBVersion(string $LibraDBVersion) Set LibraDBVersion version. Defaults to the latest version.
 * @method string getOrderSource() Obtain Order Source
 * @method void setOrderSource(string $OrderSource) Set Order Source
 * @method integer getPayMode() Obtain Payment mode
 * @method void setPayMode(integer $PayMode) Set Payment mode
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method array getSecurityGroupIds() Obtain Security group
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group
 * @method integer getTimeSpan() Obtain Duration
 * @method void setTimeSpan(integer $TimeSpan) Set Duration
 * @method string getTimeUnit() Obtain Time unit
 * @method void setTimeUnit(string $TimeUnit) Set Time unit
 * @method array getResourceTags() Obtain Instance creation binds Tag array information
 * @method void setResourceTags(array $ResourceTags) Set Instance creation binds Tag array information
 * @method string getVpcId() Obtain VPC ID of the cluster location
 * @method void setVpcId(string $VpcId) Set VPC ID of the cluster location
 * @method string getSubnetId() Obtain Subnet ID of the cluster location
 * @method void setSubnetId(string $SubnetId) Set Subnet ID of the cluster location
 * @method string getPort() Obtain Port.
 * @method void setPort(string $Port) Set Port.
 */
class CreateLibraDBClustersRequest extends AbstractModel
{
    /**
     * @var integer Quantity.
     */
    public $Count;

    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var array Instance initialization information
     */
    public $InstanceInitInfos;

    /**
     * @var string user password
     */
    public $AdminPassword;

    /**
     * @var integer Whether to perform auto-renewal.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Whether to automatically select a voucher.
     */
    public $AutoVoucher;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var string Order placement mode
     */
    public $DealMode;

    /**
     * @var string Encryption method
     */
    public $EncryptMethod;

    /**
     * @var string LibraDBVersion version. Defaults to the latest version.
     */
    public $LibraDBVersion;

    /**
     * @var string Order Source
     */
    public $OrderSource;

    /**
     * @var integer Payment mode
     */
    public $PayMode;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var array Security group
     */
    public $SecurityGroupIds;

    /**
     * @var integer Duration
     */
    public $TimeSpan;

    /**
     * @var string Time unit
     */
    public $TimeUnit;

    /**
     * @var array Instance creation binds Tag array information
     */
    public $ResourceTags;

    /**
     * @var string VPC ID of the cluster location
     */
    public $VpcId;

    /**
     * @var string Subnet ID of the cluster location
     */
    public $SubnetId;

    /**
     * @var string Port.
     */
    public $Port;

    /**
     * @param integer $Count Quantity.
     * @param string $Zone Availability zone
     * @param array $InstanceInitInfos Instance initialization information
     * @param string $AdminPassword user password
     * @param integer $AutoRenewFlag Whether to perform auto-renewal.
     * @param integer $AutoVoucher Whether to automatically select a voucher.
     * @param string $ClusterName Cluster name.
     * @param string $DealMode Order placement mode
     * @param string $EncryptMethod Encryption method
     * @param string $LibraDBVersion LibraDBVersion version. Defaults to the latest version.
     * @param string $OrderSource Order Source
     * @param integer $PayMode Payment mode
     * @param string $ProjectId Project ID
     * @param array $SecurityGroupIds Security group
     * @param integer $TimeSpan Duration
     * @param string $TimeUnit Time unit
     * @param array $ResourceTags Instance creation binds Tag array information
     * @param string $VpcId VPC ID of the cluster location
     * @param string $SubnetId Subnet ID of the cluster location
     * @param string $Port Port.
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceInitInfos",$param) and $param["InstanceInitInfos"] !== null) {
            $this->InstanceInitInfos = [];
            foreach ($param["InstanceInitInfos"] as $key => $value){
                $obj = new LibraDBInstanceInitInfo();
                $obj->deserialize($value);
                array_push($this->InstanceInitInfos, $obj);
            }
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }

        if (array_key_exists("EncryptMethod",$param) and $param["EncryptMethod"] !== null) {
            $this->EncryptMethod = $param["EncryptMethod"];
        }

        if (array_key_exists("LibraDBVersion",$param) and $param["LibraDBVersion"] !== null) {
            $this->LibraDBVersion = $param["LibraDBVersion"];
        }

        if (array_key_exists("OrderSource",$param) and $param["OrderSource"] !== null) {
            $this->OrderSource = $param["OrderSource"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
