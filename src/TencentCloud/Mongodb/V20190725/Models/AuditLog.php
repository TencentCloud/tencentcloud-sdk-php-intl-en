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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audit log
 *
 * @method integer getAffectRows() Obtain Number of affected rows
 * @method void setAffectRows(integer $AffectRows) Set Number of affected rows
 * @method string getAtype() Obtain Operation type. For example: grantRolesToRole, dropRole.
 * @method void setAtype(string $Atype) Set Operation type. For example: grantRolesToRole, dropRole.
 * @method integer getExecTime() Obtain Execution time. Unit: ms.
 * @method void setExecTime(integer $ExecTime) Set Execution time. Unit: ms.
 * @method string getHost() Obtain Client IP address.
 * @method void setHost(string $Host) Set Client IP address.
 * @method string getParam() Obtain Operation parameter. Includes operation parameter information.
 * @method void setParam(string $Param) Set Operation parameter. Includes operation parameter information.
 * @method integer getResult() Obtain Execution result. 0 indicates success, non-0 indicates failure.
 * @method void setResult(integer $Result) Set Execution result. 0 indicates success, non-0 indicates failure.
 * @method string getRoles() Obtain User role list. Format: role@db,role@db.
 * @method void setRoles(string $Roles) Set User role list. Format: role@db,role@db.
 * @method string getTimestamp() Obtain Operation timestamp. Format: YYYY-MM-DD HH:mm:ss.
 * @method void setTimestamp(string $Timestamp) Set Operation timestamp. Format: YYYY-MM-DD HH:mm:ss.
 * @method string getUser() Obtain Username. Format: user@db.
 * @method void setUser(string $User) Set Username. Format: user@db.
 */
class AuditLog extends AbstractModel
{
    /**
     * @var integer Number of affected rows
     */
    public $AffectRows;

    /**
     * @var string Operation type. For example: grantRolesToRole, dropRole.
     */
    public $Atype;

    /**
     * @var integer Execution time. Unit: ms.
     */
    public $ExecTime;

    /**
     * @var string Client IP address.
     */
    public $Host;

    /**
     * @var string Operation parameter. Includes operation parameter information.
     */
    public $Param;

    /**
     * @var integer Execution result. 0 indicates success, non-0 indicates failure.
     */
    public $Result;

    /**
     * @var string User role list. Format: role@db,role@db.
     */
    public $Roles;

    /**
     * @var string Operation timestamp. Format: YYYY-MM-DD HH:mm:ss.
     */
    public $Timestamp;

    /**
     * @var string Username. Format: user@db.
     */
    public $User;

    /**
     * @param integer $AffectRows Number of affected rows
     * @param string $Atype Operation type. For example: grantRolesToRole, dropRole.
     * @param integer $ExecTime Execution time. Unit: ms.
     * @param string $Host Client IP address.
     * @param string $Param Operation parameter. Includes operation parameter information.
     * @param integer $Result Execution result. 0 indicates success, non-0 indicates failure.
     * @param string $Roles User role list. Format: role@db,role@db.
     * @param string $Timestamp Operation timestamp. Format: YYYY-MM-DD HH:mm:ss.
     * @param string $User Username. Format: user@db.
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
        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("Atype",$param) and $param["Atype"] !== null) {
            $this->Atype = $param["Atype"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = $param["Roles"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }
    }
}
