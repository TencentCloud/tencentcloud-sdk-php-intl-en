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
 * @method string getAuditName() Obtain Tracking set name.
 * @method void setAuditName(string $AuditName) Set Tracking set name.
 * @method integer getAuditStatus() Obtain Tracking set status. Value range: 1 (enabled), 0 (disabled).
 * @method void setAuditStatus(integer $AuditStatus) Set Tracking set status. Value range: 1 (enabled), 0 (disabled).
 * @method string getCmqQueueName() Obtain Queue name.
 * @method void setCmqQueueName(string $CmqQueueName) Set Queue name.
 * @method string getCmqRegion() Obtain Region where the queue is located.
 * @method void setCmqRegion(string $CmqRegion) Set Region where the queue is located.
 * @method string getCosBucketName() Obtain COS bucket name.
 * @method void setCosBucketName(string $CosBucketName) Set COS bucket name.
 * @method string getCosRegion() Obtain Region where the COS bucket is located.
 * @method void setCosRegion(string $CosRegion) Set Region where the COS bucket is located.
 * @method integer getIsEnableCmqNotify() Obtain Whether to enable CMQ message notification. 1: yes; 0: no.
 * @method void setIsEnableCmqNotify(integer $IsEnableCmqNotify) Set Whether to enable CMQ message notification. 1: yes; 0: no.
 * @method string getLogFilePrefix() Obtain Log prefix.
 * @method void setLogFilePrefix(string $LogFilePrefix) Set Log prefix.
 * @method integer getReadWriteAttribute() Obtain Manages the read/write attribute of an event. Value range: 1 (read-only), 2 (write-only), 3 (read/write)
 * @method void setReadWriteAttribute(integer $ReadWriteAttribute) Set Manages the read/write attribute of an event. Value range: 1 (read-only), 2 (write-only), 3 (read/write)
 * @method string getRequestId() Obtain Unique ID of the request. Each request returns a unique ID. The RequestId is required to troubleshoot issues.
 * @method void setRequestId(string $RequestId) Set Unique ID of the request. Each request returns a unique ID. The RequestId is required to troubleshoot issues.
 */

/**
 *Return parameter structure of DescribeAudit
 */
class DescribeAuditResponse extends AbstractModel
{
    /**
     * @var string Tracking set name.
     */
    public $AuditName;

    /**
     * @var integer Tracking set status. Value range: 1 (enabled), 0 (disabled).
     */
    public $AuditStatus;

    /**
     * @var string Queue name.
     */
    public $CmqQueueName;

    /**
     * @var string Region where the queue is located.
     */
    public $CmqRegion;

    /**
     * @var string COS bucket name.
     */
    public $CosBucketName;

    /**
     * @var string Region where the COS bucket is located.
     */
    public $CosRegion;

    /**
     * @var integer Whether to enable CMQ message notification. 1: yes; 0: no.
     */
    public $IsEnableCmqNotify;

    /**
     * @var string Log prefix.
     */
    public $LogFilePrefix;

    /**
     * @var integer Manages the read/write attribute of an event. Value range: 1 (read-only), 2 (write-only), 3 (read/write)
     */
    public $ReadWriteAttribute;

    /**
     * @var string Unique ID of the request. Each request returns a unique ID. The RequestId is required to troubleshoot issues.
     */
    public $RequestId;
    /**
     * @param string $AuditName Tracking set name.
     * @param integer $AuditStatus Tracking set status. Value range: 1 (enabled), 0 (disabled).
     * @param string $CmqQueueName Queue name.
     * @param string $CmqRegion Region where the queue is located.
     * @param string $CosBucketName COS bucket name.
     * @param string $CosRegion Region where the COS bucket is located.
     * @param integer $IsEnableCmqNotify Whether to enable CMQ message notification. 1: yes; 0: no.
     * @param string $LogFilePrefix Log prefix.
     * @param integer $ReadWriteAttribute Manages the read/write attribute of an event. Value range: 1 (read-only), 2 (write-only), 3 (read/write)
     * @param string $RequestId Unique ID of the request. Each request returns a unique ID. The RequestId is required to troubleshoot issues.
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

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("CmqQueueName",$param) and $param["CmqQueueName"] !== null) {
            $this->CmqQueueName = $param["CmqQueueName"];
        }

        if (array_key_exists("CmqRegion",$param) and $param["CmqRegion"] !== null) {
            $this->CmqRegion = $param["CmqRegion"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("IsEnableCmqNotify",$param) and $param["IsEnableCmqNotify"] !== null) {
            $this->IsEnableCmqNotify = $param["IsEnableCmqNotify"];
        }

        if (array_key_exists("LogFilePrefix",$param) and $param["LogFilePrefix"] !== null) {
            $this->LogFilePrefix = $param["LogFilePrefix"];
        }

        if (array_key_exists("ReadWriteAttribute",$param) and $param["ReadWriteAttribute"] !== null) {
            $this->ReadWriteAttribute = $param["ReadWriteAttribute"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
