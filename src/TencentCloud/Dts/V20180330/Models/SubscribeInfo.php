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
 * Subscription instance information
 *
 * @method string getSubscribeId() Obtain Data subscription instance ID
 * @method void setSubscribeId(string $SubscribeId) Set Data subscription instance ID
 * @method string getSubscribeName() Obtain Data subscription instance name
 * @method void setSubscribeName(string $SubscribeName) Set Data subscription instance name
 * @method string getChannelId() Obtain ID of channel bound to data subscription instance
 * @method void setChannelId(string $ChannelId) Set ID of channel bound to data subscription instance
 * @method string getProduct() Obtain Name of product bound to data subscription instance
 * @method void setProduct(string $Product) Set Name of product bound to data subscription instance
 * @method string getInstanceId() Obtain ID of database instance bound to data subscription instance
 * @method void setInstanceId(string $InstanceId) Set ID of database instance bound to data subscription instance
 * @method string getInstanceStatus() Obtain Status of database instance bound to data subscription instance
 * @method void setInstanceStatus(string $InstanceStatus) Set Status of database instance bound to data subscription instance
 * @method string getSubsStatus() Obtain Data subscription instance configuration status. Valid values: unconfigure, configuring, configured
 * @method void setSubsStatus(string $SubsStatus) Set Data subscription instance configuration status. Valid values: unconfigure, configuring, configured
 * @method string getModifyTime() Obtain Last modified time
 * @method void setModifyTime(string $ModifyTime) Set Last modified time
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getIsolateTime() Obtain Isolation time
 * @method void setIsolateTime(string $IsolateTime) Set Isolation time
 * @method string getExpireTime() Obtain Expiration time
 * @method void setExpireTime(string $ExpireTime) Set Expiration time
 * @method string getOfflineTime() Obtain Deactivation time
 * @method void setOfflineTime(string $OfflineTime) Set Deactivation time
 * @method string getConsumeStartTime() Obtain Last modified consumption starting time point. If it has never been modified, this field is 0
 * @method void setConsumeStartTime(string $ConsumeStartTime) Set Last modified consumption starting time point. If it has never been modified, this field is 0
 * @method string getRegion() Obtain Data subscription instance region
 * @method void setRegion(string $Region) Set Data subscription instance region
 * @method integer getPayType() Obtain Billing mode. 1: pay-as-you-go
 * @method void setPayType(integer $PayType) Set Billing mode. 1: pay-as-you-go
 * @method string getVip() Obtain Data subscription instance VIP
 * @method void setVip(string $Vip) Set Data subscription instance VIP
 * @method integer getVport() Obtain Data subscription instance Vport
 * @method void setVport(integer $Vport) Set Data subscription instance Vport
 * @method string getUniqVpcId() Obtain Unique ID of the VPC where the data subscription instance VIP resides
 * @method void setUniqVpcId(string $UniqVpcId) Set Unique ID of the VPC where the data subscription instance VIP resides
 * @method string getUniqSubnetId() Obtain Unique ID of the subnet where the data subscription instance VIP resides
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Unique ID of the subnet where the data subscription instance VIP resides
 * @method string getStatus() Obtain Data subscription instance status. Valid values: creating, normal, isolating, isolated, offlining, offline
 * @method void setStatus(string $Status) Set Data subscription instance status. Valid values: creating, normal, isolating, isolated, offlining, offline
 * @method string getSdkConsumedTime() Obtain Timestamp of the last message confirmed by the SDK. If the SDK keeps consuming, this field can also be used as the current consumption time point of the SDK
 * @method void setSdkConsumedTime(string $SdkConsumedTime) Set Timestamp of the last message confirmed by the SDK. If the SDK keeps consuming, this field can also be used as the current consumption time point of the SDK
 * @method array getTags() Obtain Tag
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getAutoRenewFlag() Obtain Whether auto-renewal is enabled. 0: do not enable; 1: enable
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether auto-renewal is enabled. 0: do not enable; 1: enable
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getSubscribeVersion() Obtain Subscription instance edition. ·`txdts`: legacy data subscription; `kafka`: data subscription in Kafka edition
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubscribeVersion(string $SubscribeVersion) Set Subscription instance edition. ·`txdts`: legacy data subscription; `kafka`: data subscription in Kafka edition
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class SubscribeInfo extends AbstractModel
{
    /**
     * @var string Data subscription instance ID
     */
    public $SubscribeId;

    /**
     * @var string Data subscription instance name
     */
    public $SubscribeName;

    /**
     * @var string ID of channel bound to data subscription instance
     */
    public $ChannelId;

    /**
     * @var string Name of product bound to data subscription instance
     */
    public $Product;

    /**
     * @var string ID of database instance bound to data subscription instance
     */
    public $InstanceId;

    /**
     * @var string Status of database instance bound to data subscription instance
     */
    public $InstanceStatus;

    /**
     * @var string Data subscription instance configuration status. Valid values: unconfigure, configuring, configured
     */
    public $SubsStatus;

    /**
     * @var string Last modified time
     */
    public $ModifyTime;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Isolation time
     */
    public $IsolateTime;

    /**
     * @var string Expiration time
     */
    public $ExpireTime;

    /**
     * @var string Deactivation time
     */
    public $OfflineTime;

    /**
     * @var string Last modified consumption starting time point. If it has never been modified, this field is 0
     */
    public $ConsumeStartTime;

    /**
     * @var string Data subscription instance region
     */
    public $Region;

    /**
     * @var integer Billing mode. 1: pay-as-you-go
     */
    public $PayType;

    /**
     * @var string Data subscription instance VIP
     */
    public $Vip;

    /**
     * @var integer Data subscription instance Vport
     */
    public $Vport;

    /**
     * @var string Unique ID of the VPC where the data subscription instance VIP resides
     */
    public $UniqVpcId;

    /**
     * @var string Unique ID of the subnet where the data subscription instance VIP resides
     */
    public $UniqSubnetId;

    /**
     * @var string Data subscription instance status. Valid values: creating, normal, isolating, isolated, offlining, offline
     */
    public $Status;

    /**
     * @var string Timestamp of the last message confirmed by the SDK. If the SDK keeps consuming, this field can also be used as the current consumption time point of the SDK
     */
    public $SdkConsumedTime;

    /**
     * @var array Tag
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer Whether auto-renewal is enabled. 0: do not enable; 1: enable
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AutoRenewFlag;

    /**
     * @var string Subscription instance edition. ·`txdts`: legacy data subscription; `kafka`: data subscription in Kafka edition
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SubscribeVersion;

    /**
     * @param string $SubscribeId Data subscription instance ID
     * @param string $SubscribeName Data subscription instance name
     * @param string $ChannelId ID of channel bound to data subscription instance
     * @param string $Product Name of product bound to data subscription instance
     * @param string $InstanceId ID of database instance bound to data subscription instance
     * @param string $InstanceStatus Status of database instance bound to data subscription instance
     * @param string $SubsStatus Data subscription instance configuration status. Valid values: unconfigure, configuring, configured
     * @param string $ModifyTime Last modified time
     * @param string $CreateTime Creation time
     * @param string $IsolateTime Isolation time
     * @param string $ExpireTime Expiration time
     * @param string $OfflineTime Deactivation time
     * @param string $ConsumeStartTime Last modified consumption starting time point. If it has never been modified, this field is 0
     * @param string $Region Data subscription instance region
     * @param integer $PayType Billing mode. 1: pay-as-you-go
     * @param string $Vip Data subscription instance VIP
     * @param integer $Vport Data subscription instance Vport
     * @param string $UniqVpcId Unique ID of the VPC where the data subscription instance VIP resides
     * @param string $UniqSubnetId Unique ID of the subnet where the data subscription instance VIP resides
     * @param string $Status Data subscription instance status. Valid values: creating, normal, isolating, isolated, offlining, offline
     * @param string $SdkConsumedTime Timestamp of the last message confirmed by the SDK. If the SDK keeps consuming, this field can also be used as the current consumption time point of the SDK
     * @param array $Tags Tag
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $AutoRenewFlag Whether auto-renewal is enabled. 0: do not enable; 1: enable
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $SubscribeVersion Subscription instance edition. ·`txdts`: legacy data subscription; `kafka`: data subscription in Kafka edition
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("SubscribeName",$param) and $param["SubscribeName"] !== null) {
            $this->SubscribeName = $param["SubscribeName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("SubsStatus",$param) and $param["SubsStatus"] !== null) {
            $this->SubsStatus = $param["SubsStatus"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("ConsumeStartTime",$param) and $param["ConsumeStartTime"] !== null) {
            $this->ConsumeStartTime = $param["ConsumeStartTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SdkConsumedTime",$param) and $param["SdkConsumedTime"] !== null) {
            $this->SdkConsumedTime = $param["SdkConsumedTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("SubscribeVersion",$param) and $param["SubscribeVersion"] !== null) {
            $this->SubscribeVersion = $param["SubscribeVersion"];
        }
    }
}
