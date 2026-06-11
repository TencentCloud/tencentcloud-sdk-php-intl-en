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
 * CreateShipper request structure.
 *
 * @method string getTopicId() Obtain <p>Log topic Id belonging to the created shipping rule.</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
 * @method void setTopicId(string $TopicId) Set <p>Log topic Id belonging to the created shipping rule.</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
 * @method string getBucket() Obtain <p>COS bucket, see the supported <a href="https://www.tencentcloud.com/document/product/436/13312?from_cn_redirect=1">bucket naming conventions</a>.</p><ul><li>Retrieve COS buckets via <a href="https://www.tencentcloud.com/document/product/436/8291?from_cn_redirect=1">GET Service (List Buckets)</a>.</li></ul>
 * @method void setBucket(string $Bucket) Set <p>COS bucket, see the supported <a href="https://www.tencentcloud.com/document/product/436/13312?from_cn_redirect=1">bucket naming conventions</a>.</p><ul><li>Retrieve COS buckets via <a href="https://www.tencentcloud.com/document/product/436/8291?from_cn_redirect=1">GET Service (List Buckets)</a>.</li></ul>
 * @method string getPrefix() Obtain <p>New directory prefix delivered by the Shipping Rule.</p><ul><li>Only supports 0-9A-Za-z-_/</li><li>Supports up to 256 characters</li></ul>
 * @method void setPrefix(string $Prefix) Set <p>New directory prefix delivered by the Shipping Rule.</p><ul><li>Only supports 0-9A-Za-z-_/</li><li>Supports up to 256 characters</li></ul>
 * @method string getShipperName() Obtain <p>Shipping rule name. Supports a maximum of 255 characters.</p>
 * @method void setShipperName(string $ShipperName) Set <p>Shipping rule name. Supports a maximum of 255 characters.</p>
 * @method integer getInterval() Obtain <p>Shipping time interval in seconds. Default: 300. Range: 300-900.</p>
 * @method void setInterval(integer $Interval) Set <p>Shipping time interval in seconds. Default: 300. Range: 300-900.</p>
 * @method integer getMaxSize() Obtain <p>Maximum value of delivered files in MB. Default: 256. Range: 5-256.</p>
 * @method void setMaxSize(integer $MaxSize) Set <p>Maximum value of delivered files in MB. Default: 256. Range: 5-256.</p>
 * @method array getFilterRules() Obtain <p>Filter rules for log shipping. Matched logs are shipped. The relationship between the rules is and. Up to 5 rules are allowed. An empty array indicates all logs are shipped without filtering.</p>
 * @method void setFilterRules(array $FilterRules) Set <p>Filter rules for log shipping. Matched logs are shipped. The relationship between the rules is and. Up to 5 rules are allowed. An empty array indicates all logs are shipped without filtering.</p>
 * @method string getPartition() Obtain <p>Partition rules for log shipping support strftime time format representation</p>
 * @method void setPartition(string $Partition) Set <p>Partition rules for log shipping support strftime time format representation</p>
 * @method CompressInfo getCompress() Obtain <p>Compression configuration of shipped logs</p>
 * @method void setCompress(CompressInfo $Compress) Set <p>Compression configuration of shipped logs</p>
 * @method ContentInfo getContent() Obtain <p>Content format configuration for shipped logs</p>
 * @method void setContent(ContentInfo $Content) Set <p>Content format configuration for shipped logs</p>
 * @method integer getFilenameMode() Obtain <p>Delivery file naming configuration. 0: Random number naming, 1: Delivery time naming. Default: 0 (Random number naming).</p>
 * @method void setFilenameMode(integer $FilenameMode) Set <p>Delivery file naming configuration. 0: Random number naming, 1: Delivery time naming. Default: 0 (Random number naming).</p>
 * @method integer getStartTime() Obtain <p>Starting point of the data shipping range (Unix second-level timestamp). It cannot exceed the starting point of the log topic's lifecycle.<br>If not filled in by the user, it defaults to the time when the user creates the shipping task.</p>
 * @method void setStartTime(integer $StartTime) Set <p>Starting point of the data shipping range (Unix second-level timestamp). It cannot exceed the starting point of the log topic's lifecycle.<br>If not filled in by the user, it defaults to the time when the user creates the shipping task.</p>
 * @method integer getEndTime() Obtain <p>End time point of the data shipping range (unix second-level timestamp). It cannot be in the future.<br>If not filled in by the user, it defaults to continuous shipping, unlimited.</p>
 * @method void setEndTime(integer $EndTime) Set <p>End time point of the data shipping range (unix second-level timestamp). It cannot be in the future.<br>If not filled in by the user, it defaults to continuous shipping, unlimited.</p>
 * @method string getStorageType() Obtain <p>The storage type of an object. Default value is STANDARD. For enumeration values, please refer to the <a href="https://www.tencentcloud.com/document/product/436/33417?from_cn_redirect=1">storage type overview</a> document.<br>Reference values include:</p><ul><li>STANDARD: standard storage</li><li>STANDARD_IA: infrequent storage</li><li>ARCHIVE: archive storage</li><li>DEEP_ARCHIVE: deep archive storage</li><li>MAZ_STANDARD: standard storage (multi-AZ)</li><li>MAZ_STANDARD_IA: infrequent storage (multi-AZ)</li><li>INTELLIGENT_TIERING: intelligent tiering storage</li><li>MAZ_INTELLIGENT_TIERING: intelligent tiering storage (multi-AZ)</li></ul>
 * @method void setStorageType(string $StorageType) Set <p>The storage type of an object. Default value is STANDARD. For enumeration values, please refer to the <a href="https://www.tencentcloud.com/document/product/436/33417?from_cn_redirect=1">storage type overview</a> document.<br>Reference values include:</p><ul><li>STANDARD: standard storage</li><li>STANDARD_IA: infrequent storage</li><li>ARCHIVE: archive storage</li><li>DEEP_ARCHIVE: deep archive storage</li><li>MAZ_STANDARD: standard storage (multi-AZ)</li><li>MAZ_STANDARD_IA: infrequent storage (multi-AZ)</li><li>INTELLIGENT_TIERING: intelligent tiering storage</li><li>MAZ_INTELLIGENT_TIERING: intelligent tiering storage (multi-AZ)</li></ul>
 * @method string getRoleArn() Obtain <p>Role ARN <a href="https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1">Create role</a></p>
 * @method void setRoleArn(string $RoleArn) Set <p>Role ARN <a href="https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1">Create role</a></p>
 * @method string getExternalId() Obtain <p>External ID</p>
 * @method void setExternalId(string $ExternalId) Set <p>External ID</p>
 * @method string getTimeZone() Obtain <p>Used to generate time variables in the file path shipped to COS.</p><p>Input limit: Support the following time zone list.</p><ul><li>GMT-12:00</li><li>GMT-11:00</li><li>GMT-10:00</li><li>GMT-09:30</li><li>GMT-09:00</li><li>GMT-08:00</li><li>GMT-07:00</li><li>GMT-06:00</li><li>GMT-05:00</li><li>GMT-04:00</li><li>GMT-03:30</li><li>GMT-03:00</li><li>GMT-02:00</li><li>GMT-01:00</li><li>GMT+00:00</li><li>GMT+01:00</li><li>GMT+02:00</li><li>GMT+03:30</li><li>GMT+04:00</li><li>GMT+04:30</li><li>GMT+05:00</li><li>GMT+05:30</li><li>GMT+05:45</li><li>GMT+06:00</li><li>GMT+06:30</li><li>GMT+07:00</li><li>GMT+08:00</li><li>GMT+09:00</li><li>GMT+09:30</li><li>GMT+10:00</li><li>GMT+10:30</li><li>GMT+11:00</li><li>GMT+11:30</li><li>GMT+12:00</li><li>GMT+12:45</li><li>GMT+13:00</li><li>GMT+14:00</li><li>UTC-11:00</li><li>UTC-10:00</li><li>UTC-09:00</li><li>UTC-08:00</li><li>UTC-12:00</li><li>UTC-07:00</li><li>UTC-06:00</li><li>UTC-05:00</li><li>UTC-04:30</li><li>UTC-04:00</li><li>UTC-03:30</li><li>UTC-03:00</li><li>UTC-02:00</li><li>UTC-01:00</li><li>UTC+00:00</li><li>UTC+01:00</li><li>UTC+02:00</li><li>UTC+03:00</li><li>UTC+03:30</li><li>UTC+04:00</li><li>UTC+04:30</li><li>UTC+05:00</li><li>UTC+05:45</li><li>UTC+06:00</li><li>UTC+06:30</li><li>UTC+07:00</li><li>UTC+08:00</li><li>UTC+09:00</li><li>UTC+09:30</li><li>UTC+10:00</li><li>UTC+11:00</li><li>UTC+12:00</li><li>UTC+13:00</li></ul>
 * @method void setTimeZone(string $TimeZone) Set <p>Used to generate time variables in the file path shipped to COS.</p><p>Input limit: Support the following time zone list.</p><ul><li>GMT-12:00</li><li>GMT-11:00</li><li>GMT-10:00</li><li>GMT-09:30</li><li>GMT-09:00</li><li>GMT-08:00</li><li>GMT-07:00</li><li>GMT-06:00</li><li>GMT-05:00</li><li>GMT-04:00</li><li>GMT-03:30</li><li>GMT-03:00</li><li>GMT-02:00</li><li>GMT-01:00</li><li>GMT+00:00</li><li>GMT+01:00</li><li>GMT+02:00</li><li>GMT+03:30</li><li>GMT+04:00</li><li>GMT+04:30</li><li>GMT+05:00</li><li>GMT+05:30</li><li>GMT+05:45</li><li>GMT+06:00</li><li>GMT+06:30</li><li>GMT+07:00</li><li>GMT+08:00</li><li>GMT+09:00</li><li>GMT+09:30</li><li>GMT+10:00</li><li>GMT+10:30</li><li>GMT+11:00</li><li>GMT+11:30</li><li>GMT+12:00</li><li>GMT+12:45</li><li>GMT+13:00</li><li>GMT+14:00</li><li>UTC-11:00</li><li>UTC-10:00</li><li>UTC-09:00</li><li>UTC-08:00</li><li>UTC-12:00</li><li>UTC-07:00</li><li>UTC-06:00</li><li>UTC-05:00</li><li>UTC-04:30</li><li>UTC-04:00</li><li>UTC-03:30</li><li>UTC-03:00</li><li>UTC-02:00</li><li>UTC-01:00</li><li>UTC+00:00</li><li>UTC+01:00</li><li>UTC+02:00</li><li>UTC+03:00</li><li>UTC+03:30</li><li>UTC+04:00</li><li>UTC+04:30</li><li>UTC+05:00</li><li>UTC+05:45</li><li>UTC+06:00</li><li>UTC+06:30</li><li>UTC+07:00</li><li>UTC+08:00</li><li>UTC+09:00</li><li>UTC+09:30</li><li>UTC+10:00</li><li>UTC+11:00</li><li>UTC+12:00</li><li>UTC+13:00</li></ul>
 * @method string getDSLFilter() Obtain <p>Pre-filtering process - perform pre-filtering on the original data written to COS</p>
 * @method void setDSLFilter(string $DSLFilter) Set <p>Pre-filtering process - perform pre-filtering on the original data written to COS</p>
 */
