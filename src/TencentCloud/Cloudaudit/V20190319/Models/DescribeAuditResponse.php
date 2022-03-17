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
 * DescribeAudit response structure.
 *
 * @method integer getIsEnableCmqNotify() Obtain Whether to enable CMQ message notification. 1: Yes; 0: No.
 * @method void setIsEnableCmqNotify(integer $IsEnableCmqNotify) Set Whether to enable CMQ message notification. 1: Yes; 0: No.
 * @method integer getReadWriteAttribute() Obtain Manages the read/write attribute of event. Valid values: 1 (read-only), 2 (write-only), 3 (read/write)
 * @method void setReadWriteAttribute(integer $ReadWriteAttribute) Set Manages the read/write attribute of event. Valid values: 1 (read-only), 2 (write-only), 3 (read/write)
 * @method string getKeyId() Obtain Globally unique CMK ID.
 * @method void setKeyId(string $KeyId) Set Globally unique CMK ID.
 * @method integer getAuditStatus() Obtain Tracking set status. 1: enabled, 0: disabled.
 * @method void setAuditStatus(integer $AuditStatus) Set Tracking set status. 1: enabled, 0: disabled.
 * @method string getAuditName() Obtain Tracking set name.
 * @method void setAuditName(string $AuditName) Set Tracking set name.
 * @method string getCosRegion() Obtain COS bucket region.
 * @method void setCosRegion(string $CosRegion) Set COS bucket region.
 * @method string getCmqQueueName() Obtain Queue name.
 * @method void setCmqQueueName(string $CmqQueueName) Set Queue name.
 * @method string getKmsAlias() Obtain CMK alias.
 * @method void setKmsAlias(string $KmsAlias) Set CMK alias.
 * @method string getKmsRegion() Obtain KMS region.
 * @method void setKmsRegion(string $KmsRegion) Set KMS region.
 * @method integer getIsEnableKmsEncry() Obtain Whether to enable KMS encryption. 1: Yes, 0: No. If KMS encryption is enabled, the data will be encrypted when it is delivered to COS.
 * @method void setIsEnableKmsEncry(integer $IsEnableKmsEncry) Set Whether to enable KMS encryption. 1: Yes, 0: No. If KMS encryption is enabled, the data will be encrypted when it is delivered to COS.
 * @method string getCosBucketName() Obtain COS bucket name.
 * @method void setCosBucketName(string $CosBucketName) Set COS bucket name.
 * @method string getCmqRegion() Obtain Queue region.
 * @method void setCmqRegion(string $CmqRegion) Set Queue region.
 * @method string getLogFilePrefix() Obtain Log prefix.
 * @method void setLogFilePrefix(string $LogFilePrefix) Set Log prefix.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAuditResponse extends AbstractModel
{
    /**
     * @var integer Whether to enable CMQ message notification. 1: Yes; 0: No.
     */
    public $IsEnableCmqNotify;

    /**
     * @var integer Manages the read/write attribute of event. Valid values: 1 (read-only), 2 (write-only), 3 (read/write)
     */
    public $ReadWriteAttribute;

    /**
     * @var string Globally unique CMK ID.
     */
    public $KeyId;

    /**
     * @var integer Tracking set status. 1: enabled, 0: disabled.
     */
    public $AuditStatus;

    /**
     * @var string Tracking set name.
     */
    public $AuditName;

    /**
     * @var string COS bucket region.
     */
    public $CosRegion;

    /**
     * @var string Queue name.
     */
    public $CmqQueueName;

    /**
     * @var string CMK alias.
     */
    public $KmsAlias;

    /**
     * @var string KMS region.
     */
    public $KmsRegion;

    /**
     * @var integer Whether to enable KMS encryption. 1: Yes, 0: No. If KMS encryption is enabled, the data will be encrypted when it is delivered to COS.
     */
    public $IsEnableKmsEncry;

    /**
     * @var string COS bucket name.
     */
    public $CosBucketName;

    /**
     * @var string Queue region.
     */
    public $CmqRegion;

    /**
     * @var string Log prefix.
     */
    public $LogFilePrefix;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $IsEnableCmqNotify Whether to enable CMQ message notification. 1: Yes; 0: No.
     * @param integer $ReadWriteAttribute Manages the read/write attribute of event. Valid values: 1 (read-only), 2 (write-only), 3 (read/write)
     * @param string $KeyId Globally unique CMK ID.
     * @param integer $AuditStatus Tracking set status. 1: enabled, 0: disabled.
     * @param string $AuditName Tracking set name.
     * @param string $CosRegion COS bucket region.
     * @param string $CmqQueueName Queue name.
     * @param string $KmsAlias CMK alias.
     * @param string $KmsRegion KMS region.
     * @param integer $IsEnableKmsEncry Whether to enable KMS encryption. 1: Yes, 0: No. If KMS encryption is enabled, the data will be encrypted when it is delivered to COS.
     * @param string $CosBucketName COS bucket name.
     * @param string $CmqRegion Queue region.
     * @param string $LogFilePrefix Log prefix.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("IsEnableCmqNotify",$param) and $param["IsEnableCmqNotify"] !== null) {
            $this->IsEnableCmqNotify = $param["IsEnableCmqNotify"];
        }

        if (array_key_exists("ReadWriteAttribute",$param) and $param["ReadWriteAttribute"] !== null) {
            $this->ReadWriteAttribute = $param["ReadWriteAttribute"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("AuditName",$param) and $param["AuditName"] !== null) {
            $this->AuditName = $param["AuditName"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("CmqQueueName",$param) and $param["CmqQueueName"] !== null) {
            $this->CmqQueueName = $param["CmqQueueName"];
        }

        if (array_key_exists("KmsAlias",$param) and $param["KmsAlias"] !== null) {
            $this->KmsAlias = $param["KmsAlias"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
