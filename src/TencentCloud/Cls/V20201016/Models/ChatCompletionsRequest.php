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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChatCompletions request structure.
 *
 * @method string getModel() Obtain <p>Feature name</p><p>Enumeration value:</p><ul><li>text2sql: Intelligent generation of retrieval analysis statement</li><li>text2sql-reasoning: Intelligent generation of retrieval analysis statement - deep thinking</li></ul>
 * @method void setModel(string $Model) Set <p>Feature name</p><p>Enumeration value:</p><ul><li>text2sql: Intelligent generation of retrieval analysis statement</li><li>text2sql-reasoning: Intelligent generation of retrieval analysis statement - deep thinking</li></ul>
 * @method array getMessages() Obtain <p>Chat context information.<br>Description:</p><ol><li>The maximum length is 11 (5 historical sessions + new user question), arranged in the array in chronological order from old to new. Session data beyond this length will be discarded.</li><li>Message.Role available values: user, assistant.<br>user and assistant must alternate, starting with a user question and ending with a user question. Content cannot be empty. Example of Role order: [user assistant user assistant user ...].</li></ol>
 * @method void setMessages(array $Messages) Set <p>Chat context information.<br>Description:</p><ol><li>The maximum length is 11 (5 historical sessions + new user question), arranged in the array in chronological order from old to new. Session data beyond this length will be discarded.</li><li>Message.Role available values: user, assistant.<br>user and assistant must alternate, starting with a user question and ending with a user question. Content cannot be empty. Example of Role order: [user assistant user assistant user ...].</li></ol>
 * @method boolean getStream() Obtain <p>Streaming call switch.<br>Description:</p><ol><li>Defaults to non-streaming call (false) when no value is passed.</li><li>In streaming calls, results are incrementally returned via SSE protocol (return value is taken from Choices[n].Delta, and incremental data needs to be concatenated to obtain the complete result).</li><li>In non-streaming calls:<br>The calling method is the same as a regular HTTP request.<br>API response is time-consuming. If reduced latency is needed, set it to true.<br>Only the final result is returned once (return value is taken from Choices[n].Message).</li></ol><p>Note:</p><ol><li>When calling via SDK, streaming and non-streaming calls require different ways to obtain return values. Refer to comments or examples in the SDK (in the examples/cls/v20201016/ directory of each language SDK code repository).</li><li>Partial content may have been output, but if the FinishReason value in an intermediate response is "sensitive", it indicates the security review was not passed. If the business scenario requires real-time text display on the screen, manually withdraw the displayed content and customize a replacement reminder, such as "I can't answer this question. Let's try another topic", to ensure terminal experience.</li></ol>
 * @method void setStream(boolean $Stream) Set <p>Streaming call switch.<br>Description:</p><ol><li>Defaults to non-streaming call (false) when no value is passed.</li><li>In streaming calls, results are incrementally returned via SSE protocol (return value is taken from Choices[n].Delta, and incremental data needs to be concatenated to obtain the complete result).</li><li>In non-streaming calls:<br>The calling method is the same as a regular HTTP request.<br>API response is time-consuming. If reduced latency is needed, set it to true.<br>Only the final result is returned once (return value is taken from Choices[n].Message).</li></ol><p>Note:</p><ol><li>When calling via SDK, streaming and non-streaming calls require different ways to obtain return values. Refer to comments or examples in the SDK (in the examples/cls/v20201016/ directory of each language SDK code repository).</li><li>Partial content may have been output, but if the FinishReason value in an intermediate response is "sensitive", it indicates the security review was not passed. If the business scenario requires real-time text display on the screen, manually withdraw the displayed content and customize a replacement reminder, such as "I can't answer this question. Let's try another topic", to ensure terminal experience.</li></ol>
 * @method array getMetadata() Obtain <p>Additional metadata information. For example: [{"Key":"topic_id","Value":"xxxxxxxx-xxxx"},{"Key":"topic_region","Value":"ap-guangzhou"}]</p><p>It is recommended to transmit metadata information as per the example, otherwise it may cause inaccurate results. For example, in text2sql, not passing topic_id or topic_region will lead to unable to generate accurate query statements based on the log topic index.</p>
 * @method void setMetadata(array $Metadata) Set <p>Additional metadata information. For example: [{"Key":"topic_id","Value":"xxxxxxxx-xxxx"},{"Key":"topic_region","Value":"ap-guangzhou"}]</p><p>It is recommended to transmit metadata information as per the example, otherwise it may cause inaccurate results. For example, in text2sql, not passing topic_id or topic_region will lead to unable to generate accurate query statements based on the log topic index.</p>
 */
