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
 * Shipping rule
 *
 * @method string getShipperId() Obtain <p>Delivery Rule ID</p>
 * @method void setShipperId(string $ShipperId) Set <p>Delivery Rule ID</p>
 * @method string getTopicId() Obtain <p>Log topic ID.</p>
 * @method void setTopicId(string $TopicId) Set <p>Log topic ID.</p>
 * @method string getBucket() Obtain <p>bucket address for shipping</p>
 * @method void setBucket(string $Bucket) Set <p>bucket address for shipping</p>
 * @method string getPrefix() Obtain <p>Delivery prefix directory</p>
 * @method void setPrefix(string $Prefix) Set <p>Delivery prefix directory</p>
 * @method string getShipperName() Obtain <p>Shipping rule name</p>
 * @method void setShipperName(string $ShipperName) Set <p>Shipping rule name</p>
 * @method integer getInterval() Obtain <p>Shipping time interval. Unit: seconds</p>
 * @method void setInterval(integer $Interval) Set <p>Shipping time interval. Unit: seconds</p>
 * @method integer getMaxSize() Obtain <p>Maximum value of delivered files in MB</p>
 * @method void setMaxSize(integer $MaxSize) Set <p>Maximum value of delivered files in MB</p>
 * @method boolean getStatus() Obtain <p>Whether effective</p>
 * @method void setStatus(boolean $Status) Set <p>Whether effective</p>
 * @method array getFilterRules() Obtain <p>Filter rules for log shipping</p>
 * @method void setFilterRules(array $FilterRules) Set <p>Filter rules for log shipping</p>
 * @method string getPartition() Obtain <p>Partition rules for log shipping support strftime time format representation</p>
 * @method void setPartition(string $Partition) Set <p>Partition rules for log shipping support strftime time format representation</p>
 * @method CompressInfo getCompress() Obtain <p>Compression configuration of shipped logs</p>
 * @method void setCompress(CompressInfo $Compress) Set <p>Compression configuration of shipped logs</p>
 * @method ContentInfo getContent() Obtain <p>Content format configuration for shipped logs</p>
 * @method void setContent(ContentInfo $Content) Set <p>Content format configuration for shipped logs</p>
 * @method string getCreateTime() Obtain <p>Creation time of shipped logs. Format: YYYY-MM-DD HH:MM:SS</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time of shipped logs. Format: YYYY-MM-DD HH:MM:SS</p>
 * @method integer getFilenameMode() Obtain <p>Delivery file naming configuration. 0: Random number naming, 1: Delivery time naming. Default: 0 (Random number naming).</p>
 * @method void setFilenameMode(integer $FilenameMode) Set <p>Delivery file naming configuration. 0: Random number naming, 1: Delivery time naming. Default: 0 (Random number naming).</p>
 * @method integer getStartTime() Obtain <p>Start time of the data shipping range</p>
 * @method void setStartTime(integer $StartTime) Set <p>Start time of the data shipping range</p>
 * @method integer getEndTime() Obtain <p>End time of the data delivery range</p>
 * @method void setEndTime(integer $EndTime) Set <p>End time of the data delivery range</p>
 * @method float getProgress() Obtain <p>Progress of historical data delivery (valid only when users select historical data within the dataset)</p>
 * @method void setProgress(float $Progress) Set <p>Progress of historical data delivery (valid only when users select historical data within the dataset)</p>
 * @method integer getRemainTime() Obtain <p>Remaining time for all historical data delivery completion (valid only when there is historical data in the selected data)</p><p>Unit: second</p>
 * @method void setRemainTime(integer $RemainTime) Set <p>Remaining time for all historical data delivery completion (valid only when there is historical data in the selected data)</p><p>Unit: second</p>
 * @method integer getHistoryStatus() Obtain <p>Historical task status:<br>0: Real-time task<br>1: Task preparing<br>2: Task running<br>3: Task execution exception<br>4: Task execution complete</p>
 * @method void setHistoryStatus(integer $HistoryStatus) Set <p>Historical task status:<br>0: Real-time task<br>1: Task preparing<br>2: Task running<br>3: Task execution exception<br>4: Task execution complete</p>
 * @method string getStorageType() Obtain <p>Storage type. Default value is STANDARD. For enumeration values, see the <a href="https://www.tencentcloud.com/document/product/436/33417?from_cn_redirect=1">storage type overview</a> document.<br>Reference values:<br>STANDARD: standard storage<br>STANDARD_IA: infrequent storage<br>ARCHIVE: archive storage<br>DEEP_ARCHIVE: deep archive storage<br>MAZ_STANDARD: standard storage (multi-AZ)<br>MAZ_STANDARD_IA: infrequent storage (multi-AZ)<br>INTELLIGENT_TIERING: intelligent tiering storage<br>MAZ_INTELLIGENT_TIERING: intelligent tiering storage (multi-AZ)</p>
 * @method void setStorageType(string $StorageType) Set <p>Storage type. Default value is STANDARD. For enumeration values, see the <a href="https://www.tencentcloud.com/document/product/436/33417?from_cn_redirect=1">storage type overview</a> document.<br>Reference values:<br>STANDARD: standard storage<br>STANDARD_IA: infrequent storage<br>ARCHIVE: archive storage<br>DEEP_ARCHIVE: deep archive storage<br>MAZ_STANDARD: standard storage (multi-AZ)<br>MAZ_STANDARD_IA: infrequent storage (multi-AZ)<br>INTELLIGENT_TIERING: intelligent tiering storage<br>MAZ_INTELLIGENT_TIERING: intelligent tiering storage (multi-AZ)</p>
 * @method string getRoleArn() Obtain <p>ARN <a href="https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1">Create role</a></p>
 * @method void setRoleArn(string $RoleArn) Set <p>ARN <a href="https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1">Create role</a></p>
 * @method string getExternalId() Obtain <p>External ID</p>
 * @method void setExternalId(string $ExternalId) Set <p>External ID</p>
 * @method integer getTaskStatus() Obtain <p>Task running status. Supports <code>0</code>, <code>1</code>, <code>2</code></p><ul><li><code>0</code>: Stop</li><li><code>1</code>: Running</li><li><code>2</code>: Exception</li></ul>
 * @method void setTaskStatus(integer $TaskStatus) Set <p>Task running status. Supports <code>0</code>, <code>1</code>, <code>2</code></p><ul><li><code>0</code>: Stop</li><li><code>1</code>: Running</li><li><code>2</code>: Exception</li></ul>
 * @method string getTimeZone() Obtain <p>Time variable used to generate the file path shipped to COS</p>
 * @method void setTimeZone(string $TimeZone) Set <p>Time variable used to generate the file path shipped to COS</p>
 * @method string getDSLFilter() Obtain <p>Pre-filtering process - filter out original data before writing to COS</p>
 * @method void setDSLFilter(string $DSLFilter) Set <p>Pre-filtering process - filter out original data before writing to COS</p>
 */