class CreateShipperRequest extends AbstractModel
{
    /**
     * @var string <p>Log topic Id belonging to the created shipping rule.</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
     */
    public $TopicId;

    /**
     * @var string <p>COS bucket, see the supported <a href="https://www.tencentcloud.com/document/product/436/13312?from_cn_redirect=1">bucket naming conventions</a>.</p><ul><li>Retrieve COS buckets via <a href="https://www.tencentcloud.com/document/product/436/8291?from_cn_redirect=1">GET Service (List Buckets)</a>.</li></ul>
     */
    public $Bucket;

    /**
     * @var string <p>New directory prefix delivered by the Shipping Rule.</p><ul><li>Only supports 0-9A-Za-z-_/</li><li>Supports up to 256 characters</li></ul>
     */
    public $Prefix;

    /**
     * @var string <p>Shipping rule name. Supports a maximum of 255 characters.</p>
     */
    public $ShipperName;

    /**
     * @var integer <p>Shipping time interval in seconds. Default: 300. Range: 300-900.</p>
     */
    public $Interval;

    /**
     * @var integer <p>Maximum value of delivered files in MB. Default: 256. Range: 5-256.</p>
     */
    public $MaxSize;

    /**
     * @var array <p>Filter rules for log shipping. Matched logs are shipped. The relationship between the rules is and. Up to 5 rules are allowed. An empty array indicates all logs are shipped without filtering.</p>
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
     * @var integer <p>Delivery file naming configuration. 0: Random number naming, 1: Delivery time naming. Default: 0 (Random number naming).</p>
     */
    public $FilenameMode;

