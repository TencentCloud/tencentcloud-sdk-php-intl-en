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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a traffic package
 *
 * @method string getTrafficPackageId() Obtain Unique traffic package ID
 * @method void setTrafficPackageId(string $TrafficPackageId) Set Unique traffic package ID
 * @method string getTrafficPackageName() Obtain Traffic package name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTrafficPackageName(string $TrafficPackageName) Set Traffic package name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getTotalAmount() Obtain Traffic package size in GB
 * @method void setTotalAmount(float $TotalAmount) Set Traffic package size in GB
 * @method float getRemainingAmount() Obtain Traffic package balance in GB
 * @method void setRemainingAmount(float $RemainingAmount) Set Traffic package balance in GB
 * @method string getStatus() Obtain Traffic package status. Valid values: `AVAILABLE`, `EXPIRED`, `EXHAUSTED`, `REFUNDED`, `DELETED`
 * @method void setStatus(string $Status) Set Traffic package status. Valid values: `AVAILABLE`, `EXPIRED`, `EXHAUSTED`, `REFUNDED`, `DELETED`
 * @method string getCreatedTime() Obtain Traffic package creation time
 * @method void setCreatedTime(string $CreatedTime) Set Traffic package creation time
 * @method string getDeadline() Obtain Traffic package expiration time
 * @method void setDeadline(string $Deadline) Set Traffic package expiration time
 * @method float getUsedAmount() Obtain Used traffic in GB
 * @method void setUsedAmount(float $UsedAmount) Set Used traffic in GB
 * @method array getTagSet() Obtain Traffic package tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagSet(array $TagSet) Set Traffic package tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDeductType() Obtain Traffic package type (idle-time or full-time)
 * @method void setDeductType(string $DeductType) Set Traffic package type (idle-time or full-time)
 */
class TrafficPackage extends AbstractModel
{
    /**
     * @var string Unique traffic package ID
     */
    public $TrafficPackageId;

    /**
     * @var string Traffic package name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TrafficPackageName;

    /**
     * @var float Traffic package size in GB
     */
    public $TotalAmount;

    /**
     * @var float Traffic package balance in GB
     */
    public $RemainingAmount;

    /**
     * @var string Traffic package status. Valid values: `AVAILABLE`, `EXPIRED`, `EXHAUSTED`, `REFUNDED`, `DELETED`
     */
    public $Status;

    /**
     * @var string Traffic package creation time
     */
    public $CreatedTime;

    /**
     * @var string Traffic package expiration time
     */
    public $Deadline;

    /**
     * @var float Used traffic in GB
     */
    public $UsedAmount;

    /**
     * @var array Traffic package tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagSet;

    /**
     * @var string Traffic package type (idle-time or full-time)
     */
    public $DeductType;

    /**
     * @param string $TrafficPackageId Unique traffic package ID
     * @param string $TrafficPackageName Traffic package name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $TotalAmount Traffic package size in GB
     * @param float $RemainingAmount Traffic package balance in GB
     * @param string $Status Traffic package status. Valid values: `AVAILABLE`, `EXPIRED`, `EXHAUSTED`, `REFUNDED`, `DELETED`
     * @param string $CreatedTime Traffic package creation time
     * @param string $Deadline Traffic package expiration time
     * @param float $UsedAmount Used traffic in GB
     * @param array $TagSet Traffic package tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DeductType Traffic package type (idle-time or full-time)
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
        if (array_key_exists("TrafficPackageId",$param) and $param["TrafficPackageId"] !== null) {
            $this->TrafficPackageId = $param["TrafficPackageId"];
        }

        if (array_key_exists("TrafficPackageName",$param) and $param["TrafficPackageName"] !== null) {
            $this->TrafficPackageName = $param["TrafficPackageName"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("RemainingAmount",$param) and $param["RemainingAmount"] !== null) {
            $this->RemainingAmount = $param["RemainingAmount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("DeductType",$param) and $param["DeductType"] !== null) {
            $this->DeductType = $param["DeductType"];
        }
    }
}
