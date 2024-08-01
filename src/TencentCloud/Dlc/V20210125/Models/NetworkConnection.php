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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network configuration
 *
 * @method integer getId() Obtain Network configuration ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set Network configuration ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAssociateId() Obtain Unique identifier of network configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssociateId(string $AssociateId) Set Unique identifier of network configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHouseId() Obtain Computing engine ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHouseId(string $HouseId) Set Computing engine ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatasourceConnectionId() Obtain Data source ID (discarded)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatasourceConnectionId(string $DatasourceConnectionId) Set Data source ID (discarded)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getState() Obtain Network configuration status (0 - initializing; 1 - normal)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setState(integer $State) Set Network configuration status (0 - initializing; 1 - normal)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUpdateTime() Obtain Modification time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(integer $UpdateTime) Set Modification time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAppid() Obtain Create user Appid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppid(integer $Appid) Set Create user Appid.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHouseName() Obtain Computing engine name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHouseName(string $HouseName) Set Computing engine name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatasourceConnectionName() Obtain Network configuration name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) Set Network configuration name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNetworkConnectionType() Obtain Network configuration type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkConnectionType(integer $NetworkConnectionType) Set Network configuration type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain Create user UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set Create user UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubAccountUin() Obtain Create user SubAccountUin.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubAccountUin(string $SubAccountUin) Set Create user SubAccountUin.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNetworkConnectionDesc() Obtain Network configuration description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkConnectionDesc(string $NetworkConnectionDesc) Set Network configuration description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatasourceConnectionVpcId() Obtain Data source vpcid
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatasourceConnectionVpcId(string $DatasourceConnectionVpcId) Set Data source vpcid
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatasourceConnectionSubnetId() Obtain Data source SubnetId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatasourceConnectionSubnetId(string $DatasourceConnectionSubnetId) Set Data source SubnetId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatasourceConnectionCidrBlock() Obtain Data source SubnetId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatasourceConnectionCidrBlock(string $DatasourceConnectionCidrBlock) Set Data source SubnetId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDatasourceConnectionSubnetCidrBlock() Obtain Data source SubnetCidrBlock
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatasourceConnectionSubnetCidrBlock(string $DatasourceConnectionSubnetCidrBlock) Set Data source SubnetCidrBlock
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NetworkConnection extends AbstractModel
{
    /**
     * @var integer Network configuration ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string Unique identifier of network configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AssociateId;

    /**
     * @var string Computing engine ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HouseId;

    /**
     * @var string Data source ID (discarded)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatasourceConnectionId;

    /**
     * @var integer Network configuration status (0 - initializing; 1 - normal)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $State;

    /**
     * @var integer Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Modification time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer Create user Appid.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Appid;

    /**
     * @var string Computing engine name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HouseName;

    /**
     * @var string Network configuration name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatasourceConnectionName;

    /**
     * @var integer Network configuration type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkConnectionType;

    /**
     * @var string Create user UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string Create user SubAccountUin.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubAccountUin;

    /**
     * @var string Network configuration description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkConnectionDesc;

    /**
     * @var string Data source vpcid
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatasourceConnectionVpcId;

    /**
     * @var string Data source SubnetId
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatasourceConnectionSubnetId;

    /**
     * @var string Data source SubnetId
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatasourceConnectionCidrBlock;

    /**
     * @var string Data source SubnetCidrBlock
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatasourceConnectionSubnetCidrBlock;

    /**
     * @param integer $Id Network configuration ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AssociateId Unique identifier of network configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HouseId Computing engine ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatasourceConnectionId Data source ID (discarded)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $State Network configuration status (0 - initializing; 1 - normal)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UpdateTime Modification time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Appid Create user Appid.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HouseName Computing engine name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatasourceConnectionName Network configuration name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NetworkConnectionType Network configuration type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uin Create user UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubAccountUin Create user SubAccountUin.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NetworkConnectionDesc Network configuration description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatasourceConnectionVpcId Data source vpcid
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatasourceConnectionSubnetId Data source SubnetId
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatasourceConnectionCidrBlock Data source SubnetId
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DatasourceConnectionSubnetCidrBlock Data source SubnetCidrBlock
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AssociateId",$param) and $param["AssociateId"] !== null) {
            $this->AssociateId = $param["AssociateId"];
        }

        if (array_key_exists("HouseId",$param) and $param["HouseId"] !== null) {
            $this->HouseId = $param["HouseId"];
        }

        if (array_key_exists("DatasourceConnectionId",$param) and $param["DatasourceConnectionId"] !== null) {
            $this->DatasourceConnectionId = $param["DatasourceConnectionId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("HouseName",$param) and $param["HouseName"] !== null) {
            $this->HouseName = $param["HouseName"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("NetworkConnectionType",$param) and $param["NetworkConnectionType"] !== null) {
            $this->NetworkConnectionType = $param["NetworkConnectionType"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("NetworkConnectionDesc",$param) and $param["NetworkConnectionDesc"] !== null) {
            $this->NetworkConnectionDesc = $param["NetworkConnectionDesc"];
        }

        if (array_key_exists("DatasourceConnectionVpcId",$param) and $param["DatasourceConnectionVpcId"] !== null) {
            $this->DatasourceConnectionVpcId = $param["DatasourceConnectionVpcId"];
        }

        if (array_key_exists("DatasourceConnectionSubnetId",$param) and $param["DatasourceConnectionSubnetId"] !== null) {
            $this->DatasourceConnectionSubnetId = $param["DatasourceConnectionSubnetId"];
        }

        if (array_key_exists("DatasourceConnectionCidrBlock",$param) and $param["DatasourceConnectionCidrBlock"] !== null) {
            $this->DatasourceConnectionCidrBlock = $param["DatasourceConnectionCidrBlock"];
        }

        if (array_key_exists("DatasourceConnectionSubnetCidrBlock",$param) and $param["DatasourceConnectionSubnetCidrBlock"] !== null) {
            $this->DatasourceConnectionSubnetCidrBlock = $param["DatasourceConnectionSubnetCidrBlock"];
        }
    }
}