    /**
     * @var integer <p>Starting point of the data shipping range (Unix second-level timestamp). It cannot exceed the starting point of the log topic's lifecycle.<br>If not filled in by the user, it defaults to the time when the user creates the shipping task.</p>
     */
    public $StartTime;

    /**
     * @var integer <p>End time point of the data shipping range (unix second-level timestamp). It cannot be in the future.<br>If not filled in by the user, it defaults to continuous shipping, unlimited.</p>
     */
    public $EndTime;

    /**
     * @var string <p>The storage type of an object. Default value is STANDARD. For enumeration values, please refer to the <a href="https://www.tencentcloud.com/document/product/436/33417?from_cn_redirect=1">storage type overview</a> document.<br>Reference values include:</p><ul><li>STANDARD: standard storage</li><li>STANDARD_IA: infrequent storage</li><li>ARCHIVE: archive storage</li><li>DEEP_ARCHIVE: deep archive storage</li><li>MAZ_STANDARD: standard storage (multi-AZ)</li><li>MAZ_STANDARD_IA: infrequent storage (multi-AZ)</li><li>INTELLIGENT_TIERING: intelligent tiering storage</li><li>MAZ_INTELLIGENT_TIERING: intelligent tiering storage (multi-AZ)</li></ul>
     */
    public $StorageType;

