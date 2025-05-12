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
 * @method integer getAppId() Obtain AppId account ID.
 * @method void setAppId(integer $AppId) Set AppId account ID.
 * @method string getPackageId() Obtain The unique ID of the resource package.
 * @method void setPackageId(string $PackageId) Set The unique ID of the resource package.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method float getSuccessDeductSpec() Obtain Successfully deduct capacity.
 * @method void setSuccessDeductSpec(float $SuccessDeductSpec) Set Successfully deduct capacity.
 * @method float getPackageTotalUsedSpec() Obtain The used capacity of the resource package up to the present.
 * @method void setPackageTotalUsedSpec(float $PackageTotalUsedSpec) Set The used capacity of the resource package up to the present.
 * @method string getStartTime() Obtain Deduction start time.
 * @method void setStartTime(string $StartTime) Set Deduction start time.
 * @method string getEndTime() Obtain Deduction end time.
 * @method void setEndTime(string $EndTime) Set Deduction end time.
 * @method string getExtendInfo() Obtain Extension Information
 * @method void setExtendInfo(string $ExtendInfo) Set Extension Information
 */
class PackageDetail extends AbstractModel
{
    /**
     * @var integer AppId account ID.
     */
    public $AppId;

    /**
     * @var string The unique ID of the resource package.
     */
    public $PackageId;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var float Successfully deduct capacity.
     */
    public $SuccessDeductSpec;

    /**
     * @var float The used capacity of the resource package up to the present.
     */
    public $PackageTotalUsedSpec;

    /**
     * @var string Deduction start time.
     */
    public $StartTime;

    /**
     * @var string Deduction end time.
     */
    public $EndTime;

    /**
     * @var string Extension Information
     */
    public $ExtendInfo;

    /**
     * @param integer $AppId AppId account ID.
     * @param string $PackageId The unique ID of the resource package.
     * @param string $InstanceId Instance ID
     * @param float $SuccessDeductSpec Successfully deduct capacity.
     * @param float $PackageTotalUsedSpec The used capacity of the resource package up to the present.
     * @param string $StartTime Deduction start time.
     * @param string $EndTime Deduction end time.
     * @param string $ExtendInfo Extension Information
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
