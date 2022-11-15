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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Complex type of output parameters for querying customer's credit
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getType() Obtain Type
 * @method void setType(string $Type) Set Type
 * @method string getMobile() Obtain Mobile number
 * @method void setMobile(string $Mobile) Set Mobile number
 * @method string getEmail() Obtain Email
 * @method void setEmail(string $Email) Set Email
 * @method string getArrears() Obtain Overdue payment flag
 * @method void setArrears(string $Arrears) Set Overdue payment flag
 * @method string getAssociationTime() Obtain Binding time
 * @method void setAssociationTime(string $AssociationTime) Set Binding time
 * @method string getRecentExpiry() Obtain Expiration time
 * @method void setRecentExpiry(string $RecentExpiry) Set Expiration time
 * @method integer getClientUin() Obtain Customer UIN
 * @method void setClientUin(integer $ClientUin) Set Customer UIN
 * @method float getCredit() Obtain Credit allocated to a customer
 * @method void setCredit(float $Credit) Set Credit allocated to a customer
 * @method float getRemainingCredit() Obtain The remaining credit of a customer
 * @method void setRemainingCredit(float $RemainingCredit) Set The remaining credit of a customer
 * @method integer getIdentifyType() Obtain `0`: Identity not verified; `1`: Individual identity verified; `2`: Enterprise identity verified.
 * @method void setIdentifyType(integer $IdentifyType) Set `0`: Identity not verified; `1`: Individual identity verified; `2`: Enterprise identity verified.
 * @method string getRemark() Obtain Customer remarks
 * @method void setRemark(string $Remark) Set Customer remarks
 * @method integer getForce() Obtain Forced status
 * @method void setForce(integer $Force) Set Forced status
 */
class QueryCustomersCreditData extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Type
     */
    public $Type;

    /**
     * @var string Mobile number
     */
    public $Mobile;

    /**
     * @var string Email
     */
    public $Email;

    /**
     * @var string Overdue payment flag
     */
    public $Arrears;

    /**
     * @var string Binding time
     */
    public $AssociationTime;

    /**
     * @var string Expiration time
     */
    public $RecentExpiry;

    /**
     * @var integer Customer UIN
     */
    public $ClientUin;

    /**
     * @var float Credit allocated to a customer
     */
    public $Credit;

    /**
     * @var float The remaining credit of a customer
     */
    public $RemainingCredit;

    /**
     * @var integer `0`: Identity not verified; `1`: Individual identity verified; `2`: Enterprise identity verified.
     */
    public $IdentifyType;

    /**
     * @var string Customer remarks
     */
    public $Remark;

    /**
     * @var integer Forced status
     */
    public $Force;

    /**
     * @param string $Name Name
     * @param string $Type Type
     * @param string $Mobile Mobile number
     * @param string $Email Email
     * @param string $Arrears Overdue payment flag
     * @param string $AssociationTime Binding time
     * @param string $RecentExpiry Expiration time
     * @param integer $ClientUin Customer UIN
     * @param float $Credit Credit allocated to a customer
     * @param float $RemainingCredit The remaining credit of a customer
     * @param integer $IdentifyType `0`: Identity not verified; `1`: Individual identity verified; `2`: Enterprise identity verified.
     * @param string $Remark Customer remarks
     * @param integer $Force Forced status
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Arrears",$param) and $param["Arrears"] !== null) {
            $this->Arrears = $param["Arrears"];
        }

        if (array_key_exists("AssociationTime",$param) and $param["AssociationTime"] !== null) {
            $this->AssociationTime = $param["AssociationTime"];
        }

        if (array_key_exists("RecentExpiry",$param) and $param["RecentExpiry"] !== null) {
            $this->RecentExpiry = $param["RecentExpiry"];
        }

        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("Credit",$param) and $param["Credit"] !== null) {
            $this->Credit = $param["Credit"];
        }

        if (array_key_exists("RemainingCredit",$param) and $param["RemainingCredit"] !== null) {
            $this->RemainingCredit = $param["RemainingCredit"];
        }

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
