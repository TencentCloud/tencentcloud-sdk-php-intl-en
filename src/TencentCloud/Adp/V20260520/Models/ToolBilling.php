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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ToolBilling
 *
 * @method BasicBilling getBasicBilling() Obtain <p>Basic Billing Information</p>
 * @method void setBasicBilling(BasicBilling $BasicBilling) Set <p>Basic Billing Information</p>
 * @method integer getBillingType() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>BILLING_TYPE_FREE</td> <td>0</td> <td>Free</td> </tr> <tr> <td>BILLING_TYPE_LIMITED_FREE</td> <td>1</td> <td>Limited-time free</td> </tr> <tr> <td>BILLING_TYPE_OFFICIAL_PAID</td> <td>2</td> <td>Official charges</td> </tr> <tr> <td>BILLING_TYPE_OFFICIAL_PAID_OLD_FREE</td> <td>3</td> <td>Official charges (fees for new/upgraded users, limited-time free for existing users)</td> </tr> </tbody> </table>
 * @method void setBillingType(integer $BillingType) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>BILLING_TYPE_FREE</td> <td>0</td> <td>Free</td> </tr> <tr> <td>BILLING_TYPE_LIMITED_FREE</td> <td>1</td> <td>Limited-time free</td> </tr> <tr> <td>BILLING_TYPE_OFFICIAL_PAID</td> <td>2</td> <td>Official charges</td> </tr> <tr> <td>BILLING_TYPE_OFFICIAL_PAID_OLD_FREE</td> <td>3</td> <td>Official charges (fees for new/upgraded users, limited-time free for existing users)</td> </tr> </tbody> </table>
 * @method ComplexBilling getComplexBilling() Obtain <p>Composite type billing information</p>
 * @method void setComplexBilling(ComplexBilling $ComplexBilling) Set <p>Composite type billing information</p>
 * @method DuplexBilling getDuplexBilling() Obtain <p>Bidirectional billing information</p>
 * @method void setDuplexBilling(DuplexBilling $DuplexBilling) Set <p>Bidirectional billing information</p>
 */
class ToolBilling extends AbstractModel
{
    /**
     * @var BasicBilling <p>Basic Billing Information</p>
     */
    public $BasicBilling;

    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>BILLING_TYPE_FREE</td> <td>0</td> <td>Free</td> </tr> <tr> <td>BILLING_TYPE_LIMITED_FREE</td> <td>1</td> <td>Limited-time free</td> </tr> <tr> <td>BILLING_TYPE_OFFICIAL_PAID</td> <td>2</td> <td>Official charges</td> </tr> <tr> <td>BILLING_TYPE_OFFICIAL_PAID_OLD_FREE</td> <td>3</td> <td>Official charges (fees for new/upgraded users, limited-time free for existing users)</td> </tr> </tbody> </table>
     */
    public $BillingType;

    /**
     * @var ComplexBilling <p>Composite type billing information</p>
     */
    public $ComplexBilling;

    /**
     * @var DuplexBilling <p>Bidirectional billing information</p>
     */
    public $DuplexBilling;

    /**
     * @param BasicBilling $BasicBilling <p>Basic Billing Information</p>
     * @param integer $BillingType <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>BILLING_TYPE_FREE</td> <td>0</td> <td>Free</td> </tr> <tr> <td>BILLING_TYPE_LIMITED_FREE</td> <td>1</td> <td>Limited-time free</td> </tr> <tr> <td>BILLING_TYPE_OFFICIAL_PAID</td> <td>2</td> <td>Official charges</td> </tr> <tr> <td>BILLING_TYPE_OFFICIAL_PAID_OLD_FREE</td> <td>3</td> <td>Official charges (fees for new/upgraded users, limited-time free for existing users)</td> </tr> </tbody> </table>
     * @param ComplexBilling $ComplexBilling <p>Composite type billing information</p>
     * @param DuplexBilling $DuplexBilling <p>Bidirectional billing information</p>
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
        if (array_key_exists("BasicBilling",$param) and $param["BasicBilling"] !== null) {
            $this->BasicBilling = new BasicBilling();
            $this->BasicBilling->deserialize($param["BasicBilling"]);
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }

        if (array_key_exists("ComplexBilling",$param) and $param["ComplexBilling"] !== null) {
            $this->ComplexBilling = new ComplexBilling();
            $this->ComplexBilling->deserialize($param["ComplexBilling"]);
        }

        if (array_key_exists("DuplexBilling",$param) and $param["DuplexBilling"] !== null) {
            $this->DuplexBilling = new DuplexBilling();
            $this->DuplexBilling->deserialize($param["DuplexBilling"]);
        }
    }
}
