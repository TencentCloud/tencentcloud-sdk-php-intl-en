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
 * DescribeAIAgentCredentialLocationList request structure.
 *
 * @method integer getID() Obtain <p>Credential group row ID (comes from AIAgentCredentialItem.ID in the DescribeAIAgentCredentialList response)</p>
 * @method void setID(integer $ID) Set <p>Credential group row ID (comes from AIAgentCredentialItem.ID in the DescribeAIAgentCredentialList response)</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0</p>
 * @method integer getLimit() Obtain <p>Number of items per page. Default value: 10. Upper limit: 200.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page. Default value: 10. Upper limit: 200.</p>
 */
class DescribeAIAgentCredentialLocationListRequest extends AbstractModel
{
    /**
     * @var integer <p>Credential group row ID (comes from AIAgentCredentialItem.ID in the DescribeAIAgentCredentialList response)</p>
     */
    public $ID;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Offset. Default value: 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of items per page. Default value: 10. Upper limit: 200.</p>
     */
    public $Limit;

    /**
     * @param integer $ID <p>Credential group row ID (comes from AIAgentCredentialItem.ID in the DescribeAIAgentCredentialList response)</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $Offset <p>Offset. Default value: 0</p>
     * @param integer $Limit <p>Number of items per page. Default value: 10. Upper limit: 200.</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
