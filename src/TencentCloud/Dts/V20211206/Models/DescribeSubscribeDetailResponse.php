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
 * DescribeSubscribeDetail response structure.
 *
 * @method string getSubscribeId() Obtain The ID of the data subscription, such as subs-b6x64o31tm
 * @method void setSubscribeId(string $SubscribeId) Set The ID of the data subscription, such as subs-b6x64o31tm
 * @method string getSubscribeName() Obtain Data subscription instance name
 * @method void setSubscribeName(string $SubscribeName) Set Data subscription instance name
 * @method string getProduct() Obtain Subscription database type. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, tdsqlpercona are supported.
 * @method void setProduct(string $Product) Set Subscription database type. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, tdsqlpercona are supported.
 * @method string getInstanceId() Obtain The subscribed cloud database instance ID. This value only makes sense if cloud database is subscribed. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set The subscribed cloud database instance ID. This value only makes sense if cloud database is subscribed. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceStatus() Obtain The subscribed cloud database instance status. This value only makes sense if cloud database is subscribed. Valid values: running, isolated, offline.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceStatus(string $InstanceStatus) Set The subscribed cloud database instance status. This value only makes sense if cloud database is subscribed. Valid values: running, isolated, offline.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Subscription task billing status. Valid values: normal, isolating, isolated, offline, post2PrePayIng.
 * @method void setStatus(string $Status) Set Subscription task billing status. Valid values: normal, isolating, isolated, offline, post2PrePayIng.
 * @method string getSubsStatus() Obtain Subscription task status. Valid values: notStarted, checking, checkNotPass, checkPass, starting, running, error.
 * @method void setSubsStatus(string $SubsStatus) Set Subscription task status. Valid values: notStarted, checking, checkNotPass, checkPass, starting, running, error.
 * @method string getModifyTime() Obtain Modification time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsolateTime() Obtain Isolation time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsolateTime(string $IsolateTime) Set Isolation time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Expiration time for monthly subscription tasks, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time for monthly subscription tasks, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOfflineTime() Obtain Offline time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOfflineTime(string $OfflineTime) Set Offline time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPayType() Obtain Payment method. Valid values: 0 (monthly subscription); 1 (pay-as-you-go).
 * @method void setPayType(integer $PayType) Set Payment method. Valid values: 0 (monthly subscription); 1 (pay-as-you-go).
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. It is meaningful only when PayType=0. Valid values: 0 (auto-renewal disabled); 1 (auto-renewal enabled).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. It is meaningful only when PayType=0. Valid values: 0 (auto-renewal disabled); 1 (auto-renewal enabled).
 * @method string getRegion() Obtain The region where the task is located
 * @method void setRegion(string $Region) Set The region where the task is located
 * @method string getTopic() Obtain Kafka topic
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopic(string $Topic) Set Kafka topic
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBroker() Obtain Broker address of Kafka serviceNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setBroker(string $Broker) Set Broker address of Kafka serviceNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubscribeMode() Obtain Data subscription type. Valid values for non-mongo Product: all (full instance update); dml (data update); ddl (structure update); dmlAndDdl (data + structure update). Valid values for mongo Product: all (full instance update); database (subscribe to a table); collection (subscribe to a collection).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubscribeMode(string $SubscribeMode) Set Data subscription type. Valid values for non-mongo Product: all (full instance update); dml (data update); ddl (structure update); dmlAndDdl (data + structure update). Valid values for mongo Product: all (full instance update); database (subscribe to a table); collection (subscribe to a collection).Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Subscription data format. If it is empty, the default format is used: mysql\cynosdbmysql\mariadb\percona\tdsqlpercona\tdpg is protobuf, mongo is json. When DatabaseType is mysql and cynosdbmysql, there are three optional protocols: protobuf\avro\json. For details on data format, please refer to the consumption demo documentation on the official website.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Subscription data format. If it is empty, the default format is used: mysql\cynosdbmysql\mariadb\percona\tdsqlpercona\tdpg is protobuf, mongo is json. When DatabaseType is mysql and cynosdbmysql, there are three optional protocols: protobuf\avro\json. For details on data format, please refer to the consumption demo documentation on the official website.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSubscribeObjects() Obtain Information of subscribed tableNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubscribeObjects(array $SubscribeObjects) Set Information of subscribed tableNote: This field may return null, indicating that no valid values can be obtained.
 * @method SubscribeKafkaConfig getKafkaConfig() Obtain Kafka configuration information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKafkaConfig(SubscribeKafkaConfig $KafkaConfig) Set Kafka configuration information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccessType() Obtain Source database access type. Valid values: extranet (public network); vpncloud (VPN access); dcg (Direct Connect); ccn (CCN); cdb (database); cvm (self-build on CVM); intranet (intranet); vpc (VPC). Note: The specific optional values depend on the current link support capabilities.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessType(string $AccessType) Set Source database access type. Valid values: extranet (public network); vpncloud (VPN access); dcg (Direct Connect); ccn (CCN); cdb (database); cvm (self-build on CVM); intranet (intranet); vpc (VPC). Note: The specific optional values depend on the current link support capabilities.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getEndpoints() Obtain Access type information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndpoints(array $Endpoints) Set Access type information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPipelineInfo() Obtain Mongo output aggregation settings
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPipelineInfo(array $PipelineInfo) Set Mongo output aggregation settings
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain TagNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set TagNote: This field may return null, indicating that no valid values can be obtained.
 * @method array getErrors() Obtain Subscription task error information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrors(array $Errors) Set Subscription task error information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getExtraAttr() Obtain Additional information added for the business. The parameter name is called key, and the parameter value is called value.Optional parameters for mysql: ProcessXA. Fill in true to process, others will not be processed.Optional parameters for mongo: SubscribeType. Currently only changeStream is supported.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtraAttr(array $ExtraAttr) Set Additional information added for the business. The parameter name is called key, and the parameter value is called value.Optional parameters for mysql: ProcessXA. Fill in true to process, others will not be processed.Optional parameters for mongo: SubscribeType. Currently only changeStream is supported.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeSubscribeDetailResponse extends AbstractModel
{
    /**
     * @var string The ID of the data subscription, such as subs-b6x64o31tm
     */
    public $SubscribeId;

    /**
     * @var string Data subscription instance name
     */
    public $SubscribeName;

    /**
     * @var string Subscription database type. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, tdsqlpercona are supported.
     */
    public $Product;

    /**
     * @var string The subscribed cloud database instance ID. This value only makes sense if cloud database is subscribed. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string The subscribed cloud database instance status. This value only makes sense if cloud database is subscribed. Valid values: running, isolated, offline.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceStatus;

    /**
     * @var string Subscription task billing status. Valid values: normal, isolating, isolated, offline, post2PrePayIng.
     */
    public $Status;

    /**
     * @var string Subscription task status. Valid values: notStarted, checking, checkNotPass, checkPass, starting, running, error.
     */
    public $SubsStatus;

    /**
     * @var string Modification time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var integer Payment method. Valid values: 0 (monthly subscription); 1 (pay-as-you-go).
     */
    public $PayType;

    /**
     * @var integer Auto-renewal flag. It is meaningful only when PayType=0. Valid values: 0 (auto-renewal disabled); 1 (auto-renewal enabled).
     */
    public $AutoRenewFlag;

    /**
     * @var string The region where the task is located
     */
    public $Region;

    /**
     * @var string Kafka topic
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Topic;

    /**
     * @var string Broker address of Kafka serviceNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Broker;

    /**
     * @var string Data subscription type. Valid values for non-mongo Product: all (full instance update); dml (data update); ddl (structure update); dmlAndDdl (data + structure update). Valid values for mongo Product: all (full instance update); database (subscribe to a table); collection (subscribe to a collection).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubscribeMode;

    /**
     * @var string Subscription data format. If it is empty, the default format is used: mysql\cynosdbmysql\mariadb\percona\tdsqlpercona\tdpg is protobuf, mongo is json. When DatabaseType is mysql and cynosdbmysql, there are three optional protocols: protobuf\avro\json. For details on data format, please refer to the consumption demo documentation on the official website.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var array Information of subscribed tableNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubscribeObjects;

    /**
     * @var SubscribeKafkaConfig Kafka configuration information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KafkaConfig;

    /**
     * @var string Source database access type. Valid values: extranet (public network); vpncloud (VPN access); dcg (Direct Connect); ccn (CCN); cdb (database); cvm (self-build on CVM); intranet (intranet); vpc (VPC). Note: The specific optional values depend on the current link support capabilities.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessType;

    /**
     * @var array Access type information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Endpoints;

    /**
     * @var array Mongo output aggregation settings
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PipelineInfo;

    /**
     * @var array TagNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var array Subscription task error information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Errors;

    /**
     * @var array Additional information added for the business. The parameter name is called key, and the parameter value is called value.Optional parameters for mysql: ProcessXA. Fill in true to process, others will not be processed.Optional parameters for mongo: SubscribeType. Currently only changeStream is supported.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtraAttr;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $SubscribeId The ID of the data subscription, such as subs-b6x64o31tm
     * @param string $SubscribeName Data subscription instance name
     * @param string $Product Subscription database type. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, tdsqlpercona are supported.
     * @param string $InstanceId The subscribed cloud database instance ID. This value only makes sense if cloud database is subscribed. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceStatus The subscribed cloud database instance status. This value only makes sense if cloud database is subscribed. Valid values: running, isolated, offline.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Subscription task billing status. Valid values: normal, isolating, isolated, offline, post2PrePayIng.
     * @param string $SubsStatus Subscription task status. Valid values: notStarted, checking, checkNotPass, checkPass, starting, running, error.
     * @param string $ModifyTime Modification time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time, the format is: Y-m-d h:m:s.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsolateTime Isolation time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expiration time for monthly subscription tasks, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OfflineTime Offline time, the format is: Y-m-d h:m:s. Default time: 0000-00-00 00:00:00.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PayType Payment method. Valid values: 0 (monthly subscription); 1 (pay-as-you-go).
     * @param integer $AutoRenewFlag Auto-renewal flag. It is meaningful only when PayType=0. Valid values: 0 (auto-renewal disabled); 1 (auto-renewal enabled).
     * @param string $Region The region where the task is located
     * @param string $Topic Kafka topic
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Broker Broker address of Kafka serviceNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubscribeMode Data subscription type. Valid values for non-mongo Product: all (full instance update); dml (data update); ddl (structure update); dmlAndDdl (data + structure update). Valid values for mongo Product: all (full instance update); database (subscribe to a table); collection (subscribe to a collection).Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Subscription data format. If it is empty, the default format is used: mysql\cynosdbmysql\mariadb\percona\tdsqlpercona\tdpg is protobuf, mongo is json. When DatabaseType is mysql and cynosdbmysql, there are three optional protocols: protobuf\avro\json. For details on data format, please refer to the consumption demo documentation on the official website.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SubscribeObjects Information of subscribed tableNote: This field may return null, indicating that no valid values can be obtained.
     * @param SubscribeKafkaConfig $KafkaConfig Kafka configuration information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccessType Source database access type. Valid values: extranet (public network); vpncloud (VPN access); dcg (Direct Connect); ccn (CCN); cdb (database); cvm (self-build on CVM); intranet (intranet); vpc (VPC). Note: The specific optional values depend on the current link support capabilities.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Endpoints Access type information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PipelineInfo Mongo output aggregation settings
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags TagNote: This field may return null, indicating that no valid values can be obtained.
     * @param array $Errors Subscription task error information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ExtraAttr Additional information added for the business. The parameter name is called key, and the parameter value is called value.Optional parameters for mysql: ProcessXA. Fill in true to process, others will not be processed.Optional parameters for mongo: SubscribeType. Currently only changeStream is supported.Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Broker",$param) and $param["Broker"] !== null) {
            $this->Broker = $param["Broker"];
        }

        if (array_key_exists("SubscribeMode",$param) and $param["SubscribeMode"] !== null) {
            $this->SubscribeMode = $param["SubscribeMode"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SubscribeObjects",$param) and $param["SubscribeObjects"] !== null) {
            $this->SubscribeObjects = [];
            foreach ($param["SubscribeObjects"] as $key => $value){
                $obj = new SubscribeObject();
                $obj->deserialize($value);
                array_push($this->SubscribeObjects, $obj);
            }
        }

        if (array_key_exists("KafkaConfig",$param) and $param["KafkaConfig"] !== null) {
            $this->KafkaConfig = new SubscribeKafkaConfig();
            $this->KafkaConfig->deserialize($param["KafkaConfig"]);
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

        if (array_key_exists("PipelineInfo",$param) and $param["PipelineInfo"] !== null) {
            $this->PipelineInfo = [];
            foreach ($param["PipelineInfo"] as $key => $value){
                $obj = new PipelineInfo();
                $obj->deserialize($value);
                array_push($this->PipelineInfo, $obj);
            }
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

        if (array_key_exists("ExtraAttr",$param) and $param["ExtraAttr"] !== null) {
            $this->ExtraAttr = [];
            foreach ($param["ExtraAttr"] as $key => $value){
                $obj = new KeyValuePairOption();
                $obj->deserialize($value);
                array_push($this->ExtraAttr, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
