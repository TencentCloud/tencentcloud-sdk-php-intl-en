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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBDiagReportTask request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getStartTime() Obtain Start time, such as `2020-11-08T14:00:00+08:00`.
 * @method void setStartTime(string $StartTime) Set Start time, such as `2020-11-08T14:00:00+08:00`.
 * @method string getEndTime() Obtain End time, such as `2020-11-09T14:00:00+08:00`.
 * @method void setEndTime(string $EndTime) Set End time, such as `2020-11-09T14:00:00+08:00`.
 * @method integer getSendMailFlag() Obtain Whether to send an email. Valid values: 0 - Yes, 1 - No.
 * @method void setSendMailFlag(integer $SendMailFlag) Set Whether to send an email. Valid values: 0 - Yes, 1 - No.
 * @method array getContactPerson() Obtain An array of contact IDs to receive the email.
 * @method void setContactPerson(array $ContactPerson) Set An array of contact IDs to receive the email.
 * @method array getContactGroup() Obtain An array of contact group IDs to receive the email.
 * @method void setContactGroup(array $ContactGroup) Set An array of contact group IDs to receive the email.
 * @method string getProduct() Obtain Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)). Default value: `mysql`.
 * @method void setProduct(string $Product) Set Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)). Default value: `mysql`.
 */
class CreateDBDiagReportTaskRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Start time, such as `2020-11-08T14:00:00+08:00`.
     */
    public $StartTime;

    /**
     * @var string End time, such as `2020-11-09T14:00:00+08:00`.
     */
    public $EndTime;

    /**
     * @var integer Whether to send an email. Valid values: 0 - Yes, 1 - No.
     */
    public $SendMailFlag;

    /**
     * @var array An array of contact IDs to receive the email.
     */
    public $ContactPerson;

    /**
     * @var array An array of contact group IDs to receive the email.
     */
    public $ContactGroup;

    /**
     * @var string Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)). Default value: `mysql`.
     */
    public $Product;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $StartTime Start time, such as `2020-11-08T14:00:00+08:00`.
     * @param string $EndTime End time, such as `2020-11-09T14:00:00+08:00`.
     * @param integer $SendMailFlag Whether to send an email. Valid values: 0 - Yes, 1 - No.
     * @param array $ContactPerson An array of contact IDs to receive the email.
     * @param array $ContactGroup An array of contact group IDs to receive the email.
     * @param string $Product Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)). Default value: `mysql`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SendMailFlag",$param) and $param["SendMailFlag"] !== null) {
            $this->SendMailFlag = $param["SendMailFlag"];
        }

        if (array_key_exists("ContactPerson",$param) and $param["ContactPerson"] !== null) {
            $this->ContactPerson = $param["ContactPerson"];
        }

        if (array_key_exists("ContactGroup",$param) and $param["ContactGroup"] !== null) {
            $this->ContactGroup = $param["ContactGroup"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
