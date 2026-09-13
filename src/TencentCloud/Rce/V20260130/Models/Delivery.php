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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Delivery information
 *
 * @method string getDeliveryMethod() Obtain <p>The method of the delivery</p><ul><li>physical</li><li>electronic</li></ul>
 * @method void setDeliveryMethod(string $DeliveryMethod) Set <p>The method of the delivery</p><ul><li>physical</li><li>electronic</li></ul>
 * @method Amount getDeliveryAmount() Obtain <p>The fee of the delivery</p>
 * @method void setDeliveryAmount(Amount $DeliveryAmount) Set <p>The fee of the delivery</p>
 * @method Address getDeliveryAddress() Obtain <p>The address of the delivery</p>
 * @method void setDeliveryAddress(Address $DeliveryAddress) Set <p>The address of the delivery</p>
 * @method string getConsigneePhone() Obtain <p>Phone number of the consignee</p><p>parameter format: format with "+", region code, and number that complies with the E.164 standard</p>
 * @method void setConsigneePhone(string $ConsigneePhone) Set <p>Phone number of the consignee</p><p>parameter format: format with "+", region code, and number that complies with the E.164 standard</p>
 * @method string getConsigneeEmail() Obtain <p>Email of the consignee</p>
 * @method void setConsigneeEmail(string $ConsigneeEmail) Set <p>Email of the consignee</p>
 * @method string getConsigneeName() Obtain <p>Full name of the consignee</p>
 * @method void setConsigneeName(string $ConsigneeName) Set <p>Full name of the consignee</p>
 * @method boolean getExpedited() Obtain <p> Whether is the delivery expedited</p>
 * @method void setExpedited(boolean $Expedited) Set <p> Whether is the delivery expedited</p>
 * @method string getDeliveryCarrier() Obtain <p>The carrier of the delivery, usually a logistics company</p>
 * @method void setDeliveryCarrier(string $DeliveryCarrier) Set <p>The carrier of the delivery, usually a logistics company</p>
 * @method string getDeliveryTracking() Obtain <p>The number(s) used to track the delivery</p>
 * @method void setDeliveryTracking(string $DeliveryTracking) Set <p>The number(s) used to track the delivery</p>
 */
class Delivery extends AbstractModel
{
    /**
     * @var string <p>The method of the delivery</p><ul><li>physical</li><li>electronic</li></ul>
     */
    public $DeliveryMethod;

    /**
     * @var Amount <p>The fee of the delivery</p>
     */
    public $DeliveryAmount;

    /**
     * @var Address <p>The address of the delivery</p>
     */
    public $DeliveryAddress;

    /**
     * @var string <p>Phone number of the consignee</p><p>parameter format: format with "+", region code, and number that complies with the E.164 standard</p>
     */
    public $ConsigneePhone;

    /**
     * @var string <p>Email of the consignee</p>
     */
    public $ConsigneeEmail;

    /**
     * @var string <p>Full name of the consignee</p>
     */
    public $ConsigneeName;

    /**
     * @var boolean <p> Whether is the delivery expedited</p>
     */
    public $Expedited;

    /**
     * @var string <p>The carrier of the delivery, usually a logistics company</p>
     */
    public $DeliveryCarrier;

    /**
     * @var string <p>The number(s) used to track the delivery</p>
     */
    public $DeliveryTracking;

    /**
     * @param string $DeliveryMethod <p>The method of the delivery</p><ul><li>physical</li><li>electronic</li></ul>
     * @param Amount $DeliveryAmount <p>The fee of the delivery</p>
     * @param Address $DeliveryAddress <p>The address of the delivery</p>
     * @param string $ConsigneePhone <p>Phone number of the consignee</p><p>parameter format: format with "+", region code, and number that complies with the E.164 standard</p>
     * @param string $ConsigneeEmail <p>Email of the consignee</p>
     * @param string $ConsigneeName <p>Full name of the consignee</p>
     * @param boolean $Expedited <p> Whether is the delivery expedited</p>
     * @param string $DeliveryCarrier <p>The carrier of the delivery, usually a logistics company</p>
     * @param string $DeliveryTracking <p>The number(s) used to track the delivery</p>
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
        if (array_key_exists("DeliveryMethod",$param) and $param["DeliveryMethod"] !== null) {
            $this->DeliveryMethod = $param["DeliveryMethod"];
        }

        if (array_key_exists("DeliveryAmount",$param) and $param["DeliveryAmount"] !== null) {
            $this->DeliveryAmount = new Amount();
            $this->DeliveryAmount->deserialize($param["DeliveryAmount"]);
        }

        if (array_key_exists("DeliveryAddress",$param) and $param["DeliveryAddress"] !== null) {
            $this->DeliveryAddress = new Address();
            $this->DeliveryAddress->deserialize($param["DeliveryAddress"]);
        }

        if (array_key_exists("ConsigneePhone",$param) and $param["ConsigneePhone"] !== null) {
            $this->ConsigneePhone = $param["ConsigneePhone"];
        }

        if (array_key_exists("ConsigneeEmail",$param) and $param["ConsigneeEmail"] !== null) {
            $this->ConsigneeEmail = $param["ConsigneeEmail"];
        }

        if (array_key_exists("ConsigneeName",$param) and $param["ConsigneeName"] !== null) {
            $this->ConsigneeName = $param["ConsigneeName"];
        }

        if (array_key_exists("Expedited",$param) and $param["Expedited"] !== null) {
            $this->Expedited = $param["Expedited"];
        }

        if (array_key_exists("DeliveryCarrier",$param) and $param["DeliveryCarrier"] !== null) {
            $this->DeliveryCarrier = $param["DeliveryCarrier"];
        }

        if (array_key_exists("DeliveryTracking",$param) and $param["DeliveryTracking"] !== null) {
            $this->DeliveryTracking = $param["DeliveryTracking"];
        }
    }
}
