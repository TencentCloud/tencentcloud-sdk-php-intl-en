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
 * Vulnerability intelligence data
 *
 * @method string getLevel() Obtain Risk level
high: high risk / middle: medium risk / low: low risk / info: notification
 * @method void setLevel(string $Level) Set Risk level
high: high risk / middle: medium risk / low: low risk / info: notification
 * @method string getSubmitTime() Obtain Vulnerability disclosure time
 * @method void setSubmitTime(string $SubmitTime) Set Vulnerability disclosure time
 * @method string getVULName() Obtain Vulnerability name
 * @method void setVULName(string $VULName) Set Vulnerability name
 * @method string getVULID() Obtain cveID/tvdID/ssvid
 * @method void setVULID(string $VULID) Set cveID/tvdID/ssvid
 */
class VulInfoListItem extends AbstractModel
{
    /**
     * @var string Risk level
high: high risk / middle: medium risk / low: low risk / info: notification
     */
    public $Level;

    /**
     * @var string Vulnerability disclosure time
     */
    public $SubmitTime;

    /**
     * @var string Vulnerability name
     */
    public $VULName;

    /**
     * @var string cveID/tvdID/ssvid
     */
    public $VULID;

    /**
     * @param string $Level Risk level
high: high risk / middle: medium risk / low: low risk / info: notification
     * @param string $SubmitTime Vulnerability disclosure time
     * @param string $VULName Vulnerability name
     * @param string $VULID cveID/tvdID/ssvid
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("VULName",$param) and $param["VULName"] !== null) {
            $this->VULName = $param["VULName"];
        }

        if (array_key_exists("VULID",$param) and $param["VULID"] !== null) {
            $this->VULID = $param["VULID"];
        }
    }
}
