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
 * ModifyLivePlayDomain request structure.
 *
 * @method string getDomainName() Obtain Playback domain name.
 * @method void setDomainName(string $DomainName) Set Playback domain name.
 * @method integer getPlayType() Obtain Pull domain name type. 1: Mainland China. 2: global, 3: outside Mainland China
 * @method void setPlayType(integer $PlayType) Set Pull domain name type. 1: Mainland China. 2: global, 3: outside Mainland China
 */
class ModifyLivePlayDomainRequest extends AbstractModel
{
    /**
     * @var string Playback domain name.
     */
    public $DomainName;

    /**
     * @var integer Pull domain name type. 1: Mainland China. 2: global, 3: outside Mainland China
     */
    public $PlayType;

    /**
     * @param string $DomainName Playback domain name.
     * @param integer $PlayType Pull domain name type. 1: Mainland China. 2: global, 3: outside Mainland China
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

        if (array_key_exists("PlayType",$param) and $param["PlayType"] !== null) {
            $this->PlayType = $param["PlayType"];
        }
    }
}
