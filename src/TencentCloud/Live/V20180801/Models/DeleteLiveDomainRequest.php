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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLiveDomain request structure.
 *
 * @method string getDomainName() Obtain Domain name to be deleted.
 * @method void setDomainName(string $DomainName) Set Domain name to be deleted.
 * @method integer getDomainType() Obtain Type. 0: push, 1: playback.
 * @method void setDomainType(integer $DomainType) Set Type. 0: push, 1: playback.
 */
class DeleteLiveDomainRequest extends AbstractModel
{
    /**
     * @var string Domain name to be deleted.
     */
    public $DomainName;

    /**
     * @var integer Type. 0: push, 1: playback.
     */
    public $DomainType;

    /**
     * @param string $DomainName Domain name to be deleted.
     * @param integer $DomainType Type. 0: push, 1: playback.
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
    }
}
