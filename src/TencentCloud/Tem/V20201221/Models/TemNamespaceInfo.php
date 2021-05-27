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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Namespace object
 *
 * @method string getNamespaceId() Obtain Namespace ID
 * @method void setNamespaceId(string $NamespaceId) Set Namespace ID
 * @method string getChannel() Obtain Channel
 * @method void setChannel(string $Channel) Set Channel
 * @method string getNamespaceName() Obtain Namespace name
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name
 * @method string getRegion() Obtain Region name
 * @method void setRegion(string $Region) Set Region name
 * @method string getDescription() Obtain Namespace description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Namespace description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status. 1: terminated; 0: normal
 * @method void setStatus(integer $Status) Set Status. 1: terminated; 0: normal
 * @method string getVpc() Obtain VPC
 * @method void setVpc(string $Vpc) Set VPC
 * @method string getCreateDate() Obtain Creation time
 * @method void setCreateDate(string $CreateDate) Set Creation time
 * @method string getModifyDate() Obtain Modification time
 * @method void setModifyDate(string $ModifyDate) Set Modification time
 * @method string getModifier() Obtain Modifier
 * @method void setModifier(string $Modifier) Set Modifier
 * @method string getCreator() Obtain Creator
 * @method void setCreator(string $Creator) Set Creator
 * @method integer getServiceNum() Obtain Number of services
 * @method void setServiceNum(integer $ServiceNum) Set Number of services
 * @method integer getRunInstancesNum() Obtain Number of running instances
 * @method void setRunInstancesNum(integer $RunInstancesNum) Set Number of running instances
 * @method string getSubnetId() Obtain Subnet
 * @method void setSubnetId(string $SubnetId) Set Subnet
 * @method string getTcbEnvStatus() Obtain TCB environment status
 * @method void setTcbEnvStatus(string $TcbEnvStatus) Set TCB environment status
 * @method string getClusterStatus() Obtain eks cluster status
 * @method void setClusterStatus(string $ClusterStatus) Set eks cluster status
 * @method boolean getEnableTswTraceService() Obtain Whether to enable TSW
 * @method void setEnableTswTraceService(boolean $EnableTswTraceService) Set Whether to enable TSW
 */
class TemNamespaceInfo extends AbstractModel
{
    /**
     * @var string Namespace ID
     */
    public $NamespaceId;

    /**
     * @var string Channel
     */
    public $Channel;

    /**
     * @var string Namespace name
     */
    public $NamespaceName;

    /**
     * @var string Region name
     */
    public $Region;

    /**
     * @var string Namespace description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var integer Status. 1: terminated; 0: normal
     */
    public $Status;

    /**
     * @var string VPC
     */
    public $Vpc;

    /**
     * @var string Creation time
     */
    public $CreateDate;

    /**
     * @var string Modification time
     */
    public $ModifyDate;

    /**
     * @var string Modifier
     */
    public $Modifier;

    /**
     * @var string Creator
     */
    public $Creator;

    /**
     * @var integer Number of services
     */
    public $ServiceNum;

    /**
     * @var integer Number of running instances
     */
    public $RunInstancesNum;

    /**
     * @var string Subnet
     */
    public $SubnetId;

    /**
     * @var string TCB environment status
     */
    public $TcbEnvStatus;

    /**
     * @var string eks cluster status
     */
    public $ClusterStatus;

    /**
     * @var boolean Whether to enable TSW
     */
    public $EnableTswTraceService;

    /**
     * @param string $NamespaceId Namespace ID
     * @param string $Channel Channel
     * @param string $NamespaceName Namespace name
     * @param string $Region Region name
     * @param string $Description Namespace description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status. 1: terminated; 0: normal
     * @param string $Vpc VPC
     * @param string $CreateDate Creation time
     * @param string $ModifyDate Modification time
     * @param string $Modifier Modifier
     * @param string $Creator Creator
     * @param integer $ServiceNum Number of services
     * @param integer $RunInstancesNum Number of running instances
     * @param string $SubnetId Subnet
     * @param string $TcbEnvStatus TCB environment status
     * @param string $ClusterStatus eks cluster status
     * @param boolean $EnableTswTraceService Whether to enable TSW
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("ModifyDate",$param) and $param["ModifyDate"] !== null) {
            $this->ModifyDate = $param["ModifyDate"];
        }

        if (array_key_exists("Modifier",$param) and $param["Modifier"] !== null) {
            $this->Modifier = $param["Modifier"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("ServiceNum",$param) and $param["ServiceNum"] !== null) {
            $this->ServiceNum = $param["ServiceNum"];
        }

        if (array_key_exists("RunInstancesNum",$param) and $param["RunInstancesNum"] !== null) {
            $this->RunInstancesNum = $param["RunInstancesNum"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("TcbEnvStatus",$param) and $param["TcbEnvStatus"] !== null) {
            $this->TcbEnvStatus = $param["TcbEnvStatus"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("EnableTswTraceService",$param) and $param["EnableTswTraceService"] !== null) {
            $this->EnableTswTraceService = $param["EnableTswTraceService"];
        }
    }
}
