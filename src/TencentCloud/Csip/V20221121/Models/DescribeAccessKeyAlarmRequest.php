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
 * DescribeAccessKeyAlarm request structure.
 *
 * @method Filter getFilter() Obtain Filter.
 * @method void setFilter(Filter $Filter) Set Filter.
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method integer getAccessKeyID() Obtain Access key ID.
 * @method void setAccessKeyID(integer $AccessKeyID) Set Access key ID.
 * @method integer getSourceIPID() Obtain ID of the source IP.
 * @method void setSourceIPID(integer $SourceIPID) Set ID of the source IP.
 * @method string getSubUin() Obtain Account UIN
 * @method void setSubUin(string $SubUin) Set Account UIN
 */
class DescribeAccessKeyAlarmRequest extends AbstractModel
{
    /**
     * @var Filter Filter.
     */
    public $Filter;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var integer Access key ID.
     */
    public $AccessKeyID;

    /**
     * @var integer ID of the source IP.
     */
    public $SourceIPID;

    /**
     * @var string Account UIN
     */
    public $SubUin;

    /**
     * @param Filter $Filter Filter.
     * @param array $MemberId Group Account Member ID
     * @param integer $AccessKeyID Access key ID.
     * @param integer $SourceIPID ID of the source IP.
     * @param string $SubUin Account UIN
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AccessKeyID",$param) and $param["AccessKeyID"] !== null) {
            $this->AccessKeyID = $param["AccessKeyID"];
        }

        if (array_key_exists("SourceIPID",$param) and $param["SourceIPID"] !== null) {
            $this->SourceIPID = $param["SourceIPID"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }
    }
}
