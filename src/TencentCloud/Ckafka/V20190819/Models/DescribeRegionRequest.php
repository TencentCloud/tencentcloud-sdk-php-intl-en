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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegion request structure.
 *
 * @method integer getOffset() Obtain <p>Offset</p>
 * @method void setOffset(integer $Offset) Set <p>Offset</p>
 * @method integer getLimit() Obtain <p>Return the maximum number of results</p>
 * @method void setLimit(integer $Limit) Set <p>Return the maximum number of results</p>
 * @method string getBusiness() Obtain <p>Business field, can be ignored</p><p>Enumeration value:</p><ul><li>ckafka: CKafka business</li><li>cmq: CMQ business</li></ul><p>Default value: ckafka</p>
 * @method void setBusiness(string $Business) Set <p>Business field, can be ignored</p><p>Enumeration value:</p><ul><li>ckafka: CKafka business</li><li>cmq: CMQ business</li></ul><p>Default value: ckafka</p>
 * @method string getCdcId() Obtain <p>cdc dedicated cluster business field, can be ignored</p>
 * @method void setCdcId(string $CdcId) Set <p>cdc dedicated cluster business field, can be ignored</p>
 */
class DescribeRegionRequest extends AbstractModel
{
    /**
     * @var integer <p>Offset</p>
     */
    public $Offset;

    /**
     * @var integer <p>Return the maximum number of results</p>
     */
    public $Limit;

    /**
     * @var string <p>Business field, can be ignored</p><p>Enumeration value:</p><ul><li>ckafka: CKafka business</li><li>cmq: CMQ business</li></ul><p>Default value: ckafka</p>
     */
    public $Business;

    /**
     * @var string <p>cdc dedicated cluster business field, can be ignored</p>
     */
    public $CdcId;

    /**
     * @param integer $Offset <p>Offset</p>
     * @param integer $Limit <p>Return the maximum number of results</p>
     * @param string $Business <p>Business field, can be ignored</p><p>Enumeration value:</p><ul><li>ckafka: CKafka business</li><li>cmq: CMQ business</li></ul><p>Default value: ckafka</p>
     * @param string $CdcId <p>cdc dedicated cluster business field, can be ignored</p>
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
