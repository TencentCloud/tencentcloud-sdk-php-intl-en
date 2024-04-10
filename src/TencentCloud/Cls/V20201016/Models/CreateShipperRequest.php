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
 * CreateShipper request structure.
 *
 * @method string getTopicId() Obtain ID of the log topic to which the shipping rule to be created belongs
 * @method void setTopicId(string $TopicId) Set ID of the log topic to which the shipping rule to be created belongs
 * @method string getBucket() Obtain Destination bucket in the shipping rule to be created
 * @method void setBucket(string $Bucket) Set Destination bucket in the shipping rule to be created
 * @method string getPrefix() Obtain Prefix of the shipping directory in the shipping rule to be created
 * @method void setPrefix(string $Prefix) Set Prefix of the shipping directory in the shipping rule to be created
 * @method string getShipperName() Obtain Shipping rule name
 * @method void setShipperName(string $ShipperName) Set Shipping rule name
 * @method integer getInterval() Obtain Interval between shipping tasks (in sec). Default value: 300. Value range: 300-900
 * @method void setInterval(integer $Interval) Set Interval between shipping tasks (in sec). Default value: 300. Value range: 300-900
 * @method integer getMaxSize() Obtain Maximum size of a file to be shipped, in MB. Default value: 256. Value range: 5-256
 * @method void setMaxSize(integer $MaxSize) Set Maximum size of a file to be shipped, in MB. Default value: 256. Value range: 5-256
 * @method array getFilterRules() Obtain Filter rules for shipped logs. Only logs matching the rules can be shipped. All rules are in the AND relationship, and up to five rules can be added. If the array is empty, no filtering will be performed, and all logs will be shipped.
 * @method void setFilterRules(array $FilterRules) Set Filter rules for shipped logs. Only logs matching the rules can be shipped. All rules are in the AND relationship, and up to five rules can be added. If the array is empty, no filtering will be performed, and all logs will be shipped.
 * @method string getPartition() Obtain Rules for partitioning logs to be shipped. `strftime` can be used to define the presentation of time format.
 * @method void setPartition(string $Partition) Set Rules for partitioning logs to be shipped. `strftime` can be used to define the presentation of time format.
 * @method CompressInfo getCompress() Obtain Compression configuration of shipped log
 * @method void setCompress(CompressInfo $Compress) Set Compression configuration of shipped log
 * @method ContentInfo getContent() Obtain Format configuration of shipped log content
 * @method void setContent(ContentInfo $Content) Set Format configuration of shipped log content
 * @method integer getFilenameMode() Obtain Naming a shipping file. Valid values: `0` (by random number); `1` (by shipping time). Default value: `0`.
 * @method void setFilenameMode(integer $FilenameMode) Set Naming a shipping file. Valid values: `0` (by random number); `1` (by shipping time). Default value: `0`.
 * @method integer getStartTime() Obtain Start time for data shipping, which cannot be earlier than the lifecycle start time of the log topic. If you do not specify this parameter, it will be set to the time when you create the data shipping task.
 * @method void setStartTime(integer $StartTime) Set Start time for data shipping, which cannot be earlier than the lifecycle start time of the log topic. If you do not specify this parameter, it will be set to the time when you create the data shipping task.
 * @method integer getEndTime() Obtain End time for data shipping, which cannot be set to a future time. If you do not specify this parameter, it indicates continuous data shipping.
 * @method void setEndTime(integer $EndTime) Set End time for data shipping, which cannot be set to a future time. If you do not specify this parameter, it indicates continuous data shipping.
 * @method string getStorageType() Obtain COS bucket storage type
 * @method void setStorageType(string $StorageType) Set COS bucket storage type
 */
class CreateShipperRequest extends AbstractModel
{
    /**
     * @var string ID of the log topic to which the shipping rule to be created belongs
     */
    public $TopicId;

    /**
     * @var string Destination bucket in the shipping rule to be created
     */
    public $Bucket;

    /**
     * @var string Prefix of the shipping directory in the shipping rule to be created
     */
    public $Prefix;

    /**
     * @var string Shipping rule name
     */
    public $ShipperName;

    /**
     * @var integer Interval between shipping tasks (in sec). Default value: 300. Value range: 300-900
     */
    public $Interval;

    /**
     * @var integer Maximum size of a file to be shipped, in MB. Default value: 256. Value range: 5-256
     */
    public $MaxSize;

    /**
     * @var array Filter rules for shipped logs. Only logs matching the rules can be shipped. All rules are in the AND relationship, and up to five rules can be added. If the array is empty, no filtering will be performed, and all logs will be shipped.
     */
    public $FilterRules;

    /**
     * @var string Rules for partitioning logs to be shipped. `strftime` can be used to define the presentation of time format.
     */
    public $Partition;

    /**
     * @var CompressInfo Compression configuration of shipped log
     */
    public $Compress;

    /**
     * @var ContentInfo Format configuration of shipped log content
     */
    public $Content;

    /**
     * @var integer Naming a shipping file. Valid values: `0` (by random number); `1` (by shipping time). Default value: `0`.
     */
    public $FilenameMode;

    /**
     * @var integer Start time for data shipping, which cannot be earlier than the lifecycle start time of the log topic. If you do not specify this parameter, it will be set to the time when you create the data shipping task.
     */
    public $StartTime;

    /**
     * @var integer End time for data shipping, which cannot be set to a future time. If you do not specify this parameter, it indicates continuous data shipping.
     */
    public $EndTime;

    /**
     * @var string COS bucket storage type
     */
    public $StorageType;

    /**
     * @param string $TopicId ID of the log topic to which the shipping rule to be created belongs
     * @param string $Bucket Destination bucket in the shipping rule to be created
     * @param string $Prefix Prefix of the shipping directory in the shipping rule to be created
     * @param string $ShipperName Shipping rule name
     * @param integer $Interval Interval between shipping tasks (in sec). Default value: 300. Value range: 300-900
     * @param integer $MaxSize Maximum size of a file to be shipped, in MB. Default value: 256. Value range: 5-256
     * @param array $FilterRules Filter rules for shipped logs. Only logs matching the rules can be shipped. All rules are in the AND relationship, and up to five rules can be added. If the array is empty, no filtering will be performed, and all logs will be shipped.
     * @param string $Partition Rules for partitioning logs to be shipped. `strftime` can be used to define the presentation of time format.
     * @param CompressInfo $Compress Compression configuration of shipped log
     * @param ContentInfo $Content Format configuration of shipped log content
     * @param integer $FilenameMode Naming a shipping file. Valid values: `0` (by random number); `1` (by shipping time). Default value: `0`.
     * @param integer $StartTime Start time for data shipping, which cannot be earlier than the lifecycle start time of the log topic. If you do not specify this parameter, it will be set to the time when you create the data shipping task.
     * @param integer $EndTime End time for data shipping, which cannot be set to a future time. If you do not specify this parameter, it indicates continuous data shipping.
     * @param string $StorageType COS bucket storage type
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

        if (array_key_exists("FilenameMode",$param) and $param["FilenameMode"] !== null) {
            $this->FilenameMode = $param["FilenameMode"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
