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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAttackHistogram request structure.
 *
 * @method string getDomain() Obtain Queried domain: use all for all domains
 * @method void setDomain(string $Domain) Set Queried domain: use all for all domains
 * @method string getStartTime() Obtain Query start time
 * @method void setStartTime(string $StartTime) Set Query start time
 * @method string getEndTime() Obtain Query end time
 * @method void setEndTime(string $EndTime) Set Query end time
 * @method string getQueryString() Obtain Lucene syntax.
 * @method void setQueryString(string $QueryString) Set Lucene syntax.
 */
class GetAttackHistogramRequest extends AbstractModel
{
    /**
     * @var string Queried domain: use all for all domains
     */
    public $Domain;

    /**
     * @var string Query start time
     */
    public $StartTime;

    /**
     * @var string Query end time
     */
    public $EndTime;

    /**
     * @var string Lucene syntax.
     */
    public $QueryString;

    /**
     * @param string $Domain Queried domain: use all for all domains
     * @param string $StartTime Query start time
     * @param string $EndTime Query end time
     * @param string $QueryString Lucene syntax.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = $param["QueryString"];
        }
    }
}
