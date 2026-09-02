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
 * DescribeComplianceStandardTermTree request structure.
 *
 * @method integer getStandardID() Obtain <p>Compliance standard ID</p>
 * @method void setStandardID(integer $StandardID) Set <p>Compliance standard ID</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getContentFilter() Obtain <p>Content filtering scenario</p>
 * @method void setContentFilter(string $ContentFilter) Set <p>Content filtering scenario</p>
 */
class DescribeComplianceStandardTermTreeRequest extends AbstractModel
{
    /**
     * @var integer <p>Compliance standard ID</p>
     */
    public $StandardID;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Content filtering scenario</p>
     */
    public $ContentFilter;

    /**
     * @param integer $StandardID <p>Compliance standard ID</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $ContentFilter <p>Content filtering scenario</p>
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
        if (array_key_exists("StandardID",$param) and $param["StandardID"] !== null) {
            $this->StandardID = $param["StandardID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("ContentFilter",$param) and $param["ContentFilter"] !== null) {
            $this->ContentFilter = $param["ContentFilter"];
        }
    }
}
