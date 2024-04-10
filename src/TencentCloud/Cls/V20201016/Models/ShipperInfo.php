<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getShipperId() Obtain Shipping rule ID
 * @method void setShipperId(string $ShipperId) Set Shipping rule ID
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method string getBucket() Obtain Bucket address shipped to
 * @method void setBucket(string $Bucket) Set Bucket address shipped to
 * @method string getPrefix() Obtain Shipping prefix directory
 * @method void setPrefix(string $Prefix) Set Shipping prefix directory
 * @method string getShipperName() Obtain Shipping rule name
 * @method void setShipperName(string $ShipperName) Set Shipping rule name
 * @method integer getInterval() Obtain Shipping time interval in seconds
 * @method void setInterval(integer $Interval) Set Shipping time interval in seconds
 * @method integer getMaxSize() Obtain Maximum size of shipped file in MB
 * @method void setMaxSize(integer $MaxSize) Set Maximum size of shipped file in MB
 * @method boolean getStatus() Obtain Whether it takes effect
 * @method void setStatus(boolean $Status) Set Whether it takes effect
 * @method array getFilterRules() Obtain Filter rule for shipped log
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setFilterRules(array $FilterRules) Set Filter rule for shipped log
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getPartition() Obtain Partition rule of shipped log, which can be represented in `strftime` time format
 * @method void setPartition(string $Partition) Set Partition rule of shipped log, which can be represented in `strftime` time format
 * @method CompressInfo getCompress() Obtain Compression configuration of shipped log
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCompress(CompressInfo $Compress) Set Compression configuration of shipped log
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method ContentInfo getContent() Obtain Format configuration of shipped log content
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setContent(ContentInfo $Content) Set Format configuration of shipped log content
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time of shipped log
 * @method void setCreateTime(string $CreateTime) Set Creation time of shipped log
 * @method integer getFilenameMode() Obtain Shipping file naming configuration. Valid values: `0` (by random number); `1` (by shipping time). Default value: `0`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFilenameMode(integer $FilenameMode) Set Shipping file naming configuration. Valid values: `0` (by random number); `1` (by shipping time). Default value: `0`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStartTime() Obtain Start time for data shipping
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(integer $StartTime) Set Start time for data shipping
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEndTime() Obtain End time for data shipping
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(integer $EndTime) Set End time for data shipping
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getProgress() Obtain Progress of historical data shipping (valid only when the selected data scope contains historical data)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProgress(float $Progress) Set Progress of historical data shipping (valid only when the selected data scope contains historical data)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRemainTime() Obtain Remaining time required for shipping all historical data (valid only when the selected data scope contains historical data)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemainTime(integer $RemainTime) Set Remaining time required for shipping all historical data (valid only when the selected data scope contains historical data)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHistoryStatus() Obtain Status of historical data shipping. Valid values:
0: Real-time data is being shipped.
1: The system is preparing for historical data shipping.
2: Historical data is being shipped.
3: An error occurred while shipping historical data.
4: Historical data shipping ended.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHistoryStatus(integer $HistoryStatus) Set Status of historical data shipping. Valid values:
0: Real-time data is being shipped.
1: The system is preparing for historical data shipping.
2: Historical data is being shipped.
3: An error occurred while shipping historical data.
4: Historical data shipping ended.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStorageType() Obtain COS bucket type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageType(string $StorageType) Set COS bucket type
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ShipperInfo extends AbstractModel
{
    /**
     * @var string Shipping rule ID
     */
    public $ShipperId;

    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var string Bucket address shipped to
     */
    public $Bucket;

    /**
     * @var string Shipping prefix directory
     */
    public $Prefix;

    /**
     * @var string Shipping rule name
     */
    public $ShipperName;

    /**
     * @var integer Shipping time interval in seconds
     */
    public $Interval;

    /**
     * @var integer Maximum size of shipped file in MB
     */
    public $MaxSize;

    /**
     * @var boolean Whether it takes effect
     */
    public $Status;

    /**
     * @var array Filter rule for shipped log
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $FilterRules;

    /**
     * @var string Partition rule of shipped log, which can be represented in `strftime` time format
     */
    public $Partition;

    /**
     * @var CompressInfo Compression configuration of shipped log
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Compress;

    /**
     * @var ContentInfo Format configuration of shipped log content
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Content;

    /**
     * @var string Creation time of shipped log
     */
    public $CreateTime;

    /**
     * @var integer Shipping file naming configuration. Valid values: `0` (by random number); `1` (by shipping time). Default value: `0`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FilenameMode;

    /**
     * @var integer Start time for data shipping
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var integer End time for data shipping
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var float Progress of historical data shipping (valid only when the selected data scope contains historical data)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Progress;

    /**
     * @var integer Remaining time required for shipping all historical data (valid only when the selected data scope contains historical data)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RemainTime;

    /**
     * @var integer Status of historical data shipping. Valid values:
0: Real-time data is being shipped.
1: The system is preparing for historical data shipping.
2: Historical data is being shipped.
3: An error occurred while shipping historical data.
4: Historical data shipping ended.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HistoryStatus;

    /**
     * @var string COS bucket type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageType;

    /**
     * @param string $ShipperId Shipping rule ID
     * @param string $TopicId Log topic ID
     * @param string $Bucket Bucket address shipped to
     * @param string $Prefix Shipping prefix directory
     * @param string $ShipperName Shipping rule name
     * @param integer $Interval Shipping time interval in seconds
     * @param integer $MaxSize Maximum size of shipped file in MB
     * @param boolean $Status Whether it takes effect
     * @param array $FilterRules Filter rule for shipped log
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Partition Partition rule of shipped log, which can be represented in `strftime` time format
     * @param CompressInfo $Compress Compression configuration of shipped log
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param ContentInfo $Content Format configuration of shipped log content
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time of shipped log
     * @param integer $FilenameMode Shipping file naming configuration. Valid values: `0` (by random number); `1` (by shipping time). Default value: `0`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StartTime Start time for data shipping
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EndTime End time for data shipping
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Progress Progress of historical data shipping (valid only when the selected data scope contains historical data)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RemainTime Remaining time required for shipping all historical data (valid only when the selected data scope contains historical data)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HistoryStatus Status of historical data shipping. Valid values:
0: Real-time data is being shipped.
1: The system is preparing for historical data shipping.
2: Historical data is being shipped.
3: An error occurred while shipping historical data.
4: Historical data shipping ended.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StorageType COS bucket type
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
