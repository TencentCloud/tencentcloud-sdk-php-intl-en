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
 * ak quantity information of the account
 *
 * @method integer getAppID() Obtain APPID
 * @method void setAppID(integer $AppID) Set APPID
 * @method string getUin() Obtain UIN
 * @method void setUin(string $Uin) Set UIN
 * @method string getNickName() Obtain Account nickname
 * @method void setNickName(string $NickName) Set Account nickname
 * @method integer getAKNum() Obtain Number of AKs under the account
 * @method void setAKNum(integer $AKNum) Set Number of AKs under the account
 * @method integer getIsShared() Obtain Whether it is shared. 1: shared. 2: not shared.
 * @method void setIsShared(integer $IsShared) Set Whether it is shared. 1: shared. 2: not shared.
 * @method integer getIsSelfBuy() Obtain Whether to purchase separately. 1: separate purchase; 2: not purchased separately
 * @method void setIsSelfBuy(integer $IsSelfBuy) Set Whether to purchase separately. 1: separate purchase; 2: not purchased separately
 * @method integer getShareFromAppID() Obtain Source account of the quota
 * @method void setShareFromAppID(integer $ShareFromAppID) Set Source account of the quota
 * @method integer getCloudType() Obtain Cloud vendor type
0: Tencent Cloud
1: Amazon Web Services
2: Microsoft Azure.
3: Google Cloud
4: Alibaba Cloud
5: Huawei Cloud
 * @method void setCloudType(integer $CloudType) Set Cloud vendor type
0: Tencent Cloud
1: Amazon Web Services
2: Microsoft Azure.
3: Google Cloud
4: Alibaba Cloud
5: Huawei Cloud
 */
class UserAKInfo extends AbstractModel
{
    /**
     * @var integer APPID
     */
    public $AppID;

    /**
     * @var string UIN
     */
    public $Uin;

    /**
     * @var string Account nickname
     */
    public $NickName;

    /**
     * @var integer Number of AKs under the account
     */
    public $AKNum;

    /**
     * @var integer Whether it is shared. 1: shared. 2: not shared.
     */
    public $IsShared;

    /**
     * @var integer Whether to purchase separately. 1: separate purchase; 2: not purchased separately
     */
    public $IsSelfBuy;

    /**
     * @var integer Source account of the quota
     */
    public $ShareFromAppID;

    /**
     * @var integer Cloud vendor type
0: Tencent Cloud
1: Amazon Web Services
2: Microsoft Azure.
3: Google Cloud
4: Alibaba Cloud
5: Huawei Cloud
     */
    public $CloudType;

    /**
     * @param integer $AppID APPID
     * @param string $Uin UIN
     * @param string $NickName Account nickname
     * @param integer $AKNum Number of AKs under the account
     * @param integer $IsShared Whether it is shared. 1: shared. 2: not shared.
     * @param integer $IsSelfBuy Whether to purchase separately. 1: separate purchase; 2: not purchased separately
     * @param integer $ShareFromAppID Source account of the quota
     * @param integer $CloudType Cloud vendor type
0: Tencent Cloud
1: Amazon Web Services
2: Microsoft Azure.
3: Google Cloud
4: Alibaba Cloud
5: Huawei Cloud
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("AKNum",$param) and $param["AKNum"] !== null) {
            $this->AKNum = $param["AKNum"];
        }

        if (array_key_exists("IsShared",$param) and $param["IsShared"] !== null) {
            $this->IsShared = $param["IsShared"];
        }

        if (array_key_exists("IsSelfBuy",$param) and $param["IsSelfBuy"] !== null) {
            $this->IsSelfBuy = $param["IsSelfBuy"];
        }

        if (array_key_exists("ShareFromAppID",$param) and $param["ShareFromAppID"] !== null) {
            $this->ShareFromAppID = $param["ShareFromAppID"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }
    }
}
