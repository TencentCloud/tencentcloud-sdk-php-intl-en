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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDomain request structure.
 *
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method integer getGroupId() Obtain The group ID of the domain. You can view the group information of this domain via the `DescribeDomainGroupList` API.
 * @method void setGroupId(integer $GroupId) Set The group ID of the domain. You can view the group information of this domain via the `DescribeDomainGroupList` API.
 * @method string getIsMark() Obtain Whether the domain is starred. Valid values: yes, no.
 * @method void setIsMark(string $IsMark) Set Whether the domain is starred. Valid values: yes, no.
 */
class CreateDomainRequest extends AbstractModel
{
    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var integer The group ID of the domain. You can view the group information of this domain via the `DescribeDomainGroupList` API.
     */
    public $GroupId;

    /**
     * @var string Whether the domain is starred. Valid values: yes, no.
     */
    public $IsMark;

    /**
     * @param string $Domain Domain
     * @param integer $GroupId The group ID of the domain. You can view the group information of this domain via the `DescribeDomainGroupList` API.
     * @param string $IsMark Whether the domain is starred. Valid values: yes, no.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("IsMark",$param) and $param["IsMark"] !== null) {
            $this->IsMark = $param["IsMark"];
        }
    }
}
