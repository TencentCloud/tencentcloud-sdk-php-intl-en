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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned topic attributes result entity
 *
 * @method string getTopicId() Obtain Topic ID
 * @method void setTopicId(string $TopicId) Set Topic ID
 * @method integer getCreateTime() Obtain Creation time
 * @method void setCreateTime(integer $CreateTime) Set Creation time
 * @method string getNote() Obtain Topic remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNote(string $Note) Set Topic remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPartitionNum() Obtain Number of partitions
 * @method void setPartitionNum(integer $PartitionNum) Set Number of partitions
 * @method integer getEnableWhiteList() Obtain IP allowlist switch. 1: enabled, 0: disabled
 * @method void setEnableWhiteList(integer $EnableWhiteList) Set IP allowlist switch. 1: enabled, 0: disabled
 * @method array getIpWhiteList() Obtain IP allowlist list
 * @method void setIpWhiteList(array $IpWhiteList) Set IP allowlist list
 * @method Config getConfig() Obtain Topic configuration array
 * @method void setConfig(Config $Config) Set Topic configuration array
 * @method array getPartitions() Obtain Partition details
 * @method void setPartitions(array $Partitions) Set Partition details
 * @method integer getEnableAclRule() Obtain Switch of the preset ACL rule. `1`: enable, `0`: disable.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setEnableAclRule(integer $EnableAclRule) Set Switch of the preset ACL rule. `1`: enable, `0`: disable.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method array getAclRuleList() Obtain Preset ACL rule list.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setAclRuleList(array $AclRuleList) Set Preset ACL rule list.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method InstanceQuotaConfigResp getQuotaConfig() Obtain Traffic throttling policy in topic dimension.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setQuotaConfig(InstanceQuotaConfigResp $QuotaConfig) Set Traffic throttling policy in topic dimension.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getReplicaNum() Obtain Number of replicas
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplicaNum(integer $ReplicaNum) Set Number of replicas
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TopicAttributesResponse extends AbstractModel
{
    /**
     * @var string Topic ID
     */
    public $TopicId;

    /**
     * @var integer Creation time
     */
    public $CreateTime;

    /**
     * @var string Topic remarks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Note;

    /**
     * @var integer Number of partitions
     */
    public $PartitionNum;

    /**
     * @var integer IP allowlist switch. 1: enabled, 0: disabled
     */
    public $EnableWhiteList;

    /**
     * @var array IP allowlist list
     */
    public $IpWhiteList;

    /**
     * @var Config Topic configuration array
     */
    public $Config;

    /**
     * @var array Partition details
     */
    public $Partitions;

    /**
     * @var integer Switch of the preset ACL rule. `1`: enable, `0`: disable.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $EnableAclRule;

    /**
     * @var array Preset ACL rule list.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $AclRuleList;

    /**
     * @var InstanceQuotaConfigResp Traffic throttling policy in topic dimension.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $QuotaConfig;

    /**
     * @var integer Number of replicas
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReplicaNum;

    /**
     * @param string $TopicId Topic ID
     * @param integer $CreateTime Creation time
     * @param string $Note Topic remarks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PartitionNum Number of partitions
     * @param integer $EnableWhiteList IP allowlist switch. 1: enabled, 0: disabled
     * @param array $IpWhiteList IP allowlist list
     * @param Config $Config Topic configuration array
     * @param array $Partitions Partition details
     * @param integer $EnableAclRule Switch of the preset ACL rule. `1`: enable, `0`: disable.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param array $AclRuleList Preset ACL rule list.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param InstanceQuotaConfigResp $QuotaConfig Traffic throttling policy in topic dimension.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ReplicaNum Number of replicas
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("EnableWhiteList",$param) and $param["EnableWhiteList"] !== null) {
            $this->EnableWhiteList = $param["EnableWhiteList"];
        }

        if (array_key_exists("IpWhiteList",$param) and $param["IpWhiteList"] !== null) {
            $this->IpWhiteList = $param["IpWhiteList"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new Config();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = [];
            foreach ($param["Partitions"] as $key => $value){
                $obj = new TopicPartitionDO();
                $obj->deserialize($value);
                array_push($this->Partitions, $obj);
            }
        }

        if (array_key_exists("EnableAclRule",$param) and $param["EnableAclRule"] !== null) {
            $this->EnableAclRule = $param["EnableAclRule"];
        }

        if (array_key_exists("AclRuleList",$param) and $param["AclRuleList"] !== null) {
            $this->AclRuleList = [];
            foreach ($param["AclRuleList"] as $key => $value){
                $obj = new AclRule();
                $obj->deserialize($value);
                array_push($this->AclRuleList, $obj);
            }
        }

        if (array_key_exists("QuotaConfig",$param) and $param["QuotaConfig"] !== null) {
            $this->QuotaConfig = new InstanceQuotaConfigResp();
            $this->QuotaConfig->deserialize($param["QuotaConfig"]);
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }
    }
}
