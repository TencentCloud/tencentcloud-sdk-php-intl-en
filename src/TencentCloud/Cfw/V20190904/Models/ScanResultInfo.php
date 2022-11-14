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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Getting started on scanning result information PortNum   int
	LeakNum   int
	IPNum     int
	IPStatus  bool
	IdpStatus bool
	BanStatus bool
 *
 * @method integer getLeakNum() Obtain Number of vulnerability exploits
 * @method void setLeakNum(integer $LeakNum) Set Number of vulnerability exploits
 * @method integer getIPNum() Obtain Number of protected IPs
 * @method void setIPNum(integer $IPNum) Set Number of protected IPs
 * @method integer getPortNum() Obtain Number of exposed ports
 * @method void setPortNum(integer $PortNum) Set Number of exposed ports
 * @method boolean getIPStatus() Obtain Protection status
 * @method void setIPStatus(boolean $IPStatus) Set Protection status
 * @method boolean getIdpStatus() Obtain Attack blocking status
 * @method void setIdpStatus(boolean $IdpStatus) Set Attack blocking status
 * @method boolean getBanStatus() Obtain Port blocking status
 * @method void setBanStatus(boolean $BanStatus) Set Port blocking status
 */
class ScanResultInfo extends AbstractModel
{
    /**
     * @var integer Number of vulnerability exploits
     */
    public $LeakNum;

    /**
     * @var integer Number of protected IPs
     */
    public $IPNum;

    /**
     * @var integer Number of exposed ports
     */
    public $PortNum;

    /**
     * @var boolean Protection status
     */
    public $IPStatus;

    /**
     * @var boolean Attack blocking status
     */
    public $IdpStatus;

    /**
     * @var boolean Port blocking status
     */
    public $BanStatus;

    /**
     * @param integer $LeakNum Number of vulnerability exploits
     * @param integer $IPNum Number of protected IPs
     * @param integer $PortNum Number of exposed ports
     * @param boolean $IPStatus Protection status
     * @param boolean $IdpStatus Attack blocking status
     * @param boolean $BanStatus Port blocking status
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
        if (array_key_exists("LeakNum",$param) and $param["LeakNum"] !== null) {
            $this->LeakNum = $param["LeakNum"];
        }

        if (array_key_exists("IPNum",$param) and $param["IPNum"] !== null) {
            $this->IPNum = $param["IPNum"];
        }

        if (array_key_exists("PortNum",$param) and $param["PortNum"] !== null) {
            $this->PortNum = $param["PortNum"];
        }

        if (array_key_exists("IPStatus",$param) and $param["IPStatus"] !== null) {
            $this->IPStatus = $param["IPStatus"];
        }

        if (array_key_exists("IdpStatus",$param) and $param["IdpStatus"] !== null) {
            $this->IdpStatus = $param["IdpStatus"];
        }

        if (array_key_exists("BanStatus",$param) and $param["BanStatus"] !== null) {
            $this->BanStatus = $param["BanStatus"];
        }
    }
}
