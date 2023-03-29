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
 * CreateIntlTemplate request structure.
 *
 * @method RegistrantContact getRegistrantContact() Obtain The registrant contact.
 * @method void setRegistrantContact(RegistrantContact $RegistrantContact) Set The registrant contact.
 * @method AdminContact getAdminContact() Obtain The admin contact.
 * @method void setAdminContact(AdminContact $AdminContact) Set The admin contact.
 * @method TechnicalContact getTechnicalContact() Obtain The technical contact.
 * @method void setTechnicalContact(TechnicalContact $TechnicalContact) Set The technical contact.
 * @method BillingContact getBillingContact() Obtain The contact person for bills.
 * @method void setBillingContact(BillingContact $BillingContact) Set The contact person for bills.
 * @method string getTemplateType() Obtain The profile type. Valid values: `I` (individual, default), `E` (organization).
 * @method void setTemplateType(string $TemplateType) Set The profile type. Valid values: `I` (individual, default), `E` (organization).
 */
class CreateIntlTemplateRequest extends AbstractModel
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
     * @var string The profile type. Valid values: `I` (individual, default), `E` (organization).
     */
    public $TemplateType;

    /**
     * @param RegistrantContact $RegistrantContact The registrant contact.
     * @param AdminContact $AdminContact The admin contact.
     * @param TechnicalContact $TechnicalContact The technical contact.
     * @param BillingContact $BillingContact The contact person for bills.
     * @param string $TemplateType The profile type. Valid values: `I` (individual, default), `E` (organization).
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

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }
    }
}
