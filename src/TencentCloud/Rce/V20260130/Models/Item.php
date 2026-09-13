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
 * The details of the item
 *
 * @method string getItemId() Obtain <p>The unique ID of the item</p>
 * @method void setItemId(string $ItemId) Set <p>The unique ID of the item</p>
 * @method string getItemName() Obtain <p>The name of the item</p>
 * @method void setItemName(string $ItemName) Set <p>The name of the item</p>
 * @method string getCategory() Obtain <p>The category of the item</p>
 * @method void setCategory(string $Category) Set <p>The category of the item</p>
 * @method Amount getPrice() Obtain <p>The price of the item</p>
 * @method void setPrice(Amount $Price) Set <p>The price of the item</p>
 * @method string getUPC() Obtain <p>If the item has a UPC (Universal Product Code), please provide it here.</p>
 * @method void setUPC(string $UPC) Set <p>If the item has a UPC (Universal Product Code), please provide it here.</p>
 * @method string getEAN() Obtain <p>If the item has an EAN (European Article Number), please provide it here.</p>
 * @method void setEAN(string $EAN) Set <p>If the item has an EAN (European Article Number), please provide it here.</p>
 * @method string getSKU() Obtain <p>If the item has an SKU (Stock Keeping Unit), please provide it here.</p>
 * @method void setSKU(string $SKU) Set <p>If the item has an SKU (Stock Keeping Unit), please provide it here.</p>
 * @method string getISBN() Obtain <p>If the item has an ISBN (International Standard Book Number), please provide it here.</p>
 * @method void setISBN(string $ISBN) Set <p>If the item has an ISBN (International Standard Book Number), please provide it here.</p>
 * @method string getBrand() Obtain <p>The brand of the item</p>
 * @method void setBrand(string $Brand) Set <p>The brand of the item</p>
 * @method integer getQuantity() Obtain <p>The quantity of the item</p>
 * @method void setQuantity(integer $Quantity) Set <p>The quantity of the item</p>
 * @method string getManufacturer() Obtain <p>The manufacture of the item</p>
 * @method void setManufacturer(string $Manufacturer) Set <p>The manufacture of the item</p>
 * @method string getTags() Obtain <p>The tags of the item in your system</p>
 * @method void setTags(string $Tags) Set <p>The tags of the item in your system</p>
 */
class Item extends AbstractModel
{
    /**
     * @var string <p>The unique ID of the item</p>
     */
    public $ItemId;

    /**
     * @var string <p>The name of the item</p>
     */
    public $ItemName;

    /**
     * @var string <p>The category of the item</p>
     */
    public $Category;

    /**
     * @var Amount <p>The price of the item</p>
     */
    public $Price;

    /**
     * @var string <p>If the item has a UPC (Universal Product Code), please provide it here.</p>
     */
    public $UPC;

    /**
     * @var string <p>If the item has an EAN (European Article Number), please provide it here.</p>
     */
    public $EAN;

    /**
     * @var string <p>If the item has an SKU (Stock Keeping Unit), please provide it here.</p>
     */
    public $SKU;

    /**
     * @var string <p>If the item has an ISBN (International Standard Book Number), please provide it here.</p>
     */
    public $ISBN;

    /**
     * @var string <p>The brand of the item</p>
     */
    public $Brand;

    /**
     * @var integer <p>The quantity of the item</p>
     */
    public $Quantity;

    /**
     * @var string <p>The manufacture of the item</p>
     */
    public $Manufacturer;

    /**
     * @var string <p>The tags of the item in your system</p>
     */
    public $Tags;

    /**
     * @param string $ItemId <p>The unique ID of the item</p>
     * @param string $ItemName <p>The name of the item</p>
     * @param string $Category <p>The category of the item</p>
     * @param Amount $Price <p>The price of the item</p>
     * @param string $UPC <p>If the item has a UPC (Universal Product Code), please provide it here.</p>
     * @param string $EAN <p>If the item has an EAN (European Article Number), please provide it here.</p>
     * @param string $SKU <p>If the item has an SKU (Stock Keeping Unit), please provide it here.</p>
     * @param string $ISBN <p>If the item has an ISBN (International Standard Book Number), please provide it here.</p>
     * @param string $Brand <p>The brand of the item</p>
     * @param integer $Quantity <p>The quantity of the item</p>
     * @param string $Manufacturer <p>The manufacture of the item</p>
     * @param string $Tags <p>The tags of the item in your system</p>
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new Amount();
            $this->Price->deserialize($param["Price"]);
        }

        if (array_key_exists("UPC",$param) and $param["UPC"] !== null) {
            $this->UPC = $param["UPC"];
        }

        if (array_key_exists("EAN",$param) and $param["EAN"] !== null) {
            $this->EAN = $param["EAN"];
        }

        if (array_key_exists("SKU",$param) and $param["SKU"] !== null) {
            $this->SKU = $param["SKU"];
        }

        if (array_key_exists("ISBN",$param) and $param["ISBN"] !== null) {
            $this->ISBN = $param["ISBN"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
