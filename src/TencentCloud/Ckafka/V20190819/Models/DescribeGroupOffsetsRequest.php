<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * DescribeGroupOffsets request structure.
 *
 * @method string getInstanceId() Obtain <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) Set <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method string getGroup() Obtain <p>Kafka consumption group</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40840?from_cn_redirect=1">DescribeGroup</a></p>
 * @method void setGroup(string $Group) Set <p>Kafka consumption group</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40840?from_cn_redirect=1">DescribeGroup</a></p>
 * @method array getTopics() Obtain <p>Name array of the subscribed topics for the group. If there is no array, it means all topic info under the designated group.</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40847?from_cn_redirect=1">DescribeTopic</a></p>
 * @method void setTopics(array $Topics) Set <p>Name array of the subscribed topics for the group. If there is no array, it means all topic info under the designated group.</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40847?from_cn_redirect=1">DescribeTopic</a></p>
 * @method string getSearchWord() Obtain <p>Fuzzy matching topicName</p>
 * @method void setSearchWord(string $SearchWord) Set <p>Fuzzy matching topicName</p>
 * @method integer getOffset() Obtain <p>Offset position of this query, defaults to 0</p>
 * @method void setOffset(integer $Offset) Set <p>Offset position of this query, defaults to 0</p>
 * @method integer getLimit() Obtain <p>Maximum number of returned results this time. Default value: 50. Maximum value: 50.</p>
 * @method void setLimit(integer $Limit) Set <p>Maximum number of returned results this time. Default value: 50. Maximum value: 50.</p>
 */
class DescribeGroupOffsetsRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>Kafka consumption group</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40840?from_cn_redirect=1">DescribeGroup</a></p>
     */
    public $Group;

    /**
     * @var array <p>Name array of the subscribed topics for the group. If there is no array, it means all topic info under the designated group.</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40847?from_cn_redirect=1">DescribeTopic</a></p>
     */
    public $Topics;

    /**
     * @var string <p>Fuzzy matching topicName</p>
     */
    public $SearchWord;

    /**
     * @var integer <p>Offset position of this query, defaults to 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Maximum number of returned results this time. Default value: 50. Maximum value: 50.</p>
     */
    public $Limit;

    /**
     * @param string $InstanceId <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     * @param string $Group <p>Kafka consumption group</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40840?from_cn_redirect=1">DescribeGroup</a></p>
     * @param array $Topics <p>Name array of the subscribed topics for the group. If there is no array, it means all topic info under the designated group.</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40847?from_cn_redirect=1">DescribeTopic</a></p>
     * @param string $SearchWord <p>Fuzzy matching topicName</p>
     * @param integer $Offset <p>Offset position of this query, defaults to 0</p>
     * @param integer $Limit <p>Maximum number of returned results this time. Default value: 50. Maximum value: 50.</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = $param["Topics"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
