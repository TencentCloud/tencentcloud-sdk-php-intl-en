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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query output parameters of risk assessment results.
 *
 * @method integer getCode() Obtain Return code.
Note: This field may return null, indicating that no valid value is found.
 * @method void setCode(integer $Code) Set Return code.
Note: This field may return null, indicating that no valid value is found.
 * @method string getMessage() Obtain Returned information

Note: This field may return null, indicating that no valid value is found.
 * @method void setMessage(string $Message) Set Returned information

Note: This field may return null, indicating that no valid value is found.
 * @method OutputRiskAssessmentInfo getValue() Obtain Business details.
Note: This field may return null, indicating that no valid value is found.
 * @method void setValue(OutputRiskAssessmentInfo $Value) Set Business details.
Note: This field may return null, indicating that no valid value is found.
 * @method string getUUid() Obtain Request ID.
Note: This field may return null, indicating that no valid value is found.
 * @method void setUUid(string $UUid) Set Request ID.
Note: This field may return null, indicating that no valid value is found.
 */
class OutputRiskAssessment extends AbstractModel
{
    /**
     * @var integer Return code.
Note: This field may return null, indicating that no valid value is found.
     */
    public $Code;

    /**
     * @var string Returned information

Note: This field may return null, indicating that no valid value is found.
     */
    public $Message;

    /**
     * @var OutputRiskAssessmentInfo Business details.
Note: This field may return null, indicating that no valid value is found.
     */
    public $Value;

    /**
     * @var string Request ID.
Note: This field may return null, indicating that no valid value is found.
     */
    public $UUid;

    /**
     * @param integer $Code Return code.
Note: This field may return null, indicating that no valid value is found.
     * @param string $Message Returned information

Note: This field may return null, indicating that no valid value is found.
     * @param OutputRiskAssessmentInfo $Value Business details.
Note: This field may return null, indicating that no valid value is found.
     * @param string $UUid Request ID.
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new OutputRiskAssessmentInfo();
            $this->Value->deserialize($param["Value"]);
        }

        if (array_key_exists("UUid",$param) and $param["UUid"] !== null) {
            $this->UUid = $param["UUid"];
        }
    }
}
