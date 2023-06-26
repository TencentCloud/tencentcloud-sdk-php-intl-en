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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Other invoices
 *
 * @method string getTitle() Obtain Invoice title
 * @method void setTitle(string $Title) Set Invoice title
 * @method string getTotal() Obtain Amount
 * @method void setTotal(string $Total) Set Amount
 * @method array getOtherInvoiceListItems() Obtain List
 * @method void setOtherInvoiceListItems(array $OtherInvoiceListItems) Set List
 * @method array getOtherInvoiceTableItems() Obtain Table
 * @method void setOtherInvoiceTableItems(array $OtherInvoiceTableItems) Set Table
 */
class OtherInvoice extends AbstractModel
{
    /**
     * @var string Invoice title
     */
    public $Title;

    /**
     * @var string Amount
     */
    public $Total;

    /**
     * @var array List
     */
    public $OtherInvoiceListItems;

    /**
     * @var array Table
     */
    public $OtherInvoiceTableItems;

    /**
     * @param string $Title Invoice title
     * @param string $Total Amount
     * @param array $OtherInvoiceListItems List
     * @param array $OtherInvoiceTableItems Table
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("OtherInvoiceListItems",$param) and $param["OtherInvoiceListItems"] !== null) {
            $this->OtherInvoiceListItems = [];
            foreach ($param["OtherInvoiceListItems"] as $key => $value){
                $obj = new OtherInvoiceItem();
                $obj->deserialize($value);
                array_push($this->OtherInvoiceListItems, $obj);
            }
        }

        if (array_key_exists("OtherInvoiceTableItems",$param) and $param["OtherInvoiceTableItems"] !== null) {
            $this->OtherInvoiceTableItems = [];
            foreach ($param["OtherInvoiceTableItems"] as $key => $value){
                $obj = new OtherInvoiceList();
                $obj->deserialize($value);
                array_push($this->OtherInvoiceTableItems, $obj);
            }
        }
    }
}
