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
 * 
 *
 * @method string getTitle() Obtain 
 * @method void setTitle(string $Title) Set 
 * @method string getCode() Obtain 
 * @method void setCode(string $Code) Set 
 * @method string getNumber() Obtain 
 * @method void setNumber(string $Number) Set 
 * @method string getTotal() Obtain 
 * @method void setTotal(string $Total) Set 
 * @method string getTotalCn() Obtain 
 * @method void setTotalCn(string $TotalCn) Set 
 * @method string getDate() Obtain 
 * @method void setDate(string $Date) Set 
 * @method string getCheckCode() Obtain 
 * @method void setCheckCode(string $CheckCode) Set 
 * @method string getPlace() Obtain 
 * @method void setPlace(string $Place) Set 
 * @method string getReviewer() Obtain 
 * @method void setReviewer(string $Reviewer) Set 
 */
class MedicalInvoice extends AbstractModel
{
    /**
     * @var string 
     */
    public $Title;

    /**
     * @var string 
     */
    public $Code;

    /**
     * @var string 
     */
    public $Number;

    /**
     * @var string 
     */
    public $Total;

    /**
     * @var string 
     */
    public $TotalCn;

    /**
     * @var string 
     */
    public $Date;

    /**
     * @var string 
     */
    public $CheckCode;

    /**
     * @var string 
     */
    public $Place;

    /**
     * @var string 
     */
    public $Reviewer;

    /**
     * @param string $Title 
     * @param string $Code 
     * @param string $Number 
     * @param string $Total 
     * @param string $TotalCn 
     * @param string $Date 
     * @param string $CheckCode 
     * @param string $Place 
     * @param string $Reviewer 
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
