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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource pack details
 *
 * @method integer getAppId() Obtain Account ID of `AppId` Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set Account ID of `AppId` Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPackageId() Obtain The unique ID of a resource pack Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageId(string $PackageId) Set The unique ID of a resource pack Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getSuccessDeductSpec() Obtain The successfully deducted capacity Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuccessDeductSpec(float $SuccessDeductSpec) Set The successfully deducted capacity Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getPackageTotalUsedSpec() Obtain Used capacity of a resource pack as of now Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageTotalUsedSpec(float $PackageTotalUsedSpec) Set Used capacity of a resource pack as of now Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Deduction start time Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Deduction start time Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Deduction end time Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Deduction end time Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtendInfo() Obtain Extended information Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtendInfo(string $ExtendInfo) Set Extended information Note: This field may return null, indicating that no valid values can be obtained.
 */
class PackageDetail extends AbstractModel
{
    /**
     * @var integer Account ID of `AppId` Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string The unique ID of a resource pack Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageId;

    /**
     * @var string Instance ID Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var float The successfully deducted capacity Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuccessDeductSpec;

    /**
     * @var float Used capacity of a resource pack as of now Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageTotalUsedSpec;

    /**
     * @var string Deduction start time Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Deduction end time Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Extended information Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtendInfo;

    /**
     * @param integer $AppId Account ID of `AppId` Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PackageId The unique ID of a resource pack Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $SuccessDeductSpec The successfully deducted capacity Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $PackageTotalUsedSpec Used capacity of a resource pack as of now Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Deduction start time Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Deduction end time Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExtendInfo Extended information Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SuccessDeductSpec",$param) and $param["SuccessDeductSpec"] !== null) {
            $this->SuccessDeductSpec = $param["SuccessDeductSpec"];
        }

        if (array_key_exists("PackageTotalUsedSpec",$param) and $param["PackageTotalUsedSpec"] !== null) {
            $this->PackageTotalUsedSpec = $param["PackageTotalUsedSpec"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExtendInfo",$param) and $param["ExtendInfo"] !== null) {
            $this->ExtendInfo = $param["ExtendInfo"];
        }
    }
}
