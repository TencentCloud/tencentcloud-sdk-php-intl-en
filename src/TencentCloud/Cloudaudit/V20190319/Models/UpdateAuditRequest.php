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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAudit request structure.
 *
 * @method string getAuditName() Obtain Tracking set name
 * @method void setAuditName(string $AuditName) Set Tracking set name
 * @method integer getIsEnableCmqNotify() Obtain Whether to enable CMQ message notification. 1: Yes; 0: No. Only CMQ queue service is currently supported. If CMQ message notification is enabled, CloudAudit will deliver your log contents to the designated queue in the specified region in real time.
 * @method void setIsEnableCmqNotify(integer $IsEnableCmqNotify) Set Whether to enable CMQ message notification. 1: Yes; 0: No. Only CMQ queue service is currently supported. If CMQ message notification is enabled, CloudAudit will deliver your log contents to the designated queue in the specified region in real time.
 * @method integer getReadWriteAttribute() Obtain Manages the read/write attribute of event. Valid values: 1 (read-only), 2 (write-only), 3 (read/write).
 * @method void setReadWriteAttribute(integer $ReadWriteAttribute) Set Manages the read/write attribute of event. Valid values: 1 (read-only), 2 (write-only), 3 (read/write).
 * @method string getKeyId() Obtain Globally unique ID of the CMK. This value is required if it is not a newly created KMS element. It can be obtained through `ListKeyAliasByRegion`. CloudAudit will not verify the validity of the `KeyId`. Enter it carefully to avoid data loss.
 * @method void setKeyId(string $KeyId) Set Globally unique ID of the CMK. This value is required if it is not a newly created KMS element. It can be obtained through `ListKeyAliasByRegion`. CloudAudit will not verify the validity of the `KeyId`. Enter it carefully to avoid data loss.
 * @method string getCosRegion() Obtain COS region. Supported regions can be queried through the `ListCosEnableRegion` API.
 * @method void setCosRegion(string $CosRegion) Set COS region. Supported regions can be queried through the `ListCosEnableRegion` API.
 * @method string getCmqQueueName() Obtain Queue name, which must begin with a letter and can contain up to 64 letters, digits, and dashes (-). This field is required if the value of `IsEnableCmqNotify` is 1. If a queue is not newly created, CloudAudit will not verify whether it actually exists. Enter the name with caution to avoid log delivery failure and consequent data loss.
 * @method void setCmqQueueName(string $CmqQueueName) Set Queue name, which must begin with a letter and can contain up to 64 letters, digits, and dashes (-). This field is required if the value of `IsEnableCmqNotify` is 1. If a queue is not newly created, CloudAudit will not verify whether it actually exists. Enter the name with caution to avoid log delivery failure and consequent data loss.
 * @method integer getIsCreateNewBucket() Obtain Whether to create a COS bucket. 1: Yes; 0: No.
 * @method void setIsCreateNewBucket(integer $IsCreateNewBucket) Set Whether to create a COS bucket. 1: Yes; 0: No.
 * @method string getKmsRegion() Obtain KMS region. Currently supported regions can be obtained through `ListKmsEnableRegion`. This must be the same as the COS region.
 * @method void setKmsRegion(string $KmsRegion) Set KMS region. Currently supported regions can be obtained through `ListKmsEnableRegion`. This must be the same as the COS region.
 * @method integer getIsEnableKmsEncry() Obtain Whether to enable KMS encryption. 1: Yes, 0: No. If KMS encryption is enabled, the data will be encrypted when delivered to COS.
 * @method void setIsEnableKmsEncry(integer $IsEnableKmsEncry) Set Whether to enable KMS encryption. 1: Yes, 0: No. If KMS encryption is enabled, the data will be encrypted when delivered to COS.
 * @method string getCosBucketName() Obtain User-defined COS bucket name, which can only contain 1–40 lowercase letters (a–z), digits (0–9), and dashes (-) and cannot begin or end with "-". If a bucket is not newly created, CloudAudit will not verify whether it actually exists. Enter the name with caution to avoid log delivery failure and consequent data loss.
 * @method void setCosBucketName(string $CosBucketName) Set User-defined COS bucket name, which can only contain 1–40 lowercase letters (a–z), digits (0–9), and dashes (-) and cannot begin or end with "-". If a bucket is not newly created, CloudAudit will not verify whether it actually exists. Enter the name with caution to avoid log delivery failure and consequent data loss.
 * @method string getCmqRegion() Obtain Region where the queue is located. Supported CMQ regions can be queried through the `ListCmqEnableRegion` API. This field is required if the value of `IsEnableCmqNotify` is 1.
 * @method void setCmqRegion(string $CmqRegion) Set Region where the queue is located. Supported CMQ regions can be queried through the `ListCmqEnableRegion` API. This field is required if the value of `IsEnableCmqNotify` is 1.
 * @method string getLogFilePrefix() Obtain Log file prefix, which can only contain 3–40 ASCII letters (a–z; A–Z) and digits (0–9).
 * @method void setLogFilePrefix(string $LogFilePrefix) Set Log file prefix, which can only contain 3–40 ASCII letters (a–z; A–Z) and digits (0–9).
 * @method integer getIsCreateNewQueue() Obtain Whether to create a queue. 1: Yes; 0: No. This field is required if the value of `IsEnableCmqNotify` is 1.
 * @method void setIsCreateNewQueue(integer $IsCreateNewQueue) Set Whether to create a queue. 1: Yes; 0: No. This field is required if the value of `IsEnableCmqNotify` is 1.
 */
