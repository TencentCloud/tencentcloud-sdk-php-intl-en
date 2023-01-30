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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the server with exploit prevention enabled
 *
 * @method string getHostName() Obtain Server name
 * @method void setHostName(string $HostName) Set Server name
 * @method string getHostIP() Obtain Server IP, which is the private IP
 * @method void setHostIP(string $HostIP) Set Server IP, which is the private IP
 * @method string getHostID() Obtain Server QUuid
 * @method void setHostID(string $HostID) Set Server QUuid
 * @method string getStatus() Obtain Plugin status. Valid values: `SUCCESS` (normal); `FAIL` (abnormal); `NO_DEFENDED` (not defended).
 * @method void setStatus(string $Status) Set Plugin status. Valid values: `SUCCESS` (normal); `FAIL` (abnormal); `NO_DEFENDED` (not defended).
 * @method string getPublicIP() Obtain Public IP
 * @method void setPublicIP(string $PublicIP) Set Public IP
 * @method string getCreateTime() Obtain First enablement time
 * @method void setCreateTime(string $CreateTime) Set First enablement time
 * @method string getModifyTime() Obtain Update time
 * @method void setModifyTime(string $ModifyTime) Set Update time
 */
class VulDefenceHost extends AbstractModel
{
    /**
     * @var string Server name
     */
    public $HostName;

    /**
     * @var string Server IP, which is the private IP
     */
    public $HostIP;

    /**
     * @var string Server QUuid
     */
    public $HostID;

    /**
     * @var string Plugin status. Valid values: `SUCCESS` (normal); `FAIL` (abnormal); `NO_DEFENDED` (not defended).
     */
    public $Status;

    /**
     * @var string Public IP
     */
    public $PublicIP;

    /**
     * @var string First enablement time
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $ModifyTime;

    /**
     * @param string $HostName Server name
     * @param string $HostIP Server IP, which is the private IP
     * @param string $HostID Server QUuid
     * @param string $Status Plugin status. Valid values: `SUCCESS` (normal); `FAIL` (abnormal); `NO_DEFENDED` (not defended).
     * @param string $PublicIP Public IP
     * @param string $CreateTime First enablement time
     * @param string $ModifyTime Update time
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
