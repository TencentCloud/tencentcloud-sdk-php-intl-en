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
 * Toll receipt
 *
 * @method string getTitle() Obtain Invoice title
 * @method void setTitle(string $Title) Set Invoice title
 * @method string getCode() Obtain Invoice code
 * @method void setCode(string $Code) Set Invoice code
 * @method string getNumber() Obtain Invoice number
 * @method void setNumber(string $Number) Set Invoice number
 * @method string getTotal() Obtain Total amount (in figures)
 * @method void setTotal(string $Total) Set Total amount (in figures)
 * @method string getKind() Obtain Invoice type
 * @method void setKind(string $Kind) Set Invoice type
 * @method string getDate() Obtain Date
 * @method void setDate(string $Date) Set Date
 * @method string getTime() Obtain Time
 * @method void setTime(string $Time) Set Time
 * @method string getEntrance() Obtain Entrance
 * @method void setEntrance(string $Entrance) Set Entrance
 * @method string getExit() Obtain Exit
 * @method void setExit(string $Exit) Set Exit
 * @method integer getHighwayMark() Obtain Highway mark (0: No, 1: Yes)
 * @method void setHighwayMark(integer $HighwayMark) Set Highway mark (0: No, 1: Yes)
 * @method integer getQRCodeMark() Obtain Whether there is a QR code (0: No, 1: Yes)
 * @method void setQRCodeMark(integer $QRCodeMark) Set Whether there is a QR code (0: No, 1: Yes)
 */
class TollInvoice extends AbstractModel
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
     * @var string Invoice type
     */
    public $Kind;

    /**
     * @var string Date
     */
    public $Date;

    /**
     * @var string Time
     */
    public $Time;

    /**
     * @var string Entrance
     */
    public $Entrance;

    /**
     * @var string Exit
     */
    public $Exit;

    /**
     * @var integer Highway mark (0: No, 1: Yes)
     */
    public $HighwayMark;

    /**
     * @var integer Whether there is a QR code (0: No, 1: Yes)
     */
    public $QRCodeMark;

    /**
     * @param string $Title Invoice title
     * @param string $Code Invoice code
     * @param string $Number Invoice number
     * @param string $Total Total amount (in figures)
     * @param string $Kind Invoice type
     * @param string $Date Date
     * @param string $Time Time
     * @param string $Entrance Entrance
     * @param string $Exit Exit
     * @param integer $HighwayMark Highway mark (0: No, 1: Yes)
     * @param integer $QRCodeMark Whether there is a QR code (0: No, 1: Yes)
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

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Entrance",$param) and $param["Entrance"] !== null) {
            $this->Entrance = $param["Entrance"];
        }

        if (array_key_exists("Exit",$param) and $param["Exit"] !== null) {
            $this->Exit = $param["Exit"];
        }

        if (array_key_exists("HighwayMark",$param) and $param["HighwayMark"] !== null) {
            $this->HighwayMark = $param["HighwayMark"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }
    }
}
