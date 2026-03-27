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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Medical bill information.
 *
 * @method string getTitle() Obtain Invoice name.
 * @method void setTitle(string $Title) Set Invoice name.
 * @method string getCode() Obtain Invoice code.
 * @method void setCode(string $Code) Set Invoice code.
 * @method string getNumber() Obtain Invoice number.
 * @method void setNumber(string $Number) Set Invoice number.
 * @method string getTotal() Obtain Total amount (in figures).
 * @method void setTotal(string $Total) Set Total amount (in figures).
 * @method string getTotalCn() Obtain Total Amount (in words).
 * @method void setTotalCn(string $TotalCn) Set Total Amount (in words).
 * @method string getDate() Obtain Invoice date.
 * @method void setDate(string $Date) Set Invoice date.
 * @method string getCheckCode() Obtain Verification code
 * @method void setCheckCode(string $CheckCode) Set Verification code
 * @method string getPlace() Obtain Place of Issue.
 * @method void setPlace(string $Place) Set Place of Issue.
 * @method string getReviewer() Obtain Reviewer.
 * @method void setReviewer(string $Reviewer) Set Reviewer.
 */
class MedicalInvoice extends AbstractModel
{
    /**
     * @var string Invoice name.
     */
    public $Title;

    /**
     * @var string Invoice code.
     */
    public $Code;

    /**
     * @var string Invoice number.
     */
    public $Number;

    /**
     * @var string Total amount (in figures).
     */
    public $Total;

    /**
     * @var string Total Amount (in words).
     */
    public $TotalCn;

    /**
     * @var string Invoice date.
     */
    public $Date;

    /**
     * @var string Verification code
     */
    public $CheckCode;

    /**
     * @var string Place of Issue.
     */
    public $Place;

    /**
     * @var string Reviewer.
     */
    public $Reviewer;

    /**
     * @param string $Title Invoice name.
     * @param string $Code Invoice code.
     * @param string $Number Invoice number.
     * @param string $Total Total amount (in figures).
     * @param string $TotalCn Total Amount (in words).
     * @param string $Date Invoice date.
     * @param string $CheckCode Verification code
     * @param string $Place Place of Issue.
     * @param string $Reviewer Reviewer.
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

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("CheckCode",$param) and $param["CheckCode"] !== null) {
            $this->CheckCode = $param["CheckCode"];
        }

        if (array_key_exists("Place",$param) and $param["Place"] !== null) {
            $this->Place = $param["Place"];
        }

        if (array_key_exists("Reviewer",$param) and $param["Reviewer"] !== null) {
            $this->Reviewer = $param["Reviewer"];
        }
    }
}
