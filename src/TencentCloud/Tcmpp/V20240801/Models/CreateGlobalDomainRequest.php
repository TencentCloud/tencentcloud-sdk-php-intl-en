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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGlobalDomain request structure.
 *
 * @method array getDomainUrlList() Obtain Domain name list
 * @method void setDomainUrlList(array $DomainUrlList) Set Domain name list
 * @method integer getDomainType() Obtain Domain type. 1: Allowed; 2: Blocked
 * @method void setDomainType(integer $DomainType) Set Domain type. 1: Allowed; 2: Blocked
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 */
class CreateGlobalDomainRequest extends AbstractModel
{
    /**
     * @var array Domain name list
     */
    public $DomainUrlList;

    /**
     * @var integer Domain type. 1: Allowed; 2: Blocked
     */
    public $DomainType;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @param array $DomainUrlList Domain name list
     * @param integer $DomainType Domain type. 1: Allowed; 2: Blocked
     * @param string $PlatformId Platform ID
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
        if (array_key_exists("DomainUrlList",$param) and $param["DomainUrlList"] !== null) {
            $this->DomainUrlList = $param["DomainUrlList"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }
    }
}
