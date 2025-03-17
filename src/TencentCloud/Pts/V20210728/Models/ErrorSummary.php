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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Error Summary.
 *
 * @method string getStatus() Obtain Status code.

Note: This field may return null, indicating that no valid value is found.
 * @method void setStatus(string $Status) Set Status code.

Note: This field may return null, indicating that no valid value is found.
 * @method string getResult() Obtain Result code.

Note: This field may return null, indicating that no valid value is found.
 * @method void setResult(string $Result) Set Result code.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getCount() Obtain Number of error occurrences.

Note: This field may return null, indicating that no valid value is found.
 * @method void setCount(integer $Count) Set Number of error occurrences.

Note: This field may return null, indicating that no valid value is found.
 * @method float getRate() Obtain Error rate.

Note: This field may return null, indicating that no valid value is found.
 * @method void setRate(float $Rate) Set Error rate.

Note: This field may return null, indicating that no valid value is found.
 * @method string getMessage() Obtain Error message.

Note: This field may return null, indicating that no valid value is found.
 * @method void setMessage(string $Message) Set Error message.

Note: This field may return null, indicating that no valid value is found.
 * @method string getProto() Obtain Request protocol type.

Note: This field may return null, indicating that no valid value is found.
 * @method void setProto(string $Proto) Set Request protocol type.

Note: This field may return null, indicating that no valid value is found.
 */
class ErrorSummary extends AbstractModel
{
    /**
     * @var string Status code.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Status;

    /**
     * @var string Result code.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Result;

    /**
     * @var integer Number of error occurrences.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Count;

    /**
     * @var float Error rate.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Rate;

    /**
     * @var string Error message.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Message;

    /**
     * @var string Request protocol type.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Proto;

    /**
     * @param string $Status Status code.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Result Result code.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $Count Number of error occurrences.

Note: This field may return null, indicating that no valid value is found.
     * @param float $Rate Error rate.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Message Error message.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Proto Request protocol type.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }
    }
}
