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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image scanning billing information.
 *
 * @method string getInquireKey() Obtain Billing item
 * @method void setInquireKey(string $InquireKey) Set Billing item
 * @method integer getCapcity() Obtain Total Capacity
 * @method void setCapcity(integer $Capcity) Set Total Capacity
 * @method integer getUseage() Obtain Used amount
 * @method void setUseage(integer $Useage) Set Used amount
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getPurchaseStatus() Obtain Billing status
Pending purchase
Normal: Normal.
Isolate
 * @method void setPurchaseStatus(string $PurchaseStatus) Set Billing status
Pending purchase
Normal: Normal.
Isolate
 * @method string getResourceID() Obtain Resource ID
 * @method void setResourceID(string $ResourceID) Set Resource ID
 * @method integer getPayNum() Obtain Number of purchased scans.
 * @method void setPayNum(integer $PayNum) Set Number of purchased scans.
 * @method integer getTrialNum() Obtain Number of trial scans.
 * @method void setTrialNum(integer $TrialNum) Set Number of trial scans.
 * @method integer getPayUsage() Obtain Number of purchased scanning operations that have been used.
 * @method void setPayUsage(integer $PayUsage) Set Number of purchased scanning operations that have been used.
 */
class ImageScanInquireInfo extends AbstractModel
{
    /**
     * @var string Billing item
     */
    public $InquireKey;

    /**
     * @var integer Total Capacity
     */
    public $Capcity;

    /**
     * @var integer Used amount
     */
    public $Useage;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Billing status
Pending purchase
Normal: Normal.
Isolate
     */
    public $PurchaseStatus;

    /**
     * @var string Resource ID
     */
    public $ResourceID;

    /**
     * @var integer Number of purchased scans.
     */
    public $PayNum;

    /**
     * @var integer Number of trial scans.
     */
    public $TrialNum;

    /**
     * @var integer Number of purchased scanning operations that have been used.
     */
    public $PayUsage;

    /**
     * @param string $InquireKey Billing item
     * @param integer $Capcity Total Capacity
     * @param integer $Useage Used amount
     * @param string $StartTime Start time.
     * @param string $EndTime End time
     * @param string $PurchaseStatus Billing status
Pending purchase
Normal: Normal.
Isolate
     * @param string $ResourceID Resource ID
     * @param integer $PayNum Number of purchased scans.
     * @param integer $TrialNum Number of trial scans.
     * @param integer $PayUsage Number of purchased scanning operations that have been used.
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
        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("Capcity",$param) and $param["Capcity"] !== null) {
            $this->Capcity = $param["Capcity"];
        }

        if (array_key_exists("Useage",$param) and $param["Useage"] !== null) {
            $this->Useage = $param["Useage"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PurchaseStatus",$param) and $param["PurchaseStatus"] !== null) {
            $this->PurchaseStatus = $param["PurchaseStatus"];
        }

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("PayNum",$param) and $param["PayNum"] !== null) {
            $this->PayNum = $param["PayNum"];
        }

        if (array_key_exists("TrialNum",$param) and $param["TrialNum"] !== null) {
            $this->TrialNum = $param["TrialNum"];
        }

        if (array_key_exists("PayUsage",$param) and $param["PayUsage"] !== null) {
            $this->PayUsage = $param["PayUsage"];
        }
    }
}