    /**
     * @var string <p>Role ARN <a href="https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1">Create role</a></p>
     */
    public $RoleArn;

    /**
     * @var string <p>External ID</p>
     */
    public $ExternalId;

    /**
     * @var string <p>Used to generate time variables in the file path shipped to COS.</p><p>Input limit: Support the following time zone list.</p><ul><li>GMT-12:00</li><li>GMT-11:00</li><li>GMT-10:00</li><li>GMT-09:30</li><li>GMT-09:00</li><li>GMT-08:00</li><li>GMT-07:00</li><li>GMT-06:00</li><li>GMT-05:00</li><li>GMT-04:00</li><li>GMT-03:30</li><li>GMT-03:00</li><li>GMT-02:00</li><li>GMT-01:00</li><li>GMT+00:00</li><li>GMT+01:00</li><li>GMT+02:00</li><li>GMT+03:30</li><li>GMT+04:00</li><li>GMT+04:30</li><li>GMT+05:00</li><li>GMT+05:30</li><li>GMT+05:45</li><li>GMT+06:00</li><li>GMT+06:30</li><li>GMT+07:00</li><li>GMT+08:00</li><li>GMT+09:00</li><li>GMT+09:30</li><li>GMT+10:00</li><li>GMT+10:30</li><li>GMT+11:00</li><li>GMT+11:30</li><li>GMT+12:00</li><li>GMT+12:45</li><li>GMT+13:00</li><li>GMT+14:00</li><li>UTC-11:00</li><li>UTC-10:00</li><li>UTC-09:00</li><li>UTC-08:00</li><li>UTC-12:00</li><li>UTC-07:00</li><li>UTC-06:00</li><li>UTC-05:00</li><li>UTC-04:30</li><li>UTC-04:00</li><li>UTC-03:30</li><li>UTC-03:00</li><li>UTC-02:00</li><li>UTC-01:00</li><li>UTC+00:00</li><li>UTC+01:00</li><li>UTC+02:00</li><li>UTC+03:00</li><li>UTC+03:30</li><li>UTC+04:00</li><li>UTC+04:30</li><li>UTC+05:00</li><li>UTC+05:45</li><li>UTC+06:00</li><li>UTC+06:30</li><li>UTC+07:00</li><li>UTC+08:00</li><li>UTC+09:00</li><li>UTC+09:30</li><li>UTC+10:00</li><li>UTC+11:00</li><li>UTC+12:00</li><li>UTC+13:00</li></ul>
     */
    public $TimeZone;

    /**
     * @var string <p>Pre-filtering process - perform pre-filtering on the original data written to COS</p>
     */
    public $DSLFilter;

