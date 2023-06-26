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
 * Quota invoice
 *
 * @method string getTitle() Obtain Invoice title
 * @method void setTitle(string $Title) Set Invoice title
 * @method string getCode() Obtain Invoice code
 * @method void setCode(string $Code) Set Invoice code
 * @method string getNumber() Obtain Invoice number
 * @method void setNumber(string $Number) Set Invoice number
 * @method string getTotal() Obtain Total amount (in figures)
 * @method void setTotal(string $Total) Set Total amount (in figures)
 * @method string getTotalCn() Obtain Total amount (in words)
 * @method void setTotalCn(string $TotalCn) Set Total amount (in words)
 * @method string getKind() Obtain Invoice type
 * @method void setKind(string $Kind) Set Invoice type
 * @method string getProvince() Obtain Province
 * @method void setProvince(string $Province) Set Province
 * @method string getCity() Obtain City
 * @method void setCity(string $City) Set City
 * @method integer getQRCodeMark() Obtain Whether there is a QR code (0: No, 1: Yes)
 * @method void setQRCodeMark(integer $QRCodeMark) Set Whether there is a QR code (0: No, 1: Yes)
 * @method integer getCompanySealMark() Obtain Whether there is a company seal (0: No, 1: Yes)
 * @method void setCompanySealMark(integer $CompanySealMark) Set Whether there is a company seal (0: No, 1: Yes)
 */
class QuotaInvoice extends AbstractModel
{
    /**
     * @var string Invoice title
     */
    public $Title;

    /**
     * @var string Invoice code
     */
    public $Code;

    /**
     * @var string Invoice number
     */
    public $Number;

    /**
     * @var string Total amount (in figures)
     */
    public $Total;

    /**
     * @var string Total amount (in words)
     */
    public $TotalCn;

    /**
     * @var string Invoice type
     */
    public $Kind;

    /**
     * @var string Province
     */
    public $Province;

    /**
     * @var string City
     */
    public $City;

    /**
     * @var integer Whether there is a QR code (0: No, 1: Yes)
     */
    public $QRCodeMark;

    /**
     * @var integer Whether there is a company seal (0: No, 1: Yes)
     */
    public $CompanySealMark;

    /**
     * @param string $Title Invoice title
     * @param string $Code Invoice code
     * @param string $Number Invoice number
     * @param string $Total Total amount (in figures)
     * @param string $TotalCn Total amount (in words)
     * @param string $Kind Invoice type
     * @param string $Province Province
     * @param string $City City
     * @param integer $QRCodeMark Whether there is a QR code (0: No, 1: Yes)
     * @param integer $CompanySealMark Whether there is a company seal (0: No, 1: Yes)
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

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("CompanySealMark",$param) and $param["CompanySealMark"] !== null) {
            $this->CompanySealMark = $param["CompanySealMark"];
        }
    }
}
