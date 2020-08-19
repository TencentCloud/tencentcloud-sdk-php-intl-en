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
namespace TencentCloud\Organization\V20181225\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on an invitation to an organization.
 *
 * @method integer getId() Obtain Invitation ID
 * @method void setId(integer $Id) Set Invitation ID
 * @method integer getUin() Obtain UIN of the invitee
 * @method void setUin(integer $Uin) Set UIN of the invitee
 * @method integer getHostUin() Obtain Creator UIN
 * @method void setHostUin(integer $HostUin) Set Creator UIN
 * @method string getHostName() Obtain Creator's name
 * @method void setHostName(string $HostName) Set Creator's name
 * @method string getHostMail() Obtain Creator's email address
 * @method void setHostMail(string $HostMail) Set Creator's email address
 * @method integer getStatus() Obtain Invitation status. `-1`: expired; `0`: normal; `1`: accepted; `2`: invalid; `3`: cancelled
 * @method void setStatus(integer $Status) Set Invitation status. `-1`: expired; `0`: normal; `1`: accepted; `2`: invalid; `3`: cancelled
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getRemark() Obtain Notes
 * @method void setRemark(string $Remark) Set Notes
 * @method integer getOrgType() Obtain Organization type
 * @method void setOrgType(integer $OrgType) Set Organization type
 * @method string getInviteTime() Obtain Time of invitation
 * @method void setInviteTime(string $InviteTime) Set Time of invitation
 * @method string getExpireTime() Obtain Expiration time
 * @method void setExpireTime(string $ExpireTime) Set Expiration time
 */
class OrgInvitation extends AbstractModel
{
    /**
     * @var integer Invitation ID
     */
    public $Id;

    /**
     * @var integer UIN of the invitee
     */
    public $Uin;

    /**
     * @var integer Creator UIN
     */
    public $HostUin;

    /**
     * @var string Creator's name
     */
    public $HostName;

    /**
     * @var string Creator's email address
     */
    public $HostMail;

    /**
     * @var integer Invitation status. `-1`: expired; `0`: normal; `1`: accepted; `2`: invalid; `3`: cancelled
     */
    public $Status;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Notes
     */
    public $Remark;

    /**
     * @var integer Organization type
     */
    public $OrgType;

    /**
     * @var string Time of invitation
     */
    public $InviteTime;

    /**
     * @var string Expiration time
     */
    public $ExpireTime;

    /**
     * @param integer $Id Invitation ID
     * @param integer $Uin UIN of the invitee
     * @param integer $HostUin Creator UIN
     * @param string $HostName Creator's name
     * @param string $HostMail Creator's email address
     * @param integer $Status Invitation status. `-1`: expired; `0`: normal; `1`: accepted; `2`: invalid; `3`: cancelled
     * @param string $Name Name
     * @param string $Remark Notes
     * @param integer $OrgType Organization type
     * @param string $InviteTime Time of invitation
     * @param string $ExpireTime Expiration time
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

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("HostUin",$param) and $param["HostUin"] !== null) {
            $this->HostUin = $param["HostUin"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostMail",$param) and $param["HostMail"] !== null) {
            $this->HostMail = $param["HostMail"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("OrgType",$param) and $param["OrgType"] !== null) {
            $this->OrgType = $param["OrgType"];
        }

        if (array_key_exists("InviteTime",$param) and $param["InviteTime"] !== null) {
            $this->InviteTime = $param["InviteTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
