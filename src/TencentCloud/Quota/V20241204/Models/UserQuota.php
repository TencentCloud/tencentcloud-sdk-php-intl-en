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
namespace TencentCloud\Quota\V20241204\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User quota
 *
 * @method integer getMemberUin() Obtain uin
 * @method void setMemberUin(integer $MemberUin) Set uin
 * @method string getMemberName() Obtain Account nickname
 * @method void setMemberName(string $MemberName) Set Account nickname
 * @method string getQuotaInstanceId() Obtain Quota Instance ID
 * @method void setQuotaInstanceId(string $QuotaInstanceId) Set Quota Instance ID
 * @method integer getQuotaId() Obtain Quota ID
 * @method void setQuotaId(integer $QuotaId) Set Quota ID
 * @method string getQuotaName() Obtain quota name
 * @method void setQuotaName(string $QuotaName) Set quota name
 * @method string getProductName() Obtain Product name
 * @method void setProductName(string $ProductName) Set Product name
 * @method string getQuotaUnit() Obtain Quota unit
 * @method void setQuotaUnit(string $QuotaUnit) Set Quota unit
 * @method integer getApplyType() Obtain Quota application method, enumeration value: 1: Can apply, 2: Ticket application, 3: Cannot apply.
 * @method void setApplyType(integer $ApplyType) Set Quota application method, enumeration value: 1: Can apply, 2: Ticket application, 3: Cannot apply.
 * @method integer getTotalQuota() Obtain User Total Quota
 * @method void setTotalQuota(integer $TotalQuota) Set User Total Quota
 * @method integer getTotalUsage() Obtain Total usage of user quota
 * @method void setTotalUsage(integer $TotalUsage) Set Total usage of user quota
 * @method string getQuotaDescription() Obtain Quota description
 * @method void setQuotaDescription(string $QuotaDescription) Set Quota description
 * @method array getQuotaDimensions() Obtain Quota Dimension Value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuotaDimensions(array $QuotaDimensions) Set Quota Dimension Value
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status 5 Pending Approval
 * @method void setStatus(integer $Status) Set Status 5 Pending Approval
 */
class UserQuota extends AbstractModel
{
    /**
     * @var integer uin
     */
    public $MemberUin;

    /**
     * @var string Account nickname
     */
    public $MemberName;

    /**
     * @var string Quota Instance ID
     */
    public $QuotaInstanceId;

    /**
     * @var integer Quota ID
     */
    public $QuotaId;

    /**
     * @var string quota name
     */
    public $QuotaName;

    /**
     * @var string Product name
     */
    public $ProductName;

    /**
     * @var string Quota unit
     */
    public $QuotaUnit;

    /**
     * @var integer Quota application method, enumeration value: 1: Can apply, 2: Ticket application, 3: Cannot apply.
     */
    public $ApplyType;

    /**
     * @var integer User Total Quota
     */
    public $TotalQuota;

    /**
     * @var integer Total usage of user quota
     */
    public $TotalUsage;

    /**
     * @var string Quota description
     */
    public $QuotaDescription;

    /**
     * @var array Quota Dimension Value
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QuotaDimensions;

    /**
     * @var integer Status 5 Pending Approval
     */
    public $Status;

    /**
     * @param integer $MemberUin uin
     * @param string $MemberName Account nickname
     * @param string $QuotaInstanceId Quota Instance ID
     * @param integer $QuotaId Quota ID
     * @param string $QuotaName quota name
     * @param string $ProductName Product name
     * @param string $QuotaUnit Quota unit
     * @param integer $ApplyType Quota application method, enumeration value: 1: Can apply, 2: Ticket application, 3: Cannot apply.
     * @param integer $TotalQuota User Total Quota
     * @param integer $TotalUsage Total usage of user quota
     * @param string $QuotaDescription Quota description
     * @param array $QuotaDimensions Quota Dimension Value
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status 5 Pending Approval
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
        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }

        if (array_key_exists("QuotaInstanceId",$param) and $param["QuotaInstanceId"] !== null) {
            $this->QuotaInstanceId = $param["QuotaInstanceId"];
        }

        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = $param["QuotaId"];
        }

        if (array_key_exists("QuotaName",$param) and $param["QuotaName"] !== null) {
            $this->QuotaName = $param["QuotaName"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("QuotaUnit",$param) and $param["QuotaUnit"] !== null) {
            $this->QuotaUnit = $param["QuotaUnit"];
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
        }

        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("TotalUsage",$param) and $param["TotalUsage"] !== null) {
            $this->TotalUsage = $param["TotalUsage"];
        }

        if (array_key_exists("QuotaDescription",$param) and $param["QuotaDescription"] !== null) {
            $this->QuotaDescription = $param["QuotaDescription"];
        }

        if (array_key_exists("QuotaDimensions",$param) and $param["QuotaDimensions"] !== null) {
            $this->QuotaDimensions = [];
            foreach ($param["QuotaDimensions"] as $key => $value){
                $obj = new QuotaDimension();
                $obj->deserialize($value);
                array_push($this->QuotaDimensions, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