class UpdateAuditRequest extends AbstractModel
{
    /**
     * @var string Tracking set name
     */
    public $AuditName;

    /**
     * @var integer Whether to enable CMQ message notification. 1: Yes; 0: No. Only CMQ queue service is currently supported. If CMQ message notification is enabled, CloudAudit will deliver your log contents to the designated queue in the specified region in real time.
     */
    public $IsEnableCmqNotify;

    /**
     * @var integer Manages the read/write attribute of event. Valid values: 1 (read-only), 2 (write-only), 3 (read/write).
     */
    public $ReadWriteAttribute;

    /**
     * @var string Globally unique ID of the CMK. This value is required if it is not a newly created KMS element. It can be obtained through `ListKeyAliasByRegion`. CloudAudit will not verify the validity of the `KeyId`. Enter it carefully to avoid data loss.
     */
    public $KeyId;

    /**
     * @var string COS region. Supported regions can be queried through the `ListCosEnableRegion` API.
     */
    public $CosRegion;

    /**
     * @var string Queue name, which must begin with a letter and can contain up to 64 letters, digits, and dashes (-). This field is required if the value of `IsEnableCmqNotify` is 1. If a queue is not newly created, CloudAudit will not verify whether it actually exists. Enter the name with caution to avoid log delivery failure and consequent data loss.
     */
    public $CmqQueueName;

    /**
     * @var integer Whether to create a COS bucket. 1: Yes; 0: No.
     */
    public $IsCreateNewBucket;

    /**
     * @var string KMS region. Currently supported regions can be obtained through `ListKmsEnableRegion`. This must be the same as the COS region.
     */
    public $KmsRegion;

    /**
     * @var integer Whether to enable KMS encryption. 1: Yes, 0: No. If KMS encryption is enabled, the data will be encrypted when delivered to COS.
     */
    public $IsEnableKmsEncry;

    /**
     * @var string User-defined COS bucket name, which can only contain 1–40 lowercase letters (a–z), digits (0–9), and dashes (-) and cannot begin or end with "-". If a bucket is not newly created, CloudAudit will not verify whether it actually exists. Enter the name with caution to avoid log delivery failure and consequent data loss.
     */
    public $CosBucketName;

    /**
     * @var string Region where the queue is located. Supported CMQ regions can be queried through the `ListCmqEnableRegion` API. This field is required if the value of `IsEnableCmqNotify` is 1.
     */
    public $CmqRegion;

    /**
     * @var string Log file prefix, which can only contain 3–40 ASCII letters (a–z; A–Z) and digits (0–9).
     */
    public $LogFilePrefix;

    /**
     * @var integer Whether to create a queue. 1: Yes; 0: No. This field is required if the value of `IsEnableCmqNotify` is 1.
     */
    public $IsCreateNewQueue;

