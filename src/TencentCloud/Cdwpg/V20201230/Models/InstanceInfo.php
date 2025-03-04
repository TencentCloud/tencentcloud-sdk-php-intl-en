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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * instance information.
 *
 * @method integer getID() Obtain Instance ID 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setID(integer $ID) Set Instance ID 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain cn/dn or others.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set cn/dn or others.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Instance Name
.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance Name
.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Instance Status ,such as  2
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Instance Status ,such as  2
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatusDesc() Obtain Instance Status  Description ,such as Running.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusDesc(string $StatusDesc) Set Instance Status  Description ,such as Running.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InstanceStateInfo getInstanceStateInfo() Obtain Instance State Infomation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceStateInfo(InstanceStateInfo $InstanceStateInfo) Set Instance State Infomation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceID() Obtain Instance ID 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceID(string $InstanceID) Set Instance ID 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain CreateTime ,such as 2022-09-05 20:00:01
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set CreateTime ,such as 2022-09-05 20:00:01
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region ,such as ap-chongqing.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region ,such as ap-chongqing.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Zone : This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Zone : This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionDesc() Obtain Region.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionDesc(string $RegionDesc) Set Region.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneDesc() Obtain Zone.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneDesc(string $ZoneDesc) Set Zone.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain Version.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Version.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCharset() Obtain Character set.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCharset(string $Charset) Set Character set.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCNNodes() Obtain CN node list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCNNodes(array $CNNodes) Set CN node list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDNNodes() Obtain DN node list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDNNodes(array $DNNodes) Set DN node list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRegionId() Obtain  Region Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(integer $RegionId) Set  Region Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getZoneId() Obtain Zone Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(integer $ZoneId) Set Zone Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain Vpc Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set Vpc Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Expire Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expire Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayMode() Obtain Pay Mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(string $PayMode) Set Pay Mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getRenewFlag() Obtain Renew Flag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(boolean $RenewFlag) Set Renew Flag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAccessDetails() Obtain Access information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessDetails(array $AccessDetails) Set Access information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var integer Instance ID 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ID;

    /**
     * @var string cn/dn or others.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var string Instance Name
.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Instance Status ,such as  2
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Instance Status  Description ,such as Running.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusDesc;

    /**
     * @var InstanceStateInfo Instance State Infomation
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceStateInfo;

    /**
     * @var string Instance ID 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceID;

    /**
     * @var string CreateTime ,such as 2022-09-05 20:00:01
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Region ,such as ap-chongqing.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Zone : This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var string Region.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionDesc;

    /**
     * @var string Zone.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneDesc;

    /**
     * @var array Tag.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Version.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var string Character set.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Charset;

    /**
     * @var array CN node list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CNNodes;

    /**
     * @var array DN node list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DNNodes;

    /**
     * @var integer  Region Id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @var integer Zone Id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var string Vpc Id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet Id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string Expire Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Pay Mode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var boolean Renew Flag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var string Instance Id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var array Access information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessDetails;

    /**
     * @param integer $ID Instance ID 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType cn/dn or others.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Instance Name
.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Instance Status ,such as  2
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StatusDesc Instance Status  Description ,such as Running.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param InstanceStateInfo $InstanceStateInfo Instance State Infomation
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceID Instance ID 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime CreateTime ,such as 2022-09-05 20:00:01
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region ,such as ap-chongqing.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Zone : This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionDesc Region.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneDesc Zone.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Version Version.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Charset Character set.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CNNodes CN node list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DNNodes DN node list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RegionId  Region Id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ZoneId Zone Id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId Vpc Id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet Id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expire Time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayMode Pay Mode
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $RenewFlag Renew Flag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance Id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AccessDetails Access information.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("InstanceStateInfo",$param) and $param["InstanceStateInfo"] !== null) {
            $this->InstanceStateInfo = new InstanceStateInfo();
            $this->InstanceStateInfo->deserialize($param["InstanceStateInfo"]);
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("RegionDesc",$param) and $param["RegionDesc"] !== null) {
            $this->RegionDesc = $param["RegionDesc"];
        }

        if (array_key_exists("ZoneDesc",$param) and $param["ZoneDesc"] !== null) {
            $this->ZoneDesc = $param["ZoneDesc"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("CNNodes",$param) and $param["CNNodes"] !== null) {
            $this->CNNodes = [];
            foreach ($param["CNNodes"] as $key => $value){
                $obj = new InstanceNodeGroup();
                $obj->deserialize($value);
                array_push($this->CNNodes, $obj);
            }
        }

        if (array_key_exists("DNNodes",$param) and $param["DNNodes"] !== null) {
            $this->DNNodes = [];
            foreach ($param["DNNodes"] as $key => $value){
                $obj = new InstanceNodeGroup();
                $obj->deserialize($value);
                array_push($this->DNNodes, $obj);
            }
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AccessDetails",$param) and $param["AccessDetails"] !== null) {
            $this->AccessDetails = [];
            foreach ($param["AccessDetails"] as $key => $value){
                $obj = new AccessInfo();
                $obj->deserialize($value);
                array_push($this->AccessDetails, $obj);
            }
        }
    }
}
