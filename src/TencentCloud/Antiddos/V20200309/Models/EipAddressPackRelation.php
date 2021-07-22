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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the Anycast package
 *
 * @method integer getIpCount() Obtain Number of package IPs
 * @method void setIpCount(integer $IpCount) Set Number of package IPs
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag
 * @method string getCurDeadline() Obtain Current expiration time
 * @method void setCurDeadline(string $CurDeadline) Set Current expiration time
 */
class EipAddressPackRelation extends AbstractModel
{
    /**
     * @var integer Number of package IPs
     */
    public $IpCount;

    /**
     * @var integer Auto-renewal flag
     */
    public $AutoRenewFlag;

    /**
     * @var string Current expiration time
     */
    public $CurDeadline;

    /**
     * @param integer $IpCount Number of package IPs
     * @param integer $AutoRenewFlag Auto-renewal flag
     * @param string $CurDeadline Current expiration time
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
        if (array_key_exists("IpCount",$param) and $param["IpCount"] !== null) {
            $this->IpCount = $param["IpCount"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("CurDeadline",$param) and $param["CurDeadline"] !== null) {
            $this->CurDeadline = $param["CurDeadline"];
        }
    }
}
