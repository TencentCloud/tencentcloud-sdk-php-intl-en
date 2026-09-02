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
 * DescribeSkillScanAlertDetail request structure.
 *
 * @method integer getID() Obtain <p>Alarm record ID<br>For reference on obtaining the value: obtain through the DescribeSkillScanAlertList API</p>
 * @method void setID(integer $ID) Set <p>Alarm record ID<br>For reference on obtaining the value: obtain through the DescribeSkillScanAlertList API</p>
 * @method array getMemberId() Obtain Group account member id
 * @method void setMemberId(array $MemberId) Set Group account member id
 */
class DescribeSkillScanAlertDetailRequest extends AbstractModel
{
    /**
     * @var integer <p>Alarm record ID<br>For reference on obtaining the value: obtain through the DescribeSkillScanAlertList API</p>
     */
    public $ID;

    /**
     * @var array Group account member id
     */
    public $MemberId;

    /**
     * @param integer $ID <p>Alarm record ID<br>For reference on obtaining the value: obtain through the DescribeSkillScanAlertList API</p>
     * @param array $MemberId Group account member id
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
