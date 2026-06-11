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
 * CreateEsRecharge request structure.
 *
 * @method string getTopicId() Obtain Log topic ID.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Log topic ID.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method string getName() Obtain Name: Length not exceeding 64 characters.
 * @method void setName(string $Name) Set Name: Length not exceeding 64 characters.
 * @method string getIndex() Obtain Index information. Different indexes can be separated by English commas and support wildcards.
 * @method void setIndex(string $Index) Set Index information. Different indexes can be separated by English commas and support wildcards.
 * @method string getQuery() Obtain Elasticsearch Query Statement.
 * @method void setQuery(string $Query) Set Elasticsearch Query Statement.
 * @method EsInfo getEsInfo() Obtain Cluster configuration.
 * @method void setEsInfo(EsInfo $EsInfo) Set Cluster configuration.
 * @method EsImportInfo getImportInfo() Obtain es import information.
 * @method void setImportInfo(EsImportInfo $ImportInfo) Set es import information.
 * @method EsTimeInfo getTimeInfo() Obtain Field information of es import time.
 * @method void setTimeInfo(EsTimeInfo $TimeInfo) Set Field information of es import time.
 * @method integer getHasServicesLog() Obtain Whether to enable delivery service log. Valid values: 1: disable; 2: enable. Enabled by default.
 * @method void setHasServicesLog(integer $HasServicesLog) Set Whether to enable delivery service log. Valid values: 1: disable; 2: enable. Enabled by default.
 */
class CreateEsRechargeRequest extends AbstractModel
{
    /**
     * @var string Log topic ID.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var string Name: Length not exceeding 64 characters.
     */
    public $Name;

    /**
     * @var string Index information. Different indexes can be separated by English commas and support wildcards.
     */
    public $Index;

    /**
     * @var string Elasticsearch Query Statement.
     */
    public $Query;

    /**
     * @var EsInfo Cluster configuration.
     */
    public $EsInfo;

    /**
     * @var EsImportInfo es import information.
     */
    public $ImportInfo;

    /**
     * @var EsTimeInfo Field information of es import time.
     */
    public $TimeInfo;

    /**
     * @var integer Whether to enable delivery service log. Valid values: 1: disable; 2: enable. Enabled by default.
     */
    public $HasServicesLog;

    /**
     * @param string $TopicId Log topic ID.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
     * @param string $Name Name: Length not exceeding 64 characters.
     * @param string $Index Index information. Different indexes can be separated by English commas and support wildcards.
     * @param string $Query Elasticsearch Query Statement.
     * @param EsInfo $EsInfo Cluster configuration.
     * @param EsImportInfo $ImportInfo es import information.
     * @param EsTimeInfo $TimeInfo Field information of es import time.
     * @param integer $HasServicesLog Whether to enable delivery service log. Valid values: 1: disable; 2: enable. Enabled by default.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("EsInfo",$param) and $param["EsInfo"] !== null) {
            $this->EsInfo = new EsInfo();
            $this->EsInfo->deserialize($param["EsInfo"]);
        }

        if (array_key_exists("ImportInfo",$param) and $param["ImportInfo"] !== null) {
            $this->ImportInfo = new EsImportInfo();
            $this->ImportInfo->deserialize($param["ImportInfo"]);
        }

        if (array_key_exists("TimeInfo",$param) and $param["TimeInfo"] !== null) {
            $this->TimeInfo = new EsTimeInfo();
            $this->TimeInfo->deserialize($param["TimeInfo"]);
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }
    }
}
