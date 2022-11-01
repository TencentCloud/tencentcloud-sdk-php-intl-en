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
 * DescribeTopic request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getSearchWord() Obtain Filter by `topicName`. Fuzzy search is supported
 * @method void setSearchWord(string $SearchWord) Set Filter by `topicName`. Fuzzy search is supported
 * @method integer getOffset() Obtain Offset. If this parameter is left empty, 0 will be used by default
 * @method void setOffset(integer $Offset) Set Offset. If this parameter is left empty, 0 will be used by default
 * @method integer getLimit() Obtain The number of results to be returned, which defaults to 20 if left empty. The maximum value is 50.
 * @method void setLimit(integer $Limit) Set The number of results to be returned, which defaults to 20 if left empty. The maximum value is 50.
 * @method string getAclRuleName() Obtain Name of the preset ACL rule.
 * @method void setAclRuleName(string $AclRuleName) Set Name of the preset ACL rule.
 */
class DescribeTopicRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Filter by `topicName`. Fuzzy search is supported
     */
    public $SearchWord;

    /**
     * @var integer Offset. If this parameter is left empty, 0 will be used by default
     */
    public $Offset;

    /**
     * @var integer The number of results to be returned, which defaults to 20 if left empty. The maximum value is 50.
     */
    public $Limit;

    /**
     * @var string Name of the preset ACL rule.
     */
    public $AclRuleName;

    /**
     * @param string $InstanceId Instance ID
     * @param string $SearchWord Filter by `topicName`. Fuzzy search is supported
     * @param integer $Offset Offset. If this parameter is left empty, 0 will be used by default
     * @param integer $Limit The number of results to be returned, which defaults to 20 if left empty. The maximum value is 50.
     * @param string $AclRuleName Name of the preset ACL rule.
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
