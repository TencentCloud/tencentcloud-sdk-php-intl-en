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
 * DescribeLiveDomains request structure.
 *
 * @method integer getDomainStatus() Obtain Filter by domain name status. 0: disabled, 1: enabled.
 * @method void setDomainStatus(integer $DomainStatus) Set Filter by domain name status. 0: disabled, 1: enabled.
 * @method integer getDomainType() Obtain Filter by domain name type. 0: push. 1: playback
 * @method void setDomainType(integer $DomainType) Set Filter by domain name type. 0: push. 1: playback
 * @method integer getPageSize() Obtain Number of entries per page. Value range: 10-100. Default value: 10.
 * @method void setPageSize(integer $PageSize) Set Number of entries per page. Value range: 10-100. Default value: 10.
 * @method integer getPageNum() Obtain Page number to get. Value range: 1-100000. Default value: 1.
 * @method void setPageNum(integer $PageNum) Set Page number to get. Value range: 1-100000. Default value: 1.
 * @method integer getIsDelayLive() Obtain 0: LVB, 1: LCB. Default value: 0.
 * @method void setIsDelayLive(integer $IsDelayLive) Set 0: LVB, 1: LCB. Default value: 0.
 * @method string getDomainPrefix() Obtain Domain name prefix.
 * @method void setDomainPrefix(string $DomainPrefix) Set Domain name prefix.
 * @method integer getPlayType() Obtain Playback region. This parameter is valid only when `DomainType` is set to `1`.
`1`: Chinese mainland
`2`: global
`3`: outside Chinese mainland
 * @method void setPlayType(integer $PlayType) Set Playback region. This parameter is valid only when `DomainType` is set to `1`.
`1`: Chinese mainland
`2`: global
`3`: outside Chinese mainland
 */
class DescribeLiveDomainsRequest extends AbstractModel
{
    /**
     * @var integer Filter by domain name status. 0: disabled, 1: enabled.
     */
    public $DomainStatus;

    /**
     * @var integer Filter by domain name type. 0: push. 1: playback
     */
    public $DomainType;

    /**
     * @var integer Number of entries per page. Value range: 10-100. Default value: 10.
     */
    public $PageSize;

    /**
     * @var integer Page number to get. Value range: 1-100000. Default value: 1.
     */
    public $PageNum;

    /**
     * @var integer 0: LVB, 1: LCB. Default value: 0.
     */
    public $IsDelayLive;

    /**
     * @var string Domain name prefix.
     */
    public $DomainPrefix;

    /**
     * @var integer Playback region. This parameter is valid only when `DomainType` is set to `1`.
`1`: Chinese mainland
`2`: global
`3`: outside Chinese mainland
     */
    public $PlayType;

    /**
     * @param integer $DomainStatus Filter by domain name status. 0: disabled, 1: enabled.
     * @param integer $DomainType Filter by domain name type. 0: push. 1: playback
     * @param integer $PageSize Number of entries per page. Value range: 10-100. Default value: 10.
     * @param integer $PageNum Page number to get. Value range: 1-100000. Default value: 1.
     * @param integer $IsDelayLive 0: LVB, 1: LCB. Default value: 0.
     * @param string $DomainPrefix Domain name prefix.
     * @param integer $PlayType Playback region. This parameter is valid only when `DomainType` is set to `1`.
`1`: Chinese mainland
`2`: global
`3`: outside Chinese mainland
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
        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("IsDelayLive",$param) and $param["IsDelayLive"] !== null) {
            $this->IsDelayLive = $param["IsDelayLive"];
        }

        if (array_key_exists("DomainPrefix",$param) and $param["DomainPrefix"] !== null) {
            $this->DomainPrefix = $param["DomainPrefix"];
        }

        if (array_key_exists("PlayType",$param) and $param["PlayType"] !== null) {
            $this->PlayType = $param["PlayType"];
        }
    }
}