class ShipperInfo extends AbstractModel
{
    /**
     * @var string <p>Delivery Rule ID</p>
     */
    public $ShipperId;

    /**
     * @var string <p>Log topic ID.</p>
     */
    public $TopicId;

    /**
     * @var string <p>bucket address for shipping</p>
     */
    public $Bucket;

    /**
     * @var string <p>Delivery prefix directory</p>
     */
    public $Prefix;

    /**
     * @var string <p>Shipping rule name</p>
     */
    public $ShipperName;

    /**
     * @var integer <p>Shipping time interval. Unit: seconds</p>
     */
    public $Interval;

    /**
     * @var integer <p>Maximum value of delivered files in MB</p>
     */
    public $MaxSize;

    /**
     * @var boolean <p>Whether effective</p>
     */
    public $Status;

    /**
     * @var array <p>Filter rules for log shipping</p>
     */
    public $FilterRules;

    /**
     * @var string <p>Partition rules for log shipping support strftime time format representation</p>
     */
    public $Partition;

    /**
     * @var CompressInfo <p>Compression configuration of shipped logs</p>
     */
    public $Compress;

    /**
     * @var ContentInfo <p>Content format configuration for shipped logs</p>
     */
    public $Content;

    /**
     * @var string <p>Creation time of shipped logs. Format: YYYY-MM-DD HH:MM:SS</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Delivery file naming configuration. 0: Random number naming, 1: Delivery time naming. Default: 0 (Random number naming).</p>
     */
    public $FilenameMode;

    /**
     * @var integer <p>Start time of the data shipping range</p>
     */
    public $StartTime;

    /**
     * @var integer <p>End time of the data delivery range</p>
     */
    public $EndTime;

    /**
     * @var float <p>Progress of historical data delivery (valid only when users select historical data within the dataset)</p>
     */
    public $Progress;

    /**
     * @var integer <p>Remaining time for all historical data delivery completion (valid only when there is historical data in the selected data)</p><p>Unit: second</p>
     */
    public $RemainTime;

    /**
     * @var integer <p>Historical task status:<br>0: Real-time task<br>1: Task preparing<br>2: Task running<br>3: Task execution exception<br>4: Task execution complete</p>
     */
    public $HistoryStatus;

    /**
     * @var string <p>Storage type. Default value is STANDARD. For enumeration values, see the <a href="https://www.tencentcloud.com/document/product/436/33417?from_cn_redirect=1">storage type overview</a> document.<br>Reference values:<br>STANDARD: standard storage<br>STANDARD_IA: infrequent storage<br>ARCHIVE: archive storage<br>DEEP_ARCHIVE: deep archive storage<br>MAZ_STANDARD: standard storage (multi-AZ)<br>MAZ_STANDARD_IA: infrequent storage (multi-AZ)<br>INTELLIGENT_TIERING: intelligent tiering storage<br>MAZ_INTELLIGENT_TIERING: intelligent tiering storage (multi-AZ)</p>
     */
    public $StorageType;

