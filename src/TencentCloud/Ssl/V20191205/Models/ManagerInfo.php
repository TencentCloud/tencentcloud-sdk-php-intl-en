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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Administrator information
 *
 * @method string getStatus() Obtain Status: audit: under review ok: pass invalid: invalid expiring: expiring soon expired: expired
 * @method void setStatus(string $Status) Set Status: audit: under review ok: pass invalid: invalid expiring: expiring soon expired: expired
 * @method string getManagerFirstName() Obtain Manager name
 * @method void setManagerFirstName(string $ManagerFirstName) Set Manager name
 * @method string getManagerLastName() Obtain Manager name
 * @method void setManagerLastName(string $ManagerLastName) Set Manager name
 * @method string getManagerPosition() Obtain manager position
 * @method void setManagerPosition(string $ManagerPosition) Set manager position
 * @method string getManagerPhone() Obtain Manager phone
 * @method void setManagerPhone(string $ManagerPhone) Set Manager phone
 * @method string getManagerMail() Obtain Manager mailbox
 * @method void setManagerMail(string $ManagerMail) Set Manager mailbox
 * @method string getManagerDepartment() Obtain department of the manager
 * @method void setManagerDepartment(string $ManagerDepartment) Set department of the manager
 * @method string getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDomainCount() Obtain Number of domains for manager
 * @method void setDomainCount(integer $DomainCount) Set Number of domains for manager
 * @method integer getCertCount() Obtain Number of manager certificates
 * @method void setCertCount(integer $CertCount) Set Number of manager certificates
 * @method integer getManagerId() Obtain Manager ID
 * @method void setManagerId(integer $ManagerId) Set Manager ID
 * @method string getExpireTime() Obtain Review valid expiry time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Review valid expiry time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubmitAuditTime() Obtain Last submission review time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubmitAuditTime(string $SubmitAuditTime) Set Last submission review time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVerifyTime() Obtain Approval Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVerifyTime(string $VerifyTime) Set Approval Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getStatusInfo() Obtain Review status info
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusInfo(array $StatusInfo) Set Review status info
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 */
class ManagerInfo extends AbstractModel
{
    /**
     * @var string Status: audit: under review ok: pass invalid: invalid expiring: expiring soon expired: expired
     */
    public $Status;

    /**
     * @var string Manager name
     */
    public $ManagerFirstName;

    /**
     * @var string Manager name
     */
    public $ManagerLastName;

    /**
     * @var string manager position
     */
    public $ManagerPosition;

    /**
     * @var string Manager phone
     */
    public $ManagerPhone;

    /**
     * @var string Manager mailbox
     */
    public $ManagerMail;

    /**
     * @var string department of the manager
     */
    public $ManagerDepartment;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Number of domains for manager
     */
    public $DomainCount;

    /**
     * @var integer Number of manager certificates
     */
    public $CertCount;

    /**
     * @var integer Manager ID
     */
    public $ManagerId;

    /**
     * @var string Review valid expiry time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Last submission review time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubmitAuditTime;

    /**
     * @var string Approval Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VerifyTime;

    /**
     * @var array Review status info
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusInfo;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @param string $Status Status: audit: under review ok: pass invalid: invalid expiring: expiring soon expired: expired
     * @param string $ManagerFirstName Manager name
     * @param string $ManagerLastName Manager name
     * @param string $ManagerPosition manager position
     * @param string $ManagerPhone Manager phone
     * @param string $ManagerMail Manager mailbox
     * @param string $ManagerDepartment department of the manager
     * @param string $CreateTime Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DomainCount Number of domains for manager
     * @param integer $CertCount Number of manager certificates
     * @param integer $ManagerId Manager ID
     * @param string $ExpireTime Review valid expiry time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubmitAuditTime Last submission review time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VerifyTime Approval Time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $StatusInfo Review status info
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ManagerFirstName",$param) and $param["ManagerFirstName"] !== null) {
            $this->ManagerFirstName = $param["ManagerFirstName"];
        }

        if (array_key_exists("ManagerLastName",$param) and $param["ManagerLastName"] !== null) {
            $this->ManagerLastName = $param["ManagerLastName"];
        }

        if (array_key_exists("ManagerPosition",$param) and $param["ManagerPosition"] !== null) {
            $this->ManagerPosition = $param["ManagerPosition"];
        }

        if (array_key_exists("ManagerPhone",$param) and $param["ManagerPhone"] !== null) {
            $this->ManagerPhone = $param["ManagerPhone"];
        }

        if (array_key_exists("ManagerMail",$param) and $param["ManagerMail"] !== null) {
            $this->ManagerMail = $param["ManagerMail"];
        }

        if (array_key_exists("ManagerDepartment",$param) and $param["ManagerDepartment"] !== null) {
            $this->ManagerDepartment = $param["ManagerDepartment"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DomainCount",$param) and $param["DomainCount"] !== null) {
            $this->DomainCount = $param["DomainCount"];
        }

        if (array_key_exists("CertCount",$param) and $param["CertCount"] !== null) {
            $this->CertCount = $param["CertCount"];
        }

        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("SubmitAuditTime",$param) and $param["SubmitAuditTime"] !== null) {
            $this->SubmitAuditTime = $param["SubmitAuditTime"];
        }

        if (array_key_exists("VerifyTime",$param) and $param["VerifyTime"] !== null) {
            $this->VerifyTime = $param["VerifyTime"];
        }

        if (array_key_exists("StatusInfo",$param) and $param["StatusInfo"] !== null) {
            $this->StatusInfo = [];
            foreach ($param["StatusInfo"] as $key => $value){
                $obj = new ManagerStatusInfo();
                $obj->deserialize($value);
                array_push($this->StatusInfo, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
