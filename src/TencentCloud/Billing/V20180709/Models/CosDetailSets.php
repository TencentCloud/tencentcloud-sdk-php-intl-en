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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about the data structure of the returned COS usage details
 *
 * @method string getBucketName() Obtain Bucket name
 * @method void setBucketName(string $BucketName) Set Bucket name
 * @method string getDosageBeginTime() Obtain The start time of the usage
 * @method void setDosageBeginTime(string $DosageBeginTime) Set The start time of the usage
 * @method string getDosageEndTime() Obtain The end time of the usage
 * @method void setDosageEndTime(string $DosageEndTime) Set The end time of the usage
 * @method string getSubProductCodeName() Obtain Subproduct name
 * @method void setSubProductCodeName(string $SubProductCodeName) Set Subproduct name
 * @method string getBillingItemCodeName() Obtain Billable item name
 * @method void setBillingItemCodeName(string $BillingItemCodeName) Set Billable item name
 * @method string getDosageValue() Obtain Usage
 * @method void setDosageValue(string $DosageValue) Set Usage
 * @method string getUnit() Obtain Unit of the billable item
 * @method void setUnit(string $Unit) Set Unit of the billable item
 */
class CosDetailSets extends AbstractModel
{
    /**
     * @var string Bucket name
     */
    public $BucketName;

    /**
     * @var string The start time of the usage
     */
    public $DosageBeginTime;

    /**
     * @var string The end time of the usage
     */
    public $DosageEndTime;

    /**
     * @var string Subproduct name
     */
    public $SubProductCodeName;

    /**
     * @var string Billable item name
     */
    public $BillingItemCodeName;

    /**
     * @var string Usage
     */
    public $DosageValue;

    /**
     * @var string Unit of the billable item
     */
    public $Unit;

    /**
     * @param string $BucketName Bucket name
     * @param string $DosageBeginTime The start time of the usage
     * @param string $DosageEndTime The end time of the usage
     * @param string $SubProductCodeName Subproduct name
     * @param string $BillingItemCodeName Billable item name
     * @param string $DosageValue Usage
     * @param string $Unit Unit of the billable item
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
        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("DosageBeginTime",$param) and $param["DosageBeginTime"] !== null) {
            $this->DosageBeginTime = $param["DosageBeginTime"];
        }

        if (array_key_exists("DosageEndTime",$param) and $param["DosageEndTime"] !== null) {
            $this->DosageEndTime = $param["DosageEndTime"];
        }

        if (array_key_exists("SubProductCodeName",$param) and $param["SubProductCodeName"] !== null) {
            $this->SubProductCodeName = $param["SubProductCodeName"];
        }

        if (array_key_exists("BillingItemCodeName",$param) and $param["BillingItemCodeName"] !== null) {
            $this->BillingItemCodeName = $param["BillingItemCodeName"];
        }

        if (array_key_exists("DosageValue",$param) and $param["DosageValue"] !== null) {
            $this->DosageValue = $param["DosageValue"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
