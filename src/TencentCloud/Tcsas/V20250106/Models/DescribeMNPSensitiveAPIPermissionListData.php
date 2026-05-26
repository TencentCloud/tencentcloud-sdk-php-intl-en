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
 * List data for querying callable sensitive APIs of a mini program.
 *
 * @method string getAPIId() Obtain API ID.
 * @method void setAPIId(string $APIId) Set API ID.
 * @method string getAPIName() Obtain API name.
 * @method void setAPIName(string $APIName) Set API name.
 * @method string getAPIMethod() Obtain API method.
 * @method void setAPIMethod(string $APIMethod) Set API method.
 * @method integer getAPIStatus() Obtain API status.
 * @method void setAPIStatus(integer $APIStatus) Set API status.
 * @method integer getAPIApplyStatus() Obtain API application status.
 * @method void setAPIApplyStatus(integer $APIApplyStatus) Set API application status.
 * @method string getRejectReason() Obtain Reason for rejection.
 * @method void setRejectReason(string $RejectReason) Set Reason for rejection.
 * @method string getApprovalNo() Obtain Approval number.
 * @method void setApprovalNo(string $ApprovalNo) Set Approval number.
 * @method string getApplicationId() Obtain Superapp ID.
 * @method void setApplicationId(string $ApplicationId) Set Superapp ID.
 * @method string getApplicationIcon() Obtain Superapp icon.
 * @method void setApplicationIcon(string $ApplicationIcon) Set Superapp icon.
 * @method string getApplicationName() Obtain Superapp name.
 * @method void setApplicationName(string $ApplicationName) Set Superapp name.
 * @method integer getAPIType() Obtain API type. Valid values: 1: System; 2: Custom.
 * @method void setAPIType(integer $APIType) Set API type. Valid values: 1: System; 2: Custom.
 * @method string getAPIDesc() Obtain API feature description.
 * @method void setAPIDesc(string $APIDesc) Set API feature description.
 */
class DescribeMNPSensitiveAPIPermissionListData extends AbstractModel
{
    /**
     * @var string API ID.
     */
    public $APIId;

    /**
     * @var string API name.
     */
    public $APIName;

    /**
     * @var string API method.
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
     * @var string Approval number.
     */
    public $ApprovalNo;

    /**
     * @var string Superapp ID.
     */
    public $ApplicationId;

    /**
     * @var string Superapp icon.
     */
    public $ApplicationIcon;

    /**
     * @var string Superapp name.
     */
    public $ApplicationName;

    /**
     * @var integer API type. Valid values: 1: System; 2: Custom.
     */
    public $APIType;

    /**
     * @var string API feature description.
     */
    public $APIDesc;

    /**
     * @param string $APIId API ID.
     * @param string $APIName API name.
     * @param string $APIMethod API method.
     * @param integer $APIStatus API status.
     * @param integer $APIApplyStatus API application status.
     * @param string $RejectReason Reason for rejection.
     * @param string $ApprovalNo Approval number.
     * @param string $ApplicationId Superapp ID.
     * @param string $ApplicationIcon Superapp icon.
     * @param string $ApplicationName Superapp name.
     * @param integer $APIType API type. Valid values: 1: System; 2: Custom.
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
