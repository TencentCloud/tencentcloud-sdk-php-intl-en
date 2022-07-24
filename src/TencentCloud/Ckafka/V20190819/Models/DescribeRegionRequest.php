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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegion request structure.
 *
 * @method integer getOffset() Obtain The offset value
 * @method void setOffset(integer $Offset) Set The offset value
 * @method integer getLimit() Obtain The maximum number of results returned
 * @method void setLimit(integer $Limit) Set The maximum number of results returned
 * @method string getBusiness() Obtain Business field, which can be ignored.
 * @method void setBusiness(string $Business) Set Business field, which can be ignored.
 * @method string getCdcId() Obtain CDC business field, which can be ignored.
 * @method void setCdcId(string $CdcId) Set CDC business field, which can be ignored.
 */
class DescribeRegionRequest extends AbstractModel
{
    /**
     * @var integer The offset value
     */
    public $Offset;

    /**
     * @var integer The maximum number of results returned
     */
    public $Limit;

    /**
     * @var string Business field, which can be ignored.
     */
    public $Business;

    /**
     * @var string CDC business field, which can be ignored.
     */
    public $CdcId;

    /**
     * @param integer $Offset The offset value
     * @param integer $Limit The maximum number of results returned
     * @param string $Business Business field, which can be ignored.
     * @param string $CdcId CDC business field, which can be ignored.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
