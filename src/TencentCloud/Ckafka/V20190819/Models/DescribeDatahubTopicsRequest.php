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
 * DescribeDatahubTopics request structure.
 *
 * @method string getSearchWord() Obtain <p>Search term</p><p>Performs fuzzy matching on the Name, TopicName, or TopicId field.</p>
 * @method void setSearchWord(string $SearchWord) Set <p>Search term</p><p>Performs fuzzy matching on the Name, TopicName, or TopicId field.</p>
 * @method integer getOffset() Obtain <p>Offset position of this page, defaults to 0</p>
 * @method void setOffset(integer $Offset) Set <p>Offset position of this page, defaults to 0</p>
 * @method integer getLimit() Obtain <p>Maximum number of returned results this time</p><p>Value ranges from 1 to 100</p><p>Default value: 20</p>
 * @method void setLimit(integer $Limit) Set <p>Maximum number of returned results this time</p><p>Value ranges from 1 to 100</p><p>Default value: 20</p>
 * @method boolean getQueryFromConnectResource() Obtain <p>Whether to query the topic list from the connection query</p><p>Default value: false</p>
 * @method void setQueryFromConnectResource(boolean $QueryFromConnectResource) Set <p>Whether to query the topic list from the connection query</p><p>Default value: false</p>
 * @method string getConnectResourceId() Obtain <p>Connection ID.</p>
 * @method void setConnectResourceId(string $ConnectResourceId) Set <p>Connection ID.</p>
 * @method string getTopicRegularExpression() Obtain <p>topic resource expression</p>
 * @method void setTopicRegularExpression(string $TopicRegularExpression) Set <p>topic resource expression</p>
 */
class DescribeDatahubTopicsRequest extends AbstractModel
{
    /**
     * @var string <p>Search term</p><p>Performs fuzzy matching on the Name, TopicName, or TopicId field.</p>
     */
    public $SearchWord;

    /**
     * @var integer <p>Offset position of this page, defaults to 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Maximum number of returned results this time</p><p>Value ranges from 1 to 100</p><p>Default value: 20</p>
     */
    public $Limit;

    /**
     * @var boolean <p>Whether to query the topic list from the connection query</p><p>Default value: false</p>
     */
    public $QueryFromConnectResource;

    /**
     * @var string <p>Connection ID.</p>
     */
    public $ConnectResourceId;

    /**
     * @var string <p>topic resource expression</p>
     */
    public $TopicRegularExpression;

    /**
     * @param string $SearchWord <p>Search term</p><p>Performs fuzzy matching on the Name, TopicName, or TopicId field.</p>
     * @param integer $Offset <p>Offset position of this page, defaults to 0</p>
     * @param integer $Limit <p>Maximum number of returned results this time</p><p>Value ranges from 1 to 100</p><p>Default value: 20</p>
     * @param boolean $QueryFromConnectResource <p>Whether to query the topic list from the connection query</p><p>Default value: false</p>
     * @param string $ConnectResourceId <p>Connection ID.</p>
     * @param string $TopicRegularExpression <p>topic resource expression</p>
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
        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("QueryFromConnectResource",$param) and $param["QueryFromConnectResource"] !== null) {
            $this->QueryFromConnectResource = $param["QueryFromConnectResource"];
        }

        if (array_key_exists("ConnectResourceId",$param) and $param["ConnectResourceId"] !== null) {
            $this->ConnectResourceId = $param["ConnectResourceId"];
        }

        if (array_key_exists("TopicRegularExpression",$param) and $param["TopicRegularExpression"] !== null) {
            $this->TopicRegularExpression = $param["TopicRegularExpression"];
        }
    }
}
