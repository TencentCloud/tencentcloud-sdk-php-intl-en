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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sensitive API approval information
 *
 * @method string getAuditNo() Obtain Approval ticket ID
 * @method void setAuditNo(string $AuditNo) Set Approval ticket ID
 * @method string getApiId() Obtain Approval ticket ID
 * @method void setApiId(string $ApiId) Set Approval ticket ID
 * @method string getApiName() Obtain API name
 * @method void setApiName(string $ApiName) Set API name
 * @method string getApiMethod() Obtain API request method
 * @method void setApiMethod(string $ApiMethod) Set API request method
 * @method string getMNPId() Obtain Mini program ID
 * @method void setMNPId(string $MNPId) Set Mini program ID
 * @method string getMNPName() Obtain Mini program name
 * @method void setMNPName(string $MNPName) Set Mini program name
 * @method string getApplyUser() Obtain Applicant
 * @method void setApplyUser(string $ApplyUser) Set Applicant
 * @method string getApplyTime() Obtain Application time
 * @method void setApplyTime(string $ApplyTime) Set Application time
 * @method string getApplyNote() Obtain Application notes
 * @method void setApplyNote(string $ApplyNote) Set Application notes
 * @method integer getAuditStatus() Obtain Approval status
 * @method void setAuditStatus(integer $AuditStatus) Set Approval status
 * @method string getAuditUser() Obtain Approver
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuditUser(string $AuditUser) Set Approver
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAuditTime() Obtain Approval time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuditTime(string $AuditTime) Set Approval time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAuditNote() Obtain Approval notes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuditNote(string $AuditNote) Set Approval notes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationId() Obtain Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain The application name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set The application name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationLogo() Obtain Application icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationLogo(string $ApplicationLogo) Set Application icon
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getApiType() Obtain API type. 1: System; 2: Custom
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApiType(integer $ApiType) Set API type. 1: System; 2: Custom
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApiDesc() Obtain API function description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApiDesc(string $ApiDesc) Set API function description
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SensitiveApiAuditInfoResp extends AbstractModel
{
    /**
     * @var string Approval ticket ID
     */
    public $AuditNo;

    /**
     * @var string Approval ticket ID
     */
    public $ApiId;

    /**
     * @var string API name
     */
    public $ApiName;

    /**
     * @var string API request method
     */
    public $ApiMethod;

    /**
     * @var string Mini program ID
     */
    public $MNPId;

    /**
     * @var string Mini program name
     */
    public $MNPName;

    /**
     * @var string Applicant
     */
    public $ApplyUser;

    /**
     * @var string Application time
     */
    public $ApplyTime;

    /**
     * @var string Application notes
     */
    public $ApplyNote;

    /**
     * @var integer Approval status
     */
    public $AuditStatus;

    /**
     * @var string Approver
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuditUser;

    /**
     * @var string Approval time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuditTime;

    /**
     * @var string Approval notes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuditNote;

    /**
     * @var string Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var string The application name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var string Application icon
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationLogo;

    /**
     * @var integer API type. 1: System; 2: Custom
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApiType;

    /**
     * @var string API function description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApiDesc;

    /**
     * @param string $AuditNo Approval ticket ID
     * @param string $ApiId Approval ticket ID
     * @param string $ApiName API name
     * @param string $ApiMethod API request method
     * @param string $MNPId Mini program ID
     * @param string $MNPName Mini program name
     * @param string $ApplyUser Applicant
     * @param string $ApplyTime Application time
     * @param string $ApplyNote Application notes
     * @param integer $AuditStatus Approval status
     * @param string $AuditUser Approver
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AuditTime Approval time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AuditNote Approval notes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationId Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName The application name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationLogo Application icon
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ApiType API type. 1: System; 2: Custom
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApiDesc API function description
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AuditNo",$param) and $param["AuditNo"] !== null) {
            $this->AuditNo = $param["AuditNo"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ApiMethod",$param) and $param["ApiMethod"] !== null) {
            $this->ApiMethod = $param["ApiMethod"];
        }

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("ApplyUser",$param) and $param["ApplyUser"] !== null) {
            $this->ApplyUser = $param["ApplyUser"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("ApplyNote",$param) and $param["ApplyNote"] !== null) {
            $this->ApplyNote = $param["ApplyNote"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("AuditUser",$param) and $param["AuditUser"] !== null) {
            $this->AuditUser = $param["AuditUser"];
        }

        if (array_key_exists("AuditTime",$param) and $param["AuditTime"] !== null) {
            $this->AuditTime = $param["AuditTime"];
        }

        if (array_key_exists("AuditNote",$param) and $param["AuditNote"] !== null) {
            $this->AuditNote = $param["AuditNote"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationLogo",$param) and $param["ApplicationLogo"] !== null) {
            $this->ApplicationLogo = $param["ApplicationLogo"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("ApiDesc",$param) and $param["ApiDesc"] !== null) {
            $this->ApiDesc = $param["ApiDesc"];
        }
    }
}
