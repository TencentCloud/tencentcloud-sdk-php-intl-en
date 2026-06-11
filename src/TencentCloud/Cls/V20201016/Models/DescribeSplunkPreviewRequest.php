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
 * DescribeSplunkPreview request structure.
 *
 * @method string getTopicId() Obtain <p>Log topic id. Obtain the log topic id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</p>
 * @method void setTopicId(string $TopicId) Set <p>Log topic id. Obtain the log topic id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</p>
 * @method MetadataInfo getMetadataInfo() Obtain <p>splunk delivery task meta-information</p>
 * @method void setMetadataInfo(MetadataInfo $MetadataInfo) Set <p>splunk delivery task meta-information</p>
 * @method string getDSLFilter() Obtain <p>splunk delivery task - deliver splunk filtered raw log statements</p>
 * @method void setDSLFilter(string $DSLFilter) Set <p>splunk delivery task - deliver splunk filtered raw log statements</p>
 */
class DescribeSplunkPreviewRequest extends AbstractModel
{
    /**
     * @var string <p>Log topic id. Obtain the log topic id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</p>
     */
    public $TopicId;

    /**
     * @var MetadataInfo <p>splunk delivery task meta-information</p>
     */
    public $MetadataInfo;

    /**
     * @var string <p>splunk delivery task - deliver splunk filtered raw log statements</p>
     */
    public $DSLFilter;

    /**
     * @param string $TopicId <p>Log topic id. Obtain the log topic id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</p>
     * @param MetadataInfo $MetadataInfo <p>splunk delivery task meta-information</p>
     * @param string $DSLFilter <p>splunk delivery task - deliver splunk filtered raw log statements</p>
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

        if (array_key_exists("MetadataInfo",$param) and $param["MetadataInfo"] !== null) {
            $this->MetadataInfo = new MetadataInfo();
            $this->MetadataInfo->deserialize($param["MetadataInfo"]);
        }

        if (array_key_exists("DSLFilter",$param) and $param["DSLFilter"] !== null) {
            $this->DSLFilter = $param["DSLFilter"];
        }
    }
}
