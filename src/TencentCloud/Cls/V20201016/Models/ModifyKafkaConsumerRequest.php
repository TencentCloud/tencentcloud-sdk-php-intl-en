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
 * ModifyKafkaConsumer request structure.
 *
 * @method string getFromTopicId() Obtain <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1">Create Log Topic</a>.</li></ul>
 * @method void setFromTopicId(string $FromTopicId) Set <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1">Create Log Topic</a>.</li></ul>
 * @method integer getCompression() Obtain <p>Compression mode. 0: No compression; 2: Use Snappy compression; 3: Use LZ4 compression</p>
 * @method void setCompression(integer $Compression) Set <p>Compression mode. 0: No compression; 2: Use Snappy compression; 3: Use LZ4 compression</p>
 * @method KafkaConsumerContent getConsumerContent() Obtain <p>kafka protocol consumption data format</p>
 * @method void setConsumerContent(KafkaConsumerContent $ConsumerContent) Set <p>kafka protocol consumption data format</p>
 * @method integer getHasServicesLog() Obtain <p>Whether to enable the delivery service log. 1: Disabled, 2: Enabled.</p>
 * @method void setHasServicesLog(integer $HasServicesLog) Set <p>Whether to enable the delivery service log. 1: Disabled, 2: Enabled.</p>
 * @method integer getScopeType() Obtain <p>Range type of consumption, 0: latest, 1: history + latest</p>
 * @method void setScopeType(integer $ScopeType) Set <p>Range type of consumption, 0: latest, 1: history + latest</p>
 */
class ModifyKafkaConsumerRequest extends AbstractModel
{
    /**
     * @var string <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1">Create Log Topic</a>.</li></ul>
     */
    public $FromTopicId;

    /**
     * @var integer <p>Compression mode. 0: No compression; 2: Use Snappy compression; 3: Use LZ4 compression</p>
     */
    public $Compression;

    /**
     * @var KafkaConsumerContent <p>kafka protocol consumption data format</p>
     */
    public $ConsumerContent;

    /**
     * @var integer <p>Whether to enable the delivery service log. 1: Disabled, 2: Enabled.</p>
     */
    public $HasServicesLog;

    /**
     * @var integer <p>Range type of consumption, 0: latest, 1: history + latest</p>
     */
    public $ScopeType;

    /**
     * @param string $FromTopicId <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1">Create Log Topic</a>.</li></ul>
     * @param integer $Compression <p>Compression mode. 0: No compression; 2: Use Snappy compression; 3: Use LZ4 compression</p>
     * @param KafkaConsumerContent $ConsumerContent <p>kafka protocol consumption data format</p>
     * @param integer $HasServicesLog <p>Whether to enable the delivery service log. 1: Disabled, 2: Enabled.</p>
     * @param integer $ScopeType <p>Range type of consumption, 0: latest, 1: history + latest</p>
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

        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }
    }
}
