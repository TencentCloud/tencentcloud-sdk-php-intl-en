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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The registrant profile details.
 *
 * @method RegistrantContact getRegistrantContact() Obtain The registrant contact.
 * @method void setRegistrantContact(RegistrantContact $RegistrantContact) Set The registrant contact.
 * @method AdminContact getAdminContact() Obtain The admin contact.
 * @method void setAdminContact(AdminContact $AdminContact) Set The admin contact.
 * @method TechnicalContact getTechnicalContact() Obtain The technical contact.
 * @method void setTechnicalContact(TechnicalContact $TechnicalContact) Set The technical contact.
 * @method BillingContact getBillingContact() Obtain The contact person for bills.
 * @method void setBillingContact(BillingContact $BillingContact) Set The contact person for bills.
 * @method string getCreatedOn() Obtain The creation time.
 * @method void setCreatedOn(string $CreatedOn) Set The creation time.
 * @method string getTemplateId() Obtain The profile ID.
 * @method void setTemplateId(string $TemplateId) Set The profile ID.
 * @method string getTemplateType() Obtain The registrant type. Valid values: `I` (individual), `E` (organization).
 * @method void setTemplateType(string $TemplateType) Set The registrant type. Valid values: `I` (individual), `E` (organization).
 * @method string getUpdatedOn() Obtain The last updated time.
 * @method void setUpdatedOn(string $UpdatedOn) Set The last updated time.
 * @method string getUin() Obtain The account ID.
 * @method void setUin(string $Uin) Set The account ID.
 * @method integer getIsDefault() Obtain Whether the profile is the default one.
 * @method void setIsDefault(integer $IsDefault) Set Whether the profile is the default one.
 */
class IntlTemplateInfo extends AbstractModel
{
    /**
     * @var RegistrantContact The registrant contact.
     */
    public $RegistrantContact;

    /**
     * @var AdminContact The admin contact.
     */
    public $AdminContact;

    /**
     * @var TechnicalContact The technical contact.
     */
    public $TechnicalContact;

    /**
     * @var BillingContact The contact person for bills.
     */
    public $BillingContact;

    /**
     * @var string The creation time.
     */
    public $CreatedOn;

    /**
     * @var string The profile ID.
     */
    public $TemplateId;

    /**
     * @var string The registrant type. Valid values: `I` (individual), `E` (organization).
     */
    public $TemplateType;

    /**
     * @var string The last updated time.
     */
    public $UpdatedOn;

    /**
     * @var string The account ID.
     */
    public $Uin;

    /**
     * @var integer Whether the profile is the default one.
     */
    public $IsDefault;

    /**
     * @param RegistrantContact $RegistrantContact The registrant contact.
     * @param AdminContact $AdminContact The admin contact.
     * @param TechnicalContact $TechnicalContact The technical contact.
     * @param BillingContact $BillingContact The contact person for bills.
     * @param string $CreatedOn The creation time.
     * @param string $TemplateId The profile ID.
     * @param string $TemplateType The registrant type. Valid values: `I` (individual), `E` (organization).
     * @param string $UpdatedOn The last updated time.
     * @param string $Uin The account ID.
     * @param integer $IsDefault Whether the profile is the default one.
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
        if (array_key_exists("RegistrantContact",$param) and $param["RegistrantContact"] !== null) {
            $this->RegistrantContact = new RegistrantContact();
            $this->RegistrantContact->deserialize($param["RegistrantContact"]);
        }

        if (array_key_exists("AdminContact",$param) and $param["AdminContact"] !== null) {
            $this->AdminContact = new AdminContact();
            $this->AdminContact->deserialize($param["AdminContact"]);
        }

        if (array_key_exists("TechnicalContact",$param) and $param["TechnicalContact"] !== null) {
            $this->TechnicalContact = new TechnicalContact();
            $this->TechnicalContact->deserialize($param["TechnicalContact"]);
        }

        if (array_key_exists("BillingContact",$param) and $param["BillingContact"] !== null) {
            $this->BillingContact = new BillingContact();
            $this->BillingContact->deserialize($param["BillingContact"]);
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
