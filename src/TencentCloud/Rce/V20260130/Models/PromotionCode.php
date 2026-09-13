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
 * The details of the promotion code
 *
 * @method string getId() Obtain <p>The ID of the promotion code</p>
 * @method void setId(string $Id) Set <p>The ID of the promotion code</p>
 * @method string getType() Obtain <p>The type of the promotion code, for example: qrcode, barcode, miniprogram code</p>
 * @method void setType(string $Type) Set <p>The type of the promotion code, for example: qrcode, barcode, miniprogram code</p>
 * @method string getImageLink() Obtain <p>The url or hyperlink to the image</p>
 * @method void setImageLink(string $ImageLink) Set <p>The url or hyperlink to the image</p>
 * @method Address getAddress() Obtain <p>The address where the promotion code worked</p>
 * @method void setAddress(Address $Address) Set <p>The address where the promotion code worked</p>
 * @method array getItems() Obtain <p>The item(s) associated with the promotion code</p>
 * @method void setItems(array $Items) Set <p>The item(s) associated with the promotion code</p>
 */
class PromotionCode extends AbstractModel
{
    /**
     * @var string <p>The ID of the promotion code</p>
     */
    public $Id;

    /**
     * @var string <p>The type of the promotion code, for example: qrcode, barcode, miniprogram code</p>
     */
    public $Type;

    /**
     * @var string <p>The url or hyperlink to the image</p>
     */
    public $ImageLink;

    /**
     * @var Address <p>The address where the promotion code worked</p>
     */
    public $Address;

    /**
     * @var array <p>The item(s) associated with the promotion code</p>
     */
    public $Items;

    /**
     * @param string $Id <p>The ID of the promotion code</p>
     * @param string $Type <p>The type of the promotion code, for example: qrcode, barcode, miniprogram code</p>
     * @param string $ImageLink <p>The url or hyperlink to the image</p>
     * @param Address $Address <p>The address where the promotion code worked</p>
     * @param array $Items <p>The item(s) associated with the promotion code</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ImageLink",$param) and $param["ImageLink"] !== null) {
            $this->ImageLink = $param["ImageLink"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new Address();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new Item();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