class ChatCompletionsRequest extends AbstractModel
{
    /**
     * @var string <p>Feature name</p><p>Enumeration value:</p><ul><li>text2sql: Intelligent generation of retrieval analysis statement</li><li>text2sql-reasoning: Intelligent generation of retrieval analysis statement - deep thinking</li></ul>
     */
    public $Model;

    /**
     * @var array <p>Chat context information.<br>Description:</p><ol><li>The maximum length is 11 (5 historical sessions + new user question), arranged in the array in chronological order from old to new. Session data beyond this length will be discarded.</li><li>Message.Role available values: user, assistant.<br>user and assistant must alternate, starting with a user question and ending with a user question. Content cannot be empty. Example of Role order: [user assistant user assistant user ...].</li></ol>
     */
    public $Messages;

    /**
     * @var boolean <p>Streaming call switch.<br>Description:</p><ol><li>Defaults to non-streaming call (false) when no value is passed.</li><li>In streaming calls, results are incrementally returned via SSE protocol (return value is taken from Choices[n].Delta, and incremental data needs to be concatenated to obtain the complete result).</li><li>In non-streaming calls:<br>The calling method is the same as a regular HTTP request.<br>API response is time-consuming. If reduced latency is needed, set it to true.<br>Only the final result is returned once (return value is taken from Choices[n].Message).</li></ol><p>Note:</p><ol><li>When calling via SDK, streaming and non-streaming calls require different ways to obtain return values. Refer to comments or examples in the SDK (in the examples/cls/v20201016/ directory of each language SDK code repository).</li><li>Partial content may have been output, but if the FinishReason value in an intermediate response is "sensitive", it indicates the security review was not passed. If the business scenario requires real-time text display on the screen, manually withdraw the displayed content and customize a replacement reminder, such as "I can't answer this question. Let's try another topic", to ensure terminal experience.</li></ol>
     */
    public $Stream;

    /**
     * @var array <p>Additional metadata information. For example: [{"Key":"topic_id","Value":"xxxxxxxx-xxxx"},{"Key":"topic_region","Value":"ap-guangzhou"}]</p><p>It is recommended to transmit metadata information as per the example, otherwise it may cause inaccurate results. For example, in text2sql, not passing topic_id or topic_region will lead to unable to generate accurate query statements based on the log topic index.</p>
     */
    public $Metadata;

    /**
     * @param string $Model <p>Feature name</p><p>Enumeration value:</p><ul><li>text2sql: Intelligent generation of retrieval analysis statement</li><li>text2sql-reasoning: Intelligent generation of retrieval analysis statement - deep thinking</li></ul>
     * @param array $Messages <p>Chat context information.<br>Description:</p><ol><li>The maximum length is 11 (5 historical sessions + new user question), arranged in the array in chronological order from old to new. Session data beyond this length will be discarded.</li><li>Message.Role available values: user, assistant.<br>user and assistant must alternate, starting with a user question and ending with a user question. Content cannot be empty. Example of Role order: [user assistant user assistant user ...].</li></ol>
     * @param boolean $Stream <p>Streaming call switch.<br>Description:</p><ol><li>Defaults to non-streaming call (false) when no value is passed.</li><li>In streaming calls, results are incrementally returned via SSE protocol (return value is taken from Choices[n].Delta, and incremental data needs to be concatenated to obtain the complete result).</li><li>In non-streaming calls:<br>The calling method is the same as a regular HTTP request.<br>API response is time-consuming. If reduced latency is needed, set it to true.<br>Only the final result is returned once (return value is taken from Choices[n].Message).</li></ol><p>Note:</p><ol><li>When calling via SDK, streaming and non-streaming calls require different ways to obtain return values. Refer to comments or examples in the SDK (in the examples/cls/v20201016/ directory of each language SDK code repository).</li><li>Partial content may have been output, but if the FinishReason value in an intermediate response is "sensitive", it indicates the security review was not passed. If the business scenario requires real-time text display on the screen, manually withdraw the displayed content and customize a replacement reminder, such as "I can't answer this question. Let's try another topic", to ensure terminal experience.</li></ol>
     * @param array $Metadata <p>Additional metadata information. For example: [{"Key":"topic_id","Value":"xxxxxxxx-xxxx"},{"Key":"topic_region","Value":"ap-guangzhou"}]</p><p>It is recommended to transmit metadata information as per the example, otherwise it may cause inaccurate results. For example, in text2sql, not passing topic_id or topic_region will lead to unable to generate accurate query statements based on the log topic index.</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            $this->Messages = [];
            foreach ($param["Messages"] as $key => $value){
                $obj = new Message();
                $obj->deserialize($value);
                array_push($this->Messages, $obj);
            }
        }

        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            $this->Stream = $param["Stream"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = [];
            foreach ($param["Metadata"] as $key => $value){
                $obj = new MetadataItem();
                $obj->deserialize($value);
                array_push($this->Metadata, $obj);
            }
        }
    }
}
