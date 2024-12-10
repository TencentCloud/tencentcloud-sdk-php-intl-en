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
 * DescribeSubscribeConf response structure.
 *
 * @method string getSubscribeId() Obtain Subscription instance ID
 * @method void setSubscribeId(string $SubscribeId) Set Subscription instance ID
 * @method string getSubscribeName() Obtain Subscription instance name
 * @method void setSubscribeName(string $SubscribeName) Set Subscription instance name
 * @method string getChannelId() Obtain Subscription channel
 * @method void setChannelId(string $ChannelId) Set Subscription channel
 * @method string getProduct() Obtain Subscribed database type
 * @method void setProduct(string $Product) Set Subscribed database type
 * @method string getInstanceId() Obtain Subscribed instance
 * @method void setInstanceId(string $InstanceId) Set Subscribed instance
 * @method string getInstanceStatus() Obtain Subscribed instance status. Valid values: running, offline, isolate
 * @method void setInstanceStatus(string $InstanceStatus) Set Subscribed instance status. Valid values: running, offline, isolate
 * @method string getSubsStatus() Obtain Subscription instance status. Valid values: unconfigure, configuring, configured
 * @method void setSubsStatus(string $SubsStatus) Set Subscription instance status. Valid values: unconfigure, configuring, configured
 * @method string getStatus() Obtain Subscription instance lifecycle status. Valid values: normal, isolating, isolated, offlining
 * @method void setStatus(string $Status) Set Subscription instance lifecycle status. Valid values: normal, isolating, isolated, offlining
 * @method string getCreateTime() Obtain Subscription instance creation time
 * @method void setCreateTime(string $CreateTime) Set Subscription instance creation time
 * @method string getIsolateTime() Obtain Subscription instance isolation time
 * @method void setIsolateTime(string $IsolateTime) Set Subscription instance isolation time
 * @method string getExpireTime() Obtain Subscription instance expiration time
 * @method void setExpireTime(string $ExpireTime) Set Subscription instance expiration time
 * @method string getOfflineTime() Obtain Subscription instance deactivation time
 * @method void setOfflineTime(string $OfflineTime) Set Subscription instance deactivation time
 * @method string getConsumeStartTime() Obtain Consumption starting time point of subscription instance
 * @method void setConsumeStartTime(string $ConsumeStartTime) Set Consumption starting time point of subscription instance
 * @method integer getPayType() Obtain Subscription instance billing mode. 1: hourly billing
 * @method void setPayType(integer $PayType) Set Subscription instance billing mode. 1: hourly billing
 * @method string getVip() Obtain Subscription channel VIP
 * @method void setVip(string $Vip) Set Subscription channel VIP
 * @method integer getVport() Obtain Subscription channel port
 * @method void setVport(integer $Vport) Set Subscription channel port
 * @method string getUniqVpcId() Obtain Subscription channel `VpcId`
 * @method void setUniqVpcId(string $UniqVpcId) Set Subscription channel `VpcId`
 * @method string getUniqSubnetId() Obtain Subscription channel `SubnetId`
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subscription channel `SubnetId`
 * @method string getSdkConsumedTime() Obtain Current SDK consumption time point
 * @method void setSdkConsumedTime(string $SdkConsumedTime) Set Current SDK consumption time point
 * @method string getSdkHost() Obtain Subscription SDK IP address
 * @method void setSdkHost(string $SdkHost) Set Subscription SDK IP address
 * @method integer getSubscribeObjectType() Obtain Subscription object type. 0: full instance subscription, 1: DDL data subscription, 2: DML structure subscription, 3: DDL data subscription + DML structure subscription
 * @method void setSubscribeObjectType(integer $SubscribeObjectType) Set Subscription object type. 0: full instance subscription, 1: DDL data subscription, 2: DML structure subscription, 3: DDL data subscription + DML structure subscription
 * @method array getSubscribeObjects() Obtain Subscription object, which is an empty array if `SubscribeObjectType` is 0
 * @method void setSubscribeObjects(array $SubscribeObjects) Set Subscription object, which is an empty array if `SubscribeObjectType` is 0
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method array getTags() Obtain Tags of the subscription
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tags of the subscription
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getAutoRenewFlag() Obtain Whether auto-renewal is enabled. 0: do not enable, 1: enable
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether auto-renewal is enabled. 0: do not enable, 1: enable
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getSubscribeVersion() Obtain Data subscription edition. `txdts`: Legacy edition; `kafka`: Kafka edition.
 * @method void setSubscribeVersion(string $SubscribeVersion) Set Data subscription edition. `txdts`: Legacy edition; `kafka`: Kafka edition.
 * @method array getErrors() Obtain Error message.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setErrors(array $Errors) Set Error message.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeSubscribeConfResponse extends AbstractModel
{
    /**
     * @var string Subscription instance ID
     */
    public $SubscribeId;

    /**
     * @var string Subscription instance name
     */
    public $SubscribeName;

    /**
     * @var string Subscription channel
     */
    public $ChannelId;

    /**
     * @var string Subscribed database type
     */
    public $Product;

    /**
     * @var string Subscribed instance
     */
    public $InstanceId;

    /**
     * @var string Subscribed instance status. Valid values: running, offline, isolate
     */
    public $InstanceStatus;

    /**
     * @var string Subscription instance status. Valid values: unconfigure, configuring, configured
     */
    public $SubsStatus;

    /**
     * @var string Subscription instance lifecycle status. Valid values: normal, isolating, isolated, offlining
     */
    public $Status;

    /**
     * @var string Subscription instance creation time
     */
    public $CreateTime;

    /**
     * @var string Subscription instance isolation time
     */
    public $IsolateTime;

    /**
     * @var string Subscription instance expiration time
     */
    public $ExpireTime;

    /**
     * @var string Subscription instance deactivation time
     */
    public $OfflineTime;

    /**
     * @var string Consumption starting time point of subscription instance
     */
    public $ConsumeStartTime;

    /**
     * @var integer Subscription instance billing mode. 1: hourly billing
     */
    public $PayType;

    /**
     * @var string Subscription channel VIP
     */
    public $Vip;

    /**
     * @var integer Subscription channel port
     */
    public $Vport;

    /**
     * @var string Subscription channel `VpcId`
     */
    public $UniqVpcId;

    /**
     * @var string Subscription channel `SubnetId`
     */
    public $UniqSubnetId;

    /**
     * @var string Current SDK consumption time point
     */
    public $SdkConsumedTime;

    /**
     * @var string Subscription SDK IP address
     */
    public $SdkHost;

    /**
     * @var integer Subscription object type. 0: full instance subscription, 1: DDL data subscription, 2: DML structure subscription, 3: DDL data subscription + DML structure subscription
     */
    public $SubscribeObjectType;

    /**
     * @var array Subscription object, which is an empty array if `SubscribeObjectType` is 0
     */
    public $SubscribeObjects;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var array Tags of the subscription
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer Whether auto-renewal is enabled. 0: do not enable, 1: enable
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AutoRenewFlag;

    /**
     * @var string Data subscription edition. `txdts`: Legacy edition; `kafka`: Kafka edition.
     */
    public $SubscribeVersion;

    /**
     * @var array Error message.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Errors;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $SubscribeId Subscription instance ID
     * @param string $SubscribeName Subscription instance name
     * @param string $ChannelId Subscription channel
     * @param string $Product Subscribed database type
     * @param string $InstanceId Subscribed instance
     * @param string $InstanceStatus Subscribed instance status. Valid values: running, offline, isolate
     * @param string $SubsStatus Subscription instance status. Valid values: unconfigure, configuring, configured
     * @param string $Status Subscription instance lifecycle status. Valid values: normal, isolating, isolated, offlining
     * @param string $CreateTime Subscription instance creation time
     * @param string $IsolateTime Subscription instance isolation time
     * @param string $ExpireTime Subscription instance expiration time
     * @param string $OfflineTime Subscription instance deactivation time
     * @param string $ConsumeStartTime Consumption starting time point of subscription instance
     * @param integer $PayType Subscription instance billing mode. 1: hourly billing
     * @param string $Vip Subscription channel VIP
     * @param integer $Vport Subscription channel port
     * @param string $UniqVpcId Subscription channel `VpcId`
     * @param string $UniqSubnetId Subscription channel `SubnetId`
     * @param string $SdkConsumedTime Current SDK consumption time point
     * @param string $SdkHost Subscription SDK IP address
     * @param integer $SubscribeObjectType Subscription object type. 0: full instance subscription, 1: DDL data subscription, 2: DML structure subscription, 3: DDL data subscription + DML structure subscription
     * @param array $SubscribeObjects Subscription object, which is an empty array if `SubscribeObjectType` is 0
     * @param string $ModifyTime Modification time
     * @param string $Region Region
     * @param array $Tags Tags of the subscription
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $AutoRenewFlag Whether auto-renewal is enabled. 0: do not enable, 1: enable
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $SubscribeVersion Data subscription edition. `txdts`: Legacy edition; `kafka`: Kafka edition.
     * @param array $Errors Error message.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("SdkConsumedTime",$param) and $param["SdkConsumedTime"] !== null) {
            $this->SdkConsumedTime = $param["SdkConsumedTime"];
        }

        if (array_key_exists("SdkHost",$param) and $param["SdkHost"] !== null) {
            $this->SdkHost = $param["SdkHost"];
        }

        if (array_key_exists("SubscribeObjectType",$param) and $param["SubscribeObjectType"] !== null) {
            $this->SubscribeObjectType = $param["SubscribeObjectType"];
        }

        if (array_key_exists("SubscribeObjects",$param) and $param["SubscribeObjects"] !== null) {
            $this->SubscribeObjects = [];
            foreach ($param["SubscribeObjects"] as $key => $value){
                $obj = new SubscribeObject();
                $obj->deserialize($value);
                array_push($this->SubscribeObjects, $obj);
            }
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
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

        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new SubsErr();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
