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
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getInterval() Obtain Time granularity. Valid values:
<li>Minute: 5-minute granularity</li>
<li>Day: 1-day granularity</li>
The value is set according to query period length by default. 5-minute granularity is set for periods no longer than 1 day, and 1-day granularity is set for periods longer than 1 day.
 * @method void setInterval(string $Interval) Set Time granularity. Valid values:
<li>Minute: 5-minute granularity</li>
<li>Day: 1-day granularity</li>
The value is set according to query period length by default. 5-minute granularity is set for periods no longer than 1 day, and 1-day granularity is set for periods longer than 1 day.
 * @method string getStorageType() Obtain Queryed storage type, valid values:
<li>TotalStorage: total storage amount, the sum of standard, low-frequency, archive and deep archive storage amounts, excluding early deletion amount. </li>
<li>StandardStorage: Standard storage. </li>
<li>InfrequentStorage: low-frequency storage. </li>
<li>ArchiveStorage: archive storage. </li>
<li>DeepArchiveStorage: deep archive storage. </li>
<li>DeletedInfrequentStorage: The amount of early deletion of low-frequency storage. </li>
<li>DeletedArchiveStorage: The amount of archives deleted in advance. </li>
<li>DeletedDeepArchiveStorage: The amount of deep archive deletion in advance. 
<li>ArchiveStandardRetrieval: Archive standard retrieval amount. </li>
<li>ArchiveExpeditedRetrieval: archive quick retrieval amount. </li>
<li>ArchiveBulkRetrieval: Archive batch retrieval amount. </li>
<li>DeepArchiveStandardRetrieval: Deep archive standard retrieval amount. </li>
<li>DeepArchiveBulkRetrieval: Deep archive batch retrieval amount. </li>
<li>InfrequentRetrieval: Low-frequency storage retrieval amount. </li>
The default value is TotalStorage.
 * @method void setStorageType(string $StorageType) Set Queryed storage type, valid values:
<li>TotalStorage: total storage amount, the sum of standard, low-frequency, archive and deep archive storage amounts, excluding early deletion amount. </li>
<li>StandardStorage: Standard storage. </li>
<li>InfrequentStorage: low-frequency storage. </li>
<li>ArchiveStorage: archive storage. </li>
<li>DeepArchiveStorage: deep archive storage. </li>
<li>DeletedInfrequentStorage: The amount of early deletion of low-frequency storage. </li>
<li>DeletedArchiveStorage: The amount of archives deleted in advance. </li>
<li>DeletedDeepArchiveStorage: The amount of deep archive deletion in advance. 
<li>ArchiveStandardRetrieval: Archive standard retrieval amount. </li>
<li>ArchiveExpeditedRetrieval: archive quick retrieval amount. </li>
<li>ArchiveBulkRetrieval: Archive batch retrieval amount. </li>
<li>DeepArchiveStandardRetrieval: Deep archive standard retrieval amount. </li>
<li>DeepArchiveBulkRetrieval: Deep archive batch retrieval amount. </li>
<li>InfrequentRetrieval: Low-frequency storage retrieval amount. </li>
The default value is TotalStorage.
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
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
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
     * @var string Queryed storage type, valid values:
<li>TotalStorage: total storage amount, the sum of standard, low-frequency, archive and deep archive storage amounts, excluding early deletion amount. </li>
<li>StandardStorage: Standard storage. </li>
<li>InfrequentStorage: low-frequency storage. </li>
<li>ArchiveStorage: archive storage. </li>
<li>DeepArchiveStorage: deep archive storage. </li>
<li>DeletedInfrequentStorage: The amount of early deletion of low-frequency storage. </li>
<li>DeletedArchiveStorage: The amount of archives deleted in advance. </li>
<li>DeletedDeepArchiveStorage: The amount of deep archive deletion in advance. 
<li>ArchiveStandardRetrieval: Archive standard retrieval amount. </li>
<li>ArchiveExpeditedRetrieval: archive quick retrieval amount. </li>
<li>ArchiveBulkRetrieval: Archive batch retrieval amount. </li>
<li>DeepArchiveStandardRetrieval: Deep archive standard retrieval amount. </li>
<li>DeepArchiveBulkRetrieval: Deep archive batch retrieval amount. </li>
<li>InfrequentRetrieval: Low-frequency storage retrieval amount. </li>
The default value is TotalStorage.
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
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Interval Time granularity. Valid values:
<li>Minute: 5-minute granularity</li>
<li>Day: 1-day granularity</li>
The value is set according to query period length by default. 5-minute granularity is set for periods no longer than 1 day, and 1-day granularity is set for periods longer than 1 day.
     * @param string $StorageType Queryed storage type, valid values:
<li>TotalStorage: total storage amount, the sum of standard, low-frequency, archive and deep archive storage amounts, excluding early deletion amount. </li>
<li>StandardStorage: Standard storage. </li>
<li>InfrequentStorage: low-frequency storage. </li>
<li>ArchiveStorage: archive storage. </li>
<li>DeepArchiveStorage: deep archive storage. </li>
<li>DeletedInfrequentStorage: The amount of early deletion of low-frequency storage. </li>
<li>DeletedArchiveStorage: The amount of archives deleted in advance. </li>
<li>DeletedDeepArchiveStorage: The amount of deep archive deletion in advance. 
<li>ArchiveStandardRetrieval: Archive standard retrieval amount. </li>
<li>ArchiveExpeditedRetrieval: archive quick retrieval amount. </li>
<li>ArchiveBulkRetrieval: Archive batch retrieval amount. </li>
<li>DeepArchiveStandardRetrieval: Deep archive standard retrieval amount. </li>
<li>DeepArchiveBulkRetrieval: Deep archive batch retrieval amount. </li>
<li>InfrequentRetrieval: Low-frequency storage retrieval amount. </li>
The default value is TotalStorage.
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
