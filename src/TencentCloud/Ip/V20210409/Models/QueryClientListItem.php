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
namespace TencentCloud\Ip\V20210409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reseller's customer list
 *
 * @method string getName() Obtain Name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMobile() Obtain Phone
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMobile(string $Mobile) Set Phone
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEmail() Obtain Email
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEmail(string $Email) Set Email
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getArrears() Obtain Overdue payment flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setArrears(string $Arrears) Set Overdue payment flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAssociationTime() Obtain Binding time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAssociationTime(string $AssociationTime) Set Binding time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRecentExpiry() Obtain Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRecentExpiry(string $RecentExpiry) Set Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getClientUin() Obtain Customer UIN
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClientUin(integer $ClientUin) Set Customer UIN
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getCreditAmount() Obtain Credit granted to customer
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreditAmount(float $CreditAmount) Set Credit granted to customer
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getRestCreditAmount() Obtain Customer's remaining credit
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRestCreditAmount(float $RestCreditAmount) Set Customer's remaining credit
Note: this field may return null, indicating that no valid values can be obtained.
 */
class QueryClientListItem extends AbstractModel
{
    /**
     * @var string Name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Phone
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Mobile;

    /**
     * @var string Email
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Email;

    /**
     * @var string Overdue payment flag
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Arrears;

    /**
     * @var string Binding time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AssociationTime;

    /**
     * @var string Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RecentExpiry;

    /**
     * @var integer Customer UIN
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClientUin;

    /**
     * @var float Credit granted to customer
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreditAmount;

    /**
     * @var float Customer's remaining credit
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RestCreditAmount;

    /**
     * @param string $Name Name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Type Type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Mobile Phone
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Email Email
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Arrears Overdue payment flag
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AssociationTime Binding time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RecentExpiry Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ClientUin Customer UIN
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $CreditAmount Credit granted to customer
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $RestCreditAmount Customer's remaining credit
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("CreditAmount",$param) and $param["CreditAmount"] !== null) {
            $this->CreditAmount = $param["CreditAmount"];
        }

        if (array_key_exists("RestCreditAmount",$param) and $param["RestCreditAmount"] !== null) {
            $this->RestCreditAmount = $param["RestCreditAmount"];
        }
    }
}
