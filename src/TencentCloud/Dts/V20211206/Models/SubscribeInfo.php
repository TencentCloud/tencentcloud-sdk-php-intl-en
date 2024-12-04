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
 * Subscription instance information
 *
 * @method string getSubscribeId() Obtain Data subscription instance ID
 * @method void setSubscribeId(string $SubscribeId) Set Data subscription instance ID
 * @method string getSubscribeName() Obtain Data subscription instance name
 * @method void setSubscribeName(string $SubscribeName) Set Data subscription instance name
 * @method string getTopic() Obtain Kafka topic for data sent by the subscription instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopic(string $Topic) Set Kafka topic for data sent by the subscription instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProduct() Obtain Subscription instance type. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, tdsqlpercona are supported.
 * @method void setProduct(string $Product) Set Subscription instance type. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, tdsqlpercona are supported.
 * @method string getInstanceId() Obtain The subscribed database instance ID (if the subscription is a cloud database). If the instance is not on Tencent Cloud, this value is empty.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set The subscribed database instance ID (if the subscription is a cloud database). If the instance is not on Tencent Cloud, this value is empty.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceStatus() Obtain Cloud database status: running, isolated, offline. If it is not on the cloud, this value is empty.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceStatus(string $InstanceStatus) Set Cloud database status: running, isolated, offline. If it is not on the cloud, this value is empty.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Data subscription lifecycle status. Valid values: normal (normal), isolating (isolating), isolated (isolated), offlining (offlining), post2PrePayIng (changing from pay-as-you-go to monthly subscription).
 * @method void setStatus(string $Status) Set Data subscription lifecycle status. Valid values: normal (normal), isolating (isolating), isolated (isolated), offlining (offlining), post2PrePayIng (changing from pay-as-you-go to monthly subscription).
 * @method string getSubsStatus() Obtain Data subscription status. Valid values: notStarted, checking, checkNotPass, checkPass, starting, running, error.
 * @method void setSubsStatus(string $SubsStatus) Set Data subscription status. Valid values: notStarted, checking, checkNotPass, checkPass, starting, running, error.
 * @method string getModifyTime() Obtain Last modification time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Last modification time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsolateTime() Obtain Isolation time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolateTime(string $IsolateTime) Set Isolation time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Expiration time for monthly subscription tasks, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time for monthly subscription tasks, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOfflineTime() Obtain Offline time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOfflineTime(string $OfflineTime) Set Offline time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPayType() Obtain Billing mode. 1: pay-as-you-go
 * @method void setPayType(integer $PayType) Set Billing mode. 1: pay-as-you-go
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. It is meaningful only when PayType=0. Valid values: 0 (auto-renewal disabled); 1 (auto-renewal enabled).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. It is meaningful only when PayType=0. Valid values: 0 (auto-renewal disabled); 1 (auto-renewal enabled).
 * @method string getRegion() Obtain Data subscription instance region
 * @method void setRegion(string $Region) Set Data subscription instance region
 * @method string getAccessType() Obtain Access type. Valid values: extranet (public network); vpncloud (VPN access); dcg (Direct Connect); ccn (CCN); cdb (database); cvm (self-build on CVM); intranet (intranet); vpc (VPC).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessType(string $AccessType) Set Access type. Valid values: extranet (public network); vpncloud (VPN access); dcg (Direct Connect); ccn (CCN); cdb (database); cvm (self-build on CVM); intranet (intranet); vpc (VPC).Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getEndpoints() Obtain Database node information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndpoints(array $Endpoints) Set Database node information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubscribeVersion() Obtain Data subscription version, only Kafka version is currently supported.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubscribeVersion(string $SubscribeVersion) Set Data subscription version, only Kafka version is currently supported.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain TagNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set TagNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getErrors() Obtain Task error messageNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrors(array $Errors) Set Task error messageNote: This field may return null, indicating that no valid values can be obtained.
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
     * @var string Kafka topic for data sent by the subscription instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Topic;

    /**
     * @var string Subscription instance type. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, tdsqlpercona are supported.
     */
    public $Product;

    /**
     * @var string The subscribed database instance ID (if the subscription is a cloud database). If the instance is not on Tencent Cloud, this value is empty.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Cloud database status: running, isolated, offline. If it is not on the cloud, this value is empty.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceStatus;

    /**
     * @var string Data subscription lifecycle status. Valid values: normal (normal), isolating (isolating), isolated (isolated), offlining (offlining), post2PrePayIng (changing from pay-as-you-go to monthly subscription).
     */
    public $Status;

    /**
     * @var string Data subscription status. Valid values: notStarted, checking, checkNotPass, checkPass, starting, running, error.
     */
    public $SubsStatus;

    /**
     * @var string Last modification time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var string Creation time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Isolation time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsolateTime;

    /**
     * @var string Expiration time for monthly subscription tasks, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Offline time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OfflineTime;

    /**
     * @var integer Billing mode. 1: pay-as-you-go
     */
    public $PayType;

    /**
     * @var integer Auto-renewal flag. It is meaningful only when PayType=0. Valid values: 0 (auto-renewal disabled); 1 (auto-renewal enabled).
     */
    public $AutoRenewFlag;

    /**
     * @var string Data subscription instance region
     */
    public $Region;

    /**
     * @var string Access type. Valid values: extranet (public network); vpncloud (VPN access); dcg (Direct Connect); ccn (CCN); cdb (database); cvm (self-build on CVM); intranet (intranet); vpc (VPC).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessType;

    /**
     * @var array Database node information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Endpoints;

    /**
     * @var string Data subscription version, only Kafka version is currently supported.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubscribeVersion;

    /**
     * @var array TagNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var array Task error messageNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Errors;

    /**
     * @param string $SubscribeId Data subscription instance ID
     * @param string $SubscribeName Data subscription instance name
     * @param string $Topic Kafka topic for data sent by the subscription instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Product Subscription instance type. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, tdsqlpercona are supported.
     * @param string $InstanceId The subscribed database instance ID (if the subscription is a cloud database). If the instance is not on Tencent Cloud, this value is empty.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceStatus Cloud database status: running, isolated, offline. If it is not on the cloud, this value is empty.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Data subscription lifecycle status. Valid values: normal (normal), isolating (isolating), isolated (isolated), offlining (offlining), post2PrePayIng (changing from pay-as-you-go to monthly subscription).
     * @param string $SubsStatus Data subscription status. Valid values: notStarted, checking, checkNotPass, checkPass, starting, running, error.
     * @param string $ModifyTime Last modification time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsolateTime Isolation time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expiration time for monthly subscription tasks, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OfflineTime Offline time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PayType Billing mode. 1: pay-as-you-go
     * @param integer $AutoRenewFlag Auto-renewal flag. It is meaningful only when PayType=0. Valid values: 0 (auto-renewal disabled); 1 (auto-renewal enabled).
     * @param string $Region Data subscription instance region
     * @param string $AccessType Access type. Valid values: extranet (public network); vpncloud (VPN access); dcg (Direct Connect); ccn (CCN); cdb (database); cvm (self-build on CVM); intranet (intranet); vpc (VPC).Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Endpoints Database node information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubscribeVersion Data subscription version, only Kafka version is currently supported.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags TagNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $Errors Task error messageNote: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("Endpoints",$param) and $param["Endpoints"] !== null) {
            $this->Endpoints = [];
            foreach ($param["Endpoints"] as $key => $value){
                $obj = new EndpointItem();
                $obj->deserialize($value);
                array_push($this->Endpoints, $obj);
            }
        }

        if (array_key_exists("SubscribeVersion",$param) and $param["SubscribeVersion"] !== null) {
            $this->SubscribeVersion = $param["SubscribeVersion"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new SubsErr();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }
    }
}
