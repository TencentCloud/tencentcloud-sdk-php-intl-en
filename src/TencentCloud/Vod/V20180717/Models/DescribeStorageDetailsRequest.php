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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStorageDetails request structure.
 *
 * @method string getStartTime() Obtain Start time in ISO 8601 format. See [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setStartTime(string $StartTime) Set Start time in ISO 8601 format. See [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method string getEndTime() Obtain End time, which should be greater than the start date. Format according to the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setEndTime(string $EndTime) Set End time, which should be greater than the start date. Format according to the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method string getInterval() Obtain Statistical time granularity. Valid values:
<li>Minute: 5 minutes.</li>
<li>Day: By day.</li>
The granularity is determined by the time span by default. If the time span is less than or equal to 1 day, the granularity is 5 minutes. If the time span is greater than 1 day, the granularity is 1 day.
 * @method void setInterval(string $Interval) Set Statistical time granularity. Valid values:
<li>Minute: 5 minutes.</li>
<li>Day: By day.</li>
The granularity is determined by the time span by default. If the time span is less than or equal to 1 day, the granularity is 5 minutes. If the time span is greater than 1 day, the granularity is 1 day.
 * @method string getStorageType() Obtain Storage type for query. Valid values:
<li>TotalStorage: total stored amount, the sum of standard, infrequent, archive, and deep archive storage capacity, excluding early deletion amount.</li>
<li>StandardStorage: standard storage.</li>
<li>InfrequentStorage: infrequent storage.</li>
<li>ArchiveStorage: archive storage.</li>
<li>DeepArchiveStorage: DEEP_ARCHIVE.</li>
<li>DeletedInfrequentStorage: Early deletion amount for infrequent storage.</li>
<li>DeletedArchiveStorage: early deletion amount for archive.</li>
<li>DeletedDeepArchiveStorage: early deletion amount for deep archive.</li>
<li>ArchiveStandardRetrieval: Archive standard retrieval amount.</li>
<li>ArchiveExpeditedRetrieval: Archive quick retrieval volume.</li>
<li>ArchiveBulkRetrieval: Archive batch retrieval amount.</li>
<li>DeepArchiveStandardRetrieval: Deep archive standard retrieval volume.</li>
<li>DeepArchiveBulkRetrieval: Deep archive batch retrieval amount.</li>
<li>InfrequentRetrieval: Infrequent storage retrieval volume.</li>
Default value: TotalStorage.
 * @method void setStorageType(string $StorageType) Set Storage type for query. Valid values:
<li>TotalStorage: total stored amount, the sum of standard, infrequent, archive, and deep archive storage capacity, excluding early deletion amount.</li>
<li>StandardStorage: standard storage.</li>
<li>InfrequentStorage: infrequent storage.</li>
<li>ArchiveStorage: archive storage.</li>
<li>DeepArchiveStorage: DEEP_ARCHIVE.</li>
<li>DeletedInfrequentStorage: Early deletion amount for infrequent storage.</li>
<li>DeletedArchiveStorage: early deletion amount for archive.</li>
<li>DeletedDeepArchiveStorage: early deletion amount for deep archive.</li>
<li>ArchiveStandardRetrieval: Archive standard retrieval amount.</li>
<li>ArchiveExpeditedRetrieval: Archive quick retrieval volume.</li>
<li>ArchiveBulkRetrieval: Archive batch retrieval amount.</li>
<li>DeepArchiveStandardRetrieval: Deep archive standard retrieval volume.</li>
<li>DeepArchiveBulkRetrieval: Deep archive batch retrieval amount.</li>
<li>InfrequentRetrieval: Infrequent storage retrieval volume.</li>
Default value: TotalStorage.
 * @method string getArea() Obtain Storage region for query. Valid values:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
Default value: Chinese Mainland.
 * @method void setArea(string $Area) Set Storage region for query. Valid values:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
Default value: Chinese Mainland.
 */
class DescribeStorageDetailsRequest extends AbstractModel
{
    /**
     * @var string Start time in ISO 8601 format. See [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $StartTime;

    /**
     * @var string End time, which should be greater than the start date. Format according to the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $EndTime;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var string Statistical time granularity. Valid values:
<li>Minute: 5 minutes.</li>
<li>Day: By day.</li>
The granularity is determined by the time span by default. If the time span is less than or equal to 1 day, the granularity is 5 minutes. If the time span is greater than 1 day, the granularity is 1 day.
     */
    public $Interval;

    /**
     * @var string Storage type for query. Valid values:
<li>TotalStorage: total stored amount, the sum of standard, infrequent, archive, and deep archive storage capacity, excluding early deletion amount.</li>
<li>StandardStorage: standard storage.</li>
<li>InfrequentStorage: infrequent storage.</li>
<li>ArchiveStorage: archive storage.</li>
<li>DeepArchiveStorage: DEEP_ARCHIVE.</li>
<li>DeletedInfrequentStorage: Early deletion amount for infrequent storage.</li>
<li>DeletedArchiveStorage: early deletion amount for archive.</li>
<li>DeletedDeepArchiveStorage: early deletion amount for deep archive.</li>
<li>ArchiveStandardRetrieval: Archive standard retrieval amount.</li>
<li>ArchiveExpeditedRetrieval: Archive quick retrieval volume.</li>
<li>ArchiveBulkRetrieval: Archive batch retrieval amount.</li>
<li>DeepArchiveStandardRetrieval: Deep archive standard retrieval volume.</li>
<li>DeepArchiveBulkRetrieval: Deep archive batch retrieval amount.</li>
<li>InfrequentRetrieval: Infrequent storage retrieval volume.</li>
Default value: TotalStorage.
     */
    public $StorageType;

    /**
     * @var string Storage region for query. Valid values:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
Default value: Chinese Mainland.
     */
    public $Area;

    /**
     * @param string $StartTime Start time in ISO 8601 format. See [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param string $EndTime End time, which should be greater than the start date. Format according to the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     * @param string $Interval Statistical time granularity. Valid values:
<li>Minute: 5 minutes.</li>
<li>Day: By day.</li>
The granularity is determined by the time span by default. If the time span is less than or equal to 1 day, the granularity is 5 minutes. If the time span is greater than 1 day, the granularity is 1 day.
     * @param string $StorageType Storage type for query. Valid values:
<li>TotalStorage: total stored amount, the sum of standard, infrequent, archive, and deep archive storage capacity, excluding early deletion amount.</li>
<li>StandardStorage: standard storage.</li>
<li>InfrequentStorage: infrequent storage.</li>
<li>ArchiveStorage: archive storage.</li>
<li>DeepArchiveStorage: DEEP_ARCHIVE.</li>
<li>DeletedInfrequentStorage: Early deletion amount for infrequent storage.</li>
<li>DeletedArchiveStorage: early deletion amount for archive.</li>
<li>DeletedDeepArchiveStorage: early deletion amount for deep archive.</li>
<li>ArchiveStandardRetrieval: Archive standard retrieval amount.</li>
<li>ArchiveExpeditedRetrieval: Archive quick retrieval volume.</li>
<li>ArchiveBulkRetrieval: Archive batch retrieval amount.</li>
<li>DeepArchiveStandardRetrieval: Deep archive standard retrieval volume.</li>
<li>DeepArchiveBulkRetrieval: Deep archive batch retrieval amount.</li>
<li>InfrequentRetrieval: Infrequent storage retrieval volume.</li>
Default value: TotalStorage.
     * @param string $Area Storage region for query. Valid values:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
Default value: Chinese Mainland.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
