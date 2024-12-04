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
 * ModifySubscribeObjects request structure.
 *
 * @method string getSubscribeId() Obtain Data subscription instance ID
 * @method void setSubscribeId(string $SubscribeId) Set Data subscription instance ID
 * @method integer getSubscribeObjectType() Obtain Data subscription type. Valid values for non-mongo task: 0 (full instance update); 1 (data update); 2 (structure update); 3 (data + structure update). Valid values for mongo task: 0 (full instance update); 4 (subscribe to a table); 5 (subscribe to a collection).
 * @method void setSubscribeObjectType(integer $SubscribeObjectType) Set Data subscription type. Valid values for non-mongo task: 0 (full instance update); 1 (data update); 2 (structure update); 3 (data + structure update). Valid values for mongo task: 0 (full instance update); 4 (subscribe to a table); 5 (subscribe to a collection).
 * @method array getObjects() Obtain Modified subscription database table information. It will replace the original subscription object, this field is required unless SubscribeObjectType = 0 or 2.
 * @method void setObjects(array $Objects) Set Modified subscription database table information. It will replace the original subscription object, this field is required unless SubscribeObjectType = 0 or 2.
 * @method array getDistributeRules() Obtain Kafka partitioning policy. If left blank, it will remain unchanged by default. If filled, it will replace the original policy.
 * @method void setDistributeRules(array $DistributeRules) Set Kafka partitioning policy. If left blank, it will remain unchanged by default. If filled, it will replace the original policy.
 * @method string getDefaultRuleType() Obtain Default partitioning policy. Data that does not meet the regex in DistributeRules will be partitioned according to the default partitioning policy.Default strategies supported by non-mongo products: table - partitioned by table name, pk - partitioned by table name + primary key. Mongo's default strategy only supports: collection-partitioned by collection name.This field is used in conjunction with DistributeRules. If DistributeRules is configured, this field is also required. If this field is configured, it is considered as configuring a DistributeRules, and the original partitioning policy will also be overwritten.
 * @method void setDefaultRuleType(string $DefaultRuleType) Set Default partitioning policy. Data that does not meet the regex in DistributeRules will be partitioned according to the default partitioning policy.Default strategies supported by non-mongo products: table - partitioned by table name, pk - partitioned by table name + primary key. Mongo's default strategy only supports: collection-partitioned by collection name.This field is used in conjunction with DistributeRules. If DistributeRules is configured, this field is also required. If this field is configured, it is considered as configuring a DistributeRules, and the original partitioning policy will also be overwritten.
 * @method array getPipelineInfo() Obtain Mongo output aggregation settings, optional for Mongo tasks. If left blank, no modification will be made by default.
 * @method void setPipelineInfo(array $PipelineInfo) Set Mongo output aggregation settings, optional for Mongo tasks. If left blank, no modification will be made by default.
 */
class ModifySubscribeObjectsRequest extends AbstractModel
{
    /**
     * @var string Data subscription instance ID
     */
    public $SubscribeId;

    /**
     * @var integer Data subscription type. Valid values for non-mongo task: 0 (full instance update); 1 (data update); 2 (structure update); 3 (data + structure update). Valid values for mongo task: 0 (full instance update); 4 (subscribe to a table); 5 (subscribe to a collection).
     */
    public $SubscribeObjectType;

    /**
     * @var array Modified subscription database table information. It will replace the original subscription object, this field is required unless SubscribeObjectType = 0 or 2.
     */
    public $Objects;

    /**
     * @var array Kafka partitioning policy. If left blank, it will remain unchanged by default. If filled, it will replace the original policy.
     */
    public $DistributeRules;

    /**
     * @var string Default partitioning policy. Data that does not meet the regex in DistributeRules will be partitioned according to the default partitioning policy.Default strategies supported by non-mongo products: table - partitioned by table name, pk - partitioned by table name + primary key. Mongo's default strategy only supports: collection-partitioned by collection name.This field is used in conjunction with DistributeRules. If DistributeRules is configured, this field is also required. If this field is configured, it is considered as configuring a DistributeRules, and the original partitioning policy will also be overwritten.
     */
    public $DefaultRuleType;

    /**
     * @var array Mongo output aggregation settings, optional for Mongo tasks. If left blank, no modification will be made by default.
     */
    public $PipelineInfo;

    /**
     * @param string $SubscribeId Data subscription instance ID
     * @param integer $SubscribeObjectType Data subscription type. Valid values for non-mongo task: 0 (full instance update); 1 (data update); 2 (structure update); 3 (data + structure update). Valid values for mongo task: 0 (full instance update); 4 (subscribe to a table); 5 (subscribe to a collection).
     * @param array $Objects Modified subscription database table information. It will replace the original subscription object, this field is required unless SubscribeObjectType = 0 or 2.
     * @param array $DistributeRules Kafka partitioning policy. If left blank, it will remain unchanged by default. If filled, it will replace the original policy.
     * @param string $DefaultRuleType Default partitioning policy. Data that does not meet the regex in DistributeRules will be partitioned according to the default partitioning policy.Default strategies supported by non-mongo products: table - partitioned by table name, pk - partitioned by table name + primary key. Mongo's default strategy only supports: collection-partitioned by collection name.This field is used in conjunction with DistributeRules. If DistributeRules is configured, this field is also required. If this field is configured, it is considered as configuring a DistributeRules, and the original partitioning policy will also be overwritten.
     * @param array $PipelineInfo Mongo output aggregation settings, optional for Mongo tasks. If left blank, no modification will be made by default.
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

        if (array_key_exists("SubscribeObjectType",$param) and $param["SubscribeObjectType"] !== null) {
            $this->SubscribeObjectType = $param["SubscribeObjectType"];
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = [];
            foreach ($param["Objects"] as $key => $value){
                $obj = new ModifiedSubscribeObject();
                $obj->deserialize($value);
                array_push($this->Objects, $obj);
            }
        }

        if (array_key_exists("DistributeRules",$param) and $param["DistributeRules"] !== null) {
            $this->DistributeRules = [];
            foreach ($param["DistributeRules"] as $key => $value){
                $obj = new DistributeRule();
                $obj->deserialize($value);
                array_push($this->DistributeRules, $obj);
            }
        }

        if (array_key_exists("DefaultRuleType",$param) and $param["DefaultRuleType"] !== null) {
            $this->DefaultRuleType = $param["DefaultRuleType"];
        }

        if (array_key_exists("PipelineInfo",$param) and $param["PipelineInfo"] !== null) {
            $this->PipelineInfo = [];
            foreach ($param["PipelineInfo"] as $key => $value){
                $obj = new PipelineInfo();
                $obj->deserialize($value);
                array_push($this->PipelineInfo, $obj);
            }
        }
    }
}
