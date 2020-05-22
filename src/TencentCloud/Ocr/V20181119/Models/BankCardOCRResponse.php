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
 * BankCardOCR response structure.
 *
 * @method string getCardNo() Obtain Card number
 * @method void setCardNo(string $CardNo) Set Card number
 * @method string getBankInfo() Obtain Bank information
 * @method void setBankInfo(string $BankInfo) Set Bank information
 * @method string getValidDate() Obtain Expiration date
 * @method void setValidDate(string $ValidDate) Set Expiration date
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class BankCardOCRResponse extends AbstractModel
{
    /**
     * @var string Card number
     */
    public $CardNo;

    /**
     * @var string Bank information
     */
    public $BankInfo;

    /**
     * @var string Expiration date
     */
    public $ValidDate;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $CardNo Card number
     * @param string $BankInfo Bank information
     * @param string $ValidDate Expiration date
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("CardNo",$param) and $param["CardNo"] !== null) {
            $this->CardNo = $param["CardNo"];
        }

        if (array_key_exists("BankInfo",$param) and $param["BankInfo"] !== null) {
            $this->BankInfo = $param["BankInfo"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
