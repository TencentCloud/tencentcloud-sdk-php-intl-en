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
 * LVB domain name information
 *
 * @method string getName() Obtain LVB domain name.
 * @method void setName(string $Name) Set LVB domain name.
 * @method integer getType() Obtain Domain name type:
0: push.
1: playback.
 * @method void setType(integer $Type) Set Domain name type:
0: push.
1: playback.
 * @method integer getStatus() Obtain Domain name status:
0: deactivated.
1: activated.
 * @method void setStatus(integer $Status) Set Domain name status:
0: deactivated.
1: activated.
 * @method string getCreateTime() Obtain The time when the domain was added.
Note: Beijing time (UTC+8) is used.
 * @method void setCreateTime(string $CreateTime) Set The time when the domain was added.
Note: Beijing time (UTC+8) is used.
 * @method integer getBCName() Obtain Whether there is a CNAME record pointing to a fixed rule domain name:
0: no.
1: yes.
 * @method void setBCName(integer $BCName) Set Whether there is a CNAME record pointing to a fixed rule domain name:
0: no.
1: yes.
 * @method string getTargetDomain() Obtain Domain name corresponding to CNAME record.
 * @method void setTargetDomain(string $TargetDomain) Set Domain name corresponding to CNAME record.
 * @method integer getPlayType() Obtain Playback region. This parameter is valid only if `Type` is 1.
1: in Mainland China.
2: global.
3: outside Mainland China.
 * @method void setPlayType(integer $PlayType) Set Playback region. This parameter is valid only if `Type` is 1.
1: in Mainland China.
2: global.
3: outside Mainland China.
 * @method integer getIsDelayLive() Obtain Whether it is LCB:
0: LVB.
1: LCB.
 * @method void setIsDelayLive(integer $IsDelayLive) Set Whether it is LCB:
0: LVB.
1: LCB.
 * @method string getCurrentCName() Obtain Information of currently used CNAME record.
 * @method void setCurrentCName(string $CurrentCName) Set Information of currently used CNAME record.
 * @method integer getRentTag() Obtain Disused parameter, which can be ignored.
 * @method void setRentTag(integer $RentTag) Set Disused parameter, which can be ignored.
 * @method string getRentExpireTime() Obtain A disused parameter.
Note: Beijing time (UTC+8) is used.
 * @method void setRentExpireTime(string $RentExpireTime) Set A disused parameter.
Note: Beijing time (UTC+8) is used.
 * @method integer getIsMiniProgramLive() Obtain 0: LVB.
1: LVB on Mini Program.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsMiniProgramLive(integer $IsMiniProgramLive) Set 0: LVB.
1: LVB on Mini Program.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var string LVB domain name.
     */
    public $Name;

    /**
     * @var integer Domain name type:
0: push.
1: playback.
     */
    public $Type;

    /**
     * @var integer Domain name status:
0: deactivated.
1: activated.
     */
    public $Status;

    /**
     * @var string The time when the domain was added.
Note: Beijing time (UTC+8) is used.
     */
    public $CreateTime;

    /**
     * @var integer Whether there is a CNAME record pointing to a fixed rule domain name:
0: no.
1: yes.
     */
    public $BCName;

    /**
     * @var string Domain name corresponding to CNAME record.
     */
    public $TargetDomain;

    /**
     * @var integer Playback region. This parameter is valid only if `Type` is 1.
1: in Mainland China.
2: global.
3: outside Mainland China.
     */
    public $PlayType;

    /**
     * @var integer Whether it is LCB:
0: LVB.
1: LCB.
     */
    public $IsDelayLive;

    /**
     * @var string Information of currently used CNAME record.
     */
    public $CurrentCName;

    /**
     * @var integer Disused parameter, which can be ignored.
     */
    public $RentTag;

    /**
     * @var string A disused parameter.
Note: Beijing time (UTC+8) is used.
     */
    public $RentExpireTime;

    /**
     * @var integer 0: LVB.
1: LVB on Mini Program.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsMiniProgramLive;

    /**
     * @param string $Name LVB domain name.
     * @param integer $Type Domain name type:
0: push.
1: playback.
     * @param integer $Status Domain name status:
0: deactivated.
1: activated.
     * @param string $CreateTime The time when the domain was added.
Note: Beijing time (UTC+8) is used.
     * @param integer $BCName Whether there is a CNAME record pointing to a fixed rule domain name:
0: no.
1: yes.
     * @param string $TargetDomain Domain name corresponding to CNAME record.
     * @param integer $PlayType Playback region. This parameter is valid only if `Type` is 1.
1: in Mainland China.
2: global.
3: outside Mainland China.
     * @param integer $IsDelayLive Whether it is LCB:
0: LVB.
1: LCB.
     * @param string $CurrentCName Information of currently used CNAME record.
     * @param integer $RentTag Disused parameter, which can be ignored.
     * @param string $RentExpireTime A disused parameter.
Note: Beijing time (UTC+8) is used.
     * @param integer $IsMiniProgramLive 0: LVB.
1: LVB on Mini Program.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BCName",$param) and $param["BCName"] !== null) {
            $this->BCName = $param["BCName"];
        }

        if (array_key_exists("TargetDomain",$param) and $param["TargetDomain"] !== null) {
            $this->TargetDomain = $param["TargetDomain"];
        }

        if (array_key_exists("PlayType",$param) and $param["PlayType"] !== null) {
            $this->PlayType = $param["PlayType"];
        }

        if (array_key_exists("IsDelayLive",$param) and $param["IsDelayLive"] !== null) {
            $this->IsDelayLive = $param["IsDelayLive"];
        }

        if (array_key_exists("CurrentCName",$param) and $param["CurrentCName"] !== null) {
            $this->CurrentCName = $param["CurrentCName"];
        }

        if (array_key_exists("RentTag",$param) and $param["RentTag"] !== null) {
            $this->RentTag = $param["RentTag"];
        }

        if (array_key_exists("RentExpireTime",$param) and $param["RentExpireTime"] !== null) {
            $this->RentExpireTime = $param["RentExpireTime"];
        }

        if (array_key_exists("IsMiniProgramLive",$param) and $param["IsMiniProgramLive"] !== null) {
            $this->IsMiniProgramLive = $param["IsMiniProgramLive"];
        }
    }
}
