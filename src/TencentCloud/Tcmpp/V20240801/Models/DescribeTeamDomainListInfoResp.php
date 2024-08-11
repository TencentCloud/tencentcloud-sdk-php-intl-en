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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of team domains
 *
 * @method integer getDomainId() Obtain Domain ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainId(integer $DomainId) Set Domain ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPId() Obtain Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPId(string $MNPId) Set Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMNPName() Obtain Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMNPName(string $MNPName) Set Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomainUrl() Obtain Domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainUrl(string $DomainUrl) Set Domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDomainType() Obtain Type 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainType(integer $DomainType) Set Type 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Domain name status. 1: Normal; 2: Disabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Domain name status. 1: Normal; 2: Disabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUser() Obtain Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUser(string $CreateUser) Set Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain The creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeTeamDomainListInfoResp extends AbstractModel
{
    /**
     * @var integer Domain ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainId;

    /**
     * @var string Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPId;

    /**
     * @var string Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MNPName;

    /**
     * @var string Domain name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainUrl;

    /**
     * @var integer Type 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainType;

    /**
     * @var integer Domain name status. 1: Normal; 2: Disabled
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Creator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUser;

    /**
     * @var string The creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @param integer $DomainId Domain ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPId Mini program ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MNPName Mini program name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DomainUrl Domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DomainType Type 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Domain name status. 1: Normal; 2: Disabled
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUser Creator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime The creation time.
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("DomainUrl",$param) and $param["DomainUrl"] !== null) {
            $this->DomainUrl = $param["DomainUrl"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
