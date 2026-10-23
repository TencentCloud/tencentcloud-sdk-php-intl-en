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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log analytics log download task.
 *
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getArea() Obtain <p>Data ownership region. Valid values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li></ul></p>
 * @method void setArea(string $Area) Set <p>Data ownership region. Valid values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li></ul></p>
 * @method string getStartTime() Obtain <p>Start time, example value: 2020-04-29T00:00:00Z.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time, example value: 2020-04-29T00:00:00Z.</p>
 * @method string getEndTime() Obtain <p>End time. Example value: 2020-04-30T00:00:00Z.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time. Example value: 2020-04-30T00:00:00Z.</p>
 * @method string getLogType() Obtain <p>Log type. Valid values: <ul><li> l7-access-logs: Layer 7 Access Logs;</li><li>web-attack: Managed rule log.</li></ul></p>
 * @method void setLogType(string $LogType) Set <p>Log type. Valid values: <ul><li> l7-access-logs: Layer 7 Access Logs;</li><li>web-attack: Managed rule log.</li></ul></p>
 * @method string getCondition() Obtain <p><a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">Log match condition</a>. Maximum length 12KB.</p>
 * @method void setCondition(string $Condition) Set <p><a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">Log match condition</a>. Maximum length 12KB.</p>
 * @method string getFormat() Obtain <p>File format, valid values:</p><ul><li>csv.</li></ul>
 * @method void setFormat(string $Format) Set <p>File format, valid values:</p><ul><li>csv.</li></ul>
 * @method string getSort() Obtain <p>Whether raw logs are returned in time sequence. Valid values: <ul><li>asc: ascending order;</li><li>desc: descending order.</li></ul></p>
 * @method void setSort(string $Sort) Set <p>Whether raw logs are returned in time sequence. Valid values: <ul><li>asc: ascending order;</li><li>desc: descending order.</li></ul></p>
 * @method string getStatus() Obtain <p>Task status, valid values: <ul><li>loading: being processed, waiting to generate download link;</li><li> failed: processing failure, current task cannot be downloaded;</li><li>completed: packaging completed, ready for download.</li></ul></p>
 * @method void setStatus(string $Status) Set <p>Task status, valid values: <ul><li>loading: being processed, waiting to generate download link;</li><li> failed: processing failure, current task cannot be downloaded;</li><li>completed: packaging completed, ready for download.</li></ul></p>
 * @method string getCreateTime() Obtain <p>Task creation time. After successful task creation, the retention period is 3 days.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Task creation time. After successful task creation, the retention period is 3 days.</p>
 * @method string getUrl() Obtain <p>Download link, only returned when Status = completed.</p>
 * @method void setUrl(string $Url) Set <p>Download link, only returned when Status = completed.</p>
 * @method string getExpireTime() Obtain <p>Task expiration time. After expiry, the download address will be unavailable. Please obtain a new download address through this API.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Task expiration time. After expiry, the download address will be unavailable. Please obtain a new download address through this API.</p>
 */
class LogAnalysisDownloadTask extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Data ownership region. Valid values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li></ul></p>
     */
    public $Area;

    /**
     * @var string <p>Start time, example value: 2020-04-29T00:00:00Z.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time. Example value: 2020-04-30T00:00:00Z.</p>
     */
    public $EndTime;

    /**
     * @var string <p>Log type. Valid values: <ul><li> l7-access-logs: Layer 7 Access Logs;</li><li>web-attack: Managed rule log.</li></ul></p>
     */
    public $LogType;

    /**
     * @var string <p><a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">Log match condition</a>. Maximum length 12KB.</p>
     */
    public $Condition;

    /**
     * @var string <p>File format, valid values:</p><ul><li>csv.</li></ul>
     */
    public $Format;

    /**
     * @var string <p>Whether raw logs are returned in time sequence. Valid values: <ul><li>asc: ascending order;</li><li>desc: descending order.</li></ul></p>
     */
    public $Sort;

    /**
     * @var string <p>Task status, valid values: <ul><li>loading: being processed, waiting to generate download link;</li><li> failed: processing failure, current task cannot be downloaded;</li><li>completed: packaging completed, ready for download.</li></ul></p>
     */
    public $Status;

    /**
     * @var string <p>Task creation time. After successful task creation, the retention period is 3 days.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Download link, only returned when Status = completed.</p>
     */
    public $Url;

    /**
     * @var string <p>Task expiration time. After expiry, the download address will be unavailable. Please obtain a new download address through this API.</p>
     */
    public $ExpireTime;

    /**
     * @param string $TaskId <p>Task ID.</p>
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $Area <p>Data ownership region. Valid values:<ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li></ul></p>
     * @param string $StartTime <p>Start time, example value: 2020-04-29T00:00:00Z.</p>
     * @param string $EndTime <p>End time. Example value: 2020-04-30T00:00:00Z.</p>
     * @param string $LogType <p>Log type. Valid values: <ul><li> l7-access-logs: Layer 7 Access Logs;</li><li>web-attack: Managed rule log.</li></ul></p>
     * @param string $Condition <p><a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">Log match condition</a>. Maximum length 12KB.</p>
     * @param string $Format <p>File format, valid values:</p><ul><li>csv.</li></ul>
     * @param string $Sort <p>Whether raw logs are returned in time sequence. Valid values: <ul><li>asc: ascending order;</li><li>desc: descending order.</li></ul></p>
     * @param string $Status <p>Task status, valid values: <ul><li>loading: being processed, waiting to generate download link;</li><li> failed: processing failure, current task cannot be downloaded;</li><li>completed: packaging completed, ready for download.</li></ul></p>
     * @param string $CreateTime <p>Task creation time. After successful task creation, the retention period is 3 days.</p>
     * @param string $Url <p>Download link, only returned when Status = completed.</p>
     * @param string $ExpireTime <p>Task expiration time. After expiry, the download address will be unavailable. Please obtain a new download address through this API.</p>
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
