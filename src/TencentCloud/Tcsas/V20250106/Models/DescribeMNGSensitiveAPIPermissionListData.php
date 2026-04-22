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
 * Queries the list data of sensitive APIs that available to the mini game
 *
 * @method string getAPIId() Obtain <p>API ID</p>
 * @method void setAPIId(string $APIId) Set <p>API ID</p>
 * @method string getAPIName() Obtain <p>API name</p>
 * @method void setAPIName(string $APIName) Set <p>API name</p>
 * @method string getAPIMethod() Obtain <p>API method</p>
 * @method void setAPIMethod(string $APIMethod) Set <p>API method</p>
 * @method integer getAPIStatus() Obtain <p>API status</p>
 * @method void setAPIStatus(integer $APIStatus) Set <p>API status</p>
 * @method integer getAPIApplyStatus() Obtain <p>API request status</p>
 * @method void setAPIApplyStatus(integer $APIApplyStatus) Set <p>API request status</p>
 * @method string getRejectReason() Obtain <p>Reason for rejection</p>
 * @method void setRejectReason(string $RejectReason) Set <p>Reason for rejection</p>
 * @method string getApprovalNo() Obtain <p>Approval number</p>
 * @method void setApprovalNo(string $ApprovalNo) Set <p>Approval number</p>
 * @method string getApplicationId() Obtain <p>Superapp ID</p>
 * @method void setApplicationId(string $ApplicationId) Set <p>Superapp ID</p>
 * @method string getApplicationIcon() Obtain <p>Superapp icon</p>
 * @method void setApplicationIcon(string $ApplicationIcon) Set <p>Superapp icon</p>
 * @method string getApplicationName() Obtain <p>Superapp name</p>
 * @method void setApplicationName(string $ApplicationName) Set <p>Superapp name</p>
 * @method integer getAPIType() Obtain <p>API type. Valid values: 1: System; 2: Custom
 * @method void setAPIType(integer $APIType) Set <p>API type. Valid values: 1: System; 2: Custom
 * @method string getAPIDesc() Obtain <p>API feature description</p>
 * @method void setAPIDesc(string $APIDesc) Set <p>API feature description</p>
 */
class DescribeMNGSensitiveAPIPermissionListData extends AbstractModel
{
    /**
     * @var string <p>API ID</p>
     */
    public $APIId;

    /**
     * @var string <p>API name</p>
     */
    public $APIName;

    /**
     * @var string <p>API method</p>
     */
    public $APIMethod;

    /**
     * @var integer <p>API status</p>
     */
    public $APIStatus;

    /**
     * @var integer <p>API request status</p>
     */
    public $APIApplyStatus;

    /**
     * @var string <p>Reason for rejection</p>
     */
    public $RejectReason;

    /**
     * @var string <p>Approval number</p>
     */
    public $ApprovalNo;

    /**
     * @var string <p>Superapp ID</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>Superapp icon</p>
     */
    public $ApplicationIcon;

    /**
     * @var string <p>Superapp name</p>
     */
    public $ApplicationName;

    /**
     * @var integer <p>API type. Valid values: 1: System; 2: Custom
     */
    public $APIType;

    /**
     * @var string <p>API feature description</p>
     */
    public $APIDesc;

    /**
     * @param string $APIId <p>API ID</p>
     * @param string $APIName <p>API name</p>
     * @param string $APIMethod <p>API method</p>
     * @param integer $APIStatus <p>API status</p>
     * @param integer $APIApplyStatus <p>API request status</p>
     * @param string $RejectReason <p>Reason for rejection</p>
     * @param string $ApprovalNo <p>Approval number</p>
     * @param string $ApplicationId <p>Superapp ID</p>
     * @param string $ApplicationIcon <p>Superapp icon</p>
     * @param string $ApplicationName <p>Superapp name</p>
     * @param integer $APIType <p>API type. Valid values: 1: System; 2: Custom
     * @param string $APIDesc <p>API feature description</p>
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
