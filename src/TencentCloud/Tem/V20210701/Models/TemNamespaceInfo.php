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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Namespace object
 *
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method string getChannel() Obtain Channel
 * @method void setChannel(string $Channel) Set Channel
 * @method string getEnvironmentName() Obtain Environment name
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name
 * @method string getRegion() Obtain Region name
 * @method void setRegion(string $Region) Set Region name
 * @method string getDescription() Obtain Environment description
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Environment description
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status. `1`: terminated; `0`: normal
 * @method void setStatus(integer $Status) Set Status. `1`: terminated; `0`: normal
 * @method string getVpc() Obtain VPC network
 * @method void setVpc(string $Vpc) Set VPC network
 * @method string getCreateDate() Obtain Creation time
 * @method void setCreateDate(string $CreateDate) Set Creation time
 * @method string getModifyDate() Obtain Modification time
 * @method void setModifyDate(string $ModifyDate) Set Modification time
 * @method string getModifier() Obtain Modifier
 * @method void setModifier(string $Modifier) Set Modifier
 * @method string getCreator() Obtain Creator
 * @method void setCreator(string $Creator) Set Creator
 * @method integer getApplicationNum() Obtain Number of applications
 * @method void setApplicationNum(integer $ApplicationNum) Set Number of applications
 * @method integer getRunInstancesNum() Obtain Number of running instances
 * @method void setRunInstancesNum(integer $RunInstancesNum) Set Number of running instances
 * @method string getSubnetId() Obtain Subnet
 * @method void setSubnetId(string $SubnetId) Set Subnet
 * @method string getClusterStatus() Obtain Environment cluster status
 * @method void setClusterStatus(string $ClusterStatus) Set Environment cluster status
 * @method boolean getEnableTswTraceService() Obtain Whether to enable TSW
 * @method void setEnableTswTraceService(boolean $EnableTswTraceService) Set Whether to enable TSW
 * @method integer getLocked() Obtain Whether the environment is locked. `1`: locked; `0`: not locked
 * @method void setLocked(integer $Locked) Set Whether the environment is locked. `1`: locked; `0`: not locked
 * @method string getAppId() Obtain User AppId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(string $AppId) Set User AppId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set User UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubAccountUin() Obtain The UIN of sub-account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubAccountUin(string $SubAccountUin) Set The UIN of sub-account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getHasAuthority() Obtain Whether it’s authorized to access the resource
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHasAuthority(boolean $HasAuthority) Set Whether it’s authorized to access the resource
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEnvType() Obtain Environment type. Values: `test`, `pre`, `prod`
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEnvType(string $EnvType) Set Environment type. Values: `test`, `pre`, `prod`
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRegionId() Obtain Region code
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setRegionId(string $RegionId) Set Region code
Note: This field may return `null`, indicating that no valid value was found.
 */
class TemNamespaceInfo extends AbstractModel
{
    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var string Channel
     */
    public $Channel;

    /**
     * @var string Environment name
     */
    public $EnvironmentName;

    /**
     * @var string Region name
     */
    public $Region;

    /**
     * @var string Environment description
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var integer Status. `1`: terminated; `0`: normal
     */
    public $Status;

    /**
     * @var string VPC network
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
     * @var integer Number of applications
     */
    public $ApplicationNum;

    /**
     * @var integer Number of running instances
     */
    public $RunInstancesNum;

    /**
     * @var string Subnet
     */
    public $SubnetId;

    /**
     * @var string Environment cluster status
     */
    public $ClusterStatus;

    /**
     * @var boolean Whether to enable TSW
     */
    public $EnableTswTraceService;

    /**
     * @var integer Whether the environment is locked. `1`: locked; `0`: not locked
     */
    public $Locked;

    /**
     * @var string User AppId
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string User UIN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string The UIN of sub-account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubAccountUin;

    /**
     * @var string Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var array Tag.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var boolean Whether it’s authorized to access the resource
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HasAuthority;

    /**
     * @var string Environment type. Values: `test`, `pre`, `prod`
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EnvType;

    /**
     * @var string Region code
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $RegionId;

    /**
     * @param string $EnvironmentId Environment ID
     * @param string $Channel Channel
     * @param string $EnvironmentName Environment name
     * @param string $Region Region name
     * @param string $Description Environment description
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Status Status. `1`: terminated; `0`: normal
     * @param string $Vpc VPC network
     * @param string $CreateDate Creation time
     * @param string $ModifyDate Modification time
     * @param string $Modifier Modifier
     * @param string $Creator Creator
     * @param integer $ApplicationNum Number of applications
     * @param integer $RunInstancesNum Number of running instances
     * @param string $SubnetId Subnet
     * @param string $ClusterStatus Environment cluster status
     * @param boolean $EnableTswTraceService Whether to enable TSW
     * @param integer $Locked Whether the environment is locked. `1`: locked; `0`: not locked
     * @param string $AppId User AppId
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uin User UIN
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubAccountUin The UIN of sub-account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $HasAuthority Whether it’s authorized to access the resource
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EnvType Environment type. Values: `test`, `pre`, `prod`
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $RegionId Region code
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
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

        if (array_key_exists("ApplicationNum",$param) and $param["ApplicationNum"] !== null) {
            $this->ApplicationNum = $param["ApplicationNum"];
        }

        if (array_key_exists("RunInstancesNum",$param) and $param["RunInstancesNum"] !== null) {
            $this->RunInstancesNum = $param["RunInstancesNum"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("EnableTswTraceService",$param) and $param["EnableTswTraceService"] !== null) {
            $this->EnableTswTraceService = $param["EnableTswTraceService"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HasAuthority",$param) and $param["HasAuthority"] !== null) {
            $this->HasAuthority = $param["HasAuthority"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
