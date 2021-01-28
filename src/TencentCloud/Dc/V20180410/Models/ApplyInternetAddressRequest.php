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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyInternetAddress request structure.
 *
 * @method integer getMaskLen() Obtain Mask length of a CIDR block
 * @method void setMaskLen(integer $MaskLen) Set Mask length of a CIDR block
 * @method integer getAddrType() Obtain Address type. Valid values: 0: BGP
1: China Telecom
2: China Mobile
3: China Unicom
 * @method void setAddrType(integer $AddrType) Set Address type. Valid values: 0: BGP
1: China Telecom
2: China Mobile
3: China Unicom
 * @method integer getAddrProto() Obtain Address protocol. Valid values: 0: IPv4
1: IPv6
 * @method void setAddrProto(integer $AddrProto) Set Address protocol. Valid values: 0: IPv4
1: IPv6
 */
class ApplyInternetAddressRequest extends AbstractModel
{
    /**
     * @var integer Mask length of a CIDR block
     */
    public $MaskLen;

    /**
     * @var integer Address type. Valid values: 0: BGP
1: China Telecom
2: China Mobile
3: China Unicom
     */
    public $AddrType;

    /**
     * @var integer Address protocol. Valid values: 0: IPv4
1: IPv6
     */
    public $AddrProto;

    /**
     * @param integer $MaskLen Mask length of a CIDR block
     * @param integer $AddrType Address type. Valid values: 0: BGP
1: China Telecom
2: China Mobile
3: China Unicom
     * @param integer $AddrProto Address protocol. Valid values: 0: IPv4
1: IPv6
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
        if (array_key_exists("MaskLen",$param) and $param["MaskLen"] !== null) {
            $this->MaskLen = $param["MaskLen"];
        }

        if (array_key_exists("AddrType",$param) and $param["AddrType"] !== null) {
            $this->AddrType = $param["AddrType"];
        }

        if (array_key_exists("AddrProto",$param) and $param["AddrProto"] !== null) {
            $this->AddrProto = $param["AddrProto"];
        }
    }
}
