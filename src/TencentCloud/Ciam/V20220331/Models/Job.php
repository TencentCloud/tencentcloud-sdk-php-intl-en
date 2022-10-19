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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task details
 *
 * @method string getId() Obtain Task ID
 * @method void setId(string $Id) Set Task ID
 * @method string getStatus() Obtain Task status

<li> **PENDING** </li>  Pending
<li> **PROCESSING** </li>  Executing
<li> **COMPLETED** </li>  Completed
<li> **FAILED** </li>  Failed
 * @method void setStatus(string $Status) Set Task status

<li> **PENDING** </li>  Pending
<li> **PROCESSING** </li>  Executing
<li> **COMPLETED** </li>  Completed
<li> **FAILED** </li>  Failed
 * @method string getType() Obtain Task type

<li> **IMPORT_USER** </li>  User import
<li> **EXPORT_USER** </li>  User export
 * @method void setType(string $Type) Set Task type

<li> **IMPORT_USER** </li>  User import
<li> **EXPORT_USER** </li>  User export
 * @method integer getCreatedDate() Obtain Task creation time
 * @method void setCreatedDate(integer $CreatedDate) Set Task creation time
 * @method string getFormat() Obtain Data type of the task

<li> **NDJSON** </li>  New-line Delimited JSON
<li> **CSV** </li>  Comma-Separated Values
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFormat(string $Format) Set Data type of the task

<li> **NDJSON** </li>  New-line Delimited JSON
<li> **CSV** </li>  Comma-Separated Values
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLocation() Obtain Task result download address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocation(string $Location) Set Task result download address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getErrorDetails() Obtain Failure details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorDetails(array $ErrorDetails) Set Failure details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFailedUsers() Obtain Failed user
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailedUsers(array $FailedUsers) Set Failed user
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Job extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $Id;

    /**
     * @var string Task status

<li> **PENDING** </li>  Pending
<li> **PROCESSING** </li>  Executing
<li> **COMPLETED** </li>  Completed
<li> **FAILED** </li>  Failed
     */
    public $Status;

    /**
     * @var string Task type

<li> **IMPORT_USER** </li>  User import
<li> **EXPORT_USER** </li>  User export
     */
    public $Type;

    /**
     * @var integer Task creation time
     */
    public $CreatedDate;

    /**
     * @var string Data type of the task

<li> **NDJSON** </li>  New-line Delimited JSON
<li> **CSV** </li>  Comma-Separated Values
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Format;

    /**
     * @var string Task result download address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Location;

    /**
     * @var array Failure details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorDetails;

    /**
     * @var array Failed user
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailedUsers;

    /**
     * @param string $Id Task ID
     * @param string $Status Task status

<li> **PENDING** </li>  Pending
<li> **PROCESSING** </li>  Executing
<li> **COMPLETED** </li>  Completed
<li> **FAILED** </li>  Failed
     * @param string $Type Task type

<li> **IMPORT_USER** </li>  User import
<li> **EXPORT_USER** </li>  User export
     * @param integer $CreatedDate Task creation time
     * @param string $Format Data type of the task

<li> **NDJSON** </li>  New-line Delimited JSON
<li> **CSV** </li>  Comma-Separated Values
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Location Task result download address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ErrorDetails Failure details
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $FailedUsers Failed user
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("ErrorDetails",$param) and $param["ErrorDetails"] !== null) {
            $this->ErrorDetails = [];
            foreach ($param["ErrorDetails"] as $key => $value){
                $obj = new ErrorDetails();
                $obj->deserialize($value);
                array_push($this->ErrorDetails, $obj);
            }
        }

        if (array_key_exists("FailedUsers",$param) and $param["FailedUsers"] !== null) {
            $this->FailedUsers = [];
            foreach ($param["FailedUsers"] as $key => $value){
                $obj = new FailedUsers();
                $obj->deserialize($value);
                array_push($this->FailedUsers, $obj);
            }
        }
    }
}
