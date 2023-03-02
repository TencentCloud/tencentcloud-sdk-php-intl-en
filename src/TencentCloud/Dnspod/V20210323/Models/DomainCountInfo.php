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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List statistics by page
 *
 * @method integer getDomainTotal() Obtain Number of eligible domains
 * @method void setDomainTotal(integer $DomainTotal) Set Number of eligible domains
 * @method integer getAllTotal() Obtain Number of all domains that can be viewed by the user
 * @method void setAllTotal(integer $AllTotal) Set Number of all domains that can be viewed by the user
 * @method integer getMineTotal() Obtain Number of domains added under the user account
 * @method void setMineTotal(integer $MineTotal) Set Number of domains added under the user account
 * @method integer getShareTotal() Obtain Number of domains shared with the user
 * @method void setShareTotal(integer $ShareTotal) Set Number of domains shared with the user
 * @method integer getVipTotal() Obtain Number of paid domains
 * @method void setVipTotal(integer $VipTotal) Set Number of paid domains
 * @method integer getPauseTotal() Obtain Number of suspended domains
 * @method void setPauseTotal(integer $PauseTotal) Set Number of suspended domains
 * @method integer getErrorTotal() Obtain Number of domains with a DNS configuration error
 * @method void setErrorTotal(integer $ErrorTotal) Set Number of domains with a DNS configuration error
 * @method integer getLockTotal() Obtain Number of locked domains
 * @method void setLockTotal(integer $LockTotal) Set Number of locked domains
 * @method integer getSpamTotal() Obtain Number of blocked domains
 * @method void setSpamTotal(integer $SpamTotal) Set Number of blocked domains
 * @method integer getVipExpire() Obtain Number of domains that will expire within 30 days
 * @method void setVipExpire(integer $VipExpire) Set Number of domains that will expire within 30 days
 * @method integer getShareOutTotal() Obtain Number of domains shared with others
 * @method void setShareOutTotal(integer $ShareOutTotal) Set Number of domains shared with others
 * @method integer getGroupTotal() Obtain Number of domains in the specified group
 * @method void setGroupTotal(integer $GroupTotal) Set Number of domains in the specified group
 */
class DomainCountInfo extends AbstractModel
{
    /**
     * @var integer Number of eligible domains
     */
    public $DomainTotal;

    /**
     * @var integer Number of all domains that can be viewed by the user
     */
    public $AllTotal;

    /**
     * @var integer Number of domains added under the user account
     */
    public $MineTotal;

    /**
     * @var integer Number of domains shared with the user
     */
    public $ShareTotal;

    /**
     * @var integer Number of paid domains
     */
    public $VipTotal;

    /**
     * @var integer Number of suspended domains
     */
    public $PauseTotal;

    /**
     * @var integer Number of domains with a DNS configuration error
     */
    public $ErrorTotal;

    /**
     * @var integer Number of locked domains
     */
    public $LockTotal;

    /**
     * @var integer Number of blocked domains
     */
    public $SpamTotal;

    /**
     * @var integer Number of domains that will expire within 30 days
     */
    public $VipExpire;

    /**
     * @var integer Number of domains shared with others
     */
    public $ShareOutTotal;

    /**
     * @var integer Number of domains in the specified group
     */
    public $GroupTotal;

    /**
     * @param integer $DomainTotal Number of eligible domains
     * @param integer $AllTotal Number of all domains that can be viewed by the user
     * @param integer $MineTotal Number of domains added under the user account
     * @param integer $ShareTotal Number of domains shared with the user
     * @param integer $VipTotal Number of paid domains
     * @param integer $PauseTotal Number of suspended domains
     * @param integer $ErrorTotal Number of domains with a DNS configuration error
     * @param integer $LockTotal Number of locked domains
     * @param integer $SpamTotal Number of blocked domains
     * @param integer $VipExpire Number of domains that will expire within 30 days
     * @param integer $ShareOutTotal Number of domains shared with others
     * @param integer $GroupTotal Number of domains in the specified group
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
        if (array_key_exists("DomainTotal",$param) and $param["DomainTotal"] !== null) {
            $this->DomainTotal = $param["DomainTotal"];
        }

        if (array_key_exists("AllTotal",$param) and $param["AllTotal"] !== null) {
            $this->AllTotal = $param["AllTotal"];
        }

        if (array_key_exists("MineTotal",$param) and $param["MineTotal"] !== null) {
            $this->MineTotal = $param["MineTotal"];
        }

        if (array_key_exists("ShareTotal",$param) and $param["ShareTotal"] !== null) {
            $this->ShareTotal = $param["ShareTotal"];
        }

        if (array_key_exists("VipTotal",$param) and $param["VipTotal"] !== null) {
            $this->VipTotal = $param["VipTotal"];
        }

        if (array_key_exists("PauseTotal",$param) and $param["PauseTotal"] !== null) {
            $this->PauseTotal = $param["PauseTotal"];
        }

        if (array_key_exists("ErrorTotal",$param) and $param["ErrorTotal"] !== null) {
            $this->ErrorTotal = $param["ErrorTotal"];
        }

        if (array_key_exists("LockTotal",$param) and $param["LockTotal"] !== null) {
            $this->LockTotal = $param["LockTotal"];
        }

        if (array_key_exists("SpamTotal",$param) and $param["SpamTotal"] !== null) {
            $this->SpamTotal = $param["SpamTotal"];
        }

        if (array_key_exists("VipExpire",$param) and $param["VipExpire"] !== null) {
            $this->VipExpire = $param["VipExpire"];
        }

        if (array_key_exists("ShareOutTotal",$param) and $param["ShareOutTotal"] !== null) {
            $this->ShareOutTotal = $param["ShareOutTotal"];
        }

        if (array_key_exists("GroupTotal",$param) and $param["GroupTotal"] !== null) {
            $this->GroupTotal = $param["GroupTotal"];
        }
    }
}