    /**
     * @var string <p>ARN <a href="https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1">Create role</a></p>
     */
    public $RoleArn;

    /**
     * @var string <p>External ID</p>
     */
    public $ExternalId;

    /**
     * @var integer <p>Task running status. Supports <code>0</code>, <code>1</code>, <code>2</code></p><ul><li><code>0</code>: Stop</li><li><code>1</code>: Running</li><li><code>2</code>: Exception</li></ul>
     */
    public $TaskStatus;

    /**
     * @var string <p>Time variable used to generate the file path shipped to COS</p>
     */
    public $TimeZone;

    /**
     * @var string <p>Pre-filtering process - filter out original data before writing to COS</p>
     */
    public $DSLFilter;

    /**
     * @param string $ShipperId <p>Delivery Rule ID</p>
     * @param string $TopicId <p>Log topic ID.</p>
     * @param string $Bucket <p>bucket address for shipping</p>
     * @param string $Prefix <p>Delivery prefix directory</p>
     * @param string $ShipperName <p>Shipping rule name</p>
     * @param integer $Interval <p>Shipping time interval. Unit: seconds</p>
     * @param integer $MaxSize <p>Maximum value of delivered files in MB</p>
     * @param boolean $Status <p>Whether effective</p>
     * @param array $FilterRules <p>Filter rules for log shipping</p>
     * @param string $Partition <p>Partition rules for log shipping support strftime time format representation</p>
     * @param CompressInfo $Compress <p>Compression configuration of shipped logs</p>
     * @param ContentInfo $Content <p>Content format configuration for shipped logs</p>
     * @param string $CreateTime <p>Creation time of shipped logs. Format: YYYY-MM-DD HH:MM:SS</p>
     * @param integer $FilenameMode <p>Delivery file naming configuration. 0: Random number naming, 1: Delivery time naming. Default: 0 (Random number naming).</p>
     * @param integer $StartTime <p>Start time of the data shipping range</p>
     * @param integer $EndTime <p>End time of the data delivery range</p>
     * @param float $Progress <p>Progress of historical data delivery (valid only when users select historical data within the dataset)</p>
     * @param integer $RemainTime <p>Remaining time for all historical data delivery completion (valid only when there is historical data in the selected data)</p><p>Unit: second</p>
     * @param integer $HistoryStatus <p>Historical task status:<br>0: Real-time task<br>1: Task preparing<br>2: Task running<br>3: Task execution exception<br>4: Task execution complete</p>
     * @param string $StorageType <p>Storage type. Default value is STANDARD. For enumeration values, see the <a href="https://www.tencentcloud.com/document/product/436/33417?from_cn_redirect=1">storage type overview</a> document.<br>Reference values:<br>STANDARD: standard storage<br>STANDARD_IA: infrequent storage<br>ARCHIVE: archive storage<br>DEEP_ARCHIVE: deep archive storage<br>MAZ_STANDARD: standard storage (multi-AZ)<br>MAZ_STANDARD_IA: infrequent storage (multi-AZ)<br>INTELLIGENT_TIERING: intelligent tiering storage<br>MAZ_INTELLIGENT_TIERING: intelligent tiering storage (multi-AZ)</p>
     * @param string $RoleArn <p>ARN <a href="https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1">Create role</a></p>
     * @param string $ExternalId <p>External ID</p>
     * @param integer $TaskStatus <p>Task running status. Supports <code>0</code>, <code>1</code>, <code>2</code></p><ul><li><code>0</code>: Stop</li><li><code>1</code>: Running</li><li><code>2</code>: Exception</li></ul>
     * @param string $TimeZone <p>Time variable used to generate the file path shipped to COS</p>
     * @param string $DSLFilter <p>Pre-filtering process - filter out original data before writing to COS</p>
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
        if (array_key_exists("ShipperId",$param) and $param["ShipperId"] !== null) {
            $this->ShipperId = $param["ShipperId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("ShipperName",$param) and $param["ShipperName"] !== null) {
            $this->ShipperName = $param["ShipperName"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FilterRules",$param) and $param["FilterRules"] !== null) {
            $this->FilterRules = [];
            foreach ($param["FilterRules"] as $key => $value){
                $obj = new FilterRuleInfo();
                $obj->deserialize($value);
                array_push($this->FilterRules, $obj);
            }
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = new CompressInfo();
            $this->Compress->deserialize($param["Compress"]);
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new ContentInfo();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FilenameMode",$param) and $param["FilenameMode"] !== null) {
            $this->FilenameMode = $param["FilenameMode"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("RemainTime",$param) and $param["RemainTime"] !== null) {
            $this->RemainTime = $param["RemainTime"];
        }

        if (array_key_exists("HistoryStatus",$param) and $param["HistoryStatus"] !== null) {
            $this->HistoryStatus = $param["HistoryStatus"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("DSLFilter",$param) and $param["DSLFilter"] !== null) {
            $this->DSLFilter = $param["DSLFilter"];
        }
    }
}
