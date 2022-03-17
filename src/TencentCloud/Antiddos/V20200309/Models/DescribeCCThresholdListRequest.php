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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCCThresholdList request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service code. `bgp-multip` indicates Anti-DDos Pro.
 * @method void setBusiness(string $Business) Set Anti-DDoS service code. `bgp-multip` indicates Anti-DDos Pro.
 * @method integer getOffset() Obtain Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method void setOffset(integer $Offset) Set Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method integer getLimit() Obtain Number of results returned in one page
 * @method void setLimit(integer $Limit) Set Number of results returned in one page
 * @method string getInstanceId() Obtain ID of the specified instance
 * @method void setInstanceId(string $InstanceId) Set ID of the specified instance
 */
class DescribeCCThresholdListRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service code. `bgp-multip` indicates Anti-DDos Pro.
     */
    public $Business;

    /**
     * @var integer Starting offset of the page. Value: (number of pages – 1) * items per page.
     */
    public $Offset;

    /**
     * @var integer Number of results returned in one page
     */
    public $Limit;

    /**
     * @var string ID of the specified instance
     */
    public $InstanceId;

    /**
     * @param string $Business Anti-DDoS service code. `bgp-multip` indicates Anti-DDos Pro.
     * @param integer $Offset Starting offset of the page. Value: (number of pages – 1) * items per page.
     * @param integer $Limit Number of results returned in one page
     * @param string $InstanceId ID of the specified instance
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