    /**
     * @param string $TopicId <p>Log topic Id belonging to the created shipping rule.</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
     * @param string $Bucket <p>COS bucket, see the supported <a href="https://www.tencentcloud.com/document/product/436/13312?from_cn_redirect=1">bucket naming conventions</a>.</p><ul><li>Retrieve COS buckets via <a href="https://www.tencentcloud.com/document/product/436/8291?from_cn_redirect=1">GET Service (List Buckets)</a>.</li></ul>
     * @param string $Prefix <p>New directory prefix delivered by the Shipping Rule.</p><ul><li>Only supports 0-9A-Za-z-_/</li><li>Supports up to 256 characters</li></ul>
     * @param string $ShipperName <p>Shipping rule name. Supports a maximum of 255 characters.</p>
     * @param integer $Interval <p>Shipping time interval in seconds. Default: 300. Range: 300-900.</p>
     * @param integer $MaxSize <p>Maximum value of delivered files in MB. Default: 256. Range: 5-256.</p>
     * @param array $FilterRules <p>Filter rules for log shipping. Matched logs are shipped. The relationship between the rules is and. Up to 5 rules are allowed. An empty array indicates all logs are shipped without filtering.</p>
     * @param string $Partition <p>Partition rules for log shipping support strftime time format representation</p>
     * @param CompressInfo $Compress <p>Compression configuration of shipped logs</p>
     * @param ContentInfo $Content <p>Content format configuration for shipped logs</p>
     * @param integer $FilenameMode <p>Delivery file naming configuration. 0: Random number naming, 1: Delivery time naming. Default: 0 (Random number naming).</p>
     * @param integer $StartTime <p>Starting point of the data shipping range (Unix second-level timestamp). It cannot exceed the starting point of the log topic's lifecycle.<br>If not filled in by the user, it defaults to the time when the user creates the shipping task.</p>
     * @param integer $EndTime <p>End time point of the data shipping range (unix second-level timestamp). It cannot be in the future.<br>If not filled in by the user, it defaults to continuous shipping, unlimited.</p>
     * @param string $StorageType <p>The storage type of an object. Default value is STANDARD. For enumeration values, please refer to the <a href="https://www.tencentcloud.com/document/product/436/33417?from_cn_redirect=1">storage type overview</a> document.<br>Reference values include:</p><ul><li>STANDARD: standard storage</li><li>STANDARD_IA: infrequent storage</li><li>ARCHIVE: archive storage</li><li>DEEP_ARCHIVE: deep archive storage</li><li>MAZ_STANDARD: standard storage (multi-AZ)</li><li>MAZ_STANDARD_IA: infrequent storage (multi-AZ)</li><li>INTELLIGENT_TIERING: intelligent tiering storage</li><li>MAZ_INTELLIGENT_TIERING: intelligent tiering storage (multi-AZ)</li></ul>
     * @param string $RoleArn <p>Role ARN <a href="https://www.tencentcloud.com/document/product/598/19381?from_cn_redirect=1">Create role</a></p>
     * @param string $ExternalId <p>External ID</p>
     * @param string $TimeZone <p>Used to generate time variables in the file path shipped to COS.</p><p>Input limit: Support the following time zone list.</p><ul><li>GMT-12:00</li><li>GMT-11:00</li><li>GMT-10:00</li><li>GMT-09:30</li><li>GMT-09:00</li><li>GMT-08:00</li><li>GMT-07:00</li><li>GMT-06:00</li><li>GMT-05:00</li><li>GMT-04:00</li><li>GMT-03:30</li><li>GMT-03:00</li><li>GMT-02:00</li><li>GMT-01:00</li><li>GMT+00:00</li><li>GMT+01:00</li><li>GMT+02:00</li><li>GMT+03:30</li><li>GMT+04:00</li><li>GMT+04:30</li><li>GMT+05:00</li><li>GMT+05:30</li><li>GMT+05:45</li><li>GMT+06:00</li><li>GMT+06:30</li><li>GMT+07:00</li><li>GMT+08:00</li><li>GMT+09:00</li><li>GMT+09:30</li><li>GMT+10:00</li><li>GMT+10:30</li><li>GMT+11:00</li><li>GMT+11:30</li><li>GMT+12:00</li><li>GMT+12:45</li><li>GMT+13:00</li><li>GMT+14:00</li><li>UTC-11:00</li><li>UTC-10:00</li><li>UTC-09:00</li><li>UTC-08:00</li><li>UTC-12:00</li><li>UTC-07:00</li><li>UTC-06:00</li><li>UTC-05:00</li><li>UTC-04:30</li><li>UTC-04:00</li><li>UTC-03:30</li><li>UTC-03:00</li><li>UTC-02:00</li><li>UTC-01:00</li><li>UTC+00:00</li><li>UTC+01:00</li><li>UTC+02:00</li><li>UTC+03:00</li><li>UTC+03:30</li><li>UTC+04:00</li><li>UTC+04:30</li><li>UTC+05:00</li><li>UTC+05:45</li><li>UTC+06:00</li><li>UTC+06:30</li><li>UTC+07:00</li><li>UTC+08:00</li><li>UTC+09:00</li><li>UTC+09:30</li><li>UTC+10:00</li><li>UTC+11:00</li><li>UTC+12:00</li><li>UTC+13:00</li></ul>
     * @param string $DSLFilter <p>Pre-filtering process - perform pre-filtering on the original data written to COS</p>
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

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("DSLFilter",$param) and $param["DSLFilter"] !== null) {
            $this->DSLFilter = $param["DSLFilter"];
        }
    }
}
