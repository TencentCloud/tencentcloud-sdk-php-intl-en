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
 * Single exit-entry record
 *
 * @method string getIndex() Obtain Serial number.
 * @method void setIndex(string $Index) Set Serial number.
 * @method string getType() Obtain Exit/Entry
 * @method void setType(string $Type) Set Exit/Entry
 * @method string getDate() Obtain Date of exit/entry
 * @method void setDate(string $Date) Set Date of exit/entry
 * @method string getCertName() Obtain Document name
 * @method void setCertName(string $CertName) Set Document name
 * @method string getCertId() Obtain Document number
 * @method void setCertId(string $CertId) Set Document number
 * @method string getPort() Obtain Port of exit/entry
 * @method void setPort(string $Port) Set Port of exit/entry
 */
class Record extends AbstractModel
{
    /**
     * @var string Serial number.
     */
    public $Index;

    /**
     * @var string Exit/Entry
     */
    public $Type;

    /**
     * @var string Date of exit/entry
     */
    public $Date;

    /**
     * @var string Document name
     */
    public $CertName;

    /**
     * @var string Document number
     */
    public $CertId;

    /**
     * @var string Port of exit/entry
     */
    public $Port;

    /**
     * @param string $Index Serial number.
     * @param string $Type Exit/Entry
     * @param string $Date Date of exit/entry
     * @param string $CertName Document name
     * @param string $CertId Document number
     * @param string $Port Port of exit/entry
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