    /**
     * @param string $AuditName Tracking set name
     * @param integer $IsEnableCmqNotify Whether to enable CMQ message notification. 1: Yes; 0: No. Only CMQ queue service is currently supported. If CMQ message notification is enabled, CloudAudit will deliver your log contents to the designated queue in the specified region in real time.
     * @param integer $ReadWriteAttribute Manages the read/write attribute of event. Valid values: 1 (read-only), 2 (write-only), 3 (read/write).
     * @param string $KeyId Globally unique ID of the CMK. This value is required if it is not a newly created KMS element. It can be obtained through `ListKeyAliasByRegion`. CloudAudit will not verify the validity of the `KeyId`. Enter it carefully to avoid data loss.
     * @param string $CosRegion COS region. Supported regions can be queried through the `ListCosEnableRegion` API.
     * @param string $CmqQueueName Queue name, which must begin with a letter and can contain up to 64 letters, digits, and dashes (-). This field is required if the value of `IsEnableCmqNotify` is 1. If a queue is not newly created, CloudAudit will not verify whether it actually exists. Enter the name with caution to avoid log delivery failure and consequent data loss.
     * @param integer $IsCreateNewBucket Whether to create a COS bucket. 1: Yes; 0: No.
     * @param string $KmsRegion KMS region. Currently supported regions can be obtained through `ListKmsEnableRegion`. This must be the same as the COS region.
     * @param integer $IsEnableKmsEncry Whether to enable KMS encryption. 1: Yes, 0: No. If KMS encryption is enabled, the data will be encrypted when delivered to COS.
     * @param string $CosBucketName User-defined COS bucket name, which can only contain 1–40 lowercase letters (a–z), digits (0–9), and dashes (-) and cannot begin or end with "-". If a bucket is not newly created, CloudAudit will not verify whether it actually exists. Enter the name with caution to avoid log delivery failure and consequent data loss.
     * @param string $CmqRegion Region where the queue is located. Supported CMQ regions can be queried through the `ListCmqEnableRegion` API. This field is required if the value of `IsEnableCmqNotify` is 1.
     * @param string $LogFilePrefix Log file prefix, which can only contain 3–40 ASCII letters (a–z; A–Z) and digits (0–9).
     * @param integer $IsCreateNewQueue Whether to create a queue. 1: Yes; 0: No. This field is required if the value of `IsEnableCmqNotify` is 1.
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
        if (array_key_exists("AuditName",$param) and $param["AuditName"] !== null) {
            $this->AuditName = $param["AuditName"];
        }

        if (array_key_exists("IsEnableCmqNotify",$param) and $param["IsEnableCmqNotify"] !== null) {
            $this->IsEnableCmqNotify = $param["IsEnableCmqNotify"];
        }

        if (array_key_exists("ReadWriteAttribute",$param) and $param["ReadWriteAttribute"] !== null) {
            $this->ReadWriteAttribute = $param["ReadWriteAttribute"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("CmqQueueName",$param) and $param["CmqQueueName"] !== null) {
            $this->CmqQueueName = $param["CmqQueueName"];
        }

        if (array_key_exists("IsCreateNewBucket",$param) and $param["IsCreateNewBucket"] !== null) {
            $this->IsCreateNewBucket = $param["IsCreateNewBucket"];
        }

        if (array_key_exists("KmsRegion",$param) and $param["KmsRegion"] !== null) {
            $this->KmsRegion = $param["KmsRegion"];
        }

        if (array_key_exists("IsEnableKmsEncry",$param) and $param["IsEnableKmsEncry"] !== null) {
            $this->IsEnableKmsEncry = $param["IsEnableKmsEncry"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CmqRegion",$param) and $param["CmqRegion"] !== null) {
            $this->CmqRegion = $param["CmqRegion"];
        }

        if (array_key_exists("LogFilePrefix",$param) and $param["LogFilePrefix"] !== null) {
            $this->LogFilePrefix = $param["LogFilePrefix"];
        }

        if (array_key_exists("IsCreateNewQueue",$param) and $param["IsCreateNewQueue"] !== null) {
            $this->IsCreateNewQueue = $param["IsCreateNewQueue"];
        }
    }
}
