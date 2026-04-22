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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of sensitive APIs that can be called by a mini program
 *
 * @method string getAPIId() Obtain API ID
 * @method void setAPIId(string $APIId) Set API ID
 * @method string getAPIName() Obtain API name.
 * @method void setAPIName(string $APIName) Set API name.
 * @method string getAPIMethod() Obtain API request method
 * @method void setAPIMethod(string $APIMethod) Set API request method
 * @method integer getAPIStatus() Obtain API status.
 * @method void setAPIStatus(integer $APIStatus) Set API status.
 * @method integer getAPIApplyStatus() Obtain API application status.
 * @method void setAPIApplyStatus(integer $APIApplyStatus) Set API application status.
 * @method string getRejectReason() Obtain Reason for rejection.
 * @method void setRejectReason(string $RejectReason) Set Reason for rejection.
 * @method string getApprovalNo() Obtain Approval ID
 * @method void setApprovalNo(string $ApprovalNo) Set Approval ID
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getApplicationIcon() Obtain Specifies the application icon.
 * @method void setApplicationIcon(string $ApplicationIcon) Set Specifies the application icon.
 * @method string getApplicationName() Obtain Application name
 * @method void setApplicationName(string $ApplicationName) Set Application name
 * @method integer getAPIType() Obtain API type. 1: system; 2: custom.
 * @method void setAPIType(integer $APIType) Set API type. 1: system; 2: custom.
 * @method string getAPIDesc() Obtain API feature description.
 * @method void setAPIDesc(string $APIDesc) Set API feature description.
 */
class DescribeMNPSensitiveAPIPermissionListData extends AbstractModel
{
    /**
     * @var string API ID
     */
    public $APIId;

    /**
     * @var string API name.
     */
    public $APIName;

    /**
     * @var string API request method
     */
    public $APIMethod;

    /**
     * @var integer API status.
     */
    public $APIStatus;

    /**
     * @var integer API application status.
     */
    public $APIApplyStatus;

    /**
     * @var string Reason for rejection.
     */
    public $RejectReason;

    /**
     * @var string Approval ID
     */
    public $ApprovalNo;

    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Specifies the application icon.
     */
    public $ApplicationIcon;

    /**
     * @var string Application name
     */
    public $ApplicationName;

    /**
     * @var integer API type. 1: system; 2: custom.
     */
    public $APIType;

    /**
     * @var string API feature description.
     */
    public $APIDesc;

    /**
     * @param string $APIId API ID
     * @param string $APIName API name.
     * @param string $APIMethod API request method
     * @param integer $APIStatus API status.
     * @param integer $APIApplyStatus API application status.
     * @param string $RejectReason Reason for rejection.
     * @param string $ApprovalNo Approval ID
     * @param string $ApplicationId Application ID
     * @param string $ApplicationIcon Specifies the application icon.
     * @param string $ApplicationName Application name
     * @param integer $APIType API type. 1: system; 2: custom.
     * @param string $APIDesc API feature description.
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
        if (array_key_exists("APIId",$param) and $param["APIId"] !== null) {
            $this->APIId = $param["APIId"];
        }

        if (array_key_exists("APIName",$param) and $param["APIName"] !== null) {
            $this->APIName = $param["APIName"];
        }

        if (array_key_exists("APIMethod",$param) and $param["APIMethod"] !== null) {
            $this->APIMethod = $param["APIMethod"];
        }

        if (array_key_exists("APIStatus",$param) and $param["APIStatus"] !== null) {
            $this->APIStatus = $param["APIStatus"];
        }

        if (array_key_exists("APIApplyStatus",$param) and $param["APIApplyStatus"] !== null) {
            $this->APIApplyStatus = $param["APIApplyStatus"];
        }

        if (array_key_exists("RejectReason",$param) and $param["RejectReason"] !== null) {
            $this->RejectReason = $param["RejectReason"];
        }

        if (array_key_exists("ApprovalNo",$param) and $param["ApprovalNo"] !== null) {
            $this->ApprovalNo = $param["ApprovalNo"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationIcon",$param) and $param["ApplicationIcon"] !== null) {
            $this->ApplicationIcon = $param["ApplicationIcon"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("APIType",$param) and $param["APIType"] !== null) {
            $this->APIType = $param["APIType"];
        }

        if (array_key_exists("APIDesc",$param) and $param["APIDesc"] !== null) {
            $this->APIDesc = $param["APIDesc"];
        }
    }
}
