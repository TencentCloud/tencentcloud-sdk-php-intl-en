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
 * Import es configuration info
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method integer getUin() Obtain Main account id.
 * @method void setUin(integer $Uin) Set Main account id.
 * @method string getTopicId() Obtain Log topic ID.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Log topic ID.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method string getName() Obtain Configuration name
 * @method void setName(string $Name) Set Configuration name
 * @method string getIndex() Obtain es index.
 * @method void setIndex(string $Index) Set es index.
 * @method string getQuery() Obtain Elasticsearch Query Statement.
 * @method void setQuery(string $Query) Set Elasticsearch Query Statement.
 * @method EsInfo getEsInfo() Obtain es cluster information.
 * @method void setEsInfo(EsInfo $EsInfo) Set es cluster information.
 * @method EsImportInfo getImportInfo() Obtain es import information.
 * @method void setImportInfo(EsImportInfo $ImportInfo) Set es import information.
 * @method EsTimeInfo getTimeInfo() Obtain ES import time configuration message.
 * @method void setTimeInfo(EsTimeInfo $TimeInfo) Set ES import time configuration message.
 * @method integer getStatus() Obtain Task status.
1. Running
Suspend
3. Complete
4. Exception
 * @method void setStatus(integer $Status) Set Task status.
1. Running
Suspend
3. Complete
4. Exception
 * @method integer getProgress() Obtain Task progress 0-100 percentage. 100: means done.
 * @method void setProgress(integer $Progress) Set Task progress 0-100 percentage. 100: means done.
 * @method integer getSubUin() Obtain Sub-account id.
 * @method void setSubUin(integer $SubUin) Set Sub-account id.
 * @method integer getCreateTime() Obtain Creation time.
 * @method void setCreateTime(integer $CreateTime) Set Creation time.
 * @method integer getUpdateTime() Obtain Modify the time.
 * @method void setUpdateTime(integer $UpdateTime) Set Modify the time.
 * @method integer getHasServicesLog() Obtain Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
 * @method void setHasServicesLog(integer $HasServicesLog) Set Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
 */
class EsRechargeInfo extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var integer Main account id.
     */
    public $Uin;

    /**
     * @var string Log topic ID.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var string Configuration name
     */
    public $Name;

    /**
     * @var string es index.
     */
    public $Index;

    /**
     * @var string Elasticsearch Query Statement.
     */
    public $Query;

    /**
     * @var EsInfo es cluster information.
     */
    public $EsInfo;

    /**
     * @var EsImportInfo es import information.
     */
    public $ImportInfo;

    /**
     * @var EsTimeInfo ES import time configuration message.
     */
    public $TimeInfo;

    /**
     * @var integer Task status.
1. Running
Suspend
3. Complete
4. Exception
     */
    public $Status;

    /**
     * @var integer Task progress 0-100 percentage. 100: means done.
     */
    public $Progress;

    /**
     * @var integer Sub-account id.
     */
    public $SubUin;

    /**
     * @var integer Creation time.
     */
    public $CreateTime;

    /**
     * @var integer Modify the time.
     */
    public $UpdateTime;

    /**
     * @var integer Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
     */
    public $HasServicesLog;

    /**
     * @param string $TaskId Task ID.
     * @param integer $Uin Main account id.
     * @param string $TopicId Log topic ID.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
     * @param string $Name Configuration name
     * @param string $Index es index.
     * @param string $Query Elasticsearch Query Statement.
     * @param EsInfo $EsInfo es cluster information.
     * @param EsImportInfo $ImportInfo es import information.
     * @param EsTimeInfo $TimeInfo ES import time configuration message.
     * @param integer $Status Task status.
1. Running
Suspend
3. Complete
4. Exception
     * @param integer $Progress Task progress 0-100 percentage. 100: means done.
     * @param integer $SubUin Sub-account id.
     * @param integer $CreateTime Creation time.
     * @param integer $UpdateTime Modify the time.
     * @param integer $HasServicesLog Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }
    }
}
