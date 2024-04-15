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
 * ModifyShipper request structure.
 *
 * @method string getShipperId() Obtain Shipping rule ID
 * @method void setShipperId(string $ShipperId) Set Shipping rule ID
 * @method string getBucket() Obtain New destination bucket in shipping rule
 * @method void setBucket(string $Bucket) Set New destination bucket in shipping rule
 * @method string getPrefix() Obtain New destination directory prefix in shipping rule
 * @method void setPrefix(string $Prefix) Set New destination directory prefix in shipping rule
 * @method boolean getStatus() Obtain Shipping rule status
 * @method void setStatus(boolean $Status) Set Shipping rule status
 * @method string getShipperName() Obtain Shipping rule name
 * @method void setShipperName(string $ShipperName) Set Shipping rule name
 * @method integer getInterval() Obtain Shipping time interval in seconds. Default value: 300. Value range: 300 to 900
 * @method void setInterval(integer $Interval) Set Shipping time interval in seconds. Default value: 300. Value range: 300 to 900
 * @method integer getMaxSize() Obtain Maximum size of a file to be shipped, in MB. Default value: 256. Value range: 5 to 256
 * @method void setMaxSize(integer $MaxSize) Set Maximum size of a file to be shipped, in MB. Default value: 256. Value range: 5 to 256
 * @method array getFilterRules() Obtain Filter rules for shipped logs. Only logs matching the rules can be shipped. All rules are in the AND relationship, and up to five rules can be added. If the array is empty, no filtering will be performed, and all logs will be shipped.
 * @method void setFilterRules(array $FilterRules) Set Filter rules for shipped logs. Only logs matching the rules can be shipped. All rules are in the AND relationship, and up to five rules can be added. If the array is empty, no filtering will be performed, and all logs will be shipped.
 * @method string getPartition() Obtain Partition rule of shipped log, which can be represented in `strftime` time format
 * @method void setPartition(string $Partition) Set Partition rule of shipped log, which can be represented in `strftime` time format
 * @method CompressInfo getCompress() Obtain Compression configuration of shipped log
 * @method void setCompress(CompressInfo $Compress) Set Compression configuration of shipped log
 * @method ContentInfo getContent() Obtain Format configuration of shipped log content
 * @method void setContent(ContentInfo $Content) Set Format configuration of shipped log content
 * @method integer getFilenameMode() Obtain Naming a shipping file. Valid values: `0` (by random number), `1` (by shipping time). Default value: `0`.
 * @method void setFilenameMode(integer $FilenameMode) Set Naming a shipping file. Valid values: `0` (by random number), `1` (by shipping time). Default value: `0`.
 * @method string getStorageType() Obtain COS bucket type
 * @method void setStorageType(string $StorageType) Set COS bucket type
 */
class ModifyShipperRequest extends AbstractModel
{
    /**
     * @var string Shipping rule ID
     */
    public $ShipperId;

    /**
     * @var string New destination bucket in shipping rule
     */
    public $Bucket;

    /**
     * @var string New destination directory prefix in shipping rule
     */
    public $Prefix;

    /**
     * @var boolean Shipping rule status
     */
    public $Status;

    /**
     * @var string Shipping rule name
     */
    public $ShipperName;

    /**
     * @var integer Shipping time interval in seconds. Default value: 300. Value range: 300 to 900
     */
    public $Interval;

    /**
     * @var integer Maximum size of a file to be shipped, in MB. Default value: 256. Value range: 5 to 256
     */
    public $MaxSize;

    /**
     * @var array Filter rules for shipped logs. Only logs matching the rules can be shipped. All rules are in the AND relationship, and up to five rules can be added. If the array is empty, no filtering will be performed, and all logs will be shipped.
     */
    public $FilterRules;

    /**
     * @var string Partition rule of shipped log, which can be represented in `strftime` time format
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
     * @var integer Naming a shipping file. Valid values: `0` (by random number), `1` (by shipping time). Default value: `0`.
     */
    public $FilenameMode;

    /**
     * @var string COS bucket type
     */
    public $StorageType;

    /**
     * @param string $ShipperId Shipping rule ID
     * @param string $Bucket New destination bucket in shipping rule
     * @param string $Prefix New destination directory prefix in shipping rule
     * @param boolean $Status Shipping rule status
     * @param string $ShipperName Shipping rule name
     * @param integer $Interval Shipping time interval in seconds. Default value: 300. Value range: 300 to 900
     * @param integer $MaxSize Maximum size of a file to be shipped, in MB. Default value: 256. Value range: 5 to 256
     * @param array $FilterRules Filter rules for shipped logs. Only logs matching the rules can be shipped. All rules are in the AND relationship, and up to five rules can be added. If the array is empty, no filtering will be performed, and all logs will be shipped.
     * @param string $Partition Partition rule of shipped log, which can be represented in `strftime` time format
     * @param CompressInfo $Compress Compression configuration of shipped log
     * @param ContentInfo $Content Format configuration of shipped log content
     * @param integer $FilenameMode Naming a shipping file. Valid values: `0` (by random number), `1` (by shipping time). Default value: `0`.
     * @param string $StorageType COS bucket type
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

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
