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
 * OpenKafkaConsumer request structure.
 *
 * @method string getFromTopicId() Obtain <p>Log topic Id.</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">obtaining the log topic list</a>.</li><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1">creating a log topic</a>.</li></ul>
 * @method void setFromTopicId(string $FromTopicId) Set <p>Log topic Id.</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">obtaining the log topic list</a>.</li><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1">creating a log topic</a>.</li></ul>
 * @method integer getCompression() Obtain <p>Compression type [0: NONE; 2: SNAPPY; 3: LZ4]. Default value: 0</p>
 * @method void setCompression(integer $Compression) Set <p>Compression type [0: NONE; 2: SNAPPY; 3: LZ4]. Default value: 0</p>
 * @method KafkaConsumerContent getConsumerContent() Obtain <p>kafka consumption data format</p>
 * @method void setConsumerContent(KafkaConsumerContent $ConsumerContent) Set <p>kafka consumption data format</p>
 * @method integer getHasServicesLog() Obtain <p>Whether to enable the delivery service log. 1: Disabled; 2: Enabled. Default value: 2</p>
 * @method void setHasServicesLog(integer $HasServicesLog) Set <p>Whether to enable the delivery service log. 1: Disabled; 2: Enabled. Default value: 2</p>
 * @method boolean getEnableInternetConsume() Obtain <p>Public network consumption switch. Enabled by default</p>
 * @method void setEnableInternetConsume(boolean $EnableInternetConsume) Set <p>Public network consumption switch. Enabled by default</p>
 * @method boolean getEnableIntranetConsume() Obtain <p>Private network consumption switch. Enabled by default</p>
 * @method void setEnableIntranetConsume(boolean $EnableIntranetConsume) Set <p>Private network consumption switch. Enabled by default</p>
 * @method integer getScopeType() Obtain <p>Consumption scope type. 0: Latest; 1: Historical + latest. Default value: 0</p>
 * @method void setScopeType(integer $ScopeType) Set <p>Consumption scope type. 0: Latest; 1: Historical + latest. Default value: 0</p>
 */
class OpenKafkaConsumerRequest extends AbstractModel
{
    /**
     * @var string <p>Log topic Id.</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">obtaining the log topic list</a>.</li><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1">creating a log topic</a>.</li></ul>
     */
    public $FromTopicId;

    /**
     * @var integer <p>Compression type [0: NONE; 2: SNAPPY; 3: LZ4]. Default value: 0</p>
     */
    public $Compression;

    /**
     * @var KafkaConsumerContent <p>kafka consumption data format</p>
     */
    public $ConsumerContent;

    /**
     * @var integer <p>Whether to enable the delivery service log. 1: Disabled; 2: Enabled. Default value: 2</p>
     */
    public $HasServicesLog;

    /**
     * @var boolean <p>Public network consumption switch. Enabled by default</p>
     */
    public $EnableInternetConsume;

    /**
     * @var boolean <p>Private network consumption switch. Enabled by default</p>
     */
    public $EnableIntranetConsume;

    /**
     * @var integer <p>Consumption scope type. 0: Latest; 1: Historical + latest. Default value: 0</p>
     */
    public $ScopeType;

    /**
     * @param string $FromTopicId <p>Log topic Id.</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">obtaining the log topic list</a>.</li><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1">creating a log topic</a>.</li></ul>
     * @param integer $Compression <p>Compression type [0: NONE; 2: SNAPPY; 3: LZ4]. Default value: 0</p>
     * @param KafkaConsumerContent $ConsumerContent <p>kafka consumption data format</p>
     * @param integer $HasServicesLog <p>Whether to enable the delivery service log. 1: Disabled; 2: Enabled. Default value: 2</p>
     * @param boolean $EnableInternetConsume <p>Public network consumption switch. Enabled by default</p>
     * @param boolean $EnableIntranetConsume <p>Private network consumption switch. Enabled by default</p>
     * @param integer $ScopeType <p>Consumption scope type. 0: Latest; 1: Historical + latest. Default value: 0</p>
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
        if (array_key_exists("FromTopicId",$param) and $param["FromTopicId"] !== null) {
            $this->FromTopicId = $param["FromTopicId"];
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }

        if (array_key_exists("ConsumerContent",$param) and $param["ConsumerContent"] !== null) {
            $this->ConsumerContent = new KafkaConsumerContent();
            $this->ConsumerContent->deserialize($param["ConsumerContent"]);
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("EnableInternetConsume",$param) and $param["EnableInternetConsume"] !== null) {
            $this->EnableInternetConsume = $param["EnableInternetConsume"];
        }

        if (array_key_exists("EnableIntranetConsume",$param) and $param["EnableIntranetConsume"] !== null) {
            $this->EnableIntranetConsume = $param["EnableIntranetConsume"];
        }

        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }
    }
}
