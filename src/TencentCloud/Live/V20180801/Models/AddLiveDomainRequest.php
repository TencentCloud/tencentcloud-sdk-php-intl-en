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
 */

/**
 *AddLiveDomain request structure.
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
    }
}
