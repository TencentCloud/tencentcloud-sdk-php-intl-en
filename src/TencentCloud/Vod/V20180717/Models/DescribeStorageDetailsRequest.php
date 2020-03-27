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
 * @method string getStartTime() Obtain Start time in ISO 8601 format. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setStartTime(string $StartTime) Set Start time in ISO 8601 format. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getEndTime() Obtain End time in ISO 8601 format, which must be after the start time. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setEndTime(string $EndTime) Set End time in ISO 8601 format, which must be after the start time. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method string getInterval() Obtain Query time interval. Valid values:
<li>Minute: once per minute.</li>
<li>Hour: once per hour.</li>
<li>Day: once per day.</li>
The default value is determined by the time span. `Minute` will be used if the time span is less than 1 hour, `Hour` if less than or equal to 7 days, and `Day` if more than 7 days.
 * @method void setInterval(string $Interval) Set Query time interval. Valid values:
<li>Minute: once per minute.</li>
<li>Hour: once per hour.</li>
<li>Day: once per day.</li>
The default value is determined by the time span. `Minute` will be used if the time span is less than 1 hour, `Hour` if less than or equal to 7 days, and `Day` if more than 7 days.
 * @method string getStorageType() Obtain Storage class to be queried. Valid values:
<li>TotalStorage: total storage capacity.</li>
<li>StandardStorage: Standard storage.</li>
<li>InfrequentStorage: Standard_IA storage.</li>
Default value: TotalStorage.
 * @method void setStorageType(string $StorageType) Set Storage class to be queried. Valid values:
<li>TotalStorage: total storage capacity.</li>
<li>StandardStorage: Standard storage.</li>
<li>InfrequentStorage: Standard_IA storage.</li>
Default value: TotalStorage.
 * @method integer getSubAppId() Obtain [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
When the value of this field is 1, the total usage of all subapplications (including primary application) are queried by an admin.
 * @method void setSubAppId(integer $SubAppId) Set [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
When the value of this field is 1, the total usage of all subapplications (including primary application) are queried by an admin.
 */

/**
 *DescribeStorageDetails request structure.
 */
class DescribeStorageDetailsRequest extends AbstractModel
{
    /**
     * @var string Start time in ISO 8601 format. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $StartTime;

    /**
     * @var string End time in ISO 8601 format, which must be after the start time. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $EndTime;

    /**
     * @var string Query time interval. Valid values:
<li>Minute: once per minute.</li>
<li>Hour: once per hour.</li>
<li>Day: once per day.</li>
The default value is determined by the time span. `Minute` will be used if the time span is less than 1 hour, `Hour` if less than or equal to 7 days, and `Day` if more than 7 days.
     */
    public $Interval;

    /**
     * @var string Storage class to be queried. Valid values:
<li>TotalStorage: total storage capacity.</li>
<li>StandardStorage: Standard storage.</li>
<li>InfrequentStorage: Standard_IA storage.</li>
Default value: TotalStorage.
     */
    public $StorageType;

    /**
     * @var integer [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
When the value of this field is 1, the total usage of all subapplications (including primary application) are queried by an admin.
     */
    public $SubAppId;
    /**
     * @param string $StartTime Start time in ISO 8601 format. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $EndTime End time in ISO 8601 format, which must be after the start time. For more information, please see [Notes on ISO Date Format](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     * @param string $Interval Query time interval. Valid values:
<li>Minute: once per minute.</li>
<li>Hour: once per hour.</li>
<li>Day: once per day.</li>
The default value is determined by the time span. `Minute` will be used if the time span is less than 1 hour, `Hour` if less than or equal to 7 days, and `Day` if more than 7 days.
     * @param string $StorageType Storage class to be queried. Valid values:
<li>TotalStorage: total storage capacity.</li>
<li>StandardStorage: Standard storage.</li>
<li>InfrequentStorage: Standard_IA storage.</li>
Default value: TotalStorage.
     * @param integer $SubAppId [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
When the value of this field is 1, the total usage of all subapplications (including primary application) are queried by an admin.
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

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
