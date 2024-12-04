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
 * ConfigureSubscribeJob request structure.
 *
 * @method string getSubscribeId() Obtain Data subscription instance ID
 * @method void setSubscribeId(string $SubscribeId) Set Data subscription instance ID
 * @method string getSubscribeMode() Obtain Data subscription type. Valid values for non-mongo DatabaseType: all (full instance update); dml (data update); ddl (structure update); dmlAndDdl (data + structure update). Valid values for mongo DatabaseType: all (full instance update); database (subscribe to a table); collection (subscribe to a collection).
 * @method void setSubscribeMode(string $SubscribeMode) Set Data subscription type. Valid values for non-mongo DatabaseType: all (full instance update); dml (data update); ddl (structure update); dmlAndDdl (data + structure update). Valid values for mongo DatabaseType: all (full instance update); database (subscribe to a table); collection (subscribe to a collection).
 * @method string getAccessType() Obtain Source database access type. Valid values: extranet (public network); vpncloud (VPN access); dcg (Direct Connect); ccn (CCN); cdb (database); cvm (self-build on CVM); intranet (intranet); vpc (VPC). Note: The specific optional values depend on the current link support capabilities.
 * @method void setAccessType(string $AccessType) Set Source database access type. Valid values: extranet (public network); vpncloud (VPN access); dcg (Direct Connect); ccn (CCN); cdb (database); cvm (self-build on CVM); intranet (intranet); vpc (VPC). Note: The specific optional values depend on the current link support capabilities.
 * @method array getEndpoints() Obtain Database node information
 * @method void setEndpoints(array $Endpoints) Set Database node information
 * @method SubscribeKafkaConfig getKafkaConfig() Obtain Kafka configuration
 * @method void setKafkaConfig(SubscribeKafkaConfig $KafkaConfig) Set Kafka configuration
 * @method array getSubscribeObjects() Obtain Subscription database table information. When SubscribeMode is not all or ddl, SubscribeObjects is a required parameter.
 * @method void setSubscribeObjects(array $SubscribeObjects) Set Subscription database table information. When SubscribeMode is not all or ddl, SubscribeObjects is a required parameter.
 * @method string getProtocol() Obtain Subscription data format, such as: protobuf, json, avro. Note: The specific optional values depend on the current link support capabilities. For details on the data format, please refer to the consumption demo documentation on the official website.
 * @method void setProtocol(string $Protocol) Set Subscription data format, such as: protobuf, json, avro. Note: The specific optional values depend on the current link support capabilities. For details on the data format, please refer to the consumption demo documentation on the official website.
 * @method array getPipelineInfo() Obtain mongo optional parameter: output aggregation settings.
 * @method void setPipelineInfo(array $PipelineInfo) Set mongo optional parameter: output aggregation settings.
 * @method array getExtraAttr() Obtain Additional information added for the business. The parameter name is called key, and the parameter value is called value.Optional parameters for mysql: ProcessXA. If true is filled in, it will be processed. If it is left blank or filled with other values, it will not be processed.Optional parameters for mongo: SubscribeType. Currently only changeStream is supported. If not filled in, the default is changeStream.Other businesses currently have no optional parameters.
 * @method void setExtraAttr(array $ExtraAttr) Set Additional information added for the business. The parameter name is called key, and the parameter value is called value.Optional parameters for mysql: ProcessXA. If true is filled in, it will be processed. If it is left blank or filled with other values, it will not be processed.Optional parameters for mongo: SubscribeType. Currently only changeStream is supported. If not filled in, the default is changeStream.Other businesses currently have no optional parameters.
 */
class ConfigureSubscribeJobRequest extends AbstractModel
{
    /**
     * @var string Data subscription instance ID
     */
    public $SubscribeId;

    /**
     * @var string Data subscription type. Valid values for non-mongo DatabaseType: all (full instance update); dml (data update); ddl (structure update); dmlAndDdl (data + structure update). Valid values for mongo DatabaseType: all (full instance update); database (subscribe to a table); collection (subscribe to a collection).
     */
    public $SubscribeMode;

