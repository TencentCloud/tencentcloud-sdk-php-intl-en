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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddLiveDomain request structure.
 *
 * @method string getDomainName() Obtain Domain name.
 * @method void setDomainName(string $DomainName) Set Domain name.
 * @method integer getDomainType() Obtain Domain name type.
0: push domain name.
1: playback domain name.
 * @method void setDomainType(integer $DomainType) Set Domain name type.
0: push domain name.
1: playback domain name.
 * @method integer getPlayType() Obtain Pull domain name type:
1: Mainland China.
2: global.
3: outside Mainland China.
Default value: 1.
 * @method void setPlayType(integer $PlayType) Set Pull domain name type:
1: Mainland China.
2: global.
3: outside Mainland China.
Default value: 1.
 * @method integer getIsDelayLive() Obtain Whether it is LCB:
0: LVB,
1: LCB.
Default value: 0.
 * @method void setIsDelayLive(integer $IsDelayLive) Set Whether it is LCB:
0: LVB,
1: LCB.
Default value: 0.
 * @method integer getIsMiniProgramLive() Obtain Whether it is LVB on Mini Program.
0: LVB.
1: LVB on Mini Program.
Default value: 0.
 * @method void setIsMiniProgramLive(integer $IsMiniProgramLive) Set Whether it is LVB on Mini Program.
0: LVB.
1: LVB on Mini Program.
Default value: 0.
 * @method string getVerifyOwnerType() Obtain The domain verification type.
Valid values (the value of this parameter must be the same as `VerifyType` of the `AuthenticateDomainOwner` API):
dnsCheck: Check immediately whether the verification DNS record has been added successfully. If so, record this verification result.
fileCheck: Check immediately whether the verification HTML file has been uploaded successfully. If so, record this verification result.
dbCheck: Check whether the domain has already been verified.
If you do not pass a value, `dbCheck` will be used.
 * @method void setVerifyOwnerType(string $VerifyOwnerType) Set The domain verification type.
Valid values (the value of this parameter must be the same as `VerifyType` of the `AuthenticateDomainOwner` API):
dnsCheck: Check immediately whether the verification DNS record has been added successfully. If so, record this verification result.
fileCheck: Check immediately whether the verification HTML file has been uploaded successfully. If so, record this verification result.
dbCheck: Check whether the domain has already been verified.
If you do not pass a value, `dbCheck` will be used.
 */
class AddLiveDomainRequest extends AbstractModel
{
    /**
     * @var string Domain name.
     */
    public $DomainName;

    /**
     * @var integer Domain name type.
0: push domain name.
1: playback domain name.
     */
    public $DomainType;

    /**
     * @var integer Pull domain name type:
1: Mainland China.
2: global.
3: outside Mainland China.
Default value: 1.
     */
    public $PlayType;

    /**
     * @var integer Whether it is LCB:
0: LVB,
1: LCB.
Default value: 0.
     */
    public $IsDelayLive;

    /**
     * @var integer Whether it is LVB on Mini Program.
0: LVB.
1: LVB on Mini Program.
Default value: 0.
     */
    public $IsMiniProgramLive;

    /**
     * @var string The domain verification type.
Valid values (the value of this parameter must be the same as `VerifyType` of the `AuthenticateDomainOwner` API):
dnsCheck: Check immediately whether the verification DNS record has been added successfully. If so, record this verification result.
fileCheck: Check immediately whether the verification HTML file has been uploaded successfully. If so, record this verification result.
dbCheck: Check whether the domain has already been verified.
If you do not pass a value, `dbCheck` will be used.
     */
    public $VerifyOwnerType;

    /**
     * @param string $DomainName Domain name.
     * @param integer $DomainType Domain name type.
0: push domain name.
1: playback domain name.
     * @param integer $PlayType Pull domain name type:
1: Mainland China.
2: global.
3: outside Mainland China.
Default value: 1.
     * @param integer $IsDelayLive Whether it is LCB:
0: LVB,
1: LCB.
Default value: 0.
     * @param integer $IsMiniProgramLive Whether it is LVB on Mini Program.
0: LVB.
1: LVB on Mini Program.
Default value: 0.
     * @param string $VerifyOwnerType The domain verification type.
Valid values (the value of this parameter must be the same as `VerifyType` of the `AuthenticateDomainOwner` API):
dnsCheck: Check immediately whether the verification DNS record has been added successfully. If so, record this verification result.
fileCheck: Check immediately whether the verification HTML file has been uploaded successfully. If so, record this verification result.
dbCheck: Check whether the domain has already been verified.
If you do not pass a value, `dbCheck` will be used.
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }

        if (array_key_exists("PlayType",$param) and $param["PlayType"] !== null) {
            $this->PlayType = $param["PlayType"];
        }

        if (array_key_exists("IsDelayLive",$param) and $param["IsDelayLive"] !== null) {
            $this->IsDelayLive = $param["IsDelayLive"];
        }

        if (array_key_exists("IsMiniProgramLive",$param) and $param["IsMiniProgramLive"] !== null) {
            $this->IsMiniProgramLive = $param["IsMiniProgramLive"];
        }

        if (array_key_exists("VerifyOwnerType",$param) and $param["VerifyOwnerType"] !== null) {
            $this->VerifyOwnerType = $param["VerifyOwnerType"];
        }
    }
}
