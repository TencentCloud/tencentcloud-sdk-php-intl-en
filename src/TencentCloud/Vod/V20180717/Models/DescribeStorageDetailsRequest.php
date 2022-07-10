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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStorageDetails request structure.
 *
 * @method string getStartTime() Obtain Start time in ISO 8601 format. For more information, please see [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method void setStartTime(string $StartTime) Set Start time in ISO 8601 format. For more information, please see [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method string getEndTime() Obtain End time in ISO 8601 format, which should be larger than the start time. For more information, please see [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method void setEndTime(string $EndTime) Set End time in ISO 8601 format, which should be larger than the start time. For more information, please see [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method integer getSubAppId() Obtain <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
You can set this parameter to 1 to query the total usage of all applications (including the primary application) as an admin.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
You can set this parameter to 1 to query the total usage of all applications (including the primary application) as an admin.</b>
 * @method string getInterval() Obtain Time granularity. Valid values:
<li>Minute: 5-minute granularity</li>
<li>Day: 1-day granularity</li>
The value is set according to query period length by default. 5-minute granularity is set for periods no longer than 1 day, and 1-day granularity is set for periods longer than 1 day.
 * @method void setInterval(string $Interval) Set Time granularity. Valid values:
<li>Minute: 5-minute granularity</li>
<li>Day: 1-day granularity</li>
The value is set according to query period length by default. 5-minute granularity is set for periods no longer than 1 day, and 1-day granularity is set for periods longer than 1 day.
 * @method string getStorageType() Obtain Storage class to query. Valid values:
<li>`TotalStorage`: total storage usage in classes of STANDARD, STANDARD_IA, ARCHIVE, and DEEP ARCHIVE, excluding the storage usage for data deleted in advance.</li>
<li>`StandardStorage`: STANDARD</li>
<li>`InfrequentStorage`: STANDARD_IA</li>
<li>`ArchiveStorage`: ARCHIVE</li>
<li>`DeepArchiveStorage`: DEEP ARCHIVE</li>
<li>`DeletedInfrequentStorage`: STANDARD_IA data deleted in advance</li>
<li>`DeletedArchiveStorage`: ARCHIVE data deleted in advance</li>
<li>`DeletedDeepArchiveStorage`: DEEP ARCHIVE data deleted in advance</li>
<li>`ArchiveStandardRetrieval`: ARCHIVE data retrieved using standard retrievals</li>
<li>`ArchiveExpeditedRetrieval`: ARCHIVE data retrieved using expedited retrievals</li>
<li>`ArchiveBulkRetrieval`: ARCHIVE data retrieved using bulk retrievals</li>
<li>`DeepArchiveStandardRetrieval`: DEEP ARCHIVE data retrieved using standard retrievals</li>
<li>`DeepArchiveBulkRetrieval`: DEEP ARCHIVE data retrieved using bulk retrievals</li>
Default value: `TotalStorage`
 * @method void setStorageType(string $StorageType) Set Storage class to query. Valid values:
<li>`TotalStorage`: total storage usage in classes of STANDARD, STANDARD_IA, ARCHIVE, and DEEP ARCHIVE, excluding the storage usage for data deleted in advance.</li>
<li>`StandardStorage`: STANDARD</li>
<li>`InfrequentStorage`: STANDARD_IA</li>
<li>`ArchiveStorage`: ARCHIVE</li>
<li>`DeepArchiveStorage`: DEEP ARCHIVE</li>
<li>`DeletedInfrequentStorage`: STANDARD_IA data deleted in advance</li>
<li>`DeletedArchiveStorage`: ARCHIVE data deleted in advance</li>
<li>`DeletedDeepArchiveStorage`: DEEP ARCHIVE data deleted in advance</li>
<li>`ArchiveStandardRetrieval`: ARCHIVE data retrieved using standard retrievals</li>
<li>`ArchiveExpeditedRetrieval`: ARCHIVE data retrieved using expedited retrievals</li>
<li>`ArchiveBulkRetrieval`: ARCHIVE data retrieved using bulk retrievals</li>
<li>`DeepArchiveStandardRetrieval`: DEEP ARCHIVE data retrieved using standard retrievals</li>
<li>`DeepArchiveBulkRetrieval`: DEEP ARCHIVE data retrieved using bulk retrievals</li>
Default value: `TotalStorage`
 * @method string getArea() Obtain Storage region to query. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
Default value: Chinese Mainland
 * @method void setArea(string $Area) Set Storage region to query. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
Default value: Chinese Mainland
 */
class DescribeStorageDetailsRequest extends AbstractModel
{
    /**
     * @var string Start time in ISO 8601 format. For more information, please see [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     */
    public $StartTime;

    /**
     * @var string End time in ISO 8601 format, which should be larger than the start time. For more information, please see [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     */
    public $EndTime;

    /**
     * @var integer <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
You can set this parameter to 1 to query the total usage of all applications (including the primary application) as an admin.</b>
     */
    public $SubAppId;

    /**
     * @var string Time granularity. Valid values:
<li>Minute: 5-minute granularity</li>
<li>Day: 1-day granularity</li>
The value is set according to query period length by default. 5-minute granularity is set for periods no longer than 1 day, and 1-day granularity is set for periods longer than 1 day.
     */
    public $Interval;

    /**
     * @var string Storage class to query. Valid values:
<li>`TotalStorage`: total storage usage in classes of STANDARD, STANDARD_IA, ARCHIVE, and DEEP ARCHIVE, excluding the storage usage for data deleted in advance.</li>
<li>`StandardStorage`: STANDARD</li>
<li>`InfrequentStorage`: STANDARD_IA</li>
<li>`ArchiveStorage`: ARCHIVE</li>
<li>`DeepArchiveStorage`: DEEP ARCHIVE</li>
<li>`DeletedInfrequentStorage`: STANDARD_IA data deleted in advance</li>
<li>`DeletedArchiveStorage`: ARCHIVE data deleted in advance</li>
<li>`DeletedDeepArchiveStorage`: DEEP ARCHIVE data deleted in advance</li>
<li>`ArchiveStandardRetrieval`: ARCHIVE data retrieved using standard retrievals</li>
<li>`ArchiveExpeditedRetrieval`: ARCHIVE data retrieved using expedited retrievals</li>
<li>`ArchiveBulkRetrieval`: ARCHIVE data retrieved using bulk retrievals</li>
<li>`DeepArchiveStandardRetrieval`: DEEP ARCHIVE data retrieved using standard retrievals</li>
<li>`DeepArchiveBulkRetrieval`: DEEP ARCHIVE data retrieved using bulk retrievals</li>
Default value: `TotalStorage`
     */
    public $StorageType;

    /**
     * @var string Storage region to query. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
Default value: Chinese Mainland
     */
    public $Area;

    /**
     * @param string $StartTime Start time in ISO 8601 format. For more information, please see [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     * @param string $EndTime End time in ISO 8601 format, which should be larger than the start time. For more information, please see [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     * @param integer $SubAppId <b>The VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
You can set this parameter to 1 to query the total usage of all applications (including the primary application) as an admin.</b>
     * @param string $Interval Time granularity. Valid values:
<li>Minute: 5-minute granularity</li>
<li>Day: 1-day granularity</li>
The value is set according to query period length by default. 5-minute granularity is set for periods no longer than 1 day, and 1-day granularity is set for periods longer than 1 day.
     * @param string $StorageType Storage class to query. Valid values:
<li>`TotalStorage`: total storage usage in classes of STANDARD, STANDARD_IA, ARCHIVE, and DEEP ARCHIVE, excluding the storage usage for data deleted in advance.</li>
<li>`StandardStorage`: STANDARD</li>
<li>`InfrequentStorage`: STANDARD_IA</li>
<li>`ArchiveStorage`: ARCHIVE</li>
<li>`DeepArchiveStorage`: DEEP ARCHIVE</li>
<li>`DeletedInfrequentStorage`: STANDARD_IA data deleted in advance</li>
<li>`DeletedArchiveStorage`: ARCHIVE data deleted in advance</li>
<li>`DeletedDeepArchiveStorage`: DEEP ARCHIVE data deleted in advance</li>
<li>`ArchiveStandardRetrieval`: ARCHIVE data retrieved using standard retrievals</li>
<li>`ArchiveExpeditedRetrieval`: ARCHIVE data retrieved using expedited retrievals</li>
<li>`ArchiveBulkRetrieval`: ARCHIVE data retrieved using bulk retrievals</li>
<li>`DeepArchiveStandardRetrieval`: DEEP ARCHIVE data retrieved using standard retrievals</li>
<li>`DeepArchiveBulkRetrieval`: DEEP ARCHIVE data retrieved using bulk retrievals</li>
Default value: `TotalStorage`
     * @param string $Area Storage region to query. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
Default value: Chinese Mainland
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
