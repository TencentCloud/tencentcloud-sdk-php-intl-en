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
 * DescribeTopic request structure.
 *
 * @method string getInstanceId() Obtain <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) Set <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
 * @method string getSearchWord() Obtain <p>(Filtering Conditions) Filter by topicName. Fuzzy query is supported.</p>
 * @method void setSearchWord(string $SearchWord) Set <p>(Filtering Conditions) Filter by topicName. Fuzzy query is supported.</p>
 * @method integer getOffset() Obtain <p>Offset, which is 0 by default</p>
 * @method void setOffset(integer $Offset) Set <p>Offset, which is 0 by default</p>
 * @method integer getLimit() Obtain <p>Number of returned results. Default value: 20. Maximum value: 50.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned results. Default value: 20. Maximum value: 50.</p>
 * @method string getAclRuleName() Obtain <p>Acl preset policy name</p>
 * @method void setAclRuleName(string $AclRuleName) Set <p>Acl preset policy name</p>
 */
class DescribeTopicRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>(Filtering Conditions) Filter by topicName. Fuzzy query is supported.</p>
     */
    public $SearchWord;

    /**
     * @var integer <p>Offset, which is 0 by default</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of returned results. Default value: 20. Maximum value: 50.</p>
     */
    public $Limit;

    /**
     * @var string <p>Acl preset policy name</p>
     */
    public $AclRuleName;

    /**
     * @param string $InstanceId <p>ckafka cluster instance Id</p><p>For reference: <a href="https://www.tencentcloud.com/document/api/597/40835?from_cn_redirect=1">DescribeInstances</a></p>
     * @param string $SearchWord <p>(Filtering Conditions) Filter by topicName. Fuzzy query is supported.</p>
     * @param integer $Offset <p>Offset, which is 0 by default</p>
     * @param integer $Limit <p>Number of returned results. Default value: 20. Maximum value: 50.</p>
     * @param string $AclRuleName <p>Acl preset policy name</p>
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

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AclRuleName",$param) and $param["AclRuleName"] !== null) {
            $this->AclRuleName = $param["AclRuleName"];
        }
    }
}
