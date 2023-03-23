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
 * Topic details
 *
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method string getTopicId() Obtain Topic ID
 * @method void setTopicId(string $TopicId) Set Topic ID
 * @method integer getPartitionNum() Obtain Number of partitions
 * @method void setPartitionNum(integer $PartitionNum) Set Number of partitions
 * @method integer getReplicaNum() Obtain Number of replicas
 * @method void setReplicaNum(integer $ReplicaNum) Set Number of replicas
 * @method string getNote() Obtain Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNote(string $Note) Set Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation time
 * @method void setCreateTime(integer $CreateTime) Set Creation time
 * @method boolean getEnableWhiteList() Obtain Whether to enable IP authentication allowlist. true: yes, false: no
 * @method void setEnableWhiteList(boolean $EnableWhiteList) Set Whether to enable IP authentication allowlist. true: yes, false: no
 * @method integer getIpWhiteListCount() Obtain Number of IPs in IP allowlist
 * @method void setIpWhiteListCount(integer $IpWhiteListCount) Set Number of IPs in IP allowlist
 * @method string getForwardCosBucket() Obtain COS bucket for data backup: address of the destination COS bucket
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setForwardCosBucket(string $ForwardCosBucket) Set COS bucket for data backup: address of the destination COS bucket
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getForwardStatus() Obtain Status of data backup to COS. 1: not enabled, 0: enabled
 * @method void setForwardStatus(integer $ForwardStatus) Set Status of data backup to COS. 1: not enabled, 0: enabled
 * @method integer getForwardInterval() Obtain Frequency of data backup to COS
 * @method void setForwardInterval(integer $ForwardInterval) Set Frequency of data backup to COS
 * @method Config getConfig() Obtain Advanced configuration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConfig(Config $Config) Set Advanced configuration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method TopicRetentionTimeConfigRsp getRetentionTimeConfig() Obtain Message retention time configuration (for recording the latest retention time)
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setRetentionTimeConfig(TopicRetentionTimeConfigRsp $RetentionTimeConfig) Set Message retention time configuration (for recording the latest retention time)
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain `0`: normal, `1`: deleted, `2`: deleting
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set `0`: normal, `1`: deleted, `2`: deleting
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag list
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TopicDetail extends AbstractModel
{
    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var string Topic ID
     */
    public $TopicId;

    /**
     * @var integer Number of partitions
     */
    public $PartitionNum;

    /**
     * @var integer Number of replicas
     */
    public $ReplicaNum;

    /**
     * @var string Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Note;

    /**
     * @var integer Creation time
     */
    public $CreateTime;

    /**
     * @var boolean Whether to enable IP authentication allowlist. true: yes, false: no
     */
    public $EnableWhiteList;

    /**
     * @var integer Number of IPs in IP allowlist
     */
    public $IpWhiteListCount;

    /**
     * @var string COS bucket for data backup: address of the destination COS bucket
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ForwardCosBucket;

    /**
     * @var integer Status of data backup to COS. 1: not enabled, 0: enabled
     */
    public $ForwardStatus;

    /**
     * @var integer Frequency of data backup to COS
     */
    public $ForwardInterval;

    /**
     * @var Config Advanced configuration
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Config;

    /**
     * @var TopicRetentionTimeConfigRsp Message retention time configuration (for recording the latest retention time)
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $RetentionTimeConfig;

    /**
     * @var integer `0`: normal, `1`: deleted, `2`: deleting
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var array Tag list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @param string $TopicName Topic name
     * @param string $TopicId Topic ID
     * @param integer $PartitionNum Number of partitions
     * @param integer $ReplicaNum Number of replicas
     * @param string $Note Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation time
     * @param boolean $EnableWhiteList Whether to enable IP authentication allowlist. true: yes, false: no
     * @param integer $IpWhiteListCount Number of IPs in IP allowlist
     * @param string $ForwardCosBucket COS bucket for data backup: address of the destination COS bucket
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ForwardStatus Status of data backup to COS. 1: not enabled, 0: enabled
     * @param integer $ForwardInterval Frequency of data backup to COS
     * @param Config $Config Advanced configuration
Note: this field may return null, indicating that no valid values can be obtained.
     * @param TopicRetentionTimeConfigRsp $RetentionTimeConfig Message retention time configuration (for recording the latest retention time)
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $Status `0`: normal, `1`: deleted, `2`: deleting
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param array $Tags Tag list
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EnableWhiteList",$param) and $param["EnableWhiteList"] !== null) {
            $this->EnableWhiteList = $param["EnableWhiteList"];
        }

        if (array_key_exists("IpWhiteListCount",$param) and $param["IpWhiteListCount"] !== null) {
            $this->IpWhiteListCount = $param["IpWhiteListCount"];
        }

        if (array_key_exists("ForwardCosBucket",$param) and $param["ForwardCosBucket"] !== null) {
            $this->ForwardCosBucket = $param["ForwardCosBucket"];
        }

        if (array_key_exists("ForwardStatus",$param) and $param["ForwardStatus"] !== null) {
            $this->ForwardStatus = $param["ForwardStatus"];
        }

        if (array_key_exists("ForwardInterval",$param) and $param["ForwardInterval"] !== null) {
            $this->ForwardInterval = $param["ForwardInterval"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new Config();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("RetentionTimeConfig",$param) and $param["RetentionTimeConfig"] !== null) {
            $this->RetentionTimeConfig = new TopicRetentionTimeConfigRsp();
            $this->RetentionTimeConfig->deserialize($param["RetentionTimeConfig"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
