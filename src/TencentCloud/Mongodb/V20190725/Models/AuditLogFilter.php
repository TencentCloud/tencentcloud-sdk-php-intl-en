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
 * Audit log filter criteria
 *
 * @method array getHost() Obtain Client IP address.
 * @method void setHost(array $Host) Set Client IP address.
 * @method array getUser() Obtain Username.
 * @method void setUser(array $User) Set Username.
 * @method integer getExecTime() Obtain Execution time. Unit: ms. Filter audit logs with execution time more than this value.
 * @method void setExecTime(integer $ExecTime) Set Execution time. Unit: ms. Filter audit logs with execution time more than this value.
 * @method integer getAffectRows() Obtain Number of affected rows. Filter audit logs with affected rows more than this value.
 * @method void setAffectRows(integer $AffectRows) Set Number of affected rows. Filter audit logs with affected rows more than this value.
 * @method array getAtype() Obtain Operation type.
 * @method void setAtype(array $Atype) Set Operation type.
 * @method array getResult() Obtain Execution result.
 * @method void setResult(array $Result) Set Execution result.
 * @method array getParam() Obtain Filter logs using this keyword
 * @method void setParam(array $Param) Set Filter logs using this keyword
 */
class AuditLogFilter extends AbstractModel
{
    /**
     * @var array Client IP address.
     */
    public $Host;

    /**
     * @var array Username.
     */
    public $User;

    /**
     * @var integer Execution time. Unit: ms. Filter audit logs with execution time more than this value.
     */
    public $ExecTime;

    /**
     * @var integer Number of affected rows. Filter audit logs with affected rows more than this value.
     */
    public $AffectRows;

    /**
     * @var array Operation type.
     */
    public $Atype;

    /**
     * @var array Execution result.
     */
    public $Result;

    /**
     * @var array Filter logs using this keyword
     */
    public $Param;

    /**
     * @param array $Host Client IP address.
     * @param array $User Username.
     * @param integer $ExecTime Execution time. Unit: ms. Filter audit logs with execution time more than this value.
     * @param integer $AffectRows Number of affected rows. Filter audit logs with affected rows more than this value.
     * @param array $Atype Operation type.
     * @param array $Result Execution result.
     * @param array $Param Filter logs using this keyword
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("Atype",$param) and $param["Atype"] !== null) {
            $this->Atype = $param["Atype"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }
    }
}
