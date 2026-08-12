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
 * DescribeVulFixedHostDetail request structure.
 *
 * @method integer getVulId() Obtain <p>Vulnerability ID</p>
 * @method void setVulId(integer $VulId) Set <p>Vulnerability ID</p>
 * @method string getInstanceId() Obtain <p>Host instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Host instance ID.</p>
 * @method integer getOffset() Obtain <p>Paging offset, used for associated component & path list pagination.<br>Value ranges from 0 to +∞.<br>Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset, used for associated component & path list pagination.<br>Value ranges from 0 to +∞.<br>Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of results per page, used for paginating associated components & path list<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method void setLimit(integer $Limit) Set <p>Number of results per page, used for paginating associated components & path list<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class DescribeVulFixedHostDetailRequest extends AbstractModel
{
    /**
     * @var integer <p>Vulnerability ID</p>
     */
    public $VulId;

    /**
     * @var string <p>Host instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Paging offset, used for associated component & path list pagination.<br>Value ranges from 0 to +∞.<br>Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of results per page, used for paginating associated components & path list<br>Value ranges from 1 to 100<br>Default value: 10</p>
     */
    public $Limit;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @param integer $VulId <p>Vulnerability ID</p>
     * @param string $InstanceId <p>Host instance ID.</p>
     * @param integer $Offset <p>Paging offset, used for associated component & path list pagination.<br>Value ranges from 0 to +∞.<br>Default value: 0.</p>
     * @param integer $Limit <p>Number of results per page, used for paginating associated components & path list<br>Value ranges from 1 to 100<br>Default value: 10</p>
     * @param array $MemberId Group Account Member ID
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
