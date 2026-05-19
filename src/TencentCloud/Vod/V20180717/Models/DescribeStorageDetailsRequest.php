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
 * @method string getStartTime() Obtain Start time. Format according to ISO 8601. For details, see the [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setStartTime(string $StartTime) Set Start time. Format according to ISO 8601. For details, see the [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method string getEndTime() Obtain End time, which must be greater than the start date. Format according to ISO 8601. For details, see the [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setEndTime(string $EndTime) Set End time, which must be greater than the start date. Format according to ISO 8601. For details, see the [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getInterval() Obtain Statistical time granularity. Valid values:
<li>Minute: 5 minutes.</li>
<li>Day: day.</li>
By default, the granularity is determined by the time span. It is 5 minutes for a duration of up to 1 day and day for over 1 day.
 * @method void setInterval(string $Interval) Set Statistical time granularity. Valid values:
<li>Minute: 5 minutes.</li>
<li>Day: day.</li>
By default, the granularity is determined by the time span. It is 5 minutes for a duration of up to 1 day and day for over 1 day.
 * @method string getStorageType() Obtain Storage type for query. Valid values:
<li>TotalStorage: Total stored amount, sum of standard, infrequent, archive, and deep archive storage capacity, excluding early deletion amount.</li>
<li>StandardStorage: Standard storage.</li>
<li>InfrequentStorage: Infrequent storage.</li>
<li>ArchiveStorage: Archive storage.</li>
<li>DeepArchiveStorage: deep archive storage.</li>
<li>DeletedInfrequentStorage: Early deletion amount of infrequent storage.</li>
<li>DeletedArchiveStorage: Early deletion amount of archive.</li>
<li>DeletedDeepArchiveStorage: Early deletion amount of deep archive.</li>
<li>ArchiveStandardRetrieval: Standard retrieval volume of archive.</li>
<li>ArchiveExpeditedRetrieval: Quick retrieval volume of archive.</li>
<li>ArchiveBulkRetrieval: Archive batch retrieval amount.</li>
<li>DeepArchiveStandardRetrieval: Deep archive standard retrieval.</li>
<li>DeepArchiveBulkRetrieval: Deep archive batch retrieval amount.</li>
<li>InfrequentRetrieval: Retrieval volume of infrequent storage.</li>
Default value: TotalStorage.
 * @method void setStorageType(string $StorageType) Set Storage type for query. Valid values:
<li>TotalStorage: Total stored amount, sum of standard, infrequent, archive, and deep archive storage capacity, excluding early deletion amount.</li>
<li>StandardStorage: Standard storage.</li>
<li>InfrequentStorage: Infrequent storage.</li>
<li>ArchiveStorage: Archive storage.</li>
<li>DeepArchiveStorage: deep archive storage.</li>
<li>DeletedInfrequentStorage: Early deletion amount of infrequent storage.</li>
<li>DeletedArchiveStorage: Early deletion amount of archive.</li>
<li>DeletedDeepArchiveStorage: Early deletion amount of deep archive.</li>
<li>ArchiveStandardRetrieval: Standard retrieval volume of archive.</li>
<li>ArchiveExpeditedRetrieval: Quick retrieval volume of archive.</li>
<li>ArchiveBulkRetrieval: Archive batch retrieval amount.</li>
<li>DeepArchiveStandardRetrieval: Deep archive standard retrieval.</li>
<li>DeepArchiveBulkRetrieval: Deep archive batch retrieval amount.</li>
<li>InfrequentRetrieval: Retrieval volume of infrequent storage.</li>
Default value: TotalStorage.
 * @method string getArea() Obtain Storage region for query. Valid value:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China) and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
Default value is Chinese Mainland.
 * @method void setArea(string $Area) Set Storage region for query. Valid value:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China) and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
Default value is Chinese Mainland.
 */
class DescribeStorageDetailsRequest extends AbstractModel
{
    /**
     * @var string Start time. Format according to ISO 8601. For details, see the [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $StartTime;

    /**
     * @var string End time, which must be greater than the start date. Format according to ISO 8601. For details, see the [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $EndTime;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Statistical time granularity. Valid values:
<li>Minute: 5 minutes.</li>
<li>Day: day.</li>
By default, the granularity is determined by the time span. It is 5 minutes for a duration of up to 1 day and day for over 1 day.
     */
    public $Interval;

    /**
     * @var string Storage type for query. Valid values:
<li>TotalStorage: Total stored amount, sum of standard, infrequent, archive, and deep archive storage capacity, excluding early deletion amount.</li>
<li>StandardStorage: Standard storage.</li>
<li>InfrequentStorage: Infrequent storage.</li>
<li>ArchiveStorage: Archive storage.</li>
<li>DeepArchiveStorage: deep archive storage.</li>
<li>DeletedInfrequentStorage: Early deletion amount of infrequent storage.</li>
<li>DeletedArchiveStorage: Early deletion amount of archive.</li>
<li>DeletedDeepArchiveStorage: Early deletion amount of deep archive.</li>
<li>ArchiveStandardRetrieval: Standard retrieval volume of archive.</li>
<li>ArchiveExpeditedRetrieval: Quick retrieval volume of archive.</li>
<li>ArchiveBulkRetrieval: Archive batch retrieval amount.</li>
<li>DeepArchiveStandardRetrieval: Deep archive standard retrieval.</li>
<li>DeepArchiveBulkRetrieval: Deep archive batch retrieval amount.</li>
<li>InfrequentRetrieval: Retrieval volume of infrequent storage.</li>
Default value: TotalStorage.
     */
    public $StorageType;

    /**
     * @var string Storage region for query. Valid value:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China) and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
Default value is Chinese Mainland.
     */
    public $Area;

    /**
     * @param string $StartTime Start time. Format according to ISO 8601. For details, see the [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param string $EndTime End time, which must be greater than the start date. Format according to ISO 8601. For details, see the [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Interval Statistical time granularity. Valid values:
<li>Minute: 5 minutes.</li>
<li>Day: day.</li>
By default, the granularity is determined by the time span. It is 5 minutes for a duration of up to 1 day and day for over 1 day.
     * @param string $StorageType Storage type for query. Valid values:
<li>TotalStorage: Total stored amount, sum of standard, infrequent, archive, and deep archive storage capacity, excluding early deletion amount.</li>
<li>StandardStorage: Standard storage.</li>
<li>InfrequentStorage: Infrequent storage.</li>
<li>ArchiveStorage: Archive storage.</li>
<li>DeepArchiveStorage: deep archive storage.</li>
<li>DeletedInfrequentStorage: Early deletion amount of infrequent storage.</li>
<li>DeletedArchiveStorage: Early deletion amount of archive.</li>
<li>DeletedDeepArchiveStorage: Early deletion amount of deep archive.</li>
<li>ArchiveStandardRetrieval: Standard retrieval volume of archive.</li>
<li>ArchiveExpeditedRetrieval: Quick retrieval volume of archive.</li>
<li>ArchiveBulkRetrieval: Archive batch retrieval amount.</li>
<li>DeepArchiveStandardRetrieval: Deep archive standard retrieval.</li>
<li>DeepArchiveBulkRetrieval: Deep archive batch retrieval amount.</li>
<li>InfrequentRetrieval: Retrieval volume of infrequent storage.</li>
Default value: TotalStorage.
     * @param string $Area Storage region for query. Valid value:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China) and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
Default value is Chinese Mainland.
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
