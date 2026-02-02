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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Risk call record details.
 *
 * @method string getEventName() Obtain API name.
 * @method void setEventName(string $EventName) Set API name.
 * @method string getEventDescCN() Obtain Chinese description of the API.
 * @method void setEventDescCN(string $EventDescCN) Set Chinese description of the API.
 * @method string getEventDescEN() Obtain Interface description.
 * @method void setEventDescEN(string $EventDescEN) Set Interface description.
 * @method string getProductName() Obtain Product name
 * @method void setProductName(string $ProductName) Set Product name
 * @method string getProductNameCN() Obtain Product Chinese Name
 * @method void setProductNameCN(string $ProductNameCN) Set Product Chinese Name
 * @method integer getCallCount() Obtain Number of calls.
 * @method void setCallCount(integer $CallCount) Set Number of calls.
 */
class RiskCallRecord extends AbstractModel
{
    /**
     * @var string API name.
     */
    public $EventName;

    /**
     * @var string Chinese description of the API.
     */
    public $EventDescCN;

    /**
     * @var string Interface description.
     */
    public $EventDescEN;

    /**
     * @var string Product name
     */
    public $ProductName;

    /**
     * @var string Product Chinese Name
     */
    public $ProductNameCN;

    /**
     * @var integer Number of calls.
     */
    public $CallCount;

    /**
     * @param string $EventName API name.
     * @param string $EventDescCN Chinese description of the API.
     * @param string $EventDescEN Interface description.
     * @param string $ProductName Product name
     * @param string $ProductNameCN Product Chinese Name
     * @param integer $CallCount Number of calls.
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventDescCN",$param) and $param["EventDescCN"] !== null) {
            $this->EventDescCN = $param["EventDescCN"];
        }

        if (array_key_exists("EventDescEN",$param) and $param["EventDescEN"] !== null) {
            $this->EventDescEN = $param["EventDescEN"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductNameCN",$param) and $param["ProductNameCN"] !== null) {
            $this->ProductNameCN = $param["ProductNameCN"];
        }

        if (array_key_exists("CallCount",$param) and $param["CallCount"] !== null) {
            $this->CallCount = $param["CallCount"];
        }
    }
}
