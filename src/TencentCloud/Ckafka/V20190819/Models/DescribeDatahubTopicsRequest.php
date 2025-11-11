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
 * @method string getSearchWord() Obtain Search term.
 * @method void setSearchWord(string $SearchWord) Set Search term.
 * @method integer getOffset() Obtain Query offset, which defaults to `0`.
 * @method void setOffset(integer $Offset) Set Query offset, which defaults to `0`.
 * @method integer getLimit() Obtain Maximum number of results to be returned in this request. Default value: `50`. Maximum value: `50`.
 * @method void setLimit(integer $Limit) Set Maximum number of results to be returned in this request. Default value: `50`. Maximum value: `50`.
 * @method boolean getQueryFromConnectResource() Obtain Specifies whether to query the topic list from the connection.
 * @method void setQueryFromConnectResource(boolean $QueryFromConnectResource) Set Specifies whether to query the topic list from the connection.
 * @method string getConnectResourceId() Obtain Connection ID.
 * @method void setConnectResourceId(string $ConnectResourceId) Set Connection ID.
 * @method string getTopicRegularExpression() Obtain topic resource expression.
 * @method void setTopicRegularExpression(string $TopicRegularExpression) Set topic resource expression.
 */
class DescribeDatahubTopicsRequest extends AbstractModel
{
    /**
     * @var string Search term.
     */
    public $SearchWord;

    /**
     * @var integer Query offset, which defaults to `0`.
     */
    public $Offset;

    /**
     * @var integer Maximum number of results to be returned in this request. Default value: `50`. Maximum value: `50`.
     */
    public $Limit;

    /**
     * @var boolean Specifies whether to query the topic list from the connection.
     */
    public $QueryFromConnectResource;

    /**
     * @var string Connection ID.
     */
    public $ConnectResourceId;

    /**
     * @var string topic resource expression.
     */
    public $TopicRegularExpression;

    /**
     * @param string $SearchWord Search term.
     * @param integer $Offset Query offset, which defaults to `0`.
     * @param integer $Limit Maximum number of results to be returned in this request. Default value: `50`. Maximum value: `50`.
     * @param boolean $QueryFromConnectResource Specifies whether to query the topic list from the connection.
     * @param string $ConnectResourceId Connection ID.
     * @param string $TopicRegularExpression topic resource expression.
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