    /**
     * @var string Source database access type. Valid values: extranet (public network); vpncloud (VPN access); dcg (Direct Connect); ccn (CCN); cdb (database); cvm (self-build on CVM); intranet (intranet); vpc (VPC). Note: The specific optional values depend on the current link support capabilities.
     */
    public $AccessType;

    /**
     * @var array Database node information
     */
    public $Endpoints;

    /**
     * @var SubscribeKafkaConfig Kafka configuration
     */
    public $KafkaConfig;

    /**
     * @var array Subscription database table information. When SubscribeMode is not all or ddl, SubscribeObjects is a required parameter.
     */
    public $SubscribeObjects;

    /**
     * @var string Subscription data format, such as: protobuf, json, avro. Note: The specific optional values depend on the current link support capabilities. For details on the data format, please refer to the consumption demo documentation on the official website.
     */
    public $Protocol;

    /**
     * @var array mongo optional parameter: output aggregation settings.
     */
    public $PipelineInfo;

    /**
     * @var array Additional information added for the business. The parameter name is called key, and the parameter value is called value.Optional parameters for mysql: ProcessXA. If true is filled in, it will be processed. If it is left blank or filled with other values, it will not be processed.Optional parameters for mongo: SubscribeType. Currently only changeStream is supported. If not filled in, the default is changeStream.Other businesses currently have no optional parameters.
     */
    public $ExtraAttr;

    /**
     * @param string $SubscribeId Data subscription instance ID
     * @param string $SubscribeMode Data subscription type. Valid values for non-mongo DatabaseType: all (full instance update); dml (data update); ddl (structure update); dmlAndDdl (data + structure update). Valid values for mongo DatabaseType: all (full instance update); database (subscribe to a table); collection (subscribe to a collection).
     * @param string $AccessType Source database access type. Valid values: extranet (public network); vpncloud (VPN access); dcg (Direct Connect); ccn (CCN); cdb (database); cvm (self-build on CVM); intranet (intranet); vpc (VPC). Note: The specific optional values depend on the current link support capabilities.
     * @param array $Endpoints Database node information
     * @param SubscribeKafkaConfig $KafkaConfig Kafka configuration
     * @param array $SubscribeObjects Subscription database table information. When SubscribeMode is not all or ddl, SubscribeObjects is a required parameter.
     * @param string $Protocol Subscription data format, such as: protobuf, json, avro. Note: The specific optional values depend on the current link support capabilities. For details on the data format, please refer to the consumption demo documentation on the official website.
     * @param array $PipelineInfo mongo optional parameter: output aggregation settings.
     * @param array $ExtraAttr Additional information added for the business. The parameter name is called key, and the parameter value is called value.Optional parameters for mysql: ProcessXA. If true is filled in, it will be processed. If it is left blank or filled with other values, it will not be processed.Optional parameters for mongo: SubscribeType. Currently only changeStream is supported. If not filled in, the default is changeStream.Other businesses currently have no optional parameters.
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

        if (array_key_exists("SubscribeMode",$param) and $param["SubscribeMode"] !== null) {
            $this->SubscribeMode = $param["SubscribeMode"];
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

        if (array_key_exists("KafkaConfig",$param) and $param["KafkaConfig"] !== null) {
            $this->KafkaConfig = new SubscribeKafkaConfig();
            $this->KafkaConfig->deserialize($param["KafkaConfig"]);
        }

        if (array_key_exists("SubscribeObjects",$param) and $param["SubscribeObjects"] !== null) {
            $this->SubscribeObjects = [];
            foreach ($param["SubscribeObjects"] as $key => $value){
                $obj = new SubscribeObject();
                $obj->deserialize($value);
                array_push($this->SubscribeObjects, $obj);
            }
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("PipelineInfo",$param) and $param["PipelineInfo"] !== null) {
            $this->PipelineInfo = [];
            foreach ($param["PipelineInfo"] as $key => $value){
                $obj = new PipelineInfo();
                $obj->deserialize($value);
                array_push($this->PipelineInfo, $obj);
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
    }
}
