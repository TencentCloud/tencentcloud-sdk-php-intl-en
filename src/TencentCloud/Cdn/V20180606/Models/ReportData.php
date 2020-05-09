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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDN report data
 *
 * @method string getResourceId() Obtain Project ID/domain name ID.
 * @method void setResourceId(string $ResourceId) Set Project ID/domain name ID.
 * @method string getResource() Obtain Project name/domain name.
 * @method void setResource(string $Resource) Set Project name/domain name.
 * @method integer getValue() Obtain Total traffic/max bandwidth in bytes and bps, respectively.
 * @method void setValue(integer $Value) Set Total traffic/max bandwidth in bytes and bps, respectively.
 * @method float getPercentage() Obtain Percentage of individual resource out of all resources.
 * @method void setPercentage(float $Percentage) Set Percentage of individual resource out of all resources.
 * @method integer getBillingValue() Obtain Total billable traffic/max billable bandwidth in bytes and bps, respectively.
 * @method void setBillingValue(integer $BillingValue) Set Total billable traffic/max billable bandwidth in bytes and bps, respectively.
 * @method float getBillingPercentage() Obtain Percentage of billable amount out of total amount.
 * @method void setBillingPercentage(float $BillingPercentage) Set Percentage of billable amount out of total amount.
 */
class ReportData extends AbstractModel
{
    /**
     * @var string Project ID/domain name ID.
     */
    public $ResourceId;

    /**
     * @var string Project name/domain name.
     */
    public $Resource;

    /**
     * @var integer Total traffic/max bandwidth in bytes and bps, respectively.
     */
    public $Value;

    /**
     * @var float Percentage of individual resource out of all resources.
     */
    public $Percentage;

    /**
     * @var integer Total billable traffic/max billable bandwidth in bytes and bps, respectively.
     */
    public $BillingValue;

    /**
     * @var float Percentage of billable amount out of total amount.
     */
    public $BillingPercentage;

    /**
     * @param string $ResourceId Project ID/domain name ID.
     * @param string $Resource Project name/domain name.
     * @param integer $Value Total traffic/max bandwidth in bytes and bps, respectively.
     * @param float $Percentage Percentage of individual resource out of all resources.
     * @param integer $BillingValue Total billable traffic/max billable bandwidth in bytes and bps, respectively.
     * @param float $BillingPercentage Percentage of billable amount out of total amount.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }

        if (array_key_exists("BillingValue",$param) and $param["BillingValue"] !== null) {
            $this->BillingValue = $param["BillingValue"];
        }

        if (array_key_exists("BillingPercentage",$param) and $param["BillingPercentage"] !== null) {
            $this->BillingPercentage = $param["BillingPercentage"];
        }
    }
}
