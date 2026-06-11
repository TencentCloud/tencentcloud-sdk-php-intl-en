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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Emergency notification entity
 *
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method string getPublishTime() Obtain Vulnerability disclosure time
 * @method void setPublishTime(string $PublishTime) Set Vulnerability disclosure time
 * @method string getName() Obtain Vulnerability name
 * @method void setName(string $Name) Set Vulnerability name
 * @method string getNameEn() Obtain Vulnerability name, English description
 * @method void setNameEn(string $NameEn) Set Vulnerability name, English description
 * @method integer getSupportFix() Obtain Is auto-repair supported 0: not supported >0: supported
 * @method void setSupportFix(integer $SupportFix) Set Is auto-repair supported 0: not supported >0: supported
 * @method integer getSupportDefense() Obtain Whether automatic defense is supported 0: no support 1: support
 * @method void setSupportDefense(integer $SupportDefense) Set Whether automatic defense is supported 0: no support 1: support
 * @method integer getKbId() Obtain KB ID
 * @method void setKbId(integer $KbId) Set KB ID
 * @method string getKbNumber() Obtain KB number
 * @method void setKbNumber(string $KbNumber) Set KB number
 */
class VulEmergentMsgInfo extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var string Vulnerability disclosure time
     */
    public $PublishTime;

    /**
     * @var string Vulnerability name
     */
    public $Name;

    /**
     * @var string Vulnerability name, English description
     */
    public $NameEn;

    /**
     * @var integer Is auto-repair supported 0: not supported >0: supported
     */
    public $SupportFix;

    /**
     * @var integer Whether automatic defense is supported 0: no support 1: support
     */
    public $SupportDefense;

    /**
     * @var integer KB ID
     */
    public $KbId;

    /**
     * @var string KB number
     */
    public $KbNumber;

    /**
     * @param integer $VulId Vulnerability ID
     * @param string $PublishTime Vulnerability disclosure time
     * @param string $Name Vulnerability name
     * @param string $NameEn Vulnerability name, English description
     * @param integer $SupportFix Is auto-repair supported 0: not supported >0: supported
     * @param integer $SupportDefense Whether automatic defense is supported 0: no support 1: support
     * @param integer $KbId KB ID
     * @param string $KbNumber KB number
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NameEn",$param) and $param["NameEn"] !== null) {
            $this->NameEn = $param["NameEn"];
        }

        if (array_key_exists("SupportFix",$param) and $param["SupportFix"] !== null) {
            $this->SupportFix = $param["SupportFix"];
        }

        if (array_key_exists("SupportDefense",$param) and $param["SupportDefense"] !== null) {
            $this->SupportDefense = $param["SupportDefense"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("KbNumber",$param) and $param["KbNumber"] !== null) {
            $this->KbNumber = $param["KbNumber"];
        }
    }
}
